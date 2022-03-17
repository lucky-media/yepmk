@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="{{ $page->siteName }} | Contact" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="Feel free to contact us." />
@endpush

@section('body')

<div class="container">
    <div class="items-center mb-20 row">
        <div class="md:col-6 lg:col-4">
            <h1 class="text-2xl font-bold text-purple-500 reveal lg:text-5xl">Feel free to contact us</h1>
        </div>
        <div class="order-first mb-10 reveal col-12 md:order-none md:col-6 lg:offset-1 lg:col-7">
            @include('_partials/contact-svg')
        </div>
    </div>
</div>
<div class="container">
    <div class="justify-between row">
        <div class="mb-16 md:col-4 lg:col-4 md:mb-0">
            <h2 class="text-2xl font-bold text-purple-500 reveal lg:text-5xl">Our office</h2>

            @foreach($page->contact as $contact)
            <div class="flex flex-row items-center reveal">
                <img class="w-10 h-10" src="{{ $contact->icon }}" srcset="{{ $contact->icon_lg }}" alt="">
                @if ($contact->href)
                <a href="{{ $contact->href}}" target="_blank">
                @endif
                <p class="py-8 ml-5 text-sm font-medium text-gray-500">
                    {!! $contact->name !!}
                </p>
                @if ($contact->href)
                </a>
                @endif
            </div>
            @endforeach

        </div>
        <div class="mb-16 md:mb-0 md:col-8 lg:col-6">
            <div class="bg-purple-500 rounded-xl">
                <form name="contact" data-netlify="true" action="POST">
                    <div class="flex flex-col justify-center px-10 md:px-16">
                        <h2 class="mt-16 mb-6 text-xl font-bold text-yellow-500 reveal md:text-2xl">Send us a message
                        </h2>
                        <input
                            class="py-4 pl-4 mb-6 text-xs font-medium text-purple-500 placeholder-purple-500 bg-purple-400 reveal"
                            type="text" placeholder="Name" name="name" required />
                        <input
                            class="py-4 pl-4 mb-6 text-xs font-medium text-purple-500 placeholder-purple-500 bg-purple-400 reveal"
                            type="text" placeholder="E-Mail" name="email" required />
                        <input
                            class="py-4 pl-4 mb-6 text-xs font-medium text-purple-500 placeholder-purple-500 bg-purple-400 reveal"
                            type="number" placeholder="Phone" name="phone" required />
                        <input
                            class="py-4 pl-4 mb-6 text-xs font-medium text-purple-500 placeholder-purple-500 bg-purple-400 reveal"
                            type="text" placeholder="Subject" name="subject" required />
                        <textarea
                            class="py-4 pl-4 mb-6 text-xs font-medium text-purple-500 placeholder-purple-500 bg-purple-400 reveal"
                            name="message" placeholder="Message" required></textarea>
                        <button type="submit" value="submit"
                            class="inline-block px-8 py-4 mb-16 text-base text-black placeholder-purple-500 bg-yellow-500">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
@endsection