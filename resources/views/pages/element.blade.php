@extends('layouts.main-layout')

@section('content')
    {{-- BLUE BAR --}}
    <section class="blue-bar">
        <div class="elem-container">
            <img src="{{ $elem['thumb'] }}" alt="">
        </div>
    </section>

    {{-- PRODUCT --}}
    <section class="product">
        <div class="elem-container">
            <div class="product-wrapper">
                <div class="product-description">
                    <h2>
                        {{ $elem['title'] }}
                    </h2>
                </div>

                <div class="adv">
                    <h3>
                        Advertisement
                    </h3>
                    <img src="{{ asset('storage/assets/images/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
