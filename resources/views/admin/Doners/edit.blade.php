@extends('layouts.admin')

@section('content')
@php
$BloodType = ['A+', 'A-', 'B+', 'B-', 'AB', 'O+', 'O-'];
$Gender = ['Male','Femal'];
@endphp
<div class="card">
    <div class="card-header">
        <h1>Edit/Update Donor</h1>
    </div>
    <div class="card-body">
        <form action="{{url('update-donor/'.$donor->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{$donor->name}}" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">address</label>
                    <input type="text" value="{{$donor->address}}" class="form-control" name="address">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">phone</label>
                    <input type="tel"  name="phone" class="form-control" value="{{$donor->phone}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Gender</label>
                    <select class="form-control" name="gender">
                        @foreach ($Gender as $item)
                            <option value="{{$donor->gender}}">
                                {{ $item }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Blood Type</label>
                    <select class="form-control" name="bloodType">
                        @foreach ($BloodType as $item)
                            <option value="{{$donor->bloodType}}">
                                {{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mt-12">
                    <label for="">status</label>
                    <input type="checkbox" {{$donor->status == "1" ? 'checked' : ''}}  name="status">
                </div>

                @if($donor->Image)
                    <img  class="cate-image" src="{{asset('images/'.$donor->Image)}}" alt="donor Image">
                @endif
                <div class="col-md-12">
                    <input type="file" class="form-control" name="Image">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
