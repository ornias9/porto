var img= document.querySelectorAll(".projects__img");

img.addEventListener("mouseover", function(){
  var transform= "translateY(-2px);";
  img.style.transform= transform;
});

img.addEventListener("mouseout", function(){
  var transform= "translateY(0px);";
  (this).style.transform= transform;
});

// $(".projects__links").hover(function(){
//   $(this).css({
//     "transform": "translateY(-2px)",
//     "text-shadow": "1px 0.3rem 0.3rem rgba(0, 0, 0, 0.5)"
    
//   });

// });

