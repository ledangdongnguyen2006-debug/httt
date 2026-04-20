@extends('layouts.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold text-slate-800 mb-6">📊 Tổng Quan Báo Cáo</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <p class="text-slate-400 text-sm font-medium">Giá trị kho hàng</p>
            <h3 class="text-2xl font-bold text-blue-600 mt-2">{{ number_format($totalStockValue) }}đ</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <p class="text-slate-400 text-sm font-medium">Đơn hàng hôm nay</p>
            <h3 class="text-2xl font-bold text-green-500 mt-2">12</h3>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <p class="text-slate-400 text-sm font-medium">Doanh thu tháng</p>
            <h3 class="text-2xl font-bold text-pink-500 mt-2">45,000,000đ</h3>
        </div>
    </div>

    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
        <h4 class="font-bold text-slate-700 mb-4">Biểu đồ doanh thu 7 ngày qua</h4>
        <canvas id="revenueChart" height="100"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('revenueChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'CN'],
            datasets: [{
                label: 'Doanh thu (VNĐ)',
                data: [1200000, 1900000, 3000000, 500000, 2300000, 4000000, 3200000],
                borderColor: '#2563eb',
                tension: 0.4,
                fill: true,
                backgroundColor: 'rgba(37, 99, 235, 0.1)'
            }]
        }
    });
</script>
@endsection