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
//        var $inputs = $('.js-ajax-php-json:input');
        event.preventDefault();
         $('.js-ajax-php-json :input').each(function(){
        
            

            var attr = $(this).attr('required');
//            alert(attr+ " " + (this).val());

            if (typeof attr !== typeof undefined && attr !== false) {
                
                if ($.trim($(this).val()) === "") {
                    req = false;
                    
                    
                }
            }
             console.log(req);
         });
        if (req) {
            ajaxUpload($(this));
        }
    });
      


            
                  
   /*    function test(){
           console.log("test ishleyir");
       }*/
    
        function ajaxUpload(formValues) {
          
            
            var data = {
              "action": "submit"
            };
              console.log(1);
            data = $(formValues).serialize() + "&" + $.param(data);
            $.ajax({
              type: "POST",
              //dataType: "json",
              url: "update.php", //Relative or absolute path to response.php file
              data: data,
              success: function(data) {

                alert("Form submitted successfully.\nReturned json: " + data);
              }
            });

            var dataFiles = new FormData();
            $.each(files, function(key, value)
            {
                dataFiles.append(key, value);
            });
                dataFiles.append("post", formValues);
                
                str = JSON.stringify(dataFiles);
                str = JSON.stringify(dataFiles, null, 4); // (Optional) beautiful indented output.
                console.log(str);

            $.ajax({
                url: 'update.php',
                type: 'POST',
                data: dataFiles,
                cache: false,
                //dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(dataFiles, textStatus, jqXHR)
                {
                    if(typeof dataFiles.error === 'undefined')
                    {
                        // Success so call function to process the form
                        console.log(dataFiles);
                    }
                    else
                    {
                        // Handle errors here
                        console.log('ERRORS: ' + dataFiles.error);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    // Handle errors here
                    console.log('ERRORS: ' + textStatus);
                    // STOP LOADING SPINNER
                }
            });
          
        
  
        }
    
});