<div id="carouselExampleIndicators" class="carousel slide my-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">


          @foreach ($alldata as $data)
        
            <div class="col-6 col-lg-3 col-md-4">
            <a href=productview?productid={{$data->productid}}>
              <div class="card" style="width: 15rem;">
                <img src={{$data->image}} class="card-img-top" alt="..." height="190px" style="border-radius: 15%;">
                <div class="card-body" style = "font-family:Times New Roman,Times,serif;font-size:16px;font-style:italic;">
                  <h4 class="card-text">{{$data->itemname}}</h4>
                  <p class="card-text" ><font color='red'>Rs: {{$data->price}}</font></p1>
                </div>
              </div>
              </a>
            </div>
            @if($data->productid=='4' or $data->productid=='8')
                  </div></div></div><div class="carousel-item"><div class="container"><div class="row">
            @endif
            
            
    @endforeach
          </div>
        </div>
      </div>
     </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
    
    
<div class="container">
 <div class="row">  
  @foreach ($alldata as $data)
  <div class="col-6 col-lg-3 col-md-4">
  <a href=productview?productid={{$data->productid}}>
      <div class="card" style="width: 15rem;">
            <img src={{$data->image}} class="card-img-top" alt="..." height="190px" style="border-radius: 15%;">
        <div class="card-body" style = "font-family:Times New Roman,Times,serif;font-size:16px;font-style:italic;text-decoration:none;">
            <h4 class="card-text">{{$data->itemname}}</h4>
            <p class="card-text"><font color='red'>Rs: {{$data->price}}</font></p1>
        </div>
      </div>
      </a>
    </div>
  @endforeach
 </div>
</div>
    
    
    
</div><!--main div closed--->
