@extends('layout')
@section('title', 'Rock Paper Scissors')
@section('content')
<body class="rps-body">
<div class="rockpaperscissorsgame">
            <div class="RPSscoreboard">
                <div id="top" class="RPStop"> Score</div>
		        <div id="score" class="RPSscore" > 0 : 0</div>
		        <div id="status" class="RPSstatus">Click to play!</div>
            </div>
		<div id="game">
		    <input type="image" class="rpsbutton" src="Images/rock.png"  value="rock" onclick="runGame('r')">
		    <input type="image" class="rpsbutton" src="Images/Paper.png"  value="paper" onclick="runGame('p' )">
		    <input type="image" class="rpsbutton" src="Images/scissors.png" value="scissors" onclick="runGame('s')">
		    <input type="image" class="rpsbutton" src="Images/Reset.png" value="reset" onclick="reset()">
        </div>
    </div>
</body>
@endsection
<script type="text/javascript" src="{{ URL::asset('js/rockpaperscissors.js') }}"></script>