/*
Navicat MySQL Data Transfer

Source Server         : web
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : web

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-07-11 17:00:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '文章标题',
  `intro` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '文章摘要',
  `auther` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '作者',
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '文章内容',
  `like` int(11) NOT NULL DEFAULT '0' COMMENT '点赞',
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '头像',
  `click_num` int(11) NOT NULL COMMENT '点击量',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_07_11_141005_create_article_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('123@qq.com', '$2y$10$QVStpQ3Md/qFu/xsIVO0/OiEg.vH28N8/fJi1fQ4TTb2ifrax54Ji', '2018-07-11 14:22:09');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'root', '123@qq.com', '$2y$10$4hJEAb2w8opC.vYRp8AQ..r8HFDN6i9ylFZP5xzvs3dVf1e/5rWYm', 'gX2dinudWGUsMH4FH6LW2POVHGC9WayBcBtP79mpw6URw8wmilf5KqOkQN1l', '2018-07-11 14:12:13', '2018-07-11 14:12:13');
INSERT INTO `users` VALUES ('2', '栗子', 'lizi@qq.com', '$2y$10$6e747/KzfKNislsBMNfLmO6uUJ1pjjgebyv1Ah/A1K/ZCXB3VlFYC', 'JsliVuAERaecKCNrjRG9x6r76X51hD8WdNFTe3laK1rW3Ce9IrNAqUG9FDKS', '2018-07-11 14:19:15', '2018-07-11 14:19:15');
