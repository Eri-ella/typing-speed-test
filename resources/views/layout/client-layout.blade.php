<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>
    <title>Document</title>
    @vite(['public/js/client.js'])
</head>
<body class="bg-(--neutral_900) text-(--neutral_400) text-[16px] px-20 pt-5 pb-10">
    <header class="flex justify-between mb-6">
        <div>
            <img src={{ asset('build/images/logo-large.svg') }} alt="logp">
        </div>
        <div class="flex justify-between items-center gap-2">
            <span>
                <img src={{ asset('build/images/icon-personal-best.svg') }} alt="personal-best">
            </span>
            <span>
                Personal best
            </span>
            <span class="text-(--neutral_0) font-bold">
                <span>92</span>
                <span>WPM</span>
            </span>
        </div>
    </header>
    @yield('content')
</body>
</html>