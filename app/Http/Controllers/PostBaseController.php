<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Post\Service;

class PostBaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
