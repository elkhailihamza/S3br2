CREATE TABLE client (
	id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    passwrd VARCHAR(255),
    email VARCHAR(255),
    date_creation DATE
);
CREATE TABLE contact (
	id_contact INT PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(255),
    lname VARCHAR(255),
    phone_number VARCHAR(20),
    email VARCHAR(255),
    short_description TEXT,
    FK_id_user INT,
    FOREIGN KEY (FK_id_user) REFERENCES client(id_user)
);