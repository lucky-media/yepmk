@extends('_layouts.master')

@section('body')
{{-- Header--}}
<div class="container mt-16">
    <div class="row items-center">
        <div class="text-center mt-10 lg:mt-0 lg:text-left lg:col-4">
            <h1 class="text-5xl text-purple-500 font-bold">Empowering the youth</h1>
            <p class="mt-4 text-sm">Learn more about our cause.</p>
            <a href="/about" class=" inline-block mt-8 rounded-lg bg-purple-400 text-base text-white px-6 py-3">Learn
                More</a>
        </div>
        <div class="order-first lg:order-none lg:col-7 lg:offset-1">
            @include('_partials.home-svg')
        </div>
    </div>
</div>
{{-- Icons --}}
<div class="container mt-20 mt-48">
    <div class="row justify-center mb-10">
        <div class="col-10 lg:col-8">
            <h1 class="text-purple-500 font-bold text-2xl lg:text-5xl text-center">
                Empowering today's youth,
                building tomorow leaders !
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($page->values as $values)
        <div class="col-12 lg:col-4 mb-10 lg:mb-0">
            <div class="flex flex-col items-center text-center py-10">
                <img src="{{ $values->image }}" srcset="{{ $values->image_lg }}" style="height:180px;" class="w-auto"
                    alt="">
                <h2 class="my-4 text-purple-500 font-bold text-2xl">{{ $values->title }}</h2>
                <p class="text-xs">
                    {{ $values->desc }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- IMPACTS --}}
<div style="background: url('/assets/images/impact-bg.png') no-repeat center center; background-size: cover;">
    <div class="container py-32 md:py-64">
        <div class="row justify-center">
            <div class="lg:col-4 text-center">
                <h1 class="text-purple-500 font-bold text-5xl">Our Impact</h1>
                <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipsicing elit. amet <br> ad fuga volputate
                    eligendi, officia consectetur corrupti ipsam ?
                </p>
            </div>
        </div>

        <div class="row justify-center">
            <div class="col-6 lg:col-8 mt-20">
                <div class="bg-purple-500 rounded-xl flex flex-col lg:flex-row justify-between items-center px-6 py-4">
                    @foreach($page->impact as $impact)
                    <div class="flex flex-col text-center mb-8 lg:mb-0 last:mb-0">
                        <h2 class="text-white font-bold text-2xl md:text-6xl leading-none">{{ $impact->number }}</h2>
                        <p class="text-xs text-yellow-500 font-medium">{{ $impact->title }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection