@extends('layouts.front')
@section('title')
@endsection
@section('content')
    <div class="py-4 mb-4 shadow-sm bg-warning border-top ">
        <div class="container">
            <h3 class="mb-0">collection/ {{ $products[0]->category->name }} / {{ $products[0]->name}} </h3>
        </div>
    </div>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('productImages/' . $products[0]->image) }}" class="w-100" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products[0]->name }}
                            @if ($products[0]->trending == '1' )
                               <label style="font-size: 18px" class="float-right badge btn-danger">Trending</label>
                            @endif
                        </h2>
                        <hr>
                        <label class="me-3">Original Price :<s>Rs {{ $products[0]->original_price }}</s></label>
                        <label class="fw-bold"><strong>Selling Price :Rs {{ $products[0]->selling_price }}</strong> </label>
                        <p class="mt-3">
                            {{ $products[0]->small_description }}
                        </p>
                        <hr>
                        @if ($products[0]->qty > 0)
                            <label style="font-size: 18px" class="badge btn-success">In Stock</label>
                        @else
                            <label style="font-size: 18px" class="badge btn-danger">Out of stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <span class="input-group-text">-</span>
                                    <input type="text" class="form-control" name="quantity" value="1" />
                                    <span class="input-group-text" style="margin-right: -10px">+</span>
                                </div>
                            </div>
                            <div class="col-md-10" style="margin-top:1%">
                                <br>
                                <button type="button" class="btn btn-success me-3 float-strat">Add To Wishlist</button>
                                <button type="button" class="btn btn-primary me-3 float-strat">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
