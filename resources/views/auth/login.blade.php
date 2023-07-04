<x-layout2>
    
    {{-- <div class="container login-container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-4 login-custom">
                <h1 class="text-center pt-3 pb-5">ACCEDI</h1>  
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4 ">Accedi</button>
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p class="fst-italic text-center">Non sei ancora registrato? <a href="{{route('register')}}">Clicca qui</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="text-center text-lg-start ">
        <style>
          .cascading-right {
            margin-right: -50px;
          }
      
          @media (max-width: 991.98px) {
            .cascading-right {
              margin-right: 0;
            }
          }
        </style>
      
        <!-- Jumbotron -->
        <div class="container py-md-4">
          <div class="row g-0 loginHeight align-items-center pt-5">
            <div class="col-lg-6 mb-md-5 mb-lg-0">
              <div class="card cascading-right" style="
                  background: hsla(0, 0%, 100%, 0.55);
                  backdrop-filter: blur(30px);
                  ">
                <div class="card-body p-5 shadow-5 text-center">
                  <h2 class="fw-bold mb-5">Accedi</h2>
                  <form class="p-5 shadow" method="post" action="{{route('login')}}">
                    @csrf 
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row justify-content-center">
                      <div class="col-8">
                        <div class="form-outline mb-4">
                          <input type="text" name="email" id="form3Example2" class="form-control" />
                          <label class="form-label" for="form3Example2">Email</label>
                          @error('email')
                          <div class="alert alert-danger">{{$message}}</div>
                          @enderror
                        </div>
                      
      
                  
      
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form3Example4" class="form-control" />
                      <label class="form-label" for="form3Example4">Password</label>
                      @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>
                </div>
            </div>
    
    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-dark btn-block mb-4">
                      Accedi
                    </button>
    
                    <p class="fst-italic text-center">Non sei ancora registrato? <a href="{{route('register')}}">Clicca qui</a> </p>

                  </form>
                </div>
              </div>
            </div>
      
            <div class="col-lg-6 mb-5 mb-lg-0 d-none d-md-block">
              <img src="img/login.jpg" class="w-75 rounded-4 shadow-4"
                alt="" />
            </div>
          </div>
        </div>
        <!-- Jumbotron -->
      </section>
      <!-- Section: Design Block -->
    
</x-layout2>