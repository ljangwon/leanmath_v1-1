CREATE TABLE account(
id INT(11) PRIMARY KEY AUTO_INCREMENT,
year YEAR(4),
purchase INT(11),
sale INT(11),
profit INT(11)
)ENGINE=INNODB;

INSERT INTO account (year,purchase,sale,profit) VALUES
('2013','2000','3000','1000'),
('2014','4500','5000','500'),
('2015','3000','4500','1500'),
('2016','2000','3000','1000'),
('2017','2000','4000','2000'),
('2018','2200','3000','800'),
('2019','5000','7000','2000');