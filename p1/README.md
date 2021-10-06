# Project 1

- By: Yasir Kamal
- URL: <http://e2p1.kamalzadeh.me>

## Game planning

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

Getting form input value:
https://stackoverflow.com/questions/22579616/send-value-of-submit-button-when-form-gets-posted
How to create a counter:
https://stackoverflow.com/questions/30232754/php-counter-using-session-variables

## Notes for instructor

The project includes a custom css file for style
Images of logo and background from external resource
Do not refresh the page using the browser refresh button. One thing I was not able to resolve was how to prevent accidental page refersh by user because it affected the counter since a page referesh meant that PHP script will run again as if a new form input was submitted and will decrease the counter by one every time. Yes, there is a prompt that appears when the user tries to refresh the page warning that the script will run again but I tried very hard to search for a resolution to stop it all together. I am assuming that would be something beyond the scope of what we have learned until now in this course.
