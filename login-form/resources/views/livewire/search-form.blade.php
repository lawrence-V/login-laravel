<div >
    <div class="pr-5">
           <form class="d-flex  p-4">
        <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
        {{-- <a class="navbar-brand">   <td> {{$LoggedUserInfo['name']}}</td></a> --}}
      </form>
      @if(strlen($search) > 2) 
<div>
        @if ($searchResult->count() > 0)
       @foreach ($searchResult as $result) 
       <div class="card m-1" style="width: 18rem;">
        <ul class="list-group list-group-flush ">
         
           <li class="">
                <a class="list-group-item list-group-item-action p-3"  data-toggle="list" href="{{route('movies.show', $result['id']) }}" role="tab" aria-controls="home">
                    <div class="row align-items-start">
                        <div class="col">
                            <img src="{{'https://image.tmdb.org/t/p/w780/'.$result['poster_path']}}"class="card-img-top img-fluid" alt="..." style="   height: 100px;">
                          </div>
                          <div class="col">
                            <span>
                                {{$result['title']}}
                          </span>
                          </div>

                  </div>
                </a>
        </li>
        </ul>
    </div>
        @endforeach

        @else
        <div class="card m-4" style="width: 17rem; ">
            <ul class="list-group list-group-flush">         
               <li>
                <a class="list-group-item list-group-item-action p-3"  data-toggle="list" href="#" role="tab" aria-controls="home"> No result for{{$search}}</a>
            </li>
            </ul>
        </div>

      @endif
</div>
     




@endif





        </div>
    </div>
  


  
      
      
   

