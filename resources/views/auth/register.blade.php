<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('register')}}" method="POST" >
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @csrf
                    @method('POST')
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Nome</label>
                        <div><input class="form-controller" type="text" name="name" id="name" required placeholder="nome"></div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="email" class="form-label">Email</label>
                        <div><input type="email" name="email" id="email" required placeholder="mario.rossi@gmail.com"></div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="password" class="form-label">Password</label>
                        <div><input type="password" name="password" id="password" placeholder="**********"></div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <div><input type="password" name="password_confirmation" id="password_confirmation" placeholder="**********"></div>                        
                    </div>
                    
                    <div class="mb-3 text-center"> 
                        <button type="submit" class="mb-3">Registrati</button>
                        <div><a href="{{route('login')}}">Sei già registrato?</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>