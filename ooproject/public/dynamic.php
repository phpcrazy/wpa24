<?php


/* Method Chain */

class DynamicChain {

    public $total_amount;

    public function GateKeeper() {
        $this->total_amount = 10000;
        return $this;
    }

    public function PyarTar() {
        $this->total_amount += 40000;
        return $this;
    }

    public function Manager() {
        $this->total_amount += 100000;
        return $this;
    }

    public function CEO() {
        $this->total_amount += 500000;
        return $this;
    }

    public function TotalPayment() {
        echo $this->total_amount;
    }

}

$payment = new DynamicChain();
$payment->GateKeeper()
    ->PyarTar()
    ->Manager()
    ->CEO()
    ->TotalPayment();