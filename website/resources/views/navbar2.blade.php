  
  <ul class="container nav ">
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="images/jello.svg" alt="" width="60" height="50" class="d-inline-block align-top">
    
    </a>
    <a class="navbar-brand" href="#">CATEGORY</a>

    <!-- Image and text -->


    
  </div>
</nav>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" style="width:500px;">
      <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search" id="search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="cart">
      <img src="/images/cart.svg" alt="" width="60" height="50" class="d-inline-block align-top">

    </a>
  </div>
</nav>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="track">
      <img src="/images/track2.svg" alt="" width="60" height="50" class="d-inline-block align-top">

    </a>
  </div>
</nav>
</ul>

<!-----------search ------>
<div id="suggest">
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
<!------seaarch end----->

