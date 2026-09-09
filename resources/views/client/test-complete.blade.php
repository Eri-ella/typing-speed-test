@extends('layout.client-layout')

@section('content')
    <div class="p-[10%] relative flex items-center justify-center">
        <img class="absolute top-[70%] right-[10%]" src={{ asset('build/images/pattern-star-1.svg') }} alt="pattern-star-1"/>
        <img class="absolute top-[10%] left-[10%]" src={{ asset('build/images/pattern-star-2.svg') }} alt="pattern-star-2"/>
        <div class="flex flex-col items-center justify-center gap-10">
            <div>
                <img src={{ asset('build/images/icon-completed.svg') }} alt="icon-completed"/>
            </div>
            <div class="flex flex-col items-center justify-center gap-1">
                <h2 class="capitalize font-bold text-xl text-white">test complete!</h2>
                <p class="text-sm">Solid run. Keep pushing to beat your highscore.</p>
            </div>
            <div class="grid grid-cols-3 gap-5">
                <div class="border-1 rounded-lg py-2 px-4 min-w-30">
                    <p class="uppercase">wpm:</p>
                    <p class="text-white font-bold">80</p>
                </div>
                <div class="border-1 rounded-lg py-2 px-4 min-w-30">
                    <p class="capitalize">accuracy:</p>
                    <p class="text-(--green_500) font-bold"><span>80</span>%</p>
                </div>
                <div class="border-1 rounded-lg py-2 px-4 min-w-30">
                    <p class="capitalize">Characters</p>
                    <p class="text-(--green_500) font-bold"><span>120</span>/<span class="text-(--red_500)">5</span></p>
                </div>                                
            </div>
            <div>
                <div class="flex p-2 bg-white text-black gap-2 rounded-lg">
                    <button class="capitalize">restart test</button>
                    <iconify-icon icon="codicon:debug-restart" class="text-xl"></iconify-icon>
                </div>
            </div>

        </div>

    </div>

@endsection