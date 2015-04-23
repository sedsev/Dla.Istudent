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
            'navigation1' => array($this, 'block_navigation1'),
            'navigation2' => array($this, 'block_navigation2'),
            'navigation3' => array($this, 'block_navigation3'),
            'navigation4' => array($this, 'block_navigation4'),
            'navigation5' => array($this, 'block_navigation5'),
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
  <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type=\"text/javascript\" src=";
        // line 12
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
        // line 22
        $this->displayBlock('prinipal_vue1', $context, $blocks);
        echo "><a href=\"index.html\">Home</a></li>
            <li ";
        // line 23
        $this->displayBlock('prinipal_vue2', $context, $blocks);
        echo "><a href=\"ourwork.html\">Our Work</a></li>
            <li ";
        // line 24
        $this->displayBlock('prinipal_vue3', $context, $blocks);
        echo "><a href=\"testimonials.html\">Testimonials</a></li>
            <li ";
        // line 25
        $this->displayBlock('prinipal_vue4', $context, $blocks);
        echo "><a href=\"projects.html\">Projects</a></li>
            <li ";
        // line 26
        $this->displayBlock('prinipal_vue5', $context, $blocks);
        echo "><a href=\"contact.html\">Contact Us</a></li>
          </ul>
\t\t</div><!--close menubar-->\t
      </nav>
\t  <div id=\"strapline\">
\t    <div id=\"welcome_slogan\">
\t      <h3>Bienvennue sur <span> dla-istudent.cm</span></h3>
\t    </div><!--close welcome_slogan-->
      </div><!--close strapline-->    
\t</header>
\t<div id=\"site_content\">
            ";
        // line 37
        $this->displayBlock('prinipal_navigation', $context, $blocks);
        // line 83
        echo "\t";
        $this->displayBlock('slide_diaporama', $context, $blocks);
        // line 94
        echo "\t 
\t ";
        // line 95
        $this->displayBlock('site_content', $context, $blocks);
        // line 104
        echo "\t</div><!--close site_content-->  \t

    <footer>
\t  <a href=\"index.html\">Home</a> | <a href=\"ourwork.html\">Our Work</a> | <a href=\"testimonials.html\">Testimonials</a> | <a href=\"projects.html\">Projects</a> | <a href=\"contact.html\">Contact</a><br/><br/>
\t  <a href=\"http://fotogrph.com\">Images</a> | website template by <a href=\"http://www.freehtml5templates.co.uk\">Free HTML5 Templates</a>
    </footer>
\t
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type=\"text/javascript\" src=";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "></script>
  <script type=\"text/javascript\" src=";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/image_slide.js"), "html", null, true);
        echo "></script>
  
</body>
</html>
";
    }

    // line 22
    public function block_prinipal_vue1($context, array $blocks = array())
    {
        echo "class=\"current\"";
    }

    // line 23
    public function block_prinipal_vue2($context, array $blocks = array())
    {
    }

    // line 24
    public function block_prinipal_vue3($context, array $blocks = array())
    {
    }

    // line 25
    public function block_prinipal_vue4($context, array $blocks = array())
    {
    }

    // line 26
    public function block_prinipal_vue5($context, array $blocks = array())
    {
    }

    // line 37
    public function block_prinipal_navigation($context, array $blocks = array())
    {
        // line 38
        echo "\t  <div class=\"sidebar_container\">
            ";
        // line 39
        $this->displayBlock('navigation1', $context, $blocks);
        // line 47
        echo "            ";
        $this->displayBlock('navigation2', $context, $blocks);
        // line 56
        echo "        ";
        $this->displayBlock('navigation3', $context, $blocks);
        // line 64
        echo "        ";
        $this->displayBlock('navigation4', $context, $blocks);
        // line 72
        echo "        ";
        $this->displayBlock('navigation5', $context, $blocks);
        // line 81
        echo "       </div><!--close sidebar_container-->
       ";
    }

    // line 39
    public function block_navigation1($context, array $blocks = array())
    {
        // line 40
        echo "\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2></h2>
            <p></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
            ";
    }

    // line 47
    public function block_navigation2($context, array $blocks = array())
    {
        // line 48
        echo "\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2></h2>
            <h3></h3>
            <p></p>         
\t\t  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        ";
    }

    // line 56
    public function block_navigation3($context, array $blocks = array())
    {
        // line 57
        echo "\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h3></h3>
            <p></p>         
\t\t  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        ";
    }

    // line 64
    public function block_navigation4($context, array $blocks = array())
    {
        // line 65
        echo "\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h3></h3>
            <p></p>         
\t\t  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        ";
    }

    // line 72
    public function block_navigation5($context, array $blocks = array())
    {
        // line 73
        echo "        <div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2></h2>
            <p></p>
            <p><a href=\"mailto:info@youremail.co.uk\"></a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        ";
    }

    // line 83
    public function block_slide_diaporama($context, array $blocks = array())
    {
        // line 84
        echo "      <div class=\"slideshow\">
\t    <ul class=\"slideshow\">
          <li class=\"show\"><img width=\"680\" height=\"450\" src=";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_1.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
          <li><img width=\"680\" height=\"450\" src=";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_2.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_3.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_4.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
\t\t  <li><img width=\"680\" height=\"450\" src=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home_5.jpg"), "html", null, true);
        echo " alt=\"&quot;Enter your caption here&quot;\" /></li>
        </ul> 
\t  </div>
\t ";
    }

    // line 95
    public function block_site_content($context, array $blocks = array())
    {
        // line 96
        echo "\t  <div id=\"content\">
        <div class=\"content_item\">
\t\t  <h1></h1> 
          <p></p>   \t\t
\t\t  <p> </p>\t  
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
        return array (  281 => 96,  278 => 95,  270 => 90,  266 => 89,  262 => 88,  258 => 87,  254 => 86,  250 => 84,  247 => 83,  236 => 73,  233 => 72,  223 => 65,  220 => 64,  210 => 57,  207 => 56,  196 => 48,  193 => 47,  183 => 40,  180 => 39,  175 => 81,  172 => 72,  169 => 64,  166 => 56,  163 => 47,  161 => 39,  158 => 38,  155 => 37,  150 => 26,  145 => 25,  140 => 24,  135 => 23,  129 => 22,  120 => 115,  116 => 114,  104 => 104,  102 => 95,  99 => 94,  96 => 83,  94 => 37,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  51 => 12,  46 => 10,  42 => 9,  32 => 1,);
    }
}
