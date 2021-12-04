<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    
    public function index()
    {
       

$counter= 4;
$number= rand(1,10); 
$roundnum = uniqid(); 

 
return $this->app->view('index', [
    
    'counter'=> $counter,
    'number'=> $number,
    'guess'=> null,
    'roundnum'=> $roundnum,
    'guesses' => null

]);
    }

    
    public function gameshow()
    {
        
        $roundnum = $this->app->param('round');
        $counter = $this->app->old('counter');
        $number = $this->app->old('number');
        $guess = $this->app->old('guess');
        $guesses = $this->app->old('guesses');
  
        dump($counter);
        dump($number);
dump($guesses);

        
        return $this->app->view('gameshow', [
            'counter'=> $counter,
            'number'=> $number,
            'roundnum'=> $roundnum,
            'guess'=> $guess,
            'guesses' => $guesses
        ]);
 
    }

    public function save()
    {
        
 


$this->app->validate([
    'guess' => 'required|numeric|min:1|max:10',
]);


  $guess = $this->app->input('guess');
  $roundnum = $this->app->input('round');
  $number = $this->app->input('number');
  $counter = $this->app->input('counter');
  $guesses = $this->app->input('guesses') . $this->app->input('guess') . " ";
 

 
  if($guess!=$number){
    --$counter;
  }; 

if($counter<1 or $number==$guess) {
    $this->app->db()->insert('rounds', [
        'roundnum' => $roundnum,
        'number' => $number,
        'guess' => $guess,
        'guesses' => $guesses,
        'counter'=> $counter,

    ] );
}
        return $this->app->redirect('/gameshow?round='.$roundnum, [
       'counter'=> $counter,
       'number' => $number,
       'guess' => $guess,
       'guesses' => $guesses
        ]
        );
    }
} 
