  var elements = document.getElementsByClassName('textInput');
 
function inputBlurred(inputObject) {
	for (var i = 0, c = elements.length ; i < c ; i++) {
    	if(elements[i] != inputObject){
        	if(inputObject.value.length  == 0) {
            	elements[i].disabled = ""  ; 
            
            	}
            	
            else{
            	elements[i].disabled = "disabled"  ; 
            	}
        	} 
    
    }
   
  
  }
  
  
function checkFields(){
	canSubmit = false ; 
	
	    for (var i=0 , c= elements.length ; i<c ; i++){
	    	if(elements[i].value != ""){
	    		canSubmit = true ; 
	    	} 
	    }
	    
	    if(!canSubmit){
	    	alert('You have to fill one of the fields to perform the search') ; 
	    }
	    
	return canSubmit ; 
       
}
 