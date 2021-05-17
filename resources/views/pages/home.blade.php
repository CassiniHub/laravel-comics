@extends('layouts.main-layout')

@section('content')
    {{-- JUMBOTRON --}}
    <section class="jumbotron">
        <div class="jumbotron-bg">

        </div>
    </section>

    {{-- CURRENT SERIES --}}
    <section class="current-series">
        <div class="container">
            <div class="current-series-title">
                <span>CURRENT SERIES</span>
            </div>

            <div class="current-series-wrapper">
                <ul>
                    @foreach ($data as $item)
                        <li>
                            <img src="{{ $item['thumb'] }}" alt="">
                            <span>{{ $item['title']}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="load-more">
                <button class="load-more-btn">LOAD MORE</button>            
            </div>
        </div>
    </section>

    {{-- INFOMRATIONS --}}
    <section class="informations">
        <div class="container">
            <div class="informations-wrapper">
                <ul>
                    <li>
                        <a href="">
                            <img src="{{ asset('storage/assets/images/buy-comics-digital-comics.png') }}" alt="">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('storage/assets/images/buy-comics-merchandise.png') }}" alt="">
                            <span>DC MERCHANDISE</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('storage/assets/images/buy-comics-subscriptions.png') }}" alt="">
                            <span>SUBSCRIPTIONS</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('storage/assets/images/buy-comics-shop-locator.png') }}" alt="">
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ asset('storage/assets/images/buy-dc-power-visa.svg') }}" alt="">
                            <span>DC POWER VISA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection