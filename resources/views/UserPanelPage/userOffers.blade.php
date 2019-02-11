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
                                            <h3>Мои офферы</h3>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Оффер</th>
                                                            <th>Цели</th>
                                                            <th>Ставка</th>
                                                            <th>CR</th>
                                                            <th>EPC</th>
                                                            <th>География</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($offers as $offer)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        @if ($offer->images()->first())
                                                                            <img src="{{ asset($offer->images()->first()->path) }}" alt="user image"
                                                                                class="img-radius img-80 align-top m-r-30">
                                                                        @endif
                                                                        <div class="d-inline-block">
                                                                            <a href="/offer/{{$offer->id}}"> <h6>{{$offer->title}}</h6>
                                                                                <p class="text-muted m-b-0">Sales executive ,
                                                                                    NY</p>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>Pinterest</td>
                                                                <td>223</td>
                                                                <td>19-11-2018</td>
                                                                <td>
                                                                    asdsadsadsad
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>1</li>
                                                                        <li>2</li>
                                                                        <li>3</li>
                                                                    </ul>
                                                                </td>
                                                                <td>
                                                                    <a href="/offer/{{$offer->id}}/edit">
                                                                        <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-ui-edit"></i></button>
                                                                    </a>
                                                                    <a href="/offer/{{$offer->id}}/leads/">
                                                                        <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-ui-user-group"></i></button>
                                                                    </a>
                                                                    <form class="form-table" method='POST'  action="/offer/{{$offer->id}}">
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
