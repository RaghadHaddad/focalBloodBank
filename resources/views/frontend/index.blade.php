@extends('layouts.front')
@section('title')
    Welcome to E-shop
@endsection
@section('content')
    <div class="py-5">
        @include('layouts.inc.slide')
        <div class="container">
            <h2>Featured Products</h2>
            <div class="row">
                @foreach ($item_products as $prod)
                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top " src="{{ asset('productImages/' . $prod->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{ $prod->name }}</h4>
                                <span class="">{{ $prod->selling_price }}</span>
                                <span class="float-right"><s> {{ $prod->original_price }}</s></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
     <hr style=" width:100%; height:1px; background: black">
    <div class="py-5">
        <div class="container">
            <h2>Trending Category</h2>
            <div class="row">
                @foreach ($trend_cate as $trending)
                    <div class="col-md-4 mt-3">
                        <a href="{{ url('view-category/'. $trending->slug) }}">
                            <div class="card" style="width: 20rem;">
                                <img class="card-img-top " src="{{ asset('Images/' . $trending->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $trending->name }}</h4>
                                    <p>
                                        {{$trending->description}}
                                    </p>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection


