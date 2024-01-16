<?php
namespace App\Models;

use CodeIgniter\Model;

class achatModel extends Model
{
    // Instance statique de la classe
    private static $instance;

    protected $table = 'achat';
    protected $primaryKey = ['id_user', 'id_film'];


    // Méthode pour obtenir une instance unique du modèle
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // Restreint la création d'objets en dehors de la classe
    private function __construct()
    {
        parent::__construct();
    }


    // Empêche la clonage de l'instance
    private function __clone()
    {
    }

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

    public function utilisateurPossedeFilm($id_user, $id_film)
    {
        // Vérifier si la ligne existe
        $result = $this->where(['id_user' => $id_user, 'id_film' => $id_film])->get();

        // Retourner un booléen
        return ($result->getRow() !== null);
    }
}