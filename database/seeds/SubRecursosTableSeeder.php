<?php

use Illuminate\Database\Seeder;

class SubRecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subrecursos')->insert([
        	[ //1
        		"nombre" => "Subrecurso test",
        		"idDueño" => 2,
        		"recid" => 5,
        		"pais" => "CL",
        		"recurso_ellipse" => 1,
        		"nota" => "Test nota seeder subrecursos",
        		"grupo_nt" => "Test grupo nt subrecurso",
        		"tabla_aso" => "TABLA ESTANDAR",
        		"activo" => 0,
                "req_accion" => 1,
        		"req_nota" => 1,
        		"tag_nota" => "Test tag_nota subrecurso",
                
        	],
            [ //1
                "nombre" => "Acesso a Aplicacion - Perfil LOGISTICA",
                "idDueño" => 3,
                "recid" => 1,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. ARM. Users. G G",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR",
                
            ],
            [ //1
                "nombre" => "Acesso a Aplicacion - Perfil CONTRALORIA",
                "idDueño" => 3,
                "recid" => 1,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. ARM. Users. G G",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR",
                
            ],
            [ //1
                "nombre" => "Acesso a Aplicacion - Perfil FINANZAS",
                "idDueño" => 3,
                "recid" => 1,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. ARM. Users. G G",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR",
                
            ],
            [ //1
                "nombre" => "Acesso a Aplicacion - Perfil OPERFULL",
                "idDueño" => 3,
                "recid" => 1,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. ARM. Users10. G G",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR",
                
            ],
            [ //2
                "nombre" => "Usuario Escritura VP Geologia",
                "idDueño" => NULL,
                "recid" => 2,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. VTOP_1. RW. GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //2
                "nombre" => "Usuario Lectura VP Geologia",
                "idDueño" => NULL,
                "recid" => 2,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. VTOP_11. RW. GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //2
                "nombre" => "Usuario Lectura VP Proyectos Peru/Quellaveco",
                "idDueño" => NULL,
                "recid" => 2,
                "pais" => "PE",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. VTOP_10. RW. GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //3
                "nombre" => "Usuario Lectura Presentaciones",
                "idDueño" => NULL,
                "recid" => 3,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "MVE presenta R. GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //3
                "nombre" => "Usuario Escritura Presentaciones",
                "idDueño" => NULL,
                "recid" => 3,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. VTOP_10. RW. GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //4
                "nombre" => "Historias Ocupacionales LB",
                "idDueño" => NULL,
                "recid" => 4,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "Stgo. HistOcupLB R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //4
                "nombre" => "Historias Ocupacionales ES",
                "idDueño" => NULL,
                "recid" => 4,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "Stgo. HistOcupES R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //4
                "nombre" => "Historias Ocupacionales CH",
                "idDueño" => NULL,
                "recid" => 4,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "Stgo. HistOcupCH R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //4
                "nombre" => "Historias Ocupacionales CH",
                "idDueño" => NULL,
                "recid" => 4,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "Stgo. HistOcupCH R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //4
                "nombre" => "Historias Ocupacionales",
                "idDueño" => NULL,
                "recid" => 4,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "Stgo. HistOcup R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //4
                "nombre" => "Grupos Medicos Sheq",
                "idDueño" => NULL,
                "recid" => 4,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "SGO. Medicos SHE Q.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL
            ],
            [ //5
                "nombre" => "Usuario SQL BART en produccion CH02 Ingreso",
                "idDueño" => NULL,
                "recid" => 5,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "SQL P-BART CH02 IP",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR"
            ],
            [ //5
                "nombre" => "Usuario SQL BART en produccion CH02 CONSULTA",
                "idDueño" => NULL,
                "recid" => 5,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "SQL P-BART CH02 0P",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR"
            ],
            [ //5
                "nombre" => "Usuario SQL BART en produccion CH02 APROBACION",
                "idDueño" => NULL,
                "recid" => 5,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "SQL P-BART CH02 IP",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR"
            ],
            [ //5
                "nombre" => "Usuario SQL BART en produccion CH02 ADMINISTRACION",
                "idDueño" => NULL,
                "recid" => 5,
                "pais" => "CL",
                "recurso_ellipse" => 1,
                "nota" => NULL,
                "grupo_nt" => "SQL P-BART CH02 IP",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR"
            ],
            [ //5
                "nombre" => "Acesso General para Usuarios",
                "idDueño" => NULL,
                "recid" => 5,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "P-BART",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 1,
                "tag_nota" => "DATO OBLIGATORIO: NOMBRE DEL COMPUTADOR"
            ],
            [ //6
                "nombre" => "Usuario solo Lectura ADQUISICIONES Y CONTRATO",
                "idDueño" => NULL,
                "recid" => 6,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. LBXP 10.R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL,
            ],
            [ //6
                "nombre" => "Usuario Lectura TODO Desarrollo lob",
                "idDueño" => NULL,
                "recid" => 6,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. LBXP R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL,
            ],
            [ //6
                "nombre" => "Usuario Escritura General y Lectura Resto",
                "idDueño" => NULL,
                "recid" => 6,
                "pais" => "CL",
                "recurso_ellipse" => 0,
                "nota" => NULL,
                "grupo_nt" => "SGO. LBXP 1.R.GG",
                "tabla_aso" => "TABLA ESTANDAR",
                "activo" => 1,
                "req_accion" => 1,
                "req_nota" => 0,
                "tag_nota" => NULL,
            ]

        ]);
    }
}
