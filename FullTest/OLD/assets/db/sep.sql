-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema todays
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `todays` ;

-- -----------------------------------------------------
-- Schema todays
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `todays` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `todays` ;

-- -----------------------------------------------------
-- Table `todays`.`Admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `todays`.`Admin` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `todays`.`Admin` (
  `idAdmin` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAdmin`),
  UNIQUE INDEX `idAdmin_UNIQUE` (`idAdmin` ASC),
  UNIQUE INDEX `mail_UNIQUE` (`mail` ASC))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `todays`.`Member`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `todays`.`Member` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `todays`.`Member` (
  `idMember` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `picture` VARCHAR(200) NULL,
  `role` VARCHAR(45) NULL,
  `Admin_idAdmin` INT NOT NULL,
  PRIMARY KEY (`idMember`, `Admin_idAdmin`),
  UNIQUE INDEX `idMembers_UNIQUE` (`idMember` ASC),
  UNIQUE INDEX `phone_UNIQUE` (`phone` ASC),
  UNIQUE INDEX `mail_UNIQUE` (`mail` ASC),
  INDEX `fk_Members_Admin1_idx` (`Admin_idAdmin` ASC),
  CONSTRAINT `fk_Members_Admin1`
    FOREIGN KEY (`Admin_idAdmin`)
    REFERENCES `todays`.`Admin` (`idAdmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `todays`.`Location`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `todays`.`Location` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `todays`.`Location` (
  `idLocation` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idLocation`),
  UNIQUE INDEX `idLocation_UNIQUE` (`idLocation` ASC))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `todays`.`LocalMarket`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `todays`.`LocalMarket` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `todays`.`LocalMarket` (
  `idLocalMarket` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `picture` VARCHAR(200) NOT NULL,
  `description` VARCHAR(45) NOT NULL,
  `Location_idLocation` INT NOT NULL,
  `Admin_idAdmin` INT NOT NULL,
  PRIMARY KEY (`idLocalMarket`, `Location_idLocation`, `Admin_idAdmin`),
  UNIQUE INDEX `idLocalMarket_UNIQUE` (`idLocalMarket` ASC),
  INDEX `fk_LocalMarket_Location1_idx` (`Location_idLocation` ASC),
  INDEX `fk_LocalMarket_Admin1_idx` (`Admin_idAdmin` ASC),
  CONSTRAINT `fk_LocalMarket_Location1`
    FOREIGN KEY (`Location_idLocation`)
    REFERENCES `todays`.`Location` (`idLocation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LocalMarket_Admin1`
    FOREIGN KEY (`Admin_idAdmin`)
    REFERENCES `todays`.`Admin` (`idAdmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `todays`.`Item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `todays`.`Item` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `todays`.`Item` (
  `idItem` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `protein` VARCHAR(45) NOT NULL,
  `vitamin` VARCHAR(45) NOT NULL,
  `fat` VARCHAR(45) NOT NULL,
  `carbonhydrate` VARCHAR(45) NOT NULL,
  `mineral` VARCHAR(45) NOT NULL,
  `LocalMarket_idLocalMarket` INT NOT NULL,
  `time` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idItem`),
  UNIQUE INDEX `idItems_UNIQUE` (`idItem` ASC),
  INDEX `fk_Items_LocalMarket1_idx` (`LocalMarket_idLocalMarket` ASC),
  CONSTRAINT `fk_Items_LocalMarket1`
    FOREIGN KEY (`LocalMarket_idLocalMarket`)
    REFERENCES `todays`.`LocalMarket` (`idLocalMarket`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `todays`.`Blog`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `todays`.`Blog` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `todays`.`Blog` (
  `idBlog` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(300) NOT NULL,
  `text` VARCHAR(3000) NOT NULL,
  `date` DATETIME NULL,
  `Member_idMember` INT NOT NULL,
  PRIMARY KEY (`idBlog`, `Member_idMember`),
  UNIQUE INDEX `idBlog_UNIQUE` (`idBlog` ASC),
  INDEX `fk_Blog_Member1_idx` (`Member_idMember` ASC),
  CONSTRAINT `fk_Blog_Member1`
    FOREIGN KEY (`Member_idMember`)
    REFERENCES `todays`.`Member` (`idMember`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `todays`.`Comment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `todays`.`Comment` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `todays`.`Comment` (
  `idComment` INT NOT NULL,
  `commentor` VARCHAR(90) NOT NULL,
  `comment` VARCHAR(500) NOT NULL,
  `Blog_idBlog` INT NOT NULL,
  PRIMARY KEY (`idComment`, `Blog_idBlog`),
  UNIQUE INDEX `idComment_UNIQUE` (`idComment` ASC),
  INDEX `fk_Comment_Blog1_idx` (`Blog_idBlog` ASC),
  CONSTRAINT `fk_Comment_Blog1`
    FOREIGN KEY (`Blog_idBlog`)
    REFERENCES `todays`.`Blog` (`idBlog`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
