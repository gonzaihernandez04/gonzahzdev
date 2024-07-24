DROP DATABASE IF EXISTS portfolio;
CREATE DATABASE portfolio;
USE portfolio;


CREATE TABLE persona(
    id INT NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    universidad varchar(255),
    PRIMARY KEY(id)
);


CREATE TABLE opinion(

id INT NOT NULL AUTO_INCREMENT,
idPersona int NOT NULL,
puntuacion TINYINT,
comentario varchar(255),
PRIMARY KEY(id),
FOREIGN KEY (idPersona) references persona(id)
);


CREATE TABLE experiencia(
   id int NOT NULL AUTO_INCREMENT,
   nombre varchar(50),
   descripcion TEXT,
    fechaInicio DATE,
    fechaFin DATE,
    PRIMARY KEY(id)
);




INSERT INTO experiencia (nombre, descripcion, fechaInicio, fechaFin)
VALUES ('Desarrollador Hupa Hamburguesas', 'Desarrolle una Lading Page para una empresa de comida llamada Hupa. Creada con React, TailwindCSS y Vite como entorno de desarrollo.

Propone un disenio moderno para la atraccion visual del usuario. React permitio la creacion optimizada de la web con la reutilizacion de componentes. Se priorizo el SEO, el performance y el rendimiento. Incluye la funcion de contactar a cualquier sucursal mediante Whatsapp y todas las formas de Delivery(entrega) que propone la empresa, por ejemplo, a traves de Rappi Pedidos Ya, etc.', '2023-06-01', '2023-06-06'),

 ('Docente de programacion', 'Imparto clases de programacion tanto a Nivel Universitario como secundario. Ensenio tanto desarrollo web como conceptos importantes de la programacion y su implementacion. Por ejemplo, creacion de sistemas web, paginas web, TAD, POO, Big O y complejidad algoritmica, Herencia, Bases de Datos, estilizacion web y logica computacional.
 
 Mis alumnos siempre estuvieron muy satisfechos y muy agredecidos. Encontra el apartado de opiniones y si te queres poner en contacto, no lo dudes!
 ', '2023-06-20', NULL);

CREATE TABLE titulo(
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    duracion varchar(50),
    imagen varchar(30),
    fecha DATE,
    PRIMARY KEY(id)
);

INSERT INTO titulo(nombre,duracion,imagen,fecha) VALUES
("Ingeniero en Computacion","En progreso...","titulos/nil",NULL),
("Tecnico En Computacion","6 anios","titulos/tecnico","2021-12-22"),
("Desarrollador Full Stack PHP","83 horas","titulos/udemyphp","2024-07-02"),
("Desarrollador Full Stack NodeJS","5 meses","titulos/codoacodoc","2022-12-01"),
("Desarrollador Web Inicial","4 meses","titulos/argprograma","2023-04-21"),
("Efset Certificate","2 horas","titulos/efset","2022-07-21");


 CREATE TABLE estudio(
    id int NOT NULL AUTO_INCREMENT,
    idTitulo int NOT NULL,
    nombreInstitucion varchar(50),
    descripcion TEXT,
    PRIMARY KEY(id)
 );

 INSERT INTO estudio(idTitulo,nombreInstitucion,descripcion)
 VALUES
 (1,"Universidad Nacional de Tres de Febrero","Finalizando primer anio. En este primer año se abarcaron muchos conceptos importantes del desarrollo de software como lo son las TAD como Listas, Pilas, Colas, Arboles, Heaps, Hash tables, Sets, Diccionarios, Mapa de Bits, tipos de ordenamiento, quick, merge, radix, bucket, heap sort, etc. Recursividad, tipos de programacion, programacion dinamica, backtracking, memorizacion, TDD, punteros, referencias, como se maneja la memoria en el stack y heap.

 Lo mencionado se vio en Algoritmos 2, en Algoritmos 1 se aprendieron conceptos importantes y basicos como POO, herencia, abstraccion, bucles, condicionales, como se manejan los objetos y variables en el stack y heap. Se programo un juego de pokemon en GreenFoot para mostrar todos los conocimientos adquiridos.

 Estas son las materias que estan enfocadas en lo que quiero hacer :D, otras no son mencionadas porque se hace muy largo. A medida que vaya cursando materias, todo estara aca o en blog.
 "),
 (2,"Escuela Tecnica N 35. Ing E. Latzina","Soy Tecnico en computacion recibido de una de las mejores Escuelas Tecnicas de la Argentina, llamada por su nombre, la Escuela Tecnica N°35 Ing. Eduardo Latzina. En terminos generales, fue una carrera muy dirigida al ambito de la programacion de Juegos, sistemas con base de datos, desarrollo de algoritmos, programacion en arduinos páginas web, logica y matematicas"),
  (3,"Udemy Full Stack PHP","Curso dictado por Juan Pablo De La Torre Valdez. Este portfolio esta hecho con todo lo aprendido en este curso, desde HTML5 hasta PHP, implementacion de base de datos, minificacion y compresion de imagenes de manera automatica gracias a GulpJS. Se utiliza el patron de disenio MVC, Sass para la estilizacion y Mysql para la gestion de datos. Arquitectura BEM para la facil estilizacion y reutilizacion de codigo.
  Se crea una especie de libreria como 'Tailwind CSS' a traves de Scss y los bucles de repeticion otorgados por este."),

(4,"Gobierno de la ciudad de Buenos Aires","Curso completado Full-Stack NODEJS, donde se exploraron grandes contenidos de JavaScript, manejo de rutas y seguridad de las mismas, patron de arquitectura MVC."),

(5,"Universidad Tecnologica Nacional","Curso brindado por la Nacion Argentina donde se aprendio principios de UX/UI, disenios modernos para paginas web, HTML5, CSS Y JavaScript para interaccion con el DOM y agregado de animaciones"),
(6,"EFSET","Certificado de Ingles B2 Upper Intermediate");



CREATE TABLE proyecto(
    id int NOT NULL AUTO_INCREMENT,
    nombreProyecto varchar(50),
    descripcion TEXT,
    imagen varchar(30),
    urlWeb varchar(255),
    PRIMARY KEY(id)
);

INSERT INTO proyecto(nombreProyecto,descripcion,imagen,urlWeb) VALUES


  ("ArDevCamp","","img","https://github.com/gonzaihernandez04/TrainingFit"),

    ("Training Fit","Este proyecto de terminal fue realizado con Golang para la materia Algoritmos Y Programacion 2, donde se usa CSV para el guardado de datos. Esta aplicacion permite crear rutinas automaticamente segun lo pretendido por el usuario.
    

    Permite crear rutinas segun tiempo maximo, tipo de ejercicios, y calorias a quemar. Se utilizazron diferentes tipos de programacion recursiva, como el backtracking, programacion dinamica. Tambien se hizo uso de diccionarios permitiendo mejorar la complejidad algoritmica en diferentes problemas, solucionando O(n) a O(1).","proyectos/trainingfit","https://github.com/gonzaihernandez04/TrainingFit"),

("TaskNow","Este proyecto fue desarrollado con PHP, con el patron de disenio de MVC(Modelo vista controlador). Para la estilizacion de la aplicacion, se utilizo SASS, funciones mixins. 

Se aprovecho la definicion de variables para elementos necesarios con el fin de no cometer ningun error a la hora de establecer un tamaño, una tipografia, un color, etc. Asimismo, cada parte de estilos reutilizable, se creo un componente para no ser reduntante.

    Se deja de lado el codigo SPAGHETTI, patron fuertemente criticado a PHP","proyectos/tasknow","https://tasknowdev.000webhostapp.com/"),
("Hupa","Disenio y desarrollo web de Hupa Hamburguesas. Esta pagina fue desarrollada con React, Vite, Sass, JavaScript. 

Se utilizo POSTCSS para minificacion de css y Terser para minificacion de JavaScript. Se utilizo TinyPng para comprimir tamaño de las imagenes. Se utilizo Lazy Load para cargar correctamente la pagina y sus imagenes. Este disenio es original y creado por mi del emprendimiento HUPA HAMBURGUESAS que se encuentra en Argentina - Buenos Aires","proyectos/hupa","https://hupahamburguesas.netlify.app/"),

("CloudMovie","Este es mi primer proyecto como FULL STACK DEVELOPER PHP, el cual consiste, del manejo de las tecnologias: HTML,CSS,SCSS,JAVASCRIPT,GULP,PHP,
        MYSQL. 
        
        Este proyecto es una pagina de peliculas con mi propia base de datos, la cual podes, BUSCAR PELICULAS, VER SUS TRAILERS, FILTRAR POR GENEROS, Y POSEE UN ADMINISTRADOR DE PELICULAS PARA: Agregar peliculas, Actualizarlas y eliminarlas","proyectos/cloudmovie","https://cloudmoviegh.000webhostapp.com/"),

                ("FunPetz","Puedes encontrar los juguetes favoritos de tu mascota aqui! FunPetz es un disenio desarrollado con la finalidad de estructurar una pagina web moderna para animales. Puedes encontrarla haciendo click en la imagen ","proyectos/funpetz","https://funpetz2.netlify.app/"),

                      ("Festival de Musica","Este es mi tercer proyecto. Empece a utilizar SASS y GULP JS para convertir imagenes PNG o JPG en WEBP y minificarlas, tambien para comprimir archivos CSS y JS, entre otras cosas","proyectos/festival","https://festivalmusicad.netlify.app/"),

                         ("Veterinario","Veterinario es un Administrador de pacientes. Es mi primer proyecto hecho con REACT, TAILWIND CSS, VITE y LocalStorage. Puedes registrar los sintomas de tu mascota, editarlos o eliminar el sintoma. Puedes encontrar la pagina haciendo click  ","proyectos/perro","https://administradormascotasvite.netlify.app/"),

                              ("Blue Berry","Blueeberry es una plataforma que ofrece las mejores joyas de Inglaterra. Desarrollada con React, Sass y Vite, brinda una experiencia visual atractiva y funcional. La integración de  permite una navegación fluida entre secciones. Descubre nuestras exquisitas joyas en un solo lugar. ¡Bienvenido a Blueberry! ","proyectos/blueberry","https://blueberryj.netlify.app/"),

                                   ("Pacific Ocean","Diseño y desarrollo web de Pacific Ocean. Esta pagina fue desarrollada con React, Vite, Sass, JavaScript. Ayuda a los animales marinos que tanto nos necesitan, de la mano que ellos no tienen y la voz que no pueden reproducir. 
                                   
                                   Se consumio una API de noticias la cual debido a no tener permisos, no sera mostrada. Se utilizo POSTCSS para minificacion de css y Terser para minificacion de JavaScript. Se utilizo TinyPng para comprimir tamaño de las imagenes. Se utilizo la libreria I18Next para sistema de traduccion de Español a Ingles. Lazy Load y suspense para cargar correctamente la pagina y sus imagenes.","proyectos/pacificocean","https://pacificocean.netlify.app/"),


                                   ("Norway Travel","Si tu objetivo es viajar por Noruega, te presentamos Norway Travel, encontra tus destino deseado. Puedes ver la pagina haciendo click en la imagen","proyectos/norway","https://norwaytravelling.netlify.app/");


                             