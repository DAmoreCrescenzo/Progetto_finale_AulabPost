<x-layout2>
    <div class="container p-5 bg-secondary text-center text-white ">
        <div class="row justify-content-center">
          <h1 class="display-1">
            Bentornato,Amministratore
          </h1>
        </div>
    </div>

@if(session('message'))
<div class="alert alert-success text-center">
    {{session('message')}}

</div>
@endif
<div class="container my-5 ">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2>
            Richiesta per il ruolo di Amministratore
        </h2>
       <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
    </div>
    </div>
</div>

<div class="container my-5 ">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2>
            Richiesta per il ruolo di revisore
        </h2>
        
       <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
      </div>
    </div>
</div>
<div class="container my-5 ">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2>
            Richiesta per il ruolo di scrittore
        </h2>
       <x-requests-table :roleRequests="$writerRequests" role="scrittore"/>
    </div>
    </div>
</div>
<hr>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2>I tags della piattaforma</h2>
      <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
    </div>
  </div>

    <div class="row justify-content-center my-5">
    <div class="col-12">
      <h2>Le categorie della piattaforma</h2>
      <x-metainfo-table :metaInfos="$categories" metaType="categories"/>

      <h2 class="mt-5">Aggiungi una categoria</h2>
      <form action="{{route('admin.storeCategory')}}" method="post" class="d-flex mt-4">
        @csrf
        <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
        <button type="submit" class="btn btn-success text-white">Aggiungi</button>
      </form>
    </div>
  </div>
</div>




</x-layout2>

