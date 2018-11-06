@extends ('layout')
@section('title', 'Digital Clock')
@section('content')
<body class="clockbody">
<section>
    <div id="ClockDisplay" class="clock"></div>
    <script src=Clockscript.js></script>
</section>
<script type="text/javascript" src="{{ URL::asset('js/clock.js') }}"></script>
@endsection