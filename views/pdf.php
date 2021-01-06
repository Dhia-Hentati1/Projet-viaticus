

    <?php
    
    require("fpdf/fpdf.php");
    $db=new PDO('mysql:host=localhost;dbname=tache_web', 'root', '');  
    
    class myPDF extends FPDF
    {
    	
    	function header()
    	{
    		$this->SetFont("Arial","B",14);
            $this->Cell(10,10,"viactus",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des loisir:",'C');
            $this->ln();
    	}
    	function headertable()
    	{
    		$this->SetFont('Times','B',12);
    		$this->Cell(40,10,'id',1,0,'C');
    		$this->Cell(20,10,'categorie',1,0,'C');
    		$this->Cell(40,10,'prix',1,0,'C');
    		$this->Cell(40,10,'nom_loisir',1,0,'C');
    		$this->ln();
    	}
    	function viewsTable($db)
    	{ 
    		$this->SetFont('times','',12);
    		$stmt = $db->query("SElECT * From activite");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
    		    $this->Cell(40,10,$data->id,1,0,'C');
    		    $this->Cell(20,10,$data->categorie,1,0,'L');
    		    $this->Cell(40,10,$data->prix,1,0,'L');
    		    $this->Cell(40,10,$data->nom_loisir,1,0,'C');
    		    $this->ln();
            }

    	}
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("liste_des_loisir.pdf", "D");


?>
