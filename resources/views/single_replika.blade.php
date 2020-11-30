@extends('template')

@section('content')

<div class="sub_page_content">
<ul>
    <li>{{ $weapons['id'] }}</li>
    <li>{{ $weapons['Model_oryginalny'] }}</li>
    <li>{{ $weapons['Producent'] }}</li>
    <li>{{ $weapons['Moc'] }}</li>
    <li>{{ $weapons['Kolor'] }}</li>
</ul></div>

@endsection('content')