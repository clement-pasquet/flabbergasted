<?php
namespace app\models\entity;
class User
{

    private string $mail;
    private string $password;
    private string $status;
    private string $username;
    private string $nom;
    private string $prenom;

    public function isValidPassword(string $password):bool {
        return password_verify($password, $this->password);
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }
    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return false|string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param false|string|null $password
     */
    public function setPassword($password): void
    {
        $this->password =password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @param false|string|null $password
     */
    public function setEncryptedPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }
    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
}