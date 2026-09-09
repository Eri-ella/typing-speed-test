@extends('layout.client-layout')

@section('content')
    @include('components.stat-bar')
    <section 
        x-data="{start: true}"
        @click="start=false"
        class="relative">
        <div 
        x-show="start"
        class="size-full bg-transparent backdrop-blur-xs absolute flex items-center justify-center text-white">
            <div 
            @click="start=false"
            class="flex flex-col gap-2 items-center justify-center">
                <button class="flex items-center justify-center hover:bg-(--blue_400) bg-(--blue_600) p-2 rounded-lg capitalize cursor-pointer">start typing text</button>
                <p>Or click the text and start typing</p>

            </div>
        </div>
        
        <div class="text-[20px]">{{ $datas['easy'][0]['text'] }}</div>
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
@endsection