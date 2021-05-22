@extends('master')

@section('isi_page')
<div class="page-wrapper">
    <div class="container">
        <h1 class="txt-ask">Where are you located?</h1>
        <p class="txt-provinsi">Jawa Barat</p>
        <div class="row" style="padding-left:50px">
            <button class="col-md-2 btn-kota">Bandung</button>
            <button class="col-md-2 btn-kota">Bekasi</button>
            <button class="col-md-2 btn-kota">Bogor</button>
            <button class="col-md-2 btn-kota">Cimahi</button>
            <button class="col-md-2 btn-kota">Cirebon</button>
        </div>

        
        <p class="txt-provinsi">Jakarta</p>
        <div class="row" style="padding-left:50px">
            <button class="col-md-2 btn-kota">Jakarta Barat</button>
            <button class="col-md-2 btn-kota">Jakarta Pusat</button>
            <button class="col-md-2 btn-kota">Jakarta Selatan</button>
            <button class="col-md-2 btn-kota">Jakarta Timur</button>
            <button class="col-md-2 btn-kota">Jakarta Selatan</button>
        </div>

        <p class="txt-provinsi">Banten</p>
        <div class="row" style="padding-left:50px">
            <button class="col-md-2 btn-kota">Cilegon</button>
            <button class="col-md-2 btn-kota">Serang</button>
            <button class="col-md-2 btn-kota">Tangerang Selatan</button>
            <button class="col-md-2 btn-kota">Tangerang</button>
        </div>
    </div>
</div>
@endsection
