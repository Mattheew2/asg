@extends('template')

@section('content')

    <div class="sub_page_content row">
        @foreach ($weapons as $weapon)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $weapon['Model_oryginalny'] }}</h5>
                        <p class="card-text">
                            {{ $weapon['Producent'] }}<br>
                            {{ $weapon['Moc'] }}<br>
                            {{ $weapon['Kolor'] }}</p>
                        <a href="repliki/{{ $weapon['id'] }}" class="btn btn-primary">Szczegóły</a>
                    </div>
                </div>
            </div>
        @endforeach


        <a href="repliki/add/">Dodaj nową</a>
    </div>
@endsection('content')
