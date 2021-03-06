<?php
// require_once("./application/views/template/modal-delete.php");
if (isset($data["status"])) {
     if ($data["status"] === "success") {
         echo '<div class="text-white p-3 bg-success">Xóa sản phẩm thành công!</div>';
     } else if ($data["status"] === "stmtfailed" || $data["status"] === "noinput") {
         echo '<div class="text-white p-3 bg-danger">Có lỗi xảy ra, vui lòng thử lại!</div>';
     }
 }  ?>

<div class="d-flex justify-content-between">
     <h1 class="text-primary">Products</h1>
     <form>
          <div class="form-inline pt-2">
               <div class="col"><a class="btn btn-primary" href="product/add">Add</a></div>
               <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Sort By:
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                         <a class="dropdown-item" href="#">ID</a>
                         <a class="dropdown-item" href="#">Price</a>
                         <a class="dropdown-item" href="#">In Stock</a>
                         <a class="dropdown-item" href="#">Sales</a>
                    </div>
               </div>
               <div class="col">
                    <input type="text" class="form-control mr-sm-2" placeholder="Search">
               </div>
               <button type="submit" class="btn btn-outline-primary my-2  my-sm-0">Search</button>
          </div>
     </form>
</div>


<table class="table table-hover">
     <thead>
          <tr>
               <th scope="col">ID</th>
               <th scope="col">Image</th>
               <th scope="col">Name</th>
               <th scope="col">Price</th>
               <th scope="col">Category</th>
               <th scope="col">Quantity In Stock</th>
               <th scope="col">IsNew</th>
               <th scope="col">Sales</th>
               <th scopr="côl">Action</th>
          </tr>
     </thead>
     <tbody>
          <?php
          foreach ($data["info"] as $row) : ?>
               <tr>
                    <th scope="row" data-toggle="modal" class="align-middle" data-target="#productDetail"><?= $row["ProductID"] ?></th>
                    <td style="width: 150px;" data-toggle="modal" data-target="#productDetail"><img src="/public/uploads/<?= $row["ProductImage"]; ?>" alt="productImage" class="img-fluid"></td>
                    <td data-toggle="modal" class="align-middle" data-target="#productDetail"><?= $row["ProductName"] ?></td>
                    <td data-toggle="modal" class="align-middle" data-target="#productDetail"><?= $row["Price"] ?> &dollar;</td>
                    <td data-toggle="modal" class="align-middle" data-target="#productDetail"><?= $data["cate"][$row["CategoryID"]] ?></td>
                    <td class="align-middle text-center" data-toggle="modal" data-target="#productDetail"><?= $row["QuanInStock"] ?></td>
                    <td class="text-danger align-middle" data-toggle="modal" data-target="#productDetail"><?= $row["IsNew"] ?></td>
                    <td data-toggle="modal" class="align-middle" data-target="#productDetail"><?= $row["PercentSaleOff"] ?> %</td>
                    <td class="align-middle"><a href="product/edit/<?= $row["ProductID"] ?>" class="btn btn-success">Edit</a>
                         <button type="button" class="btn btn-danger deleteBtn" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $row['ProductID'] ?>" data-link="product/">Delete</button>
                    </td>
               </tr>
          <?php endforeach; ?>
     </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <div class="modal-body">
                    Chắc chắn xóa Sản phẩm <span id="idTeam"></span>?
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="submit" class="btn btn-danger" id="deleteBtnHref">Xóa</a>
               </div>
          </div>
     </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
     $(document).on("click", ".deleteBtn", function() {
          var id = $(this).data("id");
          // alert(id);
          var link = $(this).data("link");
          $("#exampleModal #deleteBtnHref").attr("href", link + "/deletedb/" + id);
          $("#exampleModal #idTeam").text(id);
     });
</script>


<!-- <div class="modal fade" id="productDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLongTitle">Product <span>1</span> detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <div class="modal-body">
                    <p><span class="text-success font-weight-bold">Name: </span><span>namemmmmm mmmmmmm</span></p>
                    <p><span class="text-success font-weight-bold">Description: </span><span>namem mmmm mmmmmmm namemmmmmmmm mmmm namemm mmmmmmmm mm nam emmmmmmm mmmmmnam emmmm mmmmm mm mnamemmm mmmm m mmmmnamemmm mmmmmmmmm namemmmm mmm mmmmm namemmm mmmm mmmmm name mmmm mmm mmmmm namemm mmmm mmmmmm namemm mmmmmmm mmmnamemm mmmm mmmmm mnamemm mmmmmm mmmmnamem mmmmmm m mmmm namemmmmmmmm mmmm</span></p>
                    <p><span class="text-success font-weight-bold">Short description: </span><span>namemmm mmmmmmmmm namemmmmm mm mmmmm namem mmmmmmmm mmm namemm mmmmm mmmm mnamemm mmm mmmmm mmnamem mmmm mmmmmmm nam emmmm mmm mmmmm na memmmmmm mmmmmm</span></p>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
          </div>
     </div>
</div> -->