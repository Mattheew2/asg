@extends('template')

@section('content')

<div class="sub_page_content">

    <form method="POST" action="{{ action('App\Http\Controllers\Partys@add_party') }}" role="form">
        <input type="text" name="place" placeholder="Miejsce"><br>
        <input type="date" name="data">
        <label for="data">Data</label><br>
        <label for="charakter">Charakter</label>
        <select name="charakter">
            <option value="Milsim">Milsim</option>
            <option value="CQB">CQB</option>
            <option value="Zwykła strzelanka">Zwykła strzelanka</option>
        </select>
        <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit">
    </form>
</div>
@endsection('content')
