<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PieUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
        ->setTitle('Status Users')
        ->addData([
            \App\Models\User::where('status', 1)->count(),
            \App\Models\User::where('status', 0)->count()
        ])
        ->setColors(['#ffc63b', '#ff6384'])
        ->setLabels(['Active users', 'Inactive users']);
    }
}
