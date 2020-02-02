<div class="bg-white sticky top-0" style="z-index: 9999;">
    <div class="container">
        <div class="row justify-between items-center py-4 text-base text-black">
            <div class="col-3">
                <a href="/">
                    @include('_partials.logo')
                </a>
            </div>

            <div class="col-2 md:hidden block">
                <label for="menu-toggle" class="pointer-cursor">
                    <svg class="fill-current text-yellow-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
            </div>

            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="transition opacity-0 hidden flex-col md:opacity-100 md:col-8 md:flex md:flex-row items-center justify-end pt-6 md:pt-0"
                id="menu">
                @foreach($page->menu as $menu)
                <a class="transition w-full text-center text-xl uppercase font-bold py-6 border-purple-100 border-b last:border-b-0 md:font-medium md:text-base md:normal-case md:py-2 md:border-transparent md:border-b-2 md:hover:border-yellow-500 md:w-auto md:mr-8 last:mr-0 hover:text-purple-500 {{ $page->isActive($menu->url) ? 'md:border-yellow-500' : '' }}"
                    href="{{ $menu->url }}">{{ $menu->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>