<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $guarded  = [];    

    // Formata o CNPJ ao retornar
   /*
    public function getCnpjAttribute($value)
    {
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "$1.$2.$3/$4-$5", $value);
    }

    // Remove a formatação do CNPJ para salvar
    public function setCnpjAttribute($value)
    {
        $this->attributes['cnpj'] = preg_replace('/\D/', '', $value);
    }
        */
}
