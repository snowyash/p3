$("#upperCase").click(function(){
        $('#lowerCase').attr('checked', false);
        $('#capitalization').attr('checked', false);
      })

      $("#lowerCase").click(function(){
        $('#upperCase').attr('checked', false);
        $('#capitalization').attr('checked', false);
      })

      $("#capitalization").click(function(){
        $('#upperCase').attr('checked', false);
        $('#lowerCase').attr('checked', false);
      })

      $("#submitBtn").click(function(){
        var proceed = true;
        console.log("maxLength.val() is "+$("#maxLength").val());

        var decimal=  /^[0-9]*[.][0-9]*$/;
        if($("#maxLength").val() !== ""){
          if(isNaN($("#maxLength").val()) || $("#maxLength").val() <= 0 || $("#maxLength").val().match(decimal)) { 
        //if user did not input a number in the Max number of password field
        //that is if input field is not empty, the input is a positive integer
          proceed = false; // do not proceed
          $("#maxLength").css('border-color', 'red'); // change border color to red
          $("#maxLength").val("Please enter a natural number.");
          }
        }
        

        if(proceed){
          $("#maxLength").css('border-color', 'green'); // reset the border color

          get_data = {
            'wordCount'       : $('select[name="wordCount"]').val(),
            'maxLength'       : $('input[name="maxLength"]').val(),
            'includeDigit'    : $('input[name="includeDigit"]').prop('checked'),
            'capitalization'  : $('input[name="capitalization"]').prop('checked'),
            'upperCase'       : $('input[name="upperCase"]').prop('checked'),
            'lowerCase'       : $('input[name="lowerCase"]').prop('checked'),
            'includeSymbol'   : $('input[name="includeSymbol"]').prop('checked')
          };


          $.get("php/passwordGenerator.php", get_data).done(function(response){
            console.log("entering .get function!");
            console.log(response);
            var obj = jQuery.parseJSON(response);

            if(obj.type == 'error'){
              $("#password").css('color', 'red');
            } else {
              $("#password").css('color', '#5cb85c');
            }

            $("#password").text(obj.text);
          }, 'json');
        }
        return false;
      })