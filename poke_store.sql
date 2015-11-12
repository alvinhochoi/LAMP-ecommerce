CREATE DATABASE  IF NOT EXISTS `ecommerce_kr` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecommerce_kr`;
-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: ecommerce_kr
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Stevenn','steven@gmail.com','$2y$10$IS0tLerk.jkBbUIEJGTVeOJ9Xgm.7YB9m48TfswxHTzCPBn.xcgj6');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `billing_first_name` varchar(45) DEFAULT NULL,
  `billing_last_name` varchar(45) DEFAULT NULL,
  `billing_address` varchar(45) DEFAULT NULL,
  `billing_city` varchar(45) DEFAULT NULL,
  `billing_state` varchar(45) DEFAULT NULL,
  `billing_zip` varchar(45) DEFAULT NULL,
  `credit` varchar(45) DEFAULT NULL,
  `s_code` varchar(45) DEFAULT NULL,
  `expiration` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Steven','Kang','123 noble ave','burbank','ca','91324','Steven','Kang','897 running way','burabnk','ca','91234','1234123412341234','234','12/2019','2014-04-13 00:00:00','2014-04-13 00:00:00'),(2,'Alvin','Choi','123 noble ave','burbank','ca','98765','Alvin ','Choi','456 thur st','northridge','ca','98767','3456345634563456','987','12/2018','2014-04-13 00:00:00','2014-04-13 00:00:00'),(3,'Nick','Ko','123 noble ave','burbank','ca','98765','Nick','Ko','867 ult st','van nuys','ca','34523','6789678967896789','675','09/2016','2014-04-13 00:00:00','2014-04-13 00:00:00');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `category` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  `quantity_sold` int(11) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Bulbasaur','A strange seed was planted on its back at birth. The plant sprouts and grows with this Pokémon.','Grass',19.99,50,0,'uploads/001.png'),(2,'Ivysaur','When the bulb on its back grows large, it appears to lose the ability to stand on its hind legs.','Grass',49.99,20,0,'uploads/002.png'),(3,'Venosaur','The plant blooms when it is absorbing solar energy. It stays on the move to seek sunlight.','Grass',99.99,5,0,'uploads/003.png'),(4,'Charmander','Obviously prefers hot places. When it rains, steam is said to spout from the tip of its tail.','Fire',19.99,50,0,'uploads/004.png'),(5,'Charmeleon','When it swings its burning tail, it elevates the temperature to unbearably high levels.','Fire',49.99,20,0,'uploads/005.png'),(6,'Charizard','It spits fire that is hot enough to melt boulders. Known to cause forest fires unintentionally.','Fire',99.99,5,0,'uploads/006.png'),(7,'Squirtle','After birth, its back swells and hardens into a shell. Powerful sprays foam from its mouth.','Water',19.99,50,0,'uploads/007.png'),(8,'Wartortle','Often hides in water to stalk unwary prey. For swimming fast, it moves its ears to maintain balance.','Water',49.99,20,0,'uploads/008.png'),(9,'Blastoise','A brutal Pokémon with pressurized water jets on its shell. They are used for high speed tackles.','Water',99.99,5,0,'uploads/009.png'),(10,'Pidgey','A common sight in forests and woods. It flaps its wings at ground level to kick up blinding sand.','Normal',9.99,100,0,'uploads/016.png'),(11,'Pidgeotto','Very protective of its sprawling territorial area, this Pokémon will fiercely peck at any intruder.','Normal',29.99,50,0,'uploads/017.png'),(12,'Pidgeot','When hunting, it skims the surface of water at high speed to pick off unwary prey such as Magikarp.','Normal',49.99,20,0,'uploads/018.png'),(13,'Pikachu','When several of these Pokémon gather, their electricity could build and cause lightning storms.','Electric',19.99,50,0,'uploads/025.png'),(14,'Raichu','Its long tail serves as a ground to protect itself from its own high voltage power.','Electric',49.99,25,0,'uploads/026.png'),(15,'Nidoran♀','Although small, its venomous barbs render this Pokémon dangerous. The female has smaller horns.','Poison',9.99,100,0,'uploads/029.png'),(16,'Nidorina','The female\'s horn develops slowly. Prefers physical attacks such as clawing and biting.','Poison',29.99,50,0,'uploads/030.png'),(17,'Nidoqueen','Its hard scales provide strong protection. It uses its hefty bulk to execute powerful moves.','Poison',79.99,25,0,'uploads/031.png'),(18,'Nidoran♂ ','Stiffens its ears to sense danger. The larger its horns, the more powerful its secreted venom.','Poison',9.99,100,0,'uploads/032.png'),(19,'Nidorino','An aggressive Pokémon that is quick to attack. The horn on its head secretes a powerful venom.','Poison',29.99,50,0,'uploads/033.png'),(20,'Nidoking','It uses its powerful tail in battle to smash, constrict, then break the prey\'s bones.','Poison',79.99,25,0,'uploads/034.png'),(21,'Diglett','Lives about one yard underground where it feeds on plant roots. It sometimes appears above ground.','Ground',19.99,50,0,'uploads/050.png'),(22,'Dugtrio','A team of Diglett triplets. It triggers huge earthquakes by burrowing 60 miles underground.','Ground',49.99,25,0,'uploads/051.png'),(23,'Psyduck','While lulling its enemies with its vacant look, this wily Pokémon will use psychokinetic powers.','Water',19.99,50,0,'uploads/054.png'),(24,'Golduck','Often seen swimming elegantly by lake shores. It is often mistaken for the Japanese monster, Kappa.','Water',49.99,25,0,'uploads/055.png'),(25,'Abra','Using its ability to read minds, it will identify impending danger and Teleport to safety.','Psychic',19.99,50,0,'uploads/063.png'),(26,'Kadabra','It emits special alpha waves from its body that induce headaches just by being close by.','Psychic',49.99,25,0,'uploads/064.png'),(27,'Alakazam','Its brain can outperform a super-computer. Its intelligence quotient is said to be 5,000.','Psychic',99.99,10,0,'uploads/065.png'),(28,'Machop','Loves to build its muscles. It trains in all styles of martial arts to become even stronger.','Fighting',19.99,100,0,'uploads/066.png'),(29,'Machoke','Its muscular body is so powerful, it must wear a power save belt to be able to regulate its motions.','Fighting',49.99,50,0,'uploads/067.png'),(30,'Machamp','Using its heavy muscles, it throws powerful punches that can send the victim clear over the horizon.','Fighting',99.99,25,0,'uploads/068.png'),(31,'Gastly','Almost invisible, this gaseous Pokémon cloaks the target and puts it to sleep without notice.','Ghost',9.99,50,0,'uploads/092.png'),(32,'Haunter','Because of its ability to slip through block walls, it is said to be from another dimension.','Ghost',29.99,25,0,'uploads/093.png'),(33,'Gengar','Under a full moon, this Pokémon likes to mimic the shadows of people and laugh at their fright.','Ghost',89.99,10,0,'uploads/094.png'),(34,'Kangaskhan','The infant rarely ventures out of its mother\'s protective pouch until it is 3 years old.','Normal',49.99,50,0,'uploads/115.png'),(35,'Mr. Mime','If interrupted while it is miming, it will slap around the offender with its broad hands.','Psychic',29.99,50,0,'uploads/122.png'),(36,'Scyther','With ninja-like agility and speed, it can create the illusion that there is more than one.','Bug',39.99,40,0,'uploads/123.png'),(37,'Pinsir','If it fails to crush the victim in its pincers, it will swing it around and toss it hard.','Bug',29.99,40,0,'uploads/127.png'),(38,'Magikarp','In the distant past, it was somewhat stronger than the horribly weak descendants that exist today.','Water',0.99,1000,0,'uploads/129.png'),(39,'Gyarados','Rarely seen in the wild. Huge and vicious, it is capable of destroying entire cities in a rage.','Water',199.99,5,0,'uploads/130.png'),(40,'Ditto','Capable of copying an enemy\'s genetic code to instantly transform itself into a duplicate of the enemy.','Normal',9.99,25,0,'uploads/132.png'),(41,'Aerodactyl','A ferocious, prehistoric Pokémon that goes for the enemy\'s throat with its serrated saw-like fangs.','Rock',99.99,5,0,'uploads/142.png'),(42,'Snorlax','Very lazy. Just eats and sleeps. As its rotund bulk builds, it becomes steadily more slothful.','Normal',99.99,5,0,'uploads/143.png'),(43,'Articuno','A legendary bird Pokémon that is said to appear to doomed people who are lost in icy mountains.','Ice',1000000,1,0,'uploads/144.png'),(44,'Zapdos','A legendary bird Pokémon that is said to appear from clouds while dropping enormous lightning bolts.','Electric',1000000,1,0,'uploads/145.png'),(45,'Moltres','Known as the legendary bird of fire. Every flap of its wings creates a dazzling flash of flames.','Fire',1000000,1,0,'uploads/146.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping`
--

DROP TABLE IF EXISTS `shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`product_id`,`order_id`),
  KEY `fk_products_has__1_idx` (`order_id`),
  KEY `fk_products_has__products_idx` (`product_id`),
  CONSTRAINT `fk_products_has__1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_products_has__products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping`
--

LOCK TABLES `shipping` WRITE;
/*!40000 ALTER TABLE `shipping` DISABLE KEYS */;
INSERT INTO `shipping` VALUES (17,2,1,1,'In Process','2015-09-01 00:00:00','2015-09-01 00:00:00'),(18,3,2,2,'pending','2015-09-01 00:00:00','2015-09-01 00:00:00'),(19,12,1,1,'In Process','2015-09-01 00:00:00','2015-09-01 00:00:00'),(20,14,3,2,'pending','2015-09-01 00:00:00','2015-09-01 00:00:00'),(21,4,3,1,'pending','2015-09-01 00:00:00','2015-09-01 00:00:00'),(22,24,2,1,'pending','2015-09-01 00:00:00','2015-09-01 00:00:00');
/*!40000 ALTER TABLE `shipping` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-04 13:35:09
