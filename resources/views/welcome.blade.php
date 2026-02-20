<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | DevOps Demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 flex items-center justify-center">

    <div class="w-full max-w-md">
        <div class="bg-white/20 backdrop-blur-lg shadow-2xl rounded-2xl p-8 border border-white/30">

            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white tracking-wide">
                    Welcome Back
                </h1>
                <p class="text-white/80 mt-2 text-sm">
                    Sign in to continue to your dashboard
                </p>
            </div>

            <form method="POST" action="#">
                @csrf

                <!-- Email -->
                <div class="mb-5">
                    <label class="block text-white text-sm mb-2">
                        Email Address
                    </label>
                    <input
                        type="email"
                        name="email"
                        required
                        class="w-full px-4 py-3 rounded-lg bg-white/30 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white focus:bg-white/40 transition"
                        placeholder="you@example.com"
                    >
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="block text-white text-sm mb-2">
                        Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full px-4 py-3 rounded-lg bg-white/30 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white focus:bg-white/40 transition"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between mb-6 text-sm">
                    <label class="flex items-center text-white/80">
                        <input type="checkbox" class="mr-2 rounded">
                        Remember me
                    </label>
                    <a href="#" class="text-white hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-white text-purple-700 font-semibold py-3 rounded-lg hover:bg-purple-100 transition shadow-lg"
                >
                    Sign In
                </button>

                <div class="mt-6 text-center text-white/80 text-sm">
                    Don't have an account?
                    <a href="#" class="underline hover:text-white">
                        Register
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
