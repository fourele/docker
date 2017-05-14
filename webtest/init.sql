create database if not exists `test`;
use test;
create table if not exists `test` (
	`a` varchar(80)
);
insert into `test` values('123');