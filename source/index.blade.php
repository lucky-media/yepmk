@extends('_layouts.master')

@section('body')
{{-- Header--}}
<div class="container mt-16">
    <div class="items-center row">
        <div class="mt-10 text-center lg:mt-0 lg:text-left lg:col-4">
            <h1 class="text-5xl font-bold text-purple-500 headline">Empowering the youth</h1>
            <p class="mt-4 text-sm desc">Learn more about our cause.</p>
            <a href="/about"
                class="inline-block px-6 py-3 mt-8 text-base text-white bg-purple-400 rounded-lg head-btn">Learn
                More</a>
        </div>
        <div class="order-first head-svg lg:order-none lg:col-7 lg:offset-1">
            @include('_partials.home-svg')
        </div>
    </div>
</div>
{{-- Icons --}}
<div class="container mt-20 mt-48">
    <div class="justify-center mb-10 row">
        <div class="col-10 lg:col-8">
            <h1 class="text-2xl font-bold text-center text-purple-500 reveal lg:text-5xl">
                Empowering today's youth,
                building tomorrow's leaders !
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($page->values as $values)
        <div class="mb-10 col-12 lg:col-4 lg:mb-0 reveal">
            <div class="flex flex-col items-center py-10 text-center">
                <img src="{{ $values->image }}" srcset="{{ $values->image_lg }}" style="height:180px;" class="w-auto"
                    alt="">
                <h2 class="my-4 text-2xl font-bold text-purple-500">{{ $values->title }}</h2>
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
        <div class="justify-center row">
            <div class="text-center lg:col-4">
                <h1 class="text-5xl font-bold text-purple-500 reveal">Our Impact</h1>
                <p class="text-xs reveal">The Youth Empowerment Platform has been active for four years,
                    and during this time, more than 50 activists have supported the mission and goals.
                </p>
            </div>
        </div>

        <div class="justify-center row">
            <div class="mt-20 col-6 lg:col-8">
                <div
                    class="flex flex-col items-center justify-between px-6 py-4 bg-purple-500 reveal rounded-xl lg:flex-row">
                    @foreach($page->impact as $impact)
                    <div class="flex flex-col mb-8 text-center lg:mb-0 last:mb-0">
                        <h2 class="text-2xl font-bold leading-none text-white md:text-6xl">{{ $impact->number }}</h2>
                        <p class="text-xs font-medium text-yellow-500">{{ $impact->title }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection