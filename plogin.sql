/*
 Navicat Premium Data Transfer

 Source Server         : 8.218.186.44
 Source Server Type    : MySQL
 Source Server Version : 50562 (5.5.62-log)
 Source Host           : 8.218.186.44:3306
 Source Schema         : plogin

 Target Server Type    : MySQL
 Target Server Version : 50562 (5.5.62-log)
 File Encoding         : 65001

 Date: 01/06/2024 13:03:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` (`id`, `username`, `password`) VALUES (1, 'mdo', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
