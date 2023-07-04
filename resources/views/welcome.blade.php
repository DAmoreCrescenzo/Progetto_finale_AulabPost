<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <div class="col-6"> 
                @if(session('message'))
                  <div class="alert alert-success text-center">
                    {{session('message')}}
                  </div>
                @endif
            
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row" id="row">
        <div class="col-12">
          <h1 class="text-center fw-bolder">ULTIME NOTIZIE</h1>
        </div>
      </div>
    </div>
    <div class="container containerCustom overflow-hidden">
      @foreach ($articles as $article) 
      <div class="row my-5">
        <div data-aos="fade-right"  data-aos-duration="2000" class="col-12 col-md-5 box" id="boxCard">
          <a href="{{route('article.show', compact('article'))}}">
          <div class="imgGradient position-relative">
         <img  src=" {{ Storage::url($article->img) }}" class="card-img-top box-shadow imgCustom" alt="{{$article->title}}">
        </div>
      </a>
        </div>
            <div data-aos="fade-left"  data-aos-duration="1000" class="col-9 col-md-6 mx-5 mt-3 div-custom box1">
              <h3 class="display-5 fw-bolder">{{$article->title}}</h3>
              <h3>{{$article->subtitle}}</h3>
              @if($article->category)
              <a href="{{route('article.byCategory', ['category'=>$article->category->id])}}" class="fw-bold fs-5 text-black">
                Categoria: {{$article->category->name}}</a>
              @else
              <p class = "small text-muted fst-italic text-capitalize">Nessuna categoria</p>
              @endif
                <p class="small fst-italic text-capitalize" >
                  @foreach($article->tags as $tag)
                  #{{$tag->name}}
                  @endforeach
                </p>
            <span class="text-muted fst-italic">tempo di lettura {{$article->readDuration()}} min</span>    
            <div class="">
              pubblicato il  {{$article->created_at->format('d/m/y')}} da <a href="{{route('article.byUser', 
              ['user'=>$article->user->id])}}" class="text-warning">
                {{$article->user->name}}</a> 
              </div>
          </div>
        </div>
        @endforeach
      
    </div>
</x-layout>