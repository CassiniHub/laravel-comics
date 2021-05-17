@extends('layouts.main-layout')

@section('content')
    <section class="jumbotron">
        <div class="jumbotron-bg">
            
        </div>
    </section>


                    

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
@endsection