-- MySQL Script generated by MySQL Workbench
-- Wed Dec 19 00:08:47 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema B2B
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema B2B
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `B2B` DEFAULT CHARACTER SET utf8 ;
USE `B2B` ;

-- -----------------------------------------------------
-- Table `B2B`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `perfil` VARCHAR(30) NOT NULL,
  `nombre` VARCHAR(20) NOT NULL,
  `apellidos` VARCHAR(30) NOT NULL,
  `correo` VARCHAR(30) NOT NULL,
  `pass` VARCHAR(100) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`proveedor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `razon_social` VARCHAR(100) NOT NULL,
  `giro_comercial` VARCHAR(100) NOT NULL,
  `rut` VARCHAR(30) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `nombre_contacto` VARCHAR(30) NOT NULL,
  `pais` VARCHAR(30) NOT NULL,
  `ciudad` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(100) NOT NULL,
  `region` VARCHAR(100) NOT NULL,
  `telefono_fijo` VARCHAR(30) NOT NULL,
  `telefono_movil` VARCHAR(30) NOT NULL,
  `logo` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `descripcion` VARCHAR(500) NOT NULL,
  `precio` FLOAT NOT NULL,
  `stock` INT NOT NULL,
  `proveedor_id` INT NOT NULL,
  PRIMARY KEY (`id`, `proveedor_id`),
  INDEX `fk_producto_proveedor1_idx` (`proveedor_id` ASC),
  CONSTRAINT `fk_producto_proveedor1`
    FOREIGN KEY (`proveedor_id`)
    REFERENCES `B2B`.`proveedor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `producto_id` INT NOT NULL,
  PRIMARY KEY (`id`, `producto_id`),
  INDEX `fk_categoria_producto1_idx` (`producto_id` ASC),
  CONSTRAINT `fk_categoria_producto`
    FOREIGN KEY (`producto_id`)
    REFERENCES `B2B`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`especificacion_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`especificacion_producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `item` VARCHAR(30) NOT NULL,
  `dato_item` VARCHAR(30) NOT NULL,
  `producto_id` INT NOT NULL,
  PRIMARY KEY (`id`, `producto_id`),
  INDEX `fk_especificacion_producto` (`producto_id` ASC),
  CONSTRAINT `fk_especificacion_producto`
    FOREIGN KEY (`producto_id`)
    REFERENCES `B2B`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`orden_compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`orden_compra` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `destinatario` VARCHAR(30) NOT NULL,
  `direccion` VARCHAR(30) NOT NULL,
  `ciudad` VARCHAR(45) NOT NULL,
  `region` VARCHAR(45) NOT NULL,
  `telefono` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_orden_compra_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_orden_compra_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `B2B`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`detalle_compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`detalle_compra` (
  `producto_id` INT NOT NULL,
  `compra_id` INT NOT NULL,
  `precio_unit` DOUBLE NOT NULL,
  `cantidad` INT NOT NULL,
  `descuento` DOUBLE NOT NULL,
  PRIMARY KEY (`producto_id`, `compra_id`),
  INDEX `fk_producto_has_compra_compra1_idx` (`compra_id` ASC),
  INDEX `fk_producto_has_compra_producto1_idx` (`producto_id` ASC),
  CONSTRAINT `fk_producto_has_compra_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `B2B`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_has_compra_compra1`
    FOREIGN KEY (`compra_id`)
    REFERENCES `B2B`.`orden_compra` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`ev_prod`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`ev_prod` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `puntuacion` INT NOT NULL,
  `producto_id` INT NOT NULL,
  PRIMARY KEY (`id`, `producto_id`),
  INDEX `fk_ev_prod_producto1_idx` (`producto_id` ASC),
  CONSTRAINT `fk_ev_prod_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `B2B`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`ev_pov`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`ev_pov` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `puntuacion` INT NULL,
  `proveedor_id` INT NOT NULL,
  PRIMARY KEY (`id`, `proveedor_id`),
  INDEX `fk_ev_pov_proveedor1_idx` (`proveedor_id` ASC),
  CONSTRAINT `fk_ev_pov_proveedor1`
    FOREIGN KEY (`proveedor_id`)
    REFERENCES `B2B`.`proveedor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`trasportista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`trasportista` (
  `id` INT NOT NULL,
  `nombre_chofer` VARCHAR(30) NOT NULL,
  `patente_camion` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `B2B`.`imagen_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `B2B`.`imagen_producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ruta` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `producto_id` INT NOT NULL,
  PRIMARY KEY (`id`, `producto_id`),
  INDEX `fk_imagen_producto` (`producto_id` ASC),
  CONSTRAINT `fk_imagen_producto`
    FOREIGN KEY (`producto_id`)
    REFERENCES `B2B`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;