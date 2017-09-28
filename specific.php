<?php

/*
=================================================================================
==================================== Add websites =================================
=================================================================================
*/

    ob_start(); // Headers Sent

    session_start();
        
        include 'init.php';
        include "navBar.php";
        
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';

        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page?>
           <div class="error">
                <h1>404 </h1>
                <h2>Page not found <i class="fa fa-bandcamp" aria-hidden="true"></i></h2>
            </div>

       <?php 
       } elseif ($mod == 'serviceProvider') { //Insert Page?>
            <h1 class="h1-admin text-center">مزود الخدمة</h1>
                <div class="card mb-3 card-web">    
                        <img class="card-img-top" src="./layout/img/social.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">كمال طبش</h3>
                        <p class="card-text">مصمم ومبرمج ويب ناشئ</p>
                    </div>
                </div>
                
 <?php             
    }elseif ($mod == 'aboutTheWebsite') { //Insert Page?>
        <h1 class="h1-admin text-center">حول</h1>
            <div class="card card-web">    
                <div class="card-body">
                    <blockquote class="blockquote mb-0 text-center">
                        <p>
                            يهدف الموقع ليكون المرجع الأول والأخير لإجاد ضالتك من أفضل المواقع ضمن مجالك ونأمل أن تشاركونا بهذه التجرية بأضافة محتوى للمرجع
                        </p>
                        <span>"العلم كالأرض، لا يمكننا أن نمتلك منه سوى القليل القليل"</span>
                    
                    </blockquote>
                </div>
            </div>
  <?php            
    }elseif ($mod == 'callUs') { //Insert Page?>

        <div class="container">
            <h1 class="h1-admin text-center">أتصل بنا</h1>
            <form class="form-call" action="insert.php?mod=insertMessage" method="POST">
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="text" name="addrMes" class="form-control trans" placeholder="عنوان الرسالة">
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control trans" placeholder="الأيميل">
                    </div>
                    <div class="form-group col-md-12 ">
                        <textarea name="message" class="form-control trans" cols="30" rows="3" placeholder="الرسالة"></textarea>
                    </div>
                    <div class="col-md-2 marg-left">
                        <input type="submit" class="form-control btn btn-outline-info  btn-more" value="أرسال">
                    </div>
                </div>
            </form>
        </div>
<?php
              
    } else {
        header('Location: index.php'); //Redirect To index Page
        exit();
    }

    
        include $tpl . "‫footer_cat.php";
        
    ob_end_flush(); // Headers Sent