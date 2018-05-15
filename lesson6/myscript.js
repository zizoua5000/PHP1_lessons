$("document").ready(function(){
    // Variable to store your files
    var files;

    // Add events
    $('input[type=file]').on('change', prepareUpload);

    // Grab the files and set them to our variable
    function prepareUpload(event)
    {
      files = event.target.files;
    }
    
    
      var req = true; 
        
       
    
    
    $(".js-ajax-php-json").submit(function(event){
        event.preventDefault();
         $('.js-ajax-php-json :input').each(function(){
   
            var attr = $(this).attr('required');
            if (typeof attr !== typeof undefined && attr !== false) {
                if ($.trim($(this).val()) === "") {
                    req = false;
                }
            }            
         });
        if (req) {
            ajaxUpload($(this));
        }
    });
      
    
        function ajaxUpload(formValues) {
          
            var lastID;
            var update;
            var urlFile;
            var data = {
              "action": "submit"
            };
             data = $(formValues).serialize() + "&" + $.param(data);
            console.log(data);
            
            $.ajax({
              type: "POST",
              dataType: "json",
              url: "update.php", //Relative or absolute path to response.php file
              data: data,
              success: function(data) {
                lastID = data["lastID"];
                update = data["update"];
                urlFile = "update.php?id=" + lastID + "&update=" + update;
                console.log(urlFile);

                console.log("Form submitted successfully.\nReturned json: " + data["lastID"]);
                ajaxUploadFiles(urlFile);
                  
           
                
              }
            });
        }

    function ajaxUploadFiles(urlFile) {
        var dataFiles = new FormData();
                    $.each(files, function(key, value)
                    {
                        dataFiles.append(key, value);
                    });  
                  
                 $.ajax({
                url: urlFile,
                type: 'POST',
                data: dataFiles,
                cache: false,
                //dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(dataFiles, textStatus, jqXHR)
                {
                   console.log("Files function: " + dataFiles);
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    // Handle errors here
                    console.log('ERRORS: ' + textStatus);
                    // STOP LOADING SPINNER
                }
            });
    }
          
                               
/*    $.ajax({
    url: "update.php",
    type: "POST",
    dataType: "json",    
    data: "action=dataTable",
    success: function(data) {
                console.log(data);
  },
        error: function(jqXHR, textStatus, errorThrown)
                {
                    // Handle errors here
                    console.log('ERRORS: ' + textStatus);
                    // STOP LOADING SPINNER
                }
}); */     
    
});