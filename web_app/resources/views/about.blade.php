<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:rgb(77, 98, 170);
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #575c67;
  color: white;
}

</style>
</head>
<body>
<div class="topnav">
  <a  href="/">Home</a> 
  <a  href="/about">About Us</a>
  <a  href="/login">Login</a>
</div>
<div class="about-section" style="background-image: url('images/background1.jpg'); background-size: cover; width: -80px; background-position: center;">
  <h1>Who We Are</h1>
  <p>At Cell Mart, we offer a wide range of top-quality mobile phones, accessories, and tech products to meet the needs of every customer.</p>
  <p>Our commitment to providing the latest in mobile technology, coupled with exceptional customer service, ensures that each shopping experience is seamless and satisfying.</p>
  <p>Whether you’re upgrading your device or looking for reliable accessories, Cell Mart is your go-to destination for all things mobile.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/team1.jpg" alt="Jane" style="width: 300px; height: 300px; display: block; margin: auto; ">
      <div class="container">
        <h2>Miss. Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>A visionary leader with a passion for innovation and excellence. Dedicated to driving success, fostering teamwork, and creating meaningful impact in the industry.</p>
        <p>janeD@ecellmart.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="images/team2.jpg" alt="Sarath" style="width: 300px; height: 300px; display: block; margin: auto; ">
      <div class="container">
        <h2>Mr. Sarath Mendis</h2>
        <p class="title">Director</p>
        <p>A strategic leader with extensive experience in the retail and mobile industry. Focused on innovation, operational excellence, and delivering value to both customers and stakeholders at Cell Mart.</p>
        <p>sarathM@cellmart.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="images/team3.jpg" alt="Ramanadan" style="width: 300px; height: 300px; display: block; margin: auto; ">
      <div class="container">
        <h2>Mr. Sameera Perera</h2>
        <p class="title">General Manager</p>
        <p>A results-driven leader with a strong track record in overseeing operations, driving business growth, and optimizing performance. Focused on managing cross-functional teams, enhancing operational efficiency, and ensuring customer satisfaction.</p>
        <p>jramanadanA@cellmart.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
