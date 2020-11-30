@extends('template')

@section('content')

    <div class="sub_page_content"> <br>

        <form method="POST" action="" role="form">
            <input type="text" name="model_oryginalny" placeholder="Model oryginalny"><br>
            <input type="text" name="Producent" placeholder="Producent"><br>
            <input type="range" name="Moc" min="0" max="700">
            <label for="Moc">Moc</label><br>
            <input type="color" name="Kolor" placeholder="Kolor">
            <label for="Kolor">Kolor</label><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
            <input type="submit">
        </form>
    </div>
@endsection('content')
