<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style> 
* {
    box-sizing: border-box;
  }
  .menu {
    float: left;
    width: 20%;
  }
  .menuitem {
    padding: 8px;
    margin-top: 7px;
    border-bottom: 1px solid #f1f1f1;
  }
  .main {
    float: left;
    width: 60%;
    padding: 0 20px;
    overflow: hidden;
  }
  .right {
    background-color: lightblue;
    float: left;
    width: 20%;
    height: 576px;
    padding: 10px 15px;
    margin-top: 7px;
  }
  
  @media only screen and (max-width:800px) {
    /* For tablets: */
    .main {
      width: 80%;
      padding: 0;
    }
    .right {
      width: 100%;
    }
  }
  @media only screen and (max-width:500px) {
    /* For mobile phones: */
    .menu, .main, .right {
      width: 100%;
    }
  }

</style>
</head>
<body style="font-family:Verdana;">

<div style="background-color:#f1f1f1;padding:15px; background-image: url('images/background1.jpg'); background-size: cover; width: -80px; background-position: center;">
<h1 style="font-family: 'Brush Script MT', cursive; font-size: 48px;">Cell Mart</h1>
<h3 style="font-family: 'Candara', sans-serif; font-size: 24px;">Choose your future technology</h3>
</div>

<div style="overflow:auto">
<div class="menu" style="display: flex; flex-direction: column; width: 200px; background-color: #ffff; padding: 10px 0;">
    <div  class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
        <a href="{{ url('/login') }}" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">Products</a>
    </div>
    <div class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
        <a href="{{ url('/about') }}" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">About Us</a>
    </div>
    <div  class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
        <a href="{{ url('/login') }}" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">Login</a>
    </div>
    <div href="{{ url('/') }}" class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
    <a href="{{ url('/') }}" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">Home</a>
    </div>
</div>


  <div class="main">
    <h2>The Walk</h2>
    <p>Welcome to 'CELL MART', your one-stop destination for the latest and greatest in mobile technology. We offer a wide selection of smartphones, accessories, and tech gadgets from leading brands, all at unbeatable prices. Whether you're upgrading to the latest model or looking for essential accessories, we’ve got you covered. Explore our range today and experience superior customer service with every purchase!</p>
    <img src="images/background.jpg" style="width:100%">
  </div>

  <div class="right">
    <h2>Where?</h2>
    <p>No.89,</p>
    <p>1st Cross Street,</p>
    <p>Panadura.</p>
    <!-- <iframe src="https://www.google.com/maps/embed/v1/place?q=No.89,1st%20Cross%20Street,%20Panadura&key=AIzaSyC5J4U6i3zYQ2t8UvLwZjfiLxXY8fr12KQ" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
      <img src="images/map.webp" alt="Location Image" width="210" height="200">
    </div>
</div>


<div style="background-color:#cdd9f2;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> KV </div>

</body>
</html>

