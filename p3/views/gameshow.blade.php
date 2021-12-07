@extends('templates.master')

 


@section('form')
    
   
<form  action="/gameshow/save" method="post">

 @if($counter>0 and $number!=$guess) 
   
   @if($number>$guess)
     Too low my friend. Guess again! Your guess was: {{$guess}};
@elseif($number<$guess)
Woahhh that's too high. Try again!. Your guess was: {{$guess}};
@endif
 <br /> 
  <br /> 
  <input type="text" name="guess" id="guess" /><br /> 
<input type="submit" name="submit" value="GUESS"/><br />  
 
 

 

@endif

 <input type="hidden" name="round" id="round" value='{{ $roundnum }}'> 
 <input type="hidden" name="number" id="number" value='{{$app->old('number')}}'/>
  <input type="hidden" name="counter" id="counter" value='{{$app->old('counter')}}' /> 
     <input type="hidden" name="guesses" id="guesses" value='{{$app->old('guesses')}}'/> 

</form>

@if($counter<1 or $number==$guess) 
 
    
@if($counter<1)
  You lost! The correct answer was: {{$number}}
@elseif($number==$guess)
Hurray! You guessed it right. The number was {{$number}}
@endif
    <br /> 
       <br /> 
       
<button id=button onclick=window.location.replace("/")>Play Again!</button><br /> 
     
<br /> 
    


@endif


@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


@endsection

  
@section('attempts')
  
  You have {{$counter}} attempts left at this game.

counter {{$counter}}
number  {{$app->old('number')}}  
guess {{$app->old('guess')}} 
guesses {{$app->old('guesses')}} 
roundnum {{$roundnum}}
@endsection

@section('links')
<br /> 
<a href="/">< Play a New Game 
                </a>
            &emsp;&emsp;&emsp;&emsp;
 <a href="/historyshow">All Game History >  
                </a> 
   
 
@endsection