
<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('books.index')}}" class="nav-link px-2  text-white">Home</a></li>
        <li><a href="{{ route('books.create')}}" class="nav-link px-2 text-white">Inserisci un libro</a></li>
        <li><a href="{{ route('author.create')}}" class="nav-link px-2 text-white">Inserisci un autore</a></li>
        <li><a href="{{ route('author.index')}}" class="nav-link px-2 text-white">Lista autori</a></li>
      </ul>
      
      <div class="text-end">
        @auth
        <li class="nav-link px-2 text-white">Benvenuto {{Auth::user()->name}}</li>
        <form method="POST" action="{{route('logout')}}">
          @csrf
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li class="btn btn-outline-light me-2"><a class="nav-link px-2 text-white" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
          </ul>          
        </form>
        
        @else
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li  class="btn btn-outline-light me-2">
            <a href="{{route('register')}}" class="nav-link px-2 text-white">Registrati</a>
          </li>
          <li class="btn btn-warning">
            <a href="{{route('login')}}" class="nav-link px-2 text-white">Accedi</a>
          </li>
        </ul>
        @endauth
        
      </div>
    </div>
  </div>
</header>