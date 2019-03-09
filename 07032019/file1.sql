-- % - включает любое кол-во символов включая ниодного
-- _ - заменяет строго 1 символ

SELECT `id`,`otdel`,`fio`, zp/2.14 as "Зарплата" 
FROM `Nikita`;
-- Выводит на экран таблицу "Никита" и переводит зарплату из рубли в доллары

SELECT SNUM as 'Номер продажи', SNAME as 'Имя продавца', CITY as 'Город', COMM as 'Коммиссия' FROM `salespeople`;
-- В итоге это переводит строки

SELECT * 
-FROM `salespeople` 
WHERE CITY = 'London' OR CITY = 'San Jose';
-- запрос поиска по лондону и Сан хосе

SELECT * 
FROM `salespeople` 
WHERE CITY = 'London' OR CITY = 'New York' OR CITY = 'Barcelona';
-- запрос поиска по лондону нью йорку и барселоне

SELECT * 
FROM `salespeople` 
WHERE CITY IN ("London","Barcelona","New York")
-- запрос поиска по Лондону барселоне и нью йорку

SELECT * 
FROM `salespeople` 
WHERE COMM >= .11 AND COMM <=.13;
-- поиск продавцов с коммисией от 0.11 до 0.13

SELECT * 
FROM `salespeople` 
WHERE COMM BETWEEN .11 AND .13;
-- поиск с коммисией от 0,11 до 0,13

SELECT * 
FROM `salespeople` 
WHERE COMM BETWEEN .11 AND .13 AND COMM NOT IN (.11,.13);
-- Поиск продавцов с коммисией не включая границы

SELECT * 
FROM `Customers` 
WHERE RATING BETWEEN 100 AND 250;
-- Поиск продавцов с коммисией от 100 до 250

SELECT DISTINCT CITY FROM `Customers`;
-- Перечисляет города без повторов

SELECT DISTINCT CITY, RATING FROM `Customers`;
-- Пречисляет города и рейтинг без повторов

SELECT DISTINCT RATING FROM `Customers`;
-- Перечисляет рейтинг без повторов

SELECT * FROM `Customers` WHERE CITY LIKE 'L%';
-- поиск городов начинающих с L

SELECT * FROM `Customers` WHERE CITY LIKE '%n%';
-- Поиск городов начинаюющих с n

SELECT * FROM `Customers` WHERE CHAME LIKE '_e%'
-- Поиск по букве e
 