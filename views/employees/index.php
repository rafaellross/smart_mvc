<div class="container">
    <h2 style="text-align: center;">Users</h2>
    <hr/>
    <div class="form-group row">
        <div class="col-md-12 col-lg-12 col-12">                 
            <a href="register.php?source=users" class="btn btn-primary">Create New</a>                
            <a href="#" class="btn btn-danger mobile" id="btnDelete">Delete Selected(s)</a>
        </div>

    </div> 
    <table class="table table-hover table-responsive-sm">
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" id="chkRow"></th>          
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>            
                <?php foreach($employees as $employee) { ?>
                  <tr>                    
                        <th>
                            <input type="checkbox" id="chkRow-<?= $employee->id; ?>">
                        </th>
                        <td><?= $employee->name; ?></td>
                        <td><?= $employee->phone; ?></td>

                        <td style="text-align: center;">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="?controller=users&action=index">Edit</a>                    
                                    <a href="#" id="40" class="dropdown-item delete">Delete</a>
                                </div>
                            </div>        
                        </td>                    
                  </tr>
                <?php } ?>
        </tbody>
    </table>
</div>



