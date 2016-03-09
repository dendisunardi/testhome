CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;


INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `price`) 
VALUES (1, 'PD1001', 'Android Phone FX1', 'Di sertakan secara rambang yang lansung tidak munasabah. Jika anda ingin menggunakan Lorem Ipsum, anda perlu memastikan bahwa tiada apa yang', 200.50),
(2, 'PD1002', 'Television DXT', 'Ia menggunakan kamus yang mengandungi lebih 200 ayat Latin, bersama model dan struktur ayat Latin, untuk menghasilkan Lorem Ipsum yang munasabah.', 500.85),
(3, 'PD1003', 'External Hard Disk', 'Ada banyak versi dari mukasurat-mukasurat Lorem Ipsum yang sedia ada, tetapi kebanyakkannya telah diubahsuai, lawak jenaka diselitkan, atau ayat ayat yang', 100.00);

