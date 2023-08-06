@extends('layouts.admin')
@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item"><a href="#">Admin</a></li> --}}
                        <li class="breadcrumb-item"><a href="#">Donors</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donor Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
<div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$donor->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$donor->address}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$donor->gender}}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">status</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$donor->status}}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Blood Type</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$donor->bloodType}}</p>
                </div>
              </div>
          </div>
        </div>
    </div>
    </div>
</section>


@endsection
