
use faceatt;

create table employee(
username varchar(30) primary key,
userPassword varchar(30) unique key not null,
DOB date not null,
gender varchar(10) not null,
email varchar(50) not null,
dept varchar(30) not null
);

create table attendance(
username varchar(30) not null,
attDate date not null,
attTime time not null,
primary key (username,attDate),
foreign key(username) references employee(username)
);

insert into employee values("Navaneetha_411","navaneetha",'2002-05-12',"female","abc@gmail.com","cse");
insert into employee values("Ankitha_389","ankitha",'2003-10-10',"female","xyz@gmail.com","cse");
insert into employee values("Poonam_365","poonam",'2002-12-20',"female","pqr@gmail.com","cse");
insert into employee values("Sunil_423","sunil",'2002-04-25',"male","stu@gmail.com","cse");
insert into employee values("Tony preeth_369","tony",'2002-04-22',"male","def@gmail.com","cse");

select * from employee;
select * from attendance;
