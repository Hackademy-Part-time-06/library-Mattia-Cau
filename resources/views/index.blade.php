
<x-layout>
    
    <div class="container my-5 ">
        <div class="row justify-content-around">
            @forelse ($books as $book)
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{empty($book->image) ? Storage::url('/images/dafaultimage.png') : Storage::url($book->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$book['name']}}</h5>
                        <p class="card-text">Autore: {{$book['author']}}</p>
                        <a href="{{route('books.show', ['book' => $book['id']])}}" class="btn btn-primary">dettagli</a>                   
                        <a href="{{route('books.edit', ['book' => $book['id']])}}" class="btn btn-warning">modifica</a>
                        <form action="{{route('books.destroy', ['book' => $book['id']])}}" method="Post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">elimina</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            nessun libro
            @endforelse
            
        </div>
    </div>
    
</x-layout>

