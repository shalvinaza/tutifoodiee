@extends('master')

@section('isi_page')
<div class="page-wrapper">
    @foreach($ids as $restaurant)
    <div class="container cont-resDetail">
        <h1 class="txt-ask">{{$restaurant->name}}</h1>

        <div class="row">
            <div class="col-md-4">
                <img src="{{$restaurant->image}}" alt="restaurant" width="100%">
            </div>
            <div class="col-md-8">
                <div class="row" style="margin:10px 0 10px 0">
                    <div class="col-md-6">
                        <div class="stars">
                                <label class="star star-5"></label>
                                <label class="star star-4"></label>
                                <label class="star star-3"></label>
                                <label class="star star-2"></label>
                                <label class="star star-1 checked"></label>
                            </div>
                    </div>
                    <!-- <h3>Rating: {{$restaurant->rating}}/5</h3> -->

                    <div class="col-md-6">
                    <div class="row" style="background-color: #C4C4C4; justify-content:center">
                        <p>Range Harga : </p>  
                            <p> Rp {{$restaurant->lowestPrice}}</p>
                            <p>-</p>
                            <p>Rp {{$restaurant->highestPrice}}</p>
                        </div>
                    </div>
                </div>

                <div class="row" style="font-size:24px">
                    <label class="col-md-3" style="color: #F88938">Name</label>
                    <p class="col-md-9">{{$restaurant->name}}</p>

                    <label class="col-md-3" style="color: #F88938">Category</label>
                    <p class="col-md-9">{{$restaurant->category}}</p>

                    <label class="col-md-3" style="color: #F88938">Special Menu</label>
                    <p class="col-md-9">{{$restaurant->specialMenu}}</p>

                    <label class="col-md-3" style="color: #F88938">Alamat</label>
                    <p class="col-md-9">{{$restaurant->address}}</p>
                </div>

                <div class="jumbotron jumb-resDet">
                    <p style="font-size:24px">Galeri</p>

                    <div class="row">
                        <img src="asset('assets/images/lobster1.png')" class="col-md-3 img-resDet" alt="makanan1">
                        <img src="assets/images/lobster2.png" class="col-md-3 img-resDet" alt="makanan2">
                        <img src="assets/images/lobster3.png" class="col-md-3 img-resDet" alt="makanan3">
                        <img src="assets/images/lobster1.png" class="col-md-3 img-resDet" alt="makanan4">

                        <img src="assets/images/lobster1.png" class="col-md-3 img-resDet" alt="makanan1">
                        <img src="assets/images/lobster2.png" class="col-md-3 img-resDet" alt="makanan2">
                        <img src="assets/images/lobster3.png" class="col-md-3 img-resDet" alt="makanan3">
                        <img src="assets/images/lobster1.png" class="col-md-3 img-resDet" alt="makanan4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection