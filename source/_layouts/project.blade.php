@extends('_layouts.master')

@section('body')

<div class="flex items-end"
    style="background: linear-gradient(0deg, rgba(71, 50, 136, 0.8), rgba(71, 50, 136, 0.8)), url('{{ $page->cover }}') no-repeat center center / cover; min-height: 450px;">
    <div class="container mb-16">
        <div class="row">
            <div class="md:col-4">
                <h1 class="font-bold text-6xl text-yellow-500">{{ $page->title }}</h1>
                <p class="font-medium text-base text-white">{{ $page->short_desc }}</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-24">
    <div class="row">
        <div class="md:col-6 lg:col-5">
            <div class="md-content">
                @yield('content')
            </div>
            <div class="row flex-col mt-8">
                <div class="col-12">
                    <h2 class="font-medium text-2xl text-purple-500">Donators</h2>
                    <p class="font-medium text-base text-gray-500">
                        @foreach($page->donators as $donator)
                        {{ $donator }}
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="row mt-8">
                <div class="col-6">
                    <h2 class="font-medium text-2xl text-purple-500">Project start</h2>
                    <p class="mt-4 font-medium text-base text-gray-500">
                        {{ $page->getStartDate() }}
                    </p>
                </div>
                <div class="col-6">
                    <h2 class="font-medium text-2xl text-purple-500">Project end</h2>
                    <p class="mt-4 font-medium text-base text-gray-500">
                        {{ $page->getEndDate() }}
                    </p>
                </div>
            </div>
            <div class="row mt-8 justify center">
                <div class="col-12">
                    <h2 class="font-medium text-2xl text-purple-500">
                        Tags
                    </h2>
                </div>
                <div class="col-12 mt-4">
                    <div class="flex flex-row items-center">
                        @foreach($page->tags as $tag)
                        <div class="bg-yellow-100 rounded-lg text-center px-3 py-1 mr-5 last:mr-0">
                            <p class="text-xs text-yellow-500 font-medium uppercase">
                                {{ $tag }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row mt-8 justify center">
                <div class="col-12">
                    <h2 class="font-medium text-2xl text-purple-500">
                        Social Media
                    </h2>
                </div>
                <div class="col-12 mt-4">
                    <div class="flex flex-row items-center">
                        @foreach($page->social as $key => $value)
                        <a href="{{ $value }}"
                            class="transition bg-purple-100 text-purple-500 hover:bg-purple-500 hover:text-white text-xs rounded-lg uppercase  text-center px-3 py-1 mr-5 last:mr-0">
                            {{ $key }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 md:mt-0 lg:offset-1 md:col-6">
            @foreach ($page->images as $images)
            <img style="max-height: 350px;" class="w-full h-auto object-cover mb-8 last:mb-0" src="{{ $images }}"
                alt="">
            @endforeach
        </div>
    </div>
</div>

@endsection