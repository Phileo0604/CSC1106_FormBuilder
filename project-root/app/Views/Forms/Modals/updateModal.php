<div id="updateModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to update?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="updateItem()" >Update Form</button>
      </div>
    </div>
  </div>
</div>

<script>
  var selectedId;

  function openModal(id) {
    selectedId = id;
  }

  function updateItem() {
    console.log("Updating item with ID: " + selectedId);
    window.location.href =  "<?= site_url('/update/') ?>" + selectedId;
  }
  
</script>