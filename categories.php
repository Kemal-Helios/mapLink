<?php
/*
=================================================================================
=============================The Most Important Sites============================
=================================================================================
*/
    ob_start(); // Headers Sent

    session_start();
        
        include 'init.php';
        include "navBar.php";
        $mod = isset($_GET['mod']) ? $_GET['mod'] : 'Manage';


        $fileWebimg = './Admin/data/upload/websites-Image/';
        $imgEmpty = 'empty.jpg';
        $descEmpty = 'نعتذر الموقع لم يوصف بعد';
        // Start Manage Page

        if($mod == 'Manage') { //Manage  Page
            
          echo 'Welcome Manage';

        } elseif($mod == 'imgDesign') { // ############# imgDesign Page #################### 
         ?>

        <div class="container">
            <h1 class="cat-h1 text-center mb-5 mt-5">تصميم الرسومات</h1>
            
            <!--**************** Start Card-Color *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الألون</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(1);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

         
            <!--**************** Start Card-Color *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>صور</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(32);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Fonts *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الخطوط</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(2);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->
            
            <!--**************** Start Card-Programs *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>البرامج</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(3);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Support *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الدعم</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(4);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Schools *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المدارس</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(5);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-More *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المزيد</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(6);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->
            
        </div><!--End container -->


                    
<?php

        } elseif ($mod == 'webDesign') { // ############# webDesign Page #################### 
?>
        <div class="container">
            <h1 class="cat-h1 text-center mb-5 mt-5">تصميم ويب</h1>
            
            <!--**************** Start Card-Color *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الألون</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(1);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

                
            <!--**************** Start Card-Fonts *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الخطوط</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(7);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->
            
            <!--**************** Start Card-Programs *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>البرامج</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(8);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Support *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الدعم</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(9);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Schools *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المدارس</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(10);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-More *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المزيد</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(11);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

        </div><!--End container -->


                    
<?php
               
        } elseif ($mod == 'programmingWeb') {// ########################### programmingWeb Page ####################

            ?>

        <div class="container">
            <h1 class="cat-h1 text-center mb-5 mt-5">برمجة ويب </h1>
            
            <!--**************** Start Card-Color *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>أختبار</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(12);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

                
            <!--**************** Start Card-Language booklet *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>كتيب اللغات</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(13);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->
            
            <!--**************** Start Card-host *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>أستضافات</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(14);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->


            <!--**************** Start Card-Programs *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>البرامج</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(15);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Support *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الدعم</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(16);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Schools *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المدارس</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(17);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-More *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المزيد</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(18);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

        </div><!--End container -->


                    
<?php

        } elseif($mod == 'programmingDesktop') {// ################## programmingDesktop Page ###################

            ?>

        <div class="container">
            <h1 class="cat-h1 text-center mb-5 mt-5"> سطح المكتب</h1>
            
            
                
            <!--**************** Start Card-Language booklet *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>كتيب اللغات</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(19);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->
            
            <!--**************** Start Card-Programs *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>البرامج</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(20);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Support *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الدعم</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(21);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Schools *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المدارس</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(22);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-More *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المزيد</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(23);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

        </div><!--End container -->


                    
<?php

        } elseif ($mod == 'Mobile') {// ########################### Mobile Page ##########################

            ?>

        <div class="container">
            <h1 class="cat-h1 text-center mb-5 mt-5">موبايل </h1>
            
            <!--**************** Start Card-Language booklet *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>كتيب اللغات</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(24);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->
            
            <!--**************** Start Card-Programs *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>البرامج</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(25);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Support *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الدعم</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(26);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Schools *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المدارس</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(27);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-More *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المزيد</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(28);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

        </div><!--End container -->


                    
<?php
            
        } elseif ($mod == 'More') {//###################### More Page #####################
?>
          <div class="container">
            <h1 class="cat-h1 text-center mb-5 mt-5"> المزيد</h1>
            
            <!--**************** Start Card-Programs *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>البرامج</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(29);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Support *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>الدعم</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(30);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

            <!--**************** Start Card-Schools *************** -->
            <div class="card  border-dark mb-3 mt-3 col-md-12">
                    <div class="card-header">
                        <h4 class='click text-center'>المدارس</h4>
                    </div>
                <div class="card-body text-dark">
                    <div class="row">
                        <?php
                           $webCat9 = webCat(31);
                       foreach($webCat9 as $web){
                           if($web['Approve'] == 1){
                           ?>
                            
                        <div class="col-xs-6 col-md-2">
                            <div class="carde">
                                <div class="front">
                                    <div class="over-hidd">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                <?php
                                    echo "<span>" . $web['Name'] . "</span>";

                                    if(!empty($web['Images']) && file_exists($fileWebimg . $web['Images'])) {
                                            echo "<img src='". $fileWebimg . $web['Images'] ."' class='wid-img img-fluid'/>";
                                    } else {
                                            echo "<img src='". $fileWebimg . $imgEmpty ."' class='wid-img img-fluid'/>";
                                    }
                                ?>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 1){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 2){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 3){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 4){echo 'gold';} ?> " aria-hidden='true'></i>
                                    <i class="fa fa-star <?php if($web['Stars'] >= 5){echo 'gold';} ?> " aria-hidden='true'></i>
                                        
                                    </a>   
                                    </div> 
                                </div>
                                <div class="back">
                                    <a href="<?php echo $web['Domain']; ?>" class="thumbnail">
                                        
                                <?php 
                                    if(!empty($web['Description'])){
                                        echo "<p class='lead'> ". $web['Description'] . "</p>"; 
                                    } else {
                                        echo "<p class='lead par-empty'> ". $descEmpty . "</p>";
                                               
                                    }
                                ?>
                                        
                                    </a>    
                                </div>
                            </div>   
                        </div>
                    
                 <?php    }   } ?>
                    </div><!--End Row -->
                </div><!--End Card-Body -->
            </div><!--End Card -->

        </div><!--End container -->
<?php 

        } else {
        header('Location: index.php'); //Redirect To index Page
        exit();
    }

        include $tpl . "‫footer_cat.php";
        
    ob_end_flush(); // Headers Sent