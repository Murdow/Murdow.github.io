$("#btn").click(function(){
 
  var file = 'http://www.projectroom.16mb.com/test.json';
 
  $.getJSON("/test.json", function(json) {    
 
    for (var i = 0; i < 10; i++) {
 
      $("#pageContainer").append('<p>Page  : ' + json[i].PageNumber   + '</p>');
      $("#pageContainer").append('<p>Page Text : ' + json[i].PageText  + '</p>');      
    }
  });
 
});