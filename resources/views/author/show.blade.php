<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h2>Dettagli autore</h2>
                <p>nome: {{$author->name}} </p>
                <p>cognome: {{$author->surname}}</p>   
                <p>cognome: {{$author->date}}</p>             
            </div>
        </div>
    </div>
</x-layout>
