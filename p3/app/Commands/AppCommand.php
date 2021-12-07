<?php

namespace App\Commands;
use Faker\Factory;

class AppCommand extends Command
{

    

    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function fresh()
    {
        $this->migrate(); 
        $this->seedDummyData();
         
    }


    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
        'roundnum' => 'varchar(255)',
        'number' => 'int',
        'guess' => 'int',
        'guesses' => 'varchar(255)',
        'counter' => 'int'
    ]);
    
        dump('Migration complete; check the database for your new tables.');
    }

    public function seedDummyData() {

        require_once 'vendor/autoload.php';

        # Instantiate a new instance of the Faker\Factory class
        $faker = Factory::create();
    
        # Use a loop to create 15 games

      
           

            for ($i = 0; $i < 20; $i++) {
        
                $roundnum = $faker->sha1();
                $number =  $faker->numberBetween(1, 10);
                $guess =  $faker->numberBetween(1, 10);
                $counter = 4;
                $guesses = null;

            

            # Set up a game
            if ($number==$guess) {
                $dummyData = [
                
                'guess' => $guess,
                'roundnum' => $roundnum,
                'number' => $number,
                'guesses' => $guesses.$guess.' ',
                'counter' => $counter,
            ];
            } else { $dummyData = [
                
                'guess' => $guess,
                'roundnum' => $roundnum,
                'number' => $number,
                'guesses' => $guesses.$guess.' ',
                'counter' => --$counter,
            ];}

           
               
         
        
        
    
            # Insert the game
            $this->app->db()->insert('rounds', $dummyData);
             
  
             
                
                
            
        }
             
        }
    }

