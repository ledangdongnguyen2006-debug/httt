@extends('layouts.app')

@section('content')
<div class="p-6 bg-slate-800 min-h-screen text-slate-200">
    <h2 class="text-2xl font-bold text-white mb-6">📊 Tổng Quan Báo Cáo</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-slate-900 p-6 rounded-2xl border border-slate-700 shadow-lg">
            <p class="text-slate-400 text-sm font-medium uppercase tracking-wider">Giá trị kho hàng</p>
            <h3 class="text-2xl font-bold text-blue-400 mt-2">{{ number_format($totalStockValue) }}đ</h3>
        </div>
        <div class="bg-slate-900 p-6 rounded-2xl border border-slate-700 shadow-lg">
            <p class="text-slate-400 text-sm font-medium uppercase tracking-wider">Đơn hàng hôm nay</p>
            <h3 class="text-2xl font-bold text-green-400 mt-2">12</h3>
        </div>
        <div class="bg-slate-900 p-6 rounded-2xl border border-slate-700 shadow-lg">
            <p class="text-slate-400 text-sm font-medium uppercase tracking-wider">Doanh thu tháng</p>
            <h3 class="text-2xl font-bold text-pink-400 mt-2">45.000.000đ</h3>
        </div>
    </div>

    <div class="bg-slate-900 p-8 rounded-2xl border border-slate-700 shadow-lg mb-8">
        <h4 class="font-bold text-white mb-6 uppercase text-sm tracking-widest">Biểu đồ doanh thu 7 ngày</h4>
        <div class="h-[300px]">
            <canvas id="revenueChart"></canvas>
        </div>
    </div>
</div>


<div class="bg-slate-900 rounded-2xl border border-slate-700 shadow-lg overflow-hidden">
    <div class="p-5 border-b border-slate-700 flex justify-between items-center">
        <h4 class="font-bold text-white uppercase text-xs tracking-widest">Top 5 sản phẩm bán chạy</h4>
        <a href="#" class="text-blue-400 text-xs hover:underline">Xem tất cả</a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-800/50 text-slate-400 uppercase text-[10px] font-bold">
                <tr>
                    <th class="px-6 py-4">Sản phẩm</th>
                    <th class="px-6 py-4 text-center">Số lượng bán</th>
                    <th class="px-6 py-4 text-right">Doanh thu</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800">
                @forelse($topSellers as $book)
                <tr class="hover:bg-slate-800/50 transition">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-slate-700 rounded-lg flex items-center justify-center">
                                <i class="fas fa-book text-slate-500"></i>
                            </div>
                            <div>
                                <p class="text-white font-medium">{{ $book->title }}</p>
                                <p class="text-slate-500 text-xs">SKU: {{ $book->sku ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center text-slate-300">
                        {{ rand(10, 50) }} </td>
                    <td class="px-6 py-4 text-right font-bold text-blue-400">
                        {{ number_format($book->price * rand(5, 10)) }}đ
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-10 text-center text-slate-500">
                        Chưa có dữ liệu bán hàng
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('revenueChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'CN'],
            datasets: [{
                label: 'Doanh thu (đ)',
                data: [1200000, 1900000, 3000000, 500000, 2300000, 4000000, 3200000],
                borderColor: '#3b82f6',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { grid: { color: '#1e293b' }, ticks: { color: '#94a3b8' } },
                x: { grid: { display: false }, ticks: { color: '#94a3b8' } }
            }
        }
    });
</script>
@endsection