<?php

/* DlaIstudentWelcomeBundle::template.html.twig */
class __TwigTemplate_655aeac57d8e57c4a8bb4f47a4d5120f896734809bd2cac302b8937bb2296243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'prinipal_navigation' => array($this, 'block_prinipal_navigation'),
            'navigation1' => array($this, 'block_navigation1'),
            'title_navigation1' => array($this, 'block_title_navigation1'),
            'content_navigation1' => array($this, 'block_content_navigation1'),
            'navigation2' => array($this, 'block_navigation2'),
            'navigation3' => array($this, 'block_navigation3'),
            'navigation4' => array($this, 'block_navigation4'),
            'navigation5' => array($this, 'block_navigation5'),
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
        echo "    <div class=\"sidebar_container\">
    ";
        // line 4
        $this->displayBlock('navigation1', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('navigation2', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('navigation3', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('navigation4', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('navigation5', $context, $blocks);
        // line 16
        echo "    </div><!--close sidebar_container-->
";
    }

    // line 4
    public function block_navigation1($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"sidebar\">
          <div class=\"sidebar_item\">
            <h2>";
        // line 7
        $this->displayBlock('title_navigation1', $context, $blocks);
        echo "</h2>
            <p>";
        // line 8
        $this->displayBlock('content_navigation1', $context, $blocks);
        echo "</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
    ";
    }

    // line 7
    public function block_title_navigation1($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content_navigation1($context, array $blocks = array())
    {
    }

    // line 12
    public function block_navigation2($context, array $blocks = array())
    {
    }

    // line 13
    public function block_navigation3($context, array $blocks = array())
    {
    }

    // line 14
    public function block_navigation4($context, array $blocks = array())
    {
    }

    // line 15
    public function block_navigation5($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DlaIstudentWelcomeBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 15,  99 => 14,  94 => 13,  89 => 12,  84 => 8,  79 => 7,  71 => 8,  67 => 7,  63 => 5,  60 => 4,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  41 => 4,  38 => 3,  35 => 2,  29 => 2,);
    }
}
