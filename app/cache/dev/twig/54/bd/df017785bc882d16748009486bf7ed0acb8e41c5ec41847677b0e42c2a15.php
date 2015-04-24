<?php

/* DlaIstudentUserBundle:Student:registerStudent.html.twig */
class __TwigTemplate_54bddf017785bc882d16748009486bf7ed0acb8e41c5ec41847677b0e42c2a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DlaIstudentUserBundle::template.html.twig");

        $this->blocks = array(
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
    public function block_site_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"well\" sytle=\"margin-top: 10px\">
        <form class=\"well-lg center-block col-lg-6\" method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <legend>Register</legend>
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\"/>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "DlaIstudentUserBundle:Student:registerStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
