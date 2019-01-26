给定一个 salary表，如下所示，有m=男性 和 f=女性的值 。交换所有的 f 和 m 值(例如，将所有 f 值更改为 m，反之亦然)。要求使用一个更新查询，并且没有中间临时表。

例如:

| id | name | sex | salary |
|----|------|-----|--------|
| 1  | A    | m   | 2500   |
| 2  | B    | f   | 1500   |
| 3  | C    | m   | 5500   |
| 4  | D    | f   | 500    |
运行你所编写的查询语句之后，将会得到以下表:

| id | name | sex | salary |
|----|------|-----|--------|
| 1  | A    | f   | 2500   |
| 2  | B    | m   | 1500   |
| 3  | C    | f   | 5500   |
| 4  | D    | m   | 500    |

##################################################

case用法： case a when cond1 then exp1 else cond2 then exp2 else exp3

当a满足条件cond1时， 返回exp1 当a满足条件cond2时， 返回exp2 否则 返回exp3

$sql ="UPDATE salary
SET
    sex = CASE sex
        WHEN 'm' THEN 'f'
        ELSE 'm'
    END;"

$sql ="update salary set sex = if(sex = 'm','f','m')"
