DROP DATABASE IF EXISTS tp_php;
CREATE DATABASE IF NOT EXISTS tp_php /*CHARACTER SET = utf8*/;
GRANT ALL PRIVILEGES ON tp_php.* to 'php_user' IDENTIFIED BY 'passer';
USE tp_php;
DROP TABLE IF EXISTS utilisateur;
CREATE TABLE IF NOT EXISTS utilisateur(
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nom VARCHAR(32) NOT NULL,
	prenom VARCHAR(40) NOT NULL,
	login VARCHAR(20) NOT NULL UNIQUE,
	password VARCHAR(40) NOT NULL,
	profil VARCHAR(30) DEFAULT 'profils/default.png'
) /*CHARACTER SET = utf8*/;

INSERT INTO utilisateur (nom, prenom, login, password) VALUES
	('Diop', 'Khadim', 'xadim', SHA1('passer')),
	('Fall', 'Kiné', 'kinefa', SHA1('coding')),
	('Sarr', 'Abdoulaye', 'laye', SHA1('gambia'));