$(document).ready(function() {
         
        function ajax() {
            
            $.ajax({
                url: "../models/DatepickerModel.php",
                type: "GET",
                success: function (data) {
                    $('#test').html(data); 
                    
                    dates = data; 
                    
                    function disableDates(date) {
                        var formatDate = $.datepicker.formatDate('dd-mm-yy', date);
                        return [dates.indexOf(formatDate) == -1];
                    }


                    $("#datepicker").datepicker({
                        minDate:0,
                        // beforeShowDay: $.datepicker.noWeekends,
                        beforeShowDay : disableDates,
                    });
                }
                
            });
        }

    ajax();
     
    setInterval(ajax, 20000);

})




