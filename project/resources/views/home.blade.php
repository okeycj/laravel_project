@extends('layouts.admin')
@section('title')
<title>{{ $title = 'Dashboard' }} — MOJ</title>
@endsection
@section('content')
<!-- <div class="content-w">
            <div class="content-i"> -->

                <div class="content-box">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    {{ $title ?? '' }}
                                </h6>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Capital Expenditure This Year</div>
                                            <div class="value"><strong>₦<?php
                                            //  echo number_format($payment->budget_count('capital', 'Y')); 
                                             ?></strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Capital Expenditure This Month</div>
                                            <div class="value"><strong>₦<?php 
                                            // echo number_format($payment->budget_count('capital', 'M')); 
                                            ?></strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Capital Expenditure This Week</div>
                                            <div class="value"><strong>₦<?php 
                                            // echo number_format($payment->budget_count('capital', 'W')); 
                                            ?></strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Capital Expenditure Today</div>
                                            <div class="value"><strong>₦<?php 
                                            // echo number_format($payment->budget_count('capital', 'D')); 
                                            ?></strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Recurrent Expenditure This Year</div>
                                            <div class="value"><strong>₦<?php 
                                            // echo number_format($payment->budget_count('recurrent', 'Y'));
                                            ?></strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Recurrent Expenditure This Month</div>
                                            <div class="value"><strong>₦<?php 
                                            // echo number_format($payment->budget_count('recurrent', 'M')); 
                                            ?></strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Recurrent Expenditure This Week</div>
                                            <div class="value"><strong>₦<?php 
                                            // echo number_format($payment->budget_count('recurrent', 'W')); 
                                            ?></strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Recurrent Expenditure Today</div>
                                            <div class="value"><strong>₦<?php 
                                            // echo number_format($payment->budget_count('recurrent', 'D')); 
                                            ?></strong></div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row">
                                    <div class="col-12 p-4"></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h6 class="element-header">
                                            Total Budget
                                        </h6>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="element-box el-tablo mt-0">
                                            <div class="label">
                                                Total Current
                                            </div>
                                            <div class="value">
                                                <?php 
                                                // echo number_format($payment->total_budget('capital_total'));
                                                 ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="element-box el-tablo mt-0">
                                            <div class="label">
                                                Total Recurrent
                                            </div>
                                            <div class="value">
                                                <?php
                                                //  echo number_format($payment->total_budget('recurrent_total')); 
                                                 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 p-4"></div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h6 class="element-header">
                                            Payments
                                        </h6>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2">
                                        <div class="element-box el-tablo mt-0">
                                            <div class="label">
                                                Total Payments
                                            </div>
                                            <div class="value">
                                                <?php 
                                                // echo $payment->t_payment(); 
                                                ?>
                                            </div>
                                        </div>

                                        <div class="element-box el-tablo mt-3">
                                            <div class="label">
                                                Completed Payments
                                            </div>
                                            <div class="value">
                                                <?php
                                                //  echo $payment->completed_payment(); 
                                                 ?>
                                            </div>
                                        </div>

                                        <div class="element-box el-tablo mt-3">
                                            <div class="label">
                                                Pending Payments
                                            </div>
                                            <div class="value">
                                                <?php 
                                                // echo $payment->pending_payment(); 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-10">
                                        <div class="element-box">
                                            <div class="w-100" style="overflow: hidden;">
                                                <table id="datatable" width="100%" style="" class="table nowrap table-striped table-lightfont">
                                            <thead>
                                                <tr class="">
                                                    <th>Warrant Number</th>
                                                    <th>Ministry</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Expenditure type</th>
                                                    <th>Remark</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr class="">
                                                    <th>Warrant Number</th>
                                                    <th>Ministry</th>
                                                    <th>Description</th>
                                                    <th>Amount</th>
                                                    <th>Expenditure type</th>
                                                    <th>Remark</th>
                                                    <th>Date</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                // if ($payment->readAll()) {
                                                // foreach ($payment->readAll() as $row) {
                                                    ?>
                                                    <tr class="">
                                                        
                                                        <td>
                                                            <?php 
                                                            // echo $row->warrant;
                                                             ?>
                                                        </td>
                                                        <td><?php
                                                        //  $ministry->find_ministry($row->ministry_id);
                                                        //  echo $ministry->data()->ministry_name; 
                                                         ?></td>
                                                        <td><?php 
                                                        // echo $row->description; 
                                                        ?></td>
                                                       
                                                        <td>₦<?php 
                                                        // echo number_format($row->amount); 
                                                        ?></td>
                                                        <td class="text-center">
                                                            <?php 
                                                            // echo $row->budget; 
                                                            ?>
                                                        </td>
                                                        <td><?php 
                                                        // echo $row->remark; 
                                                        ?></td>
                                                        <td><span><?php
                                                        //  echo date('M jS', $row->payment_time); 
                                                         ?></span><span class="smaller lighter"><?php 
                                                        //  echo date('h:ia', $row->payment_time); 
                                                         ?></span></td>
                                                    </tr>
                                                    <?php
                                                // }
                                                // } 
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="display-type"></div>
@endsection
