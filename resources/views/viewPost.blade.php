<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding :30px; align-self: center;">

                {{-- cards view --}}
                <div class="container" style="align-self: center">
                    <div class="row" style="padding-bottom:50px;">
                        
                        <img class="card-img-top" alt="image" id="image" src="{{ (!empty($post->image))?url('images/'.$post->image):url('images/no_image.jpg')   }}" style="max-width:300px; max-height: 300px" >
                         
                    </div>

                    <div class="row" style="padding-bottom:50px;">
                        <h5 style="font-weight: bold; font-size:20px;" class="card-title">{{ $post->title }}</h5>
                    </div>

                    <div class="row" style="padding-bottom:50px;">
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                    
                    <div class="row" style="padding-bottom:50px;">
                        <small class="text-muted">{{ $post->updated_at->diffForHumans() }}</small>
                    </div>


                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
