-- MySQL dump 9.10
--
-- Host: localhost    Database: baseLafleur1
-- ------------------------------------------------------
-- Server version	4.0.18-max-debug

--
-- Table structure for table `categorie`
--

CREATE TABLE categorie (
  cat_code char(3) NOT NULL default '',
  cat_libelle varchar(50) NOT NULL default '',
  PRIMARY KEY  (cat_code)
) TYPE=INNODB;

--
-- Dumping data for table `categorie`
--

INSERT INTO categorie VALUES ('bul','Bulbes');
INSERT INTO categorie VALUES ('mas','Plantes à massif');
INSERT INTO categorie VALUES ('ros','Rosiers');

--
-- Table structure for table `produit`
--

CREATE TABLE produit (
  id char(3) NOT NULL auto_increment,
  designation varchar(50) NOT NULL default '',
  prix decimal(5,2) NOT NULL default '0.00',
  image varchar(50) NOT NULL default '',
  categorie char(3) NOT NULL default '',
  PRIMARY KEY  (pdt_ref)
) TYPE=INNODB;

--
-- Dumping data for table `produit`
--

INSERT INTO produit VALUES (1,'3 bulbes de bégonias',"5.00",'bulbes_begonia','bul');
INSERT INTO produit VALUES (2,'10 bulbes de dahlias',"12.00",'bulbes_dahlia','bul');
INSERT INTO produit VALUES (3,'50 glaïeuls',"9.00",'bulbes_glaieul','bul');
INSERT INTO produit VALUES (4,'Lot de 3 marguerites',"5.00",'massif_marguerite','mas');
INSERT INTO produit VALUES (5,'Pour un bouquet de 6 pensées',"6.00",'massif_pensee','mas');
INSERT INTO produit VALUES (6,'Mélange varié de 10 plantes à massif',"15.00",'massif_melange','mas');
INSERT INTO produit VALUES (7,'1 pied spécial grandes fleurs',"20.00",'rosiers_gdefleur','ros');
INSERT INTO produit VALUES (8,'Une variété sélectionnée pour son parfum',"9.00",'rosiers_parfum','ros');
INSERT INTO produit VALUES (9,'Rosier arbuste',"8.00",'rosiers_arbuste','ros');

