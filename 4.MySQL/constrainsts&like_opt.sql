Create Table personalinfo(
	id int NOT NULL UNIQUE,
	Name varchar(50) NOT NULL,
	age INT NOT NULL CHECK(age>=18),
	gender VARCHAR(10) NOT NULL,
	phone VARCHAR(10) NOT NULL UNIQUE,
	city VARCHAR(10) NOT null DEFAULT 'Karachi'
);
insert into personalinfo(id,Name,age,gender,phone)value(5,"Ali",18,"male","0897867");
Insert into personalinfo(id,Name,age,gender,phone,city)
values(1,"Okasha",18,"Male","564667675","karachi"),
 (2,"Ashraf",30,"Male","345664","peshawar"),
   (3,"bareera",19,"Female","5645657","lahore"),
    (4,"Zarnab",20,"Female","6666478","islamabad");  
select * from personalinfo;   
select * from personalinfo where Name like 'o%';
select * from personalinfo where city like '%la%';
select * from personalinfo where gender like 'f%e';
select * from personalinfo where Name like '_ar%';
select * from personalinfo where Name Regexp '^a';
select * from personalinfo where city Regexp 'r$';
select * from personalinfo where age Regexp '[1]';
select * from personalinfo order by  age desc ;
select distinct city from personalinfo  ;
select * from personalinfo where Name is  null;
 select * from personalinfo where age limit 2,3;   
    
    
    
    
    
    
    
    
    
    
    