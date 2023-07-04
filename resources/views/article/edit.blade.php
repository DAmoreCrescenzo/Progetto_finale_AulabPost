<x-layout3>

<div class="container-fluid p-5 bg-secondary text-center text-white">
    <div class="row justify-content-center">
        <h1 class> 
            Modifica articolo
        </h1>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                   @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                   @endforeach
                </ul>
            </div>
       @endif
        </div>
      <form class="card p-5 shadow sfondoArt " action="{{route('article.update', $article)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input name="title" type="text" class="form-control" id="title" value="{{$article->title}}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo:</label>
            <input name="subtitle" type="text" class="form-control" id="title" value="{{$article->subtitle}}">
            @error('subtitle')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine:</label>
            <input name="img" type="file" class="form-control" id="image" value="{{$article->image}}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria:</label>
            <select name="category" class="form-control text-capitalize" id="category">
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
            @endforeach
            </select>
            @error('category')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo del testo:</label>
            <textarea name="body" id='body' cols='38' rows="7" class="form-control">{{$article->body}}
            </textarea>
            @error('body')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror    
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags:</label>
            <input name="tags" id='tags' class="form-control" value="{{$article->tags->implode('name',', ')}}">
            <span class="small fw-bold fst-italic text-danger">Dividi ogni tag con una virgola</span>
            @error('tags')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mt-2">
           <button class="btn btn-dark text-white">Inserisci un articolo</button>
           <a class="btn btn-outline-dark" href="{{route('home')}}">torna alla home</a>
        </div>
    </form>
    </div>
</div>



</x-layout3>