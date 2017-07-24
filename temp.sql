CREATE TABLE IF NOT EXISTS `smarttemp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `hum` varchar(50) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
