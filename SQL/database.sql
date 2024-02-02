create database if not exists Ricerca;
create table if not exists Ricerca.Parole
(
    id          int not null auto_increment primary key,
    valore        varchar(50)
    );