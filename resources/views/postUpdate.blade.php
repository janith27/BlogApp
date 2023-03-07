<x-app-layout>
    <h1 style="padding-top: 30px; text-align:center; font-size:40px; font-weight:bold;">Update post</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding :30px; align-self: center;">

                <div class="mb-3">
                    <form action="{{ route('store.post') }}" method="PUT" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title" value="{{ $indexPost ->title }}">
                        
                            @error('title')
                                <span class="text-danger">{{ $message }} </span>  
                            @enderror
                        </div>

                        <div>          
                            <label for="exampleFormControlTextarea1" class="form-label">Brief Discription</label>
                            <textarea class="form-control" name="brief_discription" id="exampleFormControlTextarea1" rows="2" value="{{ $indexPost ->brief_discription }}"></textarea>
                                
                            @error('brief_discription')
                                <span class="text-danger">{{ $message }} </span>  
                            @enderror
                        </div>

                        <div>          
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="10" value="{{ $indexPost ->body }}"></textarea>
                                
                            @error('body')
                                <span class="text-danger">{{ $message }} </span>  
                            @enderror
                        </div>

                        <div style="padding-bottom: 30px;">           
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file" id="formFile" >

                            @error('image')
                                <span class="text-danger">{{ $message }} </span>  
                            @enderror
                        </div>

                        <div>
                            <img id="showImage" src="{{ (!empty($indexPost ->image))?url('images/'.$indexPost ->image):url('images/no_image.jpg')   }}" style="width:100px; height: 100px;" >
	                    </div>

                        <div style="text-align: center;">
                            <button class="btn btn-outline-primary" type="submit">Update Post </button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</x-app-layout>
