<?php

/* AvroCsvBundle::layout.html.twig */
class __TwigTemplate_1410c9f4f231aa3cefa0a136670693492fed341fdade98a7199508dc61b8c4ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo " 
  ";
        // line 9
        echo "
 
  ";
        // line 12
        echo "  ";
        $this->displayBlock('intern_body', $context, $blocks);
        // line 15
        echo " 
";
    }

    // line 12
    public function block_intern_body($context, array $blocks = array())
    {
        // line 13
        echo " 
  ";
    }

    public function getTemplateName()
    {
        return "AvroCsvBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  58 => 12,  53 => 15,  50 => 12,  46 => 9,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
