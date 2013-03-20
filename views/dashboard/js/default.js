$(function(){
    
    $.get("dashboard/ajaxFuntionGet", function(data){
        //alert(data);
        console.log(data);
        for(var i = 0; i < data.length; i++){
            $("#insertItems").append("<p>" + data[i].text + "<a class='del' rel='" +data[i].id+ "' href='#'>X</a></p>");
        }
        
        $(".del").live('click', function(){        
            var id = $(this).attr("rel");
            
            deleteI = $(this);
            var url = "http://localhost/mvc/dashboard/ajaxDelete";
            $.post(url, {id: id}, function(){
                deleteI.parent().remove();

                });
            return false;
        });
    }, "json");
   
   
    $('#ajaxForm').submit(function(){
        var data = $(this).serialize();
        var url = $(this).attr('action');
        console.log(data);
       
        $.post(url, data, function(d){
            $("#insertItems").append("<p>" + d.text + "<a class='del' href='#' rel='" +d.id+"'>X</a></p>");
        }, "json")
        return false;
    });
    
       
});


