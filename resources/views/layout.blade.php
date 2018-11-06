<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Rik van Straaten | Junior Developer')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</head>

    <header>
<div class="NavContainer">
    <nav>
        <ul class="RightNav">
        <div class="dropdownmenu">
        <li class="dropdown">Projects</li>
        <div class="dropdowncontent">
        <a href="/temp">Temperature Converter</a>
        <a href="/clock">Digital Clock</a>
        <a href="/calculator">Calculator</a>
        <a href="/unitconverter">Unit Converter</a>
        <a href="/rockpaperscissors">Rock Paper Scissors</a>
        </div>
        </div>
        </ul>
    </nav>
</div>
<a class="site-logo" href="/">
    <span class="logo">RvS</span>
</a>
<!-- <a class="bio" href="/bio">About me</a> -->
    <a href="/test">test</a>
    </header>

    <button id="topbutton" title="Go to top" onclick="topFunction()">Top</button>
<body>

@yield('content')


</body>

<footer>
    <span class="header3"><h3>Find me on: </h3></span><br>
    <div class="footerdiv">
        <a href="https://www.facebook.com/rik.vanstraaten.9" target="_blank" class="Linkimage"><img alt="Facebook" src="https://www.sololearn.com/Uploads/icons/facebook.png"></a>
        <a href="https://twitter.com/Ymirism" target="_blank" class="Linkimage"><img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png"></a>
    </div>
</footer>
</html>