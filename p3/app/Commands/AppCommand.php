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
 

        # Instantiate a new instance of the Faker\Factory class
        $faker = Factory::create();
    
        # Use a loop to create 15 games

      
           

            for ($i = 0; $i < 15; $i++) {
        
                $guesses = range(1, 10);
                shuffle($guesses);

                $outcome = ['won', 'lost'][rand(0, 1)];

                if ($outcome == 'lost') {
                $guesses = array_slice($guesses, 0, 4);

                $number = rand(1, 10);
                 while (in_array($number, $guesses)) {
                 $number = rand(1, 10);
                }

                $guess = $guesses[count($guesses) - 1];

                $counter = count($guesses);

            } else { 

                $counter = rand(0, 3);
                $guesses = array_slice($guesses, 0, $counter+1);
                $number = $guesses[count($guesses) - 1];
                $guess = $number;
             
            }
             
            $guesses = implode(' ', $guesses);
            
            $dummyData = [
                'guess' => $guess,
                'roundnum' => $faker->sha1(),
                'number' => $number,
                'guesses' => $guesses,
                'counter' => $counter,
            ];

            $this->app->db()->insert('rounds', $dummyData);
            } 
             
        }
    }

