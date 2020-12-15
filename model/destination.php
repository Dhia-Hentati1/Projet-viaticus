<?PHP
	class Ville_arrivee{
		private ?int $id_destination = null;
		private ?string $ville = null;
		private ?string $pays = null;
		private ?string $image = null;
		private ?string $description =null;
	
		

		function __construct(string $ville, string $pays, string $image, string $description){
			
			$this->ville=$ville;
			$this->pays=$pays;
			$this->image=$image;
			$this->description=$description;
			
		}
		
		function getId_destination(): int{
			return $this->id_destination;
		}
		function getVille(): string{
			return $this->ville;
		}
		function getPays(): string{
			return $this->pays;
		}
		function getImage(): string{
			return $this->image;
		}
		function getDescription(): string{
			return $this->description;
		}
		
		
		
		function setVille(string $ville): void{
			$this->ville=$ville;
		}
		function setPays(string $pays): void{
			$this->pays=$pays;
		}
		function setImage(string $image): void{
			$this->image=$image;
		}
		function setDescription(string $description): void{
			$this->description=$description;
		}
		
		
		

	}
?>