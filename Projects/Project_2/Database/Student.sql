#
# DUMP FILE
#
# 
#
# Table structure for table 'Student'
#

DROP TABLE IF EXISTS `Student`;

CREATE TABLE `Student` (
  `Studentnr` INTEGER NOT NULL, 
  `Naam` VARCHAR(255), 
  `Plaats` VARCHAR(255), 
  `Geboortedatum` DATETIME, 
  `Geslacht` VARCHAR(255), 
  `Klas` VARCHAR(255), 
  `IQ` INTEGER, 
  `SLB` VARCHAR(255), 
  PRIMARY KEY (`Studentnr`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Student'
#

INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2013456, 'Tobias', 'Eindhoven', '1985-12-23 00:00:00', 'M', 'A1', 110, 'Karel');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2023418, 'Simon', 'Son', '1990-04-01 00:00:00', 'M', 'A2', 98, 'Karel');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2122431, 'Ella', 'Son', '1987-02-02 00:00:00', 'V', 'A2', 115, 'Karel');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2233112, 'Yvonne', 'Eindhoven', '1991-09-03 00:00:00', 'V', 'A1', 117, 'Rob');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2311253, 'Marco', 'Asten', '1991-12-12 00:00:00', 'M', 'A1', 99, 'Rob');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2334122, 'Mieke', 'Son', '1998-12-04 00:00:00', 'V', 'A1', 120, 'Tom');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2346577, 'Sjoerd', 'Eindhoven', '1980-05-28 00:00:00', 'M', 'A2', 113, 'Mieke');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2355187, 'Brigitte', 'Waalre', '1990-06-05 00:00:00', 'V', 'A2', 109, NULL);
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2366182, 'Martin', 'Eindhoven', '1989-09-06 00:00:00', 'M', 'A1', 135, 'Tom');
INSERT INTO `Student` (`Studentnr`, `Naam`, `Plaats`, `Geboortedatum`, `Geslacht`, `Klas`, `IQ`, `SLB`) VALUES (2675432, 'Rien', 'Asten', '1989-08-08 00:00:00', 'M', 'A2', 101, 'Karel');
# 10 records

