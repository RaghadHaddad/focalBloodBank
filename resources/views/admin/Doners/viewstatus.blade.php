@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Donor Page</h4>
        <hr>
            <form class="navbar-form"  method="POST" action="{{url('queue.store')}}">
                @csrf
                <div class="input-group no-border">
                    <input type="text" class="form-control" style="width: 25px" placeholder="Search..." name="bloodtype">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        Add to queue
                        {{-- <i class="material-icons">search</i>
                        <div class="ripple-container"></div> --}}
                    </button>
                </div>
            </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered teble-striped" id="myTable">
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
                    <a class="btn btn-danger w-30"  href="{{url('delete-donor/'.$item->id)}}">Delete</a>
                    <button class="btn btn-primary w-35" id="doneButton">Done Give</button>
                </td>
            </tr>
<script>
  document.getElementById('doneButton').addEventListener('click', function() {
    alert('Done');
  });
</script>
<script>
    function searchProduct() {
        "use strict";
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";

                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

            @endforeach
           </tbody>
        </table>
    </div>
</div>

@endsection
