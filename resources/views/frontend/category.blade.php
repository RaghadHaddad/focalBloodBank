@extends('layouts.front')
@section('title')
    Category
@endsection
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All categories</h2>
                    <div class="row">
                        @foreach ($category as $cate)
                            <div class="col-md-3 mt-3">
                                <a href="{{ url('view-category/'. $cate->slug) }}">
                                    <div class="card">
                                        <img class="card-img-top " src="{{ asset('Images/' . $cate->image) }}"
                                            alt="category image">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $cate->name }}</h4>
                                            <p>
                                                {{ $cate->description }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
