@extends('layouts.app')

@section('title', 'Home')
@section('keywords', 'Home')
@section('description', 'Home')

@section('content')
<div class="title-block">
        <div class="container" style="padding-left: 5vw;">
            <h2 class="title">
                harmony of design and quality
            </h2>
            <a href="/story" class="title-btn">
                Read more
                </a>
        </div>
    </div>

    <style>

    </style>
    <div class="container">
        <section id="slider">

            <div class="index-slider">
                @if (isset($products) && !empty($products))
                    @foreach($products as $product)
                        <div class="product">
                            <div class="media">
                                <img src="{{ $product->getPhoto() }}" alt="">
                            </div>
                            <div class="text-area">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <p class="product-price">$ {{ $product->price }}</p>
                                <span class="circle">
                                            <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                                            detail
                                            </a>
                                        </span>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

            <div class="slider-title-fix">
                <h2 class="slider-title">
                    <span>try somthing new</span><br>
                    New model
                </h2>
            </div>
        </section>

        <section id="titles">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <h3 class="sub-title">title</h3>
                            <p class="descr">
                                ipsum dolor sit amet consectetur, adipisicing elit. Eius dolores asperiores fuga
                                assumenda illum? Perspiciatis ab blanditiis ut saepe, beatae vitae temporibus?
                                Molestiae, tempora ad. Tenetur optio illum itaque porro?
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h3 class="sub-title">title</h3>
                            <p class="descr">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam explicabo quas, totam
                                aspernatur reiciendis culpa asperiores saepe maiores blanditiis voluptatum? Deleniti sit
                                repudiandae reiciendis repellat molestias, unde consequatur id officiis. Lorem
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h3 class="sub-title">title</h3>
                            <p class="descr">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam explicabo quas, totam
                                aspernatur reiciendis culpa asperiores saepe maiores blanditiis voluptatum? Deleniti sit
                                repudiandae reiciendis repellat molestias, unde consequatur id officiis. Lorem
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h3 class="sub-title">title</h3>
                            <p class="descr">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam explicabo quas, totam
                                aspernatur reiciendis culpa asperiores saepe maiores blanditiis voluptatum? Deleniti sit
                                repudiandae reiciendis repellat molestias, unde consequatur id officiis. Lorem
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6">
                    <div class="block-bg-img">

                    </div>
                </div>
            </div>
        </section>


        <section id="index-gallery">
            <h2 class="gallery-title">Gallery</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <a href="/gallery">
                            <img src="/images/g/1.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <a href="/gallery">
                            <img src="/images/g/2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <a href="/gallery">
                            <img src="/images/g/3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <a href="/gallery">
                            <img src="/images/g/4.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <a href="/gallery">
                            <img src="/images/g/5.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <a href="/gallery">
                            <img src="/images/g/6.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-item">
                        <a href="/gallery">
                            <img src="/images/g/7.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
