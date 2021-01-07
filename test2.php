<html>


                        <form id="contact" action="" method="post">
                          
                                <input name="Id" type="text" id="text" placeholder="ID to modify*" required=""><br />
                              
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              
                                <input name="cin" type="text" id="cin" placeholder="CIN*" required="">
                             
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                                  
                                  
                                 <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    
                                 <input name="type" type="text" id="type" placeholder="type*" >
                                 <input type="submit" value="ok"/>
                                
                              </form>
                              
                            <?php
  $pdo = new PDO('mysql:host=localhost;dbname=rip', 'root', '',);

  if ( isset($_POST['name'] ) AND isset($_POST['cin']) AND isset($_POST['email'] ) AND isset($_POST['phone'] ) AND isset($_POST['date'] ) AND isset($_POST['type'] ) AND isset($_POST['Id'] ))
  
  {
      $requete = $pdo->prepare("UPDATE res SET name =:name, cin =:cin , email =:email, phone =:phone, date =:date, type =:type WHERE Id =:Id");
      $requete->execute(array(':name'=>$_POST['name'],':cin'=>$_POST['cin'],':email'=>$_POST['email'],':phone'=>$_POST['phone'],':date'=>$_POST['date'],':type'=>$_POST['type'], ':Id'=>$_POST['Id'] ));
      ?>
      <?php
  }
  ?>
                             <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Modify</button>
                              </fieldset>
                             </div>      
                            
                           
                          
                        
                    
    </html>