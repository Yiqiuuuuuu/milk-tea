#Database name: millkteadata
Table:   employees
emp_id
Primary key	emp_fn	emp_ln	emp_email	emp_pos	emp_salary	emp_tel	emp_pw	emp_points
1	Empfn1	Empln1	emp1@example.com	Emppos1	10000	514-111 1111	e111111	0
2	Empfn2	Empln2	emp2@example.com	Emppos2	20000	514-222 2222	e222222	0
3	Empfn3	Empln3	emp3@example.com	Emppos3	30000	514-333 3333	e333333	0
								
mysql> create table employees (
    -> emp_id int primary key auto_increment,
    -> emp_fn varchar(225),
    -> emp_ln varchar(225),
    -> emp_email varchar(225),
    -> emp_pos varchar(225),
    -> emp_salary int,
    -> emp_tel varchar(225),
    -> emp_pw varchar(225),
    -> emp_points int);

mysql> insert into employees (emp_fn,emp_ln,emp_email,emp_pos,emp_salary,emp_tel,emp_pw,emp_points)
    -> values ('Empfn1','Empln1','emp1@example@gmail.com','Emppos1',10000,'514-111 1111',md5('e111111'),0);
Query OK, 1 row affected (0.07 sec)

mysql> insert into employees (emp_fn,emp_ln,emp_email,emp_pos,emp_salary,emp_tel,emp_pw,emp_points)
    -> values ('Empfn2','Empln2','emp2@example@gmail.com','Emppos2',20000,'514-222 2222',md5('e222222'),0);
Query OK, 1 row affected (0.06 sec)

mysql> insert into employees (emp_fn,emp_ln,emp_email,emp_pos,emp_salary,emp_tel,emp_pw,emp_points)
    -> values ('Empfn3','Empln3','emp3@example@gmail.com','Emppos3',30000,'514-333 3333',md5('e333333'),0);
Query OK, 1 row affected (0.03 sec)

mysql> select * from employees;
+-----------+-------------+-----------+---------------------------------------+--------------+-----------------+--------------------+-----------------------------------------------------+----------------+
| emp_id | emp_fn | emp_ln | emp_email               | emp_pos | emp_salary | emp_tel      | emp_pw                        | emp_points |
+-----------+-------------+-----------+---------------------------------------+--------------+-----------------+---------------------+----------------------------------------------------+-----------------+
|      1 | Empfn1 | Empln1 | emp1@example@gmail.com | Emppos1 |     10000 | 514-111 1111 | 522a865ea9e985b2251dc8f5eb6f7211 |         0 |
|      2 | Empfn2 | Empln2 | emp2@example@gmail.com | Emppos2 |     20000 | 514-222 2222 | 723d3c90332065412a3f9b8e4670eabc |         0 |
|      3 | Empfn3 | Empln3 | emp3@example@gmail.com | Emppos3 |     30000 | 514-333 3333 | 03b171dcf0a9f7cabde1338ca342572b |         0 |
+------------+------------+-----------+----------------------------------------+--------------+-----------------+--------------------+-----------------------------------------------------+-----------------+













Table:   members
mem_id
Primary key	mem_fn	mem_ln	mem_email	mem_pw	mem_points
1	Memfn1	Memln1	mem1@example.com	m111111	0
2	Memfn2	Memln2	mem2@example.com	m222222	0
3	Memfn3	Memln3	mem3@example.com	m333333	0
					
mysql> create table members (
    -> mem_id int primary key auto_increment,
    -> mem_fn varchar(225),
    -> mem_ln varchar(225),
    -> mem_email varchar(225),
    -> mem_pw varchar(225),
    -> mem_points varchar(225));

mysql> insert into members (mem_fn,mem_ln,mem_email,mem_pw,mem_points)
    -> values ('Memfn1','Memln1','mem1@example.com',md5('m111111'),0);
Query OK, 1 row affected (0.05 sec)

mysql> insert into members (mem_fn,mem_ln,mem_email,mem_pw,mem_points)
    -> values ('Memfn2','Memln2','mem2@example.com',md5('m22222'),0);
Query OK, 1 row affected (0.28 sec)

mysql> insert into members (mem_fn,mem_ln,mem_email,mem_pw,mem_points)
    -> values ('Memfn3','Memln3','mem3@example.com',md5('m333333'),0);
Query OK, 1 row affected (0.17 sec)
mysql> select * from members;
+------------+-------------+------------+------------------------------+-------------------------------------------------------+------------------+
| mem_id | mem_fn | mem_ln | mem_email        | mem_pw                          | mem_points |
+------------+-------------+-------------+------------------------------+------------------------------------------------------+------------------+
|      1 | Memfn1 | Memln1 | mem1@example.com | 8ed4548c667bf26b19aa03895379305e | 0          |
|      2 | Memfn2 | Memln2 | mem2@example.com | 1bbe9c04c85f1bec3e8f4388732d5dd5 | 0          |
|      3 | Memfn3 | Memln3 | mem3@example.com | fb7b9bd62bdd5c7e935365015b2eda9e | 0          |
+------------+-------------+-------------+------------------------------+-------------------------------------
