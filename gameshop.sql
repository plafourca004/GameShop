DROP TABLE IF EXISTS IsInPlatform;
DROP TABLE IF EXISTS Game;
DROP TABLE IF EXISTS Platform;
DROP TABLE IF EXISTS User;

CREATE TABLE User(
	idUser INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30),
	pass VARCHAR(255)
);

CREATE TABLE Game(
	idGame INT PRIMARY KEY,
	nameGame VARCHAR(255)
);

CREATE TABLE Platform(
	idPlatform INT PRIMARY KEY,
	namePlatform VARCHAR(255)
);

CREATE TABLE IsInPlatform(
	idGame INT,
	idPlatform INT,
	price FLOAT(2),
	stock INT,
	imageURL VARCHAR(100),
	PRIMARY KEY (idGame ,idPlatform)
);
ALTER TABLE IsInPlatform ADD FOREIGN KEY fk_game(idGame) REFERENCES Game(idGame) ON DELETE CASCADE;
ALTER TABLE IsInPlatform ADD FOREIGN KEY fk_platform(idPlatform) REFERENCES Platform(idPlatform) ON DELETE CASCADE;


