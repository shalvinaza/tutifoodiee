@extends('master')

@section('isi_page')
    <div class="page-wrapper">
        <div class="container">
            @php($i=0)
            @php($countNull=0)
            <div class="row">
                @foreach($search as $searchresult)
                @if($searchresult->numRows() > 0)
                <div class="row row-tes">
                <h1 class="txt-ask">Search "{{$varsearch}}" by {{array_keys($search)[$i]}}</h1>
                </div>
                <div class="row row-tes">
                @foreach($searchresult as $data)
                <div class="col-md-3">
                    <div class="card">
                        <div class="img-card">
                            <a href="/restaurant/{{$data->id}}">
                                <img src="{{$data->image}}" class="card-img-top" alt="restaurant" />
                            </a>
                        </div>
                        <div class="container cont-card">
                            <div class="row">
                                <label class="card-label">Name</label>
                                <p class="p-card">{{$data->name}}</p>

                                <label class="card-label">Category</label>
                                <p class="p-card">{{$data->category}}</p>
      
                                <label class="card-label">Special Menu</label>
                                <p class="p-card">{{$data->specialMenu}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
                @else
                @php($countNull++)
                @endif
            
                @php($i++)
                @endforeach
            </div>
            @if($countNull >= 5)
                <h3>Tidak ada data yang cocok dengan input pencarian</h3>
            @endif
        </div>
    </div>
@endsection