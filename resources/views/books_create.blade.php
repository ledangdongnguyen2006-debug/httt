@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-sm">
    <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center text-blue-600">📚 Thêm Sách Mới</h2>
    
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Tên sách</label>
                <input type="text" name="title" class="w-full p-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Nhập tên sách..." required>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Giá tiền (VNĐ)</label>
                    <input type="number" name="price" class="w-full p-3 border border-gray-200 rounded-xl outline-none" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Số lượng kho</label>
                    <input type="number" name="stock" class="w-full p-3 border border-gray-200 rounded-xl outline-none" required>
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Đường dẫn ảnh (URL)</label>
                <input type="text" name="image_url" class="w-full p-3 border border-gray-200 rounded-xl outline-none" placeholder="https://...">
            </div>
        </div>
        
        <div class="flex gap-4 mt-8">
            <a href="{{ route('books.index') }}" class="w-1/2 text-center bg-gray-100 text-gray-600 font-bold py-3 rounded-xl hover:bg-gray-200 transition">HỦY</a>
            <button type="submit" class="w-1/2 bg-blue-600 text-white font-bold py-3 rounded-xl shadow-lg hover:bg-blue-700 transition">LƯU SÁCH</button>
        </div>
    </form>
</div>
@endsection