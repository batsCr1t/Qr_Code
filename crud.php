<?php include 'index.php'; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-info btn-rounded btn-fw pull-mid" data-toggle="modal" data-target="#myModal1">Make New</button>
                        <input type="text" placeholder="Search here..." class="pull-right">
                        <!-- <label class="badge badge-danger">Pending</label>
                        <label class="badge badge-info">Pending</label>
                        <label class="badge badge-primary">Pending</label>
                        <label class="badge badge-warning">Pending</label>
                        -->
                        <div class="table-responsive">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>
                                            Document Type
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="images/faces/rtf-document.png" alt="image" />
                                            Sample Docu
                                        </td>
                                        <td>
                                            Herman Beck
                                        </td>
                                        <td>
                                            <li class="nav-item dropdown d-flex mr-4 ">
                                                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                                                    <i class="icon-cog"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                                    <a class="dropdown-item preview-item">
                                                        <button type="button" class="btn  btn-fw">View</button>
                                                    </a>
                                                    <a class="dropdown-item preview-item">
                                                        <button type="button" class="btn  btn-fw">Update</button>
                                                    </a>
                                                </div>
                                                <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                                            </li>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>