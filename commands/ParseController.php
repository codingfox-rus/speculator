<?php
namespace app\commands;

use yii\console\Controller;
use app\components\parsers\ByBit;

class ParseController extends Controller
{
    public function actionIndex()
    {
        $parser = new ByBit();
        
        $data = $parser->getData();
        
        print_r($data);
    }        
}
