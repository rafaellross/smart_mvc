class Utilities{
    static addMinutes(time, minsToAdd) {
        function D(J){
            return (J<10? '0':'') + J;
        };
        var piece = time.split(':');
        var mins = piece[0]*60 + +piece[1] + +minsToAdd;
        return D(mins%(24*60)/60 | 0) + ':' + D(mins%60);
    }

    static hourToMinutes(hour){
        var piece = hour.split(':');
        if (piece.length > 1) {
          return piece[0]*60 + +piece[1];
        } else {
          return 0;
        }

    }

    static minutesToHour(minutes){
         function D(J){
             return (J<10? '0':'') + J;
         };
         return D(minutes/60 | 0) + ':' + D(minutes%60);
    }

}

$(document).ready(function() {

    //Functions
    //
    //Function called by buttons that shows extra jobs
    showExtra = function(btn, extra_inputs){
        $(extra_inputs).css('display', 'block');
        $(btn).fadeOut();
    };
    
    calcJob = function(job) {
        //Get the day and job
        let day = $(job).attr('id').split('_');
        let row = Number(day[2]);
        
        //Get value of start and end 
        let start = $("#" + day[0]+"_start_" + row).val();
        let end = $(job).val();
        
        //Convert to hours and set to the input
        let total = "00:00";
        if (row === 1) {
            total = Utilities.minutesToHour(end-start-15);            
        } else {
            total = Utilities.minutesToHour(end-start);            
        }        
        $("#hrs_" + day[0] + "_" + row).val(total);                        
    };
    
    //AutoFill hours
    $('#btnPreFill').click(function(){
        //Get start, end hours and job
        let start = $('#preStart').val();
        let end = $('#preEnd').val();
        let job = $('#preJob').val();
        
        //Set values for all week days
        $('.start-1').not("#sat_start_1").val(start);               
        $('.end-1').not("#sat_end_1").val(end);                       
        $('.end-1').not("#sat_end_1").val(end);                       
        $('.job-1').not("#jobsat1").val(job);    
    });
    
    //Calculate total hour for job
    $('.hour-end').change(function(){
        calcJob(this);       
    });
    


    $('.hour-start').change(function(){
      let day = $(this).attr('id').split('_');
      let row = day[2];
      let destination = $('#' + day[0] + "_end_" + row);

      //Enable and empty select list for end of the row
      destination.prop('disabled', false).empty();

      //Get the seleted value to be used as minimum for end
      var startHour = $(this).val();
      for (var hour = Number(startHour)+15; hour <= (24*60)-15; hour += 15) {
          let option = '<option value="' + hour + '">' + Utilities.minutesToHour(hour) + '</option>';
          $(destination).append(option);
      }
    });
    
});
