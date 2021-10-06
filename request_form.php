<?php include 'index.php';
include './phpqrcode/qrlib.php';

function getName($name)
{
    $find = '@';
    $pos = strpos($name, $find);
    $username = substr($name, 0, $pos);
    return $username;
}

if (isset($_POST['submit'])) {
    $tempDir = 'temp/';
    $docsType = $_POST['docs-type'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $filename = getName($name);
    $codeContents = 'documentType:' . $docsType . '?name=' . urlencode($name) . '&body=' . urlencode($description);
    QRcode::png($codeContents, $tempDir . '' . $filename . '.png', QR_ECLEVEL_L, 5);
}

?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                        <form class="forms-sample" style="width: 70%; margin: 0 auto" method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Document Type</label>
                                <select class="form-control" name="docs-type" id="">
                                    <option selected disabled>-- Select --</option>
                                    <option value="Clearance">Clearance</option>
                                    <option value="Resign">Resign</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Complete Name</label>
                                <input value="<?php echo @$name; ?>" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Complete Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea value="<?php echo @$description; ?>" name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter description"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-info mr-2" style="width: 100%" />
                            </div>
                        </form>
                        <div class="qr-field" style="margin: 15px auto">
                            <h2 style="text-align:center">Your QR Code</h2>
                            <div>
                                <div style="border:2px solid black; width:210px; height:210px;">
                                    <?php echo '<img src="temp/' . @$filename . '.png" style="width:200px; height:200px;"><br>'; ?>
                                </div>
                                <a class="btn btn-primary btn-info mr-2" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>