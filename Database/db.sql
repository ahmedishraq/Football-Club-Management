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

create table board
	(
		member_id varchar(20),
		name varchar(40),
		joining_date date
		);

create table shop_staff
	(
		staff_id varchar(10),
		name varchar(40),
		email varchar(50),
		salary varchar(20),
		supervisor varchar(15)
		);

insert into board (member_id, name, joining_date) values
('m01', 'Avram Gui', '2020-06-18'),
('m02', 'John Hooks ', '2019-04-13'),
('m03', 'Cliff Bata', '2019-04-20'),
('m04', 'Kevin Good', '2021-01-29'),
('m05', 'Richard Arnold ', '2020-03-06'),
('m06', 'Josh Hazel', '2021-05-11'),
('m07', 'Saby Raida', '2021-09-22');