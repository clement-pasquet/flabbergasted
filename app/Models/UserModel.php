<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'utilisateur';
    protected $primaryKey           = 'id_user';
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields = ['mail', 'password', 'status', 'username', 'nom', 'prenom'];


    public function getUser($id_user)
    {
        return $this->find($id_user);
    }

    public function setEmail($id_user, $newEmail)
    {
        $data = [
            'email' => $newEmail,
        ];

        return $this->update($id_user, $data);
    }

    public function getUserByUsernameOrEmail($usernameOrEmail)
    {
        return $this->where('username', $usernameOrEmail)
            ->orWhere('mail', $usernameOrEmail)
            ->first();
    }
}