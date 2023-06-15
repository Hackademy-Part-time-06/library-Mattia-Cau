

<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Nome del libro</label>
                        <div><input class="form-controller" type="text" name="name" required placeholder="nome"></div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Autore del libro</label>
                        <div> <input type="text" name="author" required placeholder="autore"></div>
                       
                    </div>
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Anno di pubblicazione</label>
                        <div><input type="number" name="year" placeholder="anno"></div>
                        
                    </div>
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Pagine totali</label>
                        <div><input type="number" name="pages" placeholder="pagine"></div>
                        
                    </div>
                    <div class="mb-3 text-center">
                        
                        <input type="file" name="image" >
                    </div>
                    <div class="mb-3 text-center"> 
                        <button type="submit">Inserisci libro</button>
                    </div>
                                
                </form>
            </div>
        </div>
    </div>
</x-layout> 
