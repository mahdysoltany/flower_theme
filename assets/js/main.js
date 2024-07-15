









$("#search").click(function(){
    $(".search_bg").css("display", "block");
    $(".search_box").css("display", "block");
  });

  $(".search_bg").click(function(){
    $(".search_bg").css("display", "none");
    $(".search_box").css("display", "none");
  });


  $(".search_box").click(function(event){
    event.stopPropagation();
});


