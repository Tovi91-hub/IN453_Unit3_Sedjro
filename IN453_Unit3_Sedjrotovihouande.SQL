CREATE USER 'IN453A'@'localhost' IDENTIFIED BY 'PasswordA123!';
CREATE USER 'IN453B'@'localhost' IDENTIFIED BY 'PasswordB123!';
CREATE USER 'IN453C'@'localhost' IDENTIFIED BY 'PasswordC123!';

GRANT SELECT ON IN453.IN453A TO 'IN453A'@'localhost';
GRANT SELECT ON IN453.IN453B TO 'IN453A'@'localhost';
GRANT SELECT ON IN453.IN453C TO 'IN453A'@'localhost';

GRANT SELECT ON IN453.IN453B TO 'IN453B'@'localhost';

GRANT SELECT ON IN453.IN453C TO 'IN453C'@'localhost';

FLUSH PRIVILEGES;