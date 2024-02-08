<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Korisnik extends Model
{
    protected $table = 'korisnik';
    protected $primaryKey = 'id';
    protected $fillable = ['korisničko_ime', 'mail', 'lozinka'];
    
    use HasFactory;
}
class User extends Authenticatable implements MustVerifyEmail
{
    
}