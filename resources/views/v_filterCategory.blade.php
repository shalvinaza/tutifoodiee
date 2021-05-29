@extends('master')

@section('isi_page')
<div class="page-wrapper">
        <div class="container">
            <h1 class="txt-ask">Restaurants in {{$city}} filtered by {{$category}}</h1>

            <div class="row">
                @foreach($category as $category)
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