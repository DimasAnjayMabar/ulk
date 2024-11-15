CREATE TABLE article (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    photo_path VARCHAR(255),
    video_link VARCHAR(255),
    date DATE DEFAULT CURRENT_DATE,
    author VARCHAR(255) NOT NULL
);

insert into article (title, content, photo_path, author)
values ("test 1", "this is the test 1", "assets/images/article_photo/pexels-photo-708440.webp", "greg");

insert into article (title, content, photo_path, video_link, author)
values ("test 2", "this is the test 2", "assets/images/article_photo/pexels-photo-3856033.jpeg", "https://www.youtube.com/embed/vpWpEKXoS80", "greg");

insert into article (title, content, photo_path, video_link, author)
values ("test 3", "this is the test 3", "assets/images/article_photo/pexels-photo-3856035.jpeg", "https://www.instagram.com/p/DB-SY50sWA7/embed/", "greg");

