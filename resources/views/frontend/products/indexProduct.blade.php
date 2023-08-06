@extends('layouts.front')
@section('title')
{{$category->name}}
@endsection

@section('content')
<div class="py-4 mb-4 shadow-sm bg-warning border-top ">
    <div class="container">
        <h3 class="mb-0">collection/ {{$category->name}} </h3>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <h2>{{$category->name}}</h2>
        <div class="row">
            @foreach ($products as $prod)
                <div class="col-md-4 mt-3">
                    <div class="card" style="width: 20rem;">
                        <a href="{{url('category/'.$category->slug.'/'.$prod->slug)}}">
                        <img class="card-img-top " src="{{ asset('productImages/' . $prod->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $prod->name }}</h4>
                            <span class="">{{ $prod->selling_price }}</span>
                            <span class="" style="text-align:right;"><s> {{ $prod->original_price }}</s></span>
                        </div>
                    </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
