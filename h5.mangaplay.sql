/*
 Navicat Premium Data Transfer

 Source Server         : passport.dev
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : h5.mangaplay

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 19/10/2020 14:10:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (9, 'phuoctrung998@gmail.com', 'Trung Nguyen Phuoc', '$2y$10$RZPXo2oBsGeeAAN7VLwrkOwony0opd7/UzaVWt5v8gscucDxJ6MOe', '2020-07-31 03:23:11', '2020-09-25 14:36:28');
INSERT INTO `admins` VALUES (10, 'trung9@gmail.com', 'Trung', '$2y$10$GpfIJjZ75G/NU70FafIHuuOwqPKwriqT2EI2n0EsnAVYKGPn7teRW', '2020-08-20 04:16:06', '2020-08-20 04:16:06');
INSERT INTO `admins` VALUES (11, 'admin@gmail.com', 'Admin', '$2y$10$q27vyfq/eSabYAHuuCsiMuNG5/2ouJPGe3v04y0IjreMRvqGb9JiW', '2020-08-25 03:27:10', '2020-08-25 03:27:10');
INSERT INTO `admins` VALUES (13, 'admin1@gmail.com', 'Admin', '$2y$10$VYcnEKKPsgutKBwqKtkwOuhg9RYiQ.jPA5.Ga3NJLMlwbpPtFRFEW', '2020-09-09 09:24:48', '2020-09-09 09:24:48');
INSERT INTO `admins` VALUES (14, 'ad@gmail.com', 'admin', '$2y$10$Pc/SyEzTljnG8Abh5jmtp.oNf2/8jWEuxn2ppWm49xSWMjarQn0yy', '2020-09-10 13:45:27', '2020-09-10 13:45:27');

-- ----------------------------
-- Table structure for cates_games_index
-- ----------------------------
DROP TABLE IF EXISTS `cates_games_index`;
CREATE TABLE `cates_games_index`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `game_cates_id` int(11) NOT NULL,
  `game_cates_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `game_id` int(11) NOT NULL,
  `game_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cates_games_index
-- ----------------------------
INSERT INTO `cates_games_index` VALUES (13, 11, NULL, 21, 'tesst checkbox', '2020-09-28 09:34:44', '2020-09-28 09:34:44');
INSERT INTO `cates_games_index` VALUES (12, 7, NULL, 20, 'One Piecea', '2020-09-24 14:46:03', '2020-09-25 14:56:48');
INSERT INTO `cates_games_index` VALUES (14, 7, NULL, 22, 'Manga', '2020-09-29 13:41:42', '2020-09-29 13:41:42');
INSERT INTO `cates_games_index` VALUES (15, 14, NULL, 26, 'Dragon Ball', '2020-09-30 10:54:05', '2020-09-30 10:54:05');
INSERT INTO `cates_games_index` VALUES (16, 14, NULL, 27, 'One Piece', '2020-10-06 10:25:24', '2020-10-06 10:25:24');
INSERT INTO `cates_games_index` VALUES (17, 16, NULL, 28, 'Naruto', '2020-10-06 14:58:55', '2020-10-06 14:58:55');
INSERT INTO `cates_games_index` VALUES (18, 15, NULL, 29, 'League of Legend', '2020-10-07 09:10:21', '2020-10-07 09:10:21');
INSERT INTO `cates_games_index` VALUES (19, 3, NULL, 30, 'Akame ga Kill', '2020-10-13 09:47:35', '2020-10-13 09:47:35');
INSERT INTO `cates_games_index` VALUES (20, 3, NULL, 31, 'Akame ga Kill', '2020-10-13 09:53:01', '2020-10-13 09:53:01');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL COMMENT 'id của comment cha, tối da 2 cấp',
  `type_id` int(11) NOT NULL COMMENT 'id của loại bài viết ( 1:game, 2:post vv )',
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 13214, 1, 1, '<p>tesst cmt a</p>', '2020-09-09 10:13:32', '2020-09-25 14:18:08');
INSERT INTO `comments` VALUES (2, 12123, 1, 2, '<p>tesst</p>', '2020-09-09 10:14:05', '2020-09-09 10:14:05');

-- ----------------------------
-- Table structure for contents
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL COMMENT 'id của games, id của bài post, 1:game, 2:post',
  `type_id` int(11) NULL DEFAULT NULL COMMENT 'nội dung. 1:post, 2:postcates, 3:game, 4:gamecates',
  `language_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'mã ngôn ngữ (1:vn, 2:en)',
  `meta_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `meta_description` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `quote` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 197 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contents
-- ----------------------------
INSERT INTO `contents` VALUES (189, 6, 4, 'VN', 'Fashion', 'Fashion', 'Fashion', 'Fashion', '2020-10-12 14:20:44', '2020-10-12 14:20:44');
INSERT INTO `contents` VALUES (190, 6, 4, 'EN', 'Fashion', 'Fashion', 'Fashion', 'Fashion', '2020-10-12 14:20:44', '2020-10-12 14:20:44');
INSERT INTO `contents` VALUES (191, 7, 4, 'VN', 'Shooting', 'Shooting', 'Shooting', 'Shooting', '2020-10-12 14:21:50', '2020-10-12 14:21:50');
INSERT INTO `contents` VALUES (192, 7, 4, 'EN', 'Shooting', 'Shooting', 'Shooting', 'Shooting', '2020-10-12 14:21:50', '2020-10-12 14:21:50');
INSERT INTO `contents` VALUES (193, 30, 3, 'VN', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', '2020-10-13 09:47:35', '2020-10-13 09:47:35');
INSERT INTO `contents` VALUES (194, 30, 3, 'EN', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', '2020-10-13 09:47:35', '2020-10-13 09:47:35');
INSERT INTO `contents` VALUES (195, 31, 3, 'VN', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', '2020-10-13 09:53:01', '2020-10-13 09:53:28');
INSERT INTO `contents` VALUES (196, 31, 3, 'EN', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', 'Akame ga Kill', '2020-10-13 09:53:01', '2020-10-13 09:53:28');
INSERT INTO `contents` VALUES (177, 27, 3, 'VN', 'One Piece vn', 'One Piece vn', 'One Piece vn', 'One Piece vn', '2020-10-06 10:25:24', '2020-10-06 15:02:25');
INSERT INTO `contents` VALUES (163, 75, 1, 'CN', 'Test cn a', 'Test cn a', 'Test cn a', 'Test cn a', '2020-09-30 10:46:30', '2020-09-30 10:47:48');
INSERT INTO `contents` VALUES (162, 75, 1, 'VN', 'Test vn a a', 'Test vna', 'Test vn a', 'Test vn a', '2020-09-30 10:46:30', '2020-09-30 10:47:48');
INSERT INTO `contents` VALUES (178, 27, 3, 'CN', 'One Piece cn', 'One Piece cn', 'One Piece cn', 'One Piece cn', '2020-10-06 10:25:24', '2020-10-06 10:35:04');
INSERT INTO `contents` VALUES (179, 27, 3, 'EN', 'One Piece en', 'One Piece en', 'One Piece en', 'One Piece en', '2020-10-06 10:25:24', '2020-10-06 15:02:25');
INSERT INTO `contents` VALUES (180, 16, 4, 'VN', 'Mystery vn', 'Mystery vn', 'Mystery vn', 'Mystery vn', '2020-10-06 13:40:48', '2020-10-06 13:40:48');
INSERT INTO `contents` VALUES (181, 16, 4, 'CN', 'Mystery cn', 'Mystery cn', 'Mystery cn', 'Mystery cn', '2020-10-06 13:40:48', '2020-10-06 13:40:48');
INSERT INTO `contents` VALUES (182, 16, 4, 'EN', 'Mystery en', 'Mystery en', 'Mystery en', 'Mystery en', '2020-10-06 13:40:48', '2020-10-06 13:40:48');
INSERT INTO `contents` VALUES (183, 28, 3, 'VN', 'Naruto', 'Naruto', 'Naruto', 'Naruto', '2020-10-06 14:58:55', '2020-10-06 14:58:55');
INSERT INTO `contents` VALUES (184, 28, 3, 'EN', 'Naruto en', 'Naruto en', 'Naruto en', 'Naruto en', '2020-10-06 14:58:55', '2020-10-06 14:58:55');
INSERT INTO `contents` VALUES (185, 29, 3, 'VN', 'League of Legend', 'League of Legend', 'League of Legend', 'League of Legend', '2020-10-07 09:10:21', '2020-10-07 09:10:21');
INSERT INTO `contents` VALUES (186, 29, 3, 'EN', 'League of Legend', 'League of Legend', 'League of Legend', 'League of Legend', '2020-10-07 09:10:21', '2020-10-07 09:10:21');
INSERT INTO `contents` VALUES (187, 5, 4, 'VN', 'Sports', 'Sports', 'Sports', 'Sports', '2020-10-12 13:50:34', '2020-10-12 13:50:34');
INSERT INTO `contents` VALUES (188, 5, 4, 'EN', 'Sports', 'Sports', 'Sports', 'Sports', '2020-10-12 13:50:34', '2020-10-12 13:50:34');
INSERT INTO `contents` VALUES (176, 76, 1, 'EN', 'tạo post mới en edit', 'tạo post mới en', 'tạo post mới en', 'tạo post mới en', '2020-10-01 09:16:14', '2020-10-01 09:16:39');
INSERT INTO `contents` VALUES (175, 76, 1, 'CN', 'tạo post mới cn edit', 'tạo post mới cn', 'tạo post mới cn', 'tạo post mới cn', '2020-10-01 09:16:14', '2020-10-01 09:16:39');
INSERT INTO `contents` VALUES (174, 76, 1, 'VN', 'tạo post mới vn edit', 'tạo post mới vn', 'tạo post mới vn', 'tạo post mới vn', '2020-10-01 09:16:14', '2020-10-01 09:16:39');
INSERT INTO `contents` VALUES (173, 15, 4, 'EN', 'game action en edit', 'game action en', 'game action en', 'game action en', '2020-09-30 10:59:12', '2020-09-30 10:59:53');
INSERT INTO `contents` VALUES (172, 15, 4, 'CN', 'game action cn edit', 'game action cn', 'game action cn', 'game action cn', '2020-09-30 10:59:12', '2020-09-30 10:59:53');
INSERT INTO `contents` VALUES (171, 15, 4, 'VN', 'game action edit', 'game action', 'game action', 'game action', '2020-09-30 10:59:12', '2020-09-30 10:59:53');
INSERT INTO `contents` VALUES (170, 22, 2, 'EN', 'loai post en edit', 'loai post en', 'loai post en', 'loai post en', '2020-09-30 10:55:31', '2020-09-30 10:55:55');
INSERT INTO `contents` VALUES (168, 22, 2, 'VN', 'loai post vn edit', 'loai post vn', 'loai post vn', 'loai post vn', '2020-09-30 10:55:31', '2020-09-30 10:55:55');
INSERT INTO `contents` VALUES (167, 26, 3, 'EN', 'DragonBall en edit', 'DragonBall en', 'DragonBall en', 'DragonBall en', '2020-09-30 10:54:05', '2020-10-06 10:30:25');
INSERT INTO `contents` VALUES (169, 22, 2, 'CN', 'loai post cn edit', 'loai post cn', 'loai post cn', 'loai post cn', '2020-09-30 10:55:31', '2020-09-30 10:55:55');
INSERT INTO `contents` VALUES (165, 26, 3, 'VN', 'DragonBall vn edit', 'DragonBall vn', 'DragonBall vn', 'DragonBall vn', '2020-09-30 10:54:05', '2020-10-06 10:30:25');
INSERT INTO `contents` VALUES (166, 26, 3, 'CN', 'DragonBall cn edit', 'DragonBall cn', 'DragonBall cn', 'DragonBall cn', '2020-09-30 10:54:05', '2020-10-06 10:30:25');

-- ----------------------------
-- Table structure for craw_setting_category_site
-- ----------------------------
DROP TABLE IF EXISTS `craw_setting_category_site`;
CREATE TABLE `craw_setting_category_site`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL,
  `category_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'link get html category url',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of craw_setting_category_site
-- ----------------------------

-- ----------------------------
-- Table structure for craw_setting_main_site
-- ----------------------------
DROP TABLE IF EXISTS `craw_setting_main_site`;
CREATE TABLE `craw_setting_main_site`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_websites` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'url website đích',
  `status` int(11) NOT NULL,
  `flag_check_duplicate_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flag_check_duplicate_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flag_check_duplicate_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of craw_setting_main_site
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for game_cates
-- ----------------------------
DROP TABLE IF EXISTS `game_cates`;
CREATE TABLE `game_cates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of game_cates
-- ----------------------------
INSERT INTO `game_cates` VALUES (1, 'Action', 'action', '/uploads/games/gamecates/1601438393.png', 0, '2020-09-30 10:59:12', '2020-09-30 10:59:53');
INSERT INTO `game_cates` VALUES (2, 'Adventure', 'adventure', '/uploads/games/gamecates/1601955826.png', 0, '2020-09-16 14:19:47', '2020-10-06 10:43:46');
INSERT INTO `game_cates` VALUES (3, 'Mystery', 'mystery', '/uploads/games/gamecates/1601966448.png', 1, '2020-10-06 13:40:48', '2020-10-06 13:40:48');
INSERT INTO `game_cates` VALUES (4, 'Fantasy', 'fantasy', '/uploads/games/gamecates/1601955865.png', 0, '2020-09-29 14:03:52', '2020-10-06 10:44:25');
INSERT INTO `game_cates` VALUES (5, 'Sports', 'sports', '/uploads/games/gamecates/1602485434.png', 0, '2020-10-12 13:50:34', '2020-10-12 13:50:34');
INSERT INTO `game_cates` VALUES (6, 'Shooting', 'shooting', '/uploads/games/gamecates/1602487310.png', 0, '2020-10-12 14:21:50', '2020-10-12 14:21:50');

-- ----------------------------
-- Table structure for games
-- ----------------------------
DROP TABLE IF EXISTS `games`;
CREATE TABLE `games`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `platform` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nền tảng( flash,h5,vv)',
  `game_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NULL DEFAULT NULL,
  `flag_hot` int(11) NOT NULL,
  `likes` int(11) NULL DEFAULT NULL,
  `dislike` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of games
-- ----------------------------
INSERT INTO `games` VALUES (1, 'League of Legend', 1, 'league-of-legend', '/uploads/games/game/1602036621.png', 1, 'Flash', 'https://lienminh.garena.vn/', 10545, 0, NULL, NULL, '2020-10-07 09:10:21', '2020-10-07 09:10:21');
INSERT INTO `games` VALUES (2, 'Naruto', 1, 'naruto', '/uploads/games/game/12341215.png', 1, 'Web', 'http://narutotocchien.com/', 2121, 1, NULL, NULL, '2020-10-06 14:58:55', '2020-10-06 14:58:55');
INSERT INTO `games` VALUES (3, 'One Piece', 2, 'one-piece', '/uploads/games/game/123412421.png', 0, 'Mobile', 'http://mangaplay.vn', 3475, 1, NULL, NULL, '2020-10-06 10:25:24', '2020-10-06 15:02:25');
INSERT INTO `games` VALUES (4, 'Dragon Ball', 2, 'dragon-ball', '/uploads/games/game/1601955025.png', 1, 'Web', 'http://sieuxayda.com', 5963, 1, NULL, NULL, '2020-09-30 10:54:05', '2020-10-06 10:30:25');
INSERT INTO `games` VALUES (5, 'League of Legend', 1, 'league-of-legend', '/uploads/games/game/1602036621.png', 1, 'Flash', 'https://lienminh.garena.vn/', 1226, 0, NULL, NULL, '2020-10-07 09:10:21', '2020-10-07 09:10:21');
INSERT INTO `games` VALUES (6, 'Naruto', 6, 'naruto', '/uploads/games/game/12341215.png', 1, 'Web', 'http://narutotocchien.com/', 9845, 1, NULL, NULL, '2020-10-06 14:58:55', '2020-10-06 14:58:55');
INSERT INTO `games` VALUES (7, 'One Piece', 2, 'one-piece', '/uploads/games/game/123412421.png', 0, 'Mobile', 'http://mangaplay.vn', 6987, 1, NULL, NULL, '2020-10-06 10:25:24', '2020-10-06 15:02:25');
INSERT INTO `games` VALUES (8, 'Dragon Ball', 6, 'dragon-ball', '/uploads/games/game/1601955025.png', 1, 'Web', 'http://sieuxayda.com', 1233, 0, NULL, NULL, '2020-09-30 10:54:05', '2020-10-06 10:30:25');
INSERT INTO `games` VALUES (9, 'League of Legend', 3, 'league-of-legend', '/uploads/games/game/1602036621.png', 1, 'Flash', 'https://lienminh.garena.vn/', 2312, 0, NULL, NULL, '2020-10-07 09:10:21', '2020-10-07 09:10:21');
INSERT INTO `games` VALUES (10, 'Naruto', 4, 'naruto', '/uploads/games/game/12341215.png', 1, 'Web', 'http://narutotocchien.com/', 1231, 1, NULL, NULL, '2020-10-06 14:58:55', '2020-10-06 14:58:55');
INSERT INTO `games` VALUES (11, 'One Piece', 3, 'one-piece', '/uploads/games/game/123412421.png', 0, 'Mobile', 'http://mangaplay.vn', 2132, 1, NULL, NULL, '2020-10-06 10:25:24', '2020-10-06 15:02:25');
INSERT INTO `games` VALUES (12, 'Dragon Ball', 4, 'dragon-ball', '/uploads/games/game/1601955025.png', 1, 'Web', 'http://sieuxayda.com', 1232, 0, NULL, NULL, '2020-09-30 10:54:05', '2020-10-06 10:30:25');
INSERT INTO `games` VALUES (13, 'League of Legend', 5, 'league-of-legend', '/uploads/games/game/1602036621.png', 1, 'Flash', 'https://lienminh.garena.vn/', 2341, 0, NULL, NULL, '2020-10-07 09:10:21', '2020-10-07 09:10:21');
INSERT INTO `games` VALUES (14, 'Naruto', 5, 'naruto', '/uploads/games/game/12341215.png', 1, 'Web', 'http://narutotocchien.com/', 1123, 1, NULL, NULL, '2020-10-06 14:58:55', '2020-10-06 14:58:55');
INSERT INTO `games` VALUES (15, 'One Piece', 5, 'one-piece', '/uploads/games/game/123412421.png', 0, 'Mobile', 'http://mangaplay.vn', 2131, 1, NULL, NULL, '2020-10-06 10:25:24', '2020-10-06 15:02:25');
INSERT INTO `games` VALUES (16, 'Siêu Xayda', 5, 'dragon-ball', '/uploads/games/game/1601955025.png', 1, 'Web', 'http://sieuxayda.com', 2131, 0, NULL, NULL, '2020-09-30 10:54:05', '2020-10-06 10:30:25');
INSERT INTO `games` VALUES (30, 'Akame ga Kill', 3, 'akame-ga-kill', '/uploads/games/game/1602557255.png', 0, 'Web', 'https://store.playstation.com/en-us/product/UV0016-NPVB04004_CN-0000000000262308', 1223, 1, NULL, NULL, '2020-10-13 09:47:35', '2020-10-13 09:47:35');

-- ----------------------------
-- Table structure for games_favorite
-- ----------------------------
DROP TABLE IF EXISTS `games_favorite`;
CREATE TABLE `games_favorite`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of games_favorite
-- ----------------------------
INSERT INTO `games_favorite` VALUES (3, 213123, 312534, '2020-09-16 14:37:47', '2020-09-16 14:39:26');

-- ----------------------------
-- Table structure for languages
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `code` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `gg_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT NULL COMMENT '0:none, 1:action',
  `flag_default` int(11) NULL DEFAULT NULL COMMENT 'ngôn ngữ mặc định, ở đây vn là mặc định flag_default=1, ngôn ngữ khác flag_default = 0',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of languages
-- ----------------------------
INSERT INTO `languages` VALUES (1, 'Vietnamese', 'VN', 'Vietnamese', 'Vietnamese', 1, 1, '2020-09-08 14:25:55', '2020-09-24 09:34:36');
INSERT INTO `languages` VALUES (4, 'Chinese', 'cn', 'Chinese', 'chinese', 0, 0, '2020-09-09 14:10:36', '2020-10-06 13:41:17');
INSERT INTO `languages` VALUES (3, 'English', 'EN', 'English', 'english', 1, 0, '2020-09-09 10:29:53', '2020-09-23 15:41:29');
INSERT INTO `languages` VALUES (7, 'Japanese', 'JP', 'Japanese', 'japanese', 0, 0, '2020-09-15 09:01:07', '2020-09-22 16:40:45');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_07_25_160331_admins', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('phuoctrung998@gmail.com', '$2y$10$nwrWmBbi9p3tXqeH9hW.F.Vci9BT528KfnIplEzwe3hZZ52Ke7q6C', '2020-10-16 09:45:27');

-- ----------------------------
-- Table structure for post_cates
-- ----------------------------
DROP TABLE IF EXISTS `post_cates`;
CREATE TABLE `post_cates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post_cates
-- ----------------------------
INSERT INTO `post_cates` VALUES (22, 'loai post', 'loai-post', 2, 1, '2020-09-30 10:55:31', '2020-09-30 10:55:31');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `post_cat_id` int(11) NULL DEFAULT NULL,
  `views` int(11) NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL COMMENT 'mở hoặc đóng',
  `is_timer` int(11) NULL DEFAULT NULL COMMENT 'hẹn giờ hoặc không',
  `timer` datetime(0) NULL DEFAULT NULL COMMENT 'time nếu hẹn giờ là có',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (75, 'Test slider', 'test', 21, NULL, 1, 0, NULL, '2020-09-30 10:46:30', '2020-09-30 10:47:48');
INSERT INTO `posts` VALUES (76, 'tạo post mới', 'tao-post-moi', 22, NULL, 1, 0, NULL, '2020-10-01 09:16:14', '2020-10-01 09:16:14');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES (2, 'chơi game h5', 'choi-game-h5-ne', '2020-09-10 10:42:35', '2020-09-16 14:53:12');
INSERT INTO `tags` VALUES (4, 'Test', 'test', '2020-09-16 14:51:34', '2020-09-16 14:51:34');

-- ----------------------------
-- Table structure for tags_games_index
-- ----------------------------
DROP TABLE IF EXISTS `tags_games_index`;
CREATE TABLE `tags_games_index`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NULL DEFAULT NULL,
  `game_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of tags_games_index
-- ----------------------------
INSERT INTO `tags_games_index` VALUES (2, 2, 12, '2020-09-10 10:42:55', '2020-09-10 10:42:55');
INSERT INTO `tags_games_index` VALUES (3, 2214, 21, '2020-09-16 14:56:30', '2020-09-16 14:57:40');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Trung Nguyen Phuoc', 'phuoctrung998@gmail.com', NULL, '$2y$10$lZ6YkHzYOExu0rn3MlcZ0OYUjK1p8Rvba9LuPjUrz/03MWKnhH3j6', NULL, '2020-08-31 10:33:17', '2020-10-13 09:05:37');
INSERT INTO `users` VALUES (2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$1VxhegUgI/qDbJeIbGV.k.oHXzMTLZ/Nv/DgZZdWE61ppL8rw1CLS', NULL, '2020-10-09 13:55:31', '2020-10-09 13:55:31');
INSERT INTO `users` VALUES (3, 'Admin2', 'ad@gmail.com', NULL, '$2y$10$o6u34I248SrEasYc0q0iau4YyzSu728fWmn03l5Wjrwx2YU8.pZOm', NULL, '2020-10-09 14:44:50', '2020-10-09 14:44:50');

SET FOREIGN_KEY_CHECKS = 1;
