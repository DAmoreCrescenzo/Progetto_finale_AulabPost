<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col-3">#</th>
            <th scope="col-3">titolo</th>
            <th scope="col-3">sottotitolo</th>
            <th scope="col-3">categoria</th>
            <th scope="col-3">Tags</th>
            <th scope="col-3">creato il</th>
            <th scope="col-3">azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->category->name ?? 'Non categorizzato'}}</td>
            <td>
                @foreach($article->tags as $tag)
                {{$tag->name}},
                @endforeach
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td class="tdIcons"> 
                <a href=" {{route('article.show', compact('article'))}}"><i class="fa-solid fa-book-open text-info fa-lg iconsTd" ></i></a>
                <a href="{{route('article.edit', compact('article'))}}" ><i class="fa-solid fa-pen-to-square text-warning fa-lg iconsTd"></i></a>
                <form action="{{route('article.delete', compact('article'))}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-transparent p-0"><i class="fa-solid fa-trash-can text-danger fa-lg iconsTd"></i></button>
                </form>
                
            </td>
            
        </tr>
        
        @endforeach
        
    </tbody>
</table>