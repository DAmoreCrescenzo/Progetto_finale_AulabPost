<div id="body-pd">
{{-- <div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center h1">THE AULAB POST</h1>
    </div>
  </div>
</div> --}}

{{-- <nav class="navbar navbar-expand-lg nav-custom"> --}}
  <nav class="navbar bg-black header " id="header">
    <div class="container-fluid">
      <div class="row w-100">
        <div class="col-12 align-items-center d-flex justify-content-between w-100">
           <div class="me-2"> <i class="fa-solid fa-bars-staggered icon-custom fa-lg" id="header-toggle"> </i></div>
           <a href="{{route('home')}}">
           <div class="logo d-none d-md-block">
            <img src="../../img/logo.png" alt="Logo">
           </div>
          </a>

           <form class="d-flex justify-content-end"  method="get" action="{{route('article.search')}}">
            <input class="form-control me-2" type="search" name="query" placeholder="cosa stai cercando?" aria-label="Search">
            <button class="btn btn-custom" type="submit"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
          </form>
           
           <!-- <div class="header_img"> <img src="/img/wallpaperflare.com_wallpaper (1).jpg" alt=""> </div> -->
        </div>
      </div>
    </div>
  </nav>
  <div class="l-navbar color" id="nav-bar">
  <nav class="nav">
      <div class="nav_list"> 
        <a href="{{route('home')}}" class="nav_link"> <i class="fa-solid fa-house fa-lg"></i> <span class="nav_name">Home</span> </a>   
        <a href="{{route('article.index')}}" class="nav_link"> <i class="fa-regular fa-newspaper fa-lg"></i> <span class="nav_name">Tutti gli articoli</span> </a> 
        <a class="nav-link nav_link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid nav_name fa-list fa-lg"></i>
          <span class="nav_name">Categorie</span>
        </a>
        <ul class="dropdown-menu ul-custom">
          @foreach($categories as $category)
          <li><a class="dropdown-item li-custom" href="{{ route('article.byCategory', $category) }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      
      {{-- <ul class="dropdown-menu categoryList">
        @foreach($categories as $category)
        <li><a href="{{route('article.byCategory', ['category'=>$article->category->id])}}" class="fw-bold fs-5 text-black"></a>{{$category->name}}</a></li>
        @endforeach
      </ul> --}}

        
        </a>  
        {{-- <a href="#" class="nav_link"> <i class="fa-regular fa-bookmark"></i> <span class="nav_name">Bookmark</span> </a>  --}}
        {{-- <a href="#" class="nav_link"> <i class="fa-solid fa-chart-simple"></i> <span class="nav_name">Stats</span> </a>   --}}
      </div> 
      {{-- <li class="nav-item dropdown me-5"> --}}

        
      <a class="nav-link nav_link iconUser" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid nav_name fa-user-pen fa-lg"></i>
          <span class="nav_name">Area personale</span>
      </a>
        @if(Auth::user() == null)
        <ul class="dropdown-menu ul-custom">
          <li><a class="dropdown-item li-custom" href="{{route('login')}}">ACCEDI</a></li>
          <li><a class="dropdown-item li-custom" href="{{route('register')}}">REGISTRATI</a></li>
        </ul>
        @else
        <ul class="dropdown-menu ul-custom">
           @if(Auth::user() != null)
           <li><p class="welcome fw-bold name-custom ps-3">Bentornato, {{Auth::user()->name}}!</p></li>
        @endif
            @if (Auth::user()->is_writer)
            <li><a href="{{route('article.create')}}" class="dropdown-item li-custom">Pubblica articolo</a></li>
            <li><a class="dropdown-item li-custom" href="{{route('writer.dashboard')}}">Dashboard dello Scrittore</a></li>  
            @endif
            @if(Auth::user()->is_admin)
            <li><a class="dropdown-item li-custom" href="{{route('admin.dashboard')}}">Dashboard admin</a></li>
            @endif
            @if(Auth::user()->is_revisor)
            <li><a class="dropdown-item li-custom" href="{{route('revisor.dashboard')}}">Dashboard revisor</a></li>
            @endif
            <form action="{{route('logout')}}" method="post">
              @csrf
              <li><button class="btn dropdown-item li-custom">LOGOUT</button></li>
            </form>
        </ul>
      {{-- </li> --}}
          {{-- <li class="nav-item mx-5 "><a class="nav-link text-white text-decoration-none" >Benvenuto,{{Auth::user()->name}}!</a></li> --}}
        @endif
    </nav>
    </div>
</div>
      {{-- <a class="navbar-brand" href=" {{route('home')}} ">Aulab Post</a> --}}
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto ul-custom">
          <li class="nav-item mx-5"> --}}
            {{-- <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a> --}}
          {{-- </li> --}}
          {{-- <li class="nav-item mx-5"> --}}
            {{-- <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a> --}}
          {{-- </li> --}}
          {{-- <li class="nav-item mx-5">
            <a class="nav-link" href="#">Contatti</a>
          </li> --}}
          {{-- <li class="nav-item dropdown mx-5">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Area personale
            </a>
            @if(Auth::user() == null)
            <ul class="dropdown-menu ul-custom">
              <li><a class="dropdown-item" href="{{route('login')}}">ACCEDI</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">REGISTRATI</a></li>
            </ul>
            @else
            <ul class="dropdown-menu ul-custom">
                @if (Auth::user()->is_writer)
                <li><a class="dropdown-item" href="{{route('article.create')}}">Pubblica un articolo</a></li>  
                @endif
                @if(Auth::user()->is_admin)
                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard admin</a></li>
                @endif
                @if(Auth::user()->is_revisor)
                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard revisor</a></li>
                @endif
                <form action="{{route('logout')}}" method="post">
                  @csrf
                  <li><button class="btn dropdown-item">LOGOUT</button></li>
                </form>
              </li> --}}
          {{-- </ul> --}}
              {{-- <li class="nav-item mx-5 "><a class="nav-link" href="">Benvenuto, {{Auth::user()->name}}!</a></li>
            @endif
        </div> --}}
    {{-- </div> --}}
{{-- </nav> --}}
{{-- </div> --}}