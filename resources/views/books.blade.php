@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-slate-800">Danh mục sách</h2>
    <a href="{{ route('books.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-md hover:bg-blue-700 transition">
        + THÊM SÁCH MỚI
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($books as $book)
    <div class="bg-white p-3 rounded-3xl shadow-sm border border-gray-100 hover:shadow-lg transition">
        <img src="{{ $book->image_url ?? 'https://via.placeholder.com/150' }}" class="w-full h-48 object-cover rounded-2xl">
        <div class="mt-4 px-2 pb-2">
            <span class="text-[10px] font-bold text-pink-500 uppercase">SÁCH</span>
            <h6 class="font-bold text-slate-800 text-sm truncate">{{ $book->title }}</h6>
            <p class="text-[10px] text-slate-400">Tác giả: {{ $book->author->name ?? 'N/A' }}</p>
            <div class="flex justify-between items-center mt-3">
                <span class="font-bold text-slate-800">{{ number_format($book->price) }}đ</span>
                <button class="bg-pink-500 text-white p-2 px-3 rounded-xl text-[10px] font-bold">THÊM GIỎ</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection