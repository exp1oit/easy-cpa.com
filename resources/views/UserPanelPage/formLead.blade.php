@extends('mainPanel')


@section('content')

<div class="pcoded-main-container" style="margin-top: 70px;">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">

                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Добавления Лида</h3>
                                        </div>
                                        <div class="card-block">
                                            <form id="main" method="post" action="/" novalidate="">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Выберете оффер</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control fill">
                                                            <option value="opt1">Type 1</option>
                                                            <option value="opt2">Type 2</option>
                                                            <option value="opt3">Type 3</option>
                                                            <option value="opt4">Type 4</option>
                                                            <option value="opt5">Type 5</option>
                                                            <option value="opt6">Type 6</option>
                                                            <option value="opt7">Type 7</option>
                                                            <option value="opt8">Type 8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Выведите имя</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            placeholder="ФИО">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Выведите номер телефона</label>
                                                    <div class="col-sm-10">
                                                        <input type="phone" class="form-control" id="phone"
                                                            name="phone" placeholder="89282222222">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
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
