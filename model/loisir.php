<?PHP
class loisir
{
	private $id;
	private $categorie;
	private $prix;
	private $nom_loisir;
	function __construct($id,$categorie,$prix,$nom_loisir)
	{
		$this->id=$id;
		$this->categorie=$categorie;
		$this->prix=$prix;
		$this->nom_loisir=$nom_loisir;
	}
	function getid(){
		return $this->id;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getprix(){
		return $this->prix;
	}
	function getnom_loisir(){
		return $this->nom_loisir;
	}


	function setid($id){
		$this->id=$id;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setnom_loisir($nom_loisir){
		$this->nomloisir=$nom_loisir;
	}

}

?>