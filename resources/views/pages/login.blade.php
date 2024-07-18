<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 py-8 pt-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Rent book 📓📒📙📗</h2>
            @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <form action="#">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-6 relative">
                    <label for="password" class="block text-sm font-bold mb-2">Password</label>
                    <div class="flex justify-between shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                        <input type="password" id="password" name="password" class="focus:outline-none focus:shadow-outline w-full" required>
                        <button type="button" onclick="togglePassword('password')" class="">
                            Show
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                    <span>
                        New here?
                        <a href="/register" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Register
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