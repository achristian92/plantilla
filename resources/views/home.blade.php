@extends('layouts.app')

@section('content')
    <br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Usuarios</h5>
                </div>
                <div class="ibox-content">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombres</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $usu)
                            <tr>
                                <td>{{$usu->username}}</td>
                                <td>{{$usu->firstname}} {{$usu->lastname}}</td>
                                <td>{{$usu->email}}</td>
                                <td>{{$usu->phone}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
