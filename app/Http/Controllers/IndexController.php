<?php
/**
 * Created by PhpStorm.
 * User: romario
 * Date: 03/07/17
 * Time: 22:10
 */

namespace App\Http\Controllers;

class IndexController
{

    public function index()
    {
        return view('index.index');
    }
}