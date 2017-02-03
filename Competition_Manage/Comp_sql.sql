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
CREATE DATABASE COMPETITION DEFAULT CHARSET utf8 COLLATE utf8_unicode_ci;
USE COMPETITION ;
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
-- 表的结构 `ee_remark_info`
-- 

CREATE TABLE `ee_remark_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_ID_NEWS_INFO` INT(10) NOT NULL DEFAULT '0',
  `F_REMARK_NAME` VARCHAR(50) NOT NULL DEFAULT '',
  `F_REMARK_IP` INT(15) NOT NULL DEFAULT '0',
  `F_REMARK_CONTENT` TEXT NOT NULL,
  `F_REMARK_TIME` INT(11) NOT NULL DEFAULT '0',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM;

-- 
-- 导出表中的数据 `ee_remark_info`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ee_template_info`
-- 

CREATE TABLE `ee_template_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_ID_CLASS_INFO` INT(10) NOT NULL DEFAULT '0',
  `F_NEWS_CLASS` INT(10) NOT NULL DEFAULT '0',
  `F_TMP_WAY` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_TYPE` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_NAME` VARCHAR(255) NOT NULL DEFAULT '',
  `F_TMP_NEWS_COUNT` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_NEWS_ROW` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_CAP_LEN` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_CON_LEN` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_CON_COUNT` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_URL` VARCHAR(255) NOT NULL DEFAULT '',
  `F_TMP_RECOMMEND` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_HOT` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_IS_NEW` TINYINT(4) NOT NULL DEFAULT '0',
  `F_TMP_STATUS` TINYINT(2) NOT NULL DEFAULT '0',
  `F_TMP_NOTE` VARCHAR(255) NOT NULL DEFAULT '',
  `F_TMP_CODE` TEXT NOT NULL,
  `F_TMP_IS_BRANCH` TINYINT(4) NOT NULL DEFAULT '0',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM;

-- 
-- 导出表中的数据 `ee_template_info`
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
-- 表的结构 `em_class_info`
-- 

CREATE TABLE `em_class_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_PARENT_ID` VARCHAR(10) NOT NULL DEFAULT '',
  `F_CLASS_NAME` VARCHAR(30) NOT NULL DEFAULT '',
  `F_CLASS_NOTE` VARCHAR(255) NOT NULL DEFAULT '',
  `F_CLASS_URL_NAME` VARCHAR(100) NOT NULL DEFAULT '',
  `F_CLASS_PATH` VARCHAR(255) NOT NULL DEFAULT '',
  `F_CLASS_TEMPLATE_URL` VARCHAR(255) NOT NULL DEFAULT '',
  `F_CLASS_LIST_STYLE` VARCHAR(255) NOT NULL DEFAULT '',
  `F_CLASS_NEWS_COUNT` TINYINT(4) NOT NULL DEFAULT '0',
  `F_CLASS_NEWS_ROW` TINYINT(4) NOT NULL DEFAULT '0',
  `F_CLASS_SIGN_IMAGE` TINYINT(4) NOT NULL DEFAULT '0',
  `F_CLASS_CAP_LEN` TINYINT(4) NOT NULL DEFAULT '0',
  `F_CLASS_CON_LEN` TINYINT(4) NOT NULL DEFAULT '0',
  `F_CLASS_NEWS_TEMPLATE` VARCHAR(255) NOT NULL DEFAULT '',
  `F_CLASS_INDEX_NAME` VARCHAR(20) NOT NULL DEFAULT '',
  `F_CLASS_RSS_STYLE` VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM ;

-- 
-- 导出表中的数据 `em_class_info`
-- 


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

INSERT INTO `em_group_info` VALUES (1, '后台管理', '后台管理');

-- --------------------------------------------------------

-- 
-- 表的结构 `em_index_info`
-- 

CREATE TABLE `em_index_info` (
  `F_INDEX_NAME` VARCHAR(255) NOT NULL DEFAULT '',
  `F_INDEX_TEMPLATE_URL` VARCHAR(255) NOT NULL DEFAULT ''
) ENGINE=MYISAM;

-- 
-- 导出表中的数据 `em_index_info`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `em_link_info`
-- 

CREATE TABLE `em_link_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `F_LINK_NAME` VARCHAR(255) NOT NULL DEFAULT '',
  `F_LINK_URL` VARCHAR(255) NOT NULL DEFAULT '',
  `F_LINK_COLOR` VARCHAR(10) NOT NULL DEFAULT '',
  PRIMARY KEY  (`F_ID`)
) ENGINE=MYISAM ;

-- 
-- 导出表中的数据 `em_link_info`
-- 


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
-- 新闻信息 `news_info`
-- 
CREATE TABLE `news_info` (
  `F_ID` INT(10) NOT NULL AUTO_INCREMENT,
  `author` VARCHAR(265) NOT NULL DEFAULT '',
  `title` VARCHAR(265) NOT NULL DEFAULT '',
  `content` TEXT NOT NULL,
  `source` VARCHAR(265) NOT NULL ,
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
tempScore FLOAT(4,2) NOT NULL DEFAULT '00.00',
Score  FLOAT(3,1) NOT NULL DEFAULT '00.0',
Awards VARCHAR(30) NOT NULL DEFAULT '',
Allow_Upload VARCHAR(5) NOT NULL DEFAULT ''
)ENGINE=MYISAM ;



-- --------------------------------------------------------
INSERT INTO em_menu_info VALUES(1,0,'管理员管理','管理员管理','');
INSERT INTO em_menu_info VALUES(2,1,'新增管理员','新增管理员','Admin/AddAdmin.php?MenuId=2');
INSERT INTO em_menu_info VALUES(3,1,'管理员管理','管理员管理','Admin/AdminList.php?MenuId=3');
INSERT INTO em_menu_info VALUES(4,1,'组管理','组管理','Admin/GroupList.php?MenuId=4');
INSERT INTO em_menu_info VALUES(5,1,'修改密码','修改密码','Admin/EditPwd.php?MenuId=5');
INSERT INTO em_menu_info VALUES(6,0,'信息管理','信息管理','');
INSERT INTO em_menu_info VALUES(7,6,'添加新闻','添加新闻','News/NewsAdd.php?Type=0&MenuId=7');
INSERT INTO em_menu_info VALUES(8,6,'新闻列表','新闻列表','News/NewsList.php?Type=1&MenuId=8');

-- 
-- 导出表中的数据 `em_menu_info`
-- 

-- --------------------------------------------------------
