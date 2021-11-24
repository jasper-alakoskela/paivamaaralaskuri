-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema countdowndb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema countdowndb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `countdowndb` DEFAULT CHARACTER SET utf8 ;
USE `countdowndb` ;

-- -----------------------------------------------------
-- Table `countdowndb`.`countdown`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `countdowndb`.`countdown` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `datetime` DATETIME NOT NULL,
  `backgroundcolor` VARCHAR(45) NOT NULL,
  `namecolor` VARCHAR(45) NOT NULL,
  `panelcolor` VARCHAR(45) NOT NULL,
  `digitscolor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
