CREATE TABLE Utilisateur (

	id_utilisateur int NOT NULL AUTO_INCREMENT,
	nom char (50),
	prenm char (50),
	pseudo char not null (50),
	adresse char(60),
	cp int (5),
	mot_de_passe int not null (30),
	mail varchar(255),

	Constraint pk_utilisateur primary key (id_utilisateur)

);

CREATE TABLE Commande (

	id_Commande int NOT NULL AUTO_INCREMENT,
	id_utilisateur int,
	1prix_total int (50),
	date_Commande DATE, 


	Constraint pk_Commande primary key (id_utilisateur),
	Constraint fk_Commande_Utilisateur foreign key (id_utilisateur) references Utilisateur (id_utilisateur)

);

CREATE TABLE Concerne (

	quantité int (100),
	id_Commande int
	id_Prod

);

