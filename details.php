<!DOCTYPE html>
<html>

<?php
//include head section
include "components/head.php";
?>



<body>

      <?php include "components/header.php"; ?> 

    
       <?php include "components/nav.php"; ?> 
    
    
            <div class = "containerdetails" >
            <div class = "shoesdetails">
              <img class= "shoesimagen" src="images/shoess.png" alt="">
                <div class ="slideshow-buttons">
                    <span></span>
                    <span class = "focus1"></span>
                    <span></span>
                    <span></span>
                </div>
                <b><p class="pick">choose size</p></b>
                <div class ="sizes">
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span class ="focus1"> 8 </span>
                <span>9</span>
                <span>10</span>
                <span>11</span>
                <span>12</span></br></br>
                </div>
            </div>
            <div class = "product2">
                <b><p > &nbsp Women's Running Shoe</p> </b>
                <h1> &nbsp Nike Epic React Flyknit</h1>
                <h2> &nbsp $ 150 AUS</h2>
                  <p class= "description">
                    The Nike Epic React Flyknit foam cushioning is resonsive yet light-weight, durable yet soft.
                    This creates a sensation that not only enhances the feeling of moving forward.
                  </p>
                  
                <div class="buttonshere">
                  
                    <button class="add">Add to Cart </button></br>
                    <input class= "input" type="text" id= "subject" name="subject" placeholder="Quantity">
                    <button class = "like"> ❤︎ </button>
                  
                </div>
            </div>
         </div>
       
        
</body>

<?php include "components/footer.php"?>

</html>
