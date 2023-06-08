<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('books.update', ['book'=> $book->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del libro</label>
                        <input class="form-controller" type="text" name="name" required placeholder="nome" value="{{$book->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Autore del libro</label>
                        <input type="text" name="author" required placeholder="autore" value="{{$book->author}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Anno di pubblicazione</label>
                        <input type="number" name="year" placeholder="anno" value="{{$book->year}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Pagine totali</label>
                        <input type="number" name="pages" placeholder="pagine" value="{{$book->pages}}">
                    </div>
                    <div class="mb-3">
                        <label for="pages">Immagine attuale</label>
                        <img src="{{empty($book->image) ? Storage::url('/images/dafaultimage.png') : Storage::url($book->image) }}" alt="">
                
                    </div>
                    <div class="mb-3">
                        <label for="pages">Immagine modificata</label>
                        <input type="file" name="image" >
                    </div>
                    
                    <div class="mb-3"> 
                        <button type="submit">Aggiorna</button>
                    </div>
                                
                </form>
            </div>
        </div>
    </div>
</x-layout>

