<!-- MODAL ADD Month -->
<form>
  <div class="modal fade" id="Modal_Add_Month" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="title_add_month">Add New Month</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-2 col-form-label">Year</label>
            <div class="col-md-10">
              <input type="text" name="add_year" id="add_year" class="form-control" placeholder="Year">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Month</label>
            <div class="col-md-10">
              <input type="text" name="add_month" id="add_month" class="form-control" placeholder="Month">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" type="submit" id="btn_add_month" class="btn btn-primary">Add Month</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!--END MODAL ADD Month-->

<!-- MODAL ADD New-->
<form>
  <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-2 col-form-label">Year</label>
            <div class="col-md-10">
              <input type="text" name="year" id="year" class="form-control" placeholder="Year">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Month</label>
            <div class="col-md-10">
              <input type="text" name="month" id="month" class="form-control" placeholder="Month">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">St ID</label>
            <div class="col-md-10">
              <input type="text" name="st_id" id="st_id" class="form-control" placeholder="Student ID">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">St Name</label>
            <div class="col-md-10">
              <input type="text" name="st_name" id="st_name" class="form-control" placeholder="Student Name">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!--END MODAL ADD New-->

<!-- MODAL EDIT -->
<form>
  <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Pay ID</label>
            <div class="col-md-10">
              <input type="text" name="payment_id_edit" id="payment_id_edit" class="form-control" placeholder="Pay ID" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Year</label>
            <div class="col-md-10">
              <input type="text" name="year_edit" id="year_edit" class="form-control" placeholder="Year" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Month</label>
            <div class="col-md-10">
              <input type="text" name="month_edit" id="month_edit" class="form-control" placeholder="Month" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">St ID</label>
            <div class="col-md-10">
              <input type="text" name="st_id_edit" id="st_id_edit" class="form-control" placeholder="Student ID" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">St Name</label>
            <div class="col-md-10">
              <input type="text" name="st_name_edit" id="st_name_edit" class="form-control" placeholder="Student Name" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Class Name</label>
            <div class="col-md-10">
              <input type="text" name="class_name_edit" id="class_name_edit" class="form-control" placeholder="Class Name" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Regular Price</label>
            <div class="col-md-10">
              <input type="text" name="regular_price_edit" id="regular_price_edit" class="form-control" placeholder="Regular Price">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Discount1</label>
            <div class="col-md-10">
              <input type="text" name="discount1_edit" id="discount1_edit" class="form-control" placeholder="Discount1">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Discount2</label>
            <div class="col-md-10">
              <input type="text" name="discount2_edit" id="discount2_edit" class="form-control" placeholder="Discount2">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Return Price</label>
            <div class="col-md-10">
              <input type="text" name="return_price_edit" id="return_price_edit" class="form-control" placeholder="Return Price">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Discount Memo</label>
            <div class="col-md-10">
              <input type="text" name="discount_memo_edit" id="discount_memo_edit" class="form-control" placeholder="">
            </div>
          </div>



          <!--               <div class="form-group row">
                <label class="col-md-2 col-form-label">Ratio Month</label>
                <div class="col-md-10">
                  <input type="text" name="ratio_month_edit" id="ratio_month_edit" class="form-control" placeholder="Ratio Month" readonly>
                </div>
              </div> -->

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Pay Status</label>
            <div class="col-md-10">
              <input type="text" name="pay_status_edit" id="pay_status_edit" class="form-control" placeholder="Pay Status">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Receipt Use</label>
            <div class="col-md-10">
              <input type="text" name="receipt_use_edit" id="receipt_use_edit" class="form-control" placeholder="Receipt Use">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Receipt Phone</label>
            <div class="col-md-10">
              <input type="text" name="receipt_phone_edit" id="receipt_phone_edit" class="form-control" placeholder="Receipt Phone">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Receipt Status</label>
            <div class="col-md-10">
              <input type="text" name="receipt_status_edit" id="receipt_status_edit" class="form-control" placeholder="" readonly>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!--END MODAL EDIT-->

<!--MODAL DELETE-->
<form>
  <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Month</label>
            <div class="col-md-10">
              <input diplay="inline-block" type="text" name="month_delete" id="month_delete" class="form-control" placeholder="Month" readonly>월
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Student Name</label>
            <div class="col-md-10">
              <input type="text" name="st_name_delete" id="st_name_delete" class="form-control" placeholder="Student Name" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Pay Id </label>
            <div class="col-md-10">
              <input type="text" name="payment_id_delete" id="payment_id_delete" class="form-control" placeholder="Payment ID" readonly>
            </div>
          </div>

          <strong>Are you sure to delete this record?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!--END MODAL DELETE-->

<!--MODAL DELETE MONTH-->
<form>
  <div class="modal fade" id="Modal_Delete_Month" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Payment Month</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Year</label>
            <div class="col-md-10">
              <input diplay="inline-block" type="text" name="m_d_m_year" id="m_d_m_year" class="form-control" placeholder="Year">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Month</label>
            <div class="col-md-10">
              <input diplay="inline-block" type="text" name="m_d_m_month" id="m_d_m_month" class="form-control" placeholder="Month">
            </div>
          </div>

          <strong>Are you sure to delete this month record?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="button" type="submit" id="btn_month_delete" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- END MODAL DELETE MONTH -->