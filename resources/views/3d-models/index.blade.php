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

        <div class="models-3d-text">
        <p>  
        Для того, чтобы нашим клиентам и партнёрам было ещё удобнее, мы создали специальный каталог с 3D-моделями, с помощью которого Вы сможете визуализировать любой радиатор, тщательно рассмотрев его в трёх измерениях. 
        </p>
        <p>
        На сегодняшний день, 3D-модели необходимы для построения любых дизайн-проектов и позволяют грамотно подобрать нужный радиатор в готовый дизайн-проект, понимая уникальную текстуру и специфику каждого. 
        </p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <form class="form" action="">
                    <h3>Заказать консультацию</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Ваше Имя" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Номер телефона" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <button class="form-btn">
                        send
                    </button>
                </form>
            </div>
            <div class="col-sm-12 col-md-7 download-3d">
                <h3>
                    Скачать файлы<br>
                    <span>3D модели и каталоги</span>
                </h3>
                <!-- <table>
                    <tr>
                        <td>filename</td>
                        <td><a href="#" download>download</a></td>
                    </tr>
                    <tr>
                        <td>filename</td>
                        <td><a href="#"  download>download</a></td>
                    </tr>
                </table> -->

                <a class="title-btn" target="_blank" href="https://drive.google.com/drive/folders/1eGmB04B4bQHLHecUpyQo9B4vAd8aIODv">DOWNLOAD</a>

            </div>
        </div>

    </div>
    </div>
@endsection
