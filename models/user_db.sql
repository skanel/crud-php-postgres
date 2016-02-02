
CREATE TABLE user_tbl (
    id integer DEFAULT nextval('user_id_seq'::regclass) NOT NULL,
    username character varying(15) NOT NULL,
    password text NOT NULL,
    email character varying(30) NOT NULL,
    type character varying(15) NOT NULL
);

INSERT INTO user_tbl (id, username, password, email, type) VALUES (2, 'kanel', '96e79218965eb72c92a549dd5a330112', 'soengkanel@gmail.com', 'user');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (4, '11user111', '698d51a19d8a121ce581499d7b701668', 'soengkanel@gmail.com', 'user');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (5, 'dedikepib', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'beferuge@yahoo.com', 'editor');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (6, 'feqoq', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'vuqagepiw@yahoo.com', 'In beatae est ');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (7, 'lavetumu', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'pikyfus@gmail.com', 'Laboriosam ali');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (8, 'xajamyqoq', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'gygi@hotmail.com', 'Cupiditate sequ');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (9, 'naxocena', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'gigoxec@gmail.com', 'Et voluptatem ');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (1, 'admin', '96e79218965eb72c92a549dd5a330112', 'soengkanel@gmail.com', 'admin');
INSERT INTO user_tbl (id, username, password, email, type) VALUES (3, 'editor', '96e79218965eb72c92a549dd5a330112', 'soengkanel@gmail.com', 'editor');

