CREATE TABLE act_img
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_act INT NOT NULL,
    id_img INT NOT NULL
);
CREATE TABLE activos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    cod INT NOT NULL,
    sectores_id INT NOT NULL
);
CREATE TABLE archivos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    url VARCHAR(500)
);
CREATE TABLE chekes
(
    idchekes INT PRIMARY KEY NOT NULL,
    num INT,
    bco VARCHAR(250),
    venc DATE,
    pagos_id INT NOT NULL
);
CREATE TABLE clientes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
    fisc VARCHAR(200) NOT NULL,
    dir_com VARCHAR(255),
    id_localidad_com INT,
    iva_id INT NOT NULL
);
CREATE TABLE coments
(
    id INT PRIMARY KEY NOT NULL,
    id_usr INT NOT NULL,
    com VARCHAR(500) NOT NULL,
    time DATETIME NOT NULL
);
CREATE TABLE departamentos
(
    id INT PRIMARY KEY NOT NULL,
    provincia_id INT NOT NULL,
    nombre VARCHAR(100) NOT NULL
);
CREATE TABLE ev_ot
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    eventos_id INT NOT NULL,
    ot_idot INT NOT NULL
);
CREATE TABLE eventos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tit VARCHAR(200),
    fec TIMESTAMP,
    act INT,
    tar INT,
    obs VARCHAR(400),
    est INT
);
CREATE TABLE eventos_has_mediciones
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    eventos_id INT NOT NULL,
    mediciones_idmediciones INT NOT NULL
);
CREATE TABLE eventos_has_seguimientos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    eventos_id INT,
    seguimientos_idseguimientos INT NOT NULL
);
CREATE TABLE facturas
(
    id INT PRIMARY KEY NOT NULL,
    fecha DATE,
    num INT
);
CREATE TABLE facturas_has_reportes
(
    facturas_id INT NOT NULL,
    reportes_id INT NOT NULL,
    PRIMARY KEY (facturas_id, reportes_id)
);
CREATE TABLE imagenes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    url VARCHAR(400) NOT NULL
);
CREATE TABLE indicadores
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_cli INT NOT NULL,
    nom VARCHAR(255) NOT NULL
);
CREATE TABLE iva
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    den VARCHAR(45),
    pors VARCHAR(45)
);
CREATE TABLE locacion
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
    dir VARCHAR(255),
    id_img INT,
    clientes_id INT,
    localidades_id INT NOT NULL
);
CREATE TABLE locacion_has_presupuestos
(
    locacion_id INT NOT NULL,
    presupuestos_id INT NOT NULL,
    PRIMARY KEY (locacion_id, presupuestos_id)
);
CREATE TABLE localidades
(
    id INT PRIMARY KEY NOT NULL,
    departamento_id INT NOT NULL,
    nombre VARCHAR(100) NOT NULL
);
CREATE TABLE log_sys
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_freec VARCHAR(255) NOT NULL,
    last TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_crerated INT
);
CREATE TABLE mediciones
(
    idmediciones INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(200),
    val VARCHAR(45)
);
CREATE TABLE oc
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    enc VARCHAR(300),
    ini DATE,
    fin DATE,
    num VARCHAR(100),
    descr VARCHAR(300),
    clientes_id INT NOT NULL
);
CREATE TABLE oc_has_loc
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    oc_id INT NOT NULL,
    locacion_id INT NOT NULL
);
CREATE TABLE oc_has_reportes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    oc_id INT NOT NULL,
    reportes_id INT NOT NULL
);
CREATE TABLE ocloc_has_paquetes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    oc_has_loc_id INT NOT NULL,
    pauetes_idpauetes INT NOT NULL
);
CREATE TABLE ordenes_servicio
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fech DATE,
    send TINYINT,
    view TINYINT,
    obs VARCHAR(500)
);
CREATE TABLE os_ot
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ordenes_servicio_id INT NOT NULL,
    ot_idot INT NOT NULL
);
CREATE TABLE ot
(
    idot INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ini DATETIME,
    fin DATETIME,
    obs VARCHAR(800),
    mat VARCHAR(500),
    locacion_id INT NOT NULL,
    oc_id INT NOT NULL
);
CREATE TABLE ot_has_activos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ot_idot INT NOT NULL,
    activos_id INT NOT NULL
);
CREATE TABLE ot_has_imagenes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ot_idot INT NOT NULL,
    imagenes_id INT NOT NULL
);
CREATE TABLE ot_has_tareas
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ot_idot INT NOT NULL,
    tareas_idtareas INT NOT NULL
);
CREATE TABLE ot_has_tecnicos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ot_idot INT NOT NULL,
    tecnicos_id INT NOT NULL
);
CREATE TABLE ot_tar
(
    idot_tar INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tar VARCHAR(400),
    ot_idot INT NOT NULL
);
CREATE TABLE pagos
(
    id INT PRIMARY KEY NOT NULL,
    pagos_tipo_idpagos_tipo INT NOT NULL
);
CREATE TABLE pagos_has_facturas
(
    pagos_id INT NOT NULL,
    facturas_id INT NOT NULL,
    pors INT,
    PRIMARY KEY (pagos_id, facturas_id)
);
CREATE TABLE pagos_has_paquete_pagar
(
    pagos_id INT NOT NULL,
    paquete_pagar_idpaquete_pagar INT NOT NULL,
    pors INT,
    PRIMARY KEY (pagos_id, paquete_pagar_idpaquete_pagar)
);
CREATE TABLE pagos_tipo
(
    idpagos_tipo INT PRIMARY KEY NOT NULL,
    nom VARCHAR(200)
);
CREATE TABLE paquete_pagar
(
    idpaquete_pagar INT PRIMARY KEY NOT NULL,
    tit VARCHAR(45),
    reportes_id INT NOT NULL
);
CREATE TABLE pauetes
(
    idpauetes INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(400),
    locacion_id INT NOT NULL
);
CREATE TABLE presupuestos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cuerpo VARCHAR(45)
);
CREATE TABLE presupuestos_has_archivos
(
    presupuestos_id INT NOT NULL,
    archivos_id INT NOT NULL,
    PRIMARY KEY (presupuestos_id, archivos_id)
);
CREATE TABLE prof
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    role VARCHAR(50) NOT NULL
);
CREATE TABLE provincias
(
    id INT PRIMARY KEY NOT NULL,
    nombre VARCHAR(50) NOT NULL
);
CREATE TABLE rep_frec
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_oc INT,
    id_rep_tip INT,
    frec_num INT,
    frec_textt VARCHAR(100)
);
CREATE TABLE rep_ind
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    val VARCHAR(150),
    reportes_id INT NOT NULL,
    indicadores_id INT NOT NULL
);
CREATE TABLE reparaciones
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    seguimientos_idseguimientos INT NOT NULL,
    eventos_id INT NOT NULL
);
CREATE TABLE reportes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_tipo INT,
    tit VARCHAR(255),
    clientes_id INT NOT NULL
);
CREATE TABLE reportes_has_ot
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    reportes_id INT NOT NULL,
    ot_idot INT NOT NULL
);
CREATE TABLE sectores
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_locacion INT NOT NULL,
    nom VARCHAR(255) NOT NULL,
    cod VARCHAR(30) NOT NULL,
    id_img INT
);
CREATE TABLE seguimientos
(
    idseguimientos INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_ident VARCHAR(100),
    num INT,
    pieza VARCHAR(100),
    estado INT
);
CREATE TABLE tareas
(
    idtareas INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(200),
    cod VARCHAR(45),
    col VARCHAR(45)
);
CREATE TABLE tareas_has_pauetes
(
    id INT NOT NULL AUTO_INCREMENT,
    tareas_idtareas INT NOT NULL,
    pauetes_idpauetes INT NOT NULL,
    PRIMARY KEY (id, tareas_idtareas)
);
CREATE TABLE tareas_has_pauetes_has_sectores
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tareas_has_pauetes_id INT NOT NULL,
    sectores_id INT NOT NULL
);
CREATE TABLE tareas_has_pauetes_has_sectores_has_activos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    activos_id INT NOT NULL,
    frec_num INT,
    frec_text VARCHAR(45),
    tareas_has_pauetes_has_sectores_id INT NOT NULL
);
CREATE TABLE tecnicos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    ape VARCHAR(255) NOT NULL,
    email VARCHAR(50),
    cel VARCHAR(255),
    dir VARCHAR(255),
    usuarios_id INT,
    localidades_id INT NOT NULL,
    imagenes_id INT NOT NULL
);
CREATE TABLE `tipos reportes`
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(200)
);
CREATE TABLE usuarios
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idprofile INT NOT NULL,
    usr VARCHAR(40) NOT NULL,
    pass VARCHAR(20) NOT NULL
);
CREATE TABLE usuarios_has_clientes
(
    id INT PRIMARY KEY NOT NULL,
    usuarios_id INT NOT NULL,
    clientes_id INT NOT NULL
);
CREATE TABLE usuarios_has_clientes_has_locacion
(
    id INT PRIMARY KEY NOT NULL,
    usuarios_has_clientes_usuarios_id INT NOT NULL,
    locacion_id INT NOT NULL
);
ALTER TABLE act_img ADD FOREIGN KEY (id_act) REFERENCES activos (id);
CREATE INDEX FK_act_img_activos_id ON act_img (id_act);
CREATE INDEX FK_act_img_imagenes_id ON act_img (id_img);
ALTER TABLE activos ADD FOREIGN KEY (sectores_id) REFERENCES sectores (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_activos_sectores1_idx ON activos (sectores_id);
ALTER TABLE chekes ADD FOREIGN KEY (pagos_id) REFERENCES pagos (id);
CREATE INDEX fk_chekes_pagos1_idx ON chekes (pagos_id);
ALTER TABLE clientes ADD FOREIGN KEY (iva_id) REFERENCES iva (id);
CREATE INDEX fk_clientes_iva1_idx ON clientes (iva_id);
CREATE INDEX fk_clientes_localidades1_idx ON clientes (id_localidad_com);
CREATE INDEX FK_coments_usuarios_id ON coments (id_usr);
ALTER TABLE ev_ot ADD FOREIGN KEY (eventos_id) REFERENCES eventos (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE ev_ot ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_ev_ot_eventos1_idx ON ev_ot (eventos_id);
CREATE INDEX fk_ev_ot_ot1_idx ON ev_ot (ot_idot);
ALTER TABLE eventos ADD FOREIGN KEY (act) REFERENCES activos (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE eventos ADD FOREIGN KEY (tar) REFERENCES tareas (idtareas) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_eventos_activos1_idx ON eventos (act);
CREATE INDEX fk_eventos_tareas1_idx ON eventos (tar);
ALTER TABLE eventos_has_mediciones ADD FOREIGN KEY (eventos_id) REFERENCES eventos (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE eventos_has_mediciones ADD FOREIGN KEY (mediciones_idmediciones) REFERENCES mediciones (idmediciones) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_eventos_has_mediciones_eventos1_idx ON eventos_has_mediciones (eventos_id);
CREATE INDEX fk_eventos_has_mediciones_mediciones1_idx ON eventos_has_mediciones (mediciones_idmediciones);
ALTER TABLE eventos_has_seguimientos ADD FOREIGN KEY (eventos_id) REFERENCES eventos (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE eventos_has_seguimientos ADD FOREIGN KEY (seguimientos_idseguimientos) REFERENCES seguimientos (idseguimientos) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_eventos_has_seguimientos_eventos1_idx ON eventos_has_seguimientos (eventos_id);
CREATE INDEX fk_eventos_has_seguimientos_seguimientos1_idx ON eventos_has_seguimientos (seguimientos_idseguimientos);
ALTER TABLE facturas_has_reportes ADD FOREIGN KEY (facturas_id) REFERENCES facturas (id);
ALTER TABLE facturas_has_reportes ADD FOREIGN KEY (reportes_id) REFERENCES reportes (id);
CREATE INDEX fk_facturas_has_reportes_facturas1_idx ON facturas_has_reportes (facturas_id);
CREATE INDEX fk_facturas_has_reportes_reportes1_idx ON facturas_has_reportes (reportes_id);
ALTER TABLE indicadores ADD FOREIGN KEY (id_cli) REFERENCES clientes (id);
CREATE INDEX FK_indicadores_clientes_id ON indicadores (id_cli);
ALTER TABLE locacion ADD FOREIGN KEY (clientes_id) REFERENCES clientes (id);
CREATE INDEX fk_locacion_clientes1_idx ON locacion (clientes_id);
CREATE INDEX FK_locacion_imagenes_id ON locacion (id_img);
CREATE INDEX fk_locacion_localidades1_idx ON locacion (localidades_id);
ALTER TABLE locacion_has_presupuestos ADD FOREIGN KEY (presupuestos_id) REFERENCES presupuestos (id);
CREATE INDEX fk_locacion_has_presupuestos_locacion1_idx ON locacion_has_presupuestos (locacion_id);
CREATE INDEX fk_locacion_has_presupuestos_presupuestos1_idx ON locacion_has_presupuestos (presupuestos_id);
ALTER TABLE oc ADD FOREIGN KEY (clientes_id) REFERENCES clientes (id);
CREATE INDEX fk_oc_clientes1_idx ON oc (clientes_id);
ALTER TABLE oc_has_loc ADD FOREIGN KEY (oc_id) REFERENCES oc (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_oc_has_locacion_locacion1_idx ON oc_has_loc (locacion_id);
CREATE INDEX fk_oc_has_locacion_oc1_idx ON oc_has_loc (oc_id);
ALTER TABLE oc_has_reportes ADD FOREIGN KEY (oc_id) REFERENCES oc (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE oc_has_reportes ADD FOREIGN KEY (reportes_id) REFERENCES reportes (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_oc_has_reportes_oc1_idx ON oc_has_reportes (oc_id);
CREATE INDEX fk_oc_has_reportes_reportes1_idx ON oc_has_reportes (reportes_id);
ALTER TABLE ocloc_has_paquetes ADD FOREIGN KEY (oc_has_loc_id) REFERENCES oc_has_loc (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE ocloc_has_paquetes ADD FOREIGN KEY (pauetes_idpauetes) REFERENCES pauetes (idpauetes) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_oc_has_loc_has_pauetes_oc_has_loc1_idx ON ocloc_has_paquetes (oc_has_loc_id);
CREATE INDEX fk_oc_has_loc_has_pauetes_pauetes1_idx ON ocloc_has_paquetes (pauetes_idpauetes);
ALTER TABLE os_ot ADD FOREIGN KEY (ordenes_servicio_id) REFERENCES ordenes_servicio (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE os_ot ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_os_ot_ordenes_servicio1_idx ON os_ot (ordenes_servicio_id);
CREATE INDEX fk_os_ot_ot1_idx ON os_ot (ot_idot);
CREATE INDEX fk_ot_locacion1_idx ON ot (locacion_id);
CREATE INDEX fk_ot_oc2_idx ON ot (oc_id);
ALTER TABLE ot_has_activos ADD FOREIGN KEY (activos_id) REFERENCES activos (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE ot_has_activos ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_ot_has_activos_activos1_idx ON ot_has_activos (activos_id);
CREATE INDEX fk_ot_has_activos_ot1_idx ON ot_has_activos (ot_idot);
ALTER TABLE ot_has_imagenes ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot);
CREATE INDEX fk_ot_has_imagenes_imagenes1_idx ON ot_has_imagenes (imagenes_id);
CREATE INDEX fk_ot_has_imagenes_ot1_idx ON ot_has_imagenes (ot_idot);
ALTER TABLE ot_has_tareas ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_ot_has_tareas_ot1_idx ON ot_has_tareas (ot_idot);
CREATE INDEX fk_ot_has_tareas_tareas1_idx ON ot_has_tareas (tareas_idtareas);
ALTER TABLE ot_has_tecnicos ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_ot_has_tecnicos_ot1_idx ON ot_has_tecnicos (ot_idot);
CREATE INDEX fk_ot_has_tecnicos_tecnicos1_idx ON ot_has_tecnicos (tecnicos_id);
ALTER TABLE ot_tar ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_ot_tar_ot1_idx ON ot_tar (ot_idot);
ALTER TABLE pagos ADD FOREIGN KEY (pagos_tipo_idpagos_tipo) REFERENCES pagos_tipo (idpagos_tipo);
CREATE INDEX fk_pagos_pagos_tipo1_idx ON pagos (pagos_tipo_idpagos_tipo);
ALTER TABLE pagos_has_facturas ADD FOREIGN KEY (facturas_id) REFERENCES facturas (id);
ALTER TABLE pagos_has_facturas ADD FOREIGN KEY (pagos_id) REFERENCES pagos (id);
CREATE INDEX fk_pagos_has_facturas_facturas1_idx ON pagos_has_facturas (facturas_id);
CREATE INDEX fk_pagos_has_facturas_pagos1_idx ON pagos_has_facturas (pagos_id);
ALTER TABLE pagos_has_paquete_pagar ADD FOREIGN KEY (pagos_id) REFERENCES pagos (id);
ALTER TABLE pagos_has_paquete_pagar ADD FOREIGN KEY (paquete_pagar_idpaquete_pagar) REFERENCES paquete_pagar (idpaquete_pagar);
CREATE INDEX fk_pagos_has_paquete_pagar_pagos1_idx ON pagos_has_paquete_pagar (pagos_id);
CREATE INDEX fk_pagos_has_paquete_pagar_paquete_pagar1_idx ON pagos_has_paquete_pagar (paquete_pagar_idpaquete_pagar);
ALTER TABLE paquete_pagar ADD FOREIGN KEY (reportes_id) REFERENCES reportes (id);
CREATE INDEX fk_paquete_pagar_reportes1_idx ON paquete_pagar (reportes_id);
ALTER TABLE pauetes ADD FOREIGN KEY (locacion_id) REFERENCES locacion (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_pauetes_locacion1_idx ON pauetes (locacion_id);
ALTER TABLE presupuestos_has_archivos ADD FOREIGN KEY (archivos_id) REFERENCES archivos (id);
ALTER TABLE presupuestos_has_archivos ADD FOREIGN KEY (presupuestos_id) REFERENCES presupuestos (id);
CREATE INDEX fk_presupuestos_has_archivos_archivos1_idx ON presupuestos_has_archivos (archivos_id);
CREATE INDEX fk_presupuestos_has_archivos_presupuestos1_idx ON presupuestos_has_archivos (presupuestos_id);
ALTER TABLE rep_frec ADD FOREIGN KEY (id_oc) REFERENCES oc (id);
ALTER TABLE rep_frec ADD FOREIGN KEY (id_rep_tip) REFERENCES `tipos reportes` (id);
CREATE INDEX fk_rep_frec_oc1_idx ON rep_frec (id_oc);
CREATE INDEX `fk_rep_frec_tipos reportes1_idx` ON rep_frec (id_rep_tip);
ALTER TABLE rep_ind ADD FOREIGN KEY (indicadores_id) REFERENCES indicadores (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE rep_ind ADD FOREIGN KEY (reportes_id) REFERENCES reportes (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_rep_ind_indicadores1_idx ON rep_ind (indicadores_id);
CREATE INDEX fk_rep_ind_reportes1_idx ON rep_ind (reportes_id);
ALTER TABLE reparaciones ADD FOREIGN KEY (eventos_id) REFERENCES eventos (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE reparaciones ADD FOREIGN KEY (seguimientos_idseguimientos) REFERENCES seguimientos (idseguimientos);
CREATE INDEX fk_reparaciones_eventos1_idx ON reparaciones (eventos_id);
CREATE INDEX fk_reparaciones_seguimientos1_idx ON reparaciones (seguimientos_idseguimientos);
ALTER TABLE reportes ADD FOREIGN KEY (clientes_id) REFERENCES clientes (id);
ALTER TABLE reportes ADD FOREIGN KEY (id_tipo) REFERENCES `tipos reportes` (id);
CREATE INDEX fk_reportes_clientes1_idx ON reportes (clientes_id);
CREATE INDEX `fk_reportes_tipos reportes1_idx` ON reportes (id_tipo);
ALTER TABLE reportes_has_ot ADD FOREIGN KEY (ot_idot) REFERENCES ot (idot) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE reportes_has_ot ADD FOREIGN KEY (reportes_id) REFERENCES reportes (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_reportes_has_ot_ot1_idx ON reportes_has_ot (ot_idot);
CREATE INDEX fk_reportes_has_ot_reportes1_idx ON reportes_has_ot (reportes_id);
CREATE INDEX FK_sectores_imagenes_id ON sectores (id_img);
CREATE INDEX UK_sectores_id_locacion ON sectores (id_locacion);
CREATE UNIQUE INDEX cod_UNIQUE ON tareas (cod);
ALTER TABLE tareas_has_pauetes ADD FOREIGN KEY (pauetes_idpauetes) REFERENCES pauetes (idpauetes) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_tareas_has_pauetes_pauetes1_idx ON tareas_has_pauetes (pauetes_idpauetes);
CREATE INDEX fk_tareas_has_pauetes_tareas1_idx ON tareas_has_pauetes (tareas_idtareas);
ALTER TABLE tareas_has_pauetes_has_sectores ADD FOREIGN KEY (sectores_id) REFERENCES sectores (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tareas_has_pauetes_has_sectores ADD FOREIGN KEY (tareas_has_pauetes_id) REFERENCES tareas_has_pauetes (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_tareas_has_pauetes_has_sectores_sectores1_idx ON tareas_has_pauetes_has_sectores (sectores_id);
CREATE INDEX fk_tareas_has_pauetes_has_sectores_tareas_has_pauetes1_idx ON tareas_has_pauetes_has_sectores (tareas_has_pauetes_id);
ALTER TABLE tareas_has_pauetes_has_sectores_has_activos ADD FOREIGN KEY (activos_id) REFERENCES activos (id) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tareas_has_pauetes_has_sectores_has_activos ADD FOREIGN KEY (tareas_has_pauetes_has_sectores_id) REFERENCES tareas_has_pauetes_has_sectores (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX fk_tareas_has_pauetes_has_sectores_has_activos_activos1_idx ON tareas_has_pauetes_has_sectores_has_activos (activos_id);
CREATE INDEX fk_tareas_has_pauetes_has_sectores_has_activos_tareas_has_p_idx ON tareas_has_pauetes_has_sectores_has_activos (tareas_has_pauetes_has_sectores_id);
CREATE INDEX fk_tecnicos_imagenes1_idx ON tecnicos (imagenes_id);
CREATE INDEX fk_tecnicos_localidades1_idx1 ON tecnicos (localidades_id);
CREATE INDEX fk_tecnicos_usuarios1_idx ON tecnicos (usuarios_id);
ALTER TABLE usuarios ADD FOREIGN KEY (idprofile) REFERENCES prof (id) ON DELETE CASCADE ON UPDATE CASCADE;
CREATE INDEX FK_usuarios_prof_id ON usuarios (idprofile);
ALTER TABLE usuarios_has_clientes ADD FOREIGN KEY (clientes_id) REFERENCES clientes (id);
CREATE INDEX fk_usuarios_has_clientes_clientes1_idx ON usuarios_has_clientes (clientes_id);
CREATE INDEX fk_usuarios_has_clientes_usuarios1_idx ON usuarios_has_clientes (usuarios_id);
CREATE INDEX fk_usuarios_has_clientes_has_locacion_locacion1_idx ON usuarios_has_clientes_has_locacion (locacion_id);
CREATE INDEX fk_usuarios_has_clientes_has_locacion_usuarios_has_clientes_idx ON usuarios_has_clientes_has_locacion (usuarios_has_clientes_usuarios_id);
