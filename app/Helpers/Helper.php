<?php

namespace App\Helpers;

class Helper{

    public static function IDGenerator($model ,$trow, $length = 6 , $prefix)
    {
        $last_number = '';
             $data = $model::orderBy('id','desc')->first();

             if(!$data)
             {
                $kh_length = $length;
                
             }else{
                $code = substr($data->$trow, strlen($prefix) + 1);
                $actual_last_number = ($code / 1) * 1;
                 $increment_last_number = $actual_last_number + 1;
                 $last_number_length = strlen($increment_last_number);
                 $kh_length          =$length - $last_number_length;
                 $last_number =$increment_last_number;
             }
             $zeros = '';
             for($i=0; $i < $kh_length; $i++)
             {
              $zeros .="0";
             }
             return $prefix . '-' .$zeros . $last_number;
    }
}