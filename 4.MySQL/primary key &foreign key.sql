create table customers(
cust_id int primary key auto_increment,
cust_name varchar(50) not null,
cust_email varchar(50) not null unique,
cust_phone varchar(50) not null unique
) auto_increment=100;

insert into customers(cust_name,cust_email,cust_phone)value('abc','abc@gmail.com','689789070'),('xyz','xyz@gmail.com','97098097907');
select * from customers;
select * from products;
create table products(
p_id int primary key auto_increment,
p_name varchar(100) not null,
p_desc varchar(200) not null,
p_price integer(50) not null

)auto_increment=201;

select * from students;
create table orders(
order_id int primary key auto_increment,
product_id int,
customer_id int,
quantity integer(50),
total integer(50),
foreign key (product_id) references products(p_id),
foreign key (customer_id) references customers(cust_id)
);
insert into orders(product_id,customer_id,quantity,total)values(201,101,1,10000);
select * from orders;

insert into products(p_name,p_desc,p_price)values('charger','best charger in world','10000');