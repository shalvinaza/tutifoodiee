@extends('master')

@section('title','Filter By Category')

@section('isi_page')
    <div class="page-wrapper">
        <div class="container">
            <h1 class="txt-ask">"{{$category}}" Restaurants</h1>
            
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-3">
                    <div class="card">
                        <div class="img-card">
                            <a href="/restaurant/{{$category->id}}">
                                <img src="{{$category->image}}" class="card-img-top" alt="restaurant" />
                            </a>
                        </div>
                        <div class="container cont-card">
                            <div class="row" style="margin:0">
                                <label class="card-label">Name</label>
                                <p class="p-card">{{$category->name}}</p>

                                <label class="card-label">Category</label>
                                <p class="p-card">{{$category->category}}</p>
      
                                <label class="card-label">Special Menu</label>
                                <p class="p-card">{{$category->specialMenu}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection