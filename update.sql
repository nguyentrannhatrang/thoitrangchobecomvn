CREATE TABLE `colors` (
  `code` varchar(5) NOT NULL,
  `name` varchar(100) NOT NULL,
   PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `sizes` (
  `code` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
   PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `product_detail` (
  `product` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`product`,`color`,`size`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;