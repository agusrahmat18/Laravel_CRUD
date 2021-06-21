@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <p>
                <?php 
                    echo ("+")."<br>";
                    echo ("- -")."<br>";
                    echo ("***")."<br>";
                    echo ("++++")."<br>";
                    echo ("- - - - -")."<br>";
                    echo ("****")."<br>";
                    echo ("+++")."<br>";
                    echo ("- -")."<br>";
                    echo ("*")."<br>";
                ?>
            </p>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection