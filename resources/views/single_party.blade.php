@extends('template')

@section('content')
    <div class="sub_page_content">
        <ul>
            <li>{{ $party['id'] }}</li>
            <li>{{ $party['Miejsce'] }}</li>
            <li>{{ $party['Data'] }}</li>
            <li>{{ $party['Charakter'] }}</li>
        </ul>

        <a href="join-party/{{ $party['id'] }}">
            Dołącz do imprezy
        </a>
    </div>
@endsection('content')
