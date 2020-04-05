<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'name'=> 'Algoritmos y Estructura de Datos',
                'year'=> '1',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Fisica I',
                'year'=> '1',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Analisis Matematico I',
                'year'=> '1',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Sistemas y Organizaciones',
                'year'=> '1',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Algebra y Geometria Analitica',
                'year'=> '1',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Matematica Discreta',
                'year'=> '1',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Analisis de Sistemas',
                'year'=> '2',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Arquitectura de Computadoras',
                'year'=> '2',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Sistema de Representacion',
                'year'=> '2',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Sintaxis y Semantica de la Programacion',
                'year'=> '2',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Analisis Matematica II',
                'year'=> '2',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Fisica II',
                'year'=> '2',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Ingles I',
                'year'=> '2',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Quimica',
                'year'=> '2',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Paradigma de Programacion',
                'year'=> '2',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Diseño de Sistemas',
                'year'=> '3',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Complejidad y Tecnicas de Diseño de Algortimos',
                'year'=> '3',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Comunicaciones',
                'year'=> '3',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Economia',
                'year'=> '3',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Gestion de Datos',
                'year'=> '3',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Ingenieria y Sociedad',
                'year'=> '3',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Ingles II',
                'year'=> '3',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Probabilidades y Estaticas',
                'year'=> '3',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [       
                'name'=> 'Base de Datos Aplicadas',
                'year'=> '3',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Comunicaciones y Redes',
                'year'=> '3',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Matematica Superior',
                'year'=> '3',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Planificacion',
                'year'=> '3',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Sistemas Operativos',
                'year'=> '3',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Administracion de Recursos',
                'year'=> '4',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Desarrollo de Aplicaciones Cliente-Servidor',
                'year'=> '4',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Habilitacion Profesional',
                'year'=> '4',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Ingenieria de Software',
                'year'=> '4',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Investigacion Operativa',
                'year'=> '4',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Legislacion',
                'year'=> '4',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Simulacion',
                'year'=> '4',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Calidad del Producto y del Proceso Software',
                'year'=> '4',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                
                'name'=> 'Redes de Informacion',
                'year'=> '4',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Sistemas de Informacion Geograficos',
                'year'=> '4',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Teoria de Control',
                'year'=> '4',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Tecnicas de Desarrollo de Software Agil',
                'year'=> '4',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Proyecto Final',
                'year'=> '5',
                'dictation'=>'Anual',
                'type'=>''
            ],
            [
                'name'=> 'Administracion Gerencial',
                'year'=> '5',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Formacion de Emprendedores',
                'year'=> '5',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Gestion de Seguridad de la Informacion',
                'year'=> '5',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Sistema de Gestion',
                'year'=> '5',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Sistema de Inteligencia de Negocios y S',
                'year'=> '5',
                'dictation'=>'Primer Cuatrimestre',
                'type'=>''
            ],
            [            
                'name'=> 'Practica Supervisada',
                'year'=> '5',
                'dictation'=>'Primer/Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Auditoria de Sistemas e Informacion Forence',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Auditoria de Sistemas',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Diseño y Desarrollo de Videojuegos',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Empredimientos Tecnologicos',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Fundamentos de Ciberseguridad',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ],
            [
                'name'=> 'Gestion de Servicios e Infraestructura',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Integracion de Desarrollo y Operacion',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Inteligencia Artificial',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>''
            ],
            [
                'name'=> 'Programacion Competitiva',
                'year'=> '5',
                'dictation'=>'Segundo Cuatrimestre',
                'type'=>'Electiva'
            ]
        ]);
    }
}
