<?php

use App\Models\operationshift;
use App\Models\link;


if (!function_exists('get_operationshift')) {
   function get_operationshift()
   {
       return \App\Models\Operationshift::all(); 
   }
}

function get_operationshift_data($key){
   $data = operationshift::where('Shift', $key)->first();
   if (isset($data)) {
      return $data;
   }
}

if (!function_exists('get_link')) {
   function get_link()
   {
       return \App\Models\link::all(); 
   }
}

function get_link_value($key)
{
   $data = link::where('Judul', $key) ->first();
   if (isset($data)) {
      return $data ;
   }
}

function get_link_data($key)
{
   $data = link::where('Image', $key) ->first();
   if (isset($data)) {
      return $data ;
   }
}
