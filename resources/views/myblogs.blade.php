<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row" style=" padding-bottom:30px;" ><a href="{{ route('addpostpage')}}"> <button  style="width:100%;" type="button" class="btn btn-outline-primary">Create Post</button> </a> </div>
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding :30px; align-self: center;" >

                {{-- cards view --}}
                <div class="container" style="align-self: center">
                    <div class="row" style="padding-bottom:50px;">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="card mb-3" style="width: 100%;">

                                @foreach ($myPosts as $index)
                                    
                                @endforeach
                                <div class="row g-0">
                                    <div class="col-md-4 align-self-center">
    
                                        <img class="card-img-top" alt="image" id="image" src="{{ (!empty($index->image))?url('images/'.$index->image):url('images/no_image.jpg')   }}" style="max-width:300px; max-height: 300px" >
                         
                                    </div>
                                    <div class="col-md-6 align-self-center">
                                        <div class="card-body">
                                          <h3 class="card-title" style="font-weight: bold; font-size:22px;">{{ $index->title }}</h3>
                                          <p class="card-text">{{ $index->brief_discription }}</p>
                                          <p class="card-text"><small class="text-muted">{{ $index->updated_at->diffForHumans() }}</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <div class="row" style="padding :5px;"> 
                                            <a href="{{ route('detailPage',$index->id)}}">
                                                <button type="button" class="btn btn-outline-primary" style="width: 100%;">View</button>
                                            </a> 
                                        </div>
                                        <div class="row" style="padding :5px;"> 
                                            <a href="{{ route('updatePostPage',$index->id)}}">
                                                <button type="button" class="btn btn-outline-info" style="width: 100%;">Edit</button>
                                            </a> 
                                        </div>
                                        <div class="row" style="padding :5px;"> 
                                            <a href="{{ route('delete.post',$index->id)}}">
                                                <button type="button" class="btn btn-outline-danger" style="width: 100%;">Delete</button>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
