<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">Lavora con noi!</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-4 justify-content-center d-flex flex-column">
                <h4 class="text-center fw-bold">Admin</h4>
                <p class="text-center">Visualizzare i profili utente e la struttura organizzativa. Creare nuovi gruppi nella Console di amministrazione. Gestire i membri dei gruppi creati nella Console di amministrazione. Gestire le impostazioni di accesso del gruppo.</p>
            </div>
            <div class="col-4 justify-content-center d-flex flex-column">
                <h4 class="text-center fw-bold">Revisore</h4>
                <p class="text-center">Perché un articolo o una pubblicazione venga pubblicata è prevista una revisione da parte dei cosiddetti referee ovvero revisori o esperti specialisti contattati dalla casa editrice e tenuti a valutare la correttezza e originalità del contenuto nonchè l'accuratezza del metodo scientifico.</p>
            </div>
            <div class="col-4 justify-content-center d-flex flex-column">
                <h4 class="text-center fw-bold">Scrittore</h4>
                <p class="text-center">Un web writer, letteralmente, è una figura professionale che scrive contenuti per il web, che siano essi blog post, articoli di giornale, landing page o post sui social.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{route('careers.submit')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option hidden value="">--select--</option>
                        <option value="admin">Admin</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Scrittore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input value=" {{old('email')}} " name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Info su di te</label>
                    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('message')}}</textarea>
                </div>
                  <button type="submit" class="btn btn-success">Candidati</button>
            </form>
        </div>
    </div>
</x-layout>