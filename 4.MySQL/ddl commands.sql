

CREATE TABLE STUDENTS (
    id INT,
    first_name VARCHAR(50),
    last_name VARCHAR(50)
);
drop table students;
ALTER TABLE students ADD PHONE VARCHAR(100);
ALTER TABLE students MODIFY email VARCHAR(150);
ALTER TABLE STUDENTS DROP COLUMN email;
alter TABLE students change phone contact varchar(150);
RENAME TABLE students TO talib_e_ilm;
ALTER TABLE talib_e_ilm ADD age INT;
insert into talib_e_ilm(id,first_name,last_name,contact)
values
(2,"nabia","naveed","8978935348"),
(3,"barerah","ahmed","89789578909"),
(4,"farukh","shabbir","89789597978"),
(5,"farooq","daniyal","89789573438");
select * from talib_e_ilm; 
select first_name,last_name from talib_e_ilm;
select * from talib_e_ilm where first_name="wania";
select * from talib_e_ilm where age not in(30,80,40);
update talib_e_ilm set age=80 where id=3;
delete from talib_e_ilm where first_name="farukh";
select * from talib_e_ilm where id  not between 1 AND 3 ; 
truncate table talib_e_ilm;
drop table talib_e_ilm;
