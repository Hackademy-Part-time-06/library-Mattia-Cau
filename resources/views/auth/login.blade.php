<x-layout>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" required placeholder="mario.rossi@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="*********">
                    </div>
                    <div class="mb-3"> 
                        <button type="submit">Entra</button>
                    </div>
                
                   
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>