CREATE TABLE categorie (
  libelle INTEGER PRIMARY KEY,
  nom TEXT
);
CREATE TABLE article (
  libelle INTEGER PRIMARY KEY,
  nom_produit TEXT,
  categorie INTEGER,
  marque TEXT,
  prix TEXT,
  photo TEXT,
  FOREIGN KEY (categorie) REFERENCES categorie(libelle)
  );

CREATE TABLE lieu (
  article INTEGER,
  lieu_dispo VARCHAR(10),
  Primary Key (article,lieu_dispo),
  FOREIGN KEY (article) REFERENCES article(libelle)
);
