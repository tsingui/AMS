[[
{"HelpID":"A","HelpType":"基础SQL","HelpGrammar":"SELECT","HelpExample":"SELECT * FROM `Amysql`.`AmysqlTable` ","HelpDescription":"[查询语句] 查询Amysql数据库的AmysqlTable数据表。","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"B","HelpType":"基础SQL","HelpGrammar":"UPDATE","HelpExample":"UPDATE `Amysql`.`AmysqlTable` SET `website` = 'Amysql.com' WHERE id = '1'","HelpDescription":"[更新操作] 更新AmysqlTable表中id为1记录的website字段值为Amysql.com。","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"C","HelpType":"基础SQL","HelpGrammar":"INSERT INTO","HelpExample":"INSERT INTO `Amysql`.`amysqltable`(`website`) VALUES('Google.com')","HelpDescription":"[新增操作] 新增字段website值为Google.com的一条记录","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"D","HelpType":"基础SQL","HelpGrammar":"DELETE FROM ","HelpExample":"DELETE FROM `AmysqlTable` WHERE id = '1'","HelpDescription":"[删除操作] 删除id字段值为1的记录","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"F","HelpType":"基础SQL","HelpGrammar":"CREATE DATABASE","HelpExample":"CREATE DATABASE `Amysql`","HelpDescription":"创建Amysql数据库","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"G","HelpType":"基础SQL","HelpGrammar":"CREATE TABLE","HelpExample":"CREATE TABLE `Amysql`.`AmysqlTable`(  `website` VARCHAR( 100 ) NOT NULL ) ENGINE = MyISAM","HelpDescription":"创建AmysqlTable数据表","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"H","HelpType":"基础SQL","HelpGrammar":"DROP TABLE","HelpExample":"DROP TABLE `AmysqlTable`","HelpDescription":"删除AmysqlTable数据表","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"I","HelpType":"基础SQL","HelpGrammar":"DROP DATABASE","HelpExample":"DROP DATABASE `Amysql`","HelpDescription":"删除Amysql数据库","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"-","HelpType":"","HelpGrammar":"","HelpExample":"","HelpDescription":"","HelpDate":""},


{"HelpID":"1","HelpType":"\u6570\u636e\u5e93\u76f8\u5173","HelpGrammar":"SHOW DATABASES","HelpExample":"SHOW DATABASES","HelpDescription":"\u663e\u793aMYSQL\u4e2d\u6240\u6709\u6570\u636e\u5e93\u7684\u540d\u79f0","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"2","HelpType":"\u6570\u636e\u5e93\u76f8\u5173","HelpGrammar":"SHOW CREATE DATABASE DATABASE_NAME","HelpExample":"SHOW CREATE DATABASE  `Amysql`","HelpDescription":"\u663e\u793aCREATE DATABASE \u521b\u5efa\u6307\u5b9a\u7684\u6570\u636e\u5e93SQL\u8bed\u53e5","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"-","HelpType":"","HelpGrammar":"","HelpExample":"","HelpDescription":"","HelpDate":""},

{"HelpID":"3","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"SHOW TABLES","HelpExample":"SHOW TABLES FROM `AmysqlTable`","HelpDescription":"\u663e\u793a\u6307\u5b9a\u6570\u636e\u5e93\u4e2d\u6240\u6709\u8868\u7684\u540d\u79f0","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"4","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"SHOW INDEX","HelpExample":"SHOW INDEX FROM `AmysqlTable`","HelpDescription":"\u663e\u793a\u8868\u7684\u7d22\u5f15","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"5","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"SHOW TABLE STATUS","HelpExample":"SHOW TABLE STATUS FROM `AmysqlTable`","HelpDescription":"\u663e\u793a\u5f53\u6570\u636e\u5e93\u4e2d\u7684\u6bcf\u4e2a\u8868\u7684\u4fe1\u606f\u3002","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"6","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"SHOW CREATE TABLE","HelpExample":"SHOW CREATE TABLE `AmysqlTable`","HelpDescription":"\u83b7\u53d6\u521b\u5efa\u8868\u7684SQL\u8bed\u53e5","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"7","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"PROCEDURE ANALYSE","HelpExample":"SELECT * FROM  `AmysqlTable` WHERE 1 PROCEDURE ANALYSE ()","HelpDescription":"\u5206\u6790\u8868\u4e2d\u7684\u6570\u636e","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"8","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"CHECK TABLE","HelpExample":"CHECK TABLE `AmysqlTable`","HelpDescription":"\u68c0\u67e5\u8868","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"9","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"ANALYZE TABLE","HelpExample":"ANALYZE TABLE `AmysqlTable`","HelpDescription":"\u5206\u6790\u8868","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"10","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"REPAIR TABLE","HelpExample":"REPAIR TABLE `AmysqlTable`","HelpDescription":"\u4fee\u590d\u8868","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"11","HelpType":"\u8868\u76f8\u5173","HelpGrammar":"OPTIMIZE TABLE","HelpExample":"OPTIMIZE TABLE `AmysqlTable`","HelpDescription":"\u4f18\u5316\u8868","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"-","HelpType":"","HelpGrammar":"","HelpExample":"","HelpDescription":"","HelpDate":""},


{"HelpID":"12","HelpType":"\u5b57\u6bb5\u76f8\u5173","HelpGrammar":"DESCRIBE","HelpExample":"DESCRIBE `AmysqlTable`","HelpDescription":"\u663e\u793a\u6240\u6709\u5b57\u6bb5","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"13","HelpType":"\u5b57\u6bb5\u76f8\u5173","HelpGrammar":"SHOW FULL FIELDS","HelpExample":"SHOW FULL FIELDS  FROM `AmysqlTable`","HelpDescription":"\u67e5\u770b\u8868\u7684\u5b57\u6bb5\u7ed3\u6784","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"-","HelpType":"","HelpGrammar":"","HelpExample":"","HelpDescription":"","HelpDate":""},


{"HelpID":"14","HelpType":"\u8d44\u6e90\u76f8\u5173","HelpGrammar":"SHOW STATUS","HelpExample":"SHOW STATUS","HelpDescription":"\u663e\u793a\u4e00\u4e9b\u7cfb\u7edf\u7279\u5b9a\u8d44\u6e90\u7684\u4fe1\u606f\uff0c\u4f8b\u5982\uff0c\u6b63\u5728\u8fd0\u884c\u7684\u7ebf\u7a0b\u6570\u91cf","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"15","HelpType":"\u8d44\u6e90\u76f8\u5173","HelpGrammar":"SHOW PROCESSLIST","HelpExample":"SHOW PROCESSLIST","HelpDescription":"\u663e\u793a\u7cfb\u7edf\u4e2d\u6b63\u5728\u8fd0\u884c\u7684\u6240\u6709\u8fdb\u7a0b","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"16","HelpType":"\u8d44\u6e90\u76f8\u5173","HelpGrammar":"SHOW INNODB STATUS","HelpExample":"SHOW INNODB STATUS","HelpDescription":"\u663e\u793aINNODB\u5b58\u50a8\u5f15\u64ce\u7684\u72b6\u6001","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"17","HelpType":"\u8d44\u6e90\u76f8\u5173","HelpGrammar":"EXPLAIN","HelpExample":"EXPLAIN SELECT * FROM `AmysqlTable`","HelpDescription":"\u5206\u6790SQL","HelpDate":"2012-05-01 11:20:00"},
{"HelpID":"-","HelpType":"","HelpGrammar":"","HelpExample":"","HelpDescription":"","HelpDate":""},


{"HelpID":"18","HelpType":"\u7cfb\u7edf\u76f8\u5173","HelpGrammar":"SHOW VARIABLES","HelpExample":"SHOW VARIABLES","HelpDescription":"\u663e\u793a\u7cfb\u7edf\u53d8\u91cf\u7684\u540d\u79f0\u548c\u503c","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"19","HelpType":"\u7cfb\u7edf\u76f8\u5173","HelpGrammar":"SHOW PRIVILEGES","HelpExample":"SHOW PRIVILEGES","HelpDescription":"\u663e\u793a\u670d\u52a1\u5668\u6240\u652f\u6301\u7684\u4e0d\u540c\u6743\u9650","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"20","HelpType":"\u7cfb\u7edf\u76f8\u5173","HelpGrammar":"SHOW LOGS","HelpExample":"SHOW LOGS","HelpDescription":"\u663e\u793aBDB\u5b58\u50a8\u5f15\u64ce\u7684\u65e5\u5fd7","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"21","HelpType":"\u7cfb\u7edf\u76f8\u5173","HelpGrammar":"SHOW WARNINGS","HelpExample":"SHOW WARNINGS","HelpDescription":"\u663e\u793a\u6700\u540e\u4e00\u4e2a\u6267\u884c\u7684\u8bed\u53e5\u6240\u4ea7\u751f\u7684\u9519\u8bef\u3001\u8b66\u544a\u548c\u901a\u77e5","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"22","HelpType":"\u7cfb\u7edf\u76f8\u5173","HelpGrammar":"SHOW ERRORS","HelpExample":"SHOW ERRORS","HelpDescription":"\u53ea\u663e\u793a\u6700\u540e\u4e00\u4e2a\u6267\u884c\u8bed\u53e5\u6240\u4ea7\u751f\u7684\u9519\u8bef","HelpDate":"2012-05-01 11:20:00"},{"HelpID":"23","HelpType":"\u7cfb\u7edf\u76f8\u5173","HelpGrammar":"SHOW GRANTS","HelpExample":"SHOW GRANTS FOR  'root'@localhost","HelpDescription":"\u663e\u793a\u4e00\u4e2a\u7528\u6237\u7684\u6743\u9650\uff0c\u663e\u793a\u7ed3\u679c\u7c7b\u4f3c\u4e8eGRANT \u547d\u4ee4","HelpDate":"2012-05-01 11:20:00"}],0.0003,31,[{"name":"HelpID","table":"help","def":"","max_length":2,"not_null":1,"primary_key":1,"multiple_key":0,"unique_key":0,"numeric":1,"blob":0,"type":"int","unsigned":0,"zerofill":0},{"name":"HelpType","table":"help","def":"","max_length":15,"not_null":1,"primary_key":0,"multiple_key":0,"unique_key":0,"numeric":0,"blob":0,"type":"string","unsigned":0,"zerofill":0},{"name":"HelpGrammar","table":"help","def":"","max_length":34,"not_null":1,"primary_key":0,"multiple_key":0,"unique_key":0,"numeric":0,"blob":0,"type":"string","unsigned":0,"zerofill":0},{"name":"HelpExample","table":"help","def":"","max_length":57,"not_null":1,"primary_key":0,"multiple_key":0,"unique_key":0,"numeric":0,"blob":0,"type":"string","unsigned":0,"zerofill":0},{"name":"HelpDescription","table":"help","def":"","max_length":78,"not_null":1,"primary_key":0,"multiple_key":0,"unique_key":0,"numeric":0,"blob":1,"type":"blob","unsigned":0,"zerofill":0},{"name":"HelpDate","table":"help","def":"","max_length":19,"not_null":1,"primary_key":0,"multiple_key":0,"unique_key":0,"numeric":0,"blob":0,"type":"datetime","unsigned":0,"zerofill":0}]]