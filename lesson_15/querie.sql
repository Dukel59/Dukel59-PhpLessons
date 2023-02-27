SELECT o.id         AS "Order id",
       c.name       AS "Customer Name",
       c.phone      AS "Customer Phone",
       pt.name      AS "Pay Type",
       p.name       AS "Product Name",
       cat.name     AS "Category Name",
       s.address    AS "Store Address",
       s.work_hours AS "Store Work Hours",
       pp.price     AS "Price",
       curr.unit    AS "Currency"
FROM `orders` AS o
         JOIN `customers` AS c ON o.customer_id = c.id
         JOIN `pay_type` AS pt ON o.pay_type = pt.id
         JOIN `order product` AS op ON o.id = op.order_id
         JOIN `products` AS p ON op.product_id = p.id
         JOIN `categories` AS cat ON p.category_id = cat.id
         JOIN `product_prices` AS pp ON pp.product_id = p.id
         JOIN `stores` AS s ON s.id = pp.store_id
         JOIN `currencies` AS curr ON curr.id = pp.currency_id;