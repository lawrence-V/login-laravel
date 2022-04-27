<div>
    {{-- <div class="card h-100">
    <img src="{{'https://image.tmdb.org/t/p/w780/'.$movie['backdrop_path']}}"class="card-img-top" alt="...">
     <div class="card-body">
       <h5 class="card-title">{{ $movie['title'] }}</h5>
       <p class="card-text">{{ $movie['overview'] }}</p>
       <p class="card-text">Rating: {{ $movie['vote_average'] }}</p>
       <span>{{\Carbon\Carbon ::parse($movie['release_date'])->format('M d, Y') }}</span>
       
     </div>

      <div>
       @foreach ($movie['genre_ids'] as $genre) 
         {{ $genres->get($genre) }}@if (!$loop->last) , @endif
       @endforeach
      </div>
</div> --}}
{{-- href="{{ route('movie.show'), $movie['id']}}"  --}}

<div class="col">
<a href="{{ route('movies.show',$movie['id']) }}" class="text-decoration-none">
    {{-- <a href="{{route('movies.show',$item['id'])}}"></a> --}}
      <div class="card h-100">
       <img src="{{'https://image.tmdb.org/t/p/w780/'.$movie['backdrop_path']}}"class="card-img-top" alt="...">
        <div class="card-body">
          {{-- <h5 class="card-title">{{ $movie['title'] }}</h5>
          <p class="card-text">{{ $movie['overview'] }}</p> --}}
          <p class="card-text">Rating: {{ $movie['vote_average'] }}</p>
          <span>{{\Carbon\Carbon ::parse($movie['release_date'])->format('M d, Y') }}</span>
          
        </div>

         <div>
          @foreach ($movie['genre_ids'] as $mov) 
            {{ $genres->get($mov) }}@if (!$loop->last) , @endif
          @endforeach
    
        </div> 
      </div>

    </div>
</a>
</div>

 
