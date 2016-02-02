CREATE TABLE user_tbl (
    id serial Primary key,
    username character varying(15) NOT NULL,
    password character varying(12) NOT NULL,
    email character varying(30) NOT NULL,
    tipousuario character varying(15) NOT NULL
);

