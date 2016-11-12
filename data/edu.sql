/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : edu

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-11-11 16:31:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for edu_ask
-- ----------------------------
DROP TABLE IF EXISTS `edu_ask`;
CREATE TABLE `edu_ask` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '问题id号',
  `uid` int(10) NOT NULL COMMENT '提问会员id号',
  `vid` int(10) NOT NULL COMMENT '视频的id',
  `create_time` int(11) DEFAULT NULL COMMENT '提问时间',
  `title` varchar(100) NOT NULL COMMENT '问题的标题',
  `content` varchar(1000) NOT NULL COMMENT '提问内容',
  `clicknum` int(11) NOT NULL DEFAULT '0',
  `isbest` enum('1','0') NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '状态0隐藏1显示',
  `remind` enum('1','0') NOT NULL DEFAULT '0' COMMENT '提醒0不提示1提示',
  `delete_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_ask
-- ----------------------------
INSERT INTO `edu_ask` VALUES ('1', '104', '66', '1393434859', '什么是php', '张秀波是谁啊，有人认识他吗，认识的告诉我一声，', '62', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('2', '115', '66', '1393435733', '什么是html', '<p>张老师啊、、、</p><p><img alt=\"偷笑\" src=\"/lalala/Public/xheditor/xheditor_emot/default/titter.gif\" /></p><p>这个这个咋解决？？？？</p>', '5', '1', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('3', '116', '67', '1393436432', '什么是js', '<p>管贤，看问题如图~</p><p><img src=\"/lalala/Public/Uploads/editor/201402/530e2704d460d.jpg\" width=\"300\" alt=\"\" /></p><p>少羽多大了<br /></p>', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('4', '115', '65', '1393436602', '什么是java', '听说你叫管董？<img alt=\"生气\" src=\"/eschool/Public/xheditor/xheditor_emot/default/mad.gif\" />', '9', '1', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('5', '116', '66', '1393436694', '什么是=污染难题', '见我同桌了吗，他不理我了', '1', '0', '1', '1', null, null);
INSERT INTO `edu_ask` VALUES ('6', '104', '66', '1393436762', '写个标题', '<p>问题11111111</p><p>对啦 小萍萍回答哦<br /></p>', '70', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('23', '104', '66', null, '关于CSS样式问题', '> 在div和css中\r\n\r\n### 这个div总是.........', '1', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('21', '104', '66', null, '关于CSS样式问题', '> 在div和css中\r\n\r\n### 这个div总是.........', '39', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('22', '104', '66', null, '关于CSS样式问题', '> 在div和css中\r\n\r\n### 这个div总是.........', '1', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('24', '104', '71', null, 'dfdsfd', 'dfdsf', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('25', '104', '71', null, 'mmm', 'kjlklk', '3', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('26', '104', '6', null, '对标联合查询怎么查', '就是两个表之间相互关联', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('27', '104', '6', null, '对标联合查询怎么查', '就是两个表之间相互关联', '1', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('28', '104', '66', null, '如何学习php', 'public function detail($id)\r\n	{\r\n        //查询问题详情\r\n        $ask = new AskModel();\r\n        $clicknum = $ask->where(\'id\',$id)->setInc(\'clicknum\');//点击量加1\r\n        $result = $ask->where(\'id\',$id)->find();\r\n\r\n        $reply = new ReplyModel();\r\n        $count = $reply->where(\'qid\',$id)->count();//问题回复数\r\n        $list = $reply->where(\'qid\',$id)->order(\'id desc\')->paginate(3);\r\n        //dump($list);die;\r\n\r\n        $this->assign(\'count\',$count);\r\n        $this->assign(\'result\',$result);\r\n        $this->assign(\'list\',$list);\r\n\r\n       //查询问题的回复\r\n		return $this->fetch();\r\n	}', '22', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('29', '104', '71', null, '我要提问', '我的问题', '6', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('30', '104', '94', null, '提问', '你好', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('31', '104', '67', null, '不懂啊', '怎么办了', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('32', '104', '1', null, '你好', '你好', '1', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('33', '104', '1', null, '2', '2', '1', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('34', '104', '1', null, 'd ', 'd', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('35', '104', '21', null, 'e', 'd', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('36', '104', '21', null, 'e', 'd', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('37', '104', '32', null, 'ddd', 'dd', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('38', '104', '71', null, '?', '?', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('39', '104', '66', null, '提问', '回答', '0', '0', '1', '0', null, null);
INSERT INTO `edu_ask` VALUES ('40', '104', '71', null, 'termdjfi', 'dmgerjo ', '0', '0', '1', '0', null, null);

-- ----------------------------
-- Table structure for edu_cat
-- ----------------------------
DROP TABLE IF EXISTS `edu_cat`;
CREATE TABLE `edu_cat` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `pid` int(5) unsigned NOT NULL,
  `path` varchar(20) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '2' COMMENT '2显示1不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_cat
-- ----------------------------
INSERT INTO `edu_cat` VALUES ('1', '前端开发', '0', '0', '2');
INSERT INTO `edu_cat` VALUES ('2', '后端开发', '0', '0', '2');
INSERT INTO `edu_cat` VALUES ('3', '移动开发', '0', '0', '2');
INSERT INTO `edu_cat` VALUES ('4', '数据库', '0', '0', '2');
INSERT INTO `edu_cat` VALUES ('5', '云计算&大数据', '0', '0', '2');
INSERT INTO `edu_cat` VALUES ('6', '运维&测试', '0', '0', '2');
INSERT INTO `edu_cat` VALUES ('7', '视觉设计', '0', '0', '2');
INSERT INTO `edu_cat` VALUES ('8', 'HTML', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('9', 'CSS3', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('10', 'JavaScript', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('11', 'jQuery', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('12', 'Node.js', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('13', 'Vue.js', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('14', 'BootStarp', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('15', 'AngularJS', '1', '0,1', '2');
INSERT INTO `edu_cat` VALUES ('16', 'PHP', '2', '0,2', '2');
INSERT INTO `edu_cat` VALUES ('17', 'Java', '2', '0,2', '2');
INSERT INTO `edu_cat` VALUES ('18', 'C', '2', '0,2', '2');
INSERT INTO `edu_cat` VALUES ('19', 'C++', '2', '0,2', '2');
INSERT INTO `edu_cat` VALUES ('20', 'Go', '2', '0,2', '2');
INSERT INTO `edu_cat` VALUES ('21', 'C#', '2', '0,2', '2');
INSERT INTO `edu_cat` VALUES ('22', 'Android', '3', '0,3', '2');
INSERT INTO `edu_cat` VALUES ('23', 'IOS', '3', '0,3', '2');
INSERT INTO `edu_cat` VALUES ('24', 'Unity 3D', '3', '0,3', '2');
INSERT INTO `edu_cat` VALUES ('25', 'Cocos2d-x', '3', '0,3', '2');
INSERT INTO `edu_cat` VALUES ('26', 'WabApp', '3', '0,3', '2');
INSERT INTO `edu_cat` VALUES ('27', 'MySQL', '4', '0,4', '2');
INSERT INTO `edu_cat` VALUES ('28', 'MongDB', '4', '0,4', '2');
INSERT INTO `edu_cat` VALUES ('29', 'Oracle', '4', '0,4', '2');
INSERT INTO `edu_cat` VALUES ('30', 'SQL Server', '4', '0,4', '2');
INSERT INTO `edu_cat` VALUES ('31', 'NoSQl', '4', '0,4', '2');
INSERT INTO `edu_cat` VALUES ('32', 'DB2', '4', '0,4', '2');
INSERT INTO `edu_cat` VALUES ('33', '大数据', '5', '0,5', '2');
INSERT INTO `edu_cat` VALUES ('34', '云计算', '5', '0,5', '2');
INSERT INTO `edu_cat` VALUES ('35', 'Hadoop', '5', '0,5', '2');
INSERT INTO `edu_cat` VALUES ('36', '计算机网络', '6', '0,6', '2');
INSERT INTO `edu_cat` VALUES ('37', 'Linux', '6', '0,6', '2');
INSERT INTO `edu_cat` VALUES ('38', 'Shell', '6', '0,6', '2');
INSERT INTO `edu_cat` VALUES ('39', '测试', '6', '0,6', '2');
INSERT INTO `edu_cat` VALUES ('40', 'Photoshop', '7', '0,7', '2');
INSERT INTO `edu_cat` VALUES ('41', 'Maya', '7', '0,7', '2');
INSERT INTO `edu_cat` VALUES ('42', 'Premiere', '7', '0,7', '2');
INSERT INTO `edu_cat` VALUES ('43', 'ZBrush', '7', '0,7', '2');
INSERT INTO `edu_cat` VALUES ('44', 'chensenlin', '0', '0,', '1');
INSERT INTO `edu_cat` VALUES ('45', '什么？', '7', '0,7,', '1');
INSERT INTO `edu_cat` VALUES ('46', 'otamoa', '0', '0,', '2');

-- ----------------------------
-- Table structure for edu_clicknum
-- ----------------------------
DROP TABLE IF EXISTS `edu_clicknum`;
CREATE TABLE `edu_clicknum` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id号',
  `clicknum` int(11) NOT NULL DEFAULT '0' COMMENT '网站的访问量',
  `clicktime` int(11) NOT NULL DEFAULT '0' COMMENT '最后一次的访问时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_clicknum
-- ----------------------------
INSERT INTO `edu_clicknum` VALUES ('1', '822', '1477659038');

-- ----------------------------
-- Table structure for edu_course
-- ----------------------------
DROP TABLE IF EXISTS `edu_course`;
CREATE TABLE `edu_course` (
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zan` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1已点赞 0未赞',
  `collection` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1已收藏 0未收藏',
  `vid` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_course
-- ----------------------------
INSERT INTO `edu_course` VALUES ('104', '3', '1', '1', '67', '1478505865', '1478505865', null);
INSERT INTO `edu_course` VALUES ('104', '19', '1', '1', '68', '1478510224', '1478510224', null);
INSERT INTO `edu_course` VALUES ('104', '20', '1', '0', '65', '1478510398', '1478510398', null);
INSERT INTO `edu_course` VALUES ('104', '21', '1', '0', '128', '1478510539', '1478510539', null);
INSERT INTO `edu_course` VALUES ('104', '22', '1', '1', '97', '1478510627', '1478510627', null);
INSERT INTO `edu_course` VALUES ('104', '23', '1', '0', '98', '1478510729', '1478510729', null);
INSERT INTO `edu_course` VALUES ('104', '24', '1', '0', '79', '1478510928', '1478510928', null);
INSERT INTO `edu_course` VALUES ('104', '25', '0', '1', '107', '1478512528', '1478512528', null);
INSERT INTO `edu_course` VALUES ('104', '26', '1', '0', '66', '1478512721', '1478512721', null);
INSERT INTO `edu_course` VALUES ('104', '27', '1', '1', '89', '1478512867', '1478512867', null);
INSERT INTO `edu_course` VALUES ('115', '28', '1', '0', '65', '1478513370', '1478513370', null);
INSERT INTO `edu_course` VALUES ('115', '29', '0', '0', '127', '1478513737', '1478513737', null);
INSERT INTO `edu_course` VALUES ('115', '30', '0', '0', '68', '1478522906', '1478522906', null);
INSERT INTO `edu_course` VALUES ('115', '31', '0', '0', '66', '1478522911', '1478522911', null);
INSERT INTO `edu_course` VALUES ('104', '32', '1', '1', '136', '1478568906', '1478568906', null);
INSERT INTO `edu_course` VALUES ('104', '33', '1', '1', '70', '1478570900', '1478570900', null);
INSERT INTO `edu_course` VALUES ('104', '34', '1', '1', '113', '1478571635', '1478571635', null);
INSERT INTO `edu_course` VALUES ('104', '35', '0', '0', '77', '1478571992', '1478571992', null);
INSERT INTO `edu_course` VALUES ('104', '36', '0', '0', '84', '1478572053', '1478572053', null);
INSERT INTO `edu_course` VALUES ('104', '37', '0', '0', '88', '1478572441', '1478572441', null);
INSERT INTO `edu_course` VALUES ('104', '38', '0', '0', '81', '1478572496', '1478572496', null);
INSERT INTO `edu_course` VALUES ('104', '39', '0', '0', '83', '1478573036', '1478573036', null);
INSERT INTO `edu_course` VALUES ('104', '40', '1', '1', '69', '1478573924', '1478573924', null);
INSERT INTO `edu_course` VALUES ('104', '41', '0', '0', '141', '1478574362', '1478574362', null);
INSERT INTO `edu_course` VALUES ('104', '42', '0', '0', '104', '1478581959', '1478581959', null);
INSERT INTO `edu_course` VALUES ('104', '43', '0', '0', '137', '1478585716', '1478585716', null);
INSERT INTO `edu_course` VALUES ('104', '44', '1', '0', '142', '1478590270', '1478590270', null);
INSERT INTO `edu_course` VALUES ('104', '45', '0', '0', '80', '1478592493', '1478592493', null);
INSERT INTO `edu_course` VALUES ('104', '46', '0', '0', '181', '1478606343', '1478606343', null);
INSERT INTO `edu_course` VALUES ('104', '47', '0', '0', '167', '1478608970', '1478608970', null);
INSERT INTO `edu_course` VALUES ('104', '48', '0', '0', '78', '1478608983', '1478608983', null);
INSERT INTO `edu_course` VALUES ('104', '49', '0', '0', '71', '1478673095', '1478673095', null);
INSERT INTO `edu_course` VALUES ('104', '50', '0', '0', '182', '1478754912', '1478754912', null);
INSERT INTO `edu_course` VALUES ('118', '51', '0', '0', '15', '1478764349', '1478764349', null);
INSERT INTO `edu_course` VALUES ('118', '52', '0', '0', '26', '1478764364', '1478764364', null);
INSERT INTO `edu_course` VALUES ('118', '53', '0', '0', '66', '1478764368', '1478764368', null);
INSERT INTO `edu_course` VALUES ('118', '54', '0', '0', '67', '1478764401', '1478764401', null);
INSERT INTO `edu_course` VALUES ('118', '55', '0', '0', '85', '1478764605', '1478764605', null);
INSERT INTO `edu_course` VALUES ('118', '56', '0', '0', '65', '1478764626', '1478764626', null);
INSERT INTO `edu_course` VALUES ('118', '57', '0', '0', '32', '1478765301', '1478765301', null);
INSERT INTO `edu_course` VALUES ('104', '59', '1', '1', '126', '1478768176', '1478768176', null);
INSERT INTO `edu_course` VALUES ('104', '60', '0', '1', '135', '1478774941', '1478774941', null);
INSERT INTO `edu_course` VALUES ('104', '61', '0', '0', '93', '1478775304', '1478775304', null);
INSERT INTO `edu_course` VALUES ('104', '62', '1', '1', '94', '1478776284', '1478776284', null);
INSERT INTO `edu_course` VALUES ('104', '63', '0', '0', '184', '1478776680', '1478776680', null);
INSERT INTO `edu_course` VALUES ('104', '64', '0', '0', '183', '1478784157', '1478784157', null);
INSERT INTO `edu_course` VALUES ('104', '65', '1', '1', '82', '1478786236', '1478786236', null);
INSERT INTO `edu_course` VALUES ('104', '66', '0', '0', '90', '1478786822', '1478786822', null);
INSERT INTO `edu_course` VALUES ('104', '67', '0', '0', '114', '1478787463', '1478787463', null);
INSERT INTO `edu_course` VALUES ('104', '68', '0', '0', '115', '1478788627', '1478788627', null);
INSERT INTO `edu_course` VALUES ('104', '69', '0', '0', '161', '1478792016', '1478792016', null);
INSERT INTO `edu_course` VALUES ('104', '70', '0', '0', '69', '1478792231', '1478792231', null);
INSERT INTO `edu_course` VALUES ('104', '71', '0', '0', '185', '1478793484', '1478793484', null);
INSERT INTO `edu_course` VALUES ('104', '72', '1', '0', '186', '1478793606', '1478793606', null);
INSERT INTO `edu_course` VALUES ('104', '73', '0', '0', '187', '1478823700', '1478823700', null);
INSERT INTO `edu_course` VALUES ('104', '74', '0', '0', '188', '1478829858', '1478829858', null);
INSERT INTO `edu_course` VALUES ('104', '75', '1', '0', '73', '1478829991', '1478829991', null);
INSERT INTO `edu_course` VALUES ('104', '76', '0', '0', '95', '1478830541', '1478830541', null);
INSERT INTO `edu_course` VALUES ('104', '77', '0', '0', '99', '1478852180', '1478852180', null);

-- ----------------------------
-- Table structure for edu_flink
-- ----------------------------
DROP TABLE IF EXISTS `edu_flink`;
CREATE TABLE `edu_flink` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '链接编号',
  `webname` varchar(32) NOT NULL COMMENT '网站名称',
  `url` varchar(60) NOT NULL COMMENT '网站网址',
  `email` varchar(60) NOT NULL COMMENT '站长Email',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `descr` text NOT NULL COMMENT '网站描述',
  `status` tinyint(2) NOT NULL DEFAULT '2' COMMENT '在线状态',
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_flink
-- ----------------------------
INSERT INTO `edu_flink` VALUES ('1', 'Google', 'http://www.google.com', 'baidu@qq.com', '1392264115', '百度一下', '2', '1477980298', null);
INSERT INTO `edu_flink` VALUES ('8', '马珍', 'https://www.mazhen.com', 'mazhen@php.com', '1478609306', '马珍你好', '2', '1478609306', null);
INSERT INTO `edu_flink` VALUES ('2', 'PHP学院', 'http://www.phpxy.com', 'liwenkai@sina.com', '1477970735', '7天学会php', '2', '1477979299', null);
INSERT INTO `edu_flink` VALUES ('3', '你好我是森林', 'http://www.chensenlin.cn', '123@qq.com', '1477979334', '11', '2', '1477979334', null);

-- ----------------------------
-- Table structure for edu_info
-- ----------------------------
DROP TABLE IF EXISTS `edu_info`;
CREATE TABLE `edu_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '网站标题',
  `logo` varchar(100) NOT NULL COMMENT '网站logo',
  `domain` varchar(32) NOT NULL DEFAULT '' COMMENT '网站域名',
  `keywords` varchar(40) NOT NULL COMMENT '关键字',
  `descr` varchar(100) NOT NULL DEFAULT '' COMMENT '描述',
  `person` varchar(10) NOT NULL COMMENT '联系人',
  `phone` int(12) NOT NULL COMMENT '手机',
  `fax` int(22) NOT NULL DEFAULT '0' COMMENT '传真',
  `qq` int(22) NOT NULL DEFAULT '0' COMMENT 'QQ',
  `address` varchar(100) NOT NULL DEFAULT '0' COMMENT '地址',
  `footer` varchar(255) NOT NULL DEFAULT '0' COMMENT '底部信息',
  `number` varchar(100) NOT NULL DEFAULT '' COMMENT '备案号',
  `email` varchar(33) DEFAULT '' COMMENT 'Email',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_info
-- ----------------------------
INSERT INTO `edu_info` VALUES ('1', '蓝翔IT', '/uploads/20161108\\7a528089aac176c8d3fcb8f6b70d043a.jpg', 'lanxiangit.com', '在线教育', '一家专门专注于做好IT技能教育的线上学习平台，符合互联网发展潮流接地气儿的学习平台。', '蓝翔', '1212121212', '2321121', '953010203', '北京', '蓝翔教育', '渝ICP备16010775号-1', 'senlinqin@ourlook.com');

-- ----------------------------
-- Table structure for edu_note
-- ----------------------------
DROP TABLE IF EXISTS `edu_note`;
CREATE TABLE `edu_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `vid` int(11) NOT NULL COMMENT '视频ID',
  `title` varchar(100) NOT NULL COMMENT '笔记标题',
  `content` varchar(2000) NOT NULL COMMENT '笔记内容',
  `looknum` int(11) NOT NULL DEFAULT '0' COMMENT '浏览',
  `comment` int(11) NOT NULL DEFAULT '0' COMMENT '评论',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `good` tinyint(2) NOT NULL DEFAULT '0' COMMENT '推荐笔记1 推荐 0不推荐',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_note
-- ----------------------------
INSERT INTO `edu_note` VALUES ('1', '55', '63', '这是我的笔记', '不知道些什么笔记', '0', '0', '234566543', '1478571522', '1478571522', '0');
INSERT INTO `edu_note` VALUES ('2', '70', '40', '测试的表土', '你还我是', '0', '0', '34565432', '1478571522', '1478571522', '0');
INSERT INTO `edu_note` VALUES ('3', '71', '41', '哈哈哈哈', '微观环境和规范', '0', '0', '1234554322', '1478571522', '1478571522', '1');
INSERT INTO `edu_note` VALUES ('4', '104', '68', '鸟', '哈哈哈哈哈', '0', '0', '123456654', null, null, '1');
INSERT INTO `edu_note` VALUES ('5', '104', '67', 'fesfd', 'fdgfdgfdg', '0', '0', null, null, null, '1');
INSERT INTO `edu_note` VALUES ('6', '104', '67', 'niha', 'dd', '0', '0', '1478503070', '1478503070', null, '1');
INSERT INTO `edu_note` VALUES ('7', '104', '67', 'fesf', 'fd', '0', '0', '1478503118', '1478503118', null, '1');
INSERT INTO `edu_note` VALUES ('8', '104', '113', 'nihao ', '### senlin \r\n> sd ', '0', '0', '1478571658', '1478571658', null, '1');
INSERT INTO `edu_note` VALUES ('9', '104', '67', 'jjjj', '> ggggg\r\n## bbbb', '0', '0', '1478571921', '1478571921', null, '1');
INSERT INTO `edu_note` VALUES ('10', '104', '77', 'wede', 'resrf vrf的', '0', '0', '1478571999', '1478763008', null, '0');
INSERT INTO `edu_note` VALUES ('11', '104', '84', '1', '1', '0', '0', '1478572062', '1478572062', null, '0');
INSERT INTO `edu_note` VALUES ('12', '104', '84', 'jjdfsdxg', 'sdg', '0', '0', '1478572236', '1478572236', null, '0');
INSERT INTO `edu_note` VALUES ('13', '104', '88', 'desdfesfsd', 'fdsfdg', '0', '0', '1478572449', '1478572449', null, '0');
INSERT INTO `edu_note` VALUES ('14', '104', '83', 'dsf', 'fdf', '0', '0', '1478573043', '1478573043', null, '0');
INSERT INTO `edu_note` VALUES ('15', '104', '83', 'dsdsdssfsd', 'fdsfdsfdsfds', '0', '0', '1478573052', '1478573052', null, '0');
INSERT INTO `edu_note` VALUES ('16', '104', '94', '好好学习', '天天向下', '0', '0', '1478783200', '1478783200', null, '0');
INSERT INTO `edu_note` VALUES ('17', '104', '94', '你好', '笔记', '0', '0', '1478783213', '1478783213', null, '0');
INSERT INTO `edu_note` VALUES ('18', '104', '82', '笔记', '笔记', '0', '0', '1478786286', '1478786286', null, '0');
INSERT INTO `edu_note` VALUES ('19', '104', '67', '这是笔记', '好好学习', '0', '0', '1478791935', '1478791935', null, '0');
INSERT INTO `edu_note` VALUES ('20', '104', '65', '这是笔记', '这是笔记内容', '0', '0', '1478823965', '1478823965', null, '0');
INSERT INTO `edu_note` VALUES ('21', '104', '65', '笔记', '内容', '0', '0', '1478829960', '1478829960', null, '0');

-- ----------------------------
-- Table structure for edu_notice
-- ----------------------------
DROP TABLE IF EXISTS `edu_notice`;
CREATE TABLE `edu_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告编号',
  `title` varchar(32) NOT NULL COMMENT '公告标题',
  `content` text NOT NULL COMMENT '公告内容',
  `author` varchar(32) NOT NULL COMMENT '添加者',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '增加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_notice
-- ----------------------------
INSERT INTO `edu_notice` VALUES ('48', '双十一，学IT', '找蓝翔！找蓝翔！找蓝翔！找蓝翔！', 'admin', '1477991372', '1477991372', '1477989326');
INSERT INTO `edu_notice` VALUES ('42', '实力派PHP大神来了，更有图书免费送', 'www3432432', 'admin', '1477991372', '1477991372', '1477987275');
INSERT INTO `edu_notice` VALUES ('43', '实力派PHP大神来了，更有图书免费送', 'gfgf', 'admin', '1477991372', '1477991372', '1477987280');

-- ----------------------------
-- Table structure for edu_reply
-- ----------------------------
DROP TABLE IF EXISTS `edu_reply`;
CREATE TABLE `edu_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '问题回复id',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `vid` int(11) NOT NULL COMMENT '视频ID',
  `qid` int(11) NOT NULL COMMENT '问题ID',
  `content` varchar(500) NOT NULL COMMENT '回复的内容',
  `love` int(11) NOT NULL DEFAULT '0',
  `dislike` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) DEFAULT NULL COMMENT '回复时间',
  `delete_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_reply
-- ----------------------------
INSERT INTO `edu_reply` VALUES ('1', '104', '66', '1', '哈哈哈哈，这是给你的回复', '4', '2', '12346543', null, null);
INSERT INTO `edu_reply` VALUES ('2', '115', '66', '1', '这是给第一个问题的回复', '1', '0', '23454532', null, null);
INSERT INTO `edu_reply` VALUES ('3', '104', '66', '6', 'use \\think\\Loader;', '0', '0', null, null, null);
INSERT INTO `edu_reply` VALUES ('4', '104', '66', '6', 'use \\think\\Loader;', '0', '0', null, null, null);
INSERT INTO `edu_reply` VALUES ('5', '104', '66', '6', 'result', '0', '0', null, null, null);
INSERT INTO `edu_reply` VALUES ('6', '104', '66', '6', 'resultxfdryhgbc', '0', '0', null, null, '1478828086');
INSERT INTO `edu_reply` VALUES ('7', '104', '66', '6', '这是啥我的最新汇股份', '0', '0', null, null, null);
INSERT INTO `edu_reply` VALUES ('8', '104', '66', '6', '这个 问题太难了，我也解决不了， 要请教大神。', '3', '4', null, null, null);
INSERT INTO `edu_reply` VALUES ('9', '104', '66', '28', '多敲代码，多问问题', '3', '2', null, null, null);
INSERT INTO `edu_reply` VALUES ('10', '104', '65', '4', '给你一个回答', '4', '1', null, null, null);
INSERT INTO `edu_reply` VALUES ('11', '104', '71', '25', '写的是什么鬼东西', '0', '0', null, null, null);
INSERT INTO `edu_reply` VALUES ('12', '104', '71', '29', '有', '0', '0', null, null, null);
INSERT INTO `edu_reply` VALUES ('13', '104', '66', '1', '你好', '0', '1', null, null, null);
INSERT INTO `edu_reply` VALUES ('14', '104', '71', '29', 'huia', '1', '0', null, null, null);

-- ----------------------------
-- Table structure for edu_user
-- ----------------------------
DROP TABLE IF EXISTS `edu_user`;
CREATE TABLE `edu_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '用户Id',
  `username` varchar(20) DEFAULT NULL COMMENT '用户名',
  `password` varchar(50) DEFAULT NULL COMMENT '用户密码',
  `name` varchar(66) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(1) unsigned DEFAULT NULL COMMENT '性别',
  `age` int(3) DEFAULT NULL COMMENT '年龄',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `picture` varchar(50) DEFAULT '1.jpg' COMMENT '用户头像',
  `introduce` varchar(255) DEFAULT '一位php程序小菜鸟~' COMMENT '简介',
  `logintime` int(11) NOT NULL DEFAULT '0' COMMENT '记录用户当前登录的时间',
  `logouttime` int(11) NOT NULL DEFAULT '0' COMMENT '记录用户退出时的时间',
  `loginnum` int(11) NOT NULL DEFAULT '0' COMMENT '记录用户的登录次数',
  `admin` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否为管理员（1管理0普通）',
  `point` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `delete_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_user
-- ----------------------------
INSERT INTO `edu_user` VALUES ('115', 'mazhennihao', '976dad1eeb93b97ca58a02562db6c0f0', 'admin', '1', '12', 'lanxiang@lanxiang.com', '20161108\\36cc41dfb5b5acebc487232eaca1ab86.jpg', '一位php程序小菜鸟~', '1478513365', '0', '1', '0', '0', '0', '2016-11-07 18:08:54', '2016-11-07 18:09:25', null);
INSERT INTO `edu_user` VALUES ('116', 'chensenlin', 'd41d8cd98f00b204e9800998ecf8427e', '管理员', '0', '20', 'lanxiang@lanxiang.com', '20161108\\a8d27f957bee92fd1964a6b03c78ca54.jpg', '一位php程序小菜鸟~', '0', '0', '0', '0', '0', '0', '2016-11-10 14:54:39', null, null);
INSERT INTO `edu_user` VALUES ('104', 'admin', '21232f297a57a5a743894a0e4a801fc3', '管理员', '1', '20', 'lanxiang@lanxiang.com', '20161108\\61cfaf77f329d3ee6651026dfb5c54aa.png', '我是管理员你好', '1478852176', '0', '63', '1', '27', '0', '2016-11-10 14:54:39', '2016-11-11 16:16:16', null);
INSERT INTO `edu_user` VALUES ('117', 'lanxiang', '540b9f7829debd7e1bd4e56d65f74ea8', '蓝翔', '1', '100', 'lanxiang@lanxiang.com', '20161110\\d2dd92ef1d50243e4d39d1e421764641.jpg', '蓝翔', '1478765419', '0', '1', '0', '1', '1', '2016-11-10 14:54:39', '2016-11-10 16:10:19', null);
INSERT INTO `edu_user` VALUES ('118', 'baijiaming', 'e10adc3949ba59abbe56e057f20f883e', null, null, null, null, '1.jpg', '一位php程序小菜鸟~', '1478764814', '0', '2', '0', '0', '0', '2016-11-10 15:51:56', '2016-11-11 09:18:45', '2016-11-11 09:18:45');
INSERT INTO `edu_user` VALUES ('119', 'niuguanghua', '507a8277ede6d6de6df2fc19a0b27c94', null, null, null, null, '1.jpg', '一位php程序小菜鸟~', '1478785135', '0', '8', '0', '0', '0', '2016-11-10 21:25:44', '2016-11-10 21:38:55', null);
INSERT INTO `edu_user` VALUES ('120', 'lanxiang111', '540b9f7829debd7e1bd4e56d65f74ea8', 'lanxiang', '1', '1', 'lanxiang@qq.com', '20161111\\ef81b2a4a59d13cadee3fc0d31d748e9.jpg', '1', '0', '0', '0', '0', '1', '1', '2016-11-11 09:27:09', '2016-11-11 09:27:16', '2016-11-11 09:27:16');

-- ----------------------------
-- Table structure for edu_vcomment
-- ----------------------------
DROP TABLE IF EXISTS `edu_vcomment`;
CREATE TABLE `edu_vcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频评论ID',
  `vid` int(100) NOT NULL COMMENT '视频的ID',
  `uid` int(100) NOT NULL COMMENT '用户ID',
  `content` varchar(200) NOT NULL COMMENT '视频内容',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_vcomment
-- ----------------------------
INSERT INTO `edu_vcomment` VALUES ('8', '66', '104', 'ss', '1478489490', '1478489490', null);
INSERT INTO `edu_vcomment` VALUES ('9', '66', '104', 'fesfs ', '1478489516', '1478489516', null);
INSERT INTO `edu_vcomment` VALUES ('10', '127', '115', '你好', '1478513774', '1478513774', null);
INSERT INTO `edu_vcomment` VALUES ('11', '127', '115', '你好', '1478516648', '1478516648', null);
INSERT INTO `edu_vcomment` VALUES ('12', '127', '115', '你好', '1478516667', '1478516667', null);
INSERT INTO `edu_vcomment` VALUES ('13', '136', '104', 'l', '1478568930', '1478568930', null);
INSERT INTO `edu_vcomment` VALUES ('14', '70', '104', 'ni ', '1478570970', '1478570970', null);
INSERT INTO `edu_vcomment` VALUES ('15', '81', '104', 'kk', '1478572503', '1478572503', null);
INSERT INTO `edu_vcomment` VALUES ('16', '65', '104', '你好这是一个评论\r\n', '1478574386', '1478574386', null);
INSERT INTO `edu_vcomment` VALUES ('17', '65', '104', '你好', '1478574416', '1478575355', '1478575355');
INSERT INTO `edu_vcomment` VALUES ('18', '65', '104', '者一个fd', '1478574475', '1478828068', null);
INSERT INTO `edu_vcomment` VALUES ('19', '71', '104', '写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点写好一点写长一点', '1478759708', '1478759708', null);
INSERT INTO `edu_vcomment` VALUES ('20', '94', '104', '这个是个好东西', '1478783119', '1478783119', null);
INSERT INTO `edu_vcomment` VALUES ('21', '82', '104', '这个视频很好', '1478786270', '1478786270', null);
INSERT INTO `edu_vcomment` VALUES ('22', '67', '104', '好好学习', '1478791919', '1478791919', null);
INSERT INTO `edu_vcomment` VALUES ('23', '65', '104', '我要评论', '1478823926', '1478823926', null);
INSERT INTO `edu_vcomment` VALUES ('24', '65', '104', '评论', '1478829941', '1478829941', null);

-- ----------------------------
-- Table structure for edu_video
-- ----------------------------
DROP TABLE IF EXISTS `edu_video`;
CREATE TABLE `edu_video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '视频编号',
  `tid` int(11) NOT NULL COMMENT '视频类型ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `videoname` varchar(32) NOT NULL COMMENT '上传视频名',
  `descr` text NOT NULL COMMENT '上传视频的简单描述',
  `size` int(11) NOT NULL DEFAULT '0' COMMENT '上传视频的大小',
  `type` varchar(60) NOT NULL COMMENT '上传视频的类型',
  `create_time` int(11) NOT NULL COMMENT '发布视频的时间',
  `status` tinyint(2) NOT NULL DEFAULT '2' COMMENT '视频状态：是否显示（2显示1不显示）',
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `good` tinyint(2) NOT NULL DEFAULT '1' COMMENT '推荐课程1推荐0不推荐',
  `nice` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1是精品0不是精品',
  `picname` varchar(66) NOT NULL COMMENT '上传视频的图片名',
  `name` varchar(66) NOT NULL COMMENT '视频名称',
  `favonum` int(100) NOT NULL DEFAULT '0' COMMENT '视频赞数',
  `clicknum` int(111) DEFAULT '0' COMMENT '浏览数',
  `collnum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=189 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of edu_video
-- ----------------------------
INSERT INTO `edu_video` VALUES ('65', '8', '104', 'HTML基础', 'HTML基础，基础中的战斗机', '5492469', 'video/mp4', '1478398298', '2', '1478398298', null, '1', '0', '20161106\\b7d2cb2836f4879657cfd1993438c6b7.jpg', '20161106\\6202ebfb3ae9f47eca2b6c5202a32c72.mp4', '2', '55', '2');
INSERT INTO `edu_video` VALUES ('66', '9', '104', 'CSS3基础', '带你慢慢学习CSS3基础', '5492469', 'video/mp4', '1478398408', '2', '1478398408', null, '1', '0', '20161106\\53ed2bf503b8dd15e8d2fd21e4abd9bc.jpg', '20161106\\60d19c3e395a2a884440b4ec0a12416f.mp4', '1', '353', '2');
INSERT INTO `edu_video` VALUES ('67', '13', '104', 'Vue.js', '你不直达的Vue.js', '5492469', 'video/mp4', '1478398450', '2', '1478398450', null, '1', '0', '20161106\\53ed2bf503b8dd15e8d2fd21e4abd9bc.jpg', '20161106\\4da8f1683768c7d62c7aabf032c30e69.mp4', '0', '45', '5');
INSERT INTO `edu_video` VALUES ('68', '10', '104', 'JavaScript', 'Js', '5492469', 'video/mp4', '1478398497', '2', '1478398497', null, '1', '0', '20161106\\fd9f73b338f0593d65f546d2bbfc8b7f.jpg', '20161106\\e1fe4690e620bb7d1f9abe8c676a223c.mp4', '1', '23', '1');
INSERT INTO `edu_video` VALUES ('69', '11', '104', 'jQuery', 'jQuery基础', '5492469', 'video/mp4', '1478398542', '2', '1478398542', null, '1', '0', '20161106\\412f54bb9c7a9fe3983c2801b1dd7fd4.jpg', '20161106\\52a20e1b2bffa58ee685e263253f7ae1.mp4', '1', '19', '1');
INSERT INTO `edu_video` VALUES ('70', '12', '104', 'Node.js高级', '高级课程', '5492469', 'video/mp4', '1478398576', '2', '1478398576', null, '1', '1', '20161106\\fa1744627137730e7faa10a1c01fa60b.jpg', '20161106\\5430fb4fdd7e1bc17522b07382325b54.mp4', '1', '6', '1');
INSERT INTO `edu_video` VALUES ('71', '14', '104', 'Bootstrap', '必学前端框架', '5492469', 'video/mp4', '1478398611', '2', '1478398611', null, '1', '1', '20161106\\0877d0416853cc40b7723991b3943386.jpg', '20161106\\2c6a2a2bf8670055dbc890933a0a1d9c.mp4', '0', '10', '0');
INSERT INTO `edu_video` VALUES ('72', '9', '104', 'HTML+CSS', '示范课', '5492469', 'video/mp4', '1478398643', '2', '1478398643', null, '1', '1', '20161106\\cff7d7ba080b160ecbf552ca7bde5be1.jpg', '20161106\\e95f1593fcf4ee7178a5c130e50ffb08.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('73', '12', '104', '微信开发', '玩转微信开发', '5492469', 'video/mp4', '1478398671', '2', '1478398671', null, '1', '1', '20161106\\3fac39c6112adcdccd1d06e352439aa4.jpg', '20161106\\275256e83d47775076bfb6e29453ccf1.mp4', '1', '3', '0');
INSERT INTO `edu_video` VALUES ('74', '10', '104', '实战课', '用实战造就自己!', '5492469', 'video/mp4', '1478398704', '2', '1478398704', null, '1', '1', '20161106\\c1957e497aefe88e12cced8aa23bba18.jpg', '20161106\\8d1e1e771cbabf743968a8de87916420.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('75', '15', '104', '必学js框架', '必学js框架', '5492469', 'video/mp4', '1478398755', '2', '1478398755', null, '1', '1', '20161106\\2b197bf11a5015c786cbedce7226f549.jpg', '20161106\\0a7a3c23b9118f4bddd745720bdb8541.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('76', '9', '104', 'CSS3.3', '内测版那', '5492469', 'video/mp4', '1478398800', '2', '1478398800', null, '1', '1', '20161106\\c1957e497aefe88e12cced8aa23bba18.jpg', '20161106\\f6d8800ffba1757f7bab8323f9886a9f.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('77', '16', '104', 'PHP的高级课', 'PHP必须实战的课程', '5492469', 'video/mp4', '1478398836', '2', '1478398836', null, '1', '1', '20161106\\3f076b9ba0dc3d064d81d4f1aedee39c.jpg', '20161106\\1381095f759fffd8e4e5a012f4702af9.mp4', '0', '3', '0');
INSERT INTO `edu_video` VALUES ('78', '16', '104', 'PHP小白入门', '归属地', '5492469', 'video/mp4', '1478398876', '2', '1478398876', null, '1', '1', '20161106\\04bedafb4191899df7dcfd3c878d1078.jpg', '20161106\\626f2b1a8a58fa9f65c97a38e7f6700f.mp4', '0', '11', '0');
INSERT INTO `edu_video` VALUES ('79', '16', '104', '大话PHP的设计模式', '哈哈哈', '5492469', 'video/mp4', '1478398904', '2', '1478398904', null, '1', '1', '20161106\\bfe2b815237063bf80e6d7d02123c554.jpg', '20161106\\242f94c6e6a649e8af02e9723ca66866.mp4', '1', '5', '0');
INSERT INTO `edu_video` VALUES ('80', '17', '104', 'Java入门', '入门', '5492469', 'video/mp4', '1478398928', '2', '1478398928', null, '1', '1', '20161106\\7ee337466d9dfc51475c9b680c4190aa.png', '20161106\\fec0987668a2a11aaa39b0f784bea9dc.mp4', '0', '2', '0');
INSERT INTO `edu_video` VALUES ('81', '20', '104', 'Gogogogo', '学起来', '5492469', 'video/mp4', '1478398965', '2', '1478398965', null, '1', '1', '20161106\\4b4afa6a6e2fba677df665712e4592fc.jpg', '20161106\\18227b04c923419734ef8ad767047090.mp4', '0', '2', '0');
INSERT INTO `edu_video` VALUES ('82', '19', '104', 'C++', 'C++rumen', '5492469', 'video/mp4', '1478399111', '2', '1478399111', null, '1', '1', '20161106\\da2ac5cb672f8ef28c118e1563295ef4.jpg', '20161106\\5f74152901343ec76219867786a85bc6.mp4', '1', '7', '1');
INSERT INTO `edu_video` VALUES ('83', '21', '104', 'C#基础知识讲解', '必学', '5492469', 'video/mp4', '1478399137', '2', '1478399137', null, '1', '1', '20161106\\b06dd5ed627acb1731078b3ad6713fc1.jpg', '20161106\\62c7bab495392be9f690d8361fbe32c3.mp4', '0', '3', '0');
INSERT INTO `edu_video` VALUES ('84', '19', '104', '实战C++', '实战课来啦', '5492469', 'video/mp4', '1478399204', '2', '1478399204', null, '1', '1', '20161106\\59f64e8f497bda1d6da8a6f9e1feffbc.jpg', '20161106\\5658c326c187a4958ea8995643dad464.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('85', '17', '104', '大神带你飞', '飞起来', '5492469', 'video/mp4', '1478399225', '2', '1478399225', null, '1', '1', '20161106\\d9f397129b4f9977381fce6f03513070.jpg', '20161106\\6e644824a4d89aab7a0ccb94fbc71b64.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('86', '16', '104', 'PHP获取IP', '极客必备', '5492469', 'video/mp4', '1478399280', '2', '1478399280', null, '1', '1', '20161106\\dfc395394772a5b0ac448e99cfe8d376.jpg', '20161106\\131ec049548f4516c5762d912d26a627.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('87', '17', '104', '特级课', '不敢相信的福利', '5492469', 'video/mp4', '1478399307', '2', '1478399307', null, '1', '1', '20161106\\be0d8c73b1127d2d59b48b030143ca5e.jpg', '20161106\\69dc4c8e686d27842ce6f3ee93bae4cc.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('88', '16', '104', '归属地PHP', '必学啊', '5492469', 'video/mp4', '1478399335', '2', '1478399335', null, '1', '1', '20161106\\4f78376ddeed20594ca3ebfacbafadf4.jpg', '20161106\\91183571f3d29504b583e992cc3c6205.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('89', '22', '104', '安卓开发一', '初级', '5492469', 'video/mp4', '1478399369', '2', '1478399369', null, '1', '1', '20161106\\092aadf37494ad51963bc641d588d56a.jpg', '20161106\\38a8f1531c002bcc088921f94800dad5.mp4', '1', '5', '1');
INSERT INTO `edu_video` VALUES ('90', '22', '104', '安卓进阶二', '第二部', '5492469', 'video/mp4', '1478399393', '2', '1478399393', null, '1', '1', '20161106\\72a1ba63aa8e448c504a6c5ebe0b7fd9.jpg', '20161106\\64370242c3dbdfc8d3be1efd55b7e2ef.mp4', '0', '3', '0');
INSERT INTO `edu_video` VALUES ('91', '22', '104', '安卓三', '安卓3了0 ', '5492469', 'video/mp4', '1478399415', '2', '1478399415', null, '1', '1', '20161106\\af10d955bbc774f23486ab9de2054428.jpg', '20161106\\f054d5dec2a630daa699c0744fcfcb45.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('92', '23', '104', 'IOS小白必学', 'ios', '5492469', 'video/mp4', '1478399432', '2', '1478399432', null, '1', '1', '20161106\\f24d7c87965daaf1482bdd033dfc64c2.jpg', '20161106\\dc00e85b05a894be0b843d82bc5880b1.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('93', '23', '104', 'ios大神必看', 'IOS高级课', '5492469', 'video/mp4', '1478399469', '2', '1478399469', null, '1', '1', '20161106\\6549a43bd99185431ab0aedf12cf76be.jpg', '20161106\\6a8163e2dbe91b1067959bb6c0608b53.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('94', '25', '104', 'Cocos2d-x', '游戏教程', '5492469', 'video/mp4', '1478399511', '2', '1478399511', null, '1', '1', '20161106\\b00b355ff74f8d7a3ff7c63c59aec37e.jpg', '20161106\\bdfe6be6bb668e0d72ba7e6a07ce9faa.mp4', '1', '11', '1');
INSERT INTO `edu_video` VALUES ('95', '22', '104', '开发视频', '必学Get', '5492469', 'video/mp4', '1478399528', '2', '1478399528', null, '1', '1', '20161106\\7ed965c239344f0b99e07846cde6a92b.jpg', '20161106\\edc497bfef5c31f531ebaf9c44adc883.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('96', '26', '104', '大神迈进', 'Wab也能App', '5492469', 'video/mp4', '1478399561', '2', '1478399561', null, '1', '1', '20161106\\963ba6385d97f08192efe348c0dfb7c2.jpg', '20161106\\6a3ba5a355f6209f26745b719d269fba.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('97', '26', '104', '大神教程', 'WabaPP价赔偿', '5492469', 'video/mp4', '1478399588', '2', '1478399588', null, '1', '1', '20161106\\78222af3505a9c49c881ab41fd146108.jpg', '20161106\\70da702a765c5418fb3d8816b21b11ee.mp4', '1', '7', '1');
INSERT INTO `edu_video` VALUES ('98', '25', '104', '大神必备', '都', '5492469', 'video/mp4', '1478399628', '2', '1478399628', null, '1', '1', '20161106\\eac2014de918958d80ed0b4b75342618.jpg', '20161106\\860233206fef76217ed353fc045512a1.mp4', '1', '1', '0');
INSERT INTO `edu_video` VALUES ('99', '27', '104', 'MySQL高级课', '学期那啊', '5492469', 'video/mp4', '1478399656', '2', '1478399656', null, '1', '1', '20161106\\67cb5996912ffa71fdbeb55c41646467.jpg', '20161106\\38ccfa64381b4f68ae52caac7a79f315.mp4', '0', '7', '0');
INSERT INTO `edu_video` VALUES ('100', '30', '104', 'SQL', '大神带', '5492469', 'video/mp4', '1478399685', '2', '1478399685', null, '1', '1', '20161106\\d80dd358454b1a6d9d08602e0adb89e7.jpg', '20161106\\87c46db3e60ab3676ca7c08f4238fa2c.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('101', '22', '104', '安卓动画', '好好', '5492469', 'video/mp4', '1478399705', '2', '1478399705', null, '1', '1', '20161106\\7db9c1e9328ab9239371e4c9ca7efa9e.jpg', '20161106\\ac12f5a55a249098c98aaff49cb3f309.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('102', '32', '104', '大神你等等我', 'DB2', '5492469', 'video/mp4', '1478399732', '2', '1478399732', null, '1', '1', '20161106\\3cdd7ca28c4eb372fe7e8b56b4a49ebc.jpg', '20161106\\6caaa40a8fd3ae7895d8377b2a4b1fff.mp4', '0', '3', '0');
INSERT INTO `edu_video` VALUES ('103', '30', '104', '三天学会SQL', '很简单', '5492469', 'video/mp4', '1478399761', '2', '1478399761', null, '1', '1', '20161106\\2c99b4118fc3b4075afea101bbdfbed2.jpg', '20161106\\5c36513b5b16edab6d171b978f2db63a.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('104', '32', '104', '精通DB2', '只需3天', '5492469', 'video/mp4', '1478399790', '2', '1478399790', null, '1', '1', '20161106\\9baec59d687efb7deaf121c721296398.jpg', '20161106\\eefc0d5ca6e289d300d944258d008e81.mp4', '0', '2', '0');
INSERT INTO `edu_video` VALUES ('105', '31', '104', '2天精通NoSQL', '你信吗', '5492469', 'video/mp4', '1478399830', '2', '1478399830', null, '1', '1', '20161106\\955b766d3ed0230f2df750eca572631f.jpg', '20161106\\8efda66a7221e6b82e89f846458f4ce2.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('106', '28', '104', '神一般的存在MongDB', '什么啊', '5492469', 'video/mp4', '1478399864', '2', '1478399864', null, '1', '1', '20161106\\3e09971efda01e3f42a32c309608053d.jpg', '20161106\\94193de3ce513f83786e52a43703a30e.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('107', '27', '104', 'MysqL结合PHP', '阿里巴巴的噢', '5492469', 'video/mp4', '1478399888', '2', '1478399888', null, '1', '1', '20161106\\cb14dc6dd1321a198a6eeb8d43354b45.jpg', '20161106\\8309e81b79254463e31be38fc62ce4a9.mp4', '0', '3', '1');
INSERT INTO `edu_video` VALUES ('108', '23', '104', '改变自己', '从现在做起', '5492469', 'video/mp4', '1478399913', '2', '1478399913', null, '1', '1', '20161106\\d70b7e91c38f165d7619624616e2ef5d.jpg', '20161106\\c820cccc577d9dfd25dc821022da715a.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('109', '29', '104', '数据库基础', '一定要精通', '5492469', 'video/mp4', '1478399950', '2', '1478399950', null, '1', '1', '20161106\\1d1e97019c8c2d51d6e4839e1e749d1b.jpg', '20161106\\81115606d15e7e15282e2cc37dea9efe.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('110', '31', '104', '实力更新', '什么都不懂', '5492469', 'video/mp4', '1478399991', '2', '1478399991', null, '1', '1', '20161106\\46eb6fda56a39ab63944573b604d430e.jpg', '20161106\\3518478513065aef1eb1422f087f2e42.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('111', '27', '104', '缓存技术', '来自腾讯内部', '5492469', 'video/mp4', '1478400015', '2', '1478400015', null, '1', '1', '20161106\\86606d3c5b1e3622ace91ee9f09545b1.jpg', '20161106\\b947c85783c22b6b455f02792ea47874.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('112', '34', '104', '云计算3', '大神一定要看看', '5492469', 'video/mp4', '1478400040', '2', '1478400040', null, '1', '1', '20161106\\140d1023c42f1a94b2c54a2f8a995b7f.jpg', '20161106\\33531f03090533e8e87f514756a0fe00.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('113', '33', '104', '带你精通云计算', '了', '5492469', 'video/mp4', '1478400135', '2', '1478400135', null, '1', '1', '20161106\\f5655460d9d835b0e3ec84dbba1f3b59.jpg', '20161106\\cc7320919c048438e4b553827cc1cb6f.mp4', '1', '3', '1');
INSERT INTO `edu_video` VALUES ('114', '35', '104', '大数据', '顶顶顶', '5492469', 'video/mp4', '1478400165', '2', '1478400165', null, '1', '1', '20161106\\0c41ae1aef311bbce5ff885d5ee2c9f4.jpg', '20161106\\8c3e0dc20c4009d95f1a860828b2b43e.mp4', '0', '2', '0');
INSERT INTO `edu_video` VALUES ('115', '35', '104', '高手进阶篇', '来起来', '5492469', 'video/mp4', '1478400210', '2', '1478400210', null, '1', '1', '20161106\\cbbfb76f4746198a7563145fa2e31679.jpg', '20161106\\4fadc2db79f8dd171e2588f093c455fc.mp4', '0', '3', '0');
INSERT INTO `edu_video` VALUES ('116', '34', '104', '我的代码里', '云计算', '5492469', 'video/mp4', '1478400241', '2', '1478400241', null, '1', '1', '20161106\\b84d22824dfcae114d398fff2a43f522.jpg', '20161106\\9e639a199dd08854d95bcc36fe7d1d5d.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('167', '22', '104', '16', '16000', '5492469', 'video/mp4', '1478400241', '2', '1478400241', null, '1', '1', '20161106\\b84d22824dfcae114d398fff2a43f522.jpg', '20161106\\9e639a199dd08854d95bcc36fe7d1d5d.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('165', '33', '104', '解密大数据', '好呀', '5492469', 'video/mp4', '1478400266', '2', '1478400266', null, '1', '1', '20161106\\b2dc37578d41b2c34cc5c596c9731e3e.jpg', '20161106\\cf7523ea5e610bd7ae5a8dd394305a34.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('118', '33', '104', '揭秘云计算', '什么', '5492469', 'video/mp4', '1478400293', '2', '1478400293', null, '1', '1', '20161106\\a0cfc887840549de886feea18169e42e.jpg', '20161106\\13a79e79af0eb05816d8bd42315e8897.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('119', '33', '104', '什么东西？', '深深的脑海里', '5492469', 'video/mp4', '1478400312', '2', '1478400312', null, '1', '1', '20161106\\ed6336462d05f94b1d0dc65528a53458.jpg', '20161106\\e0b6bb2a09419ce9bcf2567b0cf67512.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('120', '27', '104', '大话数据', '什么', '5492469', 'video/mp4', '1478400341', '2', '1478824557', null, '1', '1', '20161106\\9d5dda070c312601aab19280352b250e.jpg', '20161106\\dccb56b949f879de70f2d27e53fe212b.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('121', '35', '104', '大神我来了', '顶顶顶', '103304022', 'video/x-ms-wmv', '1478400381', '2', '1478400381', null, '1', '1', '20161106\\1af029a792da6f9a4b3daa814a614334.jpg', '20161106\\5e8eaafc48eb59ba7ab3a658030c5875.wmv', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('122', '36', '104', '网络基础', '弯路啊', '5492469', 'video/mp4', '1478400501', '2', '1478400501', null, '1', '1', '20161106\\36a5a5be545f4e0128ae29df7d7c9a62.jpg', '20161106\\4e7647178861ee4c1408fc534e6cd397.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('123', '36', '104', '运维审计', '顶顶', '5492469', 'video/mp4', '1478400535', '2', '1478400535', null, '1', '1', '20161106\\c0a1d950adc08f9f818afe1b63ef25b1.jpg', '20161106\\cd19b48eef887c82010cf251502c61fe.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('124', '36', '104', '揭秘运维', '额为', '5492469', 'video/mp4', '1478400578', '2', '1478400578', null, '1', '1', '20161106\\956f3f3e976b776372fe602e32403599.jpg', '20161106\\a485095796dfac8e96cda2d31b999bf8.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('125', '38', '104', 'shell基础', '精通', '5492469', 'video/mp4', '1478400620', '2', '1478400620', null, '1', '1', '20161106\\a98fb4caa966df72c0f69a0529b5eb58.jpg', '20161106\\87b70d21f5e6fafcd4f0112ecda4121a.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('126', '38', '104', '典型应用', '得到的', '5492469', 'video/mp4', '1478400668', '2', '1478400668', null, '1', '1', '20161106\\32b5850ce42b9a935a367a9a383f9d89.jpg', '20161106\\48b9f91b2dcf50af75b43735f60beabe.mp4', '1', '4', '1');
INSERT INTO `edu_video` VALUES ('127', '39', '104', '什么是测试', '是非得失', '5492469', 'video/mp4', '1478400692', '2', '1478400692', null, '1', '1', '20161106\\0edf30f002c2b8dd3fb8b5649f0bb7c3.jpg', '20161106\\96863b03a6366e033ef7fdae39b07dda.mp4', '0', '3', '0');
INSERT INTO `edu_video` VALUES ('128', '39', '104', '揭开测试面纱', '后端', '5492469', 'video/mp4', '1478400718', '2', '1478400718', null, '1', '1', '20161106\\32f84ef65c132b26a3311fc555dd1249.jpg', '20161106\\4950a186cbb92790ff9dc261c158c27c.mp4', '1', '1', '0');
INSERT INTO `edu_video` VALUES ('129', '37', '104', '大师赛', '第三代', '5492469', 'video/mp4', '1478400737', '2', '1478400737', null, '1', '1', '20161106\\a7ac9d3e1b04dafbd1ff8f92913b0367.jpg', '20161106\\295b341d6944c07132f85e2ec63ec9fe.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('130', '37', '104', 'Linux必备', '的撒大', '5492469', 'video/mp4', '1478400763', '2', '1478400763', null, '1', '1', '20161106\\c5bca5e6366009512e5afaf5729a32fc.jpg', '20161106\\f7bc45f15f5d86020f6b1925f2894e30.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('131', '38', '104', '界面Shell', '大神', '5492469', 'video/mp4', '1478400849', '2', '1478400849', null, '1', '1', '20161106\\7b14aa68abc260bdcf890403c4fcfdde.jpg', '20161106\\719de589d97e7de82f8fccdf69546e5a.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('132', '40', '104', '小白学ps', '是否', '5492469', 'video/mp4', '1478400887', '2', '1478400887', null, '1', '1', '20161106\\fbc81ae09ea11022248d9b0309d5b249.jpg', '20161106\\c97e4bfe5ba0d91b2bf17cb34a31b83b.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('133', '40', '104', 'Photoshop', 'Photoshop', '5492469', 'video/mp4', '1478400921', '2', '1478400921', null, '1', '1', '20161106\\deecf9d319504d3ba2dd51c946fee4ee.jpg', '20161106\\9bbacad9f5d0366b1b36927bd76830b9.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('134', '40', '104', '揭开Photo', '精通ps', '5492469', 'video/mp4', '1478400943', '2', '1478406167', null, '1', '1', '20161106\\bac80b7f9f7bb75eabd4b08571164796.jpg', '20161106\\d0d085b2c18ce047d0560b99bfe37f95.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('135', '42', '104', 'premiere', '的v好的v', '5492469', 'video/mp4', '1478400989', '2', '1478400989', null, '1', '1', '20161106\\7d4e994463868810cf2cfa88bb376703.jpg', '20161106\\089100cd89b103b09cc1b0b3be3ad1ac.mp4', '0', '2', '1');
INSERT INTO `edu_video` VALUES ('136', '42', '104', '大神设计', '是的', '5492469', 'video/mp4', '1478401398', '2', '1478401821', null, '1', '1', '20161106\\badebf98f20e9f6a72e02f84996f490f.jpg', '20161106\\90d701dfe22a8b80f879328b82ccbd97.mp4', '1', '8', '1');
INSERT INTO `edu_video` VALUES ('137', '41', '104', '设计之路', '不会i啊', '5492469', 'video/mp4', '1478401439', '2', '1478401439', null, '1', '1', '20161106\\cda508922dbfa6be862775dec6c9954e.jpg', '20161106\\debad3232b269bdfc298e6ba9d7bb88e.mp4', '0', '2', '0');
INSERT INTO `edu_video` VALUES ('138', '42', '104', '设计速度', '分答上', '5492469', 'video/mp4', '1478401461', '2', '1478401461', null, '1', '1', '20161106\\56f8dcdebd5f8f3a10510e35f3ac8fba.jpg', '20161106\\e298cc2263890019b1d0104627de93bf.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('139', '42', '104', '神奇的设计', '的', '5492469', 'video/mp4', '1478401493', '2', '1478401493', null, '1', '1', '20161106\\7d4650a60019a4097b44d581984bb859.jpg', '20161106\\fa4eee7857ee516e3245843ac061fd5a.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('140', '42', '104', '什么是设计', '设计', '5492469', 'video/mp4', '1478401515', '2', '1478401515', null, '0', '1', '20161106\\3d0f9d8ab46c11b6457a5a56fc973409.jpg', '20161106\\9cf0900d9118ef239d8a58696f83e6de.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('141', '42', '104', '设计心理学', '少的', '5492469', 'video/mp4', '1478401531', '2', '1478401531', null, '1', '1', '20161106\\3a9b76f226cf577129c1261c65a7c3d6.jpg', '20161106\\f58d9c7b4d3e3a3f076f2d73519d4c67.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('142', '42', '104', '设计之美', '华盛顿号非常', '5492469', 'video/mp4', '1478401557', '2', '1478401810', null, '0', '1', '20161106\\fc53a82a51dff03420b0fb419b91b08d.jpg', '20161106\\3389c76138492ec66ed8752a4df171cb.mp4', '1', '4', '2');
INSERT INTO `edu_video` VALUES ('143', '13', '104', 'Vue.js高手篇', '来吧', '5492469', 'video/mp4', '1478417155', '2', '1478417155', null, '1', '1', '20161106\\2a4192111bf6f3882beded8cab9516b5.jpg', '20161106\\24ea2005050a8ed402d1331dd9b2d9a0.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('144', '10', '104', 'Js进阶', '来了', '5492469', 'video/mp4', '1478417177', '2', '1478417177', null, '1', '1', '20161106\\8c8313a6aadd22a61c867079867b54ef.jpg', '20161106\\5738ee1ae7af1a61b62fe19a9ded4b8b.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('145', '19', '104', '再来一个C++', '我觉得挺好', '5492469', 'video/mp4', '1478418488', '2', '1478418488', null, '1', '1', '20161106\\867faeb5dc8115b5cc5917f8606122c7.jpg', '20161106\\caa1811264ffbbc23798bad8c9c1eb49.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('146', '16', '104', '再来一个PHP', '你说怎么样', '5492469', 'video/mp4', '1478418511', '2', '1478418511', null, '1', '1', '20161106\\d6725769068dcd7c2b7859fdf366bf44.jpg', '20161106\\31969e36548d3789196dac0b57c9993a.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('147', '29', '104', '数据审计', '我', '5492469', 'video/mp4', '1478419756', '2', '1478419756', null, '1', '1', '20161106\\e8b2741fd74aa31d7d09bca9886f49c3.jpg', '20161106\\239c70baa4ce2070be4ad6a98b572800.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('148', '30', '104', '森林带你学SQL', '来不来', '5492469', 'video/mp4', '1478419783', '2', '1478419783', null, '1', '1', '20161106\\3e70b6730da1b6bde7e9b428d8f3f36f.jpg', '20161106\\77d3e9d5a2879ad2f915e47144301d6a.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('149', '31', '104', '数据分析', '数据分析', '5492469', 'video/mp4', '1478419813', '2', '1478419813', null, '1', '1', '20161106\\a0c7ba93283f8902ef7b4417569275f8.jpg', '20161106\\d51a1b1788df94d178cf08ac2899bb24.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('150', '28', '104', '什么啊', '不够啊 ', '5492469', 'video/mp4', '1478419834', '2', '1478419834', null, '1', '0', '20161106\\c72f4bced30cc838103d6ed994dd63f7.jpg', '20161106\\acb9955bd9f565a5dccf4c7edd4b0d78.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('151', '27', '104', '谔谔', '给你最后一次机会i', '5492469', 'video/mp4', '1478419849', '2', '1478419849', null, '1', '1', '20161106\\d2ecca25cf95194fbc1a154932b19cba.jpg', '20161106\\2469ca69dfab82d07ee20dceba0907c1.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('152', '28', '104', '不够啊啊', '数据库啊', '5492469', 'video/mp4', '1478419849', '2', '1478419897', null, '1', '1', '20161106\\b578e5d529fe4eb091483cc05a4b9c8f.jpg', '20161106\\706c3336bf084c041e3717e8e610e248.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('153', '35', '104', '森林带你学计算', 'd', '5492469', 'video/mp4', '1478420460', '2', '1478420460', null, '1', '1', '20161106\\94f02eb33f7431f2d7b3335783516fb7.jpg', '20161106\\4f525d8b6873aa8936c30079f31e258e.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('154', '35', '104', 'demochen', '打地鼠', '5492469', 'video/mp4', '1478420474', '2', '1478420474', null, '1', '1', '20161106\\affc84f583906cd19b465f932144c94d.jpg', '20161106\\f6f12c7e594d733baefe72ec6a463275.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('155', '34', '104', '计算例外', '顶顶', '5492469', 'video/mp4', '1478420494', '2', '1478420494', null, '1', '1', '20161106\\da0fd5d823b5a0bd0ad9155d6adc2e5a.jpg', '20161106\\1896c1acd5c657587909517a3adf3a23.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('156', '35', '104', '每天学点数据', '大神', '5492469', 'video/mp4', '1478420518', '2', '1478420518', null, '1', '1', '20161106\\d4df85ea89c0ae90f05072fcb1becf8a.jpg', '20161106\\501e2731f85aa8e0eb750de9b675bebc.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('157', '34', '104', '每天学点大数据', 'vfd', '5492469', 'video/mp4', '1478420543', '2', '1478420543', null, '1', '1', '20161106\\e0d9ef083ad159e3cc8e7b4ec1ef2471.jpg', '20161106\\35f045ecd1d91d3d81cb4dfaa915a6f8.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('158', '41', '104', '每天学点设计学', '大苏打', '5492469', 'video/mp4', '1478421115', '2', '1478421115', null, '1', '1', '20161106\\96b2c31ca3aaaa82bad0cc989207b7da.jpg', '20161106\\7d491392c5af124e9e30ef337f7fea8f.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('159', '41', '104', '马珍带你学设计', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('160', '41', '104', '森林带你飞', '到时候', '5492469', 'video/mp4', '1478421154', '2', '1478421154', null, '1', '1', '20161106\\84c37df6293a7b0e01a366edcb3531b1.jpg', '20161106\\cf8391c17e28426ebb76df7c503fbaad.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('161', '9', '104', 'CSS3基础', 'CSS3基础', '5492469', 'video/mp4', '1478398408', '2', '1478398408', null, '1', '1', '20161106\\53ed2bf503b8dd15e8d2fd21e4abd9bc.jpg', '20161106\\60d19c3e395a2a884440b4ec0a12416f.mp4', '0', '24', '0');
INSERT INTO `edu_video` VALUES ('162', '9', '104', 'CSS3基础', 'CSS3基础', '5492469', 'video/mp4', '1478398408', '2', '1478398408', null, '1', '1', '20161106\\53ed2bf503b8dd15e8d2fd21e4abd9bc.jpg', '20161106\\60d19c3e395a2a884440b4ec0a12416f.mp4', '0', '23', '0');
INSERT INTO `edu_video` VALUES ('163', '16', '104', 'PHP获取IP', '极客必备', '5492469', 'video/mp4', '1478399280', '2', '1478399280', null, '1', '1', '20161106\\dfc395394772a5b0ac448e99cfe8d376.jpg', '20161106\\131ec049548f4516c5762d912d26a627.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('164', '16', '104', 'PHP获取IP', '极客必备', '5492469', 'video/mp4', '1478399280', '2', '1478399280', null, '1', '1', '20161106\\dfc395394772a5b0ac448e99cfe8d376.jpg', '20161106\\131ec049548f4516c5762d912d26a627.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('166', '33', '104', '解密大数据', '好呀', '5492469', 'video/mp4', '1478400266', '2', '1478400266', null, '1', '1', '20161106\\b2dc37578d41b2c34cc5c596c9731e3e.jpg', '20161106\\cf7523ea5e610bd7ae5a8dd394305a34.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('168', '33', '104', '解密大数据', '好呀', '5492469', 'video/mp4', '1478400266', '2', '1478400266', null, '1', '1', '20161106\\b2dc37578d41b2c34cc5c596c9731e3e.jpg', '20161106\\cf7523ea5e610bd7ae5a8dd394305a34.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('169', '33', '104', '解密大数据', '好呀', '5492469', 'video/mp4', '1478400266', '2', '1478400266', null, '1', '1', '20161106\\b2dc37578d41b2c34cc5c596c9731e3e.jpg', '20161106\\cf7523ea5e610bd7ae5a8dd394305a34.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('170', '33', '104', '解密大数据', '好呀', '5492469', 'video/mp4', '1478400266', '2', '1478400266', null, '1', '1', '20161106\\b2dc37578d41b2c34cc5c596c9731e3e.jpg', '20161106\\cf7523ea5e610bd7ae5a8dd394305a34.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('171', '33', '104', '解密大数据', '好呀', '5492469', 'video/mp4', '1478400266', '2', '1478400266', null, '1', '1', '20161106\\b2dc37578d41b2c34cc5c596c9731e3e.jpg', '20161106\\cf7523ea5e610bd7ae5a8dd394305a34.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('172', '33', '104', '解密大数据', '好呀', '5492469', 'video/mp4', '1478400266', '2', '1478400266', null, '1', '1', '20161106\\b2dc37578d41b2c34cc5c596c9731e3e.jpg', '20161106\\cf7523ea5e610bd7ae5a8dd394305a34.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('173', '41', '104', '设计小白课', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('174', '41', '104', '设计入门课', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('175', '41', '104', '设计初级课', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('176', '41', '104', '设计中级课', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('177', '41', '104', '设计高级课', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('178', '41', '104', '设计特级课', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('179', '41', '104', '设计心理学二', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('180', '41', '104', '设计的艺术', '大神', '5492469', 'video/mp4', '1478421136', '2', '1478421136', null, '1', '1', '20161106\\b17856469e8eee01c4f1d354e4fc9fe2.jpg', '20161106\\3d37223413fa1119173636b827a9c296.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('181', '22', '104', 'nihao', ';', '5492469', 'video/mp4', '1478567610', '2', '1478567610', null, '1', '1', '20161108\\924fed76cc4843dd53d1f2698bfd555a.jpg', '20161108\\0670151822e07784327d20ffeee2fc07.mp4', '0', '2', '0');
INSERT INTO `edu_video` VALUES ('182', '33', '104', 'chense', '///', '5492469', 'video/mp4', '1478575325', '2', '1478575325', null, '1', '1', '20161108\\b8d2defb4efca8b042c6b216aa03deaa.jpg', '20161108\\fbe888a4060d09d27727e22e8f7c2ad7.mp4', '0', '0', '0');
INSERT INTO `edu_video` VALUES ('183', '16', '104', '玩转php', '好好学习', '5492469', 'video/mp4', '1478761338', '2', '1478761338', null, '1', '1', '20161110\\56f7bc55c359dab96a6017d84fe9cb52.jpg', '20161110\\685fadccd7f08b64a5228a1127db9a72.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('184', '18', '104', 'demo', 'chen', '5492469', 'video/mp4', '1478776677', '2', '1478776677', null, '1', '0', '20161110\\56f7bc55c359dab96a6017d84fe9cb52.jpg', '20161110\\4c07c504100cceb56e9f40a10316bd49.mp4', '0', '13', '0');
INSERT INTO `edu_video` VALUES ('185', '28', '104', '蓝翔IT', '你好', '5492469', 'video/mp4', '1478784195', '2', '1478784195', null, '1', '1', '20161110\\b2492863a05a3a488d3f3c72ce93f2a1.jpg', '20161110\\665fe379ec86f4213c1e796388e39b9a.mp4', '0', '1', '0');
INSERT INTO `edu_video` VALUES ('186', '16', '104', 'php高级课', '后端开发必备', '5492469', 'video/mp4', '1478793600', '2', '1478793600', null, '1', '1', '20161111\\d90eaec9243641fc666d9de7f8bddae0.jpg', '20161111\\0a157edb73d283ffe57fc4c50f85cfe0.mp4', '1', '2', '0');
INSERT INTO `edu_video` VALUES ('187', '16', '104', 'PHP特级课', '好好学习', '5492469', 'video/mp4', '1478823584', '2', '1478823584', null, '1', '1', '20161111\\47b6d0d561fa365ef8190342d046d8ca.jpg', '20161111\\7b58bbfadbf9b0dffbcb747551b5c207.mp4', '0', '5', '0');
INSERT INTO `edu_video` VALUES ('188', '16', '104', 'PHP高级课', '好好学习', '5492469', 'video/mp4', '1478829846', '1', '1478829846', null, '1', '1', '20161111\\0afa915a4c0f13ab21c4fefe3dd69e80.jpg', '20161111\\f62bffe3e92965066e6c5af3a0213ee0.mp4', '0', '1', '0');
