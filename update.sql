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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE products ADD show_home TINYINT(1);
ALTER TABLE shop_categories ADD url_name VARCHAR(100);
ALTER  TABLE shop_categories ADD UNIQUE (url_name);

CREATE TABLE `traveller`(
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin,
  `email` varchar(100),
  `phone` varchar(20),
  `address` varchar(255),
  `created` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `traveller_email_index` (`email`),
  INDEX `traveller_phone_index` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


  CREATE TABLE `booking`(
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `user_id` int(11) NOT NULL,
  `payment` float DEFAULT 0,
  `quantity` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `total` float NOT NULL,
  `message` TEXT CHARACTER SET utf8 COLLATE utf8_bin NULL,
  `updated` int(10) NOT NULL,
  `created` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `booking_user_id_index` (`user_id`),
  INDEX `booking_status_index` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `booking_detail`(
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `bkId` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` float NOT NULL,
  `discount` float DEFAULT 0,
  `total_discount` float DEFAULT 0,
  `total` float NOT NULL,
  `status` int(1) NOT NULL,
  `updated` int(10) NOT NULL,
  `created` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `booking_detail_bkId_index` (`bkId`),
  INDEX `booking_detail_status_index` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `comments`(
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` TEXT CHARACTER SET utf8 COLLATE utf8_bin NULL,
  `product` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `updated` int(10) NOT NULL,
  `created` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `comments_email` (`email`),
  INDEX `comments_product` (`product`),
  INDEX `comments_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE booking ADD refNo varchar(17);
ALTER TABLE booking ADD product_name varchar(255);
CREATE INDEX booking_refNo_index ON booking (refNo);
CREATE INDEX booking_user_id_index ON booking (user_id);
CREATE INDEX booking_status_index ON booking (status);

ALTER TABLE products ADD name varchar(255);
ALTER TABLE products ADD description longtext;
ALTER TABLE products ADD basic_description text;
ALTER TABLE products ADD price FLOAT ;
ALTER TABLE products ADD old_price FLOAT ;
CREATE INDEX products_name_index ON products (name);