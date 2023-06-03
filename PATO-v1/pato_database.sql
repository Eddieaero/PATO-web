CREATE DATABASE patodb;

CREATE TABLE user (
  id INT PRIMARY KEY,
  username VARCHAR(255),
  phone INT(13),
  password TEXT
);

-- CREATE TABLE users (
--   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--   first_name VARCHAR(50) NOT NULL,
--   surname VARCHAR(50) NOT NULL,
--   dob INT NOT NULL,
--   gender ENUM('male', 'female') NOT NULL,
--   email VARCHAR(255) NOT NULL UNIQUE,
--   phone VARCHAR(20) NOT NULL,
--   password VARCHAR(255) NOT NULL,
--   conf_password VARCHAR(255) NOT NULL;
--   terms_acc TINYINT(1) NOT NULL DEFAULT 0,
--   -- created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
-- );


CREATE TABLE user (
  id INT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  surname VARCHAR(50) NOT NULL,
  dob INT,
  gender ENUM('male', 'female') NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone VARCHAR(20) NOT NULL,
  password VARCHAR(255) NOT NULL,
  conf_password VARCHAR(255) NOT NULL
);

CREATE TABLE investment_plans (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  return_percentage DECIMAL(5,2) NOT NULL,
  period_in_days INT NOT NULL,
  membership_fee DECIMAL(10,2) NOT NULL,
  initial_investment DECIMAL(10,2) NOT NULL
);

INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (0.04, 7, 3000, 25000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (0.20, 30, 5000.00, 50000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (0.70, 120, 7000.00, 70000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (1.50, 180, 10000.00, 100000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (3.00, 360, 15000.00, 300000.00);



CREATE TABLE investments (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  investment_plan_id INT NOT NULL,
  amount DECIMAL(10,2) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (investment_plan_id) REFERENCES investment_plans(id)
);

INSERT INTO investments (user_id, investment_plan_id, amount)
VALUES (1, 1, 1000.00);












-- CREATE TABLE crop (
--   id INT PRIMARY KEY,
--   name VARCHAR(255),
--   description TEXT,
--   planting_date DATE,
--   time_to_harvest DATE
-- );

-- CREATE TABLE field (
--   id INT PRIMARY KEY,
--   name VARCHAR(255),
--   description TEXT,
--   latitude FLOAT,
--   longitude FLOAT,
--   owner INT,
--   FOREIGN KEY (owner) REFERENCES user(id)
-- );

-- CREATE TABLE crop_field (
--   id INT PRIMARY KEY,
--   crop_id INT,
--   field_id INT,
--   planting_date DATE,
--   harvest_date DATE,
--   FOREIGN KEY (crop_id) REFERENCES crop(id),
--   FOREIGN KEY (field_id) REFERENCES field(id)
-- );

-- CREATE TABLE crop_data (
--   id INT PRIMARY KEY,
--   crop_field_id INT,
--   date DATE,
--   temperature FLOAT,
--   rainfall FLOAT,
--   soil_moisture FLOAT,
--   pest_infestation_level FLOAT,
--   disease_incidence_level FLOAT,
--   yield FLOAT
-- );





-- BROTHER MAKILAGI INPUT THESE CODE INTO THE DATABASE
-- BROTHER MAKILAGI INPUT THESE CODE INTO THE DATABASE 
-- BROTHER MAKILAGI INPUT THESE CODE INTO THE DATABASE 



CREATE DATABASE patodb;

USE patodb;



CREATE TABLE user (
  id INT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  surname VARCHAR(50) NOT NULL,
  dob INT,
  gender ENUM('male', 'female') NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone VARCHAR(20) NOT NULL,
  password VARCHAR(255) NOT NULL,
  conf_password VARCHAR(255) NOT NULL
);

CREATE TABLE investment_plans (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  return_percentage DECIMAL(5,2) NOT NULL,
  period_in_days INT NOT NULL,
  membership_fee DECIMAL(10,2) NOT NULL,
  initial_investment DECIMAL(10,2) NOT NULL
);


CREATE TABLE investments (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  investment_plan_id INT NOT NULL,
  amount DECIMAL(10,2) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES user(id),
  FOREIGN KEY (investment_plan_id) REFERENCES investment_plans(id)
);

INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (0.03, 7, 3000, 25000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (0.15, 30, 5000.00, 50000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (0.5, 120, 7000.00, 70000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (1.1, 180, 10000.00, 100000.00);
INSERT INTO investment_plans (return_percentage, period_in_days, membership_fee, initial_investment)
VALUES (2, 360, 15000.00, 300000.00);



























































