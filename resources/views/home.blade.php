@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <img src={{ url('images/logo.png') }} style="width:200px">
            <hr>
            Selamat datang Admin
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection