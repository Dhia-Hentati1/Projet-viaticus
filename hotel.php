<?PHP
	class hotel
	{
		private $nom ;
		private $adresse;
		private $prix;
        private $photo;
        private  $categorie;
        private $service ;
		
		
		function __construct(string $nom,string $adresse, string $categorie,string $photo,int $prix, string $service){
			
			$this->nom=$nom;
			$this->prix=$prix;
            $this->photo=$photo;
            $this->categorie=$categorie;
            $this->service=$service;
            $this->adresse=$adresse;
			
		}
		
		public function getnom() {
			return $this->nom;
		}
		public function getphoto(){
			return $this->photo;
		}
		public function getprix(){
			return $this->prix;
		}
		public function getadresse(){
			return $this->adresse;
        }
        public function getcategorie(){
			return $this->categorie;
        }
        public function getservice(){
			return $this->service;
        }

		public function setnom( $nom){
			$this->nom=$nom;
		}
		public function setprix( $prix){
			$this->prix;
		}
		public function setphoto( $photo){
			$this->photo=$photo;
		}
		public function setadresse( $adresse){
			$this->adresse=$adresse;
        }
        public function setcategorie( $categorie){
			$this->categorie=$categorie;
        }
        public function setservice( $service){
			$this->service=$service;
        }


	}
?>