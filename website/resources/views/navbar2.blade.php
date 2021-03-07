<nav class="container navbar navbar-expand-lg navbar-light bg-light" style="font-size:20px;">
  <div class="container-fluid">
    <a class="navbar-brand me-5" href="#" style="margin-top:5px"><img src="images/jello.svg" alt="" width="60" height="50" class="d-inline-block align-top"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand active me-5" aria-current="page" href="#">CATOGERY</a>
        </li>
        <li class="nav-item">
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
        <button class="btn btn-outline-success me-5" type="submit">Search</button>
      </form>
      </li>
      <li class="nav-item">
      
          <a class="navbar-brand me-5" href="#"><img src="/images/cart.svg" alt="" width="60" height="50" class="d-inline-block align-top"></a>
        </li>
        <li class="nav-item">
      
      <a class="navbar-brand me-5" href="#"><img src="/images/track2.svg" alt="" width="60" height="50" class="d-inline-block align-top"></a>
    </li>
      </ul>
      
    </div>
  </div>
</nav>


<!-----------search ----->
<ul class="list-group" id="suggest" style="margin-left:29.5%;margin-top:-23px; width:16%; position:absolute; z-index: 999">
  
</ul>
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

                
                $(document).on('click', 'a', function(){
                  
                    var value = $(this).text();
                    $('#search').val(value);
                    $('#suggest').html("");
                });
            });
        </script>
<!------seaarch end----->
