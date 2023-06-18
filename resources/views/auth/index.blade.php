<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-[#e5edf8] flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">  
            <div class="md:w-1/2 px-16">
                <h2 class="font-bold text-2xl text-[#44547a]">Login</h2>
                <p class="text-sm mt-4 text-[#44547a]">Welcome to SMKN 1 Cibinong login page</p>
                
                <form action="" class="flex flex-col gap-4">
                    <input class="p-2 mt-8 rounded-xl border" type="text" name="username" placeholder="Username">
                    <div class="relative">
                        <input id="password" class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Password">
                        <img id="eye-icon" src="images/eye.svg" class="absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer" alt="" onclick="togglePassword()">
                    </div>
                    <button type="submit" class="bg-[#44547a] rounded-xl text-white py-2 hover:scale-105 duration-300">Connect</button>
                </form>
            
                <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center text-sm">More info</p>
                    <hr class="border-gray-400">
                </div>

                <a href="/about" class="bg-white border border-[#44547a] py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300">
                    About us
                </a>

                <p class="py-5 text-xs text-center">User untuk ujian</p>
                <p class="text-xs text-center">Username: uptjkt</p>
                <p class="text-xs border-b text-center border-gray-400 pb-4">Password: 123</p>

                <div class="mt-3 text-xs flex justify-between items-center">
                    <p>Forgot your password?</p>
                    <button id="intergramButton" class="py-2 px-5 bg-white border rounded-xl">Chat Admin</button>
                </div>
            </div>

            <div class="md:block hidden w-1/2">
                <img src="images/login.png" alt="" class="rounded-2xl">
            </div>
        </div>
    </section>
</body>
<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var eyeIcon = document.getElementById("eye-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.src = "images/eye-slash.svg"; // Change the source to the icon representing password visibility off
        } else {
            passwordInput.type = "password";
            eyeIcon.src = "images/eye.svg"; // Change the source to the icon representing password visibility on
        }
    }
    window.intergramId = "-880662040";
    window.intergramCustomizations = {
        titleClosed: 'Chat Admin',
        titleOpen: 'Sedang Chat',
        introMessage: 'Halo, Selamat Datang',
        autoResponse: 'Terima kasih telah menggunakan layanan Live Chat ini, ada yang bisa kami bantu?',
        mainColor: "#44547a",
        alwaysUseFloatingButton: false
    };
</script>
<script id="intergram" type="text/javascript" src="https://www.intergram.xyz/js/widget.js"></script>
</html>