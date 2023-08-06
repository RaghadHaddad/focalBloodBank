@extends('layouts.admin')
@section('content')
@php
$BloodType = ['A+', 'A-', 'B+', 'B-', 'AB', 'O+', 'O-'];
$Gender = ['Male','Femal'];
@endphp
<div class="card">
    <div class="card-header">
        <h1>Add User</h1>
    </div>
    <div class="card-body">
        <form action="{{url('insert-donor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">phone</label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Gender</label>
                    <select class="form-control" name="gender" >
                        @foreach ($Gender as $item)
                            <option value="{{$item}}">
                                {{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Blood Type</label>
                    <select class="form-control" name="bloodType">
                        @foreach ($BloodType as $item)
                            <option value="{{$item}}">
                                {{ $item }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="checkbox"  name="status"> --}}
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  name="status">
                </div>
                <div class="col-md-12">
                    <input type="file" class="form-control" name="Image">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="margin-top: 50px">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
