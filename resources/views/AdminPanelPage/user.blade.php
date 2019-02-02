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

                                <div class="col-md-12">
                                    <div class="card table-card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-8">
                                                <h3 class>Пользователи</h3>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="/user/create" class='right'><button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-plus"></i></button></a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Имя</th>
                                                            <th>Фамилия</th>
                                                            <th>Email</th>
                                                            <th>Телефон</th>
                                                            <th>Текущий баланс</th>
                                                            <th>Доступный баланс</th>
                                                            <th>Подтверждие почты</th>
                                                            <th>Дата создания</th>
                                                            <th>Дата последнего обновления</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach  ($users as $user)
                                                            <tr>
                                                                <td>{{ $user->id }}</td>
                                                                <td>{{ $user->first_name }}</td>
                                                                <td>{{ $user->last_name }}</td>
                                                                <td>{{ $user->email}}</td>
                                                                <td>{{ $user->phone ? $user->phone  : 'Не указан' }}</td>
                                                                <td>{{ $user->current_balance }}</td>
                                                                <td>{{ $user->available_balance }}</td>
                                                                <td>{{ $user->email_verified_at ? 'есть' : 'нету' }}</td>
                                                                <td>{{ $user->created_at }}</td>
                                                                <td>{{ $user->updated_at }}</td>
                                                                <td>
                                                                    <a href="/user/{{$user->id}}/edit">
                                                                        <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-ui-edit"></i></button>
                                                                    </a>
                                                                    <form class="form-table" method='POST'  action="/user/{{$user->id}}">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button type='submit' class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-ui-close"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    </div>

    <div id="styleSelector">
    </div>

</div>
@stop
