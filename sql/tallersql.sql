--  T03.001- Código	y	nombre	de	los	artículos con	un	precio	entre	400	y	500	euros.  --

SELECT articulo.cod, articulo.nombre, articulo.pvp FROM articulo WHERE articulo.pvp > 400 AND articulo.pvp < 500;

-- T03.002- Código	y	nombre	de	los	artículos con	precio	415,	129,	1259	o	3995.-- 

SELECT articulo.cod, articulo.nombre, articulo.pvp FROM articulo WHERE articulo.pvp IN (415, 129, 1259, 3995);

--T03.003- Código	y	nombre	de	las	provincias	que	no	son	Huelva,	Sevilla,	Asturias	ni	 Barcelona.--

SELECT provincia.codp, provincia.nombre FROM provincia WHERE provincia.nombre NOT IN ('Huelva', 'Sevilla', 'Asturias', 'Barcelona');

-- T03.004- Código	de	la	provincia	Alicante. --

SELECT provincia.codp, provincia.nombre FROM provincia WHERE provincia.nombre = 'Alicante';

-- T03.005- Obtener	el	código,	nombre	y	pvp	de	los	artículos cuya	marca	comience	por	S. --

SELECT articulo.cod, articulo.nombre, articulo.pvp FROM articulo WHERE articulo.marca LIKE 'S%';

-- T03.006- Información	sobre	los	usuarios	cuyo	email	es	de	la	eps.-- 

SELECT * FROM usuario WHERE usuario.email LIKE '%eps%';

-- T03.007- Código,	nombre	y	resolución	de	los	televisores	cuya	pantalla	no	esté	entre	22	y	42.--

SELECT tv.cod, articulo.nombre, tv.pantalla FROM tv LEFT JOIN articulo ON tv.cod = articulo.cod WHERE tv.pantalla < 22 OR tv.pantalla > 42;

--T03.008- Código	y	nombre	de	los	televisores	cuyo	panel	sea	tipo	LED	y	su	precio	no	supere	 los	1000	euros. --

SELECT tv.cod, articulo.nombre, tv.panel FROM tv INNER JOIN articulo ON tv.cod = articulo.cod WHERE tv.panel = 'televisor LED' and articulo.pvp <= 1000;

-- T03.009- Email	de	los	usuarios	cuyo	código	postal	no	sea	02012,	02018	o	02032. --

SELECT usuario.email, usuario.codpos FROM usuario WHERE usuario.codpos NOT IN (02012, 02018, 02032);

-- T03.010- Código	y	nombre	de	los	packs	de	los	que	se	conoce	qué	artículos los	componen. -- 

SELECT pack.cod, articulo.nombre from pack INNER JOIN articulo ON pack.cod = articulo.cod;

-- T03.011- ¿Hay	algún	artículo	en	cesta	que	esté	descatalogado? -- 

SELECT cesta.articulo, stock.entrega FROM cesta INNER JOIN stock ON cesta.articulo = stock.articulo;

--T03.012- Código,	nombre	y	pvp	de	las	cámaras	de	tipo	compacta--

SELECT camara.cod, articulo.nombre, camara.tipo FROM camara INNER JOIN articulo ON articulo.cod = camara.cod WHERE camara.tipo LIKE '%compacta%';

-- T03.013- Código,	nombre	y	diferencia	entre	pvp	y	precio	de	los	artículos que	hayan	sido solicitados	en algún	pedido	a	un	precio	distinto	de	su	precio	de	venta.--

SELECT articulo.cod, articulo.nombre, (linped.precio - articulo.pvp) as diferencia_precio FROM articulo INNER JOIN linped ON linped.articulo = articulo.cod;

-- T03.014- Número	de	pedido, fecha	y	nombre	y	apellidos	del	usuario	que	solicita	el	pedido,	 para	aquellos pedidos	solicitados	por	algún	usuario	de	apellido	M.--

SELECT pedido.numPedido, pedido.fecha, usuario.nombre, usuario.apellidos FROM pedido INNER JOIN usuario ON usuario.email = pedido.usuario WHERE usuario.apellidos LIKE '%artinez%';

-- T03.015- Código,	nombre	y	marca	del	artículo	más	caro. --

SELECT articulo.cod, articulo.nombre, articulo.marca FROM articulo WHERE articulo.pvp = (SELECT MAX(articulo.pvp) from articulo);

-- T03.016- Nombre,	marca	y	resolución de	las	cámaras	que	nunca	se	han	solicitado. --

SELECT camara.cod, articulo.nombre, articulo.marca, linped.numPedido FROM camara LEFT JOIN linped ON camara.cod = linped.articulo INNER JOIN articulo ON articulo.cod = camara.cod WHERE linped.articulo is null;

-- T03.017- Código,	nombre,	tipo	y	marca	de	las	cámaras	de	marca	Nikon,	LG	o	Sigma --

SELECT articulo.cod, articulo.nombre, camara.tipo, articulo.marca FROM articulo INNER JOIN camara ON camara.cod = articulo.cod WHERE articulo.marca IN('Nikon', 'Sigma', 'LG');

-- T03.018- Código,	nombre	y	pvp	de	la	cámara	más	cara	de	entre	las	de	tipo	réflex.--

SELECT articulo.cod, articulo.nombre, articulo.pvp FROM articulo INNER JOIN camara ON camara.cod = articulo.cod WHERE camara.tipo LIKE '%réflex%' ORDER BY `pvp` DESC LIMIT 1;

-- T03.019- Marcas	de	las	que	no	existe	ningún	televisor	en	nuestra	base	de	datos.-- 

SELECT DISTINCT articulo.marca
FROM articulo
WHERE articulo.marca NOT IN (
    SELECT articulo.marca
    FROM articulo
    INNER JOIN tv ON tv.cod = articulo.cod
);

-- T03.020- Código,	nombre	y	disponibilidad	de	los	artículos	con	menor	disponibilidad	de	 entre	los	que pueden	estar	disponibles	en	24	horas. -- 

SELECT articulo.cod, articulo.nombre, stock.disponible FROM articulo INNER JOIN stock ON stock.articulo = articulo.cod WHERE stock.entrega = '24 horas' ORDER BY stock.disponible ASC;

-- T03.021- Nombre	de	los	artículos	cuyo	nombre	contenga	la	palabra	EOS.-- 

SELECT articulo.nombre FROM articulo WHERE articulo.nombre LIKE '%EOS%';

-- T03.022- Tipo	y	focal	de	los	objetivos	que	se	monten	en	una	cámara	Canon	sea	cual	sea	el	modelo. --




-- T03.023- Nombre	de	los	artículos	cuyo	precio	sea	mayor	de	100	pero	menor o	igual	que	 200.-- 

SELECT articulo.nombre, articulo.pvp FROM articulo WHERE articulo.pvp BETWEEN 101 and 200 ORDER BY `pvp` DESC;

--T03.024- Nombre	de	los	artículos	cuyo	precio	sea	mayor	o	igual	que	100	pero	menor	o	 igual	que	300.--

SELECT articulo.nombre, articulo.pvp FROM articulo WHERE articulo.pvp BETWEEN 100 and 300 ORDER BY `pvp` DESC;


-- T03.025- Nombre	de	las	cámaras	cuya	marca	no	comience	por	la	letra	S.-- 

SELECT articulo.nombre, articulo.marca FROM articulo INNER JOIN camara ON articulo.cod = camara.cod WHERE articulo.marca NOT LIKE 's%'  ORDER BY `articulo`.`marca` ASC;

-- T04.001- Toda	la	información	de	los	pedidos	anteriores	a	octubre	de	2010--

SELECT * FROM pedido WHERE pedido.fecha < '2010-10-01';

-- T04.002- Toda	la	información	de	los	pedidos	posteriores	a	agosto	de	2010. --

SELECT * FROM pedido WHERE pedido.fecha < '2010-08-01';

-- T04.003- Toda	la	información	de	los	pedidos	realizados	entre	agosto	y	octubre	de	2010.--

SELECT * FROM pedido WHERE pedido.fecha BETWEEN '2010-08-01' and '2010-10-31';

-- T04.004- Toda	la	información	de	los	pedidos	realizados	el	3	de	marzo	o	el	27	de	octubre	 de	2010. --

SELECT * FROM pedido WHERE pedido.fecha BETWEEN '2010-03-03' and '2010-10-27';

-- T04.005- Toda	la	información	de	los	pedidos	realizados	el	3	de	marzo	o	el	27	de	octubre	 de	2010,	y	que	han	sido	realizados	por	usuarios	del	dominio	"cazurren"--

SELECT * FROM pedido WHERE pedido.fecha BETWEEN '2010-03-03' and '2010-10-27' AND pedido.usuario LIKE '%cazurren%';

-- T04.006- ¿En	qué	día	y	hora	vivimos? --

SELECT CURRENT_TIMESTAMP AS fecha_y_hora_actual;


-- T04.007- 21	de	febrero	de	2011	en	formato	dd/mm/aaaa-- 

    SELECT DATE_FORMAT('2011-02-21', '%d/%m/%Y') AS fecha_formateada;

-- T04.008- 31	de	febrero	de	2011	en	formato	dd/mm/aaaa-- 


    SELECT DATE_FORMAT('2011-02-31', '%d/%m/%Y') AS fecha_formateada;




















