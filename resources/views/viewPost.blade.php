<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding :30px; align-self: center;">

                {{-- cards view --}}
                <div class="container" style="align-self: center">
                    <div class="row" style="padding-bottom:50px;">
                        
                        <img class="card-img-top" alt="image" id="image" src="{{ (!empty($post->image))?url('images/'.$post->image):url('images/no_image.jpg')   }}" style="max-width:100%; max-height: 100%" >
                         
                    </div>

                    <div class="row" style="padding-bottom:50px; text-align:center;">
                        <h5 style="font-weight: bold; font-size:40px;" class="card-title">{{ $post->title }}</h5>
                    </div>

                    <div class="row" style="padding-bottom:50px;">
                        <p class="card-text">{{ $post->body }}</p>
                    </div>

                    <div class="row" style="padding-bottom:50px;">
                        <small class="text-muted"> Updated at {{ $post->updated_at->diffForHumans() }}</small>
                    </div>


                </div>
                
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding :30px; align-self: center; margin-top:30px;">
                <h1 style="padding-top: 30px; text-align:center; font-size:20px; font-weight:bold;"> Add Comment</h1>

                <div class="mb-3">
                    <form action="{{ route('store.comment',$post->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">Comment</label>
                            <input type="text"  name="comment" class="form-control" id="exampleFormControlInput1" placeholder="Comment">
                        
                            @error('comment')
                                <span class="text-danger">{{ $message }} </span>  
                            @enderror
                        </div>

                        <div style="text-align: center; margin-top:30px;">
                            <button class="btn btn-outline-primary" type="submit">Create Comment </button>
                        </div>
                    </form>
                
                </div>  
                <hr>
                <div>
                    <h1 style="padding-top: 50px; text-align:center; font-size:20px; font-weight:bold; margin-bottom:30px;"> Comments</h1>
                    @foreach ($comment as $index)
        
                        <div class="card border-success mb-3" style="max-width: 100%;">
                            <div class="card-header">Name: {{ $index->user_name }}</div>
                            <div class="card-body text-success">
                            <p class="card-text">{{ $index->body }}</p>
                            <small class="text-muted"> Updated at {{ $index->updated_at->diffForHumans() }}</small>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
