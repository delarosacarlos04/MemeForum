# MemeForum
Our final project in this class.
Lets get that bread!

To run the Unit Tests, download and install Node.js using Terminal. Once completed, install Mocha by inputting the command line ‘npm install --save-dev mocha’. Then run the test.js file.
Here is a link for reference: 
https://www.taniarascia.com/unit-testing-in-javascript/

To run the Acceptance Tests, install CodeceptJS with the Puppeteer packages using the command line ‘npm install -g codeceptjs puppeteer’.  Then type ‘codeceptjs init’ and make sure that the helper ‘Puppeteer’ is enabled. Then type the file path/directory where codeceptjs and the acceptance tests are located and execute the command ‘run’. 
Here is a link for reference: 
https://codecept.io/quickstart/

How to use the site:
1. If you would like to make an account, skip to step 2. If you already have an account, skip to step 3. Otherwise, your default username is “anon”.

2. Make an account

    Type in your new username and password in the second form. If the username you chose is incorrect, it will refresh the page with a prompt telling you to choose a new username. If the username is not taken, you will be redirected to the main page. Check to make sure you are logged in by looking at the “User” blank at the top right of the screen.

3. Login using the button on the “Login” button left side of the main page.

    Fill out the first form with your username and password. Check to make sure you are logged in by looking at the “User” blank at the top right of the screen.

4. Functions

    To create a text post, click on the “text post” button. On the new page, write your test post in the box, then press submit. You will be redirected back to the main page and your post should appear at the top of the forum. If you want to cancel your post, select the “Go Back” button at the top left of the page.

    To post a photo, click on the “photo post” button. On the new page, click “Browse” to open your local files directory. Select the photo you’d like to upload. If the name of the file is correct on the upload page, press “submit”. You will be redirected back to the main page and your post should appear at the top of the forum. If you want to cancel your post, select the “Go Back” button at the top left of the page.
    
    To reply to a post, first copy the unique ID at the top of a post. It will be a hex value that is 8 characters. Paste this ID in the “post ID” text box. Type your reply in the “reply” box to the right of the ID box. Press submit below the text boxes.  The main page will refresh and your reply should be posted below the post you used the ID of.

5. If you are done visiting the site, make sure to log out using the “Logout” button at the top left of the screen.
