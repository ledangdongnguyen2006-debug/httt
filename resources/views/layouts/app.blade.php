<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowBooks Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Tùy chỉnh màu sắc Soft UI nhẹ nhàng */
        .sidebar-active { background-color: #eff6ff; color: #2563eb; }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>[x-cloak] { display: none !important; }
</style>
</head>
<body class="bg-gray-50 font-sans">
    
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200" x-data="{ openSearch: false }">
    <div class="px-3 py-3 lg:px-5">
        <div class="flex items-center justify-between gap-4">
            
            <div class="flex items-center justify-start min-w-fit">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <a href="/" class="flex ms-2 md:me-4">
                    <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap text-blue-600">📚 FlowBooks</span>
                </a>
            </div>

            <div class="hidden md:flex flex-1 justify-center max-w-2xl relative">
    <div x-data="{ openSearch: false, activeTab: 'all' }" @click.away="openSearch = false" class="relative w-full max-w-xl">
        
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="fas fa-search text-slate-400"></i>
            </div>
            <input type="text" @click="openSearch = true" 
                   class="block w-full pl-10 pr-3 py-2 border border-slate-700 rounded-lg bg-slate-800 text-slate-300 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" 
                   placeholder="Tìm kiếm... (Ctrl + K)">
        </div>

        <div x-show="openSearch" x-cloak class="absolute z-50 mt-2 w-full bg-white rounded-lg shadow-2xl overflow-hidden border border-slate-200">
            
            <div class="flex border-b border-slate-100 text-sm font-medium text-slate-500 bg-slate-50">
                <button @click="activeTab = 'all'" 
                        :class="activeTab === 'all' ? 'text-blue-600 border-b-2 border-blue-600 bg-white' : 'hover:bg-slate-100'"
                        class="flex-1 px-4 py-3 transition">Tất cả</button>
                
                <button @click="activeTab = 'products'" 
                        :class="activeTab === 'products' ? 'text-blue-600 border-b-2 border-blue-600 bg-white' : 'hover:bg-slate-100'"
                        class="flex-1 px-4 py-3 transition">Sản phẩm</button>
                
                <button @click="activeTab = 'orders'" 
                        :class="activeTab === 'orders' ? 'text-blue-600 border-b-2 border-blue-600 bg-white' : 'hover:bg-slate-100'"
                        class="flex-1 px-4 py-3 transition">Đơn hàng</button>
            </div>

            <div class="p-6 text-center">
                <div x-show="activeTab === 'all'">
                    <i class="fas fa-search text-slate-300 text-4xl mb-3 block"></i>
                    <p class="text-slate-400 text-sm">Tìm kiếm mọi thứ trong FlowBooks</p>
                </div>
                <div x-show="activeTab === 'products'" x-cloak>
                    <i class="fas fa-book text-slate-300 text-4xl mb-3 block"></i>
                    <p class="text-slate-400 text-sm">Đang lọc tìm kiếm theo Sản phẩm</p>
                </div>
                <div x-show="activeTab === 'orders'" x-cloak>
                    <i class="fas fa-file-invoice text-slate-300 text-4xl mb-3 block"></i>
                    <p class="text-slate-400 text-sm">Đang lọc tìm kiếm theo Đơn hàng</p>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="flex items-center gap-4 min-w-fit">
                <i class="far fa-bell text-gray-500 text-lg cursor-pointer hover:text-blue-600 transition"></i>
                <img class="w-8 h-8 rounded-full border border-gray-200" src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" alt="user photo">
            </div>

        </div>
    </div>
</nav>



<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-slate-800 border-r border-slate-800 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-slate-800">
        <ul x-data="{ selectedMenu: null }" class="space-y-2">
            
            <li>
                <button type="button" class="flex items-center w-full p-3 text-white bg-blue-700 rounded-lg group" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                    <i class="fas fa-cart-plus w-5 h-5"></i>
                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Bán hàng</span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>
                <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                    <li><a href="#" class="flex items-center w-full p-2 text-slate-300 transition rounded-lg pl-11 hover:bg-slate-800">Tạo đơn mới</a></li>
                </ul>
            </li>



<li>
    <a href="#" class="flex items-center p-3 text-slate-300 rounded-lg hover:bg-slate-800 group">
        <i class="fas fa-home w-5 h-5 text-slate-400 group-hover:text-white transition duration-75"></i>
        <span class="ms-3 font-medium">Tổng quan</span>
    </a>
</li>



<li>
    <button type="button" @click="selectedMenu = (selectedMenu === 'orders' ? null : 'orders')" class="flex items-center w-full p-3 text-slate-300 rounded-lg hover:bg-slate-800 group transition duration-75" aria-controls="dropdown-orders" data-collapse-toggle="dropdown-orders">
        <i class="fas fa-file-invoice w-5 h-5 text-slate-500 group-hover:text-white"></i>
        <span class="flex-1 ms-3 text-left whitespace-nowrap">Đơn hàng</span>
        <i class="fas fa-chevron-down text-[10px]"></i>
    </button>
    <ul id="dropdown-orders" class="hidden py-2 space-y-1 bg-slate-900/50">
        <li>
            <a href="{{ route('orders.index') }}" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Danh sách đơn hàng
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Đơn hàng nháp
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Trả hàng
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Đơn chưa hoàn tất
            </a>
        </li>
    </ul>
</li>




<li>
    <button type="button" class="flex items-center w-full p-3 text-slate-300 rounded-lg hover:bg-slate-800 group transition duration-75" aria-controls="dropdown-shipping" data-collapse-toggle="dropdown-shipping">
        <i class="fas fa-shipping-fast w-5 h-5 text-slate-500 group-hover:text-white"></i>
        <span class="flex-1 ms-3 text-left whitespace-nowrap">Vận chuyển</span>
        <i class="fas fa-chevron-down text-[10px]"></i>
    </button>
    <ul id="dropdown-shipping" class="hidden py-2 space-y-1 bg-slate-900/50">
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Tổng quan
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Vận đơn
            </a>
        </li>
    </ul>
</li>



<li>
    <button type="button" class="flex items-center w-full p-3 text-slate-300 rounded-lg hover:bg-slate-800 group transition duration-75" aria-controls="dropdown-products" data-collapse-toggle="dropdown-products">
        <i class="fas fa-box w-5 h-5 text-slate-500 group-hover:text-white"></i>
        <span class="flex-1 ms-3 text-left whitespace-nowrap">Sản phẩm</span>
        <i class="fas fa-chevron-down text-[10px]"></i>
    </button>
    <ul id="dropdown-products" class="hidden py-2 space-y-1 bg-slate-900/50">
        <li>
            <a href="{{ route('books.index') }}" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Danh sách sản phẩm
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Danh mục sản phẩm
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition duration-75 rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Bảng giá
            </a>
        </li>
    </ul>
</li>



<li>
    <button type="button" 
            @click="selectedMenu = (selectedMenu === 'warehouse' ? null : 'warehouse')"
            class="flex items-center w-full p-3 text-slate-300 rounded-lg hover:bg-slate-800 group transition duration-75"
            :class="selectedMenu === 'warehouse' ? 'bg-slate-800 text-blue-400' : ''">
        
        <i class="fas fa-warehouse w-5 h-5 transition group-hover:text-white"
           :class="selectedMenu === 'warehouse' ? 'text-blue-400' : 'text-slate-500'"></i>
        
        <span class="flex-1 ms-3 text-left whitespace-nowrap">Quản lý kho</span>
        
        <i class="fas fa-chevron-down text-[10px] transition-transform duration-200"
           :class="selectedMenu === 'warehouse' ? 'rotate-180 text-blue-400' : ''"></i>
    </button>

    <ul x-show="selectedMenu === 'warehouse'" 
        x-cloak
        x-collapse
        class="py-2 space-y-1 bg-slate-900/50 rounded-b-lg">
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Tồn kho
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Đặt hàng nhập
            </a>
        </li>
        </ul>
</li>



<li>
    <button type="button" class="flex items-center w-full p-3 text-slate-300 rounded-lg hover:bg-slate-800 group transition duration-75" aria-controls="dropdown-customers" data-collapse-toggle="dropdown-customers">
        <i class="fas fa-user-friends w-5 h-5 text-slate-500 group-hover:text-white"></i>
        <span class="flex-1 ms-3 text-left whitespace-nowrap">Khách hàng</span>
        <i class="fas fa-chevron-down text-[10px]"></i>
    </button>
    <ul id="dropdown-customers" class="hidden py-2 space-y-1 bg-slate-900/50">
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Khách hàng
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Nhóm khách hàng
            </a>
        </li>
    </ul>
</li>




            <li>
                <a href="#" class="flex items-center p-3 text-slate-300 rounded-lg hover:bg-slate-800 group">
                    <i class="fas fa-percentage w-5 h-5 text-slate-500"></i>
                    <span class="ms-3">Khuyến mại</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-3 text-slate-300 rounded-lg hover:bg-slate-800 group">
                    <i class="fas fa-file-invoice-dollar w-5 h-5 text-slate-500"></i>
                    <span class="ms-3">Sổ quỹ</span>
                </a>
            </li>



<li>
    <button type="button" class="flex items-center w-full p-3 text-slate-300 rounded-lg hover:bg-slate-800 group transition duration-75" aria-controls="dropdown-reports" data-collapse-toggle="dropdown-reports">
        <i class="fas fa-chart-bar w-5 h-5 text-slate-500 group-hover:text-white"></i>
        <span class="flex-1 ms-3 text-left whitespace-nowrap">Báo cáo</span>
        <i class="fas fa-chevron-down text-[10px]"></i>
    </button>
    <ul id="dropdown-reports" class="hidden py-2 space-y-1 bg-slate-900/50">
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Tổng quan báo cáo
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center w-full p-2 text-sm text-slate-400 transition rounded-lg pl-11 hover:text-blue-400 hover:bg-slate-800">
                Danh sách báo cáo
            </a>
        </li>
    </ul>
</li>



        </ul>
    </div>
</aside>

    <div class="p-4 sm:ml-64 mt-14">
        @yield('content')
    </div>
//XỔ THANH ĐƠN HÀNG///// 
<script>
    document.querySelectorAll('[data-collapse-toggle]').forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('aria-controls');
            const targetEl = document.getElementById(targetId);
            
            // Đóng các dropdown khác nếu muốn (optional)
            // document.querySelectorAll('ul[id^="dropdown-"]').forEach(el => {
            //     if(el !== targetEl) el.classList.add('hidden');
            // });

            targetEl.classList.toggle('hidden');
            // Xoay icon mũi tên
            const icon = this.querySelector('.fa-chevron-down');
            if (icon) icon.classList.toggle('rotate-180');
        });
    });
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @stack('scripts')
</body>
</html>