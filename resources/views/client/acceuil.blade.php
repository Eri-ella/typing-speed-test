<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['public/js/client.js'])
</head>
<body class="bg-(--neutral_900) text-(--neutral_400) text-[16px] px-20 pt-5 pb-10">
    <header class="flex justify-between mb-6">
        <div>
            <img src={{ asset('build/images/logo-large.svg') }} alt="">
        </div>
        <div class="flex justify-between items-center gap-2">
            <span>
                <img src={{ asset('build/images/icon-personal-best.svg') }} alt="">
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
    <section class="flex flex-col">
        <div class="flex justify-between items-center">
            <div class="flex">
                <div>
                    <span class="uppercase">wpm: </span>
                    <span class="text-(--neutral_0) font-bold">40</span>
                </div>
                <span class="w-[1px] h-full bg-(--neutral_400) mx-3"></span>
                <div>
                    <span class="capitalize">accuracy: </span>
                    <span class="text-(--red_500) font-bold"><span>94</span>%</span>            
                </div>
                <span class="w-[1px] h-full bg-(--neutral_400) mx-3"></span>
                <div>
                    <span class="capitalize">time: </span>
                    <span class="text-(--yellow_400) font-bold">0:60</span>            
                </div>
            </div>
            <div class="flex capitalize">
                <div class="flex gap-2">
                    <legend>difficulty:</legend>
                    <span>           
                        <input type="radio" name="difficulty" id="easy" class="hidden">
                        <label for="easy" class="border-1 border-(--neutral_0) p-1 rounded-sm">easy</label>
                    </span>
                    <span>           
                        <input type="radio" name="difficulty" id="medium" class="hidden">
                        <label for="medium" class="border-1 border-(--neutral_0) p-1 rounded-sm">medium</label>
                    </span>
                    <span>           
                        <input type="radio" name="difficulty" id="hard" class="hidden">
                        <label for="hard" class="border-1 border-(--neutral_0) p-1 rounded-sm">hard</label>
                    </span>                
                </div>
                <span class="w-[1px] h-full bg-(--neutral_400) mx-3"></span>
                <div class="flex gap-2">
                    <legend>mode:</legend>
                    <span>           
                        <input type="radio" name="mode" id="timed" class="hidden">
                        <label for="timed" class="border-1 border-(--neutral_0) p-1 rounded-sm">timed (60s)</label>
                    </span>
                    <span>           
                        <input type="radio" name="mode" id="passage" class="hidden">
                        <label for="passage" class="border-1 border-(--neutral_0) p-1 rounded-sm">passage</label>
                    </span>
                </div>
            </div>
        </div>
        <div class="w-full h-[1px] bg-(--neutral_400) mt-6 mb-6"></div>
    </section>
    <section>
        <div class="text-[20px]"></div>
        <div class="w-full h-[1px] bg-(--neutral_400) mt-10 mb-6"></div>
    </section>
    <footer class="flex justify-center">
        <div>
            <div class="flex p-2 bg-(--neutral_800) text-(--neutral_0) gap-2 rounded-lg">
                <button class="capitalize">restart test</button>
                <img src={{ asset('build/images/icon-restart.svg') }} alt="">
            </div>
        </div>
    </footer>
</body>
</html>