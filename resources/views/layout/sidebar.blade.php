<div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center justify-center pb-4 border-b border-b-gray-800">
        <img src="{{ asset('dist/img/logo.png') }}" alt="Logo" class="h-20 w-auto">
    </a>
    <ul class="mt-4">
        <span class="text-gray-400 font-bold">ADMIN</span>
        <li class="mb-1 group">
            <a href="{{ route('dashboard') }}" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('dashboard') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        {{-- <li class="mb-1 group">
            <a href="{{ route('report') }}" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('report') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md">
                <i class="ri-file-chart-line mr-3 text-lg"></i>
                <span class="text-sm">Report</span>
            </a>
        </li> --}}
        {{-- <li class="mb-1 group">
            <a href="#" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('data.production') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md sidebar-dropdown-toggle">
                <i class='bx ri-line-chart-line mr-3 text-lg'></i>                
                <span class="text-sm">Data Production</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="{{ route('sales') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-building-line mr-3"></span>
                        Sales
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('production') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-line-chart-line mr-3"></span>
                        Produksi
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('item.ng') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-spam-2-line mr-3"></span>
                        Item NG
                    </a>
                </li>
            </ul>
        </li> --}}
        <li class="mb-1 group">
            <a href="#" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('data.company') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md sidebar-dropdown-toggle">
                <i class='bx ri-line-chart-line mr-3 text-lg'></i>                
                <span class="text-sm">Data Company</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="{{ route('department') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-building-line mr-3"></span>
                        Departement
                    </a>
                </li>
                {{-- <li class="mb-4">
                    <a href="{{ route('car.pickup') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-bus-line mr-3"></span>
                        Car Pick-up
                    </a>
                </li> --}}
                <li class="mb-4">
                    <a href="{{ route('employer') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-group-line mr-3"></span>
                        Employer
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('overtime') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-time-line mr-3"></span>
                        Overtime
                    </a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('data.company') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md sidebar-dropdown-toggle">
                <i class='bx ri-flag-fill mr-3 text-lg'></i>                
                <span class="text-sm">Data Departement</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="{{ route('department') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-building-line mr-3"></span>
                        Data Production
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('department') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-stop-fill mr-3"></span>
                        Data item Pending
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('department') }}" class="text-gray-900 text-sm flex items-center hover:text-[#f84525]">
                        <span class="ri-alert-line mr-3"></span>
                        Data Item NG
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="mb-1 group">
            <a href="{{ route('archive') }}" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('archive') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md">
                <i class='bx bx-archive mr-3 text-lg'></i>                
                <span class="text-sm">Archive</span>
            </a>
        </li> --}}
        <span class="text-gray-400 font-bold">PERSONAL</span>
        {{-- <li class="mb-1 group">
            <a href="{{ route('notifications') }}" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('notifications') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md">
                <i class='bx bx-bell mr-3 text-lg'></i>                
                <span class="text-sm">Notifications</span>
                <span class="md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-600 bg-red-200 rounded-full">5</span>
            </a>
        </li> --}}
        <li class="mb-1 group">
            <a href="{{ route('messages') }}" class="flex font-semibold items-center py-2 px-4 {{ request()->routeIs('messages') ? 'bg-gray-950 text-gray-100' : 'text-gray-900 hover:bg-gray-950 hover:text-gray-100' }} rounded-md">
                <i class='bx bx-envelope mr-3 text-lg'></i>                
                <span class="text-sm">Messages</span>
                <span class="md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-green-600 bg-green-200 rounded-full">2 New</span>
            </a>
        </li>
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
