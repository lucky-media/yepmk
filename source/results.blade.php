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
        <div class="md:col-12 lg:col-12">
            <h1 class="reveal text-2xl lg:text-5xl text-purple-500 font-bold">Groups for ROBOKID</h1>
        </div>
    </div>
    <div class="row items-center">
        <div class="md:col-6 lg:col-6">
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Saturday 11:00</b><br>
                Nazmije Saliu<br>
                Berna Aliu<br>
                Gentian Aliu<br>
                Enes Ramadani<br>
                Sara idrizi<br>
                Flamur Zulbeari<br>
                Anis Neziri<br>
                Dijar Goxha<br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Saturday 12:00</b><br>
                Rinor Zeqiri<br>
                Rina Bilalli<br>
                Blinor Mustafai<br>
                Berkan Bajrami<br>
                Amina Abduraimi<br>
                Mirela Neziri<br>
                Esra Ilazi<br>
                Suhejl Zendeli<br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Saturday 14:00</b><br>
                Andi Sulejmani<br>
                Esra Hamiti<br>
                Bejan Sallmani<br>
                Lenard Demiri<br>
                Afan Ramadani<br>
                Endrit Mahmuti<br>
                Adis Sulejmani<br>
                Valon Aliu<br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Saturday 15:00</b><br>
                Xhevat Arslani<br>
                Tuana Alili<br>
                Blerina Saliu<br>
                Eda Zulfija<br>
                Fisnik Izeiri<br>
                Ilirjan Osmani<br>
                Amra Ibraimi<br>
                Agon Baka
            </p>
        </div>


        <div class="md:col-6 lg:col-6">
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Sunday 11:00</b><br>
                Jasin Lutfiu<br>
                Arbenit Sulejmani<br>
                Genci Selmani<br>
                Roxhers Çollaku<br>
                Elif Zulbeari<br>
                Altina Isejni<br>
                Omer ahmeti<br>
                Blend Selimi<br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Sunday 12:00</b><br>
                Namik Jakupi<br>
                Ylli Elmazi<br>
                Jasin Dauti<br>
                Besir Abdiu<br>
                Devla Fejzullai<br>
                Hana Osmani<br>
                Mijesere Veseli<br>
                Valon Ferati<br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Sunday 14:00</b><br>
                Nërgim Sulejmani<br>
                Islam ismaili<br>
                Aldin Memedi<br>
                Venis Memedi<br>
                Mert Hüseyini<br>
                Emir Mücaiti<br>
                Eda Ajdari<br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Sunday 15:00</b><br>
                Elvedin Sadiku<br>
                Blendian Mislimi<br>
                Albin Seferi<br>
                Omer Sadiku<br>
                Hana Sadiku<br>
                Viola Aqifi<br>
                Sehare Bajrami<br>
                Fakri Saliu
            </p>
            </p>
        </div>
    </div>
</div>

@endsection