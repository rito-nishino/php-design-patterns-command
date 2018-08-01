<?php

namespace App\Command;

use App\Command\Interfaces\CommandInterface;
use App\Receiver\Ramen;

class ShouyuCommand implements CommandInterface
{
    private $category = 'しょうゆ';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * 醤油ラーメンを作る処理
         */

        $this->ramen->call();
    }
}