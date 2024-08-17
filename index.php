<?php 
require_once 'modelo/estacionamiento.php';
require_once 'modelo/tipodevehiculo.php';

$e1= new Estacionamiento();
$e1->Id = '1';
$e1->FechaHoraIngreso= '24-08-16T12.24';
$e1->FechaHoraSalida= '24-08-16T13.45';
$e1->Precio= '$1000';

$e2= new Estacionamiento();
$e2->Id = '2';
$e2->FechaHoraIngreso= '24-08-16T13.30';
$e2->FechaHoraSalida= '24-08-16T16.30';
$e2->Precio= '$3000';

$e3= new Estacionamiento();
$e3->Id = '3';
$e3->FechaHoraIngreso= '24-08-16T16.01';
$e3->FechaHoraSalida= '24-08-16T18.02';
$e3->Precio= '$2000';

$t= new TipodeVehiculo();
$t-> Id= '1';
$t->Descripcion= 'Auto';


$t->ListaEstacionamientos[]=$e1;
$t->ListaEstacionamientos[]=$e2;
$t->ListaEstacionamientos[]=$e3; 

$t->MostrarDatos();