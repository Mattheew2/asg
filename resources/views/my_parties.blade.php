@extends('template')

@section('content')

<div class="sub_page_content">
    <?php
    $i = 1;
    foreach ($all_parties as $party) {
    $party_place[$i] = $party['Miejsce'];
    $party_date[$i] = $party['Data'];
    $party_style[$i] = $party['Charakter'];
    $i++;
    }
    ?>
    <?php
    $i = 1;
    foreach ($all_guns as $gun) {
    $gun_type[$i] = $gun['Model_oryginalny'];
    $gun_color[$i] = $gun['Kolor'];
    $i++;
    }
    ?>



    <h2>Imprezy do których jesteś obecnie zapisany</h2>
    @foreach ($my_partii as $my_party)
        <ul>
            <li>{{ $party_place[$my_party['Id_imprezy']] }}</li>
            <li>{{ $party_date[$my_party['Id_imprezy']] }}</li>
            <li>{{ $party_style[$my_party['Id_imprezy']] }}</li>
            <?php if ($my_party['used_gun'] != 'Own') { ?>
            <li>{{ $gun_type[$my_party['used_gun']] }} - kolor: {{ $gun_color[$my_party['used_gun']] }}</li>
            <?php } else {echo "<li>Własna</li>";
            
            } ?>
        </ul>
    @endforeach

</div>

@endsection('content')
