<?php
session_start();
include("connect.php");
$x=$_SESSION['tuser'];
echo $_SESSION['tuser'];
$sql="SELECT * FROM template2 where Username='$x'";
$query=mysqli_query($con,$sql) or die("not executed");

$row=mysqli_fetch_assoc($query) or die("error");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Resume</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
</head>

 <body>

    <div id="page-wrap">
    
        <img src="" alt="Photo of Cthulu" id="pic" />
    
        <div id="contact-info" class="vcard">
        
            <h1 class="fn"><?php echo $row['name']; ?></h1>
        
            <p>
                Cell: <span class="tel"><?php echo $row['phone'];?></span><br/>
                Email: <?php echo $row['email'];?></a>
            </p>
        </div>
                
        <div id="objective">
            <p>
                <?php echo $row['about'];?>
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd>
                <h2><?php echo $row['college'];?></h2>
                <p><strong>Major:</strong> <?php echo $row['major'];?><br/>
                   <strong>Minor: </strong> <?php echo $row['minor'];?><br>
                   <strong>Passing Year: </strong> <?php echo $row['year'];?></p>

            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd>
                <h2>Softwares</h2>
                <p><?php echo $row['software'];?></p>
                
                <h2>Language</h2>
                <p><?php echo $row['language'];?></p>

                <h2>Operating Systems</h2>
                <p><?php echo $row['os'];?></p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
                <h2><?php echo $row['company'];?><span><?php echo $row['experience'];?></span></h2>
                <ul>
                    <?php echo $row['description'];?>
                </ul>
                
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Hobbies</dt>
            <dd><?php echo $row['hobbie'];?></dd>
            
            <dd class="clear"></dd>
            
            <dt>References</dt>
            <dd><?php echo $row['reference'];?></dd>
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    
    </div>

</body>

</html>