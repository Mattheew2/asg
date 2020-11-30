@extends('template')

@section('content')
    <div class="sub_page_content">

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Miejsce</th>
                        <th scope="col">Data</th>
                        <th scope="col">Charakter</th>
                        <th scope="col">Szczegły</th>
                        @if (Auth::check())
                            <th scope="col">Akcje</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parties as $party)
                        <tr>
                            <th scope="row">{{ $party['Miejsce'] }}</th>
                            <td>{{ $party['Data'] }}</td>
                            <td>{{ $party['Charakter'] }}</td>
                            <td><a href="imprezy/{{ $party['id'] }}">Zobacz więcej</a></td>
                            @if (Auth::check())
                                <td>
                                    <a href="edit-party/{{ $party['id'] }}">Edytuj imprezę</a><br>
                                    <a href="delete-party/{{ $party['id'] }}">Usuń imprezę</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection('content')
