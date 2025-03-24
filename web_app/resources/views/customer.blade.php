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
      <a href="#" onclick="showSection('managecustomer', 'Manage Customer')">Manage Customer</a>
  </div>
  <div class="menuitem">
      <a href="#" onclick="showSection('searchcustomer', 'Search Customer')">Search Customer</a>
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
<div id="searchcustomer" style="display: none; margin-bottom: 20px;">
  <h1 style="text-align: center; margin-bottom: 20px;">Search Customer</h1>
  <div style="display: flex; justify-content: center; text-align: center;">
    <form style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
      <label>
        <input type="radio" name="searchOption" value="fname" onclick="showSearchField('fname')"> Search by First Name
      </label>
      <label>
        <input type="radio" name="searchOption" value="lname" onclick="showSearchField('lname')"> Search by Last Name
      </label>
      <label>
        <input type="radio" name="searchOption" value="email" onclick="showSearchField('email')"> Search by Email
      </label>
      <label>
        <input type="radio" name="searchOption" value="contact" onclick="showSearchField('contact')"> Search by Contact
      </label>
    </form>
  </div>

  <form action="/searchcustomer" method="GET">
    <div id="fname" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="fname"><b>First Name</b></label>
      <input type="text" name="fname" placeholder="Enter First Name" required>
      <button type="submit">Search</button>
    </div>
    <div id="lname" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="lname"><b>Last Name</b></label>
      <input type="text" name="lname" placeholder="Enter Last Name" required>
      <button type="submit">Search</button>
    </div>
    <div id="email" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="email"><b>Email</b></label>
      <input type="email" name="email" placeholder="Enter Email" required>
      <button type="submit">Search</button>
    </div>
    <div id="contact" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="contact"><b>Contact</b></label>
      <input type="text" name="contact" placeholder="Enter Contact Number" required>
      <button type="submit">Search</button>
    </div>
  </form>

  <div id="results">
    @if(isset($customers) && count($customers) > 0)
      <table border="1" cellpadding="10" cellspacing="0">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
            <tr>
              <td>{{ $customer->fname }}</td>
              <td>{{ $customer->lname }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->contact }}</td>
              <td>{{ $customer->address }}</td>
              <td>{{ $customer->status == 1 ? 'Active' : 'Inactive' }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <p>No customers found.</p>
    @endif
  </div>
</div>

<div id="managecustomer" style="display: none; justify-content: center; margin-bottom: 20px;">
  <h1 style="text-align: center; margin-bottom: 20px;">Manage Customer</h1>
  <div style="display: flex; justify-content: center; text-align: center;">
    <form style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
      <label>
        <input type="radio" name="manageOption" value="fname" onclick="showManageField('managefname')"> Manage by First Name
      </label>
      <label>
        <input type="radio" name="manageOption" value="lname" onclick="showManageField('managelname')"> Manage by Last Name
      </label>
      <label>
        <input type="radio" name="manageOption" value="email" onclick="showManageField('manageemail')"> Manage by Email
      </label>
      <label>
        <input type="radio" name="manageOption" value="contact" onclick="showManageField('managecontact')"> Manage by Contact
      </label>
      <label>
        <input type="radio" name="manageOption" value="status" onclick="showManageField('managestatus')"> Manage by Status
      </label>
    </form>
  </div>

  <form action="/managecustomer" method="GET">
    <!-- Manage by First Name -->
    <div id="managefname" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="fname"><b>First Name</b></label>
      <input type="text" name="fname" placeholder="Enter First Name" required>
      <button type="submit">Search</button>
    </div>

    <!-- Manage by Last Name -->
    <div id="managelname" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="lname"><b>Last Name</b></label>
      <input type="text" name="lname" placeholder="Enter Last Name" required>
      <button type="submit">Manage</button>
    </div>

    <!-- Manage by Email -->
    <div id="manageemail" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="email"><b>Email</b></label>
      <input type="email" name="email" placeholder="Enter Email" required>
      <button type="submit">Manage</button>
    </div>

    <!-- Manage by Contact -->
    <div id="managecontact" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="contact"><b>Contact</b></label>
      <input type="text" name="contact" placeholder="Enter Contact Number" required>
      <button type="submit">Manage</button>
    </div>

    <!-- Manage by Status -->
    <div id="managestatus" style="display:none; max-width: 400px; margin: 20px auto;">
      <label for="status"><b>Status</b></label>
      <select name="status" required>
        <option value="">Select Status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
      </select>
      <button type="submit">Manage</button>
    </div>
  </form>

  <div id="results">
    @if(isset($customers) && count($customers) > 0)
      <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
            <tr>
              <td>{{ $customer->fname }}</td>
              <td>{{ $customer->lname }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->contact }}</td>
              <td>{{ $customer->address }}</td>
              <td>{{ $customer->status == 1 ? 'Active' : 'Inactive' }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <p>No customers found.</p>
    @endif
  </div>
</div>

<!-- Footer -->
<div style="background-color:#cdd9f2; text-align:center; padding:10px; margin-top:7px; font-size:12px;"> KV </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>



function showSection(sectionId, headerText) {
    // Hide all sections
    document.getElementById("searchcustomer").style.display = "none";
    document.getElementById("managecustomer").style.display = "none";

    // Show the selected section
    document.getElementById(sectionId).style.display = "block";
    // header text
    document.getElementById("header-title").innerText = headerText;
}


function showSearchField(field) {
    // Hide all search sections
    document.getElementById("fname").style.display = "none";
    document.getElementById("lname").style.display = "none";
    document.getElementById("email").style.display = "none";
    document.getElementById("contact").style.display = "none";

    document.getElementById(field).style.display = "block";
  }
  function showManageField(field) {
    // Hide all search sections
    document.getElementById("fname").style.display = "none";
    document.getElementById("lname").style.display = "none";
    document.getElementById("email").style.display = "none";
    document.getElementById("contact").style.display = "none";

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