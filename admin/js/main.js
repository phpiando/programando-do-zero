window.addEventListener("load", function(){
    
var btn = document.querySelector("#btn")
console.log(btn)
var sidebar = document.querySelector('.sidebar');
var searchBtn = document.querySelector('.bx-search');

btn.onclick = function () {
    sidebar.classList.toggle("active");
    teste()
}
searchBtn.onclick = function () {
    sidebar.classList.toggle("active");
}
});