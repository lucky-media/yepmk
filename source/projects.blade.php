@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="{{ $page->siteName }} | Projects" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description"
    content="We want to nurture civic engagement via peaceful activism and volunteerism. The youth is the most important part of the community and as such it should be stimulated to become an active part of the society." />
@endpush

@section('body')

<div class="container my-20">
    <div class="row items-center">
        <div class="md:col-6 lg:col-4">
            <h1 class="reveal text-5xl text-purple-500 font-bold">Our projects</h1>
            <p class="reveal lg:mt-4 text-sm text-medium">
                We want to nurture civic engagement via peaceful activism and volunteerism.
                The youth is the most important part of the community and as such it should
                be stimulated to become an active part of the society.
                <br><br>
                Our organization is the driving force that motivates youth on volunteering
                and improving their community. Our biggest force is the desire of the youth
                to actively volunteer and contribute.
                <br><br>
                Volunteering is one of the greatest acts that reflects the inspiration,
                goodwill and compassion of a person. We believe that the youth of this country
                has a tremendous intellectual capacity that needs to be used effectively.
                Rather than spending the time on the street and with empty discussions,
                the youth can truly make a change through volunteering.
            </p>
        </div>
        <div class="reveal order-first mb-10 col-12 md:order-none md:col-6 lg:offset-1 lg:col-7">
            @include('_partials.project-svg')
        </div>
    </div>
</div>
<div class="container my-20 lg:my-48">
    <div class="row">
        @foreach($projects as $project)
        <div class="col-12 md:col-8 lg:col-4 mt-8 reveal">
            <a href="{{ $project->getUrl() }}">
                <div style="border-radius: 25px; min-height: 392px; background-image: url('{{ $project->cover }}')"
                    class="transition bg-cover bg-center bg-no-repeat overflow-hidden flex items-end hover:shadow-outline">
                    <div style="background: rgba(71, 50, 136, 0.9)" class="w-full p-8">
                        <h1 class="font-bold text-2xl text-yellow-500">{{ $project->title }}</h1>
                        <p class="font-medium text-white">
                            {{ $project->short_desc }}
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection