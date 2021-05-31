@extends('master')

@section('title','Home')

@section('isi_page')
<div class="page-wrapper">
    <div class="container">
        <div class="jumbotron jumb-filter">
            <div class="row" style="width:100%">
                <div class="col-50">
                <label>Search by Category<label><br>
                <select class ="filter-box" name=category onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                    <option value="">Select...</option>
                    @foreach($unique as $data)
                        <option value="http://localhost:8000/category/{{$data->category}}">{{$data->category}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-50">
                <label>Search by Special Menu<label><br>
                <select class ="filter-box" name=category onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                    <option value="">Select...</option>
                    @foreach($uniques as $data)
                        <option value="http://localhost:8000/special-menu/{{$data->specialMenu}}">{{$data->specialMenu}}</option>
                    @endforeach
                </select>
                </div>
            </div>
        </div>

        <h1 class="txt-ask">Where are you located?</h1>

        <p class="txt-provinsi">Jawa Barat</p>
        <div class="row" style="padding-left:50px">
            <button class="col-md-2 btn-kota">
                <a href="/city/Bandung"><span>Bandung</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Bekasi"><span>Bekasi</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Bogor"><span>Bogor</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Cimahi"><span>Cimahi</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Cirebon"><span>Cirebon</span></a>
            </button>
        </div>

        
        <p class="txt-provinsi">Jakarta</p>
        <div class="row" style="padding-left:50px">
            <button class="col-md-2 btn-kota">
                <a href="/city/Jakarta%20Barat"><span>Jakarta Barat</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Jakarta%20Pusat"><span>Jakarta Pusat</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Jakarta%20Selatan"><span>Jakarta Selatan</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Jakarta%20Timur"><span>Jakarta Timur</span></a>
            </button>
            <button class="col-md-2 btn-kota">
                <a href="/city/Jakarta%20Utara"><span>Jakarta Utara</span></a>
            </button>
        </div>
    </div>
</div>
@endsection
