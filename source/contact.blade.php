@extends('_layouts.master')

@section('body')

<div class="container">
    <div class="row items-center mb-20">
        <div class="md:col-6 lg:col-4">
            <h1 class="text-2xl lg:text-5xl text-purple-500 font-bold">Feel free to contact us</h1>
        </div>
        <div class="order-first mb-10 col-12 md:order-none md:col-6 lg:offset-1 lg:col-7">
            @include('_partials/contact-svg')
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-between">
        <div class="md:col-4 lg:col-4 mb-16 md:mb-0">
            <h2 class="text-2xl lg:text-5xl text-purple-500 font-bold">Our office</h2>

            @foreach($page->contact as $contact)
            <div class="flex flex-row items-center">
                <img class="w-10 h-10" src="{{ $contact->icon }}" srcset="{{ $contact->icon_lg }}" alt="">
                <p class="py-8 font-medium text-gray-500 text-sm ml-5">
                    {!! $contact->name !!}
                </p>
            </div>
            @endforeach

        </div>
        <div class="mb-16 md:mb-0 md:col-8 lg:col-6">
            <div class="bg-purple-500 rounded-xl">
                <div class="flex flex-col justify-center px-10 md:px-16">
                    <h2 class="mb-6 mt-16 font-bold text-xl md:text-2xl text-yellow-500">Send us a message</h2>
                    <input
                        class="mb-6 bg-purple-400 placeholder-purple-500 text-purple-500 font-medium text-xs py-4 pl-4"
                        type="text" placeholder="Name" name="name" />
                    <input
                        class="mb-6 bg-purple-400 placeholder-purple-500 text-purple-500 font-medium text-xs py-4 pl-4"
                        type="text" placeholder="Subject" name="subject" />
                    <input
                        class="mb-6 bg-purple-400 placeholder-purple-500 text-purple-500 font-medium text-xs py-4 pl-4"
                        type="text" placeholder="E-Mail" name="email" />
                    <textarea
                        class="mb-6 bg-purple-400 text-purple-500 placeholder-purple-500 font-medium text-xs py-4 pl-4"
                        name="subject" placeholder="Message"></textarea>
                    <button type="submit" value="submit"
                        class="mb-16 px-8 py-4 inline-block placeholder-purple-500 bg-yellow-500 text-base text-black">Send
                        Message</button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection