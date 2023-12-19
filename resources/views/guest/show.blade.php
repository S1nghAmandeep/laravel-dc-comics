@extends('layout.app')

@section('content')
    
  <section class="py-5 pb-0 single-comic">
    <div class="container">
      <div class="d-flex justify-content-between py-5">
        <div class="col-8">
            <h1>{{ $comic['title'] }}</h1>
          <p>
            {{ $comic['description'] }}
          </p>
          </div>
          <div class="col-4">
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
          </div>
      </div>
    </div>
    <div>
        <img class="comic-thumb" src="{{ $comic['thumb'] }}" alt="">
    </div>
    <div class="container d-flex gap-3">
      <form action="{{route('comics.edit', $comic)}}">
        <button class="btn btn-primary">Edit</button>
      </form>
        <button id="myBtn" class="btn btn-danger delete">Delete</button>
        {{-- <button id="myBtn" class="btn btn-danger delete">prova</button> --}}
    </div>

    {{-- form per la conferma di elimina del comic --}}
    <div id="bgForm" class="bg-form">
      <div class="d-flex gap-3 delete-form">
        <form action="{{ route('comics.destroy', $comic) }}" method="POST">

          @csrf
          @method('DELETE')

          <button class="btn btn-danger">Si</button>
        </form>
          <button id="noBtn" class="btn btn-primary">No</button>
    </div>
    </div>
    <div class="detail pt-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="detail-img" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <p class="text-light ps-1 mb-0">Digital comics</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="detail-img" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <p class="text-light ps-1 mb-0">Digital comics</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="detail-img" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <p class="text-light ps-1 mb-0">Digital comics</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="detail-img" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <p class="text-light ps-1 mb-0">Digital comics</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img class="detail-img" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <p class="text-light ps-1 mb-0">Digital comics</p>
                </div>
            </div>
        </div>
    </div>
  </section>

  <script>
    
    const deleteDomEl = document.getElementById("myBtn");
    const formDomEl = document.getElementById("bgForm");
    const noBtnDomEl = document.getElementById("noBtn");


    console.log(formDomEl);

    deleteDomEl.addEventListener('click', function () {
        console.log('delete');
      formDomEl.classList.add("active")
    })

    noBtnDomEl.addEventListener('click', function() {
      formDomEl.classList.remove("active");
    })


  </script>

@endsection