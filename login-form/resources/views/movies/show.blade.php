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

                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Trailer
                  </button>

                  
      @if(count($movie['videos']['results']) > 0)

    

      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Movie TiTle</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class=" m-5 embed-responsive  embed-responsive-16by9">
             
              <iframe class="responsive-iframe  " src="{{'https://www.youtube.com/embed/'.$movie['videos']['results'][0]['key']}}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>

      @endif
                  
                  
            </div>
          </div>
        </div>
      </div>

      {{-- Cast person starting --}}

      <div>
        <h1 class="text-center fs-1 text fw-bolder p-4 text-white">Cast</h1>
    </div>




        <div class="row row-cols-1 row-cols-md-5 g-4 m-2">

          @foreach($movie['credits']['cast'] as $cast) 
          @if ($loop->index < 5)
          <div class="col">
            <div class="card h-100">
              <img src="{{'https://image.tmdb.org/t/p/w300/'.$cast['profile_path']}}"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $cast['name'] }}</h5>
                <p class="card-text"> {{ $cast['character'] }}</p>
              </div>
              <div class="card-footer">
  
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>


      {{-- IMages starts --}}

      <div>
        <h1 class="text-center fs-1 text fw-bolder p-4 text-white">Images</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 m-4">

      @foreach($movie['images']['backdrops'] as $movieImages) 
      @if ($loop->index < 15)
      <div class="col">
        <div class="card h-100">
          <img src="{{'https://image.tmdb.org/t/p/w500/'.$movieImages['file_path']}}"class="card-img-top" alt="...">

          <div class="card-footer">

          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>

  @endsection

