/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : emerald

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-08 01:53:40
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
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of emerald_attr
-- ----------------------------
INSERT INTO `emerald_attr` VALUES ('122', '玻璃种', '', '1512661807', '1512663630', '1', '123');
INSERT INTO `emerald_attr` VALUES ('130', '观音', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('131', '佛', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('132', '貔貅', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('133', '如意', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('134', '福瓜', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('135', '平安扣', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('136', '叶子', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('137', '财豆', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('138', '路路通', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('139', '白菜', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('140', '葫芦', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('141', '关公', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('142', '生肖', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('143', '无事牌', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('144', '龙凤牌', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('145', '瑞兽', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('146', '人物', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('147', '节节高', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('148', '金蝉', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('149', '富贵', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('150', '花鸟鱼', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('151', '福禄寿', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('152', '佛手', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('153', '其他', '', '1512666350', '1512666350', '0', '122');
INSERT INTO `emerald_attr` VALUES ('154', '玻璃种', '', '1512666362', '1512666362', '0', '123');
INSERT INTO `emerald_attr` VALUES ('155', '高冰种', '', '1512666362', '1512666362', '0', '123');
INSERT INTO `emerald_attr` VALUES ('156', '冰种', '', '1512666362', '1512666362', '0', '123');
INSERT INTO `emerald_attr` VALUES ('157', '冰糯种', '', '1512666362', '1512666362', '0', '123');
INSERT INTO `emerald_attr` VALUES ('158', '糯种', '', '1512666362', '1512666362', '0', '123');
INSERT INTO `emerald_attr` VALUES ('159', '豆种', '', '1512666362', '1512666362', '0', '123');
INSERT INTO `emerald_attr` VALUES ('160', '浓阳绿', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('161', '淡浅绿', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('162', '飘绿', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('163', '晴水', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('164', '蓝水', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('165', '飘花', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('166', '紫罗兰', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('167', '紫绿', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('168', '红黄翡', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('169', '多彩', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('170', '墨翠', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('171', '干花青', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('172', '油青', '', '1512666371', '1512666371', '0', '124');
INSERT INTO `emerald_attr` VALUES ('173', '0-3千', '', '1512666379', '1512666379', '0', '125');
INSERT INTO `emerald_attr` VALUES ('174', '3千-8千', '', '1512666379', '1512666379', '0', '125');
INSERT INTO `emerald_attr` VALUES ('175', '8千-1.5万', '', '1512666379', '1512666379', '0', '125');
INSERT INTO `emerald_attr` VALUES ('176', '1.5-3万', '', '1512666379', '1512666379', '0', '125');
INSERT INTO `emerald_attr` VALUES ('177', '3-5万', '', '1512666379', '1512666379', '0', '125');
INSERT INTO `emerald_attr` VALUES ('178', '5万-10万', '', '1512666379', '1512666379', '0', '125');
INSERT INTO `emerald_attr` VALUES ('179', '10以上', '', '1512666379', '1512666379', '0', '125');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

-- ----------------------------
-- Records of emerald_cat
-- ----------------------------
INSERT INTO `emerald_cat` VALUES ('16', '轻奢小品', '2017/12/02/iESEzXdPWw3ZvtRzwWlWVNN7WpDV56lo75XXDyaE.jpeg', '1512213553', '1512320267', '0');
INSERT INTO `emerald_cat` VALUES ('36', '挂件', '', '1512293718', '1512293718', '0');
INSERT INTO `emerald_cat` VALUES ('41', '耳钉/坠', '', '1512317676', '1512317676', '0');
INSERT INTO `emerald_cat` VALUES ('62', '戒指', '', '1512394725', '1512662145', '0');
INSERT INTO `emerald_cat` VALUES ('87', '手表', '', '1512395021', '1512662131', '0');

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
  `goods_detail` text NOT NULL COMMENT '商品详细规格参数',
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of emerald_goods
-- ----------------------------
INSERT INTO `emerald_goods` VALUES ('7', '测试', 'LY1512573252', 'goods_pic/2017-12-06/exgfNlPYHcOSadWMqvBLTqGlEfmanyytFQqif7BS.jpeg,goods_pic/2017-12-06/PT8SKemSuVAHm1f69vt5pPnIx579L90eSLFI1tOY.jpeg,goods_pic/2017-12-06/pWtsrgWyfty12YMdGDG0O9iFhEU3JhiaATSkzW2m.jpeg', 'file\\2017-12\\ef0f9ba5e8dbe06a8e1a85ab44b57bdf.xlb', '前不久召开的中国共产党第十九次全国代表大会制定了新时代中国特色社会主义的行动纲领和发展蓝图。我们将坚持以人民为中心的发展思想，深入贯彻新发展理念，建设现代化经济体<span style=\"text-decoration-line: underline;\">系；全面深化改革，大力激发全社会创造力，持续释放发展活力；发展更高层次的开放型经济，深入推进“一带一路”建设，推动形成全面开放新格局。展望未来，中国发展动力更足、人民获得感更多、同世界互动更深，将为全球发展创造更多机遇、作出更大贡献。</span></span>\r\n\r\n                                    \" />', '10000', '0', '0', '1512573252', '1512573252', '0', '36', '0', '1', '1', 'logo/2017-12-06/k56OzehwICWq0nOFVJaquffhlxmGCwDiy7xnrGO3.jpeg');
INSERT INTO `emerald_goods` VALUES ('10', '越南翡翠', 'LY1512581987', 'goods_pic/2017-12-07/xYDxA0yTrSeMMO3Ca6gbY0iMEddUwoxDaYFVbiHT.jpeg,goods_pic/2017-12-07/IcNxW8cD0ZPLHiu8VuULEiqcPnCsKpqtya20eO5d.jpeg', 'file\\2017-12\\74ffc976729fae029d6907b460e1428e.xlb', '', '9999', '0', '0', '1512581987', '1512581987', '0', '36', '0', '1', '1', 'logo/2017-12-07/q42Nff10vmKb2f4SGROykodSxWxK0nqyIJ5r9EQP.jpeg');
INSERT INTO `emerald_goods` VALUES ('13', '黄金戒指', 'LY1512668303', 'goods_pic/2017-12-08/NEhmFOn9POXjpOInNRwx87c8y6Rew7NrBhr6zVMk.jpeg,goods_pic/2017-12-08/aZS3awKzLH8irkaBfSjud27dNuqu9s0UOPPUTmK6.jpeg,goods_pic/2017-12-08/wTq8nJI4lomhciM8w3YKCyUYqUqkRFzGEOUJnMG0.jpeg', 'file\\2017-12\\921ba475d8caec2a988b052ba5fa3c17.xlb', '', '10000', '0', '0', '1512668303', '1512668303', '0', '36', '0', '1', '1', 'logo/2017-12-08/Lz7ROrAweSTG1vLn0fvAx2lwdvIkbplVNEoUJo4f.jpeg');

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
INSERT INTO `emerald_goods_attr` VALUES ('7', '26');
INSERT INTO `emerald_goods_attr` VALUES ('7', '29');
INSERT INTO `emerald_goods_attr` VALUES ('7', '53');
INSERT INTO `emerald_goods_attr` VALUES ('7', '87');
INSERT INTO `emerald_goods_attr` VALUES ('8', '100');
INSERT INTO `emerald_goods_attr` VALUES ('8', '31');
INSERT INTO `emerald_goods_attr` VALUES ('8', '55');
INSERT INTO `emerald_goods_attr` VALUES ('8', '95');
INSERT INTO `emerald_goods_attr` VALUES ('9', '100');
INSERT INTO `emerald_goods_attr` VALUES ('9', '31');
INSERT INTO `emerald_goods_attr` VALUES ('9', '55');
INSERT INTO `emerald_goods_attr` VALUES ('9', '95');
INSERT INTO `emerald_goods_attr` VALUES ('10', '100');
INSERT INTO `emerald_goods_attr` VALUES ('10', '31');
INSERT INTO `emerald_goods_attr` VALUES ('10', '55');
INSERT INTO `emerald_goods_attr` VALUES ('10', '95');
INSERT INTO `emerald_goods_attr` VALUES ('11', '131');
INSERT INTO `emerald_goods_attr` VALUES ('11', '155');
INSERT INTO `emerald_goods_attr` VALUES ('11', '161');
INSERT INTO `emerald_goods_attr` VALUES ('11', '175');
INSERT INTO `emerald_goods_attr` VALUES ('12', '131');
INSERT INTO `emerald_goods_attr` VALUES ('12', '155');
INSERT INTO `emerald_goods_attr` VALUES ('12', '161');
INSERT INTO `emerald_goods_attr` VALUES ('12', '175');
INSERT INTO `emerald_goods_attr` VALUES ('13', '131');
INSERT INTO `emerald_goods_attr` VALUES ('13', '155');
INSERT INTO `emerald_goods_attr` VALUES ('13', '161');
INSERT INTO `emerald_goods_attr` VALUES ('13', '175');
INSERT INTO `emerald_goods_attr` VALUES ('14', '131');
INSERT INTO `emerald_goods_attr` VALUES ('14', '155');
INSERT INTO `emerald_goods_attr` VALUES ('14', '161');
INSERT INTO `emerald_goods_attr` VALUES ('14', '175');
INSERT INTO `emerald_goods_attr` VALUES ('15', '131');
INSERT INTO `emerald_goods_attr` VALUES ('15', '155');
INSERT INTO `emerald_goods_attr` VALUES ('15', '161');
INSERT INTO `emerald_goods_attr` VALUES ('15', '175');
INSERT INTO `emerald_goods_attr` VALUES ('16', '131');
INSERT INTO `emerald_goods_attr` VALUES ('16', '155');
INSERT INTO `emerald_goods_attr` VALUES ('16', '161');
INSERT INTO `emerald_goods_attr` VALUES ('16', '175');
INSERT INTO `emerald_goods_attr` VALUES ('17', '131');
INSERT INTO `emerald_goods_attr` VALUES ('17', '155');
INSERT INTO `emerald_goods_attr` VALUES ('17', '161');
INSERT INTO `emerald_goods_attr` VALUES ('17', '175');
INSERT INTO `emerald_goods_attr` VALUES ('18', '131');
INSERT INTO `emerald_goods_attr` VALUES ('18', '155');
INSERT INTO `emerald_goods_attr` VALUES ('18', '161');
INSERT INTO `emerald_goods_attr` VALUES ('18', '175');

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
-- Table structure for emerald_type
-- ----------------------------
DROP TABLE IF EXISTS `emerald_type`;
CREATE TABLE `emerald_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `type_name` varchar(255) NOT NULL DEFAULT '' COMMENT '属性名',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of emerald_type
-- ----------------------------
INSERT INTO `emerald_type` VALUES ('122', '题材', '36', '1512656627', '1512656627', '0');
INSERT INTO `emerald_type` VALUES ('123', '种水', '36', '1512656670', '1512656670', '0');
INSERT INTO `emerald_type` VALUES ('124', '颜色', '36', '1512656719', '1512656719', '0');
INSERT INTO `emerald_type` VALUES ('125', '价格', '36', '1512656805', '1512656805', '0');
INSERT INTO `emerald_type` VALUES ('126', '种水', '16', '1512656883', '1512662246', '0');
INSERT INTO `emerald_type` VALUES ('127', '种水', '41', '1512666195', '1512666195', '0');
INSERT INTO `emerald_type` VALUES ('128', '颜色', '41', '1512666195', '1512666195', '0');
INSERT INTO `emerald_type` VALUES ('129', '价格', '41', '1512666195', '1512666195', '0');
INSERT INTO `emerald_type` VALUES ('130', '佩戴者', '62', '1512666302', '1512666302', '0');
INSERT INTO `emerald_type` VALUES ('131', '形态', '62', '1512666302', '1512666302', '0');
INSERT INTO `emerald_type` VALUES ('132', '种水', '62', '1512666302', '1512666302', '0');
INSERT INTO `emerald_type` VALUES ('133', '颜色', '62', '1512666302', '1512666302', '0');
INSERT INTO `emerald_type` VALUES ('134', '价格', '62', '1512666302', '1512666302', '0');

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
