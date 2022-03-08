<?php
      
       include('connection.php');
       include('header.php');
      
        ?>  


<body class=" bg-dark">
 
 



  <!--start side-->

  <!--end side-->

    <!--start page-->



  

    <div class="container">
      <div class="main-body">
      
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
              <ol class="breadcrumb" >
                <li class="breadcrumb-item"><a style="text-decoration: none; color: #ffeba7;" href="../index.html"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item"><a style="text-decoration: none; color: #ffeba7;" href="singin.html"><i class="bi bi-power"></i></a></li>

        
              </ol>
              

            </nav>
            <!-- /Breadcrumb -->
      
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                

                <div class="card mt-3">
                    
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-start align-items-center flex-wrap gap-2" id="personal" style="cursor: pointer;">
                      <i class="bi bi-person-fill"></i>
                      <h5 class="mb-0" >categories</h5>

                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
  <i class="bi bi-plus-circle"></i>
  add
 
 </button>


                    </li>

                    <li class="list-group-item d-flex justify-content-start align-items-center flex-wrap gap-2" id="personal" style="cursor: pointer;">
                      <h5 class="mb-0" >id</h5> | <h5 class="mb-0" >name</h5>


                    </li>
                    <?php


                    $sql = "SELECT * FROM categories";

                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            
                                while($row = mysqli_fetch_array($result)){
                                    echo '<li class="list-group-item d-flex justify-content-start align-items-center flex-wrap gap-2" id="skills" style="cursor: pointer;">'.
                                    '<h6 class="mb-0">'. $row['id'] .'</h6>'. '|'.
                                    '<h6 class="mb-0">'. $row['name'] .'</h6>'.
                                  '</li>';
                                }}}

                    ?>
                  
                 
                   
                  </ul>
                </div>
              </div>

              <div class="col-md-8" >
                <div class="card mb-3">
                  <div class="card-body" id="pers">
                    <div class="row">
                
                  <div class="col-sm-12">

                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertp" >
                  <i class="bi bi-pencil-square"></i>  add products
 
                    </button>

 
                   
                        
                     

                    <?php


            $sql = "SELECT * FROM prodcuts";

            if($result = mysqli_query($con, $sql)){
                if(mysqli_num_rows($result) > 0){
        
            while($row = mysqli_fetch_array($result)){
                echo ' <hr>

                <div class="col-sm-3">'.
                '<h6 class="mb-0">'. $row['name'] .'</h6>'.
                '</div>
                <div class="col-sm-9 text-secondary">'.
                  '$'. $row['price'].
                '</div>
              </div>'

               ;
            }}}

?>

                    <hr>
                   
                      </div>
                    </div>
                  </div>
                </div>


                
              
  
 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


       
                   </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>





               
  
  
  
              </div>
            </div>
  
          </div>
      </div>
  

      <!--end page-->









<?php
      
       include('modle.php');
       include('footer.php');
      
        ?>  