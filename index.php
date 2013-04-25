<?php include("includes/_header.php"); ?>

    <section role="main">
    	<h1>About this project</h1>
    	<p>Welcome to SNACSS! A responsive, boilerplate/bootstrap for your rapid protopying needs. SNACSS was created on a simple concept, I wanted to have a starter package available to me that would allow me the flexibility of extending granular elements without dependecies or restrictions that I've seen on other Front End frameworks available today. Now I understand that there are some very popular frameworks available to the public and you might ask what makes SNACSS so different? Well the answer it's not very different BUT SNACSS was built with OOP concepts and makes ease of use for rapid protopyping a breeze. How might you ask? I setup particular functions that gather HSL data and alter the color scheme for you based on three variable changes. That's pretty cool! What else? Well SNACSS will spit that css out for you and allow you to import into your site, just use the documentation to find some hidden gems. Well hot damn! That's exciting! I know! Anything else? Well yes there is, I've always struggled with getting concepts across in this responsive age and well as trying to find ways to reduce the time consuming process of making style guides for each site. SNACSS offers a pre-defined style guide that you can download and print or share with co-workers that allow them to see first hand what they will actually be working with in the browser. I love eliminating steps, don't you? Sure you do.</p>
        <p>SNACSS is currently in a non-release candidate form. I have a milestone that change that real soon. If you've come across this site, please check out what you see and if you have any feedback, you can fork this project on  <a href=""><i class="icon-github"></i>Github</a> and provide feedback to me directly through email, <a href="">http://www.stylyy.com/contact/</a></p>
        <h2>Getting Started</h2>
        <?php include("includes/elements/_getstarted.html"); ?>
        <h2>Style Guide <span class="print-sg"><i class="icon-save"></i>Print Me</span></h2>
        <?php include("includes/elements/_styleguide.html"); ?>
        <h2>Scaffolding</h2>
        <h3>Layouts</h3>
        <?php include("includes/elements/_layout.html"); ?>
        <h3>Grid</h3>
        <?php include("includes/elements/_grid.html"); ?>
        <h2>Forms</h2>
        <?php include("includes/elements/_forms.html"); ?>
        <h2>Typography</h2>
        <?php include("includes/elements/_typography.html"); ?>
        
    </section>

<?php include("includes/_footer.php"); ?>


