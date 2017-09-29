<?php
ob_start();
    session_start();
        $pageTitle = 'Home';
      
include "init.php";
?>


    
    <div class="full-nav">
            <nav id="nav-cover"> 
                <div class="container">
                    <span>نيدلينك</span>
                    <div class="dropdown">
                        <input id="toggle2" type="checkbox">
                            <label for="toggle2" class="animate"><i class="fa fa-list" aria-hidden="true"></i></label>
                        <ul class="animate">
                            <li class="animate"><a href="specific.php?mod=serviceProvider">مزود الخدمة </a><i class="fa fa-code float-right"></i></li>
                            <li class="animate"><a href="specific.php?mod=aboutTheWebsite">حول الموقع</a><i class="fa fa-arrows-alt float-right"></i></li>
                            <li class="animate"><a href="specific.php?mod=callUs">أتصل بنا</a><i class="fa fa-phone float-right" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>    
    

    <div class="header">
        <div class="overlay">
          <div class="container">     
            <h1 class="h1 text-center">أنتقل مباشرة لما تريد</h1>

           <!-- <div class="btn-h">
                <button type="button" class="btn btn-outline-info btn-h1">الأقسام <i class="fa fa-code-fork" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-outline-info btn-h1-plas">أمتداد <i class="fa fa-plus" aria-hidden="true"></i></button> 
            </div>-->
            
            </div>
            <div class='mouse-container'>
                <div class='mouse'>
                    <span class='scroll-down'></span>
                </div>
            </div>           
        </div>
    </div>

    <div class="about text-center">
        <div class="container"> 
            <h2 class="h2">حول</h2>
            <p>
                يهدف الموقع ليكون المرجع الأول والأخير لإجاد ضالتك من أفضل المواقع ضمن مجالك ونأمل أن تشاركونا بهذه التجرية بأضافة محتوى للمرجع
            </p>
            <span>"العلم ما نَفَع و ليس العلم ما حُفِظ"</span>
        </div>
        
    </div>

    <div class="content">
        <div class="container">
            <h2 class="h2 text-center">الأقسام</h2>
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="categories.php?mod=imgDesign">
                        <div class="size-img picture">
                            <div class="over-img">
                                <i class="fa fa-picture-o fa-4x" aria-hidden="true"></i>
                            <span>تصميم الرسومات</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="categories.php?mod=webDesign">
                        <div class="size-img paint">
                            <div class="over-img">
                                <i class="fa fa-paint-brush fa-4x" aria-hidden="true"></i>
                                <span>تصميم الويب</span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="categories.php?mod=programmingWeb">
                        <div class="size-img code">
                            <div class="over-img">
                                <i class="fa fa-code fa-4x" aria-hidden="true"></i>
                                <span>برمجة ويب</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="categories.php?mod=programmingDesktop">
                        <div class="size-img desktop">
                            <div class="over-img">
                                <i class="fa fa-desktop fa-4x" aria-hidden="true"></i>
                                <span>برمجة تطبيقات</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="categories.php?mod=Mobile">
                        <div class="size-img mobile">
                            <div class="over-img">
                                <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
                                <span>برمجة تطبيقات</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <a href="categories.php?mod=More">   
                        <div class="size-img ellipsis">
                            <div class="over-img">
                                <i class="fa fa-ellipsis-h fa-4x" aria-hidden="true"></i>
                                <span> المزيد </span>
                            </div>
                        </div>
                    </a>   
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-info down  btn-more"><i class="fa fa-angle-double-down " aria-hidden="true"></i></button>
    </div>

    <div class="fix-web">
        <div class="overlay">
            <div class="container">
                <form class="form-web" action="insert.php?mod=insertWeb" method="POST">
                <h2 class="h2 text-center">أضافة موقع</h2>
                    <div class="form-row form-web">
                        
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control trans" placeholder="أسم الموقع">
                            <input type="hidden" name="cat_id" class="form-control trans"value="1000">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="domain" class="form-control trans" placeholder="رابط الموقع ">
                        </div>
                        <div class="form-group col-md-12 ">
                            <textarea name="description" id="addLngth" class="form-control trans lngth" cols="30" rows="3" maxlength="90" placeholder="نبذة عن الموقع (90حرف)"></textarea>
                            <div class="addwebLngth"></div> 
                        </div>
                        <div class="col-md-2 marg-left">
                            <input type="submit" class="form-control btn btn-outline-info  btn-more" value="أضافة">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    $numComment = 4; // Number of Latest comments
    $stucomments = getLatest("*", "comments", "ID", $numComment); // Latest comments Array
?>
    <div class="comment">
        <div class="container">
            <h2 class="h2 text-center">التعليقات</h2>
            <form action="insert.php?mod=insertComment" method="POST">
                    <div class="form-group col-md-4 tablet-comm">
                        <input type="text" name="name" class="form-control trans" placeholder="الأسم">
                        <textarea name="comment" id="comLngth" class="form-control trans" cols="5" rows="3" maxlength="90" placeholder=" التعليق(90حرف)"></textarea>
                        <div class="commLngth"></div> 
                    </div>
                    <div class="col-md-2 send">
                        <input type="submit" class="form-control btn btn-outline-info btn-com" value="أرسال">
                        <i class="fa fa-paper-plane-o fa-lg" aria-hidden="true"></i>
                    </div>
            </form>
            <div class="slider">
<?php

        
            foreach ($stucomments as $stComm) {
                if($stComm['Status'] == 1){?>
            
                <div class="slide">
                    <div class="com-img">
                    <img class='img-fluid' src="./layout/img/avatar.jpg" alt="">
                    </div>
                    <div class="com-par text-center">
                        <h3> <?php echo $stComm['Name'] ?></h3>
                        <p> <?php echo $stComm['Comment'] ?></p>
                    </div>
                </div>    
            
<?php
                     }
                 }
                        ?>    
                    
            </div>
        </div>
    </div>

                
<?php
include $tpl . "footer.php";
ob_end_flush();

?>
