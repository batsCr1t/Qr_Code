<?php include 'index.php'; ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Document Type</label>
                                <select class="form-control" name="" id="">
                                    <option value="volvo" selected disabled>-- Select --</option>
                                    <option value="">Clearance</option>
                                    <option value="">Resign</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Complete Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Complete Name" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter description"></textarea>
                            </div>
                        </form>
                        <button type="submit" class="btn btn-info mr-2" data-toggle="modal" data-target="#myModal1">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Start of Modal-->
<div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <p>Search result for</p>
                    <img src="./images/others/no-image-available.png" id="modal-qr-img" width="250px" height="250px" style="margin: 25px 25px; border:1px white grey" alt="qr-code-image" />
                    <p>Type: <span style="font-weight: bold;">Clearance</span></p>
                    <p>Name: <span style="font-weight: bold;">Dandy Makabudbud</span></p>
                    <p>Description: <span style="font-weight: bold;">Please notice me</span></p>
                    <hr>
                    <ul>
                        <li>
                            <div>
                                3rd May 2020<br> 7:00 PM
                            </div>
                            <div class="item-title" style="color: green;">QR Code was generated</div>
                        </li>
                        <li>
                            <div>
                                19th May 2020<br> 3:00 PM
                            </div>
                            <div class="item-title" style="color: green;">Received and Approved</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--End of Modal-->