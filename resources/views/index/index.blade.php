@extends('layouts.app')

@section('title', 'Home')
@section('keywords', 'Home')
@section('description', 'Home')

@section('content')
<div class="title-block">
        <div class="container" style="padding-left: 5vw;">
            <h2 class="title">
             Harmony of design
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
                            <h3 class="sub-title">Сервис</h3>
                            <p class="descr">
                            Команда наших инженеров возьмёт на себя все трудности расчетов и планирования при выборе нового радиатора. Мы сделаем всё, чтобы понравившаяся модель служила Вам долгие годы и не теряла своей актуальности.
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h3 class="sub-title">Качество</h3>
                            <p class="descr">
                            Ручная сборка и улучшенные стандарты качества делают наши радиаторы долговечными и надёжными, а исполнение в нержавеющей стали отличает их от своей аналогов. 
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h3 class="sub-title">Индивидуальный подход</h3>
                            <p class="descr">
                            Возможность производства под заказ позволяет создать эксклюзивную модель, согласно Вашим вкусовым предпочтениям и желаемым размерам. 
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h3 class="sub-title">Продукт современности</h3>
                            <p class="descr">
                            Выполненные в последних тенденциях, наши радиаторы сочетают в себе непревзойдённую функциональность и запоминающуюся эстетику исполнения. 
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
