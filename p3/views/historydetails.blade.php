@extends('templates.master')


@section('message')
   Details: GAME #{{$historyDetails['id']}}
@endsection


@section('form')
    Result: @if ($historyDetails['number']==$historyDetails['guess']) Won
    @elseif ($historyDetails['number']!==$historyDetails['guess']) Lost
    @endif<br /> 
    Number: {{ $historyDetails['number'] }}<br /> 
    Your guesses: {{ $historyDetails['guesses'] }}<br /> 
    Incorrect attempts: {{$historyDetails['counter'] }}<br /> 
{{$historyDetails['guess']}}
    @endsection

@section('attempts')
Game ID: {{ $historyDetails['roundnum'] }}<br /> 
  
@endsection


@section('links')
<br /> 
 <a href="/historyshow">< Back to All Game History  
                </a>&emsp;&emsp;&emsp;&emsp;
 <a href="/">Play a New Game >
                </a>
            
   
 
@endsection