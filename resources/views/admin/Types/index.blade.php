@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>BloodTypes Page</h4>
        <hr>
        <a class="btn btn-success w-25" href="{{url('add-types')}}">Add BloodType for person</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered teble-striped">
           <thead>
            <tr>
                <th>Id</th>
                <th>type</th>
                <th>owner</th>
                <th>Start Date</th>
                <th>Action</th>
            </tr>
           </thead>
           <tbody>
            @foreach ($types as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->owner}}</td>
                <td>{{$item->startDate}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{url('edit-type/'.$item->id)}}">Edit</a>
                    <a class="btn btn-danger  btn-sm"  href="{{url('delete-type/'.$item->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
           </tbody>
        </table>
    </div>
</div>
@endsection
