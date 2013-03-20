$(function(){
    $('.error').hide();    
    $('#formLogin').submit(function(){        
        var user = $('#user').val();
        var pass = $('#pass').val();
        var path = $('#formLogin').attr('action');
        $('.error').hide();
        $('.wrong').remove();
        
        if (user == ""){
            $('#user_error').show();
            return false;
        }
        
        if (pass == ""){
            $('#pass_error').show();
            return false;
        }
        
        var datastring = $(this).serialize();
        //console.log(datastring);
                        
        $.post(path, datastring, function(data) {            
           if(data == "false"){
               $('#formLogin').append("<p class='wrong' style='color:red; font-size:12px;'>Wrong username or password</p>");
           }else{
               $(location).attr('href', 'http://localhost/mvc/dashboard');
           } 
        });
        return false;
    });   
})


