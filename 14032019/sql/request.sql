-- % - любое количество символов включая ниодного (от 0 до беск)
-- _ - заменяет строго 1 символ




SELECT zp, fio 
FROM `vedomost`;-- запрос выводит всю таблицу

SELECT zp, fio 
FROM `vedomost` WHERE 1;-- запрос выбирает из таблицы `vedomost` столбцы zp and fio

SELECT * 
FROM `vedomost`
WHERE id<5;-- запрос выбирает из таблицы `vedomost` столбцы с id<5

SELECT * 
FROM `vedomost`
WHERE zp<10000;-- запрос выбирает из таблицы `vedomost` столбцы с zp<10000

SELECT * 
FROM `vedomost` 
WHERE zp<10000 AND otdel = 'Бухгалтерия'; -- запрос выбирает из таблицы `vedomost` столбцы с zp<10000 и otdel = 'Бухгалтерия'

SELECT * 
FROM `vedomost` 
WHERE zp>10000 AND otdel NOT 'Бухгалтерия'; -- запрос выбирает из таблицы `vedomost` столбцы с zp<10000 и otdel = 'Бухгалтерия'

SELECT * 
FROM `vedomost` 
WHERE zp > 1000 AND NOT otdel = 'Бухгалтерия'; -- запрос выбирает из таблицы `vedomost` столбцы с zp > 1000 и NOT otdel = 'Бухгалтерия'

SELECT 
id AS IDD, 
otdel AS OTDELL 
FROM vedomost; -- изменять название столбцов при выводе

SELECT id, otdel,fio, 
zp/2.14 AS 'zp$' 
FROM `vedomost`; -- выводит всю таблицу с zp/2.14 и переименуя в zp$

SELECT SNUM as 'Номер продажи', 
SNAME as 'Имя продовца', 
CITY as 'Город', 
COMM as 'Комиссия' FROM `salepeople`; -- переименовать все поля

SELECT * 
FROM `salepeople` 
WHERE CITY = 'London' OR CITY = 'San Jose'; -- запрос поиска по городам Лондон и Сан Хосе

SELECT * 
FROM `salepeople` 
WHERE CITY = 'London' OR CITY = 'New York' OR  CITY =  'Barcelona'; -- запрос поиска по городам London, NY, Barctlona

SELECT * 
FROM `salepeople` 
WHERE CITY IN ("London","Barcelona","New York"); -- запрос поиска по городам London, NY, Barctlona

SELECT * 
FROM `salepeople` 
WHERE COMM >= .11 AND COMM <=.13; -- поиск продовцов с комиссией от 0.11 до 0.13

SELECT * 
FROM `salepeople` 
WHERE COMM BETWEEN .11 AND .13; -- поиск продовцов с комиссией от 0.11 до 0.13

SELECT * 
FROM `salepeople` 
WHERE COMM BETWEEN .11 AND .13 
AND COMM NOT IN (.11,.13); -- поиск продовцов с комиссией от 0.11 до 0.13 не включая границы

SELECT * 
FROM `Customers` 
WHERE RATING BETWEEN 100 AND 250; -- поиск продовцов с комиссией от 0.11 до 0.13

SELECT DISTINCT CITY FROM `Customers`; -- Перечисляет города без повторов

SELECT DISTINCT CITY, RATING FROM `Customers`; -- Перечисляет города и рейтинг без повторов

SELECT DISTINCT RATING FROM `Customers`; -- Перечисляет рейтинг без повторов




-- % - любое количество символов включая ниодного (от 0 до беск)
-- _ - заменяет строго 1 символ

SELECT * FROM `Customers` WHERE CITY LIKE 'L%'; -- поиск городов, начинающихся с L

SELECT * FROM `Customers` WHERE CITY LIKE '%n%'; -- где есть n в названиях городов

SELECT * FROM `Salepeople` WHERE SNAME LIKE '_e%'; -- если в именах продовцов вторая буква e 




-- функции агрегирования (min, max, avg, count, sum)

SELECT min(AMT) FROM `Orders`; -- минимальное значение

SELECT max(AMT) FROM `Orders`; -- максимальное значение

SELECT avg(AMT) FROM `Orders`; -- среднее

SELECT count(AMT) FROM `Orders`; -- соличество элементов

SELECT count(*) FROM `Orders`; -- соличество всех полей

SELECT sum(AMT) FROM `Orders`; -- сумма поля




-- order by - упорядочить по

SELECT * FROM `Orders` order by AMT ASC; -- по возрастанию поля AMT

SELECT * FROM `Orders` order by AMT DESC; -- по убыванию поля AMT

SELECT * FROM `customers` ORDER BY CITY, RATING DESC; -- по возрастанию поля CITY, по убыванию по RATING

SELECT * FROM `salepeople` ORDER BY 2; -- по 2 полю

SELECT COMM, CITY, SNAME, SNUM FROM `salepeople` ORDER BY 3; -- вывести поля наоборот, отсортированно по 3 полю

SELECT COMM, CITY, SNAME, SNUM FROM `salepeople` ORDER BY 3 DESC, 1 ASC; -- вывести поля наоборот, отсортированно по 3 полю обратно и по 1 полю в прямом порядке

SELECT * FROM `customers` WHERE CNAME LIKE 'C%' AND RATING > 200; -- выбор имён, нач-ся с C и рэйтинг больше 200




-- 1203

SELECT * FROM `orders` WHERE AMT BETWEEN 100 AND 800; -- выбрать в `orders` AMT от 100 до 800

SELECT * FROM `orders` WHERE AMT >= 100 AND AMT <= 800; -- выбрать в `orders` AMT от 100 до 800

SELECT * FROM `customers` WHERE CITY LIKE 'S%'; -- города, начинающиеся с S..

SELECT * FROM `salepeople` WHERE CITY LIKE 'Lo%'; -- города, начинающиеся с Lo..

SELECT * FROM `orders` WHERE AMT BETWEEN 75.75 AND 1309.95 AND AMT NOT IN (75.75, 1309.95); -- выбрать AMT от 75.75 до 1309.95 не включая

SELECT CNAME FROM `orders` WHERE SNUM BETWEEN 2002 AND 2004 AND SNUM IN (2002, 2004); -- выбрать в `orders` SNUM от 2002 до 2004 включительно

SELECT CSUM FROM `orders` WHERE CSUM >= 1001 AND CSUM >= 1005 AND CSUM NOT IN (1001, 1005); -- выбрать в `orders` CSUM от 1001 до 1005 включительно

SELECT CNAME AS "Имя покупателя", CITY AS "Город" FROM `customers` WHERE RATING >= 300; -- вывести переименовав и отсортировав по рейтингу более 300

SELECT avg(RATING) FROM `customers` WHERE CITY = 'San Jose'; -- вывести средний рейтинг в 'San Jose'

SELECT sum(RATING) FROM `customers` WHERE CITY = 'San Jose'; -- вывести суммарный рейтинг в 'San Jose'




--  UPDATE

UPDATE `vedomost` SET zp = 500 WHERE otdel = 'Бухгалтерия'; -- поменять зарплату для отдела "Бухгалтерия" на zp = 500

UPDATE `vedomost` SET zp = 250 WHERE otdel = 'Производство'; -- поменять зарплату для отдела "Производство" на zp = 250

UPDATE `vedomost` SET zp = zp*1.2 WHERE otdel = 'Руководство'; -- увеличить zp на 20% для отдела "Производство"

UPDATE `vedomost` SET zp = 2000, otdel = 'Бухгалтерия' WHERE fio LIKE 'Иванов%'; -- Перевести Ивановых в Бухгалтерию и поменять зарплату на 2000

UPDATE `vedomost` SET zp = zp*0.8, otdel = 'Литейный цех' WHERE otdel = 'Бухгалтерия'; -- перевести всех бухгалтеров в литейный цех и уменьшить zp на 20%

UPDATE `vedomost`SET otdel = 'Производство', zp = 1500 WHERE fio LIKE 'Иванов Эфпаол Гавфыр'; -- добавить в Производство Иванова Эф.... и поставить zp = 1500

UPDATE `vedomost`SET otdel = 'Бухгалтерия', zp = 1500 WHERE fio LIKE 'Иванов%' AND otdel IS NULL; -- изменить zp и отдел для Иванова, у которого нет отдела




-- вставка 

INSERT INTO `vedomost`(fio, otdel) VALUES ('Иванов Эфпаол Гавфыр', 'Бухгалтерия'); -- добавить сотрудника с заданным fio в 'Бухгалтерию'

INSERT 
INTO `customers` 
VALUES 
('2001', 'Hoffman',  'London',   '100', '1001'),
('2002', 'Giovanni', 'London',   '300', '1007'),
('2003', 'Lui',      'Rome',     '200', '1003'),
('2004', 'Grass',    'San Jose', '200', '1002'),
('2006', 'Ciemens',  'Berlin',   '300', '1002'),
('2008', 'Cisneros', 'San Jose', '100', '1001'),
('2007', 'Pereira',  'Rome',     '300', '1007'); -- заполнить таблицу данными

INSERT 
INTO `orders` 
VALUES
(3001, '18.69',   '1990-03-10', 2008, 1007),
(3003, '767.19',  '1990-03-10', 2001, 1001),
(3002, '1900.10', '1990-03-10', 2007, 1004),
(3005, '5160.45', '1990-03-10', 2003, 1002),
(3006, '1098.16', '1990-03-10', 2008, 1007),
(3009, '1713.23', '1990-04-10', 2002, 1003),
(3007, '75.75',   '1990-04-10', 2004, 1002),
(3008, '4723.00', '1990-05-10', 2006, 1001),
(3010, '1309.95', '1990-06-10', 2004, 1002),
(3011, '9891.88', '1990-06-10', 2006, 1001); -- заполнить таблицу данными




-- удаление данных из таблицы

DELETE FROM `vedomost` WHERE fio LIKE 'Иванов%'; -- удалить из таблицы всех Ивановых

DELETE FROM `vedomost` WHERE id = 10; -- удвлить из таблицы по id

DROP TABLE `vedomost`; -- удалить всю базу




-- создание таблицы

CREATE TABLE vedomost2 (id int, fio varchar(50), otdel varchar(50)); -- создать таблицу с полями id, fio, otdel



































