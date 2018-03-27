<div class="container">
    <h2 style="text-align: center;">Time Sheet</h2>
    <hr>
    <div class="col-md-12 col-lg-12 col-12">           
        <a href="?controller=timesheets&action=selection" class="btn btn-primary">Create New</a>            
        <button class="btn btn-danger mobile" id="btnDelete">Delete Selected(s)</button>
        <button class="btn btn-info" id="btnPrint" style="">Print Selected(s)</button>            
        <button class="btn btn-secondary" id="btnStatus" style="">Change Status</button>            
        <div style="float: right;" id="statusSelect">
            <select class="custom-select mb-4" id="selectStatus">
                <option selected="">Status...</option>
                <option value="all">All</option>
                <option value="A">Approved</option>        
                <option value="P">Pending</option>
                <option value="C">Cancelled</option>
            </select>            

        </div>    
    </div>
    <table class="table table-hover table-responsive-sm">
        <thead>
            <tr>
                <th scope="col" class="mobile"><input type="checkbox" id="chkRow"></th>    
                <th scope="col" class="mobile">#</th>
                <th scope="col">User</th>
                <th scope="col" class="mobile">Date</th>

                <th scope="col">Employee</th><th scope="col">Week End</th><th scope="col">Status</th>      <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach($timesheets as $timesheet) { ?>
            <?php $data = json_decode($timesheet->content);?>
            <tr>
            </tr><tr class="P"><th class="mobile"><input type="checkbox" id="chkRow-<?= $timesheet->id?>"></th><th class="mobile" scope="row">1</th>
                <td><?= $timesheet->username;?></td>
                <td class="mobile"><?= $timesheet->date_created;?></td>
                <td><?= $data->empname?></td>
                <td><?= $data->weestart;?></td><td><?= $timesheet->status;?></td><td style="text-align: center;">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="pdf.php?id=1" target="_blank">View</a>
                            <a class="dropdown-item" href="TimeSheet.php?user=chris&amp;type=TimeSheet.php&amp;id=1" style="">Edit</a>                    
                            <a href="#" id="1" class="dropdown-item delete" style="">Delete</a>
                        </div>
                    </div>        
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>