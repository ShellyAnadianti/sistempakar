/*
 Navicat Premium Data Transfer

 Source Server         : Belajar Basis Data
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : db_sistempakar

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 17/06/2023 17:19:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin`  (
  `ussername` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('klinikgigi', '1234');

-- ----------------------------
-- Table structure for tb_detail_gejala
-- ----------------------------
DROP TABLE IF EXISTS `tb_detail_gejala`;
CREATE TABLE `tb_detail_gejala`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_penyakit_r` int NULL DEFAULT NULL,
  `id_gejala_r` int NULL DEFAULT NULL,
  `cbr_status` enum('true','false') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'true',
  `mb` decimal(10, 1) NULL DEFAULT NULL,
  `md` decimal(10, 1) NULL DEFAULT NULL,
  `w` float NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 106 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_detail_gejala
-- ----------------------------
INSERT INTO `tb_detail_gejala` VALUES (1, 1, 1, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (2, 1, 5, 'true', 0.3, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (3, 1, 12, 'true', 0.3, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (4, 1, 16, 'true', 0.2, 0.1, 3);
INSERT INTO `tb_detail_gejala` VALUES (5, 2, 4, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (6, 2, 16, 'true', 0.3, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (7, 2, 12, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (8, 2, 22, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (9, 2, 24, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (10, 3, 19, 'true', 0.4, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (11, 3, 26, 'true', 0.3, 0.1, 3);
INSERT INTO `tb_detail_gejala` VALUES (12, 3, 21, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (13, 3, 40, 'true', 0.4, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (14, 3, 36, 'true', 0.4, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (15, 4, 12, 'true', 0.2, 0.1, 3);
INSERT INTO `tb_detail_gejala` VALUES (16, 4, 43, 'true', 0.1, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (17, 4, 30, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (18, 4, 28, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (19, 5, 32, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (20, 5, 31, 'true', 0.1, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (21, 5, 39, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (22, 6, 34, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (23, 6, 35, 'true', 0.4, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (24, 6, 45, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (25, 6, 42, 'true', 0.3, 0.1, 5);
INSERT INTO `tb_detail_gejala` VALUES (26, 6, 47, 'true', 0.2, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (27, 6, 37, 'true', 0.2, 0.2, 1);
INSERT INTO `tb_detail_gejala` VALUES (28, 7, 51, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (29, 7, 2, 'true', 0.4, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (30, 7, 7, 'true', 0.2, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (31, 7, 34, 'true', 0.4, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (32, 7, 35, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (33, 8, 3, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (34, 8, 6, 'true', 0.4, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (35, 8, 8, 'true', 0.2, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (36, 8, 9, 'true', 0.4, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (37, 9, 14, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (38, 9, 10, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (39, 9, 13, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (40, 9, 11, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (41, 9, 17, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (42, 10, 15, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (43, 10, 23, 'true', 0.4, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (44, 10, 25, 'true', 0.3, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (45, 10, 34, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (46, 10, 41, 'true', 0.3, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (47, 10, 43, 'true', 0.4, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (48, 10, 44, 'true', 0.4, 0.4, 3);
INSERT INTO `tb_detail_gejala` VALUES (49, 11, 18, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (50, 11, 20, 'true', 0.3, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (51, 11, 33, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (52, 11, 29, 'true', 0.2, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (53, 11, 27, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (54, 11, 38, 'true', 0.3, 0.2, 1);
INSERT INTO `tb_detail_gejala` VALUES (55, 12, 55, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (56, 12, 48, 'true', 0.2, 0.2, 1);
INSERT INTO `tb_detail_gejala` VALUES (57, 12, 49, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (58, 12, 50, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (59, 12, 57, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (60, 12, 53, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (61, 13, 55, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (62, 13, 59, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (63, 13, 49, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (64, 13, 34, 'true', 0.3, 0.2, 1);
INSERT INTO `tb_detail_gejala` VALUES (65, 13, 35, 'true', 0.2, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (66, 13, 56, 'true', 0.1, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (67, 13, 52, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (68, 13, 63, 'true', 0.5, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (69, 14, 60, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (70, 14, 62, 'true', 0.3, 0.1, 3);
INSERT INTO `tb_detail_gejala` VALUES (71, 14, 71, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (72, 14, 68, 'true', 0.5, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (73, 14, 66, 'true', 0.4, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (74, 14, 55, 'true', 0.4, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (75, 15, 70, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (76, 15, 58, 'true', 0.4, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (77, 15, 54, 'true', 0.2, 0.1, 3);
INSERT INTO `tb_detail_gejala` VALUES (78, 15, 49, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (79, 15, 16, 'true', 0.1, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (80, 15, 61, 'true', 0.2, 0.2, 1);
INSERT INTO `tb_detail_gejala` VALUES (81, 15, 76, 'true', 0.3, 0.1, 1);
INSERT INTO `tb_detail_gejala` VALUES (82, 15, 64, 'true', 0.4, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (83, 16, 65, 'true', 0.4, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (84, 16, 67, 'true', 0.3, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (85, 16, 69, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (86, 16, 74, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (87, 17, 72, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (88, 17, 81, 'true', 0.4, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (89, 17, 77, 'true', 0.4, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (90, 17, 75, 'true', 0.3, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (91, 18, 78, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (92, 18, 84, 'true', 0.4, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (93, 18, 82, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (94, 18, 76, 'true', 0.3, 0.1, 3);
INSERT INTO `tb_detail_gejala` VALUES (95, 18, 73, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (96, 19, 19, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (97, 19, 83, 'true', 0.3, 0.3, 3);
INSERT INTO `tb_detail_gejala` VALUES (98, 19, 90, 'true', 0.3, 0.2, 3);
INSERT INTO `tb_detail_gejala` VALUES (99, 19, 86, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (100, 19, 85, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (101, 20, 79, 'true', 0.5, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (102, 20, 80, 'true', 0.5, 0.3, 5);
INSERT INTO `tb_detail_gejala` VALUES (103, 20, 87, 'true', 0.4, 0.4, 5);
INSERT INTO `tb_detail_gejala` VALUES (104, 20, 88, 'true', 0.4, 0.2, 5);
INSERT INTO `tb_detail_gejala` VALUES (105, 20, 89, 'true', 0.4, 0.3, 5);

-- ----------------------------
-- Table structure for tb_gejala
-- ----------------------------
DROP TABLE IF EXISTS `tb_gejala`;
CREATE TABLE `tb_gejala`  (
  `id_gejala` int NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_gejala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_gejala`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 94 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_gejala
-- ----------------------------
INSERT INTO `tb_gejala` VALUES (1, 'G01', 'Nyeri terasa ketika terdapat rangsangan');
INSERT INTO `tb_gejala` VALUES (2, 'G02', 'Disertai adanya karang gigi');
INSERT INTO `tb_gejala` VALUES (3, 'G03', 'Terdengar bunyi kliking  saat membuka mulut');
INSERT INTO `tb_gejala` VALUES (4, 'G04', 'Nyeri berlangsung beberapa menit');
INSERT INTO `tb_gejala` VALUES (5, 'G05', 'Nyeri berlangsung beberapa detik');
INSERT INTO `tb_gejala` VALUES (6, 'G06', 'Terkadang Rahang sulit dibuka/ terkunci');
INSERT INTO `tb_gejala` VALUES (7, 'G07', 'Terlihat cairan pada peradangan');
INSERT INTO `tb_gejala` VALUES (8, 'G08', 'Nyeri telinga/ telinga berdengung');
INSERT INTO `tb_gejala` VALUES (9, 'G09', 'Nyeri otot leher');
INSERT INTO `tb_gejala` VALUES (10, 'G10', 'Perubahan warna sudut bibir menjadi lebih gelap atau menjadi merah');
INSERT INTO `tb_gejala` VALUES (11, 'G11', 'Kulit di sekitar sudut bibir pecah');
INSERT INTO `tb_gejala` VALUES (12, 'G12', 'Gigi terasa ngilu dan sensitif terhadap rasa manis, panas atau dingin');
INSERT INTO `tb_gejala` VALUES (13, 'G13', 'Terlihat kerak kemerahan pada sudut bibir');
INSERT INTO `tb_gejala` VALUES (14, 'G14', 'Terasa sakit, panas, kering, atau gatal disudut bibir');
INSERT INTO `tb_gejala` VALUES (15, 'G15', 'Gigi ujung belakang rahang bawah ( gigi geraham ke 3) tumbuh miring / tidak sejajar dengan lainnya');
INSERT INTO `tb_gejala` VALUES (16, 'G16', 'Gusi terasa sakit / nyeri');
INSERT INTO `tb_gejala` VALUES (17, 'G17', 'Terlihat luka yang bernanah di sudut bibir ( jika parah)');
INSERT INTO `tb_gejala` VALUES (18, 'G18', 'Rasa terbakar pada luka ');
INSERT INTO `tb_gejala` VALUES (19, 'G19', 'Perubahan warna gigi');
INSERT INTO `tb_gejala` VALUES (20, 'G20', 'Merintis kecil');
INSERT INTO `tb_gejala` VALUES (21, 'G21', 'Mahkota giginya sudah lebih dari 3/4 habis');
INSERT INTO `tb_gejala` VALUES (22, 'G22', 'Analgesik/ obat anti nyeri umumnya tidak meringankan rasa sakit');
INSERT INTO `tb_gejala` VALUES (23, 'G23', 'Gigi ujung belakang rahang bawah ( gigi geraham ke 3) tumbuh sebagian');
INSERT INTO `tb_gejala` VALUES (24, 'G24', 'Nyeri bertambah pada malam hari / nyeri spontan ');
INSERT INTO `tb_gejala` VALUES (25, 'G25', 'Rahang terasa sakit/ tidak bisa membuka menutup mulut secara normal');
INSERT INTO `tb_gejala` VALUES (26, 'G26', 'Bau mulut tidak sedap karena terkadang ada nanah');
INSERT INTO `tb_gejala` VALUES (27, 'G27', 'Kesulitan makan minum dan berbicara');
INSERT INTO `tb_gejala` VALUES (28, 'G28', 'Pendarahan spontan saat menyikat gigi');
INSERT INTO `tb_gejala` VALUES (29, 'G29', 'Bibir terasa kering');
INSERT INTO `tb_gejala` VALUES (30, 'G30', 'Gusi turun membuat gigi terlihat lebih panjang / akar gigi terlihat');
INSERT INTO `tb_gejala` VALUES (31, 'G31', 'Pasien terlihat sehat');
INSERT INTO `tb_gejala` VALUES (32, 'G32', 'Terjadi pada pasien muda berumur 35 kebawah');
INSERT INTO `tb_gejala` VALUES (33, 'G33', 'rasa nyeri pada benjolan benjolan yang muncul');
INSERT INTO `tb_gejala` VALUES (34, 'G34', 'Gusi tampak merah dan bengkak');
INSERT INTO `tb_gejala` VALUES (35, 'G35', 'Gusi mudah berdarah');
INSERT INTO `tb_gejala` VALUES (36, 'G36', 'Gigi lubang tapi tidak terasa sakit');
INSERT INTO `tb_gejala` VALUES (37, 'G37', 'Gatal pada gusi terletak di sela-sela gigi');
INSERT INTO `tb_gejala` VALUES (38, 'G38', 'Rasa Gatal');
INSERT INTO `tb_gejala` VALUES (39, 'G39', 'Kehilangan perlekatan gusi dan penurunan tulang yang cepat');
INSERT INTO `tb_gejala` VALUES (40, 'G40', 'Tumbuh benjolan daging dari dalam gigi atau dekat gigi yang lubang');
INSERT INTO `tb_gejala` VALUES (41, 'G41', 'Nyeri saat membuka mulut');
INSERT INTO `tb_gejala` VALUES (42, 'G42', 'Minum obat2an rutin tertentu');
INSERT INTO `tb_gejala` VALUES (43, 'G43', 'Nyeri saat mengunyah');
INSERT INTO `tb_gejala` VALUES (44, 'G44', 'Bengkak baik intra maupun ekstra oral');
INSERT INTO `tb_gejala` VALUES (45, 'G45', 'Tanpa disertai karang gigi');
INSERT INTO `tb_gejala` VALUES (46, 'G46', 'Gigi Terasa Ngilu');
INSERT INTO `tb_gejala` VALUES (47, 'G47', 'Terdapat karang gigi');
INSERT INTO `tb_gejala` VALUES (48, 'G48', 'Gigi Terasa Sakit');
INSERT INTO `tb_gejala` VALUES (49, 'G49', 'Tidak ada karies');
INSERT INTO `tb_gejala` VALUES (50, 'G50', 'Bentuk cekung yang luas dan permukaan email yang licin.');
INSERT INTO `tb_gejala` VALUES (51, 'G51', 'Pembengkakan lunak pada gusi ');
INSERT INTO `tb_gejala` VALUES (52, 'G52', 'akibat cara sikat gigi yang asal atau salah');
INSERT INTO `tb_gejala` VALUES (53, 'G53', 'Bentuk Tepi Gigi Menjadi Tidak Teratur Dan Kasar');
INSERT INTO `tb_gejala` VALUES (54, 'G54', 'Perubahan warna gigi karena enamel terkikis');
INSERT INTO `tb_gejala` VALUES (55, 'G55', 'Gigi terasa ngilu dan sensitif');
INSERT INTO `tb_gejala` VALUES (56, 'G56', 'Gigi berlubang');
INSERT INTO `tb_gejala` VALUES (57, 'G57', 'Gigi Terlihat Tampak Lebih Menguning');
INSERT INTO `tb_gejala` VALUES (58, 'G58', 'Mahkota ujung gigi terlihat rata');
INSERT INTO `tb_gejala` VALUES (59, 'G59', 'Bentuk gigi tampak terkikis sisi leher gigi dekat gusi');
INSERT INTO `tb_gejala` VALUES (60, 'G60', 'Cekungan tajam pada gigi');
INSERT INTO `tb_gejala` VALUES (61, 'G61', 'Sakit dibagian rahang');
INSERT INTO `tb_gejala` VALUES (62, 'G62', 'Tidak mengalami penurunan pada gusi');
INSERT INTO `tb_gejala` VALUES (63, 'G63', 'kebiasaan menggigit pensil atau benda lain yang keseringan dan lama');
INSERT INTO `tb_gejala` VALUES (64, 'G64', 'Jika malam tidurnya gerot2 gigi');
INSERT INTO `tb_gejala` VALUES (65, 'G65', 'Benjolan tumbuh secara tiba-tiba di bibir dalam');
INSERT INTO `tb_gejala` VALUES (66, 'G66', 'Tiap malam tidur menggerot gigi (bruxism)');
INSERT INTO `tb_gejala` VALUES (67, 'G67', 'Benjolan tidak sakit');
INSERT INTO `tb_gejala` VALUES (68, 'G68', 'Terjadi di leher gigi dekat gusi');
INSERT INTO `tb_gejala` VALUES (69, 'G69', 'Benjolan berukuran kurang dari 1cm hingga 4cm');
INSERT INTO `tb_gejala` VALUES (70, 'G70', 'Gigi lebih sensitif karena hilangnya enamel');
INSERT INTO `tb_gejala` VALUES (71, 'G71', 'Hilangnya enamel gigi');
INSERT INTO `tb_gejala` VALUES (72, 'G72', 'Bentuk gigi yang menyerupai kerucut');
INSERT INTO `tb_gejala` VALUES (73, 'G73', 'Saat waktu pergantian gigi sulung ke gigi dewasa');
INSERT INTO `tb_gejala` VALUES (74, 'G74', 'Benjolan berwarna merah cerah');
INSERT INTO `tb_gejala` VALUES (75, 'G75', 'Tumbuh dibagian rahang atas');
INSERT INTO `tb_gejala` VALUES (76, 'G76', 'Gigi goyang');
INSERT INTO `tb_gejala` VALUES (77, 'G77', 'Bentuk gigi menyerupai gigi taring maupun gigi geraham');
INSERT INTO `tb_gejala` VALUES (78, 'G78', 'Gigi sulung tidak kunjung tanggal');
INSERT INTO `tb_gejala` VALUES (79, 'G79', 'Gigi berlubang hanya pada permukaan');
INSERT INTO `tb_gejala` VALUES (80, 'G80', 'Tidak ada rasa ngilu');
INSERT INTO `tb_gejala` VALUES (81, 'G81', 'Banyak tonjolah pada gigi (tuberculate) yang tidak beraturan (ondotome)');
INSERT INTO `tb_gejala` VALUES (82, 'G82', 'Tidak nyaman dalam mengunyah');
INSERT INTO `tb_gejala` VALUES (83, 'G83', 'Permukaan gigi terasa kasar, tajam');
INSERT INTO `tb_gejala` VALUES (84, 'G84', 'Gigi berjejal atau menumpuk dengan gigi permanen/dewasa yang tumbuh');
INSERT INTO `tb_gejala` VALUES (85, 'G85', 'Gigi terasa ngilu meski terkadang tak kena panas atau dingin');
INSERT INTO `tb_gejala` VALUES (86, 'G86', 'Terasa makanan mudah tersangkut');
INSERT INTO `tb_gejala` VALUES (87, 'G87', 'Gigi tidak sakit ketika mengunyah makanan');
INSERT INTO `tb_gejala` VALUES (88, 'G88', 'Ada lubang hitam / coklat dipermukaan gigi');
INSERT INTO `tb_gejala` VALUES (89, 'G89', 'Kedalaman lubang kecil');
INSERT INTO `tb_gejala` VALUES (90, 'G90', 'kedalaman lubang lebih dari 2mm');

-- ----------------------------
-- Table structure for tb_pasien
-- ----------------------------
DROP TABLE IF EXISTS `tb_pasien`;
CREATE TABLE `tb_pasien`  (
  `id_pasien` int NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gmail` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pasien`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pasien
-- ----------------------------
INSERT INTO `tb_pasien` VALUES (1, 'dinda', 'Perempuan', 'dinda@gmail.c', 'jl.makkah', '123');
INSERT INTO `tb_pasien` VALUES (2, 'jhon', 'Laki-laki', 'jhonlbf@gmail', 'madinah', '321');

-- ----------------------------
-- Table structure for tb_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `tb_penyakit`;
CREATE TABLE `tb_penyakit`  (
  `id_penyakit` int NOT NULL AUTO_INCREMENT,
  `kode_penyakit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_penyakit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penyakit
-- ----------------------------
INSERT INTO `tb_penyakit` VALUES (1, 'P01', 'Pulpitis Reversibel \r\n');
INSERT INTO `tb_penyakit` VALUES (2, 'P02', 'Pupitis Ireversibel');
INSERT INTO `tb_penyakit` VALUES (3, 'P03', 'Nekrosis Pulpa\r\n');
INSERT INTO `tb_penyakit` VALUES (4, 'P04', 'Periodontitis Kronis\r\n');
INSERT INTO `tb_penyakit` VALUES (5, 'P05', 'Periodontitis Akut');
INSERT INTO `tb_penyakit` VALUES (6, 'P06', 'Gingivitis Non-Plaque Induced\r\n');
INSERT INTO `tb_penyakit` VALUES (7, 'P07', 'Gingivitis Plaque Induced\r\n');
INSERT INTO `tb_penyakit` VALUES (8, 'P08', 'Temporomandibular Joint Disorder\r\n');
INSERT INTO `tb_penyakit` VALUES (9, 'P09', 'Cheilitis Angular\r\n');
INSERT INTO `tb_penyakit` VALUES (10, 'P10', 'Tumbuh Gigi Bungsu\r\n');
INSERT INTO `tb_penyakit` VALUES (11, 'P11', 'Stomatitis (sariawan) \r\n');
INSERT INTO `tb_penyakit` VALUES (12, 'P12', 'Erosi Gigi\r\n');
INSERT INTO `tb_penyakit` VALUES (13, 'P13', 'Abrasi Gigi\r\n');
INSERT INTO `tb_penyakit` VALUES (14, 'P14', 'Abfraksi Gigi\r\n');
INSERT INTO `tb_penyakit` VALUES (15, 'P15', 'Atrisi Gigi\r\n');
INSERT INTO `tb_penyakit` VALUES (16, 'P16', 'Mukokel\r\n');
INSERT INTO `tb_penyakit` VALUES (17, 'P17', 'Supernumerary Theeth\r\n');
INSERT INTO `tb_penyakit` VALUES (18, 'P18', 'Persistensi\r\n');
INSERT INTO `tb_penyakit` VALUES (19, 'P19', 'Karies Dentin\r\n');
INSERT INTO `tb_penyakit` VALUES (20, 'P20', 'Karies Enamel\r\n');

-- ----------------------------
-- Table structure for tb_saran
-- ----------------------------
DROP TABLE IF EXISTS `tb_saran`;
CREATE TABLE `tb_saran`  (
  `id_saran` int NOT NULL AUTO_INCREMENT,
  `saran` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_pasien` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_saran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_saran
-- ----------------------------
INSERT INTO `tb_saran` VALUES (1, 'lebih baik', NULL);

SET FOREIGN_KEY_CHECKS = 1;
