<x-layout3>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <h1 class="text-center pt-5">Inserisci un articolo</h1>
            <div class="col-12 d-flex justify-content-center align-items-center ">
                  
                
                <form class="sfondoArt p-5 shadow widthCustom" method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                    <div class="form-outline col">
                        <label class="form-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control">
                        @error('title')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                   
                   
                    <div class="form-outline col">
                        <label class="form-label">Subtitle</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control">
                        @error('subtitle')
                        <div class="alert alert-danger  mt-2">{{$message}}</div>
                        @enderror
                    </div>
                   </div>
                    
                    <div class="row">
                    <div class="form-outline col">
                        <label class="form-label">Immagine</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>

                    <div class="form-outline col">
                        <label class="form-label">Categoria</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="category">
                            @foreach($categories as $category)
                            <option hidden value=""></option>
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="mt-2 mb-3">
                    <label for="tags" class="form-label"> Tags: </label>
                    <input name="tags" id="tags" class="form-control" value="{{old('tags')}}" >
                    <span class="small fst-italic" > Dividi ogni tag con una virgola </span>
                    @error('tags')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                    <div class="form-group">
                        <label class="form-label mt-2">Corpo del testo</label>
                        <textarea name="body" id="body" rows="5" class="form-control"></textarea>
                        @error('body')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                        @enderror
                        
                    </div>
                    
                    
                        <button type="submit" class="btn btn-dark mb-4 mt-3">Inserisci articolo</button>

                    
                    </form>
            </div>
        </div>
    </div>
        

</x-layout3>