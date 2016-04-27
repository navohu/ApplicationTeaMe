Since our client didn’t require any specific server, we used our local server in the development process of the application. Instructions to deploy the application:

1. Install the server:
An Apache server is used in the development of this application and for the usage of the database. In order to run the server you can download a PHP environment, where in our case we used XAMPP. This link can be used to download and install XAMPP: 
Install XAMPP 
2. Create the database:
Activate MySQL Database server from ‘Manage Servers’ option in XAMPP. Connect to the localhost to check if the local server works.	Connect to the PhpMyAdmin by typing localhost/phpmyadmin in the browser. 
Create Database and tables with the same name as in the php files of the application.

3. Install Cordova:
For details about how to use Cordova, see this link: https://cordova.apache.org 

This example is for simulating the application on an iOS device. In order to simulate the app on e.g. an iOS simulator you need to have a the SDK Xcode on your mac. To install Cordova you need to install an npm package with this command in your terminal: 

npm install -g cordova 
				
Then you will have to navigate to application folder in order to build and simulate the app. Since all the packages are the iOS platform is already installed in the document folder, all you need to run in the terminal is the command:

cordova emulate ios --target="iPhone-5"
				
Here you can also choose which iPhone generation you want to run it on.