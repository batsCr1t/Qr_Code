<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en">

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group" style="display:flex; align-items:center; justify-content:center; flex-direction:column">
                                <label for="exampleInputUsername1" style="font-size: 1.5rem; margin-top: 20px">Track and Trace</label>
                                <p style="color: grey">Please insert your QR image</p>
                                <img src="./images/others/no-image-available.png" id="qr-img" width="250px" height="250px" style="margin: 25px 25px; border:1px white grey" alt="qr-code-image" />
                                <input type="file" accept="image/*" onchange="loadFile(event)" style="border-radius: 10px; padding: 15px;">
                            </div>
                        </form>
                        <button type="submit" class="btn btn-info mr-2" style="float:right;" data-toggle="modal" data-target="#myModal1">Track</button>
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
                            <div class="item-title" style="color: green;">Received by Bate</div>
                        </li>
                        <li>
                            <div>
                                28th May 2020<br> 4:00 PM
                            </div>
                            <div class="item-title" style="color: green;">Received by Abdul</div>
                        </li>
                        <li>
                            <div>
                                19th June 2020<br> 1:00 PM
                            </div>
                            <div class="item-title" style="color: green;">Received by Philip</div>
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

<script>
    // DISPLAY INPUTTED IMAGE
    var output = document.getElementById('qr-img');
    var loadFile = function(event) {
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

</html>