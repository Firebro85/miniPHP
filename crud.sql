CREATE TABLE `users`(
    `id` INT(11) NOT NULL,
    `firstName` VARCHAR(150) NOT NULL,
    `lastName` VARCHAR(150) NOT NULL,
    `email` VARCHAR(120) NOT NULL,
    `address` VARCHAR(150) NOT NULL,
    `phone` INT(11) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

ALTER TABLE `users`
ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;
commit;