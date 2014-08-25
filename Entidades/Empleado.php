<?php

class Empleado {
    protected $id;
    protected $name;
    protected $id_empresa;
    protected $cargo;

    public function __construct($numero)
    {
        $this->id=$numero;
        $consulta= new Consulta("SELECT * from empleados where id='$numero'");
        $resultado= $consulta->retorna_resultado();
        if($row=$resultado->fetch_array())
        {
            $this->name=$row['nombre'];
            $this->cargo=$row['cargo'];
            $this->id_empresa=$row['id_empresa'];
        }
        else
        {
            $this->name="";
            $this->cargo="";
            $this->id_empresa="";
        }
        $resultado->close();
    }
} 