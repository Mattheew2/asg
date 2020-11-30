@extends('template')

@section('content')
    <?php
    $i = 0;
    foreach ($guns_taken as $item) {
    $test[$i] = $item['used_gun'];
    $i++;
    }
    ?>
    <div class="sub_page_content">
        <form method="POST" action="{{ action('App\Http\Controllers\join@joinParty') }}" role="form">

            <label for="name">Imię</label><br>
            <input type="text" name="name" placeholder="imię" required><br>
            <label for="last_name">Nazwisko</label><br>
            <input type="text" name="last_name" placeholder="Nazwisko" required><br>
            <label for="birth_date">Data urodzenia</label><br>
            <input type="date" name="birth_date" required><br>
            <label for="gun">Replika</label><br>
            <select name="gun" required>
                @foreach ($available_gun as $gun)
                    <?php if (!in_array($gun['id'], $test)) {
                    echo '<option value="';
                            echo $gun['id'];
                            echo '">';
                        echo $gun['Model_oryginalny'];
                        echo '</option>';
                    } ?>
                @endforeach
                <option value="0">Własna</option>
            </select><br>
            <label for="Tean">Drużyna</label><br>
            <select name="team" required>
                <option value="Red">Czerwona</option>
                <option value="Blue">Niebieska</option>
                <option value="Own">Dowolna</option>
            </select><br>
            <input type="hidden" name="Id_imprezy" value="{{ $party['id'] }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <br><input type="submit" value="Dołącz">
        </form>
    </div>
@endsection('content')
