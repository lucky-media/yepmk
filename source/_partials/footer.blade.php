<div class="bg-no-repeat bg-cover" style="background-image: url('/assets/images/footer-bg.png'); min-height: 460px;">
    <div class="h-64"></div>
    <div class="container pt-48 pb-20">
        <div class="justify-center row">
            <div class="text-center col-12 lg:col-8">
                <h2 class="text-3xl font-bold text-white">
                    Are you determined and passionate about youth projects and volunteering?
                </h2>
                <a href="/contact" class="inline-block px-6 py-3 mt-8 text-base text-white bg-yellow-500 rounded ">Join
                    Us</a>
            </div>
        </div>
    </div>
</div>
<div class="bg-purple-300">
    <div class="container">
        <div class="pt-20 mb-4 text-base text-white row">
            <a class="mb-10 text-center md:col-4 md:text-left md:mb-0" href="{{$page->contact[0]->href}}" target="_blank">
                {!! $page->contact[0]->name !!}
            </a>
            <div class="mb-10 text-center md:col-4 md:text-center md:mb-0">
                {!! $page->contact[1]->name !!}
            </div>
            <div class="mb-10 text-center md:col-4 md:text-right md:mb-0">
               <a href="{{$page->contact[2]->href}}">{!! $page->contact[2]->name !!}</a> <br>
                <a href="{{$page->contact[3]->href}}">{!! $page->contact[3]->name !!}</a>
            </div>
        </div>
        <div class="pb-10 mt-16 row md:justify-between md:mt-20 lg:mt-32">
            <div class="text-center md:col-6 md:text-left">
                <p class="text-base text-white">© 2021 YEP. All Rights Reserved. Made with <span
                        class="text-yellow-500">&#9829;</span> from <a class="pb-2 font-bold border-b-2 border-transparent hover:border-yellow-500"
                        href="https://www.luckymedia.dev/?ref=YEP" rel="external">Lucky Media</a>
                </p>
            </div>
            <div class="flex flex-row justify-center order-first mb-10 md:mb-0 md:order-none md:col-6 md:justify-end">
                @foreach($page->social_media as $social)
                <a class="mr-8 last:mr-0" rel="noopener noreferrer" aria-label="{{ $social->name }}"
                    href="{{ $social->url }}" target="_blank">
                    @include('_partials.icon', ['name' => $social->name, 'class' => 'w-8 h-8 text-yellow-500'])
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
