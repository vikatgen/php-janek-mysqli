<?php

$create_names_tabel = '
    CREATE TABLE `names`(
        `id` SERIAL,
        `first_name` VARCHAR(255) NOT NULL,
        `last_name` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `code` INT(11) NOT NULL,
        `added` DATETIME NOT NULL,
        `edited` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE = InnoDB;
';