<?php
    
    require_once 'libraries/data-api.php';    
    $data = GetAllStudents('','lname');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students</title>

    <!-- Bootsrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
    <script src="js/jquery-3.7.1.min.js">
    </script>

</head>
<body>
   <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> -->
        <span class="fs-4">Student Management</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Students</a></li>        
        <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
      </ul>
    </header>
  </div>

  <div class="container">  
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Manage Students</h3>
            <p class="">This section shows a list of students</p>
      </div> 
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="table-light">
                        <th style="width: 25%">Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th style="width: 10%">Register Date</th>
                        <th style="width: 12%">Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr class="table-light">
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Register Date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    foreach ($data as $row){                ?>
                    <tr>
                        <td>
                            <?=$row['lname'];?>, <?=$row['fname'];?> <?=mb_substr($row['mname'], 0, 1);?>. 
                            <?php
                                $bg='success';
                                $status='Active';
                                switch((int)$row['status']){
                                    case 0:
                                        $bg='info';
                                        $status='New';
                                        break;
                                    case 2:
                                        $bg='danger';
                                        $status='Locked';
                                        break;
                                }
                            ?>
                            <span class="badge text-bg-<?=$bg?>"><small><?=$status?></small></span>
                        </td>
                        <td><?=$row['address'];?></td>
                        <td><?=$row['email'];?></td>
                        <?php 
                            $date = $row['registered_date']; 
                            $newDate = strtoupper(date("d M Y", strtotime($date)));  
                        ?>
                        <td><?=$newDate;?></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm btnEdit" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?=$row['id'];?>"><i class="bi bi-pencil-fill"></i></button>
                            <?php
                                $bg='success';
                                $icon='person-check-fill';
                                switch((int)$row['status']){                                    
                                    case 1: case 0:
                                        $bg='danger';
                                        $icon='lock-fill';
                                        break;
                                }
                            ?>
                            <button type="button" class="btn btn-<?=$bg?> btn-sm"><i class="bi bi-<?=$icon?>"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                <?php
                    }
                ?>                                            
                </tbody>
            </table>
        </div>
    </div>       
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1"  data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary-subtle">
        <h1 class="modal-title fs-5 text-primary-emphasis" id="exampleModalLabel"><i class="bi bi-person-badge"></i> Update Details</h1>
        <button type="button" class="btn-close bg-primary" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <form>
                <div class="mb-3 row g-3">
                    <div class="col-md"> 
                        <div class="form-floating">                
                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                            <label for="floatingInput">Last Name</label>
                        </div>
                    </div>
                    <div class="col-md"> 
                        <div class="form-floating">                
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                            <label for="floatingInput">First Name</label>
                        </div>
                    </div>
                    <div class="col-md"> 
                        <div class="form-floating">                
                            <input type="text" class="form-control" id="mname" placeholder="Middle Name">
                            <label for="floatingInput">Middle Name</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">        
                    <textarea class="form-control" id="address" rows="4"></textarea>
                    <label for="floatingInput">Address</label>
                </div>
                <div class="row g-2"> 
                    <div class="col-md"> 
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div class="col-md"> 
                        <label for="exampleFormControlInput1" class="form-label">Account Status</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Active</label>
                        </div>                    
                    </div>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Custom Script -->
<script>
    $(document).ready(function(){
        $('.btnEdit').on('click', function(){
            const dataId = $(this).data('id');
            //console.log(dataId);
            //alert("Data ID: " + dataId);

            // Make an AJAX call 
            $.ajax({
                url: 'fetch-json-data.php', // Call php script to retrieve data
                type: 'GET',
                data: { id: dataId },
                dataType: 'json',
                success: function(response) {
                    if (response.length > 0) {
                        const data = response[0];
                        console.log(data);
                        // Populate the modal textboxes with the data
                        $('#lname').val(data.lname);
                        $('#address').val(data.address);
                        $('#email').val(data.email);
                    }   
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });

        });
    });
</script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>