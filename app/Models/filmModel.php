<?php
namespace App\Models;

use CodeIgniter\Model;

class filmModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id_film'; // adjust accordingly

    public function getSeries()
    {
        return $this->where('est_serie', 1)->findAll();
    }

    public function getFilmsAventure()
    {
        return $this->where(['est_serie' => 0, 'genre' => 'Aventure'])->findAll();
    }

    public function getFilmScienceFiction()
    {
        return $this->where(['est_serie' => 0, 'genre' => 'Science-fiction'])->findAll();
    }

    public function getFilmByGenre($genre, $number)
    {
        return $this->where('genre', $genre)->limit($number)->get()->getResultArray();
    }

    // Fonction pour recupérer un film selon son id. N'a pas pu encore etre testé.
    public function getFilmById($film_id)
    {
        return $this->find($film_id);
    }
    public function getFilmByTitleAndLike($titre) {
        return $this->like('Lower(titre)', strtolower($titre))->orderBy('likes', 'DESC')->findAll();
    }
}