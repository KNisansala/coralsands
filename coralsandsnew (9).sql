-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg126.eigbox.net
-- Generation Time: Apr 17, 2018 at 07:18 AM
-- Server version: 5.6.37
-- PHP Version: 4.4.9
-- 
-- Database: `coralsandsnew`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `about-us`
-- 

CREATE TABLE `about-us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `vision` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mission` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `strength` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `history` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `vision_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mission_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `strength_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `history_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `vision_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mission_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `strength_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `history_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  `vision_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mission_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `strength_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `history_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `about-us`
-- 

INSERT INTO `about-us` VALUES (1, 'aboutus.jpg', '<p style="text-align: justify;">Coral Sands Hotel, started in the early seventies by Siri E Goonewardene, the current Managing Director as just a caravan park charging 10 rupees a night per caravan, and now boasts of 82 sea-facing rooms, stretching across a vast space of beach. We have evolved over the years, but we still pride ourselves on personalized service. With all senior staff members boasting over 25 years of service at Coral Sands, our aim is to ensure that you have a memorable experience at our hotel. Our repeat clients who have visited the hotel over 25 times, is a testament to this service that we have provided over the years.</p>\r\n<p style="text-align: justify;">The hotel is located 135 km from the airport, and is a approx. 2 1/2 hours away, with the aid of the Southern Expressway. Located in Hikkaduwa, the country&rsquo;s first tourist destination, the hotel offers you an unmatched experience with the natural wonders of the reef, the tropical fish and the turtles of the region frequenting the beach just a stone&rsquo;s throw away. Hikkaduwa offers you a vibrant nightlife and the town comes alive with batik shops, art shops, handicraft shops and more.</p>', '', '', '', '', '<p style="text-align: justify;">Hikkaduwa eine bekannte h&ouml;chste Touristenattraktion Ziel von herrlichen sonnenverw&ouml;hnten goldenen Sandstrand mit flachem Wasser gemischt. Coral Sands Hotel, das in den fr&uuml;hen siebziger Jahren an der herrlichen atemberaubenden Strand mit der hervorragenden Kulisse begann. Hikkaduwa ist einer der am besten geeigneten Ort, um authentische Ferien oder Urlaub in Sri Lanka mit Familie oder Freunden auf dem herrlichen reinen wei&szlig;en Sandstrand zu genie&szlig;en. Es ist eine richtige Wahl f&uuml;r Reisende diejenigen, die f&uuml;r eine Kombination von Charme, Ruhe und Ruhe bequeme Ferien auf dem goldenen Sandstrand suchen. Coral Sands architektonische und Innenarchitekturen sind einzigartig und wirklich gro&szlig;artig. Die malerische Umgebung macht atemberaubende Ausblicke und das ist perfekt auf ultimative Entspannung abgestimmt. Coral Sands Hotel ist ein Boutique-Hotel mit ultimativen hervorragenden Service f&uuml;r die G&auml;ste, die &uuml;ber Ihre Erwartungen hinausgehen.</p>\r\n<p style="text-align: justify;">Coral Sands ein Hotel mit einer gro&szlig;artigen und stolz Geschichte seit den siebziger Jahren von Siri E Gonawardene als Gr&uuml;nder mit gestarteten Karawanenpark f&uuml;r 10 Rupien pro Nacht. Heute ist es ein kleiner Schritt, der mit dem luxuri&ouml;sen Boutique-Hotel, das ein unvergessliches Erlebnis f&uuml;r die Besucher mit eingebetteten historischen, kulturellen und gesch&auml;ftlichen Umgebungen im S&uuml;den von Sri Lanka bietet, wo sich auf dem spektakul&auml;ren, atemberaubenden Strand mit der Kombination befindet, Luxus mit au&szlig;ergew&ouml;hnlichem Service unter gem&uuml;tlicher und friedlicher Atmosph&auml;re.</p>\r\n<p style="text-align: justify;">Es gibt 82 Zimmer mit Meerblick, die sich durch den weitl&auml;ufigen Strand herum erstrecken, wo Eden den G&auml;sten gebracht wurde. Sogar nat&uuml;rlich gemachte Umgebungen k&ouml;nnen erstaunliche Ambiente f&uuml;r Ihren Geist und die Seele gebracht werden. Alle Annehmlichkeiten k&ouml;nnen &uuml;ber die Erwartungen hinausgehen und einen Weg f&uuml;r einen sch&ouml;nen Urlaub ebnen. Alle Zimmer sind voll m&ouml;bliert mit modernem Dekor und Innenarchitektur wurde in einem enormen Stil arrangiert. Coral Sands All-Inclusive-Gastronomie steht mit den vielf&auml;ltigen M&ouml;glichkeiten, die Sie zus&auml;tzlich zu den besten Getr&auml;nken oder Snacks genie&szlig;en k&ouml;nnen.</p>', 'testing', 'testing', 'testing', '<p>testing</p>', '<p><span id="result_box" class="" lang="ru"><span title="Coral Sands Hotel, started in the early seventies by Siri E Goonewardene, the current Managing Director as just a caravan park charging 10 rupees a night per caravan, and now boasts of 82 sea-facing rooms, stretching across a vast space of beach.">Coral Sands Hotel, Ð½Ð°Ñ‡Ð°Ð»Ð°ÑÑŒ Ð² Ð½Ð°Ñ‡Ð°Ð»Ðµ ÑÐµÐ¼Ð¸Ð´ÐµÑÑÑ‚Ñ‹Ñ… Ð³Ð¾Ð´Ð¾Ð² Siri E Goonewardene, Ð½Ñ‹Ð½ÐµÑˆÐ½Ð¸Ð¹ ÑƒÐ¿Ñ€Ð°Ð²Ð»ÑÑŽÑ‰Ð¸Ð¹ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€, ÐºÐ°Ðº Ñ‚Ð¾Ð»ÑŒÐºÐ¾ ÐºÐ°Ñ€Ð°Ð²Ð°Ð½ Ð¿Ð°Ñ€ÐºÐ° Ð·Ð°Ñ€ÑÐ´ÐºÐ¸ 10 Ñ€ÑƒÐ¿Ð¸Ð¹ Ð² Ð½Ð¾Ñ‡ÑŒ Ð·Ð° ÐºÐ°Ñ€Ð°Ð²Ð°Ð½Ð¾Ð¼, Ð¸ Ñ‚ÐµÐ¿ÐµÑ€ÑŒ Ð¼Ð¾Ð¶ÐµÑ‚ Ð¿Ð¾Ñ…Ð²Ð°ÑÑ‚Ð°Ñ‚ÑŒÑÑ 82 Ð²Ñ‹Ñ…Ð¾Ð´ÑÑ‰Ð¸Ñ… Ð½Ð° Ð¼Ð¾Ñ€Ðµ Ð½Ð¾Ð¼ÐµÑ€Ð¾Ð², Ð¿Ñ€Ð¾ÑÑ‚Ð¸Ñ€Ð°ÑÑÑŒ Ñ‡ÐµÑ€ÐµÐ· Ð¾Ð±ÑˆÐ¸Ñ€Ð½Ð¾Ðµ Ð¿Ñ€Ð¾ÑÑ‚Ñ€Ð°Ð½ÑÑ‚Ð²Ð¾ Ð¿Ð»ÑÐ¶Ð°. </span><span title="We have evolved over the years, but we still pride ourselves on personalized service.">ÐœÑ‹ Ñ€Ð°Ð·Ð²Ð¸Ð²Ð°Ð»Ð¸ÑÑŒ Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ Ð¼Ð½Ð¾Ð³Ð¸Ñ… Ð»ÐµÑ‚, Ð½Ð¾ Ð¼Ñ‹ Ð´Ð¾ ÑÐ¸Ñ… Ð¿Ð¾Ñ€ Ð³Ð¾Ñ€Ð´Ð¸Ð¼ÑÑ Ñ‚ÐµÐ¼, Ñ‡Ñ‚Ð¾ Ð¸Ð½Ð´Ð¸Ð²Ð¸Ð´ÑƒÐ°Ð»ÑŒÐ½Ð¾Ðµ Ð¾Ð±ÑÐ»ÑƒÐ¶Ð¸Ð²Ð°Ð½Ð¸Ðµ. </span><span title="With all senior staff members boasting over 25 years of service at Coral Sands, our aim is to ensure that you have a memorable experience at our hotel.">Ð¡Ð¾ Ð²ÑÐµÐ¼Ð¸ ÑÑ‚Ð°Ñ€ÑˆÐ¸Ðµ ÑÐ¾Ñ‚Ñ€ÑƒÐ´Ð½Ð¸ÐºÐ¸ Ð¿Ð¾Ñ…Ð²Ð°ÑÑ‚Ð°Ñ‚ÑŒÑÑ Ð±Ð¾Ð»ÐµÐµ Ñ‡ÐµÐ¼ 25 Ð»ÐµÑ‚ ÑÐ»ÑƒÐ¶Ð±Ñ‹ Ð² Coral Sands, Ð½Ð°ÑˆÐ° Ñ†ÐµÐ»ÑŒ ÑÐ¾ÑÑ‚Ð¾Ð¸Ñ‚ Ð² Ñ‚Ð¾Ð¼, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð³Ð°Ñ€Ð°Ð½Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ, Ñ‡Ñ‚Ð¾ Ñƒ Ð²Ð°Ñ ÐµÑÑ‚ÑŒ Ð½ÐµÐ·Ð°Ð±Ñ‹Ð²Ð°ÐµÐ¼Ñ‹Ðµ Ð²Ð¿ÐµÑ‡Ð°Ñ‚Ð»ÐµÐ½Ð¸Ñ Ð² Ð½Ð°ÑˆÐµÐ¼ Ð¾Ñ‚ÐµÐ»Ðµ. </span><span title="Our repeat clients who have visited the hotel over 25 times, is a testament to this service that we have provided over the years.\r\n\r\n">ÐÐ°ÑˆÐ¸ ÐºÐ»Ð¸ÐµÐ½Ñ‚Ñ‹, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð¿Ð¾Ð²Ñ‚Ð¾Ñ€ÑÑŽÑ‚ Ð¿Ð¾ÑÐµÑ‚Ð¸Ð²ÑˆÐ¸Ñ… Ð³Ð¾ÑÑ‚Ð¸Ð½Ð¸Ñ†Ñƒ Ð±Ð¾Ð»ÐµÐµ 25 Ñ€Ð°Ð·, ÑÐ²Ð»ÑÐµÑ‚ÑÑ ÑÐ²Ð¸Ð´ÐµÑ‚ÐµÐ»ÑŒÑÑ‚Ð²Ð¾Ð¼ Ñ‚Ð¾Ð³Ð¾, Ñ‡Ñ‚Ð¾ ÑÑ‚Ñƒ ÑƒÑÐ»ÑƒÐ³Ñƒ Ð¼Ñ‹ Ð¾Ð±ÐµÑÐ¿ÐµÑ‡Ð¸Ð»Ð¸ Ð½Ð° Ð¿Ñ€Ð¾Ñ‚ÑÐ¶ÐµÐ½Ð¸Ð¸ Ð¼Ð½Ð¾Ð³Ð¸Ñ… Ð»ÐµÑ‚.<br /><br /></span><span title="The hotel is located 135 km from the airport, and is a aprox 2-hours away, with the aid of the Southern Expressway.">ÐžÑ‚ÐµÐ»ÑŒ Ñ€Ð°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½ Ð² 135 ÐºÐ¼ Ð¾Ñ‚ Ð°ÑÑ€Ð¾Ð¿Ð¾Ñ€Ñ‚Ð°, Ð¸ ÑÐ²Ð»ÑÐµÑ‚ÑÑ APROX 2-Ñ… Ñ‡Ð°ÑÐ°Ñ… ÐµÐ·Ð´Ñ‹, Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ Ð®Ð¶Ð½Ð¾Ð³Ð¾ Expressway. </span><span title="Located in Hikkaduwa, the country&rsquo;s first tourist destination, the hotel offers you an unmatched experience with the natural wonders of the reef, the tropical fish and the turtles of the region frequenting the beach just a stone&rsquo;s throw away.">Ð Ð°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð½Ñ‹Ð¹ Ð² Ð¥Ð¸ÐºÐºÐ°Ð´ÑƒÐ²Ð°, Ð¿ÐµÑ€Ð²Ñ‹Ð¼ Ñ‚ÑƒÑ€Ð¸ÑÑ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ð¼ Ð½Ð°Ð¿Ñ€Ð°Ð²Ð»ÐµÐ½Ð¸ÐµÐ¼ Ð² ÑÑ‚Ñ€Ð°Ð½Ðµ, Ð¾Ñ‚ÐµÐ»ÑŒ Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð’Ð°Ð¼ Ð½ÐµÐ¿Ñ€ÐµÐ²Ð·Ð¾Ð¹Ð´ÐµÐ½Ð½Ñ‹Ð¹ Ð¾Ð¿Ñ‹Ñ‚ Ð¿Ñ€Ð¸Ñ€Ð¾Ð´Ð½Ñ‹Ñ… Ñ‡ÑƒÐ´ÐµÑ Ñ€Ð¸Ñ„Ð°, Ñ‚Ñ€Ð¾Ð¿Ð¸Ñ‡ÐµÑÐºÐ¸Ñ… Ñ€Ñ‹Ð± Ð¸ Ñ‡ÐµÑ€ÐµÐ¿Ð°Ñ… Ñ€ÐµÐ³Ð¸Ð¾Ð½Ð° Ð¿Ð¾ÑÐµÑ‰Ð°ÑŽÑ‰Ð¸Ð¼ Ð¿Ð»ÑÐ¶ Ð²ÑÐµÐ³Ð¾ Ð² Ð´Ð²ÑƒÑ… ÑˆÐ°Ð³Ð°Ñ…. </span><span title="Hikkaduwa offers you a vibrant nightlife and the town comes alive with a batik shops, art shops, handicraft shops and more.">Ð¥Ð¸ÐºÐºÐ°Ð´ÑƒÐ²Ð° Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð²Ð°Ð¼ Ð±ÑƒÑ€Ð½ÑƒÑŽ Ð½Ð¾Ñ‡Ð½ÑƒÑŽ Ð¶Ð¸Ð·Ð½ÑŒ, Ð¸ Ð³Ð¾Ñ€Ð¾Ð´ Ð¾Ð¶Ð¸Ð²Ð°ÐµÑ‚ Ñ Ð±Ð°Ñ‚Ð¸ÐºÐ° Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ñ‹, Ñ…ÑƒÐ´Ð¾Ð¶ÐµÑÑ‚Ð²ÐµÐ½Ð½Ñ‹Ðµ Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ñ‹, Ñ€ÐµÐ¼ÐµÑÐ»ÐµÐ½Ð½Ñ‹Ðµ Ð¼Ð°ÑÑ‚ÐµÑ€ÑÐºÐ¸Ðµ Ð¸ Ð¼Ð½Ð¾Ð³Ð¾Ðµ Ð´Ñ€ÑƒÐ³Ð¾Ðµ.</span></span></p>', 'testing', 'testing', 'testing', '<p>testring</p>', '<p><span id="result_box" class="" lang="zh-CN"><span title="Coral Sands Hotel, started in the early seventies by Siri E Goonewardene, the current Managing Director as just a caravan park charging 10 rupees a night per caravan, and now boasts of 82 sea-facing rooms, stretching across a vast space of beach.">Coral Sands Hotelé…’åº—å§‹äºŽ70å¹´ä»£åˆæœŸï¼Œç”±Siri E Goonewardeneå¼€å§‹ï¼ŒçŽ°ä»»æ€»ç»ç†åªæ˜¯ä¸€ä¸ªæˆ¿è½¦å…¬å›­ï¼Œæ¯è¾†æ‹–è½¦æ¯æ™šæ”¶è´¹10å¢æ¯”ï¼ŒçŽ°åœ¨æ‹¥æœ‰82é—´æœå‘æµ·æ™¯çš„å®¢æˆ¿ï¼Œæ¨ªè·¨å¹¿é˜”çš„æµ·æ»©ã€‚</span><span title="We have evolved over the years, but we still pride ourselves on personalized service.">æˆ‘ä»¬å·²ç»å‘å±•äº†å¤šå¹´ï¼Œä½†æˆ‘ä»¬ä»ç„¶ä¸ºè‡ªå·±çš„ä¸ªæ€§åŒ–æœåŠ¡ã€‚</span><span title="With all senior staff members boasting over 25 years of service at Coral Sands, our aim is to ensure that you have a memorable experience at our hotel.">æ‰€æœ‰é«˜çº§å‘˜å·¥åœ¨çŠç‘šæ²™æ»©æ‹¥æœ‰è¶…è¿‡25å¹´çš„æœåŠ¡ï¼Œæˆ‘ä»¬çš„ç›®æ ‡æ˜¯ç¡®ä¿æ‚¨åœ¨æˆ‘ä»¬çš„é…’åº—æœ‰ä¸€ä¸ªéš¾å¿˜çš„ç»åŽ†ã€‚</span><span title="Our repeat clients who have visited the hotel over 25 times, is a testament to this service that we have provided over the years.\r\n\r\n">æˆ‘ä»¬é‡å¤çš„å®¢æˆ·è°è®¿é—®äº†é…’åº—è¶…è¿‡25æ¬¡ï¼Œè¿™è¯æ˜Žäº†æˆ‘ä»¬å¤šå¹´æ¥æä¾›çš„è¿™é¡¹æœåŠ¡ã€‚<br /><br /></span><span title="The hotel is located 135 km from the airport, and is a aprox 2-hours away, with the aid of the Southern Expressway.">é…’åº—è·ç¦»æœºåœºæœ‰135å…¬é‡Œï¼Œè·ç¦»å—éƒ¨é«˜é€Ÿå…¬è·¯æœ‰2å°æ—¶è·¯ç¨‹ã€‚</span><span title="Located in Hikkaduwa, the country&rsquo;s first tourist destination, the hotel offers you an unmatched experience with the natural wonders of the reef, the tropical fish and the turtles of the region frequenting the beach just a stone&rsquo;s throw away.">ä½äºŽHikkaduwaï¼Œè¯¥å›½çš„ç¬¬ä¸€ä¸ªæ—…æ¸¸ç›®çš„åœ°ï¼Œé…’åº—ä¸ºæ‚¨æä¾›æ— ä¸Žä¼¦æ¯”çš„ç»éªŒä¸ŽçŠç‘šç¤çš„è‡ªç„¶å¥‡è§‚ï¼Œçƒ­å¸¦é±¼å’Œè¯¥åœ°åŒºçš„æµ·é¾Ÿé¢‘ç¹çš„æµ·æ»©åªæ˜¯ä¸€ç®­ä¹‹é¥ã€‚ </span><span title="Hikkaduwa offers you a vibrant nightlife and the town comes alive with a batik shops, art shops, handicraft shops and more.">Hikkaduwaä¸ºæ‚¨æä¾›å……æ»¡æ´»åŠ›çš„å¤œç”Ÿæ´»ï¼Œé•‡ä¸Šæœ‰èœ¡æŸ“åº—ï¼Œè‰ºæœ¯å“åº—ï¼Œæ‰‹å·¥è‰ºå“åº—ç­‰ç­‰ã€‚</span></span></p>', 'testing', 'tesimg', 'testing', '<p>testing</p>');

-- --------------------------------------------------------

-- 
-- Table structure for table `activities`
-- 

CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `shortDescription` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

-- 
-- Dumping data for table `activities`
-- 

INSERT INTO `activities` VALUES (7, 'surfing.jpg', 'Surfing', '', '', '', 0, 0, 'One of the countryâ€™s best surfing beaches is just 1km away from the hotel.', '', '', '', '<p style="text-align: justify;">One of the country&rsquo;s best surfing beaches is just 1km away from the hotel. Rent a surfboard from one of the many surf shops in the area, and ride the waves of Hikkaduwa, with the stunning landscape of the setting sun on the horizon</p>', '', '', '', 1);
INSERT INTO `activities` VALUES (8, 'diving.jpg', 'Diving', '', '', '', 0, 0, 'International Diving School located within the premises offers both PADI and UDI certificate.', '', '', '', '<p style="text-align: justify;">International Diving School located within the premises offers both PADI and UDI certificates. Experience the wonders of the stunning coral reefs and the shipwrecks located within a short boat ride from Hikkaduwa, with the safety and the assurance of the experienced instructors</p>', '', '', '', 2);
INSERT INTO `activities` VALUES (9, 'Whale_watching.jpg', 'Whale Watching', '', '', '', 0, 0, 'The worldâ€™s largest mammals frequent the coastline of Sri Lanka, and you can now get the chance to see them in their natural habitat. ', '', '', '', '<p style="text-align: justify;">The world&rsquo;s largest mammals frequent the coastline of Sri Lanka, and you can now get the chance to see them in their natural habitat. You can either leave from Galle (17km away) or from Mirissa (49km away), and see this amazing mammals glide through the ocean.</p>', '', '', '', 3);
INSERT INTO `activities` VALUES (14, 'madu.jpg', 'Madu Ganga ', '', '', '', 0, 0, 'Located just 20km away from the Hotel, this river safari offers you the chance of seeing a number', '', '', '', '<p style="text-align: justify;">Located just 20km away from the Hotel, this river safari offers you the chance of seeing a number of different wonders of nature, including beautiful flora and fauna. The Madu River safari is famous for its unique mangroves located along the banks of the river.</p>', '', '', '', 5);
INSERT INTO `activities` VALUES (32, 'ayurveda-massage.jpg', 'Ayurveda Massage', '', '', '', 0, 0, 'Experience an authentic ayurvedic massage with ancient Sri Lankan methods that have been passed down', '', '', '', '<p style="text-align: justify;">Experience an authentic ayurvedic massage with ancient Sri Lankan methods that have been passed on from one generation to another. All guests who stay over three nights are entitled to a free foot massage at the ayurvedic center located within the hotel, and all other massages and herbal treatments are offered here.</p>', '', '', '', 11);
INSERT INTO `activities` VALUES (33, 'yala-safari.jpg', ' Yala National Park', '', '', '', 1, 0, 'Yala National Park is located in the south eastern region of Sri Lanka and extends over two provinces of Hambantota district of southern province and Monaragala district in Uva province. The entrance to the park is at Palatupana, 12km from Kirinda. T', '', '', '', '<p>Yala National Park is located in the south eastern region of Sri Lanka and extends over two provinces of Hambantota district of southern province and Monaragala district in Uva province. The entrance to the park is at Palatupana, 12km from Kirinda. The distance from Colombo to the entry point of Palatupana is 305 km.</p>\r\n<p>The gateway to Yala National Park is Tissamaharama. A 20 km drive via Kirinda takes the visitors to the Palatupana. At Palatupana, the well-designed visitor center provides the information to the tourists and assign a tracker to all incoming vehicles. The park provides jeeps with soft&ndash;tops which gives the opportunitiy to view wild life. Dawn and dusk bring about the best timing for safari tours in the Yala National Park.Being located in one of the arid regions of Sri Lanka, the Climate of Ruhuna National Park is usually hot and dry. The mean annual temperature is 27 Celsius, although in the dry season the temperature could go as high as 37 Celsius.</p>\r\n<p>Yala National Park that consists of five blocks is the most visited and second largest national park in Sri Lanka. Though Yala spreads over an area of 1260 square kilometers, only one fifth of the area is open to the visitors. Four-fifths of the park is a strictly designated Natural Reserve. Adjoining the eastern border of the park is Kumana.</p>', '', '', '', 4);
INSERT INTO `activities` VALUES (34, 'Galle.jpg', 'Galle Fort', '', '', '', 0, 0, 'Galle Fort, in the Bay of Galle on the southwest coast of Sri Lanka, was built first in 1588 by the Portuguese, then extensively fortified by the Dutch during the 17th century from 1649 onwards', '', '', '', '<p>Galle Fort, in the Bay of Galle on the southwest coast of Sri Lanka, was built first in 1588 by the Portuguese, then extensively fortified by the Dutch during the 17th century from 1649 onwards</p>\r\n<p>Galle Fort is in Galle, which is located at the extreme southwest corner of the island, in the southwest coast of Sri Lanka, where the shoreline turns east towards Matara and Tangalle. The fort, like most of the forts in Sri Lanka, is built on a small rocky peninsula, belonging to the sea as much as to the land. As it exists today, it covers an area of 52 hectares.</p>\r\n<p>Highway A2 provides road links to Galle from Colombo (a distance of 113 kilometres (70&nbsp;mi)) and the rest of the country along the west coast or from the east along the south coast. Since 2012 an expressway has linked Galle to Colombo. Rail links are also available to Colombo and Matara. Sea route is through the Galle Port at the Galle Harbour.</p>', '', '', '', 6);
INSERT INTO `activities` VALUES (35, '20110629__UW_DSCN3630_photoElizabethWebber.jpg', 'Udawalawe National Park', '', '', '', 0, 0, 'The Udawalawa national park was established on 30 th July 1972.It lies in the lower catchment of Udawalawa Reservoir in the country''s Intermediate Lowland region. This area falls into two administrative districts in two provinces. ', '', '', '', '<p class="textpara2">The Udawalawa national park was established on 30 th July 1972.It lies in the lower catchment of Udawalawa Reservoir in the country''s Intermediate Lowland region. This area falls into two administrative districts in two provinces. The parkland on the right bank of Walawe ganga is within Ratnapura district in the province of sabaragamuwa and the parkland on the left bank falls within Moneragala district in the province of Uva . This Park is located approximately between the latitudes 6 25''E and 6 35'' N and longitudes 80 45''N and 81 00'' E.</p>\r\n<p class="textpara2" align="justify">The dry land area of the Park is about 119 Sq miles or 308 Sqm, approximately 28910ha. The Udawalalawa reservoir is situated within the park premises, the total surface area of which at full supply is 3405ha. The total area of the park within the declared boundary including the reservoir is 32,315ha.</p>\r\n<p class="textpara2" align="justify"><span class="textpara2"><span class="text3">Altitude ranges from about 100m on the plains to 373m at the top of the deep Walawe Reservoir (3,400ha), which is surrounded by open plains and foothills. The most prominent feature is the kalthota Escarpment and spectacular Diyawinne Fallto the north. Ulgala, in the west of the most prominent peak. </span></span></p>', '', '', '', 7);
INSERT INTO `activities` VALUES (36, 'ariyapala-sons.jpg', 'Mask Museum', '', '', '', 0, 0, 'Mask making is a popular tradition in Sri Lanka. Many Sri Lankan mask artisans ply their trade along', '', '', '', '<p>Mask making is a popular tradition in Sri Lanka. Many Sri Lankan mask artisans ply their trade along the Western, South Western and Southern coasts of the island. Of these, the Ambalangoda area on the South Western coast of Sri Lanka is renowned for its talented artisans.</p>\r\n<p>Sri Lankan traditional mask culture has practically disappeared. Once treasured by museums and private collectors, mask carving is on the decline with the only remaining aspect being a cottage industry focused on tourism.</p>', '', '', '', 8);
INSERT INTO `activities` VALUES (37, 'yimg_hztMgv-640x391.jpg', 'Koggala Lake', '', '', '', 0, 0, 'It is a picturesque and stunning place where can enjoy the nature with different experience. Koggala is a fishery village located near Galle city.', '', '', '', '<p>It is a picturesque and stunning place where can enjoy the nature with different experience. Koggala is a fishery village located near Galle city. It is one of place where found stilt fishermen a traditional fishing method. Koggla Lake is a place where can enjoy the enthusiastic environment in a wider range. Boat ride at Koggala Lake will reach the highest temptation with enjoying natural surroundings. Koggala was based on many great novels in Sri Lanka. Koggala bounded to very beautiful and stunning beach as well and in Koggala Lake found several islands. Bird&rsquo;s Island is very famous and it was based on the great novel called &ldquo;Madolduwa&rdquo;. Koggala is a hot spot for eco-tourism and the biodiversity in here very high. Guests able to enjoy the natural lush in here. Also, there is spice garden where can get spices and that is a great place get to experience. Also, there is a cinnamon garden island. A place where can grab more knowledge about the cinnamon industry of Sri Lanka. Koggala Lake is a place where can make more tranquillity and it brings whole new experience for the guests. The island also brings more peace and amazing experience for visitors with great and magnificent surroundings. Koggala lake spread in more areas and it reaches superb travel experience.</p>', '', '', '', 9);

-- --------------------------------------------------------

-- 
-- Table structure for table `activity-photo`
-- 

CREATE TABLE `activity-photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=268 ;

-- 
-- Dumping data for table `activity-photo`
-- 

INSERT INTO `activity-photo` VALUES (44, 7, 'bg4.jpg', 'Surfing in Hikkaduwa  ', 1);
INSERT INTO `activity-photo` VALUES (45, 7, 'DSC_4568.jpg', 'Surfing in Hikkaduwa  ', 2);
INSERT INTO `activity-photo` VALUES (46, 7, 'L3.jpg', 'Surfing ', 3);
INSERT INTO `activity-photo` VALUES (47, 7, 'surf1.jpg', 'Surfing in Hikkaduwa  ', 5);
INSERT INTO `activity-photo` VALUES (49, 7, 'surfing-south-australia.jpg', 'Surfing in Hikkaduwa  ', 4);
INSERT INTO `activity-photo` VALUES (51, 7, '1_Extreme-Academy_European-Pro-Longboard-Tour-29th-and-30th-September-2012_IMG_0644-copy-1.jpg', 'Surfing in Hikkaduwa  ', 7);
INSERT INTO `activity-photo` VALUES (52, 7, 'dsc03026.jpg', 'Surfing in Hikkaduwa  ', 8);
INSERT INTO `activity-photo` VALUES (53, 7, 'slide-1.jpg', 'Surfing in Hikkaduwa  ', 9);
INSERT INTO `activity-photo` VALUES (54, 7, 'WG2017_NORTHSHORE013-1920x1278.jpg', 'Surfing in Hikkaduwa  ', 6);
INSERT INTO `activity-photo` VALUES (55, 8, '9259743019038.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (56, 8, 'd.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (57, 8, 'diving.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (58, 8, 'diving-hikkaduwa-www.trekwings.com-4-1.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (61, 8, 'PADI-Scuba-diving-Courses-With-Aussie-Divers-Phuket.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (62, 8, 'imgp0251.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (63, 8, 'Scuba-diving.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (64, 8, 'Underwater-Animals.jpg', 'Diving in Hikkaduwa ', 0);
INSERT INTO `activity-photo` VALUES (65, 9, '11896449_1616815231925023_2906402596830359795_o.jpg', 'Whale Watching ', 0);
INSERT INTO `activity-photo` VALUES (66, 9, 'dolphins.jpg', 'Whale Watching ', 0);
INSERT INTO `activity-photo` VALUES (67, 9, 'e58ecc_07971ddc226a4f498186b64bcc5657e0.jpg', 'Whale Watching ', 0);
INSERT INTO `activity-photo` VALUES (68, 9, 'e58ecc_d32a456722f74d15b0e94b0e3ad1af31.jpg', 'Whale Watching ', 0);
INSERT INTO `activity-photo` VALUES (69, 9, 'IMG_65612016-Sri-Lanka.jpg', 'Whale Watching ', 0);
INSERT INTO `activity-photo` VALUES (70, 9, 'sri-lanka-blue-whale-safari-patrick-dykstra-whale-paddle.jpg', 'Whale Watching ', 0);
INSERT INTO `activity-photo` VALUES (71, 10, '1774144441.jpg', 'Snorkelling ', 0);
INSERT INTO `activity-photo` VALUES (72, 10, 'BlueCentennial_18.JPG', 'Snorkelling ', 0);
INSERT INTO `activity-photo` VALUES (73, 10, 'e67f57_28e81edd20704873a52eb22f752b495b-mv2_d_3045_2246_s_2.jpg', 'Snorkelling ', 0);
INSERT INTO `activity-photo` VALUES (74, 10, 'GOPR2998.jpg', 'Snorkelling ', 0);
INSERT INTO `activity-photo` VALUES (75, 10, 'Snorkeling-reef.jpg', 'Snorkelling ', 0);
INSERT INTO `activity-photo` VALUES (76, 10, 'snorkel-key-west-6.jpg', 'Snorkelling ', 0);
INSERT INTO `activity-photo` VALUES (77, 11, '2013-sea-doo-gti-se-action6.jpg', 'Jet Sky Ride ', 0);
INSERT INTO `activity-photo` VALUES (78, 11, 'Celebs-On-Jet-Skis-3.jpg', 'Jet Sky Ride ', 0);
INSERT INTO `activity-photo` VALUES (79, 11, 'Celebs-On-Jet-Skis-6.jpg', 'Jet Sky Ride ', 0);
INSERT INTO `activity-photo` VALUES (80, 11, 'Celebs-On-Jet-Skis-9.jpg', 'Jet Sky Ride ', 0);
INSERT INTO `activity-photo` VALUES (81, 11, 'jetski4.jpg', 'Jet Sky Ride ', 0);
INSERT INTO `activity-photo` VALUES (86, 11, 'ThingstoDo-Jet-Ski-Tour_HiRes.jpg', 'Jet Sky Ride ', 0);
INSERT INTO `activity-photo` VALUES (88, 12, 'Banana_Boat_Beras_Basah_2.JPG', 'Banana Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (89, 12, 'banana-1.jpg', 'Banana Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (90, 12, 'bannana-boat-cropped.jpg', 'Banana Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (91, 12, 'd46a9537-78de-4972-926f-2a326bdcc485.jpg', 'Banana Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (93, 12, 'maxresdefault.jpg', 'Banana Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (94, 12, 'Water-Sports-in-Negombo-Jetski-Banana-boat-Speed-Boat-Sofa-Tube-rides-amp-many-more-576a5416745502198ef9.jpg', 'Banana Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (95, 13, 'DSC_0115.jpg', 'Glass bottom boat ', 0);
INSERT INTO `activity-photo` VALUES (96, 13, 'img_7442.jpg', 'Glass bottom boat ', 0);
INSERT INTO `activity-photo` VALUES (97, 13, 'img_7443.jpg', 'Glass bottom boat ', 0);
INSERT INTO `activity-photo` VALUES (98, 13, 'img_7444.jpg', 'Glass bottom boat ', 0);
INSERT INTO `activity-photo` VALUES (103, 13, 'xd.jpg', 'Glass bottom boat ', 0);
INSERT INTO `activity-photo` VALUES (104, 13, 'DSC5930-JensMEichkorn_web_watermark.jpg', 'Glass bottom boat ', 0);
INSERT INTO `activity-photo` VALUES (105, 14, 'boat-safari-01.jpg', 'Lagoon Boat Safari ', 0);
INSERT INTO `activity-photo` VALUES (106, 14, 'img04.jpg', 'Lagoon Boat Safari ', 0);
INSERT INTO `activity-photo` VALUES (107, 14, 'Madu-River-Boat-Ride.jpg', 'Lagoon Boat Safari ', 0);
INSERT INTO `activity-photo` VALUES (110, 14, '125.jpg', 'Lagoon Boat Safari ', 0);
INSERT INTO `activity-photo` VALUES (111, 14, '155.jpg', 'Lagoon Boat Safari ', 0);
INSERT INTO `activity-photo` VALUES (112, 14, 'Banner-madu1.jpg', 'Lagoon Boat Safari ', 0);
INSERT INTO `activity-photo` VALUES (113, 15, 'diacomplert268.jpg', 'Kayak Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (114, 15, 'e9413bd45385ce4c75f479e0731b2c0a.jpg', 'Kayak Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (115, 15, 'IMG_0388.jpg', 'Kayak Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (116, 15, 'Koggala-Lake-Hikkaduwa.jpg', 'Kayak Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (118, 15, '12.JPG', 'Kayak Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (119, 15, '242.jpg', 'Kayak Boat Ride ', 0);
INSERT INTO `activity-photo` VALUES (120, 16, 'Boa_Constrictor_Rainforest_South_America.jpg', 'Rainforest expedition ', 0);
INSERT INTO `activity-photo` VALUES (121, 16, 'dsc_0163.jpg', 'Rainforest expedition ', 0);
INSERT INTO `activity-photo` VALUES (122, 16, 'FCE85B95B3B640F08AFF74772B4A9DF7.jpg', 'Rainforest expedition ', 0);
INSERT INTO `activity-photo` VALUES (123, 16, 'sri-lanka-forest.jpg', 'Rainforest expedition ', 0);
INSERT INTO `activity-photo` VALUES (125, 16, '14.jpg', 'Rainforest expedition ', 0);
INSERT INTO `activity-photo` VALUES (127, 16, 'fd.JPG', 'Rainforest expedition ', 0);
INSERT INTO `activity-photo` VALUES (128, 17, '_MG_8669a.jpg', 'White Tea Factory ', 0);
INSERT INTO `activity-photo` VALUES (131, 17, '1111.jpg', 'White Tea Factory ', 0);
INSERT INTO `activity-photo` VALUES (132, 17, '2016.06.23-Handunugoda-Tea-Factory-0074.jpg', 'White Tea Factory ', 0);
INSERT INTO `activity-photo` VALUES (133, 17, 'l1090606.jpg', 'White Tea Factory ', 0);
INSERT INTO `activity-photo` VALUES (134, 17, 'xx.jpg', 'White Tea Factory ', 0);
INSERT INTO `activity-photo` VALUES (135, 17, 'ffd.jpg', 'White Tea Factory ', 0);
INSERT INTO `activity-photo` VALUES (136, 18, 'dd.jpg', 'Moonstone Mine ', 0);
INSERT INTO `activity-photo` VALUES (138, 18, 'eee.jpg', 'Moonstone Mine ', 0);
INSERT INTO `activity-photo` VALUES (139, 18, 'IMG_7574.jpg', 'Moonstone Mine ', 0);
INSERT INTO `activity-photo` VALUES (140, 18, 'P1010226.JPG', 'Moonstone Mine ', 0);
INSERT INTO `activity-photo` VALUES (141, 18, 's.jpg', 'Moonstone Mine ', 0);
INSERT INTO `activity-photo` VALUES (142, 18, 'p168099_2.jpg', 'Moonstone Mine ', 0);
INSERT INTO `activity-photo` VALUES (143, 19, '22.jpg', 'Koggala Lake ', 0);
INSERT INTO `activity-photo` VALUES (144, 19, 'Enormous-land-in-tranquil-area-3.jpg', 'Koggala Lake ', 0);
INSERT INTO `activity-photo` VALUES (146, 19, '11.JPG', 'Koggala Lake ', 0);
INSERT INTO `activity-photo` VALUES (148, 19, '55.jpg', 'Koggala Lake ', 0);
INSERT INTO `activity-photo` VALUES (149, 19, '64.jpg', 'Koggala Lake ', 0);
INSERT INTO `activity-photo` VALUES (150, 19, '469.jpg', 'Koggala Lake ', 0);
INSERT INTO `activity-photo` VALUES (151, 20, '14.png', 'Madu River ', 0);
INSERT INTO `activity-photo` VALUES (152, 20, '8748.jpg', 'Madu River ', 0);
INSERT INTO `activity-photo` VALUES (153, 20, '14477.jpg', 'Madu River ', 0);
INSERT INTO `activity-photo` VALUES (154, 20, '24579.jpg', 'Madu River ', 0);
INSERT INTO `activity-photo` VALUES (155, 20, '44499.JPG', 'Madu River ', 0);
INSERT INTO `activity-photo` VALUES (156, 20, 'TG_08021.jpg', 'Madu River ', 0);
INSERT INTO `activity-photo` VALUES (157, 21, 'DCX.jpg', 'Mask Making ', 0);
INSERT INTO `activity-photo` VALUES (158, 21, 'DDFWDR.jpg', 'Mask Making ', 0);
INSERT INTO `activity-photo` VALUES (159, 21, 'E.JPG', 'Mask Making ', 0);
INSERT INTO `activity-photo` VALUES (160, 21, 'IMAG0976.jpg', 'Mask Making ', 0);
INSERT INTO `activity-photo` VALUES (161, 21, 'SS.jpg', 'Mask Making ', 0);
INSERT INTO `activity-photo` VALUES (162, 21, 'XS.jpg', 'Mask Making ', 0);
INSERT INTO `activity-photo` VALUES (163, 22, 'AAEAAQAAAAAAAAk_AAAAJDJjZjZjYmY2LTI4MzktNDA5Zi1iNDFmLTM5MGIyNTU0Y2E1MQ.jpg', 'Turtle Conservation ', 0);
INSERT INTO `activity-photo` VALUES (164, 22, 'Sea-Turtle-Farm-and-Hatchery-Sri-Lanka-1024x768.jpg', 'Turtle Conservation ', 0);
INSERT INTO `activity-photo` VALUES (165, 22, 'drewre.jpg', 'Turtle Conservation ', 0);
INSERT INTO `activity-photo` VALUES (166, 22, 'werde.jpg', 'Turtle Conservation ', 0);
INSERT INTO `activity-photo` VALUES (167, 22, 'werwe.jpg', 'Turtle Conservation ', 0);
INSERT INTO `activity-photo` VALUES (168, 22, 'weee.jpg', 'Turtle Conservation ', 0);
INSERT INTO `activity-photo` VALUES (169, 23, 'DSC03805.jpg', 'Lace Industry ', 0);
INSERT INTO `activity-photo` VALUES (170, 23, 'DSCN4122.JPG', 'Lace Industry ', 0);
INSERT INTO `activity-photo` VALUES (171, 23, 'DSCN4120.JPG', 'Lace Industry ', 0);
INSERT INTO `activity-photo` VALUES (172, 23, 'image.jpg', 'Lace Industry ', 0);
INSERT INTO `activity-photo` VALUES (173, 23, 'VX.JPG', 'Lace Industry ', 0);
INSERT INTO `activity-photo` VALUES (174, 23, 'XXCX.jpg', 'Lace Industry ', 0);
INSERT INTO `activity-photo` VALUES (175, 24, '42322730.jpg', 'Seenigama Temple ', 0);
INSERT INTO `activity-photo` VALUES (176, 24, '70305034.jpg', 'Seenigama Temple ', 0);
INSERT INTO `activity-photo` VALUES (177, 24, '74829108.jpg', 'Seenigama Temple ', 0);
INSERT INTO `activity-photo` VALUES (178, 24, 'lanka13.jpg', 'Seenigama Temple ', 0);
INSERT INTO `activity-photo` VALUES (181, 24, 'dqwe.jpg', 'Seenigama Temple ', 0);
INSERT INTO `activity-photo` VALUES (182, 24, 'e4c.jpg', 'Seenigama Temple ', 0);
INSERT INTO `activity-photo` VALUES (183, 25, '08ea1f7410eb11e5afa5fa8d0d518fa0_1200x1031.jpg', 'Tsunami Photo Museum ', 0);
INSERT INTO `activity-photo` VALUES (184, 25, 'IMG_0800.jpg', 'Tsunami Photo Museum ', 0);
INSERT INTO `activity-photo` VALUES (185, 25, 'IMG_1405.JPG', 'Tsunami Photo Museum ', 0);
INSERT INTO `activity-photo` VALUES (186, 25, 'wpid-photo-20150707115522248.jpg', 'Tsunami Photo Museum ', 0);
INSERT INTO `activity-photo` VALUES (187, 25, 'ererwe.jpg', 'Tsunami Photo Museum ', 0);
INSERT INTO `activity-photo` VALUES (188, 25, 'erwerw.jpg', 'Tsunami Photo Museum ', 0);
INSERT INTO `activity-photo` VALUES (189, 26, '2.jpg', 'Thotagamuwa Rajamaha Viharaya ', 0);
INSERT INTO `activity-photo` VALUES (190, 26, '18537954.jpg', 'Thotagamuwa Rajamaha Viharaya ', 0);
INSERT INTO `activity-photo` VALUES (191, 26, '98084662.jpg', 'Thotagamuwa Rajamaha Viharaya ', 0);
INSERT INTO `activity-photo` VALUES (192, 26, 'DDFWEE.jpg', 'Thotagamuwa Rajamaha Viharaya ', 0);
INSERT INTO `activity-photo` VALUES (193, 26, 'sdww.jpg', 'Thotagamuwa Rajamaha Viharaya ', 0);
INSERT INTO `activity-photo` VALUES (194, 26, 'cdfdf.jpg', 'Thotagamuwa Rajamaha Viharaya ', 0);
INSERT INTO `activity-photo` VALUES (195, 27, '30731071.jpg', 'Tsunami Hongangi Temple ', 0);
INSERT INTO `activity-photo` VALUES (196, 27, 'dfwer.jpg', 'Tsunami Hongangi Temple ', 0);
INSERT INTO `activity-photo` VALUES (197, 27, 'eert.jpg', 'Tsunami Hongangi Temple ', 0);
INSERT INTO `activity-photo` VALUES (198, 27, 'eetrjfg.jpg', 'Tsunami Hongangi Temple ', 0);
INSERT INTO `activity-photo` VALUES (199, 27, 'weerweft.jpg', 'Tsunami Hongangi Temple ', 0);
INSERT INTO `activity-photo` VALUES (200, 27, 'werwef.jpg', 'Tsunami Hongangi Temple ', 0);
INSERT INTO `activity-photo` VALUES (201, 28, 'de.jpg', 'Konch Ship Wreck ', 0);
INSERT INTO `activity-photo` VALUES (202, 28, 'df.png', 'Konch Ship Wreck ', 0);
INSERT INTO `activity-photo` VALUES (203, 28, 'ed.png', 'Konch Ship Wreck ', 0);
INSERT INTO `activity-photo` VALUES (204, 28, '45.jpg', 'Konch Ship Wreck ', 0);
INSERT INTO `activity-photo` VALUES (205, 28, '78.jpg', 'Konch Ship Wreck ', 0);
INSERT INTO `activity-photo` VALUES (206, 28, 'er.jpg', 'Konch Ship Wreck ', 0);
INSERT INTO `activity-photo` VALUES (207, 29, 'Galle-travel-guide.jpg', 'Galle Fort ', 0);
INSERT INTO `activity-photo` VALUES (208, 29, 'galle-0169.jpg', 'Galle Fort ', 0);
INSERT INTO `activity-photo` VALUES (209, 29, '16642082.jpg', 'Galle Fort ', 0);
INSERT INTO `activity-photo` VALUES (210, 29, '166041249241038180149042134002046005195178102139.jpg', 'Galle Fort ', 0);
INSERT INTO `activity-photo` VALUES (211, 29, 'Galle_Fort.JPG', 'Galle Fort ', 0);
INSERT INTO `activity-photo` VALUES (212, 29, 'xdd.jpg', 'Galle Fort ', 0);
INSERT INTO `activity-photo` VALUES (213, 30, 'f.jpg', 'Yala National Park ', 0);
INSERT INTO `activity-photo` VALUES (214, 30, 's.JPG', 'Yala National Park ', 0);
INSERT INTO `activity-photo` VALUES (216, 30, '45555.jpg', 'Yala National Park ', 0);
INSERT INTO `activity-photo` VALUES (217, 30, '7899.JPG', 'Yala National Park ', 0);
INSERT INTO `activity-photo` VALUES (219, 30, 'ein-leoparden-weibchen-im-yala-nationalpark-im-suedosten-von-sri-lanka.jpg', 'Yala National Park ', 0);
INSERT INTO `activity-photo` VALUES (220, 30, '3.jpg', 'Yala National Park ', 0);
INSERT INTO `activity-photo` VALUES (222, 31, 'Uda1.jpg', 'u', 0);
INSERT INTO `activity-photo` VALUES (223, 32, 'massage.jpg', 'Massage ', 0);
INSERT INTO `activity-photo` VALUES (224, 31, 'uda2.jpg', 'Udawalawa National Park', 0);
INSERT INTO `activity-photo` VALUES (225, 32, 'iStock_SHIRODHARA.jpg', 'Massage ', 0);
INSERT INTO `activity-photo` VALUES (226, 31, 'uda3.jpg', 'Udawalawa National Park', 0);
INSERT INTO `activity-photo` VALUES (227, 32, 'couples-massage-lafusion-massage-and-spa-body-couples-massage.jpg', 'Massage ', 0);
INSERT INTO `activity-photo` VALUES (228, 31, 'uda4.jpg', 'Udawalawa National Park', 0);
INSERT INTO `activity-photo` VALUES (229, 32, 'home2.jpg', 'Massage ', 0);
INSERT INTO `activity-photo` VALUES (230, 32, 'Massage-2.jpg', 'Massage ', 0);
INSERT INTO `activity-photo` VALUES (231, 31, 'uda5.jpg', 'Udawalawa National Park', 0);
INSERT INTO `activity-photo` VALUES (232, 32, 'Zen-Shiatsu-Massage.jpg', 'Massage ', 0);
INSERT INTO `activity-photo` VALUES (233, 31, 'uda6.jpg', 'Udawalawa National Park', 0);
INSERT INTO `activity-photo` VALUES (246, 33, '130509036.jpg', '1', 0);
INSERT INTO `activity-photo` VALUES (247, 33, 'A-3.jpg', '2', 0);
INSERT INTO `activity-photo` VALUES (248, 33, 'Yala-National-Park-07.jpg', '3', 0);
INSERT INTO `activity-photo` VALUES (249, 33, 'YalaNP.jpg', '4', 0);
INSERT INTO `activity-photo` VALUES (251, 34, 'GALLE_FORT_GALLE_SRI_LANKA_JAN_2013_8553425195.jpg', '7', 0);
INSERT INTO `activity-photo` VALUES (255, 34, 'HSC_Stories_LP_Galle_Patty-Ho.jpg', '6', 0);
INSERT INTO `activity-photo` VALUES (256, 34, 'AwayLands_SriLanka-Fusion14_008.jpg', '8', 0);
INSERT INTO `activity-photo` VALUES (257, 35, '03.jpg', '1', 0);
INSERT INTO `activity-photo` VALUES (258, 35, 'P-with-elephant.jpg', '2', 0);
INSERT INTO `activity-photo` VALUES (259, 35, 'Sri-Lanka-leapord.jpg', '3', 0);
INSERT INTO `activity-photo` VALUES (260, 36, 'AMBALANGODA-ARIYAPALA-MASK-MUSEUM.jpg', '1', 1);
INSERT INTO `activity-photo` VALUES (261, 36, 'ariyapala-mask-museum.jpg', '2', 2);
INSERT INTO `activity-photo` VALUES (262, 36, 'ariyapala-mask-museum1.jpg', '3', 3);
INSERT INTO `activity-photo` VALUES (263, 36, 'ariyapala-sons.jpg', '4', 4);
INSERT INTO `activity-photo` VALUES (264, 37, '-67833888959_233369251947_1507859588_n.jpg', '1', 0);
INSERT INTO `activity-photo` VALUES (265, 37, 'Koggala-Lake-Boat-Trip.jpg', '2', 0);
INSERT INTO `activity-photo` VALUES (266, 37, 'yimg_eXYiYU-640x425.jpg', '3', 0);
INSERT INTO `activity-photo` VALUES (267, 37, 'yimg_hztMgv-640x391.jpg', '4', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `booked_rooms`
-- 

CREATE TABLE `booked_rooms` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `room_type` int(5) NOT NULL,
  `date` date NOT NULL,
  `booked_rooms` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=latin1 AUTO_INCREMENT=169 ;

-- 
-- Dumping data for table `booked_rooms`
-- 

INSERT INTO `booked_rooms` VALUES (1, 3, '2018-03-01', 5);
INSERT INTO `booked_rooms` VALUES (2, 3, '2018-03-02', 5);
INSERT INTO `booked_rooms` VALUES (3, 3, '2018-03-03', 5);
INSERT INTO `booked_rooms` VALUES (4, 3, '2018-03-04', 5);
INSERT INTO `booked_rooms` VALUES (5, 3, '2018-03-05', 5);
INSERT INTO `booked_rooms` VALUES (6, 3, '2018-03-06', 5);
INSERT INTO `booked_rooms` VALUES (7, 3, '2018-03-07', 5);
INSERT INTO `booked_rooms` VALUES (8, 3, '2018-03-08', 5);
INSERT INTO `booked_rooms` VALUES (9, 3, '2018-03-09', 5);
INSERT INTO `booked_rooms` VALUES (10, 3, '2018-03-10', 5);
INSERT INTO `booked_rooms` VALUES (11, 3, '2018-03-11', 5);
INSERT INTO `booked_rooms` VALUES (12, 3, '2018-03-12', 5);
INSERT INTO `booked_rooms` VALUES (13, 3, '2018-03-13', 5);
INSERT INTO `booked_rooms` VALUES (14, 3, '2018-03-14', 5);
INSERT INTO `booked_rooms` VALUES (15, 3, '2018-03-15', 5);
INSERT INTO `booked_rooms` VALUES (16, 6, '2018-03-01', 2);
INSERT INTO `booked_rooms` VALUES (17, 6, '2018-03-02', 2);
INSERT INTO `booked_rooms` VALUES (18, 6, '2018-03-03', 2);
INSERT INTO `booked_rooms` VALUES (19, 6, '2018-03-04', 2);
INSERT INTO `booked_rooms` VALUES (20, 6, '2018-03-05', 2);
INSERT INTO `booked_rooms` VALUES (21, 6, '2018-03-06', 2);
INSERT INTO `booked_rooms` VALUES (22, 6, '2018-03-07', 2);
INSERT INTO `booked_rooms` VALUES (23, 6, '2018-03-08', 2);
INSERT INTO `booked_rooms` VALUES (24, 6, '2018-03-09', 2);
INSERT INTO `booked_rooms` VALUES (25, 6, '2018-03-10', 2);
INSERT INTO `booked_rooms` VALUES (26, 6, '2018-03-11', 2);
INSERT INTO `booked_rooms` VALUES (27, 6, '2018-03-12', 2);
INSERT INTO `booked_rooms` VALUES (28, 6, '2018-03-13', 2);
INSERT INTO `booked_rooms` VALUES (29, 6, '2018-03-14', 2);
INSERT INTO `booked_rooms` VALUES (30, 6, '2018-03-15', 2);
INSERT INTO `booked_rooms` VALUES (31, 3, '2018-03-16', 1);
INSERT INTO `booked_rooms` VALUES (32, 6, '2018-03-16', 1);
INSERT INTO `booked_rooms` VALUES (33, 3, '2018-03-17', 5);
INSERT INTO `booked_rooms` VALUES (34, 3, '2018-03-18', 5);
INSERT INTO `booked_rooms` VALUES (35, 6, '2018-03-17', 2);
INSERT INTO `booked_rooms` VALUES (36, 6, '2018-03-18', 2);
INSERT INTO `booked_rooms` VALUES (37, 6, '2018-03-19', 1);
INSERT INTO `booked_rooms` VALUES (38, 3, '2018-03-19', 1);
INSERT INTO `booked_rooms` VALUES (39, 3, '2018-03-28', 5);
INSERT INTO `booked_rooms` VALUES (40, 3, '2018-03-29', 5);
INSERT INTO `booked_rooms` VALUES (41, 3, '2018-03-30', 5);
INSERT INTO `booked_rooms` VALUES (42, 6, '2018-03-28', 2);
INSERT INTO `booked_rooms` VALUES (43, 6, '2018-03-29', 2);
INSERT INTO `booked_rooms` VALUES (44, 6, '2018-03-30', 2);
INSERT INTO `booked_rooms` VALUES (64, 3, '2018-08-11', 5);
INSERT INTO `booked_rooms` VALUES (63, 3, '2018-08-10', 5);
INSERT INTO `booked_rooms` VALUES (62, 3, '2018-08-09', 5);
INSERT INTO `booked_rooms` VALUES (61, 3, '2018-04-12', 4);
INSERT INTO `booked_rooms` VALUES (60, 6, '2018-04-13', 2);
INSERT INTO `booked_rooms` VALUES (59, 6, '2018-04-12', 1);
INSERT INTO `booked_rooms` VALUES (58, 3, '2018-04-02', 5);
INSERT INTO `booked_rooms` VALUES (57, 6, '2018-04-02', 2);
INSERT INTO `booked_rooms` VALUES (56, 6, '2018-04-01', 1);
INSERT INTO `booked_rooms` VALUES (55, 3, '2018-04-01', 2);
INSERT INTO `booked_rooms` VALUES (65, 6, '2018-08-09', 2);
INSERT INTO `booked_rooms` VALUES (66, 6, '2018-08-10', 2);
INSERT INTO `booked_rooms` VALUES (67, 6, '2018-08-11', 2);
INSERT INTO `booked_rooms` VALUES (68, 3, '2018-04-04', 5);
INSERT INTO `booked_rooms` VALUES (69, 6, '2018-04-04', 2);
INSERT INTO `booked_rooms` VALUES (70, 3, '2018-06-18', 5);
INSERT INTO `booked_rooms` VALUES (71, 3, '2018-06-19', 5);
INSERT INTO `booked_rooms` VALUES (72, 3, '2018-06-20', 5);
INSERT INTO `booked_rooms` VALUES (73, 6, '2018-06-18', 2);
INSERT INTO `booked_rooms` VALUES (74, 6, '2018-06-19', 2);
INSERT INTO `booked_rooms` VALUES (75, 6, '2018-06-20', 2);
INSERT INTO `booked_rooms` VALUES (81, 7, '2018-04-01', 1);
INSERT INTO `booked_rooms` VALUES (80, 4, '2018-04-01', 1);
INSERT INTO `booked_rooms` VALUES (79, 4, '2018-04-28', 0);
INSERT INTO `booked_rooms` VALUES (82, 4, '2018-10-29', 1);
INSERT INTO `booked_rooms` VALUES (83, 4, '2018-10-30', 1);
INSERT INTO `booked_rooms` VALUES (84, 4, '2018-10-31', 1);
INSERT INTO `booked_rooms` VALUES (85, 4, '2018-11-01', 5);
INSERT INTO `booked_rooms` VALUES (86, 4, '2018-11-02', 5);
INSERT INTO `booked_rooms` VALUES (87, 3, '2018-11-03', 5);
INSERT INTO `booked_rooms` VALUES (88, 3, '2018-11-04', 5);
INSERT INTO `booked_rooms` VALUES (89, 3, '2018-11-05', 5);
INSERT INTO `booked_rooms` VALUES (90, 3, '2018-11-06', 5);
INSERT INTO `booked_rooms` VALUES (91, 3, '2018-11-07', 5);
INSERT INTO `booked_rooms` VALUES (92, 3, '2018-11-08', 5);
INSERT INTO `booked_rooms` VALUES (93, 3, '2018-11-09', 5);
INSERT INTO `booked_rooms` VALUES (94, 3, '2018-11-10', 5);
INSERT INTO `booked_rooms` VALUES (95, 3, '2018-11-11', 5);
INSERT INTO `booked_rooms` VALUES (96, 3, '2018-11-12', 5);
INSERT INTO `booked_rooms` VALUES (97, 3, '2018-11-13', 5);
INSERT INTO `booked_rooms` VALUES (98, 3, '2018-11-14', 5);
INSERT INTO `booked_rooms` VALUES (99, 3, '2018-11-15', 5);
INSERT INTO `booked_rooms` VALUES (100, 3, '2018-11-16', 5);
INSERT INTO `booked_rooms` VALUES (101, 3, '2018-11-17', 5);
INSERT INTO `booked_rooms` VALUES (102, 3, '2018-11-18', 5);
INSERT INTO `booked_rooms` VALUES (103, 3, '2018-11-19', 5);
INSERT INTO `booked_rooms` VALUES (104, 3, '2018-11-20', 5);
INSERT INTO `booked_rooms` VALUES (105, 3, '2018-11-21', 5);
INSERT INTO `booked_rooms` VALUES (106, 3, '2018-11-22', 5);
INSERT INTO `booked_rooms` VALUES (107, 3, '2018-11-23', 5);
INSERT INTO `booked_rooms` VALUES (108, 3, '2018-11-24', 5);
INSERT INTO `booked_rooms` VALUES (109, 3, '2018-11-25', 5);
INSERT INTO `booked_rooms` VALUES (110, 3, '2018-11-26', 5);
INSERT INTO `booked_rooms` VALUES (111, 3, '2018-11-27', 5);
INSERT INTO `booked_rooms` VALUES (112, 3, '2018-11-28', 5);
INSERT INTO `booked_rooms` VALUES (113, 3, '2018-11-29', 5);
INSERT INTO `booked_rooms` VALUES (114, 3, '2018-11-30', 5);
INSERT INTO `booked_rooms` VALUES (115, 6, '2018-11-01', 2);
INSERT INTO `booked_rooms` VALUES (116, 6, '2018-11-02', 2);
INSERT INTO `booked_rooms` VALUES (117, 6, '2018-11-03', 2);
INSERT INTO `booked_rooms` VALUES (118, 6, '2018-11-04', 2);
INSERT INTO `booked_rooms` VALUES (119, 6, '2018-11-05', 2);
INSERT INTO `booked_rooms` VALUES (120, 6, '2018-11-06', 2);
INSERT INTO `booked_rooms` VALUES (121, 6, '2018-11-07', 2);
INSERT INTO `booked_rooms` VALUES (122, 6, '2018-11-08', 2);
INSERT INTO `booked_rooms` VALUES (123, 6, '2018-11-09', 2);
INSERT INTO `booked_rooms` VALUES (124, 6, '2018-11-10', 2);
INSERT INTO `booked_rooms` VALUES (125, 6, '2018-11-11', 2);
INSERT INTO `booked_rooms` VALUES (126, 6, '2018-11-12', 2);
INSERT INTO `booked_rooms` VALUES (127, 6, '2018-11-13', 2);
INSERT INTO `booked_rooms` VALUES (128, 6, '2018-11-14', 2);
INSERT INTO `booked_rooms` VALUES (129, 6, '2018-11-15', 2);
INSERT INTO `booked_rooms` VALUES (130, 6, '2018-11-16', 2);
INSERT INTO `booked_rooms` VALUES (131, 6, '2018-11-17', 2);
INSERT INTO `booked_rooms` VALUES (132, 6, '2018-11-18', 2);
INSERT INTO `booked_rooms` VALUES (133, 6, '2018-11-19', 2);
INSERT INTO `booked_rooms` VALUES (134, 6, '2018-11-20', 2);
INSERT INTO `booked_rooms` VALUES (135, 6, '2018-11-21', 2);
INSERT INTO `booked_rooms` VALUES (136, 6, '2018-11-22', 2);
INSERT INTO `booked_rooms` VALUES (137, 6, '2018-11-23', 2);
INSERT INTO `booked_rooms` VALUES (138, 6, '2018-11-24', 2);
INSERT INTO `booked_rooms` VALUES (139, 6, '2018-11-25', 2);
INSERT INTO `booked_rooms` VALUES (140, 6, '2018-11-26', 2);
INSERT INTO `booked_rooms` VALUES (141, 6, '2018-11-27', 2);
INSERT INTO `booked_rooms` VALUES (142, 6, '2018-11-28', 2);
INSERT INTO `booked_rooms` VALUES (143, 6, '2018-11-29', 2);
INSERT INTO `booked_rooms` VALUES (144, 6, '2018-11-30', 2);
INSERT INTO `booked_rooms` VALUES (145, 3, '2018-04-03', 2);
INSERT INTO `booked_rooms` VALUES (146, 6, '2018-04-03', 1);
INSERT INTO `booked_rooms` VALUES (147, 5, '2018-04-08', 1);
INSERT INTO `booked_rooms` VALUES (148, 6, '2018-04-05', 1);
INSERT INTO `booked_rooms` VALUES (149, 6, '2018-04-06', 1);
INSERT INTO `booked_rooms` VALUES (150, 7, '2018-04-05', 1);
INSERT INTO `booked_rooms` VALUES (151, 7, '2018-04-06', 1);
INSERT INTO `booked_rooms` VALUES (152, 3, '2018-04-07', 2);
INSERT INTO `booked_rooms` VALUES (153, 3, '2018-04-10', 1);
INSERT INTO `booked_rooms` VALUES (154, 3, '2018-04-11', 1);
INSERT INTO `booked_rooms` VALUES (155, 3, '2018-04-13', 5);
INSERT INTO `booked_rooms` VALUES (156, 5, '2018-06-22', 2);
INSERT INTO `booked_rooms` VALUES (157, 5, '2018-06-23', 2);
INSERT INTO `booked_rooms` VALUES (158, 5, '2018-06-24', 2);
INSERT INTO `booked_rooms` VALUES (159, 5, '2018-06-25', 2);
INSERT INTO `booked_rooms` VALUES (160, 5, '2018-06-26', 2);
INSERT INTO `booked_rooms` VALUES (161, 5, '2018-06-27', 2);
INSERT INTO `booked_rooms` VALUES (162, 5, '2018-06-28', 1);
INSERT INTO `booked_rooms` VALUES (163, 5, '2018-06-29', 1);
INSERT INTO `booked_rooms` VALUES (164, 5, '2018-06-30', 1);
INSERT INTO `booked_rooms` VALUES (165, 5, '2018-07-01', 1);
INSERT INTO `booked_rooms` VALUES (166, 3, '2018-04-14', 5);
INSERT INTO `booked_rooms` VALUES (167, 6, '2018-04-14', 2);
INSERT INTO `booked_rooms` VALUES (168, 5, '2018-06-21', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `booking`
-- 

CREATE TABLE `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `message` longtext NOT NULL,
  `total_price` decimal(15,2) NOT NULL,
  `advance_payment` decimal(15,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `booking`
-- 

INSERT INTO `booking` VALUES (4, '2018-03-31', 'PATRICIA BARRY', 'patsybarryirl@gmail.com', 'Singapore', '+65 98574842', '2018-04-01', '2018-04-02', 'Hello, \nI am travelling with 3 boys so if we could have twin beds in both rooms instead of double beds please.\nWe would like to stay longer so if you get any free rooms can you please keep them for us.  Also we would like to go scuba diving on the 1 April if possible.\nThank you', 190.00, 95.00, 1);
INSERT INTO `booking` VALUES (5, '2018-03-31', 'Margaret McLeod', 'peggyhmcleod@comcast.net', 'United States', '206-291-2608', '2018-10-29', '2018-11-03', 'We need 2 beds.  Thank you.', 375.00, 187.50, 1);
INSERT INTO `booking` VALUES (6, '2018-04-02', 'Pirapaharan Ketheeswaranathan', 'kvckaran@yahoo.com', 'Sri Lanka (à·à·Šâ€à¶»à·“ à¶½à¶‚à¶šà·à·€)', '0777516816', '2018-04-08', '2018-04-09', 'I will pay at reception. I need full board meals for 02 adults and 2 children.', 170.00, 85.00, 0);
INSERT INTO `booking` VALUES (7, '2018-04-03', 'Vajira Nissanka', 'vajira_n@yahoo.com', 'Sri Lanka (à·à·Šâ€à¶»à·“ à¶½à¶‚à¶šà·à·€)', '0767811226', '2018-04-05', '2018-04-07', 'Please give us rooms next to each other as my mom (77 years old) will be in the next room and we want to be close to her in case she needs help with something. ', 340.00, 170.00, 1);
INSERT INTO `booking` VALUES (8, '2018-04-06', 'dsdf', 'sdfs@gmail.com', 'United States', '8545478784584', '2018-04-07', '2018-04-08', '', 205.00, 102.50, 0);
INSERT INTO `booking` VALUES (9, '2018-04-10', 'Nick Oxen', 'fsdjfsdjf@gmail.com', 'Uganda', '43324234234', '2018-04-10', '2018-04-14', '', 420.00, 210.00, 0);
INSERT INTO `booking` VALUES (10, '2018-04-12', 'Dammika ', 'Jaz_ssi@yahoo.co.uk', 'United Kingdom', '0447716165785', '2018-06-22', '2018-07-02', 'We will like to come 22 nd of June for family room half board ', 1440.00, 720.00, 0);
INSERT INTO `booking` VALUES (11, '2018-04-16', 'jessica jayasingha', 'jaz_ssi@yahoo.co.uk', 'United Kingdom', '00447716165785', '2018-06-21', '2018-06-28', 'hi  i would like to book a room (family room ) .  ', 1008.00, 504.00, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `booking-room-details`
-- 

CREATE TABLE `booking-room-details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `room_basis` int(11) NOT NULL,
  `no_of_extra_beds` int(11) NOT NULL,
  `no_of_adults` int(11) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  `no_of_children_un_5` int(11) NOT NULL,
  `room_price` decimal(15,2) NOT NULL,
  `extra_bed_price` decimal(15,2) NOT NULL,
  `children_ages` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `booking-room-details`
-- 

INSERT INTO `booking-room-details` VALUES (5, 4, 4, 1, 0, 2, 0, 0, 105.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (6, 4, 7, 1, 0, 2, 0, 0, 85.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (7, 5, 4, 1, 0, 2, 0, 0, 75.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (8, 6, 5, 2, 0, 3, 1, 0, 145.00, 0.00, '10');
INSERT INTO `booking-room-details` VALUES (9, 7, 7, 2, 0, 2, 0, 2, 95.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (10, 7, 6, 2, 0, 1, 0, 0, 75.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (11, 8, 3, 1, 0, 1, 0, 0, 100.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (12, 8, 3, 2, 0, 1, 0, 0, 105.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (13, 9, 3, 2, 0, 1, 0, 0, 105.00, 0.00, '');
INSERT INTO `booking-room-details` VALUES (14, 10, 5, 2, 0, 3, 1, 0, 119.00, 0.00, '6');
INSERT INTO `booking-room-details` VALUES (15, 11, 5, 2, 0, 3, 1, 0, 119.00, 0.00, '6');

-- --------------------------------------------------------

-- 
-- Table structure for table `default-prices`
-- 

CREATE TABLE `default-prices` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `basis_id` int(4) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `default-prices`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `discount`
-- 

CREATE TABLE `discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `discount`
-- 

INSERT INTO `discount` VALUES (6, '2018-03-23', '2018-04-01', 5);
INSERT INTO `discount` VALUES (7, '2018-03-09', '2018-04-30', 10);
INSERT INTO `discount` VALUES (8, '2018-05-01', '2018-10-31', 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `facilities`
-- 

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

-- 
-- Dumping data for table `facilities`
-- 

INSERT INTO `facilities` VALUES (41, 'Credit-Cards.jpg', 'Major credit cards accepted', '', '', '', '<p>We accept major credit cards such as VISA, MASTERCARD, and AMERICAN EXPRESS.&nbsp;</p>', '', '', '', 9);
INSERT INTO `facilities` VALUES (43, '-87412463766_113790677140_1511412631_n.jpg', 'Airport transfers', '', '', '', '<p>We offer airport drop and pick up.&nbsp; Our drivers will ensure you reach the airport safely &amp; on time.</p>', '', '', '', 4);
INSERT INTO `facilities` VALUES (44, '-45245302445_155957838461_1511413414_n.jpg', 'Tour Arrangements', '', '', '', '<p>We arrange your tours according to your specifications, with hotel reservations / guides to ensure you have an exhilarating experience.</p>', '', '', '', 6);
INSERT INTO `facilities` VALUES (45, '-181557247402_19645893504_1511413502_n.jpg', 'Foreign currency exchange', '', '', '', '<p>Your foreign currency can be exchanged to Sri Lankan rupees at the Cashiers Counter.&nbsp;&nbsp;&nbsp; </p>', '', '', '', 1);
INSERT INTO `facilities` VALUES (46, '-74639722116_126563418790_1511413649_n.jpg', 'Cots for children', '', '', '', '<p>Cots provided free of charge for your baby.&nbsp;&nbsp; </p>', '', '', '', 3);
INSERT INTO `facilities` VALUES (47, '-32779225478_168423915428_1511413671_n.jpg', 'Safety lockers', '', '', '', '<p>A safety locker is provided for the safe keeping of your money, jewellery and other valuables.&nbsp; </p>', '', '', '', 2);
INSERT INTO `facilities` VALUES (50, '-126130785677_75072355229_1514951671_n.jpg', 'Restaurant', '', '', '', '<p id="line1">Enjoy Sri Lankan &amp; International dishes prepared by our chefs.</p>', '', '', '', 5);
INSERT INTO `facilities` VALUES (51, '-155179909009_46023231897_1514951843_n.jpg', 'Front Desk', '', '', '', '<p>24 hour Front Desk to help you anytime.&nbsp;&nbsp; </p>', '', '', '', 7);
INSERT INTO `facilities` VALUES (52, '-111736656584_89466484322_1514952056_n.jpg', 'Parking', '', '', '', '<p>Free parking for your convenience.&nbsp;&nbsp;&nbsp; </p>', '', '', '', 12);
INSERT INTO `facilities` VALUES (53, '-3633934319_197569206587_1516262473_n.jpg', 'Laundry services', '', '', '', '<p>Laundry facilities which include washing, pressing &amp; dry cleaning via normal and express service</p>', '', '', '', 0);
INSERT INTO `facilities` VALUES (54, '-186215686522_14987454384_1516262718_n.jpg', 'Doctor on call', '', '', '', '<p>Professional and reliable healthcare services to your doorstep and Initial medical advice is just a call in 24 hours</p>', '', '', '', 0);
INSERT INTO `facilities` VALUES (55, '-36556597980_164646542926_1516262766_n.jpg', 'Free wifi in the public area', '', '', '', '<p>Complimentary Wi-Fi is provided throughout the public areas as we know how important it is to stay in touch on your travels!!</p>', '', '', '', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `gallery`
-- 

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_type` int(11) NOT NULL,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=128 ;

-- 
-- Dumping data for table `gallery`
-- 

INSERT INTO `gallery` VALUES (88, 0, '392.jpg', '1', 1);
INSERT INTO `gallery` VALUES (89, 0, '312.jpg', '2', 2);
INSERT INTO `gallery` VALUES (90, 0, '17.jpg', '3', 3);
INSERT INTO `gallery` VALUES (91, 0, '32.jpg', '4', 4);
INSERT INTO `gallery` VALUES (92, 0, '53.jpg', '5', 5);
INSERT INTO `gallery` VALUES (93, 0, '109.jpg', '6', 12);
INSERT INTO `gallery` VALUES (94, 0, '400.jpg', '7', 7);
INSERT INTO `gallery` VALUES (95, 0, '545.jpg', '8', 6);
INSERT INTO `gallery` VALUES (96, 0, '240.jpg', '9', 13);
INSERT INTO `gallery` VALUES (97, 0, '341.jpg', '10', 14);
INSERT INTO `gallery` VALUES (98, 0, '306.jpg', '11', 15);
INSERT INTO `gallery` VALUES (99, 0, '199.jpg', '12', 8);
INSERT INTO `gallery` VALUES (100, 0, '202.jpg', '13', 9);
INSERT INTO `gallery` VALUES (101, 0, '272.jpg', '14', 10);
INSERT INTO `gallery` VALUES (102, 0, '305.jpg', '15', 11);
INSERT INTO `gallery` VALUES (103, 0, '270.jpg', '16', 16);
INSERT INTO `gallery` VALUES (104, 0, '139.jpg', '17', 17);
INSERT INTO `gallery` VALUES (105, 0, '167.jpg', '18', 18);
INSERT INTO `gallery` VALUES (106, 0, '464.jpg', '19', 19);
INSERT INTO `gallery` VALUES (107, 0, '150.jpg', '20', 20);
INSERT INTO `gallery` VALUES (108, 0, '471.jpg', '21', 21);
INSERT INTO `gallery` VALUES (109, 0, '183.jpg', '22', 22);
INSERT INTO `gallery` VALUES (110, 0, '362.jpg', '23', 24);
INSERT INTO `gallery` VALUES (111, 0, '363.jpg', '24', 25);
INSERT INTO `gallery` VALUES (112, 0, '367.jpg', '25', 26);
INSERT INTO `gallery` VALUES (113, 0, '374.jpg', '26', 27);
INSERT INTO `gallery` VALUES (114, 0, '379.jpg', '27', 28);
INSERT INTO `gallery` VALUES (115, 0, '405.jpg', '28', 29);
INSERT INTO `gallery` VALUES (116, 0, '408.jpg', '29', 30);
INSERT INTO `gallery` VALUES (117, 0, '412.jpg', '30', 31);
INSERT INTO `gallery` VALUES (118, 0, '604.jpg', '31', 32);
INSERT INTO `gallery` VALUES (119, 0, '606.jpg', '32', 33);
INSERT INTO `gallery` VALUES (120, 0, '244.jpg', '33', 34);
INSERT INTO `gallery` VALUES (121, 0, '253.jpg', '34', 35);
INSERT INTO `gallery` VALUES (122, 0, '456.jpg', '35', 38);
INSERT INTO `gallery` VALUES (123, 0, '450.jpg', '36', 39);
INSERT INTO `gallery` VALUES (124, 0, '452.jpg', '37', 40);
INSERT INTO `gallery` VALUES (125, 0, '186.jpg', '38', 23);
INSERT INTO `gallery` VALUES (126, 0, '572.jpg', '39', 37);
INSERT INTO `gallery` VALUES (127, 0, '340.jpg', '40', 36);

-- --------------------------------------------------------

-- 
-- Table structure for table `gallery-type`
-- 

CREATE TABLE `gallery-type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type-name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `gallery-type`
-- 

INSERT INTO `gallery-type` VALUES (2, 'Wellness', 4);
INSERT INTO `gallery-type` VALUES (3, 'Restaurant ', 3);
INSERT INTO `gallery-type` VALUES (5, 'Hotel', 1);
INSERT INTO `gallery-type` VALUES (6, 'Beach', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `guest-comment`
-- 

CREATE TABLE `guest-comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `guest-comment`
-- 

INSERT INTO `guest-comment` VALUES (16, 'louiseexeterdevon.jpg', 'Louise Exeter ', '', '', '', 'Devon', '', '', '', '<p>We finally managed to get a transfer to Coral Sands as after having booked into a hotel not to our taste as we thought. We should try somewhere else we desperately tried to get a transfer to Coral Sands which we stayed in 2016.&nbsp;It may be a 3* but so much better than the so called 5* hotel in Kalutra that we had booked. The staff are terrific and what a lovely welcome back we had , it may have only been for 3 nights but wow what a difference it made to our holiday.&nbsp;We could not get any longer as the hotel was fully booked and you can understand why. What a brilliant position it has and the views are spectacular from your room as well as the sunbeds</p>', '', '', '', 0);
INSERT INTO `guest-comment` VALUES (17, 'avatar028.jpg', 'Jesper H', '', '', '', 'Sweden', '', '', '', '<p>This is my 4th visit to Coral Sands, and every time I arrive I can feel the nice atmosphere here. The staff are all friendly, helpful and just all-around nice. The rooms are good sized and well placed with easy access to the garden, the sea and the pool. The food is okay, and the beach bar is pleasant to sit in.&nbsp;Definitely worth a visit - I know I&rsquo;m coming back.</p>', '', '', '', 0);
INSERT INTO `guest-comment` VALUES (18, 'laura-d.jpg', 'Laura D', '', '', '', 'Australia', '', '', '', '<p>On first arriving at Coral Sands there was an issue with our booking as they couldn''t find it even though I had a confirmation number. The staff handled this well and got us a room in a short amount of time. The food was excellent for both breakfast and dinner. The staff were very professional and friendly. The manager in particular was very friendly and spoke with us on numerous occasions. The location is perfect, right on Hikkaduwa beach. The room was very comfortable and clean.</p>', '', '', '', 0);
INSERT INTO `guest-comment` VALUES (19, 'avatar003.jpg', 'ChilliIshara', '', '', '', 'Sweden', '', '', '', '<p>Me and my husband had our honeymoon at this hotel. The hotel was fully booked but we did not experience this at all, the pool was never full, the restaurant still felt relaxed and the service was still on top. I have visited this hotel before also and was really satisfied then too, but now they had a new bigger pool and more facilities. The food was really excellent but it is really the friendly staff who creates the good atmosphere at this hotel. We highly recommend it :)</p>', '', '', '', 0);
INSERT INTO `guest-comment` VALUES (20, 'bulat187.jpg', 'Bulat187', '', '', '', 'Malaysia', '', '', '', '<p>No complaints. Check-in was smooth. The welcome drink and cold face towel was very much refreshing especially since we had been on the road the whole day - kudos to Coral Sands for this gesture! Rooms and toilets were clean. Nice swimming pool (s) Decent spread for breakfast - good mixture of local and western. Service staff were excellent too; from reception to housekeeping to bar and coffee-house, just superb! :) Oh btw, there''s a number of open sun-decks, around the hotel, do explore. Thank you Coral Sands, keep it up! :)</p>', '', '', '', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `introduction`
-- 

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `introduction`
-- 

INSERT INTO `introduction` VALUES (1, 'introduction.jpg', '', '<div class="section" style="margin-top: 40px;">\n<div class="widget-about-promo" style="background-image: url(''/Coralsand/admin/assets/img/photo-about.jpg'');" data-background="assets/img/photo-about.jpg">\n<div class="wrapper-inner">\n<div class="widget-inner">\n<div class="row">\n<div class="col-md-6">\n<h2>Welcome To Coral Sands Hikkaduwa</h2>\n<h5>Your Perfect Escape</h5>\n<p>Located on the pristine beaches of Hikkaduwa, Coral Sands Hotel offers you an unmatched stretch of beach, with snorkeling, scuba diving, and a plethora of varieties of tropical fish at your fingertips. Watch the sunset from your balcony as the sound of the paradise comes alive as the sound of the tide crashes against the sand.</p>\n<p>Transportation Experience the wonder of the reef, along with the turtles that frequent the shore every morning. Relax on one of the four private decks or on the lawn that stretches from one end of the hotel to another, or enjoy the themed entertainment and variety of cocktails at the bar. Coral Sands offers you the best of all worlds, with a vibrant, yet relaxing holiday in paradise. We''ll see you soon.</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<p><span id="result_box" class="" lang="zh-CN"><span class="">&nbsp;</span></span></p>', '<p>An den unber&uuml;hrten Str&auml;nden von Hikkaduwa gelegen, bietet das Coral Sands Hotel einen unvergleichlichen Strandabschnitt mit Schnorcheln, Tauchen und einer Vielzahl an tropischen Fischarten an Ihren Fingerspitzen. Sehen Sie den Sonnenuntergang von Ihrem Balkon, wie das Ger&auml;usch des Paradieses lebendig wird, wie das Ger&auml;usch der Flut gegen den Sand abst&uuml;rzt. Transport Erleben Sie das Wunder des Riffs, zusammen mit den Schildkr&ouml;ten, die h&auml;ufig am Ufer jeden Morgen. Entspannen Sie auf einer der vier privaten Decks oder auf dem Rasen, die von einem Ende des Hotels zu einem anderen erstreckt, oder genie&szlig;en Sie die Themen-Unterhaltung und Vielfalt an Cocktails an der Bar. Coral Sands bietet Ihnen die besten aller Welten mit einem pulsierenden und doch erholsamen Urlaub im Paradies. Wir werden dich bald sehen.</p>', '<p>Ð Ð°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð½Ñ‹Ð¹ Ð½Ð° Ð½ÐµÑ‚Ñ€Ð¾Ð½ÑƒÑ‚Ñ‹Ñ… Ð¿Ð»ÑÐ¶Ð°Ñ… Ð¥Ð¸ÐºÐºÐ°Ð´ÑƒÐ²Ñƒ, Coral Sands Hotel Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð’Ð°Ð¼ Ð½ÐµÐ¿Ñ€ÐµÐ²Ð·Ð¾Ð¹Ð´ÐµÐ½Ð½ÑƒÑŽ ÑƒÑ‡Ð°ÑÑ‚Ð¾Ðº Ð¿Ð»ÑÐ¶Ð°, Ñ Ð¿Ð¾Ð´Ð²Ð¾Ð´Ð½Ð¾Ðµ Ð¿Ð»Ð°Ð²Ð°Ð½Ð¸Ðµ, Ð¿Ð¾Ð´Ð²Ð¾Ð´Ð½Ð¾Ðµ Ð¿Ð»Ð°Ð²Ð°Ð½Ð¸Ðµ, Ð¸ Ð¼Ð½Ð¾Ð¶ÐµÑÑ‚Ð²Ð¾ Ñ€Ð°Ð·Ð½Ð¾Ð²Ð¸Ð´Ð½Ð¾ÑÑ‚ÐµÐ¹ Ñ‚Ñ€Ð¾Ð¿Ð¸Ñ‡ÐµÑÐºÐ¸Ñ… Ñ€Ñ‹Ð± Ñƒ Ð²Ð°Ñ Ð¿Ð¾Ð´ Ñ€ÑƒÐºÐ¾Ð¹. Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð½Ð° Ð·Ð°ÐºÐ°Ñ‚ Ñ Ð±Ð°Ð»ÐºÐ¾Ð½Ð°, ÐºÐ°Ðº Ð·Ð²ÑƒÐº Ñ€Ð°Ð¹ Ð¾Ð¶Ð¸Ð²Ð°ÐµÑ‚, ÐºÐ°Ðº Ð·Ð²ÑƒÐº Ð¿Ñ€Ð¸Ð»Ð¸Ð²Ð° Ð°Ð²Ð°Ñ€Ð¸Ð¹ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð² Ð¿ÐµÑÐºÐ°. Ð¢Ñ€Ð°Ð½ÑÐ¿Ð¾Ñ€Ñ‚Ð¸Ñ€Ð¾Ð²ÐºÐ° ÐžÐ¿Ñ‹Ñ‚ Ñ‡ÑƒÐ´Ð¾ Ñ€Ð¸Ñ„Ð°, Ð½Ð°Ñ€ÑÐ´Ñƒ Ñ Ñ‡ÐµÑ€ÐµÐ¿Ð°Ñ…, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ñ‡Ð°ÑÑ‚Ð¾ Ð¿Ð¾ÑÐµÑ‰Ð°ÑŽÑ‚ Ð±ÐµÑ€ÐµÐ³Ð° ÐºÐ°Ð¶Ð´Ð¾Ðµ ÑƒÑ‚Ñ€Ð¾. ÐžÑ‚Ð´Ð¾Ñ…Ð½Ð¸Ñ‚Ðµ Ð½Ð° Ð¾Ð´Ð½Ð¾Ð¼ Ð¸Ð· Ñ‡ÐµÑ‚Ñ‹Ñ€ÐµÑ… Ñ‡Ð°ÑÑ‚Ð½Ñ‹Ñ… Ð¿Ð°Ð»ÑƒÐ±Ð°Ñ… Ð¸Ð»Ð¸ Ð½Ð° Ð»ÑƒÐ¶Ð°Ð¹ÐºÐµ, ÐºÐ¾Ñ‚Ð¾Ñ€Ð°Ñ Ð¿Ñ€Ð¾ÑÑ‚Ð¸Ñ€Ð°ÐµÑ‚ÑÑ Ð¾Ñ‚ Ð¾Ð´Ð½Ð¾Ð³Ð¾ ÐºÐ¾Ð½Ñ†Ð° Ð¾Ñ‚ÐµÐ»Ñ Ð² Ð´Ñ€ÑƒÐ³Ð¾Ð¹, Ð¸Ð»Ð¸ Ð½Ð°ÑÐ»Ð°Ð´Ð¸Ñ‚ÑŒÑÑ Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ Ñ€Ð°Ð·Ð²Ð»ÐµÑ‡ÐµÐ½Ð¸Ñ Ð¸ Ñ€Ð°Ð·Ð½Ð¾Ð¾Ð±Ñ€Ð°Ð·Ð½Ñ‹Ðµ ÐºÐ¾ÐºÑ‚ÐµÐ¹Ð»Ð¸ Ð² Ð±Ð°Ñ€Ðµ. Coral Sands Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð²Ð°Ð¼ Ð»ÑƒÑ‡ÑˆÐµÐµ Ð¸Ð· Ð²ÑÐµÑ… Ð¼Ð¸Ñ€Ð¾Ð², Ñ ÑÑ€ÐºÐ¸Ð¼Ð¸, Ð½Ð¾ ÑÐ¿Ð¾ÐºÐ¾Ð¹Ð½Ñ‹Ð¹ Ð¾Ñ‚Ð´Ñ‹Ñ… Ð² Ñ€Ð°ÑŽ. ÐœÑ‹ ÑÐºÐ¾Ñ€Ð¾ ÑƒÐ²Ð¸Ð´Ð¸Ð¼ÑÑ.</p>', '<p>Coral Sands Hotelé…’åº—ä½äºŽHikkaduwaçš„åŽŸå§‹æµ·æ»©ï¼Œä¸ºæ‚¨æä¾›æ— ä¸Žä¼¦æ¯”çš„æµ·æ»©ï¼Œæµ®æ½œï¼Œæ°´è‚ºæ½œæ°´ä»¥åŠä¼—å¤šçƒ­å¸¦é±¼ç±»çš„å“ç§ã€‚ ä»Žé˜³å°ä¸Šè§‚çœ‹æ—¥è½ï¼Œå› ä¸ºå¤©å ‚çš„å£°éŸ³æ´»ç€ï¼Œå› ä¸ºæ½®æ±ç¢°æ’žæ²™å­çš„å£°éŸ³ã€‚ äº¤é€šä½“éªŒçŠç‘šç¤çš„å¥‡è¿¹ï¼Œä»¥åŠæ¯å¤©æ—©ä¸Šç»å¸¸åœ¨å²¸è¾¹çš„æµ·é¾Ÿã€‚ æ‚¨å¯ä»¥åœ¨å››ä¸ªç§äººç”²æ¿æˆ–è€…ä»Žé…’åº—ä¸€ç«¯å»¶ä¼¸åˆ°å¦ä¸€ç«¯çš„è‰åªä¸Šä¼‘æ¯ï¼Œæˆ–è€…åœ¨é…’å§äº«ç”¨ä¸»é¢˜å¨±ä¹å’Œå„ç§é¸¡å°¾é…’ã€‚ çŠç‘šæ²™ä¸ºæ‚¨æä¾›æ‰€æœ‰ä¸–ç•Œä¸Šæœ€å¥½çš„ï¼Œåœ¨å¤©å ‚çš„å……æ»¡æ´»åŠ›ï¼Œè½»æ¾çš„å‡æœŸã€‚ æˆ‘ä»¬ä¼šå¾ˆå¿«è§åˆ°ä½ ã€‚</p>');
INSERT INTO `introduction` VALUES (2, '', 'Welcome to Coral Sand Hotel Hikkaduwa', '<p>Located on the pristine beaches of Hikkaduwa, Coral Sands Hotel offers you an unmatched stretch of beach, with snorkeling, scuba diving, and a plethora of varieties of tropical fish at your fingertips. Watch the sunset from your balcony as the sound of the paradise comes alive as the sound of the tide crashes against the sand. Experience the wonder of the reef, along with the turtles that frequent the shore every morning. Relax on one of the four private decks or on the lawn that stretches from one end of the hotel to another, or enjoy the live music&nbsp; every evening while sipping cocktails at the bar. Coral Sands offers you the best of all worlds, with a vibrant, yet relaxing holiday in paradise. We''ll see you soon.</p>', '<p>An den unber&uuml;hrten Str&auml;nden von Hikkaduwa gelegen, bietet das Coral Sands Hotel einen unvergleichlichen Strandabschnitt mit Schnorcheln, Tauchen und einer Vielzahl an tropischen Fischarten an Ihren Fingerspitzen. Sehen Sie den Sonnenuntergang von Ihrem Balkon, wie das Ger&auml;usch des Paradieses lebendig wird, wie das Ger&auml;usch der Flut gegen den Sand abst&uuml;rzt. Transport Erleben Sie das Wunder des Riffs, zusammen mit den Schildkr&ouml;ten, die h&auml;ufig am Ufer jeden Morgen. Entspannen Sie auf einer der vier privaten Decks oder auf dem Rasen, die von einem Ende des Hotels zu einem anderen erstreckt, oder genie&szlig;en Sie die Themen-Unterhaltung und Vielfalt an Cocktails an der Bar. Coral Sands bietet Ihnen die besten aller Welten mit einem pulsierenden und doch erholsamen Urlaub im Paradies. Wir werden dich bald sehen.</p>', '<p>ï¿½ Ð°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð½Ñ‹Ð¹ Ð½Ð° Ð½ÐµÑ‚Ñ€Ð¾Ð½ÑƒÑ‚Ñ‹Ñ… Ð¿Ð»ÑÐ¶Ð°Ñ… Ð¥Ð¸ÐºÐºÐ°Ð´ÑƒÐ²Ñƒ, Coral Sands Hotel Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð’Ð°Ð¼ Ð½ÐµÐ¿Ñ€ÐµÐ²Ð·Ð¾Ð¹Ð´ÐµÐ½Ð½ÑƒÑŽ ÑƒÑ‡Ð°ÑÑ‚Ð¾Ðº Ð¿Ð»ÑÐ¶Ð°, Ñ Ð¿Ð¾Ð´Ð²Ð¾Ð´Ð½Ð¾Ðµ Ð¿Ð»Ð°Ð²Ð°Ð½Ð¸Ðµ, Ð¿Ð¾Ð´Ð²Ð¾Ð´Ð½Ð¾Ðµ Ð¿Ð»Ð°Ð²Ð°Ð½Ð¸Ðµ, Ð¸ Ð¼Ð½Ð¾Ð¶ÐµÑÑ‚Ð²Ð¾ Ñ€Ð°Ð·Ð½Ð¾Ð²Ð¸Ð´Ð½Ð¾ÑÑ‚ÐµÐ¹ Ñ‚Ñ€Ð¾Ð¿Ð¸Ñ‡ÐµÑÐºÐ¸Ñ… Ñ€Ñ‹Ð± Ñƒ Ð²Ð°Ñ Ð¿Ð¾Ð´ Ñ€ÑƒÐºÐ¾Ð¹. Ð¡Ð¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð½Ð° Ð·Ð°ÐºÐ°Ñ‚ Ñ Ð±Ð°Ð»ÐºÐ¾Ð½Ð°, ÐºÐ°Ðº Ð·Ð²ÑƒÐº Ñ€Ð°Ð¹ Ð¾Ð¶Ð¸Ð²Ð°ÐµÑ‚, ÐºÐ°Ðº Ð·Ð²ÑƒÐº Ð¿Ñ€Ð¸Ð»Ð¸Ð²Ð° Ð°Ð²Ð°Ñ€Ð¸Ð¹ Ð¿Ñ€Ð¾Ñ‚Ð¸Ð² Ð¿ÐµÑÐºÐ°. Ð¢Ñ€Ð°Ð½ÑÐ¿Ð¾Ñ€Ñ‚Ð¸Ñ€Ð¾Ð²ÐºÐ° ÐžÐ¿Ñ‹Ñ‚ Ñ‡ÑƒÐ´Ð¾ Ñ€Ð¸Ñ„Ð°, Ð½Ð°Ñ€ÑÐ´Ñƒ Ñ Ñ‡ÐµÑ€ÐµÐ¿Ð°Ñ…, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ñ‡Ð°ÑÑ‚Ð¾ Ð¿Ð¾ÑÐµÑ‰Ð°ÑŽÑ‚ Ð±ÐµÑ€ÐµÐ³Ð° ÐºÐ°Ð¶Ð´Ð¾Ðµ ÑƒÑ‚Ñ€Ð¾. ÐžÑ‚Ð´Ð¾Ñ…Ð½Ð¸Ñ‚Ðµ Ð½Ð° Ð¾Ð´Ð½Ð¾Ð¼ Ð¸Ð· Ñ‡ÐµÑ‚Ñ‹Ñ€ÐµÑ… Ñ‡Ð°ÑÑ‚Ð½Ñ‹Ñ… Ð¿Ð°Ð»ÑƒÐ±Ð°Ñ… Ð¸Ð»Ð¸ Ð½Ð° Ð»ÑƒÐ¶Ð°Ð¹ÐºÐµ, ÐºÐ¾Ñ‚Ð¾Ñ€Ð°Ñ Ð¿Ñ€Ð¾ÑÑ‚Ð¸Ñ€Ð°ÐµÑ‚ÑÑ Ð¾Ñ‚ Ð¾Ð´Ð½Ð¾Ð³Ð¾ ÐºÐ¾Ð½Ñ†Ð° Ð¾Ñ‚ÐµÐ»Ñ Ð² Ð´Ñ€ÑƒÐ³Ð¾Ð¹, Ð¸Ð»Ð¸ Ð½Ð°ÑÐ»Ð°Ð´Ð¸Ñ‚ÑŒÑÑ Ñ‚ÐµÐ¼Ð°Ñ‚Ð¸Ñ‡ÐµÑÐºÐ¸Ðµ Ñ€Ð°Ð·Ð²Ð»ÐµÑ‡ÐµÐ½Ð¸Ñ Ð¸ Ñ€Ð°Ð·Ð½Ð¾Ð¾Ð±Ñ€Ð°Ð·Ð½Ñ‹Ðµ ÐºÐ¾ÐºÑ‚ÐµÐ¹Ð»Ð¸ Ð² Ð±Ð°Ñ€Ðµ. Coral Sands Ð¿Ñ€ÐµÐ´Ð»Ð°Ð³Ð°ÐµÑ‚ Ð²Ð°Ð¼ Ð»ÑƒÑ‡ÑˆÐµÐµ Ð¸Ð· Ð²ÑÐµÑ… Ð¼Ð¸Ñ€Ð¾Ð², Ñ ÑÑ€ÐºÐ¸Ð¼Ð¸, Ð½Ð¾ ÑÐ¿Ð¾ÐºÐ¾Ð¹Ð½Ñ‹Ð¹ Ð¾Ñ‚Ð´Ñ‹Ñ… Ð² Ñ€Ð°ÑŽ. ÐœÑ‹ ÑÐºÐ¾Ñ€Ð¾ ÑƒÐ²Ð¸Ð´Ð¸Ð¼ÑÑ.</p>', '<p>Coral Sands Hotelé…’åº—ä½äºŽHikkaduwaçš„åŽŸå§‹æµ·æ»©ï¼Œä¸ºæ‚¨æä¾›ï¿½ ä¸Žä¼¦æ¯”çš„æµ·æ»©ï¼Œæµ®æ½œï¼Œæ°´è‚ºæ½œæ°´ä»¥åŠä¼—å¤šçƒ­å¸¦é±¼ç±»çš„å“ç§ã€‚ ä»Žé˜³å°ä¸Šè§‚çœ‹æ—¥è½ï¼Œï¿½ ä¸ºå¤©ï¿½ ï¿½çš„å£°éŸ³æ´»ç€ï¼Œï¿½ ä¸ºæ½®æ±ç¢°æ’žæ²™å­çš„å£°éŸ³ã€‚ äº¤é€šä½“éªŒçŠç‘šç¤çš„å¥‡è¿¹ï¼Œä»¥åŠæ¯å¤©æ—©ä¸Šç»å¸¸åœ¨å²¸è¾¹çš„æµ·é¾Ÿã€‚ æ‚¨å¯ä»¥åœ¨å››ä¸ªç§äººç”²æ¿æˆ–è€…ä»Žé…’åº—ä¸€ç«¯å»¶ä¼¸åˆ°å¦ä¸€ç«¯çš„è‰åªä¸Šä¼‘æ¯ï¼Œæˆ–è€…åœ¨é…’å§äº«ç”¨ä¸»é¢˜å¨±ä¹å’Œå„ç§é¸¡å°¾é…’ã€‚ çŠç‘šæ²™ä¸ºæ‚¨æä¾›æ‰€æœ‰ä¸–ç•Œä¸Šæœ€å¥½çš„ï¼Œåœ¨å¤©ï¿½ ï¿½çš„å……æ»¡æ´»åŠ›ï¼Œè½»æ¾çš„å‡æœŸã€‚ æˆ‘ä»¬ä¼šå¾ˆå¿«è§åˆ°ï¿½ ã€‚</p>');

-- --------------------------------------------------------

-- 
-- Table structure for table `invoice`
-- 

CREATE TABLE `invoice` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `due_date` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `payment_date` date DEFAULT NULL,
  `refund_amount` decimal(15,2) DEFAULT NULL,
  `refund_date` date DEFAULT NULL,
  `refund_reason` varchar(255) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `invoice`
-- 

INSERT INTO `invoice` VALUES (3, '2018-03-11', 'Ms. BrolÃƒÂ¸s, ', 'mette_broloes@post.tele.dk', '<p><strong><span style="text-decoration: underline;">1 deluxe triple room on bed &amp; breakfast basis for the period 28th - 30th March 2018</span>&nbsp;</strong></p>\n<p>&nbsp;</p>\n<table>\n<tbody>\n<tr>\n<td width="438">\n<p>&nbsp;Total for 2 days @ US$ 175 per day&nbsp;</p>\n</td>\n<td width="252">\n<p>US$ 350&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td width="438">\n<p>Advance requested&nbsp; &nbsp;</p>\n</td>\n<td width="252">\n<p style="text-align: right;">US$ 175&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td width="438">\n<p>Balance to be paid on arrival&nbsp;</p>\n</td>\n<td width="252">\n<p style="text-align: right;">US$ 175</p>\n</td>\n</tr>\n</tbody>\n</table>', 175.00, '2018-03-16', 1, '2018-03-11', NULL, NULL, NULL, '807101446890');
INSERT INTO `invoice` VALUES (4, '2018-03-13', 'Mundi Pharma', 'Alistair.Soley@mundipharma.co.za', '<p>Mr.Alistair Soley Arr.Date 18/06/2018<br />Head of Legal &amp;Compliance Dep.Date 21/06/2018<br />Mundi Phama DLX Room A/C<br /><br /></p>\n<table style="height: 138px;" width="615">\n<tbody>\n<tr>\n<td>&nbsp;07 SGL&nbsp;</td>\n<td>3</td>\n<td>68 $</td>\n<td>1,428</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>18 twin</td>\n<td>3</td>\n<td>90$</td>\n<td>4,860</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>20th &amp; 21st Lunch&nbsp; 43 pax @ US$ 43</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>1,720</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>20th Dinner Supplement&nbsp; 43 pax @ US35</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>1,505</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>Auditorium Charges for the 20th&nbsp; &nbsp;@ US$ 85</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp; &nbsp; &nbsp;85</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>Snacks for the 20th&nbsp; for 43 pax @ 12&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp; &nbsp;516</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n</tbody>\n</table>\n<p style="text-align: center;">TOTAL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;10,114</p>\n<p style="text-align: center;">&nbsp;</p>\n<p style="text-align: center;">25% Advance&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2,500&nbsp; &nbsp;<br /><br /><br /></p>', 2500.00, '2018-03-19', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (5, '2018-03-16', 'Mahesh Chathuranga', 'mahesh@sublime.lk', '<p>This is test invoice</p>', 100.00, '2018-03-29', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (6, '2018-03-16', 'Mahesh cahthuranga', 'mahesh@sublime.lk', '<p>test</p>', 100.00, '2018-03-20', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (7, '2018-03-16', 'Ms. Linda', 'londa3@wp.pl', '<p>&nbsp;</p>\n<table>\n<tbody>\n<tr>\n<td width="486">\n<p>Deluxe triple room on bed &amp; breakfast basis&nbsp;&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>US$ 100 per day less US$ 5 per day</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>&nbsp;Children under the age of 5 years sharing the parents'' room&nbsp;&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>No charge&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>period of stay&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>7th - 11th of August 2018&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>Total for 4 days&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>US$ 380</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>50% advance of the total&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>US$ 190</p>\n</td>\n</tr>\n</tbody>\n</table>', 190.00, '2018-03-23', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (8, '2018-03-17', 'Stacey Goodall', 'staceygood83@gmail.com', '<table>\n<tbody>\n<tr>\n<td width="570">\n<p>1 Deluxe single room Bed and Breakfast basis</p>\n</td>\n<td width="294">\n<p>Reduced rate of 110$ per day</p>\n</td>\n</tr>\n<tr>\n<td width="570">\n<p>Period of stay ( check in 26<sup>th</sup> March / check out 29<sup>th</sup> March 2018 )</p>\n</td>\n<td width="294">\n<p>3 nights</p>\n</td>\n</tr>\n<tr>\n<td width="570">\n<p>TOTAL for 3 nights&nbsp;</p>\n</td>\n<td width="294">\n<p>330$</p>\n</td>\n</tr>\n</tbody>\n</table>', 330.00, '2018-03-21', 1, '2018-03-19', NULL, NULL, NULL, '807821482402');
INSERT INTO `invoice` VALUES (9, '2018-03-20', 'Mrs. Linda', 'londa3@wp.pl', '<table>\n<tbody>\n<tr>\n<td width="486">\n<p>Deluxe triple room on bed &amp; breakfast basis&nbsp;&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>US$ 90 per day less US$ 10 per day</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>Children under the age of 5 years sharing the parents'' room&nbsp;&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>No charge&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>period of stay&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>7th - 11th of August 2018&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>Total for 4 days&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>US$ 320</p>\n</td>\n</tr>\n<tr>\n<td width="486">\n<p>50% advance of the total&nbsp;</p>\n</td>\n<td style="text-align: left;" width="450">\n<p>US$ 160</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', 160.00, '2018-03-27', 1, '2018-03-20', NULL, NULL, NULL, '808001145404');
INSERT INTO `invoice` VALUES (10, '2018-03-21', 'Mr. Brent Gray', 'brentgray@live.com', '<p>3 Deluxe Triple rooms for 4 adults + 5 children for the period 4th -11th of November 2018 ( check in 4th November / check out 11th November 2018 )</p>\n<p>&nbsp;</p>\n<table style="height: 80px;" width="521">\n<tbody>\n<tr>\n<td>3 Deluxe Triple rooms&nbsp;</td>\n<td>US$ 155 per day per room less US$ 10 per day</td>\n</tr>\n<tr>\n<td>period of stay&nbsp;</td>\n<td>4th - 11th November&nbsp; ( 10 nights )</td>\n</tr>\n<tr>\n<td>total for 7 nights&nbsp;</td>\n<td>US$ 3045&nbsp;</td>\n</tr>\n<tr>\n<td>advance requested</td>\n<td>US$&nbsp; 500</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>E &amp; OE</p>', 500.00, '2018-03-28', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (11, '2018-04-01', 'Mr.  Pratish Raj', 'pratish@rzimindia.in', '<p><strong>Room Reservation: 1 double room + 2 triple rooms for 6 adults + 5 children for the period 14th - 18th April 2018</strong></p>\n<table width="532">\n<tbody>\n<tr>\n<td>\n<p>1 deluxe double room on half board basis for 4 nights @ US$ 100 per day&nbsp;</p>\n</td>\n<td>\n<p>&nbsp;400</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>2 deluxe triple rooms on half board basis for 4 nights&nbsp; @ US$ 130 per day</p>\n</td>\n<td>\n<p>1040</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Transport from the airport&nbsp; &nbsp; US$ 140 per day&nbsp;</p>\n</td>\n<td>\n<p>&nbsp;140</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>TOTAL US$</p>\n</td>\n<td>\n<p>1580</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>50% advance payment requested US$</p>\n</td>\n<td>\n<p>&nbsp;790</p>\n</td>\n</tr>\n</tbody>\n</table>', 790.00, '2018-04-07', 1, '2018-04-01', NULL, NULL, NULL, '809123180322');
INSERT INTO `invoice` VALUES (12, '2018-04-05', 'Mr. Brent Gray', 'brentgray@live.com', '<table width="80%">\n<tbody>\n<tr>\n<td>\n<p>3 Deluxe Triple rooms for 4 adults + 5 children for the period 4th -11th of November 2018 ( check in 4th November / check out 11th November 2018 )</p>\n<p>&nbsp;</p>\n<table width="521">\n<tbody>\n<tr>\n<td>\n<p>3 Deluxe Triple rooms&nbsp;</p>\n</td>\n<td>\n<p>US$ 155 per day per room less US$ 10 per day</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>period of stay&nbsp;</p>\n</td>\n<td>\n<p>4th - 11th November&nbsp; ( 10 nights )</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>total for 7 nights&nbsp;</p>\n</td>\n<td>\n<p>US$ 3045&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>advance requested</p>\n</td>\n<td>\n<p>US$&nbsp; 500</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>E &amp; OE</p>\n</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n</tr>\n</tbody>\n</table>', 500.00, '2018-04-12', 1, '2018-04-05', NULL, NULL, NULL, '809513184912');
INSERT INTO `invoice` VALUES (13, '2018-04-11', 'Mr. Kent Kjaergaard', 'kkp@atp-pep.com', '<table style="height: 69px;" width="546">\n<tbody>\n<tr>\n<td>2 Deluxe Triple rooms on half board basis&nbsp;</td>\n<td>US$ 190 per day per room less US$ 10 per day per room</td>\n</tr>\n<tr>\n<td>period of stay</td>\n<td>15th -19th February 2019 ( 4 nights )</td>\n</tr>\n<tr>\n<td>total for 4 nights</td>\n<td>US$360 x 4&nbsp; =&nbsp; US$ 1440</td>\n</tr>\n<tr>\n<td>Advance amount requested</td>\n<td>US$720</td>\n</tr>\n</tbody>\n</table>', 720.00, '2018-04-18', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (14, '2018-04-16', 'Mr. Kent Kjaergaard', 'kkp@atp-pep.com', '<table width="546">\n<tbody>\n<tr>\n<td>\n<p>2 Deluxe Triple rooms on half board basis&nbsp;</p>\n</td>\n<td>\n<p>US$ 190 per day per room less US$ 10 per day per room</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Period of stay</p>\n</td>\n<td>\n<p>15th -21st February 2019 ( 6 nights )</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Total for 4 nights</p>\n</td>\n<td>\n<p>US$360 x 6&nbsp; =&nbsp; US$ 2160</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Advance amount requested</p>\n</td>\n<td>\n<p>US$ 1080</p>\n</td>\n</tr>\n</tbody>\n</table>', 1080.00, '2018-04-23', 1, '2018-04-17', NULL, NULL, NULL, '810718537336');
INSERT INTO `invoice` VALUES (15, '2018-04-16', 'Mr. Kent Kjaergaard', 'kkp@atp-pep.com', '<table width="546">\n<tbody>\n<tr>\n<td>\n<p>2 Deluxe Triple rooms on half board basis&nbsp;</p>\n</td>\n<td>\n<p>US$ 190 per day per room less US$ 10 per day per room</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Period of stay</p>\n</td>\n<td>\n<p>15th -21st February 2019 ( 6 nights )</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Total for 4 nights</p>\n</td>\n<td>\n<p>US$360 x 6&nbsp; =&nbsp; US$ 2160</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Advance amount requested</p>\n</td>\n<td>\n<p>US$ 1080</p>\n</td>\n</tr>\n</tbody>\n</table>', 1080.00, '2018-04-23', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (16, '2018-04-16', 'Mr. Kent Kjaergaard', 'kkp@atp-pep.com', '<table width="546">\n<tbody>\n<tr>\n<td>\n<p>2 Deluxe Triple rooms on half board basis&nbsp;</p>\n</td>\n<td>\n<p>US$ 190 per day per room less US$ 10 per day per room</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Period of stay</p>\n</td>\n<td>\n<p>15th -21st February 2019 ( 6 nights )</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Total for 4 nights</p>\n</td>\n<td>\n<p>US$360 x 6&nbsp; =&nbsp; US$ 2160</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Advance amount requested</p>\n</td>\n<td>\n<p>US$ 1080</p>\n</td>\n</tr>\n</tbody>\n</table>', 1080.00, '2018-04-23', 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `invoice` VALUES (17, '2018-04-16', 'Mr. Kent Kjaergaard', 'kkp@atp-pep.com', '<table width="546">\n<tbody>\n<tr>\n<td>\n<p>2 Deluxe Triple rooms on half board basis&nbsp;</p>\n</td>\n<td>\n<p>US$ 190 per day per room less US$ 10 per day per room</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Period of stay</p>\n</td>\n<td>\n<p>15th -21st February 2019 ( 6 nights )</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Total for 4 nights</p>\n</td>\n<td>\n<p>US$360 x 6&nbsp; =&nbsp; US$ 2160</p>\n</td>\n</tr>\n<tr>\n<td>\n<p>Advance amount requested</p>\n</td>\n<td>\n<p>US$ 1080</p>\n</td>\n</tr>\n</tbody>\n</table>', 1080.00, '2018-04-23', 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `main-section`
-- 

CREATE TABLE `main-section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `main-section`
-- 

INSERT INTO `main-section` VALUES (4, 'a1.jpg', 'Accommodation', 'Accommodation', 'Accommodation', 'Accommodation', 'accommodation.php', '<p>Of a total inventory of 82 rooms 73 are deluxe, 6 of which are super deluxe rooms with or without Jacuzzis.&nbsp;&nbsp; Included within the 73 deluxe rooms are 12 &lsquo; Deluxe Plus &lsquo; with extended balconies...</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', 2);
INSERT INTO `main-section` VALUES (5, 'activities.jpg', 'Excursions', 'Excursions', 'Excursions', 'Excursions', 'things_to_do.php', '<p style="text-align: justify;">One of the country&rsquo;s best surfing beaches is just 1km away from the hotel. Rent a surfboard from a surf shop in the area, and ride the waves of hikkaduwa, with the stunning landscape of the setting sun...</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', 3);
INSERT INTO `main-section` VALUES (6, 'Facilities.jpg', 'Facilities ', 'Facilities ', 'Facilities ', 'Facilities ', 'facility.php', '<p style="text-align: justify;">Our restaurant, which overlooks the ocean, offers a variety of cuisines, including asian, mediterranean, sri lankan specialties and much more. Lobster and other seafood dinners can be ordered...</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>', 4);

-- --------------------------------------------------------

-- 
-- Table structure for table `main-slider`
-- 

CREATE TABLE `main-slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `main-slider`
-- 

INSERT INTO `main-slider` VALUES (5, 'slider2.jpg', 'Slider1', 5);
INSERT INTO `main-slider` VALUES (6, 'slider3.jpg', 'Slider2', 4);
INSERT INTO `main-slider` VALUES (8, '6.jpg', 'Room', 2);
INSERT INTO `main-slider` VALUES (9, '038Print_Pool__the_Sea.jpg', 'Pool and the Sea', 3);
INSERT INTO `main-slider` VALUES (10, '1.jpg', 'Cap 01', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `offers`
-- 

CREATE TABLE `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `offers`
-- 

INSERT INTO `offers` VALUES (1, 'office-820390_640-580x380.jpg', 'Save US$ 10 per Night', '<h3>Discount of US$ 10 per night for all direct bookings through our website.&nbsp;&nbsp; </h3>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p style="text-align: center;"><a class="btn btn-default btn-nv btn-next" title="Book Now" href="/booking.php">Book Now</a></p>\r\n<p style="text-align: center;">&nbsp;</p>', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `room`
-- 

CREATE TABLE `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `room_num` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `room`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `room-basises`
-- 

CREATE TABLE `room-basises` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `room-basises`
-- 

INSERT INTO `room-basises` VALUES (1, 'Bed & Breakfast');
INSERT INTO `room-basises` VALUES (2, 'Half Board');

-- --------------------------------------------------------

-- 
-- Table structure for table `room-features`
-- 

CREATE TABLE `room-features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room-type` int(11) NOT NULL,
  `features` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `features_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `features_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `features_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `room-features`
-- 

INSERT INTO `room-features` VALUES (1, 'eye.jpg', 1, 'Balcony or terrace', '', '', '', 1);
INSERT INTO `room-features` VALUES (3, 'electronic.jpg', 1, 'Flat-screen TV', '', '', '', 3);
INSERT INTO `room-features` VALUES (4, 'shower.jpg', 1, 'Private bathroom', '', '', '', 4);
INSERT INTO `room-features` VALUES (5, 'garage.jpg', 1, 'Free private parking', '', '', '', 5);
INSERT INTO `room-features` VALUES (7, 'closet.jpg', 1, '  Wardrobe/Closet', '', '', '', 7);
INSERT INTO `room-features` VALUES (8, 'hairdryer.jpg', 1, 'Hairdryer', '', '', '', 8);
INSERT INTO `room-features` VALUES (9, 'minibar.jpg', 1, 'Mini Fridge', '', '', '', 9);
INSERT INTO `room-features` VALUES (10, 'kettle.jpg', 1, ' Tea / Coffee making facilities', '', '', '', 10);
INSERT INTO `room-features` VALUES (13, 'terrace_1.jpg', 2, 'Terrace', '', '', '', 1);
INSERT INTO `room-features` VALUES (14, 'electronic_1.jpg', 2, 'Flat-screen TV', '', '', '', 2);
INSERT INTO `room-features` VALUES (15, 'air-conditioner.jpg', 2, 'Air conditioning', '', '', '', 3);
INSERT INTO `room-features` VALUES (16, 'shower_1.jpg', 2, 'Private bathroom', '', '', '', 4);
INSERT INTO `room-features` VALUES (17, 'closet_1.jpg', 2, 'Wardrobe/Closet', '', '', '', 5);
INSERT INTO `room-features` VALUES (18, 'garage_1.jpg', 2, 'Free private parking', '', '', '', 6);
INSERT INTO `room-features` VALUES (21, 'eye.jpg.jpg', 2, 'Partial sea view', '', '', '', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `room-photo`
-- 

CREATE TABLE `room-photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `room-photo`
-- 

INSERT INTO `room-photo` VALUES (1, '1', '5390077243_2837733098_13306338667297205920.jpg', '1', 3);
INSERT INTO `room-photo` VALUES (2, '1', '5372489359_1352387822_10942813927464702747.jpg', '2', 4);
INSERT INTO `room-photo` VALUES (3, '2', '4454169668_6230030344_95111058058494810877.jpg', '1', 0);
INSERT INTO `room-photo` VALUES (4, '2', '6047980986_7059572692_99675516278973661660.jpg', '2', 0);
INSERT INTO `room-photo` VALUES (5, '2', '6063075061_0129916204_73413222552258566173.jpg', '3', 0);
INSERT INTO `room-photo` VALUES (6, '2', '5288626730_5306135723_80770501161680453136.jpg', '4', 0);
INSERT INTO `room-photo` VALUES (7, '2', '4877215897_0564640661_15571515921309031621.jpg', '5', 0);
INSERT INTO `room-photo` VALUES (8, '2', '0082652868_2347483151_95264205039038393680.jpg', '6', 0);
INSERT INTO `room-photo` VALUES (9, '2', '1351750285_7739406058_59146111508734910939.jpg', '8', 0);
INSERT INTO `room-photo` VALUES (10, '1', '0302954028_5326397534_93274040970901106609.jpg', '3', 5);
INSERT INTO `room-photo` VALUES (11, '1', '2875564417_0278739079_43972239644822479811.jpg', '4', 6);
INSERT INTO `room-photo` VALUES (12, '1', '4793194262_1171215899_02213574275644964491.jpg', '5', 7);
INSERT INTO `room-photo` VALUES (13, '1', '6369316166_0927087282_45397556463090931657.jpg', '6', 2);
INSERT INTO `room-photo` VALUES (14, '1', '1206522626_0344306342_57591480686806469621.jpg', '7', 1);
INSERT INTO `room-photo` VALUES (15, '1', '4368854027_0825524896_27975968699035920432.jpg', '8', 8);
INSERT INTO `room-photo` VALUES (16, '1', '6098646604_5911962750_14974881511220195765.jpg', '9', 9);

-- --------------------------------------------------------

-- 
-- Table structure for table `room-prices`
-- 

CREATE TABLE `room-prices` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `type_id` int(4) NOT NULL,
  `basis_id` int(4) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

-- 
-- Dumping data for table `room-prices`
-- 

INSERT INTO `room-prices` VALUES (1, 3, 2, 110.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (2, 3, 1, 100.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (4, 4, 1, 120.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (5, 4, 2, 140.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (13, 3, 1, 100.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (10, 5, 2, 175.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (11, 5, 1, 155.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (14, 3, 2, 105.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (23, 5, 2, 155.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (22, 4, 1, 115.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (19, 5, 1, 140.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (20, 4, 2, 125.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (26, 3, 2, 73.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (27, 4, 1, 75.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (31, 4, 2, 91.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (29, 3, 1, 65.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (33, 5, 1, 95.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (34, 5, 2, 119.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (36, 6, 1, 75.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (37, 6, 1, 80.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (38, 6, 1, 45.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (39, 6, 2, 85.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (40, 6, 2, 85.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (41, 6, 2, 53.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (45, 7, 1, 100.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (46, 7, 1, 95.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (47, 7, 1, 55.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (48, 7, 2, 115.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (49, 7, 2, 105.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (50, 7, 2, 71.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (54, 8, 1, 140.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (55, 8, 1, 120.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (56, 8, 1, 75.00, '2018-05-01', '2018-10-31');
INSERT INTO `room-prices` VALUES (57, 8, 2, 150.00, '2018-01-11', '2018-03-31');
INSERT INTO `room-prices` VALUES (58, 8, 2, 135.00, '2018-04-01', '2018-04-30');
INSERT INTO `room-prices` VALUES (59, 8, 2, 99.00, '2018-05-01', '2018-10-31');

-- --------------------------------------------------------

-- 
-- Table structure for table `room-type`
-- 

CREATE TABLE `room-type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_type_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `room_type_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `room_type_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `main_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription_g` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription_r` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription_c` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_g` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_r` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  `num_of_room` int(250) NOT NULL,
  `num_of_adults` int(11) DEFAULT NULL,
  `num_of_children` int(11) DEFAULT NULL,
  `max_people` int(11) NOT NULL,
  `num_of_extra_bed` int(11) DEFAULT NULL,
  `extra_bed_price` decimal(15,2) DEFAULT NULL,
  `children_supplement` decimal(15,2) DEFAULT NULL,
  `is_Child` int(11) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `room-type`
-- 

INSERT INTO `room-type` VALUES (1, 'Deluxe Rooms', '', '', '', '3349787982_0726647820_06784615923357235024.jpg', 'Located on the ground floor as well as on the upper floor, the spacious Air Conditioned Deluxe Rooms come with added amenities and wonderful views of the Indian ocean.', '', '', '', '<p>Located on the ground floor as well as on the upper floor, the spacious Air conditioned deluxe rooms come with added amenities and wonderful views of the Indian ocean.</p>\r\n<p><strong>Room facilities:&nbsp;</strong>&nbsp;Mini Fridge, Satellite TV, Safety Locker, Tea Coffee Making Facilities and Toiletries&nbsp;and Hairdryer.</p>', '', '', '', 5, 0, 0, 0, 0, 0.00, 0.00, 0, 1);
INSERT INTO `room-type` VALUES (2, 'Standard Rooms', '', '', '', '8524252239_7015440925_73776508395157572896.jpg', 'Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities. Partial sea view.', '', '', '', '<p>Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities. Partial sea view</p>\r\n<div class="js_hp_rt_lightbox_facilities">\r\n<p class="hp_rt_lightbox_facilities" data-nr-of-facilities="6"><strong>Room facilities:&nbsp;</strong>Satellite TV, Safety Locker, Toiletries</p>\r\n</div>', '', '', '', 2, 0, 0, 0, 0, 0.00, 0.00, 0, 2);
INSERT INTO `room-type` VALUES (3, 'Deluxe Single', '', '', '', '1794899278_8361366077_48448166546716106023.jpg', 'Located on the ground floor as well as on the upper floor, the spacious Air conditioned deluxe rooms come with added amenities and wonderful views of the Indian ocean.', '', '', '', '<p>Located on the ground floor as well as on the upper floor, the spacious Air conditioned deluxe rooms come with added amenities and wonderful views of the Indian ocean.</p>\r\n<p><strong>Room facilities:&nbsp;</strong>&nbsp;Mini Fridge, Satellite TV, Safety Locker, Tea Coffee Making Facilities and Toiletries&nbsp;and Hairdryer.</p>', '', '', '', 0, 1, 2, 3, 0, 0.00, 25.00, 1, 1);
INSERT INTO `room-type` VALUES (4, 'Deluxe Double', '', '', '', '7288653523_9303019973_83953044763591457809.jpg', 'Located on the ground floor as well as on the upper floor, the spacious Air conditioned deluxe rooms come with added amenities and wonderful views of the Indian ocean.', '', '', '', '<p>Located on the ground floor as well as on the upper floor, the spacious Air conditioned deluxe rooms come with added amenities and wonderful views of the Indian ocean.</p>\r\n<p><strong>Room facilities:&nbsp;</strong>&nbsp;Mini Fridge, Satellite TV, Safety Locker, Tea Coffee Making Facilities and Toiletries&nbsp;and Hairdryer.</p>\r\n<p>&nbsp;</p>', '', '', '', 0, 2, 2, 3, 0, 0.00, 25.00, 1, 2);
INSERT INTO `room-type` VALUES (5, 'Deluxe Triple', '', '', '', '4425557744_7433221927_06442324580023688353.jpg', 'Located on the ground floor as well as on the upper floor, the spacious Air conditioned deluxe rooms come with added amenities and wonderful views of the Indian ocean.', '', '', '', '<p>Located on the ground floor as well as on the upper floor, the spacious Air conditioned deluxe rooms come with added amenities and wonderful views of the Indian ocean.</p>\r\n<p><strong>Room facilities:&nbsp;</strong>&nbsp;Mini Fridge, Satellite TV, Safety Locker, Tea Coffee Making Facilities and Toiletries&nbsp;and Hairdryer.</p>', '', '', '', 0, 3, 1, 3, 0, 0.00, 25.00, 1, 3);
INSERT INTO `room-type` VALUES (6, 'Standard Single', '', '', '', '7193290625_3655730294_56930008586306725788.jpg', 'Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities.', '', '', '', '<p>Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities. Partial sea view</p>\r\n<div class="js_hp_rt_lightbox_facilities">\r\n<p class="hp_rt_lightbox_facilities" data-nr-of-facilities="6"><strong>Room facilities:&nbsp;</strong>Satellite TV, Safety Locker, Toiletries</p>\r\n</div>', '', '', '', 0, 1, 2, 3, 0, 0.00, 25.00, 2, 4);
INSERT INTO `room-type` VALUES (7, 'Standard  Double', '', '', '', '7369532834_6788188133_80548750455282145428.jpg', 'Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities.', '', '', '', '<p>Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities. Partial sea view</p>\r\n<div class="js_hp_rt_lightbox_facilities">\r\n<p class="hp_rt_lightbox_facilities" data-nr-of-facilities="6"><strong>Room facilities:&nbsp;</strong>Satellite TV, Safety Locker, Toiletries</p>\r\n</div>', '', '', '', 0, 2, 2, 3, 0, 0.00, 25.00, 2, 5);
INSERT INTO `room-type` VALUES (8, 'Standard Triple', '', '', '', '5545356795_4917420595_43064529251806342911.jpg', 'Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities.', '', '', '', '<p>Air Conditioned Ground floor rooms with an attached terrace and a private bathroom and hot shower facilities. Partial sea view</p>\r\n<div class="js_hp_rt_lightbox_facilities">\r\n<p class="hp_rt_lightbox_facilities" data-nr-of-facilities="6"><strong>Room facilities:&nbsp;</strong>Satellite TV, Safety Locker, Toiletries</p>\r\n</div>', '', '', '', 0, 3, 1, 3, 0, 0.00, 25.00, 2, 6);

-- --------------------------------------------------------

-- 
-- Table structure for table `settings`
-- 

CREATE TABLE `settings` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `percentage` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `settings`
-- 

INSERT INTO `settings` VALUES (1, 50);

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset` int(4) NOT NULL DEFAULT '0',
  `auth` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (2, 'Coral Sands Hotel LTD', 'coralsands', '$2y$10$SxeTlgytayhS3u.sYp6.5.FFsot6mPvVtf3VTU/O.G12t9q5huuSq', 'coralsands@stmail.lk', 0, 'LTwgFUxNEHmyg8Dc7AjVSRoVTRZ', 1);
