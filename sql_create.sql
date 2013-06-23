SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_curso`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_curso` (
  `id_curso` INT NOT NULL AUTO_INCREMENT ,
  `curso` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_curso`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `matricula` INT NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(45) NOT NULL ,
  `semestre` VARCHAR(10) NULL ,
  `tb_cursos_id_curso` INT NOT NULL ,
  PRIMARY KEY (`id_usuario`) ,
  INDEX `fk_tb_usuarios_tb_cursos_idx` (`tb_cursos_id_curso` ASC) ,
  CONSTRAINT `fk_tb_usuarios_tb_cursos`
    FOREIGN KEY (`tb_cursos_id_curso` )
    REFERENCES `db_exploreunb`.`tb_curso` (`id_curso` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_tipo_local`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_tipo_local` (
  `id_tipo_local` INT NOT NULL AUTO_INCREMENT ,
  `tipo_local` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_tipo_local`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_predio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_predio` (
  `id_predio` INT NOT NULL AUTO_INCREMENT ,
  `predio` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_predio`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_local`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_local` (
  `id_local` INT NOT NULL AUTO_INCREMENT ,
  `local` VARCHAR(45) NOT NULL ,
  `numero` INT NULL ,
  `tb_tipo_local_id_tipo_local` INT NOT NULL ,
  `tb_predio_id_predio` INT NULL ,
  PRIMARY KEY (`id_local`) ,
  INDEX `fk_tb_local_tb_tipo_local1_idx` (`tb_tipo_local_id_tipo_local` ASC) ,
  INDEX `fk_tb_local_tb_predio1_idx` (`tb_predio_id_predio` ASC) ,
  CONSTRAINT `fk_tb_local_tb_tipo_local1`
    FOREIGN KEY (`tb_tipo_local_id_tipo_local` )
    REFERENCES `db_exploreunb`.`tb_tipo_local` (`id_tipo_local` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_local_tb_predio1`
    FOREIGN KEY (`tb_predio_id_predio` )
    REFERENCES `db_exploreunb`.`tb_predio` (`id_predio` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_coordenada`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_coordenada` (
  `id_coordenada` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`id_coordenada`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_lanchonete`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_lanchonete` (
  `id_lanchonete` INT NOT NULL AUTO_INCREMENT ,
  `lanchonete` VARCHAR(55) NOT NULL ,
  `tb_local_id_local` INT NOT NULL ,
  `tb_coordenada_id_coordenada` INT NOT NULL ,
  PRIMARY KEY (`id_lanchonete`) ,
  INDEX `fk_tb_lanchonete_tb_local1_idx` (`tb_local_id_local` ASC) ,
  INDEX `fk_tb_lanchonete_tb_coordenada1_idx` (`tb_coordenada_id_coordenada` ASC) ,
  CONSTRAINT `fk_tb_lanchonete_tb_local1`
    FOREIGN KEY (`tb_local_id_local` )
    REFERENCES `db_exploreunb`.`tb_local` (`id_local` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_lanchonete_tb_coordenada1`
    FOREIGN KEY (`tb_coordenada_id_coordenada` )
    REFERENCES `db_exploreunb`.`tb_coordenada` (`id_coordenada` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_orgao`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_orgao` (
  `id_orgao` INT NOT NULL AUTO_INCREMENT ,
  `orgao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_orgao`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_disciplina`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_disciplina` (
  `id_disciplina` INT NOT NULL AUTO_INCREMENT ,
  `disciplina` VARCHAR(55) NOT NULL ,
  `codigo` INT NOT NULL ,
  `tb_orgao_id_orgao` INT NOT NULL ,
  PRIMARY KEY (`id_disciplina`) ,
  INDEX `fk_tb_disciplina_tb_orgao1_idx` (`tb_orgao_id_orgao` ASC) ,
  CONSTRAINT `fk_tb_disciplina_tb_orgao1`
    FOREIGN KEY (`tb_orgao_id_orgao` )
    REFERENCES `db_exploreunb`.`tb_orgao` (`id_orgao` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_turma`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_turma` (
  `id_turma` INT NOT NULL AUTO_INCREMENT ,
  `turma` VARCHAR(2) NOT NULL ,
  `professor` VARCHAR(45) NOT NULL ,
  `tb_disciplina_id_disciplina` INT NOT NULL ,
  PRIMARY KEY (`id_turma`) ,
  INDEX `fk_tb_turma_tb_disciplina1_idx` (`tb_disciplina_id_disciplina` ASC) ,
  CONSTRAINT `fk_tb_turma_tb_disciplina1`
    FOREIGN KEY (`tb_disciplina_id_disciplina` )
    REFERENCES `db_exploreunb`.`tb_disciplina` (`id_disciplina` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_aula`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_aula` (
  `id_aula` INT NOT NULL AUTO_INCREMENT ,
  `dia` VARCHAR(12) NOT NULL ,
  `hora` DATETIME NOT NULL ,
  `sala` VARCHAR(45) NOT NULL ,
  `tb_turma_id_turma` INT NOT NULL ,
  `tb_local_id_local` INT NOT NULL ,
  `tb_coordenada_id_coordenada` INT NOT NULL ,
  PRIMARY KEY (`id_aula`) ,
  INDEX `fk_tb_aula_tb_turma1_idx` (`tb_turma_id_turma` ASC) ,
  INDEX `fk_tb_aula_tb_local1_idx` (`tb_local_id_local` ASC) ,
  INDEX `fk_tb_aula_tb_coordenada1_idx` (`tb_coordenada_id_coordenada` ASC) ,
  CONSTRAINT `fk_tb_aula_tb_turma1`
    FOREIGN KEY (`tb_turma_id_turma` )
    REFERENCES `db_exploreunb`.`tb_turma` (`id_turma` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_aula_tb_local1`
    FOREIGN KEY (`tb_local_id_local` )
    REFERENCES `db_exploreunb`.`tb_local` (`id_local` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_aula_tb_coordenada1`
    FOREIGN KEY (`tb_coordenada_id_coordenada` )
    REFERENCES `db_exploreunb`.`tb_coordenada` (`id_coordenada` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_grade_disciplinas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_grade_disciplinas` (
  `tb_disciplina_id_disciplina` INT NOT NULL ,
  `tb_usuario_id_usuario` INT NOT NULL ,
  PRIMARY KEY (`tb_disciplina_id_disciplina`, `tb_usuario_id_usuario`) ,
  INDEX `fk_tb_disciplina_has_tb_usuario_tb_usuario1_idx` (`tb_usuario_id_usuario` ASC) ,
  INDEX `fk_tb_disciplina_has_tb_usuario_tb_disciplina1_idx` (`tb_disciplina_id_disciplina` ASC) ,
  CONSTRAINT `fk_tb_disciplina_has_tb_usuario_tb_disciplina1`
    FOREIGN KEY (`tb_disciplina_id_disciplina` )
    REFERENCES `db_exploreunb`.`tb_disciplina` (`id_disciplina` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_disciplina_has_tb_usuario_tb_usuario1`
    FOREIGN KEY (`tb_usuario_id_usuario` )
    REFERENCES `db_exploreunb`.`tb_usuario` (`id_usuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_linha_onibus`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_linha_onibus` (
  `id_linha_onibus` INT NOT NULL AUTO_INCREMENT ,
  `numero` DECIMAL(10,2) NOT NULL ,
  PRIMARY KEY (`id_linha_onibus`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_parada`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_parada` (
  `id_parada` INT NOT NULL AUTO_INCREMENT ,
  `tb_local_id_local` INT NOT NULL ,
  `tb_coordenada_id_coordenada` INT NOT NULL ,
  `ordem` INT NOT NULL ,
  PRIMARY KEY (`id_parada`) ,
  INDEX `fk_tb_parada_tb_local1_idx` (`tb_local_id_local` ASC) ,
  INDEX `fk_tb_parada_tb_coordenada1_idx` (`tb_coordenada_id_coordenada` ASC) ,
  CONSTRAINT `fk_tb_parada_tb_local1`
    FOREIGN KEY (`tb_local_id_local` )
    REFERENCES `db_exploreunb`.`tb_local` (`id_local` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_parada_tb_coordenada1`
    FOREIGN KEY (`tb_coordenada_id_coordenada` )
    REFERENCES `db_exploreunb`.`tb_coordenada` (`id_coordenada` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_rota`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_rota` (
  `tb_linha_onibus_id_linha_onibus` INT NOT NULL ,
  `tb_parada_id_parada` INT NOT NULL ,
  PRIMARY KEY (`tb_linha_onibus_id_linha_onibus`, `tb_parada_id_parada`) ,
  INDEX `fk_tb_linha_onibus_has_tb_parada_tb_parada1_idx` (`tb_parada_id_parada` ASC) ,
  INDEX `fk_tb_linha_onibus_has_tb_parada_tb_linha_onibus1_idx` (`tb_linha_onibus_id_linha_onibus` ASC) ,
  CONSTRAINT `fk_tb_linha_onibus_has_tb_parada_tb_linha_onibus1`
    FOREIGN KEY (`tb_linha_onibus_id_linha_onibus` )
    REFERENCES `db_exploreunb`.`tb_linha_onibus` (`id_linha_onibus` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_linha_onibus_has_tb_parada_tb_parada1`
    FOREIGN KEY (`tb_parada_id_parada` )
    REFERENCES `db_exploreunb`.`tb_parada` (`id_parada` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_exploreunb`.`tb_cardapio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `db_exploreunb`.`tb_cardapio` (
  `id_cardapio` INT NOT NULL AUTO_INCREMENT ,
  `semana` DATETIME NOT NULL ,
  `endereco` VARCHAR(100) NOT NULL ,
  `tb_lanchonete_id_lanchonete` INT NOT NULL ,
  PRIMARY KEY (`id_cardapio`) ,
  INDEX `fk_tb_cardapio_tb_lanchonete1_idx` (`tb_lanchonete_id_lanchonete` ASC) ,
  CONSTRAINT `fk_tb_cardapio_tb_lanchonete1`
    FOREIGN KEY (`tb_lanchonete_id_lanchonete` )
    REFERENCES `db_exploreunb`.`tb_lanchonete` (`id_lanchonete` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
