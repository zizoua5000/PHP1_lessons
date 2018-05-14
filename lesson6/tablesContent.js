$("document").ready(function(){
$('.dataTable').dataTable( {
  "ajax": {
    type: "POST",
    //dataType: "json",
    "url": "update.json",
    "data": "action=dataTable",
    success: function(data) {
                console.log("superrr!!!"+data);
  }
}
} );
});