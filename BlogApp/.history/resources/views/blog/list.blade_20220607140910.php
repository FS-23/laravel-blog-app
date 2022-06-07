
 @extends('layout.layout')

@section('content')
    {{-- <div class="alert alert-info">List des blogs</div>
    
    <div>
        @foreach($blogs as $blog)
        <div>
            <h3>{{ $blog -> title}}</h3>
            <p> {{ $blog -> content }}</p>
        </div>
        @endforeach
    </div> --}}
    <div class="mt-5 container">
            <div class="d-block text-end">
                <a href="/blog/create" class="btn btn-outline-primary mt-5">Ajouter un blog</a>
            </div>
            <div class="row mx-0">
                @foreach($blogs as $blog)
                    <div style="" class="mt-3 col-12 col-sm-6 col-lg-4">
                        <div class="h-100">
                            <div class="bg-light p-3 d-flex justify-content-center align-items-center" style="height: 150px">
                                <h3>{{ $blog -> title }}</h3>
                            </div>
                            <div class="bg-dark text-white p-3 ">
                                <p style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis" class="">{{ $blog -> content }}</p>
                                <a href="/blog/detail/8" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
    </div>

    
   
    
@endsection