<?php

/* DlaIstudentWelcomeBundle:Welcome:index.html.twig */
class __TwigTemplate_b34f330135b0836fe62bd10c2fb4a466671c4faf280523f5de44d71cabab17fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DlaIstudentWelcomeBundle::index.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "DlaIstudentWelcomeBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
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
        return array ();
    }
}
