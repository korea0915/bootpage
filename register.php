<div class="container"> 
  <!-- Modal -->
  <div class="modal fade" id="RegisterModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <register_h4><span class="glyphicon glyphicon-user"></span> Register</register_h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action= "lib/db.php" name = "regiform" method ="post">
          <input type = 'hidden' name = 'id' value = "regiform">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id= 'usrname' name = 'usrname' placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email address</label>
              <input type="text" class="form-control" id= 'email' name = 'email' placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id= 'psw' name = 'psw' placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="cfpsw"><span class="glyphicon glyphicon-eye-close"></span> Confirm passward</label>
              <input type="password" class="form-control" id= 'cpsw' name = 'cpsw' placeholder="Confirm passward">
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Register</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>
