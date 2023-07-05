<?php

namespace App\Controllers;

class LuckyNumber extends BaseController
{
    public function random()
    {
        $rand_numbers = [];

        for ($i = 1; $i <= 6; $i++) {
            $rand_numbers[] = rand(222, 456);
        }

        return view('templates/header', ['title' => 'Lucky Number Generator'])
            . view('luckynumber/luckyno', ['rand_numbers' => $rand_numbers])
            . view('templates/footer');
    }

    public function random_stock()
    {
        $model = model(LuckyNumberModel::class);

        $rand_numbers = ['AAPL','GOOGL','BA','MSFT','TSLA','JPM','NFLX','V','DIS','PYPL'];

        for ($i = 1; $i <= 3; $i++) {
            $rand_numbers[] = rand(222, 456);
        }

        $date = date('Y-m-d H:i:s');

        $data = [
            'toto_number' => implode(',', $rand_numbers),
            'date_time' => $date,
        ];

        $model->save($data);

        return view('templates/header', ['title' => 'Lucky Number Generator'])
            . view('luckynumber/totoresult', ['data' => $data])
            . view('templates/footer');
    }
}
