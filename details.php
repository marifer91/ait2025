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
              <div class ="shoesimagen"><img src="images/shoess.png" alt=""></div>
                <div class ="slideshow-buttons">
                    <span></span>
                    <span class = "focus"></span>
                    <span></span>
                    <span></span>
                </div>
                <p class="pick">choose size</p>
                <div class ="sizes">
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span class ="focus1">8</span>
                <span>9</span>
                <span>10</span>
                <span>11</span>
                <span>12</span>
                </div>
            </div>
            <div class = "product2">
                <p > &nbsp Women's Running Shoe</p> 
                <h1> &nbsp Nike Epic React Flyknit</h1>
                <h2> &nbsp $ 150</h2>
                  <p class= "description">
                    &nbsp The Nike Epic React Flyknit foam cushioning is resonsive yet light-weight, durable yet soft.
                    &nbsp This creates a sensation that not only enhances the feeling of moving forward.
                  </p>
                  
                <div class="buttons">
                    <button class="add">Add to Cart </button>
                    <button class = "like">
                        <span>❤︎</span>
                    </button>
                </div>
            </div>
         </div>
       
        
</body>

<?php include "components/footer.php"?>

</html>
