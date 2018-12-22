@extends('adminlte::page')

@section('title', 'Transferir Saldo')

@section('content_header')
    <h1>Transferir Saldo</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Depositar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Transferir Saldo (Informe o recebedor)</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    @include('admin.includes.alerts')

                    <form method="POST" action="{{ route('balance.transfer.confirm') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" name="sender" placeholder="Nome ou email" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Próximo</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
