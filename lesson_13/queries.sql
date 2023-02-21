1. -- Выбрать все телефоны которые есть в наличии, отсортировать по порядку алфавита
SELECT * FROM `products` WHERE count > 0 ORDER BY name;

2. -- Сгрупировать все телефоны по моделям
SELECT SUBSTRING_INDEX(name, " ", 2) as "model", COUNT("model") as count FROM `products` GROUP BY model ORDER BY model;

3. -- Вывести все телефоны с моделью iPhone дороже 2000 рублей
SELECT * FROM `products` WHERE manufacturer = "iPhone" AND price > 2000 ORDER BY count DESC;

4. -- Найти телефоны только линейки plus либо max
SELECT * FROM `products` WHERE name LIKE "%plus%" OR name LIKE "%max%" ORDER BY name;

5. -- Найти телефон в наличии и ценовом диапазане от 1000 до 2000 р
SELECT * FROM `products` WHERE count > 0 AND price BETWEEN 1000 AND 2000 ORDER BY price;

6. -- Найти все телефоны моделей Google, iPhone, Samsung
SELECT * FROM `products` WHERE manufacturer IN ("Google", "iPhone", "Samsung") ORDER BY name;

7. -- Сделать запрос который выведет среднюю цену всех телефонов и количество таких телефонов сгруппированнах по моделям (использовать alias)
SELECT SUBSTRING_INDEX(name, " ", 2) as "model", AVG(price) as "AVG price", COUNT("model") FROM `products` GROUP BY model ORDER BY model;

8. -- Сделать запрос который группирует телефоны по моделям, при этом сортирует это все по порядку алфавита
SELECT SUBSTRING_INDEX(name, " ", 2) as "model" FROM `products` GROUP BY model ORDER BY model;