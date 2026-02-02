CREATE TABLE orders (
    order_id INT PRIMARY KEY,
    customer_id INT,
    order_date DATE,
    amount DECIMAL(10, 2)
);
INSERT INTO orders (order_id, customer_id, order_date, amount) VALUES
(1, 101, '2024-08-01', 100.00),
(2, 102, '2024-08-01', 200.00),
(3, 101, '2024-08-02', 150.00),
(4, 103, '2024-08-02', 300.00),
(5, 102, '2024-08-03', 250.00);
select * from orders;
DROP table orders;
SELECT customer_id,sum(amount) as amount FROM orders
group by
customer_id
having amount>300;
select length(amount) from orders;
