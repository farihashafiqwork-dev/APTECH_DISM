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
    
    SELECT Salary AS EMP_SALARY FROM salary;
-- Retrieve the minimum salary using the MIN function
SELECT max(Salary) AS max FROM salary;

-- Retrieve the minimum salary using the MIN function
SELECT MIN(Salary) AS MinSalary FROM salary;
SELECT count(Salary) AS roows FROM salary;

select name from personalinfo;
select ceil(Salary) from salary;
select replace(Name ,'a','p'), Name from personalinfo;
select length(Name), Name from personalinfo;
select char_length(Name), Name from personalinfo;
select atan( SALARY) from SALARY;
select asin( SALARY) from SALARY;
select ucase(Name) from personalinfo;
select log(Name) from personalinfo;
select ascii(Name) from personalinfo;
select reverse(Name) as name , Name from personalinfo;



SELECT LENGTH('Hello'); -- Returns 5
SELECT LENGTH('你好');   -- Returns 6 in UTF-8, because each Chinese character takes 3 bytes


SELECT CHAR_LENGTH('Hello'); -- Returns 5
SELECT CHAR_LENGTH('你好');   -- Returns 2
