<?php

/*
=================================================================================
==================================== Add websites =================================
=================================================================================
*/

    ob_start(); // Headers Sent

    session_start();

    $pageTitle = 'Websites';

        
        include 'init.php';
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page?>
           <div class="error">
                <h1>404 </h1>
                <h2>Page not found <i class="fa fa-bandcamp" aria-hidden="true"></i></h2>
            </div>

       <?php 
       } elseif ($mod == 'insertWeb') { //Insert Page
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<h2 class='text-center Adm-h1'>Insert Website</h2>";
                echo "<div class='container'>";
    
                $name   = $_POST['name'];
                $cat_id = $_POST['cat_id'];
                $doma   = $_POST['domain'];
                $desc   = $_POST['description'];

                $nameFilter = filter_var($name,FILTER_SANITIZE_STRING);
                $domaFilter = filter_var($doma,FILTER_SANITIZE_URL);
                $descFilter = filter_var($desc,FILTER_SANITIZE_STRING);

               $formErrors = array();
               
               if (empty($name)) {
                   $formErrors[] = "Name field is empty";
               }
               if (empty($doma)) {
                   $formErrors[] = "The Domain field is empty";
               }
               
 
               foreach ($formErrors as $error ) {
                   $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>" . $error . "</div>";
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {

                  $check = checkItem("Domain", "websites", $domaFilter);
               if ($check == 1) {
                       
                   $theMsg = "<div class='alert alert-danger aler text-center' role='alert'>Sorry This Domain Is Exist</div>";
                   redirectHome($theMsg, 'back');
                                      
               } else {

                   $stmt = $contant->prepare("INSERT INTO 
                                                  websites(Name, Domain, Description, Add_Date, cat_ID)
                                                  VALUES(:zname, :zdomin, :zdescrip, now(), :zcatego )");
                   $stmt->execute(array(
                       'zname'     => $nameFilter,
                       'zdomin'    => $domaFilter,
                       'zdescrip'  => $descFilter,
                       ':zcatego'  => $cat_id
                   ));

                   
                   if ($stmt->rowCount() == 0){
                       $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   } else {

                       $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   }
                   

               }//$check == 1

            }

           } else {

               $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Sorry You Cant Browse This Page Directly</div>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
              
        } elseif ($mod == 'insertComment') { //Insert Comment Page
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<h2 class='text-center Adm-h1'>Insert Website</h2>";
                echo "<div class='container'>";
    
                $name   = $_POST['name'];
                $comment   = $_POST['comment'];

                $nameCommFilter = filter_var($name,FILTER_SANITIZE_STRING);
                $commentFilter = filter_var($comment,FILTER_SANITIZE_STRING);

               $formErrors = array();
               
               if (empty($name)) {
                   $formErrors[] = "Name field is empty";
               }
               if (empty($comment)) {
                   $formErrors[] = "The comment field is empty";
               }

               foreach ($formErrors as $error ) {
                   $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>" . $error . "</div>";
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {
                                      
                   $stmt = $contant->prepare("INSERT INTO 
                                                  comments(Name, Comment, Comment_date)
                                                  VALUES(:zname, :zcomment, now())");
                   $stmt->execute(array(
                       'zname'     => $nameCommFilter,
                       'zcomment'  => $commentFilter

                   ));

                   
                   if ($stmt->rowCount() == 0){
                       $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   } else {
                        
                       $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   } 

            }

           } else {

               $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Sorry You Cant Browse This Page Directly</div>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
              
        } elseif ($mod == 'insertEmail') { // Insert Email Page
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<h2 class='text-center Adm-h1'>Insert Email</h2>";
                echo "<div class='container'>";
    
                $email   = $_POST['email'];
                $emailFilter = filter_var($email,FILTER_SANITIZE_EMAIL);

               $formErrors = array();
               
               if (empty($email)) {
                   $formErrors[] = "Email field is empty";
               }

               foreach ($formErrors as $error ) {
                   $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>" . $error . "</div>";
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {
                                      
                   $stmt = $contant->prepare("INSERT INTO email(Email, Email_date)
                                                     VALUES(:zemail, now())");
                   $stmt->execute(array('zemail' => $emailFilter));

                   if ($stmt->rowCount() == 0){
                       $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   } else {
                        
                       $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Thanks for calling</div>" ;
                       redirectHome($theMsg, 'Admin');
                   }

            }

           } else {

               $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Sorry You Cant Browse This Page Directly</div>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
              
        } elseif ($mod == 'insertMessage') { // Insert Message Page
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                echo "<h2 class='text-center Adm-h1'>Insert Message</h2>";
                echo "<div class='container'>";
    
                $email      = $_POST['email'];
                $address    = $_POST['addrMes'];
                $message    = $_POST['message'];

                $emailmeFilter = filter_var($email,FILTER_SANITIZE_EMAIL);
                $addrMesFilter = filter_var($address,FILTER_SANITIZE_STRING);
                $messageFilter = filter_var($message,FILTER_SANITIZE_STRING);

               $formErrors = array();
               
               if (empty($email)) {
                   $formErrors[] = "Email field is empty";
               }
               if (empty($address)) {
                   $formErrors[] = "address field is empty";
               }
               if (empty($message)) {
                   $formErrors[] = "message field is empty";
               }

               foreach ($formErrors as $error ) {
                   $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>" . $error . "</div>";
                    redirectHome($theMsg, 'back');
               }

               if(empty($formErrors)) {
                                      
                   $stmt = $contant->prepare("INSERT INTO message(Email, address, Message, dateMessage)
                                                     VALUES(:zemail, :zaddress, :zmessage, now())");
                   $stmt->execute(array(
                       'zemail' => $emailmeFilter,
                       'zaddress' => $addrMesFilter,
                       'zmessage' => $messageFilter
                    ));

                   if ($stmt->rowCount() == 0){
                       $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Not Record Updated</div>" ;
                       redirectHome($theMsg, 'Admin');
                   } else {
                        
                       $theMsg = "<div class='alert alert-success aler text-center'role='alert'>Thanks for calling</div>" ;
                       redirectHome($theMsg, 'Admin');
                   }

            }

           } else {

               $theMsg = "<div class='alert alert-warning aler text-center'role='alert'>Sorry You Cant Browse This Page Directly</div>";
               redirectHome($theMsg);
                             
           }
                          
           echo "</div>";
                  
              
        } else {
            header('Location: index.php'); //Redirect To index Page
            exit();
    }