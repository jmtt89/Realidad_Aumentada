CREATE SCHEMA  "0640386";
DROP TABLE IF EXISTS "0640386"."Crea" ;
DROP TABLE IF EXISTS "0640386"."Consulta" ;
DROP TABLE IF EXISTS "0640386"."Multimedia" ;

DROP TABLE IF EXISTS "0640386"."POI" ;
DROP TABLE IF EXISTS "0640386"."Usuario" ;
-- -----------------------------------------------------
-- Table "0640386`.`Coordenadas" //Desaparece al ser absorvida por POI
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Table "0640386`.`POI"
-- -----------------------------------------------------


CREATE  TABLE  "0640386"."POI" (
    "idPOI"       serial          NOT NULL ,
    "Latitud"     VARCHAR(45)     NOT NULL ,
    "Longitud"    VARCHAR(45)     NOT NULL ,
    "Altitud"     VARCHAR(45)     NOT NULL ,  
    "Title"       VARCHAR(250)    NOT NULL ,
    "Thumb"       VARCHAR(250)    NOT NULL ,
    "Icon"        VARCHAR(250)    NOT NULL ,
    "Description" VARCHAR(250)    NOT NULL ,
        PRIMARY KEY ("idPOI")
);


-- -----------------------------------------------------
-- Table "0640386"."Usuario"
-- -----------------------------------------------------


CREATE  TABLE  "0640386"."Usuario" (
    "UID"               VARCHAR(200)    NOT NULL ,
    "Nombre_Usuario"    VARCHAR(45)         NULL ,
        PRIMARY KEY ("UID") 
);


-- -----------------------------------------------------
-- Table "0640386"."Crea"
-- -----------------------------------------------------



CREATE  TABLE  "0640386"."Crea" (
    "UID"       VARCHAR(200)    REFERENCES "0640386"."Usuario"("UID")    ON DELETE RESTRICT,
    "idPOI"     integer         REFERENCES "0640386"."POI"("idPOI")      ON DELETE RESTRICT,
        PRIMARY KEY ("UID", "idPOI")
);


-- -----------------------------------------------------
-- Table "0640386"."Consulta"
-- -----------------------------------------------------


CREATE  TABLE  "0640386"."Consulta" (
    "UID"           VARCHAR(200)    REFERENCES "0640386"."Usuario"("UID")    ON DELETE RESTRICT,
    "idPOI"         integer         REFERENCES "0640386"."POI"("idPOI")      ON DELETE RESTRICT,
    "Visibilidad"   boolean         NOT NULL    DEFAULT     TRUE,
        PRIMARY KEY ("UID", "idPOI")
);


-- -----------------------------------------------------
-- Table "0640386"."Multimedia"
-- -----------------------------------------------------


CREATE  TABLE  "0640386"."Multimedia" (
    "idMultimedia"    serial       NOT NULL ,
    "idPOI"           integer     REFERENCES "0640386"."POI"("idPOI")      ON DELETE RESTRICT,
    "Type"            VARCHAR(250) NULL ,
    "Text"            VARCHAR(250) NULL ,
    "src"             VARCHAR(250) NULL ,

        PRIMARY KEY ("idMultimedia", "idPOI")
);