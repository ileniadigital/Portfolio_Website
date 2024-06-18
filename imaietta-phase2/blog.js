//Open pop up window to confirm clearing
const clearbtn=document.getElementById('clear');
clearbtn.addEventListener('click', function(event){
    event.preventDefault();
    var choice= confirm("Are you sure you want to clear your post? You won't be able to get it back");
    if (choice){
        clear();
    }
    
});

//Clear form input
function clear(){
    let body=document.getElementById('postArticle');
    let title=document.getElementById('text');
    //Reset values
    body.value="";
    title.value="";
}

//Check if input fields are empty 
const submit= document.getElementById('postbtn');
submit.addEventListener("click", check, false);

function check(event){
    let title= document.getElementById('text');
    let body= document.getElementById('postArticle');
    if ((title.value=="") && (body.value=="")){
        event.preventDefault();
        message(title);
        message(body);
    }
    else if (title.value==""){
        event.preventDefault();
        message(title);
    }
    else if (body.value==""){
        event.preventDefault();
        message(body);
    }
}


//Display error message if empty
function message(inputField){
    if (inputField.style.border!="0.25em solid red"){
        
        inputField.style.border="0.25em solid red";
        const msg= document.createElement("div");
        msg.style.backgroundColor="red";
        const error= document.createTextNode("This cannot be empty")
        msg.appendChild(error);
        inputField.parentNode.insertBefore(msg, inputField.nextSibling);

         //Check if user is typing again
        inputField.addEventListener("input", function(){
            if (inputField.value!=""){
                msg.remove();
                inputField.style.border="none";
            }
        });
    }   
   
}

//Preview button
const previewbtn= document.getElementById("previewbtn");
previewbtn.addEventListener("click",function(){
    let title= document.getElementById('text').value;
    let body= document.getElementById('postArticle').value;
    window.location.href= "previewPost.php?title="+title+ "&body="+body;
});
