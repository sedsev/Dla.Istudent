<?php

/* DlaIstudentWelcomeBundle::index.html.twig */
class __TwigTemplate_a48a6e3c21b3e9efa34a9d0752d3cb75ddea240c1436f245c54640e88d33ec3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'prinipal_navigation' => array($this, 'block_prinipal_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_prinipal_navigation($context, array $blocks = array())
    {
        // line 3
        echo "\t  <div class=\"sidebar_container\">       
\t\t<div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2>Account</h2>
            <p><a href=\"#\">create a new student account</a>. Please have a look around, any feedback is much appreciated.</p>
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

    public function getTemplateName()
    {
        return "DlaIstudentWelcomeBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
