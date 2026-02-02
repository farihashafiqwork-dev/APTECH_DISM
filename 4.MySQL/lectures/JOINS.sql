select distinct firstname from employee;
select * from customer where custId='8';
 
 select * FROM SUPPLIER;
SELECT P.productName,P.unitPrice,s.companyName FROM product P inner join supplier S
ON p.supplierId = s.supplierId
where s.companyName='Supplier BWGYE';


SELECT product.productName,product.unitPrice,supplier.companyName,supplier.contactName 
from product 
inner join supplier 
on product.supplierId=supplier.supplierId;