@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-slate-50">
    <div class="w-full max-w-md p-8 bg-white rounded-3xl shadow-xl border border-gray-100">
        <h2 id="form-title" class="text-2xl font-bold text-center text-blue-600 mb-8">📚 FlowBooks</h2>

        <form id="register-form" action="{{ url('/register') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <input type="text" name="name" placeholder="Họ và tên" class="w-full p-3 border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-400" required>
                <input type="email" id="reg_email" name="email" placeholder="Email" class="w-full p-3 border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-400" required>
                <input type="password" name="password" placeholder="Mật khẩu" class="w-full p-3 border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-400" required>
                <button type="submit" class="w-full py-3 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 transition">ĐĂNG KÝ</button>
            </div>
            <p class="mt-4 text-center text-sm">Đã có tài khoản? <a href="#" onclick="showLogin()" class="text-blue-500 font-bold">Đăng nhập ngay</a></p>
        </form>

        <form id="login-form" action="{{ url('/login') }}" method="POST" class="hidden">
            @csrf
            <div class="space-y-4">
                <input type="email" id="login_email" name="email" placeholder="Email" class="w-full p-3 border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-400" required>
                <input type="password" name="password" placeholder="Mật khẩu" class="w-full p-3 border border-gray-200 rounded-xl outline-none focus:ring-2 focus:ring-blue-400" required>
                <button type="submit" class="w-full py-3 bg-green-500 text-white font-bold rounded-xl shadow-lg hover:bg-green-600 transition">ĐĂNG NHẬP</button>
            </div>
            <p class="mt-4 text-center text-sm">Chưa có tài khoản? <a href="#" onclick="showRegister()" class="text-blue-500 font-bold">Tạo tài khoản mới</a></p>
        </form>
    </div>
</div>

<script>
    function showLogin() {
        document.getElementById('register-form').classList.add('hidden');
        document.getElementById('login-form').classList.remove('hidden');
        document.getElementById('form-title').innerText = "Chào mừng trở lại!";
        
        // GỢI Ý ĐIỀN: Lấy email từ localStorage (nếu đã từng đăng ký)
        const savedEmail = localStorage.getItem('last_registered_email');
        if (savedEmail) {
            document.getElementById('login_email').value = savedEmail;
        }
    }

    function showRegister() {
        document.getElementById('login-form').classList.add('hidden');
        document.getElementById('register-form').classList.remove('hidden');
        document.getElementById('form-title').innerText = "📚 FlowBooks";
    }

    // KHI ĐĂNG KÝ: Lưu email vào trình duyệt để gợi ý sau này
    document.getElementById('register-form').onsubmit = function() {
        const email = document.getElementById('reg_email').value;
        localStorage.setItem('last_registered_email', email);
    };
</script>
@endsection