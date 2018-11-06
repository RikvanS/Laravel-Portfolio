@extends ('layout')
@section('title', 'Calculator')
@section('content')
<body class='calc-body'>
<div class="calc-container">
            <div id="calc-content">
                <form name="calculator" id="calc-form">
               <input type="text" class="calcanswer" name="answer" /> 
               <br>
               <input type="button" class="calcbutton" value="1" onclick="calculator.answer.value += '1'" />
               <input type="button" class="calcbutton" value="2" onclick="calculator.answer.value += '2'" />
               <input type="button" class="calcbutton" value="3" onclick="calculator.answer.value += '3'" />
               <input type="button" class="calcbutton" value="+" onclick="calculator.answer.value += '+'" />
               <br>
               
                <input type="button" class="calcbutton" value="4" onclick="calculator.answer.value += '4'" />
                <input type="button" class="calcbutton" value="5" onclick="calculator.answer.value += '5'" />
                <input type="button" class="calcbutton" value="6" onclick="calculator.answer.value += '6'" />
                <input type="button" class="calcbutton" value="-" onclick="calculator.answer.value += '-'" />
               <br>
               
                <input type="button" class="calcbutton" value="7" onclick="calculator.answer.value += '7'" />
                <input type="button" class="calcbutton" value="8" onclick="calculator.answer.value += '8'" />
                <input type="button" class="calcbutton" value="9" onclick="calculator.answer.value += '9'" />
                <input type="button" class="calcbutton" value="x" onclick="calculator.answer.value += '*'" />		    
               <br>
               
                <input type="button" class="calcbutton" value="C" onclick="calculator.answer.value = ''" />
                <input type="button" class="calcbutton" value="0" onclick="calculator.answer.value += '0'" />
                <input type="button" class="calcbutton" value="=" onclick="calculator.answer.value = eval(calculator.answer.value)" />
                <input type="button" class="calcbutton" value="/" onclick="calculator.answer.value += '/'" />		
                <br>
                </form>
             </div>
        </div>
</body>
@endsection