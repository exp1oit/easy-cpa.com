@extends('mainPanel')


@section('content')

<div class="pcoded-main-container" style="margin-top: 70px;">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <h1 class="text-center">Профиль пользователя</h1>
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Основная информация о пользователе</h3>
                                        </div>
                                        <div class="card-block">
                                            <form id="main" method="post" action="" novalidate="">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Имя</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="name" name="first_name"
                                                            value="{{$user->first_name}}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Фамилия</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="name" name="last_name"
                                                            value="{{ $user->last_name }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="name" name="email"
                                                            value="{{ $user->email }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Номер телефона</label>
                                                    <div class="col-sm-10">
                                                        <input type="phone" class="form-control" id="phone"
                                                            name="phone" value="{{ $user->phone }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                {{--  <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Тип пользователя</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control fill">
                                                            <option value="opt1">Type 1</option>
                                                            <option value="opt2">Type 2</option>
                                                            <option value="opt3">Type 3</option>
                                                        </select>
                                                    </div>
                                                </div>  --}}
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary m-b-0">Сохранить</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="styleSelector">
    </div>

</div>
@stop