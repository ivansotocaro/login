<?php include "Views/Dashboard/partials/header.php" ?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Usuario</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Usuario</div>

                <div class="table-responsive text-nowrap">
                    <div class="card-body">

                        <div class="card-title  mb-4 d-flex justify-content-start" >
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUser">
                              Launch demo modal
                            </button>
                        </div>

                        <table id="tableUser" class="display table-hover dt-responsive" style="width:100%">
                            <thead>
                            <tr>
                                
                                <th>Nombre</th>
                                <th>Username</th>
                                <th>rol</th>
                                <th>caja</th>
                                <th>estado</th>
                                <th>Acción</th>


                            </tr>
                            </thead>

                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>



</main>



<!-- Modal -->
<div class="modal fade" id="createUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="post" id="formUser">

            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping">Nombre</span>
              <input type="text" id="name-users" name="name-users" class="form-control" placeholder="name" aria-label="Username" aria-describedby="addon-wrapping">
            </div>

            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping">usuario</span>
              <input type="text" id="username-users" name="username-users"  class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>

            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping">contraseña</span>
              <input type="text" id="password-users" name="password-users"  class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>

            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping">id</span>
              <input type="text" id="id-users" name="id-users"  class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>

            <select class="form-select" id="box-user" name="box-user" aria-label="Default select example">
              <option selected>Open this select menu</option>
            </select>

        

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php include "Views/Dashboard/partials/footer.php" ?>