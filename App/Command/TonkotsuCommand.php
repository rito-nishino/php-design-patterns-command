<?php

namespace App\Command;

use App\Command\Interfaces\CommandInterface;
use App\Receiver\Ramen;

class TonkotsuCommand implements CommandInterface
{
    private $category = 'とんこつ';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * とんこつラーメンを作る処理
         */

        $this->ramen->call();
    }
}