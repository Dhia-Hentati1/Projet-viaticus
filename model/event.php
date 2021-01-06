<?PHP
class event
{
	private $id;
	private $nom;
	private $date_events;
	private $description;
	private $emplacement;
	function __construct($id,$nom,$date_events,$description,$emplacement)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->date_events=$date_events;
		$this->description=$description;
		$this->emplacement=$emplacement;
	}
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getdate_events(){
		return $this->date_events;
	}
	function getdescription(){
		return $this->description;
	}
	function getemplacement(){
		return $this->emplacement;
	}

	function setid($id){
		$this->id=$id;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setdate_events($date_events){
		$this->date_events=$date_events;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setemplacement($emplacement){
		$this->emplacement=$emplacement;
	}

}

?>