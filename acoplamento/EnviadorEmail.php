<?php 
class EnviadorEmail implements AcaoAposGerarNota {

    public function executa(NotaFiscal $nf) {
         echo "email enviado  ";
    }
} ?>