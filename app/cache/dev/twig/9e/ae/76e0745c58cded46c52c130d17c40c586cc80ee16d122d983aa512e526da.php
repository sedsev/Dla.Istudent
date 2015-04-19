<?php

/* ::layout.html.twig */
class __TwigTemplate_9eae76e0745c58cded46c52c130d17c40c586cc80ee16d122d983aa512e526da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'prinipal_vue1' => array($this, 'block_prinipal_vue1'),
            'prinipal_vue2' => array($this, 'block_prinipal_vue2'),
            'prinipal_vue3' => array($this, 'block_prinipal_vue3'),
            'prinipal_vue4' => array($this, 'block_prinipal_vue4'),
            'prinipal_vue5' => array($this, 'block_prinipal_vue5'),
            'prinipal_navigation' => array($this, 'block_prinipal_navigation'),
            'slide_diaporama' => array($this, 'block_slide_diaporama'),
            'site_content' => array($this, 'block_site_content'),
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
            <li ";
        // line 21
        $this->displayBlock('prinipal_vue1', $context, $blocks);
        echo "><a href=\"index.html\">Home</a></li>
            <li ";
        // line 22
        $this->displayBlock('prinipal_vue2', $context, $blocks);
        echo "><a href=\"ourwork.html\">Our Work</a></li>
            <li ";
        // line 23
        $this->displayBlock('prinipal_vue3', $context, $blocks);
        echo "><a href=\"testimonials.html\">Testimonials</a></li>
            <li ";
        // line 24
        $this->displayBlock('prinipal_vue4', $context, $blocks);
        echo "><a href=\"projects.html\">Projects</a></li>
            <li ";
        // line 25
        $this->displayBlock('prinipal_vue5', $context, $blocks);
        echo "><a href=\"contact.html\">Contact Us</a></li>
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
\t  ";
        // line 37
        $this->displayBlock('prinipal_navigation', $context, $blocks);
        // line 73
        echo "\t";
        $this->displayBlock('slide_diaporama', $context, $blocks);
        // line 84
        echo "\t 
\t ";
        // line 85
        $this->displayBlock('site_content', $context, $blocks);
        // line 94
        echo "\t</div><!--close site_content-->  \t

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

    // line 21
    public function block_prinipal_vue1($context, array $blocks = array())
    {
        echo "class=\"current\"";
    }

    // line 22
    public function block_prinipal_vue2($context, array $blocks = array())
    {
    }

    // line 23
    public function block_prinipal_vue3($context, array $blocks = array())
    {
    }

    // line 24
    public function block_prinipal_vue4($context, array $blocks = array())
    {
    }

    // line 25
    public function block_prinipal_vue5($context, array $blocks = array())
    {
    }

    // line 37
    public function block_prinipal_navigation($context, array $blocks = array())
    {
        // line 38
        echo "\t  <div class=\"sidebar_container\">       
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
\t";
    }

    // line 73
    public function block_slide_diaporama($context, array $blocks = array())
    {
        // line 74
        echo "      <div class=\"slideshow\">
\t    <ul class=\"slideshow\">
          <li class=\"show\"><img width=\"680\" height=\"450\" src=";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_1.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
          <li><img width=\"680\" height=\"450\" src=";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_2.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_3.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_4.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_5.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
        </ul> 
\t  </div>
\t ";
    }

    // line 85
    public function block_site_content($context, array $blocks = array())
    {
        // line 86
        echo "\t  <div id=\"content\">
        <div class=\"content_item\">
\t\t  <h1>Welcome To Your Website</h1> 
          <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and use it for anything you want (including modifying and amending it). If you wish to remove the &ldquo;website template by Free HTML5 Templates&rdquo;, all I ask is for a donation of &pound;20.00 GBP. Please feel free to contact me with any questions you may have about my free HTML5 website templates or bespoke work.</p>   \t\t
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elit sapien, tempus sit amet hendrerit volutpat, euismod vitae risus. Etiam consequat, sem et vulputate dapibus, diam enim tristique est, vitae porta eros mauris ut orci. Praesent sed velit odio. Ut massa arcu, suscipit viverra molestie at, aliquet a metus. Nullam sit amet tellus dui, ut tincidunt justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis egestas laoreet. Nunc non ipsum metus, non laoreet urna. Vestibulum quis risus quis diam mattis tempus. Vestibulum suscipit pretium tempor. </p>\t  
\t\t</div><!--close content_item-->
      </div><!--close content-->
\t";
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
        return array (  222 => 86,  219 => 85,  211 => 80,  207 => 79,  203 => 78,  199 => 77,  195 => 76,  191 => 74,  188 => 73,  150 => 38,  147 => 37,  142 => 25,  137 => 24,  132 => 23,  127 => 22,  121 => 21,  112 => 105,  108 => 104,  96 => 94,  94 => 85,  91 => 84,  88 => 73,  86 => 37,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  42 => 11,  37 => 9,  27 => 1,);
    }
}
