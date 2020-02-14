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
            <h1 class="reveal text-2xl lg:text-5xl text-purple-500 font-bold">Apply for ROBOKID</h1>
            <p class="reveal lg:mt-4 text-sm text-medium">
                The course is free for all primary school students in Gostivar that are 7th & 8th grade.
                The students will gain coding skills by playing with robots.<br><br>
                It will have 3 weeks of 2h long sessions and the competition in the end.
                Certificates will be given to all students that successfully finish the course.
            </p>
        </div>
        <div class="order-first mb-10 col-12 md:order-none md:col-6 lg:offset-1 lg:col-7">
            <a href="https://forms.gle/Do9LywvjWEs7y9cdA"
                class="head-btn inline-block mt-8 rounded-lg bg-purple-400 text-base text-white px-6 py-3">Click here to apply</a>
        </div>
    </div>
</div>

@endsection