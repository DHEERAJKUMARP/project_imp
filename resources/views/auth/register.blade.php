<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register / Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
        <div class="mb-6">
            <button id="registerTab" class="w-1/2 text-center py-2 bg-gray-200 hover:bg-gray-300" onclick="showForm('register')">
                Register
            </button>
            <button id="loginTab" class="w-1/2 text-center py-2 bg-gray-200 hover:bg-gray-300" onclick="showForm('login')">
                Login
            </button>
        </div>

        <!-- Registration Form -->
        <div id="registerForm">
            <h1 class="text-2xl font-bold mb-6">Register</h1>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="w-full border rounded p-2" value="{{ old('name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full border rounded p-2" value="{{ old('email') }}" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border rounded p-2" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                    Register
                </button>
            </form>
        </div>

        <!-- Login Form -->
        <div id="loginForm" class="hidden">
            <h1 class="text-2xl font-bold mb-6">Login</h1>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full border rounded p-2" value="{{ old('email') }}" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
                </div>

                <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">
                    Login
                </button>
            </form>
        </div>
    </div>

    <script>
        function showForm(formType) {
            if (formType === 'register') {
                document.getElementById('registerForm').classList.remove('hidden');
                document.getElementById('loginForm').classList.add('hidden');
                document.getElementById('registerTab').classList.add('bg-blue-500', 'text-white');
                document.getElementById('registerTab').classList.remove('bg-gray-200');
                document.getElementById('loginTab').classList.remove('bg-blue-500', 'text-white');
                document.getElementById('loginTab').classList.add('bg-gray-200');
            } else {
                document.getElementById('registerForm').classList.add('hidden');
                document.getElementById('loginForm').classList.remove('hidden');
                document.getElementById('loginTab').classList.add('bg-blue-500', 'text-white');
                document.getElementById('loginTab').classList.remove('bg-gray-200');
                document.getElementById('registerTab').classList.remove('bg-blue-500', 'text-white');
                document.getElementById('registerTab').classList.add('bg-gray-200');
            }
        }

        // Default to show Register form
        showForm('register');
    </script>
</body>
</html>
