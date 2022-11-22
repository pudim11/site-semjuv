DROP DATABASE IF EXISTS slideshow;
CREATE DATABASE IF NOT EXISTS slideshow;
USE slideshow;

CREATE TABLE IF NOT EXISTS slide(
    idSlide INT AUTO_INCREMENT PRIMARY KEY,
    src VARCHAR(100),
    title VARCHAR(100),
    alt VARCHAR(100),
    caption VARCHAR(100),
    estado INT(1)

);

INSERT INTO slide VALUES (NULL, '/img/img_nature_wide.jpg','Editar o titulo','editar o alternativo','Slide 1',1);
INSERT INTO slide VALUES (NULL, '/img/reference-img-worlds-of-adventure-park-4-1920x9999.webp','Editar o titulo','editar o alternativo','Slide 2',1);
INSERT INTO slide VALUES (NULL, '/img/WhatsApp Image 2022-11-19 at 22.30.11.jpeg','Editar o titulo','editar o alternativo','Slide 3',1);

