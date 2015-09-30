<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model{


	protected $table = 'endereco';
    protected $primaryKey = 'cd_endereco';
    public $timestamps = false;

	protected $fillable = ['en_logradouro', 'en_complemento', 'dt_nascimento'];


}




