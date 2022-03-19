<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DonutUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
        ->setTitle('Status Users')
            ->setSubtitle('Tahun 2022.')
            ->addData([
                \App\Models\User::where('status', 1)->count(),
                \App\Models\User::where('status', 0)->count()
            ])
            ->setLabels(['Active users', 'Inactive users']);
    }
}
