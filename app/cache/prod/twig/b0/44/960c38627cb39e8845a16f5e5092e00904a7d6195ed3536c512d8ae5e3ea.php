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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo ">
    ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
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
        return array (  20 => 1,  379 => 116,  371 => 112,  354 => 103,  349 => 102,  337 => 98,  332 => 97,  322 => 95,  315 => 92,  310 => 91,  305 => 90,  300 => 89,  288 => 85,  283 => 84,  278 => 83,  266 => 79,  244 => 73,  234 => 71,  217 => 66,  212 => 65,  200 => 61,  190 => 59,  175 => 52,  170 => 51,  165 => 50,  99 => 28,  87 => 24,  82 => 23,  199 => 66,  185 => 65,  95 => 30,  188 => 83,  174 => 76,  168 => 73,  156 => 67,  132 => 58,  42 => 8,  214 => 102,  210 => 101,  205 => 62,  184 => 8,  169 => 98,  151 => 65,  123 => 71,  119 => 36,  113 => 69,  94 => 27,  86 => 52,  83 => 51,  74 => 27,  23 => 2,  61 => 14,  103 => 31,  73 => 46,  68 => 19,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 104,  355 => 95,  348 => 91,  344 => 101,  330 => 89,  327 => 96,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 77,  251 => 71,  239 => 72,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 39,  131 => 73,  122 => 56,  117 => 55,  108 => 31,  102 => 52,  92 => 50,  84 => 48,  72 => 21,  69 => 17,  51 => 11,  48 => 11,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 86,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 80,  264 => 74,  261 => 78,  257 => 79,  253 => 77,  249 => 74,  247 => 70,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 44,  127 => 47,  112 => 54,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 68,  224 => 91,  221 => 90,  207 => 67,  197 => 74,  195 => 60,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 45,  142 => 43,  136 => 48,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 13,  114 => 22,  109 => 30,  106 => 20,  101 => 19,  85 => 22,  77 => 22,  67 => 42,  47 => 9,  28 => 4,  55 => 13,  38 => 5,  50 => 26,  110 => 20,  100 => 27,  89 => 49,  65 => 18,  63 => 29,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 40,  88 => 24,  80 => 15,  78 => 49,  46 => 10,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 17,  57 => 12,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 67,  215 => 69,  211 => 84,  208 => 70,  202 => 98,  196 => 64,  193 => 63,  187 => 9,  183 => 80,  180 => 53,  171 => 104,  166 => 51,  163 => 51,  160 => 49,  157 => 46,  149 => 49,  146 => 41,  140 => 46,  137 => 59,  129 => 38,  124 => 37,  121 => 24,  118 => 36,  115 => 39,  111 => 33,  107 => 53,  104 => 29,  97 => 51,  93 => 18,  90 => 53,  81 => 28,  70 => 23,  66 => 13,  62 => 18,  59 => 15,  56 => 14,  52 => 10,  49 => 13,  45 => 6,  41 => 6,  37 => 12,  33 => 4,  30 => 3,);
    }
}
