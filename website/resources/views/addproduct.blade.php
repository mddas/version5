<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="/css/addproduct.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div id="header_wrapper">
 <div id="header">
 <li id="sitename"><a href="http://localhost:8000">Jello Admin</a></li>
 
 </div>
</div>

<div id="wrapper">



<div id="div2">
	 <form action="productsubmitted" method="post" enctype="multipart/form-data">
	 @csrf
<li><input type="text" placeholder="product name " id="firstname" name="productitem"><input type="text" placeholder="Catogery" id="surname" name="catogery"></li>
<li><input type="text" placeholder="Sub catogery " id="firstname" name="subcatogery"><input type="text" placeholder="sub sub catogery" id="surname" name="subsubcatogery"></li>
<li><input type="text" placeholder="Product store room" name="warehouse"></li>
<li><input type="number" placeholder="Rate Rs" name="rate"></li>
<li><input type="text" placeholder="Describe about product " name="content"></li>
<li><input type="text" placeholder="product brand " id="firstname" name="brand"><input type="text" placeholder="Other" id="surname" name="other"></li>
<li><input type="text" placeholder="store mobile number" id="district" name="store_mobile_number"><input type="number" placeholder="quantity" min="1" max="7" id="name" name="quantity"></li>
<li><input type="file" name="image">
<li><input type="submit" value="Add Product"></li>
</form>
</div>

<div id="div1">
<center>
<form action="search" method="post">
	 @csrf
<p>search product<br></p>
<input type="text" placeholder="Search Product " name="search" id="search">
</form>
<div id="suggest">

</div>
@if(!empty($inputdata)) 
<img src=/storage/{{$inputdata['image']}} width="350" height="250"/>
@endempty


@if(!empty($inputdata)) 
</p>product name :- {{$inputdata['productitem']}}</p>
</p>product catogery :- {{$inputdata['catogery']}}</p>
</p>product name :- {{$inputdata['subcatogery']}}</p>
</p>product subcatogery :- {{$inputdata['subsubcatogery']}}</p>
</p>product warehouse :- {{$inputdata['warehouse']}}</p>
</p>product content :- {{$inputdata['content']}}</p>
</p>product rate :- {{$inputdata['rate']}}</p>
</p>product other :- {{$inputdata['other']}}</p>
</p>product quantity :- {{$inputdata['quantity']}}</p>
</p>store mobile_number :- {{$inputdata['store_mobile_number']}}</p>
</p>product brand:- {{$inputdata['brand']}}</p>
@endempty

@if(!empty($alldata)) 
<h3>product name:- {{$alldata->itemname}}</h3>
<h3>product catogery:- {{$alldata->catogery}}</h3>
<h3>product describe:- {{$alldata->describe}}</h3>
<h3>product price:- {{$alldata->price}}</h3>
<h3>product quantity:- {{$alldata->quantity}}</h3>
<h3>product storename:- {{$alldata->storename}}</h3>
<h3>product subcatogery:- {{$alldata->subcatogery}}</h3>
@endempty
</center>
</div>


</div>

<div id="footer_wrapper">

<div id="footer1">
English (UK) <a href="">nepali</a><a href="">hindi</a><a href=""> اردو</a><a href="">தமிழ்</a><a href="">বাংলা</a><a href="">मराठी</a><a href="">తెలుగు</a><a href="">ગુજરાતી</a><a href="">ಕನ್ನಡ</a><a href="">മലയാളം</a>
</div>
<div id="footer2">
<a href="">Sign Up</a><a href="">Log In</a><a href="">Messenger</a><a href="">Jello</a><a href="">Mobile</a><a href="">Find Friends</a><a href="">Badges</a><a href="">People</a><a href="">Pages</a><a href="">Places</a><a href="">Games</a><a href="">Locations</a><a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a><a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a><a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a href="">Help</a>
<p>Design By Jello.com</a>
</div>

</div>


     <script type="text/javascript">
            $(document).ready(function () {
             
                $('#search').on('keyup',function() {
                    var query = $(this).val(); 
                    //alert(query)
                    $.ajax({
                       
                        url:"suggest",
                  
                        type:"GET",
                       
                        data:{'terms':query},
                       
                        success:function (data) {
                          
                            $('#suggest').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', 'li', function(){
                  
                    var value = $(this).text();
                    $('#suggest').val(value);
                    $('#suggest').html("");
                });
            });
        

                
       
        </script>


</body>
</html>
