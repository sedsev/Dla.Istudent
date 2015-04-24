<?php

/* DlaIstudentWelcomeBundle:Welcome:index.html.twig */
class __TwigTemplate_b34f330135b0836fe62bd10c2fb4a466671c4faf280523f5de44d71cabab17fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DlaIstudentWelcomeBundle::template.html.twig");

        $this->blocks = array(
            'prinipal_vue1' => array($this, 'block_prinipal_vue1'),
            'title_navigation1' => array($this, 'block_title_navigation1'),
            'content_navigation1' => array($this, 'block_content_navigation1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DlaIstudentWelcomeBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_prinipal_vue1($context, array $blocks = array())
    {
        echo "class=\"current\"";
    }

    // line 3
    public function block_title_navigation1($context, array $blocks = array())
    {
        echo "Explore";
    }

    // line 4
    public function block_content_navigation1($context, array $blocks = array())
    {
        // line 5
        echo "    <ul>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("dla_istudent_user_homepage");
        echo "\">new account</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "DlaIstudentWelcomeBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
