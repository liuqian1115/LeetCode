编写一个 SQL 查询，获取 Employee 表中第二高的薪水（Salary） 。

+----+--------+
| Id | Salary |
+----+--------+
| 1  | 100    |
| 2  | 200    |
| 3  | 300    |
+----+--------+
例如上述 Employee 表，SQL查询应该返回 200 作为第二高的薪水。如果不存在第二高的薪水，那么查询应返回 null。

+---------------------+
| SecondHighestSalary |
+---------------------+
| 200                 |
+---------------------+

####################################

sql = "select max(Salary) as SecondHighestSalary from Employee where Salary < (select max(Salary) from Employee) order by Salary desc limit 1"
//使用offset偏移量  
//distinct SQL SELECT DISTINCT 语句在表中，可能会包含重复值。这并不成问题，不过，有时您也许希望仅仅列出不同（distinct）的值。关键词 DISTINCT 用于返回唯一不同的值。
sql = "select ( select distinct Salary as SecondHighestSalary  from Employee order by Salary desc limit 1 offset 1) as SecondHighestSalary"
