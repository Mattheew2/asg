@extends('template')

@section('content')

<div class="sub_page_content">
    <?php
    $types = ['Milsim', 'CQB', 'Zwykła strzelanka'];
    $character = $party['Charakter'];

    function if_selected($a, $b)
    {
    if ($a == $b) {
    echo 'selected';
    }
    }
    ?>


    <form method="POST" action="{{ action('App\Http\Controllers\Partys@edit_party') }}" role="form">
        <input type="text" name="place" value="{{ $party['Miejsce'] }}"><br>
        <input type="date" name="data" value="{{ $party['Data'] }}">
        <label for="data">Data</label><br>
        <label for="charakter">Charakter</label>
        <select name="charakter" value="">
            <?php foreach ($types as $type) { ?>
            <option value="<?php
                echo $type . '" ';
                if_selected($type, $character);
                ?> "><?php echo $type; ?></option>
                    <?php } ?>
                </select>
                <br>
                <input type="hidden" name="id" value="{{$party['id']}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit">
            </form>
</div>

@endsection(' content')
