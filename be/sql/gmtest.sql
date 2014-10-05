CREATE TABLE user (
    id 	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fio VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    email VARCHAR(255) NOT NULL,
    diagnosis VARCHAR(255) NOT NULL,
    diagnosis_commit TEXT NOT NULL,
    address_inddex VARCHAR(255) NOT NULL,
    address_state VARCHAR(255) NOT NULL,
    address_city VARCHAR(255) NOT NULL,
    address_street VARCHAR(255) NOT NULL,
    address_build VARCHAR(255) NOT NULL,
    address_campus VARCHAR(255) NOT NULL,
    address_flat VARCHAR(255) NOT NULL
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB

CREATE TABLE coordinator (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fio VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB

CREATE TABLE phones_user (
    userid INT NOT NULL,
    phone_number VARCHAR(255)
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB
    
CREATE TABLE phones_coordinator (
    coordinator_id INT NOT NULL,
    phone_number VARCHAR(255)
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB

CREATE TABLE user_coordinator (
    userid INT NOT NULL,
    coordinatorid INT NOT NULL,
    PRIMARY KEY (userid, coordinatorid)
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB