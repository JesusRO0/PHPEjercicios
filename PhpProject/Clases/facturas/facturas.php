<?php

class Factura{
    private $importeBase;
    private $fecha;
    private $impuestos;
    private $estado;
    const IVA=0.21;
    
    public function __construct($importeBase,$fecha,$impuestos,$estado) {
        
        $this->importeBase=$importeBase;
        $this->fecha=$fecha;
        $this->impuestos=$impuestos;
        if(strtolower($estado) == "pagado"){
            $this->estado=$estado;
        }else{
            $this->estado = "pendiente";
        }
    }
    
    public function imprime(){
        echo "Los datos de la factura son: <br>";
        echo "Importe Base: ", $this->importeBase,"<br>";
        echo "Fecha: ", $this->fecha,"<br>";
        echo "Impuestos: ", $this->impuestos,"<br>";
        echo "Estado (pagada o pendiente): ", $this->estado,"<br>";
        echo "IVA: ", self::IVA,"<br>";
        echo "El importe bruto es: ",$importeBruto=$this->importeBase *100* self::IVA,"<br><br>";
    }
    
    public function __toString() {
        return "Importe Base: ". $this->importeBase." <br>Fecha: ". $this->fecha."<br>Impuestos: ". $this->impuestos."<br>Estado: ". $this->estado."<br>IVA: ". self::IVA. "<br>Importe Bruto: ".$importeBruto=$this->importeBase *100* self::IVA;
    }
}

?>