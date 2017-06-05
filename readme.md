Prerequisites:
- Operational Web Server Environment with:
  - PHP
  - MySQL

Installing the system:
1. Place all php files on your server
2. Set up the database


Setting up the database assuming you have MySQL installed on the server:

1. In your system terminal enter "mysql_secure_installation"
2. First you will be asked to enter the current root password (by default there is none)
3. Enter "Y" for "Set root password?"
4. Enter your desired password, then again when prompted.
5. Follow the script's prompts, entering Y when prompted [Y/N].
6. (Optional) Here you can add any other extra security steps, ex changing root user id
7. "(sudo) mysql -u root -p"
8. Enter password you just set
9. "CREATE DATABASE < databaseName>;"
10. "USE < databaseName>"
11. "Create TABLE < tableName> (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email VARCHAR(50), hashedPassword VARCHAR(70), access TIMESTAMP, regIP VARCHAR(15), lastIP VARCHAR(15));"


Now that the database is set up change the < databaseName>,< tableName>,< password> info in the following files:

File: login.php | Lines: 7,11 

File: signup.php| Lines: 3,7,13

