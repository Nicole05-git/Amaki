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
);

CREATE TABLE reserv(
reservID int auto_increment primary key,
fname varchar (50),      
lname varchar(50),
email varchar(60) not null,
guests int not null,
contact varchar(15) not null,
resv_date date,
resv_time time
);

CREATE TABLE subscribe(
email varchar(60) UNIQUE NOT NULL
);

INSERT INTO reserv(fname, lname, email, guests, contact, resv_date, resv_time) VALUES('Ama','Koo','koo@gmail.com', '2', '0203402202','2021-12-12', '14:00:00');



