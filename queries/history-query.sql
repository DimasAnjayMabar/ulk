ALTER TABLE article
ADD COLUMN photo_path VARCHAR(255),
ADD COLUMN video_link VARCHAR(255);

select * from article;

select * from author;

ALTER TABLE article
ADD COLUMN id_author INT,
ADD CONSTRAINT fk_id_author FOREIGN KEY (id_author) REFERENCES author (id_author);

CREATE TABLE author (
    id_author SERIAL PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_author VARCHAR(255) NOT NULL
);



