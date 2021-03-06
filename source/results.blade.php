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
                Sara idrizi<br>
                Flamur Zulbeari<br>
                Anis Neziri<br><br>
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
                Suhejl Zendeli<br><br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Saturday 14:00</b><br>
                Andi Sulejmani<br>
                Esra Hamiti<br>
                Bejan Sallmani<br>
                Lenard Demiri<br>
                Dijar Goxha<br>
                Endrit Mahmuti<br>
                Enes Ramadani<br>
                Blend Selimi<br><br>
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
                Agon Baka<br><br><br>
            </p>
        </div>


        <div class="md:col-6 lg:col-6">
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Sunday 11:00</b><br>
                Jasin Lutfiu<br>
                Arbenit Sulejmani<br>
                Labian Tairi<br>
                Roxhers Çollaku<br>
                Elif Zulbeari<br>
                Altina Isejni<br>
                Omer ahmeti<br><br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Sunday 12:00</b><br>
                Namik Jakupi<br>
                Ylli Elmazi<br>
                Jasin Dauti<br>
                Kanita Imeri<br>
                Devla Fejzullai<br>
                Hana Osmani<br>
                Mijesere Veseli<br>
                Valon Ferati<br><br>
            </p>
            <p class="reveal lg:mt-4 text-sm text-medium">
                <b>Sunday 14:00</b><br>
                Nërgim Sulejmani<br>
                Eda Ajdari<br>
                Aldin Memedi<br>
                Venis Memedi<br>
                Ikra Selimi<br>
                Arisa Neziri<br>
                Emir Mücaiti<br>
                Omer Selimi<br><br>
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
                Fakri Saliu<br><br>
            </p>
            </p>
        </div>
    </div>
</div>

@endsection