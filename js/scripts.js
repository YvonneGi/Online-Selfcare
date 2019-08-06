function myFunction(x) {
  x.classList.toggle("change");
}
$document.ready(function(){
    $("#home").click(function(){
        $(".items").show();
    })
})