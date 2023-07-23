<div id="deleteModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="deleteItem1()" >Yes, delete this form</button>
      </div>
    </div>
  </div>
</div>

<script>
  var selectedId;

  function openModal(id) {
    selectedId = id;
  }

  function deleteItem1() {
    console.log("Deleting item with ID: " + selectedId);
    window.location.href = "<?= site_url('/deleteCustom/') ?>" + selectedId;
  }
</script>