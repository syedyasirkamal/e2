@extends('templates.master')


@section('message')
    
@endsection


@section('form')
    
   
<form  action="/gameshow/save" method="post">
 
   
     <input type="hidden" name="round" id="round" value='{{ $roundnum }}'> 
  <input type="text" name="guess" id="guess" /><br /> 
<input type="submit" name="submit" value="GUESS"/><br />  
<input type="hidden" name="number" id="number" value='{{ $number }}'/> 
  <input type="hidden" name="counter" id="counter" value='{{ $counter }}'/> 
   <input type="hidden" name="guesses" id="guesses" value='{{$guesses}}'/> 

 
</form>

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


@endsection

<br /><br />  
@section('attempts')
  You have {{ isset($results) ? $counter : '4'}} attempts left at this game.

counter {{ $counter   }}
number  {{ $number}}  
roundnum {{$roundnum}}
@endsection
