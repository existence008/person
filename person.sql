/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : person

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-02-27 17:41:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for person_admin
-- ----------------------------
DROP TABLE IF EXISTS `person_admin`;
CREATE TABLE `person_admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL COMMENT '用户昵称',
  `admin_pwd` varchar(255) NOT NULL COMMENT '用户密码',
  `admin_status` int(1) NOT NULL DEFAULT '0' COMMENT '管理员账号是否启用',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of person_admin
-- ----------------------------
INSERT INTO `person_admin` VALUES ('1', 'qiqi', 'e10adc3949ba59abbe56e057f20f883e', '1');
INSERT INTO `person_admin` VALUES ('2', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('3', 'é‡Œæ–¯', '123456', '0');
INSERT INTO `person_admin` VALUES ('4', 'é‡Œæ–¯', '123456', '0');
INSERT INTO `person_admin` VALUES ('5', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('6', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('7', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('8', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('9', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('10', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('11', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('12', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('13', '里斯', '123456', '0');
INSERT INTO `person_admin` VALUES ('14', '里斯', '123456', '0');

-- ----------------------------
-- Table structure for person_bill
-- ----------------------------
DROP TABLE IF EXISTS `person_bill`;
CREATE TABLE `person_bill` (
  `type_id` varchar(10) NOT NULL COMMENT '消费类型(可多个类型)',
  `bill_title` text NOT NULL COMMENT '账单标题',
  `bill_money` decimal(10,2) DEFAULT NULL COMMENT '消费金额',
  `bill_id` int(3) NOT NULL AUTO_INCREMENT COMMENT '账单编号',
  `bill_desc` text COMMENT '账单描述',
  `bill_creatime` varchar(255) DEFAULT NULL COMMENT '消费时间',
  `bill_addtime` varchar(255) DEFAULT NULL COMMENT '数据添加时间',
  `bill_status` int(1) NOT NULL DEFAULT '1' COMMENT '数据是否显示',
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of person_bill
-- ----------------------------
INSERT INTO `person_bill` VALUES ('1', 'asdasd', null, '1', 'asdf', '2017-02-26 22:25:16', '2021-3-3', '1');
INSERT INTO `person_bill` VALUES ('1', '保障', null, '2', '生活消费', '2017-02-26 22:46:43', '2021年-3月-4日', '1');
INSERT INTO `person_bill` VALUES ('1', 'dfsdf', null, '3', '**asdfasdfasdfasdf**', '2017-02-27 10:15:28', '2021年-3月-5日', '1');
INSERT INTO `person_bill` VALUES ('1', 'dfsdf', null, '4', '**asdfasdfasdfasdf**', '2017-02-27 10:15:51', '2021年-3月-5日', '1');
INSERT INTO `person_bill` VALUES ('1', '午饭', '23.00', '5', '中午吃饭消费', '2017-02-27 16:01:29', '2021年-3月-3日', '1');
INSERT INTO `person_bill` VALUES ('1', '阿斯顿', '23.32', '6', '阿斯顿发生', '2017-02-27 16:02:19', '2022年-3月-4日', '1');
INSERT INTO `person_bill` VALUES ('1', '手动阀手动阀', '23.30', '7', '![输入图片说明](https://image.baidu.com/search/detail?ct=503316480&z=undefined&tn=baiduimagedetail&ipn=d&word=%E7%99%BE%E5%BA%A6%E5%9B%BE%E7%89%87&step_word=&ie=utf-8&in=&cl=2&lm=-1&st=undefined&cs=1246824636,1580964257&os=1564911719,2352125033&simid=3480586153,481801546&pn=2&rn=1&di=111524107090&ln=1937&fr=&fmq=1488186058641_R&fm=&ic=undefined&s=undefined&se=&sme=&tab=0&width=&height=&face=undefined&is=0,0&istype=0&ist=&jit=&bdtype=0&spn=0&pi=0&gsm=0&hs=2&objurl=http%3A%2F%2Fa1.att.hudong.com%2F74%2F70%2F20300543008748142258701127927_s.jpg&rpstart=0&rpnum=0&adpicid=0 \"在这里输入图片标题\")', '2017-02-27 17:01:40', '2018年-5月-7日', '1');

-- ----------------------------
-- Table structure for person_type
-- ----------------------------
DROP TABLE IF EXISTS `person_type`;
CREATE TABLE `person_type` (
  `type_id` int(3) NOT NULL AUTO_INCREMENT COMMENT '消费类型id',
  `type_name` varchar(255) NOT NULL COMMENT '消费类型名称',
  `type_status` int(1) NOT NULL DEFAULT '0' COMMENT '是否启用该类型',
  `type_show` int(1) DEFAULT '1' COMMENT '数据状态',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of person_type
-- ----------------------------
INSERT INTO `person_type` VALUES ('1', '撒地方333', '0', '1');
INSERT INTO `person_type` VALUES ('2', '阿斯蒂芬', '0', '1');
INSERT INTO `person_type` VALUES ('3', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('4', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('5', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('6', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('7', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('8', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('9', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('10', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('11', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('12', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('13', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('14', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('15', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('16', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('17', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('18', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('19', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('20', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('21', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('22', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('23', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('24', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('25', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('26', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('27', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('28', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('29', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('30', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('31', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('32', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('33', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('34', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('35', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('36', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('37', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('38', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('39', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('40', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('41', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('42', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('43', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('44', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('45', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('46', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('47', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('48', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('49', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('50', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('51', '里斯', '0', '1');
INSERT INTO `person_type` VALUES ('52', '里斯', '0', '1');
