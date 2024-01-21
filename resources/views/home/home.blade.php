@extends('layout.layout')
 
@section('title', 'Landing Page')
 
@section('content')

    <div class="col-md-12">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/vascommBanner.png" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/vascommBanner.png" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/vascommBanner.png" class="d-block w-100 img-fluid" alt="...">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h6 class="title-section font-playfair py-4">Terbaru</h6>
    </div>

    <div class="d-flex flex-row overflow-auto">
        @foreach($productsNew as $productNew)
        <div class="col">
            <div class="card card-produk pb-4 pt-3 mb-3" style="height: 290px;">
                <div class="mx-auto">
                    <img class="img-fluid" style="height: 120px;" src="{{$productNew->imagePath}}" alt="produk">
                </div>
                <div class="produk-title font-playfair mt-4 px-3">{{$productNew->name}}</div>
                <div class="produk-price font-playfair px-3 pb-1">IDR {{$productNew->price}}</div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="col-md-12">
        <h6 class="title-section font-playfair py-4">Produk Tersedia</h6>
    </div>
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5">
        @foreach($products as $product)
        <div class="col">
            <div class="card card-produk pb-4 pt-3 mb-3" style="height: 290px;">
                <div class="mx-auto">
                    <img class="img-fluid" style="height: 120px;" src="{{$product->imagePath}}" alt="produk">
                </div>
                <div class="produk-title font-playfair mt-4 px-3">{{$product->name}}</div>
                <div class="produk-price font-playfair px-3 pb-1">IDR {{$product->price}}</div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="col-md-12 text-center my-3">
        <button class="btn btn-more" type="button">Lihat lebih banyak</button>
    </div>

@stop
 