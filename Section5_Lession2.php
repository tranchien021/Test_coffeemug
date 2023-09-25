Câu lệnh SQL inser random
DELIMITER $$
CREATE PROCEDURE InsertRand(IN NumRows INT, IN name INT, IN email INT)
    BEGIN
        DECLARE i INT;
        SET i = 1;
        START TRANSACTION;
        WHILE i <= NumRows DO
            INSERT INTO users VALUES (name, email);
            SET i = i + 1;
        END WHILE;
        COMMIT;
    END$$
DELIMITER ;

CALL InsertRand(10, 'Chien', 'demo@gmail.com');