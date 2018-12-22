@extends('adminlte::page')

@section('title', 'Confirmar Transferência')

@section('content_header')
    <h1>Confirmar Transferência</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Depositar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Confirmar Transferência</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    @include('admin.includes.alerts')
                    <p>Transferir para: {{ $sender->name }}</p>
                    <p>Saldo atual: R$ {{ number_format($balance->amount, 2, ',', '.') }}</p>
                    <form method="POST" action="{{ route('balance.transfer.store') }}">
                        {!! csrf_field() !!}

                        <input type="hidden" name="sender_id" value="{{ $sender->id }}">

                        <div class="form-group">
                            <input type="text" name="value" placeholder="Valor" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Transferir</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
