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
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}
</style>
</head>
<body style="font-family:Verdana;">

<!-- Header -->
<div style="background-color:#f1f1f1; padding:15px; background-image: url('images/background1.jpg'); background-size: cover; background-position: center;">
  <h1 id="header-title" style="font-family: 'Brush Script MT', cursive; font-size: 48px; text-align: center;">Add Product</h1>
</div>

<div class="menu">
  <div class="menuitem">
      <a href="/about">About Us</a>
  </div>
  <div class="menuitem">
      <a href="#" onclick="showSection('addpro', 'Add Product')">Add Products</a>
  </div>
  <div class="menuitem">
      <a href="#" onclick="showSection('managepro', 'Manage Products')">Manage Products</a>
  </div>
  <div class="menuitem">
      <a href="#" onclick="showSection('searchpro', 'Search Products')">Search Products</a>
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
<div id="addpro">
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

      <div class="form-group">
        <label for="product_name"><b>Product Name</b></label>
        <input type="text" id="product_name" placeholder="Enter Product Name" name="product_name" value="{{ old('product_name') }}" required>
      </div>

      <div class="form-group">
        <label for="product_image"><b>Product Image</b></label>
        <input type="file" id="product_image" style="width: 100%; padding-left: 10px; margin-top:15px; margin-bottom:15px;" name="product_image" required>
      </div>

      <div class="form-group">
        <label for="quantity"><b>Quantity</b></label>
        <input type="text" id="quantity" placeholder="Enter Quantity" name="quantity" value="{{ old('quantity') }}" required>
      </div>

      <div class="form-group">
        <label for="quantity"><b>Description</b></label>
        <input type="text" id="description" placeholder="Enter Description" name="description" value="{{ old('description') }}" required>
      </div>

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
</div>

<div id="searchpro" style="display: none; margin-bottom: 20px;">
  <h1 style="text-align: center; margin-bottom: 20px;">Search</h1>
  <div id="searchpro" style="display: flex; justify-content: center; text-align: center;">
    <form style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; border: 0; margin-bottom: 20px;">
      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="probrand" onclick="showSearchField('probrand')"> Search by Brand
      </label>

      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="product_name" onclick="showSearchField('productname')"> Search by Product Name
      </label>

      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="cost_price" onclick="showSearchField('procost')"> Search by Cost Price
      </label>

      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="sell_price" onclick="showSearchField('prosell')"> Search by Sell Price
      </label>
    </form>
  </div>

  <form action="/searchbrand?type=search" method="GET"> 
    <div id="probrand" style="display:none; max-width: 400px; margin: 20px auto;">
      <div class="form-group">
        <label for="brand"><b>Brand</b></label>
        <select id="probrand" name="probrand" style="width: 100%; padding: 12px 20px; margin: 8px 0; border: 1px solid #ccc;" required>
            <option value="">Select Brand</option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="OnePlus">OnePlus</option>
            <option value="Google">Google</option>
          </select>
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>

  <form action="/searchproname?type=search" method="GET">
    <div id="productname" style="display:none; margin: 20px auto; max-width: 400px;">
      <div class="form-group">
        <label for="product_name"><b>Product Name</b></label>
        <input type="text" id="product_name" placeholder="Enter Product Name" name="product_name" value="{{ old('product_name') }}" required style="padding: 5px 10px; height: 30px; font-size: 14px;">
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>

  <form action="/searchprocost?type=search" method="GET">
    <div id="procost" style="display:none; margin: 20px auto; max-width: 400px;">
      <div class="form-group">
        <label for="cost_price"><b>Cost Price</b></label>
        <input type="text" id="cost_price" placeholder="Enter Cost Price" name="cost_price" value="{{ old('cost_price') }}" required style="padding: 5px 10px; height: 30px; font-size: 14px;">
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>

  <form action="/searchprosell?type=search" method="GET">
    <div id="prosell" style="display:none; margin: 20px auto; max-width: 400px;">
      <div class="form-group">
        <label for="sell_price"><b>Sell Price</b></label>
        <input type="text" id="sell_price" placeholder="Enter Sell Price" name="sell_price" value="{{ old('sell_price') }}" required style="padding: 5px 10px; height: 30px; font-size: 14px;">
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>
  <div id="results">
      @if(isset($products) && count($products) > 0)
          <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
              <thead>
                  <tr>
                      <th>Brand</th>
                      <th>Product Name</th>
                      <th>Sell Price</th>
                      <th>Cost Price</th>
                      <th>Quantity</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($products as $product)
                      <tr>
                          <td>{{ $product->brand }}</td>
                          <td>{{ $product->product_name }}</td>
                          <td>{{ number_format($product->sell_price, 2) }}</td>
                          <td>{{ number_format($product->cost_price, 2) }}</td>
                          <td>{{ $product->quantity }}</td>
                  @endforeach
              </tbody>
          </table>
      @else
          <p>No products found for the selected brand.</p>
      @endif
  </div>
</div>

<div id="managepro" style="display: none; justify-content: center; margin-bottom: 20px;">
  <h1 style="text-align: center; margin-bottom: 20px;">Manage</h1>
  <div id="managepro" style="display: flex; justify-content: center; text-align: center;">
    <form style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; border: 0; margin-bottom: 20px;">
      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="probrand" onclick="showManageField('mprobrand')"> Search by Brand
      </label>

      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="product_name" onclick="showManageField('mproductname')"> Search by Product Name
      </label>

      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="cost_price" onclick="showManageField('mprocost')"> Search by Cost Price
      </label>

      <label style="display: flex; align-items: center; gap: 8px;">
        <input type="radio" name="searchOption" value="sell_price" onclick="showManageField('mprosell')"> Search by Sell Price
      </label>
    </form>
  </div>

  <form action="/searchbrand?type=manage" method="GET">
    <div id="mprobrand" style="display:none; max-width: 400px; margin: 20px auto;">
      <div class="form-group">
        <label for="brand"><b>Brand</b></label>
        <select id="mprobrand" name="mprobrand" style="width: 100%; padding: 12px 20px; margin: 8px 0; border: 1px solid #ccc;" required>
            <option value="">Select Brand</option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="OnePlus">OnePlus</option>
            <option value="Google">Google</option>
          </select>
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>

  <form action="/searchproname?type=manage" method="GET">
    <div id="mproductname" style="display:none; margin: 20px auto; max-width: 400px;">
      <div class="form-group">
        <label for="product_name"><b>Product Name</b></label>
        <input type="text" id="mproduct_name" placeholder="Enter Product Name" name="mproduct_name" value="{{ old('product_name') }}" required style="padding: 5px 10px; height: 30px; font-size: 14px;">
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>

  <form action="/searchprocost?type=manage" method="GET">
    <div id="mprocost" style="display:none; margin: 20px auto; max-width: 400px;">
      <div class="form-group">
        <label for="cost_price"><b>Cost Price</b></label>
        <input type="text" id="mcost_price" placeholder="Enter Cost Price" name="mcost_price" value="{{ old('cost_price') }}" required style="padding: 5px 10px; height: 30px; font-size: 14px;">
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>

  <form action="/searchprosell?type=manage" method="GET">
    <div id="mprosell" style="display:none; margin: 20px auto; max-width: 400px;">
      <div class="form-group">
        <label for="sell_price"><b>Sell Price</b></label>
        <input type="text" id="msell_price" placeholder="Enter Sell Price" name="msell_price" value="{{ old('sell_price') }}" required style="padding: 5px 10px; height: 30px; font-size: 14px;">
      </div>
      <button type="submit" style="padding: 5px 10px; font-size: 14px; height: 35px;">Search</button>
    </div>
  </form>
  <div id="results">
    <!-- @if(!empty($manageproducts))
      @dd($manageproducts);
  @endif -->

      @if(isset($products) && count($products) > 0)
          <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
              <thead>
                  <tr>
                      <th>Brand</th>
                      <th>Product Name</th>
                      <th>Sell Price</th>
                      <th>Cost Price</th>
                      <th>Quantity</th>
                      <th>Manage</th>
                      <th>Active / Deactive</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($products as $product)
                      <tr>
                          <td>{{ $product->brand }}</td>
                          <td>{{ $product->product_name }}</td>
                          <td>Rs.{{ number_format($product->sell_price, 2) }}</td>
                          <td>Rs.{{ number_format($product->cost_price, 2) }}</td>
                          <td>{{ $product->quantity }}</td>
                          <td>
                              <a href="#" style="text-decoration: none; color: blue;">Manage</a>
                          </td>
                          <td>
                            <a href="#" style="text-decoration: none; color: {{ $product->status == 0 ? 'green' : 'red' }};">
                              {{ $product->status == 0 ? 'Active' : 'Deactive' }}
                            </a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      @else
          <p>No products found for the selected brand.</p>
      @endif
  </div>
</div> 

<!-- Footer -->
<div style="background-color:#cdd9f2; text-align:center; padding:10px; margin-top:7px; font-size:12px;"> KV </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>



function showSection(sectionId, headerText) {
    // Hide all sections
    document.getElementById("addpro").style.display = "none";
    document.getElementById("searchpro").style.display = "none";
    document.getElementById("managepro").style.display = "none";

    // Show the selected section
    document.getElementById(sectionId).style.display = "block";
    // header text
    document.getElementById("header-title").innerText = headerText;
}


function showSearchField(field) {
    // Hide all search sections
    document.getElementById("probrand").style.display = "none";
    document.getElementById("productname").style.display = "none";
    document.getElementById("procost").style.display = "none";
    document.getElementById("prosell").style.display = "none";

    document.getElementById(field).style.display = "block";
  }
  function showManageField(field) {
    // Hide all search sections
    document.getElementById("mprobrand").style.display = "none";
    document.getElementById("mproductname").style.display = "none";
    document.getElementById("mprocost").style.display = "none";
    document.getElementById("mprosell").style.display = "none";

    document.getElementById(field).style.display = "block";
  }

  function showSearchField(id) {
    const allFields = ['probrand', 'productname', 'procost', 'prosell'];
    // Hide all fields
    allFields.forEach(field => {
      document.getElementById(field).style.display = 'none';
    });
    // Show the selected field
    document.getElementById(id).style.display = 'block';
  }

  // Function to show the corresponding manage field and hide others
  function showManageField(id) {
    const allFields = ['mprobrand', 'mproductname', 'mprocost', 'mprosell'];
    // Hide all fields
    allFields.forEach(field => {
      document.getElementById(field).style.display = 'none';
    });
    // Show the selected field
    document.getElementById(id).style.display = 'block';
  }

  
</script>


</body>
</html>