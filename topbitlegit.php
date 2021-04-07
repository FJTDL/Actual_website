<!DOCTYPE html>

<!-- declare language -->
<html lang ="en">

<!-- set up for head section -->
    
    <head>
        
<!-- meta section -->        
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device, initial-scale=1">
        <meta name="description" content="NZ tourism website">
        <meta name="author" content="Finn J.T de Lange">
        
        <title>ExploreNZ</title>

<!--link section -->        
        
        <!-- CSS link -->
        <link href="css/styling.css" rel="stylesheet">
        
        <!-- google fonts link -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&family=Ranchers&family=Source+Sans+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
        
        
        
    </head>  
    
<!-- body section -->
    
    <body>
    
        
        <!-- wrapper division class -->
        <div  class="wrapper">
        
            
            <!-- header section: add logo image at later date-->
            <header class="box">
                <a href="webindex.php"><img class="pain" src="images/ExploreNZlogo.png" alt="logo" width=80 height=80></a> <!-- Logo links to home page -->
                <h1>ExploreNZ</h1>
            </header>
            
            
            <!-- nav bar -->
            <nav class="box">
            
            <!-- drop down menus -->
                
            <!-- The islands menu -->
            <div class="dropdown">
            <button class="dropbtn">The islands</button>
            <div class="dropdown-content">
            <a href="northisland.php">North Island</a>
            <a href="Southisland.php">South island</a>
            </div> <!-- Ends dropdown class -->
            </div> <!-- Ends dropbtn class -->
            
            <!-- About and contact us dropdown -->
            <div class="dropdown">
            <button class="dropbtn">About</button>
            <div class="dropdown-content">
            <a href="aboutus.php">About us</a>
            <a href="contactus.php">Contact us</a>
            </div> <!-- Ends dropdown class -->
            </div> <!-- Ends dropbtn class -->
                
            <!-- Odds and ends tab for miscellaneous pages -->
            <div class="dropdown">
            <button class="dropbtn">Odds and ends</button>
            <div class="dropdown-content">
            <a href="polling.php">Odds and ends</a>
            </div> <!-- Ends dropdown class -->
            </div> <!-- Ends dropbtn class -->
            </nav>
            
<!-- ends to be called by php functions to other pages -->