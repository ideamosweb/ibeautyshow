$(function(){
    $.get('user/getDataAjax', function(data){
        //console.log(data);        
        for (var i = 0 ; i < data.length ; i++){            
            $('#userList').append("<tr><td>" +data[i].id+ "</td><td>" +data[i].username+ "</td><td>" +data[i].role+ "</td><td><a href='user/edit/"+data[i].id+"'>Edit</a></td><td><a href='user/delete/"+data[i].id+"'>Delete</a></td></tr>");
        }
    }, "json")
});


