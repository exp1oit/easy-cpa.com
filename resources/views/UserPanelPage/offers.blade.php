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
                                            <h3>Офферы</h3>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <img src="{{ asset('/img/timehard.jpg') }}" alt="user image"
                                                                            class="img-radius img-80 align-top m-r-30">
                                                                        <div class="d-inline-block">
                                                                            <h6>Shirley Hoe</h6>
                                                                            <p class="text-muted m-b-0">Sales executive ,
                                                                                NY</p>
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
                                                                    <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-plus"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endfor
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
