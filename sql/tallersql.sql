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

SELECT cesta.articulo, stock.entrega FROM cesta LEFT JOIN stock on stock.articulo = cesta.articulo WHERE stock.entrega = 'Descatalogado';
