@extends('_layouts.master')

@section('body')

<div class="container my-20">
    <div class="row items-center">
        <div class="md:col-6 lg:col-4">
            <h1 class="text-5xl text-purple-500 font-bold">Our projects</h1>
            <p class="lg:mt-4 text-sm text-medium">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna odio tristique eget sed. At nunc, velit
                integer id aliquam ultrices suspendisse aliquet.
                <br><br>
                Condimentum elit nulla cras in feugiat proin faucibus. Odio leo turpis facilisis praesent. Adipiscing
                quam facilisis magnis elit. Velit orci gravida egestas odio at duis nec cras.</p>
        </div>
        <div class="order-first mb-10 col-12 md:order-none md:col-6 lg:offset-1 lg:col-7">
            @include('_partials.project-svg')
        </div>
    </div>
</div>
<div class="container my-20 lg:my-48">
    <div class="row">
        @foreach($projects as $project)
        <div class="col-12 md:col-8 lg:col-4 mt-8">
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