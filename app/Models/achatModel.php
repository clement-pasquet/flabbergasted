<?php
namespace App\Models;

use CodeIgniter\Model;

class achatModel extends Model
{
    protected $table = 'achat';
    protected $primaryKey = ['id_user', 'id_film'];

    // Crée un nouvelle achat grace a id_user et id_film
    public function setAchat($id_user, $id_film)
    {
        $data = [
            'id_user' => $id_user,
            'id_film' => $id_film,
        ];

        // Insérer le nouvel achat dans la base de données
        return $this->insert($data);

    }

}