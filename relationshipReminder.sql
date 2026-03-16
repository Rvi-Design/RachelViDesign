-- Exported from QuickDBD: https://www.quickdatabasediagrams.com/
-- NOTE! If you have used non-SQL datatypes in your design, you will have to change these here.


CREATE TABLE `project` (
    `ID` (VARCHAR255)  NOT NULL ,
    `name` (VARCHAR255)  NOT NULL ,
    `h2` (VARCHAR255)  NOT NULL ,
    `category` (VARCHAR255)  NOT NULL ,
    `blurb` (VARCHAR255)  NOT NULL ,
    PRIMARY KEY (
        `ID`
    )
);

CREATE TABLE `categories` (
    `category_ID` INT  NOT NULL ,
    `category_name` (VARCHAR255)  NOT NULL ,
    PRIMARY KEY (
        `category_ID`
    )
);

ALTER TABLE `project` ADD CONSTRAINT `fk_project_category` FOREIGN KEY(`category`)
REFERENCES `categories` (`category_ID`);

