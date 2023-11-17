<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan (){
        return view ("informasijurusan/index");
    } 
    public function teknik_informatika (){
        return view ("informasijurusan/teknik_informatika");
    } 
    public function kampus (){
        return view ("INFROMASIKAMPUS/informasi");
    } 
    public function if (){
        return view ("INFROMASIKAMPUS/IF");
    } 
    public function si (){
        return view ("informasijurusan/sistem_informasi");
    } 
    public function sk (){
        return view ("informasijurusan/sistem_komputer");
    } 
    public function ti (){
        return view ("informasijurusan/teknologi_informasi");
    } 

}
