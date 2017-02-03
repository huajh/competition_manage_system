-- phpMyAdmin SQL Dump
-- version 2.6.0-pl3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2010年 11月 14 日 22:47
-- 服务器版本: 5.0.0
-- PHP 版本: 5.1.4
-- 
-- 数据库: `COMPETITION `
-- 

-- --------------------------------------------------------
CREATE DATABASE Competition_Data DEFAULT CHARSET utf8 COLLATE utf8_unicode_ci;
USE Competition_Data ;
-- 
-- 表的结构 `ee_menu_group`
-- 

CREATE TABLE `ee_menu_group` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_ID_GROUP_INFO` INT(10) NOT NULL DEFAULT '0',
  `F_ID_MENU_INFO` INT(10) NOT NULL DEFAULT '0',
  `F_PARENT_ID` INT(10) NOT NULL DEFAULT '0',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM;

INSERT INTO ee_menu_group VALUES(1,1,1,0);
INSERT INTO ee_menu_group VALUES(2,1,2,1);
INSERT INTO ee_menu_group VALUES(3,1,3,1);
INSERT INTO ee_menu_group VALUES(4,1,4,1);
INSERT INTO ee_menu_group VALUES(5,1,5,1);
INSERT INTO ee_menu_group VALUES(6,1,6,0);
INSERT INTO ee_menu_group VALUES(7,1,7,6);
INSERT INTO ee_menu_group VALUES(8,1,8,6);
INSERT INTO ee_menu_group VALUES(9,1,9,6);
INSERT INTO ee_menu_group VALUES(10,1,10,6);
INSERT INTO ee_menu_group VALUES(11,1,11,6);
INSERT INTO ee_menu_group VALUES(12,1,12,6);
INSERT INTO ee_menu_group VALUES(13,1,13,6);
INSERT INTO ee_menu_group VALUES(14,1,14,0);
INSERT INTO ee_menu_group VALUES(15,1,15,14);
INSERT INTO ee_menu_group VALUES(16,1,16,14);
INSERT INTO ee_menu_group VALUES(17,1,17,0);
INSERT INTO ee_menu_group VALUES(18,1,18,17);
INSERT INTO ee_menu_group VALUES(19,1,19,17);
INSERT INTO ee_menu_group VALUES(20,1,20,17);
-- 
-- 导出表中的数据 `ee_menu_group`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `em_admin_info`
-- 

CREATE TABLE `em_admin_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_USER_NAME` VARCHAR(16) NOT NULL DEFAULT '',
  `F_USER_PASSWORD` VARCHAR(32) NOT NULL DEFAULT '',
  `F_ID_GROUP_INFO` VARCHAR(10) NOT NULL DEFAULT '',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM ;

-- 
-- 导出表中的数据 `em_admin_info`
-- 

INSERT INTO `em_admin_info` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1');


-- --------------------------------------------------------

-- 
-- 表的结构 `em_group_info`
-- 

CREATE TABLE `em_group_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_GROUP_NAME` VARCHAR(20) NOT NULL DEFAULT '',
  `F_GROUP_DESCRIPTION` VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM ;

-- 
-- 导出表中的数据 `em_group_info`
-- 

INSERT INTO `em_group_info` VALUES (1, 'B_S_Management', 'back-stage management');


-- --------------------------------------------------------

-- 
-- 表的结构 `em_menu_info`
-- 

CREATE TABLE `em_menu_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_PARENT_ID` INT(10) NOT NULL DEFAULT '0',
  `F_MENU_NAME` VARCHAR(20) NOT NULL DEFAULT '',
  `F_MENU_DESCRIPTION` VARCHAR(255) NOT NULL DEFAULT '',
  `F_MENU_LINK` VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM ;
-- --------------------------------------------------------

-- 
-- 表的结构 `news_info`
-- 
CREATE TABLE `news_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `author` VARCHAR(255) NOT NULL DEFAULT '',
  `title` VARCHAR(255) NOT NULL DEFAULT '',
  `content` TEXT NOT NULL,
  `source` VARCHAR(255) NOT NULL ,
  `pubdate` TIMESTAMP NOT NULL ,
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM;
-- --------------------------------------------------------
-- 
-- 学生信息  `Competitor_info `
-- 

CREATE TABLE Competitor_info(
F_ID VARCHAR(20) NOT NULL,
user_Name VARCHAR(30) NOT NULL,
user_Password VARCHAR(32) NOT NULL,
Register_time TIMESTAMP NOT NULL,
user_sign VARCHAR(255) NOT NULL DEFAULT '',
Have_Hand_In VARCHAR(5) NOT NULL DEFAULT '',
Works_Name VARCHAR(50) NOT NULL DEFAULT '',
marked_Num INT NOT NULL DEFAULT '0',
tempScore INT NOT NULL DEFAULT '0',
Score  FLOAT(3,1) NOT NULL DEFAULT '00.0',
Awards VARCHAR(30) NOT NULL DEFAULT '',
Allow_Upload VARCHAR(5) NOT NULL DEFAULT ''
)ENGINE=MYISAM ;




-- --------------------------------------------------------
INSERT INTO em_menu_info VALUES(1,0,'System_Manage','System_Manage','');
INSERT INTO em_menu_info VALUES(2,1,'Add_Managers','Add Managers','Admin/AddAdmin.php?MenuId=2');
INSERT INTO em_menu_info VALUES(3,1,'Managers_List','List of Managers','Admin/AdminList.php?MenuId=3');
INSERT INTO em_menu_info VALUES(4,1,'Group_List','List of Group','Admin/GroupList.php?MenuId=4');
INSERT INTO em_menu_info VALUES(5,1,'Edit_Password','Edit Password','Admin/EditPwd.php?MenuId=5');
INSERT INTO em_menu_info VALUES(6,0,'Students_Manage','Students_Manage','');
INSERT INTO em_menu_info VALUES(7,6,'Competitor_List','List Of Competitor ','competitor/competitor_List.php?MenuId=7');
INSERT INTO em_menu_info VALUES(8,6,'Set_Awards','Set Awards','competitor/Set_Prize.php?MenuId=8');
INSERT INTO em_menu_info VALUES(9,6,'List_of_winners','List of Award-winning Students','competitor/Winners_List.php?MenuId=9');
INSERT INTO em_menu_info VALUES(10,6,'Other_Sets','Other sets','competitor/Other_Sets.php?MenuId=10');
INSERT INTO em_menu_info VALUES(14,0,'News_Manage','News Manage','');
INSERT INTO em_menu_info VALUES(15,14,'News_List','News List','News/NewsList.php?Type=1&MenuId=16');
INSERT INTO em_menu_info VALUES(16,14,'Add_News','Add News','News/NewsAdd.php?Type=0&MenuId=15');

-- 
-- 导出表中的数据 `em_menu_info`
-- 

-- --------------------------------------------------------
