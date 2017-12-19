/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : emerald

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-19 18:47:08
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
  `agent_pic` varchar(255) NOT NULL COMMENT 'qq账号',
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
INSERT INTO `emerald_agent` VALUES ('4', 'LYFC15114263421', '杨春坪', '18983663382', '123456789', '123456789wx', '翡翠，珠宝', '123456789', '123456789alpay', '', '1', '1511426342', '1511429137', '0', '123456789', '1');

-- ----------------------------
-- Table structure for emerald_article
-- ----------------------------
DROP TABLE IF EXISTS `emerald_article`;
CREATE TABLE `emerald_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `intro` varchar(255) NOT NULL DEFAULT '' COMMENT '简介',
  `content` text NOT NULL COMMENT '内容',
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `input_id` int(10) NOT NULL DEFAULT '0' COMMENT '录入人员Id',
  `deleted_at` tinyint(5) NOT NULL DEFAULT '0',
  `views` int(10) NOT NULL DEFAULT '0' COMMENT '访问次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='文章';

-- ----------------------------
-- Records of emerald_article
-- ----------------------------
INSERT INTO `emerald_article` VALUES ('1', '和田玉籽2', '和田玉籽料的天然外形，是任何人工所无法模仿的。', '<p>&nbsp;</p><h2 style=\"margin: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 128, 0); text-indent: 5px; padding: 10px 0px; font-size: 1.2rem; font-family: \">一、和田玉籽料的天然外形，是任何人工所无法模仿的。</h2><p style=\"margin-bottom: 20px; line-height: 28px; color: rgb(0, 0, 0); font-family: \">天然籽料的外形，是圆滑而不滚圆的。而纯粹是滚圆形状的籽料，基本上都是假冒的。尤其是和田玉籽料上的天然解理，也就是人们所说的裂口，是和田玉在形成过程中所必然出现的。而这些解理，会随着同人体接触而逐渐愈合。因此那些外形完美，没有解理，价钱便宜的籽料，一般来说，就是假的。</p><p style=\"margin-bottom: 20px; line-height: 28px; color: rgb(0, 0, 0); font-family: \"><img width=\"100%\" src=\"http://feicui.2fav.cn/fav258/images/13.jpg\" style=\"max-width: 100%;\"/></p><h2 style=\"margin: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 128, 0); text-indent: 5px; padding: 10px 0px; font-size: 1.2rem; font-family: \">二、就是从籽料的皮色来入手。</h2><p style=\"margin-bottom: 20px; line-height: 28px; color: rgb(0, 0, 0); font-family: \">真籽料是在河水中经千万年冲刷，自然受沁，只会在质地软松的地方沁入颜色，在有裂纹的地方颜色比较深。这种皮色是相当的自然，也就是活皮。它的颜色浸入玉内有层次感，皮和里面的玉感觉是一致的。皮上的颜色应是由深入浅，裂隙上的颜色应是由浅到深。不过真正好的籽玉是不长皮的，即使是有，也是星星点点，或在细小的裂子里。那活皮的色是从玉里透出来的，真皮不管它是什么颜色玉工雕玉时琢下来的玉粉都是白色的。而染色的假皮则浮于表面、色凝凹处，磨下的玉粉是带色的。和田玉的皮色是次生的，一般厚度小于一毫米。2</p><p>&nbsp; &nbsp; &nbsp; <img src=\"http://www.emerald.com/assets/admin/js/extend/umeditor/php/upload/20171219/15136776383298.jpg\"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/></p>', '2', '1513677149', '1513677643', '0', '0', '0');

-- ----------------------------
-- Table structure for emerald_article_cat
-- ----------------------------
DROP TABLE IF EXISTS `emerald_article_cat`;
CREATE TABLE `emerald_article_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `cat_name` varchar(255) NOT NULL DEFAULT '' COMMENT '分类名',
  `intro` varchar(255) NOT NULL DEFAULT '' COMMENT '分类介绍',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `deleted_at` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='文章分类表';

-- ----------------------------
-- Records of emerald_article_cat
-- ----------------------------
INSERT INTO `emerald_article_cat` VALUES ('2', '企业动向', '收集最新企业动向', '1513398620', '1513398647', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

-- ----------------------------
-- Records of emerald_cat
-- ----------------------------
INSERT INTO `emerald_cat` VALUES ('114', '挂件', '', '1513327715', '1513327715', '0');

-- ----------------------------
-- Table structure for emerald_cat_type
-- ----------------------------
DROP TABLE IF EXISTS `emerald_cat_type`;
CREATE TABLE `emerald_cat_type` (
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of emerald_cat_type
-- ----------------------------
INSERT INTO `emerald_cat_type` VALUES ('114', '138');
INSERT INTO `emerald_cat_type` VALUES ('114', '136');
INSERT INTO `emerald_cat_type` VALUES ('114', '135');
INSERT INTO `emerald_cat_type` VALUES ('114', '137');

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
INSERT INTO `emerald_goods` VALUES ('7', '测试', 'LY1512573252', 'goods_pic/2017-12-06/exgfNlPYHcOSadWMqvBLTqGlEfmanyytFQqif7BS.jpeg,goods_pic/2017-12-06/PT8SKemSuVAHm1f69vt5pPnIx579L90eSLFI1tOY.jpeg,goods_pic/2017-12-06/pWtsrgWyfty12YMdGDG0O9iFhEU3JhiaATSkzW2m.jpeg', 'file\\2017-12\\ef0f9ba5e8dbe06a8e1a85ab44b57bdf.xlb', '前不久召开的中国共产党第十九次全国代表大会制定了新时代中国特色社会主义的行动纲领和发展蓝图。我们将坚持以人民为中心的发展思想，深入贯彻新发展理念，建设现代化经济体<span style=\"text-decoration-line: underline;\">系；全面深化改革，大力激发全社会创造力，持续释放发展活力；发展更高层次的开放型经济，深入推进“一带一路”建设，推动形成全面开放新格局。展望未来，中国发展动力更足、人民获得感更多、同世界互动更深，将为全球发展创造更多机遇、作出更大贡献。</span></span>\r\n\r\n                                    \" />', '10000', '0', '0', '1512573252', '1512573252', '1', '36', '0', '1', '1', 'logo/2017-12-06/k56OzehwICWq0nOFVJaquffhlxmGCwDiy7xnrGO3.jpeg');
INSERT INTO `emerald_goods` VALUES ('10', '越南翡翠', 'LY1512581987', 'goods_pic/2017-12-07/xYDxA0yTrSeMMO3Ca6gbY0iMEddUwoxDaYFVbiHT.jpeg,goods_pic/2017-12-07/IcNxW8cD0ZPLHiu8VuULEiqcPnCsKpqtya20eO5d.jpeg', 'file\\2017-12\\74ffc976729fae029d6907b460e1428e.xlb', '', '9999', '0', '0', '1512581987', '1512581987', '1', '36', '0', '1', '1', 'logo/2017-12-07/q42Nff10vmKb2f4SGROykodSxWxK0nqyIJ5r9EQP.jpeg');
INSERT INTO `emerald_goods` VALUES ('13', '黄金戒指', 'LY1512668303', 'goods_pic/2017-12-08/NEhmFOn9POXjpOInNRwx87c8y6Rew7NrBhr6zVMk.jpeg,goods_pic/2017-12-08/aZS3awKzLH8irkaBfSjud27dNuqu9s0UOPPUTmK6.jpeg,goods_pic/2017-12-08/wTq8nJI4lomhciM8w3YKCyUYqUqkRFzGEOUJnMG0.jpeg', 'file\\2017-12\\921ba475d8caec2a988b052ba5fa3c17.xlb', '', '10000', '0', '0', '1512668303', '1512668303', '1', '36', '0', '1', '1', 'logo/2017-12-08/Lz7ROrAweSTG1vLn0fvAx2lwdvIkbplVNEoUJo4f.jpeg');

-- ----------------------------
-- Table structure for emerald_goods_type
-- ----------------------------
DROP TABLE IF EXISTS `emerald_goods_type`;
CREATE TABLE `emerald_goods_type` (
  `goods_id` int(11) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL DEFAULT '0',
  `type_val` varchar(255) NOT NULL DEFAULT '',
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of emerald_goods_type
-- ----------------------------
INSERT INTO `emerald_goods_type` VALUES ('1', '73', '');
INSERT INTO `emerald_goods_type` VALUES ('3', '25', '');
INSERT INTO `emerald_goods_type` VALUES ('4', '25', '');
INSERT INTO `emerald_goods_type` VALUES ('4', '28', '');
INSERT INTO `emerald_goods_type` VALUES ('4', '52', '');
INSERT INTO `emerald_goods_type` VALUES ('4', '88', '');
INSERT INTO `emerald_goods_type` VALUES ('5', '25', '');
INSERT INTO `emerald_goods_type` VALUES ('5', '28', '');
INSERT INTO `emerald_goods_type` VALUES ('5', '52', '');
INSERT INTO `emerald_goods_type` VALUES ('5', '88', '');
INSERT INTO `emerald_goods_type` VALUES ('6', '25', '');
INSERT INTO `emerald_goods_type` VALUES ('6', '29', '');
INSERT INTO `emerald_goods_type` VALUES ('6', '53', '');
INSERT INTO `emerald_goods_type` VALUES ('6', '92', '');
INSERT INTO `emerald_goods_type` VALUES ('7', '26', '');
INSERT INTO `emerald_goods_type` VALUES ('7', '29', '');
INSERT INTO `emerald_goods_type` VALUES ('7', '53', '');
INSERT INTO `emerald_goods_type` VALUES ('7', '87', '');
INSERT INTO `emerald_goods_type` VALUES ('8', '100', '');
INSERT INTO `emerald_goods_type` VALUES ('8', '31', '');
INSERT INTO `emerald_goods_type` VALUES ('8', '55', '');
INSERT INTO `emerald_goods_type` VALUES ('8', '95', '');
INSERT INTO `emerald_goods_type` VALUES ('9', '100', '');
INSERT INTO `emerald_goods_type` VALUES ('9', '31', '');
INSERT INTO `emerald_goods_type` VALUES ('9', '55', '');
INSERT INTO `emerald_goods_type` VALUES ('9', '95', '');
INSERT INTO `emerald_goods_type` VALUES ('10', '100', '');
INSERT INTO `emerald_goods_type` VALUES ('10', '31', '');
INSERT INTO `emerald_goods_type` VALUES ('10', '55', '');
INSERT INTO `emerald_goods_type` VALUES ('10', '95', '');
INSERT INTO `emerald_goods_type` VALUES ('11', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('11', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('11', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('11', '175', '');
INSERT INTO `emerald_goods_type` VALUES ('12', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('12', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('12', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('12', '175', '');
INSERT INTO `emerald_goods_type` VALUES ('13', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('13', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('13', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('13', '175', '');
INSERT INTO `emerald_goods_type` VALUES ('14', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('14', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('14', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('14', '175', '');
INSERT INTO `emerald_goods_type` VALUES ('15', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('15', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('15', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('15', '175', '');
INSERT INTO `emerald_goods_type` VALUES ('16', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('16', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('16', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('16', '175', '');
INSERT INTO `emerald_goods_type` VALUES ('17', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('17', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('17', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('17', '175', '');
INSERT INTO `emerald_goods_type` VALUES ('18', '131', '');
INSERT INTO `emerald_goods_type` VALUES ('18', '155', '');
INSERT INTO `emerald_goods_type` VALUES ('18', '161', '');
INSERT INTO `emerald_goods_type` VALUES ('18', '175', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8 COMMENT='权限表';

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
INSERT INTO `emerald_privilege` VALUES ('220', '品类列表', '', 'Admin', 'Cat', 'index', '1512322614', '1513399382', '0');
INSERT INTO `emerald_privilege` VALUES ('221', '添加品类页面', '添加分类', 'Admin', 'Cat', 'add', '1512322614', '1513399382', '0');
INSERT INTO `emerald_privilege` VALUES ('222', '添加操作', '', 'Admin', 'Cat', 'addOperate', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('223', '修改页面', '修改页面', 'Admin', 'Cat', 'edit', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('224', '修改操作', '', 'Admin', 'Cat', 'editOperate', '1512322614', '1512322614', '0');
INSERT INTO `emerald_privilege` VALUES ('225', '品类删除', '', 'Admin', 'Cat', 'delete', '1512322614', '1513399383', '0');
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
INSERT INTO `emerald_privilege` VALUES ('241', '翡翠列表', '', 'Admin', 'Goods', 'index', '1512398912', '1513399384', '0');
INSERT INTO `emerald_privilege` VALUES ('242', '添加翡翠页面', '添加翡翠', 'Admin', 'Goods', 'add', '1512398912', '1513399384', '0');
INSERT INTO `emerald_privilege` VALUES ('243', '添加操作', '', 'Admin', 'Goods', 'addOperate', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('244', '修改页面', '修改页面', 'Admin', 'Goods', 'edit', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('245', '修改操作', '', 'Admin', 'Goods', 'editOperate', '1512398912', '1512398912', '0');
INSERT INTO `emerald_privilege` VALUES ('246', '商品删除', '', 'Admin', 'Goods', 'delete', '1512398913', '1513399384', '0');
INSERT INTO `emerald_privilege` VALUES ('247', '文章分类列表', '', 'Admin', 'ArticleCat', 'index', '1513399377', '1513399377', '0');
INSERT INTO `emerald_privilege` VALUES ('248', '添加文章分类页面', '添加分类', 'Admin', 'ArticleCat', 'add', '1513399378', '1513399378', '0');
INSERT INTO `emerald_privilege` VALUES ('249', '添加操作', '', 'Admin', 'ArticleCat', 'addOperate', '1513399378', '1513399378', '0');
INSERT INTO `emerald_privilege` VALUES ('250', '修改页面', '修改页面', 'Admin', 'ArticleCat', 'edit', '1513399378', '1513399378', '0');
INSERT INTO `emerald_privilege` VALUES ('251', '修改操作', '', 'Admin', 'ArticleCat', 'editOperate', '1513399378', '1513399378', '0');
INSERT INTO `emerald_privilege` VALUES ('252', '文章分类删除', '', 'Admin', 'ArticleCat', 'delete', '1513399379', '1513399379', '0');
INSERT INTO `emerald_privilege` VALUES ('253', '文章列表', '', 'Admin', 'Article', 'index', '1513399379', '1513399379', '0');
INSERT INTO `emerald_privilege` VALUES ('254', '添加文章页面', '添加分类', 'Admin', 'Article', 'add', '1513399379', '1513399379', '0');
INSERT INTO `emerald_privilege` VALUES ('255', '添加操作', '', 'Admin', 'Article', 'addOperate', '1513399379', '1513399379', '0');
INSERT INTO `emerald_privilege` VALUES ('256', '修改页面', '修改页面', 'Admin', 'Article', 'edit', '1513399380', '1513399380', '0');
INSERT INTO `emerald_privilege` VALUES ('257', '修改操作', '', 'Admin', 'Article', 'editOperate', '1513399380', '1513399380', '0');
INSERT INTO `emerald_privilege` VALUES ('258', '文章删除', '', 'Admin', 'Article', 'delete', '1513399380', '1513399380', '0');
INSERT INTO `emerald_privilege` VALUES ('265', '获取类型属性', '', 'Admin', 'Cat', 'getType', '1513399383', '1513399383', '0');
INSERT INTO `emerald_privilege` VALUES ('266', '上传翡翠相册', '', 'Admin', 'Goods', 'uploadImg', '1513399385', '1513399385', '0');
INSERT INTO `emerald_privilege` VALUES ('267', '轮播图首页', '', 'Admin', 'Slide', 'index', '1513399386', '1513399386', '0');
INSERT INTO `emerald_privilege` VALUES ('268', '添加轮播图页面', '添加轮播图', 'Admin', 'Slide', 'add', '1513399387', '1513399387', '0');
INSERT INTO `emerald_privilege` VALUES ('269', '添加轮播图操作', '', 'Admin', 'Slide', 'addOperate', '1513399387', '1513399387', '0');
INSERT INTO `emerald_privilege` VALUES ('270', '修改页面', '修改页面', 'Admin', 'Slide', 'edit', '1513399387', '1513399387', '0');
INSERT INTO `emerald_privilege` VALUES ('271', '修改操作', '修改操作', 'Admin', 'Slide', 'editOperate', '1513399387', '1513399387', '0');
INSERT INTO `emerald_privilege` VALUES ('272', '删除轮播图', '删除轮播图', 'Admin', 'Slide', 'delete', '1513399388', '1513399388', '0');
INSERT INTO `emerald_privilege` VALUES ('273', '类型首页', '', 'Admin', 'Type', 'index', '1513399388', '1513399388', '0');
INSERT INTO `emerald_privilege` VALUES ('274', '添加类型页面', '添加类型', 'Admin', 'Type', 'add', '1513399388', '1513399388', '0');
INSERT INTO `emerald_privilege` VALUES ('275', '添加类型操作', '', 'Admin', 'Type', 'addOperate', '1513399388', '1513399388', '0');
INSERT INTO `emerald_privilege` VALUES ('276', '修改页面', '修改页面', 'Admin', 'Type', 'edit', '1513399389', '1513399389', '0');
INSERT INTO `emerald_privilege` VALUES ('277', '修改操作', '修改操作', 'Admin', 'Type', 'editOperate', '1513399389', '1513399389', '0');
INSERT INTO `emerald_privilege` VALUES ('278', '删除类型', '删除类型', 'Admin', 'Type', 'delete', '1513399389', '1513399389', '0');
INSERT INTO `emerald_privilege` VALUES ('279', '批量添加分类类型页面', '', 'Admin', 'Type', 'addBatch', '1513399389', '1513399389', '0');
INSERT INTO `emerald_privilege` VALUES ('280', '批量添加分类类型操作', '', 'Admin', 'Type', 'addBatchOperate', '1513399390', '1513399390', '0');

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
-- Table structure for emerald_slide
-- ----------------------------
DROP TABLE IF EXISTS `emerald_slide`;
CREATE TABLE `emerald_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pic` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `deleted_at` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='浏览历史';

-- ----------------------------
-- Records of emerald_slide
-- ----------------------------
INSERT INTO `emerald_slide` VALUES ('5', 'slide/2017-12-19/tccsb64IwExYYNioUoz3JSJBFDssbghuBLJX38Bx.jpeg', 'type/index', '1513680004', '1513680242', '0');

-- ----------------------------
-- Table structure for emerald_type
-- ----------------------------
DROP TABLE IF EXISTS `emerald_type`;
CREATE TABLE `emerald_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `type_name` varchar(255) NOT NULL DEFAULT '' COMMENT '属性名',
  `type_val` varchar(255) NOT NULL DEFAULT '',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `deleted_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of emerald_type
-- ----------------------------
INSERT INTO `emerald_type` VALUES ('136', '种水1', '玻璃种、高冰种、冰种、冰糯种、糯种、豆种', '1513326000', '1513326000', '0');
INSERT INTO `emerald_type` VALUES ('135', '题材1', '观音、佛、貔貅、如意、福瓜、平安扣、叶子、财豆、路路通、白菜、葫芦、关公、生肖、无事牌、龙凤牌、瑞兽、人物、节节高、金蝉、富贵、花鸟鱼、福禄寿、佛手、其他', '1513323909', '1513325965', '0');
INSERT INTO `emerald_type` VALUES ('137', '颜色1', '浓阳绿、淡浅绿、飘绿、晴水、蓝水、飘花、紫罗兰、紫绿、红黄翡、多彩、墨翠、干花青、油青', '1513326019', '1513326019', '0');
INSERT INTO `emerald_type` VALUES ('138', '价格1', '0-3千、3千-8千、8千-1.5万、1.5-3万、3-5万、5万-10万、10以上', '1513326034', '1513326034', '0');
INSERT INTO `emerald_type` VALUES ('139', '', '', '1513678671', '1513678671', '0');

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
