<?php
class TipodeVehiculo{
    public $Id;
    public $Descripcion;
    public $ListaEstacionamientos = array();

    public function MostrarDatos(){
        echo 'Id: '. $this->Id. '<br>';
        echo 'Descripcion: '. $this->Descripcion .'<br>';
        echo 'Estacionamientos: <br>';
        foreach($this->ListaEstacionamientos as $estacionamiento){
            echo $estacionamiento->Id. '- '. $estacionamiento->FechaHoraIngreso. ' - ' . $estacionamiento->FechaHoraSalida. ' - '. $estacionamiento->Precio. '<br>';
            
        }
        
    }
    }