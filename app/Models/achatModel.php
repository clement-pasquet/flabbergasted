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

    // Donne tous les ids des films achetés par un user. Pas utilisé car il existe une procédure stockée pour faire la même chose
    public function getFilmIdsByUserId($id_user)
    {
        // Appel de la procédure stockée
        $query = "CALL getFilmIdsByUserId(?)";
        $result = $this->db->query($query, [$id_user]);

        return $result->getResultArray(); // Retourne un tableau des id_film
    }

}