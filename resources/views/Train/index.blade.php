@extends('layouts.app')
@section('title', 'All Train')
@section('content')

    <main class="container">
        <div class="row">
            <div class="col-12">
                <tr>
                    <th class="m-5" scope="col">Nome azienda</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                @foreach ($trains as $train)
                    <table class="table">

                        <tbody>
                            <tr>

                                <td>{{ $train['azienda'] }}</td>
                                <td>{{ $train['stazione_di_partenza'] }}</td>
                                <td>{{ $train['stazione_di_arrivo'] }}</td>
                                <td>{{ $train['orario_partenza'] }}</td>
                                <td>{{ $train['orario_arrivo'] }}</td>
                                <td>{{ $train['codice_treno'] }}</td>
                                <td>{{ $train['numero_carrozze'] }}</td>
                                <td>{{ $train['treno_in_orario'] }}</td>
                                <td>{{ $train['cancellato'] }}</td>
                            </tr>

                        </tbody>
                    </table>
                @endforeach

            </div>

        </div>

    </main>

@endsection
