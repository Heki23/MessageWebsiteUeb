function NichtLeerPruefen(){
	alert("test");
   var e = document.Formula1.nEmpfanger.value;
   var n = document.Formula1.nNachricht.value;
   
	if(b == ""){
		alert("Empaenger darf nicht leer sein.");
		   return false; // Das Formular wird nicht gesendet
	}
     if(n == ""){
		alert("Nachricht darf nicht leer sein.");
		   return false; // Das Formular wird nicht gesendet
	}

	else{
		 return true; // Das Formular wird gesendet
		
	}
	

   
}