<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lavona's Portfolio </title>

<link rel="stylesheet" type="text/css" href="style/theme1.css" media="all"/>

</head>

<body>
<?php include("includes/nav.php"); ?>
<div class = "title">
<h1> Welcome!</h1>
<p>Start by clicking on an image below or choosing a tab in the navigation bar to get started!</p>
</div>
<div class= "photo">  
        <div class= "photo2">  
           <img src= "images/about.png" alt= "prototyping">
           <a href = about.php><h2 class="img_caption">About Me</h2></a>
        </div>
        <div class= "photo2"> 
            <img src= "images/prototyping.png" alt= "prototyping">
            <a href = prototyping.php><h2 class="img_caption">Mobile App Prototype</h2></a>
        </div>  
        <div class= "photo2"> 
            <img src= "images/design.jpg" alt= "design">
            <a href = design.php><h2 class="img_caption">Daily UI Challenges</h2></a>
        </div> 
        <div class= "photo2"> 
            <img src= "images/video.png" alt= "video">
            <a href = video.php><h2 class="img_caption">Cinematography</h2></a>
        </div> 
        <div class= "photo2"> 
            <img src= "images/casestudy.png" alt= "casestudy">
            <a href = case_study.php><h2 class="img_caption">Pedalcyclist Case Study</h2></a>
        </div> 
        
    </div>
  </body>
</html>
