--GLUE
INSERT INTO "0640386"."GLUE"("Title","Thumb","Description")
	values ('Farmatodo', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Logos/img1.jpg', 'Cadena de Farmacias')	

INSERT INTO "0640386"."GLUE"("Title","Thumb","Description")
	values ('EPA', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Logos/img2.jpg', 'Cadena de Ferreterias')

--- Usuario
INSERT INTO "0640386"."Usuario"("UID", "Nombre_Usuario")
    VALUES ('0001', 'UserI');

--- POI
INSERT INTO "0640386"."POI"("id","Latitud", "Longitud", "Altitud", "Title", "Thumb","Icon", "Description")
    VALUES (1,'10.510453', '-66.900714', '0', 'Farmatodo 1', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/thumb_custom.png', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/icon_custom.png', 'Farmatodo 1');

INSERT INTO "0640386"."POI"("id","Latitud", "Longitud", "Altitud", "Title", "Thumb","Icon", "Description")
	VALUES (1,'10.503288', '-66.909968', '0', 'Farmatodo 2', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/thumb_custom.png', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/icon_custom.png', 'Farmatodo 2');

INSERT INTO "0640386"."POI"("id","Latitud", "Longitud", "Altitud", "Title", "Thumb","Icon", "Description")
	VALUES (1,'10.504522', '-66.917177‎', '0', 'Farmatodo 3', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/thumb_custom.png', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/icon_custom.png', 'Farmatodo 3');

--EPA
INSERT INTO "0640386"."POI"("id","Latitud", "Longitud", "Altitud", "Title", "Thumb","Icon", "Description")
	VALUES (2,'10.49239', '-66.939622', '0', 'EPA 1', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/thumb_custom.png', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/icon_custom.png', 'EPA 1');

INSERT INTO "0640386"."POI"("id","Latitud", "Longitud", "Altitud", "Title", "Thumb","Icon", "Description")
	VALUES (2,'10.432448', '-66.871371', '0', 'EPA 2', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/thumb_custom.png', 'http://realidadaumentada.ac.labf.usb.vear0640386/Debug/Assets/Images/Icons/icon_custom.png', 'EPA 2');

--- Crea
INSERT INTO "0640386"."Crea"("UID", "idPOI")
    VALUES ('0001', 1);

INSERT INTO "0640386"."Crea"("UID", "idPOI")
    VALUES ('0001', 2);

INSERT INTO "0640386"."Crea"("UID", "idPOI")
    VALUES ('0001', 3);

--- Consulta
INSERT INTO "0640386"."Consulta"("UID", "idPOI", "Visibilidad")
    VALUES ('0001', 1, '1');

INSERT INTO "0640386"."Consulta"("UID", "idPOI", "Visibilidad")
    VALUES ('0001', 2, '0');

INSERT INTO "0640386"."Consulta"("UID", "idPOI", "Visibilidad")
    VALUES ('0001', 3, '1');

--- Multimeda

INSERT INTO "0640386"."Multimedia"("idPOI", "Type", "Text", src)
    VALUES (2, 'soundButton', 'Play', 'http://dev.junaio.com/publisherDownload/tutorial/test.mp3');

INSERT INTO "0640386"."Multimedia"("idPOI", "Type", "Text", src)
    VALUES (2, 'movieButton', 'Movie', 'http://www.junaio.com/publisherDownload/tutorial/movie.mp4');

INSERT INTO "0640386"."Multimedia"("idPOI", "Type", "Text", src)
    VALUES (3, 'soundButton', 'Play', 'http://dev.junaio.com/publisherDownload/tutorial/test.mp3');

INSERT INTO "0640386"."Multimedia"("idPOI", "Type", "Text", src)
    VALUES (3, 'movieButton', 'Movie', 'http://www.junaio.com/publisherDownload/tutorial/movie.mp4');

INSERT INTO "0640386"."Multimedia"("idPOI", "Type", "Text", src)
    VALUES (3, 'imageButton', 'Zoom', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRPLNtH-Ph_xQaEArtVoadFT4VsPI0fTYaqVcVaaHqXbfIjo1p1Jg');

INSERT INTO "0640386"."Multimedia"("idPOI", "Type", "Text", src)
    VALUES (3, 'imageButton', 'Zoom', 'http://img337.imageshack.us/img337/6967/junaio.png');

