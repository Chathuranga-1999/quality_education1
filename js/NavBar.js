var ul_custom = document.querySelector(".ul_custom");

ul_custom.addEventListener("click", btn_click, false);

function btn_click(e) {
	if(e.target !== e.currentTargert){
		var clickedItem = e.target.id;
		var element = document.getElementById(clickedItem);
  		element.classList.add("press");

  		switch(element) {
  			case Home:
    			window.location='Home.html';
    		break;
  			
  			case Service:
    			window.location='Service.html';
    		break;

    		case Register:
    			window.location='Register.html';
    		break;

    		case Log_In:
    			window.location='Log_In.html';
    		break;

    		case About_us:
    			window.location='About_Us.html';
    		break;
  			
		}
	}

	e.stopPropagation();
}


