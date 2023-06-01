<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h2>dettagli</h2>
                <p>nome:{{$book->name}} </p>
                <p>autore: {{$book->author}}</p>
                <div><img src="{{empty($book->image) ? Storage::url('/images/dafaultimage.png') : Storage::url($book->image) }}" alt=""></div>
                
            </div>
        </div>
    </div>
    
    
</x-layout>
