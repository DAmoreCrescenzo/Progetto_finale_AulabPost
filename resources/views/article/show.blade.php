<x-layout2>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
              <h3 class="display-3 fw-bolder">{{$article->title}}</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 mx-md-5 my-5">
            <div class="imgGradient position-relative">
              <img  src=" {{ Storage::url($article->img) }}" class="card-img-top box-shadow imgCustom" alt="{{$article->title}}">
             </div>
          </div>
              <div class="col-12 col-md-7">
                <h3 class="">{{$article->subtitle}}</h5>
                <p class="fw-medium lh-base">{{$article->body}}</p>
                @if($article->category)
                <p class="fw-bold fs-5 text-black">Categoria: {{$article->category->name}}</p>
                @else
                <p class = "small text-muted fst-italic text-capitalize">Nessuna categoria</p>
                @endif
              </div>
              <div class="text-end">
                pubblicato il  {{$article->created_at->format('d/m/y')}} da {{$article->user->name}}
                <div class="text-end">
                  
                    @if (Auth::user()&&Auth::user()->is_revisor)
                    <a href=" {{route('revisor.acceptArticle', compact('article'))}} " class="btn btn-success text-white">Accetta articolo </a>
                    <a href=" {{route('revisor.rejectArticle', compact('article'))}} " class="btn btn-danger text-white">Rifiuta articolo </a>
                    @endif
                  
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
</x-layout2>