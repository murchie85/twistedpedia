<?php  session_start(); ?>	
<!DOCTYPE html>
<html>

<head>
		<title>Twistedpedia</title>
		<meta name = "vieport" content = "width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/bob.css" rel = "stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
               
</head>


 
<body>

		<div class = "navbar navbar-inverse navbar-static-top" >

			<div class = "container">
					<h3 class="navhead"><a class = "personal"href = "#"></a></h3>
			   <div class = "">
					<a href = "#" class = "navbar-brand"> </a>		
					<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"> </span>
					<span class = "icon-bar"> </span>
					<span class = "icon-bar"> </span>					
					</button>
				
							<div class ="collapse navbar-collapse navHeaderCollapse">
								 			
													<ul  class = "nav navbar-nav navbar-right">
													</br>
														    <li class = "active"><a href = "#">Home</a></li>
															<li class = "tog"><a href = "postjoke.php">post joke </a></li>
															<li><a href = "#">pics</a></li>		
															<li><a href = "login.php">log in</a></li>
													</ul>							
			
							</div>
					</div>
		
				</div>
		</div>
		
		
		
<div class="shell">


   <div class="leftshell">
    <?php  require 'loadjokes.php'; ?>	

<?php			

for($x = 10;$x < 20; $x++)
{
echo  '<div class="jokes"> <p>' . $joke1[$x] . '</p><p class="meta"> 
			<div class="voting_wrapper" id=' . $joke_index[$x] . ' >
            <div class="voting_btn">
                <div class="up_button">&nbsp;</div><span class="up_votes">0</span>
            </div>
            <div class="voting_btn">
                <div class="down_button">&nbsp;</div><span class="down_votes">0</span>
            </div>
        </div> 
uploader <a style=color:blue;>' . $uploader[$x] . '</a> date: <a style=color:blue;>'
 . $joke_date[$x] . '</a> <p/> </div>';
 
}
?>	
	
		
		
   </div>
  

   
   
  <div class="rightshell">
    <?php error_reporting(0); require 'loadjokes.php'; ?>	
	
	
<!-- COUNT JOKES -->		
<?php			
error_reporting(0);
for($x = 0;$x < 10; $x++)
{
echo  '<div class="jokes"> <p>' . $joke1[$x] . '</p><p class="meta"> 
			<div class="voting_wrapper" id=' . $joke_index[$x] . ' >
            <div class="voting_btn">
                <div class="up_button">&nbsp;</div><span class="up_votes">0</span>
            </div>
            <div class="voting_btn">
                <div class="down_button">&nbsp;</div><span class="down_votes">0</span>
            </div>
        </div> 
uploader <a style=color:blue;>' . $uploader[$x] . '</a> date: <a style=color:blue;>'
 . $joke_date[$x] . '</a> <p/> </div>';
 
}
?>		
				
		

	
	
   </div>
   
</div>
<div style="clear:both"></div>
</body>

<footer>

			<p> copyright &copy; probably bored 2016 <br /> fuck your mum 
			<a style=color:black href = "logout.php">log out</a></li></p>
			
			
<script src = "http://ajax.googleapis.com/ajax/libs/1.10.2/jquery.min.js"></script> 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>﻿
<script type="text/javascript" src="js/bootstrap.min.js"></script>﻿	
<script src = "js/bootstrap.js"></script> 	

</footer>
</html>




<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Voting Page</title>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	//####### on page load, retrive votes for each content
	$.each( $('.voting_wrapper'), function(){
		
		//retrive unique id from this voting_wrapper element
		var unique_id = $(this).attr("id");
		
		//prepare post content
		post_data = {'unique_id':unique_id, 'vote':'fetch'};
		
		//send our data to "vote_process.php" using jQuery $.post()
		$.post('vote_process.php', post_data,  function(response) {
		
				//retrive votes from server, replace each vote count text
				$('#'+unique_id+' .up_votes').text(response.vote_up); 
				$('#'+unique_id+' .down_votes').text(response.vote_down);
			},'json');
	});

	
	
	//####### on button click, get user vote and send it to vote_process.php using jQuery $.post().
	$(".voting_wrapper .voting_btn").click(function (e) {
	 	
		//get class name (down_button / up_button) of clicked element
		var clicked_button = $(this).children().attr('class');
		
		//get unique ID from voted parent element
		var unique_id 	= $(this).parent().attr("id"); 
		
		if(clicked_button==='down_button') //user disliked the content
		{
			//prepare post content
			post_data = {'unique_id':unique_id, 'vote':'down'};
			
			//send our data to "vote_process.php" using jQuery $.post()
			$.post('vote_process.php', post_data, function(data) {
				
				//replace vote down count text with new values
				$('#'+unique_id+' .down_votes').text(data);
				
				//thank user for the dislike
				alert("Thanks! :ets hope the joke is shit and not your humor");
				
			}).fail(function(err) { 
			
			//alert user about the HTTP server error
			alert(err.statusText); 
			});
		}
		else if(clicked_button==='up_button') //user liked the content
		{
			//prepare post content
			post_data = {'unique_id':unique_id, 'vote':'up'};
			
			//send our data to "vote_process.php" using jQuery $.post()
			$.post('vote_process.php', post_data, function(data) {
			
				//replace vote up count text with new values
				$('#'+unique_id+' .up_votes').text(data);
				
				//thank user for liking the content
				alert("A vote for me is a vote for HIV");
			}).fail(function(err) { 
			
			//alert user about the HTTP server error
			alert(err.statusText); 
			});
		}
		
	});
	//end 
	
	
	
});


</script>
<style type="text/css">
<!--
.content_wrapper{width:500px;margin-right:auto;margin-left:auto;}
;}

/*voting style */
.voting_wrapper {display:inline-block;margin-left: 20px;}
.voting_wrapper .down_button {background: url(images/thumbs.png) no-repeat;float: left;height: 14px;width: 16px;cursor:pointer;margin-top: 3px;}
.voting_wrapper .down_button:hover {background: url(images/thumbs.png) no-repeat 0px -16px;}
.voting_wrapper .up_button {background: url(images/thumbs.png) no-repeat -16px 0px;float: left;height: 14px;width: 16px;cursor:pointer;}
.voting_wrapper .up_button:hover{background: url(images/thumbs.png) no-repeat -16px -16px;;}
.voting_btn{float:left;margin-right:5px;}
.voting_btn span{font-size: 11px;float: left;margin-left: 3px;}

-->
</style>
</head>
	