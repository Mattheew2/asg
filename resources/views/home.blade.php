@extends('template')

@section('content')

    <div class="sub_page_content">
        <div class="card">
            <div class="card-header">{{ __('Panel administratora') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('Zalogowałeś się') }}
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <a href="{{ url('/imprezy') }}">
                    Przejdz do imprez
                </a><br>
                <a href="{{ url('/add-party') }}">
                    Dodaj impreze
                </a><br>
                <a href="repliki">Przejdz do replik</a><br>
                <a href="repliki/add/">Dodaj nową replikę</a>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{ url('home/users') }}">
                    Użytkownicy
                </a><br>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{ url('news') }}">
                   News
                </a><br>
            </div>
        </div>
    </div>
@endsection
