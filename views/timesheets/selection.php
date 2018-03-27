    <script>
    $(document).ready(function(){
      


        $('#btnSearch').click(function(){
            $('#employee').empty();
            let name = $('#search').val();
            
            $.getJSON( "?output=json&controller=employees&action=allJson&name=" + name, function( data ) {    
                
                $.each( data, function( key, val ) {

                    let emp = `

                        <div class="card">
                          <div class="card-header">    
                            <h6 class="mb-0">
                              <div>
                                  <a class="collapsed" href="?controller=timesheets&action=add&employee=`+val.id+`">
                                  <span> `+ val.name +`</span>
                                  </a>
                                 
                              </div>       
                            </h6> 
                          </div>        
                          </div>                                                                  
                    `;
                    $('#employee').append(emp);
                });                
            });
        });

    $('#search').keyup(function() {

        if ($('#search').val().length >= 3) 
        {                        
            $("#btnSearch").removeAttr("disabled");
        } else {
            $("#btnSearch").attr("disabled");
        }

    });
        
    });    
        
    $(document).on('click', '.btnAdd', function(){ 
        $(this).removeClass("btn-primary btnAdd").addClass("btn-danger btnDelete").text("Delete");
        $(this).parent().parent().parent().parent().appendTo('#selecteds');                
    });              

    </script>

<div class="container">
  <div class="row">
        <input class="form-control form-control-lg" type="text" placeholder="Search Employee" id="search">
  </div>  
  
  <div class="row">
        <button disabled type="button" class="btn btn-info btn-lg btn-block" id="btnSearch">Search</button>
  </div>  
  <hr>
  <div id="employee" class="col-xs-12 col-sm-12 col-lg-12 col-md-12"></div>

</div>
