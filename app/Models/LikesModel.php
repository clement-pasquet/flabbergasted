<?php
namespace App\Models;

use CodeIgniter\Model;

class LikesModel extends Model
{
    protected $table                = 'likes';
    protected $primaryKey           = ['id_film', 'id_user'];
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id_film', 'id_user'];


}
