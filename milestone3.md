As the previous link is not  working properly for us because of the version of the linux that we are using. So, we came with the different approach now, we are taking reference from this link. 

Reference: https://github.com/Einsteinish/docker-compose-flask-rest-api-service-container-and-apache-container.git 

The stuff that is divided between Tarsem and Rasan are:

Tarsem has created observatory folder which contains all the necessary information for the Dockerfile which contains all the commands a user could call on the command line to assemble an image. The file name "api.py" contains the python code, whihc Import framework from flask or flask_restful and also instantiate the app, Creating routes for the observatory and also running the application. This folder also contains 'requirement.txt' file in which all the requirements are written.

Aside from the observatory folder, He also created docker-compose.yml file whichcontain the information about the services like php, nginx, mysql and also the information about the number of prots that we are gonna use in each and every servce.

The role of Rasan is created a webpage for the access of our web server. All thefiles of his work are in the "website" folder. The file name a.php is heading page which show "Myobservatory" when you safely sign in to our page. He is also taking care of the password authentication to our page. All the password and username are created in form named 'index.php', which will send you a.php file when you safely login to the web server. Rasan is also taking care of the php and python, the two scripting languages that we have to use. Aside from the website folder, Rasan is also taking care of the milestones to keep the instructor updated about the progress of our project. 

Also the username is "user" and password is "password" for our project. 

The things that is still not completed is monitoring systems. We are using Zabbix in the project. We are completed with are necessary code work for the Zabbix but, it is still showing us some errors for our page so, this is the only thing that still not completed yet. And we will update our project Soon.  
