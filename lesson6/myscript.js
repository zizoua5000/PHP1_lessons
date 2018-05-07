$("document").ready(function(){
    // Variable to store your files
    var files;

    // Add events
    $('input[type=file]').on('change', prepareUpload);

    // Grab the files and set them to our variable
    function prepareUpload(event)
    {
      files = event.target.files;
        console.log(files);
    }
    
    
    $(".js-ajax-php-json").submit(function(){
        var data = {
          "action": "submit"
        };
          console.log(1);
        data = $(this).serialize() + "&" + $.param(data);
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
            console.log(key);
            console.log(value);
            dataFiles.append(key, value);
            console.log(dataFiles);
        });
            console.log(dataFiles);

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
    return false;
  });
});