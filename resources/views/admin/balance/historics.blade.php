@extends('adminlte::page')

@section('title', 'Histórico de Movimentação')

@section('content_header')
    <h1>Histórico de Movimentação</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <form action="" method="POST" class="form form-inline">
                <input type="text" name="id" class="form-control" placeholder="ID">
                <input type="date" name="date" class="form-control">
                <select name="type" class="form-control">
                    <option value="">-- Selecione --</option>
                    @foreach ($types as $key => $type)
                        <option value="{{ $key }}">{{ $type }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form>

        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Data</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Sender</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($historics as $historic)
                    <tr>
                        <td>{{ $historic->id }}</td>
                        <td>{{ $historic->date }}</td>
                        <td>R$ {{ number_format($historic->amount, 2, ',', '.') }}</td>
                        <td>{{ $historic->type($historic->type) }}</td>
                        <td>
                            @if ($historic->user_id_transaction)
                                {{ $historic->userSender->name }}
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>

            {!! $historics->links() !!}

        </div>
    </div>
@stop
