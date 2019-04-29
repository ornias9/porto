var ig= document.querySelectorAll(".projects__img");
var pig=document.getElementsByClassName("projects__img");

// ig.addEventListener("mouseover", function(){
//   var transform= "translateY(-2px);";
//   ig.style.transform= transform;
// });

// img.addEventListener("mouseout", function(){
//   var transform= "translateY(0px);";
//   (this).style.transform= transform;
// });

// for(i=0;i<=pig.length;i++){
//   pig[i].addEventListener("mouseover", function(e){
//     var transform= "translateY(-2px);";
//     pig.style.transform= transform;
//   });
// }






$(".projects__img").mouseover(function(){
  $(this).css({
    "transform": "translateY(-2px)",
    "box-shadow": "5px 6px 20px 6px rgba(0, 0, 0, 0.5)"
  });

});

$(".projects__img").mouseout(function(){
  $(this).css({
    "transform": "translateY(0px)",
    "box-shadow": "5px 6px 20px 6px rgba(0, 0, 0, 0.5)"
  });

});

