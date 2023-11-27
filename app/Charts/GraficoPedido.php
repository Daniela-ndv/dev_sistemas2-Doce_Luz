<?php

namespace App\Charts;

use App\Models\Pedido;
use App\Models\Status;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficoPedido
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $status = Status::with('pedidos')->get(); 
        //dd($status);
        $i = 0;
        foreach ($status as $item) {
            $qtdPedidos = 0;
            $qtdPedidos = count($item->pedidos);
            $statusArray[$i] = $item->nome;
            $qtdPedidosArray[$i] = $qtdPedidos;
            $i++;
        }

        return $this->chart->horizontalBarChart()
            ->setTitle('Quantidade de pedidos por status.')
            ->setSubtitle('Quantidade de pedidos em cada parte do processo.')
            ->setColors(['#be123c']) //['#FFC107', '#D32F2F']
            ->addData('Quantidade de pedidos', $qtdPedidosArray) //quantidade de pedidos //$qtdIngressos->all()
            //->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->setXAxis($statusArray); //eventos
    }
}
