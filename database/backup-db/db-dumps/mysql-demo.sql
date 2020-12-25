
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `admin_access_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_access_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `admin_access_infos_admin_id_foreign` (`admin_id`) USING BTREE,
  CONSTRAINT `admin_access_infos_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `admin_access_infos` WRITE;
/*!40000 ALTER TABLE `admin_access_infos` DISABLE KEYS */;
INSERT INTO `admin_access_infos` VALUES (1,1,'::1','US','PC','Chrome',1,'2019-04-13 21:23:58','2019-04-13 21:23:58'),(2,1,'::1','US','PC','Chrome',1,'2019-04-13 21:32:58','2019-04-13 21:32:58'),(3,1,'::1','US','PC','Chrome',1,'2019-04-13 09:54:11','2019-04-13 09:54:11'),(4,1,'::1','US','PC','Chrome',1,'2019-04-13 09:54:28','2019-04-13 09:54:28'),(5,1,'::1','US','PC','Chrome',1,'2019-04-13 11:15:57','2019-04-13 11:15:57'),(6,1,'::1','US','PC','Chrome',1,'2019-04-14 07:02:21','2019-04-14 07:02:21'),(7,1,'::1',NULL,'PC','Chrome',1,'2019-04-15 12:30:22','2019-04-15 12:30:22'),(8,1,'::1',NULL,'PC','Chrome',1,'2019-04-16 12:40:57','2019-04-16 12:40:57'),(9,1,'::1',NULL,'PC','Chrome',1,'2019-04-18 12:56:28','2019-04-18 12:56:28'),(10,1,'::1',NULL,'PC','Chrome',1,'2019-04-19 09:40:46','2019-04-19 09:40:46'),(11,1,'127.0.0.1',NULL,'PC','Firefox',1,'2019-04-19 09:52:12','2019-04-19 09:52:12'),(12,1,'::1',NULL,'PC','Chrome',1,'2019-04-19 09:52:53','2019-04-19 09:52:53'),(13,1,'::1',NULL,'PC','Chrome',1,'2019-04-19 10:10:57','2019-04-19 10:10:57'),(14,1,'::1',NULL,'PC','Chrome',1,'2019-04-21 13:35:26','2019-04-21 13:35:26'),(15,1,'::1',NULL,'PC','Chrome',1,'2019-04-23 11:19:55','2019-04-23 11:19:55'),(16,2,'::1',NULL,'PC','Chrome',1,'2019-04-23 12:18:56','2019-04-23 12:18:56'),(17,1,'::1',NULL,'PC','Chrome',1,'2019-04-23 12:19:59','2019-04-23 12:19:59'),(18,1,'::1',NULL,'PC','Firefox',1,'2019-04-25 09:33:47','2019-04-25 09:33:47'),(19,1,'::1',NULL,'PC','Firefox',1,'2019-04-25 11:28:26','2019-04-25 11:28:26'),(20,1,'::1',NULL,'PC','Firefox',1,'2019-04-25 22:14:32','2019-04-25 22:14:32'),(21,1,'::1',NULL,'PC','Chrome',1,'2019-04-30 05:41:04','2019-04-30 05:41:04'),(22,1,'::1',NULL,'PC','Chrome',1,'2019-06-14 21:44:09','2019-06-14 21:44:09');
/*!40000 ALTER TABLE `admin_access_infos` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_role` tinyint(4) DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `admins_email_unique` (`email`) USING BTREE,
  UNIQUE KEY `admins_username_unique` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Super Admin','super@gmail.com','superadmin',1,'public/images/admins/1556265063.png','$2y$10$cW9KVqhUuLOearR9Uhr9yeiUBnxRPJvY3KsjttKr77tKMNZab7Ncm',1,'d6OPS5bVirEvKreL58LDqijh13Rm1c6Ea1CymFC8oI5KMxTjbJzCpTkEf5gH','2019-03-25 01:00:00','2019-04-26 01:51:05'),(2,'Admin','admin@gmail.com','admin',2,NULL,'$2y$10$3eUb3dspSaecGyAWo0jOp.r2N83ZUQRYaJMh/058e3apUV5XSmlQq',1,'sZE0KVFsqcRuovw6Eu0YQ5VywZRgduSp3CXwxauqRtiDsrVYRl7z8dZWYhxK','2019-03-25 01:00:00','2019-04-26 02:15:22'),(3,'aaaaaa','afzalsabbir.bd@gmail.com','aaaaaa',3,NULL,'$2y$10$P1rFOIiR1hB4IdUDBw/KKenlpz9LK80jAw/IWulwNUXF6hnc90lzu',1,NULL,'2019-04-25 13:46:07','2019-04-25 13:46:07'),(4,'bbbbbb','afzalbd1@gmail.comk','bbbbbb',3,NULL,'$2y$10$wpvJp1iVMxNM6Tkzn9IRwe6CftljT2xXkj13euFuV.mJorisuC17y',1,NULL,'2019-04-25 13:47:19','2019-04-25 13:47:19');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `menu_position` int(10) unsigned DEFAULT NULL COMMENT '0 - Left | 1 - Left In | 2 - Right Top',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Dashboard','ড্যাশবোর্ড',NULL,0,'fa fa-dashboard','/admin','admin.home',1,1,'2019-03-24 23:02:05','2019-03-24 23:02:05'),(2,'Menu Permission','মেনু পারমিশন',NULL,0,'fa fa-diamond','/admin/role','admin.role.index',900,1,'2019-03-24 22:44:32','2019-06-14 23:06:38'),(3,'Action','একশন',2,0,'fa fa-home','/admin/role','admin.role.index',1,1,'2019-04-23 05:27:09','2019-04-23 05:27:09'),(4,'Assign','অনুমতি প্রদান',3,1,'fa fa-pencil','/admin/role/assign','admin.role.assign',1,1,'2019-03-24 22:48:50','2019-04-23 05:27:39'),(5,'Site Settings','সাইট সেটিংস',NULL,0,'fa fa-sliders','/admin/setting','admin.setting.index',500,1,'2019-04-10 16:30:44','2019-04-10 20:33:10'),(6,'Change Password','পাসওয়ার্ড পরিবর্তন',NULL,2,'fa fa-cog','/admin/change-password','admin.password.form',2,1,'2019-03-24 22:42:35','2019-04-23 06:20:29'),(7,'Log Activity','লগ এক্টিভিটি',NULL,0,'fa fa-history','/admin/log','admin.log.index',950,1,'2019-03-24 22:46:37','2019-06-14 23:06:54'),(23,'All Admin','সকল এডমিন',NULL,2,'fa fa-users','/admin/all-admin','admin.all_admin.index',1,1,'2019-04-10 20:37:34','2019-04-23 05:43:40'),(24,'Add Admin','এডমিন যোগ করুন',23,0,'fa fa-plus','/admin/all-admin/add','admin.all_admin.add',2,1,'2019-04-10 20:39:51','2019-04-10 20:39:51'),(25,'Action','একশন',23,0,'fa fa-home','/admin/all-admin','admin.all_admin.index',1,1,'2019-04-23 06:27:34','2019-04-23 06:27:34'),(26,'Edit','এডিট',25,1,'fa fa-pencil',NULL,'admin.all_admin.edit',1,1,'2019-04-10 20:40:57','2019-04-23 06:28:07'),(27,'Delete','ডিলিট',25,1,'fa fa-trash',NULL,'admin.all_admin.delete',2,1,'2019-04-10 20:42:59','2019-04-23 06:28:13'),(28,'Backup','ব্যাকআপ',NULL,0,'fa fa-database','/admin/backup','admin.backup.index',1000,1,'2019-04-18 21:49:55','2019-06-14 23:07:17'),(29,'Action','কার্যক্রম',28,0,'fa fa-home','/admin/backup','admin.backup.index',1,0,'2019-04-18 21:51:23','2019-04-18 21:54:34'),(30,'Download','ডাউনলোড',29,1,'fa fa-download',NULL,'admin.backup.index',1,1,'2019-04-18 21:52:24','2019-04-18 21:52:24'),(31,'Delete','ডিলিট',29,1,'fa fa-trash',NULL,'admin.backup.index',2,1,'2019-04-18 21:52:58','2019-04-18 21:52:58'),(32,'SMS','এসএমএস',NULL,0,'fa fa-envelope',NULL,NULL,499,1,NULL,'2019-06-14 23:02:09'),(33,'Send','প্রেরন',32,0,'fa fa-commenting','admin/sms/send','admin.sms.send',1,1,NULL,'2019-06-14 23:00:46'),(34,'Custom','কাস্টম',32,0,'fa fa-comment-o','admin/sms/custom','admin.sms.custom',2,1,NULL,'2019-06-14 23:01:06'),(35,'Report','প্রতিবেদন',32,0,'fa fa-indent','admin/sms/report','admin.sms.report',3,1,NULL,'2019-06-14 23:01:39');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2018_03_26_200821_create_admins_table',1),(2,'2019_03_04_084037_create_menus_table',1),(3,'2019_03_05_074453_create_roles_table',1),(4,'2019_03_06_090310_create_admin_access_infos_table',1),(5,'2019_03_25_140240_create_password_resets_table',1),(6,'2019_03_25_140240_create_users_table',1),(7,'2019_03_25_140140_create_units_table',2),(8,'2019_03_25_140157_create_categories_table',2),(9,'2019_03_25_140207_create_sub_categories_table',2),(10,'2019_03_25_140231_create_brands_table',2),(11,'2019_04_10_152516_create_settings_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu` text COLLATE utf8mb4_unicode_ci,
  `sub_menu` text COLLATE utf8mb4_unicode_ci,
  `in_body` text COLLATE utf8mb4_unicode_ci,
  `admin_id` int(10) DEFAULT NULL,
  `role` tinyint(3) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (9,'[\"32\",\"1\",\"28\",\"2\",\"7\",\"23\",\"5\",\"6\"]','[\"3\",\"33\",\"35\",\"34\",\"24\",\"25\",\"29\"]','[\"30\",\"4\",\"31\",\"11\",\"27\",\"16\",\"22\",\"21\",\"17\",\"26\",\"12\"]',1,1,1,'2019-04-25 22:41:31','2019-06-14 23:04:04'),(10,'[\"2\",\"7\",\"28\"]','[\"29\",\"3\"]','[\"30\",\"4\",\"31\"]',4,3,1,'2019-04-26 00:33:57','2019-04-26 01:42:30'),(12,'[\"23\",\"1\",\"6\",\"5\",\"2\",\"28\",\"7\"]','[\"29\",\"3\",\"25\",\"24\"]','[\"30\",\"26\",\"31\",\"4\",\"21\",\"17\",\"11\",\"12\",\"16\",\"22\",\"27\"]',2,2,1,'2019-04-26 01:33:19','2019-06-14 23:04:05');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'public/images/settings/logo-1556222447.png','public/images/settings/favicon-1556222459.png','Demo','ডেমো','superadmin@Restaurent-Bill.com','01234567890','https://fb.com/Demo','twitter','youtube','linkedin','City: Mymensingh\r\nCountry: Bangladesh\r\nState: Mymensingh Division\r\nZipcode: 2200','1','2019-04-10 12:00:00','2019-04-25 14:01:41');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sms_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sms_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sms` longtext COLLATE utf8_unicode_ci,
  `sending_date` date DEFAULT NULL,
  `sms_count` tinyint(3) DEFAULT '1',
  `send_by` int(11) DEFAULT NULL,
  `is_send` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sms_records` WRITE;
/*!40000 ALTER TABLE `sms_records` DISABLE KEYS */;
INSERT INTO `sms_records` VALUES (1,'01624390079','Hi Khairul vai','2019-04-30',NULL,1,1),(2,'01515255819','sgfhgfhg','2019-04-30',1,1,1),(3,'01624390079','sgfhgfhg','2019-04-30',1,1,1),(4,'01969481541','sgfhgfhg','2019-04-30',1,1,1),(5,'01515255819','hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you','2019-04-30',2,1,1),(6,'01624390079','hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you','2019-04-30',2,1,1),(7,'01515255819','ssds','2019-04-30',1,1,1),(8,'01624390079','ssds','2019-04-30',1,1,1),(9,'01969481541','ssds','2019-04-30',1,1,1),(10,'01515255819','d','2019-04-30',1,1,1),(11,'01515255819','d','2019-04-30',1,1,1),(12,'01624390079','d','2019-04-30',1,1,1),(13,'01713576627','hey','2019-04-30',1,1,1),(14,'01969481541','hey','2019-04-30',1,1,1),(15,'01515255819','h','2019-04-30',1,1,1),(16,'01969481541','h','2019-04-30',1,1,1),(17,'01515255819','d','2019-04-30',1,1,1),(18,'01515255819','d','2019-04-30',1,1,1),(19,'01515255819','s','2019-04-30',1,1,1);
/*!40000 ALTER TABLE `sms_records` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` tinyint(4) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(10) unsigned DEFAULT NULL,
  `upazilla_id` int(10) unsigned DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  UNIQUE KEY `users_mobile_unique` (`mobile`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Demo','demo@gmail.com','01515255819','demo',NULL,1,'$2y$10$tQVwD5VequDrZsgg5NUaHexmp3fGf.XI7zylpDEqSxf9WJITYiRWO',NULL,NULL,NULL,'','1',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

