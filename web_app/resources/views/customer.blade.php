<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style> 
  * {
    box-sizing: border-box;
  }
  body {
    font-family: Arial, Helvetica, sans-serif;
  }
  form {
    border: 3px solid #f1f1f1;
  }
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Horizontal Navigation Bar */
  .menu {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      background-color: #2e5ef5;
      padding: 10px 0;
  }
  .menuitem {
      margin: 0 10px;
  }
  .menuitem a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 15px 20px;
      font-size: 16px;
  }
  .menuitem a:hover {
      background-color: #1b3bbd;
      border-radius: 4px;
  }

  .main {
    float: left;
    width: 60%;
    padding: 0 20px;
    overflow: hidden;
    background-image: url('images/background2.jpg'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    height: 100vh;
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
    .main {
      width: 80%;
      padding: 0;
    }
    .right {
      width: 100%;
    }
  }
  @media only screen and (max-width:500px) {
    .menu, .main, .right {
      width: 100%;
    }
  }
  button {
  background-color: #2e5ef5; /* New button color */
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
</style>
</head>
<body style="font-family:Verdana;">

<!-- Header -->
<div style="background-color:#f1f1f1; padding:15px; background-image: url('images/background1.jpg'); background-size: cover; background-position: center;">
  <h1 style="font-family: 'Brush Script MT', cursive; font-size: 48px; text-align: center;">Add Product</h1>
</div>

<!-- Horizontal Navigation Bar -->
<div class="menu">
  <div class="menuitem">
      <a href="/about">About Us</a>
  </div>
  <div class="menuitem">
      <a href="/login">Manage Customer</a>
  </div>
  <div class="menuitem">
      <a href="/login">Search Customer</a>
  </div>
  <div class="menuitem">
      <a href="/">Home</a>
  </div>
  <div class="menuitem">
      <a href="/logout">Logout</a>
  </div>
</div>
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
<form action="/addproduct" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="container" style="padding: 20px;">
    <!-- Brand dropdown -->
    <div class="form-group">
      <label for="brand"><b>Brand</b></label>
      <select id="brand" name="brand" style="width: 100%; padding: 12px 20px; margin: 8px 0; border: 1px solid #ccc;" required>
        <option value="">Select Brand</option>
        <option value="Apple">Apple</option>
        <option value="Samsung">Samsung</option>
        <option value="OnePlus">OnePlus</option>
        <option value="Google">Google</option>
      </select>
    </div>

    <!-- Product Name -->
    <div class="form-group">
      <label for="product_name"><b>Product Name</b></label>
      <input type="text" id="product_name" placeholder="Enter Product Name" name="product_name" value="{{ old('product_name') }}" required>
    </div>

    <!-- Product Image -->
    <div class="form-group">
      <label for="product_image"><b>Product Image</b></label>
      <input type="file" id="product_image" style="width: 100%; padding-left: 10px; margin-top:15px; margin-bottom:15px;" name="product_image" required>
    </div>

    <!-- Quantity -->
    <div class="form-group">
      <label for="quantity"><b>Quantity</b></label>
      <input type="text" id="quantity" placeholder="Enter Quantity" name="quantity" value="{{ old('quantity') }}" required>
    </div>

    <!-- Cost Price -->
    <div class="form-group">
      <label for="cost_price"><b>Cost Price</b></label>
      <input type="text" id="cost_price" placeholder="Enter Cost Price" name="cost_price" value="{{ old('cost_price') }}" required>
    </div>

    <!-- Sell Price -->
    <div class="form-group">
      <label for="sell_price"><b>Sell Price</b></label>
      <input type="text" id="sell_price" placeholder="Enter Sell Price" name="sell_price" value="{{ old('sell_price') }}" required>
    </div>
      
    <button type="submit">Submit</button>
  </div>
</form>


<!-- Footer -->
<div style="background-color:#cdd9f2; text-align:center; padding:10px; margin-top:7px; font-size:12px;"> KV </div>

</body>
</html>