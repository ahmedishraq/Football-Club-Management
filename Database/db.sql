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



insert into shop_staff (staff_id, name, email, salary, supervisor) values
('st01', 'David Beckham', 'beckhamdavid7@gmail.com', 7000, 'st04'),
('st02', 'John Wick', 'jhonwick10@gmail.com', 5000, 'st01'),
('st03', 'Jesse Lingard', 'jesseling@gmail.com', 4000, 'st08'),
('st04', 'Ravi Wing', 'winger.ravi@gmail.com', 10000, 'st04'),
('st05', 'Jason Roy', 'jason.hudson.roy@gmail.com', 4500, 'st01'),
('st06', 'Ben Stocks', 'benstocks2@gmail.com', 6000, 'st08'),
('st07', 'Ryan Hop', 'ryanhop11@gmail.com', 4700, 'st01'),
('st08', 'Rida Robin', 'robin.rida@gmail.com', 7000, 'st04'),
('st09', 'Piu Jane', 'piujane23@gmail.com', 6000, 'st01'),
('st10', 'Kate Hon', 'katehon2@gmail.com', 5000, 'st08'),
('st11', 'Jim Halpart', 'jimhal@gmail.com', 2500, 'st08');