@extends('templates.master')

 
@section('title')
  P3
@endsection

@section('message')
    
@endsection


@section('form')
    
   
<form  action="/gameshow/save" method="post">
 
   
     <input type="hidden" name="round" id="round" value='{{ $roundnum }}'> 
  <input type="text" test="guess" name="guess" id="guess" value='{{ $guess }}' /><br /> 
<input type="submit" test= "submit" name="submit" value="submit"/><br />  
<input type="hidden" test="number" name="number" id="number" value='{{ $number }}'/> 
  <input type="hidden" test="counter" name="counter" id="counter" value='{{ $counter }}'/> 
   <input type="hidden" test="guesses" name="guesses" id="guesses" value='{{$guesses}}'/> 

 
</form>

@if($app->errorsExist())
<ul test='validation-output' class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


@endsection

<br /><br />  
@section('attempts')
  You have {{ isset($results) ? 4-$counter : '4'}} attempts left at this game.

counter {{ $counter   }}
number  {{ $number}}  
roundnum {{$roundnum}}
@endsection

@section('links')
<br /> 
 <a href="/historyshow">All Game History >  
                </a>
   
 
@endsection