<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="p-5 shadow" action="{{route('author.update', ['author'=> $author->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Nome</label>
                        <div><input class="form-controller" type="text" name="name" required placeholder="nome" value="{{$author->name}}"></div>                        
                    </div>
                    <div class="mb-3 text-center">
                        <label for="surname" class="form-label">Cognome</label>
                        <div><input type="text" name="surname" required placeholder="cognome" value="{{$author->surname}}"></div>                       
                    </div>
                    <div class="mb-3 text-center">
                        <label for="date" class="form-label">Data di nsacita</label>
                        <div><input type="data" name="date"  value="{{$author->date}}"></div> 
                    </div>                   
                    <div class="mb-3 text-center"> 
                        <button type="submit">Aggiorna</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>
