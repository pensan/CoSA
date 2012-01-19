// bereiche ganz oben (intranet-login, suchbereich)
$(document).ready(function(){									
	$("body").addClass("javaScriptAktiv");
 	$('div#suchDiv').hide();
	$("a#suchDiv_Button").click(function(){
		$("div#suchDiv").slideToggle("500");
		return false;
	});
	
	$('div#intranetStuff').hide();
	$("a#intranetStuff_Button").click(function(){
		$("div#intranetStuff").slideToggle("500");
		// $("a#intranetStuff_Button").addClass("aktiv");
		return false;
	});

	//suchaufforderung im normalen text (z.b. bei fehlermeldung.html
	$("a#sucheImText").click(function(){
		$("div#suchDiv").slideToggle("500");
		return false;
	});
});

// hauptmenue-funktionen
$(document).ready(function(){

	//Event binding, learning jquery pp. 132
	var bindBehaviors = function(scope,ajax) {
		$('a.mitSubmenu,a.mitSubmenuOffen', scope).bind('click', hauptMenueAufZu);
		$('div#ContentBlock a', scope).unbind('click', hauptMenueAufZu);
		//$('#shortCutNavi a', scope).unbind('click', hauptMenueAufZu);
	}
	
	// fuegt ((class="zweiZeilig")) ein, wenn text zu lang ist
	$('li a','ul#hauptnavigation').each(function(index){
				if ($(this).text().length > 32){ // texte mit mehr als 32 buchstaben passen nicht mehr auf eine zeile
						$(this).addClass('zweiZeilig');
				}
	});
	$('div#ContentBlock a').removeClass('zweiZeilig');
	//alle uls innerhalb der lis werden unsichtbar geschaltet, außer auf der sitemap
	$('body:not(#sitemap) ul#hauptnavigation li ul').hide();	
	
	//Der ContentBlock war etwas verschoben, deshalb muß er nachträglich an die richtige Stelle gerückt werden.
	$('div#ContentBlock').clone().insertAfter('li.act ul.spalte2');
	$('ul#hauptnavigation li ul div#ContentBlock').remove();
	$('div#ContentBlock ul').show();

	//außer wenn die Seite keinen Inhalt hat, dann wird die Navi eingeblendet
	if(!$('div#ContentBlock')){
		$('ul#hauptnavigation li.act ul').show();								
	}

	//weiterfuehrende Links rechts neben inhalt
	if($('ul#marginalLinks li a')){
		$('ul#marginalLinks').show();	
	}

	//zeigen die verkuerzte navigation an
	$('ul#shortCutNavi').show();									
	$('li#shortLinks ul').show();

	
	//Learning jQuery, Seite 53
	var hauptMenueAufZu = function(){	

		//Learning jQuery, Seite 29
		var $ContentBlock = $(this).parent().find('div#ContentBlock');		
		var $ContentTitle = $(this).parent().find('h2#ContentTitel');		//die relevante Ueberschrift
		var $shortCutNavi = $(this).parent().find('ul#shortCutNavi');		//die Kurznavi
		
		//schiebt Content weiter runter, macht Ueberschrift und Kurznavi unsichtbar
		ContentBlockFormat($ContentBlock, $ContentTitle, $shortCutNavi);	
		
		var parentLI = $(this).parent('li:first');
		var linkHref = $(this).attr('href').replace(/http:\/\/sarah.fh-salzburg.ac.at\//,'');

		$(parentLI).addClass('loading');
		if( this.nextSibling && this.nextSibling.nodeType == 1){                  //Nur wenn der gewählte Link keine siblings (ul) hat, AJAX Funktion laden
			var ulIsHidden = $(parentLI).children('ul:first:hidden');
			var ulIsVis = $(parentLI).children('ul:first:visible');
				if(ulIsHidden){
					$(parentLI).siblings('.spalte2, .spalte3, .spalte4, .spalte5').toggle('500');
					ulIsHidden.show('500');
					}
				if(ulIsVis){
					ulIsVis.hide('500');
					}
			$(parentLI).removeClass('loading');
			return false;										//sonst springt der browser grundsaetzlich nach oben
		}
		else {
			return true;
		}
		$(parentLI).removeClass('loading');
	}
	bindBehaviors('ul#hauptnavigation li',false);	


	/***************************/
	//Verhalten der shortCutNavi/
	/***************************/

	if($('ul#shortCutNavi').children().length == 1){
	 	$('ul#shortCutNavi li#shortLinks a').click(function(){
	 		return true;
	 	});
	}
	else if($('ul#shortCutNavi').children().length == 2){
		//Sonderfall: News > Aktuelles
		if($('ul#shortCutNavi li#shortLinks ul').children().length == 0){
		 	$('ul#shortCutNavi li:nth-child(1) a').click(function(){
		 		return true;
	 		});
	 	}
	 	else{
		 	$('ul#shortCutNavi li:nth-child(1) a').click(function(){
		 		return false;
	 		});
	 	}
	}
	else if($('ul#shortCutNavi').children().length == 3){

	 	$('ul#shortCutNavi li:nth-child(1):not(#shortLinks) a').toggle(function(){
					$('ul#shortCutNavi li#shortLinks').hide('500');
					$('ul#shortCutNavi li:nth-child(2)').hide('500');

					$('li.act ul.spalte2 li.act ul.spalte3').clone().insertAfter(this);

					$(this).siblings('ul.spalte3').removeClass().addClass('spalte3Clone');
					$('ul.spalte3Clone ul.spalte4').removeClass().addClass('spalte4Clone');
					$('ul.spalte4Clone ul.spalte5').removeClass().addClass('spalte5Clone');

					$('ul.spalte3Clone').show('500');
					$('ul.spalte4Clone').show('500');
					$('ul.spalte5Clone').show('500');		
					return false;	 
	 			},function(){
					$('ul.spalte5Clone').hide('500');
					$('ul.spalte4Clone').hide('500');
					$('ul.spalte3Clone').hide('500');
					$('ul.spalte5Clone').remove();
					$('ul.spalte4Clone').remove();
					$('ul.spalte3Clone').remove();
		
					$('ul#shortCutNavi li:eq(1)').show('500');		
					$('ul#shortCutNavi li:eq(2)').show('500');		
					$('ul#shortCutNavi li:eq(3)').show('500');
					return false;	
	 	});
	 	$('ul#shortCutNavi li:nth-child(2) a').click(function(){
	 		return false;
	 	});
	}
	else if($('ul#shortCutNavi').children().length == 4){
	 	$('ul#shortCutNavi li:nth-child(1):not(#shortLinks) a').toggle(function(){
					$('ul#shortCutNavi li#shortLinks').hide('500');
					$('ul#shortCutNavi li:nth-child(2)').hide('500');
					$('ul#shortCutNavi li:nth-child(3)').hide('500');

					$('li.act ul.spalte2 li.act ul.spalte3').clone().insertAfter(this);

					$(this).siblings('ul.spalte3').removeClass().addClass('spalte3Clone');
					$('ul.spalte3Clone ul.spalte4').removeClass().addClass('spalte4Clone');
					$('ul.spalte4Clone ul.spalte5').removeClass().addClass('spalte5Clone');

					$('ul.spalte3Clone').show('500');
					$('ul.spalte4Clone').show('500');
					$('ul.spalte5Clone').show('500');		
					return false;	 				
		},function(){
					$('ul.spalte5Clone').hide('500');
					$('ul.spalte4Clone').hide('500');
					$('ul.spalte3Clone').hide('500');
					$('ul.spalte5Clone').remove();
					$('ul.spalte4Clone').remove();
					$('ul.spalte3Clone').remove();
		
					$('ul#shortCutNavi li:nth-child(1)').show('500');		
					$('ul#shortCutNavi li:nth-child(2)').show('500');		
					$('ul#shortCutNavi li:nth-child(3)').show('500');
					$('ul#shortCutNavi li#shortLinks').show('500');
					return false;	
	 	});
		$('ul#shortCutNavi li:nth-child(2):not(#shortLinks) a').toggle(function(){
					$('ul#shortCutNavi li#shortLinks').hide('500');
					$('ul#shortCutNavi li:nth-child(3)').hide('500');

					$('li.act ul.spalte2 li.act ul.spalte3 li.act ul.spalte4').clone().insertAfter(this);
	
					$(this).siblings('ul.spalte4').removeClass().addClass('spalte4Clone');
					$('ul.spalte4Clone ul.spalte5').removeClass().addClass('spalte5Clone');

					$('ul.spalte4Clone').show('500');
					$('ul.spalte5Clone').show('500');		
					return false;					
		},function(){
					$('ul.spalte5Clone').hide('500');
					$('ul.spalte4Clone').hide('500');
					$('ul.spalte3Clone').hide('500');
					$('ul.spalte5Clone').remove();
					$('ul.spalte4Clone').remove();
					$('ul.spalte3Clone').remove();
		
					$('ul#shortCutNavi li:nth-child(1)').show('500');		
					$('ul#shortCutNavi li:nth-child(2)').show('500');		
					$('ul#shortCutNavi li:nth-child(3)').show('500');
					$('ul#shortCutNavi li#shortLinks').show('500');
					return false;	
	 	});
	 	$('ul#shortCutNavi li:nth-child(3) a').click(function(){
	 		return false;
	 	});

	}
	//Sollten die shortLinks betroffen sein, gleich unbinden
 	$('ul#shortCutNavi li#shortLinks a').unbind();
	/*********/
 });

 
//schiebt Content weiter runter, macht Ueberschrift und Kurznavi unsichtbar
function ContentBlockFormat(divBlock,divTitle,ulShortCutNavi){
	var marginTop = parseFloat(divBlock.css('marginTop'), 10);
	//alert (marginTop);
	if (marginTop <= 1){
		//$(divBlock).css({ 'margin-top': '35px', 'border-top': '1px solid #000' });
		$(divBlock).css({ 'margin-top': '35px' });
		$(divBlock).css({'display': 'none' });
		//$(divTitle).css({'display': 'none' });
		$(ulShortCutNavi).css({'display': 'none' });
	} else {
		$(divBlock).css({ 'margin-top': '0px' });
		$(divBlock).css({'display': 'block' });
		$(divTitle).css({'display': 'block' });
		$(ulShortCutNavi).css({'display': 'block' });
	}
}

// scrollt animiert nach oben
// http://www.learningjquery.com/2007/09/animated-scrolling-with-jquery-12
$(document).ready(function() {
	$('a#topScroller').click(function() { //verallgemeinerung hier rausgenommen!
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target	|| $('[name=' + this.hash.slice(1) +']');
			if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset}, 700);
				return false;
			}
		}
	});
});

// Strassenadresse bei Kontakt>Formular wird bei Click eingeblendet
$(document).ready(function(){	
	$('table#Strassenadresse').hide();
	$('td#StrassenadresseClick').mouseover(function(){
		$(this).css({ 'text-decoration': 'underline', 'cursor': 'pointer' });
	});
	$('td#StrassenadresseClick').mouseout(function(){
		$(this).css({ 'text-decoration': 'none'});
	});
	$('td#StrassenadresseClick').click(function(){
		$('table#Strassenadresse').slideDown('500');
		return false;
	}); 
});



// allgemeine settings
$(document).ready(function(){									
	/* viele css-einstellungen machen nur sinn, wenn javascript aktiv ist! */
	/* diese befinden sich im style.css jeweils bei body.javaScriptAktiv */
	//$("body").removeClass();
	//PDF-Links in neuem Fenster öffnen
	$('a[@href$=".pdf"]').click(function(){
		this.target = '_blank';
	});
	$('a.newPage').click(function(){
		this.target = '_blank';
	});
	// spezielles css fuer ie < 7
	if ($.browser.msie) {
  		 var ieVersion = $.browser.version;
  		 if (ieVersion < 7){
  		 	// die jeweiligen links bekommen besondere icons davor
  		 	// klappt leider nicht mit der eleganteren loesung, bei der die darstelllung via css gesteuert wird:
  		 	// das ging leider nicht (unklar warum): $('a[@href$=".pdf"]').addClass('pdflink');					//pdf-link
  		 	
  		 	
  		 	//$('ul#marginalLinks a[@href*="fh-salzburg.ac.at"]').css({ 'padding-left': '1px', 'border': '1px solid red !important', 'background': 'url(fileadmin/template/p/icons/link_intern.gif) no-repeat 0 0' });
  		 	//$('ul#marginalLinks a[@href*="fh-salzburg.at"]').css({ 'padding-left': '1px', 'border': '1px solid red !important', 'background': 'url(fileadmin/template/p/icons/link_intern.gif) no-repeat 0 0' });
  		 	
  		 	$('div#ContentBlock p.bodytext a[@href*="//"]').css({ 'padding-left': '19px', 'background': 'url(fileadmin/template/p/icons/link_extern.gif) no-repeat 0 0' });
  		 	$('ul#marginalLinks a[@href*="//"]').css({ 'padding-left': '19px', 'background': 'url(fileadmin/template/p/icons/link_extern.gif) no-repeat 0 0' });
  		 	
  		 	$('a[@href^="mailto:"]').css({ 'padding-left': '19px', 'background': 'url(fileadmin/template/p/icons/link_eMail.gif) no-repeat 0 0' });
  		 	$('a[@href$=".pdf"]').css({ 'padding-left': '19px', 'background': 'url(fileadmin/template/p/icons/doku_pdf.gif) no-repeat 0 0' });
  		 	$('div#trailers a[@href$=".pdf"]').css({ 'padding-left': '0', 'background': 'none' })
  		 	$('a[@href$=".doc"]').css({ 'padding-left': '19px', 'background': 'url(fileadmin/template/p/icons/doku_word.gif) no-repeat 0 0' });
  		 	$('a[@href$=".xls"]').css({ 'padding-left': '19px', 'background': 'url(fileadmin/template/p/icons/doku_excel.gif) no-repeat 0 0' });
  		 	$('a[@href$=".zip"]').css({ 'padding-left': '19px', 'background': 'url(fileadmin/template/p/icons/doku_zipped.gif) no-repeat 0 0' });
  		 	
  		 	$('div#ContentBlock table tbody td:has(h3)').removeClass();										// <td> enthaelt eine <h3>
			$('div#ContentBlock table tbody td:has(h3)').css({ 'background-color': '#851800', 'color': '#fff' });
  		 }
	}
	
});

// tabellen formatieren
$(document).ready(function(){	
	$('div#ContentBlock table.schmaleTabelle').addClass('contenttable');
	$('div#ContentBlock table.mittlereTabelle').addClass('contenttable');
	$('div#ContentBlock table.breiteTabelle').addClass('contenttable');

	$('div#ContentBlock table.contenttable:not(.noJQuery) tbody td:nth-child(1)').addClass('Col1');					// erste <td> hat breite wie ein <p>
	$('div#ContentBlock table.contenttable:not(.noJQuery) tbody td:nth-child(even)').addClass('ColBetont');	
	//Diese Einstellungen haben mit dem Redakteurs-Admin-Panel zu tun
	$('div#ContentBlock table.typo3-editPanel tbody td:nth-child(1)').removeClass('Col1');
	$('div#ContentBlock table.styleTABLE tbody td').removeClass();
	$('div#ContentBlock table.styleTABLE').css({'width': '90px'});
	//Und unten unters Admin-Panel wird auch noch eine Tabelle als Linie gezogen...
	$('div#ContentBlock table[@bgcolor^="black"]').remove();
				// gerade <td>
	
	//zeile, die <h3> enthaelt und ueber mehrere columns geht, muss spez. fuer ie6 formatiert werden -> hier oben: bei "spezieller css fuer ie <7"


});



////////////////////////////// OHNE jquery

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}

// dom scripting, p. 285f
addLoadEvent(prepareForms);
function prepareForms(){
	for (var i=0; i<document.forms.length; i++) {
		var thisform = document.forms[i];
		resetFields(thisform);
		/*thisform.onsubmit = function() {
			return validateFields(this);
		}*/
	}
}



function resetFields(whichform){
	for (var i=0; i<whichform.elements.length; i++) {
		var element = whichform.elements[i];
		if (element.type == "submit") continue;
		if (!element.defaultValue) continue;
		
		element.onfocus = function(){
			if (this.value == this.defaultValue) {
				this.value = "";
			}
		}
		
		element.onblur = function() {
			if (this.value == "") {
				this.value = this.defaultValue;
			}
		}
	}
}