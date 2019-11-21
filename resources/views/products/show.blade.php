@extends('layouts.app')

@section('title', $product->title)
@section('keywords', $product->meta_keywords)
@section('description', $product->meta_description)

@section('content')
    <div class="container">
        <h2>
            Home/product
        </h2>
        <div class="row">
            <div class="col-md-8">
            <ul id="gallery" class="row no-padding gallery-list">
                        <li class="col-md-12 no-padding"
                            data-responsive="{{ $product->getPhoto() }}"
                            data-src="{{ $product->getPhoto() }}">
                            <div class="gallery-item big-img">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ $product->getPhoto() }}">
                                </a>
                            </div>
                        </li>
                        <?php $gallery = $product->getGallery() ?>
                        @if (isset($gallery) && !empty($gallery))
                            @foreach($gallery as $photo)
                                <li class="col-md-2  col-sm-3 col-4 no-padding"
                                    data-responsive="{{ $photo }}"
                                    data-src="{{ $photo }}">
                                    <div class="gallery-item">
                                        <a href="">
                                            <img class="img-responsive"
                                                 src="{{ $photo }}">
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
            </div>
            <!--gallery-->

            <div class="col-md-4">
                <h1 class="product-title">
                    {{ $product->name }}
                </h1>
                <p class="product-url">
                    Article: {{ $product->sku }}
                </p>
                <p class="price">
                    $ {{ $product->price }}
                </p>
                <p class="product-descr">
                    {!! $product->content !!}
                </p>
            </div>
            <!--descr-->

            <div class="col-md-6">
                <h2 class="product-title text-center">
                    Technical spec
                </h2>
                <div>
                    {!! $product->characteristics !!}
                </div>
{{--                <ul class="specific">--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                    <li><span> Model:</span> Nimbus 2000</li>--}}
{{--                </ul>--}}
            </div>

            <div class="col-md-6">
                <img width="100%" src="{{ $product->getTechnicalDrawing() }}" alt="">
            </div>

        </div>
    </div>

@endsection
