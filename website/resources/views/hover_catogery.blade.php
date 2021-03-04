<!------->
<div class="container">
<div id="London" class="tabcontent">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/laptop.jpg" class="card-img-top" alt="..."  height="190px">
          
        </div>
      </div>
      <div class="col-sm">
        <h1>Electronics</h1>
        <p>All Electronics</p>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/mobile.jfif" class="card-img-top" alt="..."   height="190px">
          
        </div>
      </div>
    </div>
  </div>
  
</div>

<div id="Paris" class="tabcontent">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/women.jpg" class="card-img-top" alt="..." height="190px">
          <div class="card-body">
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <h1>CLOTHES</h1>
  <p>All The Clothes</p>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/men.jpg" class="card-img-top" alt="..." height="190px">
          
        </div>
      </div>
    </div>
  </div>
   
</div>

<div id="Tokyo" class="tabcontent">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/kirana.jpg" class="card-img-top" alt="..." height="190px">
          
        </div>
      </div>
      <div class="col-sm">
        <h1>Kirana Pasal</h1>
  <p>Basic Needs</p>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/kirana2.jpg" class="card-img-top" alt="..." height="190px">
          
        </div>
      </div>
    </div>
  </div>
  
</div>

<div id="Oslo" class="tabcontent">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/fastfood.jpg" class="card-img-top" alt="..." height="190px"> 
          
        </div>
      </div>
      <div class="col-sm">
        <h1>Food Plus Delivery </h1>
        <p>All type of Food order and their Delivery System</p>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="images/curior.jpg" class="card-img-top" alt="..." height="190px">
          
        </div>
      </div>
    </div>
  </div>
  
</div>

<button class="tablink" onclick="openCity('London', this, 'rgb(189, 147, 70)')" id="defaultOpen">Electronics</button>
<button class="tablink" onclick="openCity('Paris', this, 'rgb(189, 147, 70)')">Clothes</button>
<button class="tablink" onclick="openCity('Tokyo', this, 'rgb(189, 147, 70)')">Accessories</button>
<button class="tablink" onclick="openCity('Oslo', this, 'rgb(189, 147, 70)')">Food Plus Delivery</button>
</div>
<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

