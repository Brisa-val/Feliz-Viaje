<?php

include "Viaje.php";


   $arregloViaje=array();
   $array =array(
      "Nombre" => "mateo",
      "Apellido"=> "alberto",
      "Dni"=>42448004);
   
   $Viaje= new Viaje(1,"Brasil",2,$array);
   
   array_push($arregloViaje,$Viaje);
   $opcion=1;


   function newLine(){
      echo"============================================\n";
   }
   function mostrarBienvenida(){
    echo " Bienvenido a Viaje Feliz \n";
    newLine();
   }
   function mostrarMenu(){
    newLine();
    echo "Menu: \n";
    echo "1 - Mostrar \n";
    echo "2 - Ingresar datos Viaje. \n";
    echo "3 - ingresar datos Pasajeros. \n";
    echo "4 - Modificar \n";
    echo "5 - Salir.\n";
    newLine();
    echo "ingrese el numero:  ";

   }

   mostrarBienvenida();

   while($opcion!=5){
      mostrarMenu();
      $opcion = trim(fgets(STDIN));
      opcionElegida($opcion);
   }

    function addPasajero($nuevoViaje){
      if(count($nuevoViaje->getPasajeros()) < $nuevoViaje->getMaximoPasajeros());
   }

   function opcionElegida($opcion){
   Global $arregloViaje;
   switch ($opcion)
   {
      case 1:
         if(count($arregloViaje)!=0){
            foreach ($arregloViaje as $objetoViaje) {
               print_r($objetoViaje);
           }
            
         }else{
            echo "No hay datos para mostrar";
         }
      
         break;
      case 2:
         //Cargo los datos del viaje
         echo "Ingrese código Viaje: ";
         $codigo = trim(fgets(STDIN));
         echo "Ingrese Destino: ";
         $destino = trim(fgets(STDIN));
         echo "Ingrese maximo de Pasajeros: ";
         $maximoPasajero = trim(fgets(STDIN));
         $array = array();
         $viaje= new Viaje($codigo,$destino,$maximoPasajero,$array);

         array_push($arregloViaje,$viaje);
         break;
      case 3:
               //Mustro los datos a mostrar
               echo "datos del pasajero \n";
               echo "ingrese nombre:";
               $nombre =trim(fgets(STDIN));
               echo "ingrese apellido:";
               $apellido =trim(fgets(STDIN));
               echo "ingrese DNI:";
               $dni =trim(fgets(STDIN));

               $viaje-> addPasajeros($nombre,$apellido,$dni);
               break;
      case 4:
                  echo "¿Que datos desea modificar? \n";
                  echo "1 - Código viaje. \n";
                  echo "2 - Destino \n";
                  echo "3 - Cantidad de pasajero. \n";
                  echo "4 - Nombre del pasajero. \n";
                  echo "5 - Apellido del pasajero. \n";
                  echo "6 - Dni del pasajero. \n";
                  echo "Elija una opción: ";
                  $opModificar = trim(fgets(STDIN));
                  switch ($opModificar)
                  {
                     case 1:
                        echo "Ingrese el nuevo código: ";
                        $nuevoCodigo = trim(fgets(STDIN));
                        $arregloViaje[$opModificar]->setCodigo($nuevoCodigo);
                        break;
                     case 2:
                        echo "Ingrese el nuevo Destino: ";
                        $nuevoDestino = trim(fgets(STDIN));
                        $arregloViaje[$opModificar]->setDestino($nuevoDestino);
                        break;
                     case 3:
                        echo "Ingrese Cantidad Maxima de pasajero: ";
                        $nuevoCantMaxPasajero = trim(fgets(STDIN));
                        $arregloViaje[$opModificar]->setMaximoPasajeros($nuevoCantMaxPasajero);
                        break;
                     case 4:
                           echo "Ingrese el nuevo Nombre: ";
                           $modificarNombre = trim(fgets(STDIN));

                           $arrePasajero=$arregloViaje[$opModificar]->getPasajero();
                           $apellidoActual=$arrePasajero["Apellido"];
                           $dniActual=$arrePasajero["Dni"];
                           $arregloViaje[$opModificar]->setPasajeros($modificarNombre,$apellidoActual,$dniActual);
                           break;
                     case 5:
                           echo "Ingrese el nuevo Apellido: ";
                           $modificarApellido = trim(fgets(STDIN));
   
                           $arrePasajero=$arregloViaje[$opModificar]->getPasajero();
                           $nombreActual=$arrePasajero["Nombre"];
                           $dniActual=$arrePasajero["Dni"];
                           $arregloViaje[$opModificar]->setPasajeros($nombreActual,$modificarApellido,$dniActual);
                           break;
                     case 6:
                           echo "Ingrese el nuevo Dni: ";
                           $modificarDni = trim(fgets(STDIN));
      
                           $arrePasajero=$arregloViaje[$opModificar]->getPasajero();
                           $nombreActual=$arrePasajero["Nombre"];
                           $apellidoActual=$arrePasajero["Apellido"];
                           
                           $arregloViaje[$opModificar]->setPasajeros($nombreActual,$apellidoActual,$modificarDni);
                           break;
                     default:
                     echo "Opción invalida \n";
                  } 
                  echo "No hay datos para mostrar \n";
               }

      echo "la opcion elegida no es valida";
      }