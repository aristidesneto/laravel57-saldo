@extends('adminlte::page')

@section('title', 'Fazer Retirada')

@section('content_header')
    <h1>Fazer Retirada</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Retirada</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Fazer Retirada</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    @include('admin.includes.alerts')

                    <form method="POST" action="{{ route('balance.withdraw.store') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" name="value" placeholder="Valor Retirada" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Retirar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
