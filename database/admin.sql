-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: goodsTrade
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2019-03-08 10:20:07'),(2,0,7,'系统管理','fa-tasks',NULL,NULL,'2020-01-09 22:03:26'),(3,2,8,'管理员','fa-users','auth/users',NULL,'2020-01-09 22:03:26'),(4,2,9,'角色','fa-user','auth/roles',NULL,'2020-01-09 22:03:26'),(5,2,10,'权限','fa-ban','auth/permissions',NULL,'2020-01-09 22:03:26'),(6,2,11,'菜单','fa-bars','auth/menu',NULL,'2020-01-09 22:03:26'),(7,2,12,'操作日志','fa-history','auth/logs',NULL,'2020-01-09 22:03:26'),(8,0,2,'用户管理','fa-bars','/users','2019-03-08 10:22:29','2019-03-08 10:22:49'),(9,0,3,'订单管理','fa-cny','/orders','2019-03-08 10:25:53','2019-03-08 10:25:58'),(10,0,4,'商品管理','fa-archive','/products','2019-03-08 12:36:26','2019-03-08 12:36:39'),(11,0,6,'管理类目','fa-bar-chart-o','/categories','2019-03-22 15:01:10','2020-01-09 22:04:19'),(12,0,5,'优惠券管理','fa-angellist','/coupon_codes','2020-01-09 22:03:16','2020-01-09 22:04:19');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2019-03-08 10:23:51','2019-03-08 10:23:51'),(7,'类目管理','catorgory','','/categories*','2020-03-12 11:42:51','2020-03-12 11:44:03'),(8,'订单管理','orders','','/orders*','2020-03-12 11:50:29','2020-03-12 11:50:29'),(9,'商品管理','products','','/products*','2020-03-12 11:51:08','2020-03-12 11:51:08'),(11,'优惠券管理','coupons','','/coupon_codes*','2020-03-12 11:52:32','2020-03-12 11:52:32');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(3,2,NULL,NULL),(3,3,NULL,NULL),(3,4,NULL,NULL),(3,6,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(3,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2019-03-08 10:14:42','2019-03-08 10:14:42'),(3,'Operator','operator1','2020-03-12 11:37:27','2020-03-12 11:37:27');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$sScldNuHZJe.CL2LYH4A.O9RTkGcvEkfdNxQqGxXd.iAotsR9Hd4.','Administrator',NULL,'qZ69PbySZN2mDbpkXIpg9nD5vrHs92FKwF3zSwCvQ351TsKB12UC7tU1IEu6','2019-03-08 10:14:41','2019-03-08 10:14:41'),(2,'operater','$2y$10$J6oCjbURXn..mN.Qy0SHAuggl/io0Ftb7ph1ar4RatSfLBJrsOm86','运营',NULL,'wqYaecAMmM1Hnc9MZR95aSVyCsScPZb5OtLEufe4D3IHyxDeRmRDqpHHGnl2','2020-03-12 11:40:57','2020-03-12 11:40:57');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-12  9:50:30
