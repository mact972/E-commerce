CREATE TABLE Concerne (

	quantité int (100),
	id_Commande int,
	id_Produit int,

	Constraint pk_Concerne primary key (id_Commande, id_Produit),
	Constraint fk_Concerne_Commande foreign key (id_Commande) references Commande(id_Commande),
	Constraint fk_Concerne_Produit foreign key (id_Produit) references Produit(id_Produit)

);



