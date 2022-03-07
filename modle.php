<!-- Modal insert categores-->
<form action="insertcat.php" METHOD="POST" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New catrgory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">id</span>
          <input type="number" class="form-control"  aria-label="id" name="id" aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">name</span>
          <input type="text" class="form-control"  aria-label="name" name="name" aria-describedby="basic-addon1">
        </div>
  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background-color: transparent; border: 1px solid #ffeba7;" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" >submit </button>
      </div>
    </div>
  </div>
</form>



<!-- Modal insert products -->

<form action="insertProd.php" METHOD="POST" class="modal fade" id="insertp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">id</span>
          <input type="number" class="form-control"  aria-label="id" name="id" aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">name</span>
          <input type="text" class="form-control"  aria-label="name" name="name" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">category</span>
          <input type="text" class="form-control"  aria-label="name" name="category" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">price</span>
          <input type="number" class="form-control"  aria-label="name" name="price" aria-describedby="basic-addon1">
        </div>
  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="background-color: transparent; border: 1px solid #ffeba7;" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" >submit </button>
      </div>
    </div>
  </div>
</form>
  