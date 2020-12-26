<?php
    class utilisateur{
        private ?int $cin = null;
        private ?string $nom = null;
        private ?string $prenom = null;
        private ?string $email = null;
        private ?string $login = null;
        private ?string $password = null;
        private ?string $ville = null;
        private ?int $tel = null;
        private ?string $role = 'client';

    function __construct(int $cin, string $nom, string $prenom, string $email, string $login, string $password, string $ville, int $tel){
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->login=$login;
        $this->password=$password;
        $this->ville=$ville;
        $this->tel=$tel;


    }

    public function getCin()
    {
        return $this->cin;
    }

    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
            return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }


    }

class carte
{
    private ?int $cin = null;
    private ?int $pts = null;

    function __construct(int $cin, int $pts)
    {
        $this->cin = $cin;
        $this->pts = $pts;
    }

    public function getCin()
    {
        return $this->cin;
    }

    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    public function getPts()
    {
        return $this->pts;
    }

    public function setPts($pts)
    {
        $this->pts = $pts;
    }
}






    ?>