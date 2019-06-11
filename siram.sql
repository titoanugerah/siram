/*
 Navicat Premium Data Transfer

 Source Server         : Prototype
 Source Server Type    : MySQL
 Source Server Version : 100203
 Source Host           : localhost:3306
 Source Schema         : siram

 Target Server Type    : MySQL
 Target Server Version : 100203
 File Encoding         : 65001

 Date: 11/06/2019 13:24:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fullname` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `previlleges` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');
INSERT INTO `account` VALUES (2, 'user1', '4a7d1ed414474e4033ac29ccb8653d9b', 'Tito Anugerah M', 'user');
INSERT INTO `account` VALUES (3, 'user2', '81dc9bdb52d04dc20036dbd8313ed055', 'Harits  Fathuddin', 'user');

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_node` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `topik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu` timestamp(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `data_value` float NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 349 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data
-- ----------------------------
INSERT INTO `data` VALUES (1, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:07', 27.12);
INSERT INTO `data` VALUES (2, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:11', 27.28);
INSERT INTO `data` VALUES (3, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:17', 27.32);
INSERT INTO `data` VALUES (4, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:21', 27.34);
INSERT INTO `data` VALUES (5, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:28', 27.35);
INSERT INTO `data` VALUES (6, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:32', 27.36);
INSERT INTO `data` VALUES (7, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:38', 27.37);
INSERT INTO `data` VALUES (8, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:44', 27.37);
INSERT INTO `data` VALUES (9, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:48', 27.37);
INSERT INTO `data` VALUES (10, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:55', 27.37);
INSERT INTO `data` VALUES (11, 'C-01-001', '/data2/suhu1', '2018-01-12 15:40:59', 27.39);
INSERT INTO `data` VALUES (12, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:05', 27.4);
INSERT INTO `data` VALUES (13, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:09', 27.41);
INSERT INTO `data` VALUES (14, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:16', 27.42);
INSERT INTO `data` VALUES (15, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:20', 27.41);
INSERT INTO `data` VALUES (16, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:26', 27.42);
INSERT INTO `data` VALUES (17, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:30', 27.42);
INSERT INTO `data` VALUES (18, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:37', 27.42);
INSERT INTO `data` VALUES (19, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:41', 27.42);
INSERT INTO `data` VALUES (20, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:47', 27.42);
INSERT INTO `data` VALUES (21, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:53', 27.43);
INSERT INTO `data` VALUES (22, 'C-01-001', '/data2/suhu1', '2018-01-12 15:41:58', 27.44);
INSERT INTO `data` VALUES (23, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:04', 27.44);
INSERT INTO `data` VALUES (24, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:08', 27.45);
INSERT INTO `data` VALUES (25, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:14', 27.46);
INSERT INTO `data` VALUES (26, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:19', 27.46);
INSERT INTO `data` VALUES (27, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:25', 27.48);
INSERT INTO `data` VALUES (28, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:29', 27.49);
INSERT INTO `data` VALUES (29, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:35', 27.49);
INSERT INTO `data` VALUES (30, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:39', 27.49);
INSERT INTO `data` VALUES (31, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:45', 27.51);
INSERT INTO `data` VALUES (32, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:50', 27.5);
INSERT INTO `data` VALUES (33, 'C-01-001', '/data2/suhu1', '2018-01-12 15:42:56', 27.5);
INSERT INTO `data` VALUES (34, 'C-01-001', '/data2/suhu1', '2018-01-12 15:43:02', 27.5);
INSERT INTO `data` VALUES (35, 'C-01-001', '/data2/suhu1', '2018-01-12 15:43:07', 27.51);
INSERT INTO `data` VALUES (36, 'C-01-001', '/data2/suhu1', '2018-01-12 15:43:13', 27.53);
INSERT INTO `data` VALUES (37, 'T-01-002', '/data2/suhu1', '2018-01-12 15:43:37', 27.35);
INSERT INTO `data` VALUES (38, 'T-01-002', '/data2/suhu1', '2018-01-12 15:43:44', 27.5);
INSERT INTO `data` VALUES (39, 'T-01-002', '/data2/suhu1', '2018-01-12 15:43:48', 27.56);
INSERT INTO `data` VALUES (40, 'T-01-002', '/data2/suhu1', '2018-01-12 15:43:54', 27.57);
INSERT INTO `data` VALUES (41, 'T-01-002', '/data2/suhu1', '2018-01-12 15:43:58', 27.59);
INSERT INTO `data` VALUES (42, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:04', 27.6);
INSERT INTO `data` VALUES (43, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:09', 27.63);
INSERT INTO `data` VALUES (44, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:15', 27.62);
INSERT INTO `data` VALUES (45, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:19', 27.63);
INSERT INTO `data` VALUES (46, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:26', 27.65);
INSERT INTO `data` VALUES (47, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:30', 27.66);
INSERT INTO `data` VALUES (48, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:36', 27.65);
INSERT INTO `data` VALUES (49, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:40', 27.64);
INSERT INTO `data` VALUES (50, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:46', 27.65);
INSERT INTO `data` VALUES (51, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:53', 27.65);
INSERT INTO `data` VALUES (52, 'T-01-002', '/data2/suhu1', '2018-01-12 15:44:57', 27.65);
INSERT INTO `data` VALUES (53, 'T-01-002', '/data2/suhu1', '2018-01-12 15:45:03', 27.66);
INSERT INTO `data` VALUES (54, 'T-01-002', '/data2/suhu1', '2018-01-12 15:45:07', 27.66);
INSERT INTO `data` VALUES (55, 'T-01-002', '/data2/suhu1', '2018-01-12 15:45:14', 27.68);
INSERT INTO `data` VALUES (56, 'T-01-002', '/data2/suhu1', '2018-01-12 15:45:18', 27.84);
INSERT INTO `data` VALUES (57, 'T-01-002', '/data2/suhu1', '2018-01-12 15:45:24', 27.96);
INSERT INTO `data` VALUES (58, 'T-01-002', '/data2/suhu1', '2018-01-12 15:45:28', 28.1);
INSERT INTO `data` VALUES (59, 'T-01-002', '/data2/suhu1', '2018-01-12 15:45:34', 28.25);
INSERT INTO `data` VALUES (60, 'T-01-002', '/data2/suhu2', '2018-01-17 12:29:36', 29.84);
INSERT INTO `data` VALUES (61, 'T-01-002', '/data2/suhu2', '2018-01-17 12:29:40', 29.96);
INSERT INTO `data` VALUES (62, 'T-01-002', '/data2/suhu2', '2018-01-17 12:29:46', 30);
INSERT INTO `data` VALUES (63, 'T-01-002', '/data2/suhu2', '2018-01-17 12:29:51', 30.01);
INSERT INTO `data` VALUES (64, 'T-01-002', '/data2/suhu2', '2018-01-17 12:29:57', 30.02);
INSERT INTO `data` VALUES (65, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:03', 30.04);
INSERT INTO `data` VALUES (66, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:07', 30.05);
INSERT INTO `data` VALUES (67, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:13', 30.07);
INSERT INTO `data` VALUES (68, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:18', 30.07);
INSERT INTO `data` VALUES (69, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:24', 30.06);
INSERT INTO `data` VALUES (70, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:28', 30.06);
INSERT INTO `data` VALUES (71, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:35', 30.06);
INSERT INTO `data` VALUES (72, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:39', 30.04);
INSERT INTO `data` VALUES (73, 'T-01-002', '/data2/suhu2', '2018-01-17 12:30:45', 30.06);
INSERT INTO `data` VALUES (74, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:10', 29.91);
INSERT INTO `data` VALUES (75, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:14', 30.06);
INSERT INTO `data` VALUES (76, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:20', 30.08);
INSERT INTO `data` VALUES (77, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:24', 30.09);
INSERT INTO `data` VALUES (78, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:31', 30.1);
INSERT INTO `data` VALUES (79, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:35', 30.1);
INSERT INTO `data` VALUES (80, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:41', 30.1);
INSERT INTO `data` VALUES (81, 'T-01-002', '/data2/suhu2', '2018-01-17 12:31:47', 30.11);
INSERT INTO `data` VALUES (82, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:26', 30.57);
INSERT INTO `data` VALUES (83, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:30', 30.56);
INSERT INTO `data` VALUES (84, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:37', 30.55);
INSERT INTO `data` VALUES (85, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:41', 30.55);
INSERT INTO `data` VALUES (86, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:47', 30.56);
INSERT INTO `data` VALUES (87, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:51', 30.55);
INSERT INTO `data` VALUES (88, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:51', 0);
INSERT INTO `data` VALUES (89, 'C-01-001', '/data2/suhu1', '2018-02-27 14:00:55', 0);
INSERT INTO `data` VALUES (90, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:04', 0);
INSERT INTO `data` VALUES (91, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:11', 0);
INSERT INTO `data` VALUES (92, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:15', 0);
INSERT INTO `data` VALUES (93, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:21', 0);
INSERT INTO `data` VALUES (94, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:26', 0);
INSERT INTO `data` VALUES (95, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:32', 0);
INSERT INTO `data` VALUES (96, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:36', 0);
INSERT INTO `data` VALUES (97, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:42', 0);
INSERT INTO `data` VALUES (98, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:48', 0);
INSERT INTO `data` VALUES (99, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:53', 0);
INSERT INTO `data` VALUES (100, 'C-01-001', '/data2/tanah1', '2018-01-12 15:40:59', 0);
INSERT INTO `data` VALUES (101, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:03', 0);
INSERT INTO `data` VALUES (102, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:09', 0);
INSERT INTO `data` VALUES (103, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:14', 0);
INSERT INTO `data` VALUES (104, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:20', 0);
INSERT INTO `data` VALUES (105, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:24', 0);
INSERT INTO `data` VALUES (106, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:30', 0);
INSERT INTO `data` VALUES (107, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:35', 0);
INSERT INTO `data` VALUES (108, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:41', 0);
INSERT INTO `data` VALUES (109, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:47', 0);
INSERT INTO `data` VALUES (110, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:51', 0);
INSERT INTO `data` VALUES (111, 'C-01-001', '/data2/tanah1', '2018-01-12 15:41:58', 0);
INSERT INTO `data` VALUES (112, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:02', 0);
INSERT INTO `data` VALUES (113, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:08', 0);
INSERT INTO `data` VALUES (114, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:12', 0);
INSERT INTO `data` VALUES (115, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:18', 0);
INSERT INTO `data` VALUES (116, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:23', 0);
INSERT INTO `data` VALUES (117, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:29', 0);
INSERT INTO `data` VALUES (118, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:33', 0);
INSERT INTO `data` VALUES (119, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:39', 0);
INSERT INTO `data` VALUES (120, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:43', 0);
INSERT INTO `data` VALUES (121, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:50', 0);
INSERT INTO `data` VALUES (122, 'C-01-001', '/data2/tanah1', '2018-01-12 15:42:56', 0);
INSERT INTO `data` VALUES (123, 'C-01-001', '/data2/tanah1', '2018-01-12 15:43:00', 0);
INSERT INTO `data` VALUES (124, 'C-01-001', '/data2/tanah1', '2018-01-12 15:43:06', 0);
INSERT INTO `data` VALUES (125, 'C-01-001', '/data2/tanah1', '2018-01-12 15:43:11', 0);
INSERT INTO `data` VALUES (126, 'T-01-002', '/data2/tanah1', '2018-01-12 15:43:35', 0);
INSERT INTO `data` VALUES (127, 'T-01-002', '/data2/tanah1', '2018-01-12 15:43:42', 0);
INSERT INTO `data` VALUES (128, 'T-01-002', '/data2/tanah1', '2018-01-12 15:43:48', 0);
INSERT INTO `data` VALUES (129, 'T-01-002', '/data2/tanah1', '2018-01-12 15:43:52', 0);
INSERT INTO `data` VALUES (130, 'T-01-002', '/data2/tanah1', '2018-01-12 15:43:58', 0);
INSERT INTO `data` VALUES (131, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:02', 0);
INSERT INTO `data` VALUES (132, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:09', 0);
INSERT INTO `data` VALUES (133, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:13', 0);
INSERT INTO `data` VALUES (134, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:19', 0);
INSERT INTO `data` VALUES (135, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:24', 0);
INSERT INTO `data` VALUES (136, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:30', 0);
INSERT INTO `data` VALUES (137, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:34', 0);
INSERT INTO `data` VALUES (138, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:40', 0);
INSERT INTO `data` VALUES (139, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:46', 0);
INSERT INTO `data` VALUES (140, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:51', 0);
INSERT INTO `data` VALUES (141, 'T-01-002', '/data2/tanah1', '2018-01-12 15:44:57', 0);
INSERT INTO `data` VALUES (142, 'T-01-002', '/data2/tanah1', '2018-01-12 15:45:01', 0);
INSERT INTO `data` VALUES (143, 'T-01-002', '/data2/tanah1', '2018-01-12 15:45:07', 0);
INSERT INTO `data` VALUES (144, 'T-01-002', '/data2/tanah1', '2018-01-12 15:45:11', 0);
INSERT INTO `data` VALUES (145, 'T-01-002', '/data2/tanah1', '2018-01-12 15:45:18', 0);
INSERT INTO `data` VALUES (146, 'T-01-002', '/data2/tanah1', '2018-01-12 15:45:22', 0);
INSERT INTO `data` VALUES (147, 'T-01-002', '/data2/tanah1', '2018-01-12 15:45:28', 0);
INSERT INTO `data` VALUES (148, 'T-01-002', '/data2/tanah1', '2018-01-12 15:45:32', 0);
INSERT INTO `data` VALUES (149, 'T-01-002', '/data2/tanah2', '2018-01-17 12:29:34', 70);
INSERT INTO `data` VALUES (150, 'T-01-002', '/data2/tanah2', '2018-01-17 12:29:40', 70);
INSERT INTO `data` VALUES (151, 'T-01-002', '/data2/tanah2', '2018-01-17 12:29:44', 70);
INSERT INTO `data` VALUES (152, 'T-01-002', '/data2/tanah2', '2018-01-17 12:29:51', 70);
INSERT INTO `data` VALUES (153, 'T-01-002', '/data2/tanah2', '2018-01-17 12:29:55', 70);
INSERT INTO `data` VALUES (154, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:01', 70);
INSERT INTO `data` VALUES (155, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:07', 70);
INSERT INTO `data` VALUES (156, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:11', 70);
INSERT INTO `data` VALUES (157, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:18', 70);
INSERT INTO `data` VALUES (158, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:22', 70);
INSERT INTO `data` VALUES (159, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:28', 70);
INSERT INTO `data` VALUES (160, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:32', 70);
INSERT INTO `data` VALUES (161, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:39', 70);
INSERT INTO `data` VALUES (162, 'T-01-002', '/data2/tanah2', '2018-01-17 12:30:43', 70);
INSERT INTO `data` VALUES (163, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:08', 70);
INSERT INTO `data` VALUES (164, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:14', 70);
INSERT INTO `data` VALUES (165, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:18', 70);
INSERT INTO `data` VALUES (166, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:24', 70);
INSERT INTO `data` VALUES (167, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:29', 70);
INSERT INTO `data` VALUES (168, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:35', 70);
INSERT INTO `data` VALUES (169, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:39', 70);
INSERT INTO `data` VALUES (170, 'T-01-002', '/data2/tanah2', '2018-01-17 12:31:45', 70);
INSERT INTO `data` VALUES (171, 'C-01-001', '/data2/tanah1', '2018-02-27 14:00:24', 0);
INSERT INTO `data` VALUES (172, 'C-01-001', '/data2/tanah1', '2018-02-27 14:00:30', 0);
INSERT INTO `data` VALUES (173, 'C-01-001', '/data2/tanah1', '2018-02-27 14:00:34', 0);
INSERT INTO `data` VALUES (174, 'C-01-001', '/data2/tanah1', '2018-02-27 14:00:41', 0);
INSERT INTO `data` VALUES (175, 'C-01-001', '/data2/tanah1', '2018-02-27 14:00:45', 0);
INSERT INTO `data` VALUES (176, 'C-01-001', '/data2/tanah1', '2018-02-27 14:00:51', 0);
INSERT INTO `data` VALUES (177, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:07', 57.74);
INSERT INTO `data` VALUES (178, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:13', 57.7);
INSERT INTO `data` VALUES (179, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:17', 57.55);
INSERT INTO `data` VALUES (180, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:23', 57.42);
INSERT INTO `data` VALUES (181, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:28', 57.3);
INSERT INTO `data` VALUES (182, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:34', 57.21);
INSERT INTO `data` VALUES (183, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:38', 57.15);
INSERT INTO `data` VALUES (184, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:44', 57.11);
INSERT INTO `data` VALUES (185, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:51', 57.11);
INSERT INTO `data` VALUES (186, 'C-01-001', '/data2/udara1', '2018-01-12 15:40:55', 57.08);
INSERT INTO `data` VALUES (187, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:01', 57.06);
INSERT INTO `data` VALUES (188, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:05', 57.03);
INSERT INTO `data` VALUES (189, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:12', 57.03);
INSERT INTO `data` VALUES (190, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:16', 57);
INSERT INTO `data` VALUES (191, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:22', 56.9);
INSERT INTO `data` VALUES (192, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:26', 56.87);
INSERT INTO `data` VALUES (193, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:33', 56.84);
INSERT INTO `data` VALUES (194, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:37', 56.78);
INSERT INTO `data` VALUES (195, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:43', 56.71);
INSERT INTO `data` VALUES (196, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:49', 56.68);
INSERT INTO `data` VALUES (197, 'C-01-001', '/data2/udara1', '2018-01-12 15:41:53', 56.68);
INSERT INTO `data` VALUES (198, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:00', 56.65);
INSERT INTO `data` VALUES (199, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:04', 56.65);
INSERT INTO `data` VALUES (200, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:10', 56.66);
INSERT INTO `data` VALUES (201, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:14', 56.66);
INSERT INTO `data` VALUES (202, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:21', 56.75);
INSERT INTO `data` VALUES (203, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:25', 56.85);
INSERT INTO `data` VALUES (204, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:31', 56.88);
INSERT INTO `data` VALUES (205, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:35', 56.85);
INSERT INTO `data` VALUES (206, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:41', 56.76);
INSERT INTO `data` VALUES (207, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:45', 56.6);
INSERT INTO `data` VALUES (208, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:52', 56.51);
INSERT INTO `data` VALUES (209, 'C-01-001', '/data2/udara1', '2018-01-12 15:42:58', 56.44);
INSERT INTO `data` VALUES (210, 'C-01-001', '/data2/udara1', '2018-01-12 15:43:02', 56.41);
INSERT INTO `data` VALUES (211, 'C-01-001', '/data2/udara1', '2018-01-12 15:43:09', 56.41);
INSERT INTO `data` VALUES (212, 'C-01-001', '/data2/udara1', '2018-01-12 15:43:13', 56.42);
INSERT INTO `data` VALUES (213, 'T-01-002', '/data2/udara1', '2018-01-12 15:43:37', 56.64);
INSERT INTO `data` VALUES (214, 'T-01-002', '/data2/udara1', '2018-01-12 15:43:44', 56.6);
INSERT INTO `data` VALUES (215, 'T-01-002', '/data2/udara1', '2018-01-12 15:43:50', 56.48);
INSERT INTO `data` VALUES (216, 'T-01-002', '/data2/udara1', '2018-01-12 15:43:54', 56.36);
INSERT INTO `data` VALUES (217, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:00', 56.2);
INSERT INTO `data` VALUES (218, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:05', 56.14);
INSERT INTO `data` VALUES (219, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:11', 56.08);
INSERT INTO `data` VALUES (220, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:15', 56.05);
INSERT INTO `data` VALUES (221, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:21', 55.99);
INSERT INTO `data` VALUES (222, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:26', 55.99);
INSERT INTO `data` VALUES (223, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:32', 55.93);
INSERT INTO `data` VALUES (224, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:36', 55.87);
INSERT INTO `data` VALUES (225, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:42', 55.83);
INSERT INTO `data` VALUES (226, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:49', 55.8);
INSERT INTO `data` VALUES (227, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:53', 55.8);
INSERT INTO `data` VALUES (228, 'T-01-002', '/data2/udara1', '2018-01-12 15:44:59', 55.8);
INSERT INTO `data` VALUES (229, 'T-01-002', '/data2/udara1', '2018-01-12 15:45:03', 55.84);
INSERT INTO `data` VALUES (230, 'T-01-002', '/data2/udara1', '2018-01-12 15:45:09', 55.87);
INSERT INTO `data` VALUES (231, 'T-01-002', '/data2/udara1', '2018-01-12 15:45:14', 55.9);
INSERT INTO `data` VALUES (232, 'T-01-002', '/data2/udara1', '2018-01-12 15:45:20', 59.87);
INSERT INTO `data` VALUES (233, 'T-01-002', '/data2/udara1', '2018-01-12 15:45:24', 64.56);
INSERT INTO `data` VALUES (234, 'T-01-002', '/data2/udara1', '2018-01-12 15:45:30', 69.57);
INSERT INTO `data` VALUES (235, 'T-01-002', '/data2/udara1', '2018-01-12 15:45:34', 70.41);
INSERT INTO `data` VALUES (236, 'T-01-002', '/data2/udara2', '2018-01-17 12:29:36', 57.67);
INSERT INTO `data` VALUES (237, 'T-01-002', '/data2/udara2', '2018-01-17 12:29:42', 57.72);
INSERT INTO `data` VALUES (238, 'T-01-002', '/data2/udara2', '2018-01-17 12:29:46', 57.66);
INSERT INTO `data` VALUES (239, 'T-01-002', '/data2/udara2', '2018-01-17 12:29:53', 57.67);
INSERT INTO `data` VALUES (240, 'T-01-002', '/data2/udara2', '2018-01-17 12:29:57', 57.67);
INSERT INTO `data` VALUES (241, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:03', 57.67);
INSERT INTO `data` VALUES (242, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:09', 57.7);
INSERT INTO `data` VALUES (243, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:14', 57.67);
INSERT INTO `data` VALUES (244, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:20', 57.67);
INSERT INTO `data` VALUES (245, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:24', 57.67);
INSERT INTO `data` VALUES (246, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:30', 57.58);
INSERT INTO `data` VALUES (247, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:35', 57.45);
INSERT INTO `data` VALUES (248, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:41', 57.29);
INSERT INTO `data` VALUES (249, 'T-01-002', '/data2/udara2', '2018-01-17 12:30:45', 57.17);
INSERT INTO `data` VALUES (250, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:10', 58.37);
INSERT INTO `data` VALUES (251, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:16', 58.37);
INSERT INTO `data` VALUES (252, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:20', 58.24);
INSERT INTO `data` VALUES (253, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:27', 58.09);
INSERT INTO `data` VALUES (254, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:31', 57.99);
INSERT INTO `data` VALUES (255, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:37', 57.87);
INSERT INTO `data` VALUES (256, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:41', 57.74);
INSERT INTO `data` VALUES (257, 'T-01-002', '/data2/udara2', '2018-01-17 12:31:47', 57.71);
INSERT INTO `data` VALUES (258, 'C-01-001', '/data2/udara1', '2018-02-27 14:00:26', 64.38);
INSERT INTO `data` VALUES (259, 'C-01-001', '/data2/udara1', '2018-02-27 14:00:32', 64.34);
INSERT INTO `data` VALUES (260, 'C-01-001', '/data2/udara1', '2018-02-27 14:00:37', 64.34);
INSERT INTO `data` VALUES (261, 'C-01-001', '/data2/udara1', '2018-02-27 14:00:43', 64.34);
INSERT INTO `data` VALUES (262, 'C-01-001', '/data2/udara1', '2018-02-27 14:00:47', 64.28);
INSERT INTO `data` VALUES (263, 'C-01-001', '/data2/udara1', '2018-02-27 14:00:53', 64.16);
INSERT INTO `data` VALUES (264, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:09', 18.07);
INSERT INTO `data` VALUES (265, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:13', 18.21);
INSERT INTO `data` VALUES (266, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:19', 18.2);
INSERT INTO `data` VALUES (267, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:23', 18.19);
INSERT INTO `data` VALUES (268, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:30', 18.16);
INSERT INTO `data` VALUES (269, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:34', 18.15);
INSERT INTO `data` VALUES (270, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:40', 18.14);
INSERT INTO `data` VALUES (271, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:46', 18.13);
INSERT INTO `data` VALUES (272, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:51', 18.13);
INSERT INTO `data` VALUES (273, 'C-01-001', '/data2/dew1', '2018-01-12 15:40:57', 18.12);
INSERT INTO `data` VALUES (274, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:01', 18.13);
INSERT INTO `data` VALUES (275, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:07', 18.13);
INSERT INTO `data` VALUES (276, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:12', 18.14);
INSERT INTO `data` VALUES (277, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:18', 18.14);
INSERT INTO `data` VALUES (278, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:22', 18.11);
INSERT INTO `data` VALUES (279, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:28', 18.11);
INSERT INTO `data` VALUES (280, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:33', 18.1);
INSERT INTO `data` VALUES (281, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:39', 18.08);
INSERT INTO `data` VALUES (282, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:43', 18.06);
INSERT INTO `data` VALUES (283, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:49', 18.06);
INSERT INTO `data` VALUES (284, 'C-01-001', '/data2/dew1', '2018-01-12 15:41:56', 18.07);
INSERT INTO `data` VALUES (285, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:00', 18.07);
INSERT INTO `data` VALUES (286, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:06', 18.07);
INSERT INTO `data` VALUES (287, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:10', 18.08);
INSERT INTO `data` VALUES (288, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:16', 18.09);
INSERT INTO `data` VALUES (289, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:21', 18.11);
INSERT INTO `data` VALUES (290, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:27', 18.16);
INSERT INTO `data` VALUES (291, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:31', 18.18);
INSERT INTO `data` VALUES (292, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:37', 18.17);
INSERT INTO `data` VALUES (293, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:41', 18.14);
INSERT INTO `data` VALUES (294, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:48', 18.12);
INSERT INTO `data` VALUES (295, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:52', 18.08);
INSERT INTO `data` VALUES (296, 'C-01-001', '/data2/dew1', '2018-01-12 15:42:58', 18.06);
INSERT INTO `data` VALUES (297, 'C-01-001', '/data2/dew1', '2018-01-12 15:43:04', 18.05);
INSERT INTO `data` VALUES (298, 'C-01-001', '/data2/dew1', '2018-01-12 15:43:09', 18.06);
INSERT INTO `data` VALUES (299, 'C-01-001', '/data2/dew1', '2018-01-12 15:43:15', 18.08);
INSERT INTO `data` VALUES (300, 'T-01-002', '/data2/dew1', '2018-01-12 15:43:39', 17.98);
INSERT INTO `data` VALUES (301, 'T-01-002', '/data2/dew1', '2018-01-12 15:43:46', 18.11);
INSERT INTO `data` VALUES (302, 'T-01-002', '/data2/dew1', '2018-01-12 15:43:50', 18.13);
INSERT INTO `data` VALUES (303, 'T-01-002', '/data2/dew1', '2018-01-12 15:43:56', 18.1);
INSERT INTO `data` VALUES (304, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:00', 18.08);
INSERT INTO `data` VALUES (305, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:07', 18.07);
INSERT INTO `data` VALUES (306, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:11', 18.08);
INSERT INTO `data` VALUES (307, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:17', 18.06);
INSERT INTO `data` VALUES (308, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:21', 18.06);
INSERT INTO `data` VALUES (309, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:28', 18.08);
INSERT INTO `data` VALUES (310, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:32', 18.07);
INSERT INTO `data` VALUES (311, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:38', 18.04);
INSERT INTO `data` VALUES (312, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:42', 18.02);
INSERT INTO `data` VALUES (313, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:49', 18.02);
INSERT INTO `data` VALUES (314, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:55', 18.02);
INSERT INTO `data` VALUES (315, 'T-01-002', '/data2/dew1', '2018-01-12 15:44:59', 18.02);
INSERT INTO `data` VALUES (316, 'T-01-002', '/data2/dew1', '2018-01-12 15:45:05', 18.04);
INSERT INTO `data` VALUES (317, 'T-01-002', '/data2/dew1', '2018-01-12 15:45:09', 18.05);
INSERT INTO `data` VALUES (318, 'T-01-002', '/data2/dew1', '2018-01-12 15:45:16', 18.08);
INSERT INTO `data` VALUES (319, 'T-01-002', '/data2/dew1', '2018-01-12 15:45:20', 19.32);
INSERT INTO `data` VALUES (320, 'T-01-002', '/data2/dew1', '2018-01-12 15:45:26', 20.66);
INSERT INTO `data` VALUES (321, 'T-01-002', '/data2/dew1', '2018-01-12 15:45:30', 22.01);
INSERT INTO `data` VALUES (322, 'T-01-002', '/data2/dew2', '2018-01-17 12:29:38', 20.59);
INSERT INTO `data` VALUES (323, 'T-01-002', '/data2/dew2', '2018-01-17 12:29:42', 20.72);
INSERT INTO `data` VALUES (324, 'T-01-002', '/data2/dew2', '2018-01-17 12:29:48', 20.74);
INSERT INTO `data` VALUES (325, 'T-01-002', '/data2/dew2', '2018-01-17 12:29:53', 20.75);
INSERT INTO `data` VALUES (326, 'T-01-002', '/data2/dew2', '2018-01-17 12:29:59', 20.76);
INSERT INTO `data` VALUES (327, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:05', 20.78);
INSERT INTO `data` VALUES (328, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:09', 20.8);
INSERT INTO `data` VALUES (329, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:16', 20.81);
INSERT INTO `data` VALUES (330, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:20', 20.81);
INSERT INTO `data` VALUES (331, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:26', 20.8);
INSERT INTO `data` VALUES (332, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:30', 20.77);
INSERT INTO `data` VALUES (333, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:37', 20.73);
INSERT INTO `data` VALUES (334, 'T-01-002', '/data2/dew2', '2018-01-17 12:30:41', 20.67);
INSERT INTO `data` VALUES (335, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:12', 20.85);
INSERT INTO `data` VALUES (336, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:16', 20.99);
INSERT INTO `data` VALUES (337, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:22', 20.98);
INSERT INTO `data` VALUES (338, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:27', 20.94);
INSERT INTO `data` VALUES (339, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:33', 20.92);
INSERT INTO `data` VALUES (340, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:37', 20.89);
INSERT INTO `data` VALUES (341, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:43', 20.85);
INSERT INTO `data` VALUES (342, 'T-01-002', '/data2/dew2', '2018-01-17 12:31:49', 20.85);
INSERT INTO `data` VALUES (343, 'C-01-001', '/data2/dew1', '2018-02-27 14:00:28', 23.08);
INSERT INTO `data` VALUES (344, 'C-01-001', '/data2/dew1', '2018-02-27 14:00:32', 23.06);
INSERT INTO `data` VALUES (345, 'C-01-001', '/data2/dew1', '2018-02-27 14:00:39', 23.05);
INSERT INTO `data` VALUES (346, 'C-01-001', '/data2/dew1', '2018-02-27 14:00:43', 23.05);
INSERT INTO `data` VALUES (347, 'C-01-001', '/data2/dew1', '2018-02-27 14:00:49', 23.05);
INSERT INTO `data` VALUES (348, 'C-01-001', '/data2/dew1', '2018-02-27 14:00:53', 23);

-- ----------------------------
-- Table structure for dataset
-- ----------------------------
DROP TABLE IF EXISTS `dataset`;
CREATE TABLE `dataset`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_komoditas` int(11) NULL DEFAULT NULL,
  `id_sensor` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dataset
-- ----------------------------
INSERT INTO `dataset` VALUES (5, 1, 1);
INSERT INTO `dataset` VALUES (9, 1, 2);
INSERT INTO `dataset` VALUES (10, 1, 3);
INSERT INTO `dataset` VALUES (11, 1, 4);
INSERT INTO `dataset` VALUES (12, 2, 1);
INSERT INTO `dataset` VALUES (13, 2, 3);

-- ----------------------------
-- Table structure for komoditas
-- ----------------------------
DROP TABLE IF EXISTS `komoditas`;
CREATE TABLE `komoditas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_komoditas` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon_komoditas` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_komoditas` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `nama_komoditas`(`nama_komoditas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of komoditas
-- ----------------------------
INSERT INTO `komoditas` VALUES (1, 'Cabaiss', 'fa-google-wallet', 'C-01');
INSERT INTO `komoditas` VALUES (2, 'Tomat', 'fa-apple', 'T-01');

-- ----------------------------
-- Table structure for node
-- ----------------------------
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_node` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_komoditas` int(1) NULL DEFAULT NULL,
  `status` int(1) NOT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `nama_node`(`nama_node`) USING BTREE,
  INDEX `id_komoditas`(`id_komoditas`) USING BTREE,
  CONSTRAINT `node_ibfk_1` FOREIGN KEY (`id_komoditas`) REFERENCES `komoditas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of node
-- ----------------------------
INSERT INTO `node` VALUES (1, 'Node Cabai-1', 1, 0, 2);
INSERT INTO `node` VALUES (2, 'Node Tomat-1', 2, 0, 2);
INSERT INTO `node` VALUES (3, 'test', 2, 1, 2);
INSERT INTO `node` VALUES (5, 'tomat-2', 2, 0, 2);

-- ----------------------------
-- Table structure for nodecode
-- ----------------------------
DROP TABLE IF EXISTS `nodecode`;
CREATE TABLE `nodecode`  (
  `id` int(1) NOT NULL,
  `code1` varchar(1800) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code2` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code3` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code4` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code5` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code6` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code7` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code8` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code9` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nodecode
-- ----------------------------
INSERT INTO `nodecode` VALUES (1, '<?php \r\n\r\n$client = new Mosquitto\\Client();\r\n$client->onConnect(\'connect\'); \r\n$client->onDisconnect(\'disconnect\'); \r\n$client->onSubscribe(\'subscribe\'); \r\n$client->onMessage(\'message\'); \r\n$client->connect(\"localhost\", 1883, 60); \r\n$client->subscribe(\'/#\', 1);\r\n\r\n\r\nwhile (true) { \r\n$servername = \"localhost\";\r\n$username = \"root\";\r\n$password = \"1234\";\r\n$dbname = \"data2\";\r\n\r\n// Create connection\r\n$conn = new mysqli($servername, $username, $password, $dbname);\r\n// Check connection\r\nif ($conn->connect_error) {\r\n    die(\"Connection failed: \" . $conn->connect_error);\r\n}\r\n\r\n$sql1 = \"SELECT * FROM relay WHERE id=1\";\r\n$result = $conn->query($sql1);\r\n\r\nif ($result->num_rows > 0) {\r\n  //output data of each row\r\n  while ($row = $result->fetch_assoc()){\r\n    $client->loop();\r\n    $mid = $client->publish(\'/data2/relay1\', $row[\"status\"]);\r\n    echo \"Sent message ID: {$mid}\\n\";\r\n    $client->loop();\r\n    sleep(2);\r\n    echo \"id relay: \" . $row[\"id\"] . \" - Status Relay: \" . $row[\"status\"];\r\n  }\r\n}\r\nelse\r\n{\r\n  echo \"0 results\";\r\n}\r\n$conn->close();\r\n} \r\n\r\n $client->disconnect(); \r\n unset($client); \r\n\r\n  function connect($r) { \r\n   echo \"I got code {$r}\\n\"; \r\n } \r\n\r\n  function subscribe() { \r\n   echo \"Subscribed to a topic\\n\"; \r\n } \r\n\r\n  function message($message) { \r\n  printf(\"\\nGot a message ID %d on topic %s with payload: %s\\n\\n\", $message->mid, $message->topic, $message->payload);\r\n\r\n  $servername = \"localhost\";\r\n  $username = \"root\";\r\n  $password = \"1234\";\r\n  $dbname = \"data2\";\r\n\r\n  // Create connection\r\n  $conn = new mysqli($servername, $username, $password, $dbname);\r\n  // Check connection\r\n  if ($conn->connect_error) {\r\n      die(\"Connection failed: \" . $conn->connect_error);\r\n  }\r\n\r\n  ', ' if ($conn->multi_query($sql) === TRUE) {\r\n    echo \"New record created successfully\\n\";\r\n}\r\n\r\n  $conn->close();\r\n\r\n } \r\n\r\n  function disconnect() { \r\n   echo \"Disconnected cleanly\\n\"; \r\n } ', NULL, NULL, NULL, NULL, NULL, NULL, ' ');

-- ----------------------------
-- Table structure for sensor
-- ----------------------------
DROP TABLE IF EXISTS `sensor`;
CREATE TABLE `sensor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sensor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan_sensor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sensor
-- ----------------------------
INSERT INTO `sensor` VALUES (1, 'udara', 'mengukur udaraa');
INSERT INTO `sensor` VALUES (2, 'suhu', NULL);
INSERT INTO `sensor` VALUES (3, 'tanah', NULL);
INSERT INTO `sensor` VALUES (4, 'dew', NULL);

-- ----------------------------
-- View structure for view_dataset
-- ----------------------------
DROP VIEW IF EXISTS `view_dataset`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_dataset` AS select a.id,
a.id_komoditas,
b.nama_komoditas,
b.kode_komoditas,
a.id_sensor,
c.nama_sensor,
c.keterangan_sensor

from 
dataset as a,
komoditas as b,
sensor as c

where
a.id_sensor = c.id
and
a.id_komoditas = b.id ;

-- ----------------------------
-- View structure for view_node
-- ----------------------------
DROP VIEW IF EXISTS `view_node`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_node` AS SELECT
	a.id,
	a.nama_node,
	a.id_komoditas,
	concat( `b`.`kode_komoditas`,'-', lpad(a.id, 3, 0)) AS `kode_node`,
b.icon_komoditas,
	b.kode_komoditas,
	b.nama_komoditas,
	a.id_user,
	c.fullname,
	c.username,
	a.`status`
	
FROM
	node AS a,
	komoditas as b,
	account as c
WHERE
  a.id_komoditas = b.id
	and
	a.id_user = c.id ;

SET FOREIGN_KEY_CHECKS = 1;
