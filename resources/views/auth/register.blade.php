<x-layout2>
    {{-- <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-4 login-custom">
                <h1 class="text-center pt-3 pb-5">REGISTRATI</h1>    

                <form method="post" action="{{route('register')}}">
                    @csrf --}}
                    {{-- Name input --}}
                    {{-- <div class="form-outline mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" name="name" id="username" class="form-control">
                    </div> --}}
                    <!-- Email input -->
                    {{-- <div class="form-outline mb-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div> --}}
                    
                    <!-- Password input -->
                    {{-- <div class="form-outline mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    
            
                     
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary  mb-4">Registrati</button>

                        <p class="fst-italic text-center">Sei già registrato? <a href="{{route('login')}}">Clicca qui</a> </p>
                    </form>
                </div>
            </div>
        </div> --}}
        <!-- Section: Design Block -->
<section class="text-center text-lg-start">
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
              <h2 class="fw-bold mb-5">Registrati ora</h2>
              <form class="p-5 shadow" method="post" action="{{route('register')}}">
                @csrf 
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="name" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Username</label>
                      @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="email" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Email</label>
                      @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>
                  </div>
                </div>
  
                <!-- Email input -->
                {{-- <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div> --}}
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                  @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
  
                <!-- Checkbox -->
                {{-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div> --}}

                <div class="form-outline mb-4">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    <label class="form-label">Conferma password</label>
                    @error('password_confirmation')
                      <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


  
                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block mb-4">
                  Registrati
                </button>

                <p class="fst-italic text-center">Sei già registrato? <a href="{{route('login')}}">Clicca qui</a> </p>
  
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 d-none d-md-block">
          <img src="img/register.jpg" class="w-75 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
    </x-layout2>
    
