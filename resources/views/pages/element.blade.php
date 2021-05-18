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
                        {{$elem['title']}}
                    </h2>

                    <div class="availability-bar">
                        <div class="availability-bar-left">
                            <span class="price">
                                U.S. Price : {{ $elem['price'] }}
                            </span>

                            <span >
                                AVAILABLE
                            </span>
                        </div>
                        <div class="availability-bar-right">
                            <span>Check Availability</span>
                        </div>
                    </div>

                    <p class="description">
                        {{ $elem['description'] }}
                    </p>
                </div>

                <div class="adv">
                    <h3>
                        ADVERTISEMENT
                    </h3>
                    <img src="{{ asset('storage/assets/images/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
