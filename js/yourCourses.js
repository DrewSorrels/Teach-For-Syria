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
		var oldTitle = $(this).parent().data('title');
		var oldDesc = $(this).parent().data('desc');
		$(this).parent().data({
    		title: $(this).siblings('input').val(),
    		desc: $(this).siblings('textarea').val()
  		});

		$.ajax({
			type: "POST",
			url: "../php/process.php",
			data: $(this).parent().find('input, textarea').serialize(),
		 
		success: function(msg){
		if(parseInt(msg)!=5)
		{
    		
			$('#loading').css('visibility','hidden');
    		alert('success');//testing purposes
   		}
		else
		{
    		$('#loading').css('visibility','hidden');
    		alert('fail');//testing purposes
		}
		}


		});


	});

	$('#courses').on('click', 'div > button.cancel', function(){
		var title = $(this).parent().data('title');
  		var desc = $(this).parent().data('desc');
  		$(this).siblings('input').val(title);
  		$(this).siblings('textarea').val(desc);
	});



});
