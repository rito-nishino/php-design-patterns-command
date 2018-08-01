<?php
require_once 'autoload.php';

use App\Invoker\Queue;
use App\Receiver\Ramen;
use App\Command\ShouyuCommand;
use App\Command\MisoCommand;
use App\Command\ShioCommand;
use App\Command\TonkotsuCommand;

$queue = new Queue();

// ４人分のオーダーです。
$queue->addCommand(new ShouyuCommand(new Ramen()));
$queue->addCommand(new MisoCommand(new Ramen()));
$queue->addCommand(new ShioCommand(new Ramen()));
$queue->addCommand(new TonkotsuCommand(new Ramen()));

$queue->run();

echo '<hr>';

// 次は、５人分のオーダーです。
$queue->addCommand(new TonkotsuCommand(new Ramen()));
$queue->addCommand(new MisoCommand(new Ramen()));
$queue->addCommand(new TonkotsuCommand(new Ramen()));
$queue->addCommand(new ShouyuCommand(new Ramen()));
$queue->addCommand(new ShioCommand(new Ramen()));

$queue->run();