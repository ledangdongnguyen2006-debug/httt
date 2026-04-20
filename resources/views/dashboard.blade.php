@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
    <div class="md:col-span-2 bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
        <div class="flex justify-between items-start">
            <div>
                <h5 class="text-3xl font-bold text-gray-900">$45,385</h5>
                <p class="text-sm font-medium text-gray-500">Doanh thu tuần này</p>
            </div>
            <div class="text-green-500 font-bold">12.5% <i class="fas fa-arrow-up text-xs"></i></div>
        </div>
        <div id="main-chart" class="mt-4"></div>
    </div>

    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
        <h5 class="text-lg font-bold mb-4 text-gray-900">Sách bán chạy nhất tháng</h5>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="https://via.placeholder.com/40x50" class="rounded border">
                    <div>
                        <p class="text-sm font-bold">Lập trình Laravel</p>
                        <p class="text-xs text-green-500">2.5% vs last month</p>
                    </div>
                </div>
                <span class="font-bold text-sm">$445,467</span>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="https://via.placeholder.com/40x50" class="rounded border">
                    <div>
                        <p class="text-sm font-bold">Database System</p>
                        <p class="text-xs text-green-500">12.5% vs last month</p>
                    </div>
                </div>
                <span class="font-bold text-sm">$256,982</span>
            </div>
        </div>
        <button class="w-full mt-6 py-2 text-sm text-blue-600 font-bold border-t border-gray-100">XEM BÁO CÁO CHI TIẾT ></button>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm">Sách mới</p>
            <h3 class="text-2xl font-bold">2,340</h3>
            <p class="text-xs text-green-500 mt-1">12.5% kể từ tháng trước</p>
        </div>
        <div class="flex gap-1 items-end h-10">
            <div class="w-2 bg-blue-600 h-4"></div>
            <div class="w-2 bg-blue-600 h-8"></div>
            <div class="w-2 bg-blue-600 h-6"></div>
            <div class="w-2 bg-blue-600 h-10"></div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm">Khách hàng</p>
            <h3 class="text-2xl font-bold">2,340</h3>
            <p class="text-xs text-green-500 mt-1">3.4% kể từ tháng trước</p>
        </div>
        <div class="flex gap-1 items-end h-10">
            <div class="w-1 bg-gray-200 h-4"></div>
            <div class="w-1 bg-blue-400 h-8"></div>
            <div class="w-1 bg-blue-600 h-10"></div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    var options = {
        chart: { type: 'area', height: 300, toolbar: {show: false} },
        series: [{ name: 'Doanh thu', data: [6400, 6200, 6150, 6500, 6400, 6300, 6100] },
                 { name: 'Tuần trước', data: [6550, 6750, 6450, 6400, 6750, 6800, 6600] }],
        colors: ['#1C64F2', '#E74694'],
        stroke: { curve: 'smooth' },
        xaxis: { categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'] }
    };
    new ApexCharts(document.querySelector("#main-chart"), options).render();
</script>
@endpush
@endsection