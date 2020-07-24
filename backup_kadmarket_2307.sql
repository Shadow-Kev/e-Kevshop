-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : kadmarkexcoraimo.mysql.db
-- Généré le :  jeu. 23 juil. 2020 à 09:46
-- Version du serveur :  5.6.48-log
-- Version de PHP :  7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kadmarkexcoraimo`
--
CREATE DATABASE IF NOT EXISTS `kadmarket` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kadmarket`;

-- --------------------------------------------------------

--
-- Structure de la table `kdm_caracteriques`
--

CREATE TABLE `kdm_caracteriques` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produit` int(11) NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_caracteriques`
--

INSERT INTO `kdm_caracteriques` (`id`, `nom`, `valeur`, `produit`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(26, 'TAILLE DE L’ÉCRAN', '6,39 pouces', 149, 'taille-de-lecran', '2020-02-10 08:21:42', '2020-02-10 08:21:42', NULL),
(27, 'SYSTÈME D\'EXPLOITATION', 'EMUI 9.0 (Basé sur Android 9)', 149, 'systeme-dexploitation', '2020-02-10 08:21:42', '2020-02-10 08:21:42', NULL),
(28, 'MÉMOIRE', '6 GB RAM + 128 GB ROM\r\nCarte nanoSD:jusqu\'à 256 GB', 149, 'memoire', '2020-02-10 08:21:42', '2020-02-10 08:21:42', NULL),
(29, 'APPAREIL PHOTO', 'Caméra arrière:\r\n40 MP (couleur) + 20 MP (couleur) + 8 MP (couleur); ouvertures f/1,8 + f/2,2 + f/2,4; autofocus\r\n\r\nCaméra frontale:\r\n24 MP (couleur); ouverture f/2,0', 149, 'appareil-photo', '2020-02-10 08:21:42', '2020-02-10 08:21:42', NULL),
(30, 'BATTERIE', '4200 mAh (valeur typique)', 149, 'batterie', '2020-02-10 08:21:42', '2020-02-10 08:21:42', NULL),
(31, 'TAILLE DE L’ÉCRAN', '6.088\'\' HD+', 127, 'taille-de-lecran', '2020-02-10 09:26:58', '2020-02-16 00:28:25', NULL),
(32, 'SYSTÈME D\'EXPLOITATION', 'Android™ 9 Pie (Go edition)', 127, 'systeme-dexploitation', '2020-02-10 09:26:58', '2020-02-10 09:26:58', NULL),
(33, 'MÉMOIRE', '16Go de ROM - 1Go de RAM', 127, 'memoire', '2020-02-10 09:26:58', '2020-02-16 00:28:40', NULL),
(34, 'APPAREIL PHOTO', 'Caméra avant 16MP\r\n\r\nCaméra arrière 8.0MP', 127, 'appareil-photo', '2020-02-10 09:26:58', '2020-02-10 09:26:58', NULL),
(35, 'BATTERIE', '3000mAh', 127, 'batterie', '2020-02-10 09:26:58', '2020-02-10 09:26:58', NULL),
(36, 'TAILLE DE L’ÉCRAN', '6,15 pouces', 147, 'taille-de-lecran', '2020-02-11 11:58:59', '2020-02-11 11:58:59', NULL),
(37, 'SYSTÈME D\'EXPLOITATION', 'EMUI 9.0 (Basé sur Android 9)', 147, 'systeme-dexploitation', '2020-02-11 11:58:59', '2020-02-11 11:58:59', NULL),
(38, 'MÉMOIRE', 'RAM:4 Go\r\nStockage:128 Go', 147, 'memoire', '2020-02-11 11:58:59', '2020-02-11 11:58:59', NULL),
(39, 'APPAREIL PHOTO', 'Caméra arrière\r\nTriple caméra:48 MP (ouverture f/1.8) + 8 MP (ouverture f/2.4) + 2 MP (ouverture f/2.4)\r\n\r\nCaméra avant\r\n24 MP (ouverture f/2.0)', 147, 'appareil-photo', '2020-02-11 11:58:59', '2020-02-11 11:58:59', NULL),
(40, 'BATTERIE', 'Type:Lithium polymère\r\nCapacité:3340 mAh (valeur typique) -  3240 mAh (valeur minimum)', 147, 'batterie', '2020-02-11 11:58:59', '2020-02-11 11:58:59', NULL),
(41, 'TAILLE DE L’ÉCRAN', '6.09” HD+ (1560 x 720)', 148, 'taille-de-lecran', '2020-02-11 12:08:04', '2020-02-11 12:08:04', NULL),
(42, 'SYSTÈME D\'EXPLOITATION', 'EMUI 9.0 (basé sur Android 9)', 148, 'systeme-dexploitation', '2020-02-11 12:08:04', '2020-02-11 12:08:04', NULL),
(43, 'MÉMOIRE', '2 GB de RAM + 32 GB Mémoire interne', 148, 'memoire', '2020-02-11 12:08:04', '2020-02-11 12:08:04', NULL),
(44, 'APPAREIL PHOTO', 'Caméra arrière : Caméra AF 13 MP, f/1.8 - \r\nCaméra avant : Appareil photo FF de 8 MP, flash à tonification autonome 2.0', 148, 'appareil-photo', '2020-02-11 12:08:04', '2020-02-11 12:08:04', NULL),
(45, 'BATTERIE', '3020 mAh (valeur typique)', 148, 'batterie', '2020-02-11 12:08:04', '2020-02-11 12:08:04', NULL),
(46, 'TAILLE DE L’ÉCRAN', '6.09 pouces HD+ (1560 x 720)', 150, 'taille-de-lecran', '2020-02-11 12:11:58', '2020-02-11 12:11:58', NULL),
(47, 'SYSTÈME D\'EXPLOITATION', 'EMUI 9.0 (basé sur Android 9)', 150, 'systeme-dexploitation', '2020-02-11 12:11:58', '2020-02-11 12:11:58', NULL),
(48, 'MÉMOIRE', '2 GB de RAM + 32 GB de Mémoire interne', 150, 'memoire', '2020-02-11 12:11:58', '2020-02-11 12:11:58', NULL),
(49, 'APPAREIL PHOTO', 'Caméra arrière: Appareil photo 13 M AF, f/1.8\r\nCaméra selfie: Appareil photo 8 MP FF, Selfie Toning Flash 2.0', 150, 'appareil-photo', '2020-02-11 12:11:58', '2020-02-11 12:11:58', NULL),
(50, 'BATTERIE', '3020 mAh (valeur standard)', 150, 'batterie', '2020-02-11 12:11:58', '2020-02-11 12:11:58', NULL),
(51, 'TAILLE DE L’ÉCRAN', '6,6 pouces avec capteur frontal format goutte d’eau -  HD+', 157, 'taille-de-lecran', '2020-02-11 16:14:09', '2020-02-11 16:14:09', NULL),
(52, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie), XOS 5.0', 157, 'systeme-dexploitation', '2020-02-11 16:14:09', '2020-02-11 16:14:09', NULL),
(53, 'MÉMOIRE', '2 Go de RAM et 32 Go de Mémoire interne', 157, 'memoire', '2020-02-11 16:14:09', '2020-02-11 16:14:09', NULL),
(54, 'APPAREIL PHOTO', 'Façade	8 MP\r\nArrière	13 MP + 2MP noir et blanc + 2 MP AF AVEC FLASH', 157, 'appareil-photo', '2020-02-11 16:14:09', '2020-02-11 16:14:09', NULL),
(55, 'BATTERIE', '5 000 mAh', 157, 'batterie', '2020-02-11 16:14:09', '2020-02-11 16:14:09', NULL),
(56, 'TAILLE DE L’ÉCRAN', '6.2\" pouces', 151, 'taille-de-lecran', '2020-02-12 07:02:30', '2020-02-12 07:02:30', NULL),
(57, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 151, 'systeme-dexploitation', '2020-02-12 07:02:30', '2020-02-12 07:02:30', NULL),
(58, 'MÉMOIRE', '32 Go Mémoire interne - 3 Go de RAM', 151, 'memoire', '2020-02-12 07:02:30', '2020-02-12 07:02:30', NULL),
(59, 'APPAREIL PHOTO', 'Caméra frontale, selfie	32 MP - Caméra arrière, basique	13 MP, Trois caméras', 151, 'appareil-photo', '2020-02-12 07:02:30', '2020-02-12 07:02:30', NULL),
(60, 'BATTERIE', '4000 mAh,  non amovible, Li-Po', 151, 'batterie', '2020-02-12 07:02:30', '2020-02-12 07:02:30', NULL),
(61, 'TAILLE DE L’ÉCRAN', '6.6\" - \r\n720x1600 pixel', 159, 'taille-de-lecran', '2020-02-12 07:19:07', '2020-02-12 07:19:07', NULL),
(62, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 159, 'systeme-dexploitation', '2020-02-12 07:19:07', '2020-02-12 07:19:07', NULL),
(63, 'MÉMOIRE', '32GB - 3GB RAM', 159, 'memoire', '2020-02-12 07:19:07', '2020-02-12 07:19:07', NULL),
(64, 'APPAREIL PHOTO', '16 MP, f/2.0', 159, 'appareil-photo', '2020-02-12 07:19:07', '2020-02-12 07:19:07', NULL),
(65, 'BATTERIE', '3020 mAh (Typical value)', 159, 'batterie', '2020-02-12 07:19:07', '2020-02-12 07:19:07', NULL),
(66, 'TAILLE DE L’ÉCRAN', '6.6\"\r\n720x1600 pixels', 158, 'taille-de-lecran', '2020-02-12 07:22:58', '2020-02-12 07:22:58', NULL),
(67, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 158, 'systeme-dexploitation', '2020-02-12 07:22:58', '2020-02-12 07:22:58', NULL),
(68, 'MÉMOIRE', '64GB 4GB RAM', 158, 'memoire', '2020-02-12 07:22:58', '2020-02-12 07:22:58', NULL),
(69, 'APPAREIL PHOTO', '32 MP, f/2.0, 26mm (wide), 1/2.8\", 0.8µm', 158, 'appareil-photo', '2020-02-12 07:22:58', '2020-02-12 07:22:58', NULL),
(70, 'BATTERIE', '4000 mAh', 158, 'batterie', '2020-02-12 07:22:58', '2020-02-12 07:22:58', NULL),
(71, 'TAILLE DE L’ÉCRAN', '6.21\"\r\n720x1520 pixels', 156, 'taille-de-lecran', '2020-02-12 07:29:09', '2020-02-12 07:29:09', NULL),
(72, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 156, 'systeme-dexploitation', '2020-02-12 07:29:09', '2020-02-12 07:29:09', NULL),
(73, 'MÉMOIRE', '32GB 2GB RAM', 156, 'memoire', '2020-02-12 07:29:09', '2020-02-12 07:29:09', NULL),
(74, 'APPAREIL PHOTO', '13MP\r\n1080p', 156, 'appareil-photo', '2020-02-12 07:29:09', '2020-02-12 07:29:09', NULL),
(75, 'BATTERIE', '3500mAh\r\nLi-Po', 156, 'batterie', '2020-02-12 07:29:09', '2020-02-12 07:29:09', NULL),
(76, 'TAILLE DE L’ÉCRAN', '6.1\" pouces', 168, 'taille-de-lecran', '2020-02-12 07:38:54', '2020-02-12 07:38:54', NULL),
(77, 'SYSTÈME D\'EXPLOITATION', 'iOS 13', 168, 'systeme-dexploitation', '2020-02-12 07:38:54', '2020-02-12 07:38:54', NULL),
(78, 'MÉMOIRE', '128Go - 4Go RAM', 168, 'memoire', '2020-02-12 07:38:54', '2020-02-12 07:38:54', NULL),
(79, 'APPAREIL PHOTO', '(double caméra)\r\n12 mégapixels\r\n12MP ultrawide (f/2.4 13mm)', 168, 'appareil-photo', '2020-02-12 07:38:54', '2020-02-12 07:38:54', NULL),
(80, 'BATTERIE', '3110 mAh - LiPo - lithium polymère (N\'est pas amovible) -\r\nChargement rapide (fast charging) - \r\nRecharge sans fil (Qi Wireless)', 168, 'batterie', '2020-02-12 07:38:54', '2020-02-12 07:38:54', NULL),
(81, 'TAILLE DE L’ÉCRAN', '6.1\" pouces', 167, 'taille-de-lecran', '2020-02-12 09:35:21', '2020-02-12 09:35:21', NULL),
(82, 'SYSTÈME D\'EXPLOITATION', 'iOS 13', 167, 'systeme-dexploitation', '2020-02-12 09:35:21', '2020-02-12 09:35:21', NULL),
(83, 'MÉMOIRE', '64Go (50Go accessible à l\'utilisateur) - 4 Go RAM', 167, 'memoire', '2020-02-12 09:35:21', '2020-02-12 09:35:21', NULL),
(84, 'APPAREIL PHOTO', '(double caméra)\r\n12 mégapixels\r\n12MP ultrawide (f/2.4 13mm)', 167, 'appareil-photo', '2020-02-12 09:35:21', '2020-02-12 09:35:21', NULL),
(85, 'BATTERIE', '3110 mAh', 167, 'batterie', '2020-02-12 09:35:21', '2020-02-12 09:35:21', NULL),
(86, 'TAILLE DE L’ÉCRAN', '5.8\" pouces', 170, 'taille-de-lecran', '2020-02-12 09:40:57', '2020-02-12 09:40:57', NULL),
(87, 'SYSTÈME D\'EXPLOITATION', 'iOS 13', 170, 'systeme-dexploitation', '2020-02-12 09:40:57', '2020-02-12 09:40:57', NULL),
(88, 'MÉMOIRE', '256Go (242Go accessible à l\'utilisateur)\r\nNVMe (SSD) - 4Go RAM', 170, 'memoire', '2020-02-12 09:40:57', '2020-02-12 09:40:57', NULL),
(89, 'APPAREIL PHOTO', '(double caméra frontale)\r\n12 mégapixels\r\n0.3MP TOF 3D', 170, 'appareil-photo', '2020-02-12 09:40:57', '2020-02-12 09:40:57', NULL),
(90, 'BATTERIE', '3046 mAh', 170, 'batterie', '2020-02-12 09:40:57', '2020-02-12 09:40:57', NULL),
(91, 'TAILLE DE L’ÉCRAN', '5.8\" pouces', 169, 'taille-de-lecran', '2020-02-12 10:20:10', '2020-02-12 10:20:10', NULL),
(92, 'SYSTÈME D\'EXPLOITATION', 'iOS 13', 169, 'systeme-dexploitation', '2020-02-12 10:20:10', '2020-02-12 10:20:10', NULL),
(93, 'MÉMOIRE', '64Go (50Go accessible à l\'utilisateur)\r\nNVMe (SSD) - 4 Go RAM', 169, 'memoire', '2020-02-12 10:20:10', '2020-02-12 10:20:10', NULL),
(94, 'APPAREIL PHOTO', '(triple caméra)\r\n- 12 mégapixels\r\n- 12MP ultrawide (f/2.4 13mm)\r\n- 12MP telephoto (f/2.0 52mm 1/3.4\" 1.0µm PDAF OIS 2x-zoom)', 169, 'appareil-photo', '2020-02-12 10:20:10', '2020-02-12 10:20:10', NULL),
(95, 'BATTERIE', '3046 mAh', 169, 'batterie', '2020-02-12 10:20:10', '2020-02-12 10:20:10', NULL),
(96, 'TAILLE DE L’ÉCRAN', '6.5\" pouces', 171, 'taille-de-lecran', '2020-02-12 10:24:32', '2020-02-12 10:24:32', NULL),
(97, 'SYSTÈME D\'EXPLOITATION', 'iOS 13', 171, 'systeme-dexploitation', '2020-02-12 10:24:32', '2020-02-12 10:24:32', NULL),
(98, 'MÉMOIRE', '256Go (242Go accessible à l\'utilisateur)\r\nNVMe (SSD) - 4 Go RAM', 171, 'memoire', '2020-02-12 10:24:32', '2020-02-12 10:24:32', NULL),
(99, 'APPAREIL PHOTO', '(triple caméra)\r\n- 12 mégapixels\r\n- 12MP ultrawide (f/2.4 13mm)\r\n- 12MP telephoto (f/2.0 52mm 1/3.4\" 1.0µm PDAF OIS 2x-zoom)', 171, 'appareil-photo', '2020-02-12 10:24:32', '2020-02-12 10:24:32', NULL),
(100, 'BATTERIE', '3969 mAh', 171, 'batterie', '2020-02-12 10:24:32', '2020-02-12 10:24:32', NULL),
(101, 'TAILLE DE L’ÉCRAN', '6.5\" pouces', 160, 'taille-de-lecran', '2020-02-12 10:29:21', '2020-02-12 10:29:21', NULL),
(102, 'SYSTÈME D\'EXPLOITATION', 'iOS 13', 160, 'systeme-dexploitation', '2020-02-12 10:29:21', '2020-02-12 10:29:21', NULL),
(103, 'MÉMOIRE', '64Go (50Go accessible à l\'utilisateur)\r\nNVMe (SSD) - 4 Go RAM', 160, 'memoire', '2020-02-12 10:29:21', '2020-02-12 10:29:21', NULL),
(104, 'APPAREIL PHOTO', '(triple caméra)\r\n- 12 mégapixels\r\n- 12MP ultrawide (f/2.4 13mm)\r\n- 12MP telephoto (f/2.0 52mm 1/3.4\" 1.0µm PDAF OIS 2x-zoom)', 160, 'appareil-photo', '2020-02-12 10:29:21', '2020-02-12 10:29:21', NULL),
(105, 'BATTERIE', '3969 mAh', 160, 'batterie', '2020-02-12 10:29:21', '2020-02-12 10:29:21', NULL),
(106, 'TAILLE DE L’ÉCRAN', '4.7\" pouces', 182, 'taille-de-lecran', '2020-02-12 11:07:55', '2020-02-12 11:07:55', NULL),
(107, 'SYSTÈME D\'EXPLOITATION', 'iOS 12', 182, 'systeme-dexploitation', '2020-02-12 11:07:55', '2020-02-12 11:07:55', NULL),
(108, 'MÉMOIRE', '16Go (12Go accessible à l\'utilisateur)\r\neMMC - 1 Go RAM', 182, 'memoire', '2020-02-12 11:07:55', '2020-02-12 11:07:55', NULL),
(109, 'APPAREIL PHOTO', '8 mégapixels', 182, 'appareil-photo', '2020-02-12 11:07:55', '2020-02-12 11:07:55', NULL),
(110, 'BATTERIE', '1810 mAh', 182, 'batterie', '2020-02-12 11:07:55', '2020-02-12 11:07:55', NULL),
(111, 'TAILLE DE L’ÉCRAN', '4.7\" pouces', 183, 'taille-de-lecran', '2020-02-12 11:12:41', '2020-02-12 11:12:41', NULL),
(112, 'SYSTÈME D\'EXPLOITATION', 'iOS 12', 183, 'systeme-dexploitation', '2020-02-12 11:12:41', '2020-02-12 11:12:41', NULL),
(113, 'MÉMOIRE', '64Go (55Go accessible à l\'utilisateur)\r\neMMC - 1 Go RAM', 183, 'memoire', '2020-02-12 11:12:41', '2020-02-12 11:12:41', NULL),
(114, 'APPAREIL PHOTO', '8 mégapixels', 183, 'appareil-photo', '2020-02-12 11:12:41', '2020-02-12 11:12:41', NULL),
(118, 'APPAREIL PHOTO', '8 mégapixels', 183, 'appareil-photo', '2020-02-12 11:13:30', '2020-02-12 11:13:30', NULL),
(119, 'BATTERIE', '1810 mAh', 183, 'batterie', '2020-02-12 11:13:30', '2020-02-12 11:13:30', NULL),
(120, 'TAILLE DE L’ÉCRAN', '5.5\" pouces', 188, 'taille-de-lecran', '2020-02-12 11:24:39', '2020-02-12 11:24:39', NULL),
(121, 'SYSTÈME D\'EXPLOITATION', 'iOS 12', 188, 'systeme-dexploitation', '2020-02-12 11:24:39', '2020-02-12 11:24:39', NULL),
(122, 'MÉMOIRE', '16Go (12Go accessible à l\'utilisateur)\r\neMMC - 1 Go RAM', 188, 'memoire', '2020-02-12 11:24:39', '2020-02-12 11:24:39', NULL),
(123, 'APPAREIL PHOTO', '8 mégapixels', 188, 'appareil-photo', '2020-02-12 11:24:39', '2020-02-12 11:24:39', NULL),
(124, 'BATTERIE', '2915 mAh', 188, 'batterie', '2020-02-12 11:24:39', '2020-02-12 11:24:39', NULL),
(130, 'TAILLE DE L’ÉCRAN', '4.7\" pouces', 185, 'taille-de-lecran', '2020-02-12 13:36:27', '2020-02-12 13:36:27', NULL),
(131, 'SYSTÈME D\'EXPLOITATION', 'iOS 13', 185, 'systeme-dexploitation', '2020-02-12 13:36:27', '2020-02-12 13:36:27', NULL),
(132, 'MÉMOIRE', '128Go (114Go accessible à l\'utilisateur)\r\nNVMe (SSD) - 2 Go RAM', 185, 'memoire', '2020-02-12 13:36:27', '2020-02-12 13:36:27', NULL),
(133, 'APPAREIL PHOTO', '12 mégapixels - Flash Double LED', 185, 'appareil-photo', '2020-02-12 13:36:27', '2020-02-12 13:36:27', NULL),
(134, 'BATTERIE', '1715 mAh', 185, 'batterie', '2020-02-12 13:36:27', '2020-02-12 13:36:27', NULL),
(135, 'TAILLE DE L’ÉCRAN', '5.5\r\npouces', 187, 'taille-de-lecran', '2020-02-21 20:46:09', '2020-02-21 20:46:09', NULL),
(136, 'SYSTÈME D\'EXPLOITATION', 'Apple\r\nA9', 187, 'systeme-dexploitation', '2020-02-21 20:46:09', '2020-02-21 20:46:09', NULL),
(137, 'MÉMOIRE', '64 GB  Mémoire Interne - 2 Go RAM', 187, 'memoire', '2020-02-21 20:46:09', '2020-02-21 20:46:09', NULL),
(138, 'APPAREIL PHOTO', '12 Mpx\r\nSimple capteur', 187, 'appareil-photo', '2020-02-21 20:46:09', '2020-02-21 20:46:09', NULL),
(139, 'BATTERIE', '2915\r\nmAh', 187, 'batterie', '2020-02-21 20:46:09', '2020-02-21 20:46:09', NULL),
(145, 'TELEPHONE', 'Dual SIM, 1.77 Pouces', 122, 'telephone', '2020-02-22 04:54:40', '2020-02-22 04:54:40', NULL),
(146, 'APPAREIL PHOTO', '1.3 Mégapixels', 122, 'appareil-photo', '2020-02-22 04:54:40', '2020-02-22 04:54:40', NULL),
(147, 'MÉMOIRE', '4 MB RAM - 4 MB Rom', 122, 'memoire', '2020-02-22 04:54:40', '2020-02-22 04:54:40', NULL),
(148, 'BATTERIE', '1000mAh', 122, 'batterie', '2020-02-22 04:54:40', '2020-02-22 04:54:40', NULL),
(149, 'AUTRES', 'FM - Lampe Torche', 122, 'autres', '2020-02-22 04:54:40', '2020-02-22 04:54:40', NULL),
(150, 'TAILLE DE L’ÉCRAN', '4,0 pouces', 126, 'taille-de-lecran', '2020-02-22 04:59:48', '2020-02-22 04:59:48', NULL),
(151, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 oreo go', 126, 'systeme-dexploitation', '2020-02-22 04:59:48', '2020-02-22 04:59:48', NULL),
(152, 'MÉMOIRE', '8 Go HDD + 512 Mo de RAM, jusqu\'à 32 Go', 126, 'memoire', '2020-02-22 04:59:48', '2020-02-22 04:59:48', NULL),
(153, 'APPAREIL PHOTO', 'Arrière 5.0 MP / avant 2.0 MP', 126, 'appareil-photo', '2020-02-22 04:59:48', '2020-02-22 04:59:48', NULL),
(154, 'BATTERIE', '1500mAh', 126, 'batterie', '2020-02-22 04:59:48', '2020-02-22 04:59:48', NULL),
(155, 'TAILLE DE L’ÉCRAN', '5 pouces', 128, 'taille-de-lecran', '2020-02-22 05:04:17', '2020-02-22 05:04:17', NULL),
(156, 'SYSTÈME D\'EXPLOITATION', 'Android', 128, 'systeme-dexploitation', '2020-02-22 05:04:17', '2020-02-22 05:04:17', NULL),
(157, 'MÉMOIRE', 'Mémoire interne : 8 Go \r\n- RAM : 1 Go', 128, 'memoire', '2020-02-22 05:04:17', '2020-02-22 05:04:17', NULL),
(158, 'APPAREIL PHOTO', 'Caméra Selfie: 2 MP \r\n- Caméra arrière: 5 MP', 128, 'appareil-photo', '2020-02-22 05:04:17', '2020-02-22 05:04:17', NULL),
(159, 'BATTERIE', '2050 mAh', 128, 'batterie', '2020-02-22 05:04:17', '2020-02-22 05:04:17', NULL),
(160, 'TAILLE DE L’ÉCRAN', '5 pouces.', 125, 'taille-de-lecran', '2020-02-22 05:08:29', '2020-02-22 05:08:29', NULL),
(161, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 Oreo Go', 125, 'systeme-dexploitation', '2020-02-22 05:08:29', '2020-02-22 05:08:29', NULL),
(162, 'MÉMOIRE', 'Mémoire interne: 16 Go\r\n- RAM: 1 Go.', 125, 'memoire', '2020-02-22 05:08:29', '2020-02-22 05:08:29', NULL),
(163, 'APPAREIL PHOTO', 'caméra arrière 5MP - \r\nCaméra avant: 2MP.', 125, 'appareil-photo', '2020-02-22 05:08:29', '2020-02-22 05:08:29', NULL),
(164, 'BATTERIE', '2200 mAh inamovible.', 125, 'batterie', '2020-02-22 05:08:29', '2020-02-22 05:08:29', NULL),
(165, 'AUTRES', 'Capteur d’empreintes.', 125, 'autres', '2020-02-22 05:08:29', '2020-02-22 05:08:29', NULL),
(166, 'TAILLE DE L’ÉCRAN', '5,5 pouces, 68,9 cm2 (~ 73,2% rapport écran / corps)', 123, 'taille-de-lecran', '2020-02-22 05:14:20', '2020-02-22 05:14:20', NULL),
(167, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 (Oreo, Go Edition)', 123, 'systeme-dexploitation', '2020-02-22 05:14:20', '2020-02-22 05:14:20', NULL),
(168, 'MÉMOIRE', '- RAM (mémoire) :\r\n1 Go\r\n- Capacité de stockage :\r\n16 GB', 123, 'memoire', '2020-02-22 05:14:20', '2020-02-22 05:14:20', NULL),
(169, 'APPAREIL PHOTO', 'Main :	8MP + VGA -\r\nDe face :	5MP', 123, 'appareil-photo', '2020-02-22 05:14:20', '2020-02-22 05:14:20', NULL),
(170, 'BATTERIE', 'Batterie 4000mAh (charge rapide 5V / 2A)La version PLUS a une batterie 5000mAh', 123, 'batterie', '2020-02-22 05:14:20', '2020-02-22 05:14:20', NULL),
(171, 'TAILLE DE L’ÉCRAN', '6.0“ FW+ IPS plein écran', 124, 'taille-de-lecran', '2020-02-22 05:17:08', '2020-02-22 05:17:08', NULL),
(172, 'SYSTÈME D\'EXPLOITATION', 'Android™ 8.1 (Go edition)', 124, 'systeme-dexploitation', '2020-02-22 05:17:08', '2020-02-22 05:17:08', NULL),
(173, 'MÉMOIRE', '16GB ROM/1GB RAM', 124, 'memoire', '2020-02-22 05:17:08', '2020-02-22 05:17:08', NULL),
(174, 'APPAREIL PHOTO', 'Caméra avant 8MP / Double caméra arrière (8MP Principal)', 124, 'appareil-photo', '2020-02-22 05:17:08', '2020-02-22 05:17:08', NULL),
(175, 'BATTERIE', '5000mAh', 124, 'batterie', '2020-02-22 05:17:08', '2020-02-22 05:17:08', NULL),
(176, 'SMART SELPHIE', 'Beauté faciale IA 3.0', 127, 'smart-selphie', '2020-02-22 05:21:22', '2020-02-22 05:21:22', NULL),
(181, 'TAILLE DE L’ÉCRAN', '6.1 pouces.', 198, 'taille-de-lecran', '2020-02-22 05:28:38', '2020-02-22 05:28:38', NULL),
(182, 'SYSTÈME D\'EXPLOITATION', 'Android™ 9 Pie (Go edition)', 198, 'systeme-dexploitation', '2020-02-22 05:28:38', '2020-02-22 05:28:38', NULL),
(183, 'MÉMOIRE', '32Go/2Go RAM', 198, 'memoire', '2020-02-22 05:28:38', '2020-02-22 05:28:38', NULL),
(184, 'APPAREIL PHOTO', '8MP arrière/ 16MP avant', 198, 'appareil-photo', '2020-02-22 05:28:38', '2020-02-22 05:28:38', NULL),
(185, 'BATTERIE', '3000 mAh', 198, 'batterie', '2020-02-22 05:28:38', '2020-02-22 05:28:38', NULL),
(186, 'TAILLE DE L’ÉCRAN', 'Plein Écran de 6.0\" HD+ IPS', 129, 'taille-de-lecran', '2020-02-22 05:31:42', '2020-02-22 05:31:42', NULL),
(187, 'SYSTÈME D\'EXPLOITATION', 'Android™ 8.1 (Go edition)\r\n\r\nLocalisation', 129, 'systeme-dexploitation', '2020-02-22 05:31:42', '2020-02-22 05:31:42', NULL),
(188, 'MÉMOIRE', '16Go de ROM/1Go de RAM', 129, 'memoire', '2020-02-22 05:31:42', '2020-02-22 05:31:42', NULL),
(189, 'APPAREIL PHOTO', 'Selfie caméra 13MP\r\n\r\nDouble caméra arrière (caméra principale 8MP)', 129, 'appareil-photo', '2020-02-22 05:31:42', '2020-02-22 05:31:42', NULL),
(190, 'BATTERIE', '3000mAh', 129, 'batterie', '2020-02-22 05:31:42', '2020-02-22 05:31:42', NULL),
(191, 'Appareil Photo', 'Oui', 121, 'appareil-photo', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(192, 'Enregistrement Vidéo', 'Oui', 121, 'enregistrement-video', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(193, 'Dual SIM', 'Oui', 121, 'dual-sim', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(194, 'Messagerie', 'Facebook, Twitter', 121, 'messagerie', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(195, 'Réseaux', '2G', 121, 'reseaux', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(196, 'Réveil , Memo Vocal,', 'Oui', 121, 'reveil-memo-vocal', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(197, 'Carte Mémoire', 'Oui', 121, 'carte-memoire', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(198, 'Capacité de la batterie', '1150 mAh', 121, 'capacite-de-la-batterie', '2020-02-22 05:42:50', '2020-02-22 05:42:50', NULL),
(199, 'TAILLE DE L’ÉCRAN', 'Écran Super FULLVIEW de 6,2 pouces', 111, 'taille-de-lecran', '2020-02-22 05:51:57', '2020-02-22 05:51:57', NULL),
(200, 'SYSTÈME D\'EXPLOITATION', 'HiOS basé sur Android™ 8.1', 111, 'systeme-dexploitation', '2020-02-22 05:51:57', '2020-02-22 05:51:57', NULL),
(201, 'MÉMOIRE', '32/16 Go de stockage - \r\n\r\n2/3Go de mémoire RAM', 111, 'memoire', '2020-02-22 05:51:57', '2020-02-22 05:51:57', NULL),
(202, 'APPAREIL PHOTO', 'Appareil photo arrière double capteur 13 MP + 2 MP avec quad LED flash / Selfies nets intelligents de 16 MP', 111, 'appareil-photo', '2020-02-22 05:51:57', '2020-02-22 05:51:57', NULL),
(203, 'BATTERIE', '3750 mAhBatterie', 111, 'batterie', '2020-02-22 05:51:57', '2020-02-22 05:51:57', NULL),
(204, 'TAILLE DE L’ÉCRAN', 'Écran Super FULLVIEW de 6,2 pouces', 108, 'taille-de-lecran', '2020-02-22 05:57:04', '2020-02-22 05:57:04', NULL),
(205, 'SYSTÈME D\'EXPLOITATION', 'HiOS basé sur Android™ 8.1', 108, 'systeme-dexploitation', '2020-02-22 05:57:04', '2020-02-22 05:57:04', NULL),
(206, 'MÉMOIRE', '64 Go de stockage / 6 Go de mémoire RAM', 108, 'memoire', '2020-02-22 05:57:04', '2020-02-22 05:57:04', NULL),
(207, 'APPAREIL PHOTO', 'Appareil photo arrière double capteur 16 MP + 5 MP / Selfies nets intelligents de 24MP', 108, 'appareil-photo', '2020-02-22 05:57:04', '2020-02-22 05:57:04', NULL),
(208, 'BATTERIE', '3750 mAh', 108, 'batterie', '2020-02-22 05:57:04', '2020-02-22 05:57:04', NULL),
(209, 'TAILLE DE L’ÉCRAN', 'Écran encoche en cristal 6.52 po', 113, 'taille-de-lecran', '2020-02-22 06:01:19', '2020-02-22 06:01:19', NULL),
(210, 'SYSTÈME D\'EXPLOITATION', 'HiOS basé sur Android™ 9 Pie', 113, 'systeme-dexploitation', '2020-02-22 06:01:19', '2020-02-22 06:01:19', NULL),
(211, 'MÉMOIRE', '64 Go de ROM + 4 Go de RAM', 113, 'memoire', '2020-02-22 06:01:19', '2020-02-22 06:01:19', NULL),
(212, 'APPAREIL PHOTO', 'Triple caméra arrière de 16MP+2MP+8MP avec quadruple flash / Selfie IA clair de 16 MP / Caméra triple AI Max de 16 MP', 113, 'appareil-photo', '2020-02-22 06:01:19', '2020-02-22 06:01:19', NULL),
(213, 'BATTERIE', '4000mAh(typ)', 113, 'batterie', '2020-02-22 06:01:19', '2020-02-22 06:01:19', NULL),
(214, 'TAILLE DE L’ÉCRAN', '6.2\" (15.75 cm)', 114, 'taille-de-lecran', '2020-02-22 06:41:36', '2020-02-22 06:41:36', NULL),
(215, 'SYSTÈME D\'EXPLOITATION', 'Android v8.1 (Oreo)', 114, 'systeme-dexploitation', '2020-02-22 06:41:36', '2020-02-22 06:41:36', NULL),
(216, 'MÉMOIRE', '4 GB RAM | 64 GB ROM |', 114, 'memoire', '2020-02-22 06:41:36', '2020-02-22 06:41:36', NULL),
(217, 'APPAREIL PHOTO', 'Arrière : 13MP + 5MP | Front : 24MP', 114, 'appareil-photo', '2020-02-22 06:41:36', '2020-02-22 06:41:36', NULL),
(218, 'BATTERIE', '3750 mAh', 114, 'batterie', '2020-02-22 06:41:36', '2020-02-22 06:41:36', NULL),
(219, 'TAILLE DE L’ÉCRAN', '10.1 pouces HD', 141, 'taille-de-lecran', '2020-02-22 06:47:16', '2020-02-22 06:47:16', NULL),
(220, 'SYSTÈME D\'EXPLOITATION', 'Remix', 141, 'systeme-dexploitation', '2020-02-22 06:47:16', '2020-02-22 06:47:16', NULL),
(221, 'MÉMOIRE', '2Go DDR3 / 16Go ROM', 141, 'memoire', '2020-02-22 06:47:16', '2020-02-22 06:47:16', NULL),
(222, 'APPAREIL PHOTO', 'Caméra Principale : 5MP LED Flash / Caméra Frontale : 2MP', 141, 'appareil-photo', '2020-02-22 06:47:16', '2020-02-22 06:47:16', NULL),
(223, 'BATTERIE', '7.000 mAh', 141, 'batterie', '2020-02-22 06:47:16', '2020-02-22 06:47:16', NULL),
(224, 'TAILLE DE L’ÉCRAN', '5 Pouces', 120, 'taille-de-lecran', '2020-02-22 06:51:35', '2020-02-22 06:51:35', NULL),
(225, 'SYSTÈME D\'EXPLOITATION', 'Android OS v8.1 Go', 120, 'systeme-dexploitation', '2020-02-22 06:51:35', '2020-02-22 06:51:35', NULL),
(226, 'MÉMOIRE', 'Mémoire RAM : : 512 Mb / \r\nMemoire ROM : 8 Goextensible jusqu’a 32 Go', 120, 'memoire', '2020-02-22 06:51:35', '2020-02-22 06:51:35', NULL),
(227, 'APPAREIL PHOTO', 'Camera avant : 5MP / \r\nCamera Arrière : 5 MP', 120, 'appareil-photo', '2020-02-22 06:51:35', '2020-02-22 06:51:35', NULL),
(228, 'BATTERIE', '2000mAh Amovible', 120, 'batterie', '2020-02-22 06:51:35', '2020-02-22 06:51:35', NULL),
(229, 'TAILLE DE L’ÉCRAN', '5.5\'\'', 118, 'taille-de-lecran', '2020-02-22 06:56:04', '2020-02-22 06:56:04', NULL),
(230, 'SYSTÈME D\'EXPLOITATION', 'Android  8.1 QUAD-CORE', 118, 'systeme-dexploitation', '2020-02-22 06:56:04', '2020-02-22 06:56:04', NULL),
(231, 'MÉMOIRE', 'Mémoire interne 16GB / Mémoire  RAM 1GB', 118, 'memoire', '2020-02-22 06:56:04', '2020-02-22 06:56:04', NULL),
(232, 'APPAREIL PHOTO', '5MP Arrière et 8 MP Avant', 118, 'appareil-photo', '2020-02-22 06:56:04', '2020-02-22 06:56:04', NULL),
(233, 'BATTERIE', '35000mAh', 118, 'batterie', '2020-02-22 06:56:04', '2020-02-22 06:56:04', NULL),
(234, 'TAILLE DE L’ÉCRAN', '5.5\"', 116, 'taille-de-lecran', '2020-02-22 07:02:11', '2020-02-22 07:02:11', NULL),
(235, 'SYSTÈME D\'EXPLOITATION', 'Android 8.0', 116, 'systeme-dexploitation', '2020-02-22 07:02:11', '2020-02-22 07:02:11', NULL),
(236, 'MÉMOIRE', '1 GB RAM / 8 GB ROM', 116, 'memoire', '2020-02-22 07:02:11', '2020-02-22 07:02:11', NULL),
(237, 'APPAREIL PHOTO', '5 MP f2 Camera / 8 MP Selphie', 116, 'appareil-photo', '2020-02-22 07:02:11', '2020-02-22 07:02:11', NULL),
(238, 'BATTERIE', '4000 mAh', 116, 'batterie', '2020-02-22 07:02:11', '2020-02-22 07:02:11', NULL),
(239, 'TAILLE DE L’ÉCRAN', '5.5 pouces', 109, 'taille-de-lecran', '2020-02-22 07:06:29', '2020-02-22 07:06:29', NULL),
(240, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 Oreo Go Edition', 109, 'systeme-dexploitation', '2020-02-22 07:06:29', '2020-02-22 07:06:29', NULL),
(241, 'MÉMOIRE', 'RAM: 1 Go / \r\nStockage interne: 16 Go', 109, 'memoire', '2020-02-22 07:06:29', '2020-02-22 07:06:29', NULL),
(242, 'APPAREIL PHOTO', 'Primaire: 5MP avec f / 2.2, flash double LED /\r\nSecondaire: 8MP avec flash LED', 109, 'appareil-photo', '2020-02-22 07:06:29', '2020-02-22 07:06:29', NULL),
(243, 'BATTERIE', '4 000 mAh, non amovible', 109, 'batterie', '2020-02-22 07:06:29', '2020-02-22 07:06:29', NULL),
(244, 'TAILLE DE L’ÉCRAN', '5.7″', 203, 'taille-de-lecran', '2020-02-22 07:11:27', '2020-02-22 07:11:27', NULL),
(245, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 Oreo', 203, 'systeme-dexploitation', '2020-02-22 07:11:27', '2020-02-22 07:11:27', NULL),
(246, 'MÉMOIRE', 'Mémoire 16 Go – RAM 1 Go', 203, 'memoire', '2020-02-22 07:11:27', '2020-02-22 07:11:27', NULL),
(247, 'APPAREIL PHOTO', 'Arrière : 5MP / Frontale : 8MP', 203, 'appareil-photo', '2020-02-22 07:11:27', '2020-02-22 07:11:27', NULL),
(248, 'BATTERIE', '3500mAh', 203, 'batterie', '2020-02-22 07:11:27', '2020-02-22 07:11:27', NULL),
(249, 'TAILLE DE L’ÉCRAN', '6.35\" pouces', 117, 'taille-de-lecran', '2020-02-22 07:16:18', '2020-02-22 07:16:18', NULL),
(250, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie), HIOS 5.0', 117, 'systeme-dexploitation', '2020-02-22 07:16:18', '2020-02-22 07:16:18', NULL),
(251, 'MÉMOIRE', '64GB - 6GB RAM', 117, 'memoire', '2020-02-22 07:16:18', '2020-02-22 07:16:18', NULL),
(252, 'APPAREIL PHOTO', '32 MP', 117, 'appareil-photo', '2020-02-22 07:16:18', '2020-02-22 07:16:18', NULL),
(253, 'BATTERIE', '6000 mAh,  non amovible, Li-Po', 117, 'batterie', '2020-02-22 07:16:18', '2020-02-22 07:16:18', NULL),
(254, 'TAILLE DE L’ÉCRAN', '6,52\" HD', 110, 'taille-de-lecran', '2020-02-22 07:21:45', '2020-02-22 07:21:45', NULL),
(255, 'SYSTÈME D\'EXPLOITATION', 'Android™ 9 Pie', 110, 'systeme-dexploitation', '2020-02-22 07:21:45', '2020-02-22 07:21:45', NULL),
(256, 'MÉMOIRE', '32 Go de ROM + 2 Go de RAM', 110, 'memoire', '2020-02-22 07:21:45', '2020-02-22 07:21:45', NULL),
(257, 'APPAREIL PHOTO', 'arrière double 13 MP avec double flash', 110, 'appareil-photo', '2020-02-22 07:21:45', '2020-02-22 07:21:45', NULL),
(258, 'BATTERIE', '3000mAh', 110, 'batterie', '2020-02-22 07:21:45', '2020-02-22 07:21:45', NULL),
(259, 'TAILLE DE L’ÉCRAN', '6.1 pouces', 199, 'taille-de-lecran', '2020-02-22 07:25:28', '2020-02-22 07:25:28', NULL),
(260, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie), HIOS 5.0', 199, 'systeme-dexploitation', '2020-02-22 07:25:28', '2020-02-22 07:25:28', NULL),
(261, 'MÉMOIRE', '16GB - 2GB RAM', 199, 'memoire', '2020-02-22 07:25:28', '2020-02-22 07:25:28', NULL),
(262, 'APPAREIL PHOTO', '8 MP', 199, 'appareil-photo', '2020-02-22 07:25:28', '2020-02-22 07:25:28', NULL),
(263, 'BATTERIE', '3000 mAh,  amovible, Li-Ion', 199, 'batterie', '2020-02-22 07:25:28', '2020-02-22 07:25:28', NULL),
(264, 'Ecran', '2.4 “', 202, 'ecran', '2020-02-22 07:30:47', '2020-02-22 07:30:47', NULL),
(265, 'Dual SIM - Radio FM - Bluetooth', 'Oui', 202, 'dual-sim-radio-fm-bluetooth', '2020-02-22 07:30:47', '2020-02-22 07:30:47', NULL),
(266, 'Caméra', 'arrière avec flash', 202, 'camera', '2020-02-22 07:30:47', '2020-02-22 07:30:47', NULL),
(267, 'Réseau Internet', '2G GSM', 202, 'reseau-internet', '2020-02-22 07:30:47', '2020-02-22 07:30:47', NULL),
(268, 'Mémoire', '4 Mo ROM + 4 Mo', 202, 'memoire', '2020-02-22 07:30:47', '2020-02-22 07:30:47', NULL),
(269, 'Micro SD', 'Oui', 202, 'micro-sd', '2020-02-22 07:30:47', '2020-02-22 07:30:47', NULL),
(270, 'Batterie', '1500 mAh', 202, 'batterie', '2020-02-22 07:30:47', '2020-02-22 07:30:47', NULL),
(271, 'Affichage', '2,8 ” Résolution : 240 X 320', 201, 'affichage', '2020-02-22 07:34:23', '2020-02-22 07:34:23', NULL),
(272, 'Caméra', '0.08M avec flash', 201, 'camera', '2020-02-22 07:34:23', '2020-02-22 07:34:23', NULL),
(273, 'Mémoire', 'RAM : 4 Mo  ROM : 4 Mo -\r\nMicro SD extensible, jusqu’à 32 Go', 201, 'memoire', '2020-02-22 07:34:23', '2020-02-22 07:34:23', NULL),
(274, 'Connectivité', 'FM, BT', 201, 'connectivite', '2020-02-22 07:34:23', '2020-02-22 07:34:23', NULL),
(279, 'Capacité de la batterie', '1500mAH', 201, 'capacite-de-la-batterie', '2020-02-22 07:34:43', '2020-02-22 07:34:43', NULL),
(280, 'TAILLE DE L’ÉCRAN', '7″ Pouces', 119, 'taille-de-lecran', '2020-02-22 07:39:16', '2020-02-22 07:39:16', NULL),
(281, 'SYSTÈME D\'EXPLOITATION', 'Android 7.0 Nougat', 119, 'systeme-dexploitation', '2020-02-22 07:39:16', '2020-02-22 07:39:16', NULL),
(282, 'MÉMOIRE', '16 GB Mémoire interne et 1 GB de RAM', 119, 'memoire', '2020-02-22 07:39:16', '2020-02-22 07:39:16', NULL),
(283, 'APPAREIL PHOTO', 'avant 2MP arrière 5MP', 119, 'appareil-photo', '2020-02-22 07:39:16', '2020-02-22 07:39:16', NULL),
(284, 'BATTERIE', '4000mAh', 119, 'batterie', '2020-02-22 07:39:16', '2020-02-22 07:39:16', NULL),
(285, 'TAILLE DE L’ÉCRAN', '6.35\" pouces', 112, 'taille-de-lecran', '2020-02-22 07:46:48', '2020-02-22 07:46:48', NULL),
(286, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie); HIOS 5.5', 112, 'systeme-dexploitation', '2020-02-22 07:46:48', '2020-02-22 07:46:48', NULL),
(287, 'MÉMOIRE', '64GB 6GB RAM', 112, 'memoire', '2020-02-22 07:46:48', '2020-02-22 07:46:48', NULL),
(288, 'APPAREIL PHOTO', '16 MP', 112, 'appareil-photo', '2020-02-22 07:46:48', '2020-02-22 07:46:48', NULL),
(289, 'BATTERIE', '3500 mAh,  non amovible, Li-Po', 112, 'batterie', '2020-02-22 07:46:48', '2020-02-22 07:46:48', NULL),
(290, 'TAILLE DE L’ÉCRAN', '5\" pouces', 152, 'taille-de-lecran', '2020-02-22 12:48:21', '2020-02-22 12:48:21', NULL),
(291, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 Oreo', 152, 'systeme-dexploitation', '2020-02-22 12:48:21', '2020-02-22 12:48:21', NULL),
(292, 'MÉMOIRE', '1 Go de RAM - 16 Go Mémoire interne', 152, 'memoire', '2020-02-22 12:48:21', '2020-02-22 12:48:21', NULL),
(293, 'APPAREIL PHOTO', '8 MP', 152, 'appareil-photo', '2020-02-22 12:48:21', '2020-02-22 12:48:21', NULL),
(294, 'BATTERIE', '2600 mAh', 152, 'batterie', '2020-02-22 12:48:21', '2020-02-22 12:48:21', NULL),
(295, 'TAILLE DE L’ÉCRAN', '5\" pouces', 190, 'taille-de-lecran', '2020-02-22 12:51:01', '2020-02-22 12:51:01', NULL),
(296, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 Oreo (Go edition)', 190, 'systeme-dexploitation', '2020-02-22 12:51:01', '2020-02-22 12:51:01', NULL),
(297, 'MÉMOIRE', '8 GB, 1 GB RAM', 190, 'memoire', '2020-02-22 12:51:01', '2020-02-22 12:51:01', NULL),
(298, 'APPAREIL PHOTO', '8 MP', 190, 'appareil-photo', '2020-02-22 12:51:01', '2020-02-22 12:51:01', NULL),
(299, 'BATTERIE', '2600 mAh,  amovible, Li-Ion', 190, 'batterie', '2020-02-22 12:51:01', '2020-02-22 12:51:01', NULL),
(300, 'TAILLE DE L’ÉCRAN', '6.7\" pouces', 105, 'taille-de-lecran', '2020-02-22 12:54:25', '2020-02-22 12:54:25', NULL),
(301, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 105, 'systeme-dexploitation', '2020-02-22 12:54:25', '2020-02-22 12:54:25', NULL),
(302, 'MÉMOIRE', '128 GB, 6/8 GB RAM', 105, 'memoire', '2020-02-22 12:54:25', '2020-02-22 12:54:25', NULL),
(303, 'APPAREIL PHOTO', '-32 MP, f/1.7, PDAF\r\n-8 MP, f/2.2, 12mm (ultra grand angle)\r\n-5 MP, f/2.2, capteur de profondeur', 105, 'appareil-photo', '2020-02-22 12:54:25', '2020-02-22 12:54:25', NULL),
(304, 'BATTERIE', '4500 mAh,  non amovible, Li-Po', 105, 'batterie', '2020-02-22 12:54:25', '2020-02-22 12:54:25', NULL),
(305, 'TAILLE DE L’ÉCRAN', '6.7\" pouces', 107, 'taille-de-lecran', '2020-02-22 13:00:29', '2020-02-22 13:00:29', NULL),
(306, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie); One UI', 107, 'systeme-dexploitation', '2020-02-22 13:00:29', '2020-02-22 13:00:29', NULL),
(307, 'MÉMOIRE', '128 GB, 8 GB RAM', 107, 'memoire', '2020-02-22 13:00:29', '2020-02-22 13:00:29', NULL),
(308, 'APPAREIL PHOTO', '-48 MP, f/2.0, 26mm (grand angle), 1/2\", 0.8µm, PDAF\r\n- 8 MP, f/2.2, 12mm (ultra grand angle), 1.12µm\r\n- TOF 3D camera, f/1.2, 30mm', 107, 'appareil-photo', '2020-02-22 13:00:29', '2020-02-22 13:00:29', NULL),
(309, 'BATTERIE', '3700 mAh,  non amovible, Li-Po', 107, 'batterie', '2020-02-22 13:00:29', '2020-02-22 13:00:29', NULL),
(310, 'TAILLE DE L’ÉCRAN', '6.22\" pouces', 191, 'taille-de-lecran', '2020-02-22 13:03:48', '2020-02-22 13:03:48', NULL),
(311, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 (Oreo); Experience 9.5', 191, 'systeme-dexploitation', '2020-02-22 13:03:48', '2020-02-22 13:03:48', NULL),
(312, 'MÉMOIRE', '32 GB, 3 GB RAM 16 GB, 2 GB RAM', 191, 'memoire', '2020-02-22 13:03:48', '2020-02-22 13:03:48', NULL),
(313, 'APPAREIL PHOTO', '-13 MP, f/1.9, 1/3.1\'\', 1.12µm, PDAF\r\n-5 MP, f/2.2, 1/5\", 1.12µm', 191, 'appareil-photo', '2020-02-22 13:03:48', '2020-02-22 13:03:48', NULL),
(314, 'BATTERIE', '3400 mAh,  non amovible, Li-Ion', 191, 'batterie', '2020-02-22 13:03:48', '2020-02-22 13:03:48', NULL),
(315, 'TAILLE DE L’ÉCRAN', '6.3\" pouces', 192, 'taille-de-lecran', '2020-02-22 13:06:37', '2020-02-22 13:06:37', NULL),
(316, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 (Oreo); Experience 9.5', 192, 'systeme-dexploitation', '2020-02-22 13:06:37', '2020-02-22 13:06:37', NULL),
(317, 'MÉMOIRE', '64 GB, 4 GB RAM 32 GB, 3 GB RAM', 192, 'memoire', '2020-02-22 13:06:37', '2020-02-22 13:06:37', NULL),
(318, 'APPAREIL PHOTO', '-13 MP, f/1.9, 1/2.8\'\', 1.12μm, PDAF\r\n-5 MP, f/2.2, 12mm (ultra grand angle), 1/6\", 1.12μm', 192, 'appareil-photo', '2020-02-22 13:06:37', '2020-02-22 13:06:37', NULL),
(319, 'BATTERIE', '5000 mAh,  non amovible, Li-Po', 192, 'batterie', '2020-02-22 13:06:37', '2020-02-22 13:06:37', NULL),
(320, 'TAILLE DE L’ÉCRAN', '6.4\" pouces', 193, 'taille-de-lecran', '2020-02-22 13:12:00', '2020-02-22 13:12:00', NULL),
(321, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 (Oreo)', 193, 'systeme-dexploitation', '2020-02-22 13:12:00', '2020-02-22 13:12:00', NULL),
(322, 'MÉMOIRE', '128 GB, 6 GB RAM 64 GB, 4 GB RAM', 193, 'memoire', '2020-02-22 13:12:00', '2020-02-22 13:12:00', NULL),
(323, 'APPAREIL PHOTO', '-13 MP, f/1.9, PDAF\r\n-5 MP, f/2.2, 12mm (ultra grand angle)\r\n-5 MP, f/2.2, capteur de profondeur', 193, 'appareil-photo', '2020-02-22 13:12:00', '2020-02-22 13:12:00', NULL),
(324, 'BATTERIE', '5000 mAh,  non amovible, Li-Po', 193, 'batterie', '2020-02-22 13:12:00', '2020-02-22 13:12:00', NULL),
(325, 'TAILLE DE L’ÉCRAN', '6.8\" pouces', 196, 'taille-de-lecran', '2020-02-22 13:15:47', '2020-02-22 13:15:47', NULL),
(326, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie); One UI', 196, 'systeme-dexploitation', '2020-02-22 13:15:47', '2020-02-22 13:15:47', NULL),
(327, 'MÉMOIRE', '256/512 GB, 12 GB RAM', 196, 'memoire', '2020-02-22 13:15:47', '2020-02-22 13:15:47', NULL),
(328, 'APPAREIL PHOTO', '-12 MP, f/1.5-2.4, 27mm (grand angle), 1/2.55\", 1.4µm, Dual Pixel PDAF, OIS\r\n- 12 MP, f/2.1, 52mm (téléobjectif), 1/3.6\", 1.0µm, PDAF, OIS, 2x Zoom optique\r\n- 16 MP, f/2.2, 12mm (ultra grand angle), 1.0µm, Super Steady video\r\n- TOF 3D VGA camera', 196, 'appareil-photo', '2020-02-22 13:15:47', '2020-02-22 13:15:47', NULL),
(329, 'BATTERIE', '4300 mAh,  non amovible, Li-Ion', 196, 'batterie', '2020-02-22 13:15:47', '2020-02-22 13:15:47', NULL),
(330, 'TAILLE DE L’ÉCRAN', '6.3\" pouces', 194, 'taille-de-lecran', '2020-02-22 13:30:10', '2020-02-22 13:30:10', NULL),
(331, 'SYSTÈME D\'EXPLOITATION', 'Android 7.1.1 (Nougat), évolutif à Android 8.0 (Oreo)', 194, 'systeme-dexploitation', '2020-02-22 13:30:10', '2020-02-22 13:30:10', NULL),
(332, 'MÉMOIRE', '64/128/256 GB, 6 GB RAM', 194, 'memoire', '2020-02-22 13:30:10', '2020-02-22 13:30:10', NULL),
(333, 'APPAREIL PHOTO', '-12 MP, f/1.7, 26mm (grand angle), 1/2.55\'\', 1.4µm, dual pixel PDAF, OIS\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.6\'\', 1.0µm, AF, OIS, 2x Zoom optique', 194, 'appareil-photo', '2020-02-22 13:30:10', '2020-02-22 13:30:10', NULL),
(334, 'BATTERIE', '3300 mAh,  non amovible, Li-Ion', 194, 'batterie', '2020-02-22 13:30:10', '2020-02-22 13:30:10', NULL),
(335, 'TAILLE DE L’ÉCRAN', '6.4\" pouces', 195, 'taille-de-lecran', '2020-02-22 13:33:54', '2020-02-22 13:33:54', NULL),
(336, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 (Oreo), évolutif à Android 9.0 (Pie); One UI', 195, 'systeme-dexploitation', '2020-02-22 13:33:54', '2020-02-22 13:33:54', NULL),
(337, 'MÉMOIRE', '512 GB, 8 GB RAM 128 GB, 6 GB RAM', 195, 'memoire', '2020-02-22 13:33:54', '2020-02-22 13:33:54', NULL),
(338, 'APPAREIL PHOTO', '-12 MP, f/1.5-2.4, 26mm (grand angle), 1/2.55\'\', 1.4µm, dual pixel PDAF, OIS\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.4\'\', 1.0µm, AF, OIS, 2x Zoom optique', 195, 'appareil-photo', '2020-02-22 13:33:54', '2020-02-22 13:33:54', NULL),
(339, 'BATTERIE', '4000 mAh,  non amovible, Li-Ion', 195, 'batterie', '2020-02-22 13:33:54', '2020-02-22 13:33:54', NULL),
(340, 'TAILLE DE L’ÉCRAN', '6.2\" pouces', 197, 'taille-de-lecran', '2020-02-22 13:37:25', '2020-02-22 13:37:25', NULL),
(341, 'SYSTÈME D\'EXPLOITATION', 'Android 8.0 (Oreo)', 197, 'systeme-dexploitation', '2020-02-22 13:37:25', '2020-02-22 13:37:25', NULL),
(342, 'MÉMOIRE', '128 GB, 6 GB RAM - LATAM', 197, 'memoire', '2020-02-22 13:37:25', '2020-02-22 13:37:25', NULL),
(343, 'APPAREIL PHOTO', '-12 MP, f/1.5-2.4, 26mm (grand angle), 1/2.55\'\', 1.4µm, Dual Pixel PDAF, OIS\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.6\'\', 1.0µm, AF, OIS, 2x Zoom optique', 197, 'appareil-photo', '2020-02-22 13:37:25', '2020-02-22 13:37:25', NULL),
(344, 'BATTERIE', '3500 mAh,  non amovible, Li-Ion', 197, 'batterie', '2020-02-22 13:37:25', '2020-02-22 13:37:25', NULL),
(345, 'TAILLE DE L’ÉCRAN', '6.4\" pouces', 104, 'taille-de-lecran', '2020-02-22 13:40:48', '2020-02-22 13:40:48', NULL),
(346, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 104, 'systeme-dexploitation', '2020-02-22 13:40:48', '2020-02-22 13:40:48', NULL),
(347, 'MÉMOIRE', '32GB 3GB RAM, 64GB 4GB RAM, 128GB 4GB RAM', 104, 'memoire', '2020-02-22 13:40:48', '2020-02-22 13:40:48', NULL),
(348, 'APPAREIL PHOTO', '-25 MP, f/1.7, PDAF\r\n-8 MP, f/2.2, 13mm (ultra grand angle)\r\n-5 MP, f/2.2, capteur de profondeur', 104, 'appareil-photo', '2020-02-22 13:40:48', '2020-02-22 13:40:48', NULL),
(349, 'BATTERIE', '4000 mAh,  non amovible, Li-Po', 104, 'batterie', '2020-02-22 13:40:48', '2020-02-22 13:40:48', NULL),
(350, 'TAILLE DE L’ÉCRAN', '6.2\" pouces', 102, 'taille-de-lecran', '2020-02-22 13:46:09', '2020-02-22 13:46:09', NULL),
(351, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 102, 'systeme-dexploitation', '2020-02-22 13:46:09', '2020-02-22 13:46:09', NULL),
(352, 'MÉMOIRE', '32 GB, 2 GB RAM', 102, 'memoire', '2020-02-22 13:46:09', '2020-02-22 13:46:09', NULL),
(353, 'APPAREIL PHOTO', '-13 MP, f/1.8, 28mm (grand angle), AF\r\n-2 MP, f/2.4, capteur de profondeur', 102, 'appareil-photo', '2020-02-22 13:46:09', '2020-02-22 13:46:09', NULL),
(354, 'BATTERIE', '4000 mAh,  non amovible, Li-Po', 102, 'batterie', '2020-02-22 13:46:09', '2020-02-22 13:46:09', NULL),
(355, 'TAILLE DE L’ÉCRAN', '6.5\" pouces', 103, 'taille-de-lecran', '2020-02-22 13:51:38', '2020-02-22 13:51:38', NULL),
(356, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 (Pie)', 103, 'systeme-dexploitation', '2020-02-22 13:51:38', '2020-02-22 13:51:38', NULL),
(357, 'MÉMOIRE', '32GB 3GB RAM, 64GB 4GB RAM', 103, 'memoire', '2020-02-22 13:51:38', '2020-02-22 13:51:38', NULL),
(358, 'APPAREIL PHOTO', '-13 MP, f/1.8, 27mm (grand angle), PDAF\r\n-8 MP, f/2.2, 13mm (ultra grand angle)\r\n-5 MP, f/2.2, capteur de profondeur', 103, 'appareil-photo', '2020-02-22 13:51:38', '2020-02-22 13:51:38', NULL),
(359, 'BATTERIE', '4000 mAh,  non amovible, Li-Po', 103, 'batterie', '2020-02-22 13:51:39', '2020-02-22 13:51:39', NULL),
(360, 'TAILLE DE L’ÉCRAN', '6\" pouces', 153, 'taille-de-lecran', '2020-02-22 13:54:48', '2020-02-22 13:54:48', NULL),
(361, 'SYSTÈME D\'EXPLOITATION', 'Android 8.1 Oreo (Go edition)', 153, 'systeme-dexploitation', '2020-02-22 13:54:48', '2020-02-22 13:54:48', NULL),
(362, 'MÉMOIRE', '16 GB, 1 GB RAM', 153, 'memoire', '2020-02-22 13:54:48', '2020-02-22 13:54:48', NULL),
(363, 'APPAREIL PHOTO', '-8 MP, f/2.2, AF', 153, 'appareil-photo', '2020-02-22 13:54:48', '2020-02-22 13:54:48', NULL),
(364, 'BATTERIE', '3300 mAh,  non amovible, Li-Ion', 153, 'batterie', '2020-02-22 13:54:48', '2020-02-22 13:54:48', NULL),
(365, 'TAILLE DE L’ÉCRAN', '10.1 pouces', 200, 'taille-de-lecran', '2020-02-22 13:59:39', '2020-02-22 13:59:39', NULL),
(366, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0', 200, 'systeme-dexploitation', '2020-02-22 13:59:39', '2020-02-22 13:59:39', NULL),
(367, 'MÉMOIRE', '32 Go - 2 Go de RAM', 200, 'memoire', '2020-02-22 13:59:39', '2020-02-22 13:59:39', NULL),
(368, 'APPAREIL PHOTO', 'Dorsal 1 : 8 Mpx\r\nFrontal : 5 Mpx', 200, 'appareil-photo', '2020-02-22 13:59:39', '2020-02-22 13:59:39', NULL),
(369, 'BATTERIE', '6150 mAh', 200, 'batterie', '2020-02-22 13:59:39', '2020-02-22 13:59:39', NULL),
(370, 'TAILLE DE L’ÉCRAN', '5.5\" pouces', 184, 'taille-de-lecran', '2020-02-25 07:37:39', '2020-02-25 07:37:39', NULL),
(371, 'SYSTÈME D\'EXPLOITATION', 'iOS 9, évolutif à iOS 12.1.3', 184, 'systeme-dexploitation', '2020-02-25 07:37:39', '2020-02-25 07:37:39', NULL),
(372, 'MÉMOIRE', '64 GB, 2 GB RAM', 184, 'memoire', '2020-02-25 07:37:39', '2020-02-25 07:37:39', NULL),
(373, 'APPAREIL PHOTO', '-12 MP, f/2.2, 29mm (standard), 1/3\'\', 1.22µm, OIS, PDAF', 184, 'appareil-photo', '2020-02-25 07:37:39', '2020-02-25 07:37:39', NULL),
(374, 'BATTERIE', '2750 mAh,  non amovible, Li-Ion', 184, 'batterie', '2020-02-25 07:37:39', '2020-02-25 07:37:39', NULL),
(375, 'TAILLE DE L’ÉCRAN', '4.7\" pouces', 186, 'taille-de-lecran', '2020-02-25 13:36:24', '2020-02-25 13:36:24', NULL),
(376, 'SYSTÈME D\'EXPLOITATION', 'iOS 9, évolutif à iOS 12.1.3', 186, 'systeme-dexploitation', '2020-02-25 13:36:24', '2020-02-25 13:36:24', NULL),
(377, 'MÉMOIRE', '64 GB, 2 GB RAM', 186, 'memoire', '2020-02-25 13:36:24', '2020-02-25 13:36:24', NULL),
(378, 'APPAREIL PHOTO', '-12 MP, f/2.2, 29mm (standard), 1/3\'\', 1.22µm, PDAF', 186, 'appareil-photo', '2020-02-25 13:36:25', '2020-02-25 13:36:25', NULL),
(379, 'BATTERIE', '1715 mAh,  non amovible, Li-Ion', 186, 'batterie', '2020-02-25 13:36:25', '2020-02-25 13:36:25', NULL),
(380, 'TAILLE DE L’ÉCRAN', '5.5\" pouces', 179, 'taille-de-lecran', '2020-02-25 13:39:31', '2020-02-25 13:39:31', NULL),
(381, 'SYSTÈME D\'EXPLOITATION', 'iOS 10.0.1, évolutif à iOS 12.1.3', 179, 'systeme-dexploitation', '2020-02-25 13:39:31', '2020-02-25 13:39:31', NULL),
(382, 'MÉMOIRE', '128GB , 3 GB RAM', 179, 'memoire', '2020-02-25 13:39:31', '2020-02-25 13:39:31', NULL),
(383, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), 1/3\'\', OIS, PDAF\r\n-12 MP, f/2.8, 56mm (téléobjectif), 1/3.6\'\', 2x Zoom optique, AF', 179, 'appareil-photo', '2020-02-25 13:39:31', '2020-02-25 13:39:31', NULL),
(384, 'BATTERIE', '2900 mAh,  non amovible, Li-Ion', 179, 'batterie', '2020-02-25 13:39:31', '2020-02-25 13:39:31', NULL),
(385, 'TAILLE DE L’ÉCRAN', '5.5\" pouces', 178, 'taille-de-lecran', '2020-02-25 13:42:45', '2020-02-25 13:42:45', NULL),
(386, 'SYSTÈME D\'EXPLOITATION', 'iOS 10.0.1, évolutif à iOS 12.1.3', 178, 'systeme-dexploitation', '2020-02-25 13:42:45', '2020-02-25 13:42:45', NULL),
(387, 'MÉMOIRE', '32 GB, 3 GB RAM', 178, 'memoire', '2020-02-25 13:42:45', '2020-02-25 13:42:45', NULL),
(388, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), 1/3\'\', OIS, PDAF\r\n-12 MP, f/2.8, 56mm (téléobjectif), 1/3.6\'\', 2x Zoom optique, AF', 178, 'appareil-photo', '2020-02-25 13:42:45', '2020-02-25 13:42:45', NULL),
(389, 'BATTERIE', '2900 mAh,  non amovible, Li-Ion', 178, 'batterie', '2020-02-25 13:42:45', '2020-02-25 13:42:45', NULL),
(390, 'TAILLE DE L’ÉCRAN', '5.5\" pouces', 176, 'taille-de-lecran', '2020-02-25 13:47:56', '2020-02-25 13:47:56', NULL),
(391, 'SYSTÈME D\'EXPLOITATION', 'iOS 11, évolutif à iOS 12.1.3', 176, 'systeme-dexploitation', '2020-02-25 13:47:56', '2020-02-25 13:47:56', NULL),
(392, 'MÉMOIRE', '64 GB, 3 GB RAM', 176, 'memoire', '2020-02-25 13:47:56', '2020-02-25 13:47:56', NULL),
(393, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), OIS, PDAF\r\n-12 MP, f/2.8, 57mm (téléobjectif), 2x Zoom optique, PDAF', 176, 'appareil-photo', '2020-02-25 13:47:56', '2020-02-25 13:47:56', NULL),
(394, 'BATTERIE', '2691 mAh,  non amovible, Li-Ion', 176, 'batterie', '2020-02-25 13:47:56', '2020-02-25 13:47:56', NULL),
(395, 'TAILLE DE L’ÉCRAN', '5.5\" pouces', 177, 'taille-de-lecran', '2020-02-25 13:50:42', '2020-02-25 13:50:42', NULL),
(396, 'SYSTÈME D\'EXPLOITATION', 'iOS 11, évolutif à iOS 12.1.3', 177, 'systeme-dexploitation', '2020-02-25 13:50:42', '2020-02-25 13:50:42', NULL),
(397, 'MÉMOIRE', '256 GB, 3 GB RAM', 177, 'memoire', '2020-02-25 13:50:42', '2020-02-25 13:50:42', NULL),
(398, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), OIS, PDAF\r\n-12 MP, f/2.8, 57mm (téléobjectif), 2x Zoom optique, PDAF', 177, 'appareil-photo', '2020-02-25 13:50:42', '2020-02-25 13:50:42', NULL),
(399, 'BATTERIE', '2691 mAh,  non amovible, Li-Ion', 177, 'batterie', '2020-02-25 13:50:42', '2020-02-25 13:50:42', NULL),
(400, 'TAILLE DE L’ÉCRAN', '4.7\" pouces', 175, 'taille-de-lecran', '2020-02-25 13:53:49', '2020-02-25 13:53:49', NULL),
(401, 'SYSTÈME D\'EXPLOITATION', 'iOS 11, évolutif à iOS 12.1.3', 175, 'systeme-dexploitation', '2020-02-25 13:53:49', '2020-02-25 13:53:49', NULL),
(402, 'MÉMOIRE', '64 GB, 2 GB RAM', 175, 'memoire', '2020-02-25 13:53:49', '2020-02-25 13:53:49', NULL),
(403, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), OIS, PDAF', 175, 'appareil-photo', '2020-02-25 13:53:49', '2020-02-25 13:53:49', NULL),
(404, 'BATTERIE', '1821 mAh,  non amovible, Li-Ion', 175, 'batterie', '2020-02-25 13:53:49', '2020-02-25 13:53:49', NULL),
(405, 'TAILLE DE L’ÉCRAN', '5.8\" pouces', 166, 'taille-de-lecran', '2020-02-25 13:57:29', '2020-02-25 13:57:29', NULL),
(406, 'SYSTÈME D\'EXPLOITATION', 'iOS 11.1.1, évolutif à iOS 12.1.3', 166, 'systeme-dexploitation', '2020-02-25 13:57:29', '2020-02-25 13:57:29', NULL),
(407, 'MÉMOIRE', '256 GB, 3 GB RAM', 166, 'memoire', '2020-02-25 13:57:29', '2020-02-25 13:57:29', NULL),
(408, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), 1/3\'\', 1.22µm, OIS, PDAF\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.4\'\', 1.0µm, OIS, PDAF, 2x Zoom optique', 166, 'appareil-photo', '2020-02-25 13:57:29', '2020-02-25 13:57:29', NULL),
(409, 'BATTERIE', '2716 mAh,  non amovible, Li-Ion', 166, 'batterie', '2020-02-25 13:57:29', '2020-02-25 13:57:29', NULL),
(410, 'TAILLE DE L’ÉCRAN', '5.8\" pouces', 165, 'taille-de-lecran', '2020-02-25 13:59:52', '2020-02-25 13:59:52', NULL),
(411, 'SYSTÈME D\'EXPLOITATION', 'iOS 11.1.1, évolutif à iOS 12.1.3', 165, 'systeme-dexploitation', '2020-02-25 13:59:52', '2020-02-25 13:59:52', NULL),
(412, 'MÉMOIRE', '64 GB, 3 GB RAM', 165, 'memoire', '2020-02-25 13:59:52', '2020-02-25 13:59:52', NULL),
(413, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), 1/3\'\', 1.22µm, OIS, PDAF\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.4\'\', 1.0µm, OIS, PDAF, 2x Zoom optique', 165, 'appareil-photo', '2020-02-25 13:59:52', '2020-02-25 13:59:52', NULL),
(414, 'BATTERIE', '2716 mAh,  non amovible, Li-Ion', 165, 'batterie', '2020-02-25 13:59:52', '2020-02-25 13:59:52', NULL),
(415, 'TAILLE DE L’ÉCRAN', '6.1\" pouces', 173, 'taille-de-lecran', '2020-02-25 14:03:27', '2020-02-25 14:03:27', NULL),
(416, 'SYSTÈME D\'EXPLOITATION', 'iOS 12, évolutif à iOS 12.1.3', 173, 'systeme-dexploitation', '2020-02-25 14:03:27', '2020-02-25 14:03:27', NULL),
(417, 'MÉMOIRE', '128 GB, 3 GB RAM', 173, 'memoire', '2020-02-25 14:03:27', '2020-02-25 14:03:27', NULL),
(418, 'APPAREIL PHOTO', '-12 MP, f/1.8, 26mm (grand angle), 1/2.55\'\', 1.4µm, OIS, PDAF', 173, 'appareil-photo', '2020-02-25 14:03:27', '2020-02-25 14:03:27', NULL),
(419, 'BATTERIE', '2942 mAh,  non amovible, Li-Ion', 173, 'batterie', '2020-02-25 14:03:27', '2020-02-25 14:03:27', NULL),
(420, 'TAILLE DE L’ÉCRAN', '6.1\" pouces', 174, 'taille-de-lecran', '2020-02-25 14:06:23', '2020-02-25 14:06:23', NULL),
(421, 'SYSTÈME D\'EXPLOITATION', 'iOS 12, évolutif à iOS 12.1.3', 174, 'systeme-dexploitation', '2020-02-25 14:06:23', '2020-02-25 14:06:23', NULL),
(422, 'MÉMOIRE', '256 GB, 3 GB RAM', 174, 'memoire', '2020-02-25 14:06:23', '2020-02-25 14:06:23', NULL),
(423, 'APPAREIL PHOTO', '-12 MP, f/1.8, 26mm (grand angle), 1/2.55\'\', 1.4µm, OIS, PDAF', 174, 'appareil-photo', '2020-02-25 14:06:23', '2020-02-25 14:06:23', NULL),
(424, 'BATTERIE', '2942 mAh,  non amovible, Li-Ion', 174, 'batterie', '2020-02-25 14:06:23', '2020-02-25 14:06:23', NULL),
(425, 'TAILLE DE L’ÉCRAN', '6.1\" pouces', 172, 'taille-de-lecran', '2020-02-25 14:08:44', '2020-02-25 14:08:44', NULL);
INSERT INTO `kdm_caracteriques` (`id`, `nom`, `valeur`, `produit`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(426, 'SYSTÈME D\'EXPLOITATION', 'iOS 12, évolutif à iOS 12.1.3', 172, 'systeme-dexploitation', '2020-02-25 14:08:44', '2020-02-25 14:08:44', NULL),
(427, 'MÉMOIRE', '64 GB, 3 GB RAM', 172, 'memoire', '2020-02-25 14:08:44', '2020-02-25 14:08:44', NULL),
(428, 'APPAREIL PHOTO', '-12 MP, f/1.8, 26mm (grand angle), 1/2.55\'\', 1.4µm, OIS, PDAF', 172, 'appareil-photo', '2020-02-25 14:08:44', '2020-02-25 14:08:44', NULL),
(429, 'BATTERIE', '2942 mAh,  non amovible, Li-Ion', 172, 'batterie', '2020-02-25 14:08:44', '2020-02-25 14:08:44', NULL),
(430, 'TAILLE DE L’ÉCRAN', '5.8\" pouces', 164, 'taille-de-lecran', '2020-02-25 14:11:54', '2020-02-25 14:11:54', NULL),
(431, 'SYSTÈME D\'EXPLOITATION', 'iOS 12, évolutif à iOS 12.1.3', 164, 'systeme-dexploitation', '2020-02-25 14:11:54', '2020-02-25 14:11:54', NULL),
(432, 'MÉMOIRE', '256 GB, 4 GB RAM', 164, 'memoire', '2020-02-25 14:11:54', '2020-02-25 14:11:54', NULL),
(433, 'APPAREIL PHOTO', '-12 MP, f/1.8, 26mm (grand angle), 1/2.55\'\', 1.4µm, OIS, PDAF\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.4\'\', 1.0µm, OIS, PDAF, 2x Zoom optique', 164, 'appareil-photo', '2020-02-25 14:11:54', '2020-02-25 14:11:54', NULL),
(434, 'BATTERIE', '2658 mAh,  non amovible, Li-Ion', 164, 'batterie', '2020-02-25 14:11:54', '2020-02-25 14:11:54', NULL),
(435, 'TAILLE DE L’ÉCRAN', '5.8\" pouces', 161, 'taille-de-lecran', '2020-02-25 14:15:22', '2020-02-25 14:15:22', NULL),
(436, 'SYSTÈME D\'EXPLOITATION', 'iOS 12, évolutif à iOS 12.1.3', 161, 'systeme-dexploitation', '2020-02-25 14:15:22', '2020-02-25 14:15:22', NULL),
(437, 'MÉMOIRE', '64 GB, 4 GB RAM', 161, 'memoire', '2020-02-25 14:15:22', '2020-02-25 14:15:22', NULL),
(438, 'APPAREIL PHOTO', '-12 MP, f/1.8, 26mm (grand angle), 1/2.55\'\', 1.4µm, OIS, PDAF\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.4\'\', 1.0µm, OIS, PDAF, 2x Zoom optique', 161, 'appareil-photo', '2020-02-25 14:15:22', '2020-02-25 14:15:22', NULL),
(439, 'BATTERIE', '2658 mAh,  non amovible, Li-Ion', 161, 'batterie', '2020-02-25 14:15:22', '2020-02-25 14:15:22', NULL),
(440, 'TAILLE DE L’ÉCRAN', '6.5\" pouces', 163, 'taille-de-lecran', '2020-02-25 14:26:47', '2020-02-25 14:26:47', NULL),
(441, 'SYSTÈME D\'EXPLOITATION', 'iOS 12, évolutif à iOS 12.1.3', 163, 'systeme-dexploitation', '2020-02-25 14:26:47', '2020-02-25 14:26:47', NULL),
(442, 'MÉMOIRE', '256 GB, 4 GB RAM', 163, 'memoire', '2020-02-25 14:26:47', '2020-02-25 14:26:47', NULL),
(443, 'APPAREIL PHOTO', '-12 MP, f/1.8, 26mm (grand angle), 1/2.55\'\', 1.4µm, OIS, PDAF\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.4\'\', 1.0µm, OIS, PDAF, 2x Zoom optique', 163, 'appareil-photo', '2020-02-25 14:26:47', '2020-02-25 14:26:47', NULL),
(444, 'BATTERIE', '3174 mAh,  non amovible, Li-Ion', 163, 'batterie', '2020-02-25 14:26:47', '2020-02-25 14:26:47', NULL),
(445, 'TAILLE DE L’ÉCRAN', '6.5\" pouces', 162, 'taille-de-lecran', '2020-02-25 14:29:15', '2020-02-25 14:29:15', NULL),
(446, 'SYSTÈME D\'EXPLOITATION', 'iOS 12, évolutif à iOS 12.1.3', 162, 'systeme-dexploitation', '2020-02-25 14:29:15', '2020-02-25 14:29:15', NULL),
(447, 'MÉMOIRE', '64 GB, 4 GB RAM', 162, 'memoire', '2020-02-25 14:29:16', '2020-02-25 14:29:16', NULL),
(448, 'APPAREIL PHOTO', '-12 MP, f/1.8, 26mm (grand angle), 1/2.55\'\', 1.4µm, OIS, PDAF\r\n-12 MP, f/2.4, 52mm (téléobjectif), 1/3.4\'\', 1.0µm, OIS, PDAF, 2x Zoom optique', 162, 'appareil-photo', '2020-02-25 14:29:16', '2020-02-25 14:29:16', NULL),
(449, 'BATTERIE', '3174 mAh,  non amovible, Li-Ion', 162, 'batterie', '2020-02-25 14:29:16', '2020-02-25 14:29:16', NULL),
(450, 'TAILLE DE L’ÉCRAN', '4.7\" pouces', 180, 'taille-de-lecran', '2020-02-25 14:34:07', '2020-02-25 14:34:07', NULL),
(451, 'SYSTÈME D\'EXPLOITATION', 'iOS 10.0.1, évolutif à iOS 12.1.3', 180, 'systeme-dexploitation', '2020-02-25 14:34:07', '2020-02-25 14:34:07', NULL),
(452, 'MÉMOIRE', '32 GB, 2 GB RAM', 180, 'memoire', '2020-02-25 14:34:07', '2020-02-25 14:34:07', NULL),
(453, 'APPAREIL PHOTO', '-12 MP, f/1.8, 28mm (grand angle), 1/3\'\', OIS, PDAF', 180, 'appareil-photo', '2020-02-25 14:34:07', '2020-02-25 14:34:07', NULL),
(454, 'BATTERIE', '1960 mAh,  non amovible, Li-Ion', 180, 'batterie', '2020-02-25 14:34:07', '2020-02-25 14:34:07', NULL),
(455, 'TAILLE DE L’ÉCRAN', '4.7\'\' pouces', 181, 'taille-de-lecran', '2020-02-25 14:47:44', '2020-02-25 14:47:44', NULL),
(456, 'SYSTÈME D\'EXPLOITATION', 'iOS 10', 181, 'systeme-dexploitation', '2020-02-25 14:47:44', '2020-02-25 14:47:44', NULL),
(457, 'MÉMOIRE', '32 GB, 2 GB de RAM', 181, 'memoire', '2020-02-25 14:47:44', '2020-02-25 14:47:44', NULL),
(458, 'APPAREIL PHOTO', '12 Mpx', 181, 'appareil-photo', '2020-02-25 14:47:44', '2020-02-25 14:47:44', NULL),
(459, 'TAILLE DE L’ÉCRAN', '5,71 pouces', 204, 'taille-de-lecran', '2020-02-27 22:08:24', '2020-02-27 22:08:24', NULL),
(460, 'SYSTÈME D\'EXPLOITATION', 'EMUI 9.0 (Basé sur Android 9)', 204, 'systeme-dexploitation', '2020-02-27 22:08:24', '2020-02-27 22:08:24', NULL),
(461, 'MÉMOIRE', 'RAM:2 GB\r\n- ROM: 32 GB', 204, 'memoire', '2020-02-27 22:08:24', '2020-02-28 08:27:32', NULL),
(462, 'APPAREIL PHOTO', 'Arrière:13 MP, ouverture f/1.8 (AF)\r\nAvant:5 MP, ouverture f/2.2 (FF)', 204, 'appareil-photo', '2020-02-27 22:08:24', '2020-02-27 22:08:24', NULL),
(463, 'BATTERIE', '3020 mAh (valeur typique)', 204, 'batterie', '2020-02-27 22:08:24', '2020-02-27 22:08:24', NULL),
(464, 'TAILLE DE L’ÉCRAN', '6.55\" pouces', 205, 'taille-de-lecran', '2020-03-15 12:54:41', '2020-03-15 12:54:41', NULL),
(465, 'SYSTÈME D\'EXPLOITATION', 'Android 10.0; HIOS 6.0', 205, 'systeme-dexploitation', '2020-03-15 12:54:41', '2020-03-15 12:54:41', NULL),
(466, 'MÉMOIRE', '64GB 4GB RAM', 205, 'memoire', '2020-03-15 12:54:41', '2020-03-15 12:54:41', NULL),
(467, 'APPAREIL PHOTO', 'Caméra arrière, basique :  48 MP, Quatre caméras\r\n- Caméra frontale, selfie	: 16 MP, Une caméra', 205, 'appareil-photo', '2020-03-15 12:54:41', '2020-03-15 12:54:41', NULL),
(468, 'BATTERIE', '5000 mAh,  non amovible, Li-Po', 205, 'batterie', '2020-03-15 12:54:41', '2020-03-15 12:54:41', NULL),
(469, 'TAILLE DE L’ÉCRAN', '6.6\" pouces', 207, 'taille-de-lecran', '2020-06-05 06:46:28', '2020-06-05 06:46:28', NULL),
(470, 'SYSTÈME D\'EXPLOITATION', 'Android 10.0; HIOS 6.0', 207, 'systeme-dexploitation', '2020-06-05 06:46:28', '2020-06-05 06:46:28', NULL),
(471, 'MÉMOIRE', '128GB 6GB RAM', 207, 'memoire', '2020-06-05 06:46:28', '2020-06-05 06:46:28', NULL),
(472, 'APPAREIL PHOTO', 'Caméra arrière, basique :	64 MP, Quatre caméras; \r\nSpécifications :\r\n-64 MP, f/1.9, 26mm (grand angle), 1/1.72\'\', 0.8µm, PDAF\r\n-5 MP, f/2.2, 14mm (ultra grand angle)\r\n-2 MP, f/2.8, (depth)\r\n-QVGA.\r\n\r\nCaméra frontale:  selfie	32 MP, Une caméra', 207, 'appareil-photo', '2020-06-05 06:46:28', '2020-06-05 06:46:28', NULL),
(473, 'BATTERIE', '4000 mAh, non amovible, Li-Po', 207, 'batterie', '2020-06-05 06:46:28', '2020-06-05 06:46:28', NULL),
(474, 'TAILLE DE L’ÉCRAN', 'HD+ Dot Notch de 7 po', 209, 'taille-de-lecran', '2020-07-09 18:50:58', '2020-07-09 18:50:58', NULL),
(475, 'SYSTÈME D\'EXPLOITATION', 'Android 10 (Go edition), HIOS 6.0', 209, 'systeme-dexploitation', '2020-07-09 18:50:58', '2020-07-09 18:50:58', NULL),
(476, 'MÉMOIRE', '32 Go de ROM + 2 Go de RAM', 209, 'memoire', '2020-07-09 18:50:58', '2020-07-09 18:50:58', NULL),
(477, 'APPAREIL PHOTO', '-  IA pour selfie de 13 MP avec quadruple flash，ouverture F/1,8, -  avant de 8 MP avec double flash，ouverture F/2', 209, 'appareil-photo', '2020-07-09 18:50:58', '2020-07-09 18:50:58', NULL),
(478, 'BATTERIE', '5 000 mAh', 209, 'batterie', '2020-07-09 18:50:58', '2020-07-09 18:50:58', NULL),
(479, 'TAILLE DE L’ÉCRAN', '6.6\" pouces', 210, 'taille-de-lecran', '2020-07-11 10:52:40', '2020-07-11 10:52:40', NULL),
(480, 'SYSTÈME D\'EXPLOITATION', 'Android 10; HIOS 6.1', 210, 'systeme-dexploitation', '2020-07-11 10:52:40', '2020-07-11 10:52:40', NULL),
(481, 'MÉMOIRE', '32GB 2GB RAM', 210, 'memoire', '2020-07-11 10:52:40', '2020-07-11 10:52:40', NULL),
(482, 'APPAREIL PHOTO', 'Arrière : 13 MP, Quatre caméras &  Avant : -8 MP, f/2.0, (grand angle)', 210, 'appareil-photo', '2020-07-11 10:52:40', '2020-07-11 10:52:40', NULL),
(483, 'BATTERIE', '5000 mAh, non amovible, Li-Po', 210, 'batterie', '2020-07-11 10:52:40', '2020-07-11 10:52:40', NULL),
(484, 'TAILLE DE L’ÉCRAN', '6.55 pouce', 214, 'taille-de-lecran', '2020-07-11 12:18:04', '2020-07-11 12:18:04', NULL),
(485, 'SYSTÈME D\'EXPLOITATION', 'Androïd 10.0 Une interface utilisateur UI 2.0', 214, 'systeme-dexploitation', '2020-07-11 12:18:04', '2020-07-11 12:18:04', NULL),
(486, 'MÉMOIRE', '32/64 Gigabyte, Micro SDXC - (Emplacement dédié) - 3 GB Ram eMMC 5.1', 214, 'memoire', '2020-07-11 12:18:04', '2020-07-11 12:18:04', NULL),
(487, 'APPAREIL PHOTO', 'rilogie:-\r\n- 48 Mégapixels, 26 mm (wide), 1/2.0\", 0.8um, PDAF, f / 2.0\r\n- 8 Méga pixels, (très large), 1/4.0\", 1.12µm, ouverture f / 2,4\r\n- 2 Mégapixels, (Macro), objectif f / 2.4', 214, 'appareil-photo', '2020-07-11 12:18:04', '2020-07-11 12:18:04', NULL),
(488, 'BATTERIE', '5000 MAH, Li-polymère, non amovible', 214, 'batterie', '2020-07-11 12:18:04', '2020-07-11 12:18:04', NULL),
(489, 'TAILLE DE L’ÉCRAN', '162.4mm (6.4\")', 215, 'taille-de-lecran', '2020-07-11 12:38:08', '2020-07-11 12:38:08', NULL),
(490, 'SYSTÈME D\'EXPLOITATION', 'Android 10', 215, 'systeme-dexploitation', '2020-07-11 12:38:08', '2020-07-11 12:38:08', NULL),
(491, 'MÉMOIRE', '32 Go de Mémoire interne & 2 Go de Mémoire RAM', 215, 'memoire', '2020-07-11 12:38:08', '2020-07-11 12:38:08', NULL),
(492, 'APPAREIL PHOTO', '13.0 MP + 2.0 MP + 5.0 MP', 215, 'appareil-photo', '2020-07-11 12:38:08', '2020-07-11 12:38:08', NULL),
(493, 'BATTERIE', '4000 mAh', 215, 'batterie', '2020-07-11 12:38:08', '2020-07-11 12:38:08', NULL),
(494, 'TAILLE DE L’ÉCRAN', '162.4mm (6.4\")', 216, 'taille-de-lecran', '2020-07-11 17:52:32', '2020-07-11 17:52:32', NULL),
(495, 'SYSTÈME D\'EXPLOITATION', 'Android 10', 216, 'systeme-dexploitation', '2020-07-11 17:52:32', '2020-07-11 17:52:32', NULL),
(496, 'MÉMOIRE', '32 Go de Mémoire Interne & 3 Go de RAM', 216, 'memoire', '2020-07-11 17:52:32', '2020-07-11 17:52:32', NULL),
(497, 'APPAREIL PHOTO', '13.0 MP + 2.0 MP + 5.0 MP', 216, 'appareil-photo', '2020-07-11 17:52:32', '2020-07-11 17:52:32', NULL),
(498, 'BATTERIE', '5000 mAh', 216, 'batterie', '2020-07-11 17:52:32', '2020-07-11 17:52:32', NULL),
(499, 'TAILLE DE L’ÉCRAN', '6  pouces', 217, 'taille-de-lecran', '2020-07-11 18:25:52', '2020-07-11 18:25:52', NULL),
(500, 'SYSTÈME D\'EXPLOITATION', 'Android 9.0 Pie (Go Edition)', 217, 'systeme-dexploitation', '2020-07-11 18:25:52', '2020-07-11 18:25:52', NULL),
(501, 'MÉMOIRE', '32GB ROM  / 2GB  de RAM', 217, 'memoire', '2020-07-11 18:25:52', '2020-07-11 18:25:52', NULL),
(502, 'APPAREIL PHOTO', 'Triple 8MP camera', 217, 'appareil-photo', '2020-07-11 18:25:52', '2020-07-11 18:25:52', NULL),
(503, 'BATTERIE', '4000Mah', 217, 'batterie', '2020-07-11 18:25:52', '2020-07-11 18:25:52', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_categories`
--

CREATE TABLE `kdm_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `displayOnMenu` tinyint(4) NOT NULL DEFAULT '1',
  `is_categorie_accessoire` int(11) NOT NULL DEFAULT '0',
  `categorie_parent` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `ordre` int(11) NOT NULL DEFAULT '9999',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_categories`
--

INSERT INTO `kdm_categories` (`id`, `nom`, `description`, `image`, `slug`, `displayOnMenu`, `is_categorie_accessoire`, `categorie_parent`, `active`, `ordre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Smartphones', 'Tout type de smartphone', NULL, 'Smart Phones', 1, 0, 0, 1, 2, NULL, '2019-12-16 12:29:03', NULL),
(2, 'Tablettes', 'Tablettes', NULL, 'Tablettes', 1, 0, 0, 1, 2, NULL, '2019-11-25 14:18:30', NULL),
(3, 'Ecouteur', 'Ecouteur de la marque Oraimo', NULL, 'Accessoires Telephone', 0, 1, 18, 1, 3, NULL, '2019-12-16 12:29:55', NULL),
(4, 'Objets connectes', 'Objets connectes', NULL, 'Objets connectes', 0, 1, 18, 1, 5, NULL, '2019-12-10 10:51:44', NULL),
(5, 'Laptop', 'Laptop', NULL, 'Laptop', 0, 0, 0, 0, 10, NULL, '2019-11-21 14:46:32', NULL),
(6, 'Feature phones', 'Téléphones simples', NULL, 'Telephone', 1, 0, 0, 1, 1, NULL, '2019-12-10 14:29:33', NULL),
(18, 'Oraimo', 'Accessoires', NULL, 'ZoJgYUtCBiTp0PVALIsJ_categorie', 1, 1, 0, 1, 2, '2019-11-22 10:19:05', '2019-12-10 10:09:07', NULL),
(19, 'Powerbank', 'Accumulateur de courant portable qui permet de recharger ses accessoires mobiles sans utiliser de prise électrique.', NULL, 'SIJFKRJmPyeqtkLT8hm8_categorie', 0, 1, 18, 1, 5, '2019-12-16 12:00:18', '2019-12-16 12:26:52', NULL),
(20, 'Chargeur', 'Chargeur mobiles', NULL, 'AymZaoGJ1uwsVGFoPhAy_categorie', 0, 1, 18, 1, 5, '2019-12-16 12:28:26', '2019-12-16 12:28:26', NULL),
(21, 'Cable', 'Cable Téléphone', NULL, 'L0GjxMnG0xlVqPltterb_categorie', 0, 1, 18, 0, 5, '2019-12-16 12:33:07', '2019-12-16 12:33:07', NULL),
(22, 'Mémoire', 'Mémoire', NULL, 'IKAGDwWHoKPZoNp5eIzZ_categorie', 0, 1, 18, 1, 5, '2019-12-16 12:33:52', '2019-12-16 12:33:52', NULL),
(23, 'Autres appareils', 'Routeurs, switch, etc.', NULL, '33nlAAQwcJmk6eo56KCL_categorie', 1, 0, 18, 1, 2, '2019-12-20 15:25:55', '2019-12-20 15:25:55', NULL),
(24, 'Speaker', 'Speaker', NULL, 'uSRLvtOGBZ2rXnF6907L_categorie', 0, 1, 18, 1, 5, '2019-12-26 12:03:05', '2019-12-26 12:03:30', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_code_reduction`
--

CREATE TABLE `kdm_code_reduction` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `code_kadmarketeur` varchar(100) DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `beneficiaire` varchar(255) DEFAULT NULL,
  `phone_beneficiaire` varchar(100) DEFAULT NULL,
  `debut_validite` datetime DEFAULT NULL,
  `fin_validite` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `kdm_code_reduction`
--

INSERT INTO `kdm_code_reduction` (`id`, `code`, `code_kadmarketeur`, `statut`, `beneficiaire`, `phone_beneficiaire`, `debut_validite`, `fin_validite`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HKkKbPYM7L', NULL, 0, 'sad', '077002872', NULL, NULL, '2020-05-04 22:12:28', '2020-05-04 22:12:28', NULL),
(2, 'x2uqyyDrRY', NULL, 0, 'Sad', '077002872', NULL, NULL, '2020-05-04 22:16:30', '2020-05-04 22:16:30', NULL),
(3, '4xIf3Z9M4s', NULL, 0, 'Sad', '077002872', NULL, NULL, '2020-05-04 22:17:42', '2020-05-04 22:17:42', NULL),
(4, 'ZI1sr6qZIt', NULL, 0, 'sad', '077002872', NULL, NULL, '2020-05-04 22:27:21', '2020-05-04 22:27:21', NULL),
(5, 'zzNqNb3Yw3', NULL, 0, 'Sad', '077002872', NULL, NULL, '2020-05-04 22:34:28', '2020-05-04 22:34:28', NULL),
(6, 'iA3ip64IRJ', NULL, 0, 'SELFIE', '074491615', NULL, NULL, '2020-05-05 06:42:30', '2020-05-05 06:42:30', NULL),
(7, '3L2kTZqDaZ', NULL, 1, 'Sad', '077002872', '2020-05-04 00:00:00', '2020-06-05 00:00:00', '2020-05-05 10:47:12', '2020-05-05 17:04:55', NULL),
(8, 'bfdeWq2TGE', NULL, 0, 'Sad', '066936356', NULL, NULL, '2020-05-05 16:26:24', '2020-05-05 16:26:24', NULL),
(9, '7FvLLcnXwV', NULL, 1, 'SELFIE', '074491615', '2020-05-05 20:59:55', '2020-06-04 20:59:55', '2020-05-05 16:43:49', '2020-05-05 18:59:55', NULL),
(10, 'RIrWB3EBfF', NULL, 0, 'MADJITOLEM', '066308580', NULL, NULL, '2020-05-05 18:07:09', '2020-05-05 18:07:09', NULL),
(11, 'T5ppLgyXq7', NULL, 1, 'Sad', '077002872', '2020-05-05 21:17:05', '2020-06-04 21:17:05', '2020-05-05 19:16:11', '2020-05-05 19:17:05', NULL),
(12, 'i92ldOUIHe', NULL, 0, 'Sad', '077002872', NULL, NULL, '2020-05-05 23:08:22', '2020-05-05 23:08:22', NULL),
(13, '5ckvoo1DFj', NULL, 0, 'SELFIE', '074567788', NULL, NULL, '2020-05-06 06:10:04', '2020-05-06 06:10:04', NULL),
(14, 'iPRSjPKV4i', NULL, 0, 'MADJITOLEM', '074359192', NULL, NULL, '2020-05-06 08:39:21', '2020-05-06 08:39:21', NULL),
(15, 'CuHBWS5yPz', NULL, 0, 'KADIE', '077361818', NULL, NULL, '2020-05-06 08:42:11', '2020-05-06 08:42:11', NULL),
(16, 'qG3jM8p9Np', NULL, 0, 'KADIE', '077361818', NULL, NULL, '2020-05-06 08:47:45', '2020-05-06 08:47:45', NULL),
(17, 'ttWR9ndFHG', NULL, 0, 'KADIE', '077361818', NULL, NULL, '2020-05-06 08:54:03', '2020-05-06 08:54:03', NULL),
(18, 'RmykhNNNEe', NULL, 1, 'Jacklin', '077361818', '2020-05-06 11:09:03', '2020-06-05 11:09:03', '2020-05-06 09:07:52', '2020-05-06 09:09:03', NULL),
(19, 'knryTehHdo', NULL, 1, 'MADJITOLEM Kevin', '074359192', '2020-05-06 11:11:47', '2020-06-05 11:11:47', '2020-05-06 09:10:52', '2020-05-06 09:11:47', NULL),
(20, 'mQ0voIauOf', NULL, 1, 'MADJITOLEM', '074359192', '2020-05-06 11:16:49', '2020-06-05 11:16:49', '2020-05-06 09:15:05', '2020-05-06 09:16:49', NULL),
(21, 'vsdRzaooEi', NULL, 1, 'KADIE', '077361818', '2020-05-06 11:30:18', '2020-06-05 11:30:18', '2020-05-06 09:28:48', '2020-05-06 09:30:18', NULL),
(22, 'Fgk2IwoNZo', NULL, 0, 'Boss', '077002872', NULL, NULL, '2020-05-07 11:33:15', '2020-05-07 11:33:15', NULL),
(23, 'SphrPbNwvQ', NULL, 1, 'Jacklin', '077361818', '2020-05-08 22:57:37', '2020-06-07 22:57:37', '2020-05-08 20:56:03', '2020-05-08 20:57:37', NULL),
(24, 'uowbjJmtmw', NULL, 1, 'KADIE', '077361818', '2020-05-08 23:21:04', '2020-06-07 23:21:04', '2020-05-08 21:20:21', '2020-05-08 21:21:04', NULL),
(25, 'tP1L2iZguV', NULL, 0, 'Sad', '077002872', '2020-05-09 00:00:00', '2020-06-26 00:00:00', '2020-05-09 06:03:50', '2020-05-10 11:38:12', NULL),
(26, 'njpSrlsdmC', NULL, 1, 'KADIÉ', '077361818', '2020-05-09 09:42:03', '2020-06-08 09:42:03', '2020-05-09 07:41:18', '2020-05-09 07:42:03', NULL),
(27, 'vZqzpG3BcN', NULL, 0, 'Lomé-Togo', '074491615', NULL, NULL, '2020-05-17 15:42:35', '2020-05-17 15:42:35', NULL),
(28, 'rsZLPKNK1t', NULL, 0, 'test', '077002872', NULL, NULL, '2020-05-17 18:08:27', '2020-05-17 18:08:27', NULL),
(29, 'PIj1iQ8iRb', NULL, 0, 'karlitomaganga@gmail.com', '074093420', NULL, NULL, '2020-05-19 22:12:37', '2020-05-19 22:12:37', NULL),
(30, 'GJx6koiJD1', NULL, 0, 'karlitomaganga@gmail.com', '074093420', NULL, NULL, '2020-05-19 22:14:27', '2020-05-19 22:14:27', NULL),
(31, 'GV4SU1dKDd', NULL, 0, 'qSDQD', '074567788', NULL, NULL, '2020-06-12 09:51:09', '2020-06-12 09:51:09', NULL),
(32, 'I9FvdX3Wo9', NULL, 0, 'KADIE OLA', '066808020', NULL, NULL, '2020-06-15 20:06:04', '2020-06-15 20:06:04', NULL),
(33, 'SCt8v1uPsa', NULL, 1, 'KADIE OLA', '066808020', '2020-06-15 22:08:57', '2020-07-15 22:08:57', '2020-06-15 20:08:04', '2020-06-15 20:08:57', NULL),
(34, 'THd3yTqGcc', NULL, 0, 'qsdqsd', '074574223', NULL, NULL, '2020-06-17 17:19:34', '2020-06-17 17:19:34', NULL),
(35, '6foR3DcFY9', 'WqtwFe', 0, 'SELFIE', '074574223', NULL, NULL, '2020-06-28 11:40:05', '2020-06-28 11:40:05', NULL),
(36, 'vwIc9n13j2', 'WqtwFe', 0, 'ESSAH', '075661086', NULL, NULL, '2020-06-28 11:55:26', '2020-06-28 11:55:26', NULL),
(37, 'Uq8jQQB8GF', '0VYvli', 0, 'KADIE OLA', '077361818', NULL, NULL, '2020-06-28 12:16:34', '2020-06-28 12:16:34', NULL),
(38, 'LIfIyIiUSQ', 'ODb1KJ', 0, 'KADIE OLA', '077361818', NULL, NULL, '2020-06-28 12:28:08', '2020-06-28 12:28:08', NULL),
(39, 'pn6fRKHrFp', '0VYvli', 1, 'KADIE OLA', '077361818', '2020-06-28 14:57:26', '2020-07-28 14:57:26', '2020-06-28 12:56:42', '2020-06-28 12:57:26', NULL),
(40, 'cC5CCeFIaq', 'WqtwFe', 0, 'SELFIE2', '074567788', NULL, NULL, '2020-06-29 13:57:58', '2020-06-29 13:57:58', NULL),
(41, 'BMsjy0DAbz', '0VYvli', 2, 'KADIE OLA', '077361818', '2020-07-01 00:10:31', '2020-07-31 00:10:31', '2020-06-30 22:09:43', '2020-06-30 22:12:33', NULL),
(42, 'D9RGWvVjtp', '2015', 1, 'Alohou', '077946760', '2020-07-05 21:14:22', '2020-08-04 21:14:22', '2020-07-05 19:10:46', '2020-07-05 19:14:22', NULL),
(43, 'DjZvfrnXXx', NULL, 1, 'Ngoua assoumou orphée', '077529528', '2020-07-14 19:11:03', '2020-08-13 19:11:03', '2020-07-14 17:08:55', '2020-07-14 17:11:03', NULL),
(44, 'hhRN4J2Emd', NULL, 0, 'Maxwell', '076288025', NULL, NULL, '2020-07-18 01:34:15', '2020-07-18 01:34:15', NULL),
(45, '9NMlFY1678', NULL, 0, 'Maxwell', '076288025', NULL, NULL, '2020-07-18 01:38:44', '2020-07-18 01:38:44', NULL),
(46, '4Jg2ZSgJEq', NULL, 1, 'Maxwell', '076288025', '2020-07-18 03:44:18', '2020-08-17 03:44:18', '2020-07-18 01:41:48', '2020-07-18 01:44:18', NULL),
(47, 'PDc9PmTOfW', NULL, 0, 'Vycductcd', '077345722', NULL, NULL, '2020-07-19 15:45:02', '2020-07-19 15:45:02', NULL),
(48, 'R4nAzzfv1k', NULL, 0, 'Herth', '077354189', NULL, NULL, '2020-07-22 12:31:46', '2020-07-22 12:31:46', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_commandes`
--

CREATE TABLE `kdm_commandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user` varchar(255) NOT NULL,
  `mode_paiement` int(11) NOT NULL,
  `mode_livraison` int(11) NOT NULL,
  `zone_livraison` int(11) NOT NULL,
  `montant_total` float NOT NULL,
  `code_remise` varchar(100) DEFAULT NULL,
  `montant_a_payer` float NOT NULL,
  `statut` int(11) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_livraison` varchar(1000) DEFAULT NULL,
  `nom_receveur` varchar(255) DEFAULT NULL,
  `tel_receveur` varchar(255) DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_commandes`
--

INSERT INTO `kdm_commandes` (`id`, `date`, `user`, `mode_paiement`, `mode_livraison`, `zone_livraison`, `montant_total`, `code_remise`, `montant_a_payer`, `statut`, `description`, `description_livraison`, `nom_receveur`, `tel_receveur`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '2020-05-06', 'XsqIht7Vl1eru9krTqA2lvGZQRc6YPavQPNK7q39', 1, 1, 1, 121500, NULL, 121500, 0, NULL, 'd', 'Nom', '077002872', '5eb20d87a6e5c', '2020-05-05 23:06:15', '2020-05-05 23:08:48', NULL),
(6, '2020-05-06', 'cEG5fMG4pLddUZ3mszViar3x4l6h8uAJGfAbWNxR', 1, 1, 1, 34800, NULL, 34800, 1, NULL, '90383737DSS', 'uyy', '90383737', '5eb27028bf241', '2020-05-06 06:07:04', '2020-05-06 06:07:04', NULL),
(7, '2020-05-08', 's253Eh2e5caRXxE5EI98gx5TIWSZoy7T8qmHkDQt', 2, 2, 1, 129900, NULL, 129900, 1, NULL, 'Institut Africain d\'Informatique', 'Madjitolem Némonguel Kévin', '074359192', '5eb5cffa3cdc9', '2020-05-08 19:32:42', '2020-05-08 19:32:42', NULL),
(8, '2020-05-09', 'xFnyA4jZJZEvOWCteMI17m4nDjq1mTBOKORmOJHP', 1, 1, 1, 13500, NULL, 13500, 1, NULL, 'test', 'sad', '077002872', '5eb66ad1c6363', '2020-05-09 06:33:21', '2020-05-09 06:33:21', NULL),
(9, '2020-05-10', '6E3CGsUtf3n4QVum9Ydrktxu1UcNZZG48V9r2fi6', 1, 1, 1, 17500, 'tP1L2iZguV', 17500, 1, NULL, 'test', 'sdfdsf', '077002872', '5eb7e54acf259', '2020-05-10 09:28:10', '2020-05-10 09:28:10', NULL),
(10, '2020-05-11', 'hQamHLu0BqHKTIjSptDyDEFHI3dVEBAi7WN3TzQu', 2, 3, 1, 89900, NULL, 89900, 1, NULL, 'Je suis à libreville j\'aimerai bien acheter ce téléphone', 'ONGUINDA Mandja Noel s', '066794938/077934723', '5eb9bd2710ddd', '2020-05-11 19:01:27', '2020-05-11 19:01:27', NULL),
(11, '2020-05-14', 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 1, 1, 1, 120000, NULL, 120000, 1, NULL, 'descr', 'test', '077845884', '5ebd4d456e86c', '2020-05-14 11:53:09', '2020-05-14 11:53:09', NULL),
(12, '2020-05-14', 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 1, 1, 1, 15000, NULL, 15000, 1, NULL, 'test', 'test', '077484940', '5ebd4dde1b92e', '2020-05-14 11:55:42', '2020-05-14 11:55:42', NULL),
(13, '2020-05-14', 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 1, 1, 1, 119000, NULL, 119000, 1, NULL, 'test aaa', 'test', '074359192', '5ebd56e8a3efe', '2020-05-14 12:34:16', '2020-05-14 12:34:16', NULL),
(14, '2020-05-14', 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 2, 1, 1, 125000, NULL, 125000, 1, NULL, 'tesar', 'testt', '074359192', '5ebd579f9ad5d', '2020-05-14 12:37:19', '2020-05-14 12:37:19', NULL),
(15, '2020-05-17', '8nYh03TNWxccr7MOYXHyhjyX8SmYh57vmn28QBxi', 1, 1, 2, 584700, NULL, 584700, 1, NULL, 'QSQsQ', 'qsdsqd', '90383737', '5ec151a8a53b8', '2020-05-17 13:00:56', '2020-05-17 13:00:56', NULL),
(16, '2020-05-17', '8nYh03TNWxccr7MOYXHyhjyX8SmYh57vmn28QBxi', 2, 2, 10, 2500, NULL, 2500, 1, NULL, 'QSDQSD', 'QSD', '90383737', '5ec151e15de52', '2020-05-17 13:01:53', '2020-05-17 13:01:53', NULL),
(17, '2020-05-17', '8nYh03TNWxccr7MOYXHyhjyX8SmYh57vmn28QBxi', 1, 2, 10, 2500, NULL, 2500, 1, NULL, 'SDFSD', 'DSFSF', '90383737', '5ec151fdb0fe2', '2020-05-17 13:02:21', '2020-05-17 13:02:21', NULL),
(18, '2020-05-17', 'isAk0rZlX6uY11kfLLSpKZKURMkhYd9qR8z9OwnU', 1, 1, 1, 10000, NULL, 10000, 0, NULL, 'RES', 'Madjitolem Némonguel Kévin', '074444555', '5ec15f9b84f17', '2020-05-17 14:00:27', '2020-05-17 14:01:20', NULL),
(19, '2020-05-17', 'bNYJXUe6cDTmL3pAMVIfhU6oZxDHXGuvda303ezt', 1, 1, 1, 129900, NULL, 129900, 1, NULL, 'xwf', 'wxcDS', 'qsd', '5ec197413ac18', '2020-05-17 17:57:53', '2020-05-17 17:57:53', NULL),
(20, '2020-05-21', 'dPwjwGw2yTJOAFmMZIozXhN9ODTCUC8skfqPZ6FS', 2, 1, 1, 59900, NULL, 59900, 1, NULL, 'Je suis à derrière l\'école normale juste en fasse de l\'ens', 'Boguikouma Bruno Elysée stan', '062755034', '5ec68ce6509fc', '2020-05-21 12:15:02', '2020-05-21 12:15:02', NULL),
(21, '2020-05-23', '8EycC6edKPYJLOvg9sgXFCcc2B29BekdtkndxZa6', 1, 1, 1, 15000, NULL, 15000, 0, NULL, 'test', 'test', '077002872', '5ec8f2a3c5aa1', '2020-05-23 07:53:39', '2020-05-23 07:56:44', NULL),
(22, '2020-05-23', 'slQR80P95QDz9ir83Wm8pGTGczllda5dGZ66S0Eq', 1, 3, 1, 114900, NULL, 114900, 1, NULL, 'Ffff', '07896789', '07897809', '5ec95ae6e9db4', '2020-05-23 15:18:30', '2020-05-23 15:18:30', NULL),
(23, '2020-05-27', 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 1, 1, 1, 49900, NULL, 49900, 0, NULL, 'test', 'sad', '077002872', '5ece234fb2f58', '2020-05-27 06:22:39', '2020-05-27 06:25:04', NULL),
(24, '2020-05-27', 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 1, 1, 1, 49900, NULL, 49900, 0, NULL, 'test', 'sad', '077002872', '5ece2395ada96', '2020-05-27 06:23:49', '2020-05-27 06:26:18', NULL),
(25, '2020-05-27', 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 1, 3, 1, 56500, NULL, 56500, 0, NULL, 'Test', 'Test', '077002872', '5ece338d23f2d', '2020-05-27 07:31:57', '2020-05-27 07:35:03', NULL),
(26, '2020-05-27', 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 1, 3, 1, 56500, NULL, 56500, 0, NULL, 'Test', 'Test', '077002872', '5ece33fb5d7bf', '2020-05-27 07:33:47', '2020-05-27 07:36:03', NULL),
(27, '2020-05-29', '92X1gcEpGO69TkMmAXpZzEbQnswDofSljjgIFAaI', 1, 1, 1, 19900, NULL, 19900, 0, NULL, 'retst', 'grn', '077002872', '5ed10fc2bc2f3', '2020-05-29 11:36:02', '2020-05-29 11:38:37', NULL),
(28, '2020-06-01', '6hMBzPG6QQpBqpNQ9Z2XDN96KMdHUpwSMB7LFmAE', 1, 1, 1, 42000, NULL, 42000, 1, NULL, 'HHJHG', 'Dtrix', '07345665', '5ed445a99003f', '2020-05-31 22:02:49', '2020-05-31 22:02:49', NULL),
(29, '2020-06-03', 'BeN856OzOTNqdvWAvDlmoGYLH80whWXdGL12EaHv', 1, 1, 1, 3500, NULL, 3500, 2, NULL, 'Institut Africain d\'Informatique', 'Madjitolem Némonguel Kévin', '074359192', '5ed74098d24c3', '2020-06-03 04:18:00', '2020-06-03 04:18:51', NULL),
(30, '2020-06-11', 'Fu9ijXC5xobxmltsUxvGpAUpE3r1bh51k8EFeFGa', 1, 3, 1, 25000, NULL, 25000, 1, NULL, 'J\'habite à ozangué', 'Samnk', '+24107654533', '5ee27d60ccc1e', '2020-06-11 16:52:16', '2020-06-11 16:52:16', NULL),
(31, '2020-06-12', 'celLEnHOw7eEhd1b1zX0bscWxnbTAPyIX1sxd068', 1, 2, 9, 129900, NULL, 129900, 0, NULL, 'zezzzzzz', 'uyy', '90383737', '5ee36a54dadcc', '2020-06-12 09:43:16', '2020-06-12 09:44:12', NULL),
(32, '2020-06-12', 'E7BaTI1ngBtf9qqdmKHI6NXQzVLxtTAetFNxzBMZ', 1, 1, 1, 15000, NULL, 15000, 0, NULL, 'f', 'voila', '099999', '5ee36fe5d6a33', '2020-06-12 10:07:01', '2020-06-12 10:09:28', NULL),
(33, '2020-06-13', 'BTfAZHUQ7DEZgqxkZF5ypUYzDRuWNn9DCoamKTjl', 1, 1, 1, 2900, NULL, 2900, 2, NULL, 'Clando Lalala à Droite', 'Jordan KADIE', '077361818', '5ee53bf5df463', '2020-06-13 18:49:57', '2020-06-13 18:50:56', NULL),
(34, '2020-06-15', 'vG9W2SdclBZJh7p6o3aqSbAzTDfuSjb0vvB0SUQE', 2, 2, 1, 4000, NULL, 4000, 1, NULL, 'Livraison normale', 'Madjitolem Némonguel Kévin', '074359192', '5ee758ec93db9', '2020-06-15 09:18:04', '2020-06-15 09:18:04', NULL),
(35, '2020-06-15', 'vG9W2SdclBZJh7p6o3aqSbAzTDfuSjb0vvB0SUQE', 2, 1, 1, 3500, NULL, 3500, 1, NULL, 'Quartier Bikélé', 'Jean Louis', '077980303', '5ee75a6fbae1b', '2020-06-15 09:24:31', '2020-06-15 09:24:31', NULL),
(36, '2020-06-15', 'E1mzKhZ6Wpt6Mr6RaquMAZPobEj4ksSA6WPRn7aO', 1, 1, 1, 55000, NULL, 55000, 1, NULL, 'SODUCO', 'KHARIS KADIE', '066808020', '5ee7f27ea481d', '2020-06-15 20:13:18', '2020-06-15 20:13:18', NULL),
(37, '2020-06-15', 'E1mzKhZ6Wpt6Mr6RaquMAZPobEj4ksSA6WPRn7aO', 1, 1, 1, 55000, NULL, 55000, 1, NULL, 'SODUCO', 'KHARIS KADIE', '066808020', '5ee7f392e745f', '2020-06-15 20:17:54', '2020-06-15 20:17:54', NULL),
(38, '2020-06-16', 'YNMNJx62AVKOa9UFrBC0qYTReQfTk1NSXonu9ITj', 1, 2, 10, 55000, NULL, 55000, 1, NULL, 'ZEFZEFE', 'qsds', '070383737', '5ee9039eafd30', '2020-06-16 15:38:38', '2020-06-16 15:38:38', NULL),
(39, '2020-06-18', 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 1, 1, 1, 15000, NULL, 15000, 0, NULL, 'Glass', 'elsa', '074 53 03 93', '5eeb42c5b3a33', '2020-06-18 08:32:37', '2020-06-18 08:35:48', NULL),
(40, '2020-06-18', 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 1, 1, 1, 30000, NULL, 30000, 0, NULL, 'casino', 'elsa', '074530393', '5eeb5362792af', '2020-06-18 09:43:30', '2020-06-18 09:46:23', NULL),
(41, '2020-06-18', 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 1, 1, 1, 30000, NULL, 30000, 0, NULL, 'glass', 'elsa', '074530393', '5eeb5475597b6', '2020-06-18 09:48:05', '2020-06-18 09:50:33', NULL),
(42, '2020-06-28', 'wDF7lAIZWcX32zyO8VXMEN6yuvr0CSL1lbLH3cUY', 1, 1, 1, 2900, NULL, 2900, 2, NULL, 'SODUCO', 'KADIE OLA', '077361818', '5ef8b08385bbe', '2020-06-28 13:00:19', '2020-06-28 13:01:05', NULL),
(43, '2020-06-29', '3rEPSbunHvNXx42J344OPNyL1OZFCubNgNukaaoc', 1, 2, 11, 205000, NULL, 205000, 1, NULL, 'SDFSD', 'QSDCFSDF', '90383737', '5efa101de4c0b', '2020-06-29 14:00:29', '2020-06-29 14:00:29', NULL),
(44, '2020-06-29', '3rEPSbunHvNXx42J344OPNyL1OZFCubNgNukaaoc', 1, 2, 11, 205000, NULL, 205000, 1, NULL, 'SDFSD', 'QSDCFSDF', '90383737', '5efa102851634', '2020-06-29 14:00:40', '2020-06-29 14:00:40', NULL),
(45, '2020-06-29', '9P2DUJIkVG8FfTdlgvcVumEoFX4KJ1o5BSZnqYt9', 1, 2, 10, 2500, NULL, 2500, 1, NULL, 'qsdqsdqsd', 'sqdsqd', '90383737', '5efa239198f36', '2020-06-29 15:23:29', '2020-06-29 15:23:29', NULL),
(46, '2020-06-30', '2DOyQvrnk2uhq0TsjvAg7TGAvtKyAPDMCZ5VodIl', 1, 1, 1, 50000, 'SCt8v1uPsa', 50000, 1, NULL, 'zakdlnfzaonfozaof', 'jubujccsc', '07740269', '5efb0a65820c0', '2020-06-30 07:48:21', '2020-06-30 07:48:21', NULL),
(47, '2020-06-30', '2DOyQvrnk2uhq0TsjvAg7TGAvtKyAPDMCZ5VodIl', 1, 1, 1, 55000, NULL, 55000, 1, NULL, 'guyguiguigigiug', 'jubujccsc', '07740269', '5efb0c58b62cf', '2020-06-30 07:56:40', '2020-06-30 07:56:40', NULL),
(48, '2020-06-30', '2DOyQvrnk2uhq0TsjvAg7TGAvtKyAPDMCZ5VodIl', 1, 1, 1, 50000, 'SCt8v1uPsa', 50000, 1, NULL, 'guyguiguigigiug', 'jubujccsc', '07740269', '5efb0c7fc0cc5', '2020-06-30 07:57:19', '2020-06-30 07:57:19', NULL),
(49, '2020-07-01', 'w6xf6ygu6mgTiywsJemFz8haZVokRB8swjmrtGHt', 1, 1, 1, 3000, 'BMsjy0DAbz', 3000, 2, NULL, 'Lalala à droite', 'KADIE OLA', '077361818', '5efbd4d509cf7', '2020-06-30 22:12:05', '2020-06-30 22:12:33', NULL),
(50, '2020-07-02', 'TiWyeVuDkPGjEtp4PUOIFiDbWWiEDSeFUEv4m3cj', 1, 1, 1, 2900, NULL, 2900, 0, NULL, 'test', 'zfg', '077002872', '5efdb714be3e4', '2020-07-02 08:29:40', '2020-07-02 11:12:57', NULL),
(51, '2020-07-02', 'TiWyeVuDkPGjEtp4PUOIFiDbWWiEDSeFUEv4m3cj', 1, 1, 1, 2900, NULL, 2900, 0, NULL, 'test', 'zfg', '077002872', '5efdb76d3eb3a', '2020-07-02 08:31:09', '2020-07-02 11:12:36', NULL),
(52, '2020-07-08', 'rnA0Quu2DaJIPqH61Z3ehLOUs4QnqcvrtRcKfQZz', 2, 1, 6, 17400, NULL, 17400, 1, NULL, '062526017', 'INANG Jean Baptiste', '062526017', '5f060f14e550d', '2020-07-08 16:23:16', '2020-07-08 16:23:16', NULL),
(53, '2020-07-09', '4L6UEEc5g7UbEHm48WBI40ExbIerCPJCVwPd7H9W', 1, 1, 1, 3500, NULL, 3500, 1, NULL, 'd', 'zfg', '077002872', '5f078d0ef324c', '2020-07-09 19:33:02', '2020-07-09 19:33:02', NULL),
(54, '2020-07-09', '4L6UEEc5g7UbEHm48WBI40ExbIerCPJCVwPd7H9W', 1, 1, 1, 3500, NULL, 3500, 1, NULL, 'd', 'zfg', '077002872', '5f07915c4fee8', '2020-07-09 19:51:24', '2020-07-09 19:51:24', NULL),
(55, '2020-07-09', '4L6UEEc5g7UbEHm48WBI40ExbIerCPJCVwPd7H9W', 1, 1, 1, 3500, NULL, 3500, 0, NULL, 'd', 'zfg', '077002872', '5f0792270fd04', '2020-07-09 19:54:47', '2020-07-09 19:57:07', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_details_commandes`
--

CREATE TABLE `kdm_details_commandes` (
  `id` bigint(20) NOT NULL,
  `commandes_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `quantite_produit` int(11) NOT NULL DEFAULT '1',
  `statut` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_details_commandes`
--

INSERT INTO `kdm_details_commandes` (`id`, `commandes_id`, `produit_id`, `quantite_produit`, `statut`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 203, 1, 1, '2020-05-05 14:05:48', '2020-05-05 14:05:48', NULL),
(2, 5, 145, 1, 1, '2020-05-06 01:06:15', '2020-05-06 01:06:15', NULL),
(3, 5, 200, 1, 1, '2020-05-06 01:06:15', '2020-05-06 01:06:15', NULL),
(4, 6, 204, 4, 1, '2020-05-06 08:07:04', '2020-05-06 08:07:04', NULL),
(5, 7, 205, 1, 1, '2020-05-08 21:32:42', '2020-05-08 21:32:42', NULL),
(6, 8, 201, 1, 1, '2020-05-09 08:33:21', '2020-05-09 08:33:21', NULL),
(7, 9, 96, 1, 1, '2020-05-10 11:28:10', '2020-05-10 11:28:10', NULL),
(8, 10, 110, 1, 1, '2020-05-11 21:01:27', '2020-05-11 21:01:27', NULL),
(9, 11, 202, 8, 1, '2020-05-14 13:53:09', '2020-05-14 13:53:09', NULL),
(10, 12, 201, 1, 1, '2020-05-14 13:55:42', '2020-05-14 13:55:42', NULL),
(11, 13, 200, 1, 1, '2020-05-14 14:34:16', '2020-05-14 14:34:16', NULL),
(12, 14, 141, 1, 1, '2020-05-14 14:37:19', '2020-05-14 14:37:19', NULL),
(13, 15, 107, 1, 1, '2020-05-17 15:00:56', '2020-05-17 15:00:56', NULL),
(14, 15, 110, 3, 1, '2020-05-17 15:00:56', '2020-05-17 15:00:56', NULL),
(15, 16, 135, 1, 1, '2020-05-17 15:01:53', '2020-05-17 15:01:53', NULL),
(16, 17, 145, 1, 1, '2020-05-17 15:02:21', '2020-05-17 15:02:21', NULL),
(17, 18, 121, 1, 1, '2020-05-17 16:00:27', '2020-05-17 16:00:27', NULL),
(18, 19, 205, 1, 1, '2020-05-17 19:57:53', '2020-05-17 19:57:53', NULL),
(19, 20, 198, 1, 1, '2020-05-21 14:15:02', '2020-05-21 14:15:02', NULL),
(20, 21, 202, 1, 1, '2020-05-23 09:53:39', '2020-05-23 09:53:39', NULL),
(21, 22, 114, 1, 1, '2020-05-23 17:18:30', '2020-05-23 17:18:30', NULL),
(22, 23, 203, 1, 1, '2020-05-27 08:22:39', '2020-05-27 08:22:39', NULL),
(23, 24, 203, 1, 1, '2020-05-27 08:23:49', '2020-05-27 08:23:49', NULL),
(24, 25, 124, 1, 1, '2020-05-27 09:31:57', '2020-05-27 09:31:57', NULL),
(25, 26, 124, 1, 1, '2020-05-27 09:33:47', '2020-05-27 09:33:47', NULL),
(26, 27, 138, 1, 1, '2020-05-29 13:36:02', '2020-05-29 13:36:02', NULL),
(27, 27, 155, 1, 1, '2020-05-29 13:36:02', '2020-05-29 13:36:02', NULL),
(28, 28, 125, 1, 1, '2020-06-01 00:02:49', '2020-06-01 00:02:49', NULL),
(29, 29, 146, 1, 1, '2020-06-03 06:18:00', '2020-06-03 06:18:00', NULL),
(30, 30, 134, 1, 1, '2020-06-11 18:52:16', '2020-06-11 18:52:16', NULL),
(31, 31, 205, 1, 1, '2020-06-12 11:43:16', '2020-06-12 11:43:16', NULL),
(32, 32, 201, 1, 1, '2020-06-12 12:07:01', '2020-06-12 12:07:01', NULL),
(33, 33, 154, 1, 1, '2020-06-13 20:49:57', '2020-06-13 20:49:57', NULL),
(34, 34, 139, 1, 1, '2020-06-15 11:18:04', '2020-06-15 11:18:04', NULL),
(35, 35, 135, 1, 1, '2020-06-15 11:24:31', '2020-06-15 11:24:31', NULL),
(36, 36, 206, 1, 1, '2020-06-15 22:13:18', '2020-06-15 22:13:18', NULL),
(37, 37, 206, 1, 1, '2020-06-15 22:17:54', '2020-06-15 22:17:54', NULL),
(38, 38, 206, 1, 1, '2020-06-16 17:38:38', '2020-06-16 17:38:38', NULL),
(39, 39, 202, 1, 1, '2020-06-18 10:32:37', '2020-06-18 10:32:37', NULL),
(40, 40, 202, 1, 1, '2020-06-18 11:43:30', '2020-06-18 11:43:30', NULL),
(41, 40, 201, 1, 1, '2020-06-18 11:43:30', '2020-06-18 11:43:30', NULL),
(42, 41, 202, 1, 1, '2020-06-18 11:48:05', '2020-06-18 11:48:05', NULL),
(43, 41, 201, 1, 1, '2020-06-18 11:48:05', '2020-06-18 11:48:05', NULL),
(44, 42, 154, 1, 1, '2020-06-28 15:00:19', '2020-06-28 15:00:19', NULL),
(45, 43, 207, 1, 1, '2020-06-29 16:00:29', '2020-06-29 16:00:29', NULL),
(46, 44, 207, 1, 1, '2020-06-29 16:00:40', '2020-06-29 16:00:40', NULL),
(47, 45, 145, 1, 1, '2020-06-29 17:23:29', '2020-06-29 17:23:29', NULL),
(48, 46, 206, 1, 1, '2020-06-30 09:48:21', '2020-06-30 09:48:21', NULL),
(49, 47, 206, 1, 1, '2020-06-30 09:56:40', '2020-06-30 09:56:40', NULL),
(50, 48, 206, 1, 1, '2020-06-30 09:57:19', '2020-06-30 09:57:19', NULL),
(51, 49, 132, 1, 1, '2020-07-01 00:12:05', '2020-07-01 00:12:05', NULL),
(52, 50, 154, 1, 1, '2020-07-02 10:29:40', '2020-07-02 10:29:40', NULL),
(53, 51, 154, 1, 1, '2020-07-02 10:31:09', '2020-07-02 10:31:09', NULL),
(54, 52, 204, 2, 1, '2020-07-08 18:23:16', '2020-07-08 18:23:16', NULL),
(55, 53, 145, 1, 1, '2020-07-09 21:33:03', '2020-07-09 21:33:03', NULL),
(56, 54, 145, 1, 1, '2020-07-09 21:51:24', '2020-07-09 21:51:24', NULL),
(57, 55, 145, 1, 1, '2020-07-09 21:54:47', '2020-07-09 21:54:47', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_images`
--

CREATE TABLE `kdm_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext,
  `owner` int(11) NOT NULL DEFAULT '0',
  `shop_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_images`
--

INSERT INTO `kdm_images` (`id`, `nom`, `alt`, `slug`, `url`, `description`, `owner`, `shop_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(124, '9agZuEyMum_produit-6.jpg', '9agZuEyMum_produit-6.jpg', 'fdsWC9TACP_image-produit', NULL, '9agzueymum-produit-6jpg', 1, 1, '2019-12-07 19:02:28', '2019-12-07 19:02:28', NULL),
(125, 'oJUkcwwdaL_produit-5.jpg', 'oJUkcwwdaL_produit-5.jpg', '2ZUfiv0ovl_image-produit', NULL, 'ojukcwwdal-produit-5jpg', 1, 1, '2019-12-07 19:02:28', '2019-12-07 19:02:28', NULL),
(126, 'tYQ2hfyfwg_produit-OEB E 58D.jpg', 'tYQ2hfyfwg_produit-OEB E 58D.jpg', 'wNggRyjAkw_image-produit', NULL, 'tyq2hfyfwg-produit-oeb-e-58djpg', 1, 1, '2019-12-09 15:31:24', '2019-12-09 15:31:24', NULL),
(127, 'tlEkvquoTM_produit-Tempo W OSW-10.jpg', 'tlEkvquoTM_produit-Tempo W OSW-10.jpg', 'XtZjq6xvkJ_image-produit', NULL, 'tlekvquotm-produit-tempo-w-osw-10jpg', 1, 1, '2019-12-09 15:35:30', '2019-12-09 15:35:30', NULL),
(128, 'otiE4bqI0p_produit-OEB-E-58D.jpg', 'otiE4bqI0p_produit-OEB-E-58D.jpg', 'CUQbB7i726_image-produit', NULL, 'otie4bqi0p-produit-oeb-e-58djpg', 1, 1, '2019-12-10 09:57:15', '2019-12-10 09:57:15', NULL),
(129, 'AZCDw5nagF_produit-OEB-E-74D.jpg', 'AZCDw5nagF_produit-OEB-E-74D.jpg', 'eRjRiIJKky_image-produit', NULL, 'azcdw5nagf-produit-oeb-e-74djpg', 1, 1, '2019-12-10 10:37:16', '2019-12-10 10:37:16', NULL),
(130, 'mmFMD50rBk_produit-OEB-E-96D.jpg', 'mmFMD50rBk_produit-OEB-E-96D.jpg', 'n3H8jjlabm_image-produit', NULL, 'mmfmd50rbk-produit-oeb-e-96djpg', 1, 1, '2019-12-10 10:39:16', '2019-12-10 10:39:16', NULL),
(131, 'TCs6qFm5hw_produit-OEB-H-85D.jpg', 'TCs6qFm5hw_produit-OEB-H-85D.jpg', 'ms3yIUWli1_image-produit', NULL, 'tcs6qfm5hw-produit-oeb-h-85djpg', 1, 1, '2019-12-10 10:41:23', '2019-12-10 10:41:23', NULL),
(132, 'XfNtRsyj49_produit-OEp-E-36.jpg', 'XfNtRsyj49_produit-OEp-E-36.jpg', 'qepmDcNNbk_image-produit', NULL, 'xfntrsyj49-produit-oep-e-36jpg', 1, 1, '2019-12-10 10:44:32', '2019-12-10 10:44:32', NULL),
(133, 'CeBx3lML60_produit-Tempo-W-OSW-10.jpg', 'CeBx3lML60_produit-Tempo-W-OSW-10.jpg', 'UTKBcyDeUP_image-produit', NULL, 'cebx3lml60-produit-tempo-w-osw-10jpg', 1, 1, '2019-12-10 10:48:55', '2019-12-10 10:48:55', NULL),
(134, 'RsCWmfXhC4_produit-Samsung-Galaxy-A10.jpg', 'RsCWmfXhC4_produit-Samsung-Galaxy-A10.jpg', 'cIkfyg8ICG_image-produit', NULL, 'rscwmfxhc4-produit-samsung-galaxy-a10jpg', 1, 1, '2019-12-10 13:53:22', '2019-12-10 13:53:22', NULL),
(135, '54KTIBdWOA_produit-1-Samsung-Galaxy-A10.jpg', '54KTIBdWOA_produit-1-Samsung-Galaxy-A10.jpg', '5ulkl96VoQ_image-produit', NULL, '54ktibdwoa-produit-1-samsung-galaxy-a10jpg', 1, 1, '2019-12-10 13:53:22', '2019-12-10 13:53:22', NULL),
(136, 'EOJLKGsnGg_produit-2-Samsung-Galaxy-A10.jpg', 'EOJLKGsnGg_produit-2-Samsung-Galaxy-A10.jpg', 'Zvbuuq4548_image-produit', NULL, 'eojlkgsngg-produit-2-samsung-galaxy-a10jpg', 1, 1, '2019-12-10 13:53:22', '2019-12-10 13:53:22', NULL),
(137, 'GKb3r3Kd3a_produit-3-Samsung-Galaxy-A10.jpg', 'GKb3r3Kd3a_produit-3-Samsung-Galaxy-A10.jpg', 'yFKZYC0hfY_image-produit', NULL, 'gkb3r3kd3a-produit-3-samsung-galaxy-a10jpg', 1, 1, '2019-12-10 13:53:22', '2019-12-10 13:53:22', NULL),
(138, 'TYk5LYKEMS_produit-Samsung-Galaxie-A20S.jpg', 'TYk5LYKEMS_produit-Samsung-Galaxie-A20S.jpg', 'uECbinBExd_image-produit', NULL, 'tyk5lykems-produit-samsung-galaxie-a20sjpg', 1, 1, '2019-12-10 14:12:20', '2019-12-10 14:12:20', NULL),
(139, 'jIaVYwDwPt_produit-1-Samsung-Galaxie-A20S.jpg', 'jIaVYwDwPt_produit-1-Samsung-Galaxie-A20S.jpg', 'k6AyoaOxTA_image-produit', NULL, 'jiavywdwpt-produit-1-samsung-galaxie-a20sjpg', 1, 1, '2019-12-10 14:12:20', '2019-12-10 14:12:20', NULL),
(140, 'SzVCO40hzI_produit-2-Samsung-Galaxie-A20S.jpg', 'SzVCO40hzI_produit-2-Samsung-Galaxie-A20S.jpg', 'PIPb3YxE8i_image-produit', NULL, 'szvco40hzi-produit-2-samsung-galaxie-a20sjpg', 1, 1, '2019-12-10 14:12:20', '2019-12-10 14:12:20', NULL),
(141, 'rJFhAVSQ58_produit-3-Samsung-Galaxie-A20S.jpg', 'rJFhAVSQ58_produit-3-Samsung-Galaxie-A20S.jpg', 'j7blJPXDUO_image-produit', NULL, 'rjfhavsq58-produit-3-samsung-galaxie-a20sjpg', 1, 1, '2019-12-10 14:12:20', '2019-12-10 14:12:20', NULL),
(142, 'AtvBWtjjKK_produit-Samsung-Galaxie-A-30.jpg', 'AtvBWtjjKK_produit-Samsung-Galaxie-A-30.jpg', 'FAoDriTtcW_image-produit', NULL, 'atvbwtjjkk-produit-samsung-galaxie-a-30jpg', 1, 1, '2019-12-11 08:48:37', '2019-12-11 08:48:37', NULL),
(143, '7NyoXDXVfC_produit-2-Samsung-Galaxie-A-30.jpg', '7NyoXDXVfC_produit-2-Samsung-Galaxie-A-30.jpg', 'dPTN8q32kB_image-produit', NULL, '7nyoxdxvfc-produit-2-samsung-galaxie-a-30jpg', 1, 1, '2019-12-11 08:48:37', '2019-12-11 08:48:37', NULL),
(144, 'rMZ1LqVSU8_produit-1-Samsung-Galaxie-A-30.jpg', 'rMZ1LqVSU8_produit-1-Samsung-Galaxie-A-30.jpg', 'NbU9u54Kcv_image-produit', NULL, 'rmz1lqvsu8-produit-1-samsung-galaxie-a-30jpg', 1, 1, '2019-12-11 08:48:37', '2019-12-11 08:48:37', NULL),
(145, 'bwWCHottFF_produit-3-Samsung-Galaxie-A-30.jpg', 'bwWCHottFF_produit-3-Samsung-Galaxie-A-30.jpg', 'hh422HJzOq_image-produit', NULL, 'bwwchottff-produit-3-samsung-galaxie-a-30jpg', 1, 1, '2019-12-11 08:48:37', '2019-12-11 08:48:37', NULL),
(146, '9qHRIopziQ_produit-Samsung-Galaxie-A-70.jpg', '9qHRIopziQ_produit-Samsung-Galaxie-A-70.jpg', 'U7w5q6dkbX_image-produit', NULL, '9qhriopziq-produit-samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:20:21', '2019-12-11 09:20:21', NULL),
(147, 'tXW8c06KHk_produit-1-Samsung-Galaxie-A-70.jpg', 'tXW8c06KHk_produit-1-Samsung-Galaxie-A-70.jpg', 'KKjHd8Dnmw_image-produit', NULL, 'txw8c06khk-produit-1-samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:20:21', '2019-12-11 09:20:21', NULL),
(148, 'Bk0sRKD1HE_produit-2Samsung-Galaxie-A-70.jpg', 'Bk0sRKD1HE_produit-2Samsung-Galaxie-A-70.jpg', 'LN6mZYmV4P_image-produit', NULL, 'bk0srkd1he-produit-2samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:20:21', '2019-12-11 09:20:21', NULL),
(149, 'r2YUofjNJA_produit-3-Samsung-Galaxie-A-70.jpg', 'r2YUofjNJA_produit-3-Samsung-Galaxie-A-70.jpg', 'bZSZ9NPdf4_image-produit', NULL, 'r2yuofjnja-produit-3-samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:20:21', '2019-12-11 09:20:21', NULL),
(150, 'LPIrxc9wXZ_produit-Samsung-Galaxie-A-70.jpg', 'LPIrxc9wXZ_produit-Samsung-Galaxie-A-70.jpg', 'wwNCMAIfuZ_image-produit', NULL, 'lpirxc9wxz-produit-samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:21:08', '2019-12-11 09:21:08', NULL),
(151, 'vzSthyZqTV_produit-1-Samsung-Galaxie-A-70.jpg', 'vzSthyZqTV_produit-1-Samsung-Galaxie-A-70.jpg', 'Vy5NV6Ot5H_image-produit', NULL, 'vzsthyzqtv-produit-1-samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:21:08', '2019-12-11 09:21:08', NULL),
(152, 'wCUQ8QGUWH_produit-2Samsung-Galaxie-A-70.jpg', 'wCUQ8QGUWH_produit-2Samsung-Galaxie-A-70.jpg', 'RxESJqDOFZ_image-produit', NULL, 'wcuq8qguwh-produit-2samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:21:08', '2019-12-11 09:21:08', NULL),
(153, 'JuEwQPoM3z_produit-3-Samsung-Galaxie-A-70.jpg', 'JuEwQPoM3z_produit-3-Samsung-Galaxie-A-70.jpg', 'Fku1At6NQB_image-produit', NULL, 'juewqpom3z-produit-3-samsung-galaxie-a-70jpg', 1, 1, '2019-12-11 09:21:08', '2019-12-11 09:21:08', NULL),
(154, 'o7CrEZrcPg_produit-sAMSUNG-A-80.jpg', 'o7CrEZrcPg_produit-sAMSUNG-A-80.jpg', 'ePrs1o9zHa_image-produit', NULL, 'o7crezrcpg-produit-samsung-a-80jpg', 1, 1, '2019-12-11 09:49:11', '2019-12-11 09:49:11', NULL),
(155, 'B2EFVaw8dT_produit-3-SAMSUNG-A-80.jpg', 'B2EFVaw8dT_produit-3-SAMSUNG-A-80.jpg', 'eo5KXJ5vj7_image-produit', NULL, 'b2efvaw8dt-produit-3-samsung-a-80jpg', 1, 1, '2019-12-11 09:49:11', '2019-12-11 09:49:11', NULL),
(156, '2QeBv05GbY_produit-1-SAMSUNG-A-80.jpg', '2QeBv05GbY_produit-1-SAMSUNG-A-80.jpg', 'aT4MTm4Vjs_image-produit', NULL, '2qebv05gby-produit-1-samsung-a-80jpg', 1, 1, '2019-12-11 09:49:11', '2019-12-11 09:49:11', NULL),
(157, '5xb3mq7Y86_produit-2-SAMSUNG-A-80.jpg', '5xb3mq7Y86_produit-2-SAMSUNG-A-80.jpg', 'CPlK3V370E_image-produit', NULL, '5xb3mq7y86-produit-2-samsung-a-80jpg', 1, 1, '2019-12-11 09:49:11', '2019-12-11 09:49:11', NULL),
(158, 'uOtBwsSjdI_produit-Camon-11.jpg', 'uOtBwsSjdI_produit-Camon-11.jpg', 'YsZzZdVK2b_image-produit', NULL, 'uotbwssjdi-produit-camon-11jpg', 1, 1, '2019-12-17 19:12:36', '2019-12-17 19:12:36', NULL),
(159, 'TldClutNLF_produit-Pop-2-Power.jpg', 'TldClutNLF_produit-Pop-2-Power.jpg', 'nD3VKRqpmb_image-produit', NULL, 'tldclutnlf-produit-pop-2-powerjpg', 1, 1, '2019-12-22 12:47:10', '2019-12-22 12:47:10', NULL),
(160, 'ouM22Irlwq_produit-Spark4.jpg', 'ouM22Irlwq_produit-Spark4.jpg', 'vrxRClyxJt_image-produit', NULL, 'oum22irlwq-produit-spark4jpg', 1, 1, '2019-12-22 12:50:33', '2019-12-22 12:50:33', NULL),
(161, 'VKcZnqB0zO_produit-Camon-11.jpg', 'VKcZnqB0zO_produit-Camon-11.jpg', 'elMArgxUP6_image-produit', NULL, 'vkcznqb0zo-produit-camon-11jpg', 1, 1, '2019-12-22 12:56:07', '2019-12-22 12:56:07', NULL),
(162, 'Zasp9cOkK9_produit-Camon-12-Pro.jpg', 'Zasp9cOkK9_produit-Camon-12-Pro.jpg', 'PTVnOD9nn9_image-produit', NULL, 'zasp9cokk9-produit-camon-12-projpg', 1, 1, '2019-12-22 13:49:41', '2019-12-22 13:49:41', NULL),
(163, 'nC9JxcWuK4_produit-Camon-12.jpg', 'nC9JxcWuK4_produit-Camon-12.jpg', 'wKYgxYbhEJ_image-produit', NULL, 'nc9jxcwuk4-produit-camon-12jpg', 1, 1, '2019-12-22 13:52:47', '2019-12-22 13:52:47', NULL),
(164, '6IjgZeje1q_produit-Camon-I-click-2.jpg', '6IjgZeje1q_produit-Camon-I-click-2.jpg', 'hguDPNLddP_image-produit', NULL, '6ijgzeje1q-produit-camon-i-click-2jpg', 1, 1, '2019-12-22 14:04:40', '2019-12-22 14:04:40', NULL),
(165, 'fBvVSa2Zi0_produit-Pop-2-F.jpg', 'fBvVSa2Zi0_produit-Pop-2-F.jpg', '3oCi8mQYTg_image-produit', NULL, 'fbvvsa2zi0-produit-pop-2-fjpg', 1, 1, '2019-12-22 14:34:07', '2019-12-22 14:34:07', NULL),
(166, 'TrZUPUkTVq_produit-Pop-2-F.jpg', 'TrZUPUkTVq_produit-Pop-2-F.jpg', '3lMtroCGek_image-produit', NULL, 'trzupuktvq-produit-pop-2-fjpg', 1, 1, '2019-12-22 14:34:08', '2019-12-22 14:34:08', NULL),
(167, 'SvgF59xg7I_produit-1.jpg', 'SvgF59xg7I_produit-1.jpg', 'IPjhf6UFZL_image-produit', NULL, 'svgf59xg7i-produit-1jpg', 1, 1, '2019-12-26 07:01:02', '2019-12-26 07:01:02', NULL),
(168, 'nMKce87X7k_produit-2.jpg', 'nMKce87X7k_produit-2.jpg', 'suYrqYSHjc_image-produit', NULL, 'nmkce87x7k-produit-2jpg', 1, 1, '2019-12-26 07:01:02', '2019-12-26 07:01:02', NULL),
(169, 'hKLZLv55wL_produit-3.jpg', 'hKLZLv55wL_produit-3.jpg', '0CA1lWdufS_image-produit', NULL, 'hklzlv55wl-produit-3jpg', 1, 1, '2019-12-26 07:01:02', '2019-12-26 07:01:02', NULL),
(170, 'K0WfKGISdz_produit-Produits-phone.jpg', 'K0WfKGISdz_produit-Produits-phone.jpg', '78TVwYwAu6_image-produit', NULL, 'k0wfkgisdz-produit-produits-phonejpg', 1, 1, '2019-12-26 07:01:02', '2019-12-26 07:01:02', NULL),
(171, 'aoEDFbQqHD_produit-Pop-2-F-16-GB.jpg', 'aoEDFbQqHD_produit-Pop-2-F-16-GB.jpg', 'ypePe8dndc_image-produit', NULL, 'aoedfbqqhd-produit-pop-2-f-16-gbjpg', 1, 1, '2019-12-26 07:10:28', '2019-12-26 07:10:28', NULL),
(172, 'mabfIL2dy8_produit-Tecno-Driod-PAD.jpg', 'mabfIL2dy8_produit-Tecno-Driod-PAD.jpg', 'ygES8awUQ3_image-produit', NULL, 'mabfil2dy8-produit-tecno-driod-padjpg', 1, 1, '2019-12-26 07:21:10', '2019-12-26 07:21:10', NULL),
(173, 'wKosSyH6rv_produit-Tecno-F1.jpg', 'wKosSyH6rv_produit-Tecno-F1.jpg', 'ngQpsPzEvJ_image-produit', NULL, 'wkossyh6rv-produit-tecno-f1jpg', 1, 1, '2019-12-26 07:36:42', '2019-12-26 07:36:42', NULL),
(174, 'W7qUM4OunB_produit-Tecno-301.jpg', 'W7qUM4OunB_produit-Tecno-301.jpg', 'XNVHAOldcO_image-produit', NULL, 'w7qum4ounb-produit-tecno-301jpg', 1, 1, '2019-12-26 07:44:54', '2019-12-26 07:44:54', NULL),
(175, 'Lr87ofbknG_produit-Itel-2160.jpg', 'Lr87ofbknG_produit-Itel-2160.jpg', 'kwv4acfWK9_image-produit', NULL, 'lr87ofbkng-produit-itel-2160jpg', 1, 1, '2019-12-26 07:52:54', '2019-12-26 07:52:54', NULL),
(176, 'K0Ncy3J4qJ_produit-P33.jpg', 'K0Ncy3J4qJ_produit-P33.jpg', '77ke87jM2K_image-produit', NULL, 'k0ncy3j4qj-produit-p33jpg', 1, 1, '2019-12-26 08:09:38', '2019-12-26 08:09:38', NULL),
(177, 'PzJuDba1M2_produit-P33-Plus.jpg', 'PzJuDba1M2_produit-P33-Plus.jpg', 'Zc6CRIKulU_image-produit', NULL, 'pzjudba1m2-produit-p33-plusjpg', 1, 1, '2019-12-26 08:17:47', '2019-12-26 08:17:47', NULL),
(178, 'TXY9X6Ceir_produit-A33.jpg', 'TXY9X6Ceir_produit-A33.jpg', 'aphMzYosJ6_image-produit', NULL, 'txy9x6ceir-produit-a33jpg', 1, 1, '2019-12-26 08:34:07', '2019-12-26 08:34:07', NULL),
(179, 'KaQbvmBncD_produit-Itel-A14.jpg', 'KaQbvmBncD_produit-Itel-A14.jpg', 'imGtBdYGoW_image-produit', NULL, 'kaqbvmbncd-produit-itel-a14jpg', 1, 1, '2019-12-26 09:30:21', '2019-12-26 09:30:21', NULL),
(180, 'k1ApkUqJXJ_produit-Itel-S15.jpg', 'k1ApkUqJXJ_produit-Itel-S15.jpg', 'QvV4PHu1Ts_image-produit', NULL, 'k1apkuqjxj-produit-itel-s15jpg', 1, 1, '2019-12-26 09:36:32', '2019-12-26 09:36:32', NULL),
(181, 'ibZG9zWNAG_produit-Itel-A16-Plus.jpg', 'ibZG9zWNAG_produit-Itel-A16-Plus.jpg', 'OApkyrWnQs_image-produit', NULL, 'ibzg9zwnag-produit-itel-a16-plusjpg', 1, 1, '2019-12-26 09:40:27', '2019-12-26 09:40:27', NULL),
(182, 'Pv96fvWNf3_produit-Itel-S-33.jpg', 'Pv96fvWNf3_produit-Itel-S-33.jpg', 'NrjJHlRdut_image-produit', NULL, 'pv96fvwnf3-produit-itel-s-33jpg', 1, 1, '2019-12-26 09:44:07', '2019-12-26 09:44:07', NULL),
(183, 'EPzoQC0bfr_produit-Tempo2-OFB-20.jpg', 'EPzoQC0bfr_produit-Tempo2-OFB-20.jpg', 'P8VpKyiYWw_image-produit', NULL, 'epzoqc0bfr-produit-tempo2-ofb-20jpg', 1, 1, '2019-12-26 10:12:16', '2019-12-26 10:12:16', NULL),
(184, 'qhwHXzMEyC_produit-SoundPro-OBS-52D.jpg', 'qhwHXzMEyC_produit-SoundPro-OBS-52D.jpg', 'sbW7q6PkGK_image-produit', NULL, 'qhwhxzmeyc-produit-soundpro-obs-52djpg', 1, 1, '2019-12-26 12:06:37', '2019-12-26 12:06:37', NULL),
(185, 'yoGFBSW32i_produit-OEP-E23.jpg', 'yoGFBSW32i_produit-OEP-E23.jpg', '0kZctt8u8y_image-produit', NULL, 'yogfbsw32i-produit-oep-e23jpg', 1, 1, '2019-12-26 12:25:07', '2019-12-26 12:25:07', NULL),
(186, 'm5hHWkCY3t_produit-Trumpet-OEP-E33.jpg', 'm5hHWkCY3t_produit-Trumpet-OEP-E33.jpg', 'H0uwSBtw7e_image-produit', NULL, 'm5hhwkcy3t-produit-trumpet-oep-e33jpg', 1, 1, '2019-12-26 12:36:31', '2019-12-26 12:36:31', NULL),
(187, 'ZVU2urrtKX_produit-AirBuds-OEB-E99D.jpg', 'ZVU2urrtKX_produit-AirBuds-OEB-E99D.jpg', 'in2VhSGVdD_image-produit', NULL, 'zvu2urrtkx-produit-airbuds-oeb-e99djpg', 1, 1, '2019-12-26 12:42:17', '2019-12-26 12:42:17', NULL),
(188, 't0She9rUAm_produit-OEP-E-10.jpg', 't0She9rUAm_produit-OEP-E-10.jpg', 'v3yFAIZxGf_image-produit', NULL, 't0she9ruam-produit-oep-e-10jpg', 1, 1, '2019-12-26 13:01:10', '2019-12-26 13:01:10', NULL),
(189, 'KRTTN0EtrI_produit-SD-32-GB.jpg', 'KRTTN0EtrI_produit-SD-32-GB.jpg', 'qn1kAOky2n_image-produit', NULL, 'krttn0etri-produit-sd-32-gbjpg', 1, 1, '2019-12-26 13:13:55', '2019-12-26 13:13:55', NULL),
(190, 'i86e64TCWh_produit-SD-64-GB.jpg', 'i86e64TCWh_produit-SD-64-GB.jpg', 'nKURWlAKbo_image-produit', NULL, 'i86e64tcwh-produit-sd-64-gbjpg', 1, 1, '2019-12-26 13:20:17', '2019-12-26 13:20:17', NULL),
(191, 'F3TL6706PF_produit-OFD-32-GB.jpg', 'F3TL6706PF_produit-OFD-32-GB.jpg', 'ZaYypMEcgF_image-produit', NULL, 'f3tl6706pf-produit-ofd-32-gbjpg', 1, 1, '2019-12-26 13:49:46', '2019-12-26 13:49:46', NULL),
(192, 'prJHDK9v5n_produit-OEP-E-21.jpg', 'prJHDK9v5n_produit-OEP-E-21.jpg', 'yCjZRChvwI_image-produit', NULL, 'prjhdk9v5n-produit-oep-e-21jpg', 1, 1, '2019-12-26 13:56:02', '2019-12-26 13:56:02', NULL),
(193, 'uekIEWv3Le_produit-OCD-X-91.jpg', 'uekIEWv3Le_produit-OCD-X-91.jpg', 'foukf37gU8_image-produit', NULL, 'uekiewv3le-produit-ocd-x-91jpg', 1, 1, '2019-12-26 14:02:05', '2019-12-26 14:02:05', NULL),
(194, 'P83T7CgHt1_produit-Tecno-Driod-PAD-10.jpg', 'P83T7CgHt1_produit-Tecno-Driod-PAD-10.jpg', 'yDm1mXRksn_image-produit', NULL, 'p83t7cght1-produit-tecno-driod-pad-10jpg', 1, 1, '2020-01-03 09:24:37', '2020-01-03 09:24:37', NULL),
(195, 'Vq941IlCAk_produit-OCW-93-S.jpg', 'Vq941IlCAk_produit-OCW-93-S.jpg', 'QwoCHlmkxp_image-produit', NULL, 'vq941ilcak-produit-ocw-93-sjpg', 1, 1, '2020-01-07 08:46:35', '2020-01-07 08:46:35', NULL),
(196, '6WwdyN4E7q_produit-OCW-93-S-2.jpg', '6WwdyN4E7q_produit-OCW-93-S-2.jpg', 'xwAHRuWsLZ_image-produit', NULL, '6wwdyn4e7q-produit-ocw-93-s-2jpg', 1, 1, '2020-01-07 08:46:35', '2020-01-07 08:46:35', NULL),
(197, 'QhCUVsWRYO_produit-OCW-E61D.jpg', 'QhCUVsWRYO_produit-OCW-E61D.jpg', 'zUzuzg3LOO_image-produit', NULL, 'qhcuvswryo-produit-ocw-e61djpg', 1, 1, '2020-01-07 09:02:48', '2020-01-07 09:02:48', NULL),
(198, 'MnNdtRTth1_produit-OCW-E61D-2.jpg', 'MnNdtRTth1_produit-OCW-E61D-2.jpg', 'fQlhuqRosj_image-produit', NULL, 'mnndtrtth1-produit-ocw-e61d-2jpg', 1, 1, '2020-01-07 09:02:48', '2020-01-07 09:02:48', NULL),
(199, 'FU2xvUDu7u_produit-Bullet--OCC-31D.jpg', 'FU2xvUDu7u_produit-Bullet--OCC-31D.jpg', '53FIz8Krub_image-produit', NULL, 'fu2xvudu7u-produit-bullet-occ-31djpg', 1, 1, '2020-01-07 09:27:59', '2020-01-07 09:27:59', NULL),
(200, 'ES25Hn89lU_produit-Bullet--OCC-31D-2.jpg', 'ES25Hn89lU_produit-Bullet--OCC-31D-2.jpg', 'ItcOi5BlOa_image-produit', NULL, 'es25hn89lu-produit-bullet-occ-31d-2jpg', 1, 1, '2020-01-07 09:27:59', '2020-01-07 09:27:59', NULL),
(201, 'h3lAgD4jXj_produit-OCW-E32S.jpg', 'h3lAgD4jXj_produit-OCW-E32S.jpg', 'PgTAnyyK58_image-produit', NULL, 'h3lagd4jxj-produit-ocw-e32sjpg', 1, 1, '2020-01-07 09:47:33', '2020-01-07 09:47:33', NULL),
(202, 'gKYm1DNYsG_produit-Produits.jpg', 'gKYm1DNYsG_produit-Produits.jpg', 'juvvedP7wG_image-produit', NULL, 'gkym1dnysg-produit-produitsjpg', 1, 1, '2020-01-07 09:47:33', '2020-01-07 09:47:33', NULL),
(203, 'mJtdO6brXW_produit-CU-60AR-＋-CD-52BR.jpg', 'mJtdO6brXW_produit-CU-60AR-＋-CD-52BR.jpg', 'KFLmC4apB4_image-produit', NULL, 'mjtdo6brxw-produit-cu-60ar-cd-52brjpg', 1, 1, '2020-01-07 10:04:50', '2020-01-07 10:04:50', NULL),
(204, 'XrRbRPENjm_produit-CU-60AR-＋-CD-52BR-2.jpg', 'XrRbRPENjm_produit-CU-60AR-＋-CD-52BR-2.jpg', 'IHcxzpYrcI_image-produit', NULL, 'xrrbrpenjm-produit-cu-60ar-cd-52br-2jpg', 1, 1, '2020-01-07 10:04:50', '2020-01-07 10:04:50', NULL),
(205, 'FL8W9xqYYB_produit-Produits.jpg', 'FL8W9xqYYB_produit-Produits.jpg', 'DlM0nvxZnC_image-produit', NULL, 'fl8w9xqyyb-produit-produitsjpg', 1, 1, '2020-01-07 10:04:50', '2020-01-07 10:04:50', NULL),
(206, 'iDcINAqHEu_produit-Produits-phone.jpg', 'iDcINAqHEu_produit-Produits-phone.jpg', 'XmBYARLrPc_image-produit', NULL, 'idcinaqheu-produit-produits-phonejpg', 1, 1, '2020-01-08 08:14:50', '2020-01-08 08:14:50', NULL),
(207, 'xoWBlcITQi_produit-Huawei-P30-Lite.jpg', 'xoWBlcITQi_produit-Huawei-P30-Lite.jpg', 'G4FCHX00Cb_image-produit', NULL, 'xowblcitqi-produit-huawei-p30-litejpg', 1, 1, '2020-01-08 08:14:50', '2020-01-08 08:14:50', NULL),
(208, 'rranUZOIMh_produit-Huawei-Y6-2019.jpg', 'rranUZOIMh_produit-Huawei-Y6-2019.jpg', 'n5uhjS4blw_image-produit', NULL, 'rranuzoimh-produit-huawei-y6-2019jpg', 1, 1, '2020-01-08 08:26:30', '2020-01-08 08:26:30', NULL),
(209, 'sZBe3n1GyP_produit-1-Huawei-Y6-2019.jpg', 'sZBe3n1GyP_produit-1-Huawei-Y6-2019.jpg', 'hNHQGjXNrU_image-produit', NULL, 'szbe3n1gyp-produit-1-huawei-y6-2019jpg', 1, 1, '2020-01-08 08:26:30', '2020-01-08 08:26:30', NULL),
(210, 'sWoxgmkGAI_produit-2-Huawei-Y6-2019.jpg', 'sWoxgmkGAI_produit-2-Huawei-Y6-2019.jpg', 'qbUTSjofv3_image-produit', NULL, 'swoxgmkgai-produit-2-huawei-y6-2019jpg', 1, 1, '2020-01-08 08:26:30', '2020-01-08 08:26:30', NULL),
(211, 'DTJMLIPmbI_produit-3-Huawei-Y6-2019.jpg', 'DTJMLIPmbI_produit-3-Huawei-Y6-2019.jpg', 'UnlZp0aJHE_image-produit', NULL, 'dtjmlipmbi-produit-3-huawei-y6-2019jpg', 1, 1, '2020-01-08 08:26:30', '2020-01-08 08:26:30', NULL),
(212, 'k8K0TE0puP_produit-Huawei-mate20-pro.jpg', 'k8K0TE0puP_produit-Huawei-mate20-pro.jpg', 'rQfrt32xaE_image-produit', NULL, 'k8k0te0pup-produit-huawei-mate20-projpg', 1, 1, '2020-01-08 08:47:52', '2020-01-08 08:47:52', NULL),
(213, 'sxfiX47UdC_produit-mate20-pro.jpg', 'sxfiX47UdC_produit-mate20-pro.jpg', '3ZkQ0zLEyk_image-produit', NULL, 'sxfix47udc-produit-mate20-projpg', 1, 1, '2020-01-08 08:47:52', '2020-01-08 08:47:52', NULL),
(214, '49EQIyA7Nf_produit-Huawei-Y-9-Prime-2019.jpg', '49EQIyA7Nf_produit-Huawei-Y-9-Prime-2019.jpg', 'bKA8xtwChB_image-produit', NULL, '49eqiya7nf-produit-huawei-y-9-prime-2019jpg', 1, 1, '2020-01-09 07:06:55', '2020-01-09 07:06:55', NULL),
(215, 'nrOfsiPWqi_produit-Huawei-Y-9-Prime.jpg', 'nrOfsiPWqi_produit-Huawei-Y-9-Prime.jpg', 'oayKBef6If_image-produit', NULL, 'nrofsipwqi-produit-huawei-y-9-primejpg', 1, 1, '2020-01-09 07:06:55', '2020-01-09 07:06:55', NULL),
(216, 'eD7ZJSCN67_produit-Infinix-S4.jpg', 'eD7ZJSCN67_produit-Infinix-S4.jpg', 'gFDsnJBLgo_image-produit', NULL, 'ed7zjscn67-produit-infinix-s4jpg', 1, 1, '2020-01-09 07:29:54', '2020-01-09 07:29:54', NULL),
(217, 'MndWk4azHe_produit-Infinix-S4-2.jpg', 'MndWk4azHe_produit-Infinix-S4-2.jpg', 'yWA82SdrFl_image-produit', NULL, 'mndwk4azhe-produit-infinix-s4-2jpg', 1, 1, '2020-01-09 07:29:54', '2020-01-09 07:29:54', NULL),
(218, '4S0CTgZhf2_produit-Samsung-A-2-core.jpg', '4S0CTgZhf2_produit-Samsung-A-2-core.jpg', 'UUrldxH3Nc_image-produit', NULL, '4s0ctgzhf2-produit-samsung-a-2-corejpg', 1, 1, '2020-01-09 08:03:29', '2020-01-09 08:03:29', NULL),
(219, 'csiV9Z8bmp_produit-Samsung-A-2-core-2.jpg', 'csiV9Z8bmp_produit-Samsung-A-2-core-2.jpg', 'WhnYZgk9vS_image-produit', NULL, 'csiv9z8bmp-produit-samsung-a-2-core-2jpg', 1, 1, '2020-01-09 08:03:29', '2020-01-09 08:03:29', NULL),
(220, 'MzxxlWCvr6_produit-Produits-phone.jpg', 'MzxxlWCvr6_produit-Produits-phone.jpg', 'WZbWEkcpXP_image-produit', NULL, 'mzxxlwcvr6-produit-produits-phonejpg', 1, 1, '2020-01-09 08:21:50', '2020-01-09 08:21:50', NULL),
(221, 'kxfLL7c1ce_produit-J4-CORE.jpg', 'kxfLL7c1ce_produit-J4-CORE.jpg', 'yIxwO8xYYr_image-produit', NULL, 'kxfll7c1ce-produit-j4-corejpg', 1, 1, '2020-01-09 08:21:50', '2020-01-09 08:21:50', NULL),
(222, 'jJclUCm4u9_produit-2-J4-CORE.jpg', 'jJclUCm4u9_produit-2-J4-CORE.jpg', 'hNGyykCIfb_image-produit', NULL, 'jjclucm4u9-produit-2-j4-corejpg', 1, 1, '2020-01-09 08:21:50', '2020-01-09 08:21:50', NULL),
(223, 'Ba8HVNcpdX_produit-Porte-clé.jpg', 'Ba8HVNcpdX_produit-Porte-clé.jpg', 'GRFYoY18Ot_image-produit', NULL, 'ba8hvncpdx-produit-porte-clejpg', 1, 1, '2020-01-10 22:54:48', '2020-01-10 22:54:48', NULL),
(224, 'rXVO1H09ec_produit-OTG-Flash-Drive-32-GB.jpg', 'rXVO1H09ec_produit-OTG-Flash-Drive-32-GB.jpg', 'MJcRMQVscX_image-produit', NULL, 'rxvo1h09ec-produit-otg-flash-drive-32-gbjpg', 1, 1, '2020-01-10 23:01:17', '2020-01-10 23:01:17', NULL),
(225, 'aGCjQcDCIg_produit-Produits-phone.jpg', 'aGCjQcDCIg_produit-Produits-phone.jpg', 'XUrS4opk8H_image-produit', NULL, 'agcjqcdcig-produit-produits-phonejpg', 1, 1, '2020-01-11 22:56:32', '2020-01-11 22:56:32', NULL),
(226, 'ldEPCaQHNp_produit-Smart-3-Plus.jpg', 'ldEPCaQHNp_produit-Smart-3-Plus.jpg', 'YHcB3hvDJN_image-produit', NULL, 'ldepcaqhnp-produit-smart-3-plusjpg', 1, 1, '2020-01-11 22:56:32', '2020-01-11 22:56:32', NULL),
(227, 'h2V5SV60pZ_produit-Smart-3-Plus-2.jpg', 'h2V5SV60pZ_produit-Smart-3-Plus-2.jpg', 'lMAvFFStfy_image-produit', NULL, 'h2v5sv60pz-produit-smart-3-plus-2jpg', 1, 1, '2020-01-11 22:56:32', '2020-01-11 22:56:32', NULL),
(228, 'JPzd2740Yb_produit-Infinix-Hot-8.jpg', 'JPzd2740Yb_produit-Infinix-Hot-8.jpg', 'CytObovbq4_image-produit', NULL, 'jpzd2740yb-produit-infinix-hot-8jpg', 1, 1, '2020-01-12 10:10:17', '2020-01-12 10:10:17', NULL),
(229, 'QwXB9fGhR9_produit-Hot-8.jpg', 'QwXB9fGhR9_produit-Hot-8.jpg', 'BWsGndLBH2_image-produit', NULL, 'qwxb9fghr9-produit-hot-8jpg', 1, 1, '2020-01-12 10:10:17', '2020-01-12 10:10:17', NULL),
(230, 'i9UoRCqMRI_produit-Infinix-S5-64-GB.jpg', 'i9UoRCqMRI_produit-Infinix-S5-64-GB.jpg', '1U0ddoQtHj_image-produit', NULL, 'i9uorcqmri-produit-infinix-s5-64-gbjpg', 1, 1, '2020-01-12 16:31:15', '2020-01-12 16:31:15', NULL),
(231, 'thLFHdcLEy_produit-S5-32GB.jpg', 'thLFHdcLEy_produit-S5-32GB.jpg', 'aYzecNHrj6_image-produit', NULL, 'thlfhdcley-produit-s5-32gbjpg', 1, 1, '2020-01-12 16:32:27', '2020-01-12 16:32:27', NULL),
(232, 'Hjhu9RE7ZA_produit-1-Iphone-11-Pro-Max-64-GB.jpg', 'Hjhu9RE7ZA_produit-1-Iphone-11-Pro-Max-64-GB.jpg', 'pRC6p6a85h_image-produit', NULL, 'hjhu9re7za-produit-1-iphone-11-pro-max-64-gbjpg', 1, 1, '2020-01-13 10:26:15', '2020-01-13 10:26:15', NULL),
(233, 'ayCuZ7KfwA_produit-2-Iphone-11-Pro-Max-64-GB.jpg', 'ayCuZ7KfwA_produit-2-Iphone-11-Pro-Max-64-GB.jpg', 'NHD75oN9K8_image-produit', NULL, 'aycuz7kfwa-produit-2-iphone-11-pro-max-64-gbjpg', 1, 1, '2020-01-13 10:26:16', '2020-01-13 10:26:16', NULL),
(234, 'YcuvMhiL7p_produit-3-Iphone-11-Pro-Max-64-GB.jpg', 'YcuvMhiL7p_produit-3-Iphone-11-Pro-Max-64-GB.jpg', 'UgkBsspvQ6_image-produit', NULL, 'ycuvmhil7p-produit-3-iphone-11-pro-max-64-gbjpg', 1, 1, '2020-01-13 10:26:16', '2020-01-13 10:26:16', NULL),
(235, 'hUpo4qTi5C_produit-4-Iphone-11-Pro-Max-64-GB.jpg', 'hUpo4qTi5C_produit-4-Iphone-11-Pro-Max-64-GB.jpg', 'Smes3iyeWW_image-produit', NULL, 'hupo4qti5c-produit-4-iphone-11-pro-max-64-gbjpg', 1, 1, '2020-01-13 10:26:16', '2020-01-13 10:26:16', NULL),
(236, 'SANnMK2dq8_kadmarket-categoriearticulos35_8193.png', 'SANnMK2dq8_kadmarket-categoriearticulos35_8193.png', 'ywQfN2mj3lCwgbmllWgS_image-categorie', NULL, 'sannmk2dq8-kadmarket-categoriearticulos35-8193png', 1, 1, '2020-01-13 11:23:00', '2020-01-13 11:23:00', NULL),
(237, 'KZOgTtMNRe_produit-iPhone-XS-64-Go.jpg', 'KZOgTtMNRe_produit-iPhone-XS-64-Go.jpg', '17se8uB80h_image-produit', NULL, 'kzogttmnre-produit-iphone-xs-64-gojpg', 1, 1, '2020-01-13 23:25:32', '2020-01-13 23:25:32', NULL),
(238, 'vx8iTRByVx_produit-2-iPhone-XS-64-Go.jpg', 'vx8iTRByVx_produit-2-iPhone-XS-64-Go.jpg', 'dZiGQrOTKJ_image-produit', NULL, 'vx8itrbyvx-produit-2-iphone-xs-64-gojpg', 1, 1, '2020-01-13 23:25:32', '2020-01-13 23:25:32', NULL),
(239, 'pseu5OjL4W_produit-iPhone-XS-Max-64-GB.jpg', 'pseu5OjL4W_produit-iPhone-XS-Max-64-GB.jpg', '4i5lvzubo8_image-produit', NULL, 'pseu5ojl4w-produit-iphone-xs-max-64-gbjpg', 1, 1, '2020-01-13 23:36:50', '2020-01-13 23:36:50', NULL),
(240, 'cXjue0PZH1_produit-2-iPhone-XS-Max-64-GB.jpg', 'cXjue0PZH1_produit-2-iPhone-XS-Max-64-GB.jpg', 'ZLz69BcKoh_image-produit', NULL, 'cxjue0pzh1-produit-2-iphone-xs-max-64-gbjpg', 1, 1, '2020-01-13 23:36:50', '2020-01-13 23:36:50', NULL),
(241, 'rJS1SAuHLn_produit-Produits-phone.jpg', 'rJS1SAuHLn_produit-Produits-phone.jpg', 'nazJ6vC5F0_image-produit', NULL, 'rjs1sauhln-produit-produits-phonejpg', 1, 1, '2020-01-13 23:47:51', '2020-01-13 23:47:51', NULL),
(242, '50JVIMp0OQ_produit-2-Iphone-XS-Max-256.jpg', '50JVIMp0OQ_produit-2-Iphone-XS-Max-256.jpg', 'JtVWjVxicm_image-produit', NULL, '50jvimp0oq-produit-2-iphone-xs-max-256jpg', 1, 1, '2020-01-13 23:47:51', '2020-01-13 23:47:51', NULL),
(243, 'm2WQ0az4WA_produit-1-Iphone-XS-Max-256.jpg', 'm2WQ0az4WA_produit-1-Iphone-XS-Max-256.jpg', 'roRrFmE0nO_image-produit', NULL, 'm2wq0az4wa-produit-1-iphone-xs-max-256jpg', 1, 1, '2020-01-13 23:47:51', '2020-01-13 23:47:51', NULL),
(244, 'VnFt8zTadQ_produit-Iphone-XS-Max-256.jpg', 'VnFt8zTadQ_produit-Iphone-XS-Max-256.jpg', 'K6FXBhqf6y_image-produit', NULL, 'vnft8ztadq-produit-iphone-xs-max-256jpg', 1, 1, '2020-01-13 23:47:51', '2020-01-13 23:47:51', NULL),
(245, 'jxoNEHH6Al_produit-iPhone-XS-256.jpg', 'jxoNEHH6Al_produit-iPhone-XS-256.jpg', 'djNhC54qrz_image-produit', NULL, 'jxonehh6al-produit-iphone-xs-256jpg', 1, 1, '2020-01-13 23:55:52', '2020-01-13 23:55:52', NULL),
(246, 'pVfFhOwXvD_produit-2-iPhone-XS-256.jpg', 'pVfFhOwXvD_produit-2-iPhone-XS-256.jpg', 'v651cvPy9U_image-produit', NULL, 'pvffhowxvd-produit-2-iphone-xs-256jpg', 1, 1, '2020-01-13 23:55:52', '2020-01-13 23:55:52', NULL),
(247, 'V0uFDdJayl_produit-Apple-iPhone-X-64-Go-5-8-Argent.jpg', 'V0uFDdJayl_produit-Apple-iPhone-X-64-Go-5-8-Argent.jpg', 'vYig4cwl37_image-produit', NULL, 'v0ufddjayl-produit-apple-iphone-x-64-go-5-8-argentjpg', 1, 1, '2020-01-14 00:05:18', '2020-01-14 00:05:18', NULL),
(248, 'P47WsKooDl_produit-1-Apple-iPhone-X-64-Go-5-8-Argent.jpg', 'P47WsKooDl_produit-1-Apple-iPhone-X-64-Go-5-8-Argent.jpg', 'TCSEnLDIxd_image-produit', NULL, 'p47wskoodl-produit-1-apple-iphone-x-64-go-5-8-argentjpg', 1, 1, '2020-01-14 00:05:18', '2020-01-14 00:05:18', NULL),
(249, 'IL3rFiMWf3_produit-2-Apple-iPhone-X-64-Go-5-8-Argent.jpg', 'IL3rFiMWf3_produit-2-Apple-iPhone-X-64-Go-5-8-Argent.jpg', 'k7J7An91FB_image-produit', NULL, 'il3rfimwf3-produit-2-apple-iphone-x-64-go-5-8-argentjpg', 1, 1, '2020-01-14 00:05:18', '2020-01-14 00:05:18', NULL),
(250, 'RaIu8QdgzV_produit-Apple-iPhone-X-256-Go-5-8-Gris-Sideral.jpg', 'RaIu8QdgzV_produit-Apple-iPhone-X-256-Go-5-8-Gris-Sideral.jpg', '7ZBFhZG7UO_image-produit', NULL, 'raiu8qdgzv-produit-apple-iphone-x-256-go-5-8-gris-sideraljpg', 1, 1, '2020-01-14 00:14:01', '2020-01-14 00:14:01', NULL),
(251, 'VKlxsdXnam_produit-2-Apple-iPhone-X-256-Go-5-8-Gris-Sideral.jpg', 'VKlxsdXnam_produit-2-Apple-iPhone-X-256-Go-5-8-Gris-Sideral.jpg', 'kpCuex8yw5_image-produit', NULL, 'vklxsdxnam-produit-2-apple-iphone-x-256-go-5-8-gris-sideraljpg', 1, 1, '2020-01-14 00:14:01', '2020-01-14 00:14:01', NULL),
(252, 'gOC5Etjwm5_produit-Apple-iPhone-11-64-Go-6-1-Noir.jpg', 'gOC5Etjwm5_produit-Apple-iPhone-11-64-Go-6-1-Noir.jpg', 'GOZf3wykJo_image-produit', NULL, 'goc5etjwm5-produit-apple-iphone-11-64-go-6-1-noirjpg', 1, 1, '2020-01-14 00:48:38', '2020-01-14 00:48:38', NULL),
(253, '2uVXkf8yCU_produit-Produits-phone.jpg', '2uVXkf8yCU_produit-Produits-phone.jpg', 'yA6m8UpvkR_image-produit', NULL, '2uvxkf8ycu-produit-produits-phonejpg', 1, 1, '2020-01-14 00:48:38', '2020-01-14 00:48:38', NULL),
(254, 'tl8KUS5SRi_produit-Apple-iPhone-11-64-Go-6-1-Noir-(3).jpg', 'tl8KUS5SRi_produit-Apple-iPhone-11-64-Go-6-1-Noir-(3).jpg', 'gWm8Vxc2ad_image-produit', NULL, 'tl8kus5sri-produit-apple-iphone-11-64-go-6-1-noir-3jpg', 1, 1, '2020-01-14 00:48:38', '2020-01-14 00:48:38', NULL),
(255, 'Ym7Ebydqxw_produit-11-128-Go.jpg', 'Ym7Ebydqxw_produit-11-128-Go.jpg', '02kzx29rvd_image-produit', NULL, 'ym7ebydqxw-produit-11-128-gojpg', 1, 1, '2020-01-14 07:33:30', '2020-01-14 07:33:30', NULL),
(256, 'vucSyPqAKY_produit-2-iPhone-11-128-GB.jpg', 'vucSyPqAKY_produit-2-iPhone-11-128-GB.jpg', 'Swb8qiQfc4_image-produit', NULL, 'vucsypqaky-produit-2-iphone-11-128-gbjpg', 1, 1, '2020-01-14 07:33:30', '2020-01-14 07:33:30', NULL),
(257, 'bOX2ImrYkG_produit-1-iPhone-11-128-GB.jpg', 'bOX2ImrYkG_produit-1-iPhone-11-128-GB.jpg', 'YItlDfiNSv_image-produit', NULL, 'box2imrykg-produit-1-iphone-11-128-gbjpg', 1, 1, '2020-01-14 07:33:30', '2020-01-14 07:33:30', NULL),
(258, 'qYFxXndpa0_produit-iPhone-11-128-GB.jpg', 'qYFxXndpa0_produit-iPhone-11-128-GB.jpg', 'aiUNJx6Xt1_image-produit', NULL, 'qyfxxndpa0-produit-iphone-11-128-gbjpg', 1, 1, '2020-01-14 07:33:30', '2020-01-14 07:33:30', NULL),
(259, 'E59yiHxrfE_produit-iPhone-11-pro-64.jpg', 'E59yiHxrfE_produit-iPhone-11-pro-64.jpg', 'VsYcIqTgSI_image-produit', NULL, 'e59yihxrfe-produit-iphone-11-pro-64jpg', 1, 1, '2020-01-14 07:48:58', '2020-01-14 07:48:58', NULL),
(260, 'BeaVxuo9I8_produit-Apple-iPhone-11-Pro-64-Go-5-8-Gris-Sideral-(4).jpg', 'BeaVxuo9I8_produit-Apple-iPhone-11-Pro-64-Go-5-8-Gris-Sideral-(4).jpg', 'wpHpiCpI8m_image-produit', NULL, 'beavxuo9i8-produit-apple-iphone-11-pro-64-go-5-8-gris-sideral-4jpg', 1, 1, '2020-01-14 07:48:58', '2020-01-14 07:48:58', NULL),
(261, '1aAyhuFMJT_produit-1-iPhone-11-pro-64.jpg', '1aAyhuFMJT_produit-1-iPhone-11-pro-64.jpg', '21n6oJd3R5_image-produit', NULL, '1aayhufmjt-produit-1-iphone-11-pro-64jpg', 1, 1, '2020-01-14 07:48:58', '2020-01-14 07:48:58', NULL),
(262, 'u9jGyf9LHy_produit-2-iPhone-11-pro-64.jpg', 'u9jGyf9LHy_produit-2-iPhone-11-pro-64.jpg', 'eBA5ImZ4yb_image-produit', NULL, 'u9jgyf9lhy-produit-2-iphone-11-pro-64jpg', 1, 1, '2020-01-14 07:48:58', '2020-01-14 07:48:58', NULL),
(263, 'ip8FZNpVlw_produit-4-11-pro-256-Go.jpg', 'ip8FZNpVlw_produit-4-11-pro-256-Go.jpg', 'JXCQfa8Grq_image-produit', NULL, 'ip8fznpvlw-produit-4-11-pro-256-gojpg', 1, 1, '2020-01-22 08:10:52', '2020-01-22 08:10:52', NULL),
(264, 'xIU9be09MC_produit-11-pro-256-Go.jpg', 'xIU9be09MC_produit-11-pro-256-Go.jpg', 'rmMfMOMo5M_image-produit', NULL, 'xiu9be09mc-produit-11-pro-256-gojpg', 1, 1, '2020-01-22 08:10:52', '2020-01-22 08:10:52', NULL),
(265, 'mB6DEnpBIj_produit-2-11-pro-256-Go.jpg', 'mB6DEnpBIj_produit-2-11-pro-256-Go.jpg', 'WEHdJGzP9T_image-produit', NULL, 'mb6denpbij-produit-2-11-pro-256-gojpg', 1, 1, '2020-01-22 08:10:52', '2020-01-22 08:10:52', NULL),
(266, 'lKs9VwzahT_produit-3-11-pro-256-Go.jpg', 'lKs9VwzahT_produit-3-11-pro-256-Go.jpg', 'vPu3inxvJq_image-produit', NULL, 'lks9vwzaht-produit-3-11-pro-256-gojpg', 1, 1, '2020-01-22 08:10:52', '2020-01-22 08:10:52', NULL),
(267, 'D1GpgaKhL8_produit-11-pro-max-256.jpg', 'D1GpgaKhL8_produit-11-pro-max-256.jpg', '3ItJtsl5er_image-produit', NULL, 'd1gpgakhl8-produit-11-pro-max-256jpg', 1, 1, '2020-01-22 08:25:18', '2020-01-22 08:25:18', NULL),
(268, '7GSqqTeLM7_produit-XR-64-GB.jpg', '7GSqqTeLM7_produit-XR-64-GB.jpg', '8lJE9yL2V1_image-produit', NULL, '7gsqqtelm7-produit-xr-64-gbjpg', 1, 1, '2020-01-22 08:50:37', '2020-01-22 08:50:37', NULL),
(269, 'hdB4MNyj9U_produit-2-XR-128-GB.jpg', 'hdB4MNyj9U_produit-2-XR-128-GB.jpg', 'WiWLwbxbTg_image-produit', NULL, 'hdb4mnyj9u-produit-2-xr-128-gbjpg', 1, 1, '2020-01-22 09:19:48', '2020-01-22 09:19:48', NULL),
(270, 'EvVMhmHSpC_produit-Produits-phone.jpg', 'EvVMhmHSpC_produit-Produits-phone.jpg', 'I0gvSO6O3o_image-produit', NULL, 'evvmhmhspc-produit-produits-phonejpg', 1, 1, '2020-01-22 09:19:48', '2020-01-22 09:19:48', NULL),
(271, 'lXBij55t0t_produit-3-XR-128-GB.jpg', 'lXBij55t0t_produit-3-XR-128-GB.jpg', 'hXJEHJouK1_image-produit', NULL, 'lxbij55t0t-produit-3-xr-128-gbjpg', 1, 1, '2020-01-22 09:19:48', '2020-01-22 09:19:48', NULL),
(272, '2RntyyNEN7_produit-XR-128-GB.jpg', '2RntyyNEN7_produit-XR-128-GB.jpg', 'dnO1y2rATH_image-produit', NULL, '2rntyynen7-produit-xr-128-gbjpg', 1, 1, '2020-01-22 09:19:48', '2020-01-22 09:19:48', NULL),
(273, '5Gxa5Z7WWO_produit-XR-256-Go.jpg', '5Gxa5Z7WWO_produit-XR-256-Go.jpg', 'oFzMEXXWsJ_image-produit', NULL, '5gxa5z7wwo-produit-xr-256-gojpg', 1, 1, '2020-01-22 10:56:15', '2020-01-22 10:56:15', NULL),
(274, 'BaJZ0BQiso_produit-1-XR-256-Go.jpg', 'BaJZ0BQiso_produit-1-XR-256-Go.jpg', 'Rdznoh7frD_image-produit', NULL, 'bajz0bqiso-produit-1-xr-256-gojpg', 1, 1, '2020-01-22 10:56:15', '2020-01-22 10:56:15', NULL),
(275, 'N5Em5JxiSu_produit-1-iPhone-8-64-GO.jpg', 'N5Em5JxiSu_produit-1-iPhone-8-64-GO.jpg', 'uHgyMK8jWF_image-produit', NULL, 'n5em5jxisu-produit-1-iphone-8-64-gojpg', 1, 1, '2020-01-22 13:30:37', '2020-01-22 13:30:37', NULL),
(276, 'DJmqQwCBhT_produit-2-iPhone-8-64-GO.jpg', 'DJmqQwCBhT_produit-2-iPhone-8-64-GO.jpg', '1omBXmg0Ow_image-produit', NULL, 'djmqqwcbht-produit-2-iphone-8-64-gojpg', 1, 1, '2020-01-22 13:30:37', '2020-01-22 13:30:37', NULL),
(277, 'ZLixI7d6QU_produit-iPhone-8-64-GO.jpg', 'ZLixI7d6QU_produit-iPhone-8-64-GO.jpg', 'iXXO5QE1pt_image-produit', NULL, 'zlixi7d6qu-produit-iphone-8-64-gojpg', 1, 1, '2020-01-22 13:30:37', '2020-01-22 13:30:37', NULL),
(278, 'YP0kZ8eBy0_produit-ihpone-8-plus-64-GB.jpg', 'YP0kZ8eBy0_produit-ihpone-8-plus-64-GB.jpg', 'dLsQ2DtrKG_image-produit', NULL, 'yp0kz8eby0-produit-ihpone-8-plus-64-gbjpg', 1, 1, '2020-01-22 13:42:43', '2020-01-22 13:42:43', NULL),
(279, 'D3p1OPcmXt_produit-1-ihpone-8-plus-64-GB.jpg', 'D3p1OPcmXt_produit-1-ihpone-8-plus-64-GB.jpg', 'HIAjtdNUiW_image-produit', NULL, 'd3p1opcmxt-produit-1-ihpone-8-plus-64-gbjpg', 1, 1, '2020-01-22 13:42:43', '2020-01-22 13:42:43', NULL),
(280, 'ZqmJ0EZ8iQ_produit-ihpone-8-plus-64-GB.jpg', 'ZqmJ0EZ8iQ_produit-ihpone-8-plus-64-GB.jpg', '1AvPa3H0Gd_image-produit', NULL, 'zqmj0ez8iq-produit-ihpone-8-plus-64-gbjpg', 1, 1, '2020-01-22 13:46:41', '2020-01-22 13:46:41', NULL),
(281, 'OPOln7BZjD_produit-1-ihpone-8-plus-64-GB.jpg', 'OPOln7BZjD_produit-1-ihpone-8-plus-64-GB.jpg', 'hyKOL4qTmo_image-produit', NULL, 'opoln7bzjd-produit-1-ihpone-8-plus-64-gbjpg', 1, 1, '2020-01-22 13:46:41', '2020-01-22 13:46:41', NULL),
(282, '3QHmuC6f9r_produit-Produits-phone.jpg', '3QHmuC6f9r_produit-Produits-phone.jpg', 'Ce1zMg4aMH_image-produit', NULL, '3qhmuc6f9r-produit-produits-phonejpg', 1, 1, '2020-01-22 14:35:28', '2020-01-22 14:35:28', NULL),
(283, '6ulMeWbvSX_produit-iphone-7-plus-32-GB.jpg', '6ulMeWbvSX_produit-iphone-7-plus-32-GB.jpg', '22IKQfLS1N_image-produit', NULL, '6ulmewbvsx-produit-iphone-7-plus-32-gbjpg', 1, 1, '2020-01-22 14:35:28', '2020-01-22 14:35:28', NULL),
(284, 'qkO07JyRaO_produit-iphone-7-plus-32-GB.jpg', 'qkO07JyRaO_produit-iphone-7-plus-32-GB.jpg', 'it3vVy0T1h_image-produit', NULL, 'qko07jyrao-produit-iphone-7-plus-32-gbjpg', 1, 1, '2020-01-23 05:17:57', '2020-01-23 05:17:57', NULL),
(285, 'XSUA3liSDv_produit-Produits-phone.jpg', 'XSUA3liSDv_produit-Produits-phone.jpg', 'HFWj1OxeHd_image-produit', NULL, 'xsua3lisdv-produit-produits-phonejpg', 1, 1, '2020-01-23 05:17:57', '2020-01-23 05:17:57', NULL),
(286, 'LXbPZlHpvs_produit-Produits-phone.jpg', 'LXbPZlHpvs_produit-Produits-phone.jpg', 'bTAqUTtpYF_image-produit', NULL, 'lxbpzlhpvs-produit-produits-phonejpg', 1, 1, '2020-01-23 05:25:28', '2020-01-23 05:25:28', NULL),
(287, 'PhzekTlTUZ_produit-iphone-7-plus-32-GB.jpg', 'PhzekTlTUZ_produit-iphone-7-plus-32-GB.jpg', '5dTllAEKEB_image-produit', NULL, 'phzektltuz-produit-iphone-7-plus-32-gbjpg', 1, 1, '2020-01-23 05:25:28', '2020-01-23 05:25:28', NULL),
(288, 'Wz3d97cSOc_produit-Produits-phone.jpg', 'Wz3d97cSOc_produit-Produits-phone.jpg', 'TcZStF7WoS_image-produit', NULL, 'wz3d97csoc-produit-produits-phonejpg', 1, 1, '2020-01-23 05:27:38', '2020-01-23 05:27:38', NULL),
(289, 'tuJvgDWwDb_produit-iphone-7-plus-32-GB.jpg', 'tuJvgDWwDb_produit-iphone-7-plus-32-GB.jpg', 'S6TGzHLqDN_image-produit', NULL, 'tujvgdwwdb-produit-iphone-7-plus-32-gbjpg', 1, 1, '2020-01-23 05:27:38', '2020-01-23 05:27:38', NULL),
(290, 'XrtLI58kbh_produit-iPhone-6-16-GB.jpg', 'XrtLI58kbh_produit-iPhone-6-16-GB.jpg', 'OsfIDHf7MV_image-produit', NULL, 'xrtli58kbh-produit-iphone-6-16-gbjpg', 1, 1, '2020-01-23 06:04:22', '2020-01-23 06:04:22', NULL),
(291, 'fZZ3KoenA9_produit-2-iPhone-6-16-GB.jpg', 'fZZ3KoenA9_produit-2-iPhone-6-16-GB.jpg', 'RXQsWa1uhg_image-produit', NULL, 'fzz3koena9-produit-2-iphone-6-16-gbjpg', 1, 1, '2020-01-23 06:04:22', '2020-01-23 06:04:22', NULL),
(292, 'V3LSSQ1WKR_produit-3-iPhone-6-16-GB.jpg', 'V3LSSQ1WKR_produit-3-iPhone-6-16-GB.jpg', 'hQ08mVLnMj_image-produit', NULL, 'v3lssq1wkr-produit-3-iphone-6-16-gbjpg', 1, 1, '2020-01-23 06:04:22', '2020-01-23 06:04:22', NULL),
(293, 'QR9whh4DLh_produit-1-iPhone-6-16-GB.jpg', 'QR9whh4DLh_produit-1-iPhone-6-16-GB.jpg', 'KCfNTa5eMO_image-produit', NULL, 'qr9whh4dlh-produit-1-iphone-6-16-gbjpg', 1, 1, '2020-01-23 06:04:22', '2020-01-23 06:04:22', NULL),
(294, '6kudFqnlSE_produit-2-iphone-6-64-GB.jpg', '6kudFqnlSE_produit-2-iphone-6-64-GB.jpg', 'AsBhMdnMNh_image-produit', NULL, '6kudfqnlse-produit-2-iphone-6-64-gbjpg', 1, 1, '2020-01-23 06:27:26', '2020-01-23 06:27:26', NULL),
(295, 'dG8xCwVtkF_produit-iphone-6-64-GB.jpg', 'dG8xCwVtkF_produit-iphone-6-64-GB.jpg', 'Rlv6weWWnB_image-produit', NULL, 'dg8xcwvtkf-produit-iphone-6-64-gbjpg', 1, 1, '2020-01-23 06:27:26', '2020-01-23 06:27:26', NULL),
(296, 'ppFjIYpArQ_produit-1-iphone-6-64-GB.jpg', 'ppFjIYpArQ_produit-1-iphone-6-64-GB.jpg', 'e89UuZo6Xg_image-produit', NULL, 'ppfjiyparq-produit-1-iphone-6-64-gbjpg', 1, 1, '2020-01-23 06:27:26', '2020-01-23 06:27:26', NULL),
(297, 'LdXCrqstAk_produit-apple-iphone-6-or-64go-debloque-reconditionne-cer.jpg', 'LdXCrqstAk_produit-apple-iphone-6-or-64go-debloque-reconditionne-cer.jpg', 'K7e5LDRT2a_image-produit', NULL, 'ldxcrqstak-produit-apple-iphone-6-or-64go-debloque-reconditionne-cerjpg', 1, 1, '2020-01-23 06:27:26', '2020-01-23 06:27:26', NULL),
(298, 'LJgsSesOs2_produit-iphone-6S-Plus-64-GB.jpg', 'LJgsSesOs2_produit-iphone-6S-Plus-64-GB.jpg', '7DxnsJcefZ_image-produit', NULL, 'ljgssesos2-produit-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:41:42', '2020-01-23 06:41:42', NULL),
(299, 'fNlsxjHwUB_produit-1-iphone-6S-Plus-64-GB.jpg', 'fNlsxjHwUB_produit-1-iphone-6S-Plus-64-GB.jpg', 'gnDpn6OE4B_image-produit', NULL, 'fnlsxjhwub-produit-1-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:41:42', '2020-01-23 06:41:42', NULL),
(300, 'zUMJeSuk3y_produit-iphone-6s-plus-64go-gris-(2).png', 'zUMJeSuk3y_produit-iphone-6s-plus-64go-gris-(2).png', '2eYo0aRjKV_image-produit', NULL, 'zumjesuk3y-produit-iphone-6s-plus-64go-gris-2png', 1, 1, '2020-01-23 06:41:42', '2020-01-23 06:41:42', NULL),
(301, 'v3svs18oVD_produit-3-iphone-6S-Plus-64-GB.jpg', 'v3svs18oVD_produit-3-iphone-6S-Plus-64-GB.jpg', 'xRbORzIVDA_image-produit', NULL, 'v3svs18ovd-produit-3-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:41:42', '2020-01-23 06:41:42', NULL),
(302, 'pSgUqrrklK_produit-1-iphone-6S-Plus-64-GB.jpg', 'pSgUqrrklK_produit-1-iphone-6S-Plus-64-GB.jpg', 'o8qOngGNdb_image-produit', NULL, 'psguqrrklk-produit-1-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:43:57', '2020-01-23 06:43:57', NULL),
(303, 'Mly2Uj9bue_produit-iphone-6S-Plus-64-GB.jpg', 'Mly2Uj9bue_produit-iphone-6S-Plus-64-GB.jpg', 'mxH3ZYLN4c_image-produit', NULL, 'mly2uj9bue-produit-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:43:57', '2020-01-23 06:43:57', NULL),
(304, 'ww8OpyRLYr_produit-2-iphone-6S-Plus-64-GB.jpg', 'ww8OpyRLYr_produit-2-iphone-6S-Plus-64-GB.jpg', 'YChhxz84WE_image-produit', NULL, 'ww8opyrlyr-produit-2-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:43:57', '2020-01-23 06:43:57', NULL),
(305, 'VZMFkD2UK4_produit-3-iphone-6S-Plus-64-GB.jpg', 'VZMFkD2UK4_produit-3-iphone-6S-Plus-64-GB.jpg', 'xHASMNYR7N_image-produit', NULL, 'vzmfkd2uk4-produit-3-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:43:57', '2020-01-23 06:43:57', NULL),
(306, '5LOjGRVJ4m_produit-3-iphone-6S-Plus-64-GB.jpg', '5LOjGRVJ4m_produit-3-iphone-6S-Plus-64-GB.jpg', 'zNh2jkj3yB_image-produit', NULL, '5lojgrvj4m-produit-3-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:46:10', '2020-01-23 06:46:10', NULL),
(307, 'ucqWBLfuxh_produit-iphone-6S-Plus-64-GB.jpg', 'ucqWBLfuxh_produit-iphone-6S-Plus-64-GB.jpg', '7gQaYpBFOE_image-produit', NULL, 'ucqwblfuxh-produit-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:46:10', '2020-01-23 06:46:10', NULL),
(308, 'a0MZunVDQO_produit-2-iphone-6S-Plus-64-GB.jpg', 'a0MZunVDQO_produit-2-iphone-6S-Plus-64-GB.jpg', 'M68pKTovbX_image-produit', NULL, 'a0mzunvdqo-produit-2-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:46:10', '2020-01-23 06:46:10', NULL),
(309, 'tAILwCjJCH_produit-1-iphone-6S-Plus-64-GB.jpg', 'tAILwCjJCH_produit-1-iphone-6S-Plus-64-GB.jpg', 'JqcsgYEBSz_image-produit', NULL, 'tailwcjjch-produit-1-iphone-6s-plus-64-gbjpg', 1, 1, '2020-01-23 06:46:10', '2020-01-23 06:46:10', NULL),
(310, '51QN28J1aK_produit-1-iphone-6-Plus-64-Go.jpg', '51QN28J1aK_produit-1-iphone-6-Plus-64-Go.jpg', 'yI7jGoG4NI_image-produit', NULL, '51qn28j1ak-produit-1-iphone-6-plus-64-gojpg', 1, 1, '2020-01-23 07:03:39', '2020-01-23 07:03:39', NULL),
(311, 'R8btxNN4yM_produit-6-Plus-64-Go.jpg', 'R8btxNN4yM_produit-6-Plus-64-Go.jpg', 'YdVChYF8MT_image-produit', NULL, 'r8btxnn4ym-produit-6-plus-64-gojpg', 1, 1, '2020-01-23 07:03:39', '2020-01-23 07:03:39', NULL),
(312, 'JyUPdWi0Rg_produit-Produits-phone.jpg', 'JyUPdWi0Rg_produit-Produits-phone.jpg', 'M1I87EmVqd_image-produit', NULL, 'jyupdwi0rg-produit-produits-phonejpg', 1, 1, '2020-01-23 07:03:39', '2020-01-23 07:03:39', NULL),
(313, 'EImqathEpq_produit-iphone-6-Plus-64-Go.jpg', 'EImqathEpq_produit-iphone-6-Plus-64-Go.jpg', '8vzMhDSsMC_image-produit', NULL, 'eimqathepq-produit-iphone-6-plus-64-gojpg', 1, 1, '2020-01-23 07:03:39', '2020-01-23 07:03:39', NULL),
(314, '9M7QqzGTHv_produit-Produits-phone.jpg', '9M7QqzGTHv_produit-Produits-phone.jpg', '9uML33PLEz_image-produit', NULL, '9m7qqzgthv-produit-produits-phonejpg', 1, 1, '2020-01-23 07:05:18', '2020-01-23 07:05:18', NULL),
(315, 'AdsXOKiirK_produit-6-Plus-64-Go.jpg', 'AdsXOKiirK_produit-6-Plus-64-Go.jpg', 'KxVAwcbpWR_image-produit', NULL, 'adsxokiirk-produit-6-plus-64-gojpg', 1, 1, '2020-01-23 07:05:18', '2020-01-23 07:05:18', NULL),
(316, 'XRIX7UfhRW_produit-1-iphone-6-Plus-64-Go.jpg', 'XRIX7UfhRW_produit-1-iphone-6-Plus-64-Go.jpg', 'yd9sQ8lIJB_image-produit', NULL, 'xrix7ufhrw-produit-1-iphone-6-plus-64-gojpg', 1, 1, '2020-01-23 07:05:18', '2020-01-23 07:05:18', NULL),
(317, 'AFDjjUach3_produit-iphone-6-Plus-64-Go.jpg', 'AFDjjUach3_produit-iphone-6-Plus-64-Go.jpg', 'rAt7fbTsdT_image-produit', NULL, 'afdjjuach3-produit-iphone-6-plus-64-gojpg', 1, 1, '2020-01-23 07:05:18', '2020-01-23 07:05:18', NULL),
(318, 'gFuLswtilt_produit-Router-0.jpg', 'gFuLswtilt_produit-Router-0.jpg', '99Hpo6kqro_image-produit', NULL, 'gfulswtilt-produit-router-0jpg', 1, 1, '2020-01-29 13:01:32', '2020-01-29 13:01:32', NULL),
(319, 'sjevnpL11y_produit-Router-1.jpg', 'sjevnpL11y_produit-Router-1.jpg', 'Ax84L8tnDf_image-produit', NULL, 'sjevnpl11y-produit-router-1jpg', 1, 1, '2020-01-29 13:01:32', '2020-01-29 13:01:32', NULL),
(320, '7GyXJD3l1P_produit-Router-2.jpg', '7GyXJD3l1P_produit-Router-2.jpg', 'b4ahALhExT_image-produit', NULL, '7gyxjd3l1p-produit-router-2jpg', 1, 1, '2020-01-29 13:01:32', '2020-01-29 13:01:32', NULL),
(321, '3AUmWxAbUr_produit-Samsung-A-2-core.jpg', '3AUmWxAbUr_produit-Samsung-A-2-core.jpg', 'UvD2vTJYnS_image-produit', NULL, '3aumwxabur-produit-samsung-a-2-corejpg', 1, 1, '2020-01-29 22:22:11', '2020-01-29 22:22:11', NULL),
(322, 'oWxSKUplyN_produit-Samsung-A-2-core-2.jpg', 'oWxSKUplyN_produit-Samsung-A-2-core-2.jpg', 'lNalCXiFhV_image-produit', NULL, 'owxskuplyn-produit-samsung-a-2-core-2jpg', 1, 1, '2020-01-29 22:22:11', '2020-01-29 22:22:11', NULL),
(323, 'QvXH9Jb8E0_produit-Produits-phone.jpg', 'QvXH9Jb8E0_produit-Produits-phone.jpg', '9zhuOT6jNB_image-produit', NULL, 'qvxh9jb8e0-produit-produits-phonejpg', 1, 1, '2020-01-29 22:33:00', '2020-01-29 22:33:00', NULL),
(324, 'EJozb9b3xW_produit-M10.jpg', 'EJozb9b3xW_produit-M10.jpg', 'ojeltsO88q_image-produit', NULL, 'ejozb9b3xw-produit-m10jpg', 1, 1, '2020-01-29 22:33:00', '2020-01-29 22:33:00', NULL),
(325, 'O2VnopAxJQ_produit-SG-M20.jpg', 'O2VnopAxJQ_produit-SG-M20.jpg', 'e7UvdpVgZc_image-produit', NULL, 'o2vnopaxjq-produit-sg-m20jpg', 1, 1, '2020-01-29 22:45:34', '2020-01-29 22:45:34', NULL),
(326, '9BzNQtCkIL_produit-SG-2-M20.jpg', '9BzNQtCkIL_produit-SG-2-M20.jpg', 'Wi1RRCifcg_image-produit', NULL, '9bznqtckil-produit-sg-2-m20jpg', 1, 1, '2020-01-29 22:45:34', '2020-01-29 22:45:34', NULL),
(327, '70ePeom38M_produit-SG3-M20.jpg', '70ePeom38M_produit-SG3-M20.jpg', 'xWnaseKUpN_image-produit', NULL, '70epeom38m-produit-sg3-m20jpg', 1, 1, '2020-01-29 22:45:34', '2020-01-29 22:45:34', NULL),
(328, 'YFCHoLr2nm_produit-SG-M30.jpg', 'YFCHoLr2nm_produit-SG-M30.jpg', 'H6Bcvoco9B_image-produit', NULL, 'yfcholr2nm-produit-sg-m30jpg', 1, 1, '2020-01-29 22:54:06', '2020-01-29 22:54:06', NULL),
(329, 'CoVWOcrKIq_produit-2-SG-M30.jpg', 'CoVWOcrKIq_produit-2-SG-M30.jpg', 'wx9exBMtwP_image-produit', NULL, 'covwocrkiq-produit-2-sg-m30jpg', 1, 1, '2020-01-29 22:54:06', '2020-01-29 22:54:06', NULL),
(330, 'yZgumeTRX5_produit-1-SG-M30.jpg', 'yZgumeTRX5_produit-1-SG-M30.jpg', 'gDhc9ER3pY_image-produit', NULL, 'yzgumetrx5-produit-1-sg-m30jpg', 1, 1, '2020-01-29 22:54:06', '2020-01-29 22:54:06', NULL),
(331, 'IuJADcjSCK_produit-SG-Note-8.jpg', 'IuJADcjSCK_produit-SG-Note-8.jpg', 'SI3XcTpqoj_image-produit', NULL, 'iujadcjsck-produit-sg-note-8jpg', 1, 1, '2020-01-29 23:05:09', '2020-01-29 23:05:09', NULL),
(332, 'y5oWRWkbQg_produit-Samsung-note-8.jpg', 'y5oWRWkbQg_produit-Samsung-note-8.jpg', '8ppxFM4kaY_image-produit', NULL, 'y5owrwkbqg-produit-samsung-note-8jpg', 1, 1, '2020-01-29 23:05:09', '2020-01-29 23:05:09', NULL),
(333, 'H6IqMYEJt1_produit-Produits-phone.jpg', 'H6IqMYEJt1_produit-Produits-phone.jpg', 'RM7klHUh4x_image-produit', NULL, 'h6iqmyejt1-produit-produits-phonejpg', 1, 1, '2020-01-29 23:05:09', '2020-01-29 23:05:09', NULL),
(334, '0zKTilWmea_produit-Note-8.jpg', '0zKTilWmea_produit-Note-8.jpg', 'IBx6pnGYWW_image-produit', NULL, '0zktilwmea-produit-note-8jpg', 1, 1, '2020-01-29 23:05:09', '2020-01-29 23:05:09', NULL),
(335, 'ZLyAtYKlyd_produit-Note-9.jpg', 'ZLyAtYKlyd_produit-Note-9.jpg', 'vRoONg4HLc_image-produit', NULL, 'zlyatyklyd-produit-note-9jpg', 1, 1, '2020-01-29 23:15:28', '2020-01-29 23:15:28', NULL),
(336, 'r05HM4Gowp_produit-Produits-phoe.jpg', 'r05HM4Gowp_produit-Produits-phoe.jpg', 'lQFz4nlZY5_image-produit', NULL, 'r05hm4gowp-produit-produits-phoejpg', 1, 1, '2020-01-29 23:15:28', '2020-01-29 23:15:28', NULL),
(337, 'SVBOFBKpGt_produit-Produits-phone.jpg', 'SVBOFBKpGt_produit-Produits-phone.jpg', 'IidUreKdIr_image-produit', NULL, 'svbofbkpgt-produit-produits-phonejpg', 1, 1, '2020-01-29 23:15:28', '2020-01-29 23:15:28', NULL),
(338, '4lpJKMeZD9_produit-SG-Note-9.jpg', '4lpJKMeZD9_produit-SG-Note-9.jpg', 'kvRvnH4iS7_image-produit', NULL, '4lpjkmezd9-produit-sg-note-9jpg', 1, 1, '2020-01-29 23:15:28', '2020-01-29 23:15:28', NULL),
(339, 'KjHT5YJGPW_produit-Note-10-Plus-5G.jpg', 'KjHT5YJGPW_produit-Note-10-Plus-5G.jpg', 'TDRW3AXMWb_image-produit', NULL, 'kjht5yjgpw-produit-note-10-plus-5gjpg', 1, 1, '2020-01-29 23:28:30', '2020-01-29 23:28:30', NULL),
(340, 'pBKx9aTilR_produit-Note-10-5G.jpg', 'pBKx9aTilR_produit-Note-10-5G.jpg', 'ztVzSQ4fTZ_image-produit', NULL, 'pbkx9atilr-produit-note-10-5gjpg', 1, 1, '2020-01-29 23:28:30', '2020-01-29 23:28:30', NULL),
(341, 'AzueNtElZy_produit-Produits-phone.jpg', 'AzueNtElZy_produit-Produits-phone.jpg', '2Hv7VsXBnx_image-produit', NULL, 'azuentelzy-produit-produits-phonejpg', 1, 1, '2020-01-29 23:28:30', '2020-01-29 23:28:30', NULL),
(342, 'pghIwdBr6Z_produit-SG-Note-10-5G.jpg', 'pghIwdBr6Z_produit-SG-Note-10-5G.jpg', 'u5Ftw5s90c_image-produit', NULL, 'pghiwdbr6z-produit-sg-note-10-5gjpg', 1, 1, '2020-01-29 23:28:30', '2020-01-29 23:28:30', NULL),
(343, 'ov5ZYeLJqU_produit-SG-S9+.jpg', 'ov5ZYeLJqU_produit-SG-S9+.jpg', 'K58G9N2I9S_image-produit', NULL, 'ov5zyeljqu-produit-sg-s9jpg', 1, 1, '2020-01-29 23:43:04', '2020-01-29 23:43:04', NULL),
(344, 'NlZKJ0sbvx_produit-S9+.jpg', 'NlZKJ0sbvx_produit-S9+.jpg', 'bTIFrjtwYF_image-produit', NULL, 'nlzkj0sbvx-produit-s9jpg', 1, 1, '2020-01-29 23:43:04', '2020-01-29 23:43:04', NULL),
(345, '6k8T4ONrgf_produit-Produits-phone.jpg', '6k8T4ONrgf_produit-Produits-phone.jpg', 'NOZpKOt336_image-produit', NULL, '6k8t4onrgf-produit-produits-phonejpg', 1, 1, '2020-01-29 23:43:04', '2020-01-29 23:43:04', NULL),
(346, '6hd7HP4cmh_produit-SG-S9-+1.jpg', '6hd7HP4cmh_produit-SG-S9-+1.jpg', 'lpcygLrW67_image-produit', NULL, '6hd7hp4cmh-produit-sg-s9-1jpg', 1, 1, '2020-01-29 23:43:04', '2020-01-29 23:43:04', NULL),
(347, 'VPf1806kYS_produit-Itel-S15.jpg', 'VPf1806kYS_produit-Itel-S15.jpg', '2ik6YDuLE5_image-produit', NULL, 'vpf1806kys-produit-itel-s15jpg', 1, 1, '2020-01-30 08:47:06', '2020-01-30 08:47:06', NULL),
(348, 'L4uqa5GsJD_produit-Spark-Go.jpg', 'L4uqa5GsJD_produit-Spark-Go.jpg', 'CmubIR9zhM_image-produit', NULL, 'l4uqa5gsjd-produit-spark-gojpg', 1, 1, '2020-02-13 08:01:42', '2020-02-13 08:01:42', NULL);
INSERT INTO `kdm_images` (`id`, `nom`, `alt`, `slug`, `url`, `description`, `owner`, `shop_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(349, 'RV4Y7q343N_produit-Samsung-Tab-A.jpg', 'RV4Y7q343N_produit-Samsung-Tab-A.jpg', 'A25K2Q5ohV_image-produit', NULL, 'rv4y7q343n-produit-samsung-tab-ajpg', 1, 1, '2020-02-13 08:10:27', '2020-02-13 08:10:27', NULL),
(350, '4yya4xNvDN_produit-Tecno-T454.jpg', '4yya4xNvDN_produit-Tecno-T454.jpg', 'lIoIYTUWDo_image-produit', NULL, '4yya4xnvdn-produit-tecno-t454jpg', 1, 1, '2020-02-13 08:20:18', '2020-02-13 08:20:18', NULL),
(351, 'CZhNXsagGj_produit-T372.jpg', 'CZhNXsagGj_produit-T372.jpg', 'iJJnGZ9eTF_image-produit', NULL, 'czhnxsaggj-produit-t372jpg', 1, 1, '2020-02-13 08:25:26', '2020-02-13 08:25:26', NULL),
(352, 'NkRQNIW4XP_produit-Tecno-POP-3.jpg', 'NkRQNIW4XP_produit-Tecno-POP-3.jpg', 'r9GEZ7juRP_image-produit', NULL, 'nkrqniw4xp-produit-tecno-pop-3jpg', 1, 1, '2020-02-17 09:31:57', '2020-02-17 09:31:57', NULL),
(353, 'eGzHHETgwa_produit-Huawei-Y9.jpg', 'eGzHHETgwa_produit-Huawei-Y9.jpg', 'V09JoMFh5y_image-produit', NULL, 'egzhhetgwa-produit-huawei-y9jpg', 1, 1, '2020-02-27 22:05:55', '2020-02-27 22:05:55', NULL),
(354, '482rpfngNG_produit-Camon-15.jpg', '482rpfngNG_produit-Camon-15.jpg', 'YepKMry0YM_image-produit', NULL, '482rpfngng-produit-camon-15jpg', 1, 1, '2020-03-12 11:35:38', '2020-03-12 11:35:38', NULL),
(355, '0e6QvGUtGV_produit-Itel-A56.jpg', '0e6QvGUtGV_produit-Itel-A56.jpg', 'C2i8rEZYmD_image-produit', NULL, '0e6qvgutgv-produit-itel-a56jpg', 1, 1, '2020-04-04 08:39:48', '2020-04-04 08:39:48', NULL),
(356, 'sF4OME9Pxp_produit-A56.jpg', 'sF4OME9Pxp_produit-A56.jpg', 'Zc13mFktgs_image-produit', NULL, 'sf4ome9pxp-produit-a56jpg', 1, 1, '2020-04-04 08:39:48', '2020-04-04 08:39:48', NULL),
(357, 'ka9rz5zOlV_produit-Ite-A56.jpg', 'ka9rz5zOlV_produit-Ite-A56.jpg', 'dN6IaxDvjf_image-produit', NULL, 'ka9rz5zolv-produit-ite-a56jpg', 1, 1, '2020-04-04 08:39:48', '2020-04-04 08:39:48', NULL),
(358, 'ROIDwUTNIA_produit-Tecno-Camon-15-Premier.jpg', 'ROIDwUTNIA_produit-Tecno-Camon-15-Premier.jpg', 'iqvl6dIC9e_image-produit', NULL, 'roidwutnia-produit-tecno-camon-15-premierjpg', 1, 1, '2020-06-05 06:41:11', '2020-06-05 06:41:11', NULL),
(359, 'vzOAr6p63f_produit-Tecno-Camon-15-Premier1.jpg', 'vzOAr6p63f_produit-Tecno-Camon-15-Premier1.jpg', '25apgkwkMx_image-produit', NULL, 'vzoar6p63f-produit-tecno-camon-15-premier1jpg', 1, 1, '2020-06-05 06:41:11', '2020-06-05 06:41:11', NULL),
(360, 'nuer0WLMm3_produit-Tecno-Camon-15-Premier3.jpg', 'nuer0WLMm3_produit-Tecno-Camon-15-Premier3.jpg', 'qB02lgjwYO_image-produit', NULL, 'nuer0wlmm3-produit-tecno-camon-15-premier3jpg', 1, 1, '2020-06-05 06:41:11', '2020-06-05 06:41:11', NULL),
(361, '2Hq8OrAdfe_produit-Tecno-Camon-15-Premier2.jpg', '2Hq8OrAdfe_produit-Tecno-Camon-15-Premier2.jpg', 'r2jAeCcwg1_image-produit', NULL, '2hq8oradfe-produit-tecno-camon-15-premier2jpg', 1, 1, '2020-06-05 06:41:11', '2020-06-05 06:41:11', NULL),
(362, 'LxDJxn8apT_produit-Itel-P36.jpg', 'LxDJxn8apT_produit-Itel-P36.jpg', 'JMfxNdmCuE_image-produit', NULL, 'lxdjxn8apt-produit-itel-p36jpg', 1, 1, '2020-06-22 08:27:28', '2020-06-22 08:27:28', NULL),
(363, 'mqktvX5XVK_produit-Spark-5-Air.jpg', 'mqktvX5XVK_produit-Spark-5-Air.jpg', 'zoUQNFdoJS_image-produit', NULL, 'mqktvx5xvk-produit-spark-5-airjpg', 1, 1, '2020-07-09 18:41:11', '2020-07-09 18:41:11', NULL),
(364, 'Xk8vn0kGl0_produit-1-Spark-5-Air.jpg', 'Xk8vn0kGl0_produit-1-Spark-5-Air.jpg', 'BxrPzSynRn_image-produit', NULL, 'xk8vn0kgl0-produit-1-spark-5-airjpg', 1, 1, '2020-07-09 18:41:11', '2020-07-09 18:41:11', NULL),
(365, 'wzGKOUMgeD_produit-2-Spark-5-Air.jpg', 'wzGKOUMgeD_produit-2-Spark-5-Air.jpg', 'cunD1wfFWY_image-produit', NULL, 'wzgkoumged-produit-2-spark-5-airjpg', 1, 1, '2020-07-09 18:41:11', '2020-07-09 18:41:11', NULL),
(366, 'wXgANIM6yf_produit-1-Tecno-spark-5.jpg', 'wXgANIM6yf_produit-1-Tecno-spark-5.jpg', 'H7ay9wzhN8_image-produit', NULL, 'wxganim6yf-produit-1-tecno-spark-5jpg', 1, 1, '2020-07-11 10:49:36', '2020-07-11 10:49:36', NULL),
(367, 'gWF2dCittG_produit-2-Tecno-spark-5.jpg', 'gWF2dCittG_produit-2-Tecno-spark-5.jpg', 'DW8sTVrlxK_image-produit', NULL, 'gwf2dcittg-produit-2-tecno-spark-5jpg', 1, 1, '2020-07-11 10:49:36', '2020-07-11 10:49:36', NULL),
(368, 'yrjnKrF4x7_produit-3-Tecno-spark-5.jpg', 'yrjnKrF4x7_produit-3-Tecno-spark-5.jpg', 'bVsjYfob2P_image-produit', NULL, 'yrjnkrf4x7-produit-3-tecno-spark-5jpg', 1, 1, '2020-07-11 10:49:36', '2020-07-11 10:49:36', NULL),
(369, 'sjSDbFBzIM_produit-Tecno-spark-5.jpg', 'sjSDbFBzIM_produit-Tecno-spark-5.jpg', 'kduPZfujBz_image-produit', NULL, 'sjsdbfbzim-produit-tecno-spark-5jpg', 1, 1, '2020-07-11 10:49:36', '2020-07-11 10:49:36', NULL),
(370, 'ksjvJvEU6C_produit-TecnoT454.jpg', 'ksjvJvEU6C_produit-TecnoT454.jpg', 'zE27GA0GR0_image-produit', NULL, 'ksjvjveu6c-produit-tecnot454jpg', 1, 1, '2020-07-11 10:59:13', '2020-07-11 10:59:13', NULL),
(371, 'aFRKNU4thP_produit-Tecno-T 466.jpg', 'aFRKNU4thP_produit-Tecno-T 466.jpg', '0a98wMvpI2_image-produit', NULL, 'afrknu4thp-produit-tecno-t-466jpg', 1, 1, '2020-07-11 11:04:37', '2020-07-11 11:04:37', NULL),
(372, 'xSq0N64bgi_produit-Tecno-T301.jpg', 'xSq0N64bgi_produit-Tecno-T301.jpg', 'ohaLVLQiSw_image-produit', NULL, 'xsq0n64bgi-produit-tecno-t301jpg', 1, 1, '2020-07-11 11:10:00', '2020-07-11 11:10:00', NULL),
(373, 'QS29SQjgLo_produit-2-Samsung-Galaxy-A21-S.jpg', 'QS29SQjgLo_produit-2-Samsung-Galaxy-A21-S.jpg', 'yCojaZn9fM_image-produit', NULL, 'qs29sqjglo-produit-2-samsung-galaxy-a21-sjpg', 1, 1, '2020-07-11 12:13:21', '2020-07-11 12:13:21', NULL),
(374, 'CqG50ZElJ1_produit-1-Samsung-Galaxy-A21-S.jpg', 'CqG50ZElJ1_produit-1-Samsung-Galaxy-A21-S.jpg', 'egxWzWJRj3_image-produit', NULL, 'cqg50zelj1-produit-1-samsung-galaxy-a21-sjpg', 1, 1, '2020-07-11 12:13:21', '2020-07-11 12:13:21', NULL),
(375, 'pT98LcwgLW_produit-3Samsung-Galaxy-A21-S.jpg', 'pT98LcwgLW_produit-3Samsung-Galaxy-A21-S.jpg', 'sQ3SgGVihY_image-produit', NULL, 'pt98lcwglw-produit-3samsung-galaxy-a21-sjpg', 1, 1, '2020-07-11 12:13:21', '2020-07-11 12:13:21', NULL),
(376, 'xCDkIbD9wv_produit-Samsung-Galaxy-A21-S.jpg', 'xCDkIbD9wv_produit-Samsung-Galaxy-A21-S.jpg', 'sOLjBRNHIM_image-produit', NULL, 'xcdkibd9wv-produit-samsung-galaxy-a21-sjpg', 1, 1, '2020-07-11 12:13:21', '2020-07-11 12:13:21', NULL),
(377, 'ow0dhwiYLA_produit-Samsung-Galaxy-A11.jpg', 'ow0dhwiYLA_produit-Samsung-Galaxy-A11.jpg', '8YhTzRwdTd_image-produit', NULL, 'ow0dhwiyla-produit-samsung-galaxy-a11jpg', 1, 1, '2020-07-11 12:33:27', '2020-07-11 12:33:27', NULL),
(378, '9liYiQfzuT_produit-Samsung-Galaxy-11-2.jpg', '9liYiQfzuT_produit-Samsung-Galaxy-11-2.jpg', 'EFrlhCKuVS_image-produit', NULL, '9liyiqfzut-produit-samsung-galaxy-11-2jpg', 1, 1, '2020-07-11 12:33:27', '2020-07-11 12:33:27', NULL),
(379, 'nrsdRPoouP_produit-Samsung-Galaxy-A11-3.jpg', 'nrsdRPoouP_produit-Samsung-Galaxy-A11-3.jpg', 'HrSValJeDh_image-produit', NULL, 'nrsdrpooup-produit-samsung-galaxy-a11-3jpg', 1, 1, '2020-07-11 12:33:27', '2020-07-11 12:33:27', NULL),
(380, 'w6jh8KW0I7_produit-Samsung-Galaxy-A11-4.jpg', 'w6jh8KW0I7_produit-Samsung-Galaxy-A11-4.jpg', 'qxt5orlikw_image-produit', NULL, 'w6jh8kw0i7-produit-samsung-galaxy-a11-4jpg', 1, 1, '2020-07-11 12:33:27', '2020-07-11 12:33:27', NULL),
(381, 'oMP2l6CePh_produit-Samsung-Galaxy-M11.jpg', 'oMP2l6CePh_produit-Samsung-Galaxy-M11.jpg', 'zU4m4YleUf_image-produit', NULL, 'omp2l6ceph-produit-samsung-galaxy-m11jpg', 1, 1, '2020-07-11 17:48:29', '2020-07-11 17:48:29', NULL),
(382, 'eRmEaQ1Y21_produit-Samsung-Galaxy-m11-2.jpg', 'eRmEaQ1Y21_produit-Samsung-Galaxy-m11-2.jpg', '5oYa9G6Cra_image-produit', NULL, 'ermeaq1y21-produit-samsung-galaxy-m11-2jpg', 1, 1, '2020-07-11 17:48:29', '2020-07-11 17:48:29', NULL),
(383, 'E0ILWiA4M3_produit-Samsung-Galaxy-M11-3.jpg', 'E0ILWiA4M3_produit-Samsung-Galaxy-M11-3.jpg', 'gHVyV0pPrR_image-produit', NULL, 'e0ilwia4m3-produit-samsung-galaxy-m11-3jpg', 1, 1, '2020-07-11 17:48:29', '2020-07-11 17:48:29', NULL),
(384, 'G5EFWyZC46_produit-Samsung-Galaxy-m11-4.jpg', 'G5EFWyZC46_produit-Samsung-Galaxy-m11-4.jpg', '3jdT2YVC1T_image-produit', NULL, 'g5efwyzc46-produit-samsung-galaxy-m11-4jpg', 1, 1, '2020-07-11 17:48:29', '2020-07-11 17:48:29', NULL),
(385, 'jYBFdtUGKw_produit-Itel-A-56-Pro-2.jpg', 'jYBFdtUGKw_produit-Itel-A-56-Pro-2.jpg', 'ZNFhl2JWot_image-produit', NULL, 'jybfdtugkw-produit-itel-a-56-pro-2jpg', 1, 1, '2020-07-11 18:20:33', '2020-07-11 18:20:33', NULL),
(386, 'szmKxaoiQy_produit-Itel-A-56-Pro.jpg', 'szmKxaoiQy_produit-Itel-A-56-Pro.jpg', 'ICo0dE6zK7_image-produit', NULL, 'szmkxaoiqy-produit-itel-a-56-projpg', 1, 1, '2020-07-11 18:20:33', '2020-07-11 18:20:33', NULL),
(387, 'GR0StowILH_produit-Itel-A-56-Pro3.jpg', 'GR0StowILH_produit-Itel-A-56-Pro3.jpg', 'nRevqomaMs_image-produit', NULL, 'gr0stowilh-produit-itel-a-56-pro3jpg', 1, 1, '2020-07-11 18:20:33', '2020-07-11 18:20:33', NULL),
(401, 'FDUj6VI0P0_produit-1-Spark-5-Air.jpg', 'FDUj6VI0P0_produit-1-Spark-5-Air.jpg', 'glyWyB7iNA_image-produit', NULL, 'fduj6vi0p0-produit-1-spark-5-airjpg', 1, 1, '2020-07-17 19:48:24', '2020-07-17 19:48:24', NULL),
(403, 'a7poUYZKPA_produit-2-Spark-5-Air.jpg', 'a7poUYZKPA_produit-2-Spark-5-Air.jpg', 'cMLyo1NnxM_image-produit', NULL, 'a7pouyzkpa-produit-2-spark-5-airjpg', 1, 1, '2020-07-18 04:43:51', '2020-07-18 04:43:51', NULL),
(405, 'fqTm2rfEN7_produit-Spark-5-Air.jpg', 'fqTm2rfEN7_produit-Spark-5-Air.jpg', '7gKcymcLNv_image-produit', NULL, 'fqtm2rfen7-produit-spark-5-airjpg', 1, 1, '2020-07-18 04:54:05', '2020-07-18 04:54:05', NULL),
(407, 'ZuhCjORZyr_produit-produit-Samsung-Galaxy-A11-1.jpg', 'ZuhCjORZyr_produit-produit-Samsung-Galaxy-A11-1.jpg', 'xNIm5kba1o_image-produit', NULL, 'zuhcjorzyr-produit-produit-samsung-galaxy-a11-1jpg', 1, 1, '2020-07-18 05:04:05', '2020-07-18 05:04:05', NULL),
(408, 'daDrmhPOuj_produit-produit-Samsung-Galaxy-11-2.jpg', 'daDrmhPOuj_produit-produit-Samsung-Galaxy-11-2.jpg', 'JnFsFA1NQ7_image-produit', NULL, 'dadrmhpouj-produit-produit-samsung-galaxy-11-2jpg', 1, 1, '2020-07-18 05:06:32', '2020-07-18 05:06:32', NULL),
(409, 'nfpMXYXk0y_produit-produit-Samsung-Galaxy-A11-3.jpg', 'nfpMXYXk0y_produit-produit-Samsung-Galaxy-A11-3.jpg', 'PRDqWeuHlC_image-produit', NULL, 'nfpmxyxk0y-produit-produit-samsung-galaxy-a11-3jpg', 1, 1, '2020-07-18 05:07:49', '2020-07-18 05:07:49', NULL),
(410, 'qB0LPBJiur_produit-produit-Samsung-Galaxy-11-2.jpg', 'qB0LPBJiur_produit-produit-Samsung-Galaxy-11-2.jpg', 'EESHMXfQ2W_image-produit', NULL, 'qb0lpbjiur-produit-produit-samsung-galaxy-11-2jpg', 1, 1, '2020-07-18 05:08:38', '2020-07-18 05:08:38', NULL),
(417, '7tY1LHsoXn_produit-spark-4.jpg', '7tY1LHsoXn_produit-spark-4.jpg', 'NGmlfVglB1_image-produit', NULL, '7ty1lhsoxn-produit-spark-4jpg', 1, 1, '2020-07-20 13:08:16', '2020-07-20 13:08:16', NULL),
(419, 'cemy1BhMOA_produit-Samsung-Galaxie-A-30.jpg', 'cemy1BhMOA_produit-Samsung-Galaxie-A-30.jpg', 'wztCa1crOR_image-produit', NULL, 'cemy1bhmoa-produit-samsung-galaxie-a-30jpg', 1, 1, '2020-07-20 14:11:12', '2020-07-20 14:11:12', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_livraisons`
--

CREATE TABLE `kdm_livraisons` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `commande` int(11) NOT NULL,
  `mode_livraison` int(11) NOT NULL,
  `livre_par` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `kdm_marques`
--

CREATE TABLE `kdm_marques` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `displayOnSite` tinyint(4) NOT NULL DEFAULT '0',
  `displayOnMenu` int(11) NOT NULL DEFAULT '1',
  `image` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_marques`
--

INSERT INTO `kdm_marques` (`id`, `title`, `description`, `slug`, `displayOnSite`, `displayOnMenu`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SAMSUNG', NULL, 'SAMSUNG', 1, 1, NULL, NULL, '2019-12-20 21:40:59', NULL),
(2, 'NOKIA', NULL, 'NOKIA', 0, 1, NULL, NULL, NULL, NULL),
(3, 'MOTOROLA', NULL, 'MOTOROLA', 0, 1, NULL, NULL, '2020-01-13 10:27:41', '2020-01-13 10:27:41'),
(4, 'TECNO', NULL, 'TECNO', 1, 1, NULL, NULL, '2019-09-13 03:08:22', NULL),
(5, 'ITEL', NULL, 'ITEL', 1, 1, NULL, NULL, '2019-09-13 03:09:51', NULL),
(6, 'HUAWEI', 'Marque huawei 2', 'HUAWEI', 1, 1, NULL, NULL, '2020-01-08 08:29:08', NULL),
(7, 'LG', NULL, 'LG', 0, 1, NULL, NULL, '2019-09-13 02:29:59', '2019-09-13 02:29:59'),
(8, 'LENOVO', NULL, 'LENOVO', 1, 1, NULL, NULL, '2020-01-12 16:33:39', '2020-01-12 16:33:39'),
(9, 'INFINIX', NULL, 'INFINIX', 1, 1, NULL, NULL, '2019-11-10 11:14:37', NULL),
(10, 'ALCATEL', NULL, 'ALCATEL', 1, 1, NULL, NULL, '2020-01-29 13:01:51', NULL),
(11, 'ORAIMO', NULL, 'ORAIMO', 1, 1, NULL, NULL, '2019-09-30 10:07:54', NULL),
(12, 'TP-LINK', NULL, 'TP-LINK', 1, 1, NULL, NULL, '2020-01-12 16:34:46', '2020-01-12 16:34:46'),
(13, 'HP', NULL, 'HP', 0, 1, NULL, NULL, '2019-09-13 03:11:18', NULL),
(14, 'ASER', NULL, 'ASER', 0, 1, NULL, NULL, '2019-09-13 02:29:48', NULL),
(15, 'iPhone', 'IPhone', 'APPLE', 1, 1, NULL, NULL, '2020-01-13 10:28:38', NULL),
(16, 'SAMSUNG1', 'ewew', '', 0, 1, NULL, '2019-05-29 14:47:22', '2019-05-29 14:47:26', '2019-05-29 14:47:26'),
(17, 'Oraimo2', 'test', '', 0, 0, NULL, '2019-09-13 02:32:30', '2020-01-13 10:27:34', '2020-01-13 10:27:34'),
(18, 'Test', 'sdfg', '', 1, 1, NULL, '2019-09-13 03:10:47', '2019-09-13 03:11:14', '2019-09-13 03:11:14');

-- --------------------------------------------------------

--
-- Structure de la table `kdm_media`
--

CREATE TABLE `kdm_media` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_media`
--

INSERT INTO `kdm_media` (`id`, `nom`, `description`, `alt`, `slug`, `owner`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uploads/images/kadmarket_Ko0n6iohyf', 'uploadsimageskadmarket-ko0n6iohyf', 'uploads/images/kadmarket_Ko0n6iohyf', 'uploadsimageskadmarket-ko0n6iohyf', '0', '2019-05-25 18:41:02', '2019-05-25 18:41:02', NULL),
(2, 'kadmarket-categorie_NknTsqg2OtCapture du 2018-03-09 22-11-57.png', 'kadmarket-categorie-nkntsqg2otcapture-du-2018-03-09-22-11-57png', 'kadmarket-categorie_NknTsqg2OtCapture du 2018-03-09 22-11-57.png', 'image-categorie_hAonmJxNJYcDXrhc7sQe', 'categorie_5rP21gSYEFmc2lLuUfDY', '2019-05-28 01:58:48', '2019-05-28 01:58:48', NULL),
(3, 'kadmarket_BbI2Cc9brFAssurance-électroniquemini.jpg', 'kadmarket-bbi2cc9brfassurance-electroniqueminijpg', 'kadmarket_BbI2Cc9brFAssurance-électroniquemini.jpg', 'image-produit_wHyDB062lo', 'produit-test-ctworozauk', '2019-05-28 09:21:53', '2019-05-28 09:21:53', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_migrations`
--

CREATE TABLE `kdm_migrations` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_migrations`
--

INSERT INTO `kdm_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_21_110847_create_categories_table', 1),
(4, '2019_05_22_023131_create_marques_table', 1),
(5, '2019_05_22_023138_create_caracteriques_table', 1),
(6, '2019_05_22_023153_create_produits_table', 1),
(7, '2019_05_22_023203_create_commandes_table', 1),
(8, '2019_05_22_023211_create_modepaiements_table', 1),
(9, '2019_05_22_023219_create_modelivraisons_table', 1),
(10, '2019_05_22_023228_create_livraisons_table', 1),
(11, '2019_05_22_023235_create_paiements_table', 1),
(12, '2019_05_22_023245_create_ventes_table', 1),
(13, '2019_05_22_023714_create_images_table', 1),
(14, '2019_05_22_023722_create_shops_table', 1),
(15, '2019_05_22_023732_create_venteflashes_table', 1),
(16, '2019_05_22_024239_create_roles_table', 1),
(17, '2019_05_22_030204_create_commande_produits_tables', 1),
(18, '2019_05_22_030240_create_image_produits_tables', 1),
(19, '2019_05_23_185720_create_media_table', 1),
(20, '2019_05_28_023732_create_promotions_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_modelivraisons`
--

CREATE TABLE `kdm_modelivraisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_modelivraisons`
--

INSERT INTO `kdm_modelivraisons` (`id`, `nom`, `description`, `slug`, `statut`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Livraison normale', 'Faites vous livrer normalement. 72h au plus tard', 'livraison-normale', 1, '2020-05-02 22:00:00', NULL, NULL),
(2, 'Livraison express', 'Faites vous livrer dans un délai maximal de 24h', 'livraison-express', 1, NULL, NULL, NULL),
(3, 'Récupération en boutique', '', 'recuperation-en-boutique', 1, '2020-05-02 22:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_modepaiements`
--

CREATE TABLE `kdm_modepaiements` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `icone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_modepaiements`
--

INSERT INTO `kdm_modepaiements` (`id`, `nom`, `description`, `slug`, `statut`, `icone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Airtel Money', 'Payer en ligne via Airtel Money', 'airtel-money', 1, NULL, '2020-05-03 22:00:00', NULL, NULL),
(2, 'Paiement à la livraison', 'Donner l\'argent au livreur', 'paiement-a-la-livraison', 1, NULL, '2020-05-03 22:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_news_subscribers`
--

CREATE TABLE `kdm_news_subscribers` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adressip` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_news_subscribers`
--

INSERT INTO `kdm_news_subscribers` (`id`, `mail`, `adressip`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 't.sadathe@gmail.com', '41.158.96.52', '2019-12-16 12:31:53', NULL, '2019-12-16 12:31:53'),
(2, 'dominiquedamba@outlook.com', '154.0.186.182', '2020-01-02 16:12:35', NULL, '2020-01-02 16:12:35'),
(3, 'cklino@hotmail.fr', '41.158.111.201', '2020-01-03 11:00:38', NULL, '2020-01-03 11:00:38'),
(4, 'jfabriceongo@gmail.com', '154.112.15.89', '2020-01-11 12:24:25', NULL, '2020-01-11 12:24:25'),
(5, 'gillesndong54@gmail.com', '160.119.176.139', '2020-02-04 19:07:38', NULL, '2020-02-04 19:07:38'),
(6, 'juniormboloko2@gmail.com', '154.112.13.18', '2020-02-10 13:00:17', NULL, '2020-02-10 13:00:17'),
(7, 'terachmey68@gmail.com', '154.0.186.192', '2020-02-12 15:04:39', NULL, '2020-02-12 15:04:39'),
(8, 'papisamoufi@gmail.com', '154.112.2.75', '2020-04-10 06:14:55', NULL, '2020-04-10 06:14:55'),
(9, 'pertherth@gmail.com', '102.142.16.174', '2020-04-20 12:16:33', NULL, '2020-04-20 12:16:33'),
(10, 'moumanicraiglouisroy@gmail.com', '154.0.186.195', '2020-04-22 15:12:13', NULL, '2020-04-22 15:12:13'),
(11, 'elouma.gerard.379@gmail.com', '154.112.1.121', '2020-04-23 05:54:06', NULL, '2020-04-23 05:54:06'),
(12, 'geraldboussougou@gmail.com', '154.112.5.153', '2020-04-25 06:11:08', NULL, '2020-04-25 06:11:08'),
(13, 'yannjunioratomombeng@gmail.com', '154.0.180.80', '2020-04-28 00:37:09', NULL, '2020-04-28 00:37:09'),
(14, 'madjitolem@yahoo.fr', '160.119.176.249', '2020-04-30 07:02:31', NULL, '2020-04-30 07:02:31'),
(15, 'jngallletocko@gmail.com', '154.112.9.190', '2020-05-07 15:45:42', NULL, '2020-05-07 15:45:42'),
(16, 'oumarhacki@gmail.com', '154.0.187.8', '2020-05-13 14:15:16', NULL, '2020-05-13 14:15:16'),
(17, 'diop56053@gmail.com', '154.0.186.184', '2020-05-13 20:42:27', NULL, '2020-05-13 20:42:27'),
(18, 'simonedzang31@gmail.com', '154.0.186.196', '2020-05-18 04:39:14', NULL, '2020-05-18 04:39:14'),
(19, 'brayanem14@gmail.com', '154.0.180.87', '2020-05-24 16:16:33', NULL, '2020-05-24 16:16:33'),
(20, 'steine09@yahoo.fr', '102.142.38.209', '2020-06-01 17:47:36', NULL, '2020-06-01 17:47:36'),
(21, 'gennimboungou@gmail.com', '154.0.187.12', '2020-06-02 12:16:10', NULL, '2020-06-02 12:16:10'),
(22, 'mensahharris52@gmail.com', '154.112.14.181', '2020-06-11 16:35:31', NULL, '2020-06-11 16:35:31'),
(23, 'andrerakilo11@gmail.com', '154.112.1.87', '2020-06-12 19:08:08', NULL, '2020-06-12 19:08:08'),
(24, 'mpiliadamoucydkornekk@gmail.com', '154.116.64.212', '2020-06-17 11:22:47', NULL, '2020-06-17 11:22:47'),
(25, 'dimitribiyogo@gmail.com', '154.112.7.233', '2020-06-29 16:40:59', NULL, '2020-06-29 16:40:59'),
(26, 'foded839@gmail.com', '154.112.1.41', '2020-07-03 18:54:52', NULL, '2020-07-03 18:54:52'),
(27, 'biologistemabika@gmail.com', '154.0.186.190', '2020-07-09 16:24:12', NULL, '2020-07-09 16:24:12'),
(28, 'benismail@gmail.com', '154.0.184.71', '2020-07-09 20:50:55', NULL, '2020-07-09 20:50:55'),
(29, 'foudoumoukolokodan@gmail.com', '154.112.1.141', '2020-07-14 21:44:19', NULL, '2020-07-14 21:44:19');

-- --------------------------------------------------------

--
-- Structure de la table `kdm_paiements`
--

CREATE TABLE `kdm_paiements` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mode_paiement` int(11) NOT NULL,
  `user` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_commande` int(11) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `type_paiement` varchar(20) NOT NULL DEFAULT 'PANIER',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_paiements`
--

INSERT INTO `kdm_paiements` (`id`, `date`, `mode_paiement`, `user`, `id_commande`, `description`, `reference`, `statut`, `type_paiement`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2020-05-04 20:43:00', 1, '44', 1, NULL, '5eb07e54d409e', 1, 'PANIER', '2020-05-04 18:43:00', '2020-05-04 18:43:00', NULL),
(2, '2020-05-04 20:47:10', 1, '44', 2, NULL, '5eb07f4e59225', 0, 'PANIER', '2020-05-04 18:47:10', '2020-05-05 19:14:26', NULL),
(3, '2020-05-05 00:12:28', 10, 'GUEST', 1, NULL, '5eb0af6c0770d', 1, 'CODE', '2020-05-04 22:12:28', '2020-05-04 22:12:28', NULL),
(4, '2020-05-05 00:16:30', 10, 'GUEST', 2, NULL, '5eb0b05e26b70', 1, 'CODE', '2020-05-04 22:16:30', '2020-05-04 22:16:30', NULL),
(5, '2020-05-05 00:17:42', 10, 'GUEST', 3, NULL, '5eb0b0a62bf90', 1, 'CODE', '2020-05-04 22:17:42', '2020-05-04 22:17:42', NULL),
(6, '2020-05-05 00:27:21', 10, 'GUEST', 4, NULL, '5eb0b2e90ec0ea', 0, 'CODE', '2020-05-04 22:27:21', '2020-05-05 19:13:09', NULL),
(7, '2020-05-05 00:34:28', 10, 'GUEST', 5, NULL, '5eb0b49417a7b', 1, 'CODE', '2020-05-04 22:34:28', '2020-05-04 22:34:28', NULL),
(8, '2020-05-05 08:42:30', 10, 'GUEST', 6, NULL, '5eb126f6478c1', 1, 'CODE', '2020-05-05 06:42:30', '2020-05-05 06:42:30', NULL),
(9, '2020-05-05 12:50:38', 1, 'GUEST', 7, NULL, '5eb1611eb2fc6', 1, 'CODE', '2020-05-05 10:50:38', '2020-05-05 10:50:38', NULL),
(10, '2020-05-05 13:51:25', 1, 'GUEST', 7, NULL, '5eb16f5dbcc17', 1, 'CODE', '2020-05-05 11:51:25', '2020-05-05 11:51:25', NULL),
(11, '2020-05-05 14:05:48', 1, '46', 4, NULL, '5eb172bc5d7ef', 1, 'PANIER', '2020-05-05 12:05:48', '2020-05-05 12:05:48', NULL),
(12, '2020-05-05 18:44:03', 1, 'GUEST', 9, NULL, '5eb1b3f32ae5c', 2, 'CODE', '2020-05-05 16:44:03', '2020-05-05 18:50:08', NULL),
(13, '2020-05-05 20:07:18', 1, 'GUEST', 10, NULL, '5eb1c7768cd42', 1, 'CODE', '2020-05-05 18:07:18', '2020-05-05 18:07:18', NULL),
(14, '2020-05-05 21:16:32', 1, 'GUEST', 11, NULL, '5eb1d7b06f3ef', 2, 'CODE', '2020-05-05 19:16:32', '2020-05-05 19:17:05', NULL),
(15, '2020-05-06 01:06:15', 1, 'XsqIht7Vl1eru9krTqA2lvGZQRc6YPavQPNK7q39', 5, NULL, '5eb20d87b6432', 0, 'PANIER', '2020-05-05 23:06:15', '2020-05-05 23:08:48', NULL),
(16, '2020-05-06 01:08:34', 1, 'GUEST', 12, NULL, '5eb20e1253ee5', 0, 'CODE', '2020-05-05 23:08:34', '2020-05-05 23:10:47', NULL),
(17, '2020-05-06 08:07:04', 1, 'cEG5fMG4pLddUZ3mszViar3x4l6h8uAJGfAbWNxR', 6, NULL, '5eb27028c7ff8', 1, 'PANIER', '2020-05-06 06:07:04', '2020-05-06 06:07:04', NULL),
(18, '2020-05-06 10:39:35', 1, 'GUEST', 14, NULL, '5eb293e724f9e', 1, 'CODE', '2020-05-06 08:39:35', '2020-05-06 08:39:35', NULL),
(19, '2020-05-06 10:42:36', 1, 'GUEST', 15, NULL, '5eb2949ce1e1c', 1, 'CODE', '2020-05-06 08:42:36', '2020-05-06 08:42:36', NULL),
(20, '2020-05-06 10:49:44', 1, 'GUEST', 16, NULL, '5eb296480c3bf', 0, 'CODE', '2020-05-06 08:49:44', '2020-05-06 08:53:03', NULL),
(21, '2020-05-06 10:54:09', 1, 'GUEST', 17, NULL, '5eb29751a99e5', 0, 'CODE', '2020-05-06 08:54:09', '2020-05-06 08:56:32', NULL),
(22, '2020-05-06 11:08:08', 1, 'GUEST', 18, NULL, '5eb29a98d5892', 2, 'CODE', '2020-05-06 09:08:08', '2020-05-06 09:09:03', NULL),
(23, '2020-05-06 11:11:05', 1, 'GUEST', 19, NULL, '5eb29b49749d1', 2, 'CODE', '2020-05-06 09:11:05', '2020-05-06 09:11:47', NULL),
(24, '2020-05-06 11:15:53', 1, 'GUEST', 20, NULL, '5eb29c699548b', 2, 'CODE', '2020-05-06 09:15:53', '2020-05-06 09:16:49', NULL),
(25, '2020-05-06 11:29:44', 1, 'GUEST', 21, NULL, '5eb29fa8717d4', 2, 'CODE', '2020-05-06 09:29:44', '2020-05-06 09:30:18', NULL),
(26, '2020-05-08 21:32:42', 2, 's253Eh2e5caRXxE5EI98gx5TIWSZoy7T8qmHkDQt', 7, NULL, '5eb5cffa457b3', 1, 'PANIER', '2020-05-08 19:32:42', '2020-05-08 19:32:42', NULL),
(27, '2020-05-08 22:56:44', 1, 'v94umOjxdkD3vgFYKxtFyJ7vREFGFf2Go2SlHNbi', 23, NULL, '5eb5e3acbfbf7', 2, 'CODE', '2020-05-08 20:56:44', '2020-05-08 20:57:37', NULL),
(28, '2020-05-08 23:20:31', 1, 'v94umOjxdkD3vgFYKxtFyJ7vREFGFf2Go2SlHNbi', 24, NULL, '5eb5e93f8049e', 2, 'CODE', '2020-05-08 21:20:31', '2020-05-08 21:21:04', NULL),
(29, '2020-05-09 08:33:21', 1, 'xFnyA4jZJZEvOWCteMI17m4nDjq1mTBOKORmOJHP', 8, NULL, '5eb66ad1cada6', 1, 'PANIER', '2020-05-09 06:33:21', '2020-05-09 06:33:21', NULL),
(30, '2020-05-09 09:41:28', 1, 'LRruazDF6Dw9S7879sIShmEVmlISQXsNGJ3BCsY8', 26, NULL, '5eb67ac85e30d', 2, 'CODE', '2020-05-09 07:41:28', '2020-05-09 07:42:03', NULL),
(31, '2020-05-10 11:28:10', 1, '6E3CGsUtf3n4QVum9Ydrktxu1UcNZZG48V9r2fi6', 9, NULL, '5eb7e54ad493f', 1, 'PANIER', '2020-05-10 09:28:10', '2020-05-10 09:28:10', NULL),
(32, '2020-05-11 21:01:27', 2, 'hQamHLu0BqHKTIjSptDyDEFHI3dVEBAi7WN3TzQu', 10, NULL, '5eb9bd271aa65', 1, 'PANIER', '2020-05-11 19:01:27', '2020-05-11 19:01:27', NULL),
(33, '2020-05-14 13:53:09', 1, 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 11, NULL, '5ebd4d4576b77', 1, 'PANIER', '2020-05-14 11:53:09', '2020-05-14 11:53:09', NULL),
(34, '2020-05-14 13:55:42', 1, 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 12, NULL, '5ebd4dde1d793', 1, 'PANIER', '2020-05-14 11:55:42', '2020-05-14 11:55:42', NULL),
(35, '2020-05-14 14:34:16', 1, 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 13, NULL, '5ebd56e8a5f4a', 1, 'PANIER', '2020-05-14 12:34:16', '2020-05-14 12:34:16', NULL),
(36, '2020-05-14 14:37:19', 2, 'TpzIACiJEiw5c3Ul8lo0mst3ijvdO2FH1UtIkZSb', 14, NULL, '5ebd579fa04f9', 1, 'PANIER', '2020-05-14 12:37:19', '2020-05-14 12:37:19', NULL),
(37, '2020-05-17 15:00:56', 1, '8nYh03TNWxccr7MOYXHyhjyX8SmYh57vmn28QBxi', 15, NULL, '5ec151a8b4dd5', 1, 'PANIER', '2020-05-17 13:00:56', '2020-05-17 13:00:56', NULL),
(38, '2020-05-17 15:01:53', 2, '8nYh03TNWxccr7MOYXHyhjyX8SmYh57vmn28QBxi', 16, NULL, '5ec151e160160', 1, 'PANIER', '2020-05-17 13:01:53', '2020-05-17 13:01:53', NULL),
(39, '2020-05-17 15:02:21', 1, '8nYh03TNWxccr7MOYXHyhjyX8SmYh57vmn28QBxi', 17, NULL, '5ec151fdb34f4', 1, 'PANIER', '2020-05-17 13:02:21', '2020-05-17 13:02:21', NULL),
(40, '2020-05-17 16:00:27', 1, 'isAk0rZlX6uY11kfLLSpKZKURMkhYd9qR8z9OwnU', 18, NULL, '5ec15f9b8fbe6', 0, 'PANIER', '2020-05-17 14:00:27', '2020-05-17 14:01:20', NULL),
(41, '2020-05-17 19:57:53', 1, 'bNYJXUe6cDTmL3pAMVIfhU6oZxDHXGuvda303ezt', 19, NULL, '5ec197414480c', 1, 'PANIER', '2020-05-17 17:57:53', '2020-05-17 17:57:53', NULL),
(42, '2020-05-21 14:15:02', 2, 'dPwjwGw2yTJOAFmMZIozXhN9ODTCUC8skfqPZ6FS', 20, NULL, '5ec68ce659b19', 1, 'PANIER', '2020-05-21 12:15:02', '2020-05-21 12:15:02', NULL),
(43, '2020-05-23 09:53:39', 1, '8EycC6edKPYJLOvg9sgXFCcc2B29BekdtkndxZa6', 21, NULL, '5ec8f2a3d2af0', 0, 'PANIER', '2020-05-23 07:53:39', '2020-05-23 07:56:44', NULL),
(44, '2020-05-23 17:18:30', 1, 'slQR80P95QDz9ir83Wm8pGTGczllda5dGZ66S0Eq', 22, NULL, '5ec95ae6f3da8', 1, 'PANIER', '2020-05-23 15:18:30', '2020-05-23 15:18:30', NULL),
(45, '2020-05-27 08:22:39', 1, 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 23, NULL, '5ece234fbcd64', 0, 'PANIER', '2020-05-27 06:22:39', '2020-05-27 06:25:04', NULL),
(46, '2020-05-27 08:23:49', 1, 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 24, NULL, '5ece2395afdbd', 0, 'PANIER', '2020-05-27 06:23:49', '2020-05-27 06:26:18', NULL),
(47, '2020-05-27 09:31:57', 1, 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 25, NULL, '5ece338d2df50', 0, 'PANIER', '2020-05-27 07:31:57', '2020-05-27 07:35:03', NULL),
(48, '2020-05-27 09:33:47', 1, 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 26, NULL, '5ece33fb69653', 0, 'PANIER', '2020-05-27 07:33:47', '2020-05-27 07:36:03', NULL),
(49, '2020-05-29 13:36:02', 1, '92X1gcEpGO69TkMmAXpZzEbQnswDofSljjgIFAaI', 27, NULL, '5ed10fc2cf22b', 0, 'PANIER', '2020-05-29 11:36:02', '2020-05-29 11:38:37', NULL),
(50, '2020-06-01 00:02:49', 1, '6hMBzPG6QQpBqpNQ9Z2XDN96KMdHUpwSMB7LFmAE', 28, NULL, '5ed445a99bb82', 1, 'PANIER', '2020-05-31 22:02:49', '2020-05-31 22:02:49', NULL),
(51, '2020-06-03 06:18:00', 1, 'BeN856OzOTNqdvWAvDlmoGYLH80whWXdGL12EaHv', 29, NULL, '5ed74098e40c4', 2, 'PANIER', '2020-06-03 04:18:00', '2020-06-03 04:18:51', NULL),
(52, '2020-06-11 18:52:16', 1, 'Fu9ijXC5xobxmltsUxvGpAUpE3r1bh51k8EFeFGa', 30, NULL, '5ee27d60db531', 1, 'PANIER', '2020-06-11 16:52:16', '2020-06-11 16:52:16', NULL),
(53, '2020-06-12 11:43:16', 1, 'celLEnHOw7eEhd1b1zX0bscWxnbTAPyIX1sxd068', 31, NULL, '5ee36a54e6d16', 0, 'PANIER', '2020-06-12 09:43:16', '2020-06-12 09:44:12', NULL),
(54, '2020-06-12 11:51:13', 1, 'celLEnHOw7eEhd1b1zX0bscWxnbTAPyIX1sxd068', 31, NULL, '5ee36c319198d', 0, 'CODE', '2020-06-12 09:51:13', '2020-06-12 09:54:15', NULL),
(55, '2020-06-12 12:07:01', 1, 'E7BaTI1ngBtf9qqdmKHI6NXQzVLxtTAetFNxzBMZ', 32, NULL, '5ee36fe5df770', 0, 'PANIER', '2020-06-12 10:07:01', '2020-06-12 10:09:28', NULL),
(56, '2020-06-13 20:49:57', 1, 'BTfAZHUQ7DEZgqxkZF5ypUYzDRuWNn9DCoamKTjl', 33, NULL, '5ee53bf5eda8e', 2, 'PANIER', '2020-06-13 18:49:57', '2020-06-13 18:50:56', NULL),
(57, '2020-06-15 11:18:04', 2, 'vG9W2SdclBZJh7p6o3aqSbAzTDfuSjb0vvB0SUQE', 34, NULL, '5ee758ec9e6a2', 1, 'PANIER', '2020-06-15 09:18:04', '2020-06-15 09:18:04', NULL),
(58, '2020-06-15 11:24:31', 2, 'vG9W2SdclBZJh7p6o3aqSbAzTDfuSjb0vvB0SUQE', 35, NULL, '5ee75a6fc2377', 1, 'PANIER', '2020-06-15 09:24:31', '2020-06-15 09:24:31', NULL),
(59, '2020-06-15 22:06:20', 1, 'E1mzKhZ6Wpt6Mr6RaquMAZPobEj4ksSA6WPRn7aO', 32, NULL, '5ee7f0dc6d325', 0, 'CODE', '2020-06-15 20:06:20', '2020-06-15 20:09:05', NULL),
(60, '2020-06-15 22:08:21', 1, 'E1mzKhZ6Wpt6Mr6RaquMAZPobEj4ksSA6WPRn7aO', 33, NULL, '5ee7f155e1fa6', 2, 'CODE', '2020-06-15 20:08:21', '2020-06-15 20:08:57', NULL),
(61, '2020-06-15 22:13:18', 1, 'E1mzKhZ6Wpt6Mr6RaquMAZPobEj4ksSA6WPRn7aO', 36, NULL, '5ee7f27eb05d0', 1, 'PANIER', '2020-06-15 20:13:18', '2020-06-15 20:13:18', NULL),
(62, '2020-06-15 22:17:54', 1, 'E1mzKhZ6Wpt6Mr6RaquMAZPobEj4ksSA6WPRn7aO', 37, NULL, '5ee7f392ef9d1', 1, 'PANIER', '2020-06-15 20:17:54', '2020-06-15 20:17:54', NULL),
(63, '2020-06-16 17:38:38', 1, 'YNMNJx62AVKOa9UFrBC0qYTReQfTk1NSXonu9ITj', 38, NULL, '5ee9039ec403f', 1, 'PANIER', '2020-06-16 15:38:38', '2020-06-16 15:38:38', NULL),
(64, '2020-06-17 19:19:38', 1, 'X50qrf0Cox57dDG4xZAb996HSAIOTnSx7FuHeINs', 34, NULL, '5eea6cca40e7a', 0, 'CODE', '2020-06-17 17:19:38', '2020-06-17 17:21:50', NULL),
(65, '2020-06-18 10:32:37', 1, 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 39, NULL, '5eeb42c5c5242', 0, 'PANIER', '2020-06-18 08:32:37', '2020-06-18 08:35:48', NULL),
(66, '2020-06-18 11:43:30', 1, 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 40, NULL, '5eeb53627f42b', 0, 'PANIER', '2020-06-18 09:43:30', '2020-06-18 09:46:23', NULL),
(67, '2020-06-18 11:48:05', 1, 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 41, NULL, '5eeb54755c874', 0, 'PANIER', '2020-06-18 09:48:05', '2020-06-18 09:50:33', NULL),
(68, '2020-06-28 13:40:53', 1, 'IGHkRGbBEYvb7Avlcua3NNhbHNtQaebCWRu17AAz', 35, NULL, '5ef89de500b43', 0, 'CODE', '2020-06-28 11:40:53', '2020-06-28 11:43:20', NULL),
(69, '2020-06-28 13:55:32', 1, 'd9MR0XZeUuRpXW0DulSG7nX9j7QAFzF0h8EVrrve', 36, NULL, '5ef8a154aec98', 0, 'CODE', '2020-06-28 11:55:32', '2020-06-28 11:58:16', NULL),
(70, '2020-06-28 14:16:53', 1, 'sw2jd24m69qQh8IZXCQhbpt1t6sLwsxd0Da2r6CU', 37, NULL, '5ef8a65532871', 0, 'CODE', '2020-06-28 12:16:53', '2020-06-28 12:19:22', NULL),
(71, '2020-06-28 14:28:23', 1, 'sw2jd24m69qQh8IZXCQhbpt1t6sLwsxd0Da2r6CU', 38, NULL, '5ef8a907be751', 1, 'CODE', '2020-06-28 12:28:23', '2020-06-28 12:28:23', NULL),
(72, '2020-06-28 14:56:54', 1, 'wDF7lAIZWcX32zyO8VXMEN6yuvr0CSL1lbLH3cUY', 39, NULL, '5ef8afb63d3fb', 2, 'CODE', '2020-06-28 12:56:54', '2020-06-28 12:57:26', NULL),
(73, '2020-06-28 15:00:19', 1, 'wDF7lAIZWcX32zyO8VXMEN6yuvr0CSL1lbLH3cUY', 42, NULL, '5ef8b0838f79e', 2, 'PANIER', '2020-06-28 13:00:19', '2020-06-28 13:01:05', NULL),
(74, '2020-06-29 15:58:05', 1, '3rEPSbunHvNXx42J344OPNyL1OZFCubNgNukaaoc', 40, NULL, '5efa0f8dc34a2', 1, 'CODE', '2020-06-29 13:58:05', '2020-06-29 13:58:05', NULL),
(75, '2020-06-29 16:00:29', 1, '3rEPSbunHvNXx42J344OPNyL1OZFCubNgNukaaoc', 43, NULL, '5efa101debdd2', 1, 'PANIER', '2020-06-29 14:00:29', '2020-06-29 14:00:29', NULL),
(76, '2020-06-29 16:00:40', 1, '3rEPSbunHvNXx42J344OPNyL1OZFCubNgNukaaoc', 44, NULL, '5efa102853ca7', 1, 'PANIER', '2020-06-29 14:00:40', '2020-06-29 14:00:40', NULL),
(77, '2020-06-29 17:23:29', 1, '9P2DUJIkVG8FfTdlgvcVumEoFX4KJ1o5BSZnqYt9', 45, NULL, '5efa2391a16cf', 1, 'PANIER', '2020-06-29 15:23:29', '2020-06-29 15:23:29', NULL),
(78, '2020-06-30 09:48:21', 1, '2DOyQvrnk2uhq0TsjvAg7TGAvtKyAPDMCZ5VodIl', 46, NULL, '5efb0a6591033', 1, 'PANIER', '2020-06-30 07:48:21', '2020-06-30 07:48:21', NULL),
(79, '2020-06-30 09:56:40', 1, '2DOyQvrnk2uhq0TsjvAg7TGAvtKyAPDMCZ5VodIl', 47, NULL, '5efb0c58be0e6', 1, 'PANIER', '2020-06-30 07:56:40', '2020-06-30 07:56:40', NULL),
(80, '2020-06-30 09:57:19', 1, '2DOyQvrnk2uhq0TsjvAg7TGAvtKyAPDMCZ5VodIl', 48, NULL, '5efb0c7fc3692', 1, 'PANIER', '2020-06-30 07:57:19', '2020-06-30 07:57:19', NULL),
(81, '2020-07-01 00:09:57', 1, 'w6xf6ygu6mgTiywsJemFz8haZVokRB8swjmrtGHt', 41, NULL, '5efbd4551a5cc', 2, 'CODE', '2020-06-30 22:09:57', '2020-06-30 22:10:31', NULL),
(82, '2020-07-01 00:12:05', 1, 'w6xf6ygu6mgTiywsJemFz8haZVokRB8swjmrtGHt', 49, NULL, '5efbd4d510bdf', 2, 'PANIER', '2020-06-30 22:12:05', '2020-06-30 22:12:33', NULL),
(83, '2020-07-02 10:29:40', 1, 'TiWyeVuDkPGjEtp4PUOIFiDbWWiEDSeFUEv4m3cj', 50, NULL, '5efdb714d0ebc', 0, 'PANIER', '2020-07-02 08:29:40', '2020-07-02 11:12:57', NULL),
(84, '2020-07-02 10:31:09', 1, 'TiWyeVuDkPGjEtp4PUOIFiDbWWiEDSeFUEv4m3cj', 51, NULL, '5efdb76d40bac', 0, 'PANIER', '2020-07-02 08:31:09', '2020-07-02 11:12:36', NULL),
(85, '2020-07-05 21:12:21', 1, 'ADv3qG7ssNG9pfZ7PCKgWPIV2jJ8DUruTxJMHuXY', 42, NULL, '5f0242350af9e', 2, 'CODE', '2020-07-05 19:12:21', '2020-07-05 19:14:22', NULL),
(86, '2020-07-08 18:23:16', 2, 'rnA0Quu2DaJIPqH61Z3ehLOUs4QnqcvrtRcKfQZz', 52, NULL, '5f060f14f27b8', 1, 'PANIER', '2020-07-08 16:23:16', '2020-07-08 16:23:16', NULL),
(87, '2020-07-09 21:33:03', 1, '4L6UEEc5g7UbEHm48WBI40ExbIerCPJCVwPd7H9W', 53, NULL, '5f078d0f0b61b', 1, 'PANIER', '2020-07-09 19:33:03', '2020-07-09 19:33:03', NULL),
(88, '2020-07-09 21:51:24', 1, '4L6UEEc5g7UbEHm48WBI40ExbIerCPJCVwPd7H9W', 54, NULL, '5f07915c51cbe', 1, 'PANIER', '2020-07-09 19:51:24', '2020-07-09 19:51:24', NULL),
(89, '2020-07-09 21:54:47', 1, '4L6UEEc5g7UbEHm48WBI40ExbIerCPJCVwPd7H9W', 55, NULL, '5f079227126b2', 0, 'PANIER', '2020-07-09 19:54:47', '2020-07-09 19:57:06', NULL),
(90, '2020-07-14 19:09:12', 1, 'f9NZT3clUWTrWlRzdTGhWVhBDSuK15ivzU9ysXJ5', 43, NULL, '5f0e02d846600', 2, 'CODE', '2020-07-14 17:09:12', '2020-07-14 17:11:03', NULL),
(91, '2020-07-18 03:36:01', 1, '1FDYqPy8Cr1zaAhrpQ0YccUt3kaBzVWAmhs26A9Y', 44, NULL, '5f126e21cce18', 0, 'CODE', '2020-07-18 01:36:01', '2020-07-18 01:40:03', NULL),
(92, '2020-07-18 03:39:50', 1, '1FDYqPy8Cr1zaAhrpQ0YccUt3kaBzVWAmhs26A9Y', 45, NULL, '5f126f061a28e', 0, 'CODE', '2020-07-18 01:39:50', '2020-07-18 01:43:03', NULL),
(93, '2020-07-18 03:43:32', 1, '1FDYqPy8Cr1zaAhrpQ0YccUt3kaBzVWAmhs26A9Y', 46, NULL, '5f126fe4c494c', 2, 'CODE', '2020-07-18 01:43:32', '2020-07-18 01:44:18', NULL),
(94, '2020-07-19 17:45:12', 1, 'feg51Qd5i3ETkLb8TNuueoRdthg1rgucHnag51Fa', 47, NULL, '5f1486a8d925e', 1, 'CODE', '2020-07-19 15:45:12', '2020-07-19 15:45:12', NULL),
(95, '2020-07-22 14:32:05', 1, 'lQHlzmWCvld6zLjVAHLrUjuDUVOpbqDsI8bWXlfu', 48, NULL, '5f184de578c56', 1, 'CODE', '2020-07-22 12:32:05', '2020-07-22 12:32:05', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_panier`
--

CREATE TABLE `kdm_panier` (
  `id` bigint(20) NOT NULL,
  `session_id` text,
  `user_id` varchar(255) DEFAULT NULL,
  `produit_id` int(11) NOT NULL,
  `quantite_produit` int(11) NOT NULL DEFAULT '1',
  `statut` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_panier`
--

INSERT INTO `kdm_panier` (`id`, `session_id`, `user_id`, `produit_id`, `quantite_produit`, `statut`, `created_at`, `updated_at`, `deleted_at`) VALUES
(31, NULL, 'lKmDAREbK2VgfnsgZZQMVbBlke6wCEwKSa3z3Ec1', 145, 31, 1, '2020-05-06 10:57:38', '2020-05-06 11:00:01', NULL),
(32, NULL, 'lKmDAREbK2VgfnsgZZQMVbBlke6wCEwKSa3z3Ec1', 135, 1, 1, '2020-05-06 10:57:53', '2020-05-06 10:57:53', NULL),
(34, NULL, 'Lo6Jvq8nGjjm0y7e0Iiy4N2c1srDtqpQaUpJDmdu', 204, 21, 1, '2020-05-06 11:06:00', '2020-05-06 11:06:28', NULL),
(35, NULL, 'tQZw72Kc4LimrE9pXWY4BaEBalsuzXd5VVEJaxdY', 102, 3, 1, '2020-05-06 11:06:43', '2020-05-06 11:06:46', NULL),
(40, NULL, 'cEG5fMG4pLddUZ3mszViar3x4l6h8uAJGfAbWNxR', 204, 4, 1, '2020-05-06 11:33:35', '2020-05-06 12:29:42', NULL),
(48, NULL, 'cEG5fMG4pLddUZ3mszViar3x4l6h8uAJGfAbWNxR', 205, 3, 1, '2020-05-06 12:27:13', '2020-05-06 15:20:04', NULL),
(50, NULL, 'HUFnnEacyRTqx5jwOLvZDrI2b8PFovFKEbRoeVQy', 135, 1, 1, '2020-05-06 16:59:11', '2020-05-06 16:59:11', NULL),
(54, NULL, 'o2C7mOzmY3YBk77eroBDiH3lOrkZp61CeYg7c8WE', 114, 1, 1, '2020-05-06 21:27:35', '2020-05-06 21:27:35', NULL),
(55, NULL, 'o2C7mOzmY3YBk77eroBDiH3lOrkZp61CeYg7c8WE', 107, 1, 1, '2020-05-06 21:31:21', '2020-05-06 21:31:21', NULL),
(56, NULL, 'o2C7mOzmY3YBk77eroBDiH3lOrkZp61CeYg7c8WE', 113, 1, 1, '2020-05-06 21:32:01', '2020-05-06 21:32:01', NULL),
(57, NULL, 'o2C7mOzmY3YBk77eroBDiH3lOrkZp61CeYg7c8WE', 181, 1, 1, '2020-05-06 21:36:25', '2020-05-06 21:36:25', NULL),
(58, NULL, 'o2C7mOzmY3YBk77eroBDiH3lOrkZp61CeYg7c8WE', 103, 1, 1, '2020-05-06 21:36:46', '2020-05-06 21:36:46', NULL),
(59, NULL, 'dW3o0WukEAkbnrhHMcKkVu0QSM3wPXyGQVBvywqQ', 103, 1, 1, '2020-05-07 01:34:00', '2020-05-07 01:34:00', NULL),
(60, NULL, 'dW3o0WukEAkbnrhHMcKkVu0QSM3wPXyGQVBvywqQ', 125, 1, 1, '2020-05-07 01:35:21', '2020-05-07 01:35:21', NULL),
(61, NULL, 'dW3o0WukEAkbnrhHMcKkVu0QSM3wPXyGQVBvywqQ', 193, 1, 1, '2020-05-07 01:37:10', '2020-05-07 01:37:10', NULL),
(62, NULL, 'dW3o0WukEAkbnrhHMcKkVu0QSM3wPXyGQVBvywqQ', 198, 1, 1, '2020-05-07 01:53:28', '2020-05-07 01:53:28', NULL),
(63, NULL, 'dW3o0WukEAkbnrhHMcKkVu0QSM3wPXyGQVBvywqQ', 109, 1, 1, '2020-05-07 01:58:08', '2020-05-07 01:58:08', NULL),
(64, NULL, 'neQoF3zkNbiJDKq2R9FwxP4CKsfBXtsJ4fYWUjJY', 206, 1, 1, '2020-05-07 09:57:33', '2020-05-07 09:57:33', NULL),
(65, NULL, 'jzwM5RTa8EShAX1qLmTOMBDC3JGsCxzG21pe4xC7', 206, 1, 1, '2020-05-07 09:57:33', '2020-05-07 09:57:33', NULL),
(66, NULL, 'hV191LTdMrLGwHMZrrAUzK9ETxGWNSvWx8Npvc8A', 206, 1, 1, '2020-05-07 09:57:34', '2020-05-07 09:57:34', NULL),
(67, NULL, 'hV191LTdMrLGwHMZrrAUzK9ETxGWNSvWx8Npvc8A', 198, 1, 1, '2020-05-07 10:01:18', '2020-05-07 10:01:18', NULL),
(68, NULL, 'hV191LTdMrLGwHMZrrAUzK9ETxGWNSvWx8Npvc8A', 165, 1, 1, '2020-05-07 10:01:19', '2020-05-07 10:01:19', NULL),
(69, NULL, 'LiYBkvzwJTH1bBlxtYQ1sYa7MZUIdypY3xzgdDdB', 205, 1, 1, '2020-05-07 11:20:18', '2020-05-07 11:20:18', NULL),
(70, NULL, 'LiYBkvzwJTH1bBlxtYQ1sYa7MZUIdypY3xzgdDdB', 203, 1, 1, '2020-05-07 11:20:29', '2020-05-07 11:20:29', NULL),
(71, NULL, 'LiYBkvzwJTH1bBlxtYQ1sYa7MZUIdypY3xzgdDdB', 200, 1, 1, '2020-05-07 11:20:47', '2020-05-07 11:20:47', NULL),
(72, NULL, 'LiYBkvzwJTH1bBlxtYQ1sYa7MZUIdypY3xzgdDdB', 195, 3, 1, '2020-05-07 11:21:14', '2020-05-07 11:29:22', NULL),
(73, NULL, 'LiYBkvzwJTH1bBlxtYQ1sYa7MZUIdypY3xzgdDdB', 201, 2, 1, '2020-05-07 11:34:46', '2020-05-07 11:35:04', NULL),
(75, NULL, 'td6PO7SfyihdGCplTVKoJiCMgKe2xfSkFiMtrXFU', 190, 2, 1, '2020-05-07 11:37:35', '2020-05-07 11:37:50', NULL),
(76, NULL, 'td6PO7SfyihdGCplTVKoJiCMgKe2xfSkFiMtrXFU', 152, 1, 1, '2020-05-07 11:54:52', '2020-05-07 11:54:52', NULL),
(77, NULL, 'wY6pxU0yPFWiIUzbSUysqgBeYpTkglISGFsS7yE4', 204, 2, 1, '2020-05-07 14:28:27', '2020-05-07 14:29:53', NULL),
(78, NULL, 'wY6pxU0yPFWiIUzbSUysqgBeYpTkglISGFsS7yE4', 202, 2, 1, '2020-05-07 14:28:34', '2020-05-07 14:28:41', NULL),
(79, NULL, 'wY6pxU0yPFWiIUzbSUysqgBeYpTkglISGFsS7yE4', 203, 1, 1, '2020-05-07 14:30:04', '2020-05-07 14:30:04', NULL),
(80, NULL, '6uZJZIpLFo1o5RHN0prPX3TPKVxnc3XvyVmNBCyr', 102, 2, 1, '2020-05-07 15:11:54', '2020-05-07 15:12:31', NULL),
(81, NULL, '74TfmjYqbvZ98s7ehMihQ0Z7GzCO96UxPF36mOfb', 206, 1, 1, '2020-05-08 13:29:32', '2020-05-08 13:29:32', NULL),
(88, NULL, '5SCOs55mHgjcKItnt32AvfkFprG4aVoRVV9d7yhk', 205, 1, 1, '2020-05-09 08:25:18', '2020-05-09 08:25:18', NULL),
(89, NULL, '5SCOs55mHgjcKItnt32AvfkFprG4aVoRVV9d7yhk', 204, 1, 1, '2020-05-09 08:25:23', '2020-05-09 08:25:23', NULL),
(90, NULL, '5SCOs55mHgjcKItnt32AvfkFprG4aVoRVV9d7yhk', 119, 1, 1, '2020-05-09 08:25:33', '2020-05-09 08:25:33', NULL),
(91, NULL, '5SCOs55mHgjcKItnt32AvfkFprG4aVoRVV9d7yhk', 200, 2, 1, '2020-05-09 08:25:39', '2020-05-09 08:25:45', NULL),
(92, NULL, 'LRruazDF6Dw9S7879sIShmEVmlISQXsNGJ3BCsY8', 145, 1, 1, '2020-05-09 09:42:48', '2020-05-09 09:42:48', NULL),
(93, NULL, '6XSx3vZqpOp2kSfqz0to2h6ej1g8S3VEwRL6MRVN', 135, 1, 1, '2020-05-09 10:57:03', '2020-05-09 10:57:03', NULL),
(94, NULL, 'EppbENbxeeRYjxN4gUgx4mVCtJITtSetEkrLl6op', 118, 1, 1, '2020-05-09 11:04:07', '2020-05-09 11:04:07', NULL),
(95, NULL, 'g16Tv4nT72nHANWsNGuNJHWq6zKgg7QksXUBjEqV', 202, 1, 1, '2020-05-09 11:21:09', '2020-05-09 11:21:09', NULL),
(100, NULL, 'GmaORN5bMgD1kBj6ZBOtx00PGZUCJTmuvQDeJgPC', 204, 1, 1, '2020-05-10 13:47:02', '2020-05-10 13:47:02', NULL),
(101, NULL, 'fVea8wRgG61PTfATU3u2HCmxxLH2noV0DzbpxR9J', 147, 1, 1, '2020-05-10 15:38:31', '2020-05-10 15:38:31', NULL),
(102, NULL, 'Vvhc3X1oLvD5YHN4sLPLFv0ipolcC3Wk54Gi5QXl', 183, 1, 1, '2020-05-11 17:21:10', '2020-05-11 17:21:10', NULL),
(103, NULL, 'WykXuop7KaW1kozgfUAaGjPWPiF1GBxsWO5P3Zrx', 189, 2, 1, '2020-05-11 18:53:02', '2020-05-11 18:56:25', NULL),
(104, NULL, 'ySYXqlMAe8NsXbwUs4RUdZTRpi7RS8tFUx31eFMK', 198, 1, 1, '2020-05-11 19:01:36', '2020-05-11 19:01:36', NULL),
(106, NULL, 'jAankgUwOvWv2f8ogrCFtKqgcbkB075OhURT8rmV', 206, 1, 1, '2020-05-12 14:51:28', '2020-05-12 14:51:28', NULL),
(107, NULL, '8AtFr7Eg41AhT5shOZGpE9owlDAU3G2vId1SwwRr', 204, 1, 1, '2020-05-12 15:17:08', '2020-05-12 15:17:08', NULL),
(108, NULL, '8AtFr7Eg41AhT5shOZGpE9owlDAU3G2vId1SwwRr', 149, 1, 1, '2020-05-12 15:17:30', '2020-05-12 15:17:30', NULL),
(109, NULL, 'dkVCF1XADvMeP33KVBNJB6mM41IYxETlHKlbwSJh', 200, 1, 1, '2020-05-13 02:07:54', '2020-05-13 02:07:54', NULL),
(110, NULL, 'C4ENxeUExnLiTK4Bd1bMcOcjwhghQDBUPJ60urZf', 204, 2, 1, '2020-05-13 07:47:28', '2020-05-13 07:47:39', NULL),
(111, NULL, 'YCT9WpXsnw1NHrzmuuZXRGpSjRuqGkOVXU08PBTY', 99, 1, 1, '2020-05-13 09:25:18', '2020-05-13 09:25:18', NULL),
(112, NULL, '7SHvJenVLuGzOXAuUPCxMDcwza9bBbei8RzliYko', 204, 1, 1, '2020-05-13 14:22:44', '2020-05-13 14:22:44', NULL),
(113, NULL, 'vyUP87IVWOyHeUqSUBtxCiSCY0sowoNwRzIAg3mF', 205, 1, 1, '2020-05-14 09:12:39', '2020-05-14 09:12:39', NULL),
(118, NULL, '6A710V435NIp3eBfGGurCkzgAZCAcrpFj08j5dBe', 127, 1, 1, '2020-05-15 15:39:19', '2020-05-15 15:39:19', NULL),
(119, NULL, '2pNjxkNy1t1PofCmHyc0FJTWpCv0sSBPPn6bdkQx', 204, 1, 1, '2020-05-16 11:07:51', '2020-05-16 11:07:51', NULL),
(120, NULL, 'CsyjUQRtV3Da7C8Mw3VER3Cqpk3idV0K2AhI4xr5', 127, 1, 1, '2020-05-16 12:40:28', '2020-05-16 12:40:28', NULL),
(121, NULL, 'g1pSwqGa8Rg10DL98oH8LVKt0TUaCzUkTk6Y8JNI', 204, 1, 1, '2020-05-16 16:56:20', '2020-05-16 16:56:20', NULL),
(122, NULL, 'bJUekSl7XxhxIp6pFJhMzgFwAzyWtqMyVaayovRE', 199, 1, 1, '2020-05-16 23:19:46', '2020-05-16 23:19:46', NULL),
(128, NULL, 'isAk0rZlX6uY11kfLLSpKZKURMkhYd9qR8z9OwnU', 178, 2, 1, '2020-05-17 16:01:49', '2020-05-17 16:01:55', NULL),
(129, NULL, 'oarUzbpPRrApdesDz4dsJZQi1bXC9iQyxWr7rzh4', 205, 1, 1, '2020-05-17 17:36:33', '2020-05-17 17:36:33', NULL),
(130, NULL, 'AYzpbDg3acrPHpEH0vc7qVNVSQngZUZEW0aersId', 202, 1, 1, '2020-05-17 18:22:47', '2020-05-17 18:22:47', NULL),
(131, NULL, 'AYzpbDg3acrPHpEH0vc7qVNVSQngZUZEW0aersId', 204, 1, 1, '2020-05-17 18:35:36', '2020-05-17 18:35:36', NULL),
(132, NULL, 'bNYJXUe6cDTmL3pAMVIfhU6oZxDHXGuvda303ezt', 205, 1, 1, '2020-05-17 18:38:17', '2020-05-17 18:38:17', NULL),
(136, NULL, 'IC8fBLG0qDLe3hiukdXOOiM06wctladZrLNaZUWP', 189, 2, 1, '2020-05-18 07:51:26', '2020-05-18 07:51:46', NULL),
(137, NULL, 'IC8fBLG0qDLe3hiukdXOOiM06wctladZrLNaZUWP', 102, 2, 1, '2020-05-18 07:51:51', '2020-05-18 07:52:01', NULL),
(138, NULL, 'IC8fBLG0qDLe3hiukdXOOiM06wctladZrLNaZUWP', 96, 1, 1, '2020-05-18 09:00:58', '2020-05-18 09:00:58', NULL),
(141, NULL, 'tEExiAx8qCUfGzmF3HeZLXUFdx2OK8lIhwaXb7hz', 198, 1, 1, '2020-05-20 00:09:24', '2020-05-20 00:09:24', NULL),
(143, NULL, 'pNAXMMMvae1BERE93nsQGKnEnpQ0ylwAuMpDKtCQ', 139, 1, 1, '2020-05-20 15:09:16', '2020-05-20 15:09:16', NULL),
(144, NULL, 'pNAXMMMvae1BERE93nsQGKnEnpQ0ylwAuMpDKtCQ', 144, 1, 1, '2020-05-20 15:09:22', '2020-05-20 15:09:22', NULL),
(145, NULL, 'pNAXMMMvae1BERE93nsQGKnEnpQ0ylwAuMpDKtCQ', 107, 1, 1, '2020-05-20 17:50:20', '2020-05-20 17:50:20', NULL),
(146, NULL, 'pNAXMMMvae1BERE93nsQGKnEnpQ0ylwAuMpDKtCQ', 105, 1, 1, '2020-05-20 17:50:20', '2020-05-20 17:50:20', NULL),
(147, NULL, '02CjV6iN0WJlFUzCPJCcA1avvNLNn1fCZR8M4AWu', 206, 1, 1, '2020-05-20 20:47:41', '2020-05-20 20:47:41', NULL),
(148, NULL, '0PG9zTCT3vTd9YDQc99K66z86hQd0vOwTeV2Enoo', 198, 1, 1, '2020-05-21 12:43:49', '2020-05-21 12:43:49', NULL),
(149, NULL, 'dPwjwGw2yTJOAFmMZIozXhN9ODTCUC8skfqPZ6FS', 198, 1, 1, '2020-05-21 14:08:44', '2020-05-21 14:08:44', NULL),
(150, NULL, 'TY9yiZPdOinwfu0Po2HTXlLLOOOxsazVp9Xir9te', 119, 1, 1, '2020-05-22 08:33:34', '2020-05-22 08:33:34', NULL),
(151, NULL, '8EycC6edKPYJLOvg9sgXFCcc2B29BekdtkndxZa6', 202, 1, 1, '2020-05-23 09:52:34', '2020-05-23 09:52:34', NULL),
(152, NULL, 'slQR80P95QDz9ir83Wm8pGTGczllda5dGZ66S0Eq', 114, 1, 1, '2020-05-23 17:14:30', '2020-05-23 17:14:30', NULL),
(153, NULL, 'AR2221uSyQiAN7f9sMnYiNEY9e1m67jH3nTFMGgT', 200, 1, 1, '2020-05-25 15:54:03', '2020-05-25 15:54:03', NULL),
(154, NULL, 'DxG9bCxYWJv89jnBhEy4o6FvGDCgJntDukBoofBk', 203, 1, 1, '2020-05-26 18:39:05', '2020-05-26 18:39:05', NULL),
(157, NULL, 'ZL0eQgqDfJJr2jxV4V3LkOqLnUlUDU4xJg7R3b0D', 124, 1, 1, '2020-05-27 09:28:58', '2020-05-27 09:28:58', NULL),
(158, NULL, 'GzvpDHxM1AbDG7m1l0VXfiHMFmd0CxxjKrHS87Ra', 101, 1, 1, '2020-05-28 10:30:35', '2020-05-28 10:30:35', NULL),
(159, NULL, '1AVmnbE8bCwLhreumtWIl8vYMKOiNanmCkeNI69T', 117, 1, 1, '2020-05-29 10:12:53', '2020-05-29 10:12:53', NULL),
(160, NULL, '92X1gcEpGO69TkMmAXpZzEbQnswDofSljjgIFAaI', 138, 1, 1, '2020-05-29 13:32:52', '2020-05-29 13:32:52', NULL),
(161, NULL, '92X1gcEpGO69TkMmAXpZzEbQnswDofSljjgIFAaI', 155, 1, 1, '2020-05-29 13:33:08', '2020-05-29 13:33:08', NULL),
(162, NULL, 'XaWQNFscasIGEhMpVYaHX3b1GxLorKII6kCpondf', 104, 1, 1, '2020-05-29 18:22:42', '2020-05-29 18:22:42', NULL),
(163, NULL, 'ukxa2Hrqrjxu4NuTo4gSgscaG35p3FHVCqA8369y', 127, 1, 1, '2020-05-30 21:45:11', '2020-05-30 21:45:11', NULL),
(164, NULL, 'NBS55HBtcpriZtkig0v94Z4TMWoUoCUhMd2FbXoU', 198, 1, 1, '2020-05-31 11:52:10', '2020-05-31 11:52:10', NULL),
(165, NULL, '6hMBzPG6QQpBqpNQ9Z2XDN96KMdHUpwSMB7LFmAE', 125, 1, 1, '2020-06-01 00:01:15', '2020-06-01 00:01:15', NULL),
(169, NULL, 'BeN856OzOTNqdvWAvDlmoGYLH80whWXdGL12EaHv', 146, 1, 1, '2020-06-03 06:16:45', '2020-06-03 06:16:45', NULL),
(170, NULL, 'dBO6qIYF8yK8ydc1IFEiZJWUQHL5LvYJUE5wIphY', 123, 1, 1, '2020-06-03 07:06:05', '2020-06-03 07:06:05', NULL),
(171, NULL, 'dBO6qIYF8yK8ydc1IFEiZJWUQHL5LvYJUE5wIphY', 126, 1, 1, '2020-06-03 07:06:35', '2020-06-03 07:06:35', NULL),
(172, NULL, 'gzeaUUuU5L35C6wrD21aov1rHpK4w4Tmwg9dx135', 100, 1, 1, '2020-06-03 15:19:36', '2020-06-03 15:19:36', NULL),
(173, NULL, '64Htd9Us5mwiYMdiZpagk3NpDz8FCLh4XUIA3Wi9', 98, 1, 1, '2020-06-04 08:20:35', '2020-06-04 08:20:35', NULL),
(175, NULL, 'LSJt6nlgaROIYf6JbceqyieMxEx8fzGTcjZQW6rH', 110, 1, 1, '2020-06-07 08:32:49', '2020-06-07 08:32:49', NULL),
(176, NULL, 'IJQrrAq3oeyD1LHDL6hbo6nC9mcRsVc6Lo0pUqNc', 198, 1, 1, '2020-06-09 07:56:40', '2020-06-09 07:56:40', NULL),
(177, NULL, '4XS1No6ndAqOyWYu0M8qsCq4im8eMZ4hrMVFl29c', 201, 1, 1, '2020-06-09 20:28:29', '2020-06-09 20:28:29', NULL),
(178, NULL, 'Xq3mFSEs1tUSihpo0gUg47zsxxjOKkVlhikVZoqd', 206, 1, 1, '2020-06-09 22:36:54', '2020-06-09 22:36:54', NULL),
(179, NULL, 'eFD9lsmDqM28pJPfteixzsCzgc2Cnc14ack2Pb6y', 201, 1, 1, '2020-06-10 08:14:12', '2020-06-10 08:14:12', NULL),
(180, NULL, '97LBg63anCeeGNDGS0hLbhvLIwrXiekPSgh9wq0c', 154, 1, 1, '2020-06-11 10:39:51', '2020-06-11 10:39:51', NULL),
(181, NULL, 'Fu9ijXC5xobxmltsUxvGpAUpE3r1bh51k8EFeFGa', 134, 1, 1, '2020-06-11 18:49:26', '2020-06-11 18:49:26', NULL),
(182, NULL, 'celLEnHOw7eEhd1b1zX0bscWxnbTAPyIX1sxd068', 205, 1, 1, '2020-06-12 11:42:26', '2020-06-12 11:42:26', NULL),
(183, NULL, 'E7BaTI1ngBtf9qqdmKHI6NXQzVLxtTAetFNxzBMZ', 201, 1, 1, '2020-06-12 12:06:17', '2020-06-12 12:06:17', NULL),
(184, NULL, 'dczCitDqiuVVshP2bufioelXsRRXLiy4pjliahxH', 172, 1, 1, '2020-06-12 15:02:39', '2020-06-12 15:02:39', NULL),
(185, NULL, 'lSItXCXPqhvWWNgtIWuktBU9ZtcYJGd3ZthGmEaf', 207, 1, 1, '2020-06-13 07:15:06', '2020-06-13 07:15:06', NULL),
(187, NULL, 'BTfAZHUQ7DEZgqxkZF5ypUYzDRuWNn9DCoamKTjl', 154, 1, 1, '2020-06-13 20:45:57', '2020-06-13 20:45:57', NULL),
(188, NULL, 'NyCfKRCAKPo2WNuEzFHqQOmcrrqat6e0u41gXnPw', 132, 2, 1, '2020-06-14 23:25:38', '2020-06-14 23:28:09', NULL),
(190, NULL, 'vG9W2SdclBZJh7p6o3aqSbAzTDfuSjb0vvB0SUQE', 135, 1, 1, '2020-06-15 11:18:13', '2020-06-15 11:18:13', NULL),
(194, NULL, 'E1mzKhZ6Wpt6Mr6RaquMAZPobEj4ksSA6WPRn7aO', 206, 1, 1, '2020-06-15 22:11:26', '2020-06-15 22:11:26', NULL),
(195, NULL, 'y5Lq4RljeUT9fbpcyWWKTCqxTixlWPHgh1B6etQ1', 206, 1, 1, '2020-06-16 08:18:34', '2020-06-16 08:18:34', NULL),
(196, NULL, 'LnLD3F5waJypUWY0QegVI0PUGQQrDy7yf2pWYPTq', 102, 1, 1, '2020-06-16 09:45:02', '2020-06-16 09:45:02', NULL),
(197, NULL, 'YNMNJx62AVKOa9UFrBC0qYTReQfTk1NSXonu9ITj', 206, 1, 1, '2020-06-16 17:37:44', '2020-06-16 17:37:44', NULL),
(198, NULL, 'xIAF7BqDREQbi6LnU81GOP6kUvhjEHB8xP0sIKKv', 101, 2, 1, '2020-06-17 14:53:28', '2020-06-17 14:53:44', NULL),
(199, NULL, 'cLcFNkwzfSuvrwLdjW2RlpWuVkYTVcvjr5qJDBOF', 206, 1, 1, '2020-06-17 15:36:15', '2020-06-17 15:36:15', NULL),
(200, NULL, 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 202, 1, 1, '2020-06-18 10:31:46', '2020-06-18 10:31:46', NULL),
(201, NULL, 'y0EBYXVk6apBXYGJB9WADJcjqgGmOGkO3fUtKzrx', 201, 1, 1, '2020-06-18 11:41:01', '2020-06-18 11:41:01', NULL),
(202, NULL, 'X3D8hEPdQjLXNfbPAm1qKnndYzZKY8D1YG9JXiEV', 97, 1, 1, '2020-06-20 14:10:12', '2020-06-20 14:10:12', NULL),
(203, NULL, 'kjZ1T1iGsnVHxlrCz3C8ieEZlNmJFOTBXvIlWVmS', 113, 1, 1, '2020-06-21 17:37:13', '2020-06-21 17:37:13', NULL),
(205, NULL, 'IigTQjZ3A5kbRPzNkzrhr0kJJQw19An9hkAELMNe', 138, 1, 1, '2020-06-23 11:59:08', '2020-06-23 11:59:08', NULL),
(206, NULL, '3yliY58u6nBbjaTZUHjqeiCmDFYwwoKkkfVR4tB0', 204, 1, 1, '2020-06-23 17:46:02', '2020-06-23 17:46:02', NULL),
(207, NULL, 'CEAlgabQbXFVNsquGqwUTXHRDQuxCCwHYOJWThhQ', 99, 1, 1, '2020-06-23 22:28:41', '2020-06-23 22:28:41', NULL),
(209, NULL, 'EizeHef7Gusev9GOgqLg2vriF9sKMs2XETZPhVwz', 154, 1, 1, '2020-06-25 15:34:41', '2020-06-25 15:34:41', NULL),
(210, NULL, 'EizeHef7Gusev9GOgqLg2vriF9sKMs2XETZPhVwz', 100, 1, 1, '2020-06-25 15:34:53', '2020-06-25 15:34:53', NULL),
(211, NULL, 'vb2w45yhSaDQ6LymyJVCZGg7piSVGN7Jwwm5gHIw', 137, 1, 1, '2020-06-26 05:59:53', '2020-06-26 05:59:53', NULL),
(212, NULL, 'KgsC5gkZL8Sa653H2oSikE46HaXj3V7iUK7A14ay', 151, 1, 1, '2020-06-26 11:24:32', '2020-06-26 11:24:32', NULL),
(213, NULL, '0dzovF8ZAXVYB2JyPIWmJHiXDiKbzCUtMaA7ehb0', 146, 1, 1, '2020-06-26 11:34:04', '2020-06-26 11:34:04', NULL),
(214, NULL, 'sw2jd24m69qQh8IZXCQhbpt1t6sLwsxd0Da2r6CU', 154, 1, 1, '2020-06-28 14:20:07', '2020-06-28 14:20:07', NULL),
(215, NULL, 'd9MR0XZeUuRpXW0DulSG7nX9j7QAFzF0h8EVrrve', 206, 1, 1, '2020-06-28 14:40:11', '2020-06-28 14:40:11', NULL),
(216, NULL, 'wDF7lAIZWcX32zyO8VXMEN6yuvr0CSL1lbLH3cUY', 154, 1, 1, '2020-06-28 14:59:03', '2020-06-28 14:59:03', NULL),
(217, NULL, 'vRtm25FjGoxRj1S1ag1fWRubWq1GOnqFRUXmJDPi', 204, 2, 1, '2020-06-29 12:29:15', '2020-06-29 12:30:13', NULL),
(218, NULL, 'WxrfjVoQhB0BPqCSWGugEaCY5w2GvQgKWKC67Te4', 204, 2, 1, '2020-06-29 13:55:04', '2020-06-29 13:55:37', NULL),
(219, NULL, '3rEPSbunHvNXx42J344OPNyL1OZFCubNgNukaaoc', 207, 1, 1, '2020-06-29 15:58:53', '2020-06-29 15:58:53', NULL),
(220, NULL, '1UmtvMQ7NLo64bnJKj6XtuwI2Q4rfD4N5cIrixIi', 204, 1, 1, '2020-06-29 16:02:20', '2020-06-29 16:02:20', NULL),
(221, NULL, '9P2DUJIkVG8FfTdlgvcVumEoFX4KJ1o5BSZnqYt9', 145, 13, 1, '2020-06-29 17:22:08', '2020-06-29 17:28:09', NULL),
(222, NULL, '2DOyQvrnk2uhq0TsjvAg7TGAvtKyAPDMCZ5VodIl', 206, 1, 1, '2020-06-30 09:47:30', '2020-06-30 09:47:30', NULL),
(224, NULL, 'w6xf6ygu6mgTiywsJemFz8haZVokRB8swjmrtGHt', 132, 1, 1, '2020-07-01 00:11:10', '2020-07-01 00:11:10', NULL),
(226, NULL, 'IeEXOvDnpqaaxNgZM8Hkd4UEN2IbchsSQAoZPWtT', 154, 1, 1, '2020-07-01 09:12:16', '2020-07-01 09:12:16', NULL),
(228, NULL, 'DCMrDq2Nf2uhmOMaqAGZdPczmpHDyzrE5kzITrZ0', 138, 1, 1, '2020-07-01 18:50:20', '2020-07-01 18:50:20', NULL),
(229, NULL, 'TiWyeVuDkPGjEtp4PUOIFiDbWWiEDSeFUEv4m3cj', 154, 1, 1, '2020-07-02 10:29:06', '2020-07-02 10:29:06', NULL),
(230, NULL, 'ejd4zjg0LnUAA5PTOYTCKWFn3hIBgLcHbgNr81wk', 163, 1, 1, '2020-07-02 12:46:16', '2020-07-02 12:46:16', NULL),
(231, NULL, '2kV788yLMXoX6ucX8DVzqoRtxcpQRd4VlSyZg5XH', 208, 1, 1, '2020-07-04 20:50:10', '2020-07-04 20:50:10', NULL),
(232, NULL, 'ufAH2ooum6pKXeCkeoKMMTcpDnEL1pC28XmBnEbz', 204, 1, 1, '2020-07-05 07:20:37', '2020-07-05 07:20:37', NULL),
(233, NULL, 'y10eNWSOcYCand8M4MaKWIuOGe2sbkvmWvWyP1tO', 98, 1, 1, '2020-07-05 17:55:45', '2020-07-05 17:55:45', NULL),
(238, NULL, 'pzQGb3TVVEKc9HYluIiy8qjGEtaUS6Af1ixeZPGq', 208, 1, 1, '2020-07-05 22:00:47', '2020-07-05 22:00:47', NULL),
(239, NULL, 'psO2TXZqKiO7kJrCG6FvfTloVvhLtXQa0CLIoxZ6', 127, 1, 1, '2020-07-06 13:01:51', '2020-07-06 13:01:51', NULL),
(240, NULL, 'kqf9GLwRNCkFxBF2Z6djTP5NM82nJPOfe6N3SlaV', 127, 1, 1, '2020-07-07 13:20:25', '2020-07-07 13:20:25', NULL),
(241, NULL, 'rnA0Quu2DaJIPqH61Z3ehLOUs4QnqcvrtRcKfQZz', 204, 2, 1, '2020-07-08 18:15:28', '2020-07-08 18:21:18', NULL),
(242, NULL, 'CAfWnvjKruwmZWs0PZc3jMGRiGSv7I1GNpNAFTUY', 205, 1, 1, '2020-07-09 08:47:00', '2020-07-09 08:47:00', NULL),
(245, NULL, '4L6UEEc5g7UbEHm48WBI40ExbIerCPJCVwPd7H9W', 145, 1, 1, '2020-07-09 21:32:35', '2020-07-09 21:32:35', NULL),
(247, NULL, 'f9NZT3clUWTrWlRzdTGhWVhBDSuK15ivzU9ysXJ5', 206, 1, 1, '2020-07-14 19:14:47', '2020-07-14 19:14:47', NULL),
(248, NULL, 'Ec5eHECZRHnf9zOJisX2B75UXRI0t0jbICMV1msH', 199, 1, 1, '2020-07-14 20:10:52', '2020-07-14 20:10:52', NULL),
(249, NULL, 'NyvcwWDfHYEbORpkhenPriLxh9BWbrMtZu7MKfWb', 207, 1, 1, '2020-07-14 20:13:51', '2020-07-14 20:13:51', NULL),
(250, NULL, 'GFo0GrhZBQkKorbprwsvoVV5ulM4bMYTMnF3Koiq', 127, 1, 1, '2020-07-15 20:40:17', '2020-07-15 20:40:17', NULL),
(251, NULL, 'c6Cs49NmnixcXL5dxcrp55vXxjGmfCB76lTZd5rX', 217, 1, 1, '2020-07-15 23:16:13', '2020-07-15 23:16:13', NULL),
(252, NULL, 'RlBWotMhwHkZn8LKatIkmKvhFxKDOkgZvi158nIo', 204, 1, 1, '2020-07-16 08:50:56', '2020-07-16 08:50:56', NULL),
(253, NULL, 'yeE5oOwyYxcpHVVCZe5hv3bQLU4p106apvtpFYnJ', 130, 1, 1, '2020-07-17 20:47:04', '2020-07-17 20:47:04', NULL),
(254, NULL, '1FDYqPy8Cr1zaAhrpQ0YccUt3kaBzVWAmhs26A9Y', 204, 1, 1, '2020-07-18 04:16:17', '2020-07-18 04:16:17', NULL),
(255, NULL, 'zupB01BpgwQpaKJmytejmSDuigG0HXU28t52k6rp', 217, 4, 1, '2020-07-18 07:45:55', '2020-07-18 07:51:08', NULL),
(256, NULL, 'QY3fY1zfF2Fswpkw8BOZRFDTKTCPEbnSEBTOh8qb', 99, 1, 1, '2020-07-18 22:28:11', '2020-07-18 22:28:11', NULL),
(257, NULL, 'PVUW0H4fXCPvASunrB5K0NIpt6RiRQWHOOO2wSoJ', 110, 1, 1, '2020-07-20 12:26:11', '2020-07-20 12:26:11', NULL),
(259, NULL, 'MvewEBRKnwdCAoBz8veDWHlbOBkWSMQTLKr2ULQr', 127, 1, 1, '2020-07-20 14:34:44', '2020-07-20 14:34:44', NULL),
(260, NULL, '28elYFAwUN5WUSSolIyvKWihLFA9vj8rh3wrRnM0', 199, 1, 1, '2020-07-20 18:19:43', '2020-07-20 18:19:43', NULL),
(261, NULL, '28elYFAwUN5WUSSolIyvKWihLFA9vj8rh3wrRnM0', 198, 1, 1, '2020-07-20 18:19:50', '2020-07-20 18:19:50', NULL),
(262, NULL, 'B2gADM6bjrY8yB6yn6XWT0vsOkW7rLP0KzoHHFC7', 127, 1, 1, '2020-07-21 22:19:43', '2020-07-21 22:19:43', NULL),
(263, NULL, '9Ja2JoBNpZrOdvqVniy99So33i4TqENHQPEy2QBD', 165, 1, 1, '2020-07-22 20:24:50', '2020-07-22 20:24:50', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_partenaires`
--

CREATE TABLE `kdm_partenaires` (
  `id` int(11) NOT NULL,
  `nom_partenaire` varchar(255) NOT NULL,
  `contact_partenaire` varchar(255) DEFAULT NULL,
  `url_partenaire` text,
  `image_partenaire` text,
  `statut` int(11) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_partenaires`
--

INSERT INTO `kdm_partenaires` (`id`, `nom_partenaire`, `contact_partenaire`, `url_partenaire`, `image_partenaire`, `statut`, `adresse`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Itel', 'Test', 'itel.com', '1576457707.png', 1, NULL, '2019-12-16 00:55:07', '2019-12-18 07:58:34', NULL),
(4, 'TECNO', '0990099009', 'tecno.com', '1576460460.jpg', 1, 'address', '2019-12-16 01:41:00', '2019-12-16 01:49:49', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_password_resets`
--

CREATE TABLE `kdm_password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `kdm_posts`
--

CREATE TABLE `kdm_posts` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `slug` text,
  `post_content` text NOT NULL,
  `post_status` int(11) NOT NULL DEFAULT '0',
  `post_image` text,
  `post_cat_id` int(11) NOT NULL,
  `publication_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_posts`
--

INSERT INTO `kdm_posts` (`id`, `post_title`, `slug`, `post_content`, `post_status`, `post_image`, `post_cat_id`, `publication_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A propos', 'a-propos', '<h2><strong>A propos</strong></h2>\r\n\r\n<hr />\r\n<p><big>Kadmarket est le premier site e-commerce gabonais sp&eacute;cialis&eacute; dans la vente des t&eacute;l&eacute;phones portables et accessoires en ligne. Notre objectif, mettre &agrave; la disposition de nos clients des produits de qualit&eacute;, garantis et &agrave; meilleur prix.</big></p>\r\n\r\n<p><big>Une &eacute;quipe de professionnels n&rsquo;ayant qu&rsquo;une seule passion: r&eacute;pondre &agrave; vos besoins et d&eacute;passer vos attentes. Vos avis compte beaucoup pour nous.</big></p>\r\n\r\n<p>&nbsp;</p>', 1, NULL, 1, '2123-01-31 00:00:00', '2019-12-11 10:30:45', '2020-02-08 10:25:40', NULL),
(2, 'Livraison', 'livraison', '<h2><strong>Livraison</strong></h2>\r\n\r\n<hr />\r\n<h3>Livraison Express</h3>\r\n\r\n<p><strong>Cette offre ne concerne que les communes suivantes&nbsp;: Libreville, Owendo et Akanda</strong>.</p>\r\n\r\n<ul>\r\n	<li>Besoin d&#39;un cadeau de derni&egrave;re minute?</li>\r\n	<li>Impossible de sortir de la maison?</li>\r\n	<li>Besoin d&#39;un produit rapidement ?</li>\r\n</ul>\r\n\r\n<p>Kadmarket simplifie votre shopping et r&eacute;sout tous vos probl&egrave;mes: s&eacute;lectionnez l&#39;article Kadmarket Express que vous recherchez parmi les milliers r&eacute;f&eacute;renc&eacute;s sur notre site et soyez livr&eacute;s d&egrave;s dans la journ&eacute;e! Toutefois,</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Si la commande est pass&eacute;e avant 14h, la livraison est possible avant 17h;</p>\r\n	</li>\r\n	<li>\r\n	<p>Si la commande est pass&eacute;e apr&egrave;s 14h, la livraison a eu lieu le lendemain avant midi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Nous livrons du lundi au samedi, de 8h30 &agrave; 17h. Les dimanches, d&egrave;s 12h. Nous livrons &eacute;galement les jours f&eacute;ri&eacute;s.</p>\r\n\r\n<p><strong>Les villes concern&eacute;es par la Livraison Express</strong></p>\r\n\r\n<ul>\r\n	<li>Libreville</li>\r\n	<li>Owendo</li>\r\n	<li>Akanda</li>\r\n</ul>\r\n\r\n<p><strong>Co&ucirc;t de la Livraison Express&nbsp;dans &agrave; Libreville, Owendo et Akanda</strong></p>\r\n\r\n<ul>\r\n	<li>Toutes les livraisons dans ces communes sont gratuites</li>\r\n</ul>\r\n\r\n<p><strong>Delai de livraison</strong></p>\r\n\r\n<p>12h maxi .</p>\r\n\r\n<p><strong>Livraison &agrave; l&rsquo;int&eacute;rieur du pays&nbsp;</strong></p>\r\n\r\n<p>Elles concernent toutes les villes du Gabon. Car avec nos diff&eacute;rents partenaires, il est possible maintenant de se faire livrer dans n&rsquo;importe quel coin du Gabon. Toutefois, les d&eacute;lais de livraison et les co&ucirc;ts de transport sont diff&eacute;rents, d&rsquo;une ville &agrave; une autre.</p>\r\n\r\n<p><strong>D&eacute;lai et co&ucirc;t de la Livraison &agrave; l&rsquo;int&eacute;rieur du pays.</strong></p>\r\n\r\n<ul>\r\n	<li>Le d&eacute;lai et le co&ucirc;t de la livraison &agrave; l&rsquo;int&eacute;rieur du pays d&eacute;pendent des moyens de transport utilis&eacute;s. Mais de fa&ccedil;on global, le plus bas montant pay&eacute; est <strong>5&nbsp;000 F</strong>.</li>\r\n</ul>\r\n\r\n<p><strong>Livraisons possibles dans les villes suivantes&nbsp;:</strong></p>\r\n\r\n<ul>\r\n	<li>Lambar&eacute;n&eacute;</li>\r\n	<li>Mouila</li>\r\n	<li>Tchibanga</li>\r\n	<li>Fougamou</li>\r\n	<li>Ndjol&eacute;</li>\r\n	<li>Lebamba</li>\r\n	<li>Mayoumba</li>\r\n	<li>Makokou</li>\r\n	<li>Mekambo</li>\r\n	<li>Boou&eacute;</li>\r\n	<li>Oyem</li>\r\n	<li>Ovan</li>\r\n	<li>Bitam</li>\r\n	<li>Lalara &nbsp;</li>\r\n	<li>Franceville</li>\r\n	<li>Moanda</li>\r\n	<li>Okondja</li>\r\n	<li>Bongoville</li>\r\n	<li>Akieni</li>\r\n	<li>L&eacute;koni</li>\r\n	<li>Bakoumba</li>\r\n	<li>Lastourville</li>\r\n	<li>Koulamoutou</li>\r\n	<li>Port-Gentil</li>\r\n	<li>Gamba</li>\r\n</ul>\r\n\r\n<p><strong>Comment les clients de l&rsquo;int&eacute;rieur du pays peuvent acheter sur </strong><a href=\"https://kadmarket.shop/\"><strong>https://kadmarket.shop/</strong></a><strong>?</strong></p>\r\n\r\n<p>Il existe deux modes de paiement pour nos clients qui sont &agrave; l&rsquo;int&eacute;rieur du pays. Et le processus de livraison est enclench&eacute; d&egrave;s que le paiement est effectif.</p>\r\n\r\n<ul>\r\n	<li>Payer aupr&egrave;s de notre partenaire r&eacute;sidant dans la ville o&ugrave; la commande est pass&eacute;e.</li>\r\n	<li>Payer directement sur le site internet <a href=\"https://kadmarket.shop/\">https://kadmarket.shop/</a></li>\r\n</ul>', 1, NULL, 1, '2020-07-10 00:00:00', '2019-12-11 15:38:02', '2020-07-10 07:39:39', NULL),
(3, 'Foire aux questions (FAQ)', 'foire-aux-questions-faq', '<h2>Foire aux questions (FAQ)</h2>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Combien de temps faut-il pour recevoir mon produit?</h3>\r\n\r\n<p>Les d&eacute;lais de livraison varient en fonction de votre ville et du produit s&eacute;lectionn&eacute;. Nous vous informons que les d&eacute;lais de livraison pour les produits exp&eacute;di&eacute;s d&#39;outre-mer sont beaucoup plus longs que pour les autres produits: attendez un mois entre la confirmation de votre commande et sa livraison</p>\r\n\r\n<h3>Quels sont les frais de livraison?</h3>\r\n\r\n<p>Les frais de livraison sont les co&ucirc;ts engag&eacute;s par Kadmarket et nos partenaires logistiques pour apporter vos produits command&eacute;s &agrave; votre porte. Les frais de livraison sont les suivants :<br />\r\n&nbsp; &nbsp; &nbsp;- Libreville, Owendo et Akanda : 2 000 F<br />\r\n&nbsp; &nbsp; &nbsp;- L&rsquo;int&eacute;rieur du pays : 3 000 F</p>\r\n\r\n<h3>Mon colis peut-il &ecirc;tre livr&eacute; &agrave; une adresse de bureau?</h3>\r\n\r\n<p>Oui. Votre colis peut &ecirc;tre livr&eacute; &agrave; n&#39;importe quelle adresse qui vous convient. Entrez simplement votre adresse pr&eacute;f&eacute;r&eacute;e comme adresse de livraison lors de la commande.</p>\r\n\r\n<h3>Kadmarket livre-t-elle &agrave; l&#39;&eacute;tranger?</h3>\r\n\r\n<p>Non, nous ne fournissons pas de livraison internationale</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;- Exp&eacute;rience d&#39;achat sans embuches<br />\r\n&nbsp; &nbsp; &nbsp;- Stock&eacute;s, emball&eacute;s et exp&eacute;di&eacute;s par Kadmarket<br />\r\n&nbsp; &nbsp; &nbsp;- Produits disponibles<br />\r\n&nbsp; &nbsp; &nbsp;- Emballage assur&eacute;<br />\r\nSans frais additionnels Aucun frais d&#39;abonnement ou frais suppl&eacute;mentaires Kadmarket Express est l&agrave; pour simplifier votre shopping et ne comporte aucun co&ucirc;t additionnel ni frais cach&eacute;, seulement des avantages! Aucun engagement n&#39;est n&eacute;cessaire, s&eacute;lectionnez et achetez tout simplement les produits Kadmarket Express de la m&ecirc;me fa&ccedil;on que tous nos autres produits.</p>\r\n\r\n<h3>Puis-je changer mon adresse d&#39;exp&eacute;dition apr&egrave;s avoir pass&eacute; ma commande?</h3>\r\n\r\n<p>Vous pouvez demander que votre commande soit livr&eacute;e &agrave; une adresse diff&eacute;rente dans la m&ecirc;me r&eacute;gion ou la m&ecirc;me ville avant que votre commande soit exp&eacute;di&eacute;e: pour cela, veuillez contacter notre service client au +241 <strong>74 98 03 03&nbsp;</strong>ou au info@kadmarket.shop. Si vous souhaitez modifier l&#39;adresse d&#39;exp&eacute;dition dans une r&eacute;gion ou une ville diff&eacute;rente, nous devrons annuler et remplacer l&#39;ordre d&#39;origine.</p>\r\n\r\n<h3>Est-ce que quelqu&#39;un me contactera avant de livrer le paquet &agrave; mon emplacement?</h3>\r\n\r\n<p>Oui, notre charg&eacute; de livraison vous contactera pour confirmer votre disponibilit&eacute; et emplacement exact.</p>\r\n\r\n<h3>Puis-je r&eacute;cup&eacute;rer mon article au lieu de le faire livrer?</h3>\r\n\r\n<p>Oui. Cette option peut &ecirc;tre choisie au moment de la commande. Vous serez alert&eacute; lorsque votre produit arrivera &agrave; la station de ramassage que vous avez choisie, afin de vous y rendre. Il faut mentionner qu&#39;une fois le colis est disponible &agrave; la station de ramassage indiqu&eacute;e, vous aurez 7 jours maximum pour ramasser votre article. Apr&egrave;s 7 jours, l&#39;article retournera chez Kadmarket et votre commande sera annul&eacute;e.</p>\r\n\r\n<h3>Mon colis a disparu. Que dois-je faire?</h3>\r\n\r\n<p>Pas besoin de souci. Votre commande sera remplac&eacute;e sans frais sans frais suppl&eacute;mentaires.</p>\r\n\r\n<h3>J&#39;ai une plainte &agrave; porter contre le coursier qui a livr&eacute; ma commande. Que devrais-je faire?</h3>\r\n\r\n<p>Nous vous prions de bien vouloir nous excuser pour tous d&eacute;sagr&eacute;ments caus&eacute;s. Veuillez contacter notre service client au +241 74 98 03 03 ou au service-info@kadmarket.shop pour plus d&rsquo;informations.</p>\r\n\r\n<p>&nbsp;</p>', 1, NULL, 1, '2019-12-27 00:00:00', '2019-12-27 15:49:19', '2019-12-27 15:57:17', NULL),
(4, 'TECNO lance le CAMON 12 Air', 'tecno-lance-le-camon-12-air', '<ul>\r\n	<li>\r\n	<p>Bleu oc&eacute;an / Or Alpenglow</p>\r\n	</li>\r\n	<li>\r\n	<p>&Eacute;cran encoche 6.55 pouce&quot;</p>\r\n	</li>\r\n	<li>\r\n	<p>Design avec d&eacute;grad&eacute; aurore</p>\r\n	</li>\r\n	<li>\r\n	<p>Cam&eacute;ra triple AI Max de 16&nbsp;MP/p&gt;</p>\r\n	</li>\r\n	<li>\r\n	<p>32 Go de ROM + 3 Go de RAM</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Cam&eacute;ra frontale de 8MP</p>\r\n	</li>\r\n	<li>\r\n	<p>Triple cam&eacute;ra arri&egrave;re de 16MP+2MP+5MP avec quadruple flash</p>\r\n	</li>\r\n	<li>\r\n	<p>6.55 po HD</p>\r\n	</li>\r\n	<li>\r\n	<p>2.0GHz Quad-Core</p>\r\n	</li>\r\n	<li>\r\n	<p>HiOS bas&eacute; sur Android&trade; 9 Pie</p>\r\n	</li>\r\n</ul>', 1, NULL, 2, '2019-12-27 00:00:00', '2019-12-27 18:03:58', '2019-12-27 18:05:14', '2019-12-27 18:05:14'),
(5, 'TECNO lance le CAMON 12 Air', 'tecno-lance-le-camon-12-air', '<h2>TECNO lance le CAMON 12 Air</h2>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - Bleu oc&eacute;an / Or Alpenglow</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - &Eacute;cran encoche 6.55 pouce&quot;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - Design avec d&eacute;grad&eacute; aurore</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - Cam&eacute;ra triple AI Max de 16&nbsp;MP/p&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - 32 Go de ROM + 3 Go de RAM</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - Cam&eacute;ra frontale de 8MP</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - Triple cam&eacute;ra arri&egrave;re de 16MP+2MP+5MP avec quadruple flash</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - 6.55 po HD</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - 2.0GHz Quad-Core</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; - HiOS bas&eacute; sur Android&trade; 9 Pie</p>', 1, '1577469904.png', 2, '2019-12-27 00:00:00', '2019-12-27 18:05:04', '2020-07-07 03:51:57', NULL),
(6, 'Test', 'test', '<p>test</p>', 1, NULL, 3, '2020-02-08 00:00:00', '2020-02-08 03:23:10', '2020-02-08 03:33:51', '2020-02-08 03:33:51'),
(7, 'Devenir KADMARKETEUR', 'devenir-kadmarketeur', '<h2><strong>Devenir Kadmarketeur</strong></h2>\r\n\r\n<p>Il s&rsquo;agit d&rsquo;une offre exclusivement r&eacute;serv&eacute;e &agrave; l&rsquo;ensemble de notre client&egrave;le. Il s&rsquo;agit de ceux et celles qui veulent veulent gagner de l&rsquo;argent en recommandant nos produits &agrave; leurs proches.</p>\r\n\r\n<h3>Produits mis en vente</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Accessoires Oraimo</li>\r\n	<li>&nbsp;Smartphones et tablettes</li>\r\n</ul>\r\n\r\n<p>Comment se passe la vente?</p>\r\n\r\n<p>&bull; Proposez nos produits &agrave; vos parents ,amis et connaissances</p>\r\n\r\n<p>&bull; Si vous avez une commande ferme, indiquez-nous l&rsquo;adresse de livraison.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Comment payer?</p>\r\n\r\n<p>&bull; Vous r&eacute;cup&eacute;rez l&rsquo;argent aupr&egrave;s du client, vous le d&eacute;posez sur notre compte Airtel Money et nous nous chargeons de lui livrer le produit command&eacute;.</p>\r\n\r\n<p>&bull; Vos commissions sont exclusivement pay&eacute;es par Artel Money apr&egrave;s succ&egrave;s de l&rsquo;op&eacute;ration, chaque semaine ou tous les 05 du mois. NB: pour plus d&rsquo;informations, nous contacter : WhatsApp / Appel: +241 74 98 03 03</p>', 1, NULL, 1, '2020-02-11 00:00:00', '2020-02-12 21:27:54', '2020-05-10 12:08:52', NULL),
(8, 'Tecno Camon 15 Premier', 'tecno-camon-15-premier', '<p>Un design &eacute;tonnant de couleurs, sans oublier des lignes &agrave; texture exquises, composent le&nbsp;<strong>nouveau CAMON 15 Premier</strong>. Sous diff&eacute;rentes luminosit&eacute;s, diff&eacute;rents effets de changement de texture peuvent &ecirc;tre observ&eacute;s. ... Gr&acirc;ce au tout&nbsp;<strong>nouveau CAMON 15 Premier</strong>, saisissez davantage de d&eacute;tails de jour comme de nuit.</p>\r\n\r\n<p>Une quadruple cam&eacute;ra IA 64MP et d&rsquo;une cam&eacute;ra Selfie Pop-Up IA 32MP ; c&ocirc;t&eacute; m&eacute;moires ROM et RAM on parle de 128Go + 6Go. Il dispose d&rsquo;une batt&eacute;rie de 4000 mAh ; d&rsquo;un plein &eacute;cran parfait de 6,6 pouces ; d&rsquo;une reconnaissance faciale et de l&rsquo; Android 10.</p>\r\n\r\n<p>Avec&nbsp; tous ces &eacute;l&eacute;ments cl&eacute; pour servir d&rsquo;arguments de vente on peut se le permettre&nbsp; de conclure en disant que la s&eacute;rie TECNO CAMON 15 gr&acirc;ce &agrave; l&rsquo;union avec SONY, est l&rsquo;actuel ma&icirc;tre de la photographie!</p>\r\n\r\n<p>Restez connect&eacute;s.</p>\r\n\r\n<p>NB : Pour vous en procurer, commandez en ligne sur la page Facebook&nbsp;<a href=\"https://www.facebook.com/kadmarket/?ref=bookmarks\">https://www.facebook.com/kadmarket/?ref=bookmarks</a></p>', 1, '1594094535.jpg', 2, '2020-07-07 00:00:00', '2020-07-07 04:02:15', '2020-07-07 04:02:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_post_cats`
--

CREATE TABLE `kdm_post_cats` (
  `id` int(11) NOT NULL,
  `cat_libelle` text NOT NULL,
  `cat_status` int(11) NOT NULL,
  `cat_image` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_post_cats`
--

INSERT INTO `kdm_post_cats` (`id`, `cat_libelle`, `cat_status`, `cat_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PAGES D\'INFORMATIONS', 1, NULL, '2019-12-11 00:00:20', '2019-12-11 00:03:52', NULL),
(2, 'NOUVEAUTES FABRICANTS', 1, NULL, '2019-12-27 16:08:23', '2020-02-08 10:19:05', NULL),
(3, 'ACTUALITES', 1, NULL, '2020-02-08 03:00:12', '2020-02-08 03:00:12', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_produits`
--

CREATE TABLE `kdm_produits` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `prix_reduit` float DEFAULT NULL,
  `prix_achat` float DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `shop` int(11) NOT NULL,
  `marque` int(11) NOT NULL,
  `reference` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garantie` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `visite` bigint(20) NOT NULL DEFAULT '0',
  `lien_details_constructeur` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_produits`
--

INSERT INTO `kdm_produits` (`id`, `nom`, `prix`, `prix_reduit`, `prix_achat`, `quantite`, `shop`, `marque`, `reference`, `categorie`, `image`, `garantie`, `description`, `slug`, `active`, `visite`, `lien_details_constructeur`, `created_at`, `updated_at`, `deleted_at`) VALUES
(93, 'Spark4', 80000, 79000, NULL, 10, 1, 4, NULL, 1, '9agZuEyMum_produit-6.jpg', '12', 'Spark 4\r\n32 GB / 2GB / 13MP', 'nrqlj7tfp4-produit-spark4', 1, 1, NULL, '2019-12-07 19:02:28', '2019-12-07 19:38:06', '2019-12-07 19:38:06'),
(94, 'OEB E58D', 18500, 17500, NULL, 20, 1, 11, NULL, 18, 'tYQ2hfyfwg_produit-OEB E 58D.jpg', '3', 'Oreillette http://www.oraimo.com/product_detail-128.html', 'slkwj0sxum-produit-oeb-e58d', 1, 3, NULL, '2019-12-09 15:31:24', '2019-12-10 09:35:15', '2019-12-10 09:35:15'),
(95, 'Tempo W OSW-10', 35000, 34000, NULL, 15, 1, 11, NULL, 18, 'tlEkvquoTM_produit-Tempo W OSW-10.jpg', '3', 'Montre', '5gccitt6pu-produit-tempo-w', 1, 3, NULL, '2019-12-09 15:35:30', '2019-12-10 09:35:28', '2019-12-10 09:35:28'),
(96, 'OEB E58D', 18500, 16500, NULL, 0, 1, 11, NULL, 3, '7tY1LHsoXn_produit-spark-4.jpg', '3 mois', '<p>Oreillette con&ccedil;ue pour les s&eacute;ances d&#39;entra&icirc;nement. Moins de fils. Moins de tracas. Inclinez-vous</p>\r\n\r\n<p>&nbsp;</p>', 'bgkvfoglld-produit-oeb-e58d', 0, 38, 'http://www.oraimo.com/product_detail-153.html', '2019-12-10 09:57:15', '2020-07-23 02:14:04', NULL),
(97, 'OEB-E-74D', 20000, 16500, NULL, 20, 1, 11, NULL, 3, 'AZCDw5nagF_produit-OEB-E-74D.jpg', '3 mois', '<p>Ecouteurs bluetooth E74D.</p>', 'flofhi74zn-produit-oeb-e-74d', 1, 72, 'http://www.oraimo.com/product_detail-157.html', '2019-12-10 10:37:16', '2020-07-23 05:29:24', NULL),
(98, 'OEB-E-96D', 25000, 21000, NULL, 20, 1, 11, NULL, 3, 'mmFMD50rBk_produit-OEB-E-96D.jpg', '3', '<p>Oreillettes Bluetooth</p>', 'etodmlrckt-produit-oeb-e-96d', 1, 91, 'oraimo.com/product_detail-161.html', '2019-12-10 10:39:16', '2020-07-23 05:12:49', NULL),
(99, 'OEB-H-85D', 25000, 21000, NULL, 20, 1, 11, NULL, 3, 'TCs6qFm5hw_produit-OEB-H-85D.jpg', '3 mois', '<p>Casque</p>', 'r9vpkhkqu2-produit-oeb-h-85d', 1, 113, 'http://www.oraimo.com/product_detail-159.html', '2019-12-10 10:41:23', '2020-07-23 05:27:08', NULL),
(100, 'OEP-E-36', 10000, 6500, NULL, 20, 1, 11, NULL, 3, 'XfNtRsyj49_produit-OEp-E-36.jpg', '3', '<p>Ecouteurs filaires</p>', 'qynirukitc-produit-oep-e-36', 1, 49, 'http://www.oraimo.com/product_detail-126.html', '2019-12-10 10:44:32', '2020-07-23 05:25:19', NULL),
(101, 'Tempo W OSW 10', 35000, 28000, NULL, 20, 1, 11, NULL, 4, 'CeBx3lML60_produit-Tempo-W-OSW-10.jpg', '3', '<p>Montre</p>', 'wqwnntorih-produit-tempo-w-osw-10', 1, 161, 'http://www.oraimo.com/product_detail-156.html', '2019-12-10 10:48:55', '2020-07-23 04:34:24', NULL),
(102, 'Samsung Galaxy A10 S', 99000, 95000, NULL, 10, 1, 1, NULL, 1, 'RsCWmfXhC4_produit-Samsung-Galaxy-A10.jpg', '3 mois', '<ul>\r\n	<li>13/8 MP</li>\r\n	<li>32/2 GB</li>\r\n</ul>', 'vpobr5wmap-produit-samsung-galaxie-a10-s', 1, 158, NULL, '2019-12-10 13:53:22', '2020-07-23 02:11:15', NULL),
(103, 'Samsung Galaxy A20 S', 129000, 125000, NULL, 20, 1, 1, NULL, 1, 'TYk5LYKEMS_produit-Samsung-Galaxie-A20S.jpg', '3', '<p>Le Galaxy A20s est sublim&eacute; d&rsquo;un &eacute;cran LCD HD + de 6,5 pouces. Sur la coque arri&egrave;re compos&eacute;e de plastique 3D, on trouve un lecteur d&#39;empreintes digitales. Le smartphone est aliment&eacute; par un SoC octa-core cadenc&eacute; &agrave; 1,8 GHz . La firme n&rsquo;a pas pr&eacute;cis&eacute; le nom du processeur. Quoi qu&rsquo;il en soit, le composant est &eacute;paul&eacute; par 3 Go ou 4 Go de RAM en fonction du mod&egrave;le choisi. L&rsquo;autonomie est confi&eacute;e &agrave; une grosse batterie de 4000 mAh compatible avec la recharge rapide de 15 watts. Le smartphone tire son &eacute;pingle du jeu par son triple capteur photo compos&eacute; d&rsquo;un capteur principal de 13 Mp, d&rsquo;un second module de 5 Mp et d&rsquo;un troisi&egrave;me capteur de 8 Mp dot&eacute; d&rsquo;un grand angle.</p>', 'p66dqpgmoq-produit-samsung-galaxie-a20-s', 1, 39, NULL, '2019-12-10 14:12:20', '2020-07-21 02:27:00', NULL),
(104, 'Samsung Galaxy  A30 S', 155000, 145000, NULL, 20, 1, 1, NULL, 1, 'cemy1BhMOA_produit-Samsung-Galaxie-A-30.jpg', '3 mois', '<ul>\r\n	<li>Android 9.0, up to Android 10, One UI 2.0</li>\r\n	<li><strong>6.4&quot;</strong></li>\r\n	<li>32GB 3GB RAM</li>\r\n	<li><strong>25MP</strong>\r\n	<p>1080p</p>\r\n	</li>\r\n	<li><strong>3/4GB RAM</strong></li>\r\n	<li><strong>4000mAh</strong></li>\r\n</ul>', 'ogvcykqrta-produit-samsung-galaxy-a30-s', 1, 31, NULL, '2019-12-11 08:48:37', '2020-07-21 00:58:29', NULL),
(105, 'Samsung Galaxie A70', 235000, 215000, NULL, 20, 1, 1, NULL, 1, '9qHRIopziQ_produit-Samsung-Galaxie-A-70.jpg', '3', '<p><strong>PRESENTATION</strong></p>\r\n\r\n<p>Samsung Galaxy A70 a &eacute;t&eacute; lanc&eacute; en avril 2019 et fonctionne sous Android 9.0 OS. Le Smartphone est disponible en plus de trois options de couleurs : Noir, Bleu, Corail, et Blanc &amp; a un capteur d&#39;empreintes digitales int&eacute;gr&eacute; comme principale caract&eacute;ristique de s&eacute;curit&eacute;, ainsi que l&#39;h&ocirc;te des options de connectivit&eacute; en termes de 3G, 4G, GPS, Bluetooth Wifi capacit&eacute;s.</p>\r\n\r\n<p><strong>CARACTERISTIQUES</strong></p>\r\n\r\n<p>Le t&eacute;l&eacute;phone est disponible avec 64 Go de m&eacute;moire interne. Le Smartphone est aliment&eacute; par un processeur Octa de 2,2 GHz. Une m&eacute;moire RAM de 4 Go assure le bon fonctionnement du t&eacute;l&eacute;phone, m&ecirc;me dans les applications les plus gourmandes en m&eacute;moire et ne montre toujours aucun signe de retard. 64 Go de stockage interne peuvent &ecirc;tre &eacute;tendus &agrave; 512 Go via une carte microSD. Le t&eacute;l&eacute;phone est livr&eacute; avec une batterie puissante de 4500 mAh pour soutenir son &eacute;cran de 6,7 pouces avec un &eacute;cran Super AMOLED ayant une r&eacute;solution de 1080 x 2340. L&#39;&eacute;cran est &eacute;galement prot&eacute;g&eacute; par un verre durable r&eacute;sistant aux rayures. Samsung Galaxy A70 se vante d&#39;un double appareil photo primaire de 32 +8 + 5 m&eacute;gapixels et 32 m&eacute;gapixels avant Cam&eacute;ra. Il prend &eacute;galement en charge la d&eacute;tection des visages et l&#39;imagerie &agrave; gamme dynamique &eacute;lev&eacute;e (HDR).</p>', 'qfq1vwyn3e-produit-samsung-galaxie-a70', 1, 56, NULL, '2019-12-11 09:20:21', '2020-07-21 00:57:19', NULL),
(106, 'Samsung Galaxie A70', 225000, 224000, NULL, 20, 1, 1, NULL, 1, 'LPIrxc9wXZ_produit-Samsung-Galaxie-A-70.jpg', '3', 'Samsung Galaxy A70 a été lancé en avril 2019 et fonctionne sous Android 9.0 OS. Le Smartphone est disponible en plus de trois options de couleurs : Noir, Bleu, Corail, et Blanc & a un capteur d\'empreintes digitales intégré comme principale caractéristique de sécurité, ainsi que l\'hôte des options de connectivité en termes de 3G, 4G, GPS, Bluetooth Wifi capacités. Le téléphone est disponible avec 64 Go de mémoire interne.\r\n\r\nLe Smartphone est alimenté par un processeur Octa de 2,2 GHz. Une mémoire RAM de 4 Go assure le bon fonctionnement du téléphone, même dans les applications les plus gourmandes en mémoire et ne montre toujours aucun signe de retard. 64 Go de stockage interne peuvent être étendus à 512 Go via une carte microSD.\r\n\r\nLe téléphone est livré avec une batterie puissante de 4500 mAh pour soutenir son écran de 6,7 pouces avec un écran Super AMOLED ayant une résolution de 1080 x 2340. L\'écran est également protégé par un verre durable résistant aux rayures.\r\n\r\nSamsung Galaxy A70 se vante d\'un double appareil photo primaire de 32 +8 + 5 mégapixels et 32 mégapixels avant Caméra. Il prend également en charge la détection des visages et l\'imagerie à gamme dynamique élevée (HDR).', 'fxom9fl3zx-produit-samsung-galaxie-a70', 1, 0, NULL, '2019-12-11 09:21:08', '2019-12-11 09:38:56', '2019-12-11 09:38:56'),
(107, 'Samsung Galaxie A80', 315000, 314000, NULL, 3, 1, 1, NULL, 1, 'o7CrEZrcPg_produit-sAMSUNG-A-80.jpg', '3', '<p>Vue d&#39;ensemble Samsung Galaxy A80 fonctionne sous Android 9.0 OS. Le t&eacute;l&eacute;phone poss&egrave;de 128 Go de m&eacute;moire interne. Le smartphone est aliment&eacute; par un processeur Qualcomm Snapdragon 730 de 2,2 Ghz. 8 Go de RAM assure que le t&eacute;l&eacute;phone fonctionne en douceur, m&ecirc;me dans les applications les plus gourmandes en m&eacute;moire et ne montre aucun signe de retard. Le t&eacute;l&eacute;phone dispose d&#39;une m&eacute;moire interne non extensible de 128 Go. Il dispose d&#39;un module de cam&eacute;ra principale pivotant motoris&eacute; popup avec cam&eacute;ra de 48 + 8 m&eacute;gapixels + cam&eacute;ra TOF 3D. Le t&eacute;l&eacute;phone est livr&eacute; avec une grande batterie de 3700 mAh pour supporter son &eacute;cran de 6,7 pouces avec &eacute;cran Super AMOLED ayant une r&eacute;solution de 1080 x 2400 &agrave; 393 ppi. Le t&eacute;l&eacute;phone est puissant avec d&#39;excellentes sp&eacute;cifications. Design Le t&eacute;l&eacute;phone poss&egrave;de un &eacute;cran tactile capacitif Super AMOLED Super AMOLED de 6,7 pouces, 16M couleurs et 393 ppi. Le t&eacute;l&eacute;phone de sommeil a un corps en verre qui lui donne une sensation premium. Il a Corning Gorilla Glass 3 qui prot&egrave;ge votre t&eacute;l&eacute;phone contre les rayures et les gouttes. Il est disponible dans les couleurs Angel Gold, Ghost White et Phantom Black. Le t&eacute;l&eacute;phone a des dimensions &eacute;l&eacute;gantes de 65,2 x 76,5 x 9,3 mm (6,50 x 3,01 x 0,37 in). Appareil photo Samsung a annonc&eacute; le smartphone Galaxy A80 qui est livr&eacute; avec une cam&eacute;ra tournante. Ce qui rend le smartphone unique, c&#39;est son appareil photo. Le t&eacute;l&eacute;phone dispose d&#39;un appareil photo rotatif ainsi que d&#39;un m&eacute;canisme coulissant. La cam&eacute;ra Samsung Galaxy A80 est vraiment de classe mondiale. Il dispose d&#39;une cam&eacute;ra tournante 48MP + 8 MP, d&#39;une cam&eacute;ra f/2.2, d&#39;une cam&eacute;ra 12mm (ultra-large) et d&#39;une cam&eacute;ra TOF 3D. Il dispose d&#39;un module de cam&eacute;ra principale pivotant et motoris&eacute; pour les clics de souris. Le t&eacute;l&eacute;phone a une triple configuration de cam&eacute;ra arri&egrave;re, et une fois que vous pr&eacute;voyez de cliquer sur un selfie la cam&eacute;ra arri&egrave;re pivote de 180 degr&eacute;s de l&#39;arri&egrave;re vers l&#39;avant pour cliquer selfies. Processeur Les sp&eacute;cifications du Samsung Galaxy A80 incluent un puissant processeur Qualcomm SDM730 Snapdragon 730 (8 nm) et un GPU Adreno 618. Il dispose de 8 Go de RAM et de 128 Go de m&eacute;moire interne. Propuls&eacute; par le son Dolby Atmos, l&#39;appareil offre une exp&eacute;rience de jeu id&eacute;ale. Il fonctionne sur le dernier Android 9.0 de Google (Pie) pr&ecirc;t &agrave; l&#39;emploi. Batterie et stockage Le t&eacute;l&eacute;phone a une batterie de 3700 mAh et supporte une charge rapide de 25W. Les utilisateurs peuvent facilement recharger leur t&eacute;l&eacute;phone lorsqu&#39;ils sont en d&eacute;placement. Le smartphone Samsung a 128 Go de stockage interne qui est extensible via un emplacement pour carte microSD. Le t&eacute;l&eacute;phone offre suffisamment d&#39;espace de stockage pour toutes vos vid&eacute;os, etc. Connectivit&eacute; Les options de connectivit&eacute; incluses dans l&#39;appareil sont GPS, radio FM, Bluetooth, USB 2.0, connecteur r&eacute;versible Type-C 1.0. Il est &eacute;quip&eacute; d&#39;un ensemble de capteurs, dont un capteur d&#39;empreintes digitales &agrave; ultrasons (en cours d&#39;affichage), un acc&eacute;l&eacute;rom&egrave;tre, un gyroscope, un capteur de proximit&eacute; et un compas. Il est livr&eacute; avec une fonction de d&eacute;verrouillage du visage pour plus de s&eacute;curit&eacute;. Configuration Aliment&eacute; par un processeur Octa-core (2x2,2 GHz Kryo 470 Gold &amp; 6x1,8 GHz Kryo 470 Silver) et un chipset Qualcomm SDM730 Snapdragon 730 (8 nm), le t&eacute;l&eacute;phone peut g&eacute;rer facilement la plupart des t&acirc;ches. Samsung a essay&eacute; de prendre une plus grande part du march&eacute; indien des smartphones et pr&eacute;voit de lancer au moins 6-7 t&eacute;l&eacute;phones Galaxy s&eacute;rie A en Inde cette ann&eacute;e. Le fabricant de smartphones pr&eacute;voit de concurrencer les marques chinoises Xiaomi et Huawei qui ont conquis une grande partie du march&eacute; indien.</p>', 'mh5mjapr7v-produit-samsung-galaxie-a80', 0, 159, NULL, '2019-12-11 09:49:11', '2020-07-22 14:11:56', NULL),
(108, 'Tecno Camon 11 Pro', 115000, 114000, NULL, 30, 1, 4, NULL, 1, 'uOtBwsSjdI_produit-Camon-11.jpg', '3', '<p>Gr&acirc;ce &agrave; une technologie intelligente appliquer &agrave; l&#39;exp&eacute;rience de selfies de t&eacute;l&eacute;phones portables, le CAMON&nbsp;11 pr&eacute;sente des images nettes sans pr&eacute;c&eacute;dent. Avec une technologie 4 en 1 et un algorithme re-mosa&iuml;que professionnel et des lampes avant ajustables, il affiche des images nettes, lumineuses et impressionnantes.</p>', 'mtvar1av2t-produit-tecno-camon-11', 1, 9, 'http://tecno-mobile.com/cfr/phones/product-detail/product/camon-11-23/#/', '2019-12-17 19:12:36', '2020-06-04 19:29:21', '2020-06-04 19:29:21'),
(109, 'Tecno Pop 2 Power', 5500, 50000, NULL, 30, 1, 4, NULL, 1, 'TldClutNLF_produit-Pop-2-Power.jpg', '3 mois', '<p>Dot&eacute; d&#39;un &eacute;cran tactile FullView de 5,5 pouces (139,7mm), Le TECNO POP 2 Power vous offre une vision plus large, un monde plus vaste. Vous vous sentirez compl&egrave;tement immerg&eacute; dans votre &eacute;cran et vivrez une exp&eacute;rience cin&eacute;matographique sensationnelle.</p>', 'uwkmjivj7n-produit-tecno-pop-2-power', 0, 20, 'https://www.tecno-mobile.com/cfr/phones/product-detail/product/pop-2-power-21/#/', '2019-12-22 12:47:10', '2020-07-21 14:18:06', NULL),
(110, 'Tecno Spark 4', 89900, 75000, NULL, 20, 1, 4, NULL, 1, 'ouM22Irlwq_produit-Spark4.jpg', '3 mois', '<p>Cette fois-ci, le SPARK 4 franchit une &eacute;tape sans pr&eacute;c&eacute;dent en adoptant l&rsquo;&eacute;cran Dot Notch de 6,52 pouces, vous offrant ainsi une v&eacute;ritable exp&eacute;rience de visionnage compl&egrave;te. Avec un rapport d&rsquo;&eacute;cran parfait de 90&nbsp;% et une r&eacute;solution &eacute;lev&eacute;e, le monde que vous explorerez avec le SPARK 4 sera beaucoup plus vaste et plus merveilleux.</p>', 'jjb0qcikh5-produit-tecno-spark-4', 1, 115, 'https://www.tecno-mobile.com/cfr/phones/product-detail/product/spark-4-23/#/', '2019-12-22 12:50:33', '2020-07-23 01:02:39', NULL),
(111, 'Tecno Camon 11', 99000, 98000, NULL, 20, 1, 4, NULL, 1, 'VKcZnqB0zO_produit-Camon-11.jpg', '3', '<p>Gr&acirc;ce &agrave; une technologie intelligente appliquer &agrave; l&#39;exp&eacute;rience de selfies de t&eacute;l&eacute;phones portables, le CAMON&nbsp;11 pr&eacute;sente des images nettes sans pr&eacute;c&eacute;dent. Avec une technologie 4 en 1 et un algorithme re-mosa&iuml;que professionnel et des lampes avant ajustables, il affiche des images nettes, lumineuses et impressionnantes.</p>', 'ismchkel24-produit-tecno-camon-11', 1, 13, 'https://www.tecno-mobile.com/cfr/phones/tech-specs/tecspecs/camon-11-23/#/', '2019-12-22 12:56:07', '2020-06-04 19:32:18', '2020-06-04 19:32:18'),
(112, 'Tecno Camon 12 Pro', 135000, 128000, NULL, 20, 1, 4, NULL, 1, 'Zasp9cOkK9_produit-Camon-12-Pro.jpg', '3 mois', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>6.4&quot;&Eacute;cran AMOLED en encoche</p>\r\n	</li>\r\n	<li>\r\n	<p>Selfie IA clair de 32&nbsp;MP</p>\r\n	</li>\r\n	<li>\r\n	<p>Cam&eacute;ra triple AI Max de 16&nbsp;MP</p>\r\n	</li>\r\n	<li>\r\n	<p>Empreintes digitales int&eacute;gr&eacute;es &agrave; l&#39;&eacute;cran</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Appareil photo avant de 32 MP avec flash double</p>\r\n	</li>\r\n	<li>\r\n	<p>Triple cam&eacute;ra arri&egrave;re de 16MP+2MP+8MP avec quadruple flash</p>\r\n	</li>\r\n	<li>\r\n	<p>HiOS bas&eacute; sur Android&trade; 9 Pie</p>\r\n	</li>\r\n	<li>\r\n	<p>&Eacute;cran tactile64 Go de ROM</p>\r\n	</li>\r\n	<li>\r\n	<p>6 Go de RAM</p>\r\n	</li>\r\n	<li>\r\n	<p>Octa-core</p>\r\n	</li>\r\n	<li>\r\n	<p>3500mAh(typ)</p>\r\n	</li>\r\n</ul>', '3fzrtjy0hm-produit-tecno-camon-12-pro', 0, 32, 'https://www.tecno-mobile.com/cfr/phones/product-detail/product/camon-12-pro-14/#/', '2019-12-22 13:49:41', '2020-07-22 10:51:44', NULL),
(113, 'Tecno Camon 12', 119000, 110000, NULL, 20, 1, 4, NULL, 1, 'nC9JxcWuK4_produit-Camon-12.jpg', '3 mois', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>&Eacute;cran encoche en cristal 6.52&nbsp;po</p>\r\n	</li>\r\n	<li>\r\n	<p>Selfie IA clair de 16&nbsp;MP</p>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Cam&eacute;ra triple AI Max de 16&nbsp;MP</p>\r\n	</li>\r\n	<li>\r\n	<p>64 Go de ROM + 4 Go de RAM</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Appareil photo avant 16MP avec flash</p>\r\n	</li>\r\n	<li>\r\n	<p>Triple cam&eacute;ra arri&egrave;re de 16MP+2MP+8MP avec quadruple flash</p>\r\n	</li>\r\n	<li>\r\n	<p>6.52 po HD</p>\r\n	</li>\r\n	<li>\r\n	<p>Octa-core</p>\r\n	</li>\r\n	<li>\r\n	<p>HiOS bas&eacute; sur Android&trade; 9 Pie</p>\r\n	</li>\r\n	<li>\r\n	<p>64 Go de ROM</p>\r\n	</li>\r\n	<li>\r\n	<p>4 Go de RAM</p>\r\n	</li>\r\n	<li>\r\n	<p>Octa-core</p>\r\n	</li>\r\n	<li>\r\n	<p>4000mAh(typ)</p>\r\n	</li>\r\n</ul>', '9jjfvn49c1-produit-tecno-camon-12', 0, 21, 'https://www.tecno-mobile.com/cfr/phones/product-detail/product/camon-12-8/#/', '2019-12-22 13:52:47', '2020-07-23 03:36:43', NULL),
(114, 'Tecno Camon I click 2', 119900, 118000, NULL, 20, 1, 4, NULL, 1, '6IjgZeje1q_produit-Camon-I-click-2.jpg', '3 mois', '<p>Tecno Camon iClick2 (13MP +5MP AI Rear Dual Camera &amp; 24MP Selfie AI Camera) 4GB RAM + 64GB (Black)</p>', 'usp8gpvzqi-produit-tecno-camon-i-click-2', 1, 123, NULL, '2019-12-22 14:04:40', '2020-06-04 19:40:44', '2020-06-04 19:40:44'),
(115, 'Tecno Pop 2 F 8 GB', 46000, 45000, NULL, 20, 1, 4, NULL, 1, 'fBvVSa2Zi0_produit-Pop-2-F.jpg', '3', '<p>Gr&acirc;ce &agrave; la cam&eacute;ra frontale 8MP, vous ferez des selfies extraordinaire. Gr&acirc;ce au flash avant, le POP 2 peut facilement capturer votre beaut&eacute; m&ecirc;me avec une faible luminosit&eacute;. N&#39;h&eacute;sitez pas &agrave; prendre des selfies avec le POP</p>', 'sirw78q6dg-produit-tecno-pop-2-f-8-gb', 1, 2, 'https://www.tecno-mobile.com/cfr/phones/product-detail/product/pop-2-22/#/', '2019-12-22 14:34:07', '2019-12-26 07:15:32', '2019-12-26 07:15:32'),
(116, 'Tecno Pop 2 F 8 GB', 49900, 48900, NULL, 20, 1, 4, NULL, 1, 'TrZUPUkTVq_produit-Pop-2-F.jpg', '3', '<p>Gr&acirc;ce &agrave; la cam&eacute;ra frontale 8MP, vous ferez des selfies extraordinaire. Gr&acirc;ce au flash avant, le POP 2 peut facilement capturer votre beaut&eacute; m&ecirc;me avec une faible luminosit&eacute;. N&#39;h&eacute;sitez pas &agrave; prendre des selfies avec le POP</p>', 'rvemsxovhu-produit-tecno-pop-2-f-8-gb', 0, 7, 'https://www.tecno-mobile.com/cfr/phones/product-detail/product/pop-2-22/#/', '2019-12-22 14:34:08', '2020-06-04 19:41:03', '2020-06-04 19:41:03'),
(117, 'Tecno Pouvoir 3 Plus', 119000, 118000, NULL, 20, 1, 4, NULL, 1, 'SvgF59xg7I_produit-1.jpg', '3', '<p>Tecno Pouvoir 3 Plus 64 GB</p>', 'pfy9evjune-produit-tecno-pouvoir-3-plus', 0, 11, NULL, '2019-12-26 07:01:02', '2020-06-04 19:41:31', '2020-06-04 19:41:31'),
(118, 'Tecno Pop 2 F 16 GB', 55000, 49000, NULL, 20, 1, 4, NULL, 1, 'aoEDFbQqHD_produit-Pop-2-F-16-GB.jpg', '3', '<p>Tecno POP 2 F 16 GB ROM + 1GB de RAM</p>', 'ztamzkmxwx-produit-tecno-pop-2-f-16-gb', 1, 94, 'https://www.gsmarena.com/tecno_pop_2_f-9874.php', '2019-12-26 07:10:28', '2020-07-23 03:50:20', NULL),
(119, 'Tab Droidpad 7F', 65000, 64000, NULL, 20, 1, 4, NULL, 2, 'mabfIL2dy8_produit-Tecno-Driod-PAD.jpg', '3', '<p>Tab Droidpad 7F&nbsp;</p>', 'pxvx1yqzvb-produit-tab-droidpad-7f', 0, 57, 'https://zuimento.cm/tecno/164-droidpad-7f-tablet-dual-sim-1gb-ram-16gb-hdd-7.html', '2019-12-26 07:21:10', '2020-07-22 23:22:07', NULL),
(120, 'Tecno F1', 45000, 39000, NULL, 30, 1, 4, NULL, 1, 'wKosSyH6rv_produit-Tecno-F1.jpg', '3', '<p>Tecno F1 est un appareil de dimensions 74.2 mm (millim&egrave;tres) , 7.42 cm (centim&egrave;tre), 0.24 ft (pieds) , 2.92 in (pouces), et une r&eacute;solution d&rsquo;&eacute;cran de 480 x 854 p&iacute;xeles. Il a un processeur ARM Cortex-A7, une m&eacute;moire RAM de ARM Mali-400 MP et une m&eacute;moire interne de 8 GB (gigabytes). Il Tecno F1 vient de l&rsquo;usine avec le syst&egrave;me op&eacute;ratif Android 8.1 Oreo Go Edition</p>', 'zseggyheut-produit-tecno-f1', 1, 87, 'https://www.pantallazo.es/fr/caracteristiques/tecno-f1', '2019-12-26 07:36:42', '2020-07-23 04:45:03', NULL),
(121, 'Tecno 301', 10000, 9000, NULL, 30, 1, 4, NULL, 6, 'W7qUM4OunB_produit-Tecno-301.jpg', '3', '<h1>T&eacute;l&eacute;phone Portable Tecno T301 &ndash; Dual Sim, Appareil Photo, Lampe Torche KE0010</h1>', 'bnekxrcgwk-produit-tecno-301', 1, 7, 'https://www.sodishop.com/shop/telephones/tecno/telephone-portable-tecno-t301-dual-sim-appareil-photo-lampe-torche-ke0010/', '2019-12-26 07:44:54', '2020-06-04 19:44:41', '2020-06-04 19:44:41'),
(122, 'Itel 2160', 10000, 8000, NULL, 30, 1, 5, NULL, 6, 'Lr87ofbknG_produit-Itel-2160.jpg', '3 mois', '<h1>itel 2160 1.8 inch HQVGA Display Phone (Grey, Dual SIM)</h1>', 'uwonyc4w8k-produit-itel-2160', 1, 30, 'https://www.amazon.in/itel-2160-HQVGA-Display-Phone/dp/B07GL4VVLN', '2019-12-26 07:52:54', '2020-07-23 04:55:55', NULL),
(123, 'Itel P33', 49900, 48900, NULL, 30, 1, 5, NULL, 1, 'K0Ncy3J4qJ_produit-P33.jpg', '3', '<p>Smartphone Itel P33</p>', 'ssyxkf5ewg-produit-itel-p33', 1, 18, 'https://www.itel-mobile.com/fr/produits/smartphone/p-power/p33/', '2019-12-26 08:09:38', '2020-06-04 19:45:55', '2020-06-04 19:45:55'),
(124, 'Itel P33 Plus', 56500, 55500, NULL, 20, 1, 5, NULL, 1, 'PzJuDba1M2_produit-P33-Plus.jpg', '3', '<p>Itel P33 Plus</p>', 'zpd90s8js8-produit-itel-p33-plus', 1, 28, 'https://www.itel-mobile.com/fr/produits/smartphone/p-power/p33-plus/', '2019-12-26 08:17:47', '2020-06-04 19:46:42', '2020-06-04 19:46:42'),
(125, 'Itel A33', 42000, 41000, NULL, 20, 1, 5, NULL, 1, 'TXY9X6Ceir_produit-A33.jpg', '3', '<h1>Itel A33 - 5 Pouces - 5 Mpx - 16 GB -1 GB RAM - Empreinte Digitale - Gold</h1>', '7jbvgjgrtg-produit-itel-a33', 1, 14, 'https://www.itel-mobile.com/fr/produits/smartphone/a-basic/a33/', '2019-12-26 08:34:07', '2020-06-04 19:47:22', '2020-06-04 19:47:22'),
(126, 'Itel A14', 30000, 28000, NULL, 20, 1, 5, NULL, 1, 'KaQbvmBncD_produit-Itel-A14.jpg', '3 Mois', '<p>Itel A14</p>\r\n\r\n<ul>\r\n	<li>8GB</li>\r\n	<li>5MP</li>\r\n</ul>', 'cdvwgcsghk-produit-itel-a14', 1, 91, 'https://www.devicespecifications.com/fr/model/b4f94e3f', '2019-12-26 09:30:21', '2020-07-23 04:34:55', NULL),
(127, 'Itel S15 16GB', 55000, 39000, NULL, 0, 1, 5, NULL, 1, 'k1ApkUqJXJ_produit-Itel-S15.jpg', '3 mois', '<p>Itel S15</p>\r\n\r\n<ul>\r\n	<li>16MP en selfie</li>\r\n	<li>16GB de ROM</li>\r\n	<li>1 GB de RAM</li>\r\n</ul>', 'f7ysatoso5-produit-itel-s15', 1, 132, 'https://www.itel-mobile.com/fr/produits/smartphone/s-selfie/s15/', '2019-12-26 09:36:32', '2020-07-23 03:51:46', NULL),
(128, 'Itel A16 Plus', 35000, 34000, NULL, 30, 1, 5, NULL, 1, 'ibZG9zWNAG_produit-Itel-A16-Plus.jpg', '3', '<p>Itel A 16 Plus 8GB</p>', 'ub4y67otwv-produit-itel-a16-plus', 0, 39, 'https://www.itel-mobile.com/fr/produits/smartphone/a-basic/a16-plus/', '2019-12-26 09:40:27', '2020-07-23 00:44:05', NULL),
(129, 'Itel S33', 59900, 58900, NULL, 20, 1, 5, NULL, 1, 'Pv96fvWNf3_produit-Itel-S-33.jpg', '3', '<p>Itel S 33 16 GB</p>', '2361fqwscy-produit-itel-s33', 1, 16, NULL, '2019-12-26 09:44:07', '2020-06-04 19:49:30', '2020-06-04 19:49:30'),
(130, 'Tempo 2 OFB 20', 25000, 20000, NULL, 30, 1, 11, NULL, 4, 'EPzoQC0bfr_produit-Tempo2-OFB-20.jpg', '3 mois', '<p>Montre OFB 20</p>', '8mgtyqp9po-produit-tempo-2-ofb-20', 1, 91, 'http://www.oraimo.com/product_detail-125.html', '2019-12-26 10:12:16', '2020-07-23 04:36:02', NULL),
(131, 'SoundPro | OBS-52D', 22000, 17000, NULL, 7, 1, 11, NULL, 24, 'qhwHXzMEyC_produit-SoundPro-OBS-52D.jpg', '3 mois', '<p>SPeaker</p>', 'r2qvysntas-produit-soundpro-obs-52d', 0, 10, 'http://www.oraimo.com/product_detail-152.html', '2019-12-26 12:06:37', '2020-07-22 19:34:59', NULL),
(132, 'Vortex | OEP-E23', 4000, 3000, NULL, 30, 1, 11, NULL, 3, 'yoGFBSW32i_produit-OEP-E23.jpg', '3 mois', '<p>Ecouteur filaire</p>', 'n4uthakbvn-produit-conch-oep-e10', 1, 45, 'http://www.oraimo.com/product_detail-101.html', '2019-12-26 12:25:07', '2020-07-23 00:25:51', NULL),
(133, 'Trumpet | OEP-E33', 6000, 4000, NULL, 20, 1, 11, NULL, 3, 'm5hHWkCY3t_produit-Trumpet-OEP-E33.jpg', '3', '<p>Ecouteur Filaire</p>', 'nvlaxzyabd-produit-trumpet-oep-e33', 1, 43, 'http://www.oraimo.com/product_detail-78.html', '2019-12-26 12:36:31', '2020-07-23 05:35:46', NULL),
(134, 'AirBuds | OEB-E99D', 25000, 21000, NULL, 30, 1, 11, NULL, 3, 'ZVU2urrtKX_produit-AirBuds-OEB-E99D.jpg', '3 mois', '<p>Airbuds bluetooth</p>', 'voobyredaw-produit-airbuds-oeb-e99d', 1, 53, 'http://www.oraimo.com/product_detail-144.html', '2019-12-26 12:42:17', '2020-07-23 01:25:33', NULL),
(135, 'Conch | OEP-E10', 3500, 2500, NULL, 30, 1, 11, NULL, 3, 't0She9rUAm_produit-OEP-E-10.jpg', '3 mois', '<p>Ecouteur filaire</p>', 't1sezisebd-produit-conch-oep-e10', 1, 54, 'http://www.oraimo.com/product_detail-147.html', '2019-12-26 13:01:10', '2020-07-23 03:13:28', NULL),
(136, 'Micro SD card 32 GB', 10000, 7000, NULL, 20, 1, 11, NULL, 22, 'KRTTN0EtrI_produit-SD-32-GB.jpg', '3 mois', '<p>Micro SD card 32 GB</p>', '1ryem7xfyp-produit-micro-sd-card-32-gb', 1, 24, 'http://www.oraimo.com/product_detail-41.html', '2019-12-26 13:13:55', '2020-07-23 01:02:41', NULL),
(137, 'Micro SD card 64 GB', 15000, 10000, NULL, 30, 1, 11, NULL, 22, 'i86e64TCWh_produit-SD-64-GB.jpg', '3', '<p>Micro SD 64 GB</p>', 'me4drd6qwe-produit-micro-sd-card-64-gb', 1, 76, 'http://www.oraimo.com/product_detail-41.html', '2019-12-26 13:20:17', '2020-07-22 23:30:45', NULL),
(138, 'Clé USB | OFD-32GB', 10000, 8000, NULL, 30, 1, 11, NULL, 22, 'F3TL6706PF_produit-OFD-32-GB.jpg', '3 mois', '<p>Cl&eacute; USB 32 GB</p>', 'vn3jxss1vm-produit-cle-usb-ofd-32gb', 1, 35, 'http://www.oraimo.com/product_detail-117.html', '2019-12-26 13:49:46', '2020-07-23 03:18:13', NULL),
(139, 'Halo | OEP-E21', 4000, 2900, NULL, 20, 1, 11, NULL, 3, 'prJHDK9v5n_produit-OEP-E-21.jpg', '3 mois', '<p>Ecouteur filaire</p>', 'jqmtr8qrm6-produit-halo-oep-e21', 1, 39, 'http://www.oraimo.com/product_detail-76.html', '2019-12-26 13:56:02', '2020-07-23 03:55:25', NULL),
(140, 'Cable Universel | OCD-X91', 4500, 3500, NULL, 20, 1, 11, NULL, 20, 'uekIEWv3Le_produit-OCD-X-91.jpg', '3 mois', '<p>Cable Universel 3 en 1</p>', 'wvju6jbz8o-produit-cable-universel-ocd-x91', 1, 33, 'https://egyptmarketo.com/product/usb-cable-oraimoocd-x91-black/', '2019-12-26 14:02:05', '2020-07-22 21:46:21', NULL),
(141, 'Tecno DroidPad 10', 125000, 124000, NULL, 20, 1, 4, NULL, 2, 'P83T7CgHt1_produit-Tecno-Driod-PAD-10.jpg', '3', '<p>Tecno DroidPaD 10 M&eacute;moire 16 GB et RAM 2GB</p>', 'dm1vforjco-produit-tecno-droidpad-10', 1, 23, NULL, '2020-01-03 09:24:37', '2020-06-04 20:02:49', '2020-06-04 20:02:49'),
(142, 'Vessel Pro | OCW-E93S', 6500, 4500, NULL, 30, 1, 11, NULL, 20, 'Vq941IlCAk_produit-OCW-93-S.jpg', '3 mois', '<p>Fast EU Charger</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.oraimo.com/product_detail-111.html\">Vessel Pro | OCW-E93S</a></li>\r\n</ul>', 'eh5k2suvq3-produit-vessel-pro-ocw-e93s', 1, 119, 'http://www.oraimo.com/product_detail-111.html', '2020-01-07 08:46:35', '2020-07-23 01:49:00', NULL),
(143, 'Firefly | OCW-E61D', 4500, 3500, NULL, 3, 1, 11, NULL, 20, 'QhCUVsWRYO_produit-OCW-E61D.jpg', '3 mois', '<p>2 USB EU Charger</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.oraimo.com/product_detail-83.html\">Firefly | OCW-E61D</a></li>\r\n</ul>', 'ncfwjvn101-produit-firefly-ocw-e61d', 1, 53, 'http://www.oraimo.com/product_detail-83.html', '2020-01-07 09:02:48', '2020-07-22 22:18:40', NULL),
(144, 'Bullet  OCC-31D', 5000, 3500, NULL, 30, 1, 11, NULL, 20, 'FU2xvUDu7u_produit-Bullet--OCC-31D.jpg', '3 mois', '<p>2USB Car Charger</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.oraimo.com/product_detail-53.html\">Bullet | OCC-31D</a></li>\r\n</ul>', 'o7boyjx8rh-produit-bullet-occ-31d', 1, 46, 'http://www.oraimo.com/product_detail-53.html', '2020-01-07 09:27:59', '2020-07-23 04:16:14', NULL),
(145, 'OCW-E32S', 3500, 2500, NULL, 30, 1, 11, NULL, 20, 'h3lAgD4jXj_produit-OCW-E32S.jpg', '3 mois', '<p>Efficient EU Charger OCW-E32S</p>', 'mbhosrilkl-produit-ocw-e32s', 1, 47, 'http://www.oraimo.com/product_detail-81.html', '2020-01-07 09:47:33', '2020-07-23 01:52:35', NULL),
(146, 'CU-60AR ＋ CD-52BR', 4500, 3000, NULL, 30, 1, 11, NULL, 20, 'mJtdO6brXW_produit-CU-60AR-＋-CD-52BR.jpg', '3 mois', '<p>2A Europe Charger Kit</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.oraimo.com/product_detail-31.html\">CU-60AR ＋ CD-52BR</a></li>\r\n</ul>', 'yssves9czn-produit-cu-60ar-cd-52br', 1, 30, 'http://www.oraimo.com/product_detail-31.html', '2020-01-07 10:04:50', '2020-07-22 14:16:00', NULL),
(147, 'HUAWEI P30 lite', 195000, 194000, NULL, 30, 1, 6, NULL, 1, 'iDcINAqHEu_produit-Produits-phone.jpg', '3', '<ul>\r\n	<li>Ecran FHD+ de 6,15 pouces</li>\r\n	<li>Appareil photo frontal de 24 MP</li>\r\n	<li>Triple cam&eacute;ra arri&egrave;re avec capteur de 48 MP</li>\r\n</ul>', 'dxjgaainny-produit-huawei-p30-lite', 0, 17, 'https://consumer.huawei.com/fr/phones/p30-lite/', '2020-01-08 08:14:50', '2020-07-17 20:20:59', NULL),
(148, 'HUAWEI Y6 2019', 94500, 85000, NULL, 30, 1, 6, NULL, 1, 'rranUZOIMh_produit-Huawei-Y6-2019.jpg', '3', '<ul>\r\n	<li>Ecran Dewdrop de 6,09&quot;</li>\r\n	<li>Cam&eacute;ra avant de 8 MP et arri&egrave;re de 13 MP</li>\r\n	<li>32 Go de stockage</li>\r\n	<li>2 GB de RAM</li>\r\n</ul>', 'oxhql206zv-produit-huawei-y6-2019', 1, 44, 'https://consumer.huawei.com/fr/phones/y6-2019/', '2020-01-08 08:26:30', '2020-07-22 22:14:41', NULL),
(149, 'HUAWEI Mate 20 Pro', 350000, 349000, NULL, 30, 1, 6, NULL, 1, 'k8K0TE0puP_produit-Huawei-mate20-pro.jpg', '3', '<ul>\r\n	<li>&Eacute;cran FullView HUAWEI OLED 6,39&#39;&#39;, 3120&nbsp;x&nbsp;1440, IP68</li>\r\n	<li>Processeur Kirin 980, Chargeur 40&nbsp;W HUAWEI SuperCharge</li>\r\n</ul>', 'srhxn1phxi-produit-huawei-mate-20-pro', 0, 30, 'https://consumer.huawei.com/fr/phones/mate20-pro/', '2020-01-08 08:47:52', '2020-07-22 21:39:18', NULL),
(150, 'HUAWEI Y9 Prime 2019', 165000, 152000, NULL, 20, 1, 6, NULL, 1, '49EQIyA7Nf_produit-Huawei-Y-9-Prime-2019.jpg', '3', '<h1>Huawei Y9 Prime 2019</h1>\r\n\r\n<ul>\r\n	<li>128 GB-4GB RAM</li>\r\n	<li>Cam&eacute;ra: 16, 8 et 2MP</li>\r\n	<li>Selfie 16</li>\r\n</ul>', 'mnvlmevuoa-produit-huawei-y9-prime-2019', 1, 26, 'https://www.amazon.com/Display-Cameras-4000mAh-Battery-Unlocked/dp/B07VYP6VLS?th=1', '2020-01-09 07:06:55', '2020-07-22 05:41:50', NULL),
(151, 'Infinix S4', 100000, 99000, NULL, 30, 1, 9, NULL, 1, 'eD7ZJSCN67_produit-Infinix-S4.jpg', '3', '<h1>Infinix S4&nbsp;&ndash; 32 Go M&eacute;moire Rom / 3 Go M&eacute;moire Ram</h1>', '5wz3sc6itd-produit-infinix-s4', 0, 18, 'http://www.infinixmobility.com/old/index.php?id=4037', '2020-01-09 07:29:54', '2020-07-15 00:52:11', NULL),
(152, 'Samsung Galaxie A2 Core 16 GB', 65000, 59900, NULL, 30, 1, 1, NULL, 1, '4S0CTgZhf2_produit-Samsung-A-2-core.jpg', '3 mois', '<h1>Galaxy A2 Core</h1>\r\n\r\n<p><strong>SM-A260FZBEXFE</strong></p>\r\n\r\n<p>Plus de confort avec l&rsquo;&eacute;cran largeCon&ccedil;u pour des performances optimalesPlus de possibilit&eacute;s</p>\r\n\r\n<ul>\r\n	<li>16 GB&nbsp; ROM</li>\r\n	<li>1 GB RAM</li>\r\n</ul>', 'o3lxnisqje-produit-samsung-galaxie-a2-core', 1, 107, 'https://www.samsung.com/africa_fr/smartphones/galaxy-a2-core-a260/SM-A260FZBEXFE/', '2020-01-09 08:03:29', '2020-07-23 04:06:49', NULL),
(153, 'Samsung GalaxY J4 Core', 82000, 81000, NULL, 30, 1, 1, NULL, 1, 'MzxxlWCvr6_produit-Produits-phone.jpg', '3', '<h1>Galaxy J4 Core (Dual Sim)</h1>\r\n\r\n<p><strong>SM-J410FZDDXFE</strong></p>\r\n\r\n<p>Plus de confort avec l&rsquo;&eacute;cran largeUne autonomie exceptionnelleCon&ccedil;u pour des performances optimales</p>', 'c8shsiimsw-produit-samsung-galaxy-j4-core', 0, 10, 'https://www.samsung.com/africa_fr/smartphones/galaxy-j4-sm-j410f-dualsim/SM-J410FZDDXFE/', '2020-01-09 08:21:50', '2020-07-20 13:47:57', NULL),
(154, 'Key | OCD-M021', 2900, 1900, NULL, 30, 1, 11, NULL, 20, 'Ba8HVNcpdX_produit-Porte-clé.jpg', '3', '<p>Key Ring Cable</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.oraimo.com/product_detail-96.html\">Key | OCD-M021</a></li>\r\n</ul>', '7sppntc54n-produit-key-ocd-m021', 1, 63, 'http://www.oraimo.com/product_detail-96.html', '2020-01-10 22:54:48', '2020-07-23 01:19:50', NULL),
(155, 'OTG Flash Drive 32 GB', 9900, 8900, NULL, 30, 1, 11, NULL, 22, 'rXVO1H09ec_produit-OTG-Flash-Drive-32-GB.jpg', '3', '<p>OTG Flash Drive</p>', 'lkfulaly6q-produit-otg-flash-drive-32-gb', 0, 24, 'http://www.oraimo.com/product_detail-40.html', '2020-01-10 23:01:17', '2020-07-23 03:20:24', NULL),
(156, 'Infinix SMART 3 Plus', 79000, 78000, NULL, 30, 1, 9, NULL, 1, 'aGCjQcDCIg_produit-Produits-phone.jpg', '3', '<p>Infinix SMART 3 Plus</p>', 'hg249dowmo-produit-infinix-smart-3-plus', 0, 40, 'http://www.infinixmobility.com/old/index.php?id=4061', '2020-01-11 22:56:32', '2020-07-22 09:35:16', NULL),
(157, 'Infinix HOT 8', 89000, 88000, NULL, 30, 1, 9, NULL, 1, 'JPzd2740Yb_produit-Infinix-Hot-8.jpg', '3', '<p><strong><a href=\"http://phonesdata.com/fr/smartphones/infinix/hot-8-5458286/\">Infinix Hot 8</a></strong>&nbsp;est un smartphone de 2019 ans pesant 179 grammes et mesurant 165 x 76.3 x 8.7 mm. Avec un &eacute;cran de 6.52 pouces, un appareil photo 13 MP et une m&eacute;moire 32GB 2GB RAM, 64GB 4GB RAM. Son processeur est Quad-core 2.0 GHz Cortex-A53<br />\r\nOcta-core 1.8 GHz Cortex-A53</p>', 'kgx1rd6sad-produit-infinix-hot-8', 0, 40, 'http://www.infinixmobility.com/smartphone/hot-8', '2020-01-12 10:10:17', '2020-07-23 01:50:40', NULL),
(158, 'Infinix S5 64 GB', 105000, 104000, NULL, 30, 1, 9, NULL, 1, 'i9UoRCqMRI_produit-Infinix-S5-64-GB.jpg', '3', '<p>Infinx S5 64 GB</p>', 'ft0ekqudnd-produit-infinix-s5-64-gb', 0, 29, 'http://www.infinixmobility.com/smartphone/s5', '2020-01-12 16:31:14', '2020-07-13 05:34:44', NULL),
(159, 'Infinix S5 32 GB', 95000, 94000, NULL, 30, 1, 9, NULL, 1, 'thLFHdcLEy_produit-S5-32GB.jpg', '3', '<p>Infinix S5 32 GB</p>', 'it0xwagsmg-produit-infinix-s5-32-gb', 0, 21, 'http://www.infinixmobility.com/smartphone/s5', '2020-01-12 16:32:27', '2020-07-23 02:50:51', NULL),
(160, 'iPhone 11 Pro Max 64 GB', 856000, 855000, NULL, 30, 1, 15, NULL, 1, 'Hjhu9RE7ZA_produit-1-Iphone-11-Pro-Max-64-GB.jpg', '3', '<p>Apple iPhone 11 Pro Max 64 Go 6.5&quot; Argent</p>', 'qajfs2zpiw-produit-iphone-11-pro-max-64-gb', 0, 13, 'https://www.apple.com/fr/iphone-11-pro/specs/', '2020-01-13 10:26:15', '2020-07-18 20:20:47', NULL),
(161, 'iPhone XS 64 GB', 556400, 555400, NULL, 30, 1, 15, NULL, 1, 'KZOgTtMNRe_produit-iPhone-XS-64-Go.jpg', '3', '<p>Apple iPhone XS 64 Go 5,8</p>', 'cwkdt4akvy-produit-iphone-xs', 0, 15, 'https://www.apple.com/fr/iphone', '2020-01-13 23:25:32', '2020-07-21 14:28:36', NULL),
(162, 'iPhone XS Max 64 GB', 727600, 726600, NULL, 30, 1, 15, NULL, 1, 'pseu5OjL4W_produit-iPhone-XS-Max-64-GB.jpg', '3', '<p>Apple iPhone XS Max 64 Go 6,5&quot; Or</p>', 'd4hjwgi90x-produit-iphone-xs-max-64-gb', 0, 10, 'https://www.apple.com/fr/iphone/compare/', '2020-01-13 23:36:50', '2020-07-23 03:56:04', NULL),
(163, 'iPhone XS Max 256 Go', 791800, 790800, NULL, 30, 1, 15, NULL, 1, 'rJS1SAuHLn_produit-Produits-phone.jpg', '3', '<p>Apple iPhone XS Max 256 Go 6,5&quot;</p>', 'kxhpypzt29-produit-iphone-xs-max-256-go', 0, 8, 'https://www.apple.com/fr/iphone/compare/', '2020-01-13 23:47:51', '2020-07-18 19:33:07', NULL),
(164, 'iPhone XS 256 Go', 674100, 673100, NULL, 30, 1, 15, NULL, 1, 'jxoNEHH6Al_produit-iPhone-XS-256.jpg', '3', '<p>Apple iPhone XS 256 Go 5,8&quot;</p>', '5ugn4bhh7s-produit-iphone-xs-256-go', 0, 10, 'https://www.apple.com/fr/iphone/compare/', '2020-01-13 23:55:52', '2020-07-18 00:56:17', NULL),
(165, 'iPhone X 64 Go', 385000, 370000, NULL, 30, 1, 15, NULL, 1, 'V0uFDdJayl_produit-Apple-iPhone-X-64-Go-5-8-Argent.jpg', '3', '<p>Apple iPhone X 64 Go 5,8&quot;</p>', 'vdxmgzuse5-produit-iphone-x-64-go', 1, 16, 'https://www.apple.com/fr/iphone/compare/', '2020-01-14 00:05:18', '2020-07-21 16:05:54', NULL),
(166, 'iPhone X 256 Go', 399000, 385000, NULL, 30, 1, 15, NULL, 1, 'RaIu8QdgzV_produit-Apple-iPhone-X-256-Go-5-8-Gris-Sideral.jpg', '3', '<p>Apple iPhone X 256 Go 5,8&quot;&nbsp;</p>', 'pmhwzot3wm-produit-iphone-x-256-go', 0, 11, 'https://www.apple.com/fr/iphone/compare/', '2020-01-14 00:14:01', '2020-07-23 01:30:47', NULL),
(167, 'iPhone 11 64 Go', 572450, 571450, NULL, 30, 1, 15, NULL, 1, 'gOC5Etjwm5_produit-Apple-iPhone-11-64-Go-6-1-Noir.jpg', '3', '<p>Apple iPhone 11 64 Go 6.1&quot;</p>', 'zloq3lzxwp-produit-iphone-11-64-go', 0, 7, 'https://www.apple.com/fr/iphone/compare/', '2020-01-14 00:48:38', '2020-07-20 15:14:01', NULL),
(168, 'iPhone 11 128 Go', 609900, 608900, NULL, 30, 1, 15, NULL, 1, 'Ym7Ebydqxw_produit-11-128-Go.jpg', '3', '<p>Apple iPhone 11 128 Go 6.1&quot;</p>', 'n6e1o9dvv3-produit-iphone-11-128-go', 0, 17, 'https://www.apple.com/fr/iphone/compare/', '2020-01-14 07:33:30', '2020-07-22 14:27:05', NULL),
(169, 'iPhone 11 Pro 64GB', 813200, 812200, NULL, 30, 1, 15, NULL, 1, 'E59yiHxrfE_produit-iPhone-11-pro-64.jpg', '3', '<p>Apple iPhone 11 Pro 64 Go 5.8&quot;</p>', 'kwy6u7lpfn-produit-11-pro-64gb', 0, 14, 'https://www.apple.com/fr/iphone/compare/', '2020-01-14 07:48:58', '2020-07-23 04:34:25', NULL),
(170, 'iPhone 11 Pro 256 Go', 866700, 865700, NULL, 39, 1, 15, NULL, 1, 'ip8FZNpVlw_produit-4-11-pro-256-Go.jpg', '3', '<p>Apple iPhone 11 Pro (256&nbsp;Go)</p>', 'qsz6dqvixy-produit-iphone-11-pro-256-go', 0, 4, NULL, '2020-01-22 08:10:52', '2020-07-02 20:14:25', NULL),
(171, 'iPhone 11 Pro Max 256 Go', 984400, 983400, NULL, 30, 1, 15, NULL, 1, 'D1GpgaKhL8_produit-11-pro-max-256.jpg', '3', '<p>iPhone 11 Pro Max 256 Go</p>', 'unx50jflzj-produit-iphone-11-pro-max-256-go', 0, 10, 'https://www.apple.com/fr/shop/buy-iphone/iphone-11-pro/%C3%A9cran-de-6,5-pouces-256go-gris-sid%C3%A9ral', '2020-01-22 08:25:18', '2020-07-22 22:30:30', NULL),
(172, 'iPhone XR 64 Go', 513600, 512600, NULL, 20, 1, 15, NULL, 1, '7GSqqTeLM7_produit-XR-64-GB.jpg', '3', '<h1>Apple iPhone&nbsp;XR (64Go)</h1>', 'kqksr8ncbb-produit-iphone-xr-64-go', 0, 11, 'https://www.apple.com/fr/shop/buy-iphone/iphone-xr/%C3%A9cran-de-6,1-pouces-64go-noir', '2020-01-22 08:50:37', '2020-07-19 13:15:55', NULL),
(173, 'iPhone XR 128 Go', 535000, 534000, NULL, 30, 1, 15, NULL, 1, 'hdB4MNyj9U_produit-2-XR-128-GB.jpg', '3', '<p>Apple iPhone&nbsp;XR (128 GO)&nbsp;</p>', 'jzx1vjfaa4-produit-iphone-xr-128-go', 0, 7, 'https://www.apple.com/fr/shop/buy-iphone/iphone-xr/%C3%A9cran-de-6,1-pouces-128go-noir', '2020-01-22 09:19:48', '2020-07-17 19:23:07', NULL),
(174, 'iPhone XR 256', 642000, 641000, NULL, 30, 1, 15, NULL, 1, '5Gxa5Z7WWO_produit-XR-256-Go.jpg', '3', '<p>Apple iPhone XR 256 Go</p>', 'cn8dkh9ww6-produit-iphone-xr-256', 0, 8, NULL, '2020-01-22 10:56:15', '2020-07-19 16:56:20', NULL),
(175, 'iPhone 8 64 Go', 321000, 320000, NULL, 20, 1, 15, NULL, 1, 'N5Em5JxiSu_produit-1-iPhone-8-64-GO.jpg', '3', '<p>Apple iPhone 8 64 Go</p>', 'ntgzpfgvnn-produit-iphone-8-64-go', 0, 3, 'https://www.apple.com/fr/shop/buy-iphone/iphone-8/%C3%A9cran-4,7-pouces-64go-gris-sid%C3%A9ral', '2020-01-22 13:30:37', '2020-07-03 08:35:25', NULL),
(176, 'iPhone 8 +  64 Go', 310000, 279000, NULL, 20, 1, 15, NULL, 1, 'YP0kZ8eBy0_produit-ihpone-8-plus-64-GB.jpg', '3', '<p>Appele iPhone 8 Plus (64 Go)</p>', '4ojaoirvuv-produit-iphone-8-64-go', 1, 13, NULL, '2020-01-22 13:42:43', '2020-07-22 15:46:59', NULL),
(177, 'iPhone 8 + 256 Go', 428000, 427000, NULL, 7, 1, 15, NULL, 1, 'ZqmJ0EZ8iQ_produit-ihpone-8-plus-64-GB.jpg', '3', '<p>Apple iPhone 8 plus 256 Go</p>', 'mjxqvxy8do-produit-iphone-8-256-go', 0, 11, NULL, '2020-01-22 13:46:41', '2020-07-17 12:28:47', NULL),
(178, 'Iphone 7 Plus 32 GB', 283550, 282550, NULL, 20, 1, 15, NULL, 1, '3QHmuC6f9r_produit-Produits-phone.jpg', '3', '<p>Apple iPhone 7 Plus 32 Go</p>', 'yktxt6b4u7-produit-iphone-7-plus-32-gb', 0, 21, NULL, '2020-01-22 14:35:28', '2020-07-20 12:37:47', NULL),
(179, 'Iphone 7 Plus 128 GB', 299000, 279000, NULL, 20, 1, 15, NULL, 1, 'qkO07JyRaO_produit-iphone-7-plus-32-GB.jpg', '3', '<p>Apple iPhone 7 plus (128 Go)</p>', 'xawaif2w0n-produit-iphone-7-plus-128-gb', 1, 17, NULL, '2020-01-23 05:17:57', '2020-07-22 17:00:53', NULL),
(180, 'iphone 7 32GB', 199000, 185000, NULL, 20, 1, 15, NULL, 1, 'LXbPZlHpvs_produit-Produits-phone.jpg', '3', '<p>Apple iPhone 7 (32 Gbo)</p>', 'u2wk2eiuid-produit-iphone-7-32gb', 1, 21, NULL, '2020-01-23 05:25:28', '2020-07-22 02:20:00', NULL),
(181, 'iphone 7 S 32GB', 198000, 197000, NULL, 20, 1, 15, NULL, 1, 'Wz3d97cSOc_produit-Produits-phone.jpg', '3', '<p>Apple iPhone 7 S (32 Go)</p>', 'ku07iktkhw-produit-iphone-7-s-32gb', 0, 18, NULL, '2020-01-23 05:27:38', '2020-07-22 02:15:32', NULL),
(182, 'Iphone 6 16 GB :', 110000, 109000, NULL, 30, 1, 15, NULL, 1, 'XrtLI58kbh_produit-iPhone-6-16-GB.jpg', '3', '<p>Apple iPhone 6 (16 Go)</p>', 'qply3wir5t-produit-iphone-6-16-gb', 0, 15, NULL, '2020-01-23 06:04:22', '2020-07-21 16:33:07', NULL),
(183, 'Iphone 6 64 GB', 121000, 120000, NULL, 20, 1, 15, NULL, 1, '6kudFqnlSE_produit-2-iphone-6-64-GB.jpg', '3', '<p>Apple iPhone 6 (64 Go)</p>', '06f1gmfy1w-produit-iphone-6-64-gb', 0, 16, NULL, '2020-01-23 06:27:26', '2020-07-19 07:18:29', NULL),
(184, 'Iphone 6 S Plus 64 G', 203500, 202500, NULL, 20, 1, 15, NULL, 1, 'LJgsSesOs2_produit-iphone-6S-Plus-64-GB.jpg', '3', '<p>Apple iPhone 6 S Plus (64 Go)</p>', 'ehw33qhnlg-produit-iphone-6-s-plus-64-g', 0, 12, NULL, '2020-01-23 06:41:42', '2020-07-21 00:42:43', NULL),
(185, 'Iphone 6S 128 GB', 220000, 219000, NULL, 20, 1, 15, NULL, 1, 'pSgUqrrklK_produit-1-iphone-6S-Plus-64-GB.jpg', '3', '<p>Apple iPhone 6 S (128 Go)</p>', 'wdpmx1jc1z-produit-iphone-6s-128-gb', 0, 15, NULL, '2020-01-23 06:43:57', '2020-07-23 03:55:21', NULL),
(186, 'Iphone 6S 64 GB', 187000, 186000, NULL, 20, 1, 15, NULL, 1, '5LOjGRVJ4m_produit-3-iphone-6S-Plus-64-GB.jpg', '3', '<p>Apple iPhone 6S (64 Go)</p>', 'z39lzfi8uy-produit-iphone-6s-64-gb', 0, 16, NULL, '2020-01-23 06:46:10', '2020-07-23 01:05:41', NULL),
(187, 'Iphone 6 Plus 64 GB', 129000, 122000, NULL, 20, 1, 15, NULL, 1, '51QN28J1aK_produit-1-iphone-6-Plus-64-Go.jpg', '3', '<p>Apple iPhone 6 Plus (64Go)</p>', 'pmj9h0z6lk-produit-iphone-6-plus-64-gb', 1, 27, NULL, '2020-01-23 07:03:39', '2020-07-23 04:28:38', NULL),
(188, 'Iphone 6 Plus 16 GB', 115000, 110000, NULL, 20, 1, 15, NULL, 1, '9M7QqzGTHv_produit-Produits-phone.jpg', '3', '<p>Apple iPhone 6 Plus (16 Go)</p>', 'dlnz19sepu-produit-iphone-6-plus-16-gb', 1, 23, NULL, '2020-01-23 07:05:18', '2020-07-23 01:02:35', NULL),
(189, 'Router', 39900, 38900, NULL, 30, 1, 10, NULL, 4, 'gFuLswtilt_produit-Router-0.jpg', '3', '<p>Routeur Alcatel 4G</p>', 'n0wokuztil-produit-router', 0, 75, NULL, '2020-01-29 13:01:32', '2020-07-23 02:20:55', NULL),
(190, 'Samsung Galaxie A2 Core 8 GB', 49900, 48900, NULL, 30, 1, 1, NULL, 1, '3AUmWxAbUr_produit-Samsung-A-2-core.jpg', '3 mois', '<p>Le&nbsp;<strong>Samsung Galaxy A2 Core SM-A260G/DS 8Go</strong>&nbsp;est un bon&nbsp;<strong>portable Android</strong>&nbsp;avec processeur de 1.6Ghz Octa-Core qui permet d&#39;ex&eacute;cuter des jeux et des applications lourdes.</p>\r\n\r\n<p>Un avantage du Samsung Galaxy A2 Core SM-A260G/DS 8Go est la possibilit&eacute; d&#39;utiliser deux op&eacute;rateurs de t&eacute;l&eacute;phonie Mobile.Un appareil&nbsp;<strong>Double-Sim</strong>&nbsp;avec entr&eacute;e pour deux cartes SIM.</p>\r\n\r\n<p>Bonne connectivit&eacute; de cet appareil qui dispose de Bluetooth version 4.2 avec A2DP, WiFi 802.11 b/g/n (2.4Ghz), mais ne poss&egrave;de pas la technologie NFC.</p>', 'mmwobfwf7m-produit-samsung-galaxie-a2-core-8-gb', 0, 38, NULL, '2020-01-29 22:22:11', '2020-07-22 23:22:03', NULL),
(191, 'Samsung Galaxie M 10', 96000, 95000, NULL, 30, 1, 1, NULL, 1, 'QvXH9Jb8E0_produit-Produits-phone.jpg', '3', '<p>Samsung Galaxie M10</p>', 'liotmkekth-produit-samsung-galaxie-m-10', 0, 36, NULL, '2020-01-29 22:33:00', '2020-07-22 20:41:44', NULL),
(192, 'Samsung Galaxie M 20', 114000, 113000, NULL, 30, 1, 1, NULL, 1, 'O2VnopAxJQ_produit-SG-M20.jpg', '3', '<h1>Galaxy M20 (Dual Sim)</h1>\r\n\r\n<p><strong>SM-M205FDADMWD</strong></p>\r\n\r\n<p>Double Capteur photoAffichage immersifUne autonomie longue dur&eacute;e</p>\r\n\r\n<p>COULEUR</p>', '91lxkkomrh-produit-samsung-galaxie-m-20', 0, 25, 'https://www.samsung.com/n_africa/smartphones/galaxy-m20-m205-dual-sim/SM-M205FDADMWD/', '2020-01-29 22:45:34', '2020-07-23 00:44:48', NULL),
(193, 'Samsung Galaxie M 30', 162000, 161000, NULL, 30, 1, 1, NULL, 1, 'YFCHoLr2nm_produit-SG-M30.jpg', '3', '<p><strong><a href=\"http://phonesdata.com/fr/smartphones/samsung/galaxy-m30-5717/\">Samsung Galaxy M30</a></strong>&nbsp;est un smartphone de 2019 ans pesant 0 grammes et mesurant 159 x 75.1 x 8.4 mm. Avec un &eacute;cran de 6.4 pouces, un appareil photo 13 MP et une m&eacute;moire 128 GB, 6 GB RAM 64 GB, 4 GB RAM. Son processeur est Octa-core (2x1.8 GHz Cortex-A73 &amp; 6x1.6 GHz Cortex-A53)</p>', 'kxeqsqd6j4-produit-samsung-galaxie-m-30', 0, 33, NULL, '2020-01-29 22:54:06', '2020-07-22 15:29:13', NULL),
(194, 'Samsung Galaxie Note 8', 281750, 280750, NULL, 30, 1, 1, NULL, 1, 'IuJADcjSCK_produit-SG-Note-8.jpg', '3', '<p>Le Samsung Galaxy Note 8 est un smartphone sorti en 2017 faisant suite au Galaxy Note 7. Il dispose d&#39;un &eacute;cran de 6,3 pouces avec une d&eacute;finition de 3840 x 2160 pixels, d&#39;un stylet inclus dans l&#39;&eacute;cran et d&#39;un capteur d&#39;iris.</p>', 'j39jzxvp81-produit-samsung-galaxie-note-8', 0, 21, 'samsung.com/africa_fr/smartphones/galaxy-note8/', '2020-01-29 23:05:09', '2020-07-21 15:06:12', NULL),
(195, 'Samsung Galaxie Note 9', 356500, 355500, NULL, 30, 1, 1, NULL, 1, 'ZLyAtYKlyd_produit-Note-9.jpg', '3', '<p>Galaxy&nbsp;Note a toujours mis la technologie puissante entre les mains de ceux qui en demandent plus. Maintenant, le tout nouveau Galaxy&nbsp;Note9 surpasse m&ecirc;me ces grandes attentes, en se concentrant sur ce qui compte le plus dans le monde mobile d&#39;aujourd&#39;hui.</p>', 'z6karemhxz-produit-samsung-galaxie-note-9', 0, 14, 'https://www.samsung.com/africa_fr/smartphones/galaxy-note9/', '2020-01-29 23:15:28', '2020-07-22 12:14:03', NULL),
(196, 'Samsung Galaxie Note 10 + 5G', 748000, 747000, NULL, 30, 1, 1, NULL, 1, 'KjHT5YJGPW_produit-Note-10-Plus-5G.jpg', '3', '<p>Le Samsung Galaxy Note 10 + 5G est un smartphone alliant style et solidit&eacute;. Son &eacute;cran 6,8&rsquo;&rsquo; aux bords incurv&eacute;s, son choix de coloris entre le noir et l&rsquo;argent&eacute;, lui conf&egrave;re une allure haut de gamme ainsi qu&rsquo;une prise en mains optimale. Cerise sur le g&acirc;teau, sa certification IP68 pour l&rsquo;&eacute;tanch&eacute;it&eacute; et le Gorilla Glass 6 pour la r&eacute;sistance de son verre lui assure une solidit&eacute; sans faille.</p>', 'rgyyfkzgwx-produit-samsung-galaxie-note-10-5g', 0, 22, 'https://www.samsung.com/africa_fr/smartphones/galaxy-note10/', '2020-01-29 23:28:30', '2020-07-23 01:15:55', NULL),
(197, 'Samsung Galaxie S 9 +', 339250, 338250, NULL, 30, 1, 1, NULL, 1, 'ov5ZYeLJqU_produit-SG-S9+.jpg', '3', '<p>Le Samsung Galaxy S9+ a &eacute;t&eacute; annonc&eacute; le 25 f&eacute;vrier 2018 par Samsung. Il dispose d&#39;un &eacute;cran 6,2 pouces Super Amoled HDR, d&#39;un SoC Exynos 9810 et d&#39;un double capteur photo arri&egrave;re stabilis&eacute; et une batterie de 3500 mAh.</p>', 'zzudkdbtvn-produit-samsung-galaxie-s-9', 0, 26, 'https://www.samsung.com/africa_fr/smartphones/galaxy-s9/buy/senegal/', '2020-01-29 23:43:03', '2020-07-19 05:15:11', NULL),
(198, 'Itel S15 32 Go', 69900, 65000, NULL, 0, 1, 5, NULL, 1, 'VPf1806kYS_produit-Itel-S15.jpg', '3', '<p>Itel S15 32 Go</p>', '3tl8bg6lmb-produit-itel-s15-32-go', 0, 143, NULL, '2020-01-30 08:47:06', '2020-07-22 14:25:10', NULL),
(199, 'Tecno Spark Go', 64900, 63900, NULL, 30, 1, 4, NULL, 1, 'L4uqa5GsJD_produit-Spark-Go.jpg', '3', '<p><strong><a href=\"http://phonesdata.com/fr/smartphones/tecno/spark-go-5458320/\">TECNO Spark Go</a></strong>&nbsp;est un smartphone de 2019 ans pesant 174 grammes et mesurant 156.1 x 75 x 9.2 mm. Avec un &eacute;cran de 6.1 pouces, un appareil photo 8 MP et une m&eacute;moire 16GB 1GB RAM, 16GB 2GB RAM. Son processeur est Quad-core 2.0 GHz Cortex-A53</p>', '0pd7ti3btk-produit-tecno-spark-go', 1, 151, 'https://www.gsmarena.com/tecno_spark_go-9871.php', '2020-02-13 08:01:42', '2020-07-23 03:32:39', NULL),
(200, 'Samsung Galaxy TAB A', 119000, 118000, NULL, 30, 1, 1, NULL, 2, 'RV4Y7q343N_produit-Samsung-Tab-A.jpg', '3', '<p>Avec sa r&eacute;solution d&rsquo;image &eacute;poustouflante de r&eacute;alisme, la Galaxy Tab A est un r&eacute;gal pour les yeux. Son &eacute;cran WUXGA de 10,1 pouces vous permet de profiter de vos films avec une image exceptionnelle de pr&eacute;cision et de vivre une exp&eacute;rience de jeu immersive.</p>', 'an8g8wys3i-produit-samsung-galaxy-tab-a', 0, 58, 'https://www.samsung.com/fr/tablets/galaxy-tab-a/', '2020-02-13 08:10:27', '2020-07-22 10:48:32', NULL),
(201, 'Tecno T454', 15000, 14000, NULL, 30, 1, 4, NULL, 6, '4yya4xNvDN_produit-Tecno-T454.jpg', '3', '<p>Tecno T454 avec Double SIM</p>', 'z9rknxvcni-produit-tecno-t454', 0, 30, NULL, '2020-02-13 08:20:18', '2020-07-20 06:03:30', NULL),
(202, 'Tecno T372', 15000, 14000, NULL, 30, 1, 4, NULL, 6, 'CZhNXsagGj_produit-T372.jpg', '3', '<p><a href=\"https://rozetka.com.ua/160700212/p160700212/\" target=\"_blank\">Tecno T372 Triple Sim</a></p>', 'r8po92mpzw-produit-tecno-t372', 0, 22, NULL, '2020-02-13 08:25:26', '2020-07-22 04:16:33', NULL);
INSERT INTO `kdm_produits` (`id`, `nom`, `prix`, `prix_reduit`, `prix_achat`, `quantite`, `shop`, `marque`, `reference`, `categorie`, `image`, `garantie`, `description`, `slug`, `active`, `visite`, `lien_details_constructeur`, `created_at`, `updated_at`, `deleted_at`) VALUES
(203, 'Tecno POP 3', 55000, 48000, NULL, 30, 1, 4, NULL, 1, 'NkRQNIW4XP_produit-Tecno-POP-3.jpg', '3 mois', '<p>Tecno Pop 3 fonctionne avec Android OS v8.1 (Oreo) sortie de l&rsquo;emballage. Il vient avec une batterie Li-Po 3500 mAh. Il dispose d&rsquo;un &eacute;cran IPS 5,7 pouces avec une r&eacute;solution 480 x 960 px. La technologie IPS est l&rsquo;une des technologies LCD les plus &eacute;minentes dans le monde.</p>', '4nmcroiwwr-produit-tecno-pop-3', 1, 120, 'https://www.tecno-mobile.com/tg/phones/product-detail/product/pop-3-3/', '2020-02-17 09:31:57', '2020-07-23 05:39:33', NULL),
(204, 'Huawei Y5 2019', 80000, 77000, 7900, 20, 1, 6, NULL, 1, 'eGzHHETgwa_produit-Huawei-Y9.jpg', '3 Mois', '<p><strong><a href=\"http://phonesdata.com/fr/smartphones/huawei/y5-2019-5773/\">Huawei Y5 (2019)</a></strong>&nbsp;est un smartphone de 2019 ans pesant 146 grammes et mesurant 147.1 x 70.8 x 8.5 mm. Avec un &eacute;cran de 5.71 pouces, un appareil photo 13 MP et une m&eacute;moire 16/32 GB, 2 GB RAM. Son processeur est Quad-core 2.0 GHz Cortex-A53</p>', 'spw8umzt3w-produit-huawei-y5-2019', 1, 149, 'https://consumer.huawei.com/fr/phones/y5-2019/specs/', '2020-02-27 22:05:55', '2020-07-23 04:34:28', NULL),
(205, 'Tecno Camon 15', 129900, 115000, NULL, 30, 1, 4, NULL, 1, '482rpfngNG_produit-Camon-15.jpg', '3 Mois', '<p><strong><a href=\"http://phonesdata.com/fr/smartphones/tecno/camon-15-5458549/\">TECNO Camon 15</a></strong>&nbsp;est un smartphone de 2020 . Avec un &eacute;cran de 6.55 pouces, un appareil photo 48 MP et une m&eacute;moire 64GB 4GB RAM. Son syst&egrave;me d&#39;exploitation embarque&nbsp;Android 10.0; HIOS 6.0</p>', 'myimylwpgy-produit-tecno-camon-15', 1, 125, 'https://www.gsmarena.com/tecno_camon_15-10093.php', '2020-03-12 11:35:38', '2020-07-23 02:37:20', NULL),
(206, 'Itel A 56', 55000, 48000, NULL, 30, 1, 5, NULL, 1, '0e6QvGUtGV_produit-Itel-A56.jpg', '3 Mois', '<p><strong>Le itel A56, le tous nouveau smartphone de la marque iTel Mobile d&eacute;barque en Afrique, tous ce qu&rsquo;il faut savoir fichet technique caract&eacute;ristique et prix.</strong></p>\r\n\r\n<p>C&rsquo;est le tout nouveau smartphone de itel, le itel A56 est le dernier ajout &agrave; la gamme itel s&eacute;rie A, et le premier de sa cat&eacute;gorie &agrave; embarquer une batterie int&eacute;gr&eacute;e et un &eacute;cran plus grand par rapport &agrave; ses pr&eacute;d&eacute;cesseurs.</p>', 'fsbyyndgg6-produit-itel-a-56', 1, 160, 'https://www.itel-mobile.com/fr/produits/smartphone/a-basic/a56/', '2020-04-04 08:39:48', '2020-07-23 03:55:23', NULL),
(207, 'Tecno Camon 15 Premier', 185000, 175000, 200000, 20, 1, 4, NULL, 1, 'ROIDwUTNIA_produit-Tecno-Camon-15-Premier.jpg', '3 Mois', '<p><strong><a href=\"https://phonesdata.com/fr/smartphones/tecno/camon-15-premier-5458649/\">TECNO Camon 15 Premier</a></strong>&nbsp;est un smartphone de 2020 ans pesant 203 grammes et mesurant 163.3 x 77.7 x 9.1 mm. Avec un &eacute;cran de 6.6 pouces, un appareil photo 64 MP et une m&eacute;moire 128GB 6GB RAM. Son processeur est Octa-core (4x2.35 GHz Cortex-A53 &amp; 4x1.8 GHz Cortex-A53).</p>', 'lfr1wzndzz-produit-tecno-camon-15-premier', 1, 89, 'https://www.tecno-mobile.com/ci/phones/product-detail/product/camon-15-premier-2/', '2020-06-05 06:41:11', '2020-07-23 01:51:36', NULL),
(208, 'Itel P 36', 65000, 59900, 70000, 30, 1, 5, NULL, 1, 'LxDJxn8apT_produit-Itel-P36.jpg', '3 Mois', '<h1>Itel P36</h1>\r\n\r\n<ul>\r\n	<li>\r\n	<h1>6.5&rdquo; HD,</h1>\r\n	</li>\r\n	<li>\r\n	<h1>1GB RAM</h1>\r\n	</li>\r\n	<li>\r\n	<h1>16GB ROM</h1>\r\n	</li>\r\n	<li>\r\n	<h1>5000 mA</h1>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'lflhpifdrd-produit-itel-p-36', 1, 114, NULL, '2020-06-22 08:27:28', '2020-07-23 05:38:51', NULL),
(209, 'Tecno Spark 5 Air', 89900, 88000, 95000, 20, 1, 4, NULL, 1, 'fqTm2rfEN7_produit-Spark-5-Air.jpg', '3 Mois', '<p>Le smartphone <strong>Tecno Spark 5 Air est&nbsp;</strong>mis en vente en 2020. Il marche &agrave; un jeu de puces Mediatek Helio P22 MT6762, 2 GB de RAM et 32 GB de stockage interne.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Le Tecno Spark 5 Air fonctionne avec Android OS v10.0 sortie de l&#39;emballage. Il vient avec une batterie Li-Ion 5000 mAh, non-amovible. Il dispose d&#39;un &eacute;cran IPS 7 pouces avec une r&eacute;solution 720 x 1640 px. La technologie IPS est l&#39;une des technologies LCD les plus &eacute;minentes dans le monde.</p>', '3gxe00i4ij-produit-spark-5-airjpg', 1, 60, 'https://www.tecno-mobile.com/bf/telephones/product-detail/product/spark-5-air-1/#/', '2020-07-09 18:41:11', '2020-07-22 22:49:44', NULL),
(210, 'Tecno Spark 5', 89900, 87000, 100000, 30, 1, 4, NULL, 1, 'wXgANIM6yf_produit-1-Tecno-spark-5.jpg', '3 Mois', '<p><strong><a href=\"https://phonesdata.com/fr/smartphones/tecno/spark-5-5458677/\">TECNO Spark 5</a></strong>&nbsp;est un smartphone de 2020 ans pesant 0 grammes et mesurant 164.7 x 76.3 x 8.8 mm. Avec un &eacute;cran de 6.6 pouces, un appareil photo 13 MP et une m&eacute;moire 32GB 2GB RAM. Son processeur est Octa-core 2.0 GHz Cortex-A53</p>', 'e1bblviezc-produit-tecno-spark-5', 1, 27, 'https://www.tecno-mobile.com/bf/telephones/product-detail/product/spark-5-2/#/', '2020-07-11 10:49:36', '2020-07-22 19:12:45', NULL),
(211, 'Tecno T 454', 18000, 15000, 18000, 20, 1, 4, NULL, 6, 'ksjvJvEU6C_produit-TecnoT454.jpg', '3 Mois', '<p>Tecno T454 Dual SIM - 4MB ROM - 4MB RAM&nbsp;</p>', 'k0bwfz9vcl-produit-tecno-t-454', 1, 13, NULL, '2020-07-11 10:59:13', '2020-07-22 10:37:49', NULL),
(212, 'Tecno T466', 20000, 17000, 20000, 20, 1, 4, NULL, 6, 'aFRKNU4thP_produit-Tecno-T 466.jpg', '3 Mois', '<h1>Tecno T466 &ndash; Dual SIM &ndash; Big Flash Light</h1>\r\n\r\n<p>T466 embarque un appareil photo, une connexion internet, un syst&egrave;me de Radio FM et bien plus encore. Gr&acirc;ce &agrave; sa fonction Dual SIM, vous pourrez y utiliser deux op&eacute;rateurs r&eacute;seaux. Sa batterie est g&eacute;niale, afin de vous permettre une utilisation de longue dur&eacute;e. Il ne vous reste plus qu&rsquo;&agrave; passer la commande.</p>', '8aylsrvkcs-produit-tecno-t466', 1, 4, NULL, '2020-07-11 11:04:37', '2020-07-23 04:37:05', NULL),
(213, 'Tecno T 301', 10000, 9500, 10000, 20, 1, 4, NULL, 6, 'xSq0N64bgi_produit-Tecno-T301.jpg', '3 Mois', '<h1>Tecno T301</h1>\r\n\r\n<p>Ce t&eacute;l&eacute;phone Tecno est un dual sim avec un emplacement m&eacute;moire d&eacute;di&eacute; et une connectivit&eacute; Internet. Le t&eacute;l&eacute;phone est livr&eacute; avec des fonctionnalit&eacute;s suppl&eacute;mentaires par rapport &agrave; un t&eacute;l&eacute;phone simple.</p>\r\n\r\n<p>&nbsp;</p>', 'wr2ayvwtyx-produit-tecno-t-301', 1, 8, NULL, '2020-07-11 11:10:00', '2020-07-22 18:44:02', NULL),
(214, 'Samsung Galaxy A21s', 149000, 145000, 155000, 30, 1, 1, NULL, 1, 'QS29SQjgLo_produit-2-Samsung-Galaxy-A21-S.jpg', '3 Mois', '<h1>Galaxy A21s</h1>\r\n\r\n<ul>\r\n	<li>Cam&eacute;ra 48 /8/2 MP</li>\r\n	<li>13 MP</li>\r\n	<li>64/4GB</li>\r\n</ul>', 'nz42xsc9qj-produit-samsung-galaxy-a21s', 1, 9, 'https://www.samsung.com/africa_fr/smartphones/galaxy-a21s/SM-A217FZKGXFE/', '2020-07-11 12:13:21', '2020-07-22 12:48:30', NULL),
(215, 'Samsung Galaxy A11', 125000, 119000, 125000, 20, 1, 1, NULL, 1, 'qB0LPBJiur_produit-produit-Samsung-Galaxy-11-2.jpg', '3 Mois', '<p>Le Galaxy A11 vous aide &agrave; vous d&eacute;marquer avec son look &eacute;l&eacute;gant qui s&rsquo;adapte &agrave; votre style. Ses courbes lisses con&ccedil;ues pour un confort optimal offrent une prise en main agr&eacute;able tout au long de la journ&eacute;e. Choisissez le coloris qui vous convient&nbsp;: classique en noir ou blanc ou color&eacute; en rouge ou bleu.</p>', 'lcrteibzay-produit-samsung-galaxy-a11', 1, 26, 'https://www.samsung.com/africa_fr/smartphones/galaxy-a11-a115/SM-A115FZKDXFE/', '2020-07-11 12:33:27', '2020-07-22 10:48:38', NULL),
(216, 'Samsung Galaxy M 11', 125000, 119000, 125000, 20, 1, 1, NULL, 1, 'oMP2l6CePh_produit-Samsung-Galaxy-M11.jpg', '3 Mois', '<h1>Galaxy M11</h1>\r\n\r\n<p>L&rsquo;&eacute;cran Infinity-O vous plonge au c&oelig;ur de l&#39;actionCapturez votre monde en ultra grand angleUn triple appareil photo pour partager vos stories</p>', '9ggdwtpbcc-produit-samsung-galaxy-m-11', 1, 11, 'https://www.samsung.com/africa_fr/smartphones/galaxy-m11-m115/SM-M115FZKDXFE/', '2020-07-11 17:48:29', '2020-07-22 12:56:33', NULL),
(217, 'Itel A56 Pro', 65000, 59900, 75000, 20, 1, 5, NULL, 1, 'jYBFdtUGKw_produit-Itel-A-56-Pro-2.jpg', '3 Mois', '<p>Itel A56 Pro - 5.99 pouces-4000Mah -32GB ROM&nbsp; / 2GB&nbsp; de RAM- Noir</p>', 't8thqielwk-produit-itel-a56-pro', 1, 29, 'https://www.itel-mobile.com/fr/produits/smartphone/a-basic/a56/', '2020-07-11 18:20:33', '2020-07-23 00:42:54', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_produits_to_images`
--

CREATE TABLE `kdm_produits_to_images` (
  `id_produits` int(11) NOT NULL,
  `id_images` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `ordre` int(11) NOT NULL,
  `attr1` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_produits_to_images`
--

INSERT INTO `kdm_produits_to_images` (`id_produits`, `id_images`, `statut`, `ordre`, `attr1`, `created_at`, `updated_at`, `deleted_at`) VALUES
(93, 124, 0, 0, NULL, '2019-12-07 20:02:28', '2019-12-07 20:02:28', NULL),
(93, 125, 0, 1, NULL, '2019-12-07 20:02:28', '2019-12-07 20:02:28', NULL),
(94, 126, 0, 0, NULL, '2019-12-09 16:31:25', '2019-12-09 16:31:25', NULL),
(95, 127, 0, 0, NULL, '2019-12-09 16:35:30', '2019-12-09 16:35:30', NULL),
(96, 417, 0, 0, NULL, '2019-12-10 10:57:15', '2020-07-20 15:08:16', NULL),
(97, 129, 0, 0, NULL, '2019-12-10 11:37:16', '2019-12-10 11:37:16', NULL),
(98, 130, 0, 0, NULL, '2019-12-10 11:39:16', '2019-12-10 11:39:16', NULL),
(99, 131, 0, 0, NULL, '2019-12-10 11:41:23', '2019-12-10 11:41:23', NULL),
(100, 132, 0, 0, NULL, '2019-12-10 11:44:32', '2019-12-10 11:44:32', NULL),
(101, 133, 0, 0, NULL, '2019-12-10 11:48:55', '2019-12-10 11:48:55', NULL),
(102, 134, 0, 0, NULL, '2019-12-10 14:53:22', '2019-12-10 14:53:22', NULL),
(102, 135, 0, 1, NULL, '2019-12-10 14:53:22', '2019-12-10 14:53:22', NULL),
(102, 136, 0, 2, NULL, '2019-12-10 14:53:22', '2019-12-10 14:53:22', NULL),
(102, 137, 0, 3, NULL, '2019-12-10 14:53:22', '2019-12-10 14:53:22', NULL),
(103, 138, 0, 0, NULL, '2019-12-10 15:12:20', '2019-12-10 15:12:20', NULL),
(103, 139, 0, 1, NULL, '2019-12-10 15:12:20', '2019-12-10 15:12:20', NULL),
(103, 140, 0, 2, NULL, '2019-12-10 15:12:20', '2019-12-10 15:12:20', NULL),
(103, 141, 0, 3, NULL, '2019-12-10 15:12:20', '2019-12-10 15:12:20', NULL),
(104, 144, 0, 2, NULL, '2019-12-11 09:48:37', '2019-12-11 09:48:37', NULL),
(104, 145, 0, 3, NULL, '2019-12-11 09:48:37', '2019-12-11 09:48:37', NULL),
(104, 419, 0, 0, NULL, '2019-12-11 09:48:37', '2020-07-20 16:11:12', NULL),
(105, 146, 0, 0, NULL, '2019-12-11 10:20:21', '2019-12-11 10:20:21', NULL),
(105, 147, 0, 1, NULL, '2019-12-11 10:20:21', '2019-12-11 10:20:21', NULL),
(105, 148, 0, 2, NULL, '2019-12-11 10:20:21', '2019-12-11 10:20:21', NULL),
(105, 149, 0, 3, NULL, '2019-12-11 10:20:21', '2019-12-11 10:20:21', NULL),
(106, 150, 0, 0, NULL, '2019-12-11 10:21:08', '2019-12-11 10:21:08', NULL),
(106, 151, 0, 1, NULL, '2019-12-11 10:21:08', '2019-12-11 10:21:08', NULL),
(106, 152, 0, 2, NULL, '2019-12-11 10:21:08', '2019-12-11 10:21:08', NULL),
(106, 153, 0, 3, NULL, '2019-12-11 10:21:08', '2019-12-11 10:21:08', NULL),
(107, 154, 0, 0, NULL, '2019-12-11 10:49:11', '2019-12-11 10:49:11', NULL),
(107, 155, 0, 1, NULL, '2019-12-11 10:49:11', '2019-12-11 10:49:11', NULL),
(107, 156, 0, 2, NULL, '2019-12-11 10:49:11', '2019-12-11 10:49:11', NULL),
(107, 157, 0, 3, NULL, '2019-12-11 10:49:11', '2019-12-11 10:49:11', NULL),
(108, 158, 0, 0, NULL, '2019-12-17 20:12:36', '2019-12-17 20:12:36', NULL),
(109, 159, 0, 0, NULL, '2019-12-22 13:47:10', '2019-12-22 13:47:10', NULL),
(110, 160, 0, 0, NULL, '2019-12-22 13:50:33', '2019-12-22 13:50:33', NULL),
(111, 161, 0, 0, NULL, '2019-12-22 13:56:07', '2019-12-22 13:56:07', NULL),
(112, 162, 0, 0, NULL, '2019-12-22 14:49:41', '2019-12-22 14:49:41', NULL),
(113, 163, 0, 0, NULL, '2019-12-22 14:52:47', '2019-12-22 14:52:47', NULL),
(114, 164, 0, 0, NULL, '2019-12-22 15:04:40', '2019-12-22 15:04:40', NULL),
(115, 165, 0, 0, NULL, '2019-12-22 15:34:07', '2019-12-22 15:34:07', NULL),
(116, 166, 0, 0, NULL, '2019-12-22 15:34:08', '2019-12-22 15:34:08', NULL),
(117, 167, 0, 0, NULL, '2019-12-26 08:01:02', '2019-12-26 08:01:02', NULL),
(117, 168, 0, 1, NULL, '2019-12-26 08:01:02', '2019-12-26 08:01:02', NULL),
(117, 169, 0, 2, NULL, '2019-12-26 08:01:02', '2019-12-26 08:01:02', NULL),
(117, 170, 0, 3, NULL, '2019-12-26 08:01:02', '2019-12-26 08:01:02', NULL),
(118, 171, 0, 0, NULL, '2019-12-26 08:10:28', '2019-12-26 08:10:28', NULL),
(119, 172, 0, 0, NULL, '2019-12-26 08:21:10', '2019-12-26 08:21:10', NULL),
(120, 173, 0, 0, NULL, '2019-12-26 08:36:42', '2019-12-26 08:36:42', NULL),
(121, 174, 0, 0, NULL, '2019-12-26 08:44:54', '2019-12-26 08:44:54', NULL),
(122, 175, 0, 0, NULL, '2019-12-26 08:52:54', '2019-12-26 08:52:54', NULL),
(123, 176, 0, 0, NULL, '2019-12-26 09:09:38', '2019-12-26 09:09:38', NULL),
(124, 177, 0, 0, NULL, '2019-12-26 09:17:47', '2019-12-26 09:17:47', NULL),
(125, 178, 0, 0, NULL, '2019-12-26 09:34:07', '2019-12-26 09:34:07', NULL),
(126, 179, 0, 0, NULL, '2019-12-26 10:30:21', '2019-12-26 10:30:21', NULL),
(127, 180, 0, 0, NULL, '2019-12-26 10:36:32', '2019-12-26 10:36:32', NULL),
(128, 181, 0, 0, NULL, '2019-12-26 10:40:27', '2019-12-26 10:40:27', NULL),
(129, 182, 0, 0, NULL, '2019-12-26 10:44:07', '2019-12-26 10:44:07', NULL),
(130, 183, 0, 0, NULL, '2019-12-26 11:12:16', '2019-12-26 11:12:16', NULL),
(131, 184, 0, 0, NULL, '2019-12-26 13:06:37', '2019-12-26 13:06:37', NULL),
(132, 185, 0, 0, NULL, '2019-12-26 13:25:07', '2019-12-26 13:25:07', NULL),
(133, 186, 0, 0, NULL, '2019-12-26 13:36:31', '2019-12-26 13:36:31', NULL),
(134, 187, 0, 0, NULL, '2019-12-26 13:42:17', '2019-12-26 13:42:17', NULL),
(135, 188, 0, 0, NULL, '2019-12-26 14:01:10', '2019-12-26 14:01:10', NULL),
(136, 189, 0, 0, NULL, '2019-12-26 14:13:55', '2019-12-26 14:13:55', NULL),
(137, 190, 0, 0, NULL, '2019-12-26 14:20:17', '2019-12-26 14:20:17', NULL),
(138, 191, 0, 0, NULL, '2019-12-26 14:49:46', '2019-12-26 14:49:46', NULL),
(139, 192, 0, 0, NULL, '2019-12-26 14:56:02', '2019-12-26 14:56:02', NULL),
(140, 193, 0, 0, NULL, '2019-12-26 15:02:05', '2019-12-26 15:02:05', NULL),
(141, 194, 0, 0, NULL, '2020-01-03 10:24:37', '2020-01-03 10:24:37', NULL),
(142, 195, 0, 0, NULL, '2020-01-07 09:46:35', '2020-01-07 09:46:35', NULL),
(142, 196, 0, 1, NULL, '2020-01-07 09:46:35', '2020-01-07 09:46:35', NULL),
(143, 197, 0, 0, NULL, '2020-01-07 10:02:48', '2020-01-07 10:02:48', NULL),
(143, 198, 0, 1, NULL, '2020-01-07 10:02:48', '2020-01-07 10:02:48', NULL),
(144, 199, 0, 0, NULL, '2020-01-07 10:27:59', '2020-01-07 10:27:59', NULL),
(144, 200, 0, 1, NULL, '2020-01-07 10:27:59', '2020-01-07 10:27:59', NULL),
(145, 201, 0, 0, NULL, '2020-01-07 10:47:33', '2020-01-07 10:47:33', NULL),
(145, 202, 0, 1, NULL, '2020-01-07 10:47:33', '2020-01-07 10:47:33', NULL),
(146, 203, 0, 0, NULL, '2020-01-07 11:04:50', '2020-01-07 11:04:50', NULL),
(146, 204, 0, 1, NULL, '2020-01-07 11:04:50', '2020-01-07 11:04:50', NULL),
(146, 205, 0, 2, NULL, '2020-01-07 11:04:50', '2020-01-07 11:04:50', NULL),
(147, 206, 0, 0, NULL, '2020-01-08 09:14:50', '2020-01-08 09:14:50', NULL),
(147, 207, 0, 1, NULL, '2020-01-08 09:14:50', '2020-01-08 09:14:50', NULL),
(148, 208, 0, 0, NULL, '2020-01-08 09:26:30', '2020-01-08 09:26:30', NULL),
(148, 209, 0, 1, NULL, '2020-01-08 09:26:30', '2020-01-08 09:26:30', NULL),
(148, 210, 0, 2, NULL, '2020-01-08 09:26:30', '2020-01-08 09:26:30', NULL),
(148, 211, 0, 3, NULL, '2020-01-08 09:26:30', '2020-01-08 09:26:30', NULL),
(149, 212, 0, 0, NULL, '2020-01-08 09:47:52', '2020-01-08 09:47:52', NULL),
(149, 213, 0, 1, NULL, '2020-01-08 09:47:52', '2020-01-08 09:47:52', NULL),
(150, 214, 0, 0, NULL, '2020-01-09 08:06:55', '2020-01-09 08:06:55', NULL),
(150, 215, 0, 1, NULL, '2020-01-09 08:06:55', '2020-01-09 08:06:55', NULL),
(151, 216, 0, 0, NULL, '2020-01-09 08:29:54', '2020-01-09 08:29:54', NULL),
(151, 217, 0, 1, NULL, '2020-01-09 08:29:54', '2020-01-09 08:29:54', NULL),
(152, 218, 0, 0, NULL, '2020-01-09 09:03:29', '2020-01-09 09:03:29', NULL),
(152, 219, 0, 1, NULL, '2020-01-09 09:03:29', '2020-01-09 09:03:29', NULL),
(153, 220, 0, 0, NULL, '2020-01-09 09:21:50', '2020-01-09 09:21:50', NULL),
(153, 221, 0, 1, NULL, '2020-01-09 09:21:50', '2020-01-09 09:21:50', NULL),
(153, 222, 0, 2, NULL, '2020-01-09 09:21:50', '2020-01-09 09:21:50', NULL),
(154, 223, 0, 0, NULL, '2020-01-10 23:54:48', '2020-01-10 23:54:48', NULL),
(155, 224, 0, 0, NULL, '2020-01-11 00:01:17', '2020-01-11 00:01:17', NULL),
(156, 225, 0, 0, NULL, '2020-01-11 23:56:32', '2020-01-11 23:56:32', NULL),
(156, 226, 0, 1, NULL, '2020-01-11 23:56:32', '2020-01-11 23:56:32', NULL),
(156, 227, 0, 2, NULL, '2020-01-11 23:56:32', '2020-01-11 23:56:32', NULL),
(157, 228, 0, 0, NULL, '2020-01-12 11:10:17', '2020-01-12 11:10:17', NULL),
(157, 229, 0, 1, NULL, '2020-01-12 11:10:17', '2020-01-12 11:10:17', NULL),
(158, 230, 0, 0, NULL, '2020-01-12 17:31:15', '2020-01-12 17:31:15', NULL),
(159, 231, 0, 0, NULL, '2020-01-12 17:32:27', '2020-01-12 17:32:27', NULL),
(160, 232, 0, 0, NULL, '2020-01-13 11:26:16', '2020-01-13 11:26:16', NULL),
(160, 233, 0, 1, NULL, '2020-01-13 11:26:16', '2020-01-13 11:26:16', NULL),
(160, 234, 0, 2, NULL, '2020-01-13 11:26:16', '2020-01-13 11:26:16', NULL),
(160, 235, 0, 3, NULL, '2020-01-13 11:26:16', '2020-01-13 11:26:16', NULL),
(161, 237, 0, 0, NULL, '2020-01-14 00:25:32', '2020-01-14 00:25:32', NULL),
(161, 238, 0, 1, NULL, '2020-01-14 00:25:32', '2020-01-14 00:25:32', NULL),
(162, 239, 0, 0, NULL, '2020-01-14 00:36:50', '2020-01-14 00:36:50', NULL),
(162, 240, 0, 1, NULL, '2020-01-14 00:36:50', '2020-01-14 00:36:50', NULL),
(163, 241, 0, 0, NULL, '2020-01-14 00:47:51', '2020-01-14 00:47:51', NULL),
(163, 242, 0, 1, NULL, '2020-01-14 00:47:51', '2020-01-14 00:47:51', NULL),
(163, 243, 0, 2, NULL, '2020-01-14 00:47:51', '2020-01-14 00:47:51', NULL),
(163, 244, 0, 3, NULL, '2020-01-14 00:47:51', '2020-01-14 00:47:51', NULL),
(164, 245, 0, 0, NULL, '2020-01-14 00:55:52', '2020-01-14 00:55:52', NULL),
(164, 246, 0, 1, NULL, '2020-01-14 00:55:52', '2020-01-14 00:55:52', NULL),
(165, 247, 0, 0, NULL, '2020-01-14 01:05:18', '2020-01-14 01:05:18', NULL),
(165, 248, 0, 1, NULL, '2020-01-14 01:05:18', '2020-01-14 01:05:18', NULL),
(165, 249, 0, 2, NULL, '2020-01-14 01:05:18', '2020-01-14 01:05:18', NULL),
(166, 250, 0, 0, NULL, '2020-01-14 01:14:01', '2020-01-14 01:14:01', NULL),
(166, 251, 0, 1, NULL, '2020-01-14 01:14:01', '2020-01-14 01:14:01', NULL),
(167, 252, 0, 0, NULL, '2020-01-14 01:48:38', '2020-01-14 01:48:38', NULL),
(167, 253, 0, 1, NULL, '2020-01-14 01:48:38', '2020-01-14 01:48:38', NULL),
(167, 254, 0, 2, NULL, '2020-01-14 01:48:38', '2020-01-14 01:48:38', NULL),
(168, 255, 0, 0, NULL, '2020-01-14 08:33:30', '2020-01-14 08:33:30', NULL),
(168, 256, 0, 1, NULL, '2020-01-14 08:33:30', '2020-01-14 08:33:30', NULL),
(168, 257, 0, 2, NULL, '2020-01-14 08:33:30', '2020-01-14 08:33:30', NULL),
(168, 258, 0, 3, NULL, '2020-01-14 08:33:30', '2020-01-14 08:33:30', NULL),
(169, 259, 0, 0, NULL, '2020-01-14 08:48:58', '2020-01-14 08:48:58', NULL),
(169, 260, 0, 1, NULL, '2020-01-14 08:48:58', '2020-01-14 08:48:58', NULL),
(169, 261, 0, 2, NULL, '2020-01-14 08:48:58', '2020-01-14 08:48:58', NULL),
(169, 262, 0, 3, NULL, '2020-01-14 08:48:58', '2020-01-14 08:48:58', NULL),
(170, 263, 0, 0, NULL, '2020-01-22 09:10:52', '2020-01-22 09:10:52', NULL),
(170, 264, 0, 1, NULL, '2020-01-22 09:10:52', '2020-01-22 09:10:52', NULL),
(170, 265, 0, 2, NULL, '2020-01-22 09:10:52', '2020-01-22 09:10:52', NULL),
(170, 266, 0, 3, NULL, '2020-01-22 09:10:52', '2020-01-22 09:10:52', NULL),
(171, 267, 0, 0, NULL, '2020-01-22 09:25:18', '2020-01-22 09:25:18', NULL),
(172, 268, 0, 0, NULL, '2020-01-22 09:50:37', '2020-01-22 09:50:37', NULL),
(173, 269, 0, 0, NULL, '2020-01-22 10:19:48', '2020-01-22 10:19:48', NULL),
(173, 270, 0, 1, NULL, '2020-01-22 10:19:48', '2020-01-22 10:19:48', NULL),
(173, 271, 0, 2, NULL, '2020-01-22 10:19:48', '2020-01-22 10:19:48', NULL),
(173, 272, 0, 3, NULL, '2020-01-22 10:19:48', '2020-01-22 10:19:48', NULL),
(174, 273, 0, 0, NULL, '2020-01-22 11:56:15', '2020-01-22 11:56:15', NULL),
(174, 274, 0, 1, NULL, '2020-01-22 11:56:15', '2020-01-22 11:56:15', NULL),
(175, 275, 0, 0, NULL, '2020-01-22 14:30:37', '2020-01-22 14:30:37', NULL),
(175, 276, 0, 1, NULL, '2020-01-22 14:30:37', '2020-01-22 14:30:37', NULL),
(175, 277, 0, 2, NULL, '2020-01-22 14:30:37', '2020-01-22 14:30:37', NULL),
(176, 278, 0, 0, NULL, '2020-01-22 14:42:43', '2020-01-22 14:42:43', NULL),
(176, 279, 0, 1, NULL, '2020-01-22 14:42:43', '2020-01-22 14:42:43', NULL),
(177, 280, 0, 0, NULL, '2020-01-22 14:46:41', '2020-01-22 14:46:41', NULL),
(177, 281, 0, 1, NULL, '2020-01-22 14:46:41', '2020-01-22 14:46:41', NULL),
(178, 282, 0, 0, NULL, '2020-01-22 15:35:28', '2020-01-22 15:35:28', NULL),
(178, 283, 0, 1, NULL, '2020-01-22 15:35:28', '2020-01-22 15:35:28', NULL),
(179, 284, 0, 0, NULL, '2020-01-23 06:17:57', '2020-01-23 06:17:57', NULL),
(179, 285, 0, 1, NULL, '2020-01-23 06:17:57', '2020-01-23 06:17:57', NULL),
(180, 286, 0, 0, NULL, '2020-01-23 06:25:28', '2020-01-23 06:25:28', NULL),
(180, 287, 0, 1, NULL, '2020-01-23 06:25:28', '2020-01-23 06:25:28', NULL),
(181, 288, 0, 0, NULL, '2020-01-23 06:27:38', '2020-01-23 06:27:38', NULL),
(181, 289, 0, 1, NULL, '2020-01-23 06:27:38', '2020-01-23 06:27:38', NULL),
(182, 290, 0, 0, NULL, '2020-01-23 07:04:22', '2020-01-23 07:04:22', NULL),
(182, 291, 0, 1, NULL, '2020-01-23 07:04:22', '2020-01-23 07:04:22', NULL),
(182, 292, 0, 2, NULL, '2020-01-23 07:04:22', '2020-01-23 07:04:22', NULL),
(182, 293, 0, 3, NULL, '2020-01-23 07:04:22', '2020-01-23 07:04:22', NULL),
(183, 294, 0, 0, NULL, '2020-01-23 07:27:26', '2020-01-23 07:27:26', NULL),
(183, 295, 0, 1, NULL, '2020-01-23 07:27:26', '2020-01-23 07:27:26', NULL),
(183, 296, 0, 2, NULL, '2020-01-23 07:27:26', '2020-01-23 07:27:26', NULL),
(183, 297, 0, 3, NULL, '2020-01-23 07:27:26', '2020-01-23 07:27:26', NULL),
(184, 298, 0, 0, NULL, '2020-01-23 07:41:42', '2020-01-23 07:41:42', NULL),
(184, 299, 0, 1, NULL, '2020-01-23 07:41:42', '2020-01-23 07:41:42', NULL),
(184, 300, 0, 2, NULL, '2020-01-23 07:41:42', '2020-01-23 07:41:42', NULL),
(184, 301, 0, 3, NULL, '2020-01-23 07:41:42', '2020-01-23 07:41:42', NULL),
(185, 302, 0, 0, NULL, '2020-01-23 07:43:57', '2020-01-23 07:43:57', NULL),
(185, 303, 0, 1, NULL, '2020-01-23 07:43:57', '2020-01-23 07:43:57', NULL),
(185, 304, 0, 2, NULL, '2020-01-23 07:43:57', '2020-01-23 07:43:57', NULL),
(185, 305, 0, 3, NULL, '2020-01-23 07:43:57', '2020-01-23 07:43:57', NULL),
(186, 306, 0, 0, NULL, '2020-01-23 07:46:10', '2020-01-23 07:46:10', NULL),
(186, 307, 0, 1, NULL, '2020-01-23 07:46:10', '2020-01-23 07:46:10', NULL),
(186, 308, 0, 2, NULL, '2020-01-23 07:46:10', '2020-01-23 07:46:10', NULL),
(186, 309, 0, 3, NULL, '2020-01-23 07:46:10', '2020-01-23 07:46:10', NULL),
(187, 310, 0, 0, NULL, '2020-01-23 08:03:39', '2020-01-23 08:03:39', NULL),
(187, 311, 0, 1, NULL, '2020-01-23 08:03:39', '2020-01-23 08:03:39', NULL),
(187, 312, 0, 2, NULL, '2020-01-23 08:03:39', '2020-01-23 08:03:39', NULL),
(187, 313, 0, 3, NULL, '2020-01-23 08:03:39', '2020-01-23 08:03:39', NULL),
(188, 314, 0, 0, NULL, '2020-01-23 08:05:18', '2020-01-23 08:05:18', NULL),
(188, 315, 0, 1, NULL, '2020-01-23 08:05:18', '2020-01-23 08:05:18', NULL),
(188, 316, 0, 2, NULL, '2020-01-23 08:05:18', '2020-01-23 08:05:18', NULL),
(188, 317, 0, 3, NULL, '2020-01-23 08:05:18', '2020-01-23 08:05:18', NULL),
(189, 318, 0, 0, NULL, '2020-01-29 14:01:32', '2020-01-29 14:01:32', NULL),
(189, 319, 0, 1, NULL, '2020-01-29 14:01:32', '2020-01-29 14:01:32', NULL),
(189, 320, 0, 2, NULL, '2020-01-29 14:01:32', '2020-01-29 14:01:32', NULL),
(190, 321, 0, 0, NULL, '2020-01-29 23:22:11', '2020-01-29 23:22:11', NULL),
(190, 322, 0, 1, NULL, '2020-01-29 23:22:11', '2020-01-29 23:22:11', NULL),
(191, 323, 0, 0, NULL, '2020-01-29 23:33:00', '2020-01-29 23:33:00', NULL),
(191, 324, 0, 1, NULL, '2020-01-29 23:33:00', '2020-01-29 23:33:00', NULL),
(192, 325, 0, 0, NULL, '2020-01-29 23:45:34', '2020-01-29 23:45:34', NULL),
(192, 326, 0, 1, NULL, '2020-01-29 23:45:34', '2020-01-29 23:45:34', NULL),
(192, 327, 0, 2, NULL, '2020-01-29 23:45:34', '2020-01-29 23:45:34', NULL),
(193, 328, 0, 0, NULL, '2020-01-29 23:54:06', '2020-01-29 23:54:06', NULL),
(193, 329, 0, 1, NULL, '2020-01-29 23:54:06', '2020-01-29 23:54:06', NULL),
(193, 330, 0, 2, NULL, '2020-01-29 23:54:06', '2020-01-29 23:54:06', NULL),
(194, 331, 0, 0, NULL, '2020-01-30 00:05:09', '2020-01-30 00:05:09', NULL),
(194, 332, 0, 1, NULL, '2020-01-30 00:05:09', '2020-01-30 00:05:09', NULL),
(194, 333, 0, 2, NULL, '2020-01-30 00:05:09', '2020-01-30 00:05:09', NULL),
(194, 334, 0, 3, NULL, '2020-01-30 00:05:09', '2020-01-30 00:05:09', NULL),
(195, 335, 0, 0, NULL, '2020-01-30 00:15:28', '2020-01-30 00:15:28', NULL),
(195, 336, 0, 1, NULL, '2020-01-30 00:15:28', '2020-01-30 00:15:28', NULL),
(195, 337, 0, 2, NULL, '2020-01-30 00:15:28', '2020-01-30 00:15:28', NULL),
(195, 338, 0, 3, NULL, '2020-01-30 00:15:28', '2020-01-30 00:15:28', NULL),
(196, 339, 0, 0, NULL, '2020-01-30 00:28:30', '2020-01-30 00:28:30', NULL),
(196, 340, 0, 1, NULL, '2020-01-30 00:28:30', '2020-01-30 00:28:30', NULL),
(196, 341, 0, 2, NULL, '2020-01-30 00:28:30', '2020-01-30 00:28:30', NULL),
(196, 342, 0, 3, NULL, '2020-01-30 00:28:30', '2020-01-30 00:28:30', NULL),
(197, 343, 0, 0, NULL, '2020-01-30 00:43:04', '2020-01-30 00:43:04', NULL),
(197, 344, 0, 1, NULL, '2020-01-30 00:43:04', '2020-01-30 00:43:04', NULL),
(197, 345, 0, 2, NULL, '2020-01-30 00:43:04', '2020-01-30 00:43:04', NULL),
(197, 346, 0, 3, NULL, '2020-01-30 00:43:04', '2020-01-30 00:43:04', NULL),
(198, 347, 0, 0, NULL, '2020-01-30 09:47:06', '2020-01-30 09:47:06', NULL),
(199, 348, 0, 0, NULL, '2020-02-13 09:01:43', '2020-02-13 09:01:43', NULL),
(200, 349, 0, 0, NULL, '2020-02-13 09:10:27', '2020-02-13 09:10:27', NULL),
(201, 350, 0, 0, NULL, '2020-02-13 09:20:18', '2020-02-13 09:20:18', NULL),
(202, 351, 0, 0, NULL, '2020-02-13 09:25:26', '2020-02-13 09:25:26', NULL),
(203, 352, 0, 0, NULL, '2020-02-17 10:31:58', '2020-02-17 10:31:58', NULL),
(204, 353, 0, 0, NULL, '2020-02-27 23:05:55', '2020-02-27 23:05:55', NULL),
(205, 354, 0, 0, NULL, '2020-03-12 12:35:38', '2020-03-12 12:35:38', NULL),
(206, 355, 0, 0, NULL, '2020-04-04 10:39:48', '2020-04-04 10:39:48', NULL),
(206, 356, 0, 1, NULL, '2020-04-04 10:39:48', '2020-04-04 10:39:48', NULL),
(206, 357, 0, 2, NULL, '2020-04-04 10:39:48', '2020-04-04 10:39:48', NULL),
(207, 358, 0, 0, NULL, '2020-06-05 08:41:11', '2020-06-05 08:41:11', NULL),
(207, 359, 0, 1, NULL, '2020-06-05 08:41:11', '2020-06-05 08:41:11', NULL),
(207, 360, 0, 2, NULL, '2020-06-05 08:41:11', '2020-06-05 08:41:11', NULL),
(207, 361, 0, 3, NULL, '2020-06-05 08:41:11', '2020-06-05 08:41:11', NULL),
(208, 362, 0, 0, NULL, '2020-06-22 10:27:28', '2020-06-22 10:27:28', NULL),
(209, 402, 0, 0, NULL, '2020-07-09 20:41:11', '2020-07-17 21:52:26', NULL),
(209, 405, 0, 0, NULL, '2020-07-09 20:41:11', '2020-07-18 06:54:05', NULL),
(210, 366, 0, 0, NULL, '2020-07-11 12:49:36', '2020-07-11 12:49:36', NULL),
(210, 367, 0, 1, NULL, '2020-07-11 12:49:36', '2020-07-11 12:49:36', NULL),
(210, 368, 0, 2, NULL, '2020-07-11 12:49:36', '2020-07-11 12:49:36', NULL),
(210, 369, 0, 3, NULL, '2020-07-11 12:49:36', '2020-07-11 12:49:36', NULL),
(211, 370, 0, 0, NULL, '2020-07-11 12:59:13', '2020-07-11 12:59:13', NULL),
(212, 371, 0, 0, NULL, '2020-07-11 13:04:37', '2020-07-11 13:04:37', NULL),
(213, 372, 0, 0, NULL, '2020-07-11 13:10:00', '2020-07-11 13:10:00', NULL),
(214, 373, 0, 0, NULL, '2020-07-11 14:13:21', '2020-07-11 14:13:21', NULL),
(214, 374, 0, 1, NULL, '2020-07-11 14:13:21', '2020-07-11 14:13:21', NULL),
(214, 375, 0, 2, NULL, '2020-07-11 14:13:21', '2020-07-11 14:13:21', NULL),
(214, 376, 0, 3, NULL, '2020-07-11 14:13:21', '2020-07-11 14:13:21', NULL),
(215, 407, 0, 0, NULL, '2020-07-11 14:33:27', '2020-07-18 07:04:05', NULL),
(215, 408, 0, 0, NULL, '2020-07-11 14:33:27', '2020-07-18 07:06:32', NULL),
(215, 409, 0, 0, NULL, '2020-07-11 14:33:27', '2020-07-18 07:07:49', NULL),
(215, 410, 0, 0, NULL, '2020-07-11 14:33:27', '2020-07-18 07:08:38', NULL),
(216, 381, 0, 0, NULL, '2020-07-11 19:48:29', '2020-07-11 19:48:29', NULL),
(216, 382, 0, 1, NULL, '2020-07-11 19:48:29', '2020-07-11 19:48:29', NULL),
(216, 383, 0, 2, NULL, '2020-07-11 19:48:29', '2020-07-11 19:48:29', NULL),
(216, 384, 0, 3, NULL, '2020-07-11 19:48:29', '2020-07-11 19:48:29', NULL),
(217, 385, 0, 0, NULL, '2020-07-11 20:20:33', '2020-07-11 20:20:33', NULL),
(217, 386, 0, 1, NULL, '2020-07-11 20:20:33', '2020-07-11 20:20:33', NULL),
(217, 387, 0, 2, NULL, '2020-07-11 20:20:33', '2020-07-11 20:20:33', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_promotions`
--

CREATE TABLE `kdm_promotions` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `produit` int(11) NOT NULL,
  `categorie` int(11) DEFAULT NULL,
  `vieux_prix` double NOT NULL,
  `prix` double NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `image` text,
  `pourcentage` double NOT NULL DEFAULT '0',
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_promotions`
--

INSERT INTO `kdm_promotions` (`id`, `produit`, `categorie`, `vieux_prix`, `prix`, `date_debut`, `date_fin`, `image`, `pourcentage`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 102, NULL, 99000, 84900, '2020-02-05 00:00:00', '2020-02-29 00:00:00', NULL, 0, NULL, '2020-02-05 19:58:13', '2020-02-08 09:07:12', NULL),
(0, 126, NULL, 29900, 29900, '2020-05-14 00:00:00', '2020-05-20 00:00:00', NULL, 0, NULL, '2020-05-14 12:24:19', '2020-05-14 12:24:19', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_publicites`
--

CREATE TABLE `kdm_publicites` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(255) NOT NULL COMMENT 'texte2',
  `text1` varchar(255) DEFAULT NULL,
  `text3` varchar(255) DEFAULT NULL,
  `text4` varchar(255) DEFAULT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `image` text,
  `statut` int(11) NOT NULL DEFAULT '0',
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `type_publicite` varchar(255) DEFAULT NULL,
  `link` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_publicites`
--

INSERT INTO `kdm_publicites` (`id`, `libelle`, `text1`, `text3`, `text4`, `date_debut`, `date_fin`, `image`, `statut`, `slug`, `position`, `type_publicite`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TOP 6 DE LA SEMAINE', 'Top 6', NULL, NULL, '2019-11-22 00:00:00', '2020-02-16 00:00:00', '1572826517.jpg', 1, NULL, 1, NULL, NULL, '2019-11-03 23:15:17', '2019-12-24 14:27:39', '2019-12-24 14:27:39'),
(2, 'KIPCONTACT', NULL, NULL, NULL, '2019-09-18 00:00:00', '2020-02-23 00:00:00', '1572836645.jpg', 1, NULL, 1, NULL, NULL, '2019-11-04 02:04:05', '2019-12-18 10:32:47', '2019-12-18 10:32:47'),
(3, 'Code promotion', NULL, NULL, NULL, '2019-10-18 00:00:00', '2021-02-19 00:00:00', '1595187315.gif', 1, NULL, 2, NULL, 'https://kadmarket.shop/code-de-reduction', '2019-11-04 02:06:25', '2020-07-19 17:35:15', NULL),
(4, 'Livraison offerte', NULL, NULL, NULL, '2019-09-04 00:00:00', '2022-02-10 00:00:00', '1593999913.gif', 1, NULL, 3, NULL, 'https://kadmarket.shop/store/afficher/1581158802-114-usp8gpvzqi-produit-tecno-camon-i-click-2', '2019-11-04 02:26:45', '2020-07-05 23:45:13', NULL),
(5, 'Noel', NULL, NULL, NULL, '2019-10-28 00:00:00', '2020-02-02 00:00:00', '1576655741.jpg', 1, NULL, 2, NULL, NULL, '2019-11-04 11:11:32', '2020-01-27 07:06:34', '2020-01-27 07:06:34'),
(6, 'TOP 6 DE LA SEMAINE', NULL, NULL, NULL, '2019-12-11 00:00:00', '2019-12-22 00:00:00', '1576069982.jpg', 1, NULL, 1, NULL, NULL, '2019-12-10 07:02:06', '2019-12-24 14:27:32', '2019-12-24 14:27:32'),
(7, 'Produits Oraimo', 'Ventes des Accessoires', 'Chez Kadmarket', NULL, '2019-12-11 00:00:00', '2019-12-31 00:00:00', '1577198484.jpg', 1, NULL, 1, NULL, NULL, '2019-12-11 08:09:04', '2019-12-24 14:24:17', '2019-12-24 14:24:17'),
(8, 'Camon 15', NULL, NULL, NULL, '2019-12-12 00:00:00', '2020-12-01 00:00:00', '1584283189.jpg', 1, NULL, 1, NULL, NULL, '2019-12-18 06:13:17', '2020-04-23 10:36:32', '2020-04-23 10:36:32'),
(9, 'Danse des prix à NOEL', NULL, NULL, NULL, '2019-12-12 00:00:00', '2020-12-01 00:00:00', '1576654191.jpg', 1, NULL, 1, NULL, NULL, '2019-12-18 06:29:51', '2020-01-11 22:02:28', '2020-01-11 22:02:28'),
(10, 'Vente Flash', NULL, NULL, NULL, '2020-01-10 00:00:00', '2020-05-18 00:00:00', '1580133411.jpg', 1, NULL, 1, NULL, NULL, '2020-01-11 09:17:52', '2020-03-23 11:03:02', '2020-03-23 11:03:02'),
(11, 'Publicité Oraimo', NULL, NULL, NULL, '2020-01-11 00:00:00', '2020-12-30 00:00:00', '1578783145.jpg', 1, NULL, 1, NULL, NULL, '2020-01-11 21:45:25', '2020-05-31 19:34:46', '2020-05-31 19:34:46'),
(12, 'Livraison à domicile', NULL, NULL, NULL, '2020-01-11 00:00:00', '2020-08-27 00:00:00', '1585355188.jpg', 1, NULL, 1, NULL, NULL, '2020-01-11 22:10:26', '2020-04-23 10:36:27', '2020-04-23 10:36:27'),
(13, 'Boutique Oraimo', NULL, NULL, NULL, '2020-01-12 00:00:00', '2020-04-01 00:00:00', '1578926635.png', 1, NULL, 6, NULL, NULL, '2020-01-13 10:53:12', '2020-04-23 10:36:54', '2020-04-23 10:36:54'),
(14, 'Airtel', NULL, NULL, NULL, '2020-03-27 00:00:00', '2020-11-29 00:00:00', '1585353265.jpg', 1, NULL, 1, NULL, 'https://www.facebook.com/airtelgabon/photos/a.404668316218252/3077729278912129/?type=3&theater', '2020-03-27 12:16:44', '2020-04-23 10:36:43', '2020-04-23 10:36:43'),
(15, 'Itel A 56', NULL, NULL, NULL, '2020-04-23 00:00:00', '2020-12-31 00:00:00', '1590735688.jpg', 1, NULL, 1, NULL, 'https://kadmarket.shop/store/afficher/1587645294-206-fsbyyndgg6-produit-itel-a-56', '2020-04-23 10:35:31', '2020-05-31 19:31:42', NULL),
(16, 'POP 3', NULL, NULL, NULL, '2020-04-23 00:00:00', '2020-12-31 00:00:00', '1590735714.jpg', 1, NULL, 1, NULL, 'https://kadmarket.shop/store/afficher/1587645463-203-4nmcroiwwr-produit-tecno-pop-3', '2020-04-23 10:38:22', '2020-05-31 19:31:59', NULL),
(17, 'Itel A56 Pro', NULL, NULL, NULL, '2020-05-21 00:00:00', '2020-06-30 00:00:00', '1590067158.jpg', 1, NULL, 1, NULL, NULL, '2020-05-21 11:19:18', '2020-05-21 11:19:19', NULL),
(18, 'Semaine Générosite', NULL, NULL, NULL, '2020-05-31 00:00:00', '2020-06-08 00:00:00', '1590960783.jpg', 1, NULL, 1, NULL, NULL, '2020-05-31 19:33:03', '2020-05-31 19:33:03', NULL),
(19, 'Tecno Camon 15 Premier', NULL, NULL, NULL, '2020-07-07 00:00:00', '2020-08-09 00:00:00', '1594098239.jpg', 1, NULL, 1, NULL, 'https://www.tecno-mobile.com/ci/phones/product-detail/product/camon-15-premier-2/', '2020-07-07 03:03:59', '2020-07-07 03:03:59', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_pubspositions`
--

CREATE TABLE `kdm_pubspositions` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `taille_x` varchar(255) DEFAULT NULL,
  `taille_y` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_pubspositions`
--

INSERT INTO `kdm_pubspositions` (`id`, `libelle`, `statut`, `taille_x`, `taille_y`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Slide principale', 1, '800', '500', '2019-11-03 20:31:01', NULL, NULL),
(2, 'Annexe slide 1', 1, '370', '250', '2019-11-03 20:31:38', NULL, NULL),
(3, 'Annexe slide 2', 1, '370', '250', '2019-11-03 20:31:54', NULL, NULL),
(4, 'Menu de gauche', 0, '600', '600', '2019-11-03 20:32:44', NULL, NULL),
(5, 'Pages infos generales', 1, '1170', '416', '2019-11-03 20:33:52', NULL, NULL),
(6, 'Mega menu', 1, '404', '310', '2019-11-14 02:37:09', NULL, NULL),
(7, 'Articles', 1, '870', '541', '2019-12-27 17:48:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_roles`
--

CREATE TABLE `kdm_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_roles`
--

INSERT INTO `kdm_roles` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'the awesome admin dashboard wich provide you all access', 'this-is-the-first-admin-role', '2019-05-24 09:51:30', '2019-05-24 09:51:30', NULL),
(2, 'client', 'Tous les compte clients', 'client', '2019-09-17 23:32:22', NULL, NULL),
(3, 'Partenaire', 'part', NULL, '2019-10-19 05:19:29', '2019-10-19 05:19:29', NULL),
(4, 'Fournisseur', 'Grossiste fournisseur de produit', NULL, '2019-10-19 05:20:01', '2019-10-19 05:20:01', NULL),
(5, 'Kadmarketeur', NULL, NULL, '2020-05-23 15:34:15', '2020-05-23 15:34:15', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_rubriques`
--

CREATE TABLE `kdm_rubriques` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL,
  `ordre` int(11) NOT NULL,
  `type_affichage` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `kdm_rubriques`
--

INSERT INTO `kdm_rubriques` (`id`, `titre`, `statut`, `ordre`, `type_affichage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Noel en feu', 0, 1, 'SLIDE', '2019-12-07 20:01:05', '2019-12-16 03:57:37', NULL),
(4, 'Offre de la semaine', 0, 1, 'SLIDE', '2020-02-05 21:13:50', '2020-02-08 10:42:44', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_rubrique_to_produits`
--

CREATE TABLE `kdm_rubrique_to_produits` (
  `id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `rubrique_id` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `ordre_affichage` int(11) NOT NULL DEFAULT '1',
  `is_lead_product` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_rubrique_to_produits`
--

INSERT INTO `kdm_rubrique_to_produits` (`id`, `produit_id`, `rubrique_id`, `statut`, `ordre_affichage`, `is_lead_product`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 97, 3, 1, 1, 0, '2020-02-05 20:22:15', '2020-02-05 20:22:15', NULL),
(2, 98, 3, 1, 1, 0, '2020-02-05 20:22:15', '2020-02-05 20:22:15', NULL),
(8, 102, 4, 1, 1, 0, '2020-02-08 10:12:13', '2020-02-08 10:12:13', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_setting`
--

CREATE TABLE `kdm_setting` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_setting`
--

INSERT INTO `kdm_setting` (`id`, `code`, `value`, `libelle`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'KADM_SHOP_ID', '1', 'Id de la boutique Kadmarket (Boutique par defaut)', NULL, NULL, NULL),
(2, 'TAUX_COMMISSION_KADMARKET', '10', 'Taux de commission de vente kadmarket', '2019-11-08 00:00:00', NULL, NULL),
(3, 'AM_MERCHANT_PHONE', '074870282', 'Numero du compte marchand Airtel money', '2020-05-04 00:00:00', NULL, NULL),
(4, 'TAUX_REDUCTION', '10', 'Taux de réduction pour les détenteur de code de réduction', '2020-05-05 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_shops`
--

CREATE TABLE `kdm_shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefice` double NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_shops`
--

INSERT INTO `kdm_shops` (`id`, `nom`, `telephone`, `email`, `adresse`, `logo`, `benefice`, `description`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'KADMARKET', '04980303', 'kadmarket@gmail.net', ' ', '12705.', 100, ' ', 'KADMARKET', NULL, NULL, NULL),
(2, 'INC Mobil', '02487589', 'incmobil@gmail.com', ' ', '', 10, ' ', 'INC Mobil', NULL, NULL, NULL),
(3, 'IMC TECH', '04528956', 'bouangaloraine@gmail.com', ' ', '31598.', 10, ' ', 'IMC TECH', NULL, NULL, NULL),
(5, 'MALABAR', '07504850', 'MAL@gmail.com', NULL, NULL, 10, NULL, 'MALABAR', NULL, '2019-09-17 17:59:00', '2019-09-17 17:59:00'),
(6, 'ORAIMO', 'tel test', 'demo@android.com', 'address', '/tmp/phpeHt8WU', 222, 'test', 'shop_1QDVDUnc8R', '2019-09-18 00:49:35', '2019-09-18 00:53:29', NULL),
(7, 'Admin', 'sdsdfsd', 'demo@android.com', 'address', 'kadmarket_8H2awvWB80Capture du 2019-07-17 10-39-38.png..png', 44, 'wer', 'shop_DemSPMDwPR', '2019-09-18 00:53:47', '2019-09-18 00:53:47', NULL),
(8, 'Admin rtest', 'tel test', 'demo@android.com', 'address', '', 444, 'fdg', 'shop_oAtudsGVYc', '2019-09-18 01:00:30', '2019-09-18 01:00:30', NULL),
(9, 'Adminceadsd', 'sdsdfsd', 'demo@android.com', 'address', '', 666, 'sdf', 'shop_wt7wlQhAct', '2019-09-18 01:03:45', '2019-09-18 01:03:45', NULL),
(10, 'Adminceadsd', 'sdsdfsd', 'demo@android.com', 'address', '', 666, 'sdf', 'shop_3a3GGwfXmC', '2019-09-18 01:06:50', '2019-09-18 01:06:50', NULL),
(11, 'dsdfgsfgd', 'test', 'demo@android.com', 'address', '', 998, 'sd', 'shop_6PQ7GNEHf9', '2019-09-18 01:08:09', '2019-09-18 01:08:09', NULL),
(12, 'Chez Barry', '02457896', 'barry@gmail.com', ' ', '', 10, ' ', 'Chez Barry', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_tarif_livraisons`
--

CREATE TABLE `kdm_tarif_livraisons` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `libelle` varchar(500) DEFAULT NULL,
  `montant` int(11) NOT NULL DEFAULT '1',
  `duree_livraison` varchar(200) NOT NULL DEFAULT '24h',
  `statut` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `kdm_tarif_livraisons`
--

INSERT INTO `kdm_tarif_livraisons` (`id`, `zone_id`, `mode_id`, `libelle`, `montant`, `duree_livraison`, `statut`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 1000, '24h', 1, '2020-05-03 03:37:54', NULL, NULL),
(2, 1, 2, NULL, 1000, '24h', 1, '2020-05-03 03:37:54', NULL, NULL),
(3, 1, 3, NULL, 1000, '24h', 1, '2020-05-03 03:37:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_users`
--

CREATE TABLE `kdm_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `role` int(11) NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text,
  `shop_id` int(11) NOT NULL DEFAULT '1',
  `confirm_token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_code` varchar(200) DEFAULT NULL,
  `reset_token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_kadmarketeur` varchar(255) DEFAULT NULL,
  `activate_kadmarketing` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_users`
--

INSERT INTO `kdm_users` (`id`, `nom`, `prenom`, `username`, `email`, `tel`, `password`, `statut`, `role`, `slug`, `image`, `shop_id`, `confirm_token`, `activation_code`, `reset_token`, `remember_token`, `code_kadmarketeur`, `activate_kadmarketing`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'KADMARKET', 'admin', 'jon@fake.io', NULL, '$2y$10$hhQglUahvZAtWIrSNJdlIeO/owmli0TfrZFlvUEEZASakog4AV7d6', 1, 1, 'theking-land-man-2018', NULL, 1, 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg', NULL, 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg', 'UN3K2vxNNmNvfcIlYjCPTvI2s1a3fzucmWVaW1XQS60Nsftdfvudei1nb7ze', NULL, 1, '2019-05-24 09:51:30', '2019-05-24 09:51:30', NULL),
(14, 'Gautier Wyatt', NULL, 'GautierWyatt@gmail.com', 'GautierWyatt@gmail.com', NULL, '$2y$10$8EF.PA8vLnW4K1wvN38A4OMXa/rCe8flbvtbyhY3L6EAf.AgErR.a', 0, 2, 'usr', NULL, 1, '$2y$10$kQiQQzGxCP59RowyhDqoruDlmvL8NWRovWi3Dz3CjHI7Z0vG8fqiC', 'XB9D', '$2y$10$zrPEQqbxhC6qgfaGGFU.YOr1SqS/pkF0h1H4JtHTpMQZjkfvJcxNq', NULL, NULL, 1, '2020-01-06 20:57:39', '2020-01-06 20:57:39', NULL),
(15, 'Beh Bive\'e Patrick Stéphane', NULL, '77314971', '77314971', NULL, '$2y$10$5.phZP23N9nQPqvD9vAAEu0FY/CJysHCGMvZdHDVGsl3SYaDN4JXS', 0, 2, 'usr', NULL, 1, '$2y$10$bU3CxbzAw3j4Geh6FU0ghuxy3pVmknt4vFhiCqfIj2twEZdbbPA1a', 'TUH7', '$2y$10$ZtsnVsTxCTahoSVVmsgWK.Ql/xS4C6nWA.SiXkm5lX5bmKWmmC8.2', NULL, NULL, 1, '2020-01-21 20:26:08', '2020-01-21 20:26:08', NULL),
(16, 'Ghislain koms', NULL, '066494592', '066494592', NULL, '$2y$10$YKV/YrQWUle1inmxci7MaO3E.yETSmf1rIdnuy9tmggKtpXSfApCK', 0, 2, 'usr', NULL, 1, '$2y$10$1smoDzqkbLsuFKVyju9kkOGVAAWA/wAT.t1hCblaYO3BOvbg0lZ/m', 'XHG8', '$2y$10$Qr.wRfw1vqiqW0Jt9XdEaOVu9aZL0UzDEpYokHqtkfrlN/cdjXyre', NULL, NULL, 1, '2020-01-28 14:56:14', '2020-01-28 14:56:14', NULL),
(17, 'Aïcha Mandimba', NULL, 'aichangombomoye@gmail.com', 'aichangombomoye@gmail.com', NULL, '$2y$10$aJN8z725FnOoi8Dot8AAJ.cm0UgvMrYb32wkvXPjoHNqoX5t0udC2', 0, 2, 'usr', NULL, 1, '$2y$10$A22u1pFcN49puR.SuTgrHO1htS7JisCc.QobCI6UuC9FeeqhBc/Za', 'W2WG', '$2y$10$AOGtha.O6xetjoGKJcTJw.PiJcZnvfj44pBIOhnEiWqDTgZFbg5Jm', NULL, NULL, 1, '2020-02-07 02:51:48', '2020-02-07 02:51:48', NULL),
(18, 'Christopher', NULL, 'ballatdanielchristopher@gmail.com', 'ballatdanielchristopher@gmail.com', NULL, '$2y$10$EvrEdV5TT4YOz1iUBsG1F.GejKiUSkseh4kEJ6.0nalsSTGNlinDW', 0, 2, 'usr', NULL, 1, '$2y$10$agUIwRI2aWe7kn4rMrNGp.t0r9lJr5U8zOPhKpEQw9gfsDmekYhQG', 'MYAV', '$2y$10$3YWXIZBLlsCoex.RkZNi.OUXFY6VPLU6NFEEXcyyWNgGJcw7E32lK', NULL, NULL, 1, '2020-02-12 22:34:52', '2020-02-12 22:34:52', NULL),
(44, 'sad', NULL, 'sessofa.godtechnologies@gmail.com....4', 'sessofa.godtechnologies@gmail.com....4', NULL, '$2y$10$yo9YrwYcZyULWFrKYluA1e62MB5rDOVDDbxRAogMBMTRtqtFevc26', 1, 2, 'usr', NULL, 1, '$2y$10$PAlEMLhKrMQeRorbm.wT0eKedscnYBwWFSosu1X.RUg1Jxnd.Ipeu', NULL, '$2y$10$BTK691LL95eLUEaqBhEALuDRasbnMS8OOCi/VvLPWfrAajMR7Eof2', 'soEmcTXCLPkO55QKhqFaTgX0cm5Gx8ItXruMJ0Xp79JYFWgwipe5xUAQPxRU', NULL, 1, '2020-05-04 12:00:34', '2020-05-04 12:00:42', NULL),
(46, 'sad', NULL, 'grandmarchef@gmail.com', 'grandmarchef@gmail.com', NULL, '$2y$10$rj7m76stCnNN0/ZCkQZCcuga6eJ72a9oqLGo84Eq9W.pRKI.30D46', 1, 2, 'usr', NULL, 1, '$2y$10$RD4NNQVtzOz3Vtxosyo3FOzxCORyoYa19tSXGKaEaCEl/SrjRFRDu', 'H6W4', '$2y$10$aJjvb9/VhYdaKhpDkQkn5eqaSWnwaFnRRyV0iba3OiegLBSVg0NlW', 'xCDFTODBqiPeSTuAtQmVxBYwUao7glZlrkvqCmKIypGJ43csMT58I3H5TsFE', NULL, 1, '2020-05-05 10:00:39', '2020-05-05 10:00:39', NULL),
(48, 'Jacklin', NULL, '077361818', '077361818', NULL, '$2y$10$0BtJ16nRuqrVrLt9n54BJewAHYHMcQzbo0L/MThY.rSARYDy0GhF.', 0, 2, 'usr', NULL, 1, '$2y$10$xQVw7mBMX0ZwctL8XvJR1.HJVXF/gcI76Iw/L1aWmdTnC/niEyg2.', 'I1IX', '$2y$10$Saojad5H64OjoqsHY.v.wuG.qXeHBHP4cECax8SsFIlTFdsQRv28q', NULL, NULL, 1, '2020-05-05 17:24:35', '2020-05-05 17:24:35', NULL),
(49, 'PCA', NULL, 'madjitolem@yahoo.fr', 'madjitolem@yahoo.fr', NULL, '$2y$10$VL02j4OVW1Cw5nMXEyfpcOWPIkti5wflIGusZGokTEkFLqRkNzKFu', 0, 2, 'usr', NULL, 1, '$2y$10$My.NR3k/FXIXFSGCJ/1fYO/Eh7oVtt.pFvU9.QEwQyKCpPMXzRbaK', '612L', '$2y$10$Hf4Sc4.m05LF5dn9u3xyzuR2BKmW6VU2.WeiICtzIvJ5/WyJOs9EK', NULL, NULL, 1, '2020-05-14 12:03:05', '2020-05-14 12:03:05', NULL),
(50, 'EDZANG ONDO SIMON', NULL, 'simonedzang31@gmail.com', 'simonedzang31@gmail.com', NULL, '$2y$10$PFYzLnvi5iRS2d5NlxLZ.eZKsUnBirjF/YnYDosa9./MSeTs.8Pu2', 1, 2, 'usr', NULL, 1, '$2y$10$61uhgf5jT73JhAEmktJHDeK4FSbKRCdp.vcAEy2YrDmpoKapykIzu', NULL, '$2y$10$CPPNjhNoDhLN.oMBM3G2vu98htfLy5OgtIDe34u0fEelqQ0O0uMMO', NULL, NULL, 1, '2020-05-18 02:45:47', '2020-05-18 02:46:18', NULL),
(51, 'Boguikouma bruno Elysée Stan', NULL, '062755034', '062755034', NULL, '$2y$10$Uo9kHlP811ecxU21UNxEpu7vDGjFbGeIzGDueZAPJzS75wItFrbSm', 0, 2, 'usr', NULL, 1, '$2y$10$C4/tzoR5o6I8Xz5a9lN2Se7dy93xTeb9p2kJTTXrzX.YV4cQtjf/S', '8BQZ', '$2y$10$tqRBKHb..8Amh0orA9LRCeiTczVWAe2How7XmENHLI8REL598jbYq', NULL, NULL, 1, '2020-05-21 12:17:51', '2020-05-21 12:17:51', NULL),
(57, 'sad', 'mmm', '077002872', 'sessofa.godtechnologies@gmail.com', '077002872', '$2y$10$Uw8mzK7RorkVG2vRt9wahubQEn4P9fUBCuRIJhiDUF2DlG6CQQjhy', 0, 3, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'I0ijRN', 1, '2020-05-23 12:59:42', '2020-05-23 12:59:42', NULL),
(59, 'MAYILA Tedd brayane', NULL, '+24277328566', '+24277328566', NULL, '$2y$10$D1Oof/gPfQ.cR/T.cxdLIevizt4RmdZpM.se/qiaBuwfQiXUlyxb2', 0, 2, 'usr', NULL, 1, '$2y$10$nlnfkOwu/hsezkerz9wmsutKRW46EZRu5BIpt2ELcGY5z32ywQbim', 'AF4I', '$2y$10$c8/6hJ8QqnrFzQS/O0kJve77/T83UyTIKx/UqJvASOyvM/xSTkqFy', NULL, NULL, 1, '2020-05-24 14:10:05', '2020-05-24 14:10:05', NULL),
(60, 'MAYILA Tedd brayane', NULL, '+24177328566', '+24177328566', NULL, '$2y$10$pZF3H4Vh57jAj.jjqZcN5.cuTqTxSqCJg6qJnuykW7dBJpNND5EVe', 0, 2, 'usr', NULL, 1, '$2y$10$pVPEWleS0bJCcb6NBnYns.hswmDnOexTuKkdkqjyVcZriOXPaQdqi', '8QWH', '$2y$10$Tkn1N.Tn7OtINkcqxRt5OO00mui8R4Scv7G7jbanLvt56iYUc6A8C', NULL, NULL, 1, '2020-05-24 14:11:52', '2020-05-24 14:11:52', NULL),
(61, 'MAYILA Tedd brayane', NULL, 'Brayanem14@gmail.com', 'Brayanem14@gmail.com', NULL, '$2y$10$3nff6JzpXCvgSvJtj99acuLJFN9w2UKDcgJP9KxMxnmzfJUnToUky', 1, 2, 'usr', NULL, 1, '$2y$10$QVYWBkh.XBKQrRmLLJcdS.dT9XnKksw.1kq6L7xyG0VP96tWSU6Eu', NULL, '$2y$10$q8b6YcQc4sfrozc5WszUN.TIVYNhwIQ/yG5UAp9ddG7ukxIp.n4ju', NULL, NULL, 1, '2020-05-24 14:14:02', '2020-05-24 14:15:49', NULL),
(62, 'MADJITOLEM', 'NEMONGUEL KEVIN', '074359192', 'madjitolemnem@gmail.com', '074359192', '$2y$10$/yWE9ueooWmrNzcGgqdr3.rCLm.FPCcJZDggkezSdElNU9iyCFld2', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'uAJWnj', 1, '2020-05-26 04:37:38', '2020-06-28 11:46:17', NULL),
(63, 'Jason ADIKADEMBO', NULL, '074188468', '074188468', NULL, '$2y$10$77K8AlIEKkfmKVn82YbZ4OqQb.bKapWxgdvx0bxXN3Vg6fEVWShZ2', 0, 2, 'usr', NULL, 1, '$2y$10$dUs3TIPBcPbOcxJkFtnstuNzhiRKDyq5K/Y8TzA19RqvUwFqbJKey', 'EKU9', '$2y$10$KBpjBsC5SA/pNvW0.V49J.noQLPQ84N1i.4y8AtVcA4H59e14.jDG', NULL, NULL, 1, '2020-05-31 13:14:46', '2020-05-31 13:14:46', NULL),
(64, 'NDONG BITEGUE Marky-Dassev', NULL, 'markydassevndongbitegue@gmail.com', 'markydassevndongbitegue@gmail.com', NULL, '$2y$10$XHz13sMYB5JfOSteLXVfuuBffGmXu8StLehGFL.jpKIoWlgLn1AKy', 0, 2, 'usr', NULL, 1, '$2y$10$VX1Z/pz1U2KAhaIEi/Hqu.MEH3KEMFWtxvU17.MtYApQPNq/.PZay', '228R', '$2y$10$Ze02k969PrAr6u2kz3Ip8.EdgVXOFFDrze6kvNYAxoSCnnkTLc/Dm', NULL, NULL, 1, '2020-06-03 05:01:57', '2020-06-03 05:01:57', NULL),
(67, 'ADIKADEMBO', 'Jason', '074188468', 'marinayenot2016@gmail.com', '074188468', '$2y$10$f/am7GXM7x2RcHhzi1B37uTqkpJEvkEBakniM0r1F3iD1bZnyJRgK', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'ODb1KJ', 1, '2020-06-06 11:16:00', '2020-06-13 02:57:45', NULL),
(68, 'Mbadinga', 'Kevine', '077270546', 'comptegratuit2020@gmail.com', '077270546', '$2y$10$xTRN3LP.ZLU8NoVNzzMjUu8V4loONX/Q/TDZXasCvhrA63JZ8.Oaq', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'OogiLJ', 1, '2020-06-12 08:25:42', '2020-06-28 11:47:28', NULL),
(69, 'OBOUNOU Rolex', NULL, 'rolexyann@gmail.com', 'rolexyann@gmail.com', NULL, '$2y$10$xUxjMtd8ybdrAY3o9JGdJeAD8Soi.D.jXZCYAVadqJTYgSmoju2Ga', 0, 2, 'usr', NULL, 1, '$2y$10$FQxOfPsZINi9UShMEREVbOXh9dnQ/mE3es5ssRB1vvZY4pOedVIJi', 'E8RB', '$2y$10$Pz/TVWxhZRdTWT8/EY7fyu9m8vXfHAFzFOEJvCqxOCl9SxSQDki7e', NULL, NULL, 1, '2020-06-12 14:53:24', '2020-06-12 14:53:24', NULL),
(70, 'OBOUNOU NKIZOGO', 'Rolex Yannick', '077189412', 'rolexyann@gmail.com', '077189412', '$2y$10$rX96bn5DEIEFMl22E8ouDO83/mS0iLx217uVz.mfrazP.F5zZSFSe', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'Xmsu56', 1, '2020-06-12 14:56:24', '2020-06-13 02:57:29', NULL),
(71, 'Nancy', NULL, 'Imbelanancy@gmail.com', 'Imbelanancy@gmail.com', NULL, '$2y$10$4YHDrh/VYKgO4P42BdtYM.6aB8y8xifJBwQhsA4WBloOsacabiJJW', 0, 2, 'usr', NULL, 1, '$2y$10$7kslKLEl4NyQDc0/YPWV/Ov7L8Ayz1SQl49.yPo8hITktrxrlkI5i', 'CFI2', '$2y$10$YcvGfaKBzlEc4DvNzWJWB.Wh5.jYw.fQDnivnEmuZv76gY4VgEkzm', NULL, NULL, 1, '2020-06-17 21:10:30', '2020-06-17 21:10:30', NULL),
(72, 'test', 'testkadmarketeur', '077124872', 'testkadmarketeur@gmail.com', '077124872', '$2y$10$hhQglUahvZAtWIrSNJdlIeO/owmli0TfrZFlvUEEZASakog4AV7d6', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, 'cI3n92ZpsxLX5FTqJDMEZCjh5z1XUXzkn7mqyIfBawOT15Fa1LeyxBGxGCSb', 'WqtwFe', 1, '2020-06-23 12:34:34', '2020-06-23 12:37:25', NULL),
(73, 'FIOSSI', 'Chancel', '066216057', 'cfiossi2@gmail.com', '066216057', '$2y$10$xTwRXcI3BIZLt0q2Im0XFejRYBn0lqRxGfPeBiz6dCnOVQDt1RZ46', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'Wv2KqQ', 1, '2020-06-25 13:20:31', '2020-06-28 11:46:07', NULL),
(74, 'FIOSSI Chancel', NULL, 'cfiossi2@gmail.com', 'cfiossi2@gmail.com', NULL, '$2y$10$HQS1LPQikUl99.hZlSG2R.ibUB8bQt0zwLYxahk1nqvme2RTJ4ZPS', 0, 2, 'usr', NULL, 1, '$2y$10$/LG.n6mh6yue4zyle6JLeOPQOM4R1A3zMqq1x9fypY2eGCUBzjJ5q', 'CH4F', '$2y$10$.W.Vk.7gSq6LwnKWtVGWM.fcnMT0wTQFKs3ItCOXDrcXJiEkiYMhG', NULL, NULL, 1, '2020-06-25 13:24:35', '2020-06-25 13:24:35', NULL),
(75, 'KADIE', 'Jacklin', '077361818', 'cklino@hotmail.fr', '077361818', '$2y$10$HBMbZq1UgLXr7dJ8EfUBPOFKmiLN11ZXem2JCwBG6.xFEjsy9VbrO', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, '0VYvli', 1, '2020-06-25 21:56:01', '2020-06-28 11:47:01', NULL),
(76, 'Jean Baptiste', NULL, 'inangjeanbaptistediel@gmail.com', 'inangjeanbaptistediel@gmail.com', NULL, '$2y$10$yzZ.i6oeG9/C3USVgUC8de2sl3UQJLiUzyFj758jxedIT8UTq5f7O', 0, 2, 'usr', NULL, 1, '$2y$10$c2v/NdCRIvgMzAbYGsYpL.toJpP4dijzkEwnFZkNV/00Uwq8Vizpu', 'RB7V', '$2y$10$o.2mU2zbMereS71hRPVQQuHs7nZCrplG.Dox/b9sc2lUY7y0/TjBq', NULL, NULL, 0, '2020-06-29 10:33:28', '2020-06-29 10:33:28', NULL),
(77, 'Biyogo', 'Dimitri', '062122197', 'dimitribiyogo@gmail.com', '062122197', '$2y$10$OsyG5rCfgutNOYY03SBkSey3QzhlRdjqSzOag6bD3a.I0oTQhPbtq', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'W8fj11', 0, '2020-06-29 15:27:12', '2020-07-01 06:32:50', NULL),
(78, 'Mboumba', 'Clyde', '074656398', 'Andrewclyde6@gmai.com', '074656398', '$2y$10$r9rZa8m.GABbyoy5XNuGGezifvYvX.yyJsBtAbkKwcZ.zxulaLVxy', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'krcUjm', 0, '2020-07-01 03:57:16', '2020-07-01 06:30:15', NULL),
(79, 'FIOSSI', 'Chancel', '066216057', 'cfiossi2@gmail.com', '066216057', '$2y$10$mERjK8o7hxL2rFXFrF8BP.DD7u2QHp7axzpHr8WSnqqY8vGcE49fi', 1, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'GGdJuV', 0, '2020-07-01 08:21:42', '2020-07-09 09:03:22', NULL),
(80, 'Kadmarketeur 1', 'Jean', '074980303', 'kadmarket@gmail.com', '074980303', '$2y$10$vvBVRM3H9Nc3HPrD.zIRGe232qtMqkw/tyl82O8RgXGvTshcyIJQK', 0, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'QvFqZv', 0, '2020-07-02 05:21:19', '2020-07-02 05:21:19', NULL),
(81, 'William maxwell', NULL, '60158572', '60158572', NULL, '$2y$10$tLcm1ofdCTK9pt5y9W2mIOljqiM6LK39T4mP6POdzzelBq7pguBRK', 0, 2, 'usr', NULL, 1, '$2y$10$3ESuV4E7IeBPr8fqcND8iuBiAE/WJxBrJke9iFmHehLVH4KxiuqOu', '4BOT', '$2y$10$hLWWK2D6tNkXe1kahhB2KOZ/DFBOHIwjlUFuBmiodR6NU.QJW5uW6', NULL, NULL, 0, '2020-07-04 03:08:52', '2020-07-04 03:08:52', NULL),
(82, 'Moussavou Adolphe', NULL, '066367153', '066367153', NULL, '$2y$10$x9qXDubr6yimZ3.V3D9Jn.A5rXUkiTztcpg.0qh.nvbKrKBeBN3tK', 0, 2, 'usr', NULL, 1, '$2y$10$an9TetuNNpVs9heSVEmWYOVx6b8bFAoma4CCdQmK9Oi.envTAvWRK', 'HOCG', '$2y$10$mQ3Ewv.utgKWy3wrzJYLDeuI.a2EtNieV6weY17My72Pse6LBnqMK', NULL, NULL, 0, '2020-07-04 14:59:12', '2020-07-04 14:59:12', NULL),
(83, 'ntsame mba legault linda judriska', NULL, 'judriska24@gmail.com', 'judriska24@gmail.com', NULL, '$2y$10$w36xZqfcXYEnESzGpfVhdO/vW/y7jBTPvwBbctfBgkWXLQ.hF/pxq', 0, 2, 'usr', NULL, 1, '$2y$10$BWHj/4pwkPPzPkms1/af5eWIZfOOki2ndG0JpOybwkLwaBu.a8CnW', 'MVCH', '$2y$10$graghF97JmJQgzniy6tAm.aTNDtPjk1OMwPfkBDbtTuIuV07qIsLW', NULL, NULL, 0, '2020-07-10 15:14:27', '2020-07-10 15:14:27', NULL),
(84, 'MOUKOLOKO', 'DANE CHARNEL', '066132391', 'foudoumoukolokodan@gmail.com', '066132391', '$2y$10$.FxXk1Upmu64xkMhpG.fb.xN4B1C8B3jbjZtcEzIWXTvs0/n7Z3Mq', 0, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2my6ey', 0, '2020-07-14 19:51:17', '2020-07-14 19:51:17', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `kdm_venteflashes`
--

CREATE TABLE `kdm_venteflashes` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `produit` int(11) NOT NULL,
  `prix_flash` double NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_venteflashes`
--

INSERT INTO `kdm_venteflashes` (`id`, `produit`, `prix_flash`, `date_debut`, `date_fin`, `description`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 200000, '2019-05-22', '2019-06-01', 'test', NULL, '2019-05-28 11:50:35', '2019-05-28 12:21:52', '2019-05-28 12:21:52');

-- --------------------------------------------------------

--
-- Structure de la table `kdm_ventes`
--

CREATE TABLE `kdm_ventes` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `produit` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `kdm_zonelivraisons`
--

CREATE TABLE `kdm_zonelivraisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdm_zonelivraisons`
--

INSERT INTO `kdm_zonelivraisons` (`id`, `nom`, `description`, `slug`, `statut`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Libreville', 'Commune de libreville', 'libreville', 1, '2020-05-02 22:00:00', NULL, NULL),
(2, 'Owendo', 'Commune d\'Owendo', 'owendo', 1, NULL, NULL, NULL),
(3, 'Akanda', 'Commune d\'Akanda', 'Akanda', 1, '2020-05-02 22:00:00', NULL, NULL),
(4, 'Port-Gentil', 'Port-Gentil', 'port-gentil', 1, NULL, NULL, NULL),
(5, 'Lambaréné', 'Lambaréné', 'lambarene', 1, NULL, NULL, NULL),
(6, 'Mouila', 'Mouila', 'mouila', 1, NULL, NULL, NULL),
(7, 'Tchibanga', 'Tchibanga', 'tchibanga', 1, NULL, NULL, NULL),
(8, 'Makokou', 'Makokou', 'Makokou', 1, NULL, NULL, NULL),
(9, 'Oyem', 'Oyem', 'Oyem', 1, NULL, NULL, NULL),
(10, 'Ndjolé', 'Ndjolé', 'Ndjole', 1, NULL, NULL, NULL),
(11, 'Ovan', 'Ovan', 'Ovan', 1, NULL, NULL, NULL),
(12, 'Fougamou', 'Fougamou', 'Fougamou', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

CREATE TABLE `livraisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `commande` int(11) NOT NULL,
  `mode_livraison` int(11) NOT NULL,
  `livre_par` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_paiement` int(11) NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `kdm_caracteriques`
--
ALTER TABLE `kdm_caracteriques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_categories`
--
ALTER TABLE `kdm_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_code_reduction`
--
ALTER TABLE `kdm_code_reduction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_commandes`
--
ALTER TABLE `kdm_commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_details_commandes`
--
ALTER TABLE `kdm_details_commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_images`
--
ALTER TABLE `kdm_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_marques`
--
ALTER TABLE `kdm_marques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_modelivraisons`
--
ALTER TABLE `kdm_modelivraisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_modepaiements`
--
ALTER TABLE `kdm_modepaiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_news_subscribers`
--
ALTER TABLE `kdm_news_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_paiements`
--
ALTER TABLE `kdm_paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_panier`
--
ALTER TABLE `kdm_panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_partenaires`
--
ALTER TABLE `kdm_partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_posts`
--
ALTER TABLE `kdm_posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_post_cats`
--
ALTER TABLE `kdm_post_cats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_produits`
--
ALTER TABLE `kdm_produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_produits_to_images`
--
ALTER TABLE `kdm_produits_to_images`
  ADD PRIMARY KEY (`id_produits`,`id_images`);

--
-- Index pour la table `kdm_publicites`
--
ALTER TABLE `kdm_publicites`
  ADD KEY `id` (`id`);

--
-- Index pour la table `kdm_pubspositions`
--
ALTER TABLE `kdm_pubspositions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_roles`
--
ALTER TABLE `kdm_roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_rubriques`
--
ALTER TABLE `kdm_rubriques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_rubrique_to_produits`
--
ALTER TABLE `kdm_rubrique_to_produits`
  ADD KEY `id` (`id`);

--
-- Index pour la table `kdm_setting`
--
ALTER TABLE `kdm_setting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_shops`
--
ALTER TABLE `kdm_shops`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_tarif_livraisons`
--
ALTER TABLE `kdm_tarif_livraisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_users`
--
ALTER TABLE `kdm_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kdm_zonelivraisons`
--
ALTER TABLE `kdm_zonelivraisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `kdm_caracteriques`
--
ALTER TABLE `kdm_caracteriques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT pour la table `kdm_categories`
--
ALTER TABLE `kdm_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `kdm_code_reduction`
--
ALTER TABLE `kdm_code_reduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `kdm_commandes`
--
ALTER TABLE `kdm_commandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `kdm_details_commandes`
--
ALTER TABLE `kdm_details_commandes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `kdm_images`
--
ALTER TABLE `kdm_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT pour la table `kdm_marques`
--
ALTER TABLE `kdm_marques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `kdm_modelivraisons`
--
ALTER TABLE `kdm_modelivraisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `kdm_modepaiements`
--
ALTER TABLE `kdm_modepaiements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `kdm_news_subscribers`
--
ALTER TABLE `kdm_news_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `kdm_paiements`
--
ALTER TABLE `kdm_paiements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `kdm_panier`
--
ALTER TABLE `kdm_panier`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT pour la table `kdm_partenaires`
--
ALTER TABLE `kdm_partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `kdm_posts`
--
ALTER TABLE `kdm_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `kdm_post_cats`
--
ALTER TABLE `kdm_post_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `kdm_produits`
--
ALTER TABLE `kdm_produits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT pour la table `kdm_publicites`
--
ALTER TABLE `kdm_publicites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `kdm_pubspositions`
--
ALTER TABLE `kdm_pubspositions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `kdm_roles`
--
ALTER TABLE `kdm_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `kdm_rubriques`
--
ALTER TABLE `kdm_rubriques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `kdm_rubrique_to_produits`
--
ALTER TABLE `kdm_rubrique_to_produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `kdm_setting`
--
ALTER TABLE `kdm_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `kdm_shops`
--
ALTER TABLE `kdm_shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `kdm_tarif_livraisons`
--
ALTER TABLE `kdm_tarif_livraisons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `kdm_users`
--
ALTER TABLE `kdm_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `kdm_zonelivraisons`
--
ALTER TABLE `kdm_zonelivraisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `livraisons`
--
ALTER TABLE `livraisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
