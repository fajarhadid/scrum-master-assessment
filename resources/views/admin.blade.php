@extends('layouts.app')

@section('active1')
active
@endsection
@section('content')
<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            @include('layouts.menu')
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-tachometer-alt"></i> DASHBOARD</h5>
                        <hr>
                        Selamat Datang <strong>{{ auth()->user()->name }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
