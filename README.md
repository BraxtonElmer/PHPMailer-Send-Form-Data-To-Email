# PHPMailer Send Form Data To Email
Here is the full code for sending a mail with the form data a user inputted in a webpage!<br>
This mail sends with the <a href="https://en.wikipedia.org/wiki/PHPMailer">PHPMailer Library</a>.<br>
Before starting to configure the settings and personalizing the form, read this whole file to understand how it works so there would not be any problems with the mailing.<br>
In order to send the form data to an email, first an email account must be created, the mail will be sent from this account to another reciepient.<br>
Here we are going to use Gmail as our sender account.<br>
### Step 1 - Create a Gmail Account 
You can create a Google account from <a href="https://accounts.google.com/signup?hl=en">here</a>.<br>
Make sure you save or remember the mail address and password as this is required to log and send the Form Date to the recieving mail address (Which is done by PHP).<br>
### Step 2 - Change Security Settings of Google Account
After an account is created successfully, go to the Google account settings of the Account you just created and go to the Security tab in the left side or you can <a href="https://myaccount.google.com/intro/security">click here to go there</a> (Make sure you are in the security settings of the account you just created).<br>
Make sure 2-Step Verification is Off and also turn off "Use your Phone to sign in" as depicted in this picture below &#8595;<br>
<hr><br>
<img src="https://i.imgur.com/OaQ3J28.jpg" alt="Image could not be shown because it was either deleted or not loaded properly">
<hr>
After that scroll down and turn on "Less secure app access" as depicted in the picture below &#8595;<hr>
<img src="https://i.imgur.com/EirB1CC.jpg" alt="Image could not be shown because it was either deleted or not loaded properly">
<hr><br>
We are doing this because the PHPMailer logs in to this gmail account, enters the form data and sends it to the reciepient mail address.<br>
Since this is done automatically and not manual, Google might block it from accessing the account, so Less secure app access must be turned on.<br>
But do not worry, as this mail address will not be visible to anyone who is sending the form.<br>
### Step 3 - Download the Repository
We are done completely with the creation and configuration of the Google account.<br>
You can download the repository from <a href="https://github.com/BraxtonElmer/PHPMailer-Send-Form-Data-To-Email/">this Github page</a>.
### Step 4 - Configure the PHP file (constant.php)
After downloading the repository, you can now start to configure the PHP to send the form data to your mail address.<br>
The Reciepient mail address and the Sender configuration info is stored in the <a href="https://github.com/BraxtonElmer/PHPMailer-Send-Form-Data-To-Email/blob/master/constant.php">constant.php file</a>, so you can change the info whenever required easily.<br>
Open the ```constant.php``` file in any of your editor and change the ```sender.of.form.data@gmail.com``` to the gmail account you created.<br>
```php
define('USERNAME',"sender.of.form.data@gmail.com"); // gmail address from which mail must be sent
```
<br>
The form data will be sent from the gmail account you created.<br>
After that enter the password of the account you created in the place of ```password-of-the-sender```.<br>
The password is required because the PHPMailer logs in to the account *and then* sends the form data to the reciepient mail address.<br>
```php
define('PASSWORD',"password-of-sender"); // password of gmail from which mail must be sent
```
<br>
You do not have to change the ```HOST``` since we are using gmail and already the ```ssl://smtp.gmail.com``` is filled.<br>
