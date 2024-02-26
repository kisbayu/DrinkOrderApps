CREATE TABLE `asc_drink_order_app`.`orders` ( 
  `order_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `name` VARCHAR(255) NOT NULL, 
  `room` INT NOT NULL,

  `menu_mineral_water_qty` INT DEFAULT 0,
  `menu_cold_sweet_tea_qty` INT DEFAULT 0,
  `menu_hot_sweet_tea_qty` INT DEFAULT 0,
  `menu_cold_black_coffee_qty` INT DEFAULT 0,
  `menu_hot_black_coffee_qty` INT DEFAULT 0,
  `menu_cold_cream_coffee_qty` INT DEFAULT 0,
  `menu_hot_cream_coffee_qty` INT DEFAULT 0,
  `menu_cold_ocha_qty` INT DEFAULT 0,
  `menu_hot_ocha_qty` INT DEFAULT 0,
  
  `menu_mineral_water_notes` VARCHAR(500),
  `menu_cold_sweet_tea_notes` VARCHAR(500),
  `menu_hot_sweet_tea_notes` VARCHAR(500),
  `menu_cold_black_coffee_notes` VARCHAR(500),
  `menu_hot_black_coffee_notes` VARCHAR(500),
  `menu_cold_cream_coffee_notes` VARCHAR(500),
  `menu_hot_cream_coffee_notes` VARCHAR(500),
  `menu_cold_ocha_notes` VARCHAR(500),
  `menu_hot_ocha_notes` VARCHAR(500),

  `is_finished` BOOLEAN NOT NULL DEFAULT False ,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB;