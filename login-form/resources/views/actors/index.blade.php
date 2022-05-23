@extends('design.appbar')

@section('content')


      <div class="row">
        <div class="col-lg-5 p-5">
          <div class="card" >
            <img src="{{'https://image.tmdb.org/t/p/w780/'.$movie['poster_path']}}"class="card-img-top img-fluid" alt="..." style=" width:100%;   height: 500px;">
          </div>
        </div>
        <div class="col-lg-6 pt-5">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold" class="fs-1">TITLE:  {{ $movie['title'] }} </h5>
                <p class="card-text fw-bold">DESCRIPTION: {{ $movie['overview'] }}</p>
                <p class="card-text fw-bold">Rating: {{ $movie['vote_average'] }}</p>
                <span class="fw-bold">{{\Carbon\Carbon ::parse($movie['release_date'])->format('M d, Y') }}</span>

                <div class="fw-bold">
                    @foreach ($movie['genres'] as $mov) 
                      {{ $mov['name']}}@if (!$loop->last) , @endif
                    @endforeach
              
                  </div> 
            </div>
          </div>
        </div>
      </div>


  @endsection

