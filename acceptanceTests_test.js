
Feature('AcceptanceTests');

Scenario('test something', (I) => {

// checks existing user login functionality and page navigation
    I.amOnPage('http://www.cryptococc.us/Meme_Forum/index.php'); 
    I.click('Login');
    I.fillField('enter username', 'Kevout');
    I.fillField('enter password', 'Kevout');
    I.click('Login');
    I.see('User: Kevout');
    
// checks that a user can post a comment/text
    I.click('Text post');
    I.fillField('what would you like to say', 'test post by kevout with clout');
    I.click('Submit');
    I.see('test post by kevout with clout');
    
// checks that a user can reply to a post (with sample id a22f8c0c)
    I.fillField('post ID', 'a22f8c0c');
    I.fillField('reply here', 'test reply by kevout');
    I.click('Submit');
    I.see('test reply by kevout');

    
// checks user logout button functionality
    I.amOnPage('http://www.cryptococc.us/Meme_Forum/index.php');
    I.click('Logout');
    I.see('User: ');

// checks new user cannot be created with existing username
    I.amOnPage('http://www.cryptococc.us/Meme_Forum/index.php'); 
    I.click('Login');
    I.fillField('enter new username', 'kevout');
    I.fillField('enter new password', 'kevout');
    I.click('NewAccount');
    I.see('Sorry, there is another user with that username.');
      

});
