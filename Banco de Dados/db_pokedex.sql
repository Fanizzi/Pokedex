CREATE DATABASE db_pokedex;

USE db_pokedex;

CREATE TABLE PokemonTypes (
    id int auto_increment,
    nome varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Region (
    id int auto_increment,
    nome varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Pokemon (
    id int auto_increment,
    nome varchar(255) NOT NULL,
    id_Pokemon_Types int NOT NULL,
    id_Region int NOT NULL,
    FOREIGN KEY(id_Pokemon_Types) REFERENCES Pokemon_Types(id),
    FOREIGN KEY(id_Region) REFERENCES Region(id),
    PRIMARY KEY(id)
);
