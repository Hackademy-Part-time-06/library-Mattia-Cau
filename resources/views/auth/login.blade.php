<x-layout>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3 text-center">
                        <label for="email" class="form-label">Email</label>
                        <div><input type="email" name="email" id="email" required placeholder="mario.rossi@gmail.com"></div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="password" class="form-label">Password</label>
                        <div><input type="password" name="password" id="password" placeholder="*********"></div>
                        
                    </div>
                    <div class="mb-3 text-center"> 
                        <button type="submit" class="mb-3">Entra</button>
                        <div><a href="{{route('register')}}">Non sei registrato?</a></div>
                    </div>
                
                   
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>