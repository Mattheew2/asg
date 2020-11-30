@extends('template')

@section('content')
    <div class="sub_page_content">
        @foreach ($all_users as $user)
            <ul>
                <li>{{ $user['id'] }}</li>
                <li>{{ $user['name'] }}</li>
                <li>{{ $user['email'] }}</li>
            </ul>
            <a href="delete-user/{{ $user['id'] }}">Usuń użytkownika</a>
        @endforeach
    </div>
@endsection('content')
