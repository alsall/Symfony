<?php

/* PnpcScopsBundle:Scops:upload.html.twig */
class __TwigTemplate_b044960c38627cb39e8845a16f5e5092e00904a7d6195ed3536c512d8ae5e3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcScopsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PnpcScopsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Liste des Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 8
        echo "<h5>Soumettre un fichier</h5>

<form action=\"#\" method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

    <input type=\"submit\" value=\"Envoyer\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  20 => 1,  431 => 217,  343 => 131,  338 => 129,  326 => 121,  319 => 117,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 70,  178 => 66,  174 => 65,  170 => 64,  146 => 52,  197 => 69,  150 => 53,  84 => 48,  58 => 18,  165 => 61,  161 => 58,  152 => 57,  124 => 8,  118 => 6,  90 => 48,  76 => 31,  127 => 45,  97 => 31,  81 => 26,  77 => 25,  70 => 33,  53 => 9,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 55,  132 => 51,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 76,  143 => 67,  135 => 47,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  201 => 92,  196 => 72,  183 => 82,  171 => 65,  166 => 64,  163 => 62,  158 => 67,  156 => 66,  151 => 51,  142 => 43,  138 => 49,  136 => 56,  121 => 47,  117 => 44,  105 => 33,  91 => 30,  62 => 19,  49 => 13,  94 => 43,  89 => 43,  85 => 25,  75 => 17,  68 => 23,  56 => 9,  38 => 5,  26 => 6,  87 => 47,  31 => 3,  21 => 2,  28 => 5,  24 => 4,  25 => 3,  19 => 1,  93 => 44,  88 => 49,  78 => 21,  46 => 10,  44 => 8,  27 => 4,  79 => 28,  72 => 46,  69 => 23,  47 => 11,  40 => 5,  37 => 10,  22 => 2,  246 => 89,  157 => 59,  145 => 44,  139 => 48,  131 => 46,  123 => 58,  120 => 41,  115 => 56,  111 => 55,  108 => 38,  101 => 32,  98 => 31,  96 => 45,  83 => 35,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 11,  43 => 6,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 67,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 57,  154 => 54,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 61,  125 => 44,  122 => 63,  116 => 40,  112 => 39,  109 => 56,  106 => 36,  103 => 53,  99 => 32,  95 => 50,  92 => 49,  86 => 24,  82 => 22,  80 => 23,  73 => 24,  64 => 28,  60 => 18,  57 => 12,  54 => 15,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 8,  33 => 4,  30 => 2,);
    }
}
