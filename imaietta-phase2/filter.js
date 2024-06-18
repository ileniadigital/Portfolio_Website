//Filter button
const filterbtn= document.getElementById('go');
filterbtn.addEventListener("click", function(){
    let menu= document.getElementById("filters");
    let month= menu.options[menu.selectedIndex].value;
    window.location.href="viewBlog.php?filter=" +encodeURIComponent(month);
});
