<?php

namespace App\Traits;

use App\Models\Car;
use  Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

Trait Common 
{
    public function uploadFile($file, $path){
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $file->move($path, $file_name);
        return $file_name;
    }


 
    













}


