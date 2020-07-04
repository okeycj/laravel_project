@extends('layouts.admin')
@section('title')
<title>{{ $title = 'Payments' }} — MOJ</title>
@endsection 
@section('content')
<div class="content-box">
    <div class="row col-sm-12">
        <div class="col-md-12 col-sm-12 col-lg-10">
            <div class="element-wrapper">
                <h6 class="element-header">
                    {{ $title ?? '' }}
                </h6>
                <div class="element-box mb-5">
                    <div class="pt-3 pb-3">
                        <div class="element-info-with-icon m-0">
                            <div class="element-info-icon">
                                <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Payments
                                </h5>
                                <div class="element-inner-desc">
                                    All Pending Payments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="element-box">
                    <!-- <form method="post" action="payment_status_update.php"> -->
                        <div class="steps-w">
                            <?php  
                            // if (Session::exists('payment')) { 
                                ?>
                                <!-- <div class="alert alert-info">
                                    <?php 
                                    // echo Session::flash('payment');
                                     ?>
                                </div> -->
                            <?php 
                            // } 
                            ?>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <div class="w-100" style="overflow-x: scroll;">
                                        <table id="datatable" width="100%" style="" class="table nowrap table-striped table-lightfont">
                                            <thead>
                                                <tr class="">
                                                    <th><input type="checkbox" id="select_all" ></th>
                                                    <th>Warrant Number</th>
                                                    <th>Ministry</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Expenditure type</th>
                                                    <th>Remark</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr class="">
                                                    <th></th>
                                                    <th>Warrant Number</th>
                                                    <th>Ministry</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Expenditure type</th>
                                                    <th>Remark</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($payments as $key => $row)
                                                    <tr class="">
                                                        <td class="p-0"> 
                                                            @if ($row->remark == 'satisfactory')
                                                                <input type="checkbox" name="acs[{{ $row->payment_id }}]" value="{{ $row->payment_id }}">
                                                                <!--<input type="submit" class="btn btn-primary" style="font-size: 13px;padding: 10px;border-radius: 50%;" name="submit" value="confirm">-->
                                                            @endif
                                                            <a href="{{ asset($row->attachment) }}" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            // echo $row->warrant; 
                                                            ?>
                                                        </td>
                                                        <td><?php
                                                        //  $ministry->find_ministry($row->ministry_id);
                                                        //  echo $ministry->data()->ministry_name; ?></td>
                                                        <td>{{ $row->description }}</td>
                                                       
                                                        <td>₦{{ number_format($row->amount) }}</td>
                                                        <td class="text-center">
                                                            {{ $row->budget }}
                                                        </td>
                                                        <td>{{ $row->remark }}</td>
                                                        <td><span><?php
                                                            $d = strtotime($row->created_at);
                                                            echo date('M jS', $d); 
                                                         ?></span><span class="smaller lighter"><?php 
                                                             echo date('h:ia', $d); ?></span></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="#" data-target="#edit{{ $row->id }}" data-toggle="modal">Edit</a>
                                                            <div aria-hidden="true" class="onboarding-modal modal fade animated" id="edit{{ $row->payment_id }}" role="dialog" tabindex="-1">
                                                                <div class="modal-dialog modal-lg modal-centered" role="document">
                                                                    <div class="modal-content text-center">
                                                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                                                                        <div class="onboarding-content p-5 mt-5">
                                                                            <h4 class="onboarding-title">
                                                                                Edit Payment
                                                                            </h4>
                                                                            {!! Form::model($row,array('route'=>['payments.update',$row->id],'method'=>'PUT', 'enctype' => 'multipart/form-data')) !!}
                                                                            <!-- <form method="post" action="edit_payment.php" enctype="multipart/form-data"> -->
                                                                                <div class="row">
                                                                                {!! Form::hidden('payment_id') !!}
                                                                                    <!-- <input type="hidden" name="payment_id" value="{{ $row->payment_id }}"> -->
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            {!! Form::label('budget', 'Expenditure') !!}
                                                                                            <!-- <label for="phone">Expenditure Type</label> -->
                                                                                            {!! Form::select('budget', array('capital' => 'capital', 'recurrent' => 'recurrent'), $row->budget, array('class' => 'form-control')) !!}
                                                                                            <!-- <select class="form-control" name="budget"> -->
                                                                                                <!-- <option value='capital'>Capital</option> -->
                                                                                                <!-- <option value="recurrent">Recurrent</option> -->
                                                                                            <!-- </select> -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            {!! Form::label('amount', 'Amount') !!}
                                                                                            <!-- <label for="phone">Amount</label> -->
                                                                                            {!! Form::text('amount', array('class' => 'form-controller', 'data-error' => 'Please input the amount', 'placeholder' => "eg 65667", 'required' => true)) !!}
                                                                                            <input name="amount" class="form-control" data-error="Please input the amount" value="" placeholder="eg: 65667" required="required" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            {!! Form::label('warrant', "Warrant") !!}
                                                                                            {!! Form::text('warrant', array('class' => 'form-control', 'placeholder' => 'eg: 0097895364', 'required' => true)) !!}
                                                                                            <!-- <label for="">Warrant</label><input name="warrant" class="form-control" value="" placeholder="eg: 0097895364" required="required" type="text"> -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <div class="form-group">
                                                                                            {!! Form::label('picture', 'Payment Advise Signature') !!}
                                                                                            <!-- <label for="phone">Payment Advise Signature</label> -->
                                                                                            <br>
                                                                                            <div class="custom-file">
                                                                                                {!! Form::file('picture', array('class' => 'custom-file-input')) !!}
                                                                                                <!-- <input type="file" class="custom-file-input" id="picture" name="picture"> -->
                                                                                                {!! Form::label('picture', '(700px x 80px .jpg and .png only)', array('class' => 'custom-file-label')) !!}    
                                                                                                <!-- <label class="custom-file-label" for="attach">(700px x 80px .jpg and .png only)</label> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group">
                                                                                            {!! Form::label('description', 'Description') !!} 
                                                                                            <!-- <label for="state">Description</label> -->
                                                                                            {!! Form::textarea('description', array('class' => 'form-control', 'data-error' => 'Please input the Address', 'row' => '3', 'require' => true)) !!}
                                                                                            <!-- <textarea name="description" class="form-control" data-error="Please input the Address" rows="3" required="required" type="text"></textarea> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-group">
                                                                                            {!! Form::label('remark', array('class' => 'form-control', 'data-error' => 'Please input the Address', 'rows' => "3", 'require' => true)) !!}
                                                                                            <!-- <label for="state">Remark</label> -->
                                                                                            {!! Form::textarea('remark', array('class' => 'form-control', 'data-error' => 'Please input the Address', 'rows' => '3', 'require' => true)) !!}
                                                                                            <!-- <textarea name="remark" class="form-control" data-error="Please input the Address" rows="3" required="required" type="text"></textarea> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row pt-4">
                                                                                    <div class="col-sm-12 col-md-4 mb-2">
                                                                                        <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-md-8 mb-2">
                                                                                        {!! Form::button('Edit Ministry', array('class' => 'btn btn-primary btn-block', 'type' => 'submit')) !!}
                                                                                        <!-- <input name="submit" class="btn btn-primary btn-block" value="Edit Ministry" type="submit"> -->
                                                                                    </div>
                                                                                </div>
                                                                            <!-- </form> -->
                                                                            {!! Form::close() !!}
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
                                    <div class="row pt-3">
                                        <div class="col-sm-12 col-md-12 col-lg-7 mb-2"></div>
                                        <!--<div class="col-sm-12 col-md-4 col-lg-2 mb-2">-->
                                        <!--    <a href="#" onclick="selectAll()" id="checker" class="btn-block mt-3 p-3 btn btn-white"><i class="icon-plus mr-3"></i>Select All</a>-->
                                        <!--</div>-->
                                        <div class="col-sm-12 col-md-8 col-lg-3 mb-2">
                                            <button class="p-3 mt-3 btn btn-primary btn-block" type="submit">Approve Selected<i class="icon-feather-check ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
<?php
    // require_once '../includes/footer.php';
?>
<script>
    $('#select_all').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;                       
            });
        }
    });
</script>

@endsection