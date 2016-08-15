<div class="modal fade" tabindex="-1" role="dialog" id="dConfirm">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Konfirmasi Penghapusan</h4>
      </div>
      <div class="modal-body">
        <p>Benar-benar mau menghapus data berikut ?</p>
          <form role="form">
            <div class="form-group">
              <label for="act"><span class="glyphicon"></span> Jenis Kegiatan</label>
              <p id="act"></p>
            </div>
            <div class="form-group">
              <label for="actdetail"><span class="glyphicon"></span> Detail Kegiatan</label>
              <p id="actdetail"></p>
            </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default closebutton" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary closebutton" id="btnRemoveAct">Ya</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="dConfirm_">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default closebutton" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary closebutton">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="dAdd">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Penambahan Aktifitas</h4>
      </div>
      <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-calendar"></span> Tanggal</label>
              <input type="text" class="form-control" id="aactdate" placeholder="Tanggal">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> PIC Pelanggan</label>
              <input type="text" class="form-control" id="aclientpic" placeholder="PIC Pelanggan">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Jenis Kegiatan</label>
              <input type="text" class="form-control" id="aact" placeholder="Jenis Kegiatan">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Detail Kegiatan</label>
              <input type="text" class="form-control" id="aactdetail" placeholder="Detail Kegiatan">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> Sales</label>
              <input type="text" class="form-control" id="asales" placeholder="Sales">
            </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default closebutton" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary closebutton" id="btnSaveAct">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
