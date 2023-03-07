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
                                <div class="row g-0">
                                    <div class="col-md-4 align-self-center">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-6 align-self-center">
                                        <div class="card-body">
                                          <h3 class="card-title">Card titl</h3>
                                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <div class="row" style="padding :5px;"> <button type="button" class="btn btn-outline-primary">View</button> </div>
                                        <div class="row" style="padding :5px;"> <a href="{{ route('updatePostPage',1)}}"><button type="button" class="btn btn-outline-info" style="width: 100%;">Edit</button></a> </div>
                                        <div class="row" style="padding :5px;"> <button type="button" class="btn btn-outline-danger">Delete</button> </div>
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
