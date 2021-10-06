# Project 1

- By: Yasir Kamal
- URL: <http://e2p1.kamalzadeh.me>

## Game planning

#VERSION 1 - Simple version (no user input)

- Use sessions since we will be receiving and storing information from session in predefined variables that will need to be unset at the end of each session to start a new game.
- Set variables that will be the user input number and print instructions/validation responses on each guess
- Generate a random number as the one that needs to be guessed.
- Create a counter based on each session to count the number of attempts. I have set the limit to 4 attempts. Reset counter at start of each new session.
- Match the random number and guess and output results as appropriate. If player guesses it right, the game is aborted and session is detroyed for a new game.
- Decrease the attempts counter by 1 on each unsuccessful match
- Create and set an attempt variable to provide user with on screen statement on how many attempts they have left.
- Set the counter so that if all the attempts are used the game is aborted and the session is destroyed for a new game

#VERSION 2 - Complicated version (user input)

- Use sessions since we will be receiving and storing information from both the form and session in predefined variables that will need to be unset at the end of each session to start a new game.
- Set variables that will accept input from the user to guess the number and give instructions/validation responses on each guess.
- Create a counter based on each session to count the number of attempts. I have set the limit to 4 attempts. Reset counter at start of each new session.
- Generate a random number from each session and store it in a variable.
- Capture and retrieve the user input on POST action of the form and store it in a variable.
- Check if the user input exists
- Validate whether the input is an integer from 1 to 10
- Match the random number and guess and output results as appropriate. If player guesses it right, the game is aborted and session is detroyed for a new game.
- Decrease the attempts counter by 1 on each successful match
- Set the counter so that if all the attempts are used the game is aborted and the session is destroyed for a new game
- Create and set an attempt variable to provide user with on screen statement on how many attempts they have left.

## Outside resources

- Getting form input value:
  https://stackoverflow.com/questions/22579616/send-value-of-submit-button-when-form-gets-posted
- How to create a counter:
  https://stackoverflow.com/questions/30232754/php-counter-using-session-variables

## Notes for instructor

- Susan, I have built two versions of this game. A simple version with no user input and a more complicated one with user input. Please check out both especially the complicated one (Yes! I somehow originally missed the specification about no user input)
- The project includes a custom css file for style
- Images of logo and background from external resource
