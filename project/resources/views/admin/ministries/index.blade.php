@extends('layouts.admin')
@section('title')
<title>{{ $title = 'Ministries' }} — MOJ</title>
@endsection
@section('content')
<div class="content-box">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-11">
            <div class="element-wrapper">
                <h6 class="element-header">
                    {{ $title ?? '' }} 
                </h6>
                @if (count($errors)) 
                    @foreach($errors->all() as $error) 
                        <div class="alert alert-info">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="element-box mb-5 row p-4">
                    <div class="align-self-center col-lg-9 col-md-12 col-sm-12 mb-4 mb-lg-0">
                        <div class="element-info-with-icon m-0">
                            <div class="element-info-icon">
                                <div class="fa fa-university"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Ministry Management
                                </h5>
                                <div class="element-inner-desc">
                                    View, Create, Edit and delete Ministries
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- THE ADD USER MODAL BUTTON STARTS HERE -->
                    <?php
                    //  if ($user->data()->user_role == '1') {
                         ?>
                    <div class="align-self-center centered col-lg-3 col-md-12 col-sm-12 m-0 p-0">
                        <a class="btn btn-block btn-primary text-white el-tablo m-0 p-lg-4 p-md-2 p-md-3 p-sm-2 p-sm-3" href="#" data-target="#add" data-toggle="modal">
                            <i class="icon-feather-plus mr-2"></i>
                            Add Ministry
                        </a>
                    </div>
                    <?php
                    // }
                    ?>
                    <!-- THE ADD USER MODAL BUTTON ENDS HERE -->


                    <!-- THE ADD USER MODAL STARTS HERE -->
                    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="add" role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-centered" role="document">
                            <div class="modal-content text-center">
                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                <div class="onboarding-content p-5 mt-5">
                                    <h4 class="onboarding-title">
                                        Add Ministry
                                    </h4>
                                    {!! Form::open(['route' => 'ministries.store', 'method' => 'POST', 'file' => true]) !!}
                                    <!-- <form method="post" action="add_ministry.php" enctype="multipart/form-data"> -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    {!! Form::label('ministry_name', 'Ministry') !!}
                                                    <!-- <label for="phone">Ministry</label> -->
                                                    {!! Form::text('ministry_name', null, ['class' => 'form-control', 'data-error' => 'Please input the ministry name', 'placeholder' => 'eg: Ministry of Works', 'required' => true]) !!}
                                                    <!-- <input name="ministry_name" class="form-control" data-error="Please input the the ministry name" placeholder="eg: Ministry of Works" required="required" type="text"> -->
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    {!! Form::label('ministry_TIN', 'Ministry_TIN') !!}
                                                    <!-- <label for="phone">Ministry TIN</label> -->
                                                    {!! Form::text('ministry_TIN', null, ['class' => 'form-control', 'data-error' => 'Please input the ministry tin', 'placeholder' => 'eg: 23434', 'required' => true]) !!}
                                                    <!-- <input name="ministry_TIN" class="form-control" data-error="Please input the the ministry name" placeholder="eg: 65667" required="required" type="text"> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col-sm-12 col-md-4 mb-2">
                                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                            </div>
                                            <div class="col-sm-12 col-md-8 mb-2">
                                                {!! Form::button('Add Ministry', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) !!}
                                                <!-- <input name="submit" class="btn btn-primary btn-block" value="Add Ministry" type="submit"> -->
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- THE ADD USER MODAL ENDS HERE -->

                </div>
                <div class="element-box">
                    <div class="w-100" style="overflow: hidden">
                        <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                            <thead>
                                <tr class="">
                                    <th>#</th>
                                    <th>ministry</th>
                                    <th>TIN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="">
                                    <th>#</th>
                                    <th>ministry</th>
                                    <th>TIN</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    @foreach($ministries as $key => $m) 
                                        <tr class="">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $m->ministry_name }}</td>
                                            <td>{{ $m->ministry_TIN }}</td>
                                            <td class="action">
                                                <?php 
                                                // if ($user->data()->user_role == '1') {
                                                    ?>
                                                <a class="btn btn-primary btn-sm" href="#" data-target="#edit{{ $m->id }}" data-toggle="modal">Edit</a>
                                                <div aria-hidden="true" class="onboarding-modal modal fade animated" id="edit{{ $m->id }}" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-centered" role="document">
                                                        <div class="modal-content text-center">
                                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                                            <div class="onboarding-content p-5 mt-5">
                                                                <h4 class="onboarding-title">
                                                                    Edit Ministry
                                                                </h4>
                                                                {!! Form::model($m,array('route'=>['ministries.update',$m->id],'method'=>'PUT')) !!}
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                {!! Form::label('ministry_name', 'Ministry') !!}
                                                                                {!! Form::text('ministry_name', null, ['class' => 'form-control', 'data-error' => 'Please input the ministry name', 'placeholder' => 'eg: Ministry of Works', 'required' => true]) !!}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                {!! Form::label('ministry_TIN', 'Ministry_TIN') !!}
                                                                                {!! Form::text('ministry_TIN', null, ['class' => 'form-control', 'data-error' => 'Please input the ministry tin', 'placeholder' => 'eg: 23434', 'required' => true]) !!}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pt-4">
                                                                        <div class="col-sm-12 col-md-4 mb-2">
                                                                            <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-8 mb-2">
                                                                        {!! Form::button('Update Ministry', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) !!}
                                                                        </div>
                                                                    </div>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                //  if ($user->data()->user_role == '1') {
                                                     ?>
                                                <a class="btn btn-primary btn-sm" href="#" data-target="#pay{{ $m->id }}" data-toggle="modal">Pay</a>
                                                <?php
                                                // }
                                                ?>
                                                <div aria-hidden="true" class="onboarding-modal modal fade animated" id="pay{{ $m->id }}" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-centered" role="document">
                                                        <div class="modal-content text-center">
                                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                                            <div class="onboarding-content p-5 mt-5">
                                                                <h4 class="onboarding-title">
                                                                    Pay Ministry
                                                                </h4>
                                                                {!! Form::open(['route' => 'payments.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                                                    <div class="row">
                                                                    {!! Form::hidden('id', $m->id) !!}
                                                                        <!-- <input type="hidden" name="id" value="<?php
                                                                        //  echo $m->id;
                                                                          ?>"> -->
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                            {!! Form::label('phone', 'Expenditure Type') !!}
                                                                                <!-- <label for="phone">Expenditure Type</label> -->
                                                                                {!! Form::select('budget', array('capital' => 'capital', 'recurrent' => 'recurrent'), '', array('class' => 'form-control')) !!}
                                                                                <!-- <select class="form-control" name="budget">
                                                                                    <option value='capital'>Capital</option>
                                                                                    <option value="recurrent">Recurrent</option>
                                                                                </select> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                {!! Form::label('amount', 'Amount') !!}
                                                                                <!-- <label for="phone">Amount</label> -->
                                                                                {!! Form::number('amount', null, array('class' => 'form-control', 'data-error' => 'Please input the amount', 'placeholder' => 'eg: 65667', 'required' => true)) !!}
                                                                                <!-- <input name="amount" value="" class="form-control" data-error="Please input the amount" placeholder="eg: 65667" required="required" type="text"> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                {!! Form::label('warrant', 'Warrant') !!}
                                                                                <!-- <label for="">Warrant</label> -->
                                                                                {!! Form::text('warrant', null, array('class' => 'form-control', 'data-error' => 'Please input the Warrant Number', 'placeholder' => 'Please input the warrant number', 'required' => true)) !!}
                                                                                <!-- <input name="warrant" value="" class="form-control" data-error="Please input the Warrant Number" placeholder="Please input the Warrant Number" required="required" type="text"> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                {!! Form::label('picture', 'Payment Advise Signature') !!}
                                                                                <!-- <label for="phone">Payment Advise Signature</label> -->
                                                                                <br>
                                                                                <div class="custom-file">
                                                                                    {!! Form::file('picture', array('class' => 'picture')) !!}
                                                                                    <!-- <input type="file" class="custom-file-input" id="picture" name="picture"> -->
                                                                                    {!! Form::label('picture', '700px x 80px .jpg and .png only', array('class' => 'custom-file-label', 'for' => 'attach')) !!}
                                                                                    <!-- <label class="custom-file-label" for="attach">(700px x 80px .jpg and .png only)</label> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                {!! Form::label('remark', 'Remark') !!}
                                                                                <!-- <label for="">Remark</label> -->
                                                                                {!! Form::select('remark', array('satisfactory' => 'Satisfactory', 'return' => 'Returned'), '', array('class' => 'form-control')) !!}
                                                                                <!-- <select class="form-control" name="remark">
                                                                                    <option value='satisfactory'>Satisfactory</option>
                                                                                    <option value="returned">Returned</option>
                                                                                </select> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                {!! Form::label('state', 'Description') !!}
                                                                                <!-- <label for="state">Description</label> -->
                                                                                {!! Form::textarea('description', null, array('class' => 'form-control', 'data-error' => 'Please input the Address', 'rows' => '3', 'required' => true)) !!}
                                                                                <!-- <textarea name="description" class="form-control" data-error="Please input the Address" rows="3" required="required" type="text"></textarea> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pt-4">
                                                                        <div class="col-sm-12 col-md-4 mb-2">
                                                                            <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-8 mb-2">
                                                                            {!! Form::button('Pay Ministry', array('type' => 'submit', 'class' => 'btn btn-primary btn-block')) !!}
                                                                            <!-- <input name="submit" class="btn btn-primary btn-block" value="Pay Ministry" type="submit"> -->
                                                                        </div>
                                                                    </div>
                                                                    {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                                // if ($user->data()->user_role == '1') {
                                                    ?>
                                                <a class="btn btn-danger btn-sm" href="#" data-target="#delete{{ $m->id }}" data-toggle="modal">Delete</a>
                                                <?php
                                                // }
                                                ?>
                                                <div aria-hidden="true" class="onboarding-modal modal fade animated" id="delete{{ $m->id }}" role="dialog" tabindex="-1">
                                            <div class="modal-dialog modal-centered" role="document">
                                                <div class="modal-content text-center">
                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                                    <div class="onboarding-content p-5 mt-5">
                                                        <h4 class="onboarding-title text-danger">
                                                            Are you sure <br>you want to permanently delete <br>this ministries account?
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
                                                                {!! Form::open(array('route'=>['ministries.destroy',$m->id],'method'=>'DELETE')) !!}
                                                                <!-- <form action="delete.php" method="post"> -->
                                                                    {!! Form::button('Delete Ministries Account', ['type' => 'submit', 'class' => 'btn btn-danger btn-block']) !!}
                                                                    <!-- <input class="btn btn-danger btn-block" type="submit" value="Delete Ministries Account"> -->
                                                                <!-- </form> -->
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="edit" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title">
                        Edit Ministry
                    </h4>
                    <form method="post" action="register.php">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">State</label>
                                    <select class="form-control" name="user_role">
                                        <option selected>Enugu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Account Number</label><input name="acc_no" class="form-control" data-error="Please input the Bank Account Number" placeholder="eg: 0097895364" value="0097895364" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Name</label>
                                    <select class="form-control" name="bank">
                                        <option value="Access Bank">Access Bank</option>
                                        <option selected value="Access Bank (Diamond)">Access Bank (Diamond)</option>
                                        <option value="Citibank">Citibank</option>
                                        <option value="Coronation Merchant Bank">Coronation Merchant Bank</option>
                                        <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                        <option value="Enterprise Bank Limited">Enterprise Bank Limited</option>
                                        <option value="FBN Holdings Plc">FBN Holdings Plc</option>
                                        <option value="FBN Merchant Bank">FBN Merchant Bank</option>
                                        <option value="FCMB Group Plc">FCMB Group Plc</option>
                                        <option value="Fidelity Bank Nigeria">Fidelity Bank Nigeria</option>
                                        <option value="First Bank of Nigeria">First Bank of Nigeria</option>
                                        <option value="First City Monument Bank">First City Monument Bank</option>
                                        <option value="FSDH Merchant Bank">FSDH Merchant Bank</option>
                                        <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                        <option value="Heritage Bank Plc">Heritage Bank Plc</option>
                                        <option value="Jaiz Bank Limited">Jaiz Bank Limited</option>
                                        <option value="Keystone Bank Limited">Keystone Bank Limited</option>
                                        <option value="Providusbank Plc">Providusbank Plc</option>
                                        <option value="Rand Merchant Bank">Rand Merchant Bank</option>
                                        <option value="Skye Bank">Skye Bank</option>
                                        <option value="Stanbic IBTC Bank Nigeria Limited">Stanbic IBTC Bank Nigeria Limited</option>
                                        <option value="Stanbic IBTC Holdings Plc">Stanbic IBTC Holdings Plc</option>
                                        <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                        <option value="Sterling Bank">Sterling Bank</option>
                                        <option value="Suntrust Bank Nigeria Limited">Suntrust Bank Nigeria Limited</option>
                                        <option value="Union Bank of Nigeria">Union Bank of Nigeria</option>
                                        <option value="United Bank for Africa">United Bank for Africa</option>
                                        <option value="Unity Bank Plc">Unity Bank Plc</option>
                                        <option value="Wema Bank">Wema Bank</option>
                                        <option value="Zenith Bank">Zenith Bank</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address</label><input name="email" class="form-control" placeholder="(Payment advise would be sent to specified email)" value="signsmadueke1@gmail.com" autocomplete="email" required="required" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Cc Email address</label><input name="email" class="form-control" placeholder="(Payment advise would be copied to specified addresses. Seperate each address with comma)" value="signsmadueke1@gmail.com, okechukwu008@gmail.com, adviceagftaxsolution@gmail.com" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="state">Payment Advise Addressed to</label>
                                    <textarea name="address" class="form-control" data-error="Please input the Address" placeholder="The Manager, Access Bank Plc., Abuja, Wuse II." value="The Manager, Access Bank Plc., Abuja, Wuse II." rows="3" required="required" type="text"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Payment Advise Signature</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture" required="required">
                                        <label class="custom-file-label" for="attach">(700px x 80px .jpg and .png only)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Update Ministry Details" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

@endsection