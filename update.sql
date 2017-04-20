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

ALTER TABLE products ADD show_home TINYINT(1);
ALTER TABLE shop_categories ADD url_name VARCHAR(100);
ALTER  TABLE shop_categories ADD UNIQUE (url_name);