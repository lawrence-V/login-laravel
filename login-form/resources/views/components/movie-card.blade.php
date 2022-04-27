<div>
<div class="col">
<a href="{{ route('movies.show',$movie['id']) }}" class="text-decoration-none">
    {{-- <a href="{{route('movies.show',$item['id'])}}"></a> --}}
      <div class="card h-150">
       <img src="{{'https://image.tmdb.org/t/p/w780/'.$movie['backdrop_path']}}"class="card-img-top" alt="...">
        <div class="card-body">
          {{-- <h5 class="card-title">{{ $movie['title'] }}</h5>
          <p class="card-text">{{ $movie['overview'] }}</p> --}}
          
          <p class="card-text fs-2 text text-dark">Rating: {{ $movie['vote_average'] }}</p>
          <span class="text-dark fs-4 text">{{\Carbon\Carbon ::parse($movie['release_date'])->format('M d, Y') }}</span>
            <div class="text-dark fs-5 text" >
          @foreach ($movie['genre_ids'] as $mov) 
            {{ $genres->get($mov) }}@if (!$loop->last) , @endif
          @endforeach
    
        </div> 
        </div>

       
      </div>

    </div>
</a>
</div>

 
