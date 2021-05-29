@extends('master')

@section('isi_page')
    <div class="page-wrapper">
        <div class="container">
            <h1 class="txt-ask">Restaurants in {{$city}}</h1>

            <!-- <div class="jumbotron jumb-filter">
                <div class="row">
                    <div class="col-50">
                    <label>Search by Category<label>
                    <select class ="filter-box" name=category onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <option value="">Select...</option>
                        <option value="http://localhost:8000/category/buffet">Buffet </option>
                        <option value="http://localhost:8000/category/sundanese">Sundanese </option>
                        <option value="http://localhost:8000/category/padang">Padang </option>
                        <option value="http://localhost:8000/category/western">Western </option>
                    </select> 
                    </div>
                    <div class="col-50" style="margin-left:130px">
                    <label>Search by Special Menu<label>
                    <select class ="filter-box" name=category> 
                        <option value="seafood">Seafood</option>
                        <option value="fried_chicken">Fried Chicken </option>
                        <option value="pizza">Pizza </option>
                        <option value="dumpling">Dumpling </option>
                        <option value="dessert">Dessert </option>
                        <option value="breakfast">Breakfast </option>
                    </select> 
                    </div>
                </div>
            </div> -->
            <div class="row">
                @foreach($cities as $city)
                <div class="col-md-3">
                    <div class="card">
                        <div class="img-card">
                            <a href="/restaurant/{{$city->id}}">
                                <img src="{{$city->image}}" class="card-img-top" alt="restaurant" />
                            </a>
                        </div>
                        <div class="container cont-card">
                            <div class="row">
                                <label class="card-label">Name</label>
                                <p class="p-card">{{$city->name}}</p>

                                <label class="card-label">Category</label>
                                <p class="p-card">{{$city->category}}</p>
      
                                <label class="card-label">Special Menu</label>
                                <p class="p-card">{{$city->specialMenu}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection