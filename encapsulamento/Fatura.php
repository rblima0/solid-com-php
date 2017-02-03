<?php 
class Fatura {

    private $cliente;
    private $valor;
    private $pagamentos;
    private $pago;

    public function __construct($cliente,$valor) {
        $this->cliente = $cliente;
        $this->valor = $valor;
        $this->pago = $pago;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getPagamentos() {
        return $this->pagamentos;
    }

    public function addPagamento(Pagamento $pagamento) {
        $this->pagamentos[] = $pagamento;
        
        if($this->totalDePagamentos() >= $this->valor)
            $this->pago = true;
    }

    private function totalDePagamentos(){
        $total = 0;
        foreach ($this->pagamentos as $pagamento) {
            $total += $pagamento->getValor();
        }
    }

    public function isPago() {
        return $this->pago;
    }

    public function setPago($pago) {
        $this->pago = $pago;
    }
} ?>