@extends('mainPanel')


@section('content')

<div class="pcoded-main-container" style="margin-top: 70px;">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <h1 class="text-center">Создание оффера</h1>
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3></h3>
                                        </div>
                                        <div class="card-block">
                                            <form id="main" method="post" action="{{ route('offer.store') }}" novalidate="" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ Auth::id() ? Auth::id() : null }}" hidden>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Название оффера</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="title" name="title">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Рекламный материал</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="promo" name="promo">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Цена</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="amount" name="amount">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Состояние</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="condition" name="condition">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Описание</label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="5" cols="5" class="form-control" placeholder="Введете информацию по офферу"
                                                         name="description"></textarea>
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Добавления картинок (первая картинка будет основной)</label>
                                                    <div class="col-sm-10">
                                                        <input type="file"  name="filename[]" class="form-control" multiple>
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary m-b-0">Создать оффер</button>
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