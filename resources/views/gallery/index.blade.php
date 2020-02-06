@extends('layouts.app')

@section('title', 'Gallery')
@section('keywords', 'Gallery')
@section('description', 'Gallery')

@section('content')
<div class="container">
        <h2>
            Gallery
        </h2>
        <div class="main">

            <div class="big-img">
                <img class="target" src="{{ $model[0]->getImage() }}" alt="">
            </div>
            <div class="slider slider-nav">
                @foreach($model as $photo)
                    <a class="item" data-slide="1">
                        <img src="{{ $photo->getImage() }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
