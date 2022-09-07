@extends('layouts.main')
@section('title', 'Home')

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
          <div class="bg-container-nav-main d-flex">
            <div class="container-lg d-flex justify-content-between align-items-center ">
                <div class="d-flex align-items-center">
                    <div class="img-container">
                        <img src="/assets/images/buy-comics-digital-comics.png">
                    </div>
                    <div class="mytxt ps-2">DIGITAL COMICS</div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="img-container">
                        <img src="/assets/images/buy-comics-merchandise.png">
                    </div>
                    <div class="mytxt ps-2">DC MERCHANDISE</div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="img-container">
                        <img src="/assets/images/buy-comics-subscriptions.png">
                    </div>
                    <div class="mytxt ps-2">SUBSCRIPTIONS</div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="img-container">
                        <img src="/assets/images/buy-comics-shop-locator.png">
                    </div>
                    <div class="mytxt ps-2">COMIC SHOP LOCATOR</div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="img-container">
                        <img src="/assets/images/buy-dc-power-visa.svg">
                    </div>
                    <div class="mytxt ps-2">DC POWER VISA</div>
                </div>
            </div>
        </div>
    </main>
@endsection