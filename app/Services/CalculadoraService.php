<?php

namespace App\Services;


class CalculadoraService
{
    public function sum($num1, $num2)
    {
        try {

            $result = $num1 + $num2;

        } catch (\Throwable $th) {
            
            return [
                'success' => false,
                'message' => 'Erro ao fazer soma'
            ];
        }

        return [
            'success' => true,
            'message' => 'Soma feita com sucesso',
            'data' => $result
        ];
    }
}