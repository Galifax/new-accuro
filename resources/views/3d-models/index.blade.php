@extends('layouts.app')

@section('title', '3d models')
@section('keywords', '3d models')
@section('description', '3d models')

@section('content')
<div class="container">
        <h2 class="page-title">
            3D-models</br>
            <span>Зарегестритуйтесь и скачайте</span>
        </h2>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <form class="form" action="">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group">
                        <textarea rows="5" class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <button class="form-btn">
                        confirm
                    </button>
                </form>
            </div>
            <div class="col-sm-12 col-md-7">
                <h3>
                    Скачать файлы
                </h3>
                <table>
                    <tr>
                        <td>filename</td>
                        <td><a href="#">download</a></td>
                    </tr>
                    <tr>
                        <td>filename</td>
                        <td><a href="#">download</a></td>
                    </tr>
                    <tr>
                        <td>filename</td>
                        <td><a href="#">download</a></td>
                    </tr>
                    <tr>
                        <td>filename</td>
                        <td><a href="#">download</a></td>
                    </tr>
                    <tr>
                        <td>filename</td>
                        <td><a href="#">download</a></td>
                    </tr>
                </table>

            </div>
        </div>

    </div>
    </div>
@endsection
