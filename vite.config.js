import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// const host = "jhfm6hwd-8000.asse.devtunnels.ms";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
