-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bdjwiki1.2
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bitacora_codigo`
--

DROP TABLE IF EXISTS `bitacora_codigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bitacora_codigo` (
  `idbitacora_codigo` int NOT NULL,
  `fecha` datetime NOT NULL,
  `idcodigo` int NOT NULL,
  `idusuario` int NOT NULL,
  PRIMARY KEY (`idbitacora_codigo`),
  KEY `fk_bitacora_codigo_codigo1_idx` (`idcodigo`),
  KEY `fk_bitacora_codigo_usuario1_idx` (`idusuario`),
  CONSTRAINT `fk_bitacora_codigo_codigo1` FOREIGN KEY (`idcodigo`) REFERENCES `codigo` (`idcodigo`),
  CONSTRAINT `fk_bitacora_codigo_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora_codigo`
--

LOCK TABLES `bitacora_codigo` WRITE;
/*!40000 ALTER TABLE `bitacora_codigo` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora_codigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora_parrafo`
--

DROP TABLE IF EXISTS `bitacora_parrafo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bitacora_parrafo` (
  `idbitacora` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `idusuario` int NOT NULL,
  `idparrafo` int NOT NULL,
  PRIMARY KEY (`idbitacora`),
  KEY `fk_bitacora_usuario1_idx` (`idusuario`),
  KEY `fk_bitacora_parrafo_parrafo1_idx` (`idparrafo`),
  CONSTRAINT `fk_bitacora_parrafo_parrafo1` FOREIGN KEY (`idparrafo`) REFERENCES `parrafo` (`idparrafo`),
  CONSTRAINT `fk_bitacora_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora_parrafo`
--

LOCK TABLES `bitacora_parrafo` WRITE;
/*!40000 ALTER TABLE `bitacora_parrafo` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora_parrafo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codigo`
--

DROP TABLE IF EXISTS `codigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `codigo` (
  `idcodigo` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `explicacion` text NOT NULL,
  `idtema` int NOT NULL,
  PRIMARY KEY (`idcodigo`),
  KEY `fk_codigo_tema1_idx` (`idtema`),
  CONSTRAINT `fk_codigo_tema1` FOREIGN KEY (`idtema`) REFERENCES `tema` (`idtema`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigo`
--

LOCK TABLES `codigo` WRITE;
/*!40000 ALTER TABLE `codigo` DISABLE KEYS */;
INSERT INTO `codigo` VALUES (1,'¿Cómo declarar variables?','cod1.png','Podemos declarar las variables en Java de la siguiente manera: tipo de dato (tipo de datos que se pueden almacenar en esta variable), nombre_variable (nombre dado a la variable) y el valor (es el valor inicial almacenado en la variable).',1),(2,'Operaciones aritméticas en Java','cod2.png','En este programa se implementan los operadores artitméticos mas utilizados en java, haciendo uso de dos variables tipo int, después de realizar cada operación se manda a imprimir el resultado de cada una de estas operaciones',2),(5,'Librería Scanner','cod3.png','Se implementa un pequeño programa para ejemplificar el uso de la librería Scanner en java, introduciendo datos mediante el teclado para posteriormente manipularlos',4),(6,'Estructuras condicionales','cod4.png','Se implementa la sentencia if-else para comparar un numero, simulando que es una edad para determinar si una persona es mayor o menor de edad',3),(7,'Estructura For','cod5.png','Se implementa la estructura for en un pequeño programa para imprimir el incremento de 0 a 10 y el dedecremento de 10 a 0',5),(8,'Arrays','cod6.jpg','Se implementa un programa donde se genera un array de tipo int, para posteriormente imprimir cada uno de los datos almacenados en las posiciones',7),(9,'Cadenas de caracteres','cod7.png','Se implementa un programa en javva, el cual calcula el tamaño de una cadena con la función .length() y para imprimirlo en consola',6),(10,'Conversion de datos','cod8.jpg','Se implementa un programa en java para cmvertir un dato double a int mediante un casting',9),(11,'Menus en Java','cod9.png','Se hace uso de un programa en java para trabaja con menús en swing',10),(12,'Eventos','cod10.png','Se hace uso de un evvento para crear un arrayList() mediante Strings declarados anteriormente',12),(13,'Empaquetado de aplicaciones','cod11.png','Representación gráfica del empaquetado de aplicaiones implementado por JAVA',13);
/*!40000 ALTER TABLE `codigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel`
--

DROP TABLE IF EXISTS `nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nivel` (
  `idnivel` int NOT NULL AUTO_INCREMENT,
  `nivel` varchar(20) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`idnivel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel`
--

LOCK TABLES `nivel` WRITE;
/*!40000 ALTER TABLE `nivel` DISABLE KEYS */;
INSERT INTO `nivel` VALUES (1,'Nivel Básico','Básico'),(2,'Nivel Intermedio',NULL),(3,'Nivel Avanzado',NULL);
/*!40000 ALTER TABLE `nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parrafo`
--

DROP TABLE IF EXISTS `parrafo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parrafo` (
  `idparrafo` int NOT NULL AUTO_INCREMENT,
  `parrafo` text NOT NULL,
  `no_parrafo` int NOT NULL,
  `idtema` int NOT NULL,
  PRIMARY KEY (`idparrafo`),
  KEY `fk_parrafo_tema1_idx` (`idtema`),
  CONSTRAINT `fk_parrafo_tema1` FOREIGN KEY (`idtema`) REFERENCES `tema` (`idtema`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parrafo`
--

LOCK TABLES `parrafo` WRITE;
/*!40000 ALTER TABLE `parrafo` DISABLE KEYS */;
INSERT INTO `parrafo` VALUES (1,'El lenguaje de programación Java tiene varios operadores aritméticos para los datos numéricos enteros y reales.',1,2),(2,'Los operadores artimeticos que comunmente utilizamos en Java son: + (suma), - (resta), * (producto), / (división), % (módulo  o residuo de división)',2,2),(4,'Scanner es una clase en el paquete java.util utilizada para obtener la entrada de los tipos primitivos como int, double etc. y también String. Es la forma más fácil de leer datos en un programa Java, aunque no es muy eficiente si se quiere un método de entrada para escenarios donde el tiempo es una restricción, como en la programación competitiva. ',1,4),(15,'En resumen: ',2,4),(16,'•	Para crear un objeto de clase Scanner, normalmente pasamos el objeto predefinido System.in, que representa el flujo de entrada estándar. Podemos pasar un objeto de clase File si queremos leer la entrada de un archivo. ',3,4),(17,'•	Para leer valores numéricos de un determinado tipo de datos XYZ, la función que se utilizará es nextXYZ(). Por ejemplo, para leer un valor de tipo short, podemos usar nextShort(). ',5,4),(18,'•	Para leer cadenas (strings), usamos nextLine(). ',4,4),(19,'•	Para leer un solo carácter, se usa next().charAt(0). La función next() devuelve el siguiente token/palabra en la entrada como cadena y la función charAt(0) devuelve el primer carácter de esa cadena. ',6,4),(20,'Las estructuras condicionales nos permiten ejecutar una serie de instrucciones si cumple una determinada condición que nosotros le indiquemos. Es importante recordar que la condición debe dar un resultado booleano, por lo que lo mas normal es usar operadores relacionales y condicionales.',1,3),(21,'Existen varios tipos de estructuras condicionales: ',2,3),(22,'También conocidos como estructuras de control repetitivas, en java las emplearemos para modificar el flujo secuencial de un programa. Esto es, el orden en el que se van ejecutando las instrucciones de este. ',1,5),(23,'En un programa, las instrucciones se ejecutan de arriba abajo, y de izquierda a derecha, según el orden en que aparezcan las mismas. Los distintos bloques de instrucciones de nuestro programa, seguirán este flujo secuencial para ejecutar las instrucciones.',2,5),(24,'Sin embargo, van a existir ocasiones en las que necesitemos romper este flujo secuencial. Estas pueden ser de muy diverso tipo, puede que necesitemos tomar una decisión entre una o varias opciones posibles, o a lo mejor necesitamos realizar algunas instrucciones varias veces. Por tanto, necesitamos ciertas estructuras que nos permitan interrumpir el flujo secuencial del programa, y pasar a ejecutar otros bloques de código. ',3,5),(25,'Un array es simplemente una variable que puede contener valores múltiples, a diferencia de una variable regular que solo puede contener un único valor. ',1,7),(26,'•	En Java, todas los arrays se asignan dinámicamente. ',2,7),(27,'•	Como los arrays son objetos en Java, cada array tiene asociado una variable de instancia de longitud (length) que contiene la cantidad de elementos que la matriz puede contener. (En otras palabras, length contiene el tamaño de la matriz.) ',3,7),(28,'•	Una variable array en Java se declara como otras variables con corchetes [] después del tipo de datos',4,7),(29,'•	Las variables en el array están ordenadas y cada una tiene un índice que comienza desde 0. ',5,7),(30,'•	El array Java también se puede usar como un campo estático, una variable local o un parámetro de método. ',6,7),(31,'•	El tamaño de un array debe especificarse mediante un valor int y no, long o short. ',7,7),(32,'•	La superclase directa de un tipo de array es Object. Cada tipo de array implementa las interfaces Cloneable y java.io.Serializable. ',8,7),(33,'•	El array puede contener tipos de datos primitivos así como también objetos de una clase según la definición del array. En el caso de los tipos de datos primitivos, los valores reales se almacenan en ubicaciones de memoria contigua. En el caso de los objetos de una clase, los objetos reales se almacenan en heap. ',9,7),(34,'Una cadena es una secuencia de caracteres. Las cadenas son una parte fundamental de la mayoría de los programas, así pues Java tiene varias características incorporadas que facilitan la manipulación de cadenas. Java tiene una clase incorporada en el paquete java.lang que encapsula las estructuras de datos de una cadena. Esta clase, llamada String es la representación como objeto de una matriz de caracteres que no se puede cambiar. Hay una clase que la acompaña, llamada StringBuffer, que se utiliza para crear cadenas que pueden ser manipuladas después de ser creadas. ',1,6),(35,'Cuando asigna valor de un tipo de datos a otro, los dos tipos pueden no ser compatibles entre sí. Si los tipos de datos son compatibles, entonces Java realizará la conversión (automáticamente) que se conoce como Conversión automática de tipos y, en caso negativo, deberá hacer un casting o convertirlo explícitamente. Por ejemplo, asignando un valor int a una variable long',1,9),(36,'No hay ningún método para diseñar un buen interfaz de usuario, todo depende del programador. Los Menús son siempre el centro de la aplicación, porque son el medio de que el usuario interactúe con esa aplicación. La diferencia entre una aplicación útil y otra que es totalmente frustrante radica en la organización de los menús, pero eso, las reglas del diseño de un buen árbol de menús, no están claras. ',1,10),(37,'Un evento en Java (plataforma de programación) es cualquier objeto que se crea cuando algo cambia dentro de la interfaz gráfica de un usuario. Si un usuario hace clic en un botón o en un cuadro combinado, o escribe caracteres en un campo de texto, entre otras cosas, activa un evento y crea el objeto. Este comportamiento es parte del mecanismo de manejo de eventos de la plataforma y se incluye en la biblioteca GUI de Swing (la biblioteca de interfaces gráficas con la que trabaja Java). ',1,12);
/*!40000 ALTER TABLE `parrafo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permiso`
--

DROP TABLE IF EXISTS `permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permiso` (
  `idpermiso` int NOT NULL AUTO_INCREMENT,
  `permiso` varchar(45) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idpermiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permiso`
--

LOCK TABLES `permiso` WRITE;
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referencia`
--

DROP TABLE IF EXISTS `referencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `referencia` (
  `idreferencia` int NOT NULL AUTO_INCREMENT,
  `referencia` varchar(300) NOT NULL,
  `idtema` int NOT NULL,
  PRIMARY KEY (`idreferencia`),
  KEY `idtema` (`idtema`),
  CONSTRAINT `referencia_ibfk_1` FOREIGN KEY (`idtema`) REFERENCES `tema` (`idtema`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referencia`
--

LOCK TABLES `referencia` WRITE;
/*!40000 ALTER TABLE `referencia` DISABLE KEYS */;
INSERT INTO `referencia` VALUES (1,'Walton, A. (2022, 17 febrero). Declaración y Tipos de Variables en Java. Java desde Cero. https://javadesdecero.es/basico/declaracion-y-tipos-variables/',1),(2,'Walton, A. (2022, 17 febrero). Todos los Operadores en Java con Ejemplos. Java desde Cero. https://javadesdecero.es/basico/operadores-en-java-ejemplos/',2),(3,'Walton, A. (2022, 17 febrero). Estructuras Condicionales Java: if, if-else, switch, break. https://javadesdecero.es/basico/if-else-switch-break-continue-jump-java/',3),(4,'Walton, A. (2020, 27 abril). Clase Scanner en Java (con Ejemplos). Java desde Cero. https://javadesdecero.es/io/clase-scanner-ejemplos/',4),(5,'Estructuras de control en Java. (2021, 18 septiembre). DATA SCIENCE. https://dat-science.com/estructuras-de-control-en-java/ ',5),(6,'Es Hora de Aprender lo que es el manejo de cadenas (String) en java. (s. f.). BreatheCode. https://content.breatheco.de/es/lesson/working-with-strings-in-java#%C2%BFque-es-una-cadena',6),(7,'Walton, A. (2022, 17 febrero). Arrays en Java (Con ejemplos). Java desde Cero. https://javadesdecero.es/arrays/unidimensionales-multidimensionales/',7),(8,'A. (2020, 27 noviembre). Interfaces gráficas en java. Clases de Informática Web. https://www.clasesdeinformaticaweb.com/java-desde-cero/interfaces-graficas-en-java/',8),(9,'Walton, A. (2022, 17 febrero). Conversión de tipos de datos en Java (Casting). Java desde Cero. https://javadesdecero.es/basico/conversion-tipo-ejemplos-casting/',9),(10,'Tutorial de Java - AWT (Menús). (s. f.). Tutorial de Java. http://dis.um.es/~bmoros/Tutorial/parte13/cap13-6.html',10),(12,'I. (2021, 18 agosto). ¿Qué es un evento JAVA? YuBrain. https://www.yubrain.com/ciencias-de-la-computacion/evento/ ',12),(13,'Silva, D. (2016, 16 abril). Empaquetar una aplicación para distribuir, desde NetBeans. Apuntes de Java. https://www.apuntesdejava.com/2010/06/empaquetar-una-aplicacion-para.html ',13),(14,'Motu, A. [Informática con Abaga Motu]. (2021, 27 octubre). APRENDE JAVA (7): TIPOS DE VARIABLES EN JAVA Y TIPOS DE DATOS EN JAVA [Vídeo]. YouTube. https://www.youtube.com/watch?v=HTRWQmOxB1Y',1),(15,'Acevedo Gutiérrez, R. [Rodrigo Acevedo Gutiérrez]. (2012, 16 abril). Operadores Aritmeticos en Java (Suma, Resta, Multiplicación y División) [Vídeo]. YouTube. https://www.youtube.com/watch?v=URYAWHvco3s',2),(16,'BACK VI. (2021, 10 marzo).CONDICIONALES en JAVA (IF ELSE)’ y OPERADORES LÓGICOS usando NETBEANS | #JAVA #SHORT [2021] [Vídeo]. YouTube. https://www.youtube.com/watch?v=Ltvrv9u6w40',3),(17,'Informática con Abaga Motu. (2021, 25 noviembre). APRENDE JAVA (8): LEER DATOS desde TECLADO en JAVA con la utilidad Scanner (pedir texto en java) [Vídeo]. YouTube. https://www.youtube.com/watch?v=IcZRdQaZROw&list=WL',4),(18,'latincoder. (2010, 11 octubre). Tutorial java:ciclos for y while [Vídeo]. YouTube. https://www.youtube.com/watch?v=IEoqjL0MDt0',5),(19,'ProgramarYa - By JuanDMeGon. (2020, 20 julio). Cadenas de Caracteres String en Java [Vídeo]. YouTube. https://www.youtube.com/watch?v=5-o9IzfTNTA',6),(20,'Manual Web. (2021, 12 noviembre). Tipos de Datos Primitivos en Java. Recuperado 27 de marzo de 2022, de https://www.manualweb.net/java/tipos-datos-primitivos-java/',1),(21,'Garro, A. (s. f.). Operadores | Java. JAVA. Recuperado 27 de marzo de 2022, de https://www.arkaitzgarro.com/java/capitulo-4.html',2);
/*!40000 ALTER TABLE `referencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `idrol` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Administrador','Administrator app'),(2,'Colaborador','colaborador app');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_permiso`
--

DROP TABLE IF EXISTS `rol_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol_permiso` (
  `idrol_permiso` int NOT NULL AUTO_INCREMENT,
  `idrol` int NOT NULL,
  `idpermiso` int NOT NULL,
  PRIMARY KEY (`idrol_permiso`),
  KEY `fk_rol_has_permiso_permiso1_idx` (`idpermiso`),
  KEY `fk_rol_has_permiso_rol1_idx` (`idrol`),
  CONSTRAINT `fk_rol_has_permiso_permiso1` FOREIGN KEY (`idpermiso`) REFERENCES `permiso` (`idpermiso`),
  CONSTRAINT `fk_rol_has_permiso_rol1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_permiso`
--

LOCK TABLES `rol_permiso` WRITE;
/*!40000 ALTER TABLE `rol_permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subparrafo`
--

DROP TABLE IF EXISTS `subparrafo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subparrafo` (
  `idsubparrafo` int NOT NULL AUTO_INCREMENT,
  `subparrafo` text NOT NULL,
  `no_subparrafo` int NOT NULL,
  `idsubtema` int NOT NULL,
  PRIMARY KEY (`idsubparrafo`),
  KEY `fk_subparrafo_idsubtema_idx` (`idsubtema`),
  CONSTRAINT `fk_subparrafo_idsubtema` FOREIGN KEY (`idsubtema`) REFERENCES `subtema` (`idsubtema`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subparrafo`
--

LOCK TABLES `subparrafo` WRITE;
/*!40000 ALTER TABLE `subparrafo` DISABLE KEYS */;
INSERT INTO `subparrafo` VALUES (1,'Una variable es el nombre dado a una ubicación de memoria. Es la unidad básica de almacenamiento. En todo lenguaje de programación las variables son un elemento imprescindible que utilizaremos con el fin de almacenar datos. Cualquier programa, desde los más simples, necesita almacenar y manipular datos.',1,1),(2,'Una variable definida dentro de un bloque, método o constructor se llama variable local. ',1,2),(3,'Estas variables se crean cuando el bloque ingresado o método se llama y destruye después de salir del bloque o cuando la llamada regresa del método. El alcance de estas variables solo existe dentro del bloque en el que se declara la variable, es decir, podemos acceder a estas variables solo dentro de ese bloque.',2,2),(4,'Las variables de instancia son variables no estáticas y se declaran en una clase fuera de cualquier ',1,3),(5,'Como las variables de instancia se declaran en una clase, estas variables se crean cuando un objeto de la clase se crea y se destruye cuando se destruye el objeto. A diferencia de las variables locales, podemos usar especificadores de acceso para variables de instancia. Si no especificamos ningún especificador de acceso, se utilizará el especificador de acceso predeterminado.',2,3),(6,'Las variables estáticas también se conocen como variables de clase. ',1,4),(12,'Estas variables se declaran de forma similar a las variables de instancia, la diferencia es que las variables estáticas se declaran utilizando la palabra clave static dentro de una clase fuera de cualquier constructor o bloque de métodos. A diferencia de las variables de instancia, solo podemos tener una copia de una variable estática por clase, independientemente de cuántos objetos creemos.',2,4),(13,'Las variables estáticas se crean al inicio de la ejecución del programa y se destruyen automáticamente cuando finaliza la ejecución',3,4),(14,' Java es un lenguaje de tipado estático. Es decir, se define el tipo de dato de la variable a la hora de definir esta. Es por ello que todas las variables tendrán un tipo de dato asignado.',1,5),(15,'El lenguaje Java da de base una serie de tipos de datos primitivos: byte, short, int, long, float, double, boolean y char',2,5),(16,'Byte: Representa un tipo de dato de 8 bits con signo. De tal manera que puede almacenar los valores numéricos de -128 a 127 (ambos inclusive).',3,5),(17,'Short: Representa un tipo de dato de 16 bits con signo. De esta manera almacena valores numéricos de -32.768 a 32.767.',4,5),(18,'Int: Es un tipo de dato de 32 bits con signo para almacenar valores numéricos. Cuyo valor mínimo es -231 y el valor máximo 231-1.',5,5),(19,'Long: Es un tipo de dato de 64 bits con signo que almacena valores numéricos entre -263 a 263-1',6,5),(20,'Float: Es un tipo dato para almacenar números en coma flotante con precisión simple de 32 bits.',7,5),(21,'Double: Es un tipo de dato para almacenar números en coma flotante con doble precisión de 64 bits.',8,5),(22,'Boolean: Sirve para definir tipos de datos booleanos. Es decir, aquellos que tienen un valor de true o false. Ocupa 1 bit de información.',9,5),(23,'Char: Es un tipo de datos que representa a un carácter Unicode sencillo de 16 bits.',10,5),(24,'El resultado exacto de las operaciones aritméticas en Java depende de los tipos de operando involucrados. Por eso se deben considerar los siguientes puntos:',1,6),(25,'•   El resultado es de tipo long si, al menos, uno de los operandos es de tipo long y ninguno es real (float o double).',2,6),(26,'•   El resultado es de tipo int si ninguno de los operandos es de tipo long y tampoco es real (float o double).',3,6),(27,'•   El resultado es de tipo double si, al menos, uno de los operandos es de tipo double.',4,6),(28,'•   El resultado es de tipo float si, al menos, uno de los operandos es de tipo float y ninguno es double.',5,6),(29,'•   El formato empleado para la representación de datos enteros es el complemento a dos. En la aritmética entera no se producen nunca desbordamientos (overflow) aunque el resultado sobrepase el intervalo de representación (int o long).',6,6),(30,'•   La división entera se trunca hacia 0. La división o el resto de dividir por cero es una operación válida que genera una excepción ArithmeticException que puede dar lugar a un error de ejecución y la consiguiente interrupción de la ejecución del programa.',7,6),(31,'•   La aritmética real (en coma flotante) puede desbordar al infinito (demasiado grande, overflow) o hacia cero (demasiado pequeño, underflow).',8,6),(32,'•   El resultado de una expresión inválida, por ejemplo, dividir infinito por infinito, no genera una excepción ni un error de ejecución: es un valor NaN (Not a Number).',9,6),(37,'La sentencia if es la declaración de toma de decisiones más simple. Se usa para decidir si una determinada declaración o bloque de enunciados se ejecutará o no; es decir, si una determinada condición es verdadera (true), se ejecutará un bloque de enunciado y, de ser falsa (false), no. ',1,8),(38,'La declaración if solo nos dice que, si una condición es verdadera ejecutará un bloque de instrucciones y si la condición es falsa, no lo hará. Pero, ¿y si queremos hacer otra cosa cuando la condición sea falsa? Aquí viene la declaración else. Podemos usar la instrucción else con la instrucción if para ejecutar un bloque de código cuando la condición es falsa. ',1,9),(39,'Una if anidado (nested-if) es una declaración if que se deriva de otro if o else. Las declaraciones if anidadas significan una instrucción if dentro de una declaración if. Sí, Java nos permite anidar las declaraciones if con if, es decir, podemos colocar una instrucción if dentro de otra instrucción if. ',1,10),(40,'Aquí, un usuario puede decidir entre múltiples opciones. Las sentencias if se ejecutan desde arriba hacia abajo. Tan pronto como una de las condiciones que controlan el if sea verdadera, se ejecuta la instrucción asociada con ese if, y el resto de la escalera se pasa por alto. Si ninguna de las condiciones es verdadera, se ejecutará la sentencia final else. ',1,11),(41,'La instrucción switch es una declaración de bifurcación de múltiples vías (selección múltiple). Proporciona una forma sencilla de enviar la ejecución a diferentes partes del código en función del valor de la expresión. ',1,12),(42,'Java dispone de algunas sentencias que ejecutan de manera recurrente un bloque de código, mientras se cumpla una cierta condición. Estas sentencias son: ',1,13),(43,'•	for ',2,13),(44,'•	while',3,13),(45,'•	do –while ',4,13),(46,'La sentencia for crea un bucle que se ejecuta mientras una determinada condición sea verdadera. Maneja un iterador que cambia su valor cada vez que se ejecuta el bucle. Finalmente saldremos de este cuando la condición se haga falsa. ',1,14),(47,'La sentencia while es la más sencilla de las estructuras de iteración. La iteración continuará hasta que su condición sea falsa. La condición tiene que tomar un valor booleano (verdadero o falso). Si este valor es verdadero, se ejecutará la sentencia. Concluida esta acción se vuelve a evaluar la condición. Proseguirán los ciclos hasta que la condición no cambie a falso.',1,15),(48,'Esta es una estructura de iteración preprueba, es decir primero se evalúa la condición antes de realizar cualquier acción. Si de entrada la condición es falsa nunca ejecutará el conjunto de sentencias.',2,15),(49,'Similar al bloque while, solo que el bloque de instrucciones se ejecuta al menos una vez, ya que la evaluación de la condición se hace tras cada ejecución del bloque de instrucciones',1,16),(50,'Un array unidimensional es una lista de variables relacionadas. Tales listas son comunes en la programación. Por ejemplo, puede usar un array unidimensional para almacenar los números de cuenta de los usuarios activos en una red. Otro array podría usarse para almacenar los promedios de bateo actuales para un equipo de béisbol. ',1,17),(51,'Los arrays unidimensionales son una forma de representar el concepto de matriz, que cuando tienen una dimensión se suelen conocer como vectores. Personalmente me gusta más llamarlos vectores, pero en Java ya existe una clase específica que se llama así, Vector, y como el término array está bastante extendido voy a seguir utilizándolo para referirme a esta estructura de datos.',2,17),(52,'Las arrays multidimensionales son arrays de arrays, donde cada elemento del array contiene la referencia de otro array. Se crea una matriz multidimensional al agregar un conjunto de corchetes ([]) por dimensión. ',1,18),(53,'El paquete java.lang contiene dos clases de cadenas: String y StringBuffer. La clase String se utiliza cuando se trabaja con cadenas que no pueden cambiar. Por otro lado, StringBuffer, se utiliza cuando se quiere manipular el contenido de una cadena. El entorno de desarrollo Java proporciona dos clases para manipular y almacenar datos del tipo carácter: String, para cadenas constantes, y StringBuffer, para cadenas que pueden cambiar. ',1,19),(54,'Como son constantes, los Strings son más económicos (utilizan menos memoria) que los StringBuffers y pueden ser compartidos. Por eso es importante utilizar String siempre que sea apropiado. ',2,19),(55,'Muchos Strings se crean a partir de cadenas literales. Cuando el compilador encuentra una serie de caracteres entre comillas (\" y \"), crea un objeto String cuyo valor es el propio texto. El esquema general es el siguiente: ',1,20),(56,'String nombre=\"Hola mundo\"; ',2,20),(57,'También se pueden crear objetos String como se haría con cualquier otro objeto Java: utilizando new',3,20),(58,'String s = new String(\"Hola Mundo.\"); ',4,20),(59,'Concatenación de cadenas Java permite concatenar cadenas fácilmente utilizando el operador +. El siguiente fragmento de código concatena tres cadenas para producir su salida: ',1,21),(60,'\"La entrada tiene \" + contador + \" caracteres.\" ',2,21),(61,'Dos de las cadenas concatenadas son cadenas literales: \"La entrada tiene \" y \" caracteres.\". La tercera cadena - la del medio- es realmente un entero que primero se convierte a cadena y luego se concatena con las otras.',3,21),(62,'Para extraer un único carácter de una cadena, se puede referir a un carácter indexado mediante el método charAt, la sintaxis es la siguiente Objeto_cadena.charAt(índice); ',1,22),(63,'Si se necesita extraer más de un carácter a la vez, puede utilizar el método getChars, que le permite especificar el índice del primer carácter y del último más uno que se desean copiar, además de la matriz char donde se desean colocar dichos caracteres. ',2,22),(64,'Si se desean comparar dos cadenas para ver si son iguales, puede utilizar el método equals de String. Devolverá true si el único parámetro está compuesto de los mismos caracteres que el objeto con el que se llama a equals. Una forma alternativa de equals llamada equalsIgnoreCase ignora si los caracteres de las cadenas que se comparan están en mayúsculas o minúsculas. ',1,23),(65,'El método equals y el operador == hacen dos pruebas completamente diferentes para la igualdad. Mientras que el método equals compara los caracteres contenidos en una String, el operador == compara dos referencias de objeto para ver si se refieren a la misma instancia. Por tanto, no podemos usar el signo == porque esta sería una comparación binaria de punteros a memoria y no nos devolvería el valor correcto ',1,24),(66,'Si lo que queremos es comparar cadenas para ordenarlas, una opción es usar el método compareTo() de la clase String. Este método devuelve 0 si ambas cadenas tienen el mismo contenido, negativo si el String es menor -va antes- que el parámetro que se le pasa y positivo si es mayor.  ',1,25),(67,'A veces es conveniente o necesario convertir un objeto a una cadena o String porque se necesitará pasarlo a un método que sólo acepta Strings. Por ejemplo, System.out.println() no acepta StringBuffers, por lo que necesita convertir el StringBuffer a String para poder imprimirlo. El método reverseIt() utiliza el método toString() de StringBuffer para convertirlo en un String antes de retornar.return dest.toString(); ',1,26),(68,'Todas las clases heredan toString() desde la clase Object y muchas clases del paquete java.lang sobrescriben este método para proporcionar una implementación más acorde con la propia clase. Por ejemplo, las clases Character, Integer, Boolean, etc.. sobrescriben toString() para proporcionar una representación en String de los objetos. ',2,26),(69,'La conversión de ampliación tiene lugar cuando dos tipos de datos se convierten automáticamente. Esto sucede cuando: ',1,27),(70,'•	Los dos tipos de datos son compatibles. ',2,27),(71,'•	Cuando asignamos el valor de un tipo de datos más pequeño a un tipo de datos más grande. ',3,27),(72,'Por ejemplo, en Java, los tipos de datos numéricos son compatibles entre sí, pero no se admite la conversión automática de tipo numérico a char o boolean. Además, char y boolean no son compatibles entre sí. ',4,27),(73,'Si queremos asignar un valor de tipo de dato más grande a un tipo de dato más pequeño, realizamos un casteo/casting o lo que se conoce como conversión de tipo explícito. ',1,28),(74,'Esto es útil para tipos de datos incompatibles donde la conversión automática no se puede realizar. ',2,28),(75,'char y int no son compatibles entre sí. Veamos luego cuando tratamos de convertir uno en otro. ',3,28),(76,'Al evaluar expresiones, el resultado se actualiza automáticamente a un tipo de datos más grande del operando. Pero si almacenamos ese resultado en un tipo de datos más pequeño, genera un error de tiempo de compilación, por lo que debemos «castear» el resultado. ',1,29),(77,'Esta clase no contiene campos, solamente tiene un constructor y dispone de una docena de métodos que están accesibles a todas sus subclases. ',1,30),(78,'Esta clase se emplea para instanciar los objetos que constituirán los elementos seleccionables del menú. No tiene campos y dispone de varios constructores.',1,31),(79,'Esta clase se emplea para instanciar los objetos que constituirán los elementos seleccionables del menú. No tiene campos y dispone de varios constructores',1,32),(80,'Esta clase se utiliza para instanciar un objeto que representa un acelerador de teclado, o una combinación de teclas rápidas, para un determinado MenuItem. No tiene campos y dispone de dos constructores. ',1,33),(81,'No tiene campos, sólo tiene un constructor público, y es la clase que representa el concepto que todo usuario tiene de la barra de menú que está presente en la mayoría de las aplicaciones gráficas basadas en ventanas. ',1,34),(82,'Esta clase se utiliza para instanciar objetos que puedan utilizarse como opciones en un menú. Al contrario que las opciones de menú que se han visto al hablar de objetos MenuItem, estas opciones tienen mucho más parentesco con las cajas de selección.',1,35),(83,'Esta clase se utiliza para instanciar objetos que funcionan como menús emergentes o pop-up. Una vez que el menú aparece en pantalla, el procesado de las opciones es el mismo que en el caso de los menús de persiana. ',1,36),(84,'Esta clase no tiene campos y proporciona un par de constructores y un par de métodos, de los cuales el más interesante es el método show(), que permite mostrar el menú emergente en una posición relativa al Componente origen. Este Componente origen debe estar contenido dentro de la jerarquía de padres de la clase PopupMenu. ',2,36),(85,'Para manejar los eventos en Java correctamente se deben conocer dos elementos fundamentales: el origen y el oyente del evento. ',1,37),(86,'El objeto que se crea cuando ocurre un evento se llama origen del evento. El oyente, por otro lado, es el objeto encargado de recibir los eventos y procesarlos en el momento que ocurren. Es importante destacar que Java facilita varios tipos de orígenes. ',2,37),(87,'Existen también varios tipos de eventos y oyentes en Java. Cada tipo de evento está directamente configurado o vinculado con un oyente específico. Por ejemplo, un tipo común de evento son los eventos de acción, representados por la clase de Java ActionEvent, que son activados cuando el usuario hace clic en un botón o en algún elemento de una lista. ',3,37),(88,'En las acciones del usuario se crea entonces un objeto correspondiente a la clase de ActionEvent, que a su vez corresponde a la acción relevante. En ese momento, este objeto comprende toda la información de origen del evento y la acción específica que ha realizado el usuario. Este objeto de evento transita después al método del objeto del ActionListener correspondiente, es decir, el oyente correspondiente. ',4,37),(89,'Cuando este procedimiento se ejecuta, se devuelve la respuesta de la GUI adecuada. Puede ser para abrir o cerrar un cuadro de diálogo, hacer una firma digital, descargar archivos o cualquier otra de las muchas acciones que están disponibles para un usuario en una interfaz. ',1,38),(90,'A continuación enumeramos y explicamos algunos de los tipos de eventos más comunes en Java: ',1,39),(91,'•	ActionEvent: representa a la acción de cuando se hace clic en un elemento gráfico, como un botón o elemento de una lista. Oyente relacionado: ActionListener. ',2,39),(92,'•	KeyEvent: representa a un evento en el que el usuario presiona, escribe o suelta una tecla. Oyente relacionado: KeyListener. ',3,39),(93,'•	WindowEvent: representa a cualquier evento relacionado con una ventana, por ejemplo, cuando una ventana está cerrada y es activada o desactivada. Oyente relacionado: WindowListener.',4,39),(94,'•	MouseEvent: representa cualquier evento relacionado con un mouse, como cuando se hace clic, doble clic, etc. Oyente relacionado: MouseListener. ',5,39),(95,'Es importante tener en cuenta que varios oyentes y fuentes de eventos son capaces de interactuar entre sí. Por ejemplo, un solo oyente puede llegar a registrar varios eventos, si son del mismo tipo. Esto significa que, para un conjunto similar de componentes que realizan el mismo tipo de acción, un detector de eventos podría manejarlos todos. De manera similar, un solo evento se puede vincular a múltiples oyentes, si eso se adapta al diseño del programa, aunque esto es mucho menos común. ',6,39),(96,'Si al hacer una aplicación Swing con NetBeans utilizamos diversas bibliotecas adicionales, el IDE nos puede crear una carpeta lista para distribuir a los usuarios incluyendo todas los .jars necesarios. Para ello  se hace clic derecho sobre el ícono del proyecto y selecciona \"Build\" (o Clean and Build) ',1,40),(97,'Al hacer esto, el NetBeans compila, y construye la carpeta \"dist\" para distribuir. Esta carpeta se encuentra en la misma carpeta del proyecto. Puede verla en el panel \"Files\" del NetBeans (Teclas Ctrl+2) ',2,40),(98,'Se puede hacer doble clic al archivo .jar para ejecutar la aplicación, pero funciona si es que en el computador del usuario no tiene algún descompresor de archivos asociado a los archivos .jar. La mejor manera es crear un archivo .bat que haga la llamada al comando java -jar  ',1,41),(99,'Para ello, entramos al panel \"Files\" (Ctrl+2) y buscamos el archivo build.xml. Esta es una extensión al .xml que utiliza el NetBeans para construir la aplicación. ',2,41);
/*!40000 ALTER TABLE `subparrafo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subtema`
--

DROP TABLE IF EXISTS `subtema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subtema` (
  `idsubtema` int NOT NULL AUTO_INCREMENT,
  `subtema` varchar(200) NOT NULL,
  `no_subtema` int NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idtema` int NOT NULL,
  PRIMARY KEY (`idsubtema`),
  KEY `idtema` (`idtema`),
  CONSTRAINT `subtema_ibfk_1` FOREIGN KEY (`idtema`) REFERENCES `tema` (`idtema`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtema`
--

LOCK TABLES `subtema` WRITE;
/*!40000 ALTER TABLE `subtema` DISABLE KEYS */;
INSERT INTO `subtema` VALUES (1,'¿Qué es una Variable?',1,'sb',1),(2,'Variables locales',2,'sb',1),(3,'Variables de instancia',3,'sb',1),(4,'Variables estáticas',4,'sb',1),(5,'Tipos de datos',5,'sb',1),(6,'Resultados de operaciones aritmeticas',1,'sb',2),(8,'If',1,'sb',3),(9,'If-else',2,'sb',3),(10,'If-Anidados',3,'sb',3),(11,'Escalera: If-else-if',4,'sb',3),(12,'Switch - case',5,'sb',3),(13,'Estructuras de bucles',1,'sb',5),(14,'For',2,'sb',5),(15,'While',3,'sb',5),(16,'Do-While',4,'sb',5),(17,'Arrays unidimensionales',1,'sb',7),(18,'Arrays multidimensionales',2,'sb',7),(19,'String y StringBuffer ',2,'sb',6),(20,'¿Como Crear una cadena? ',1,'sb',6),(21,'Uso de cadenas ',3,'sb',6),(22,'Extracción de caracteres  ',4,'sb',6),(23,'Comparación de cadenas  ',5,'sb',6),(24,'Igualdad ',6,'sb',6),(25,'Comparación con CompareTo ',7,'sb',6),(26,'toString() ',8,'sb',6),(27,'Conversión automática de tipos o ampliación ',1,'sm',9),(28,'Conversión explícita de tipo o casting ',2,'sm',9),(29,'Casting de Tipo explícito en Expresiones ',3,'sm',9),(30,'Clase MenuComponent ',1,'sa',10),(31,'Clase Menu ',2,'sa',10),(32,'Clase MenuItem ',3,'sa',10),(33,'Clase MenuShortcut ',4,'sa',10),(34,'Clase MenuBar ',5,'sa',10),(35,'Clase CheckboxMenuItem ',6,'sa',10),(36,'Clase PopupMenu ',7,'sa',10),(37,'¿Cómo funcionan los eventos?',1,'sa',12),(38,'Acción vacía ',2,'sa',12),(39,'Tipos de eventos ',3,'sa',12),(40,'¿Qué hace NetBeans? ',1,'sa',13),(41,'Creando un .bat ',2,'sa',13),(42,'Creando un .zip ',3,'sa',13);
/*!40000 ALTER TABLE `subtema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tema` (
  `idtema` int NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) NOT NULL,
  `descripcion` text,
  `no_tema` int NOT NULL,
  `idnivel` int NOT NULL,
  PRIMARY KEY (`idtema`),
  KEY `fk_tema_nivel1_idx` (`idnivel`),
  CONSTRAINT `fk_tema_nivel1` FOREIGN KEY (`idnivel`) REFERENCES `nivel` (`idnivel`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` VALUES (1,'Variables y Tipos de Datos','b',1,1),(2,'Operadores Aritméticos','b',2,1),(3,'Estructuras Condicionales','b',4,1),(4,'Scanner','b',3,1),(5,'Ciclos o Bucles','b',5,1),(6,'Cadenas de Caracteres','i',2,2),(7,'Arrays','i',1,2),(8,'Interfaces Gráficas','i',4,2),(9,'Conversión de datos','i',3,2),(10,'Menú y Eventos','a',2,3),(12,'Programación de Eventos','a',3,3),(13,'Empaquetado de Aplicaciones','a',4,3);
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(160) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `activo` bit(1) DEFAULT NULL,
  `idrol` int NOT NULL,
  `nombreR` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `profesion` varchar(200) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_rol1_idx` (`idrol`),
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (7,'Nuevo3','1234',NULL,NULL,2,'Nuevo3','Nuevo3','ejemplo3@gmail.com','Nuevo3'),(10,'Nuevo 4','$2y$10$vS..ZNHkDY9Y34ITMVdIg.nRysNI2OsjZ66wEmbDTBtrdXFPlSDIW',NULL,NULL,2,'Nuevo 4','Nuevo 4','ejemplo4@gmail.com','Nuevo 4'),(11,'Nuevo 5','$2y$10$kMUPWQZGQVyVjGYfO.2jke0/L8VkSQxfpDFxBbdVUDZdXfrSAe30i',NULL,NULL,2,'Nuevo 5','Nuevo 5','ejemplo5@gmail.com','Nuevo 5'),(16,'esbeidy','$2y$10$BOZuq4/P/w36srsHKDKFLOIo4Vo2e9G3850N/KrJPXzCyI0Q8Gqj6',NULL,NULL,1,'esbeidy','gomez','esbeidy.gomez@utsv.edu.mx','MATI'),(17,'miros2022','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',NULL,NULL,2,'MiroslavaColab','Santiago Luis','dsm20190122.msantiago@alumnos.utsv.edu.mx','Estudiante'),(18,'miroslava20','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',NULL,NULL,1,'MiroslavaAdmin','Santiago Luis','mirossanty@gmail.com','Estudiante'),(19,'angel josue','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',NULL,NULL,1,'Angel Josue','García Canteros','dsm20190422.agarcia@alumnos.utsv.edu.mx','Estudiante'),(20,'juan jose','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',NULL,NULL,1,'Juan Jose','López Montalvo','dsm20190129.jlopez@alumnos.utsv.edu.mx','Estudiante');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video` (
  `idvideo` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `ruta_video` varchar(200) NOT NULL,
  `idtema` int NOT NULL,
  PRIMARY KEY (`idvideo`),
  KEY `fk_video_tema1_idx` (`idtema`),
  CONSTRAINT `fk_video_tema1` FOREIGN KEY (`idtema`) REFERENCES `tema` (`idtema`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'Variables y tipos de datos','https://www.youtube.com/embed/HTRWQmOxB1Y',1),(2,'Operadores aritméticos','https://www.youtube.com/embed/URYAWHvco3s',2),(3,'Estructuras condicionales y operadores lógicos','https://www.youtube.com/embed/Ltvrv9u6w40',3),(4,'Leer datos desde el teclado','https://www.youtube.com/embed/IcZRdQaZROw',4),(5,'Ciclos For y While','https://www.youtube.com/embed/IEoqjL0MDt0',5),(6,'Cadenas de caracteres','https://www.youtube.com/embed/5-o9IzfTNTA',6),(7,'Arrays','https://www.youtube.com/embed/UID_EKKfpcE',7),(8,'Conversion de datos - Casting','https://www.youtube.com/embed/PHKMLpmJdOY',9),(9,'Menú con eventos','https://www.youtube.com/embed/sNFWxrCJb4s',10),(10,'Eventos','https://www.youtube.com/embed/b8rkMBnXuwk',12),(11,'Empaquetado de aplicaciones','https://www.youtube.com/embed/JNyWhkF7Eos',13);
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-23 19:50:51
