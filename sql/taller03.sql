SELECT empleados.id_empleado, COUNT(ventas.id_venta) as total_ventas FROM empleados INNER JOIN ventas ON ventas.id_empleado = empleados.id_empleado GROUP BY empleados.id_empleado HAVING total_ventas > 1;


SELECT empleados.id_empleado, SUM(ventas.cantidad) as total_productos_vendidos FROM empleados INNER JOIN ventas ON ventas.id_empleado = empleados.id_empleado GROUP BY empleados.id_empleado HAVING total_productos_vendidos >5;

SELECT empleados.id_empleado, empleados.nombre_empleado, SUM(ventas.cantidad) as total_productos_vendidos FROM empleados INNER JOIN ventas ON ventas.id_empleado = empleados.id_empleado GROUP BY empleados.id_empleado HAVING total_productos_vendidos >5;

SELECT empleados.id_empleado, empleados.nombre_empleado, SUM(ventas.cantidad * productos.precio) as total_vendido FROM ventas INNER JOIN empleados ON empleados.id_empleado = ventas.id_empleado INNER JOIN productos ON productos.id_producto = ventas.id_producto GROUP BY empleados.id_empleado HAVING total_vendido >= 1000000;

SELECT productos.nombre_producto, COUNT(ventas.id_producto) as veces_vendido FROM productos INNER JOIN ventas ON ventas.id_producto = productos.id_producto GROUP BY productos.id_producto;

SELECT productos.nombre_producto, SUM(ventas.cantidad) as veces_vendido FROM productos INNER JOIN ventas ON ventas.id_producto = productos.id_producto GROUP BY productos.id_producto HAVING veces_vendido > 2;

SELECT empleados.nombre_empleado, SUM(ventas.cantidad) as aspiradoras_vendidas FROM empleados LEFT JOIN ventas on ventas.id_empleado = empleados.id_empleado WHERE ventas.id_producto = '1' GROUP BY empleados.id_empleado HAVING aspiradoras_vendidas >= 1;

SELECT empleados.nombre_empleado, SUM(ventas.cantidad) as aspiradoras_vendidas FROM empleados LEFT JOIN ventas on ventas.id_empleado = empleados.id_empleado WHERE ventas.id_producto = '1' GROUP BY empleados.id_empleado HAVING aspiradoras_vendidas >= 2;

SELECT ventas.fecha, COUNT(ventas.id_venta) as total_ventas_fecha FROM ventas GROUP BY ventas.fecha ORDER BY total_ventas_fecha DESC LIMIT 1;



