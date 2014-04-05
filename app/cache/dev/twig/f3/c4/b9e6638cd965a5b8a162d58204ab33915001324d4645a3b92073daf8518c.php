<?php

/* PnpcScopsBundle::layout.html.twig */
class __TwigTemplate_f3c4b9e6638cd965a5b8a162d58204ab33915001324d4645a3b92073daf8518c extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 10
        echo "
 
  ";
        // line 13
        echo "  ";
        $this->displayBlock('intern_body', $context, $blocks);
        // line 16
        echo " 
";
    }

    // line 13
    public function block_intern_body($context, array $blocks = array())
    {
        // line 14
        echo " 
  ";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  58 => 13,  50 => 13,  46 => 10,  324 => 116,  317 => 112,  306 => 104,  302 => 103,  298 => 102,  294 => 101,  288 => 98,  284 => 97,  280 => 96,  276 => 95,  270 => 92,  266 => 91,  262 => 90,  258 => 89,  252 => 86,  248 => 85,  244 => 84,  240 => 83,  234 => 80,  230 => 79,  226 => 78,  222 => 77,  216 => 74,  212 => 73,  208 => 72,  204 => 71,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  180 => 62,  176 => 61,  172 => 60,  168 => 59,  159 => 53,  155 => 52,  151 => 51,  147 => 50,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  64 => 18,  60 => 17,  56 => 14,  53 => 16,  47 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
