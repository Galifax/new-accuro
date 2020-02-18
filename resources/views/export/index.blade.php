
@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('page_header')
    <h1 class="page-title">
        Export product
    </h1>
@stop

@section('content')
<div>
    <form class="form-horizontal" method="post" action="/admin/export/download">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <h2 class="text-center">Поля</h2>
                @foreach($fields as $key => $value)
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="{{ $value }}" checked="checked" name="Excel[fields][]">{{ $value }} ({{$key}})
                                </label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="row">
                    <h2 class="text-center">Категории</h2>
                    <p class="text-center" style="color: red">(Если не выбрана ни 1 категория, то будут выбраны все по умолчанию</p>
                @foreach($categories as $key => $value)
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="{{ $value }}" name="Excel[categories][]">{{$key}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <input type="submit" class="btn btn-success" value="Экспортировать">
        </div>
    </form>
</div>
@endsection
