onload = function(){
    var smile = document.querySelector(".smile") || false;
    if(smile){
        setInterval(function(){ 
                if(smile.innerText == ";)"){
                    smile.innerText = ":)";
                }else if(smile.innerText == ":)"){
                    smile.innerText = ":|";
                }else{
                    smile.innerText = ";)"
                }
        },300);
    }
}