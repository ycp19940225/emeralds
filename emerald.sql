/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : emerald

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-03 18:32:45
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of emerald_admin
-- ----------------------------
INSERT INTO `emerald_admin` VALUES ('1', 'ycp', '447910ff7241c373129b8761cc312c78', '', '', '1510902753', '1510902753', '0', '0', '0', '0', '1');
INSERT INTO `emerald_admin` VALUES ('39', 'test', 'fed6fb05c04e7e31bc5a91b25834281f', '', '', '1510910879', '1510910879', '0', '0', '0', '0', '1');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of emerald_attr
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

-- ----------------------------
-- Records of emerald_cat
-- ----------------------------
INSERT INTO `emerald_cat` VALUES ('16', '轻奢小品', '2017/12/02/iESEzXdPWw3ZvtRzwWlWVNN7WpDV56lo75XXDyaE.jpeg', '1512213553', '1512213553', '0', '0');
INSERT INTO `emerald_cat` VALUES ('17', '南红', '1', '1512213587', '1512285426', '0', '0');
INSERT INTO `emerald_cat` VALUES ('18', '琥珀蜜蜡', '2017/12/03/rBkdf9VpA3k018xvJFk0falLDUJoC0ROqj6hJjNb.jpeg', '1512213605', '1512285874', '0', '0');
INSERT INTO `emerald_cat` VALUES ('36', '挂件', '', '1512293718', '1512293718', '0', '0');
INSERT INTO `emerald_cat` VALUES ('37', '题材', '', '1512293718', '1512293718', '0', '36');
INSERT INTO `emerald_cat` VALUES ('38', '种水', '', '1512293718', '1512293718', '0', '36');
INSERT INTO `emerald_cat` VALUES ('39', '颜色', '', '1512293718', '1512293718', '0', '36');
INSERT INTO `emerald_cat` VALUES ('40', '价格', '', '1512293718', '1512293718', '0', '36');

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
  `goods_code` int(11) NOT NULL COMMENT '翡翠编号',
  `pic` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `video` varchar(255) NOT NULL DEFAULT '' COMMENT '视频',
  `goods_detail` text NOT NULL COMMENT '商品详细规格参数',
  `price` varchar(255) NOT NULL DEFAULT '' COMMENT '价格',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `is_hot` int(5) NOT NULL DEFAULT '0' COMMENT '是否为热销',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL COMMENT '分类',
  `agent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`),
  KEY `agent_id` (`agent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of emerald_goods
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8 COMMENT='权限表';

-- ----------------------------
-- Records of emerald_privilege
-- ----------------------------
INSERT INTO `emerald_privilege` VALUES ('123', '后台管理员首页', '后台管理员首页', 'Admin', 'Admin', 'index', '1510910124', '1510910124', '0');
INSERT INTO `emerald_privilege` VALUES ('124', '添加管理员页面', '添加管理员', 'Admin', 'Admin', 'add', '1510910124', '1510910124', '0');
INSERT INTO `emerald_privilege` VALUES ('125', '添加操作', '添加操作', 'Admin', 'Admin', 'addOperate', '1510910125', '1510910125', '0');
INSERT INTO `emerald_privilege` VALUES ('126', '修改页面', '修改页面', 'Admin', 'Admin', 'edit', '1510910125', '1510910125', '0');
INSERT INTO `emerald_privilege` VALUES ('127', '修改操作', '修改操作', 'Admin', 'Admin', 'editOperate', '1510910125', '1510910125', '0');
INSERT INTO `emerald_privilege` VALUES ('128', '删除用户', '删除用户', 'Admin', 'Admin', 'delete', '1510910126', '1510910126', '0');
INSERT INTO `emerald_privilege` VALUES ('129', '后台首页', '后台首页', 'Admin', 'Index', 'index', '1510910126', '1510910126', '0');
INSERT INTO `emerald_privilege` VALUES ('130', '后台主页', '后台主页', 'Admin', 'Index', 'main', '1510910126', '1510910126', '0');
INSERT INTO `emerald_privilege` VALUES ('131', '权限首页', '权限首页', 'Admin', 'Privilege', 'index', '1510910126', '1510910126', '0');
INSERT INTO `emerald_privilege` VALUES ('132', '刷新权限', '刷新权限', 'Admin', 'Privilege', 'refresh', '1510910127', '1510910127', '0');
INSERT INTO `emerald_privilege` VALUES ('133', '更新添加角色权限', '更新添加角色权限', 'Admin', 'Privilege', 'updateRolePri', '1510910127', '1510910127', '0');
INSERT INTO `emerald_privilege` VALUES ('134', '后台角色首页', '后台角色首页', 'Admin', 'Role', 'index', '1510910127', '1510910127', '0');
INSERT INTO `emerald_privilege` VALUES ('135', '添加角色页面', '添加角色', 'Admin', 'Role', 'add', '1510910128', '1510910128', '0');
INSERT INTO `emerald_privilege` VALUES ('136', '添加操作', '添加操作', 'Admin', 'Role', 'addOperate', '1510910128', '1510910128', '0');
INSERT INTO `emerald_privilege` VALUES ('137', '修改页面', '修改页面', 'Admin', 'Role', 'edit', '1510910129', '1510910129', '0');
INSERT INTO `emerald_privilege` VALUES ('138', '修改操作', '修改操作', 'Admin', 'Role', 'editOperate', '1510910130', '1510910130', '0');
INSERT INTO `emerald_privilege` VALUES ('139', '删除角色', '删除角色', 'Admin', 'Role', 'delete', '1510910131', '1510910131', '0');
INSERT INTO `emerald_privilege` VALUES ('140', '为管理员分配角色列表', '为管理员分配角色', 'Admin', 'Role', 'addUser', '1510910131', '1510910131', '0');
INSERT INTO `emerald_privilege` VALUES ('141', '为管理员分配角色操作', '为管理员分配角色', 'Admin', 'Role', 'addUserOperate', '1510910132', '1510910132', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='角色表';

-- ----------------------------
-- Records of emerald_role
-- ----------------------------
INSERT INTO `emerald_role` VALUES ('8', '测试', '1510906883', '1510906883', '0', '0');

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
INSERT INTO `emerald_role_pri` VALUES ('123', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('124', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('125', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('126', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('127', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('128', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('129', '8', '0');
INSERT INTO `emerald_role_pri` VALUES ('130', '8', '0');

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
