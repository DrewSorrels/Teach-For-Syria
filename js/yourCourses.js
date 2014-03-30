<<<<<<< HEAD
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
		$("#courses").append('<div class="col-md-3"><input type="text" value="Title"></input><textarea type="text">Description</textarea><button class="cancel">Cancel</button><button class="save">Save</button></div>');
	});

	$('#courses > div').each(function(){
		var title = $(this).find('input').val();
		var desc = $(this).find('textarea').val();
		$(this).data({ title: title, desc: desc });
	});

	$('#courses').on('click', 'div > button.save', function(){
		$(this).parent().data({
    		title: $(this).siblings('input').val(),
    		desc: $(this).siblings('textarea').val()
  		});
	});

	$('#courses').on('click', 'div > button.cancel', function(){
		var title = $(this).parent().data('title');
  		var desc = $(this).parent().data('desc');
  		$(this).siblings('input').val(title);
  		$(this).siblings('textarea').val(desc);
	});
/*
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
  		//$(this).siblings("a").css("display", "inline-block");
	});	// end title/desc click event




	$(".save").on("click", function(e){
  		e.preventDefault();
  		
  		$('#courses > div').each(function(){
  		var titleval = $(this).prevAll(".onefield:first").val();
  		var descval  = $(this).prevAll(".textfield:first").val();

  		var titlecontainer = $(this).siblings(".title");
  		var desccontainer  = $(this).siblings(".desc");

  		titlecontainer.html(titleval).css("display", "block");
  		desccontainer.html(descval).css("display", "block");


  		$(this).find(".onefield").css("display", "none");
  		$(this).find(".textfield").css("display", "none");

  		});
	}); // end save btn click event

	$(".cancel").on("click", function(e){
		e.preventDefault();

		$('#courses > div').each(function(){
  		var titlecontainer = $(this).siblings(".title");
  		var desccontainer  = $(this).siblings(".desc");

  		titlecontainer.css("display", "block");
  		desccontainer.css("display", "block");

  		$(this).prevAll(".onefield:first").val(titlecontainer.html()).css("display", "none");
  		$(this).prevAll(".textfield:first").val(desccontainer.html()).css("display", "none");		
  		$(this).prev(".save").css("display", "none");
  		$(this).css("display", "none");
  	});
}); // end cancel btn click event
*/



});

=======
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
		$("#courses").append('<div class="col-md-3"><input type="text" value="Title"></input><textarea type="text">Description</textarea><button class="cancel">Cancel</button><button class="save">Save</button></div>');
	});

	$('#courses > div').each(function(){
		var title = $(this).find('input').val();
		var desc = $(this).find('textarea').val();
		$(this).data({ title: title, desc: desc });
	});

	$('#courses').on('click', 'div > button.save', function(){
		$(this).parent().data({
    		title: $(this).siblings('input').val(),
    		desc: $(this).siblings('textarea').val()
  		});


	<?
		include('db_connect.php');

		if($_POST['title'])
		{
 		$title = $_POST['title'];
 		$title = mysql_escape_string($title);
 		$query = "INSERT INTO tz_navbar (name) VALUES ('".$name."')";
		$result = mysql_query("$query") or die ("5");

		}

	?>

	});

	$('#courses').on('click', 'div > button.cancel', function(){
		var title = $(this).parent().data('title');
  		var desc = $(this).parent().data('desc');
  		$(this).siblings('input').val(title);
  		$(this).siblings('textarea').val(desc);
	});



});

>>>>>>> 3f2d4cb7f4a73c9c3b661ddb4fd67d959ab691fb
