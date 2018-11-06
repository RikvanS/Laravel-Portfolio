@extends('layout')
@section('title', 'Temperature Converter')
@section('content')

<body class="tempconverter">
<div id="converter" class="tempconverter">
                <label for="Kelvin">Kelvin</label>
                <input type="text" id="Kelvin" value="0" onclick="this.select()" onkeyup="KelvinFunc()"> <br><br>
                <label for="Fahrenheit">Fahrenheit</label>
                <input type="text" id="Fahrenheit" value="0" onclick="this.select()" onkeyup="FahrenFunc()"> <br><br>
                <label for="Celsius">Celsius</label>
                <input type="text" id="Celsius" value="0" onclick="this.select()" onkeyup="CelsiusFunc()"> <br><br>
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/tempconverter.js') }}"></script>
@endsection