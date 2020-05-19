/*create database bitdb;*/
use bitdb;
create table user (
username varchar(16) not null primary key,
passwd char(40) not null,
email varchar(100) not null
);
/*grant select, insert, update, delete
on bookmarks.*
to bm_user@localhost identified by ‘password’;*/