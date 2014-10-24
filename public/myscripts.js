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

jQuery(document).ready(function($){
 
    $('#form-add-lorem_ipsum').on('submit', function(){
 
        $.post(
            //submit token and parCount to LIController
            $(this).prop('action'),
            {
                "_token": $(this).find('input[name=_token]').val(),
                "parCount": $('#parCount').val()
            },
            //take returned data, and return the msg
            function(data){

                if(data.type != 'error'){
                  var result = data.msg;

                  $("#lorem_ipsum").html(result);
                }
                else {
                  // return error message
                  $("#lorem_ipsum").html(data.msg);
                }
            },
            'json'
        );
 
        return false;
    });

    $('#form-add-fake_user').on('submit', function(){
 
        $.post(
            //submit token and userCount to FUController
            $(this).prop('action'),
            {
                "_token": $(this).find('input[name=_token]').val(),
                "userCount": $('#userCount').val()
            },
            //take returned data, and return the msg
            function(data){
                if(data.type != 'error'){
                  //first remove existing users, if any
                  $(".users").remove();

                  //test data is ok
                  console.log(data.msg[0].name);

                  //loop to create users in divs
                  for(i = 0; i < $('#userCount').val(); i++){
                    $("#fake_user").append(
                    "<div class='users col-lg-3 col-lg-offset-1'>"+
                      "<h4>"+data.msg[i].name+"</h4>"+
                      "<p>Birthday: "+data.msg[i].bday+"</p>"+
                      "<p>Company: "+data.msg[i].company+"</p>"+
                      "<p>Address: "+data.msg[i].address+"</p>"+
                      "<p>Description: "+data.msg[i].description+"</p>"+
                    "</div>"
                    );
                  }
                }
                else {
                  // return error message
                  $("#fake_user").html(data.msg);
                }
            },
            'json'
        );
 
        return false;
    });
 
} );