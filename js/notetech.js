
    var switchText = document.getElementById("drop");  
    var elToggled = document.getElementById("dropitens"); 

    elToggled.style.display = "none";  
    switchText.addEventListener("click", function(){  
    	var isShow = document.getElementById("hamburg");
        if(elToggled.style.display == "block") {  
            elToggled.style.display = "none";  
            
             if (window.getComputedStyle(isShow).display === "block") { 
             	switchText.style.marginBottom = "0%";
             }

        } else {  
            elToggled.style.display = "block"; 

             if (window.getComputedStyle(isShow).display === "block") { 
             	switchText.style.marginBottom = "98%";
             }
            
        }  
    }, false); 



    var switchText2 = document.getElementById("hamburg");   
    var elToggled2 = document.getElementById("bs-example-navbar-collapse-1");  
    elToggled2.style.display = "none";  
    switchText2.addEventListener("click", function(){  
        if(elToggled2.style.display == "block") {  
            elToggled2.style.display = "none";  
        } else {  
            elToggled2.style.display = "block";  
        }  
    }, false); 
