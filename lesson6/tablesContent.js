$("document").ready(function(){
/*$('.dataTable').dataTable( {
  "ajax": {
    "url": "update.php",
    "type": "POST",
    //"dataType": "json",    
    "data": "action=dataTable",
    columns: [
        { data: 0 },
        { data: 1 },
        { data: 2 },
        { data: 3 },
        { data: 4 },
        { data: 5 }
    ]
//    success: function(data) {
//                console.log("superrr!!!"+data);
//  }
}
} );*/
    
    $('.dataTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "update.php"
    } );    

});