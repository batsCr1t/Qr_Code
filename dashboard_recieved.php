<?php include 'index.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <a href="dashboard_incoming.php"><button type="button" class="btn btn-info btn-rounded btn-fw pull-mid">Incoming Request ( <b style="color:yellow;">1</b> )</button><a>
          <p>&nbsp;</p>
          <p style="text-align: center;">ALL RECEIVED DOCUMENTS</p>
        <div class="row" id="responds">
          <?php
          include_once("connection.php");
          $Result = mysqli_query($connecDB, "SELECT id,fileimage FROM file");
          while ($row = mysqli_fetch_array($Result)) {
            echo '
                <div class="col-xl-3 grid-margin stretch-card">
                <div class="card">
                <div class="card-body" style="display:flex; align-items:center; justify-content: center; flex-direction: column;">
                <img style="border-radius: 50%; display: block;margin-left: auto;margin-right: auto;" src="images/faces/rtf-document.png" alt="Avatar">
              <h5 style="text-align: center; color:red;">' . $row["fileimage"] . '</h5>
              <p style="text-align: center;">Price of product</p>
              <button type="button" class="btn btn-outline-primary btn-rounded btn-fw pull-left">View Received History</button>
              </div>
              </div>
              </div>
              ';
          }
          ?>
        </div>
      </div>
      <!-- End of partial -->
    </div>
  </div>
  </div>
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>