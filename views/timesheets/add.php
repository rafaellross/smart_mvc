<div class="container">
    <!-- Logo -->        
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">    
        <img src="assets/img/logo.jpg" alt="Smart Plumbing Solutions" class="img-fluid" style="padding: 1em;">
    </div>                
    <!-- Title -->        
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">    
        <h2>Time Sheet</h2>
    </div>                
    <div class="col-xs-12 col-sm-12 col-md-12">                
        <form method="post" name="fillable_form" action="?controller=timesheets&action=add&employee=">
            <input type="hidden" name="id"">                    
            <input type="hidden" name="employee" value="<?= $employee->id; ?>">                    
            <div class="form-group">
                <label for="empname">
                    <h5>Name:</h5>
                </label>
                <input readonly type="text" class="form-control form-control-lg" name="empname" id="empname" placeholder="Type employee name" value="<?= $employee->name; ?>">                    
            </div>       
            <div class="form-group">
                <label for="empname">
                    <h5>Week End:</h5>
                </label>                    
                <input type="text" class="form-control form-control-lg" name="weestart" id="weestart" data-date-days-of-week-disabled="1,2,3,4,5,6" required value="<?= (isset($data->weestart)) ? $data->weestart : ""; ?>">                    
            </div>      
            <!-- Start Group Prefill-->                 
            <div class="form-group alert alert-info" role="alert" id="groupPre">
                <div class="input-group-prepend">
                    <div class="input-group-text" style="display: none;">
                        <input type="checkbox" id="pre">
                        <strong style="padding-left: 5px;"> Special Leave?</strong>
                    </div>
                </div>
                <h4 style="text-align: center;">Autofill Time Sheet</h4>
                <div class="form-row" style="text-align: center;">
                    <div class="col-md-6 col-12 mb-3">
                        <label>Start</label>
                        <select class="hour-start form-control form-control-lg custom-select " id="preStart" onchange="calc(preStart, preEnd, preHours, Pre15, Pre20, PreNormal)">
                            <option value="0">00:00</option><option value="15">00:15</option><option value="30">00:30</option><option value="45">00:45</option><option value="60">01:00</option><option value="75">01:15</option><option value="90">01:30</option><option value="105">01:45</option><option value="120">02:00</option><option value="135">02:15</option><option value="150">02:30</option><option value="165">02:45</option><option value="180">03:00</option><option value="195">03:15</option><option value="210">03:30</option><option value="225">03:45</option><option value="240">04:00</option><option value="255">04:15</option><option value="270">04:30</option><option value="285">04:45</option><option value="300">05:00</option><option value="315">05:15</option><option value="330">05:30</option><option value="345">05:45</option><option value="360">06:00</option><option value="375">06:15</option><option value="390">06:30</option><option value="405">06:45</option><option selected="" value="420">07:00</option><option value="435">07:15</option><option value="450">07:30</option><option value="465">07:45</option><option value="480">08:00</option><option value="495">08:15</option><option value="510">08:30</option><option value="525">08:45</option><option value="540">09:00</option><option value="555">09:15</option><option value="570">09:30</option><option value="585">09:45</option><option value="600">10:00</option><option value="615">10:15</option><option value="630">10:30</option><option value="645">10:45</option><option value="660">11:00</option><option value="675">11:15</option><option value="690">11:30</option><option value="705">11:45</option><option value="720">12:00</option><option value="735">12:15</option><option value="750">12:30</option><option value="765">12:45</option><option value="780">13:00</option><option value="795">13:15</option><option value="810">13:30</option><option value="825">13:45</option><option value="840">14:00</option><option value="855">14:15</option><option value="870">14:30</option><option value="885">14:45</option><option value="900">15:00</option><option value="915">15:15</option><option value="930">15:30</option><option value="945">15:45</option><option value="960">16:00</option><option value="975">16:15</option><option value="990">16:30</option><option value="1005">16:45</option><option value="1020">17:00</option><option value="1035">17:15</option><option value="1050">17:30</option><option value="1065">17:45</option><option value="1080">18:00</option><option value="1095">18:15</option><option value="1110">18:30</option><option value="1125">18:45</option><option value="1140">19:00</option><option value="1155">19:15</option><option value="1170">19:30</option><option value="1185">19:45</option><option value="1200">20:00</option><option value="1215">20:15</option><option value="1230">20:30</option><option value="1245">20:45</option><option value="1260">21:00</option><option value="1275">21:15</option><option value="1290">21:30</option><option value="1305">21:45</option><option value="1320">22:00</option><option value="1335">22:15</option><option value="1350">22:30</option><option value="1365">22:45</option><option value="1380">23:00</option><option value="1395">23:15</option><option value="1410">23:30</option><option value="1425">23:45</option>                                </select>
                    </div>
                    <div class="col-md-6 col-12 mb-3">
                        <label>End</label>
                        <select class="hour-start form-control form-control-lg custom-select " id="preEnd" onchange="calc(preStart, preEnd, preHours, Pre15, Pre20, PreNormal)">
                            <option value="0">00:00</option><option value="15">00:15</option><option value="30">00:30</option><option value="45">00:45</option><option value="60">01:00</option><option value="75">01:15</option><option value="90">01:30</option><option value="105">01:45</option><option value="120">02:00</option><option value="135">02:15</option><option value="150">02:30</option><option value="165">02:45</option><option value="180">03:00</option><option value="195">03:15</option><option value="210">03:30</option><option value="225">03:45</option><option value="240">04:00</option><option value="255">04:15</option><option value="270">04:30</option><option value="285">04:45</option><option value="300">05:00</option><option value="315">05:15</option><option value="330">05:30</option><option value="345">05:45</option><option value="360">06:00</option><option value="375">06:15</option><option value="390">06:30</option><option value="405">06:45</option><option value="420">07:00</option><option value="435">07:15</option><option value="450">07:30</option><option value="465">07:45</option><option value="480">08:00</option><option value="495">08:15</option><option value="510">08:30</option><option value="525">08:45</option><option value="540">09:00</option><option value="555">09:15</option><option value="570">09:30</option><option value="585">09:45</option><option value="600">10:00</option><option value="615">10:15</option><option value="630">10:30</option><option value="645">10:45</option><option value="660">11:00</option><option value="675">11:15</option><option value="690">11:30</option><option value="705">11:45</option><option value="720">12:00</option><option value="735">12:15</option><option value="750">12:30</option><option value="765">12:45</option><option value="780">13:00</option><option value="795">13:15</option><option value="810">13:30</option><option value="825">13:45</option><option value="840">14:00</option><option value="855">14:15</option><option value="870">14:30</option><option value="885">14:45</option><option value="900">15:00</option><option selected="" value="915">15:15</option><option value="930">15:30</option><option value="945">15:45</option><option value="960">16:00</option><option value="975">16:15</option><option value="990">16:30</option><option value="1005">16:45</option><option value="1020">17:00</option><option value="1035">17:15</option><option value="1050">17:30</option><option value="1065">17:45</option><option value="1080">18:00</option><option value="1095">18:15</option><option value="1110">18:30</option><option value="1125">18:45</option><option value="1140">19:00</option><option value="1155">19:15</option><option value="1170">19:30</option><option value="1185">19:45</option><option value="1200">20:00</option><option value="1215">20:15</option><option value="1230">20:30</option><option value="1245">20:45</option><option value="1260">21:00</option><option value="1275">21:15</option><option value="1290">21:30</option><option value="1305">21:45</option><option value="1320">22:00</option><option value="1335">22:15</option><option value="1350">22:30</option><option value="1365">22:45</option><option value="1380">23:00</option><option value="1395">23:15</option><option value="1410">23:30</option><option value="1425">23:45</option>                                </select>
                    </div>
                </div>
                <div class="form-row" style="text-align: center;">
                    <div class="col-md-12 mb-3">
                        <label>Job</label>
                        <select class="form-control form-control-lg custom-select " id="preJob">
                            <?php foreach ($list_jobs as $job=>$description) {?>                                
                                <option <?= $job == "001" ? "selected" : ""?> value="<?= $job;?>"><?= $description;?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>                
                <div class="col-md-12 mb-3">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" id="btnPreFill">Autofill Time Sheet</button>
                </div>
            </div>    
            <?php foreach ($Days as $day) {?>
            <!-- Start Group <?= $day->description?>-->                 
            <div class="form-group alert alert-success" role="alert" id="group<?= $day->description?>">
                    <h4 style="text-align: center;"><?= $day->description?></h4>
                    <!-- Start Job 1  -->
                    <div class="alert alert-secondary" style="text-align: center;">
                        <h4>Job 1</h4>
                        <div class="form-row" style="text-align: center;">
                            <div class="col-md-6 col-12 mb-3">
                                <label>Start</label>
                                    <select class="hour-start start-1 form-control form-control-lg custom-select start" id="<?= $day->short?>_start_1" name="<?= $day->short?>_start_1">
                                        <?php
                                            for ($i = 0; $i <= (24*60)-15; $i += 15) {
                                                $hour = str_pad(floor($i/60), 2, "0", STR_PAD_LEFT);
                                                $minutes = str_pad($i%60, 2, "0", STR_PAD_LEFT);
                                                $finalHour = $hour . ':' .$minutes;                                                
                                                echo '<option value="' . $i . '">'.$finalHour.'</option>';
                                            }
                                        ?>
                                    </select>

                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <label>End</label>
                                <select class="hour-end end-1 form-control form-control-lg custom-select end" id="<?= $day->short?>_end_1" name="<?= $day->short?>_end_1">
                                        <?php
                                            for ($i = 0; $i <= (24*60)-15; $i += 15) {
                                                $hour = str_pad(floor($i/60), 2, "0", STR_PAD_LEFT);
                                                $minutes = str_pad($i%60, 2, "0", STR_PAD_LEFT);
                                                $finalHour = $hour . ':' .$minutes;                                                
                                                echo '<option value="' . $i . '">'.$finalHour.'</option>';
                                            }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <!-- Job and Hours-->
                        <div class="form-row" style="text-align: center;">

                            <div class="col-md-6 mb-3">
                                <label>Job</label>
                                <select class="form-control form-control-lg custom-select job job-1" name="job<?= $day->short?>1" id="job<?= $day->short?>">
                                    <option selected value="">Select Job</option>                                    
                                    <?php foreach ($list_jobs as $job=>$description) {?>
                                        <option value="<?= $job;?>"><?= $description;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Hours</label>
                                <input readonly="" type="text" class="form-control form-control-lg time job1 hours" name="hrs_<?= $day->short?>_1" id="hrs_<?= $day->short?>_1" value="" maxlength="5">
                            </div>
                            <button type="button" class="btn btn-secondary btn-sm" id="btnShowExtra" onclick="showExtra(this, extraJobs<?= $day->short?>)">Show More Jobs</button>
                            <input type="button" class="btn btn-danger btn-sm ml-2 btnClear" value="Clear">
                        </div>
                    </div>
                    <div id="extraJobs<?= $day->short;?>" style="display:none;">
                       <?php foreach ($jobs as $jobNumber) {?> 
                        <!-- Start Job <?= $jobNumber;?> -->
                        <div class="alert alert-secondary" style="text-align: center;">
                            <h4>Job <?= $jobNumber;?></h4>
                            <div class="form-row" style="text-align: center;">
                                <div class="col-md-6 col-12 mb-3">
                                    <label>Start</label>
                                    <select class="hour-start form-control form-control-lg custom-select start" id="<?= $day->short;?>_start_<?= $jobNumber;?>" name="<?= $day->short;?>_start_<?= $jobNumber;?>">
                                        <?php
                                            for ($i = 0; $i <= (24*60)-15; $i += 15) {
                                                $hour = str_pad(floor($i/60), 2, "0", STR_PAD_LEFT);
                                                $minutes = str_pad($i%60, 2, "0", STR_PAD_LEFT);
                                                $finalHour = $hour . ':' .$minutes;                                                
                                                echo '<option value="' . $i . '">'.$finalHour.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <label>End</label>
                                    <select class="hour-end form-control form-control-lg custom-select end" id="<?= $day->short?>_end_<?= $jobNumber?>" name="<?= $day->short?>_end_<?= $jobNumber?>">
                                        <?php
                                            for ($i = 0; $i <= (24*60)-15; $i += 15) {
                                                $hour = str_pad(floor($i/60), 2, "0", STR_PAD_LEFT);
                                                $minutes = str_pad($i%60, 2, "0", STR_PAD_LEFT);
                                                $finalHour = $hour . ':' .$minutes;                                                
                                                echo '<option value="' . $i . '">'.$finalHour.'</option>';
                                            }
                                        ?>                                        
                                    </select>
                                </div>
                            </div>
                            <!-- Job and Hours-->
                            <div class="form-row" style="text-align: center;">
                                <div class="col-md-6 mb-3">
                                    <label>Job</label>
                                    <select class="form-control form-control-lg custom-select job" name="job<?= $day->short;?><?= $jobNumber;?>" id="job<?= $day->short;?><?= $jobNumber;?>">
                                        <option selected value="">Select Job</option>                                    
                                        <?php foreach ($list_jobs as $job=>$description) {?>
                                            <option value="<?= $job;?>"><?= $description;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Hours</label>
                                    <input readonly="" type="text" class="form-control form-control-lg time job<?= $jobNumber;?> hours" name="hrs_<?= $day->short?>_<?= $jobNumber;?>" id="hrs_<?= $day->short?>_<?= $jobNumber;?>" value="" maxlength="5">
                                </div>
                                <input type="button" class="btn btn-danger btn-sm ml-2 btnClear" value="Clear">
                            </div>
                        </div>
                       <?php }?>
                        <!-- End Job 3 -->
            
                    </div>
                    <!-- Total day -->
                    <div class="form-row overtime " style="text-align: center;">
                        <div class="col-md-6 mb-3">
                            <label>Normal Hours</label>
                            <input readonly="" type="text" class="form-control form-control-lg time horNormal" name="<?= $day->short?>Norm" id="<?= $day->short?>_nor" value="" maxlength="5">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Hours 1.5</label>
                            <input readonly="" type="text" class="form-control form-control-lg time hor15" name="<?= $day->short?>15" id="<?= $day->short?>_15" value="" maxlength="5">
                        </div>
                    </div>
                    <div class="form-row overtime " style="text-align: center;">
                        <div class="col-md-6 mb-3">
                            <label>Hours 2.0</label>
                            <input readonly="" type="text" class="form-control form-control-lg time hor20" name="<?= $day->short?>20" id="<?= $day->short?>_20" value="" maxlength="5">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Total Hours</label>
                            <input readonly="" type="text" class="form-control form-control-lg time hours-total" name="hrs<?= $day->short?>" id="hrs_<?= $day->short?>" value="" maxlength="5">
                        </div>
                    </div>
                    <!-- End Total day -->
                </div>            
                <!--End Group <?= $day->description;?> -->
            <?php }?>
            <!-- Start Group Total-->                 
            <div class="form-group alert alert-success" role="alert">                                        
                <h4 style="text-align: center;">Total Week</h4>                                        
                <div class="form-row" style="text-align: center;">
                    <div class="col-md-12 mb-3">                                
                        <input readonly type="text" class="form-control form-control-lg time totalWeek" name="totalWeek" id="totalWeek" value="<?= (isset($data->totalWeek)) ? $data->totalWeek : ""; ?>">                    
                    </div>
                </div>                                                            
            </div>                                             
            <!--End Group Total -->       
            <!-- Start Group Signature-->                 
            <div class="form-group alert alert-success" role="alert" id="groupFriday">                                        
                <h4 style="text-align: center;">Signature</h4>                                        
                <div class="form-row" style="text-align: center;">
                    <div class="col-md-12 mb-3">                                
                        <!-- you load jquery somewhere above here ... -->
                        <!--[if lt IE 9]>
                        <script type="text/javascript" src="js/flashcanvas.js"></script>
                        <![endif]-->
                        <script src="assets/js/jSignature.min.js"></script>                                
                        <input type="hidden" name="empSign" id="output" value="<?= (isset($empSign)) ? $empSign : ""; ?>">
                        <?php
                        if (isset($empSign)) {
                            echo '<img src="' . $empSign . '">';
                        } else {
                            echo '<div id="signature"></div>';

                            echo '<input type="button" value="Clear" id="btnClearSign" class="btn btn-danger" >';
                        }
                        ?>
                        <script>
                            $(document).ready(function () {
                                var $sigdiv = $("#signature")
                                $sigdiv.jSignature() // inits the jSignature widget.
                                // after some doodling...
                                $('#btnClearSign').click(function () {
                                    $sigdiv.jSignature("reset") // clears the canvas and rerenders the decor on it.
                                });

                                $('form').submit(function () {
                                    $('#output').val($sigdiv.jSignature("getData"));
                                });
                            });
                        </script>                                
                    </div>
                </div>                                                                                 
            </div>                                             
            <!-- Start Group Date-->                 
            <div class="form-group alert alert-success" role="alert" id="groupFriday">                                        
                <h4 style="text-align: center;">Date</h4>                    

                <div class="form-row" style="text-align: center;">
                    <div class="col-md-12 mb-3">                                
                        <input type="text" class="form-control form-control-lg date-picker" name="empDate" id="empDate" required value="<?= (isset($data->empDate)) ? $data->empDate : date("d/m/Y"); ?>">                    
                    </div>
                </div>                                                                                    
            </div>                                             
            <!-- Start Group Date-->                 
            <div class="form-group alert alert-success" role="alert" id="groupStatus" style="<?= (!$_SESSION['administrator'] ? "display:none" : "" ) ?>">                                        
                <h4 style="text-align: center;">Status</h4>                    
                <?php //print_r($ts_status);?>
                <div class="form-row" style="text-align: center;">
                    <div class="col-md-12 mb-3">                                
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="">
                                <option <?= (!isset($ts_status) || $ts_status == "P") ? "selected" : ""; ?> value="P">Pending</option>
                                <option <?= ($ts_status == "A") ? "selected" : ""; ?> value="A">Approved</option>
                                <option <?= ($ts_status == "C") ? "selected" : ""; ?> value="C">Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>                                                                                    
            </div>                                             

            <!--End Group Total -->                       
            <div class="form-row" style="text-align: center;">
                <div class="col-md-6 mb-3">
                    <a href="view.php?type=TimeSheet.php" class="btn btn-secondary btn-lg btn-block">Cancel</a>
                </div>
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>                                        
            </div>                                                                                        

        </form>

    </div>        
</div>

