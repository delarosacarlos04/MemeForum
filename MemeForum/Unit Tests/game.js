//Creating Final Command Line Interface

const operations = require('./operations.js');

//Use the readline module
const readline = require('readline');

//Use readline to create command line interface
const rl = readline.createInterface({
   input: process.stdin,
    output: process.stdout
});

//First thing user will see when program is run
//Initial welcome screen with instruction for usage
console.log(`
game.js

Welcome to the Node.js Meme Trivia Game Tester! 
Version: 1.0.0.

Usage: The user will be prompted to select a type of question and answer.`
           );

//prompt user
rl.question(`

Please select the type of test:
[1] Validate String

Enter your choice: `, (choice) => {
    
    rl.question('Enter your answer: ', (answer) => {
        switch (choice) {
            case '1': 
                if (operations.validateString(answer) == true){
                    console.log(`Your input was valid`);
                }else{
                    console.log(`Your input was invalid.`);
                }
                break;
            
            
            default:
                console.log('Please restart the program and select a presented option.');
                break;
        }
   rl.close(); }
    
)
 })



//In Terminal type node filename.js to run