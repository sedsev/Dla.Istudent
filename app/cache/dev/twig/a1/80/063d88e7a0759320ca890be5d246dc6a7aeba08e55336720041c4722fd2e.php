<?php

/* DlaIstudentUserBundle:Student:viewStudent.html.twig */
class __TwigTemplate_a180063d88e7a0759320ca890be5d246dc6a7aeba08e55336720041c4722fd2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DlaIstudentUserBundle::template.html.twig");

        $this->blocks = array(
            'prinipal_navigation' => array($this, 'block_prinipal_navigation'),
            'site_content' => array($this, 'block_site_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DlaIstudentUserBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_prinipal_navigation($context, array $blocks = array())
    {
        echo "bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "cycle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "level"), "html", null, true);
    }

    // line 3
    public function block_site_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "matricule"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "DlaIstudentUserBundle:Student:viewStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  38 => 3,  29 => 2,);
    }
}
