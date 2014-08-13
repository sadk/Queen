/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50613
Source Host           : localhost:3306
Source Database       : borg

Target Server Type    : MYSQL
Target Server Version : 50613
File Encoding         : 65001

Date: 2014-08-14 01:48:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `db_data_request`
-- ----------------------------
DROP TABLE IF EXISTS `db_data_request`;
CREATE TABLE `db_data_request` (
  `rid` char(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL COMMENT 'Request ID',
  `data` mediumblob NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_data_request
-- ----------------------------

-- ----------------------------
-- Table structure for `db_data_response`
-- ----------------------------
DROP TABLE IF EXISTS `db_data_response`;
CREATE TABLE `db_data_response` (
  `tid` char(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL COMMENT 'Task ID',
  `cid` int(10) unsigned NOT NULL,
  `data` mediumblob NOT NULL,
  PRIMARY KEY (`tid`,`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_data_response
-- ----------------------------

-- ----------------------------
-- Table structure for `db_dummy`
-- ----------------------------
DROP TABLE IF EXISTS `db_dummy`;
CREATE TABLE `db_dummy` (
  `dummy` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clients_num` int(10) unsigned NOT NULL,
  `alias` char(30) NOT NULL,
  `shortcuts_num` int(10) unsigned NOT NULL,
  PRIMARY KEY (`dummy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_dummy
-- ----------------------------

-- ----------------------------
-- Table structure for `db_dummy_clients`
-- ----------------------------
DROP TABLE IF EXISTS `db_dummy_clients`;
CREATE TABLE `db_dummy_clients` (
  `mid` char(32) NOT NULL,
  `dummy` int(10) unsigned NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_dummy_clients
-- ----------------------------

-- ----------------------------
-- Table structure for `db_members`
-- ----------------------------
DROP TABLE IF EXISTS `db_members`;
CREATE TABLE `db_members` (
  `alias` char(30) NOT NULL,
  `email` char(40) NOT NULL,
  `username` char(32) NOT NULL,
  `password` char(32) NOT NULL,
  `lastact_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reg_time` int(11) unsigned NOT NULL,
  `maxclient` int(10) unsigned NOT NULL,
  `dummy_num` int(10) unsigned NOT NULL,
  `groups` int(10) unsigned NOT NULL COMMENT 'current groups number',
  `reject_mail` tinyint(3) unsigned NOT NULL,
  `language` tinyint(3) unsigned NOT NULL,
  `sec_dynamic_proxy` tinyint(3) unsigned NOT NULL,
  `sec_vaild_logon` tinyint(3) unsigned NOT NULL,
  `sec_logout_without_opt` tinyint(3) unsigned NOT NULL,
  `sec_ssl` tinyint(3) unsigned NOT NULL,
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_members
-- ----------------------------
INSERT INTO `db_members` VALUES ('admin', '', '8de3c99cc1de104995561f81a529a7b0', '4c3afb5bf9a60a5a7309bef2e35d99f2', '0000-00-00 00:00:00', '1407936913', '100', '0', '0', '1', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `db_modules`
-- ----------------------------
DROP TABLE IF EXISTS `db_modules`;
CREATE TABLE `db_modules` (
  `module` char(32) NOT NULL,
  `charset` tinyint(3) unsigned NOT NULL,
  `repo` int(10) unsigned NOT NULL,
  `root` char(32) NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `os` char(16) NOT NULL,
  `latest_version` int(10) unsigned NOT NULL,
  PRIMARY KEY (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_modules
-- ----------------------------
INSERT INTO `db_modules` VALUES ('0F0102030405060708090A0B0C0D0E0F', '0', '1', '0F0102030405060708090A0B0C0D0E0F', '1', '1,2', '2');
INSERT INTO `db_modules` VALUES ('010102030405060708090A0B0C0D0E0F', '0', '1', '010102030405060708090A0B0C0D0E0F', '1', '1,2', '2');
INSERT INTO `db_modules` VALUES ('020102030405060708090A0B0C0D0E0F', '0', '1', '020102030405060708090A0B0C0D0E0F', '1', '1,2', '1');
INSERT INTO `db_modules` VALUES ('010102030405060708090A0B0C0D0E10', '0', '1', '010102030405060708090A0B0C0D0E0F', '2', '1,2', '2');
INSERT INTO `db_modules` VALUES ('0F0102030405060708090A0B0C0D0E10', '0', '1', '0F0102030405060708090A0B0C0D0E0F', '2', '1,2', '2');
INSERT INTO `db_modules` VALUES ('030102030405060708090A0B0C0D0E00', '0', '1', '030102030405060708090A0B0C0D0E00', '1', '1,2', '1');

-- ----------------------------
-- Table structure for `db_module_repo`
-- ----------------------------
DROP TABLE IF EXISTS `db_module_repo`;
CREATE TABLE `db_module_repo` (
  `repo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` tinytext NOT NULL,
  `priority` tinyint(3) unsigned NOT NULL COMMENT '0:invalid  9:highest',
  `description` tinytext NOT NULL,
  PRIMARY KEY (`repo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_module_repo
-- ----------------------------
INSERT INTO `db_module_repo` VALUES ('1', 'https://hypnusoft.com/cpanel/repo/', '9', 'hypnus官方模块仓库，所有模块人工源码审核。');

-- ----------------------------
-- Table structure for `db_online_clients`
-- ----------------------------
DROP TABLE IF EXISTS `db_online_clients`;
CREATE TABLE `db_online_clients` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(3) unsigned NOT NULL,
  `mid` char(32) NOT NULL,
  `uniqu` int(11) unsigned NOT NULL,
  `name` char(30) NOT NULL,
  `ip` char(40) NOT NULL COMMENT 'IP åœ°å€ (å¤–ç½‘)ï¼Œè€ƒè™‘äº†ipv6',
  `token` int(10) unsigned NOT NULL,
  `dummy` int(10) unsigned NOT NULL,
  `mac_num` int(10) unsigned NOT NULL,
  `mod_num` int(10) unsigned NOT NULL,
  `lastliving` int(10) unsigned NOT NULL COMMENT 'dbå‘¼å¸åŒ…',
  `online_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `mid` (`mid`,`uniqu`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_online_clients
-- ----------------------------

-- ----------------------------
-- Table structure for `db_online_mac`
-- ----------------------------
DROP TABLE IF EXISTS `db_online_mac`;
CREATE TABLE `db_online_mac` (
  `cid` int(10) unsigned NOT NULL,
  `mac` char(12) NOT NULL,
  `flag` int(10) unsigned NOT NULL,
  KEY `cid` (`cid`),
  KEY `mac` (`mac`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_online_mac
-- ----------------------------

-- ----------------------------
-- Table structure for `db_online_module`
-- ----------------------------
DROP TABLE IF EXISTS `db_online_module`;
CREATE TABLE `db_online_module` (
  `cid` int(10) unsigned NOT NULL,
  `module` char(32) NOT NULL,
  KEY `cid` (`cid`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_online_module
-- ----------------------------

-- ----------------------------
-- Table structure for `db_online_task`
-- ----------------------------
DROP TABLE IF EXISTS `db_online_task`;
CREATE TABLE `db_online_task` (
  `tid` char(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL COMMENT 'Task ID',
  `cid` int(10) unsigned NOT NULL,
  `dealed` tinyint(3) unsigned NOT NULL,
  `rid` char(32) NOT NULL COMMENT 'Request ID(NULL:no request data)',
  `module` char(32) NOT NULL,
  `chunk` int(11) NOT NULL COMMENT 'for stream only',
  `size` int(11) NOT NULL COMMENT 'for stream only',
  `status` int(3) NOT NULL,
  `lastact` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tid`,`cid`),
  KEY `cid` (`cid`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_online_task
-- ----------------------------

-- ----------------------------
-- Table structure for `db_online_task_lock`
-- ----------------------------
DROP TABLE IF EXISTS `db_online_task_lock`;
CREATE TABLE `db_online_task_lock` (
  `tid` char(32) CHARACTER SET ascii COLLATE ascii_bin NOT NULL COMMENT 'Task ID',
  PRIMARY KEY (`tid`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_online_task_lock
-- ----------------------------

-- ----------------------------
-- Table structure for `db_shortcuts`
-- ----------------------------
DROP TABLE IF EXISTS `db_shortcuts`;
CREATE TABLE `db_shortcuts` (
  `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'shortcut Id',
  `dummy` int(10) unsigned NOT NULL COMMENT 'dummy Id',
  `token` int(10) unsigned NOT NULL COMMENT 'token ID',
  `name` char(30) NOT NULL,
  `module` char(32) CHARACTER SET latin1 NOT NULL COMMENT 'module Id',
  `data` mediumblob NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_shortcuts
-- ----------------------------

-- ----------------------------
-- Table structure for `db_spam_members`
-- ----------------------------
DROP TABLE IF EXISTS `db_spam_members`;
CREATE TABLE `db_spam_members` (
  `ip` char(40) NOT NULL,
  `times` smallint(3) unsigned NOT NULL,
  `lastact` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_spam_members
-- ----------------------------
INSERT INTO `db_spam_members` VALUES ('127.0.0.1', '2', '1407936923');

-- ----------------------------
-- Table structure for `db_token`
-- ----------------------------
DROP TABLE IF EXISTS `db_token`;
CREATE TABLE `db_token` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` char(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `comment` char(30) NOT NULL,
  `shortcuts_num` int(10) unsigned NOT NULL,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_token
-- ----------------------------
