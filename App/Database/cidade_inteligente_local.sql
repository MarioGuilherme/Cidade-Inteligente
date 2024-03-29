-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema cidade_inteligente
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cidade_inteligente
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cidade_inteligente` DEFAULT CHARACTER SET utf8 ;
USE `cidade_inteligente` ;

-- -----------------------------------------------------
-- Table `cidade_inteligente`.`areas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade_inteligente`.`areas` (
  `id_area` INT NOT NULL AUTO_INCREMENT,
  `area` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_area`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade_inteligente`.`courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade_inteligente`.`courses` (
  `id_course` INT NOT NULL AUTO_INCREMENT,
  `course` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_course`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade_inteligente`.`projects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade_inteligente`.`projects` (
  `id_project` INT NOT NULL AUTO_INCREMENT,
  `id_area` INT NOT NULL,
  `id_course` INT NOT NULL,
  `title` VARCHAR(120) NOT NULL,
  `description` VARCHAR(800) NOT NULL,
  `registeredDate` DATE NOT NULL DEFAULT NOW(),
  `startDate` DATE NOT NULL,
  `endDate` DATE NOT NULL,
  PRIMARY KEY (`id_project`),
  INDEX `fk_projects_areas1_idx` (`id_area` ASC),
  INDEX `fk_projects_courses1_idx` (`id_course` ASC),
  CONSTRAINT `fk_projects_areas1`
    FOREIGN KEY (`id_area`)
    REFERENCES `cidade_inteligente`.`areas` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projects_courses1`
    FOREIGN KEY (`id_course`)
    REFERENCES `cidade_inteligente`.`courses` (`id_course`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade_inteligente`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade_inteligente`.`users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `id_course` INT NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `isAdmin` TINYINT(1) NOT NULL,
  `token` CHAR(156) NULL,
  `token_expiration` DATETIME NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  INDEX `fk_users_courses1_idx` (`id_course` ASC),
  CONSTRAINT `fk_users_courses1`
    FOREIGN KEY (`id_course`)
    REFERENCES `cidade_inteligente`.`courses` (`id_course`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade_inteligente`.`medias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade_inteligente`.`medias` (
  `id_media` INT NOT NULL AUTO_INCREMENT,
  `id_project` INT NOT NULL,
  `name` VARCHAR(60) NOT NULL,
  `type` VARCHAR(15) NOT NULL,
  `size` INT NOT NULL,
  `fileName` VARCHAR(28) NOT NULL,
  `description` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id_media`),
  INDEX `fk_medias_projects_idx` (`id_project` ASC),
  CONSTRAINT `fk_medias_projects`
    FOREIGN KEY (`id_project`)
    REFERENCES `cidade_inteligente`.`projects` (`id_project`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cidade_inteligente`.`projects_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade_inteligente`.`projects_users` (
  `id_project` INT NOT NULL,
  `id_user` INT NOT NULL,
  INDEX `fk_projects_users_projects1_idx` (`id_project` ASC),
  INDEX `fk_projects_users_users1_idx` (`id_user` ASC),
  CONSTRAINT `fk_projects_users_projects1`
    FOREIGN KEY (`id_project`)
    REFERENCES `cidade_inteligente`.`projects` (`id_project`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projects_users_users1`
    FOREIGN KEY (`id_user`)
    REFERENCES `cidade_inteligente`.`users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- INSERTS
INSERT INTO courses (course) VALUES ("Análise e Desenvolvimento de Sistemas");
INSERT INTO courses (course) VALUES ("Gestão Empresarial");
INSERT INTO courses (course) VALUES ("Gestão da Produção Indústrial");
INSERT INTO courses (course) VALUES ("Gestão da Qualidade");
INSERT INTO courses (course) VALUES ("Logística");
INSERT INTO courses (course) VALUES ("Sistema para Internet");

INSERT INTO areas (area) VALUES ("Industrial");
INSERT INTO areas (area) VALUES ("Rural");
INSERT INTO areas (area) VALUES ("Urbana");

-- SENHA DO ADMINISTRADOR: 123
INSERT INTO users (id_course, name, email, password, isAdmin) VALUES (1, "João Luís Cardoso Moraes", "joao.lcmoraes@fatec.sp.gov.br", "$2y$10$amLSaXM/l4MJy.X8Pjnq7.3KBFOKyP9bKxyZfPQu3HXp4Lwhp63ZG", 1);