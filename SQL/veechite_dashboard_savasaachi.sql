-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2019 at 11:19 PM
-- Server version: 5.7.23-23
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veechite_dashboard_savasaachi`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(20) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `entry_date` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `package` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `contact` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `expired_date` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `note` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `fb_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `fb_user` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `fb_pass` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `twitter_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `twitter_user` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `twitter_pass` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `insta_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `insta_user` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `insta_pass` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `trip_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `gplus_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `gbusiness_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `youtube_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `gphoto_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `website_url` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email_user` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `email_pass` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `bs_status` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `team_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `designer` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `writer` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `posting` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `other_link` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `type`, `country`, `entry_date`, `package`, `address`, `contact`, `email`, `expired_date`, `note`, `fb_url`, `fb_user`, `fb_pass`, `twitter_url`, `twitter_user`, `twitter_pass`, `insta_url`, `insta_user`, `insta_pass`, `trip_url`, `gplus_url`, `gbusiness_url`, `youtube_url`, `gphoto_url`, `website_url`, `email_user`, `email_pass`, `file`, `bs_status`, `team_name`, `designer`, `writer`, `posting`, `other_link`) VALUES
(56, 'Academy of Science Technology ', 'Educational Institute', 'United Kingdom', '23-09-2018', 'Gold', 'Archway house, bridge street OL1 1ED Oldham, Unite', '+44 161 258 1893', 'astmcollege@gmail.com', '', '', 'https://www.facebook.com/astmoldham/', '', '', 'https://www.twitter.com/ASTMOldham', 'ASTMOldham', 'astm1234', 'https://www.instagram.com/astm_oldham/', 'astm_oldham', 'astm2016', '', '', 'https://www.instagram.com/astm_oldham/', '', '', 'https://www.astmuk.com/', 'astmcollege@gmail.com', 'astm@college.2018', 'astm.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(57, 'Aintree Tandoori', 'Indian Restaurant', 'United Kingdom', '20-01-2018', 'Gold', ' 2 Ormskirk Road L9 0JB Liverpool', '+44 7889 102182', 'aintree.tandori@gmail.com', '', '', 'https://www.facebook.com/aintreetandooriliverpool/', 'aintree.tandori@gmail.com', 'aintree@2018', 'https://twitter.com/AintreeTandori', 'AintreeTandori', 'Aintree@2018', 'https://www.instagram.com/aintree.tandoori/', 'aintree.tandoori', 'aintree@2018', 'https://www.tripadvisor.co.uk/Restaurant_Review-g642234-d6509592-Reviews-Aintree_Tandoori-Aintree_Me', 'https://plus.google.com/u/2/b/103509372828354094104/103509372828354094104', 'https://www.instagram.com/aintree.tandoori/', '', 'https://drive.google.com/drive/folders/1ZmMnW5vxHnu7LCDW6cIVKSCS2lpoXNPI', '', 'aintree.tandori@gmail.com', 'aintree@2018', 'aintree tandoori.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(58, 'Armaan Restaurant', 'Indian Restaurant', 'United Kingdom', '11-10-2017', 'Platinum', '1 Outwood Road M26 1AQ Radcliffe, Bury, United Kin', '+44 7542 077600', '', '', '', 'https://www.facebook.com/armaanradcliffe/', 'armaanradcliffe01@gmail.com', 'epsilon786', 'https://twitter.com/radcliffearmaan', '@RadcliffeArmaan', 'Rad786', 'https://www.instagram.com/armaanradcliffe/', 'armaanradcliffe', 'Radcliffe.71', 'https://www.tripadvisor.co.uk/Restaurant_Review-g1096789-d8660850-Reviews-Armaan_Exquisite_Indian_Cu', 'https://plus.google.com/b/115487027044010897391/115487027044010897391', 'https://www.instagram.com/armaanradcliffe/', 'https://www.youtube.com/channel/UCTmzsyPA4XSQOvQgEXXZj6A', 'https://drive.google.com/open?id=1x1QyCQqj9CvtxE3qF7XTbiq_QCG_c19M', 'http://www.armaanonline.co.uk/', 'armaanradcliffe@gmail.com', 'Epsilon786', 'armaan.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(59, 'ASTM - Rochdale', 'Educational Institute', 'United Kingdom', '27-12-2018', 'Platinum', '', '', '', '', '', 'https://www.facebook.com/Academy-of-Science-Technology-and-Management-Ltd-Rochdale-217324642487293/', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'astm rochdale.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(60, 'Babar Elephant', 'Indian Restaurant', 'United Kingdom', '02-07-2018', 'Gold', 'Morecambe Road LA15 Lancaster, Lancashire', '+44 7976 952833', 'baberelephent2018@gmail.com', '', '', 'https://www.facebook.com/BabarElephantAtLancaster/', '', '', 'https://twitter.com/_BabarElephant/', '_BabarElephant', 'B@barelephant.2018', 'https://www.instagram.com/_babarelephant/', '_babarelephant', 'B@barelephant.2018', '', '', 'https://www.instagram.com/_babarelephant/', '', 'https://drive.google.com/open?id=1VHd6TOQ3MR48oFV-SlZsYI7svRfYNw2c', 'http://www.babarelephant.co.uk/', 'baberelephent2018@gmail.com', 'baber2018', 'babae elephant.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(61, 'Balti House', 'Indian Restaurant', 'United Kingdom', '11-07-2018', 'Platinum', ' 112 High St CM14 4AP Brentwood, UK', '+44 7960 400127', '', '', '', 'https://www.facebook.com/baltihousebrentwood/', '', '', 'https://twitter.com/baltihousebwood', 'baltihousebwood', 'baltihouse1', 'https://www.instagram.com/baltihouse/', 'sallybaltihouse@hotmail.com', 'amarbalti112', '', '', 'https://www.instagram.com/baltihouse/', '', '', 'https://baltihousebrentwood.com/', '', '', 'balti house.jpg', 'inactive', '', '', '', '', ''),
(62, 'Balti House Keighley', 'Indian Restaurant', 'United Kingdom', '24-11-2018', 'Platinum', 'Brooks Building, Albert Street BD21 2AT Keighley', '+44 1535 611600', '', '', '', 'https://www.facebook.com/baltihouse.keighley/?ref=bookmarks', '', '', 'https://twitter.com/BaltiHouse01535', 'BaltiHouse01535', 'ibrahim', 'https://www.instagram.com/baltihousekeighley/', 'baltihousekeighley', 'baltihouse94', '', '', 'https://www.google.com/maps/dir/24.8954109,91.8609682/balti+house+keighley/@2.3351443,-42.177475,3z/', '', '', 'http://www.balti-house.co.uk/', '', '', 'balti houdr keighly.jpg', 'active', 'S2', 'Falak', 'Antora', 'Poly', ''),
(63, 'Bengal Delight', 'Indian Restaurant', 'United Kingdom', '21-11-2017', 'Gold', '166-168 Holbrook Lane CV6 4BY Coventry, United Kin', '+44 7983 544969', 'bengaldelightcoventry@gmail.co', '', '', 'https://facebook.com/bengaldelightcov/', '', '', 'https://twitter.com/DelightBengal', 'bengaldelightcoventry@gmail.com', 'BDjobs@2017', 'https://www.instagram.com/bengaldelightcoventry/', 'bengaldelightcoventry', 'BDjobs2017', '', 'https://plus.google.com/b/105172884927687503021/105172884927687503021', 'https://www.instagram.com/bengaldelightcoventry/', '', 'https://drive.google.com/open?id=1V67k8vOcMUZi7VGXWl-kWzY2PHCwYmhk', 'http://www.bengaldelight.co.uk/', 'bengaldelightcoventry@gmail.co', 'BDjobs2017', 'bd.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(64, 'Bengal Tiger', 'Indian Restaurant & Bar', 'United Kingdom', '11-07-2018', 'Platinum', ' 62 - 66 Carter Lane EC4V 5EA London, United Kingd', '+44 7932 722567', 'bengaltiger874@gmail.com', '', '', 'https://www.facebook.com/BengalTigerStPaul/', '', '', 'https://twitter.com/BengalT88966143?lang=en', '@BengalT88966143', 'bengal2018', 'https://www.instagram.com/bengaltiger_london/', 'bengaltiger_london', 'bengal2018', '', '', '', '', 'https://drive.google.com/open?id=1oex4JK0oV2fUl2b5EgrXMnqDHcumi2ex', 'http://bengal-tiger.co.uk/', 'bengaltiger874@gmail.com', 'bengal2018', 'bengal tiger.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(65, 'Bhajis Takeway - Slough', 'Indian Restaurant', 'United Kingdom', '25-08-2018', 'Gold', ' 5/6 North Cottages SL23AS Slough', '01753 645864 / 648795', 'Bajistakeway20@gmail.com', '', '', 'https://www.facebook.com/bhajistakeawayslough/', '', '', '', 'https://twitter.com/BhajisTakeawa', '', 'https://www.instagram.com/bhajis_takeaway/', '', '', '', '', '', '', '', 'https://www.bhajis-takeaway.com/home.html', 'Bajistakeway20@gmail.com', 'Bajis@2018', '', 'active', 'S2', 'Tanzim', '', '', ''),
(66, 'Biggies Cafe', 'Restaurant', 'India', '02-02-2019', '', 'Plot 10-11, Ground Floor, Community Centre Market,', '', 'houseofplatterz@gmail.com', '', '', 'https://www.facebook.com/Biggies-Cafe-2011976752203290/', '', '', '', '@BiggiesCafe', 'cafe@2019', 'https://www.inshttps://www.instagram.com/biggiescafe/tagram.com/biggiescafe/', 'biggiescafe', 'biggies@2580', '', '', '', '', '', '', 'houseofplatterz@gmail.com', '', 'biggies cafe.jpg', 'active', 'S5', '', '', 'Arif', ''),
(67, 'BJM Digital Printers', 'Digital Printers', 'Bangladesh', '03-01-2019', 'Gold', '115-116 Raja Mansion (1st Floor), Zindabajar 3100 ', '01783563792 / 01711975938', 'bjmzindabazar@gmail.com', '', '', 'https://www.facebook.com/bjmprinters/?modal=admin_todo_tour', '', '', '', '', '', 'https://www.instagram.com/bjmprinters/', 'bjmprinters', 'bjmprinters@2019', '', '', 'https://www.google.com/maps/dir/24.8954109,91.8609682/bjm+digital+printers/@24.8968129,91.8606223,16', '', '', '', 'bjmzindabazar@gmail.com', 'bjmprinters@2019', 'bjm.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(68, 'Blue Nile', 'Indian Restaurant', 'United Kingdom', '11-10-2017', 'Gold', '403 London Road SK7 6AA Stockport', '', 'bluenilerestaurant2@gmail.com', '', '', 'https://www.facebook.com/bluenilestockport/', '', '', 'https://twitter.com/_Blue_Nile', '_Blue_Nile', 'Blue@2017', 'https://www.instagram.com/Bluenile_restaurant/', 'bluenilerestaurant2@gmail.com', 'Blue@2017', '', 'https://plus.google.com/b/114910368239956264335/114910368239956264335', 'https://www.instagram.com/Bluenile_restaurant/', '', '', 'http://bluenilecuisine.com/', 'bluenilerestaurant2@gmail.com', 'Epsilon786', 'blue nile.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(69, 'Cafe Aarko', 'Restaurant (Thai, Chinese, Ind', 'Bangladesh', '27-12-2018', 'Platinum', 'Ahmed Trade Centre (Beside Brac Bank), Barutkhana,', '+880 1719-424739', 'cafeaarko@gmail.com', '', '', 'https://www.facebook.com/Cafeaarko.bd/', '', '', '', '', '', 'https://www.instagram.com/cafeaarko.bd/', 'cafeaarko@gmail.com', 'A@rko.syl.2018', '', '', 'https://www.google.com/maps/dir//cafe+aarko/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x375055a9a1b6ac19:0xe83', '', '', '', 'cafeaarko@gmail.com', 'A@rko.syl.2018', 'cafe aarko.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(70, 'Cafe Grill Restaurant', 'Restaurant', 'Bangladesh', '21-01-2019', 'Platinum', 'Noyashorok, Bangladesh', '+880 1786-886719', 'cafegrill75@gmail.com', '', '', 'http://www.facebook.com/Cafe-Grill-115157989303240/', '', '', '', '', '', 'https://www.instagram.com/cafegrillrestaurant/', 'cafegrillrestaurant', 'Cafe@2019', '', '', 'https://www.instagram.com/cafegrillrestaurant/', '', '', '', 'cafegrill75@gmail.com', 'Cafe@2019', 'cafe grill.png', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(71, 'Cafe Kala Svasti', 'Indian Restaurant', 'India', '31-10-2018', 'Platinum', ' Indira Gandhi National Centre for Arts, Gate Numb', '', 'cafekalasvasti@gmail.com', '', '', 'https://www.facebook.com/Cafe-Kala-Svasti-253106945337866/?modal=admin_todo_tour', '', '', 'https://twitter.com/cafe_kala', '@cafe_kala', 'cafekala@svasti.2018', 'https://www.instagram.com/cafekalasvasti/', 'cafekalasvasti', 'cafekala@svasti.2018', '', '', 'https://www.instagram.com/cafekalasvasti/', '', '', '', 'cafekalasvasti@gmail.com', 'cafekala@svasti.2018', 'cafe kala.jpg', 'active', 'S5', '', '', 'Arif', ''),
(72, 'Cafe Sunam', 'Restaurant', 'United Kingdom', '06-02-2019', 'Gold', '31 Birley Street FY1 1EG Blackpool', '+44 7810 286108', '', '', '', 'https://www.facebook.com/cafesunamblackpool/', '', '', 'https://twitter.com/CafeSunam', 'Cafesunam', '01Khalea', 'https://www.instagram.com/cafesunam/', 'cafesunam', '01Khalea', '', '', 'https://www.google.com/maps/place/Cafe+Sunam+and+Indian+lounge/@53.8184048,-3.0555908,17z/data=!3m1!', '', '', '', '', '', 'cafe sunam.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(73, 'Cardamon Cuisine', 'Indian Restaurant & Bar', 'United Kingdom', '11-10-2017', 'Gold', '109a London road WA4 6LG Warrington, England', '+44 7753 496312', 'cardamoncuisine@gmail.com', '', '', 'https://www.facebook.com/cardamon109/', 'cardamoncuisine@gmail.com', 'Epsilon786', 'https://twitter.com/cardamoncs', 'cardamoncs', 'Cardamon@786', 'https://www.instagram.com/cardamon_cuisine/', 'cardamon_cuisine', 'car786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g190764-d1576699-Reviews-Cardamon-Warrington_Cheshir', 'https://plus.google.com/b/115886235201238017532/+CardamonWarrington', 'https://www.google.com/maps/place/Cardamon/@53.6100469,-2.4903646,10z/data=!4m8!1m2!2m1!1scardamon!3', 'https://www.youtube.com/channel/UC1aR8Z6Jv6h8X3Ll1GkAX7A/featured?view_as=subscriber', '', 'http://www.cardamoncuisine.co.uk/', 'cardamoncuisine@gmail.com', 'EPSILON786', 'cardamon.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(74, 'Cinnamon Spice', 'Restaurant', 'United Kingdom', '08-11-2017', 'Platinum', 'Trinity Rd Ashford, Kent', '', 'cinnamonspiceashford.kent@gmai', '', '', 'https://www.facebook.com/cinnamonspiceashford/', 'cinnamonspiceashford.kent@gmail.com', 'BDjobs2017', 'https://twitter.com/Cinnamon_kent', 'Cinnamon_kent', 'Cinnamon@2018', 'https://www.instagram.com/cinnamonspiceashford.kent/', 'cinnamonspiceashford.kent', 'BDjobs2017', '', 'https://plus.google.com/b/105461568595546097409/105461568595546097409', 'https://www.google.com/maps/search/cinnamon+spice/@23.8868294,2.3681457,3z/data=!3m1!4b1', '', '', '', 'cinnamonspiceashford.kent@gmai', 'BDjobs2017', 'Cinnmon.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(75, 'Khaja Air Liner', 'Travel Agency', 'Bangladesh', '19-01-2019', 'Gold', 'Sobuj Biponi Market, 2nd floor, Zindabazar, Sylhet', '01711838624', 'khajaairliner2019@gmail.com', '', '', 'https://www.facebook.com/KhajaAirLiner/', '', '', '', '', '', 'https://instagram.com/khajaairlinerbd?utm_source=ig_profile_share&igshid=kea16f9idv17', 'khajaairlinerbd', 'khajaair@2019', '', '', '', '', '', '', 'khajaairliner2019@gmail.com', 'khajaair@2019', 'Kahaja.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(76, 'Cinnamon Lounge Flockton Moor', 'Indian Restaurant', 'United Kingdom', '31-10-2018', 'Platinum', '17 Paul Lane WF44 Flockton, West Yorkshire, United', '+44 1924 840888', '', '', '', 'https://www.facebook.com/thecinnamonloungerestaurant/', '', '', '', '', '', '', '', '', '', '', 'https://www.google.com/maps/place/Cinnamon+Lounge/@53.6280307,-1.6805951,17.75z/data=!4m5!3m4!1s0x48', '', 'https://drive.google.com/open?id=1VZLmKVi0s8UZTSbwiP6oFkApzJyGCZ_y', 'http://www.chefonline.co.uk/cinnamon-lounge-flockton-moor-wakefield-wf4/menu', '', '', 'cinnamon lounge.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(77, 'Dhaba Restaurant', 'Restaurant', 'Bangladesh', '21-01-2019', 'Platinum', 'Nayasarak Point, Kazitula Road 3100 sylhet', '', 'dhabarestaurantbd@gmail.com', '', '', 'http://www.facebook.com/dhabarestaurantsylhet/', '', '', 'https://twitter.com/RestaurantDhaba', 'RestaurantDhaba', 'DhabaRestaurantbd2019', 'https://www.instagram.com/dhabarestaurantbd/', '01703158080', 'DhabaRestaurantbd2019', '', '', 'https://www.google.com/maps/dir//dhaba+restaurant/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x375054d6b882e1af', '', '', '', 'dhabarestaurantbd@gmail.com', 'DhabaRestaurantbd2019', 'dhaba.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(78, 'Key Lime Coffee', 'Cafe', 'United Kingdom', '26-09-2018', 'Platinum', 'Lime Street Next door to Holiday Inn Liverpool', '+44 151 708 0404', 'keylimecoffee@gmail.com', '', '', 'https://www.facebook.com/keylimecoffee/', '', '', 'https://twitter.com/KeyLimeCoffee', '', '', 'https://www.instagram.com/keylimecoffee/', '', '', '', '', 'https://www.google.com/search?q=key+lime+coffee&oq=Key+lime+coffe&aqs=chrome.0.0j69i57j69i60l3j0.586', '', '', 'http://www.keylimecoffee.co.uk/', 'keylimecoffee@gmail.com', 'keylime789', 'Key lime.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', ''),
(79, 'Essence of Bengal - Redditch', 'Indian Restaurant', 'United Kingdom', '11-10-2017', 'Gold', '1B Birchfield Road B97 4LB Redditch', '', 'essenceofbengal01@gmail.com', '', '', 'https://www.facebook.com/Essence-Of-Bengal-158514340967100/', 'essenceofbengal01@gmail.com', 'Epsilon786', 'https://twitter.com/Eofbengal', 'Eofbengal', 'Eob@786', 'https://www.instagram.com/essenceofbengal/', 'essenceofbengal', 'Eob786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g528785-d3530266-Reviews-Essence_of_Bengal-Redditch_', 'https://plus.google.com/+EssenceofBengalRestaurantltdRedditch', 'https://www.google.com/maps/place/Essence+of+Bengal+Restaurant+ltd/@52.2919141,-1.9485773,17z/data=!', 'https://www.youtube.com/channel/UCQe8WNzI0-H5X8JuWjqo4BA/featured?view_as=subscriber', 'https://drive.google.com/drive/folders/1NTYfBoJiq2hBUidGwhpQhTHTVdAbDsf7', 'http://essenceofbengal.co.uk/', 'essenceofbengal01@gmail.com', 'Epsilon786', 'essence.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(80, 'Four Elephants', 'Indian Restaurant', 'United Kingdom', '14-05-2018', 'Platinum', ' Skipton Road BB8 7PY Foulridge', '', 'fourelephantsuk@gmail.com', '', '', 'https://www.facebook.com/FourElephants/', '', '', '', '', '', 'https://www.instagram.com/fourelephants_/', 'four_elephants', 'four4elephants', 'https://www.tripadvisor.com/Restaurant_Review-g1898639-d7254677-Reviews-Four_Elephants-Foulridge_Lan', '', 'https://www.instagram.com/fourelephants_/', '', 'httpshttps://drive.google.com/open?id=1kdnuJxalBu61BHbEepj2KjxCgWmfvqJ2://www.google.com/maps/place/', 'http://fourelephantsfoulridge.co.uk/', 'fourelephantsuk@gmail.com', 'four4elephants', 'four elephants.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(81, 'Gandhi Gravesend', 'Indian Restaurant', 'United Kingdom', '24-07-2018', 'Platinum', '66 West Street Gravesend, Kent', '+44 1474 535757', 'gandhigravesenduk@gmail.com', '', '', 'https://www.facebook.com/gandhigravesend/', '', '', 'https://twitter.com/gandhigravesend', '', '', 'https://www.instagram.com/gandhigravesend/', 'gandhigravesend', 'gandhi789', '', '', 'https://www.google.com/search?ei=tiJ1XIixNdDd9QP_hY24Dw&q=gandhi+gravesend&oq=gandhi+gravesend&gs_l=', '', 'https://drive.google.com/open?id=1g6iQteZi3JZaNxCeRDynBFEOw8WguufA', 'http://www.gandhigravesend.co.uk/', 'gandhigravesenduk@gmail.com', 'gandhi789', 'Gandhi.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(82, 'Hall Green Tandoori', 'Indian Restaurant', 'United Kingdom', '02-05-2018', 'Platinum', ' 1039 Stratford Road Hall Green B28 8AS Birmingham', '+44 7717 292960', 'tandoorihallgreen@gmail.com/si', '', '', 'https://www.facebook.com/New-Hall-Green-Tandoori-1897814580288123/', 'Khanapeena77@gmail.com', 'sulaiman10', 'https://twitter.com/_SizzlingCrush', '_SizzlingCrush', 'SizzlingCrush@2018', 'https://www.instagram.com/hallgreen.tandoori/?utm_source=ig_profile_share&igshid=1udyvfkf6a50w', 'sizzling.crush', 'SizzlingCrush@2018', '', 'https://plus.google.com/u/2/b/116691183857060128138/116691183857060128138', 'https://www.google.com/maps/place/New+Hall+Green+Tandoori/@52.4396464,-1.8512183,17z/data=!3m1!4b1!4', '', 'https://drive.google.com/open?id=1gbnjjM_k9yPvn5-ggmXzSyDQACL5ZKNl', 'http://hallgreentandoori.co.uk/', 'tandoorihallgreen@gmail.com/si', 'H@llgreen.tandoori/SizzlingCru', '1.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(83, 'Garden of India', 'Indian Restaurant', 'United Kingdom', '12-07-2018', 'Platinum', '12-13 N House Bush Fair Harlow, Essex', '+44 1279 639634', '', '', '', 'https://www.facebook.com/thegardenofindia/', '', '', 'https://twitter.com/gardenofindia', 'mohib901@hotmail.com', 'Tasbir123', 'https://www.instagram.com/gardenofindia/', 'gardenofindiaharlow@hotmail.com', 'aaronads1234', 'https://www.tripadvisor.co.uk/Restaurant_Review-g190784-d1006217-Reviews-Garden_Of_India-Harlow_Esse', '', '', '', 'https://drive.google.com/open?id=18iTNBKBafnS21Fhc-JYNOMLTURNHTNWg https://boards.wetransfer.com/boa', 'http://www.thegardenofindia.com', '', '', 'Garden of india.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(84, 'Mumbai Square', 'Indian Restaurant', 'United Kingdom', '10-01-2019', 'Platinum', '7 Middlesex Street London, United Kingdom', ' +44 20 7247 6461', 'info@mumbaisquare.co.uk', '', '', 'https://www.facebook.com/MumbaiSquareRestaurant/', '', '', 'https://twitter.com/MumbaiSquare', 'info@mumbaisquare.co.uk', 'mumbai7$', 'http://www.instagram.com/mumbaisquare', 'mumbaisquare', 'mumbai7$', '', 'https://plus.google.com/100597332004336559818', 'https://www.google.com/search?ei=iiV1XLW1OIff9QPti7-oDw&q=mumbai+square&oq=Mumbai+square&gs_l=psy-ab', '', '', 'https://www.mumbaisquare.co.uk/', 'info@mumbaisquare.co.uk', 'mumbai7$', 'mumbai square.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(85, 'Radhuni-princes Risborough', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', 'Church St, HP27 9AA Princes Risborough, United Kin', '+44 7868 726260', 'radhunipr@gmail.com', '', '', 'https://www.facebook.com/RadhuniPR/', 'radhunipr@gmail.com', 'Epsilon786', 'https://twitter.com/RadhuniPR', 'RadhuniPR', 'Radpr786', 'https://www.instagram.com/radhuni_princes_risborough/', 'radhuni_princes_risborough', 'Epsilon786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g790316-d2410493-Reviews-Radhuni-Princes_Risborough_', 'https://plus.google.com/110826372819643115761/', 'https://www.google.com/search?ei=fyd1XMWXO8yR9QOs85eADQ&q=radhuni+princes+risborough&oq=Radhu&gs_l=p', 'https://www.youtube.com/channel/UCYACHcPEE_B2OWl4PS2oUdg?view_as=subscriber', 'https://drive.google.com/open?id=1LzXj7dqYVFBA9nzaZo0xMCxwKlhMmIMj', 'https://www.radhunihp27.co.uk/', 'radhunipr@gmail.com', 'Epsilon786', 'Rdhu.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(86, 'Raj Lodge - Harlow essex', 'Indian Restaurant & Takeaway', 'United Kingdom', '17-07-2018', 'Platinum', 'High Street, Harlow, Harlow, CM17 0, United Kingdo', '+44 1279 443747', '', '', '', 'https://www.facebook.com/therajlodge/', '', '', 'https://www.twitter.com/rajlodge/', '', '', 'https://www.instagram.com/rajlodge/', '', '', '', '', 'https://www.google.com/search?ei=SCp1XIXjJc2R9QOp45ugCQ&q=raj+lodge+harlow&oq=Raj+&gs_l=psy-ab.1.0.3', '', 'https://drive.google.com/open?id=1Qkw4SYpqj5JdLi6rs5BClIfXJicrwnYx', 'http://www.rajlodgeonline.co.uk', '', '', 'Raj lodge.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', ''),
(87, 'Rivaj of India', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', '278 Mossy Lea Road, WN6 9RN Wigan, United Kingdom', '', 'rivajofindiaawigan@gmail.com', '', '', 'https://www.facebook.com/rivajofindia/', 'rivajofindiaa@gmail.com', 'Epsilon786', 'https://twitter.com/rivaj_of_india', 'rivajofindiaawigan@gmail.com', 'BDJobs@2018', 'https://www.instagram.com/_rivajofindia/', 'rivajofindiaawigan@gmail.com', 'rivA786', 'https://www.tripadvisor.ie/Restaurant_Review-g190919-d2102193-Reviews-Rivaj_Restaurant-Wigan_Greater', 'https://plus.google.com/102689208102410188778', 'https://www.google.com/search?ei=ly51XIi6Nc_ZrQGng4a4BQ&q=rivaj+indian+restaurant+menu&oq=rivaj+of+i', '', '', 'http://www.rivaj-online.co.uk/', 'rivajofindiaawigan@gmail.com', 'BDJobs@2018', 'Rivaz.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', ''),
(88, 'Royal Tandoori Indian', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', '88 - 90 Rockingham Road, NN17 1AE Corby, United Ki', '', 'royaltandoori01@gmail.com', '', '', 'https://www.facebook.com/royaltandoorirestaurantcorby/?ref=bookmarks', 'royaltandoori01@gmail.com', 'Epsilon786', 'https://twitter.com/_royal_tandoori', '_royal_tandoori', 'Royal@786', 'https://www.instagram.com/royaltandooricorby/', 'royaltandooricorby', 'Royt786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g227127-d2449939-Reviews-Royal_Tandoori_Indian_Resta', 'https://plus.google.com/u/1/b/110904651762145234370/110904651762145234370', 'https://www.google.com/search?ei=NzF1XI_pFIic9QOszZ7oDA&q=royale+tandoori++88+-+90+Rockingham+Road+C', 'https://www.youtube.com/channel/UClTGEmAfWAcBXanT6a8MunA?view_as=subscriber', '', 'https://royaltandoori.net/', 'royaltandoori01@gmail.com', 'Epsilon786', 'Royal tandoori.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(89, 'Hotel Holy Inn, Sylhet', 'Hotel & Restaurant', 'Bangladesh', '13-08-2018', 'Platinum', ' Shahjalal Road (Darga Gate) 3100 Sylhet', '+880 1935 666 999', 'holyinnsylhetbd@gmail.com', '', '', 'https://www.facebook.com/holyinnsylhet/', '', '', 'https://twitter.com/InnHoly/', 'InnHoly', 'holyinn2019', 'https://www.instagram.com/holyinnsylhet/', 'HolyINNSylhet', 'holyinn2019', '', '', '', '', '', 'http://www.holyinnsylhet.com/', 'holyinnsylhetbd@gmail.com', 'holyinn@2019', 'holy inn.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(90, 'Krystal kamari', 'Event Venue', 'United Kingdom', '11-12-2017', 'Platinum', '61 Wood Street SK3 0DH Cheadle, Stockport, United ', '0161 477 7496', 'krystalkamari@gmail.com', '', '', 'https://www.facebook.com/KrystalKamari/', '', '', 'https://twitter.com/Krystal_kamari', 'Krystal_kamari', 'BDjobs@2018', 'https://www.instagram.com/krystalkamari/', 'krystalkamari', 'Epsilon786', '', 'https://plus.google.com/b/111374981860300376345/111374981860300376345', 'https://www.google.com/maps/place/Krystal+kamari/@53.4070262,-2.1698555,17z/data=!3m1!4b1!4m5!3m4!1s', '', '', 'http://krystalkamari.co.uk', 'krystalkamari@gmail.com', '', 'KK.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(91, 'La Vista', 'Hotel & Restaurant', 'Bangladesh', '28-07-2018', 'Platinum', 'The Boutique Hotel, VIP Road, Lamabazar (opposite ', '01933-009977', '', '', '', 'https://www.facebook.com/lavistasylhet/', '', '', '', '', '', '', '', '', '', '', 'https://www.google.com/maps/place/La+Vista+Hotel%E2%84%A2+%7C+The+Boutique+Hotel/@24.8948589,91.8615', '', '', 'http://www.lavistabd.com/', '', '', 'la vista.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(92, 'Last Monsoon', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', '54 King Street West (8,074.93 km) SK3 0DT Stockpor', '', 'lastmonsoon01@gmail.com', '', '', 'https://www.facebook.com/lastmonsoonstockport/', '', '', 'https://twitter.com/lastmonsoon1', 'Lastmonsoon1', 'LMON786', 'https://www.instagram.com/lastmonsoonstockport/', 'lastmonsoonstockport', 'Lmon786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g528793-d1408815-Reviews-Last_Monsoon-Stockport_Grea', 'https://plus.google.com/104589666678761513242', 'https://www.google.com/maps/place/Last+Monsoon/@53.4070112,-2.1688027,17z/data=!3m1!4b1!4m5!3m4!1s0x', '', 'https://drive.google.com/open?id=1h1LIzXsPCorsYX7iRpjf9pWE8Nx5wVcJ', 'http://www.lastmonsoon.co.uk/', 'lastmonsoon01@gmail.com', 'BIGsava@uk', 'last moonson.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(93, 'Nazma Tandoori -indian', 'Indian Restaurant', 'United Kingdom', '25-08-2018', 'Platinum', '6 The Broadway, Farnham Common, Buckinghamshire. S', '01753 646088/646211', '', '', '', 'https://www.facebook.com/nazmatandoorirestaurant/', '', '', 'https://twitter.com/nazmatandoori', 'nazmatandoori', 'N@zma.tandoori.2018', 'https://www.instagram.com/nazmatandoori/', 'nazmatandoori', 'N@zma.tandoori.2018', '', 'https://plus.google.com/u/2/b/113445483891805686294/113445483891805686294', 'https://www.google.com/maps/place/Nazma+Tandoori/@54.4474854,-5.8443522,6z/data=!4m8!1m2!2m1!1snazma', '', 'https://drive.google.com/open?id=1mrH7mvScdmev4avucE6DADuNghXwyGHX', 'https://www.nazma-tandoori.co.uk', '', '', 'nazma.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(94, 'OMG - Oh My Grill', 'Restaurant', 'Bangladesh', '10-10-2018', 'Gold', 'Planet Araf (Ground Floor), Zindabajar (0.87 km) 3', '01710-185018', 'omgsylhet@gmail.com', '', '', 'https://www.facebook.com/ohmygrillsylhet/', '', '', '', '', '', 'https://www.instagram.com/omgsylhet/', 'omgsylhet', 'OMG@sylhet.2018', '', '', '', '', '', '', 'omgsylhet@gmail.com', 'OMG@sylhet.2018', 'omg.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(95, 'Panshi Bazar', 'Super Market', 'Bangladesh', '27-01-2019', 'Gold', ' 62 Chayatoru, Lamabazar (4.82 km) 3100 Sylhet', '', '', '', '', 'https://www.facebook.com/panshibazar/', '', '', '', '', '', 'https://www.instagram.com/PanshiBazar', 'PanshiBazar', 'bazarpanshibd', '', '', 'https://www.google.com/maps/place/Panshi+Bazar/@24.8952151,91.8620368,17z/data=!4m8!1m2!2m1!1spanshi', '', '', '', '', '', 'panshi bazar.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(96, 'Peppers Restaurant', 'Restaurant', 'Bangladesh', '07-02-2019', 'Platinum', ' 2nd floor, Azgor square, Baruthkhana Point, East ', '', 'peppersresturantbd@gmail.com', '', '', 'https://www.facebook.com/Peppers.restaurant.sylhet/', '', '', 'https://twitter.com/PeppersRestaur1', 'PeppersRestaur1', 'peppers@resturant.2018', 'https://www.instagram.com/peppersresturantbd/', 'peppersrestaurantbd', 'peppers@resturant.2018', '', '', 'https://www.google.com/maps/place/Peppers+Chinese+Restaurant/@24.8955402,91.8690881,17z/data=!3m1!4b', '', '', '', 'peppersresturantbd@gmail.com', 'peppers@resturant.2018', 'peppers.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(97, 'Rain Terrace', 'Restaurant', 'Bangladesh', '10-01-2019', '', ' 7 Nayasarak Near Standard Chartered Bank, sylhet.', ' 01703-721735', 'Rainterracesyl@gmail.com', '', '', 'https://www.facebook.com/rainterrace/', '', '', '', '', '', 'https://www.instagram.com/rainterrace3/', '01717652292', 'r@interrace.best', '', '', '', '', '', '', 'Rainterracesyl@gmail.com', 'r@interrace.best', 'rain.jpg', 'active', 'S3', '', 'Shawn', 'Subarna', ''),
(98, 'Rhodes Tandoori', 'Restaurant- Takeway', 'United Kingdom', '31-01-2019', 'Gold', '606 Manchester Old Road, Rhodes, Middleton, M243pw', '0161 655 3904', 'Rhodes Tandoori', '', '', 'https://www.facebook.com/Rhodes-Tandoori-245442699722972/?modal=admin_todo_tour', '', '', 'https://twitter.com/RhodesTandoori', 'RhodesTandoori', 'RhodesTandooribd2019', 'https://www.instagram.com/rhodestandoori/', 'RhodesTandoori', 'RhodesTandooribd2019', '', '', 'https://www.google.com/maps/place/Rhodes+Tandoori/@53.5440651,-2.2258189,17z/data=!3m1!4b1!4m5!3m4!1', '', '', 'http://www.rhodestandoori.co.uk/', 'Rhodes Tandoori', 'Rhodestandooribd2019', 'rhodes tandoori.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(99, 'Riviera Restaurant', 'Barbecue Restaurant', 'United Kingdom', '02-02-2018', 'Gold', '257 Grange Rd (8,129.86 km) CH41 2PH Birkenhead, U', '+44 7888 846321', '', '', '', 'https://www.facebook.com/rivierarestaurantandgrill/', '', '', 'https://twitter.com/Rivierabkhead', 'Rivierabkhead', 'sanna123', 'https://www.instagram.com/rivierarestaurantandgrill/', 'rivierarestaurantandgrill', 'Vay-JHL-bG6-guT', '', 'https://plus.google.com/u/1/b/113733695650682391545/113733695650682391545', 'https://www.google.com/maps/place/Riviera+Italian+%2F+Mediterranean+Restaurant+%26+Cocktail+Lounge/@', '', 'https://drive.google.com/open?id=1z51CQqthCqTrztk50CDTo0neA6YexMpc', 'http://www.flamenasergrill.co.uk/', '', '', 'riviera.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(100, 'Square Chili', 'Indian Restaurant', 'United Kingdom', '14-11-2018', 'Platinum +', '2 Mount St,  M2 5WQ Manchester, United Kingdom', '', 'squarechiliuk@gmail.com', '', '', 'https://www.facebook.com/Square-Chili-2283861945191967', '', '', '', 'squarechiliuk@gmail.com', 'square@chili.2018', 'https://www.instagram.com/squarechili/', 'squarechili', 'square@chili.2018', '', '', '', '', 'https://drive.google.com/open?id=1dou3PHNlWxX9598KDwHkI3aIH5noTwAf', '', 'squarechiliuk@gmail.com', 'square@chili.2018', 'square chilli.jpg', 'active', 'S3', 'Sayem', 'Shawn', 'Subarna', ''),
(101, 'Taste of bengal', 'Indian Restaurant', 'United Kingdom', '26-11-2017', 'Gold', '60-61 Stricklandgate, CA11 7NJ Penrith, Cumbria', '+44 1768 891700', 'tastebengal000@gmail.com', '', '', 'https://www.facebook.com/Taste-of-Bengal-132405807441364/', 'tastebengal000@gmail.com', 'bengal12345', 'https://twitter.com/BengalTaste', 'tastebengal000@gmail.com', 'bengal12345', 'https://www.instagram.com/tasteofbengaluk/', 'tasteofbengaluk', 'bengal12345', '', 'https://plus.google.com/b/110905939264179307626/110905939264179307626', '', '', '', 'http://tasteofbengalcuisine.co.uk', 'tastebengal000@gmail.com', 'bengal12345', 'taste of bengal.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(102, 'The Imperial Lounge', 'Indian Restaurant', 'United Kingdom', '11-10-2017', 'Gold', ' Victoria Avenue East, M9 7GH Manchester, United K', '', 'theimperiallounge@gmail.com', '', '', 'https://www.facebook.com/theimperialloungemanchester/', 'theimperiallounge@gmail.com', 'Epsilon', 'https://twitter.com/_The_Imperial', '_The_Imperial', 'EPSILON786', 'https://www.instagram.com/imperialloungeuk/', 'imperialloungeuk', 'imperial@786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g187069-d9723679-Reviews-Imperial_Lounge-Manchester_', 'https://plus.google.com/u/1/b/102011568874621720823/102011568874621720823', 'https://www.google.com/maps/place/The+Imperial+lounge+Indian+Restaurant/@38.1569139,-96.6967021,3z/d', 'https://www.youtube.com/channel/UCjSI6t-A9NWRhOx3zvounJA?view_as=subscriber', 'https://drive.google.com/open?id=1vp4s9OYpKYN1vtkLbhoH33MzqD1ti46C', 'http://www.theimperiallounge.co.uk/', 'theimperiallounge@gmail.com', 'EPSILON786', 'imperial lounge.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(103, 'The Lloyds Indian Restaurant', 'Indian Restaurant', 'United Kingdom', '11-10-2017', 'Platinum', '7 Station Road, B93 0hl Knowle', '', 'lloydsindianrestaurant@gmail.c', '', '', 'https://www.facebook.com/lloydsindian/', 'lloydsindianrestaurant@gmail.com', 'Epsilon786', 'https://twitter.com/lloydsindian?lang=en', 'Lloydsindian', 'Epsilon786', 'https://www.instagram.com/lloydsindiansolihul/', 'Lloydsindiansolihul', 'EPSILON786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g1571753-d2650171-Reviews-The_Lloyds_Indian_Restaura', 'https://plus.google.com/+TheLloydsIndianRestaurantKnowle', 'https://www.google.com/maps/place/The+Lloyds+Indian+Restaurant/@52.3867321,-1.7365906,17z/data=!3m1!', 'https://www.youtube.com/channel/UCgpDVZDjvzFh5SvbbLlke1Q/featured?view_as=subscriber', 'https://drive.google.com/open?id=11uzOTBE7dSoh3FNcHm0HegjipKiM5-4W', 'http://www.lloydsindian.co.uk/', 'lloydsindianrestaurant@gmail.c', 'Epsilon786', 'lloyds.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(104, 'Thespians', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', '26 Sheep Street  CV376 Stratford-upon-Avon, Warwic', '', 'thespiansrestaurant@gmail.com', '', '', 'https://www.facebook.com/thespiansrestaurat/', 'thespiansrestaurant@gmail.com', 'Epsilon786', 'https://twitter.com/ThespiansIndian', 'ThespiansIndian', 'thespians@786', 'https://www.instagram.com/thespiansindian/', 'thespiansrestaurant@gmail.com', 'thespians@786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g186399-d1129999-Reviews-Thespians-Stratford_upon_Av', 'https://plus.google.com/117679205635893502409/', 'https://www.google.com/maps/place/Thespians/@52.0699895,-1.5480675,9z/data=!4m8!1m2!2m1!1sthespians!', 'https://www.youtube.com/channel/UCVyt-U4nY_i4Fd2tZUTSb0Q?view_as=subscriber', 'https://drive.google.com/open?id=1N4wZUvk4pDF3fbYAkFoqm3bJrV0Y1wks', 'http://www.thespiansltd.com/', 'thespiansrestaurant@gmail.com', 'Epsilon786', 'thespians.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', 'https://drive.google.com/open?id=1U3r5dsCAW-G6Pt5j5tEUB1m9T7diJC29'),
(105, 'Spice Lounge Burford', 'Restaurant', 'United Kingdom', '08-11-2017', 'Platinum', '81 High Street, OX18 4QA Burford, United Kingdom', '', 'spicelounge.burford.oxford@gma', '', '', 'https://www.facebook.com/spiceloungeburford/', 'spicelounge.burford.oxford@gmail.com', 'BDjobs2017', 'https://twitter.com/SpiceBurford', 'SpiceBurford', 'SLB@2017', 'https://www.instagram.com/spiceloungeburford/', 'spiceloungeburford', 'SLB@2017', '', 'https://plus.google.com/109412004838478172948', 'https://www.google.com/search?q=spice+lounge+burford&oq=Spice+lounge+burford&aqs=chrome.0.35i39j69i6', '', '', 'http://www.spiceloungeburford.com/', 'spicelounge.burford.oxford@gma', 'BDjobs2017', 'Spice lounge.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', ''),
(106, 'Sunam tandoori Blackpool', 'Indian Restaurant', 'United Kingdom', '13-12-2018', 'Platinum', '93-99 RED BANK ROAD, FY2 9HZ Blackpool, United Kin', '+44 1253 352572', '', '', '', 'https://www.facebook.com/sunamtandoori/', '', '', 'https://twitter.com/sunamtandoori1', 'sunamtandoori1', '01Khalea', 'https://www.instagram.com/sunamtandoori/', 'sunamtandoori', '01Khalea', '', '', 'https://www.google.com/search?q=Sunam+tandoori&oq=Sunam+tandoori&aqs=chrome..69i57j69i60l3j35i39j0.6', '', '', 'http://www.sunamindian.com', '', '', 'Sunam tandoori.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(107, 'The Cottage Nova', 'Indian Restaurant', 'United Kingdom', '05-09-2018', 'Platinum', '90 Wilmslow Rd, Handforth, SK9 3ES Wilmslow, Unite', '+441625537899', 'thecottagehandforth@gmail.com', '', '', 'https://www.facebook.com/The-Cottage-Handforth-336052663799803/', '', '', 'https://twitter.com/cottagehanforth', '@cottagehanforth', 'thecottage@2018', 'https://www.instagram.com/cottagehanforth/', '@cottagehanforth', 'thecottage@2018', '', '', '', '', '', '', 'thecottagehandforth@gmail.com', 'thecottage@2018', 'Cottage nova.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', ''),
(108, 'The Cottage - Warrington', 'Indian Restaurant', 'United Kingdom', '03-09-2018', 'Platinum', '90 Church Street, WA1 2TF Warrington, United Kingd', '+44 1925 241888', '', '', '', 'https://www.facebook.com/thecottageindian/', '', '', 'https://twitter.com/C0ttage', '@C0ttage/alissa@thecottagerestaurant.co.uk', '90Churchst!', 'https://www.instagram.com/thecottage_restaurant/', 'thecottage_restaurant', 'Tudor1', 'https://www.tripadvisor.com/Restaurant_Review-g190764-d776540-Reviews-The_Cottage-Warrington_Cheshir', '', 'https://www.google.com/search?ei=GSt6XJryLIrmvAT3yJKQDA&q=The+Cottage+-+Warrington&oq=The+Cottage+-+', '', '', 'http://thecottagerestaurant.co.uk/', '', '', 'Cottage warinton.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(109, 'The Pearl Restaurant', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', '119 Manchester Road, Tameside, M34 5PY Manchester,', '', 'thepearlrestaurant5@gmail.com', '', '', 'https://www.facebook.com/pearlrestaurant', '', '', 'https://twitter.com/_the_pearl', '_the_pearl', 'Epsilon786', 'https://www.instagram.com/thepearlrestaurant5/', 'thepearlrestaurant5', 'Epsilon786', 'https://www.tripadvisor.com/Restaurant_Review-g2707163-d4561165-Reviews-The_Pearl_Restaurant-Audensh', 'https://plus.google.com/110667682267834014634/', '', '', '', 'http://thepearlrestaurant.co.uk/', 'thepearlrestaurant5@gmail.com', 'Epsilon786', 'The pearl.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(110, 'The Raj - Warrington', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', '2a Common Lane, WA3 4EG Warrington, United Kingdom', '01925765551', 'therajrestaurant6@gmail.com', '', '', 'https://www.facebook.com/therajwarrington/', 'therajrestaurant6@gmail.com', 'Epsilon786', 'https://twitter.com/_The_Raj', '_The_Raj', 'raj@678', 'https://www.instagram.com/therajrestaurant/', 'therajrestaurant', 'raj786', '', 'https://plus.google.com/104989510321957582645/', 'https://www.google.com/search?q=The+Raj+-+Warrington&oq=The+Raj+-+Warrington&aqs=chrome..69i57j69i60', 'https://www.youtube.com/channel/UChMBIGLegheVtCSFufNNPmg?view_as=subscriber', 'https://drive.google.com/open?id=1zwDi-J9MO0KbuHe7QmjJmQPWIGVEmmSO', 'http://therajculcheth.co.uk/', 'therajrestaurant6@gmail.com', 'Epsilon786', 'The raj.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(111, 'Tondoori Royale', 'Indian Restaurant', 'United Kingdom', '12-10-2017', 'Platinum', '682 Burnage Lane, M19 1NA Manchester, United Kingd', '', 'tondoriroyale6@gmail.com', '', '', 'https://www.facebook.com/tondoriroyalerestaurant/', 'tondoriroyale6@gmail.com', 'Epsilon786', 'https://twitter.com/tondoriroyale', 'TondoriRoyale', 'TanR786', 'https://www.instagram.com/tondoriroyale/', 'tondoriroyale', 'tanR786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g187069-d2191584-Reviews-Tondoori_Royale-Manchester_', 'https://plus.google.com/110649209139394199122/', 'https://www.google.com/search?ei=RGN6XJf2JIOQwgPSqrKwDA&q=Tondoori+Royale&oq=Tondoori+Royale&gs_l=ps', '', '', 'https://www.tondoriroyale.com/', 'tondoriroyale6@gmail.com', 'Epsilon786', 'Tondori royal.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(112, 'Usha Restaurant', 'Indian Restaurant', 'United Kingdom', '12-10-2018', 'Platinum', '338 Rossendale Road, BB11 5JF Burnley, United King', '', 'usharestaurant47@gmail.com', '', '', 'https://www.facebook.com/Usharestaurant/', 'usharestaurant47@gmail.com', 'Epsilon786', 'https://twitter.com/Usha_Restaurant', 'Usha_Restaurant', 'Usha786', 'https://www.instagram.com/usha_restaurant/', 'usha_restaurant', 'usha786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g503927-d783408-Reviews-Usha-Burnley_Lancashire_Engl', 'https://plus.google.com/117142061186725940280/', 'https://www.google.com/search?ei=42p6XJ3wGMqBvQSy6bGQBA&q=usha+restaurant+burnley&oq=usha+restaurant', '', '', 'http://www.usharestaurant.co.uk/', 'usharestaurant47@gmail.com', 'Epsilon786', 'Usha.jpg', 'active', 'S2', 'Falak', 'Antora', 'Poly', ''),
(113, 'Globalfoods', 'Cash and carry', 'United Kingdom', '24-10-2018', 'Platinum', 'unit 11 - Regal Drive, WS2 9HQ Walsall, Australia', '01922-474661 ', 'globalfoodswalsall@gmail.com', '02-03-2019', '', 'https://www.facebook.com/globalfoodsuk/', '', '', '', '', '', 'https://www.instagram.com/globalfoodswalsall/', 'globalfoodswalsall', 'global@foods.2018', '', '', '', '', '', '', 'globalfoodswalsall@gmail.com', 'global@foods.2018', '', 'inactive', '', '', '', '', ''),
(114, 'Hotel Dallas Sylhet & Forest G', 'Bangladeshi Hotel & Restaurant', 'Bangladesh', '18-12-2018', 'Platinum', 'North Jail Road, 3100 Sylhet, Bangladesh', '01796-336836', 'hoteldallassocial@gmail.com', '', '', 'https://www.facebook.com/Hotel-Dallas-Sylhet-Forest-Green-Chinese-Restaurant-286425501481378/', '', '', '', '', '', 'https://www.instagram.com/hoteldallassylhet/', 'hoteldallassylhet', 'D@llas.sylhet.2018', '', '', 'https://www.google.com/search?hl=en-BD&authuser=0&ei=5G96XNH8O4jgvgTOipNY&q=Hotel+Dallas+Sylhet+&oq=', '', '', 'http://www.hoteldallassylhet.net', 'hoteldallassocial@gmail.com', 'D@llas.sylhet.2018', 'Dalas.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(115, 'Hotel Garden Inn', 'Hotel & Restaurant', 'Bangladesh', '27-12-2018', 'Platinum', 'Shahjalal Upashahar Main Road ,Garden Tower,Sylhet', '01711-271185', 'hotelgardeninnsylhet@gmail.com', '', '', 'https://www.facebook.com/pg/hotelgardeninn.net/about/?ref=page_internal', '', '', '', '', '', 'https://www.instagram.com/gardeninnsylhet/', 'gardeninnsylhet', 'Gardeninn@2018', '', '', 'https://www.google.com/search?hl=en-BD&authuser=0&ei=7G96XJrbLpelwgPxz5_4BQ&hotel_occupancy=&q=hotel', '', '', 'https://hotelgardeninn.net/', 'hotelgardeninnsylhet@gmail.com', 'Gardeninn@2018', 'Garden inn.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(119, 'Khan\'s Palace Convention Hall', 'Convention Hall', 'Bangladesh', '19-01-2019', 'Platinum', 'Doyel 19, Shubidbazar,Sylhet,Bangladesh', '', '', '', '', 'https://www.facebook.com/kpchbd/', '', '', '', '', '', 'https://www.instagram.com/khans_palace_syl/', 'khanspalaceconventionhall@gmail.com', 'KPCH221690', '', '', '', '', '', '', '', '', 'Khans place.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(120, 'Tango\'s Italian Takeaway', 'Restaurant', 'Bangladesh', '21-01-2019', 'Platinum', '59 The Street, Ashtead, Surrey, KT21 1AA Ashtead, ', '', 'tangosindian@gmail.com', '', '', 'https://www.facebook.com/Tangos-Italian-Takeaway-2024962301137504/?modal=admin_todo_tour', '', '', 'https://twitter.com/ItalianTango', 'ItalianTango', 'tango@2019', 'https://www.instagram.com/tangositalian/', 'tangositalian', 'tango@2019', '', '', 'https://www.google.com/search?ei=eXh7XI_hKYPqvgTHwKCIAg&q=Tango%27s+Italian+&oq=Tango%27s+Italian+&g', '', '', 'https://www.tangositalian.co.uk/', 'tangosindian@gmail.com', 'tango@2019', 'Tangos.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(121, 'Taqwa Travels', 'Travel company', 'United Kingdom', '28-01-2019', 'Platinum', 'Birmingham, UK', '', 'Taqwatravelsinsta@gmail.com', '', '', 'https://www.facebook.com/Taqwa-Travels-208759376386261/', '', '', '', '', '', 'https://www.instagram.com/taqwatravels/', 'taqwatravels', 'Taqwa@2019', '', '', '', '', '', 'https://www.taqwatravels.co.uk', 'Taqwatravelsinsta@gmail.com', 'Taqwa@2019', '49686319_350349705560560_8784602447092908032_n.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(122, 'Persian Palace', 'Restaurant', 'United Kingdom', '31-01-2019', 'Gold', '581 Cheetham Hill, M8 9JE Manchester, United Kingd', '', '', '', '', 'https://www.facebook.com/PersianPalaceCuisine/', '', '', '', '', '', '', '', '', '', '', 'https://www.google.com/search?ei=kHt7XKK-HZecvQStyJyQDw&q=persian+palace+manchester&oq=Persian+Palac', '', '', '', '', '', '51481993_367830417344265_5710172682322968576_n.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(123, 'Aman Ullah Convention Center', 'Convention Hall', 'Bangladesh', '28-02-2019', 'Platinum +', 'Arambag, 3100 Sylhet, Bangladesh', '', 'amanullahconvention@gmail.com', '', '', 'https://www.facebook.com/amanullahconvention/', '', '', 'https://twitter.com/Amanullahconven', 'Amanullahconven', 'surgery@1234', 'https://www.instagram.com/amanullahconvention/', 'Amanullahconvention', 'surgery@1234', '', '', 'https://www.google.com/search?ei=XI57XJwdyeC8BKTKmegF&q=aman+ullah+convention+center&oq=Aman+ullah&g', '', '', 'http://www.amanullahconventioncenter.com', 'amanullahconvention@gmail.com', 'surgery1234', '53315471_2347447688835046_413606858138320896_n.jpg', 'active', 'S1', 'Abid_Sani', 'Saniat', 'Mohsin_Khan', ''),
(124, 'Dalchini Spice ', 'Indain restaurant', 'United Kingdom', '27-05-2018', 'Gold', '3 SOUTHBRIDGE STREET . SHEFFORD, SG17 5DB Shefford', '+44 7531 758085', 'spicedalchini@gmail.com', '', '', 'https://www.facebook.com/dalchinispice/', '', '', 'https://twitter.com/DalchiniSpice', 'DalchiniSpice', 'Dalchini@2018', 'https://www.instagram.com/dalchinispiceshefford/', 'dalchinispiceshefford', 'Dalchini1', '', 'https://plus.google.com/u/4/b/101448970982815441721/', 'https://www.google.com/search?q=dalchini+spice&rlz=1C1CHZL_enBD823BD823&oq=dalchini+spice+&aqs=chrom', '', '', 'http://www.dalchinispice.com/', 'spicedalchini@gmail.com', 'dalchini@spice12345', 'dalchini.jpg', 'active', 'S2', 'Falak', 'Antora', 'Poly', ''),
(125, 'Eastern Eye Balti House', 'Indian Restaurant', 'United Kingdom', '06-02-2018', 'Gold', '', '+44 7958 118118', 'eebaltihouse@gmail.com', '', '', 'https://www.facebook.com/pg/easterneyebricklane/', '', '', 'https://twitter.com/_Eastern_eye', '_Eastern_eye', 'eebaltihouse@2018', 'https://www.instagram.com/easterneye_baltihouse/', 'easterneye_baltihouse', 'eebaltihouse@2018', '', 'https://plus.google.com/b/110018450418738916781/110018450418738916781', 'https://www.google.com/search?q=eastern+eye+balti+house&rlz=1C1CHZL_enBD823BD823&oq=Eastern+Eye+Balt', '', '', 'http://www.easterneyebalti.co.uk/', 'eebaltihouse@gmail.com', 'eebaltihouse@2018', 'EASTERN EYE BALTI HOUSE.jpg', 'active', 'S2', '', 'Antora', 'Poly', ''),
(126, 'Shawarma House, Sylhet', 'Bangladeshi Restaurant', 'Bangladesh', '10-01-2019', 'Platinum', 'Kumarpara, Sylhet, 3100 Sylhet, Bangladesh', '01755617097', '', '', '', 'https://www.facebook.com/pg/sHawArmahOuSe.bd.sYlheT/about/?ref=page_internal', '', '', '', '', '', '', '', '', '', '', 'https://www.google.com/search?ei=8Y97XIe8B4nbvATGga-QCA&q=Shawarma+House%2C+Sylhet&oq=Shawarma+House', '', '', '', '', '', '50230516_2034842919962308_8330353979879849984_n.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(127, 'Cremo Coffee', 'Coffee shop', 'Bangladesh', '11-02-2019', 'Platinum', 'Bihongo 27/A, Nayasarak Point, 3100 Sylhet, Bangla', '', '', '', '', 'https://www.facebook.com/CremoCoffee.bd/', '', '', '', '', '', '', '', '', '', '', 'https://www.google.com/search?ei=HqR7XPawEpaQwgOz74og&q=cremo+coffee&oq=Cremo+&gs_l=psy-ab.1.0.35i39', '', '', '', '', '', '51658235_347847466063511_6185339195045707776_n.jpg', 'active', 'S1', 'Fuad_Farabi', 'Saniat', 'Mohsin_Khan', ''),
(128, 'Sonargaon', 'Restaurant', 'United Kingdom', '09-11-2017', 'Gold', '2 Bridge Street, CH64 9 Neston, United Kingdom', '', 'soanrgaonneston@gmail.com', '', '', 'https://www.facebook.com/SonargaonNeston', '', '', 'https://twitter.com/soanrgaon', 'soanrgaonneston@gmail.com', 'BDjobs2017', 'https://www.instagram.com/soanrgaonneston', 'soanrgaonneston@gmail.com', '', '', 'https://plus.google.com/u/1/b/108888277332416368731/108888277332416368731', 'https://www.google.com/search?ei=Yr57XJ3MLYnsvgTKxp_AAw&q=Sonargaon+restaurant+uk&oq=Sonargaon+resta', '', 'https://drive.google.com/drive/folders/1TXcWq3z30M1XCi3eAtkLme3kNv2Y9Asn', 'http://sonargaonneston.co.uk/', 'soanrgaonneston@gmail.com', 'BDjobs2017', 'sonar.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', ''),
(129, 'Risa Spice', 'Indian Restaurant', 'United Kingdom', '21-11-2017', 'Gold', '43 New Chester Road, Ch62 1AA New Ferry, United Ki', '07817165047', 'risaspice000@gmail.com', '', '', 'https://www.facebook.com/RisaSpice/', '', '', 'https://twitter.com/spice_risa', 'risaspice000@gmail.com', 'risa123456', 'https://www.instagram.com/risa_spice/', 'risaspice000@gmail.com', 'risa12345', '', 'https://plus.google.com/b/115560287911417799000/', 'https://www.google.com/search?ei=J8F7XLuVJoSevQSvpZmACw&q=risa+spice&oq=Risa+spice&gs_l=psy-ab.1.0.0', '', 'https://drive.google.com/drive/folders/1PEnCaTsJYpHN_kfRBB5eYEZwdpiC11bp', 'http://risaspicenewferry.co.uk', 'risaspice000@gmail.com', 'risa12345', '49864038_1975986132518113_5439395902210965504_n.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', ''),
(130, 'Millon Restaurant', 'Indian Restaurant', 'United Kingdom', '11-10-2017', 'Gold', 'Featherstall Rd, OL9 6HN Oldham, United Kingdom', '', '', '', '', 'https://www.facebook.com/millonoldham/', '', '', 'https://twitter.com/Milonoldham', '', '', 'https://www.instagram.com/milonrestaurantoldham/', '', '', 'https://www.tripadvisor.co.uk/Restaurant_Review-g528791-d3791684-Reviews-Millon-Oldham_Greater_Manch', 'https://plus.google.com/107148290074220288893', 'https://www.google.com/search?ei=w8R7XM7sIcrevgTs2pEw&q=milon+oldham&oq=milon+oldham&gs_l=psy-ab.3..', 'https://www.youtube.com/channel/UCCFwuJIy5QHP9d1rXyOXHSw?view_as=subscriber', '', 'http://www.millonrestaurant.com/', '', '', '25152134_1269326449839281_5051699491369199038_n.jpg', 'active', 'S1', 'Asif', 'Saniat', 'Mohsin_Khan', '');
INSERT INTO `business` (`id`, `name`, `type`, `country`, `entry_date`, `package`, `address`, `contact`, `email`, `expired_date`, `note`, `fb_url`, `fb_user`, `fb_pass`, `twitter_url`, `twitter_user`, `twitter_pass`, `insta_url`, `insta_user`, `insta_pass`, `trip_url`, `gplus_url`, `gbusiness_url`, `youtube_url`, `gphoto_url`, `website_url`, `email_user`, `email_pass`, `file`, `bs_status`, `team_name`, `designer`, `writer`, `posting`, `other_link`) VALUES
(131, 'Tommy Miah\'s Hospitality Manag', 'Training Institute', 'Bangladesh', '08-08-2018', 'Gold', 'Hannan Manson 2nd & 3rd, Rikabi Bazar', '01747-580864', 'tommymiahsinstitute@gmail.com', '', '', 'https://www.facebook.com/TMHMIB/', '', '', 'https://twitter.com/tmhmi_bd?lang=en', 'tmhmi_bd', 'Tommymiah@2018', 'https://www.instagram.com/tmhmi_bd/', 'tmhmi_bd', 'Tommymiah.2018', '', '', '', '', '', 'http://tmhmi.org/', 'tommymiahsinstitute@gmail.com', 'tommymiah.2018', '37230139_1942523459167324_3948215580963635200_n.jpg', 'active', 'S3', '', 'Shawn', 'Subarna', ''),
(132, 'What The ফুচকা', 'Restaurant', 'Bangladesh', '08-06-2018', 'Gold', 'Shop no 6 - 8, Sohir Plaza, East Zindabazar, 3100 ', '', 'wfuchka@gmail.com', '', '', 'https://www.facebook.com/whatthefuchkasyl/', '', '', 'https://twitter.com/WhatTheFuchka', 'WhatTheFuchka', 'wtf@fuchka', 'https://www.instagram.com/whatthe_fuchka/', 'whatthe_fuchka', 'wt@fuchka', '', 'https://plus.google.com/u/2/b/111561620247957906345/111561620247957906345', '', '', '', '', 'wfuchka@gmail.com', 'wt@fuchka', 'wtf.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(133, 'WAAW', 'Clothing (Brand)', 'Bangladesh', '28-05-2018', 'Platinum', '', '', 'waawbd@gmail.com', '', '', 'https://www.facebook.com/WAAW-173824793330590/', 'waawbd@gmail.com', 'w@@w.bd.2018', '', '', '', 'https://www.instagram.com/waaw.bd', 'waaw.bd', 'w@@w.bd.2018', '', '', '', '', '', '', 'waawbd@gmail.com', 'w@@w.bd.2018', 'Waaw.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(134, 'Direct Claims Assist', 'Accident Management', 'United Kingdom', '19-02-2019', 'Platinum', '130 Old Street London London, United Kingdom', '', 'directclaimsassist@gmail.com', '', '', 'https://www.facebook.com/Direct-Claims-Assist-384228265693681/', '', '', '', 'AssistClaims', 'assist2019', 'https://www.instagram.com/directclaimsassist9/', 'directclaimsassist9', 'assist2019', '', '', '', '', '', '', 'directclaimsassist@gmail.com', 'direct@assist.2019', 'Direct clims assist.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(135, 'Elipos System', 'Computer company', 'United Kingdom', '14-06-2018', 'Platinum', '6 Rookery Lane Aldridge Aldridge', '+44 7958 600250', 'systemelipos@gmail.com', '', '', 'https://www.facebook.com/elipossystems/?ref=br_rs', '', '', '', '', '', 'https://www.instagram.com/elipossystems/', 'elipossystems', 'elipos789', '', '', 'https://www.google.com/search?q=Elipos+Systems&rlz=1C1CHZL_enBD823BD823&oq=Elipos+Systems&aqs=chrome', '', '', '', 'systemelipos@gmail.com', 'elipos789', 'ELIPOS SYSTEM.jpg', 'active', 'S2', '', 'Antora', 'Poly', ''),
(136, 'Kababia', 'Restaurant', 'Bangladesh', '06-02-2019', 'Platinum', 'K. K. Mension, Shahjalal Bridge Link Road, Sobhani', '01997-877897', '', '', '', 'https://www.facebook.com/KababiaBD/', '', '', '', '', '', 'https://www.instagram.com/kababiabd/', 'kababiabd', 'kababia2015', '', '', 'https://www.google.com/search?q=kababia&rlz=1C1CHZL_enBD823BD823&oq=Kababia&aqs=chrome.0.35i39j69i60', '', '', '', '', '', 'KABABIA.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(137, 'Maharani Restaurant', 'Indian Restaurant', 'United Kingdom', '12-07-2018', 'Platinum', '194 Halfway Street Kent, Kent Sidcup, Bexley, Unit', '0208 309 1255', 'maharanioxford@gmail.com', '', '', 'https://www.facebook.com/maharanisidcup/', '', '', 'https://twitter.com/maharanioxford', 'maharanioxford@gmail.com', 'Maharani@Oxford.2018', 'https://www.instagram.com/maharani_restaurant/', 'maharani_restaurant', 'Maharani@Oxford', 'https://www.tripadvisor.com/Restaurant_Review-g503918-d1980248-Reviews-Maharani_Indian_Restaurant-Si', '', '', '', '', 'http://www.maharanisidcup.co.uk/', 'maharanioxford@gmail.com', 'Maharani@Oxford', 'MAHARANI.jpg', 'active', 'S2', 'Falak', 'Antora', 'Poly', ''),
(138, 'Nawab\'s Kitchen', 'Bangladeshi Restaurant', 'Bangladesh', '10-01-2019', 'Platinum', '7 Nayasarak ,Sylhet Sylhet', '01730-721734', 'nawabkitchensyl@gmail.com', '', '', 'https://www.facebook.com/nawabskitchensyl/', '', '', '', '', '', 'https://www.instagram.com/nawabskitchensyl/', 'nawabskitchensyl', 'Indian@food', '', '', 'https://www.google.com/search?q=nawab%27s+kitchen&rlz=1C1CHZL_enBD823BD823&oq=Nawab%27s+Kitchen&aqs=', '', '', '', 'nawabkitchensyl@gmail.com', 'Naw@b.syl.2018', 'NAWAB.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(139, 'Nirvana Inn', 'Hotel & Restaurant (4 star )', 'Bangladesh', '30-04-2018', 'Platinum', 'Mirzajangal, Sylhet 3100, Bangladesh Sylhet', '', 'complexnirvanainn@gmail.com / ', '', '', 'https://www.facebook.com/HotelNirvanaInn/', '', '', 'https://twitter.com/HotelNirvanaInn/', 'HotelNirvanaInn', 'nrv@twitter', 'https://www.instagram.com/hotelnirvanainn/', 'hotelnirvanainn', 'NirvanaInn@2018', 'https://www.tripadvisor.co.uk/Hotel_Review-g667997-d3218334-Reviews-Nirvana_Inn-Sylhet_City_Sylhet_D', 'https://plus.google.com/u/1/b/106655109149004181312/106655109149004181312', 'https://www.google.com/search?q=nirvana+inn&rlz=1C1CHZL_enBD823BD823&oq=nirvana+inn&aqs=chrome..69i5', '', 'https://drive.google.com/open?id=1s9If1rijkuEuFyJ682SeLwx3455z2AiW', 'https://www.google.com/search?q=nirvana+inn&rlz=1C1CHZL_enBD823BD823&oq=nirvana+inn&aqs=chrome..69i5', 'complexnirvanainn@gmail.com / ', 'NirvanaInn@2018', 'NIRVANA INN.jpg', 'active', 'S2', 'Falak', 'Antora', 'Poly', ''),
(140, 'Pink Paprika', 'Asian Restaurant', 'United Kingdom', '10-10-2017', 'Gold', '2 Main Road Rochester, Medway', '', 'pinkpaprika40@gmail.com', '', '', 'https://www.facebook.com/pinkpaprikahoo/', 'pinkpaprika40@gmail.com', 'Epsilon786', 'https://twitter.com/pinkpaprika40', 'pinkpaprika40', 'epsilon@786', 'https://www.instagram.com/pinkpaprikarochester/', 'pinkpaprikarochester', 'Pap786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g11648316-d3646980-Reviews-Pink_Paprika-Hoo_Saint_We', 'https://plus.google.com/110048685347098524335', 'https://www.google.com/search?rlz=1C1CHZL_enBD823BD823&ei=5N98XKzRH8fgvATx7b34BQ&q=Pink+Paprika&oq=P', '', '', 'https://www.pinkpaprika.co.uk/', 'pinkpaprika40@gmail.com', 'Epsilon786', 'PINK PAPRIKA.jpg', 'active', 'S2', 'Falak', 'Antora', 'Poly', ''),
(141, 'Purple Lounge', 'Indian Restaurant', 'United Kingdom', '14-05-2018', 'Platinum', '', '0161 790 1584 / 07365 142 929', '', '', '', 'https://www.facebook.com/purplelounge89/', '', '', 'https://twitter.com/purpleloung3/', '', '', '', '', '', 'https://www.tripadvisor.com/Restaurant_Review-g1999953-d12588659-Reviews-Purple_Lounge-Walkden_Salfo', '', '', '', '', 'http://thepurplelounge.uk/', '', '', 'PURPLE LOUNGE.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(142, '	Chutney\'s', 'Restaurant', 'United Kingdom', '08-11-2017', 'Gold', '24-26 liscard village, CH454JP Wallasey, United Ki', '+44 7818 509676', 'chutneyswallaysey@gmail.com', '', '', 'https://www.facebook.com/chutneyswallasey/', 'chutneyswallaysey@gmail.com', 'BDjobs2017', 'https://twitter.com/chutneys_indian', '@chutneys_indian', 'BDjobs2017', 'https://www.instagram.com/chutneyswallaysey/', 'chutneyswallaysey@gmail.com', 'BDjobs2017', 'https://www.tripadvisor.com/Restaurant_Review-g1076968-d3958731-Reviews-Chutneys-Wallasey_Wirral_Mer', 'https://plus.google.com/b/101384670553008454487/101384670553008454487', 'https://www.google.com/search?biw=1366&bih=657&ei=N-F8XIC_Ao-evQTomp-YCQ&q=chutneys+wallasey&oq=Chut', '', 'https://drive.google.com/open?id=1I6fh4xn5VLDZP5jttZN1ym8XgPSUn4Ib', 'http://www.chutneyswallasey.co.uk/', 'chutneyswallaysey@gmail.com', 'BDjobs2017', '24909797_1960084924006575_6242742362433979699_n.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(143, 'Hillside Tandoori', 'Restaurant', 'United Kingdom', '05-02-2019', 'Gold', '128 Church Hill, Loughton, IG101LH London, United ', '', 'hillsidetandooribd@gmail.com', '', '', 'https://www.facebook.com/Hillside-Tandoori-497902437405634/', '', '', 'https://twitter.com/hilsidetandoori', 'hilsidetandoori', 'HillsideTandooribd19', 'https://www.instagram.com/hillsidetandoori19/', 'HillsideTandoori19', 'HillsideTandooribd19', '', '', 'https://www.google.com/search?biw=1366&bih=657&ei=2-F8XI3YGpekwgOourrwDA&q=Hillside+Tandoori&oq=Hill', '', '', '', 'hillsidetandooribd@gmail.com', 'HillsideTandooribd19', 'hilside.jpg', 'active', 'S3', 'Fuad_Islam', 'Shawn', 'Subarna', ''),
(144, 'Masala Bricklane', 'Indian Restaurant', 'United Kingdom', '04-03-2019', 'Platinum', ' 88 Brick Lane,  E1 6RL London, United Kingdom', '+44 7568 322507', 'masalarestaurantbricklane@gmai', '', '', 'https://www.facebook.com/masala.bricklane/', '', '', 'https://twitter.com/masala_bl', 'masala_bl', 'M@sala.2019', 'https://www.instagram.com/masalabricklane/', 'masalabricklane', 'M@sala.2019', '', '', 'https://www.google.com/search?q=masala+bricklane&rlz=1C1CHBF_enBD834BD834&oq=masala+bricklane&aqs=ch', '', '', 'http://masalabricklane.co.uk/', 'masalarestaurantbricklane@gmai', 'M@sala.2019', '', 'active', 'S1', '', 'Saniat', 'Mohsin_Khan', ''),
(145, 'Radhuni-Bedford', 'indian restaurant', 'United Kingdom', '27-05-2018', 'Platinum', '38 The Embankment Bedford, Bedfordshire, United Ki', '', 'radhunibedford@gmail.com', '', '', 'https://www.facebook.com/RadhuniBF/', 'radhunibedford@gmail.com', 'Epsilon786', 'https://twitter.com/RadhuniBF', 'Radhunibf', 'Radbf786', 'https://www.instagram.com/radhunibedford/', 'radhunibedford@gmail.com', 'Radbf786', 'https://www.tripadvisor.co.uk/Restaurant_Review-g190737-d4506905-Reviews-Radhuni-Bedford_Bedfordshir', 'https://plus.google.com/+RadhuniRestaurantBedford', 'https://www.google.com/search?rlz=1C1CHZL_enBD823BD823&ei=aAZ9XMaMBom8vwTbw7TACQ&q=Radhuni+Bedford&o', '', 'https://drive.google.com/open?id=1udUnzmIUdJkcVogQI-jIObEX_cZ4ldeF', 'https://www.radhunibedford.com/', 'radhunibedford@gmail.com', 'Epsilon786', 'RADHUNI BEDFORD.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(146, 'Hunter Capital Group', 'Financial Brokerage ', 'United Kingdom', '04-03-2019', 'Platinum', '147 Union Street, Oldham,   OL1 1TD', '', 'huntercapitaluk@gmail.com', '', '', 'www.facebook.com/Hunter-Capital-Group-483606742173354/', '', '', '', '', '', 'https://www.instagram.com/huntercapitalgroup/', 'huntercapitalgroup', 'hunter@2018', '', '', '', '', '', 'http://huntercapitalgroup.co.uk/', 'huntercapitaluk@gmail.com', 'Hunter@2018', '', 'active', '', '', '', '', ''),
(147, 'Smart\'s', 'Private institution', 'Bangladesh', '07-02-2019', 'Platinum', 'Space No. 715(6th Floor), Al Hamra Shopping City, ', '', 'smartssylhet2019@gmail.com', '', '', 'https://www.facebook.com/smartsbangladesh/', '', '', '', '', '', 'https://www.instagram.com/smartsbangladesh/', 'smartsbangladesh', 'ssab123smarts', '', '', 'https://www.google.com/search?q=Smart%27s&rlz=1C1CHZL_enBD823BD823&oq=Smart%27s&aqs=chrome..69i57j69', '', '', '', 'smartssylhet2019@gmail.com', 'smart2019', 'SMARTS.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', ''),
(148, 'Jathra Handforth', 'Indian Restaurant', 'United Kingdom', '04-03-2019', 'Platinum +', '90 Wilmslow Rd SK9 3ES Handforth', '', '', '', '', ' www.facebook.com/Jathra-Handforth-648610482242476/', '', '', '', '', '', ' www.instagram.com/jathrahandforth', 'jathrahandforth', 'J@thra.Handforth', '', '', '', '', '', '', '', '', '', 'active', '', '', '', '', ''),
(149, 'Jathra northwich', 'Indian Restaurant', 'United Kingdom', '04-03-2019', 'Platinum +', ' 469 Manchester Rd, Lostock Gralam CW9 7QB Northwi', '', '', '', '', ' www.facebook.com/Jathra-Northwich-825042431179128/', '', '', '', '', '', 'https://www.instagram.com/jathrarestaurantnorthwich/', ' jathrarestaurantnorthwich', 'J@thra.2019', '', '', '', '', '', '', '', '', '', 'active', '', '', '', '', ''),
(150, 'Jathra Bowdon', 'Indian Restaurant', 'United Kingdom', '04-03-2019', 'Platinum +', ' 3 Richmond Rd, Altrincham WA14 2TT Bowdon, Cheshi', '+447701065916', '', '', '', 'www.facebook.com/Jathra-Bowdon-385327382286356/', '', '', '', '', '', 'https://www.instagram.com/jathrabowdon/', 'jathrabowdon', 'J@thra.Bowdon', '', '', '', '', '', '', '', '', '', 'active', '', '', '', '', ''),
(151, 'Spice Fusion', 'Indian Restaurant', 'United Kingdom', '05-07-2018', 'Platinum', '17 St Andrew\'s Street Droitwich', '+44 7515 176313', '', '', '', 'https://www.facebook.com/SpicefusionWR9/', '', '', 'https://twitter.com/SpiceFusionWR9', 'spicefusionwr9', 'Vsg11930', 'https://www.instagram.com/spicefusion_wr9/', 'spicefusion_wr9', 'Vsg11930', '', '', '', '', '', 'http://www.spicefusiondroitwich.com', '', '', 'SPICE FUSION.jpg', 'active', 'S2', 'Tanzim', 'Antora', 'Poly', '');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(50) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `post_material` blob NOT NULL,
  `poster_material` blob NOT NULL,
  `vision` blob NOT NULL,
  `tags` blob NOT NULL,
  `comment` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `date`, `post_material`, `poster_material`, `vision`, `tags`, `comment`) VALUES
(184, 'Academy of Science Technology ', '05-03-2019', 0x6161736461736461, 0x61736461, 0x495947554f593938, 0x4b4842484a42, 0x553759);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(50) NOT NULL,
  `country_type` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_type`) VALUES
(1, 'United Kingdom'),
(2, 'Bangladesh'),
(4, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(20) NOT NULL,
  `package_type` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_type`) VALUES
(6, 'Gold'),
(7, 'Platinum'),
(8, 'Platinum +');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(50) NOT NULL,
  `team_name` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_name`) VALUES
(62, 'S1'),
(63, 'S2'),
(64, 'S3'),
(66, 'S5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `team_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `team_name`, `role`, `password`) VALUES
(14, 'Marzana', 'marzana612@gmail.com', '                                    ', 'admin                                    ', 'f620519cc2667f9ced94097347773955'),
(15, 'Fuad_Farabi', 'fuadfarabikhanfh@gmail.com', 'S1                                                ', 'designer                                          ', 'e9824b3e16c886b51c42a09f9029edaa'),
(16, 'Abid_Sani                               ', 'abidsani1998@gmail.com', 'S1                                                ', 'designer                                          ', 'fe022e4f9e99bb336506602717477779'),
(17, 'Saniat', 'tahsinasaniat508@gmail.com', 'S1                                                ', 'writer                                            ', '362627b79cb58e4bdf7eec96e81728a2'),
(18, 'Asif                                 ', 'mehdihasanasif68@gmail.com', 'S1                                    ', 'designer                                    ', '3ed9318b4c0ac38044c872b8ea7aeb1e'),
(19, 'Sajon                                             ', 'sajon@savasaachi.com', '                                    ', 'admin                                             ', '1d8f32e75132b0802b205d3a255ef3b2'),
(20, 'Mohsin_Khan                                     ', 'mohsinmohammad@gmail.com', 'S1                                    ', 'posting                                    ', '8f7fc1655c1880c65dcc8e9ba1db056e'),
(22, 'Antora', 'antorabhowmik4@gmail.com', 'S2', 'writer', 'd7f7d50b43121b996f6c4f48301bc4b7'),
(24, 'Falak', 'falak_rahman@hotmail.com', 'S2', 'designer', '056a4040909d7d023b6e527afff1435e'),
(25, 'Tanzim                                            ', 'tanzimchowdhury98@gmail.com', 'S2                                                ', 'designer                                          ', 'e84f69ec41478adf9acfc798e769464a'),
(26, 'Poly', 'eshitapoly96@gmail.com', 'S2', 'posting', 'b7eb36486ec9fd991c99e22e7d72b77c'),
(27, 'Arif                                    ', 'mdarifrahman421@gmail.com', 'S5                                    ', 'posting                                    ', 'c4b6b494037df48b86b293d3980af475'),
(28, 'Fuad_Islam', 'islamtuaha@gmail.com', 'S3', 'designer', 'b15de5abf8d481faa67b91010dbc6c67'),
(29, 'Subarna                                    ', 'subarnacse123@gmail.com', 'S3                                    ', 'posting                                    ', 'ee6ccdb63270203c010483bfffb05a2c'),
(30, 'Shawn', 'shanawazlucse@gmail.com', 'S3', 'writer', '9947210831a972d426876c1fd786975e'),
(31, 'Sayem                                     ', 'alfastar.sayem@gmail.com', 'S3                                    ', 'designer                                    ', 'd5c997e22516253bd83cd6a3cd80657a'),
(32, 'Sourav', 'sourav@gmail.com', '', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(33, 'Tanjil Ahmed                                      ', 'tanjil.a.fahim7@gmail.com', '                                    ', 'admin                                             ', '9e8cea86f41399dcbf40f495f31d2854'),
(36, 'Sadi Fahim', 'sadifahim21@gmail.com', 'S1', 'admin', '0f2f2260b75dda09335920fb7e2e50a9'),
(37, 'Mohsin Fahim                                    ', 'mohsinfahim2014@gmail.com', 'S1                                    ', 'guestrelation                                    ', '5ef220f936a237122c36883f570c76bf'),
(38, 'Mumin', 'muminhusan@gmail.com', 'S1', 'guestrelation', 'a1be9c4771cd5e263b5d88d77e2d1249'),
(39, 'Abeer', 'abeerakadabra@gmail.com', 'S1', 'guestrelation', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
