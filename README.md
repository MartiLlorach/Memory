# Memory

This game consists in finding pairs of cards. Each time you miss a pair of cards they turn back. The game ends when you find all the pairs.


To be able to play you need all the files from the main repository, if you are reading this I understand that you have them!

Once the files are obtained, you need to have PHP installed on our computer.

Install PHP Windows:

You will download XAMPP and install it (making sure to check apache and php). 

You can follow the instructions of the following link: https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/

once xampp is installed to run our web app you will need to:
	- Clear xampp/htdocs
	- Move this repositorys folder to xampp/htdocs
 	- run xampp, go to its control pannel and start Apache
 	- go to localhost on your browser of choice


Install PHP Linux:

sudo apt update
sudo apt upgrade
sudo apt-get install php

Click the link https://kinsta.com/blog/install-php/ if you have another version of linux and dont know how to install php.


Once the php is correctly installed in our operating system, we must start the php server in the main repository folder.

We will go to the game's containing folder from the terminal.
Once located in "Memory/" we will put the following command: php -S 0:8080.

This command will active our php. With the "-S" we indicate that we want to start a local web server, with the "0" we indicate that get the local ip address of our computer, and with the "8080" we mark the IP that we want it to have.


Once all the previous steps have been done, we only have one thing left to do.
Go to any web browser and type the following url: localhost:8080 and the main game window will open.

Have fun!:D
