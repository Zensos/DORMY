<x-layout>

    <div>
        <img class="bg-fixed object-cover w-[1920px] h-[923px]" src="/preview.jpeg" alt="preview">
    </div>
    <div class="relative flex flex-col min-h-dvh w-full max-w-[100rem] space-y-5 px-5" x-data="{ isShow: false }">
        <div class="self-center sm:self-start flex gap-2 h-16 mt-10 ">
            <div
                class="flex flex-shrink-0 items-center justify-between bg-[#F4F3F8] h-full px-2 w-2/3 sm:w-[500px] rounded-md">
                <input class="bg-[#F4F3F8] border-none focus:outline-none focus:ring-0 rounded-md" type="text"
                    placeholder="Search">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-search">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
            </div>
            <button @click="isShow = !isShow"
                class="w-fit h-full py-2 px-5 bg-black text-white rounded-md inline-flex items-center gap-2">
                Filter
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-sliders-horizontal">
                    <line x1="21" x2="14" y1="4" y2="4" />
                    <line x1="10" x2="3" y1="4" y2="4" />
                    <line x1="21" x2="12" y1="12" y2="12" />
                    <line x1="8" x2="3" y1="12" y2="12" />
                    <line x1="21" x2="16" y1="20" y2="20" />
                    <line x1="12" x2="3" y1="20" y2="20" />
                    <line x1="14" x2="14" y1="2" y2="6" />
                    <line x1="8" x2="8" y1="10" y2="14" />
                    <line x1="16" x2="16" y1="18" y2="22" />
                </svg>
            </button>
        </div>
        <h1 class="text-2xl sm:text-3xl font-bold text-start">Suggestion Dormitory KMITL</h1>
        <section x-transition class="flex w-full gap-10">
            <section class="w-full h-full space-y-5 mb-10">
                <div
                    class="self-start space-y-5 rounded-md max-h-[1700px] h-full bg-[#F4F3F8] p-4 sm:p-8 overflow-scroll">
                    @foreach ($dormitoryCategories as $dormitoryCategory)
                        <x-dormitory-category :id="$dormitoryCategory->id" :title="$dormitoryCategory->title" :description="$dormitoryCategory->description" />
                    @endforeach
                </div>

            </section>

            <section x-show="isShow" x-cloak x-transition
                class="absolute sm:static sm:h-[1700px] w-full sm:w-1/3 bg-[#F4F3F8] rounded-md p-5 bottom-0 right-0 left-0">
                KUY
            </section>
        </section>
    </div>
</x-layout>
