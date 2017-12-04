/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : emerald

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-05 02:05:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for emerald_admin
-- ----------------------------
DROP TABLE IF EXISTS `emerald_admin`;
CREATE TABLE `emerald_admin` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `adminname` varchar(32) NOT NULL DEFAULT '' COMMENT '管理员名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '邮箱',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `input_id` int(10) NOT NULL DEFAULT '0' COMMENT '录入人员Id',
  `token` varchar(20) NOT NULL DEFAULT '0' COMMENT 'token',
  `deleted_at` tinyint(5) NOT NULL DEFAULT '0',
  `role_id` tinyint(5) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `status` tinyint(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `adminname` (`adminname`),
  KEY `role_id` (`role_id`) COMMENT '角色'
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of emerald_admin
-- ----------------------------
INSERT INTO `emerald_admin` VALUES ('1', 'ycp', '447910ff7241c373129b8761cc312c78', '', '', '1510902753', '1510902753', '0', '0', '0', '0', '1');
INSERT INTO `emerald_admin` VALUES ('39', 'test', 'fed6fb05c04e7e31bc5a91b25834281f', '', '', '1510910879', '1510910879', '0', '0', '0', '0', '1');
INSERT INTO `emerald_admin` VALUES ('40', 'feichui', 'fed6fb05c04e7e31bc5a91b25834281f', '', '', '1512321136', '1512321136', '0', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for emerald_admin_role
-- ----------------------------
DROP TABLE IF EXISTS `emerald_admin_role`;
CREATE TABLE `emerald_admin_role` (
  `admin_id` mediumint(9) NOT NULL COMMENT '管理员Id',
  `role_id` mediumint(9) NOT NULL COMMENT '角色Id',
  KEY `admin_id` (`admin_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员角色表';

-- ----------------------------
-- Records of emerald_admin_role
-- ----------------------------
INSERT INTO `emerald_admin_role` VALUES ('1', '8');
INSERT INTO `emerald_admin_role` VALUES ('40', '10');
INSERT INTO `emerald_admin_role` VALUES ('39', '8');

-- ----------------------------
-- Table structure for emerald_agent
-- ----------------------------
DROP TABLE IF EXISTS `emerald_agent`;
CREATE TABLE `emerald_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `agent_code` varchar(255) NOT NULL COMMENT '代理商编号',
  `agent_name` varchar(255) NOT NULL COMMENT '姓名',
  `telphone` varchar(255) NOT NULL DEFAULT '0' COMMENT '手机号',
  `booth_number` varchar(255) NOT NULL DEFAULT '' COMMENT '摊位号',
  `wx` varchar(255) NOT NULL COMMENT '微信',
  `pm` varchar(255) NOT NULL COMMENT '主营项目',
  `bank_code` varchar(255) NOT NULL COMMENT '银行卡号',
  `alipay_code` varchar(255) NOT NULL COMMENT '支付宝账号',
  `qq_code` varchar(255) NOT NULL COMMENT 'qq账号',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  `license_number` varchar(255) NOT NULL DEFAULT '0' COMMENT '营业执照',
  `deleted` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='代理商';

-- ----------------------------
-- Records of emerald_agent
-- ----------------------------
INSERT INTO `emerald_agent` VALUES ('4', 'LYFC15114263421', '杨春坪', '18983663382', '123456789', '123456789wx', '翡翠，珠宝', '123456789', '123456789alpay', '820363773', '1', '1511426342', '1511429137', '0', '123456789', '1');

-- ----------------------------
-- Table structure for emerald_attr
-- ----------------------------
DROP TABLE IF EXISTS `emerald_attr`;
CREATE TABLE `emerald_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `attr_name` varchar(255) NOT NULL DEFAULT '' COMMENT '属性名',
  `pic` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `cat_val` varchar(255) NOT NULL DEFAULT '' COMMENT '属性',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of emerald_attr
-- ----------------------------
INSERT INTO `emerald_attr` VALUES ('26', '油青', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('25', '干花青', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('24', '墨翠', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('23', '多彩', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('22', '红黄翡', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('21', '紫绿', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('20', '紫罗兰', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('19', '飘花', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('18', '蓝水', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('17', '晴水', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('16', '飘绿', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('15', '淡浅绿', '', '', '1512393981', '1512393981', '0', '52');
INSERT INTO `emerald_attr` VALUES ('14', '浓阳绿', '', '', '1512393980', '1512393980', '0', '52');
INSERT INTO `emerald_attr` VALUES ('27', '观音', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('28', '佛', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('29', '貔貅', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('30', '如意', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('31', '福瓜', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('32', '平安扣', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('33', '叶子', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('34', '财豆', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('35', '路路通', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('36', '白菜', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('37', '葫芦', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('38', '关公', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('39', '生肖', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('40', '无事牌', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('41', '龙凤牌', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('42', '瑞兽', '', '', '1512394470', '1512394470', '0', '50');
INSERT INTO `emerald_attr` VALUES ('43', '人物', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('44', '节节高', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('45', '金蝉', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('46', '富贵', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('47', '花鸟鱼', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('48', '福禄寿', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('49', '佛手', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('50', '其他', '', '', '1512394471', '1512394471', '0', '50');
INSERT INTO `emerald_attr` VALUES ('51', '玻璃种', '', '', '1512394486', '1512394486', '0', '51');
INSERT INTO `emerald_attr` VALUES ('52', '高冰种', '', '', '1512394486', '1512394486', '0', '51');
INSERT INTO `emerald_attr` VALUES ('53', '冰种', '', '', '1512394486', '1512394486', '0', '51');
INSERT INTO `emerald_attr` VALUES ('54', '冰糯种', '', '', '1512394486', '1512394486', '0', '51');
INSERT INTO `emerald_attr` VALUES ('55', '糯种', '', '', '1512394486', '1512394486', '0', '51');
INSERT INTO `emerald_attr` VALUES ('56', '豆种', '', '', '1512394486', '1512394486', '0', '51');
INSERT INTO `emerald_attr` VALUES ('57', '男表', '', '', '1512395116', '1512395116', '0', '88');
INSERT INTO `emerald_attr` VALUES ('58', '女表', '', '', '1512395116', '1512395116', '0', '88');
INSERT INTO `emerald_attr` VALUES ('59', '对表', '', '', '1512395116', '1512395116', '0', '88');
INSERT INTO `emerald_attr` VALUES ('85', '油青', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('84', '干花青', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('83', '墨翠', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('82', '多彩', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('81', '红黄翡', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('80', '紫绿', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('79', '紫罗兰', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('78', '飘花', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('77', '蓝水', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('76', '晴水', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('75', '飘绿', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('74', '淡浅绿', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('73', '浓阳绿', '', '', '1512399560', '1512399560', '0', '85');
INSERT INTO `emerald_attr` VALUES ('86', '0-3千', '', '', '1512408235', '1512408235', '0', '53');
INSERT INTO `emerald_attr` VALUES ('87', '3千-8千', '', '', '1512408235', '1512408235', '0', '53');
INSERT INTO `emerald_attr` VALUES ('88', '8千-1.5万', '', '', '1512408235', '1512408235', '0', '53');
INSERT INTO `emerald_attr` VALUES ('89', '1.5-3万', '', '', '1512408235', '1512408235', '0', '53');
INSERT INTO `emerald_attr` VALUES ('90', '3-5万', '', '', '1512408235', '1512408235', '0', '53');
INSERT INTO `emerald_attr` VALUES ('91', '5万-10万', '', '', '1512408235', '1512408235', '0', '53');
INSERT INTO `emerald_attr` VALUES ('92', '10以上', '', '', '1512408235', '1512408235', '0', '53');

-- ----------------------------
-- Table structure for emerald_cat
-- ----------------------------
DROP TABLE IF EXISTS `emerald_cat`;
CREATE TABLE `emerald_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `cat_name` varchar(255) NOT NULL DEFAULT '' COMMENT '分类名',
  `pic` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

-- ----------------------------
-- Records of emerald_cat
-- ----------------------------
INSERT INTO `emerald_cat` VALUES ('16', '轻奢小品', '2017/12/02/iESEzXdPWw3ZvtRzwWlWVNN7WpDV56lo75XXDyaE.jpeg', '1512213553', '1512320267', '0', '0');
INSERT INTO `emerald_cat` VALUES ('52', '颜色', '', '1512319453', '1512319453', '0', '36');
INSERT INTO `emerald_cat` VALUES ('18', '琥珀蜜蜡', '2017/12/03/rBkdf9VpA3k018xvJFk0falLDUJoC0ROqj6hJjNb.jpeg', '1512213605', '1512285874', '0', '0');
INSERT INTO `emerald_cat` VALUES ('36', '挂件', '', '1512293718', '1512293718', '0', '0');
INSERT INTO `emerald_cat` VALUES ('50', '题材', '', '1512319453', '1512319453', '0', '36');
INSERT INTO `emerald_cat` VALUES ('51', '种水', '', '1512319453', '1512319453', '0', '36');
INSERT INTO `emerald_cat` VALUES ('41', '耳钉/坠', '', '1512317676', '1512317676', '0', '0');
INSERT INTO `emerald_cat` VALUES ('42', '种水', '', '1512317676', '1512317676', '0', '41');
INSERT INTO `emerald_cat` VALUES ('43', '颜色', '', '1512317676', '1512317676', '0', '41');
INSERT INTO `emerald_cat` VALUES ('44', '价格', '', '1512317676', '1512317676', '0', '41');
INSERT INTO `emerald_cat` VALUES ('53', '价格', '', '1512319453', '1512319453', '0', '36');
INSERT INTO `emerald_cat` VALUES ('54', '类别', '', '1512319468', '1512319468', '0', '18');
INSERT INTO `emerald_cat` VALUES ('55', '价格', '', '1512319468', '1512319468', '0', '18');
INSERT INTO `emerald_cat` VALUES ('61', '价格', '', '1512319596', '1512319596', '0', '16');
INSERT INTO `emerald_cat` VALUES ('60', '颜色', '', '1512319596', '1512319596', '0', '16');
INSERT INTO `emerald_cat` VALUES ('59', '种水', '', '1512319596', '1512319596', '0', '16');
INSERT INTO `emerald_cat` VALUES ('62', '戒指', '', '1512394725', '1512394725', '0', '0');
INSERT INTO `emerald_cat` VALUES ('85', '颜色', '', '1512395002', '1512395002', '0', '62');
INSERT INTO `emerald_cat` VALUES ('84', '种水', '', '1512395002', '1512395002', '0', '62');
INSERT INTO `emerald_cat` VALUES ('83', '形态', '', '1512395002', '1512395002', '0', '62');
INSERT INTO `emerald_cat` VALUES ('82', '佩戴者', '', '1512395002', '1512395002', '0', '62');
INSERT INTO `emerald_cat` VALUES ('68', '蛋面', '', '1512394789', '1512394789', '0', '0');
INSERT INTO `emerald_cat` VALUES ('69', '形态', '', '1512394789', '1512394789', '0', '68');
INSERT INTO `emerald_cat` VALUES ('70', '种水', '', '1512394789', '1512394789', '0', '68');
INSERT INTO `emerald_cat` VALUES ('71', '颜色', '', '1512394789', '1512394789', '0', '68');
INSERT INTO `emerald_cat` VALUES ('72', '价格', '', '1512394789', '1512394789', '0', '68');
INSERT INTO `emerald_cat` VALUES ('73', '原石', '', '1512394854', '1512394854', '0', '0');
INSERT INTO `emerald_cat` VALUES ('92', '场口', '', '1512399463', '1512399463', '0', '73');
INSERT INTO `emerald_cat` VALUES ('91', '种水', '', '1512399463', '1512399463', '0', '73');
INSERT INTO `emerald_cat` VALUES ('90', '颜色', '', '1512399462', '1512399462', '0', '73');
INSERT INTO `emerald_cat` VALUES ('89', '价格', '', '1512399462', '1512399462', '0', '73');
INSERT INTO `emerald_cat` VALUES ('86', '价格', '', '1512395002', '1512395002', '0', '62');
INSERT INTO `emerald_cat` VALUES ('87', '手表', '', '1512395021', '1512395021', '0', '0');
INSERT INTO `emerald_cat` VALUES ('88', '类别', '', '1512395021', '1512395021', '0', '87');

-- ----------------------------
-- Table structure for emerald_collect
-- ----------------------------
DROP TABLE IF EXISTS `emerald_collect`;
CREATE TABLE `emerald_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `article_id` int(11) NOT NULL DEFAULT '0' COMMENT '文章',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='收藏';

-- ----------------------------
-- Records of emerald_collect
-- ----------------------------

-- ----------------------------
-- Table structure for emerald_goods
-- ----------------------------
DROP TABLE IF EXISTS `emerald_goods`;
CREATE TABLE `emerald_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `goods_name` varchar(255) NOT NULL DEFAULT '' COMMENT '翡翠名',
  `goods_code` varchar(255) NOT NULL DEFAULT '' COMMENT '翡翠编号',
  `pic` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `video` varchar(255) NOT NULL DEFAULT '' COMMENT '视频',
  `goods_detail` varchar(255) NOT NULL DEFAULT '' COMMENT '商品详细规格参数',
  `price` varchar(255) NOT NULL DEFAULT '' COMMENT '价格',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `is_hot` int(5) NOT NULL DEFAULT '0' COMMENT '是否为热销',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  `cat_id` int(11) NOT NULL COMMENT '分类',
  `agent_id` int(11) NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL DEFAULT '1' COMMENT '库存',
  `status` tinyint(5) NOT NULL DEFAULT '1' COMMENT '商品状态（1上架，0下架）',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT '封面图',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`),
  KEY `agent_id` (`agent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of emerald_goods
-- ----------------------------
INSERT INTO `emerald_goods` VALUES ('6', '越南翡翠', '', '', '', '', '', '0', '0', '1512410638', '1512410638', '0', '36', '0', '1', '1', '');

-- ----------------------------
-- Table structure for emerald_goods_attr
-- ----------------------------
DROP TABLE IF EXISTS `emerald_goods_attr`;
CREATE TABLE `emerald_goods_attr` (
  `goods_id` int(11) NOT NULL DEFAULT '0',
  `attr_id` int(11) NOT NULL DEFAULT '0',
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of emerald_goods_attr
-- ----------------------------
INSERT INTO `emerald_goods_attr` VALUES ('1', '73');
INSERT INTO `emerald_goods_attr` VALUES ('3', '25');
INSERT INTO `emerald_goods_attr` VALUES ('4', '25');
INSERT INTO `emerald_goods_attr` VALUES ('4', '28');
INSERT INTO `emerald_goods_attr` VALUES ('4', '52');
INSERT INTO `emerald_goods_attr` VALUES ('4', '88');
INSERT INTO `emerald_goods_attr` VALUES ('5', '25');
INSERT INTO `emerald_goods_attr` VALUES ('5', '28');
INSERT INTO `emerald_goods_attr` VALUES ('5', '52');
INSERT INTO `emerald_goods_attr` VALUES ('5', '88');
INSERT INTO `emerald_goods_attr` VALUES ('6', '25');
INSERT INTO `emerald_goods_attr` VALUES ('6', '29');
INSERT INTO `emerald_goods_attr` VALUES ('6', '53');
INSERT INTO `emerald_goods_attr` VALUES ('6', '92');

-- ----------------------------
-- Table structure for emerald_history
-- ----------------------------
DROP TABLE IF EXISTS `emerald_history`;
CREATE TABLE `emerald_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `goods_id` int(11) NOT NULL COMMENT '商品',
  `article_id` int(11) NOT NULL COMMENT '文章',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='浏览历史';

-- ----------------------------
-- Records of emerald_history
-- ----------------------------

-- ----------------------------
-- Table structure for emerald_privilege
-- ----------------------------
DROP TABLE IF EXISTS `emerald_privilege`;
CREATE TABLE `emerald_privilege` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `pri_name` varchar(30) NOT NULL DEFAULT '' COMMENT '权限名称',
  `pri_desc` varchar(30) NOT NULL DEFAULT '' COMMENT '权限描述',
  `module_name` varchar(30) NOT NULL DEFAULT '' COMMENT '权限名称',
  `controller` varchar(30) NOT NULL DEFAULT '' COMMENT '控制器名称',
  `action_name` varchar(30) NOT NULL DEFAULT '' COMMENT '方法名称',
  `created_at` int(10) NOT NULL DEFAULT '0',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  `deleted_at` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8 COMMENT='权限表';

-- ----------------------------
-- Records of emerald_privilege
-- ----------------------------
INSERT INTO `emerald_privilege` VALUES ('210', '后台管理员首页', '后台管理员首页', 'Admin', 'Admin', 'index', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('211', '添加管理员页面', '添加管理员', 'Admin', 'Admin', 'add', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('212', '添加操作', '添加操作', 'Admin', 'Admin', 'addOperate', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('213', '修改页面', '修改页面', 'Admin', 'Admin', 'edit', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('214', '修改操作', '修改操作', 'Admin', 'Admin', 'editOperate', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('215', '删除用户', '删除用户', 'Admin', 'Admin', 'delete', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('216', '冻结账户', '', 'Admin', 'Admin', 'frozen', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('217', '代理商列表', '', 'Admin', 'Agent', 'index', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('218', '代理商审核', '', 'Admin', 'Agent', 'editOperate', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('219', '代理商删除', '', 'Admin', 'Agent', 'delete', '1512322613', '1512322613', '0');
INSERT INTO `emerald_privilege` VALUES ('220', '分类列表', '', 'Admin', 'Cat', 'index', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('221', '添加分类页面', '添加分类', 'Admin', 'Cat', 'add', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('222', '添加操作', '', 'Admin', 'Cat', 'addOperate', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('223', '修改页面', '修改页面', 'Admin', 'Cat', 'edit', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('224', '修改操作', '', 'Admin', 'Cat', 'editOperate', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('225', '分类删除', '', 'Admin', 'Cat', 'delete', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('226', '后台首页', '后台首页', 'Admin', 'Index', 'index', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('227', '后台主页', '后台主页', 'Admin', 'Index', 'main', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('228', '权限首页', '权限首页', 'Admin', 'Privilege', 'index', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('229', '刷新权限', '刷新权限', 'Admin', 'Privilege', 'refresh', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('230', '更新添加角色权限', '更新添加角色权限', 'Admin', 'Privilege', 'updateRolePri', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('231', '后台角色首页', '后台角色首页', 'Admin', 'Role', 'index', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('232', '添加角色页面', '添加角色', 'Admin', 'Role', 'add', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('233', '添加操作', '添加操作', 'Admin', 'Role', 'addOperate', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('234', '修改页面', '修改页面', 'Admin', 'Role', 'edit', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('235', '修改操作', '修改操作', 'Admin', 'Role', 'editOperate', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('236', '删除角色', '删除角色', 'Admin', 'Role', 'delete', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('237', '为管理员分配角色列表', '为管理员分配角色', 'Admin', 'Role', 'addUser', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('238', '为管理员分配角色操作', '为管理员分配角色', 'Admin', 'Role', 'addUserOperate', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('239', '分类属性页面', '', 'Admin', 'Attr', 'edit', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('240', '分类属性操作', '', 'Admin', 'Attr', 'editOperate', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('241', '分类列表', '', 'Admin', 'Goods', 'index', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('242', '添加分类页面', '添加分类', 'Admin', 'Goods', 'add', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('243', '添加操作', '', 'Admin', 'Goods', 'addOperate', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('244', '修改页面', '修改页面', 'Admin', 'Goods', 'edit', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('245', '修改操作', '', 'Admin', 'Goods', 'editOperate', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('246', '分类删除', '', 'Admin', 'Goods', 'delete', '1512398913', '1512398913', '0');

-- ----------------------------
-- Table structure for emerald_role
-- ----------------------------
DROP TABLE IF EXISTS `emerald_role`;
CREATE TABLE `emerald_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `created_at` int(10) NOT NULL DEFAULT '0',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  `input_id` int(11) NOT NULL DEFAULT '0' COMMENT '录入人ID',
  `deleted_at` tinyint(5) NOT NULL DEFAULT '0' COMMENT '删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='角色表';

-- ----------------------------
-- Records of emerald_role
-- ----------------------------
INSERT INTO `emerald_role` VALUES ('8', '测试', '1510906883', '1510906883', '0', '0');
INSERT INTO `emerald_role` VALUES ('10', '翡翠管理员', '1512321087', '1512321087', '0', '0');

-- ----------------------------
-- Table structure for emerald_role_pri
-- ----------------------------
DROP TABLE IF EXISTS `emerald_role_pri`;
CREATE TABLE `emerald_role_pri` (
  `pri_id` mediumint(8) unsigned NOT NULL COMMENT '权限Id',
  `role_id` mediumint(8) unsigned NOT NULL COMMENT '角色Id',
  `status` tinyint(5) NOT NULL DEFAULT '0',
  KEY `pri_id` (`pri_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- ----------------------------
-- Records of emerald_role_pri
-- ----------------------------
INSERT INTO `emerald_role_pri` VALUES ('220', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('221', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('222', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('223', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('224', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('225', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('210', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('211', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('212', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('213', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('214', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('215', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('216', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('226', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('227', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('228', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('229', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('230', '10', '0');
INSERT INTO `emerald_role_pri` VALUES ('217', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('218', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('219', '8', '0');

-- ----------------------------
-- Table structure for emerald_user
-- ----------------------------
DROP TABLE IF EXISTS `emerald_user`;
CREATE TABLE `emerald_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `telphone` int(11) NOT NULL DEFAULT '0' COMMENT '手机号',
  `nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '名称',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `email` varchar(255) NOT NULL DEFAULT '',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of emerald_user
-- ----------------------------
