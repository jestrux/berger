<?php include 'includes/templates/header.php'; ?>    
	<div id="aboutPage">
	    <div class="banner">
	        <div class="container layout vertical center-justified">
	            <h1>ABOUT US</h1>
	            <p>
	                Here's more about us, who we are, what it is we do and how we do it.
	            </p>
	        </div>
	    </div>

	    <div id="companyBackground" class="container">
	    	<div class="layout">
	    		<div class="potrait-image"></div>
	    		<div class="flex">
	    			<h2>More than just the colour</h2>
	    			<p>
	    				The paint choice could make all the difference on where it is applied or completely ruin the look if special attention isn't observed. Work with us, we'll make sure you get paired with the correct paint for your purpose surface and intention to make sure whatever you're working on has a very professional looking finish.
	    			</p>
	    		</div>
	    	</div>
	    </div>

	    <div id="whatWeDo">
	    	<div class="container">
	    		<h2>What we do</h2>
	    		<p>
	    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eveniet, neque harum voluptas rem et aspernatur deleniti omnis dicta ut, sed nisi qui eius, odit? But we mostly deal with
	    		</p>

	    		<ul>
	    			<li>adipisicing elit. Dignissimos quae omnis, pariatur</li>
	    			<li>ex vel aliquam magnam? Reprehenderit quaerat molestias.</li>
	    			<li>Repudiandae unde! Voluptates in dicta id accusantium.</li>
	    		</ul>
	    	</div>
	    </div>
	</div>

	<div id="meetTheTeam" class="text-center">
        <h1 class="section-title">
            Meet the team
        </h1>

        <div class="container">
            <div id="teamMembers" class="layout wrap">
                <?php
	                for ($i=0; $i < 4; $i++) { 
	                    echo '
	                        <div class="team-member layout">
	                            <div class="image"></div>
	                            <div class="text">
	                            	<h3>Person Name</h3>
	                            	<h5>Their role</h5>
	                            	<p>
	                            		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eveniet, neque harum voluptas
	                            	</p>
	                            </div>
	                        </div>
	                    ';
	                }
	            ?>
            </div>
        </div>
    </div>

<?php include 'includes/templates/footer.php'; ?>        
