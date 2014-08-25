<?php

class Empresa {
    protected $id;
    protected $nombre;
    protected $rut;
    protected $giro;
    protected $direccion;
    protected $fono;
    protected $email;

    public function __construct($numero)
    {
        $this->id=$numero;
        $buscar= new Consulta("SELECT * FROM empresa where id='$numero'");

        $respuesta= $buscar->retorna_resultado();

        if($fila_res=$respuesta->fetch_array()){
            $this->nombre=$fila_res['nombre'];
            $this->rut=$fila_res['rut'];
            $this->giro=$fila_res['giro'];
            $this->direccion=$fila_res['direccion'];
            $this->fono=$fila_res['fono'];
            $this->email=$fila_res['email'];
        }
    }

    public function lista_empleados()
    {
        $busca = new Consulta("SELECT * FROM empleados where id_empresa='".$this->id."'");

        return $busca->retorna_resultado();
    }

    public function lista_items()
    {
        $busca = new Consulta("SELECT * FROM items where id_empresa='".$this->id."'");

        return $busca->retorna_resultado();
    }
    public function nombre_empresa()
    {
        return $this->nombre;
    }
} 