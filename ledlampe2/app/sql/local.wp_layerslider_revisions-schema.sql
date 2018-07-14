/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_layerslider_revisions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `slider_id` int(10) NOT NULL,
  `author` int(10) NOT NULL DEFAULT '0',
  `data` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_c` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
