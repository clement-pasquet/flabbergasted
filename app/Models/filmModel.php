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
}