$(document).ready(function(){



	/*$('#courses > div').click(function() {
		if(!$(this).hasClass('active')){
			$(this).animate({height: "40%", width: "70%"});
		} else {
			$(this).animate({height: "100px", width: '255px'});
		}
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).siblings().animate({height: "100px", width: '255px'});
	});
*/
	$(".addCourse").click(function(){
		$(this).parent().append('<div class="col-md-3"><h4 class="title"></h4><p class="desc"></p><input type="text" name="title" value="Enter A Title" class="onefield"></input><textarea name="desc" class="textfield">Click to add a description</textarea><a href="#" class="save">Save</a> <a href="#" class="cancel">Cancel</a></div>');
	});

	$(".title, .desc").hover(function(){
		var previtem = $(this).prev();
		$(this).addClass("litehover");
		
		if(previtem.attr("class") == "title"){
			previtem.addClass("litehover");
		} else {
			$(this).next().addClass("litehover");
		}
	}, function(){
		//on hover off
		var currenttag = $(this).prop("tagName");
		$(this).removeClass("litehover");

		if(currenttag == "H4"){
			$(this).next().removeClass("litehover");
		}
		else {
			$(this).prev().removeClass("litehover");
		}
	});

	$(".title, .desc").on("click", function(){
  		var currenttag = $(this).prop("tagName");
  		var titletag;
  		var desctag;
  		var titlevalue;
  		var descvalue;
	
	  if(currenttag == "H4") {
		    titletag = $(this);
    		desctag  = $(this).next();
   			titlevalue = $(this).html();
   			descvalue  = desctag.html();
		} else {
    		titletag = $(this).prev();
    		desctag  = $(this);
    		titlevalue = titletag.html();
    		descvalue  = $(this).html();
		}
	
  		titletag.css("display", "none");
  		desctag.css("display", "none");

  		$(this).siblings(".onefield").css("display", "block");
  		$(this).siblings(".textfield").css("display", "block");
  		$(this).siblings("a").css("display", "inline-block");
	});	// end title/desc click event

	$(".save").on("click", function(e){
  		e.preventDefault();
  		var titleval = $(this).prevAll(".onefield:first").val();
  		var descval  = $(this).prevAll(".textfield:first").val();

  		var titlecontainer = $(this).siblings(".title");
  		var desccontainer  = $(this).siblings(".desc");

  		titlecontainer.html(titleval).css("display", "block");
  		desccontainer.html(descval).css("display", "block");


  		$(this).prevAll(".onefield:first").css("display", "none");
  		$(this).prevAll(".textfield:first").css("display", "none");

  		$(this).next(".cancel").css("display", "none");
  		$(this).css("display", "none");
	}); // end save btn click event

	$(".cancel").on("click", function(e){
		e.preventDefault();

  		var titlecontainer = $(this).siblings(".title");
  		var desccontainer  = $(this).siblings(".desc");

  		titlecontainer.css("display", "block");
  		desccontainer.css("display", "block");

  		$(this).prevAll(".onefield:first").val(titlecontainer.html()).css("display", "none");
  		$(this).prevAll(".textfield:first").val(desccontainer.html()).css("display", "none");		
  		$(this).prev(".save").css("display", "none");
  		$(this).css("display", "none");
}); // end cancel btn click event



});

