<?php include 'index.php'; ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Complete Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Complete Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile Number</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <select name="admin" class="form-control" id="exampleFormControlSelect2">
                  <option>Administrator</option>
                  <option>Employee</option>
                </select>
              </div>
              <div class="form-check form-check-flat form-check-info">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-info mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>