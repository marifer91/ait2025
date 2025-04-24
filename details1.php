<?php
include 'src/database.php';
// get the products data from data base
$query = "
SELECT 
id,
name,
category,
description,
price,
image
FROM products
";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->get_result();
$products = array();
while ($row = $result->fetch_assoc()) {
  array_push($products, $row);
}
?>


<!DOCTYPE html>
<html>

<?php
//include head section
include "components/head.php";
?>



<body>

  <?php include "components/header.php"; ?>


  <?php include "components/nav.php"; ?>

  <main>
    <div class= "detailscontainer11">
      <?php
      //output products 
      foreach ($products as $p) {
        $image = $p["image"];
        $name = $p["name"];
        $description = $p["description"];
        $price = $p["price"];
        echo "
        
           <div class = 'card1' >
            <div class = 'shoesdetails'>
              <img class= 'shoesimagen' src='images/$image' alt=''>
                <div class ='slideshow-buttons'>
                    <span></span>
                    <span class = 'focus1'></span>
                    <span></span>
                    <span></span>
                </div>
                <b><p class='pick'>choose size</p></b>
                <div class ='sizes'>
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span class ='focus1'> 8 </span>
                <span>9</span>
                <span>10</span>
                <span>11</span>
                <span>12</span></br></br>
                </div>
            </div>
            <div class = 'product2'>
                <b><p > $name</p> </b>
                <h1> &nbsp Nike Epic React Flyknit</h1>
                <h2> &nbsp $price</h2>
                  <p class= 'description'>
                    $description
                  </p>
                  
              <div class='buttonshere'>
                  
                  <input class= 'input' type='text' id= 'subject' name='subject' placeholder='Unit'>
                  <button class='add'>Add to Cart </button>
                  <button class = 'like'> ❤ </button>
                
              </div>
            </div>
          </div>
        
        
	     ";
         }
      ?>

    </div>

  </main>



</body>

<?php include "components/footer.php" ?>

</html>