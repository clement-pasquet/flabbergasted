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
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields = ['mail', 'password', 'status', 'username', 'nom', 'prenom'];

    // Donne l'utilisateur dont l'id est donné en paramètre ou tous les users si rien n'est donné
    public function getUser($id_user = false)
    {
        if ($id_user === false) {
            return $this->findAll();
        }

        return $this->where(['id_user' => $id_user])->first();
    }

    public function setMail($id_user, $newEmail)
    {
        $data = [
            'mail' => $newEmail,
        ];

        return $this->update($id_user, $data);
    }

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)
            ->first();
    }

    // Setter pour modifier le nom d'un utilisateur
    public function setNom($id_user, $nom)
    {
    $data = [
        'nom'    => $nom,
    ];

    return $this->update($id_user, $data);
    }

    // Setter pour modifier le prenom d'un utilisateur
    public function setPrenom($id_user, $prenom)
    {
    $data = [
        'prenom' => $prenom,
    ];

    return $this->update($id_user, $data);
    }


    // Setter pour modifier le prenom d'un utilisateur
    public function setPassword($id_user, $password)
    {
        $data = [
            'password' => $password,
        ];

        return $this->update($id_user, $data);
    }

}