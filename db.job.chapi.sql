create database job_chapi;
use job_chapi;

create table users(
id int primary key auto_increment,
name varchar(100) not null,
lastname varchar(200) not null,
birthday date not null,
yeard int not null,
register datetime default current_timestamp,
tipe int not null
);

-- comentario

insert into users (name,lastname,birthday,yeard,tipe) values ('a','b','2000-01-20',20,1);
select * from users;