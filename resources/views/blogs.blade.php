<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding :30px; align-self: center;">

                {{-- cards view --}}
                <div class="container" style="align-self: center">
                    <div class="row" style="padding-bottom:50px;">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                          @foreach ($posts as $index)

                          <div class="col">
                            <div class="card h-100">
                              <img src="{{ $index->image }}" class="card-img-top" alt="image">
                              <div class="card-body">
                                <h5 style="font-weight: bold; font-size:20px;" class="card-title">{{ $index->title }}</h5>
                                <p class="card-text">{{ $index->body }}</p>
                                
                              </div>
                              <div class="card-footer">
                                  <small class="text-muted">{{ $index->updated_at->diffForHumans() }}</small>
                                  <a href="#" class="btn btn-primary">More</a>
                                </div>
                            </div>
                          </div>

                          @endforeach
                            

                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
