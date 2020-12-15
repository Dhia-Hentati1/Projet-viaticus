<?PHP
	class Vol{
		private ?int $id_vol = null;
		private ?string $compagnie = null;
		private ?string $Email = null;
		private ?string $date_depart = null;
		private ?string $date_arrivee = null;
		private ?string $heure_depart = null;
		private ?string $heure_arrivee = null;
		private ?string $ville_depart = null;
		private ?string $ville_arrivee = null;
		//private ?string $escale = null;
		private ?string $classe = null;
		private ?float $prix = null;

		function __construct(string $compagnie, string $Email, string $date_depart, string $date_arrivee, string $heure_depart, string $heure_arrivee, string $ville_depart, string $ville_arrivee, string $classe, float $prix){
			
			$this->compagnie=$compagnie;
			$this->Email=$Email;
			$this->date_depart=$date_depart;
			$this->date_arrivee=$date_arrivee;
			$this->heure_depart=$heure_depart;
			$this->heure_arrivee=$heure_arrivee;
			$this->ville_depart=$ville_depart;
			$this->ville_arrivee=$ville_arrivee;
			//$this->escale=$escale;
			$this->classe=$classe;
			$this->prix=$prix;
		}
		
		function getId_vol(): int{
			return $this->id_vol;
		}
		function getCompagnie(): string{
			return $this->compagnie;
		}
		function getEmail(): string{
			return $this->Email;
		}
		function getDate_depart(): string{
			return $this->date_depart;
		}
		function getDate_arrivee(): string{
			return $this->date_arrivee;
		}
		function getHeure_depart(): string{
			return $this->heure_depart;
		}
		function getHeure_arrivee(): string{
			return $this->heure_arrivee;
		}
		function getVille_depart(): string{
			return $this->ville_depart;
		}
		function getVille_arrivee(): string{
			return $this->ville_arrivee;
		}
		function getClasse(): string{
			return $this->classe;
		}
		function getPrix(): float{
			return $this->prix;
		}
		
		function setCompagnie(string $compagnie): void{
			$this->companie=$companie;
		}
		function setEmail(string $Email): void{
			$this->Email=$Email;
		}
		function setDate_depart(string $date_depart): void{
			$this->date_depart=$date_depart;
		}
		function setDate_arrivee(string $date_arrivee): void{
			$this->date_arrivee=$date_arrivee;
		}
		function setHeure_depart(string $heure_depart): void{
			$this->heure_depart=$heure_depart;
		}
		function setHeure_arrivee(string $heure_arrivee): void{
			$this->heure_arrivee=$heure_arrivee;
		}
		function setVille_depart(string $ville_depart): void{
			$this->ville_depart=$ville_depart;
		}
		function setVille_arrivee(string $ville_arrivee): void{
			$this->ville_arrivee=$ville_arrivee;
		}
		function setClasse(string $classe): void{
			$this->classe=$classe;
		}
		function setPrix(float $prix): void{
			$this->prix;
		}
		

	}
?>