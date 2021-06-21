@extends('layouts.admin')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="content">
    <div class="row">
        <div class="col-lg-12">
        <form method="POST" action="{{ url('admin/tugas2/submit') }}">{{csrf_field()}}
            Total uang <input type= "text" name= "uang"><br><br>
            <input type= "submit" name="submit" value= "Proses">
            <input type= "reset" name="reset" value= "Reset"><br><br>
        </form>

            <?php
                $dataa = @$_POST[uang] % 100000;
                $a = (@$_POST[uang] - $dataa) / 100000;

                $datab = $dataa % 50000;
                $b = ($dataa - $datab) / 50000;

                $datac = $datab % 20000;
                $c = ($datab - $datac) / 20000;

                $datad = $datac % 5000;
                $d = ($datac - $datad) / 5000;

                $datae = $datad % 100;
                $e = ($datad- $datae) / 100;

                $dataf = $datae % 50;
                $f = ($datae - $dataf) / 50;

                echo "Jumlah Rp.100.000 = ".$a."<br>";
                echo "Jumlah Rp.50.000 = ".$b."<br>";
                echo "Jumlah Rp.20.000 = ".$c."<br>";
                echo "Jumlah Rp.5.000 = ".$d."<br>";
                echo "Jumlah Rp.100 = ".$e."<br>";
                echo "Jumlah Rp.50 = ".$f."<br><br>";
                
                echo "<b>Total Uang</b> = ".@$_POST[uang]."<br>";
            ?>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
@parent

@endsection
