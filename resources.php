<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Resources | DeafFYI</title>
  <meta name="description" content="Resources to learn American Sign Language and learn more about Deaf Culture. Fill out the form to contact us.">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    
		  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		  <script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
		  type="text/javascript"></script>

		  <style type="text/css">
		  @import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

		  #feedControl {
		  margin-top : 5px;
		  margin-left: 0px;
		  margin-right: 0px;
		  width: 300px;
		  font-size: 10px;
		  color: #000000;
		  }
		  </style>
		  
		  <script type="text/javascript">  
		  function load() {
		  var feed ="http://news.google.com/news?cf=all&hl=en&pz=1&ned=us&q=Deaf&output=rss";
		  new GFdynamicFeedControl(feed, "feedControl");

		  } 
		  google.load("feeds", "1");
		  google.setOnLoadCallback(load);
		  </script>

			  
  
</head>

<body>


<header class="banner">

	<div class="wrapper">

	<div id="banner">
		<div id="wrapper">
			<div id="container">
					<img class="banner-img" src="images/header.png" alt="Deaf FYI Logo"/>
			</div>
		</div>
	</div>
    </div>
	
	
<nav class="primary-menu">
   <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="people.php">Deaf People</a></li>
      <li><a href="signlanguage.php">Sign Language</a></li>
	  <li><a href="etiquette.php">Etiquette</a></li>
	  <li><a href="resources.php">Resources</a></li>
	  
   </ul>
</nav>

   </header>

<main class="main">

<h2>Resources</h2>

<ul>
<li><a href="#websites">Websites to learn ASL. </a></li>
<li><a href="#organizations">Deaf Organizations</a></li>
<li><a href="#contact">Contact Us</a></li>
</ul>


<h3 id="websites">Websites to learn ASL</h3>

<p><a href="http://www.lifeprint.com" target="_blank">Life Print - ASL University</a></p>
<p>American Sign Language University is resource site for ASL students and teachers. Here you will find information 
and resources to help you learn ASL and improve your signing.</p>

<p><a href="https://www.signingsavvy.com" target="_blank">Signing Savvy - ASL Dictionary</a></p>
<p>Signing Savvy is a sign language dictionary containing several thousand high resolution videos of American Sign 
Language (ASL) signs, fingerspelled words, and other common signs used within the United States and Canada.</p>

<p><a href="https://www.startasl.com" target="_blank">Start ASL</a></p>
<p>Start ASL offers free ad-supported courses, inexpensive online course subscriptions, and offline curriculum instant 
downloads as well as options for teachers, homeschoolers, and organizations!</p>


<p><a href="http://www.theaslapp.com" target="_blank">The ASL App</a></p>
<p>Packed with 800+ signs and phrases, easy navigation and features, with different signers, The ASL App is designed to 
make learning easy, accessible, and fun. Start signing today! Available for Apple devices.</p>


<h3 id="organizations">Deaf Organizations</h3>

<p><a href="http://deafchildren.org" target="_blank">American Society for Deaf Children</a></p>
<p><a href="https://nad.org" target="_blank">(NAD) National Association of the Deaf</a></p>
<p><a href="http://rid.org" target="_blank">(RID) Registry of Interpreters for the Deaf</a></p>


<h3 id="contact">Contact Us</h3>
Use the form below to contact us:


			<?php print $formMessage;?>

		<form class="main-form" method="post" action="resources.php" onsubmit="return validateForm()">

		<fieldset>
		 
		  <legend>Personal Information</legend>
			
		<div>
		  <label for="name">Name:</label>
		  <input type="text" id="name" name="name">
		</div>
		  
		<div>  
		  <label for="email">Email:</label>
		  <input type="text" id="email" name="email">
		</div>
		  
		  
		  <fieldset>
		 
			<legend>You identify as:</legend>
			 
		<div>
			<label for="hearing">Hearing</label>
			<input type="radio" name="identity" id="hearing" value="hearing">
		</div>

		<div>
			<label for="deaf">Deaf</label>
			<input type="radio" name="identity" id="deaf" value="deaf">
		</div>

		<div>
			<label for="hardofhearing">Hard of Hearing</label>
			<input type="radio" name="identity" id="hardofhearing" value="hard-of-hearing">
		 </div>
		 
		  </fieldset>
		   
		  <fieldset>
		 
			<legend>Interested in:</legend>

		<div>
			<label for="deafnews">Deaf News</label>
			<input type="checkbox" name="interested[]" id="deafnews" value="deaf-news">
		</div>
		 
		<div>
			<label for="learnasl">Learning ASL</label>
			<input type="checkbox" name="interested[]" id="learnasl" value="learn-asl">
		</div>
		 
		<div>
			<label for="deafevents">Deaf Events</label>
			<input type="checkbox" name="interested[]" id="deafevents" value="deaf-events">
		</div>

		  </fieldset>
		   
		</fieldset> <!-- end of the parent "Personal Information" fieldset -->
		 
		<fieldset>
		 
		  <legend>Other Important Stuff</legend>

		<div>
		  <label for="newsletter">Subscribe to newsletter?</label>
		  <select name="newsletter" id="newsletter">
			<option value="no">No</option>
			<option value="yes">Yes</option>
		  </select>
		</div>

		<div> 
		  <label for="comments">Comments</label>
		  <br>
		  <textarea name="comments" id="comments"></textarea>
		</div> 

		</fieldset>
		 
		<input type="submit" value="submit">
		</form>


</main>


<aside class="sidebar">

	<h3> Deaf News </h3>

	<div id="body">
	<div id="feedControl">Loading...</div>
	</div>
		
</aside>

<footer class="site-footer">
 
<?php include('includes/footer.php');?>
 
</footer>

<script> printDate(); </script>

</body>
</html>
