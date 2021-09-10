/*
 Navicat Premium Data Transfer

 Source Server         : laravel
 Source Server Type    : MySQL
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 11/09/2021 02:21:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `UserCategory` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
