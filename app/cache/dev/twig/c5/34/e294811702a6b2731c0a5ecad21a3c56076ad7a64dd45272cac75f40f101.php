<?php

/* DlaIstudentUserBundle::template.html.twig */
class __TwigTemplate_c534e294811702a6b2731c0a5ecad21a3c56076ad7a64dd45272cac75f40f101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'prinipal_navigation' => array($this, 'block_prinipal_navigation'),
            'slide_diaporama' => array($this, 'block_slide_diaporama'),
            'site_content' => array($this, 'block_site_content'),
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
    }

    // line 3
    public function block_slide_diaporama($context, array $blocks = array())
    {
    }

    // line 4
    public function block_site_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DlaIstudentUserBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  35 => 3,  30 => 2,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
