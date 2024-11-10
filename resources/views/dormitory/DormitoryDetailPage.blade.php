<x-layout>
    <div class="relative flex flex-col min-h-screen items-center justify-center max-w-[100rem] w-full h-full  space-y-5 px-5 mt-32"
        x-data="{ isShow: false }">
        <section class="w-full h-fit grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="overflow-hidden h-[calc(380px+0.5rem)]">
                <img src="/bedpreview.jpeg" data-fancybox="gallery" class="rounded-md w-full h-full object-cover"
                    alt="Bed Preview">
            </div>
            <div class="grid grid-cols-2 gap-2">
                <div class="overflow-hidden h-[190px]">
                    <img src="/dormpreview.jpeg" data-fancybox="gallery" class="rounded-md w-full h-full object-cover"
                        alt="Dorm Preview">
                </div>
                <div class="overflow-hidden h-[190px]">
                    <img src="/dormpreview.jpeg" data-fancybox="gallery" class="rounded-md w-full h-full object-cover"
                        alt="Dorm Preview">
                </div>
                <div class="overflow-hidden h-[190px]">
                    <img src="/dormpreview.jpeg" data-fancybox="gallery" class="rounded-md w-full h-full object-cover"
                        alt="Dorm Preview">
                </div>
                <div class="flex items-center justify-center bg-black/50 rounded-md w-full h-[190px] overflow-hidden">
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
                            stroke-linejoin="round" class="lucide lucide-bed-double">
                            <path d="M2 20v-8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8" />
                            <path d="M4 10V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4" />
                            <path d="M12 4v6" />
                            <path d="M2 18h20" />
                        </svg>
                        <p>2 ห้องนอน</p>
                    </div>

                    <div class="badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-bath">
                            <path
                                d="M9 6 6.5 3.5a1.5 1.5 0 0 0-1-.5C4.683 3 4 3.683 4 4.5V17a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5" />
                            <line x1="10" x2="8" y1="5" y2="7" />
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="7" x2="7" y1="19" y2="21" />
                            <line x1="17" x2="17" y1="19" y2="21" />
                        </svg>
                        <p>2 ห้องน้ำ</p>
                    </div>
                    <div class="badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-expand">
                            <path d="m21 21-6-6m6 6v-4.8m0 4.8h-4.8" />
                            <path d="M3 16.2V21m0 0h4.8M3 21l6-6" />
                            <path d="M21 7.8V3m0 0h-4.8M21 3l-6 6" />
                            <path d="M3 7.8V3m0 0h4.8M3 3l6 6" />
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
            <div class="grid grid-cols-3 p-10 place-items-center bg-gray_ rounded-md">
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
                            stroke-linejoin="round" class="lucide lucide-fan">
                            <path
                                d="M10.827 16.379a6.082 6.082 0 0 1-8.618-7.002l5.412 1.45a6.082 6.082 0 0 1 7.002-8.618l-1.45 5.412a6.082 6.082 0 0 1 8.618 7.002l-5.412-1.45a6.082 6.082 0 0 1-7.002 8.618l1.45-5.412Z" />
                            <path d="M12 12v.01" />
                        </svg>
                        พัดลม
                    </p>
                    <p class="iconic iconic-disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-refrigerator">
                            <path d="M5 6a4 4 0 0 1 4-4h6a4 4 0 0 1 4 4v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6Z" />
                            <path d="M5 10h14" />
                            <path d="M15 7v6" />
                        </svg>
                        ตู้เย็น
                    </p>
                    <p class="iconic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-armchair">
                            <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                            <path
                                d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                            <path d="M5 18v2" />
                            <path d="M19 18v2" />
                        </svg>
                        เฟอร์นิเจอร์
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="iconic">

                        <svg width="24" height="24" viewBox="0 0 30 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 3C8.6125 3 7.5 4.1125 7.5 5.5V20.5C7.5 21.8875 8.6125 23 10 23H11.25V25.5H7.5V28H11.25C12.6375 28 13.75 26.8875 13.75 25.5V23H16.25V25.5C16.25 26.8875 17.3625 28 18.75 28H22.5V25.5H18.75V23H20C21.3875 23 22.5 21.8875 22.5 20.5V5.5C22.5 4.1125 21.3875 3 20 3H10ZM15 6.7125C15.663 6.7125 16.2989 6.97589 16.7678 7.44473C17.2366 7.91357 17.5 8.54946 17.5 9.2125C17.5 9.87554 17.2366 10.5114 16.7678 10.9803C16.2989 11.4491 15.663 11.7125 15 11.7125C14.337 11.7125 13.7011 11.4491 13.2322 10.9803C12.7634 10.5114 12.5 9.87554 12.5 9.2125C12.5 8.54946 12.7634 7.91357 13.2322 7.44473C13.7011 6.97589 14.337 6.7125 15 6.7125ZM12.5 18.625H17.5V20.5H12.5V18.625Z"
                                fill="#808080" />
                        </svg>

                        เครื่องทำน้ำอุ่น
                    </p>
                    <p class="iconic iconic-disabled">

                        <svg width="24" height="24" viewBox="0 0 30 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 21.75C14.125 21.75 13.3854 21.4479 12.7812 20.8438C12.1771 20.2396 11.875 19.5 11.875 18.625C11.875 17.75 12.1771 17.0104 12.7812 16.4062C13.3854 15.8021 14.125 15.5 15 15.5C15.875 15.5 16.6146 15.8021 17.2188 16.4062C17.8229 17.0104 18.125 17.75 18.125 18.625C18.125 19.5 17.8229 20.2396 17.2188 20.8438C16.6146 21.4479 15.875 21.75 15 21.75ZM7.9375 14.6875L5.3125 12C6.54167 10.7708 7.98458 9.79708 9.64125 9.07875C11.2979 8.36042 13.0842 8.00083 15 8C16.9158 7.99917 18.7025 8.36375 20.36 9.09375C22.0175 9.82375 23.46 10.8133 24.6875 12.0625L22.0625 14.6875C21.1458 13.7708 20.0833 13.0521 18.875 12.5312C17.6667 12.0104 16.375 11.75 15 11.75C13.625 11.75 12.3333 12.0104 11.125 12.5312C9.91667 13.0521 8.85417 13.7708 7.9375 14.6875ZM2.625 9.375L0 6.75C1.91667 4.79167 4.15625 3.26042 6.71875 2.15625C9.28125 1.05208 12.0417 0.5 15 0.5C17.9583 0.5 20.7188 1.05208 23.2812 2.15625C25.8438 3.26042 28.0833 4.79167 30 6.75L27.375 9.375C25.7708 7.77083 23.9117 6.51583 21.7975 5.61C19.6833 4.70417 17.4175 4.25083 15 4.25C12.5825 4.24917 10.3171 4.7025 8.20375 5.61C6.09042 6.5175 4.23083 7.7725 2.625 9.375Z"
                                fill="#A7A7A7" />
                        </svg>

                        อินเตอร์เน็ต
                    </p>
                    <p class="iconic">

                        <svg width="24" height="24" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_139_1217)">
                                <path
                                    d="M2.25176 6.24222C1.87489 7.10833 1.87489 8.27061 1.87489 10.5977V14.3645C2.27801 14.3309 2.73176 14.3309 3.2202 14.3309H9.90459C10.3921 14.3309 10.8468 14.3309 11.2499 14.3645V10.5977C11.2499 8.27061 11.2499 7.10833 10.873 6.24222C10.6262 5.67475 10.2712 5.20351 9.84365 4.87586C9.19115 4.37561 8.31553 4.37561 6.5624 4.37561C4.80927 4.37561 3.93364 4.37561 3.28114 4.87586C2.85362 5.20351 2.4986 5.67475 2.25176 6.24222ZM1.17176 20.5417C0.701134 20.5168 0.416133 20.4322 0.221133 20.1497C-0.0573054 19.7466 -0.0207427 19.1866 0.0523825 18.0654C0.103945 17.2565 0.22207 16.7114 0.490196 16.3045C0.970197 15.5753 1.74176 15.5753 3.28583 15.5753H9.83897C11.383 15.5753 12.1546 15.5753 12.6346 16.3045C12.9027 16.7102 13.0208 17.2552 13.0733 18.0654C13.1455 19.1853 13.1821 19.7466 12.9037 20.1497C12.7087 20.4322 12.4237 20.5168 11.953 20.5417V26.775C11.953 27.0225 11.879 27.2599 11.7471 27.4349C11.6152 27.61 11.4364 27.7083 11.2499 27.7083C11.0634 27.7083 10.8846 27.61 10.7527 27.4349C10.6209 27.2599 10.5468 27.0225 10.5468 26.775V20.5529H2.57801V26.775C2.57801 27.0225 2.50393 27.2599 2.37207 27.4349C2.24021 27.61 2.06137 27.7083 1.87489 27.7083C1.68841 27.7083 1.50956 27.61 1.3777 27.4349C1.24584 27.2599 1.17176 27.0225 1.17176 26.775V20.5417Z"
                                    fill="#808080" />
                            </g>
                            <path
                                d="M14.8767 15.8503V17.6447H33.2483V15.8503H14.8767ZM16.543 18.7214V28.1757H17.9102V18.7214H16.543ZM30.2148 18.7214V28.1757H31.582V18.7214H30.2148Z"
                                fill="#808080" />
                            <defs>
                                <clipPath id="clip0_139_1217">
                                    <rect width="27.0968" height="29.9992" fill="white"
                                        transform="translate(0 5.00085)" />
                                </clipPath>
                            </defs>
                        </svg>

                        โต๊ะ - เก้าอี้
                    </p>
                    <p class="iconic iconic-disabled">

                        <svg width="24" height="24" viewBox="0 0 30 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_139_1224)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5092 7.16005C17.8951 6.38777 18.4884 5.73818 19.2226 5.28402C19.9569 4.82986 20.803 4.58907 21.6664 4.58862H23.2371C23.3791 4.58862 23.5154 4.64506 23.6159 4.74553C23.7163 4.846 23.7728 4.98226 23.7728 5.12434V9.88148L29.5756 11.8143C29.6819 11.8502 29.7742 11.9185 29.8395 12.0096C29.9049 12.1007 29.94 12.2101 29.9399 12.3222V14.3793C29.9388 15.6111 29.449 16.7921 28.578 17.6631C27.707 18.5341 26.526 19.0239 25.2942 19.0251H21.7156V19.0293C19.5214 18.5643 17.8928 17.3279 16.7142 15.8708C15.9115 14.8673 15.2723 13.7435 14.8199 12.5408L17.5092 7.16005ZM12.0792 12.8151H8.64635C6.90021 12.8128 5.20648 12.2183 3.84207 11.1286L0.955639 8.81862C0.876725 8.75561 0.781606 8.71618 0.681252 8.70489C0.580897 8.6936 0.479395 8.7109 0.38845 8.7548C0.297506 8.79871 0.220823 8.86742 0.167246 8.95303C0.113668 9.03863 0.0853787 9.13764 0.0856391 9.23862V26.7136C0.0689206 27.1994 0.150162 27.6836 0.324521 28.1373C0.49888 28.591 0.762788 29.0049 1.10052 29.3545C1.43825 29.7041 1.8429 29.982 2.29034 30.1719C2.73778 30.3618 3.21887 30.4596 3.70492 30.4596C4.19098 30.4596 4.67207 30.3618 5.11951 30.1719C5.56695 29.982 5.9716 29.7041 6.30933 29.3545C6.64706 29.0049 6.91097 28.591 7.08533 28.1373C7.25969 27.6836 7.34093 27.1994 7.32421 26.7136V25.6851C7.32478 25.2819 7.48532 24.8955 7.77058 24.6106C8.05584 24.3258 8.4425 24.1658 8.84564 24.1658H12.9578C13.1576 24.1658 13.3554 24.2051 13.54 24.2816C13.7246 24.358 13.8923 24.4701 14.0336 24.6114C14.1749 24.7527 14.2869 24.9204 14.3634 25.105C14.4399 25.2896 14.4792 25.4874 14.4792 25.6872V26.7158C14.4625 27.2015 14.5437 27.6857 14.7181 28.1394C14.8925 28.5931 15.1564 29.0071 15.4941 29.3566C15.8318 29.7062 16.2365 29.9842 16.6839 30.174C17.1314 30.3639 17.6124 30.4618 18.0985 30.4618C18.5846 30.4618 19.0656 30.3639 19.5131 30.174C19.9605 29.9842 20.3652 29.7062 20.7029 29.3566C21.0406 29.0071 21.3045 28.5931 21.4789 28.1394C21.6533 27.6857 21.7345 27.2015 21.7178 26.7158V21.7508C18.5249 21.2386 16.2106 19.5008 14.6314 17.5551C13.4983 16.1437 12.634 14.5364 12.0814 12.8129L12.0792 12.8151Z"
                                    fill="#808080" />
                            </g>
                            <defs>
                                <clipPath id="clip0_139_1224">
                                    <rect width="30" height="30" fill="white"
                                        transform="translate(0 0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                        สัตว์เลี้ยง
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="iconic iconic-disabled">

                        <svg width="24" height="24" viewBox="0 0 30 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25 19.27H18.75V19.2538C18.748 18.5986 18.4869 17.9709 18.0236 17.5076C17.5604 17.0444 16.9326 16.7832 16.2775 16.7813H16.2338L21.055 3.79002L18.89 2.98627L13.7712 16.7813H13.7225C13.0674 16.7832 12.4396 17.0444 11.9764 17.5076C11.5131 17.9709 11.252 18.5986 11.25 19.2538V19.27H5V21.77H25V19.27ZM25 23.0225H5L2.5 28H27.5L25 23.0225Z"
                                fill="#808080" />
                        </svg>

                        บริการทำความสะอาด
                    </p>
                    <p class="iconic">

                        <svg width="24" height="24" viewBox="0 0 30 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5375 14.4625C19.4733 15.402 19.9988 16.674 19.9988 18C19.9988 19.326 19.4733 20.598 18.5375 21.5375C17.598 22.4733 16.326 22.9988 15 22.9988C13.674 22.9988 12.402 22.4733 11.4625 21.5375L18.5375 14.4625ZM7.5 3H22.5C23.163 3 23.7989 3.26339 24.2678 3.73223C24.7366 4.20107 25 4.83696 25 5.5V25.5C25 26.163 24.7366 26.7989 24.2678 27.2678C23.7989 27.7366 23.163 28 22.5 28H7.5C6.83696 28 6.20107 27.7366 5.73223 27.2678C5.26339 26.7989 5 26.163 5 25.5V5.5C5 4.83696 5.26339 4.20107 5.73223 3.73223C6.20107 3.26339 6.83696 3 7.5 3ZM8.75 5.5C8.41848 5.5 8.10054 5.6317 7.86612 5.86612C7.6317 6.10054 7.5 6.41848 7.5 6.75C7.5 7.08152 7.6317 7.39946 7.86612 7.63388C8.10054 7.8683 8.41848 8 8.75 8C9.08152 8 9.39946 7.8683 9.63388 7.63388C9.8683 7.39946 10 7.08152 10 6.75C10 6.41848 9.8683 6.10054 9.63388 5.86612C9.39946 5.6317 9.08152 5.5 8.75 5.5ZM12.5 5.5C12.1685 5.5 11.8505 5.6317 11.6161 5.86612C11.3817 6.10054 11.25 6.41848 11.25 6.75C11.25 7.08152 11.3817 7.39946 11.6161 7.63388C11.8505 7.8683 12.1685 8 12.5 8C12.8315 8 13.1495 7.8683 13.3839 7.63388C13.6183 7.39946 13.75 7.08152 13.75 6.75C13.75 6.41848 13.6183 6.10054 13.3839 5.86612C13.1495 5.6317 12.8315 5.5 12.5 5.5ZM15 10.5C13.0109 10.5 11.1032 11.2902 9.6967 12.6967C8.29018 14.1032 7.5 16.0109 7.5 18C7.5 19.9891 8.29018 21.8968 9.6967 23.3033C11.1032 24.7098 13.0109 25.5 15 25.5C16.9891 25.5 18.8968 24.7098 20.3033 23.3033C21.7098 21.8968 22.5 19.9891 22.5 18C22.5 16.0109 21.7098 14.1032 20.3033 12.6967C18.8968 11.2902 16.9891 10.5 15 10.5Z"
                                fill="#808080" />
                        </svg>

                        เครื่องซักผ้า - เครื่องอบผ้า
                    </p>
                    <p class="iconic iconic-disabled">
                        <svg width="24" height="24" viewBox="0 0 30 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 3C21.9037 3 27.5 8.59625 27.5 15.5C27.5 22.4037 21.9037 28 15 28C8.09625 28 2.5 22.4037 2.5 15.5C2.5 8.59625 8.09625 3 15 3ZM16.875 9.25H13.75C13.087 9.25 12.4511 9.51339 11.9822 9.98223C11.5134 10.4511 11.25 11.087 11.25 11.75V20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75C12.8315 21.75 13.1495 21.6183 13.3839 21.3839C13.6183 21.1495 13.75 20.8315 13.75 20.5V18H16.875C18.0353 18 19.1481 17.5391 19.9686 16.7186C20.7891 15.8981 21.25 14.7853 21.25 13.625C21.25 12.4647 20.7891 11.3519 19.9686 10.5314C19.1481 9.71094 18.0353 9.25 16.875 9.25ZM16.875 11.75C17.3723 11.75 17.8492 11.9475 18.2008 12.2992C18.5525 12.6508 18.75 13.1277 18.75 13.625C18.75 14.1223 18.5525 14.5992 18.2008 14.9508C17.8492 15.3025 17.3723 15.5 16.875 15.5H13.75V11.75H16.875Z"
                                fill="#808080" />
                        </svg>
                        ที่จอดรถ
                    </p>
                    <p class="iconic">
                        <svg width="24" height="24" viewBox="0 0 30 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.2714 1.54822H19.166C18.6855 1.56404 18.0761 1.72283 17.3027 2.05154L3.49273 7.90623C2.25171 8.42771 1.63004 8.94333 1.39859 9.51755C1.16714 10.0859 1.25738 10.8886 1.78355 12.1308L4.71031 19.0332C5.23589 20.2754 5.74859 20.8965 6.32222 21.125C6.89058 21.3594 7.69332 21.2715 8.9355 20.7441L22.7461 14.8906C23.5371 14.5566 24.0761 14.2285 24.4218 13.8828C24.6855 14.2051 24.9316 14.5625 25.1367 14.9492C25.3593 15.3594 25.5351 15.7929 25.6582 16.2265C25.5117 16.209 25.3593 16.2031 25.207 16.2031C24.3808 16.2207 23.5605 16.5371 22.9101 17.1523C21.7031 18.3008 21.4921 20.1054 22.3183 21.4765L19.3769 24.2715L18.0878 23.9258L18.1347 25.4551L16.5293 25.4082L16.3769 27.1308L14.9882 26.873L15.2578 28.1914L14.2617 29.4511L17.9414 28.8125L24.0878 22.9531C25.2714 23.3926 26.6484 23.1523 27.6328 22.2148C29.0214 20.8965 29.0918 18.7051 27.7793 17.2988C27.4921 16.9941 27.1699 16.7539 26.8183 16.5781C26.6953 15.8457 26.4257 15.1191 26.0683 14.4511C25.7519 13.8652 25.3711 13.3203 24.9433 12.8691C25.0078 12.3359 24.8613 11.6328 24.4511 10.666L21.5273 3.76189C21.0058 2.52146 20.4902 1.89978 19.916 1.66775C19.7285 1.59158 19.5175 1.55056 19.2714 1.54822ZM18.3574 4.53416L18.7675 5.50564L10.998 8.79685L10.5878 7.82419L18.3574 4.53416ZM19.2304 6.77537L19.6406 7.74802L15.3222 9.57615L14.9121 8.60349L19.2304 6.77537ZM8.11519 7.85349L12.1875 17.457L6.89644 19.6953L3.0357 10.5781L2.83004 10.0918L8.11519 7.85349ZM20.1855 8.84959L20.5957 9.82224L15.416 12.0136L15.0058 11.041L20.1855 8.84959ZM7.55269 9.2363L4.21285 10.6543L7.45894 18.3125L10.8046 16.8945L7.55269 9.2363ZM22.5351 10.7011C23.3027 10.7011 23.9355 11.3047 23.9941 12.0547C23.4726 11.7031 22.8984 11.4922 22.3183 11.5332C22.2187 11.539 22.1191 11.5508 22.0195 11.5742L22.2539 12.6054C22.6054 12.5234 23.1093 12.6758 23.6484 13.1035C23.6484 13.1035 23.6543 13.1035 23.6543 13.1094C23.3847 13.4258 22.9804 13.6308 22.5351 13.6308C21.7324 13.6308 21.0703 12.9687 21.0703 12.166C21.0703 11.3633 21.7324 10.7011 22.5351 10.7011ZM25.6816 17.7383C25.7285 17.7383 25.7753 17.7383 25.8222 17.7441C25.7695 18.2656 25.582 18.7109 25.2304 19.0625L25.9687 19.8125C26.4199 19.3613 26.6894 18.8105 26.8125 18.2187C27.3808 18.834 27.3515 19.8066 26.748 20.3808C26.1386 20.9609 25.1718 20.9316 24.6035 20.3222C24.0293 19.707 24.0644 18.7285 24.6679 18.1543C24.955 17.8847 25.3183 17.75 25.6816 17.7383Z"
                                fill="#808080" />
                        </svg>
                        ระบบคีย์การ์ด
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
                <a href="tel:0999999999"
                    class="w-full text-center px-5 py-2 bg-blue-500 text-white rounded-md">จองเลย!</a>
                <a href="https://line.me" class="w-full text-center px-5 py-2 bg-green-500 text-white rounded-md">
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
