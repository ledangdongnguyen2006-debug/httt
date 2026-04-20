@extends('layouts.app')

@section('content')
<div class="p-6 bg-white rounded-2xl shadow-sm">
    <h2 class="text-2xl font-bold text-slate-800">Trang {{ Request::path() }}</h2>
    <p class="text-slate-500 mt-2">Nội dung này đang được Linh và Thơ phát triển...</p>
</div>
@endsection