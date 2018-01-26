<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    /**
     * Index
     */
    public function index(){
        $titulo = "album de fotos de chko";
        $descripcion = "Este es mi album de fotos  . . .";
        $mensajes = Message::paginate(20);
        //dd($mensajes);
        //$mensajes = [];
        // $mensajes = [
        //     [
        //         'id'=>1,
        //         'content'=>'Esta es la imagen 1',
        //         'fotografia' => 'http://lorempixel.com/348/255?1'
        //     ],
        //     [
        //         'id'=>2,
        //         'content'=>'Esta es la imagen 2',
        //         'fotografia' => 'http://lorempixel.com/348/255?2'
        //     ],
        //     [
        //         'id'=>3,
        //         'content'=>'Esta es la imagen 3',
        //         'fotografia' => 'http://lorempixel.com/348/255?3'
        //     ],
        //     [
        //         'id'=>4,
        //         'content'=>'Esta es la imagen 4',
        //         'fotografia' => 'http://lorempixel.com/348/255?4'
        //     ],
        //     [
        //         'id'=>5,
        //         'content'=>'Esta es la imagen 5',
        //         'fotografia' => 'http://lorempixel.com/348/255?5'
        //     ],
        //     [
        //         'id'=>6,
        //         'content'=>'Esta es la imagen 6',
        //         'fotografia' => 'http://lorempixel.com/348/255?6'
        //     ],
        //     [
        //         'id'=>7,
        //         'content'=>'Esta es la imagen 6',
        //         'fotografia' => 'http://lorempixel.com/348/255?6'
        //     ],
        //     [
        //         'id'=>8,
        //         'content'=>'Esta es la imagen 8',
        //         'fotografia' => 'http://lorempixel.com/348/255?8'
        //     ],
        //     [
        //         'id'=>9,
        //         'content'=>'Esta es la imagen 9',
        //         'fotografia' => 'http://lorempixel.com/348/255?6'
        //     ],
        //     [
        //         'id'=>10,
        //         'content'=>'Esta es la imagen 10',
        //         'fotografia' => 'http://lorempixel.com/348/255?10'
        //     ],
        //     [
        //         'id'=>11,
        //         'content'=>'Esta es la imagen 11',
        //         'fotografia' => 'http://lorempixel.com/348/255?11'
        //     ],
        //     [
        //         'id'=>11,
        //         'content'=>'Esta es la imagen 11',
        //         'fotografia' => 'http://lorempixel.com/348/255?11'
        //     ]
        // ];
        return view('welcome', ['titulo'=>$titulo, 'mensajes'=>$mensajes, 'descripcion'=>$descripcion ]);
        //return view('layouts.plantilla')
    }


    public function showMessage($id){
        $mensaje = Message::findOrFail($id);
        return view('messages.show', ['titulo'=>"asas",'mensaje'=>$mensaje]);
    }

    /**
     * Acerca de
     */
    
     public function acercaDe(){
            //return "acerca de nosotros";
            $links = [
                'google' => 'https://www.google.com',
                'microsoft'=>'https://www.microsoft.com',
                'amazon'=>'https://www.amazon.com',
                'apple'=>'https://www.apple.com'
            ];
            $usuarios = [
                'Liz',
                'juan',
                'Pedro',
                'Laura',
                'Lupe'            ];

            $titulo = "acerca de";

            return view('profile.acerca')
            ->with('usuarios',$usuarios)
            ->with('links',$links)
            ->with('titulo',$titulo);
        }
    
        public function articulos(){
            return "listado de articulos";

        }

        public function detalleArticulo($id){
            return "Detalle : del artículo {$id}";
        }

        public function multipleParams($id, $valor){
            return "Multple: {$id}, {$valor}";
        }

        public function Opcional($nombre=null){
            if (empty($nombre)):
                return "Hola anónimo";
             else:
                return $nombre;
             endif;
        }

        public function validacionRegex($id){
            return "id con validacion {$id}";
        }

        public function multipleValidations($id, $value){
            return $id . "_" . $value;
        }    




}
