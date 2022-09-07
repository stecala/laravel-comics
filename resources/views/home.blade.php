@extends('layouts.main')
@section('home')
    <main  class="my-bg">
        <div class="banner-main">
            <img src="/assets/images/jumbotron.jpg" >
        </div>
        <div class="container-lg py-5 position-relative">
            <div class="section-title position-absolute">
              <div>CURRENT SERIES</div>
            </div>
            <div class="row g-3">
                {{-- qui --}}
                @forelse ($comics as $comic)
                    <div class="col-2 card">
                        <div class="img-container">
                            <img src="{{$comic->image}}" alt="{{$comic->title}}">
                        </div>
                        <div class="text-container py-2">
                            {{$comic->title}}
                        </div>
                    </div>
                    
                @empty
                    Non sono presenti fumetti
                @endforelse
              <div class="btn-cont d-flex justify-content-center">
                <a class="text-white">LOAD MORE</a>
              </div>
            </div>
          </div>
    </main>
@endsection