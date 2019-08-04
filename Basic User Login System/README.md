<h2>About</h2>
This is a simple demo code for a user login system. Hope you will easily understand :)
<h2>How To Run</h2>


Step 1: Open XAMPP, Start Apache and MySql

Step 2: Create Database Named "test" (This may already be exists)

Step 3: Run this MySql code to create Table

CREATE TABLE users(
    user_id int(10) not null AUTO_INCREMENT PRIMARY KEY,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);

Step 4: Run index.php via browser
