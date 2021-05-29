@extends('master')

@section('isi_page')
<div class="page-wrapper">
    <div class="container">
        <div class="jumbotron jumb-filter">
            <div class="row">
                <div class="col-50">
                <label>Search by Category<label>
                <select class ="filter-box" name=category onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                    @foreach($unique as $data)
                        <option value="http://localhost:8000/category/{{$data->category}}">{{$data->category}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-50" style="margin-left:130px">
                <label>Search by Special Menu<label>
                <select class ="filter-box" name=category onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
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
