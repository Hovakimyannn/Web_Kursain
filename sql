CREATE DATABASE auto_shop;

CREATE TABLE cars(
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    model ENUM('1-series','2-series','3-series','4-series','5-series','6-series','7-series','8-series','X-series','Z-series','M-series','I-series'),
    fuel ENUM('PETROL','DIESEL','PLUG-IN HYBRID','FULL-ELECTRIC')
);

SELECT model, name FROM cars
WHERE name LIKE '%x5%m%';

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_3_Series_Sedan','3-series','PETROL','BMW_3_Series_Sedan.png'),
('BMW_3_Series_Sedan','3-series','PLUG-IN HYBRID','BMW_3_Series_Sedan.png'),
('BMW_3_Series_Sedan_M_Automobiles','3-series','PETROL','BMW_3_Series_Sedan_M_Automobiles.webp');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_4_Series_Coupe_M_Automobiles','4-series','PETROL','BMW_4_Series_Coupe_M_Automobiles.webp'),
('BMW_4_Series_Gran_Coupe','4-series','PETROL','BMW_4_Series_Gran_Coupe.webp'),
('BMW_4_Series_Gran_Coupe_M_Automobiles','4-series','PETROL','BMW_4_Series_Gran_Coupe_M_Automobiles.webp'),
('BMW_4_Series_Convertible','4-series','PETROL','BMW_4_Series_Convertible.webp'),
('BMW_4_Series_Convertible_M_Automobiles','4-series','PETROL','BMW_4_Series_Convertible_M_Automobiles.webp'),
('BMW_i4','4-series','FULL-ELECTRIC','BMW_i4.png');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_5_Series_Sedan','5-series','PETROL','BMW_5_Series_Sedan.webp'),
('BMW_5_Series_Sedan','5-series','PLUG-IN HYBRID','BMW_5_Series_Sedan.webp'),
('BMW_5_Series_Sedan_M_Automobiles','5-series','PETROL','BMW_5_Series_Sedan_M_Automobiles.webp');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_6_Series_Gran_Turismo','6-series','PETROL','BMW_6_Series_Gran_Turismo.webp'),
('BMW_6_Series_Gran_Turismo','6-series','DIESEL','BMW_6_Series_Gran_Turismo.webp');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_7_Series_Sedan','7-series','PETROL','BMW_7_Series_Sedan.webp'),
('BMW_7_Series_Sedan','7-series','DIESEL','BMW_7_Series_Sedan.webp'),
('BMW_M760Li_xDrive_Sedan','7-series','PETROL','BMW_M760Li_xDrive_Sedan.png');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_8_Series_Coupe','8-series','PETROL','BMW_8_Series_Coupe.webp'),
('BMW_8_Series_Coupe_M_Automobiles','8-series','DIESEL','BMW_8_Series_Coupe_M_Automobiles.webp'),
('BMW_8_Series_Convertible','8-series','PETROL','BMW_8_Series_Convertible.webp'),
('BMW_8_Series_Convertible_M_Automobiles','8-series','PETROL','BMW_8_Series_Convertible_M_Automobiles.webp'),
('BMW_8_Series_Gran_Coupe','8-series','PETROL','BMW_8_Series_Gran_Coupe.webp'),
('BMW_8_Series_Gran_Coupe_M_Automobiles','8-series','PETROL','BMW_8_Series_Gran_Coupe_M_Automobiles.webp');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_X1','X-series','PETROL','BMW_X1.webp'),
('BMW_X1','X-series','PLUG-IN HYBRID','BMW_X1.webp'),
('BMW_X1','X-series','FULL-ELECTRIC','BMW_X1.webp'),
('BMW_X2','X-series','PETROL','BMW_X2.webp'),
('BMW_X2','X-series','DIESEL','BMW_X2.webp'),
('BMW_X2','X-series','PLUG-IN HYBRID','BMW_X2.webp'),
('BMW_X2_xDrive25e','X-series','PLUG-IN HYBRID','BMW_X2_xDrive25e.png'),
('BMW_X2_M35i','X-series','PETROL','BMW_X2_M35i.webp'),
('BMW_X3','X-series','PETROL','BMW_X3.webp'),
('BMW_X3','X-series','DIESEL','BMW_X3.webp'),
('BMW_X3','X-series','PLUG-IN HYBRID','BMW_X3.webp'),
('BMW_X3_xDrive30e','X-series','PLUG-IN HYBRID','BMW_X3_xDrive30e.webp'),
('BMW_iX','X-series','FULL-ELECTRIC','BMW_iX.webp'),
('BMW_X3_M_Automobiles','X-series','PETROL','BMW_X3_M_Automobiles.webp'),
('BMW_X4','X-series','PETROL','BMW_X4.webp'),
('BMW_X4_M_Automobiles','X-series','PETROL','BMW_X4_M_Automobiles.webp'),
('BMW_X5','X-series','PETROL','BMW_X5.webp'),
('BMW_X5','X-series','DIESEL','BMW_X5.webp'),
('BMW_X5_M_Automobiles','X-series','PETROL','BMW_X5_M_Automobiles.webp'),
('BMW_X6','X-series','PETROL','BMW_X6.webp'),
('BMW_X6','X-series','DIESEL','BMW_X6.webp'),
('BMW_X6_M_Automobiles','X-series','PETROL','BMW_X6_M_Automobiles.webp'),
('BMW_X6_M_Automobiles','X-series','DIESEL','BMW_X6_M_Automobiles.webp'),
('BMW_X7','X-series','PETROL','BMW_X7.webp'),
('BMW_X7','X-series','DIESEL','BMW_X7.webp'),
('BMW_X7_M_Automobiles','X-series','PETROL','BMW_X7_M_Automobiles.webp');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_Z4_Roadster','Z-series','PETROL','BMW_Z4_Roadster.webp'),
('BMW_Z4_M40i','8-series','PETROL','BMW_Z4_M40i.webp');

INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_M135i_xDrive','M-series','PETROL','BMW_M135i_xDrive.webp'),
('BMW_M240i_xDrive_Coupe','M-series','PETROL','BMW_M240i_xDrive_Coupe.png'),
('BMW_M235i_xDrive_Gran_Coupe','M-series','PETROL','BMW_M235i_xDrive_Gran_Coupe.webp'),
('BMW_M240i_Convertible','M-series','PETROL','BMW_M240i_Convertible.webp'),
('BMW_3_Series_Sedan_M_Automobiles','M-series','PETROL','BMW_3_Series_Sedan_M_Automobiles.webp'),
('BMW_4_Series_Coupe_M_Automobiles','M-series','PETROL','BMW_4_Series_Coupe_M_Automobiles.webp'),
('BMW_4_Series_Gran_Coupe_M_Automobiles','M-series','PETROL','BMW_4_Series_Gran_Coupe_M_Automobiles.webp'),
('BMW_4_Series_Convertible_M_Automobiles','M-series','PETROL','BMW_4_Series_Convertible_M_Automobiles.webp'),
('BMW_5_Series_Sedan_M_Automobiles','M-series','PETROL','BMW_5_Series_Sedan_M_Automobiles.webp'),
('BMW_M760Li_xDrive_Sedan','M-series','PETROL','BMW_M760Li_xDrive_Sedan.png'),
('BMW_8_Series_Coupe_M_Automobiles','M-series','PETROL','BMW_8_Series_Coupe_M_Automobiles.webp'),
('BMW_8_Series_Convertible_M_Automobiles','M-series','PETROL','BMW_8_Series_Convertible_M_Automobiles.webp'),
('BMW_8_Series_Gran_Coupe_M_Automobiles','M-series','PETROL','BMW_8_Series_Gran_Coupe_M_Automobiles.webp'),
('BMW_X2_M35i','M-series','PETROL','BMW_X2_M35i.webp'),
('BMW_X3_M_Automobiles','M-series','PETROL','BMW_X3_M_Automobiles.webp'),
('BMW_X4_M_Automobiles','M-series','PETROL','BMW_X4_M_Automobiles.webp'),
('BMW_X5_M_Automobiles','M-series','PETROL','BMW_X5_M_Automobiles.webp'),
('BMW_X6_M_Automobiles','M-series','PETROL','BMW_X6_M_Automobiles.webp'),
('BMW_X6_M_Automobiles','M-series','DIESEL','BMW_X6_M_Automobiles.webp'),
('BMW_X7_M_Automobiles','M-series','PETROL','BMW_X7_M_Automobiles.webp'),
('BMW_Z4_M40i','M-series','PETROL','BMW_Z4_M40i.webp');


INSERT INTO cars (name, model, fuel,image) VALUES
('BMW_i3','I-series','FULL-ELECTRIC','BMW_i3.webp'),
('BMW_i4','I-series','FULL-ELECTRIC','BMW_i4.png'),
('BMW_iX','I-series','FULL-ELECTRIC','BMW_iX.webp');