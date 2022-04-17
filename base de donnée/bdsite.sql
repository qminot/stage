CREATE TABLE Equipe(
   Nom_Equipe VARCHAR(50),
   J1_Entrainement VARCHAR(50),
   J2_Entrainement VARCHAR(50),
   J3_Entrainement VARCHAR(50),
   PRIMARY KEY(Nom_Equipe)
);
INSERT INTO Equipe VALUES('Nationale 2','Lundi','Mardi', 'Jeudi'),
('M21','Lundi','Mercredi', 'Vendredri');

CREATE TABLE Joueur(
   Num_Licence INT,
   Nom_Joueur VARCHAR(50),
   Prenom_Joueur VARCHAR(50),
   Poste VARCHAR(50),
   Num_Maillot INT,
   Nom_Equipe VARCHAR(50) NOT NULL,
   Nationalite VARCHAR(50),
   Sexe VARCHAR(1),
   PRIMARY KEY(Num_Licence),
   FOREIGN KEY(Nom_Equipe) REFERENCES Equipe(Nom_Equipe)
);

INSERT INTO Joueur VALUES (1648160,'DANGUY','Tom','passeur',1, 'Nationale 2','Français','M'),
(2290435,'Vie','Quentin','central',2, 'Nationale 2','Français','M'),
(2483335,'Popov','Nikita','receptionneur attaquant',3, 'Nationale 2','Russe','M'),
(1646615,'Theodose','Nicolas','central',4, 'Nationale 2','Français','M'),
(1766496,'Quaak','Gabin','libero',5, 'Nationale 2','Français','M'),
(2360300,'Minot','Quentin','central',8, 'Nationale 2','Français','M'),
(2053601,'Jung Turck','Pierre','receptionneur attaquant',9, 'Nationale 2','Français','M'),
(1796826,'Ganga','Yann','pointu',13, 'Nationale 2','Français','M'),
(1867767,'Wetzel','Oscar','receptionneur attaquant',14, 'Nationale 2','Français','M'),
(2225571,'Konaté','Djabe','passeur',15, 'Nationale 2','Français','M'),
(2328445,'Jung','Arnaud','pointu',3,'M21','Français','M'),
(1875497,'Dambreville','Tanguy','receptionneur attaquant',5,'M21','Français','M'),
(2408097,'Pham Ba','Aristote','libero',6,'M21','Français','M'),
(2202517,'Fofana','Mamadou','pointu',7,'M21','Français','M'),
(2360301,'Minot','Quentin','central',8,'M21','Français','M'),
(2444556,'Li','Thomas','receptionneur attaquant',11,'M21','Français','M'),
(1867768,'Wetzel','Oscar','receptionneur attaquant',14,'M21','Français','M'),
(2506555,'Dumagenc','Alexian','central',15,'M21','Français','M'),
(2247712,'Jobart','Phileas','passeur',17,'M21','Français','M'),
(2050741,'Merched','Raphael','passeur',18,'M21','Français','M'),
(2391049,'Sussfeld','Antoine','central',19,'M21','Français','M');







CREATE TABLE Entraineur(
   Num_LicenceE INT,
   Nom_Entraineur VARCHAR(50),
   Prenom_Entraineur VARCHAR(50),
   Nom_Equipe VARCHAR(50) NOT NULL,
   PRIMARY KEY(Num_LicenceE),
   FOREIGN KEY(Nom_Equipe) REFERENCES Equipe(Nom_Equipe));

INSERT INTO Entraineur VALUES(1514826,'Delocty','Olivier', 'Nationale 2'),
(1514827,'Mitchel','Edwin','M21');

CREATE TABLE Utilisateur(
   MailU VARCHAR(50),
   MdpU VARCHAR(50),
   Pseudo VARCHAR(50),
   PRIMARY KEY(MailU));

Insert Into Utilisateur VALUES('test@gmail','mdp123','Quentin'),
('test2@gmail','mdd456','Paul');


CREATE TABLE Photo(
   IdP INT,
   CheminP VARCHAR(50),
   Num_Licence INT NOT NULL,
   PRIMARY KEY(IdP),
   FOREIGN KEY(Num_Licence) REFERENCES Joueur(Num_Licence)
);

INSERT Into Photo VALUES(1,'tom.jpg',1648160),
(2,'quentin.jpg',2290435),
(3,'nikita.jpg',2483335),
(4,'nicolas.jpg',1646615),
(5,'gabin.jpg',1766496),
(6,'profil.jpg',2360300),
(7,'pierre.jpg',2053601),
(8,'yann.jpg',1796826),
(9,'oscar.jpg',1867767),
(10,'djabe.jpg',2225571),
(11,'arnaud.jpg',2328445),
(12,'tanguy.jpg',1875497),
(13,'aristote.jpg',2408097),
(14,'mamadou.jpg',2202517),
(15,'profil.jpg',2360301),
(16,'thomas.jpg',2444556),
(17,'oscar.jpg',1867768),
(18,'inconnu.jpg',2506555),
(19,'phileas.jpg',2247712),
(20,'raphael.jpg',2050741),
(21,'inconnu.jpg',2391049);

CREATE TABLE Aimer(
   Num_Licence INT,
   MailU VARCHAR(50),
   PRIMARY KEY(Num_Licence, MailU),
   FOREIGN KEY(Num_Licence) REFERENCES Joueur(Num_Licence),
   FOREIGN KEY(MailU) REFERENCES Utilisateur(MailU));

Insert Into Aimer VALUES('2360300','test@gmail'),
('2483335','test@gmail'),
('2225571','test2@gmail'),
('2483335','test2@gmail');