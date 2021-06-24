create table visitboard(
 u_idx int(7) auto_increment primary key,
 u_name varchar(20) not null,
 u_comment varchar(300),
 u_date datetime
)engine=innodb default charset=euckr;

select * from visitboard;
select max(u_idx),max(u_date) from visitboard;
select u_idx from visitboard;
select u_date from visitboard;
desc visitboard;
desc shop_product;
select p_date from shop_product;