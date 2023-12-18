@extends('layout.app')

@section('title')
Laravel Comics
@endsection

@section('content')
    
{{-- inizio sezione comic --}}
<section class="section-comics">
    <div class="container">
        <div>
            <h4 class="tag-series">Current series</h4>
        </div>
        <div class="d-flex flex-column align-items-center">
            <div class="row row-gap-5">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <img class="thumb" src="{{$comic['thumb']}}" alt="">
                    <a href="{{ route('comics.show', $comic) }}"><h6 class="pt-2 text-light">{{$comic['series']}}</h6></a>
                </div>
                @endforeach
            </div>
            <form action="{{ route('comics.create') }}">
            <button class="btn btn-primary mt-4 text-uppercase">Create</button>

            </form>
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
@endsection