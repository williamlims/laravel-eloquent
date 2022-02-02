<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CalculadoraService;

class CalculadoraController extends Controller
{

    /**
     * @var PostService
     */
    protected $service;

    /**
     * Método contrutor
     * @param PostService $service
     */
    public function __construct(CalculadoraService $service)
    {
        $this->service = $service;
    }
    
    public function sum($num1, $num2)
    {
        $response = $this->service->sum($num1, $num2);
        if(!$response['success'])
        {
            return back()->with('error', $response['message']);
        }
        return redirect('calculator', compact('response'));
    }

}
