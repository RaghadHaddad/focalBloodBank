@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Donor Page</h4>
        <hr>
        <a class="btn btn-success w-25" href="{{url('add-donor')}}">Add Donor</a>
        <a class="btn btn-danger w-25" href="{{url('view-status')}}">view</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered teble-striped">
           <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>address</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>status</th>
                <th>Blood Type</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
           </thead>
           <tbody>
            @foreach ($donor as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->bloodType}}</td>
                <td>
                <img src="{{asset('Images/'.$item->Image)}}" style=" width: 90px;
                height: 90px;"  alt="Image here">
                </td>
                <td>
                    <a class="btn btn-primary w-25" href="{{url('edit-donor/'.$item->id)}}">Edit</a>
                    <a class="btn btn-success w-25" href="{{url('My-profile/'.$item->id)}}">View</a>
                    <a class="btn btn-danger w-30"  href="{{url('delete-donor/'.$item->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
{{-- {{url('edit-category/'.$item->id)}} --}}
           </tbody>
        </table>
    </div>
</div>

@endsection
