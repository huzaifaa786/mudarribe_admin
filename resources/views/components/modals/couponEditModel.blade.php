 <!-- Delete Product Modal -->
 <div id="edit-modal" tabindex="-1"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full bg-[#00000090]">
     <div class="relative p-4 w-full max-w-md h-full md:h-auto">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <!-- Modal header -->
             <div class="flex justify-end p-2">
                 <button type="button"
                     class="text-gray-600 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                     data-modal-toggle="edit-modal">
                     <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd"
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd"></path>
                     </svg>
                 </button>
             </div>
             <!-- Modal body -->
             <div class="p-6 pt-0 ">
                 <svg class="mx-auto mb-4 w-14 h-14 text-gray-500 dark:text-gray-200" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                 </svg>
                 <div class="text-center">
                     <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">You are going to update
                         Coupon
                     </h3>
                 </div>

                 <form method="post">
                     @csrf

                     <input type="hidden" name="id" id="coupon_id">
                     <div class="mb-4">
                         <label for="couponCreate" class="block text-sm font-medium text-gray-600">Coupon Code</label>
                         <input type="text" name="couponCode" id="code_input" required
                             class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" />
                     </div>
                     <div class="mb-4">
                         <label for="discountPercentage" class="block text-sm font-medium text-gray-600">Discount
                             Percentage%:</label>
                         <input type="number" name="discountPercentage" id="discount_percentage" required
                             class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" />
                     </div>

                     <div class="text-center">
                         <button  type="submit"
                             class="text-white bg-gradient-to-tl from-purple-700 to-pink-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 text-center inline-flex items-center shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                             Save changes
                         </button>
                         <button data-modal-toggle="edit-modal" type="button"
                             class="text-gray-600 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                             cancel
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
