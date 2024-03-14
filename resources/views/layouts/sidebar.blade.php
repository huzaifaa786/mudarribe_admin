<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 mt-5 ml-5 duration-200 bg-white shadow-xl rounded-xl lg:flex transition-width lg:w-64"
    aria-label="Sidebar">

    <div class="mb-5 -mt-8">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 m-0 text-sm whitespace-nowrap text-slate-700" href="../pages/dashboard.html" target="_blank">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Mudarribe Fitness
                Dashboard</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"  />

    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white">
        <div class="flex flex-col flex-1 pt-8 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-white" id="sidebar-items">
                <ul class="pt-1 pb-2">
                    <li class="{{ $tab == 'dashboard' ? 'bg-slate-50 shadow-lg rounded-xl' : '' }}">
                        <a href="{{ route('dashboard.index') }}"
                            class=" flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="">
                            <div
                                class="{{ $tab == 'dashboard' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} shadow-lg shadow-gray-300 text-dark-700 w-8 h-8   rounded-lg text-center grid place-items-center">
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ $tab == 'banner' ? 'bg-slate-50 shadow-lg rounded-xl' : '' }}">
                        <a href="{{ route('banner.index') }}"
                            class=" flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="">
                            <div
                                class="{{ $tab == 'banner' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} text-dark-700 rounded-lg shadow-lg w-8 h-8 text-center py-1">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Banner</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                            class=" {{ $tab == 'CouponCode' ? 'bg-slate-50 shadow-md rounded-xl' : '' }} w-full flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="" aria-controls="dropdown-users"
                            data-collapse-toggle="dropdown-users">
                            <div
                                class=" {{ $tab == 'CouponCode' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} bg-white shadow-lg shadow-gray-300 text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa fa-gift" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Coupons</span>
                            <svg sidebar-toggle-item="" class="w-4 h-4 ml-auto text-gray-700" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-users" sidebar-toggle-list="" class="hidden pt-1 pb-2">
                            <li>
                                <a href="{{ route('coupon.create') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>Create
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('coupon.index') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>Show
                                        All</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="{{ $tab == 'trainer' ? 'bg-slate-50 shadow-md rounded-xl' : '' }} w-full flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="" aria-controls="dropdown-ecommerce"
                            data-collapse-toggle="dropdown-ecommerce">
                            <div
                                class="{{ $tab == 'trainer' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} shadow-lg shadow-gray-300 text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Trainers</span>
                            <svg sidebar-toggle-item="" class="w-4 h-4 ml-auto text-gray-700" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-ecommerce" sidebar-toggle-list="" class="hidden pt-1 pb-2">
                            <li>
                                <a href="{{ route('trainer.index') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>Approved</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('trainer.pending') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>Pending</span></a>
                            </li>
                            <li>
                                <a href="{{ route('trainer.rejected') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>Rejected</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('trainer.event') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>Events</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="{{ $tab == 'Sales' ? 'bg-slate-50 shadow-md rounded-xl' : '' }} w-full flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="" aria-controls="dropdown-sales"
                            data-collapse-toggle="dropdown-sales">
                            <div
                                class="{{ $tab == 'Sales' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} shadow-lg shadow-gray-300 text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Sales</span>
                            <svg sidebar-toggle-item="" class="w-4 h-4 ml-auto text-gray-700" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-sales" sidebar-toggle-list="" class="hidden pt-1 pb-2">
                            <li>
                                <a href="{{ route('sales.graph') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>Graph</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sales.allsales') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>All
                                        sales</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="{{ $tab == 'trainee' ? 'bg-slate-50 shadow-md rounded-xl' : '' }} w-full flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="" aria-controls="dropdown-events"
                            data-collapse-toggle="dropdown-events">
                            <div
                                class="{{ $tab == 'trainee' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} shadow-lg shadow-gray-300 text-dark-700 w-8 h-8  mr-1 rounded-lg text-center grid place-items-center">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Trainees</span>
                            <svg sidebar-toggle-item="" class="w-4 h-4 ml-auto text-gray-700" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-events" sidebar-toggle-list="" class="hidden pt-1 pb-2">
                            <li>
                                <a href="{{ route('trainees') }}"
                                    class="flex items-center p-2 text-sm font-light transition duration-75 rounded-lg text-dark-500 group hover:bg-gray-200 pl-11"><span>All
                                        trainees</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ $tab == 'reports' ? 'bg-slate-50 shadow-lg rounded-xl' : '' }}">
                        <a href="{{ route('reports') }}"
                            class=" flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="">
                            <div
                                class="{{ $tab == 'reports' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} text-dark-700 rounded-lg shadow-lg w-8 h-8 text-center py-1">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Suggestion & Reports</span>
                        </a>
                    </li>
                    <li class="{{ $tab == 'orders' ? 'bg-slate-50 shadow-lg rounded-xl' : '' }}">
                        <a href="{{ route('orders') }}"
                            class=" flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200"
                            sidebar-toggle-collapse="">
                            <div
                                class="{{ $tab == 'orders' ? 'bg-gradient-to-tl from-purple-700 to-pink-500 text-white' : 'bg-white' }} text-dark-700 rounded-lg shadow-lg w-8 h-8 text-center py-1">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <span class="ml-3 text-sm font-light text-dark-500" sidebar-toggle-item="">Orders</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
