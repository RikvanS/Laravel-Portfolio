@extends ('layout')
@section('title', 'Unit Converter')
@section('content')
<body class="unitconverterbody">
<div class="unitconverter">

<label for="Inches"> Inches </label><br>
<input type="text" id="Inches" value="0" onclick="this.select()" onkeyup="inchesfunc()">
<br>

<label for="Feet"> Feet </label><br>
<input type="text" id="Feet" value="0" onclick="this.select()" onkeyup="feetfunc()"> <!-- Because of the CSS styling used for the calculator the converter is styled automatically too. While this will suffice for the sake of the exercise, on a live page I would want to seperate the CSS styling of such elements, as right now the styling for the unit converter isn't great. Rather than uniformly styling all input type=text I imagine we'd style per element. Perhaps a good exercise for the exercise page 2.0!   -->
<br>

<label for="yards"> Yards </label><br>
<input type="text" id="Yards" value="0" onclick="this.select()" onkeyup="yardsfunc()">
<br>

<label for="Miles"> Miles </label><br>
<input type="text" id="Miles" value="0" onclick="this.select()" onkeyup="milesfunc()">
<br>

<label for="Centimeter"> Centimeter </label><br>
<input type="text" id="Centimeter" value="0" onclick="this.select()" onkeyup="centimeterfunc()">
<br>

<label for="Meter"> Meter </label><br>
<input type="text" id="Meter" value="0" onclick="this.select()" onkeyup="meterfunc()">
<br>

<label for="Kilometer"> Kilometer </label> <br>
<input type="text" id="Kilometer" value="0" onclick="this.select()" onkeyup="kilometerfunc()">
<br>
</div>
</body>
<script type="text/javascript" src="{{ URL::asset('js/unitconverter.js') }}"></script>
@endsection