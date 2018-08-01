<?php

namespace App\Command;

use App\Command\Interfaces\CommandInterface;
use App\Receiver\Ramen;

class MisoCommand implements CommandInterface
{
    private $category = 'みそ';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * 味噌ラーメンを作る処理
         */

        $this->ramen->call();
    }
}