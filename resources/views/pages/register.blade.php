<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-6 text-center">Rent book 📓📒📙📗
            </h2>
            <form action="{{ route('register.user') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 relative">
                    <label for="password" class="block text-sm font-bold mb-2">Password</label>
                    <div class="flex justify-between shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        <input type="password" id="password" name="password" value="{{ old('password') }}" class="focus:outline-none focus:shadow-outline w-full">
                        <button type="button" onclick="togglePassword('password')" class="text-sm">
                            Show
                        </button>
                    </div>
                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-bold mb-2">Confirm Password</label>
                    <div class="flex justify-between shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" class="focus:outline-none focus:shadow-outline w-full">
                        <button type="button" onclick="togglePassword('password_confirmation')" class="text-sm">
                            Show
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Register
                    </button>
                    <span class="text-sm">
                        Already registered?
                        <a href="/" class="inline-block align-baseline font-bold text-blue-500 hover:text-blue-800">
                            Login
                        </a>
                    </span>
                </div>
            </form>
        </div>
        <p class="text-center text-gray-500 text-xs mt-6">
            Made with 🧡 and also ChatGPT
        </p>
    </div>

    <script>
        function togglePassword(id) {
            var passwordField = document.getElementById(id);
            var button = passwordField.nextElementSibling;
            if (passwordField.type === "password") {
                passwordField.type = "text";
                button.textContent = "Hide";
            } else {
                passwordField.type = "password";
                button.textContent = "Show";
            }
        }
    </script>
</body>

</html>