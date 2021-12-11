drop database if exists p_reservation;
create database p_reservation;
use  p_reservation;


CREATE TABLE login(
customerID int (11) auto_increment primary key not null,
email varchar(60) UNIQUE NOT NULL,
passwordd varchar (50)
);

CREATE TABLE signup(
userID int auto_increment not null primary key,
s_username varchar (50) UNIQUE,
s_email varchar(60) UNIQUE NOT NULL,
contactt varchar(15) Unique not null,
s_passwordd varchar (50) UNIQUE,
age int
-- gender enum('Male', 'Female')
-- dob date,
);

CREATE TABLE reserv(
reservID int primary key,
fname varchar (50),      
lname varchar(50),
email varchar(60) not null,
guests int not null,
contact varchar(15) not null,
resv date,
resv_time time
);

CREATE TABLE subscribe(
email varchar(60) UNIQUE NOT NULL
);




