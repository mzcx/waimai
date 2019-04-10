/*
Navicat MySQL Data Transfer

Source Server         : localhost_
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2018-08-16 12:59:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(13) DEFAULT NULL COMMENT '管理员帐号',
  `pwd` varchar(50) DEFAULT NULL COMMENT '管理员密码',
  `Levels` varchar(1) NOT NULL COMMENT '管理权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '');
INSERT INTO `admin` VALUES ('2', 'admin1', '21232f297a57a5a743894a0e4a801fc3', '0');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL COMMENT '外卖名称',
  `jianjie` mediumtext COMMENT '外卖介绍',
  `xinghao` varchar(25) DEFAULT NULL COMMENT '外卖型号',
  `tupian` varchar(200) DEFAULT NULL COMMENT '外卖图片',
  `shuliang` int(4) DEFAULT NULL COMMENT '外卖数量',
  `cishu` int(4) DEFAULT NULL COMMENT '卖出次数',
  `huiyuanjia` varchar(25) DEFAULT NULL COMMENT '会员价',
  `shichangjia` varchar(25) DEFAULT NULL COMMENT '市场价',
  `leibie` varchar(25) DEFAULT NULL COMMENT '类别',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `hits` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('7', '糖醋里脊', '糖醋里脊是经典汉族名菜之一。在浙江菜、四川菜、鲁菜和清真菜中都有这道菜，色泽红亮，酸甜可口，而且最吸引人的就是它外焦脆、里软嫩的口感。第一口咬上去，浓厚蜜意的酸甜汁包裹在外衣上、酥脆焦香，等吃到里面，才发现嫩香的里脊早已悄悄地藏在唇齿之间，味道和口感贴合得天衣无缝，搭得瓷实。', '0001', 'admin/upimages/8.jpg', '99', '1', '5', '6', '2', '0000-00-00 00:00:00', '23');
INSERT INTO `goods` VALUES ('8', '酸辣土豆丝', '酸辣土豆丝是一道人见人爱的家常菜，制作原料有土豆、辣椒、白醋等，虽然价格便宜但是酸辣可口的味道却是大家喜爱的。无论是家庭餐桌、还是饭馆酒店几乎都能见到它的身影，虽然酸辣土豆丝是一道普通的菜肴，但是能够做好也是很不容易的，如何才能保持土豆丝熟而脆爽是关键，这个和土豆的选择、土豆丝的处理、炒制时的时间火候的把握有着密切的关系。', '0002', 'admin/upimages/9.jpg', '99', '0', '3', '4', '1', '0000-00-00 00:00:00', '2');
INSERT INTO `goods` VALUES ('9', '清炒甘蓝', '清炒甘蓝富含大量维生素E和C，是一道清淡的家常菜。', '0003', 'admin/upimages/10.jpg', '99', '0', '3', '4', '1', '0000-00-00 00:00:00', '5');
INSERT INTO `goods` VALUES ('10', '辣子鸡', '辣子鸡，是一道经典的川渝地区的特色传统名肴。一般以鸡为主料，加上葱、干辣椒、花椒、盐、胡椒、味精等多种材料精制而成，营养丰富，味道鲜美，虽然是同一道菜，各地制作也各有特色。', '0004', 'admin/upimages/11.jpg', '99', '1', '5', '6', '2', '0000-00-00 00:00:00', '4');
INSERT INTO `goods` VALUES ('11', '风味茄子', '风味茄子是一道很好吃的菜', '0005', 'admin/upimages/12.jpg', '99', '2', '3', '4', '1', '0000-00-00 00:00:00', '11');
INSERT INTO `goods` VALUES ('12', '麻辣鱼片', '麻辣鱼片是一道又辣又麻的菜，适合喜欢吃辣的人。', '0006', 'admin/upimages/13.jpg', '99', '1', '5', '6', '2', '0000-00-00 00:00:00', '11');
INSERT INTO `goods` VALUES ('13', '木耳炒肉', '木耳炒肉是中国常见的一道家常菜，主要由木耳、肉片等炒制而成，由于其味美且制作工艺简单，为大部分人们所喜爱。此菜肴用补肾益精、滋肝养血、生津润燥的猪肉，配滋阴润燥、强壮健身的保健食品木耳，其功重在滋补；可治疗肾虚精亏、病后体弱、产后血虚、或热病伤阴、液于血枯等病症。', '0007', 'admin/upimages/14.jpg', '99', '0', '4', '5', '2', '0000-00-00 00:00:00', '20');
INSERT INTO `goods` VALUES ('14', '麻婆豆腐', '麻婆豆腐始创于清朝同治元年（1862年），开创于成都外北万福桥边。由于陈麻婆豆腐历代传人的不断努力，陈麻婆川菜馆虽距今一百四十余年盛名长盛不衰。并扬名海内外，深得国内外美食者好评。麻婆豆腐也成为了具有四川代表性的名菜，麻婆豆腐是四川省汉族传统名菜之一，属于川菜系。主要原料为配料和豆腐，材料主要有豆腐、牛肉末（也可以用猪肉）、辣椒和花椒等。麻来自花椒，辣来自辣椒，这道菜突出了川菜“麻辣”的特点。此菜大约在清代同治初年（1874年以后），由成都市北郊万福桥一家名为“陈兴盛饭铺”的小饭店老板娘陈刘氏所创。因为陈刘氏脸上有麻点，人称陈麻婆，她发明的烧豆腐就被称为“陈麻婆豆腐”。', '0008', 'admin/upimages/18.jpg', '99', '2', '3', '4', '1', '0000-00-00 00:00:00', '20');
INSERT INTO `goods` VALUES ('15', '清炒白菜', '清炒白菜是一道可口清单的，适合搭配其他菜一起吃的家常菜', '0009', 'admin/upimages/19.jpg', '99', '2', '3', '4', '1', '0000-00-00 00:00:00', '34');
INSERT INTO `goods` VALUES ('16', '蒜薹炒鸡蛋', '蒜薹炒鸡蛋是一道美味的佳肴', '0010', 'admin/upimages/20.jpg', '99', '1', '3', '4', '1', '0000-00-00 00:00:00', '23');
INSERT INTO `goods` VALUES ('17', '米饭', '主食', '0011', 'admin/upimages/21.jpg', '99', '2', '2', '2', '3', '0000-00-00 00:00:00', '34');

-- ----------------------------
-- Table structure for intro
-- ----------------------------
DROP TABLE IF EXISTS `intro`;
CREATE TABLE `intro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of intro
-- ----------------------------
INSERT INTO `intro` VALUES ('7', '先登录账号密码，若没有账号先点击注册，登录后点击菜品下面的放入购物车，点击我的购物车，进入结算即可。', '购物流程', '0000-00-00 00:00:00');
INSERT INTO `intro` VALUES ('8', '可选择现金支付，支付宝支付，微信支付', '如何付款', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for leibie
-- ----------------------------
DROP TABLE IF EXISTS `leibie`;
CREATE TABLE `leibie` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of leibie
-- ----------------------------
INSERT INTO `leibie` VALUES ('3', '川湘菜');
INSERT INTO `leibie` VALUES ('4', '鲁菜/北京菜');
INSERT INTO `leibie` VALUES ('5', '粤菜');
INSERT INTO `leibie` VALUES ('6', '浙菜');
INSERT INTO `leibie` VALUES ('7', '徽菜');
INSERT INTO `leibie` VALUES ('8', '闽菜');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `content` mediumtext COMMENT '内容',
  `num` int(11) DEFAULT '0' COMMENT '点击次数',
  `addtime` datetime DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of notice
-- ----------------------------
INSERT INTO `notice` VALUES ('21', '食堂上新', '校园食堂新上麻婆豆腐、蒜薹炒鸡蛋等菜品，欢迎品尝', '0', '2018-01-15 11:39:39');
INSERT INTO `notice` VALUES ('22', '关于送餐', '<p>\r\n	校园食堂只负责送往校园内的宿舍、教学楼等地方。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '0', '2018-01-15 11:43:12');
INSERT INTO `notice` VALUES ('24', '关于结算', '', '0', null);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(125) DEFAULT NULL COMMENT '订单号',
  `spc` varchar(125) DEFAULT NULL COMMENT '菜品的编号',
  `slc` varchar(125) DEFAULT NULL COMMENT '菜品的数量',
  `shouhuoren` varchar(25) DEFAULT NULL COMMENT '收货人',
  `sex` varchar(2) DEFAULT NULL COMMENT '性别',
  `dizhi` varchar(125) DEFAULT NULL COMMENT '收货地址',
  `youbian` varchar(10) DEFAULT NULL COMMENT '邮编',
  `tel` varchar(25) DEFAULT NULL COMMENT '联系电话',
  `email` varchar(25) DEFAULT NULL COMMENT '邮箱',
  `shff` varchar(25) DEFAULT NULL COMMENT '邮寄方式',
  `zfff` varchar(25) DEFAULT NULL COMMENT '付款方式',
  `time` datetime DEFAULT NULL COMMENT '订单时间',
  `xiadanren` varchar(25) DEFAULT NULL COMMENT '下单人',
  `zt` varchar(50) DEFAULT NULL COMMENT '订单状态',
  `total` varchar(25) DEFAULT NULL COMMENT '总金额',
  `liuyan` text COMMENT '订单留言',
  `atime` datetime DEFAULT NULL COMMENT '送货时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('3', '20180171142261', '13@12@', '1@1@', '张三', '', '测试地址', '455121212', '112485154', '5555@qq.com', '送货上门', '网上支付', '2018-01-15 11:42:26', 'ztest', '已完成', '66', '完全是大萨达', '2018-01-15 11:43:32');
INSERT INTO `orders` VALUES ('4', '201801131106203', '@13@', '1@1@', '123123', '', '22222222222', '222222222', '2222222', '123123@126.com', '送货上门', '货到付款', '2018-01-15 11:06:20', '222222', '已完成', '44', '', '2018-01-15 11:17:07');
INSERT INTO `orders` VALUES ('5', '201801152330043', '11@', '1@', '123123', '', '22222222222', '056600', '2222222', '123123@126.com', '送货上门', '货到付款', '2018-01-15 23:30:04', '222222', '已完成', '55', '2222', '2018-01-15 11:32:17');

-- ----------------------------
-- Table structure for pingjia
-- ----------------------------
DROP TABLE IF EXISTS `pingjia`;
CREATE TABLE `pingjia` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `userid` int(4) DEFAULT NULL,
  `spid` int(4) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` mediumtext,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of pingjia
-- ----------------------------
INSERT INTO `pingjia` VALUES ('7', '1', '11', '口味', '口味比较甜辣，很有口感。', '2018-01-15 11:42:15');
INSERT INTO `pingjia` VALUES ('8', '1', '9', '口味', '口味比较清淡', '2018-01-14 10:52:15');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL COMMENT '帐号',
  `pwd` varchar(50) DEFAULT NULL COMMENT '密码',
  `dongjie` int(4) NOT NULL DEFAULT '0' COMMENT '是否冻结',
  `num` int(10) DEFAULT NULL COMMENT '学号',
  `sfzh` varchar(25) DEFAULT NULL COMMENT '身份证',
  `tel` varchar(25) DEFAULT NULL COMMENT '联系电话',
  `qq` varchar(25) DEFAULT NULL COMMENT '联系qq',
  `dizhi` varchar(100) DEFAULT NULL COMMENT '邮寄地址',
  `youbian` varchar(25) DEFAULT NULL COMMENT '邮编',
  `truename` varchar(25) DEFAULT NULL COMMENT '真实姓名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'zhaoyi', '123456', '0', '2016416243', '123456789', '15587398912', '326910329', '北公寓2号楼', '455121212', '赵毅');
INSERT INTO `user` VALUES ('2', 'liuaoqing', '123456', '0', '2016416244', '12451254515152', '1821241021', '555000', '和平路101', '15176086362', '老郭');
INSERT INTO `user` VALUES ('3', 'lixiaojie', '123456', '0', '2016416245', '22222', '2222222', '222222', '22222222222', '', '123123');
