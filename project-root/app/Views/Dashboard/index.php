
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Formbuilder</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


<!-- Delete Modal -->
<?php include 'Modals/deleteModal.php' ?>

<!-- Update Modal -->
<?php include 'Modals/updateModal.php' ?>



<div class="container mt-4">

    <!-- Navbar -->
    <?php include 'Header/index.php' ?>

    <!-- Create Button -->
    <div class="d-flex justify-content-start"  style="margin-bottom: 40px;">
        <a href= "<?= site_url('/create') ?>" class="btn btn-success mb-2">Create</a>
        <a href= "<?= site_url('/view') ?>" class="btn btn-info mb-2">Custom Form</a>
    </div>

    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
    <table class="table table-bordered table-striped" id="forms-list">
       <thead>
          <tr>
             <th>Title</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($form_fields): ?>
          <?php foreach($form_fields as $field): ?>
          <tr>
             <td><?php echo $field['Title']; ?></td>

             <td>
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateModal" onclick="openModal(<?php echo $field['FormID']; ?>)">Update</button>
                <span style="margin-right: 10px;"></span>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="openModal(<?php echo $field['FormID']; ?>)">Delete</button>
                <span style="margin-right: 10px;"></span>
                  <a href="<?= site_url('/view/' . $field['FormID']) ?>">
                     <button type="button" class="btn btn-primary">View</button>
                  </a>
            </td>        
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
    
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#forms-list').DataTable();
  } );
</script>
</body>