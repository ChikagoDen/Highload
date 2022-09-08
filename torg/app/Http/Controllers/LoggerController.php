<?php

namespace App\Http\Controllers;

use App\Handlers\LoggerHandlerInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggerController implements  LoggerControllerInterface
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//    public function __construct(LoggerHandlerInterface $handler){}
    public  function  index(Request $request):void
    {
        $time_start=date('d.m.Y H:i:s:ms');;
        log::info('Start time '.$time_start);
        echo 1;
        $this->index($request);
        log::debug(memory_get_usage());
        $time_end=date('d.m.Y H:i:s:ms');
        log::info('End time '.$time_end);
    }
    public function  babelSort ()
    {
        for($i=0;$i<3000;$i++)
        {
            $array[]=rand(0,3000);
        }
        echo 'Начальный массив: '.implode(",", $array).'<br>';
        $time_start=date('d.m.Y H:i:s:ms');;
        log::info('Start time '.$time_start);
// перебираем массив
        for ($j = 0; $j < count($array) - 1; $j++){
            for ($i = 0; $i < count($array) - $j - 1; $i++){
                // если текущий элемент больше следующего
                if ($array[$i] > $array[$i + 1]){
                    // меняем местами элементы
                    $tmp_var = $array[$i + 1];
                    $array[$i + 1] = $array[$i];
                    $array[$i] = $tmp_var;
                }
            }
        }
        log::debug(memory_get_usage());
        echo 'Отсортированный массив: '.implode(",", $array).'<br>';
        $time_end=date('d.m.Y H:i:s:ms');
        log::info('End time '.$time_end);
    }

}
