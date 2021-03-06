@extends('layouts.admin')
@section('title')
<title>{{ $title = 'Users' }} — MOJ</title>
@endsection
@section('content')
<div class="content-box">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-11">
            <div class="element-wrapper">
                <h6 class="element-header">
                    {{ $title ?? 'Users' }}
                </h6>
                <?php 
                // if (Session::exists('register')) {
                     ?>
                <!-- <div class="alert alert-info"> -->
                    <?php
                    //  echo Session::flash('register'); 
                    ?>
                <!-- </div> -->
                <?php 
                // }
                 ?>
                <div class="element-box mb-5 row p-4">
                    <div class="align-self-center col-lg-9 col-md-12 col-sm-12 mb-4 mb-lg-0">
                        <div class="element-info-with-icon m-0">
                            <div class="element-info-icon">
                                <div class="icon-people"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    User Management
                                </h5>
                                <div class="element-inner-desc">
                                    View, Create, Edit and delete administrators
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- THE ADD USER MODAL BUTTON STARTS HERE -->
                    <div class="align-self-center centered col-lg-3 col-md-12 col-sm-12 m-0 p-0">
                        <a class="btn btn-block btn-primary text-white el-tablo m-0 p-lg-4 p-md-2 p-md-3 p-sm-2 p-sm-3" href="#" data-target="#add" data-toggle="modal">
                            <i class="icon-feather-plus mr-2"></i>
                            Add User
                        </a>
                    </div>
                    <!-- THE ADD USER MODAL BUTTON ENDS HERE -->

                    <!-- THE ADD USER MODAL STARTS HERE -->
                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="add" role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-centered" role="document">
                            <div class="modal-content text-center">
                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                <div class="onboarding-content p-5 mt-5">
                                    <h4 class="onboarding-title">
                                        Add User
                                    </h4>
                                    <form method="post" action="register.php">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="fname">Username</label><input name="username" class="form-control" data-error="Please input the username" placeholder="eg: johndoe" required="required" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fname">First Name</label><input name="fname" class="form-control" data-error="Please input the First Name" placeholder="eg: John" required="required" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lname">Last Name</label><input name="lname" class="form-control" data-error="Please input the Last Name" placeholder="eg: Doe" required="required" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input minlength="6" name="password" class="form-control" data-error="Please input the password" required="required" type="password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="password_again">Re-type password</label>
                                                    <input name="password_again" minlength="6" class="form-control" data-error="Please input the password" required="required" type="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input name="email" class="form-control" data-error="Your email address is invalid" placeholder="Enter email" autocomplete="email" required="required" type="email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="state">State</label><input name="state" class="form-control" data-error="Please input the State / MDA" placeholder="eg: Enugu State" required="required" autocomplete="state" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="state">Address</label><input name="address" class="form-control" data-error="Please input the Address" placeholder="eg: 1, Cresent Street" required="required" autocomplete="state" type="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone">User Role</label>
                                                    <select class="form-control" name="user_role">
                                                        <?php
                                                        //  foreach ($user->get_roles('user_roles') as $role) {
                                                            ?>
                                                            <option value="<?php
                                                            //  echo $role->role_name;
                                                              ?>"><?php 
                                                            //   echo $role->role_name;
                                                              ?></option>
                                                        <?php 
                                                        // }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="status">User Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col-sm-12 col-md-4 mb-2">
                                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                            </div>
                                            <div class="col-sm-12 col-md-8 mb-2">
                                                <input name="submit" class="btn btn-primary btn-block" value="Add User" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- THE ADD USER MODAL ENDS HERE -->

                </div>

                <div class="element-box">
                    <div class="w-100" style="overflow: hidden;">
                        <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                            <thead>
                                <tr class="">
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Coverage</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="">
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Coverage</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                // if ($user->get_roles('users') !== false) {
                                //         foreach ($user->get_roles('users') as $u) {
                                              ?>
                                <tr class="">
                                    <td><?php
                                    //  echo $u->id;
                                      ?></td>
                                    <td><?php
                                    //  echo $u->firstname;
                                      ?></td>
                                    <td><?php
                                    //  echo $u->lastname;
                                      ?></td>
                                    <td><?php
                                    //  echo $u->username;
                                      ?></td>
                                    <td><?php
                                    //  echo $u->user_role;
                                      ?></td>
                                    <td><?php 
                                    // if ($u->status == 1) {echo "Active";}else {echo "Inactive";} 
                                    ?></td>
                                    <td><?php
                                    //  echo $u->state;
                                      ?></td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit<?php
                                        //  echo $u->id;
                                          ?>" data-toggle="modal">Edit</a>
                                        <div aria-hidden="true" class="onboarding-modal modal fade animated" id="edit<?php 
                                        // echo $u->id;
                                         ?>" role="dialog" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-centered" role="document">
                                                <div class="modal-content text-center">
                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                                    <div class="onboarding-content p-5 mt-5">
                                                        <h4 class="onboarding-title">
                                                            Edit User
                                                        </h4>
                                                        <form method="post" action="update.php">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="fname">Username</label><input name="username" class="form-control" data-error="Please input the username" value="<?php 
                                                                        // echo $u->username;
                                                                         ?>" placeholder="eg: johndoe" required="required" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="id" value="<?php
                                                            //  echo $u->id;
                                                              ?>">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fname">First Name</label><input name="fname" class="form-control" value="<?php
                                                                        //  echo $u->firstname; 
                                                                         ?>" data-error="Please input the First Name" placeholder="eg: John" required="required" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="lname">Last Name</label><input name="lname" class="form-control" data-error="Please input the Last Name" placeholder="eg: Doe" value="<?php
                                                                        //  echo $u->lastname; ?>" required="required" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="password">Password</label><input name="password" class="form-control" data-error="Please input the password" required="required" type="password">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="password_again">Re-password</label><input name="password_again" class="form-control" data-error="Please input the password" required="required" type="password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Email address</label><input name="email" class="form-control" data-error="Your email address is invalid" placeholder="Enter email" autocomplete="email" value="<?php
                                                                        //  echo $u->email; ?>" required="required" type="email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="state">State</label><input name="state" class="form-control" data-error="Please input the State / MDA" placeholder="eg: Enugu State" value="<?php 
                                                                        // echo $u->state; 
                                                                        ?>" required="required" autocomplete="state" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="phone">User Role</label>
                                                                        <select class="form-control" name="user_role">
                                                                            <?php 
                                                                            // foreach ($user->get_roles('user_roles') as $role) {
                                                                                ?>
                                                                            <option <?php 
                                                                                // if ($u->user_role == $role->role_name) {echo "Selected";}
                                                                                 ?> value="<?php
                                                                                //   echo $role->role_id;
                                                                                ?>"><?php
                                                                                //  echo $role->role_name;
                                                                                 ?></option>
                                                                            <?php 
                                                                            // }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="status">User Status</label>
                                                                        <select class="form-control" name="status">
                                                                            <option <?php 
                                                                            // if ($u->status == 1) {echo "Selected";} 
                                                                            ?> value="1">Active</option>
                                                                            <option <?php
                                                                            //  if ($u->status == 0) {echo "Selected";}
                                                                              ?> value="0">Inactive</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row pt-4">
                                                                <div class="col-sm-12 col-md-4 mb-2">
                                                                    <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                                                </div>
                                                                <div class="col-sm-12 col-md-8 mb-2">
                                                                    <input name="submit" class="btn btn-primary btn-block" value="Edit User" type="submit">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="action">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete<?php
                                        //  echo $u->id;
                                          ?>" data-toggle="modal">Delete</a>
                                        <div aria-hidden="true" class="onboarding-modal modal fade animated" id="delete<?php
                                        //  echo $u->id;
                                          ?>" role="dialog" tabindex="-1">
                                            <div class="modal-dialog modal-centered" role="document">
                                                <div class="modal-content text-center">
                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                                    <div class="onboarding-content p-5 mt-5">
                                                        <h4 class="onboarding-title text-danger">
                                                            Are you sure <br>you want to permanently delete <br>this user's account?
                                                        </h4>
                                                        <div class="onboarding-text">
                                                            <br>
                                                            <strong>Are you sure you want to delete this account?</strong>
                                                        </div>
                                                        <div class="row pt-4">
                                                            <div class="col-sm-12 col-md-4 mb-2">
                                                                <button class="btn btn-secondary btn-block" data-dismiss="modal" type="button">Cancel</button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-8 mb-2">
                                                                <form action="delete.php" method="post">
                                                                    <input type="hidden" value="<?php
                                                                    //  echo $u->id;
                                                                      ?>" name="user">
                                                                    <input class="btn btn-danger btn-block" type="submit" value="Delete User Account">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                    //     }
                                    // } 
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>




@endsection