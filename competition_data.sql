-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年11 月19 日16:25
-- 服务器版本: 5.1.51
--  PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库:`competition_data`
--

-- --------------------------------------------------------

--
-- 表的结构 `competitor_info`
--

CREATE TABLE IF NOT EXISTS `competitor_info` (
  `F_ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_Password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_sign` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Have_Hand_In` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Works_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `marked_Num` int(11) NOT NULL DEFAULT '0',
  `tempScore` int(11) NOT NULL DEFAULT '0',
  `Score` float(3,1) NOT NULL DEFAULT '0.0',
  `Awards` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Allow_Upload` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `competitor_info`
--

INSERT INTO `competitor_info` (`F_ID`, `user_Name`, `user_Password`, `Register_time`, `user_sign`, `Have_Hand_In`, `Works_Name`, `marked_Num`, `tempScore`, `Score`, `Awards`, `Allow_Upload`) VALUES
('200926630101', '小安', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', 'YES', '1290000053.rar', 10, 806, 80.6, 'second', ''),
('200926630102', '谦谦', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', 'YES', '1290000871.rar', 3, 209, 0.0, '', ''),
('200926630103', '阿超', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', '', '', 0, 0, 0.0, '', ''),
('200926630104', '阿仇', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', '', '', 0, 0, 0.0, '', ''),
('200926630105', '琪琪', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '我是琪琪啊啊啊啊啊！', 'YES', '1290000361.rar', 10, 725, 72.5, 'second', ''),
('200926630106', '小毕', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', 'YES', '1290061335.rar', 1, 54, 0.0, '', ''),
('200926630107', '佳话', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', 'YES', '1290000402.rar', 10, 721, 72.1, 'third', ''),
('200926630108', '杰杰', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', 'YES', '1290061353.rar', 1, 65, 0.0, '', ''),
('200926630109', '费费', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', 'YES', '1290061381.rar', 0, 0, 0.0, '', ''),
('200926630110', '小盆友', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '我是小盆友，我怕谁！ ', 'YES', '1290000071.rar', 10, 840, 84.0, 'first', ''),
('200926630112', 'huajh', '81dc9bdb52d04dc20036dbd8313ed055', '2010-11-19 23:10:57', '', 'YES', '1290000033.rar', 10, 908, 90.8, 'first', '');

-- --------------------------------------------------------

--
-- 表的结构 `ee_menu_group`
--

CREATE TABLE IF NOT EXISTS `ee_menu_group` (
  `F_ID` int(10) NOT NULL AUTO_INCREMENT,
  `F_ID_GROUP_INFO` int(10) NOT NULL DEFAULT '0',
  `F_ID_MENU_INFO` int(10) NOT NULL DEFAULT '0',
  `F_PARENT_ID` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`F_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- 导出表中的数据 `ee_menu_group`
--

INSERT INTO `ee_menu_group` (`F_ID`, `F_ID_GROUP_INFO`, `F_ID_MENU_INFO`, `F_PARENT_ID`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 0),
(7, 1, 7, 6),
(8, 1, 8, 6),
(9, 1, 9, 6),
(10, 1, 10, 6),
(11, 1, 11, 6),
(12, 1, 12, 6),
(13, 1, 13, 6),
(14, 1, 14, 0),
(15, 1, 15, 14),
(16, 1, 16, 14),
(17, 1, 17, 0),
(18, 1, 18, 17),
(19, 1, 19, 17),
(20, 1, 20, 17),
(40, 4, 15, 14),
(39, 4, 5, 1),
(38, 4, 10, 6),
(37, 4, 9, 6),
(36, 4, 7, 6),
(35, 4, 14, 0),
(34, 4, 1, 0),
(33, 4, 6, 0);

-- --------------------------------------------------------

--
-- 表的结构 `em_admin_info`
--

CREATE TABLE IF NOT EXISTS `em_admin_info` (
  `F_ID` int(10) NOT NULL AUTO_INCREMENT,
  `F_USER_NAME` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `F_USER_PASSWORD` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `F_ID_GROUP_INFO` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`F_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `em_admin_info`
--

INSERT INTO `em_admin_info` (`F_ID`, `F_USER_NAME`, `F_USER_PASSWORD`, `F_ID_GROUP_INFO`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'huajh', '81dc9bdb52d04dc20036dbd8313ed055', '1'),
(3, 'lala', '81dc9bdb52d04dc20036dbd8313ed055', '1'),
(6, 'laoshi', '81dc9bdb52d04dc20036dbd8313ed055', '4');

-- --------------------------------------------------------

--
-- 表的结构 `em_group_info`
--

CREATE TABLE IF NOT EXISTS `em_group_info` (
  `F_ID` int(10) NOT NULL AUTO_INCREMENT,
  `F_GROUP_NAME` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `F_GROUP_DESCRIPTION` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`F_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `em_group_info`
--

INSERT INTO `em_group_info` (`F_ID`, `F_GROUP_NAME`, `F_GROUP_DESCRIPTION`) VALUES
(1, 'B_S_Management', 'back-stage management'),
(4, '教师', '批阅上传的竞赛作品，可登陆站点主页和后台');

-- --------------------------------------------------------

--
-- 表的结构 `em_menu_info`
--

CREATE TABLE IF NOT EXISTS `em_menu_info` (
  `F_ID` int(10) NOT NULL AUTO_INCREMENT,
  `F_PARENT_ID` int(10) NOT NULL DEFAULT '0',
  `F_MENU_NAME` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `F_MENU_DESCRIPTION` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `F_MENU_LINK` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`F_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- 导出表中的数据 `em_menu_info`
--

INSERT INTO `em_menu_info` (`F_ID`, `F_PARENT_ID`, `F_MENU_NAME`, `F_MENU_DESCRIPTION`, `F_MENU_LINK`) VALUES
(7, 6, 'Competitor_List', 'List Of Competitor ', 'competitor/competitor_List.php?MenuId=7'),
(6, 0, 'Students_Manage', 'Students_Manage', ''),
(5, 1, 'Edit_Password', 'Edit Password', 'Admin/EditPwd.php?MenuId=5'),
(4, 1, 'Group_List', 'List of Group', 'Admin/GroupList.php?MenuId=4'),
(3, 1, 'Managers_List', 'List of Managers', 'Admin/AdminList.php?MenuId=3'),
(2, 1, 'Add_Managers', 'Add Managers', 'Admin/AddAdmin.php?MenuId=2'),
(1, 0, 'System_Manage', 'System_Manage', ''),
(8, 6, 'Set_Awards', 'Set Awards', 'competitor/Set_Prize.php?MenuId=8'),
(9, 6, 'List_of_winners', 'List of Award-winning Students', 'competitor/Winners_List.php?MenuId=9'),
(10, 6, 'Other_Sets', 'Other sets', 'competitor/Other_Sets.php?MenuId=10'),
(14, 0, 'News_Manage', 'News Manage', ''),
(15, 14, 'News_List', 'News List', 'News/NewsList.php?Type=1&MenuId=16'),
(16, 14, 'Add_News', 'Add News', 'News/NewsAdd.php?Type=0&MenuId=15');

-- --------------------------------------------------------

--
-- 表的结构 `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `F_ID` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(265) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(265) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(265) COLLATE utf8_unicode_ci NOT NULL,
  `pubdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`F_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `news_info`
--

INSERT INTO `news_info` (`F_ID`, `author`, `title`, `content`, `source`, `pubdate`) VALUES
(1, '理学院团委', '关于组织学生参加全国大学生物理实验竞赛的通知', '各学院：\r\n    根据《教育部财政部关于批准2010 年度大学生竞赛资助项目的通知》（教高函2010] 13 号），经研究，决定组织全国大学生物理实验竞赛活动。第一届全国大学生物理实验竞赛由中国科学技术大学物理实验教学中心承办。本届竞赛定于2010 年12 月25 日举行，竞赛采取现场命题方式进行。\r\n    为了选拔优秀的学生代表学校参加此次全国大学生物理实验竞赛，浙江工业大学理学院将组织开展选拔赛，并从中选拔优秀学生进行培训。现将选拔赛报名工作通知如下：\r\n   1.报名参与本次选拔赛的同学须对物理实验有兴趣，并一般符合以下条件之一：\r\n       ①大学物理考试成绩达到90分；\r\n     ②大学物理实验考试成绩为“优”；\r\n      ③2009年浙江省大学生物理创新竞赛（理论竞赛）获得一等奖；\r\n      ④2010年浙江省大学生物理创新竞赛（实践技能竞赛或科技创新竞赛）获三等奖及以上；\r\n      2.请有意于报名参与选拔赛的同学11月11日（周四）中午12：00之前将报名表（见附件）发送至zhoukai@zjut.edu.cn。\r\n      3.请报名参与本次选拔赛的同学于11月14日（周日）晚上6：15分到理B一楼大厅电子显示屏幕前等候参加本次选拔。\r\n\r\n     如有不明之处，可以咨询：周老师，85290311.\r\n\r\n                                       浙江工业大学理学院团委\r\n                                            2010/11/9\r\n	\r\n	\r\n	\r\n	附件：报名表		姓名： 学院：      专业年级：  \r\n手机： 物理考试成绩：      物理实验考试成绩：	\r\n大学物理成绩 	\r\n物理实验成绩 	\r\n物理竞赛理论竞赛成绩：	\r\n物理竞赛实践技能竞赛成绩： 	\r\n物理竞赛科技创新竞赛成绩：  \r\n', '浙江工业大学理学院团委 ', '2010-11-17 19:59:38'),
(2, '科创中心', '关于办公技能大赛动态网页详细通知', '关于办公技能大赛动态网页详细通知\r\n\r\n同学们：\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  现将办公技能大赛动态网页的具体内容公布如下：\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   主题:竞赛管理系统\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 要求:\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 网站的基本需求:\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1）竞赛信息发布和管理；2）权限设置；3）竞赛作品上传;4）竞赛作品在线评分；\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5）竞赛结果（得分）查询，竞赛统计分析，赛历史数据查询。r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;静态页面:\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  推荐使用div + css 布局，本次比赛注重于功能实现，美观比重20%。\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 服务端语言:\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jsp, php, asp   jsp, php, asp(推荐使用php与jsp) ，代码需要有详细的注释，代码比重50%。\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 数据库:\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;仅限MySql，需要导出.SQL文件，并要有良好的注释，数据库比重30% \r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 文档:\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;详细设计文档，与使用说明(部署文档)，说明里需要附上截图配合说明。\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;设计模式：\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;不做定性要求，但推荐使用MVC设计模式。\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  注意事项：\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 需求给出的仅仅是最基本的需求，参赛者可自行解读，支持创新，也可在完成基本需求上增加功能完善网站而扩大其应用范围。\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 需要上交的有:\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 网站源代码，导出的.SQL文件，设计文档，部署文档，设计文档，部署文档内注明作者姓名， 学号，年级。如果组队，要有队长名，队员1，队员2的信息。组队不可以超过3人，不可跨学院、跨年级，不可套用模板。\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;比赛形式开放式，无需报名，在11月20日前交出作品即为参赛。比赛期间选手可以查看任何资料，但作品必须独立完成。\r\n&nbsp;\r\n&nbsp;\r\n若有疑问请联系:孙同学516005，方老师587479。\r\n&nbsp;\r\n', '科创中心', '2010-11-17 20:00:25'),
(3, 'jzfdy ', '关于招收2011年赴美计算机实战冬令营成员通知 ', '一、       宣讲会时间：2010年11月16日中午12点\r\n二、       宣讲会地点：郁B111\r\n三、        宣讲会内容：培训项目介绍、本次冬令营安排、两位参与过的同学心得交流、赴美金融实战团队成果展示\r\n四、       项目简介：\r\n项目一：赴美计算机实战冬令营是由美国威廉·帕特森大学和浙江工业大学共同主办，为期三周。威廉·帕特森大学位于纽约市相邻的新泽西州。中美双方在连续成功举办了7次金融实战和1次生物环境夏令营的基础上，再次开发新的项目，主要目的是为了让中国大学生有机会深入了解和熟悉计算机科学的新理念、知识，培养实际操作能力，以便提高学员的理论水平及实战经验。 \r\n项目二：赴美国加州大学河滨分校课程项目是由美国加州大学河滨分校与浙江工业大学共同举办，为期三周。加州大学河滨分校位于加州硅谷地带，是美国著名的公立研究型大学。本次项目是以计算机专业课程学习、走进硅谷、游览美国著名城市为主要内容，旨在提高中国大学生的实战演练能力，感受国外的学习方式，为留学奠定基础。\r\n五、       冬令营安排：\r\n11、学习交流时间：为期三周，2011年2月7日至2月27日\r\2、费用：费用自理（约人民币25000元/人）\r\n      包含：①课程的学费和课程教材；②住宿费用：住美式二星或三星酒店\r\n          ③伙食费用；④行程中城市地面交通费用；⑤游乐场所的门票、小费  
    不含：①中美往返机票 ②护照、签证费用 ③其他个人开支。\r\n 学习交流安排：\r\n3、项目一：总体时间为21天，其中在威廉帕特森大学上课和在纽约地区实地考察16天，东海岸考察赴美国东海岸考察5天。前期13天安排50%的课堂讲座，50%的实地考察。具体行程请咨询85290715。\r\n     ①课堂讲座（6天）:\r\n    讲解计算机科学研究与应用的前沿内容，如：光缆设计研究——由Linda Kaufman博士主导。该项研究获得国家科学基金会的本科院校研究基金支持，研究课题为“解决光缆设计中对称带状系统和其他问题”；数字信号处理研究——由Bogong Su博士主导。\r\n     ②实地考察（6天）: \r\n实地考察包括参观实验室、访问软件公司、参观博物馆等。访问过程中将邀请相关专家对美国计算机体系进行深度的现场介绍，并展开有关计算机科学的学生辩论、信息技术领域创业公司的商业计划书竞赛以及社区服务活动等计算机相关的实践项目。\r\n   ③游学励志（8天）：\r\n代表团将访问哈佛大学、耶鲁大学、哥伦比亚大学、普林斯顿大学、宾夕法尼亚大学、麻省理工学院、约翰霍普金斯大学以及西点军校。同时，代表团还将参观游览包括华盛顿、费城、纽约、迈阿密、佛罗里达等在内的众多城市的名胜点。\r\n项目二：总体时间为17天，走进硅谷2天，专业课程学习4天，参观游览8天。\r\n①     走进硅谷（2天）：\r\n参访著名的加州大学伯克利分校和西海岸最优秀的综合性大学斯坦福大学。旧金山城市观光。走进硅谷，这个世界上最知名的高科技企业发源地，参观访问思科(CISCO)、惠普（HP)、英特尔（INTEL)、谷歌（GOOGLE)等公司。\r\n  ②课堂讲座（4天）: 内容主要有：通讯与网络技术基础，网络管理与安全，互联网技术与应用，网络协议，无线通讯工程、工程实践能力与信息科学等\r\n   ③参观游览（8天）：\r\n   代表团将参观游览好莱坞环球影城、侏罗纪公园、迪斯尼乐园、白宫、林肯纪念堂等名胜景点，还将访问哥伦比亚大学、西点军校、普林斯顿大学等著名的学府。\r\n六、       报名申请办法：\r\n1．  在网上下载 （E度空间学工通知）\r\n2．  11月20日前交到屏峰校区郁文楼B楼402办公室陈云峰老师处，或发邮件至jsjxyyxxm@163.com(来信请注明“计算机实战报名表”)。报名与项目咨询：陈云峰老师 85290715  13588495325（695325）\r\n3．  面试时间与地点另行通知。\r\n美方相关实验室介绍：\r\n 2010年11月15日\r\n美方相关实验室介绍：\r\nComputer Science Department at William Paterson University\r\nhttp://cs.wpunj.edu/\r\n \r\nComputer Science faculty\r\nhttp://cs.wpunj.edu/cs/faculty.html\r\n', '录脝脣茫禄煤脩搂鹿陇掳矛', '2010-11-17 20:02:54'),
(4, 'yxm', '关于举行浙江工业大学亚信联创杯程序设计竞赛的通知 ', '  为培养大学生的创新思维和利用计算机分析问题、解决实际问题能力，造就大学生的综合素质；促进学院之间、校区之间的交流，在全校范围提高计算机应用水平；丰富校园学术氛围，也为校ACM集训队选拔优秀学生，决定在2010年11月举办浙江工业大学“亚信联创杯”程序设计竞赛，事项通知如下：\r\n一、 参赛对象及报名      竞赛以组队形式进行，两人一队。凡在本校的本、专科生对计算机编程有浓厚兴趣的，都可前往各学院辅导员处报名参赛。参赛学院须填写“浙江工业大学亚信联创杯程序设计竞赛参赛回执”（见附件），填写完毕后于2010年11月15日（周一）16:00点前发送至zjutacm@163.com。\r\n二、竞赛的进程安排和比赛规则r\n      竞赛的进程安排和比赛规则请详见附件\r\n', '计算机学院 ', '2010-11-17 20:03:59'),
(5, 'jzfdy ', '关于2010年科技立项结题并参加校“运河杯”课外科技竞赛的通知 
  ', '各位同学：\r\n      根据学校的统一安排，现开始对2010年科技立项进行结题审查工作。请各位参与2010年科技立项的同学于11月25日之前完成项目结题工作（即参加第二十二届“运河杯”学生课外科技作品竞赛），所需材料上交学工办姚晓敏老师处（郁B403，电话85290122）。年初未进行科技立项但平时参与一定课外科研项目的同学，同样可以参加“运河杯” 学生课外科技作品竞赛。\r\n \r\n      所需材料如下：\r\n       一、书面稿部分（注意：所有书面稿需一式两份）\r\n      1、项目论文，或者是软件说明文档；\r\n     2、填写好《浙江工业大学第二十二届运河杯大学生课外科技作品竞赛申请表》（见附件）。填写该申请表时注意以下事项：推荐者情况一栏，要求是两位中级职称以上（含）的老师推荐，并且“签字”一栏必须是老师手写。\r\n      3、艺术设计类以外的作品如有已经发表在正式刊物上的文章或者符合发表格式的文章，请附录在后，评审时将作一定加分考虑。\r\n      露二、电子稿部分\r\n     1、以上书面稿部分内容的电子文档；\r\n     2、附件2“作品清单”的电子文档；\r\n     3、程序源代码和可执行代码。\r\n \r\n注意：电子稿请于11月25日之前上交书面稿，同时亲自将电子稿拷到姚晓敏老师处。\r\n \r\n                                                                                               计算机科学与技术学院学工办\r\n                                                                                                    2010年11月10日\r\n', ' 计算机科学与技术学院学工办', '2010-11-17 20:04:42'),
(6, 'jzfdy  ', '于第一届大学生嵌入式设计大赛的通知 ', '同学们：\r\n\r\n     城市，让生活更美好？NO！只有智慧的城市，才能让生活更美好。参加嵌入式大赛，做物联网工程师，你将让我们的城市因智慧而友好~  \r\n\r\n     这里有前所未有的丰厚奖励、这里可以帮你实现创业梦想、这里助你拥有美好职业前景、这里最关注大学生全面成长！
\r\n\r\n竞赛简介：\r\n     “第一届大学生嵌入式设计大赛”由汇文教育发起，并联合“嵌入式人才圈”知名企业及全国重点高校举办。旨在帮助大学生通过竞赛的形式，学以致用，并联合校企双方的力量，为大学生成才提供更多的支持和培养渠道。\r\n\r\n参赛对象：\r\n    全国高校在读理工科大学生（大三~研二），每支参赛队伍由3-5人组成\r\n\r\n竞赛内容：\r\n      物联网应用方向，限定范围：智慧城市，包括品质生活、节能减排、垃圾分类等；要求：考察创新和编程能力为主，对机电设计不做要求
\r\n\r\n奖项设置：\r\n     报名通过，每支参赛队伍即可获赠汇文HW-ARM9-2440EVB开发板；\r\n\r\n       每位参赛者另可获得价值1200-5000元教育消费券及指导书籍；
\r\n\r\n     现金大奖：一等奖 1万元；二等奖 5000元；三等奖 2000元；
\r\n\r\n       参赛团队全程获得企业资深工程师指点，以及汇文的‘全面成长’系列讲座课程；\r\n\r\n      优胜作品获得产品化或出售机会，人才圈合作单位提供商用化辅导及创业扶持优秀选手获得名企录用并重点培养的机会，或者保研加分（部分高校）。\r\n\r\n     专家团队：\r\n     由高校电子信息相关学院院长、企业CTO和资深产品经理、汇文特级教师组成，负责出题、指导、评奖。
\r\n\r\n报名方式：\r\n     采用在线报名方式，详见http://c.huiwen.com/，报名截止日期11月10日（网站上日程安排为11月1日截止），以本通知为准，如有疑问，请联系姚老师85290122。\r\n\r\n欢迎各位感兴趣的同学踊跃报名。\r\n\r\n                                                                                                       计算机学院学生工作办公室\r\n\r\n                                                                                                               2010年11月03日\r\n\r\n', '计算机学院学生工作办公室 ', '2010-11-17 20:05:51'),
(7, 'jzfdy ', '关于办公技能大赛比赛时间调整的通知', '各位同学：\r\n         综合考虑，本次办公技能大赛时间微调如下：\r\n \r\n       23号晚大一计算机理论考试时间调整\r\n         从18:30 – 20:00提早到18:00 – 7:30，地点不变。\r\n         地点任为健B111，健B112，广B201\r\n \r\n      24号photoshop时间调整\r\n       上午 第一批时间从8:10 – 9:40 调整为8:20 – 9:20\r\n       第二批时间从9:50 – 11:20 调整为9:30 – 10:30\r\n       下午 第一批时间从13:10 – 14:40 调整为13:30 – 14:30\r\n        第二批时间从14:50 – 16:20 调整为14:40 – 15:40\r\n       比赛时间由90分钟缩短到60分钟,地点不变。\r\n \r\n       24号word时间调整\r\n      24号word时间调整\r\n       第二批时间从19:40 – 21:00调整为18:00 – 19:30\r\n \r\n  脟请同学们相互转告，若有疑问请联系:孙同学516005 方老师587479\r\n \r\n', '计算机学院 科创中心', '2010-11-17 20:06:54'),
(8, 'jzfdy  ', '2010年浙江省大学生物理创新竞赛报名  ', '同学们：\r\n    为了激发我省大学生学习大学物理的积极性，提高运用大学物理知识解决实际问题的能力，培养大学生的创新思维与创新能力，推动相关高校的大学物理教学体系、教学内容和教学方法的改革，浙江省物理学会与浙江省高等学校物理学类及物理基础课程教学指导委员会(简称省物理教指委)研究决定举办“2010年浙江省大学生物理创新竞赛”。\r\n   浙江省大学生物理创新竞赛委员会将在全省设立11个竞赛分委员会。其中，杭州市小和山高教园区物理创新竞赛分委员会由浙江工业大学、浙江科技学院、浙江外国语学院三所高校组成。浙江工业大学考点办公室设在理学院学生工作办公室（理A201）。\r\n   根据浙江省大学生物理创新竞赛委员会安排，“浙江省大学生物理创新竞赛”分为理论竞赛与实践创新竞赛两轮。今年的理论竞赛时间定于2010年12月11日（周六）上午8：30至11：30举行（考试时间3小时），考试采用闭卷形式。竞赛考试大纲请参照国家教指委的“大学物理课程教学基本要求”（详细见附件），主要包括力学、振动和波、热学、电磁学、光学、狭义相对论基础、量子物理基础，其中重点为力学与电磁学，其它部分为选做题。\r\n   根据浙江省大学生物理创新竞赛委员会要求，学生自愿报名，报名参加理论竞赛的每个学生需交20元的报名费，用于省竞委会统一命题、试卷印刷、巡考员派遣、获奖证书及颁奖等费用，各市(地)竞委会主要用于报名、监考、阅卷等费用。\r\n   理论竞赛将根据各市(地)的学生参加理论竞赛的人数和竞赛成绩评出一、二、三等奖。其中，一、二、三等奖的人数分别占市(地)参赛人数的5％、15％、30％。获奖者将由省物理学会和省物理教指委统一颁发获奖荣誉证书。\r\n具体报名方式   1、请按照报名表填写，各班班长于11月8日前将报名表（包括电子稿）交至团总支处；\r\n    2、报名费20元/人，请各班在交报名表的同时（11月8日前）把报名费交至团总支处；\r\n    3、各团总支请将报名表及报名费交至方老师（联系方式：13868087479  587479）处，电子稿发至Anna_jin111@163.com.\r\n \r\n希望有意向的同学积极踊跃报名参加，积极准备。\r\n', '理学院', '2010-11-17 20:08:15'),
(9, 'yxm   ', '【竞赛通知】浙大-英特尔技术中心在线嵌入式开发知识竞赛', '全院学生   \r\n      为了给全省在校学生（包括大学生、研究生）提供更为广阔的嵌入式系统施展平台，英特尔公司和浙江大学嵌入式系统研究中心合作举办“浙大-英特尔技术中心在线嵌入式开发知识竞赛”，围绕嵌入式开发、凌动TM平台、MeeGoTM、英特尔凌动开发人员计划等领域展开。将于2010年10月底举办颁奖典礼。网址：http://test.smb.com.cn/intelOnline/index.html。\r\n竞赛奖品\r\n一等奖 上网本2人\r\n二等奖 品牌4G U盘50人\r\n幸运奖 精美纪念品100人\r\n英特尔“简历直通车”，赢得英特尔实习和就业机会；\r\n获得2011年英特尔嵌入式开发应用大赛参赛资格\r\n证书：英特尔颁发的参赛证书\r\n \r\n请有意向的同学登录上面网站进行参赛。有问题请跟姚老师联系，85290122\r\n', '计算机学工办 ', '2010-11-17 20:09:16');
