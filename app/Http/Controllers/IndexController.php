<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    public function get()
    {
        return view('index', [
        ]);
    }
}
