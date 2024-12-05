

CREATE DATABASE utang_system;

use utang_system;

CREATE TABLE IF NOT EXISTS borrowers(
    borrower_id int primary key auto_increment,
    name varchar(250) not null,
    sex enum("male", "female") not null,
    mobile_number varchar(20) not null,
    email varchar(250) not null unique,
    password varchar(250) not null
);


CREATE TABLE IF NOT EXISTS admins(
    admin_id int primary key auto_increment,
    name varchar(250) not null,
    sex enum("male", "female") not null,
    mobile_number varchar(20) not null,
    email varchar(250) not null unique,
    password varchar(250) not null
);


CREATE TABLE Loans (
    loan_id INT AUTO_INCREMENT PRIMARY KEY,
    borrower_id INT NOT NULL,
    admin_id INT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    start_date DATE NOT NULL,
    due_date DATE NOT NULL,
    status ENUM('paid', 'unpaid', 'overdue') NOT NULL,
    FOREIGN KEY (borrower_id) REFERENCES borrowers(borrower_id),
    FOREIGN KEY (admin_id) REFERENCES admins(admin_id)
);

