CREATE DATABASE job_chapi;
USE job_chapi;

CREATE TABLE users
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	lastname VARCHAR(200) NOT NULL,
	birthday DATE NOT NULL,
	email varchar(200) not null,
    yeard INT NOT NULL,
    register DATETIME DEFAULT CURRENT_TIMESTAMP,
	tipe INT NOT NULL
);

CREATE TABLE company
(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    activity VARCHAR(200) NOT NULL,
    descrip VARCHAR(200) NULL,
    id_user INT NOT NULL
);
ALTER TABLE company
ADD FOREIGN KEY (id_user) REFERENCES users(id);

CREATE TABLE jobs
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	descrip VARCHAR(200) NOT NULL,
	pago DOUBLE(6,2) NOT NULL,
	times INT NOT NULL,
	publication DATETIME DEFAULT CURRENT_TIMESTAMP,
	id_com INT NOT NULL
);
ALTER TABLE jobs
ADD FOREIGN KEY (id_com) REFERENCES company(id);

-- comentario

insert into users (name,lastname,birthday,email,yeard,tipe) values ('a','b','a@gmail.com','2000-01-20',20,1);
insert into company (name,activity,descrip,id_user) values ('a s.a.c','comida','venta de comida',1);
insert into jobs (name,descrip,pago,times,id_com) values ('vendedor','vender alimentos',150.5,1,1);

select * from users;
select * from company;
select * from jobs