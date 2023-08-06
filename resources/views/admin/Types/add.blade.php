@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Add Blood Type</h1>
    </div>
    <div class="card-body">
        <form action="{{url('insert-type')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" name="owner" >
                        <option>Select a owner</option>
                        @foreach ($donors as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">type</label>
                    <input type="text" class="form-control" name="type">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">start Date</label>
                    <input type="date" class="form-control" name="startDate">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
