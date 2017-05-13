Welcome to the OnlineExamination wiki!
# OnlineExamination
This project works in WampServer!!!! 

## HOW TO RUN THIS PROJECT

1)copy the online_exam folder in C:\wamp64\www\

2)in the admin set the username=root and password=root this is what I have mentioned in my computer

3)In phpMyAdmin create new DataBase name "online_exam"

4)then just run the CREATION.php (it automatically created rest of the database!!!!) if you are running for the first time

5)later if you want to run then you can run "MAIN PAGE.php"

#how to run?

start the wamp server then select the wamp server icon formed in the taskbar when it is in green color

1)select localhost

2)type in URL http://localhost/online_exam/CREATION.php then enter

![](https://github.com/melwinmpk/OnlineExamination/blob/master/Screenshot/Screenshot%20(33).png?raw=true)

## To change the admin username and password to the system's username and password

`<?php
	 $host="localhost";
	 $dbuse="root";
	 $dbname="online_exam";
	 $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		// echo "$conn";
		 if(mysqli_connect_errno())
		 {die("connection Failed!".mysqli_connect_error());
		 }`

Set your username and password of your choice in `$dbuser` and `$pass` variables in all of the PHP files

