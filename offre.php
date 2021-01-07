<?php 
    class offre {
    private  $id;
    private  $type;
    private  $idc;

        function __construct(int $id,string $type, int $idc)
        {
            $this->id = $id;
            $this->type = $type;
            $this->idc = $idc;
        }

        function getid (): int{
            return $this->id;
        }

        function gettype(): string {
            return $this->type;
        }

        function getidc ():int {
            return $this->idc;
        }

        function setid (): void {
            $this->id = $id;
        }

        function settype (): void {
            $this->type = $type;
        }

        function setidc (): void {
            $this->idc = $idc;
        }
    }

    
 ?>