<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!-- å = &aring; ä = &auml; ö= &ouml; &Aring; &Auml; &Ouml; -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Databas - Vallmokliniken</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/modern-business.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="font-icomoon/style.css" rel="stylesheet" type="text/css">
      <link href="font-awesome/css/font-vallmo.css" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
                <a class="navbar-brand" href="index.html">
                <div style="float: left; margin-top:-10px; margin-right:5px;"><i class="navbar-brand-logo icon-tessblackbold"></i>
                </div>
                <span> VALLMOKLINIKEN</span>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a href="https://www.timecenter.com/malarnaprapaten/" target="_blank"><i class="fa fa-fw fa-clock-o"></i> Boka</a>
                  </li>
                  <li>
                     <a href="services.html"><i class="fa fa-fw fa-life-ring"></i> Tj&auml;nster</a>
                  </li>
                  <li>
                     <a href="pricing.html"><i class="fa fa-fw fa-briefcase"></i> Priser</a>
                  </li>
                  <li>
                     <a href="about.html"><i class="fa fa-fw fa-user-md"></i> Om F&ouml;retaget</a>
                  </li>
                  <li>
                     <a href="contact.html"><i class="fa fa-fw fa-phone"></i> Kontakt</a>
                  </li>
                  <li>
                     <a href="databas.php"><i class="fa fa-fw fa-database"></i> Databas</a>
                  </li>
               </ul>
               </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>

    <!-- Header Carousel -->
    <header>
    	<img id="marginallheaders" alt="" src="images/HeaderKlinik.png" width="1900px" height="70px">  
    </header>

      
      <!-- Page Content -->
      <div class="container">
         <!-- Page Heading/Breadcrumbs -->
         <div class="col-lg-12">
            <!-- Service Tabs -->
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="page-header">Databas</h2>
                  <ol class="breadcrumb">
                     <li><a href="index.html">Hem</a>
                     </li>
                     <li class="active">Databas</li>
                  </ol>
               </div>
               <ul id="myTab" class="nav nav-tabs nav-justified">
                  <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-child"></i> Muskulatur</a>
                  </li>
                  <li class=""><a href="#service-two" data-toggle="tab"><i class="fa icon-shirt"></i> Nerver</a>
                  </li>
                  <li class=""><a href="#service-three" data-toggle="tab"><i class="fa icon-dumbbell"></i> SQL</a>
                  </li>
               </ul>
               <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade active in" id="service-one">
                     <div class="col-lg-3">
                        <form action="databas.php" method="post">
                           <input type="text" name="input_muscle">
                           <input type="submit" value="S&ouml;k">
                        </form>
                        <div id="SideMenu" style="margin-top:10px">
                           <div class="list-group panel">
                              <a href="#torso" class="list-group-item" data-toggle="collapse" data-parent="#SideMenu">B&aring;l</a>
                              <div class="collapse" id="torso">
                                 <a href="#UpperSupBack" class="list-group-item" data-toggle="collapse" data-parent="#UpperSupBack">Ryggens ytliga muskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse list-group-submenu" id="UpperSupBack">
                                    <a href="databas.php?var_muscle=Trapezius" class="list-group-item" data-parent="#UpperSupBack">Trapezius</a>
                                    <a href="databas.php?var_muscle=Levator scapula" class="list-group-item" data-parent="#UpperSupBack">Levator scapula</a>
                                    <a href="databas.php?var_muscle=Latissimus dorsi" class="list-group-item" data-parent="#UpperSupBack">Latissimus dorsi</a>
                                    <a href="databas.php?var_muscle=Rhomboideus major" class="list-group-item" data-parent="#UpperSupBack">Rhomboideus major</a>
                                    <a href="databas.php?var_muscle=Rhomboideus minor" class="list-group-item" data-parent="#UpperSupBack">Rhomboideus minor</a>
                                    <a href="databas.php?var_muscle=Serratus posterior inferior" class="list-group-item" data-parent="#UpperSupBack">Serratus posterior inferior</a>
                                    <a href="databas.php?var_muscle=Serratus posterior superior" class="list-group-item" data-parent="#UpperSupBack">Serratus posterior superior</a>
                                    <a href="databas.php?var_muscle=Splenius capitis" class="list-group-item" data-parent="#UpperSupBack">Splenius capitis</a>
                                    <a href="databas.php?var_muscle=Splenius cervicis" class="list-group-item" data-parent="#UpperSupBack">Splenius cervicis</a>
                                 </div>
                                 <a href="#UpperProBack" class="list-group-item" data-toggle="collapse" data-parent="#UpperProBack">Ryggens djupa muskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse list-group-submenu" id="UpperProBack">
                                    <a href="#Erector" class="list-group-item" data-toggle="collapse" data-parent="#UpperProBack">Erector spinae <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse" id="Erector">
                                       <a href="#Sacrospinala" class="list-group-item" data-toggle="collapse" data-parent="#Erector">Sacrospinala systemet <i class="fa fa-caret-down"></i></a>
                                       <div class="collapse" id="Sacrospinala">
                                          <a href="databas.php?var_muscle=Iliocostalis" class="list-group-item" data-parent="#Sacrospinala">Iliocostalis</a>
                                          <a href="databas.php?var_muscle=Longissimus" class="list-group-item" data-parent="#Sacrospinala">Longissimus</a>
                                          <a href="databas.php?var_muscle=Spinalis" class="list-group-item" data-parent="#Sacrospinala">Spinalis</a>		
                                       </div>
                                       <a href="databas.php?var_muscle=Transversospinala systemet" class="list-group-item" data-parent="#Erector">Transversospinala systemet</a>
                                       <a href="databas.php?var_muscle=Korta vertikala systemet" class="list-group-item" data-parent="#Erector">Korta vertikala systemet</a>
                                       <a href="databas.php?var_muscle=Suboccipitalis/Nackrosetten" class="list-group-item" data-parent="#Erector">Suboccipitalis/Nackrosetten</a>
                                    </div>
                                    <a href="databas.php?var_muscle=Rectus capitis posterior minor" class="list-group-item" data-parent="#UpperProBack">Rectus capitis posterior minor</a>
                                    <a href="databas.php?var_muscle=Rectus capitis posterior major" class="list-group-item" data-parent="#UpperProBack">Rectus capitis posterior major</a>
                                    <a href="databas.php?var_muscle=Rectus capitis lateralis" class="list-group-item" data-parent="#UpperProBack">Rectus capitis lateralis</a>
                                    <a href="databas.php?var_muscle=Obliquus capitis superior" class="list-group-item" data-parent="#UpperProBack">Obliquus capitis superior</a>
                                    <a href="databas.php?var_muscle=Obliquus capitis inferior" class="list-group-item" data-parent="#UpperProBack">Obliquus capitis inferior</a>
                                 </div>
                                 <a href="#Chest" class="list-group-item" data-toggle="collapse" data-parent="#Chest">Br&ouml;stkorgens muskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse list-group-submenu" id="Chest">
                                    <a href="databas.php?var_muscle=Pectoralis major" class="list-group-item" data-parent="#Chest">Pectoralis major</a>
                                    <a href="databas.php?var_muscle=Pectoralis minor" class="list-group-item" data-parent="#Chest">Pectoralis minor</a>
                                    <a href="databas.php?var_muscle=Subclavius" class="list-group-item" data-parent="#Chest">Subclavius</a>
                                    <a href="databas.php?var_muscle=Serratus anterior" class="list-group-item" data-parent="#Chest">Serratus anterior</a>
                                    <a href="databas.php?var_muscle=Intercostalis externus" class="list-group-item" data-parent="#Chest">Intercostalis externus</a>
                                    <a href="databas.php?var_muscle=Intercostalis internus" class="list-group-item" data-parent="#Chest">Intercostalis internus</a>
                                    <a href="databas.php?var_muscle=Levatores costarium" class="list-group-item" data-parent="#Chest">Levatores costarium</a>
                                    <a href="databas.php?var_muscle=Subcostales" class="list-group-item" data-parent="#Chest">Subcostales</a>
                                    <a href="databas.php?var_muscle=Transversum thoracis" class="list-group-item" data-parent="#Chest">Transversum thoracis</a>
                                    <a href="databas.php?var_muscle=Diaphragma" class="list-group-item" data-parent="#Chest">Diaphragma</a>
                                 </div>
                                 <a href="#Abdomen" class="list-group-item" data-toggle="collapse" data-parent="#Abdomen">Bukens muskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse list-group-submenu" id="Abdomen">
                                    <a href="databas.php?var_muscle=Rectus abdominis" class="list-group-item" data-parent="#Abdomen">Rectus abdominis</a>
                                    <a href="databas.php?var_muscle=Pyramidalis" class="list-group-item" data-parent="#Abdomen">Pyramidalis</a>
                                    <a href="databas.php?var_muscle=Obliquus externus abdominis" class="list-group-item" data-parent="#Abdomen">Obliquus externus abdominis</a>
                                    <a href="databas.php?var_muscle=Obliquus internus abdominis" class="list-group-item" data-parent="#Abdomen">Obliquus internus abdominis</a>
                                    <a href="databas.php?var_muscle=Transversus abdominis" class="list-group-item" data-parent="#Abdomen">Transversus abdominis</a>
                                    <a href="databas.php?var_muscle=Quadratus lumborum" class="list-group-item" data-parent="#Abdomen">Quadratus lumborum</a>
                                 </div>
                                 <a href="#PelvicFloor" class="list-group-item" data-toggle="collapse" data-parent="#PelvicFloor">B&auml;ckenbottenmuskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse list-group-submenu" id="PelvicFloor">
                                    <a href="databas.php?var_muscle=Levator Ani = Pubococcygeus" class="list-group-item" data-parent="#PelvicFloor">Levator Ani = Pubococcygeus</a>
                                    <a href="databas.php?var_muscle=Levator Ani = Iliococcygeus" class="list-group-item" data-parent="#PelvicFloor">Levator Ani = Iliococcygeus</a>
                                    <a href="databas.php?var_muscle=Levator Ani = Coccygeus" class="list-group-item" data-parent="#PelvicFloor">Levator Ani = Coccygeus</a>
                                 </div>
                                 <a href="#Throat" class="list-group-item" data-toggle="collapse" data-parent="#Throat">Hals <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse list-group-submenu" id="Throat">
                                    <a href="databas.php?var_muscle=Sternocleido mastoideus" class="list-group-item" data-parent="#Throat">Sternocleido mastoideus</a>
                                    <a href="databas.php?var_muscle=Scalenii" class="list-group-item" data-parent="#Throat">Scalenii</a>
                                    <a href="databas.php?var_muscle=Scalenus anterior" class="list-group-item" data-parent="#Throat">Scalenus anterior</a>
                                    <a href="databas.php?var_muscle=Scalenus medius" class="list-group-item" data-parent="#Throat">Scalenus medius</a>
                                    <a href="databas.php?var_muscle=Scalenus posterior" class="list-group-item" data-parent="#Throat">Scalenus posterior</a>
                                    <a href="databas.php?var_muscle=Scalenus minimus" class="list-group-item" data-parent="#Throat">Scalenus minimus</a>
                                 </div>
                              </div>
                              <a href="#UpperExtr" class="list-group-item" data-toggle="collapse" data-parent="#UpperExtr">&Ouml;vre extremitet</a>
                              <div class="collapse" id="UpperExtr">
                                 <a href="#Shoulder" class="list-group-item" data-toggle="collapse" data-parent="#UpperExtr">Axelns muskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse" id="Shoulder">
                                    <a href="databas.php?var_muscle=Deltoideus" class="list-group-item" data-parent="#Shoulder">Deltoideus</a>
                                    <a href="databas.php?var_muscle=Teres major" class="list-group-item" data-parent="#Shoulder">Teres major</a>
                                    <a href="databas.php?var_muscle=Supraspinatus" class="list-group-item" data-parent="#Shoulder">Supraspinatus</a>
                                    <a href="databas.php?var_muscle=Infraspinatus" class="list-group-item" data-parent="#Shoulder">Infraspinatus</a>
                                    <a href="databas.php?var_muscle=Teres minor" class="list-group-item" data-parent="#Shoulder">Teres minor</a>
                                    <a href="databas.php?var_muscle=Subscapularis" class="list-group-item" data-parent="#Shoulder">Subscapularis</a>	
                                 </div>
                                 <a href="#Arm" class="list-group-item" data-toggle="collapse" data-parent="#UpperExtr">&Ouml;verarmens muskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse" id="Arm">
                                    <a href="databas.php?var_muscle=Biceps brachii" class="list-group-item" data-parent="#Arm">Biceps brachii</a>
                                    <a href="databas.php?var_muscle=Brachialis" class="list-group-item" data-parent="#Arm">Brachialis</a>
                                    <a href="databas.php?var_muscle=Triceps brachii" class="list-group-item" data-parent="#Arm">Triceps brachii</a>
                                    <a href="databas.php?var_muscle=Anconeus" class="list-group-item" data-parent="#Arm">Anconeus</a>
                                    <a href="databas.php?var_muscle=Coracobrachialis " class="list-group-item" data-parent="#Arm">Coracobrachialis </a>
                                 </div>
                                 <a href="#Antebrachii" class="list-group-item" data-toggle="collapse" data-parent="#UpperExtr">Underarm <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse" id="Antebrachii">
                                    <a href="#AnteRad" class="list-group-item" data-toggle="collapse" data-parent="#Antebrachii">Radiala gruppen <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse" id="AnteRad">
                                       <a href="databas.php?var_muscle=Brachioradialis" class="list-group-item" data-parent="#AnteRad">Brachioradialis</a>
                                       <a href="databas.php?var_muscle=Extensor carpi radialis longus" class="list-group-item" data-parent="#AnteRad">Extensor carpi radialis longus</a>
                                       <a href="databas.php?var_muscle=Extensor carpi radialis brevis" class="list-group-item" data-parent="#AnteRad">Extensor carpi radialis brevis</a>
                                    </div>
                                    <a href="#AnteSupFlex" class="list-group-item" data-toggle="collapse" data-parent="#Antebrachii">Ytliga flexorgruppen <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse" id="AnteSupFlex">
                                       <a href="databas.php?var_muscle=Pronator teres" class="list-group-item" data-parent="#AnteSupFlex">Pronator teres</a>
                                       <a href="databas.php?var_muscle=Flexor carpi radialis" class="list-group-item" data-parent="#AnteSupFlex">Flexor carpi radialis</a>
                                       <a href="databas.php?var_muscle=Palmaris longus" class="list-group-item" data-parent="#AnteSupFlex">Palmaris longus</a>
                                       <a href="databas.php?var_muscle=flexor digitorium superficialis" class="list-group-item" data-parent="#AnteSupFlex">flexor digitorium superficialis</a>
                                       <a href="databas.php?var_muscle=Flexor carpi ulnaris" class="list-group-item" data-parent="#AnteSupFlex">Flexor carpi ulnaris</a>
                                    </div>
                                    <a href="#AnteProFlex" class="list-group-item" data-toggle="collapse" data-parent="#Antebrachii">Djupa flexorgruppen <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse" id="AnteProFlex">
                                       <a href="databas.php?var_muscle=Flexor pollicis longus" class="list-group-item" data-parent="#AnteProFlex">Flexor pollicis longus</a>
                                       <a href="databas.php?var_muscle=Pronator Quadratus" class="list-group-item" data-parent="#AnteProFlex">Pronator Quadratus</a>
                                       <a href="databas.php?var_muscle=Flexor digitorum profundus " class="list-group-item" data-parent="#AnteProFlex">Flexor digitorum profundus </a>
                                    </div>
                                    <a href="#AnteSupExt" class="list-group-item" data-toggle="collapse" data-parent="#Antebrachii">Ytliga extensorgruppen <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse" id="AnteSupExt">
                                       <a href="databas.php?var_muscle=Extensor digitorum" class="list-group-item" data-parent="#AnteSupExt">Extensor digitorum</a>
                                       <a href="databas.php?var_muscle=Extensor digiti minimi" class="list-group-item" data-parent="#AnteSupExt">Extensor digiti minimi</a>
                                       <a href="databas.php?var_muscle=Extensor carpi ulnaris" class="list-group-item" data-parent="#AnteSupExt">Extensor carpi ulnaris</a>
                                    </div>
                                    <a href="#AnteProExt" class="list-group-item" data-toggle="collapse" data-parent="#Antebrachii">Djupa extensorgruppen <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse" id="AnteProExt">
                                       <a href="databas.php?var_muscle=Supinator" class="list-group-item" data-parent="#AnteProExt">Supinator</a>
                                       <a href="databas.php?var_muscle=Abductor pollicis longus" class="list-group-item" data-parent="#AnteProExt">Abductor pollicis longus</a>
                                       <a href="databas.php?var_muscle=Extensor pollicis brevis" class="list-group-item" data-parent="#AnteProExt">Extensor pollicis brevis</a>
                                       <a href="databas.php?var_muscle=Extensor indicis" class="list-group-item" data-parent="#AnteProExt">Extensor indicis</a>
                                       <a href="databas.php?var_muscle=Extensor pollicis longus" class="list-group-item" data-parent="#AnteProExt">Extensor pollicis longus</a>
                                    </div>
                                 </div>
                                 <a href="#Hand" class="list-group-item" data-toggle="collapse" data-parent="#UpperExtr">Handens muskulatur <i class="fa fa-caret-down"></i></a>
                                 <div class="collapse" id="Hand">
                                    <a href="databas.php?var_muscle=Abductor pollicis brevis " class="list-group-item" data-parent="#Hand">Abductor pollicis brevis </a>
                                    <a href="databas.php?var_muscle=Opponens pollicis" class="list-group-item" data-parent="#Hand">Opponens pollicis</a>
                                    <a href="databas.php?var_muscle=Flexor pollicis brevis" class="list-group-item" data-parent="#Hand">Flexor pollicis brevis</a>
                                    <a href="databas.php?var_muscle=Adductor pollicis" class="list-group-item" data-parent="#Hand">Adductor pollicis</a>
                                    <a href="databas.php?var_muscle=Abductor digiti minimi" class="list-group-item" data-parent="#Hand">Abductor digiti minimi</a>
                                    <a href="databas.php?var_muscle=Flexor digiti minimi brevis" class="list-group-item" data-parent="#Hand">Flexor digiti minimi brevis</a>
                                    <a href="databas.php?var_muscle=Opponens digiti minimi" class="list-group-item" data-parent="#Hand">Opponens digiti minimi</a>
                                    <a href="#Finger" class="list-group-item" data-toggle="collapse" data-parent="#Hand">Fingrarnas muskulatur <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse" id="Finger">
                                       <a href="databas.php?var_muscle=Lumbricales" class="list-group-item" data-parent="#Finger">Lumbricales</a>
                                       <a href="databas.php?var_muscle=Interossei palmares" class="list-group-item" data-parent="#Finger">Interossei palmares</a>
                                       <a href="databas.php?var_muscle=Interossei dorsales" class="list-group-item" data-parent="#Finger">Interossei dorsales</a>
                                    </div>
                                 </div>
                              </div>
                              <a href="#LowerExtr" class="list-group-item" data-toggle="collapse" data-parent="#LowerExtr">Nedre extremitet</a>
                              <div class="collapse" id="LowerExtr">
                                 <a href="" class="list-group-item">Subitem 1</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-9">
                        <?php
                           try{
                           $db = new PDO( 'mysql:host=localhost;dbname=vallmokliniken;charset=utf8',
                           'vallmo', 
                           'K5CJnxCCse9ZdWjK',
                           array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                           //die(json_encode(array('outcome' => true)));
                           } catch(PDOException $ex){
                           	die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
                           }
                           if (empty($_GET)) {
                           $search=$_POST['input_muscle'];
                           }else{
                           $search=htmlspecialchars($_GET["var_muscle"]);
                           }
                           $stmt = $db->prepare("SELECT * FROM `myologi` WHERE muscle LIKE ? LIMIT 0, 1");
                           $stmt->bindValue(1, "%$search%", PDO::PARAM_STR);
                           $stmt->execute();
                           
                           // output data of each row
                           while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                           $r_muscle=$row["muscle"];
                           $r_m_part=$row["m_part"];
                           $r_affected_joints=$row["affected_joints"];
                           $r_origin=$row["origin"];
                           $r_insertion=$row["insertion"];
                           $r_function=$row["function"];
                           $r_f_fixed=$row["f_fixed"];
                           $r_f_unilateral=$row["f_unilateral"];
                           $r_f_bilateral=$row["f_bilateral"];
                           $r_innervation=$row["innervation"];
                           $r_comment=$row["comment"];
                           $r_urlimg=$row["url_img"];
                           } 
                           ?>
                        <h2><? echo $r_muscle;?></h2>
                        <ul>
                           <? echo $r_m_part;?>
                        </ul>
                        <div style="float: left"><img class="img-responsive" src="<? echo $r_urlimg?>" width="100%" alt=""><i>Bild &auml;r tagen fr&aring;n 3D4Medical's Essential Anatomy 3 Application</i>
                        </div>
                        <p><strong><br>Leder som p&aring;verkas</strong><br> <? echo $r_affected_joints;?></p>
                        <p><strong><br>Leder som p&aring;verkas</strong><br> <? echo $r_affected_joints;?></p>
                        <p><strong>Ursprung</strong><br> <? echo $r_origin;?></p>
                        <p><strong>F&auml;ste</strong><br> <? echo $r_insertion;?></p>
                        <p><strong>Funktion</strong><br> <? echo $r_function;?></p>
                        <p><strong>Unilateral funktion</strong><br> <? echo $r_f_unilateral;?></p>
                        <p><strong>Bilateral funktion</strong><br> <? echo $r_f_bilateral;?></p>
                        <p><strong>Innervation</strong><br> <? echo $r_innervation;?></p>
                        <p><strong>Kommentar</strong><br> <? echo $r_comment;?></p>
                        <IMG src="images/rorelseapparatens-anatomi-en-muskel-och-triggerpunktsguide.jpg" width="100px" style="float:right; margin-right:10px;">
                        <i>Informationen om muskulatur &auml;r tagen ur Kristian Berg's R&ouml;relseapparatens anatomi: en muskel och triggerpunktsguide, 2011, ICVE Productions</i>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="service-two">
                     <h4>Nerver</h4>
                     <h2></h2>
                     <img alt="" src="images/nerves/radiusprox.png" width="100%">
                     <img alt="" src="images/nerves/radiusmed.png" width="100%">
                     <img alt="" src="images/nerves/radiusdis.png" width="100%">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                  </div>
                  <div class="tab-pane fade" id="service-three">
                     <h4>Muskelpressur</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Service Tabs -->
         <!-- Content Row -->
         <hr>
         <!-- Footer -->
         <footer>
            <div class="row">
               <div class="col-lg-12">
                  <p>&copy; Naprapatkandidat Martin Augustsson AB</p>
               </div>
            </div>
         </footer>
      </div>
      <!-- /.container -->
      <!-- jQuery -->
      <script src="js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>