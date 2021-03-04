@include("header");
<body>
@include("navbar1");
@include("navbar2");






<div class="container">
  <div class="row">
    <div class="col-sm">
      <img src={{$an_data->image}} alt="..." width="500px" height="400" style="border-radius: 15%;">
    </div>
    <div class="col-sm" style = "font-family:Times New Roman,Times,serif;font-size:22px;font-style:italic; margin-top:80px;">
    
      <p>product name :- {{$an_data->itemname}}</p>
      <p><font color="red">price Rs :- {{$an_data->price}}</font></p>
      <p>brand :- {{$an_data->brand}}</p>
      <p>{{$an_data->describe}}</p>
      <a class="btn btn-primary" href="#" role="button">Add to Cart</a>
      <a class="btn btn-primary" href="#" role="button">Buy Now</a>
    </div>
    <!------
    <div class="col-sm">
      One of three columns
    </div>
    ------>
  </div>
</div>





<!-----Recomendation data----->
<div class="container my-2"
<h1 style = "font-family:Times New Roman,Times,serif;font-size:22px;font-style:italic; margin-top:80px;"><font color="green">you should like this below also</font></h1>
<div class="container my-4">
 <div class="row">  
  @foreach ($alldata as $data)
  <div class="col-6 col-lg-3 col-md-4">
  <a href=productview?productid={{$data->productid}}>
      <div class="card" style="width: 15rem;">
            <img src={{$data->image}} class="card-img-top" alt="..." height="190px" style="border-radius: 15%;">
        <div class="card-body" style = "font-family:Times New Roman,Times,serif;font-size:16px;font-style:italic;">
            <h4 class="card-text">{{$data->itemname}}</h4>
            <p class="card-text"><font color='red'>Rs: {{$data->price}}</font></p1>
        </div>
      </div>
      </a>
    </div>
  @endforeach
 </div>
</div>
<!-----Recomendation data end----->



</body
</html>
