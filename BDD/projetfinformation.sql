-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour projetfinformation
CREATE DATABASE IF NOT EXISTS `projetfinformation` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projetfinformation`;

-- Listage de la structure de table projetfinformation. comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `publication_id` int DEFAULT NULL,
  `body` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `commentDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_comment`),
  KEY `Comment_Users_FK` (`user_id`) USING BTREE,
  KEY `FK_comment_publication` (`publication_id`),
  CONSTRAINT `FK_comment_publication` FOREIGN KEY (`publication_id`) REFERENCES `publication` (`id_publication`),
  CONSTRAINT `FK_comment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetfinformation.comment : ~2 rows (environ)
DELETE FROM `comment`;
INSERT INTO `comment` (`id_comment`, `user_id`, `publication_id`, `body`, `image`, `commentDate`) VALUES
	(27, 1, 1, 'rip, paix &agrave; son &acirc;me', '', '2023-06-05 11:56:23'),
	(29, 1, 1, 'il va me manquer', '', '2023-06-05 14:23:53'),
	(30, 1, 1, 'j&#039;adore son &oelig;uvre, je vais acheter ses livres', '', '2023-06-05 14:24:16'),
	(31, 1, 3, 'je pr&eacute;f&egrave;re les pieges', 'apaisement.jpg', '2023-06-06 08:38:16');

-- Listage de la structure de table projetfinformation. deck
CREATE TABLE IF NOT EXISTS `deck` (
  `id_deck` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `deckName` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cards` json DEFAULT NULL,
  `deckPresentation` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `imgDeck` text,
  `deckDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_deck`) USING BTREE,
  KEY `user_id` (`user_id`),
  KEY `deck_id` (`id_deck`) USING BTREE,
  CONSTRAINT `FK_deck_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetfinformation.deck : ~1 rows (environ)
DELETE FROM `deck`;
INSERT INTO `deck` (`id_deck`, `user_id`, `deckName`, `cards`, `deckPresentation`, `imgDeck`, `deckDate`) VALUES
	(1, 1, 'deck', NULL, 'Un Deck Fait Pour L\'initiation, il est constitué de monstres normal, quelques monstres à effet, des cartes magie et pièges.\r\nVous ne disposerez pas d\'extra Deck, pour ne pas vous perdre dans cet initiation', 'https://wsrv.nl/?url=https://s3.duellinksmeta.com/mdm_img/content/guides/intro-tearlamentv.webp&w=640&output=webp&we&n=-1&maxage=7d', '2023-06-16 09:37:21');

-- Listage de la structure de table projetfinformation. post
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int NOT NULL AUTO_INCREMENT,
  `body` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `postDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_send` int NOT NULL,
  `user_recieve` int NOT NULL,
  PRIMARY KEY (`id_post`) USING BTREE,
  KEY `Messages_Users_FK` (`user_send`) USING BTREE,
  KEY `Messages_Users0_FK` (`user_recieve`) USING BTREE,
  CONSTRAINT `FK_messages_users` FOREIGN KEY (`user_send`) REFERENCES `user` (`id_user`),
  CONSTRAINT `FK_messages_users_2` FOREIGN KEY (`user_recieve`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetfinformation.post : ~2 rows (environ)
DELETE FROM `post`;
INSERT INTO `post` (`id_post`, `body`, `postDate`, `user_send`, `user_recieve`) VALUES
	(1, 'Salut poto', '2023-05-23 17:49:20', 1, 2),
	(2, 'wesh ma poule', '2023-05-23 17:49:55', 2, 1);

-- Listage de la structure de table projetfinformation. publication
CREATE TABLE IF NOT EXISTS `publication` (
  `id_publication` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `body` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `publicationDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_publication`),
  KEY `Publication_Users_FK` (`user_id`) USING BTREE,
  CONSTRAINT `FK_publication_users` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table projetfinformation.publication : ~3 rows (environ)
DELETE FROM `publication`;
INSERT INTO `publication` (`id_publication`, `user_id`, `body`, `img`, `publicationDate`) VALUES
	(1, 1, 'Bonjour, je Vous Pr&eacute;sente Kazuki Takahashi, l&#039;auteur et p&egrave;re de l&#039;univers sur lequel repose l&#039;enti&egrave;ret&eacute; de ce site.\r\nIl nous &agrave; malheureusement quitt&eacute; dans D&#039;horrible circonstance, le 4 juillet 2022 Dernier.', 'Kazuki_takahashi.jpg', '2023-06-05 11:24:47'),
	(2, 1, 'ce monstre vent est top', 'avian.jpg', '2023-06-05 11:33:13'),
	(3, 1, 'j&#039;adore cette magie', 'amis.jpg', '2023-06-05 11:44:33');

-- Listage de la structure de table projetfinformation. reponse
CREATE TABLE IF NOT EXISTS `reponse` (
  `id_reponse` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `comment_id` int DEFAULT NULL,
  `body` text,
  `img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `reponseDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_reponse`) USING BTREE,
  KEY `FK_reponse_comment` (`comment_id`),
  KEY `FK_reponse_user` (`user_id`),
  CONSTRAINT `FK_reponse_comment` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id_comment`),
  CONSTRAINT `FK_reponse_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table projetfinformation.reponse : ~7 rows (environ)
DELETE FROM `reponse`;
INSERT INTO `reponse` (`id_reponse`, `user_id`, `comment_id`, `body`, `img`, `reponseDate`) VALUES
	(1, 2, 27, 'Salut, j\'adore ton commentaire', NULL, '2023-06-05 13:52:28'),
	(6, 3, 29, 'a moi aussi, courage', NULL, '2023-06-05 14:24:50'),
	(7, 1, 30, 'tu est sur de toi? ça fait beaucoup d\'argent pour des livres', NULL, '2023-06-05 14:25:20'),
	(8, 1, 27, 'moi aussi', '', '2023-06-06 09:46:04'),
	(9, 1, 27, 'je vous offre mon amiti&eacute;', 'amis.jpg', '2023-06-06 09:46:50'),
	(10, 1, 27, 'vos personnages vous rendent hommage monsieur', 'fanart.jpg', '2023-06-06 10:57:47'),
	(11, 2, 27, 'moi de m&ecirc;me', '', '2023-06-06 11:54:26');

-- Listage de la structure de table projetfinformation. user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `role` json NOT NULL,
  `registerDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetfinformation.user : ~3 rows (environ)
DELETE FROM `user`;
INSERT INTO `user` (`id_user`, `pseudo`, `avatar`, `email`, `password`, `role`, `registerDate`) VALUES
	(1, 'Teuteu68', 'moi.jpg', 'mathieu.stamm@gmail.com', '$2y$10$5PoL5UXNXtOmAIJW/diFFOgjroiJYOXC./nKLJhmU1JCl2lYod26q', '["ROLE_ADMIN"]', '2023-05-22 08:48:11'),
	(2, 'Teuteu', 'Yu-Gi-Oh!.jpg', 'mathieustamm@petalmail.com', '$2y$10$PbxV6tTQaqQHTUayiSVpQOqdX8XwBASPVg20bwHjg97EE29I4K.iO', '["ROLE_USER"]', '2023-05-22 09:14:57'),
	(3, 'mamath68', 'Yu-Gi-Oh-R.jpg', 'mathieu.stamm@outlook.com', '$2y$10$vxYtYF1cvtweEVrHPaunKeqV.z8Vp7QfJ/x1FV.HIfmqbOjH3Euyq', '["ROLE_USER"]', '2023-05-22 09:22:54');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
