<x-layout>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Ricerca per {{$category->name}}</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        @foreach ($articles as $article) 
        <div class="row my-5">
          <div class="col-12 col-md-5">
            <a href="{{route('article.show', compact('article'))}}">
              <div class="imgGradient position-relative">
             <img  src=" {{ Storage::url($article->img) }}" class="card-img-top box-shadow imgCustom" alt="{{$article->title}}">
            </div>
          </a>
          </div>
              <div class="col-9 col-md-6 mx-5 mt-3 div-custom">
                <h3 class="display-5 fw-bolder">{{$article->title}}</h5>
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
              <div class="">
                pubblicato il  {{$article->created_at->format('d/m/y')}} da <a href="{{route('article.byUser', 
                ['user'=>$article->user->id])}}" class="text-warning">
                  {{$article->user->name}}</a> 
                </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </x-layout>