<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    /**
     * La table associée au modèle.
     *
     * @var string
     */
    // protected $table = 'utilisateurs';

    /**
     * La clé primaire associée à la table.
     *
     * @var string
     */
    // protected $primaryKey = 'id';

    /**
     * Liste des attributs modifiables
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'mot_de_passe'
    ];

    /**
     * Liste des attributs cachés
     * Seront exclus dans les réponses
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}


