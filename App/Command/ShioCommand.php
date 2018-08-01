<?php

namespace App\Command;

use App\Command\Interfaces\CommandInterface;
use App\Receiver\Ramen;

class ShioCommand implements CommandInterface
{
    private $category = 'しお';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /*
         * 塩ラーメンを作る処理
         */

        $this->ramen->call();
    }
}