<?php

namespace BastienRouge\Home\Infrastructure\Http\Controllers;

use BastienRouge\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('Home/home');
    }
}
