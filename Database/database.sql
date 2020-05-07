-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5139
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for project-sitisi
CREATE DATABASE IF NOT EXISTS `project-sitisi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `project-sitisi`;

-- Dumping structure for table project-sitisi.application
CREATE TABLE IF NOT EXISTS `application` (
  `student_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Έγγαμος/η` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Άγαμος άνω των 25 ετών` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Μόνιμος κάτοικος νομού Σερρών` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Πολύτεκνος` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Αδελφός/ή στον Α’ κύκλο σπουδών` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Γονείς Διαζευγμένοι` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Τέκνο άγαμης μητέρας` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Ιδίου` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Γονέα` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Αδελφού` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Τέκνου` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Συζύγου` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Πατέρας` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Μητέρα` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Ημερομηνία Υποβολής της Αίτησης` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Ολογράφως Υπογραφή` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Φωτογραφία` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Επίθετο` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Όνομα` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Όνομα Πατέρα` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Όνομα Μητέρας` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Ημερομηνία γέννησης` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Πόλη Μόνιμης Κατοικίας γονέων` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Τηλ. οικίας` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Αριθμ. κινητού τηλ` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Αριθμ. Μητρώου` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Τμήμα` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  ` Εξάμηνο σπουδών` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  ` Έτος εισαγωγής` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sasa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.application: ~0 rows (approximately)
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
/*!40000 ALTER TABLE `application` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.application_type
CREATE TABLE IF NOT EXISTS `application_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabled` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.application_type: ~3 rows (approximately)
/*!40000 ALTER TABLE `application_type` DISABLE KEYS */;
REPLACE INTO `application_type` (`id`, `name`, `disabled`) VALUES
	(1, 'Αίτηση Σίτισης', 'no'),
	(2, 'Αίτηση Χορήγησης Στεγαστικού Επιδόματος', 'yes');
/*!40000 ALTER TABLE `application_type` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.cache: ~0 rows (approximately)
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.fields
CREATE TABLE IF NOT EXISTS `fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) DEFAULT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_order` int(11) DEFAULT NULL,
  `menu` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_fields_application_type` (`app_id`),
  CONSTRAINT `FK_fields_application_type` FOREIGN KEY (`app_id`) REFERENCES `application_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.fields: ~46 rows (approximately)
/*!40000 ALTER TABLE `fields` DISABLE KEYS */;
REPLACE INTO `fields` (`id`, `app_id`, `name`, `value`, `display_order`, `menu`) VALUES
	(1, 1, 'Επίθετο', 'Πεδίο-Συμπλήρωσης', 2, 4),
	(3, 1, 'Όνομα Πατέρα', 'Πεδίο-Συμπλήρωσης', 4, 4),
	(4, 1, 'Όνομα Μητέρας', 'Πεδίο-Συμπλήρωσης', 5, 4),
	(5, 1, 'Ημερομηνία γέννησης', 'Πεδίο-Συμπλήρωσης', 6, 4),
	(6, 1, 'Πόλη Μόνιμης Κατοικίας γονέων', 'Πεδίο-Συμπλήρωσης', 7, 4),
	(7, 1, 'Τηλ. οικίας', 'Πεδίο-Συμπλήρωσης', 8, 4),
	(8, 1, 'Αριθμ. κινητού τηλ', 'Πεδίο-Συμπλήρωσης', 9, 4),
	(9, 1, 'Αριθμ. Μητρώου', 'Πεδίο-Συμπλήρωσης', 10, 4),
	(10, 1, 'Τμήμα', 'Πεδίο-Συμπλήρωσης', 11, 4),
	(11, 1, 'Εξάμηνο σπουδών', 'Πεδίο-Συμπλήρωσης', 12, 4),
	(12, 1, 'Έτος εισαγωγής', 'Πεδίο-Συμπλήρωσης', 13, 4),
	(13, 1, '1.Έγγαμος/η', 'Πεδίο-Επιλογής', 14, 4),
	(14, 1, '2.Άγαμος άνω των 25 ετών', 'Πεδίο-Επιλογής', 15, 4),
	(15, 1, '3.Μόνιμος κάτοικος νομού Σερρών', 'Πεδίο-Επιλογής', 16, 4),
	(16, 1, '4.Πολύτεκνος', 'Πεδίο-Επιλογής', 17, 4),
	(17, 1, '5.Αδελφός/ή στον Α’ κύκλο σπουδών', 'Πεδίο-Επιλογής', 18, 4),
	(18, 1, '6.Γονείς Διαζευγμένοι', 'Πεδίο-Επιλογής', 19, 4),
	(19, 1, '7.Τέκνο άγαμης μητέρας', 'Πεδίο-Επιλογής', 20, 4),
	(20, 1, '8.Αναπηρία άνω του 67%', 'Παράγραφος', 21, 4),
	(21, 1, '-Ιδίου', 'Πεδίο-Επιλογής', 22, 4),
	(22, 1, '-Γονέα', 'Πεδίο-Επιλογής', 23, 4),
	(23, 1, '-Αδελφού', 'Πεδίο-Επιλογής', 24, 4),
	(24, 1, '-Τέκνου', 'Πεδίο-Επιλογής', 25, 4),
	(25, 1, '-Συζύγου', 'Πεδίο-Επιλογής', 26, 4),
	(26, 1, '9.Αποθανόντες γονείς', 'Παράγραφος', 27, 4),
	(27, 1, '-Πατέρας', 'Πεδίο-Επιλογής', 28, 4),
	(28, 1, '-Μητέρα', 'Πεδίο-Επιλογής', 29, 4),
	(29, 1, 'ΠΡΟΣ:', 'Παράγραφος', 2, 5),
	(30, 1, 'Τ.Ε.Ι. ΚΕΝΤΡΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ Τμήμα : Σπουδών, Πρακτικής Άσκησης, Σταδιοδρομίας & Σπουδαστικής Μέριμνας', 'Παράγραφος', 4, 5),
	(31, 1, 'Παρακαλώ για την παροχή δωρεάν σίτισης για το τρέχον ακαδημαϊκό έτος', 'Παράγραφος', 3, 5),
	(32, 1, 'Υποβάλλω συνημμένα ΔΙΚΑΙΟΛΟΓΗΤΙΚΑ:', 'Παράγραφος', 5, 5),
	(33, 1, '1.ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΕΦΟΡΙΑΣ ΦΟΡ.ΕΤΟΥΣ', 'Παράγραφος', 6, 5),
	(34, 1, '2.ΠΡΟΣΦΑΤΟ ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ', 'Παράγραφος', 7, 5),
	(35, 1, '3.ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΤΟΥ Ν. 1599/1986.', 'Παράγραφος', 8, 5),
	(36, 1, 'ΕΠΙΠΛΕΟΝ ΠΙΣΤΟΠΟΙΗΤΙΚΑ ΕΙΔΙΚΩΝ ΠΕΡΙΠΤΩΣΕΩΝ (ΟΠΟΥ ΑΠΑΙΤΕΊΤΑΙ)', 'Παράγραφος', 9, 5),
	(37, 1, '1.Πιστοποιητικό της Ανώτατης Συνομοσπονδίας Πολυτέκνων', 'Παράγραφος', 10, 5),
	(38, 1, '2.Βεβαίωση σπουδών αδερφού/ής στον Ά κύκλο σπουδών.', 'Παράγραφος', 11, 5),
	(39, 1, '3.Πιστοποιητικό Υγειονομικής Επιτροπής για αναπηρία άνω του 67%.', 'Παράγραφος', 12, 5),
	(40, 1, '4.Ληξιαρχική Πράξη θανάτου του αποβιώσαντα γονέα.', 'Παράγραφος', 13, 5),
	(41, 1, '5. Οι φοιτητές των οποίων οι γονείς είναι διαζευγμένοι θα υποβάλλουν:', 'Παράγραφος', 14, 5),
	(42, 1, '-Εκκαθαριστικό Εφορίας φορ. έτους με το εισόδημα του γονέα που έχει τη γονική μέριμνα του φοιτητή/τριας.', 'Παράγραφος', 15, 5),
	(43, 1, '-Διαζευκτήριο και απόφαση δικαστηρίου ή ιδιωτικό συμφωνητικό σχετικά με την επιμέλεια του φοιτητή/τριας.', 'Παράγραφος', 16, 5),
	(44, 1, '-Πρόσφατη Υπεύθυνη Δήλωση του γονέα ότι τον βαρύνουν αποκλειστικά τα έξοδα του φοιτητή/τριας, θεωρημένη από Αστυνομικό Τμήμα για το γνήσιο της υπογραφής.', 'Παράγραφος', 17, 5),
	(45, 1, 'Ολογράφως Υπογραφή', 'Πεδίο-Συμπλήρωσης', 18, 5),
	(53, 1, 'Όνομα', 'Πεδίο-Συμπλήρωσης', 3, 4),
	(88, 1, 'Αίτηση Σίτισης', 'Όνομα-Αίτησης', NULL, NULL);
/*!40000 ALTER TABLE `fields` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.infofields
CREATE TABLE IF NOT EXISTS `infofields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) DEFAULT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_order` int(11) DEFAULT NULL,
  `menu` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_infofields_application_type` (`app_id`),
  CONSTRAINT `FK_infofields_application_type` FOREIGN KEY (`app_id`) REFERENCES `application_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.infofields: ~16 rows (approximately)
/*!40000 ALTER TABLE `infofields` DISABLE KEYS */;
REPLACE INTO `infofields` (`id`, `app_id`, `name`, `display_order`, `menu`) VALUES
	(11, 1, '1. Τον λογαριασμό σου egram για να συνδεθείς.', 2, 2),
	(12, 1, '2. Το πρόσφατο ατομικό-εκκαθαριστικό σου εάν υποβάλλεις φορολογική δήλωση και το οικογενειακό-εκκαθαριστικό,από το taxisnet', 3, 2),
	(13, 1, '3. Πρόσφατο πιστοποιητικό οικογενειακής κατάστασης(ΚΕΠ).', 4, 2),
	(14, 1, '4. Εκτυπωτή(για την Υπεύθυνη Δήλωση καθως θα χρειαστείς σφραγίδα επικύρωσης από τα ΚΕΠ).', 5, 2),
	(33, 1, '5. Σαρωτή(ώστε να σαρώσεις τα απαραίτητα έγγραφα).', 6, 2),
	(34, 1, '1. Συμπλήρωση της Αίτησης Σίτισης ηλεκτρονικά.', 1, 3),
	(35, 1, '2.', 2, 3),
	(36, 1, 'α. Συμπλήρωση της Υπεύθυνης Δήλωσης ηλεκτρονικά.', 3, 3),
	(37, 1, 'β. Εκτύπωση για επικύρωση στα ΚΕΠ.', 4, 3),
	(38, 1, 'γ. Σάρωση.', 5, 3),
	(39, 1, '3. Σάρωση πιστοποιητικού Οικογενειακής κατάστασης.', 6, 3),
	(40, 1, '4. Μεταφόρτωση(Upload) όλων των δικαιολογητικών σε μορφή pdf.', 7, 3),
	(41, 1, '5. Αναμονή επιβεβαίωσης ορθότητας Αίτησης απο τη Γραμματεία μέσω e-mail.', 8, 3),
	(42, 1, '6. Αναμονή ενημέρωσης απο τη Γραμματεία για παραλαβή κάρτας σίτισης.', 9, 3),
	(43, 2, 'fdt', 2, 2),
	(44, 2, 'td', 2, 1);
/*!40000 ALTER TABLE `infofields` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(3, '2018_12_24_143442_create_sitisis_table', 1),
	(4, '2018_12_24_173215_create_students_table', 2),
	(5, '2018_12_24_183455_create_forms_table', 3),
	(21, '2018_12_24_185205_create_items_table', 4),
	(22, '2018_12_24_185223_create_item_details_table', 4),
	(23, '2018_12_24_185305_items', 4),
	(27, '2019_03_22_151927_create_admins_table', 5),
	(28, '2014_10_12_000000_create_users_table', 6),
	(29, '2014_10_12_100000_create_password_resets_table', 6),
	(30, '2019_03_29_143630_create_sessions_table', 7),
	(31, '2019_03_30_121339_create_cache_table', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.password_resets: ~4 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
REPLACE INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('Mitsos@hotmail.com', '$2y$10$Dx/vNJ8T2.zkVM1EV7CWke3NYhOlD56UPRurqQIfi7wq2jb00wHmi', '2019-03-26 20:27:57'),
	('Alexandros_Chatzis@hotmail.com', '$2y$10$f5ojmT3QphwFzCBQSP8F4.3q/ei3gBBVyOUcnAiZcETOG.WUOkjpS', '2019-03-28 14:13:19'),
	('Mitsos@hotmail.com', '$2y$10$Dx/vNJ8T2.zkVM1EV7CWke3NYhOlD56UPRurqQIfi7wq2jb00wHmi', '2019-03-26 20:27:57'),
	('Alexandros_Chatzis@hotmail.com', '$2y$10$f5ojmT3QphwFzCBQSP8F4.3q/ei3gBBVyOUcnAiZcETOG.WUOkjpS', '2019-03-28 14:13:19');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.singleupload
CREATE TABLE IF NOT EXISTS `singleupload` (
  `app_id` int(11) DEFAULT NULL,
  `uploadedfile` longtext,
  KEY `FK__application_type` (`app_id`),
  CONSTRAINT `FK__application_type` FOREIGN KEY (`app_id`) REFERENCES `application_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table project-sitisi.singleupload: ~2 rows (approximately)
/*!40000 ALTER TABLE `singleupload` DISABLE KEYS */;
REPLACE INTO `singleupload` (`app_id`, `uploadedfile`) VALUES
	(1, 'studentuploads/5X3TYH7CSzpiH5Iyzrilr1ROuzlZoOcG8lmgYxWL.pdf'),
	(1, 'studentuploads/5X3TYH7CSzpiH5Iyzrilr1ROuzlZoOcG8lmgYxWL.pdf');
/*!40000 ALTER TABLE `singleupload` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` int(10) DEFAULT NULL,
  `student_aem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document0` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document4` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document5` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document6` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document7` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document8` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document9` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document10` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document11` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document12` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document13` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document14` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document15` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document16` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document17` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document18` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document19` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document20` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document21` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document22` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document23` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document24` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document25` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalization` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `FK_students_application_type` (`app_id`),
  KEY `FK_students_users` (`student_aem`),
  CONSTRAINT `FK_students_users` FOREIGN KEY (`student_aem`) REFERENCES `users` (`aem`)
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.students: ~1 rows (approximately)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
REPLACE INTO `students` (`id`, `app_id`, `student_aem`, `document0`, `document1`, `document2`, `document3`, `document4`, `document5`, `document6`, `document7`, `document8`, `document9`, `document10`, `document11`, `document12`, `document13`, `document14`, `document15`, `document16`, `document17`, `document18`, `document19`, `document20`, `document21`, `document22`, `document23`, `document24`, `document25`, `finalization`, `created_at`, `updated_at`) VALUES
	(189, 1, '3731', 'studentuploads/Y5v1w7HLK5lsAKx2TzBONNeW4KR52pbRQPqz4Pel.pdf', 'studentuploads/F1EnLentF9hDCfCVmanTrLA4leS9BeCaNJ2YBu2R.pdf', NULL, NULL, 'studentuploads/lN7NjdcWfXWeKglFq2tCyd7x6jw3lvwi0CoFCYld.pdf', NULL, NULL, NULL, 'studentuploads/E53DPABpE3JJQXP5IYpIkLUzKL6P3pgsMg3CNSKl.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2019-11-17 17:36:08', '2019-07-23 18:27:45');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.submitfields
CREATE TABLE IF NOT EXISTS `submitfields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) DEFAULT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `menu` int(11) DEFAULT NULL,
  `display_order` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_submitfields_application_type` (`app_id`),
  CONSTRAINT `FK_submitfields_application_type` FOREIGN KEY (`app_id`) REFERENCES `application_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.submitfields: ~11 rows (approximately)
/*!40000 ALTER TABLE `submitfields` DISABLE KEYS */;
REPLACE INTO `submitfields` (`id`, `app_id`, `name`, `menu`, `display_order`) VALUES
	(26, 1, '*ΑΙΤΗΣΗ ΣΙΤΙΣΗΣ', 2, 2),
	(27, 1, '*ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ', 3, 2),
	(28, 1, 'ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΑΤΟΜΙΚΟ', 4, 2),
	(29, 1, '*ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΟΙΚΟΓΕΝΕΙΑΚΟ', 2, 3),
	(30, 1, 'ΒΕΒΑΙΩΣΗ ΣΠΟΥΔΩΝ ΑΔΕΛΦΟΥ-ΗΣ', 3, 3),
	(31, 1, '*ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ', 4, 3),
	(32, 1, 'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΑΝΩΤΑΤΗΣ ΣΥΝΟΜΟΣΠΟΝΔΙΑΣ ΠΟΛΥΤΕΚΝΩΝ', 2, 4),
	(33, 1, 'ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΥΓΕΙΟΝΟΜΙΚΗΣ ΕΠΙΤΡΟΠΗΣ', 3, 4),
	(34, 1, 'ΛΗΞΙΑΡΧΙΚΗ ΠΡΑΞΗ ΘΑΝΑΤΟΥ', 4, 4),
	(35, 1, 'ΔΙΑΖΕΥΚΤΗΡΙΟ Ή ΙΔΙΩΤΙΚΟ ΣΥΜΦΩΝΗΤΙΚΟ', 2, 5),
	(36, 1, 'ΠΡΟΣΦΑΤΗ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΓΟΝΕΑ ΓΙΑ ΕΞΟΔΑ ΕΠΙΒΑΡΥΝΣΗΣ', 4, 5);
/*!40000 ALTER TABLE `submitfields` ENABLE KEYS */;

-- Dumping structure for table project-sitisi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` int(11) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_aem_unique` (`aem`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project-sitisi.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `aem`, `email`, `email_verified_at`, `password`, `approval`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(6, 'Alex', '3730', 'Alexandros_Chatzis@hotmail.com', NULL, '$2y$10$V4HeEQlwnFq4Z49ljOUxGO0UD3TsekDiAq0UQ9PZw9677TtiNSfkq', 0, 1, 'bVpOggkUWFWVVevzZz0ki0ROMNfqTrSVW3Htjb8Y5wEfFljHJ98jrFCo7dTa', '2019-03-22 20:10:27', '2019-03-26 20:36:40'),
	(13, 'Mitsos', '3731', 'Alexchatzis95@gmail.com', NULL, '$2y$10$.36xzTKisUzyBPMBusnRj.isNC0tZI5lzIRgyVnwz3RJU2VgZQN0S', 1, 0, '77zpC3IMjLmGoyYmZkZjjlDTQKLgzlBY4zkYOh6nZeQ0DPGWgZwGabVQLmJB', '2019-03-24 16:43:47', '2019-03-26 16:55:29'),
	(14, 'admin', 'admin', 'Alexandros_Chatzis@yahoo.com', NULL, '$2y$10$mw2fJUoehgnnGeT7k4WwHOxsuWc.SW39md/HeB.5zJKWzSgnRGrv2', 0, 3, 'BmuTHqj2WN9gYvEfzIsxGUsAvlDOLb7KbjB2cODHOgAmpiD8oBTrnWygy7vg', '2019-03-27 19:36:56', '2019-03-27 19:36:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
