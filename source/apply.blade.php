@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="{{ $page->siteName }} | About Us" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description"
    content="Youth Empowerment Platform (YEP) is a youth-orientated non-governmental organization, located in Gostivar. It was founded on April 24, 2015 by a group of enthusiastic young people who believe in amplifying the voices of young people and serving their communities." />
@endpush

@section('body')

<div class="container mt-20">
    <div class="row items-center">
        <div class="md:col-6 lg:col-4">
            <h1 class="reveal text-2xl lg:text-5xl text-purple-500 font-bold">Apply for Sayit</h1>
            <p class="reveal lg:mt-4 text-sm text-medium">
                Do you want to practice your English communication skills?<br>
                Contact us now and start learning.<br>
                We will discuss about different topics and you will learn in a friendly atmosphere.<br>
                The course is free and it will be online.<br>
                This project is being implemented by YEP members. 
            </p>
        </div>
        <div class="order-first mb-10 col-12 md:order-none md:col-6 lg:offset-1 lg:col-7">
            <a href="https://forms.gle/shXPRewU7pgYZtLJA"
                class="head-btn inline-block mt-8 rounded-lg bg-purple-400 text-base text-white px-6 py-3">Click here to apply</a>
        </div>
    </div>
</div>

@endsection