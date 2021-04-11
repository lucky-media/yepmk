<div class="bg-no-repeat bg-cover" style="background-image: url('/assets/images/footer-bg.png'); min-height: 460px;">
    <div class="h-64"></div>
    <div class="container pt-48 pb-20">
        <div class="row justify-center">
            <div class="col-12 lg:col-8 text-center">
                <h2 class="text-white font-bold text-3xl">
                    Are you determined and passionate about youth projects and volunteering?
                </h2>
                <a href="/contact" class=" inline-block mt-8 rounded bg-yellow-500 text-base px-6 py-3 text-white ">Join
                    Us</a>
            </div>
        </div>
    </div>
</div>
<div class="bg-purple-300">
    <div class="container">
        <div class="row mb-4 text-base text-white pt-20">
            <div class="md:col-4 md:text-left md:mb-0 mb-10 text-center">
                {!! $page->contact[0]->name !!}
            </div>
            <div class="md:col-4 md:text-center md:mb-0 mb-10 text-center">
                {!! $page->contact[1]->name !!}
            </div>
            <div class="md:col-4 md:text-right md:mb-0 mb-10 text-center">
                {!! $page->contact[2]->name !!} <br>
                {!! $page->contact[3]->name !!}
            </div>
        </div>
        <div class="row md:justify-between pb-10 mt-16 md:mt-20 lg:mt-32">
            <div class="text-center md:col-6 md:text-left">
                <p class="text-base text-white">© 2019 YEP. All Rights Reserved. Made with <span
                        class="text-yellow-500">&#9829;</span> from <a class="
                        font-bold pb-2 border-b-2 border-transparent hover:border-yellow-500"
                        href="http://www.luckymedia.mk/?ref=YEP" rel="external">Lucky Media</a>
                </p>
            </div>
            <div class=" order-first mb-10 md:mb-0 md:order-none md:col-6 flex flex-row justify-center md:justify-end">
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