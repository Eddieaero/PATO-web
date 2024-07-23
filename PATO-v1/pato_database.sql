CREATE DATABASE patodb;


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
  days_remaining INT NOT NULL DEFAULT 0,
  progress_amount DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  percentage_progress DECIMAL(5,2) NOT NULL DEFAULT 0.00,
  end_date DATE NOT NULL DEFAULT '0000-00-00',
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (investment_plan_id) REFERENCES investment_plans(id)
);


