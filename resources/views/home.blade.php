<x-layout>

    <div>
        <img class="bg-fixed object-cover w-[1920px] h-[923px]" src="/preview.jpeg" alt="preview">
    </div>
    <div class="relative flex flex-col min-h-dvh w-full max-w-[100rem] space-y-5 px-5" x-data="{ isShow: false }">
        <div class="self-start w-full sm:self-start flex gap-2 h-16 mt-10 ">
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
                class="fixed inset-0 z-50 bg-white sm:static sm:h-fit sm:w-1/3 sm:bg-[#F4F3F8] sm:rounded-md p-5 overflow-y-auto">
                <div class="w-full bg-white shadow-lg rounded-lg p-4 font-sans">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold">Filter</h2>
                        <button @click="isShow = false" class="text-gray-500 hover:text-gray-700 sm:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">ช่วงราคา</label>
                        <input type="range" min="0" max="10000" class="w-full" name="price_range">
                        <div class="flex justify-between mt-1">
                            <input type="number" value="0" class="w-16 p-1 border rounded" name="min_price">
                            <input type="number" value="7500" class="w-16 p-1 border rounded" name="max_price">
                        </div>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-sm font-medium text-gray-700 mb-2">ประเภทห้อง</h3>
                        <div class="space-y-2">
                            @foreach (['เตียงเดี่ยว', 'เตียงคู่', 'เตียง 2 ชั้น', 'ห้องสูท'] as $roomType)
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="room_types[]"
                                        value="{{ $roomType }}" {{ $roomType === 'เตียงคู่' ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm">{{ $roomType }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-sm font-medium text-gray-700 mb-2">สัญญาเช่า</h3>
                        <div class="space-y-2">
                            @foreach (['รายวัน', 'รายเดือน', 'รายปี', 'ไม่มีวางมัดจำ'] as $leaseType)
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="lease_types[]"
                                        value="{{ $leaseType }}" {{ $leaseType === 'รายเดือน' ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm">{{ $leaseType }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">ระยะทางจากมหาลัยหรือคณะ</label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                name="distance">
                                <option>เลือกสถานที่</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                        <div class="space-y-2 mt-2">
                            @foreach (['500 เมตร', '1 กิโลเมตร', '5 กิโลเมตร', 'มากกว่า 5 กิโลเมตร'] as $distance)
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="distances[]"
                                        value="{{ $distance }}">
                                    <span class="ml-2 text-sm">{{ $distance }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <h3 class="text-sm font-medium text-gray-700 mb-2">สิ่งอำนวยความสะดวกภายใน</h3>
                        <div class="space-y-2">
                            @php
                                $internalAmenities = [
                                    'เครื่องปรับอากาศ' => 0,
                                    'พัดลม' => 12,
                                    'ตู้เย็น' => 10,
                                    'เฟอร์นิเจอร์' => 26,
                                    'เครื่องทำน้ำอุ่น' => 152,
                                    'อินเทอร์เน็ต' => 152,
                                    'โต๊ะ - เก้าอี้' => 52,
                                    'โซฟา' => 17,
                                    'อนุญาตเลี้ยงสัตว์' => 2,
                                    'บริการทำความสะอาด' => 5,
                                ];
                            @endphp
                            @foreach ($internalAmenities as $amenity => $count)
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="internal_amenities[]"
                                        value="{{ $amenity }}">
                                    <span class="ml-2 text-sm">{{ $amenity }} ({{ $count }})</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-700 mb-2">สิ่งอำนวยความสะดวกภายนอก</h3>
                        <div class="space-y-2">
                            @php
                                $externalAmenities = [
                                    'เครื่องซักผ้า-อบผ้า' => 25,
                                    'พื้นที่จอดรถ' => 85,
                                    'ระบบ key card' => 2,
                                    'กล้องวงจรปิด' => 69,
                                    'ยามรักษาความปลอดภัย' => 58,
                                ];
                            @endphp
                            @foreach ($externalAmenities as $amenity => $count)
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="external_amenities[]"
                                        value="{{ $amenity }}">
                                    <span class="ml-2 text-sm">{{ $amenity }} ({{ $count }})</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</x-layout>
