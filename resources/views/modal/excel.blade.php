<div class="modal" id="excelDataModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="uploadExcelForm" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <span class="text-danger">All (*) fields are required</span>
          </div>
        </div>
        <div class="row">
                     
          <div class="col-md-12">
            <div class="form-group col-md-12">
              <input type="file" class="dropify" name="excel" id="excel" data-show-errors="true" data-errors-position="outside" data-allowed-file-extensions="svg xlsx">
            </div>
            <x-selectbox labelName="Type" name="type" required="required" col="col-md-12">
              <option value="1">Single sheet</option>
              <option value="2">Multiple sheet</option>
          </x-selectbox>
          </div>            
        </div>

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="upload-btn"></button>
      </div>
      </form>
    </div>
  </div>
</div>