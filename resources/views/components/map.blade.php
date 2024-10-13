<div class="block w-full rounded-md drop-shadow-xl" id="map"></div>
<script>
    function createCustomMarker(lngLat) {
        const el = document.createElement("div");
        const block = document.createElement("div");
        block.className = "block_";
        el.className = "custom-marker";
        block.innerHTML = "🚏";
        el.appendChild(block);

        new maplibregl.Marker({
            element: el
        }).setLngLat(lngLat).addTo(map);
    }

    const MAPTILER_KEY = "siF1ECtbMjTT3M4ZhQqh";
    const map = new maplibregl.Map({
        style: `https://api.maptiler.com/maps/60d222f7-9ede-45a9-864a-c070f84ba224/style.json?key=${MAPTILER_KEY}`,
        center: [100.7762653436481, 13.728493565666584],
        zoom: 13.5,
        pitch: 10,
        bearing: -180.2,
        container: "map",
        antialias: true,
        maxZoom: 15,
        minZoom: 13.5,
        touchPitch: false,
        pitchWithRotate: false,
        pitchWithRotate: false,
        pitchWithRotate: false
    });

    map.on("load", () => {
        const layers = map.getStyle().layers;

        let labelLayerId;
        for (let i = 0; i < layers.length; i++) {
            if (layers[i].type === "symbol" && layers[i].layout["text-field"]) {
                labelLayerId = layers[i].id;
                break;
            }
        }

        map.addSource("openmaptiles", {
            url: `https://api.maptiler.com/tiles/v3/tiles.json?key=${MAPTILER_KEY}`,
            type: "vector",
        });

        map.addLayer({
                id: "3d-buildings",
                source: "openmaptiles",
                "source-layer": "building",
                type: "fill-extrusion",
                minZoom: 16,
                maxZoom: 17,
                filter: ["!=", ["get", "hide_3d"], true],
                paint: {
                    "fill-extrusion-color": [
                        "interpolate",
                        ["linear"],
                        ["get", "render_height"],
                        60,
                        "#ffffff",
                    ],
                    "fill-extrusion-height": [
                        "interpolate",
                        ["linear"],
                        ["zoom"],
                        15,
                        14,
                        16,
                        ["get", "render_height"],
                    ],
                    "fill-extrusion-base": ["get", "render_min_height"],
                    "fill-extrusion-opacity": 0.55,
                },
            },
            labelLayerId
        );

        const busStop = [100.78111048274678, 13.731002959069784];
        const destination = [100.76436663387764, 13.724574540870687];
        createCustomMarker(busStop);
        createCustomMarker(destination);

        fetch(
                `https://router.project-osrm.org/route/v1/driving/${busStop.join(
            ","
          )};${destination.join(",")}?overview=full&geometries=geojson`
            )
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                const route = data.routes[0].geometry;

                map.addSource("route", {
                    type: "geojson",
                    data: {
                        type: "Feature",
                        geometry: route,
                    },
                });

                map.addLayer({
                    id: "route-line",
                    type: "line",
                    source: "route",
                    layout: {
                        "line-join": "round",
                        "line-cap": "round",
                    },
                    paint: {
                        "line-color": "#007cbf",
                        "line-width": 8,
                    },
                });

                const midpoint = turf.midpoint(busStop, destination).geometry
                    .coordinates;
                new maplibregl.Popup()
                    .setLngLat(midpoint)
                    .setHTML(
                        `<h3>${(data.routes[0].distance / 1000).toFixed(2)} km</h3>`
                    )
                    .addTo(map);
            });
    });
    Array.from(document.getElementsByTagName("details")).forEach(details => details.remove());
</script>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    html,
    body,
    {
    height: 100%;
    }

    #map {
        display: flex;
        height: 100%;
        width: 100%;
    }

    @media (max-width: 768px) {
        #map {
            height: 40vh;
        }
    }

    #map .custom-marker {
        width: 2px;
        height: 20px;
        background-color: #d61919;
        position: relative;
        text-align: center;
        color: rgb(255, 255, 255);
    }

    .custom-marker>.block_ {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
        width: 55px;
        height: 70px;
        background-color: rgba(0, 0, 0, 0.674);
        border-radius: 100%;
        position: absolute;
        border: 2px solid #1a1a1a;
        top: -70px;
        left: 0;
        transform: translateX(-50%);
    }

    .custom-marker::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 10px;
        height: 10px;
        background-color: #d61919;
        border-radius: 50%;
        box-shadow: 0 0 0 4px rgba(0, 155, 255, 0.2);
    }
</style>
