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
    background-image: url('images/background2.jpg'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    height: 100vh; /* Adjust the height as needed */
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
    <div class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
        <a href="/about" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">About Us</a>
    </div>
    <div  class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
        <a href="/product" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">Product</a>
    </div>
    <div  class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
        <a href="/customer" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">Customer</a>
    </div>
    <div href="/" class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
    <a href="/" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">Home</a>
    </div>
    <div  class="menuitem" style="display: flex; justify-content: center; align-items: center; padding: 15px; margin: 5px 0; background-color: #2e5ef5; color: white; text-align: center; border-radius: 5px; cursor: pointer; height: 60px; width: 100%;">
        <a href="/logout" style="color: white; text-decoration: none; display: block; width: 100%; height: 100%; text-align: center; line-height: 30px;">Logout</a>
    </div>
</div>
<div class="main" style="position: absolute; top: 220px; left: 400px; right: 10px; padding: 10px;">
   <img src="images/background_admin.jpg!d" style="width: 650px; height: 340px; display: block;">
</div>


</div>


<div style="background-color:#cdd9f2;text-align:center;padding:10px;margin-top:70px;font-size:12px;"> KV </div>

</body>
</html>

