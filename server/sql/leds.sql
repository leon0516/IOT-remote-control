SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS  `leds`;
CREATE TABLE `leds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

insert into `leds`(`id`,`description`,`status`) values
('1','1','on'),
('2','2','off');
SET FOREIGN_KEY_CHECKS = 1;

