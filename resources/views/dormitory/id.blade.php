<x-layout>
    <div class="relative flex flex-col min-h-screen items-center justify-center max-w-[100rem] w-full h-full  space-y-5 px-5 mt-32"
        x-data="{ isShow: false }">
        <section class="w-full h-96 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-black/20 rounded-md"></div>
            <div class="grid grid-cols-2 gap-2">
                <div class="bg-black/20 rounded-md"></div>
                <div class="bg-black/20 rounded-md"></div>
                <div class="bg-black/20 rounded-md"></div>
                <div class="flex items-center justify-center bg-black/50 rounded-md">
                    <p class="text-3xl text-white">8+</p>
                </div>
            </div>
        </section>
        <section class="w-full flex flex-col md:flex-row gap-5">
            <section class="flex flex-col space-y-5 w-full md:w-3/4">
                <div class="flex flex-wrap justify-between gap-2">
                    <div>
                        <h3 class="font-semibold">
                            {{ \Illuminate\Support\Str::limit($dormitoryCategory->title, 23, '...') }}
                        </h3>

                        <p class="inline-flex gap-1 items-center justify-center">
                            <svg class="text-orange-400" xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                                <path d=" M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4
                            14.993 4 10a8 8 0 0 1 16 0" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            Location : เกกี4, ลาดกระบัง
                        </p>
                    </div>
                    <div class="flex justify-center gap-4 sm:w-1/2">
                        <div class="text-xs  text-black/50">
                            <p>viewer : 1,000,000 view</p>
                            <p>update : 3-10-67</p>
                        </div>
                        <div>
                            <div
                                class="flex items-center justify-center bottom-5 right-5 w-10 h-10 rounded-full bg-white text-pink-400 drop-shadow-xl ring-1 ring-black/30">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart">
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                    <div class="badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-door-open">
                            <path d="M13 4h3a2 2 0 0 1 2 2v14" />
                            <path d="M2 20h3" />
                            <path d="M13 20h9" />
                            <path d="M10 12v.01" />
                            <path
                                d="M13 4.562v16.157a1 1 0 0 1-1.242.97L5 20V5.562a2 2 0 0 1 1.515-1.94l4-1A2 2 0 0 1 13 4.561Z" />
                        </svg>
                        <p>ห้องว่าง 16 ข่อง</p>
                    </div>
                    <div class="badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-door-open">
                            <path d="M13 4h3a2 2 0 0 1 2 2v14" />
                            <path d="M2 20h3" />
                            <path d="M13 20h9" />
                            <path d="M10 12v.01" />
                            <path
                                d="M13 4.562v16.157a1 1 0 0 1-1.242.97L5 20V5.562a2 2 0 0 1 1.515-1.94l4-1A2 2 0 0 1 13 4.561Z" />
                        </svg>
                        <p>2 ห้องนอน</p>
                    </div>

                    <div class="badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-door-open">
                            <path d="M13 4h3a2 2 0 0 1 2 2v14" />
                            <path d="M2 20h3" />
                            <path d="M13 20h9" />
                            <path d="M10 12v.01" />
                            <path
                                d="M13 4.562v16.157a1 1 0 0 1-1.242.97L5 20V5.562a2 2 0 0 1 1.515-1.94l4-1A2 2 0 0 1 13 4.561Z" />
                        </svg>
                        <p>2 ห้องน้ำ</p>
                    </div>
                    <div class="badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-door-open">
                            <path d="M13 4h3a2 2 0 0 1 2 2v14" />
                            <path d="M2 20h3" />
                            <path d="M13 20h9" />
                            <path d="M10 12v.01" />
                            <path
                                d="M13 4.562v16.157a1 1 0 0 1-1.242.97L5 20V5.562a2 2 0 0 1 1.515-1.94l4-1A2 2 0 0 1 13 4.561Z" />
                        </svg>
                        <p>25 ตร.ม</p>
                    </div>
                </div>

                <div class="space-y-2">
                    <h3>
                        ข้อมูลอธิบายเพิ่มเติม
                    </h3>
                    <div class="bg-gray_ rounded-md p-5">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam unde asperiores saepe vitae
                        nemo
                        eius molestiae! Blanditiis, cupiditate corrupti dolor perspiciatis error eius, officiis ad sint
                        beatae tempora, recusandae magni?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim error, tempora totam nihil porro
                        sint
                        architecto illo. Laboriosam veritatis ipsam impedit voluptatum repudiandae cum ab odit, natus
                        repellendus illo earum!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum reprehenderit amet nemo. Minus
                        rerum
                        necessitatibus maxime consectetur dolorem minima itaque quasi ab sapiente facilis cupiditate
                        perferendis, esse quas autem ex.
                    </div>
                </div>

                <div>
                    <h3>ประเภทห้องพัก</h3>
                    <table>
                        <tr>
                            <th>ประเภท</th>
                            <th>ขนาด</th>
                            <th>ค่าเช่ารายเดือน</th>
                            <th>ค่าเช่ารายวัน</th>
                            <th>สถานะการจอง</th>
                            <th>จำนวนห้องว่าง</th>
                        </tr>
                        <tr>
                            <td>เตียงเดี่ยว</td>
                            <td>22 ตร.ม</td>
                            <td>3000 ฿</td>
                            <td>500 ฿</td>
                            <td>ว่าง</td>
                            <td>2 ห้อง</td>
                        </tr>
                        <tr>
                            <td>เตียงเดี่ยว</td>
                            <td>22 ตร.ม</td>
                            <td>3000 ฿</td>
                            <td>500 ฿</td>
                            <td>ว่าง</td>
                            <td>1 ห้อง</td>
                        </tr>
                        <tr>
                            <td>เตียงเดี่ยว</td>
                            <td>22 ตร.ม</td>
                            <td>3000 ฿</td>
                            <td>500 ฿</td>
                            <td>ไม่ว่าง</td>
                            <td>0 ห้อง</td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class="flex flex-col space-y-5 w-full md:w-1/4">
                <div class="space-y-1 p-3 ring-1 ring-gray-200 rounded-md">
                    <div>
                        <h3 class="text-lg">ราคาค่าเช่าเริ่มต้น ( รายเดือน ) </h3>
                        <p class="text-2xl text-blue-600">7000 - 6000 ฿</p>
                    </div>
                    <x-separator></x-separator>
                    <div class="grid grid-cols-2 gap-3 text-sm ">
                        <div>
                            <p>รายวัน</p>
                            <p class="text-blue-500">500 - 800 ฿</p>
                        </div>
                        <div>
                            <p>ค่าอินเตอร์เน็ต</p>
                            <p class="text-blue-500">ฟรี</p>
                        </div>

                        <div>
                            <p>ค่าไฟ</p>
                            <p class="text-blue-500">8 บาท / ยูนิต</p>
                        </div>
                        <div>
                            <p>ค่าน้ำ</p>
                            <p class="text-blue-500">ขั้นต่ำ 150 บาท</p>
                        </div>

                    </div>
                    <x-separator></x-separator>
                    <div>
                        <div class="space-y-1 w-full">
                            <button class="px-2 py-1 bg-blue-500 text-white rounded-md w-full">
                                tel : 065-xxx-xxxx
                            </button>
                            <button class="px-2 py-1 bg-blue-500 text-white rounded-md w-full">
                                สอบถามข้อมูลเพิ่มเติม
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full">
                    <x-map></x-map>
                </div>
            </section>
        </section>
        <section class="w-full">
            <h3>สิ่งอำนวยความสะดวก</h3>
            <div class="grid grid-cols-3 p-10 bg-gray_ rounded-md">
                <div class="flex flex-col gap-4">
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                    <p class="iconic iconic-disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-air-vent">
                            <path d="M6 12H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                            <path d="M6 8h12" />
                            <path d="M18.3 17.7a2.5 2.5 0 0 1-3.16 3.83 2.53 2.53 0 0 1-1.14-2V12" />
                            <path d="M6.6 15.6A2 2 0 1 0 10 17v-5" />
                        </svg>
                        เครื่องปรับอากาศ
                    </p>
                </div>
            </div>
        </section>
    </div>
    <section
        class="sticky flex items-center justify-center bottom-0 w-full bg-white/80 backdrop-blur-sm p-5 border-t border-b border-gray-200 mt-5">
        <div class="flex  md:flex-row items-center justify-around gap-10 max-w-3xl w-full">
            <div class="flex gap-4 items-center ">
                <img class="hidden sm:block w-24 h-24 rounded-xl" src="/room.jpeg" alt="room">
                <div>
                    <h3 class="font-semibold">
                        {{ \Illuminate\Support\Str::limit($dormitoryCategory->title, 23, '...') }}
                    </h3>

                    <div>
                        <div class="flex items-center justify-start">
                            <svg class="fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f9d210"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg class="fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f9d210"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg class="fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f9d210"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#f9d210" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#f9d210" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                        </div>
                        <p class="text-xs text-black/40">(91 review)</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-2">
                <a href="tel:0842585799"
                    class="w-full text-center px-5 py-2 bg-blue-500 text-white rounded-md">จองเลย!</a>
                <a href="tel:0842585799" class="w-full text-center px-5 py-2 bg-green-500 text-white rounded-md">
                    @LINE
                </a>
            </div>

        </div>
    </section>

    <section class="flex flex-col bg-gray_ w-full h-full max-w-[100rem] py-10 px-5 md:px-14 space-y-5">
        <div class="flex justify-between">
            <h3 class="font-semibold text-2xl">รีวิวจากผู้เข้าพัก</h3>
            <p>See all</p>
        </div>
        <div class="flex flex-col gap-4 mt-5 bg-white p-5 rounded-md shadow-md">
            <h4 class="text-lg font-semibold">เขียนรีวิวของคุณเอง</h4>

            <textarea id="comment"
                class="w-full h-28 p-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none resize-none"
                placeholder="Write your comment here..."></textarea>

            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <img class="w-10 h-10 rounded-full" src="/user.png" alt="user">
                    @if (Auth::check())
                        <span class="font-semibold">
                            {{ Auth::user()->name }}
                        </span>
                    @else
                        <span class="font-semibold">

                            Guest
                        </span>
                    @endif
                </div>

                <button
                    class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none transition">
                    Comment
                </button>
            </div>
        </div>

        <x-review></x-review>
        <x-review></x-review>
        <x-review></x-review>

    </section>
</x-layout>
