@extends('layouts.app')

@section('title', 'Products')
@section('keywords', 'Products')
@section('description', 'Products')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-3 ">

                <div class="categorys" id="categorys">

                    <ul class="category-list">
                        @if (isset($categories) && !empty($categories))
                            @foreach($categories as $category)
                            <li id="heading-{{ $category->id }}">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-{{ $category->id }}" aria-expanded="true" aria-controls="collapse-{{ $category->id }}">
                                    {{ $category->name }}
                                </button>

                                <ul id="collapse-{{ $category->id }}" class="lvl-2 collapse" aria-labelledby="heading-{{ $category->id }}" data-parent="#categorys">
                                    @if (isset($category->products) && !empty($category->products))
                                        @foreach($category->products as $product)
                                        <li>
                                            <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                                                {{ $product->name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-7 col-md-9">
                <div class="row">
                    @if (isset($products) && !empty($products))
                        @foreach($products as $product)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
                            </div>
                        @endforeach
                    @endif
                </div>
                {{ $products->links() }}
            </div>
        </div>
</div>
@endsection
