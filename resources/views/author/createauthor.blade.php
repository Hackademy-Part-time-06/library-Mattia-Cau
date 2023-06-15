
<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('author.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Nome</label>
                        <div><input class="form-controller" type="text" name="name" required placeholder="Nome"></div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="surname" class="form-label">Cognome</label>
                        <div><input type="text" name="surname" placeholder="Cognome"></div> 
                    </div>
                    <div class="mb-3 text-center">
                        <label for="date" class="form-label">Data di nascita</label>
                        <div><input type="date" name="date"></div>
                    </div>
                    <div class="mb-3 text-center"> 
                        <button type="submit">Inserisci autore</button>
                    </div>
                                
                </form>
            </div>
        </div>
    </div>
</x-layout> 
