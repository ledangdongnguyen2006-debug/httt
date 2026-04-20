@extends('layouts.app')

@section('content')
<div class="p-6 bg-slate-800 min-h-screen text-slate-200">
    
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('orders.index') }}" class="p-2 bg-slate-700 border border-slate-600 rounded-lg hover:bg-slate-600 transition">
            <i class="fas fa-arrow-left text-slate-300"></i>
        </a>
        <h2 class="text-xl font-bold text-white">Tạo đơn hàng</h2>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-8 space-y-6">
            
            <div class="bg-slate-900 p-6 rounded-xl shadow-lg border border-slate-700">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-white uppercase text-sm tracking-wider">Sản phẩm</h3>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-slate-700 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        <span class="ms-3 text-sm font-medium text-slate-400">Tách dòng</span>
                    </label>
                </div>

                <div class="flex gap-2">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="fas fa-search text-slate-500"></i>
                        </div>
                        <input type="text" placeholder="Tìm theo tên, mã SKU... (F3)" class="w-full bg-slate-800 border border-slate-600 text-white placeholder-slate-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                    </div>
                    <button class="px-4 py-2 bg-slate-700 text-slate-200 border border-slate-600 rounded-lg font-medium hover:bg-slate-600">Chọn nhiều</button>
                </div>

                <div class="py-16 text-center">
                    <div class="mb-4 text-slate-700">
                        <i class="fas fa-box-open text-6xl"></i>
                    </div>
                    <p class="text-slate-400 mb-4">Bạn chưa thêm sản phẩm nào</p>
                    <button class="px-6 py-2 border border-blue-500 text-blue-400 font-bold rounded-lg hover:bg-blue-500 hover:text-white transition">Thêm sản phẩm</button>
                </div>

                <button class="text-blue-400 text-sm font-medium hover:text-blue-300">
                    <i class="fas fa-plus-circle me-1"></i> Thêm sản phẩm tùy chỉnh
                </button>
            </div>

            <div class="bg-slate-900 p-6 rounded-xl shadow-lg border border-slate-700">
                <h3 class="font-bold text-white mb-4 uppercase text-sm tracking-wider">Thanh toán</h3>
                <div class="space-y-4">
                    <div class="flex justify-between text-slate-400">
                        <span>Tổng tiền hàng</span>
                        <span>--- <span class="ms-10 text-white">0đ</span></span>
                    </div>
                    <div class="flex justify-between text-slate-400">
                        <span>Giảm giá (F6)</span>
                        <span>--- <span class="ms-10 text-white">0đ</span></span>
                    </div>
                    <div class="flex justify-between font-bold text-lg text-white pt-4 border-t border-slate-700">
                        <span>Thành tiền</span>
                        <span class="text-blue-400">0đ</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-4 space-y-6">
            <div class="bg-slate-900 p-5 rounded-xl shadow-lg border border-slate-700 space-y-5">
                <div>
                    <h3 class="font-bold text-white mb-3 text-sm">Khách hàng</h3>
                    <div class="relative">
                        <input type="text" placeholder="Tìm tên, SĐT... (F4)" class="w-full bg-slate-800 border border-slate-600 text-white rounded-lg p-2.5 ps-10 focus:ring-blue-500">
                        <i class="fas fa-search absolute left-3 top-3.5 text-slate-500"></i>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-700 space-y-4">
                    <h3 class="font-bold text-white text-sm">Thông tin bổ sung</h3>
                    
                    <div>
                        <label class="text-[11px] text-slate-500 uppercase font-bold mb-1 block">Nhân viên phụ trách</label>
                        <select class="w-full bg-slate-800 border border-slate-600 text-blue-400 font-bold rounded-lg p-2.5">
                            <option>dong nguyen</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="text-[11px] text-slate-500 uppercase font-bold mb-1 block">Ngày đặt</label>
                            <input type="date" class="w-full bg-slate-800 border border-slate-600 text-slate-400 rounded-lg p-2 text-sm">
                        </div>
                        <div>
                            <label class="text-[11px] text-slate-500 uppercase font-bold mb-1 block">Ngày hẹn</label>
                            <input type="date" class="w-full bg-slate-800 border border-slate-600 text-slate-400 rounded-lg p-2 text-sm">
                        </div>
                    </div>
                </div>

                <div class="flex gap-2 pt-4">
                    <button class="flex-1 py-3 bg-transparent border border-slate-600 text-slate-300 font-bold rounded-lg hover:bg-slate-800 transition">Lưu nháp</button>
                    <button class="flex-[2] py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-lg shadow-blue-900/20 transition">
                        Tạo đơn hàng
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection