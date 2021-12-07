@extends('templates.master')

 


@section('form')
    

        @if (!$histories)
            There are no reviews for this product yet.
        @endif

        @foreach ($histories as $history)
             
                <a href="/historydetails?round={{$history['roundnum']}}"><div> Game #{{ $history['id'] }}</div>
                </a>
            
        @endforeach
    </div>

@endsection

 

@section('links')
<br />  
 <a href="/">Play a New Game >
                </a>
            
   
 
@endsection