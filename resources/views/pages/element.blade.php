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

    {{-- DETAILS --}}
    <section class="details">
        <div class="elem-container">
            <div class="details-wrapper">
                <div class="talent">
                    <h2>
                        Talent
                    </h2>

                    <div class="art-by">
                        <div class="art-by-left">
                            <span>
                                Art By:
                            </span>
                        </div>
                        <div class="art-by-right">
                            @foreach ($elem['artists'] as $artist)
                                @if ($loop->last)
                                    {{ $artist }}
                                @else
                                    {{ $artist }},
                                @endif
                                
                            @endforeach
                        </div>
                    </div>

                    <div class="written-by">
                        <div class="written-by-left">
                            Written By:
                        </div>
                        <div class="written-by-right">
                            @foreach ($elem['writers'] as $writer)
                                @if ($loop->last)
                                    {{ $writer }}
                                @else
                                    {{ $writer }},
                                @endif
                                
                            @endforeach
                        </div>
                    </div>
                </div>
    
                <div class="specs">
                    <h2>
                        Specs
                    </h2>

                    <div class="series">
                        <div class="series-left">
                            Series:
                        </div>
                        <div class="series-right">
                            {{ $elem['series'] }}
                        </div>
                    </div>
                    <div class="details-price">
                        <div class="details-price-left">
                            U.S. Price:
                        </div>
                        <div class="details-price-right">
                            {{ $elem['price'] }}
                        </div>
                    </div>
                    <div class="sale-date">
                        <div class="sale-date-left">
                            On Sale Date
                        </div>
                        <div class="sale-date-right">
                            {{ $elem['sale_date'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
