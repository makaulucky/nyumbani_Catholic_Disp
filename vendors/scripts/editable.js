$( document ).ready(function() {
    $('#editableTable').SetEditable({
        columnsEd: "ccc_count,Fname, Mname, Lname, Gender, Age, art_start_date, art_regimen, current_art_date, pre_vl_date, pre_vl_results",
        onEdit: function(columnsEd) {
          var ccc_count = columnsEd[0].childNodes[1].innerHTML;
          var FName = columnsEd[0].childNodes[3].innerHTML;
          var Mname = columnsEd[0].childNodes[5].innerHTML;
          var Lname = columnsEd[0].childNodes[7].innerHTML;
          var Age = columnsEd[0].childNodes[9].innerHTML;
          var art_regimen = columnsEd[0].childNodes[11].innerHTML;
          var current_art_date = columnsEd[0].childNodes[11].innerHTML;
          var pre_vl_date = columnsEd[0].childNodes[13].innerHTML;
          var pre_vl_results= columnsEd[0].childNodes[14].innerHTML;
          $.ajax({
              type: 'POST',			
              url : "action.php",	
              dataType: "json",					
              data: {ccc_count:ccc_count, Fname:Fname, Mname:Mname, Lname:Lname, Gender:Gender, Age:Age, art_startdate:art_startdate, art_regimen:art_regimen,current_art_date:current_art_date,prev_vl_date:prev_vl_date, prev_results:prev_results, action:'edit'},			
              success: function (response) {
                  if(response.status) {
                  }						
              }
          });
        },
        onBeforeDelete: function(columnsEd) {
        var empId = columnsEd[0].childNodes[1].innerHTML;
        $.ajax({
              type: 'POST',			
              url : "action.php",
              dataType: "json",					
              data: {id:empId, action:'delete'},			
              success: function (response) {
                  if(response.status) {
                  }			
              }
          });
        },
      });
  });