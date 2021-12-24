create database football_club_anagement

use football_club_management

create table users
	(
		name varchar(30) not null,
		email_address varchar(40) not null,
		user_id varchar(20) not null,
		password varchar(30) not null,
		phone_number int(13) not null,
		region varchar(20) not null,
		date_of_birth int(8) not null 
		);

insert into users
	(
		"Ishraq Ahmed","ishraqahmedbd@gmail.com","ahmed_ishraq","1234",01534741641,"Dhaka","07-04-1999"
		);