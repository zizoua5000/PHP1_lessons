$("document").ready(function(){
$('.dataTable').dataTable( {
  "ajax": {
    "url": "update.php",
    "type": "POST",
//    "dataType": "json",    
    "data": "action=dataTable",
    /*success: function(data) {
                console.log("superrr!!!"+data);
  }*/
}
} );
});