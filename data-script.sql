CREATE TABLE `Person` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL ,
    `name` VARCHAR(100) NOT NULL ,
    `age` INT(3) NOT NULL ,
    `country` VARCHAR(100) NOT NULL ,
    UNIQUE `id_index` (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Person` (`name`, `age`, `country`) VALUES
    ('Vika', 28, 'France'),
    ('Tom', 30, 'France'),
    ('Lumba', 6, 'France');