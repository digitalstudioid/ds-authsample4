@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ceritanya Halaman Admin</div>

                <div class="panel-body">
                    Selamat Datang {{$user->role->full_name}} <br> {{$user->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection