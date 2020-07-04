@extends('layouts.admin')
@section('title')
<title>{{ $title = 'Budgets' }} — MOJ</title>
@endsection
@section('content')
<div class="content-box">
    <div class="row col-sm-12">
        <div class="col-md-12 col-sm-12 col-lg-10">
            <div class="element-wrapper">
                <h6 class="element-header">
                    {{ $title }}
                </h6>
                <div class="element-box mb-5">
                    <div class="pt-3 pb-3">
                        <div class="element-info-with-icon m-0">
                            <div class="element-info-icon">
                                <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Budgets
                                </h5>
                                <div class="element-inner-desc">
                                    All Capital and Recurrent Budgets 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step-trikkers">
                        <a class="step-trikker" href="{{ route('budgets.index') }}">Capital</a>
                        <a class="step-trikker active" href="{{ route('recurrent') }}">Recurrent</a>
                    </div>
                </div>
                <div class="element-box">
                    <form method="post" action="pay.php">
                        <div class="steps-w">
                            <?php  
                            // if (Session::exists('budget')) { ?>
                                <!-- <div class="alert alert-info"> -->
                                    <?php 
                                    // echo Session::flash('budget'); ?>
                                <!-- </div> -->
                            <?php 
                        // } ?>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <div class="w-100" style="overflow: hidden;text-align: center;">
                                        <div class="row">
                                            <input type="hidden" name="budget_name" value="capital">
                                            <?php 
                                            // $d = $budget->_db->get('budget_total', array('total_id', '=', 1));
                                            // $c = $d->first()->capital_total; ?>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="fname" style="font-weight: bold;">Capital:</label><input name="amount" class="form-control" data-error="Please input the Capital" placeholder="<?php 
                                                    // echo $c ?>" required="required" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input name="submit" class="form-control btn btn-success" type="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="element-box">
                    <div class="w-100" style="overflow: hidden">
                        <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                            <thead>
                                <tr class="">
                                    <th>#</th>
                                    <th>capital breakdown</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="">
                                    <th>#</th>
                                    <th>capital breakdown</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                // if ($ministry->read('budget_type', 'capital')) {
                                //     $c = 1;
                                    // foreach ($ministry->read('budget_type', 'capital') as $m) {?>
                                        <tr class="">
                                            <td><?php 
                                            // echo $c; ?></td>
                                            <td>₦<?php
                                            //  echo number_format($m->budget_remaining); ?></td>
                                        </tr>
                                        <?php 
                                        // $c++;
                                //     }
                                // } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
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