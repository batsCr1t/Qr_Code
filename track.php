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
                                <img src="./images/others/no-image-available.png" id="output" width="250px" height="250px" style="margin: 25px 25px; border:1px white grey" alt="qr-code-image" />
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

<div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <p>Search result for <span style="font-weight: bold;">18273HUHJK</span></p>
                    <form id="content-form">
                        <textarea name="content_txt" id="contentText" cols="45" rows="5"></textarea>
                        <br>
                        <button class="btn btn-info btn-rounded btn-fw pull-left" id="FormSubmit">Add</button>
                    </form>
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
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

</html>