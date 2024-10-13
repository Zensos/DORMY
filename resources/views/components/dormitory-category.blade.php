@props(['id', 'title'])

<div class="flex flex-col md:flex-row rounded-md bg-white p-5 gap-7 drop-shadow-lg">
    <div class="relative self-center flex-shrink-0">
        <div
            class="absolute flex items-center justify-center bottom-2 right-2 sm:bottom-5 sm:right-5 w-10 h-10 rounded-full bg-white text-pink-400 drop-shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-heart">
                <path
                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
            </svg>
        </div>
        <img class="w-[150px] h-[150px] sm:w-[200px] sm:h-[200px] md:w-[300px] md:h-[300px] rounded-xl" src="/room.jpeg"
            alt="room">
    </div>
    <div class="space-y-3 p-2 flex-1 self-center">
        <div class="flex flex-wrap justify-between">
            <h2 class="text-xl sm:text-2xl font-semibold">
                {{ \Illuminate\Support\Str::limit($title, 23, '...') }}</h2>
            <p class="bg-orange-400 text-white font-bold p-2 rounded-md w-fit text-xs">recommend</p>
        </div>
        <p class="text-black/60">
            Well-placed in the restaurants, business, shopping area of Bangkok city, Baan Mi-Na provides a most
            conducive spot for you to take a break from your busy days. The excitement of the
        </p>
        <p class="text-black/60">rental rate : <span class="text-black">5000 - 7000 ฿</span></p>
        <div class="flex gap-2 text-black/60 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-map-pin">
                <path
                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                <circle cx="12" cy="10" r="3" />
            </svg>
            <p>Location : เกกี4, ลาดกระบัง</p>
        </div>

        <div class="flex gap-2 text-black/60 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-sofa">
                <path d="M20 9V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v3" />
                <path
                    d="M2 16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                <path d="M4 18v2" />
                <path d="M20 18v2" />
                <path d="M12 4v9" />
            </svg>
            <p>4 room type</p>
        </div>


        <a href="/dormitory/{{ $id }}"
            class="w-full py-2 px-5 bg-black text-white rounded-md flex justify-center items-center gap-2 hover:bg-black/80">
            See More
        </a>
    </div>
</div>
