DELIMITER //
CREATE PROCEDURE actualizarPrecios()
BEGIN
	DECLARE contador INT DEFAULT 1;
    DECLARE limite INT DEFAULT 0;
	SELECT MAX(id_articulo) INTO limite FROM novedades;
    SELECT MIN(id_articulo) INTO contador FROM novedades;
    WHILE contador <= limite DO
    	IF 
    	UPDATE articulos SET precio = (SELECT precio FROM novedades WHERE id_articulo = contador ) WHERE id_articulo = contador;

END
//
DELIMITER ;	