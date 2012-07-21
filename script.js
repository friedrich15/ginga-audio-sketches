function editContent(id){	
	var div = document.getElementById(id);	
	div.className = "edit";
}

function editContentDone(id){	
	var div = document.getElementById(id);	
	div.className = "noEdit";
	saveChange(id);
}

function saveChange(id){
	alert('Wird noch nicht gespeichert!');
	$text = $('#' + id).text();
    $.ajax({ 
	    type: "POST", 
	    cache: false, 
	    url: "dynsave.php", 
	    data: "text="+$text, 
	    dataType: "json", 
	    success: function(data) { 
        	alert('Saved.'); 
    	}   
	});
}


