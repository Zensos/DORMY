 <div class="flex flex-wrap shrink-0 gap-2 items-center justify-between bg-white py-5 px-10 rounded-md">
     <div class="flex gap-2 items-center justify-between w-full">
         <div class="flex items-center gap-2">
             <img class="w-14 h-14 rounded-md" src="/user.png" alt="user">
             <div class="flex flex-col">
                 <h5 class="font-semibold">Username</h5>
                 <p class="font-thin text-xs">
                     {{ \Carbon\Carbon::now()->format('d/m/Y h:i A') }}
                 </p>
             </div>
         </div>
         <div class="flex gap-2 items-center">
             <svg class="fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="#f9d210" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" class="lucide lucide-star">
                 <polygon
                     points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
             </svg>
             <p>5.0</p>
         </div>
     </div>
     <p class="text-start">
         Lorem ipsum dolor sit amet consectetur. Egestas enim tortor dui eget morbi nulla dui.
         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam cupiditate dolore magni corporis
         debitis asperiores velit consequuntur, quidem dolorem at officiis similique. Quisquam minus, dolor sit
         deleniti necessitatibus tempora corrupti.
     </p>

 </div>
