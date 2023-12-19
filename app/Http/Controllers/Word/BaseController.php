<?php

namespace App\Http\Controllers\Word;


use App\Http\Controllers\Controller;
use App\Services\Word\Service;


class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = new Service();
    }
}