-- MySQL Script generated by MySQL Workbench
-- Tue Jan 19 12:10:32 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema MVC
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `MVC` ;

-- -----------------------------------------------------
-- Schema MVC
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `MVC` DEFAULT CHARACTER SET utf8 ;
USE `MVC` ;

-- -----------------------------------------------------
-- Table `MVC`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MVC`.`users` ;

CREATE TABLE IF NOT EXISTS `MVC`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR(50) NOT NULL,
  `userName` VARCHAR(50) NOT NULL,
  `inputEmail` VARCHAR(50) NOT NULL,
  `inputPassword` VARCHAR(50) NOT NULL,
  `inputPhoneNumber` VARCHAR(50) NULL,
  `checkNewsLetter` VARCHAR(50) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `uniqueUser` (`userName` ASC) INVISIBLE,
  UNIQUE INDEX `uniqueEmail` (`inputEmail` ASC) VISIBLE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;