@extends('templates.master')

 


@section('form')
    
   
<form  action="/gameshow/save" method="post">

 @if($counter>0 and $number!=$guess) 
   
   @if($number>$guess)
     Too low my friend. Guess again! Your guess was: <span test=guess-text>{{$guess}}</span>;
@elseif($number<$guess)
Woahhh that's too high. Try again!. Your guess was: <span test=guess-text>{{$guess}}</span>;
@endif
 <br /> 
  <br /> 
  <input type="text" test="guess" name="guess" id="guess" /><br /> 
<input type="submit" test="submit" name="submit" value="submit"/><br />  
 
 

 

@endif

 <input type="hidden" test="round" name="round" id="round" value='{{ $roundnum }}'> 
 <input type="hidden" test="number" name="number" id="number" value='{{$app->old('number')}}'/>
  <input type="hidden" test="counter" name="counter" id="counter" value='{{$app->old('counter')}}' /> 
     <input type="hidden" test="guesses" name="guesses" id="guesses" value='{{$app->old('guesses')}}'/> 

</form>

@if($counter<1 or $number==$guess) 
 
    
@if($counter<1)
  You lost! Your guess was <span test=lost-guess-text>{{$guess}}</span>. The correct answer was: {{$number}}
@elseif($number==$guess)
Hurray! You guessed it right. The number was <span test=guess-text>{{$number}}</span>
@endif
    <br /> 
       <br /> 

<div test="play-again" >       
<button id=button onclick=window.location.replace("/")>Play Again!</button><br /> 
     </div>
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

   @if($counter>0 and $number!=$guess) 
@section('attempts')
  
  You have {{$counter}} attempts left at this game.

counter {{$counter}}
number  {{$app->old('number')}}  
guess {{$app->old('guess')}} 
guesses {{$app->old('guesses')}} 
roundnum {{$roundnum}}
@endsection
@endif

@section('links')
<br /> 
<a href="/">< Play a New Game 
                </a>
            &emsp;&emsp;&emsp;&emsp;
 <a href="/historyshow">All Game History >  
                </a> 
   
 
@endsection