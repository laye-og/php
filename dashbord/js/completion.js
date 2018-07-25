// pas touche
// création de l'objet Ajax
var http = null;
if		(window.XMLHttpRequest) // Firefox 
	http = new XMLHttpRequest(); 
else if	(window.ActiveXObject) // Internet Explorer 
	http = new ActiveXObject("Microsoft.XMLHTTP");
else	// XMLHttpRequest non supporté par le navigateur 
   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");


function recup_email(e) {
	var sel = document.completion_form.completion_select ;
	var nb_el = sel.options.length ;
	var selIndex = sel.selectedIndex ;

	if (!document.completion_form.completion_text.value)
	{	sel.style.display = 'none';
	}
	else if (e.keyCode == 40 && nb_el) { // fleche bas
		if (selIndex < sel.options.length - 1)
			sel.selectedIndex = selIndex + 1 ;
	}
	else if (e.keyCode == 38 && nb_el) { // fleche haut
		if (selIndex > 0)
			sel.selectedIndex = selIndex - 1 ;
	}
	else if (e.keyCode == 13 && nb_el) { // entrée
		document.completion_form.completion_text.value = sel.options[selIndex].value ;
		sel.style.display = 'none';
	}
	else { // autre touche --> on recherche les emails
		val = document.completion_form.completion_text.value ;
		if (val.length >= minimum_caractere) {
			http.open("GET", "ajax.php?what=completion1&case="+case_sensitive+"&val="+escape(val), true);
			http.onreadystatechange = handleHttpResponse_recup_email;
			http.send(null);
		}
	}
}

function handleHttpResponse_recup_email()
{
	if (http.readyState == 4)
	{	emails = eval('(' + http.responseText + ')'); // [id1,id2, ...]

		var sel = document.completion_form.completion_select ;
		sel.attributes['size'].value = emails.length;

		// on vide le select
		while(sel.options.length > 0)
			sel.options[0] = null

		// on rempli avec les nouveaux emails
		for(i=0 ; i<emails.length ; i++)
			sel.options[sel.options.length] = new Option(emails[i],emails[i]);

		if (sel.options.length) {
			sel.selectedIndex = 0 ; // on selection le premier element de la liste
			sel.style.display = 'block';
		}
		else
			sel.style.display = 'none';
	}	
}

function recup_mail_click() {
	var sel = document.completion_form.completion_select ;
	document.completion_form.completion_text.value = sel.options[sel.selectedIndex].value ;
	sel.style.display = 'none';
}