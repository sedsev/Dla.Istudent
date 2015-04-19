<?php

/* ::layout.html.twig */
class __TwigTemplate_9eae76e0745c58cded46c52c130d17c40c586cc80ee16d122d983aa512e526da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html> 
<html>

<head>
  <title>dla-istudent.cm</title>
  <meta name=\"description\" content=\"iut student site\" />
  <meta name=\"keywords\" content=\"iut student site, dla istudent\" />
  <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo " />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type=\"text/javascript\" src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-1.5.min.js"), "html", null, true);
        echo "></script>
</head>

<body>
  <div id=\"main\">\t\t

    <header>
\t  <nav>
\t\t<div id=\"menubar\">
          <ul id=\"nav\">
            <li { %block prinipal_vue1 %}class=\"current\"{ %end block% }><a href=\"index.html\">Home</a></li>
            <li { %block prinipal_vue1 %}{ %end block% }><a href=\"ourwork.html\">Our Work</a></li>
            <li { %block prinipal_vue1 %}{ %end block% }><a href=\"testimonials.html\">Testimonials</a></li>
            <li { %block prinipal_vue1 %}{ %end block% }><a href=\"projects.html\">Projects</a></li>
            <li { %block prinipal_vue1 %}{ %end block% }><a href=\"contact.html\">Contact Us</a></li>
          </ul>
\t\t</div><!--close menubar-->\t
      </nav>
\t  <div id=\"strapline\">
\t    <div id=\"welcome_slogan\">
\t      <h3>Welcome To Free HTML5 <span>Audio</span></h3>
\t    </div><!--close welcome_slogan-->
      </div><!--close strapline-->    
\t</header>
    
\t<div id=\"site_content\">\t\t
\t  { %block prinipal_navigation %}
\t  <div class=\"sidebar_container\">       
\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     \t\t
\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2>Latest Update</h2>
            <h3>February 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
\t\t  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->\t\t
\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h3>January 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
\t\t  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h3>December 2012</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
\t\t  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  \t\t
        <div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href=\"mailto:info@youremail.co.uk\">info@youremail.co.uk</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->\t
\t{ %end block% }
\t{ %block slide_diaporama %}
      <div class=\"slideshow\">
\t    <ul class=\"slideshow\">
          <li class=\"show\"><img width=\"680\" height=\"450\" src=\"images/home_1.jpg\" alt=\"&quot;Enter your caption here&quot;\" /></li>
          <li><img width=\"680\" height=\"450\" src=\"images/home_2.jpg\" alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=\"images/home_3.jpg\" alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=\"images/home_4.jpg\" alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=\"images/home_5.jpg\" alt=\"&quot;Enter your caption here&quot;\" /></li>
        </ul> 
\t  </div>
\t { %end block% }
\t 
\t { %block site_content %}
\t  <div id=\"content\">
        <div class=\"content_item\">
\t\t  <h1>Welcome To Your Website</h1> 
          <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and use it for anything you want (including modifying and amending it). If you wish to remove the &ldquo;website template by Free HTML5 Templates&rdquo;, all I ask is for a donation of &pound;20.00 GBP. Please feel free to contact me with any questions you may have about my free HTML5 website templates or bespoke work.</p>   \t\t
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elit sapien, tempus sit amet hendrerit volutpat, euismod vitae risus. Etiam consequat, sem et vulputate dapibus, diam enim tristique est, vitae porta eros mauris ut orci. Praesent sed velit odio. Ut massa arcu, suscipit viverra molestie at, aliquet a metus. Nullam sit amet tellus dui, ut tincidunt justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis egestas laoreet. Nunc non ipsum metus, non laoreet urna. Vestibulum quis risus quis diam mattis tempus. Vestibulum suscipit pretium tempor. </p>\t  
\t\t</div><!--close content_item-->
      </div><!--close content-->
\t{ %end block% }
\t</div><!--close site_content-->  \t

    <footer>
\t  <a href=\"index.html\">Home</a> | <a href=\"ourwork.html\">Our Work</a> | <a href=\"testimonials.html\">Testimonials</a> | <a href=\"projects.html\">Projects</a> | <a href=\"contact.html\">Contact</a><br/><br/>
\t  <a href=\"http://fotogrph.com\">Images</a> | website template by <a href=\"http://www.freehtml5templates.co.uk\">Free HTML5 Templates</a>
    </footer>
\t
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type=\"text/javascript\" src=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "></script>
  <script type=\"text/javascript\" src=";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/image_slide.js"), "html", null, true);
        echo "></script>
  
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 105,  130 => 104,  34 => 11,  29 => 9,  19 => 1,);
    }
}
