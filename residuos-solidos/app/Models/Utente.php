<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class Utente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'confirma_senha',
    ];

    public static function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:utentes',
            'senha' => 'required|string|min:8|confirmed',
            'confirma_senha' => 'required|string|min:8|confirmed',
        ];
    }

}
