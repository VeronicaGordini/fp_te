
// JavaScript Document


$(document).ready(function(){
	
	
	//catturo dimensioni finestra broswer	
	var browser_height_st = document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientHeight:document.body.clientHeight;
	var browser_width_st = document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientWidth:document.body.clientWidth;
	
	//controllo sui minimi valori assunti dalle dimensioni
	if(browser_height_st < 600) { browser_height_st = 600; }
	if(browser_width_st < 960) { browser_width_st = 960; }
	
	//assegno al contenitore1 le 2 dimensioni trovate
	$("#conten1").css("height", browser_height_st);
	$("#conten1").css("width", browser_width_st);
	
	
	//cattura dell'evento di ridimensionamento del broswer
	window.onresize = function(event) {
		var browser_height_st = document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientHeight:document.body.clientHeight;
		var browser_width_st = document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientWidth:document.body.clientWidth;
		
		//controllo sui minimi valori assunti dalle dimensioni
		if(browser_height_st < 600) { browser_height_st = 600; }
		if(browser_width_st < 960) { browser_width_st = 960; }
	
		//assegno al contenitore1 le 2 dimensioni trovate
		$("#conten1").css("height", browser_height_st);
		$("#conten1").css("width", browser_width_st);
		
		//controllo la slide attiva tramite la classe active emi riposiziono li correggendo l'errore di spostamento delle slide
		var target = $("a.active").attr("href"); //catturo l'attributo href del 'a' selezionato
		var targetoffset = $(target).offset(); //calcolo il suo offset(cioè la sua posizione)
		var container = $("#conten3").offset(); //calcolo la posizione del contenitore
		var targetleft = container.left-targetoffset.left;//faccio sia la differenza orizzontale che verticale ( a te serve solo quella orizzontale...)
		$("#conten3").animate({left:targetleft}, 0); //mi muovo in quella direzione!!!
	}
		
		
	//attivazione slider
	
	
	$("#nav a").click(function(){
		$("#nav a").removeClass("active");
		$(this).addClass("active");
		var target = $(this).attr("href"); //catturo l'attributo href del 'a' selezionato
		var targetoffset = $(target).offset(); //calcolo il suo offset(cioè la sua posizione)
		var container = $("#conten3").offset(); //calcolo la posizione del contenitore
		var targetleft = container.left-targetoffset.left;//faccio sia la differenza orizzontale che verticale ( a te serve solo quella orizzontale...)
		//var targettop = container.top-targetoffset.top;
		$("#conten3").animate({left:targetleft}, 300); //mi muovo in quella direzione!!!
		return false;						   
	});
	$("#nav a:first").addClass("active");
				
		 
		 //attivazione gallery
		
		 var zoomFunc = function(dimension) {
                return dimension * 1.5;
            }
            var shrinkFunc = function(dimension) {
                return dimension * 0.5;
            }
            $('div.gallery img').slidingGallery({'slideSpeed':'slow','Lzoom':zoomFunc, 'Pzoom':zoomFunc,'Lshrink':shrinkFunc,'Pshrink':            shrinkFunc});	
			
				
		//attivazione prettyPhoto
		
		 $("a[rel^='prettyPhoto']").prettyPhoto();
			 
	
});