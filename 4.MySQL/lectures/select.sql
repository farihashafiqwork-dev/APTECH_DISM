Create Table personalinfo(
	id int NOT NULL UNIQUE,
	Name varchar(50) NOT NULL,
	age INT NOT NULL CHECK(age>=18),
	gender VARCHAR(10) NOT NULL,
	phone VARCHAR(10) NOT NULL UNIQUE,
	city VARCHAR(10) NOT null DEFAULT 'Karachi'
);
Insert into personalinfo(id,Name,age,gender,phone,city)
values(6,"Okasha",18,"Male","563436546675","lahore");
--  (1,"Ashraf",30,"Male","345664"),
--    (3,"bareera",19,"Female","5645657"),
--     (4,"Zarnab",20,"Female","6666478");  
  select name from personalinfo;
  SELECT * FROM personalinfo;
SELECT Name,phone FROM personalinfo;

select id,Name,age,gender from personalinfo;
Select id as StudentId, Name as StudentName, city as Destination from personalinfo;
Select * From personalinfo where city = "lahore";
select * from personalinfo where age >=18 AND age <=20 ; 
select * from personalinfo where age <= 18 or  gender= "Male" and city= "karachi";
select * from personalinfo where city="karachi" OR city="lahore";
Select * from personalinfo where (city="karachi" OR city="islamabad") And gender= "Male";
select * from personalinfo where age IN (19,18,28,30) ; 
select * from personalinfo where id IN (3,4,5) and city in('karachi'); 
select * from personalinfo where city IN ("Karachi","peshawar") ; 
select * from personalinfo where city Not IN ("Karachi","peshawar") ; 
select * from personalinfo where id Not between 1 AND 4; 
select * from personalinfo where id  between 1 AND 3 ;

select * from personalinfo where Name like 'O%';
select * from personalinfo where city like '%la%';
select * from personalinfo where gender like 'm%e';
select * from personalinfo where Name like '_ar%';
select * from personalinfo where Name Regexp '^a';
select * from personalinfo where city Regexp 'r$';
select * from personalinfo where age Regexp '[2]';
select * from personalinfo order by  age asc ;
select distinct city from personalinfo;
select * from personalinfo order by  age asc ;
select distinct city from personalinfo  ;




select * from personalinfo where age limit 1,2;




-- Create the table with a numeric data type for the Salary column
CREATE TABLE salary (
    id INT PRIMARY KEY,
    Salary DECIMAL(10, 2) -- Assuming a numeric type for salary, adjust precision and scale as needed
);
SELECT * FROM SALARY;
-- Insert values into the salary table
INSERT INTO salary (id, Salary) VALUES
    (1, 10000),
    (2, 20000),
    (3, 30000),
    (4, 40000),
    (5, 5000);
-- Retrieve the minimum salary using the MIN function
SELECT max(Salary) AS max FROM salary;

-- Retrieve the minimum salary using the MIN function
SELECT MIN(Salary) AS MinSalary FROM salary;
SELECT count(Salary) AS roows FROM salary;

UPDATE personalinfo
SET age=20 ,phone='03002533949'
where id=3;


select replace(Name ,'a','='), Name from personalinfo;