<?php

/* PnpcCistudeEuropeBundle::layout.html.twig */
class __TwigTemplate_a905ce76e98cd633ed5b09df7121fbe6bda0b27d8f45d4561301c880f5eac3e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
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

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo " <div class=\"hero-unit ce\">
\t\t\t
\t\t\t\t
\t\t\t\t<h1>Île de Porquerolles - HALTE MIGRATOIRE (PNRO)</h1>
\t\t\t\t<p>Capture et marquage de l'avifaune en migration prénuptiale</p>
\t\t\t
\t\t   \t\t
\t\t\t";
        // line 17
        echo "\t\t</div>
\t\t
\t\t<div class=\"navbar navbar-inverse\">
    <div class=\"navbar-inner\">
    <div class=\"container\">
\t
     
    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    </a>
    
    <!-- Be sure to leave the brand out there if you want it shown -->
    ";
        // line 33
        echo "     
    <!-- Everything you want hidden at 940px or less, place within here -->
    <div class=\"nav-collapse collapse\">
\t\t<!-- .nav, .navbar-search, .navbar-form, etc -->
\t\t <ul class=\"nav navbar-nav nav-justified\">
\t\t\t<li class=\"\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("pnpc_cistude_europe_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_cistude_europe_ajouter");
        echo "\">Formulaire d'ajout</a></li>
\t\t\t\t";
        // line 42
        echo "\t\t
\t\t\t<li class=\"\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pnpc_cistude_europe_voir");
        echo "\">Liste Baguage</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("pnpc_cistude_europe_diapo");
        echo "\">Galerie</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pnpc_cistude_europe_doc");
        echo "\">Documents</a></li>
\t\t</ul>
    </div>
     
    </div>
    </div>
    </div>
    ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo " 
  ";
        // line 57
        echo "
 
  ";
        // line 60
        echo "  ";
        $this->displayBlock('intern_body', $context, $blocks);
        // line 63
        echo " 
";
    }

    // line 60
    public function block_intern_body($context, array $blocks = array())
    {
        // line 61
        echo " 
  ";
    }

    public function getTemplateName()
    {
        return "PnpcCistudeEuropeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 93,  234 => 91,  226 => 87,  212 => 76,  198 => 71,  194 => 70,  190 => 69,  186 => 68,  110 => 37,  180 => 65,  172 => 63,  181 => 81,  148 => 51,  137 => 46,  104 => 51,  129 => 44,  126 => 27,  114 => 38,  100 => 33,  65 => 20,  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 71,  155 => 68,  113 => 44,  23 => 2,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 94,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 88,  178 => 80,  174 => 65,  170 => 77,  146 => 52,  197 => 69,  150 => 72,  84 => 48,  58 => 14,  165 => 38,  161 => 58,  152 => 52,  124 => 62,  118 => 39,  90 => 30,  76 => 31,  127 => 60,  97 => 45,  81 => 40,  77 => 38,  70 => 33,  53 => 17,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 133,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 66,  132 => 65,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 75,  204 => 74,  179 => 77,  159 => 69,  143 => 65,  135 => 63,  119 => 60,  102 => 32,  71 => 22,  67 => 21,  63 => 29,  59 => 12,  201 => 96,  196 => 72,  183 => 78,  171 => 72,  166 => 64,  163 => 70,  158 => 67,  156 => 66,  151 => 67,  142 => 43,  138 => 49,  136 => 56,  121 => 46,  117 => 45,  105 => 39,  91 => 50,  62 => 16,  49 => 13,  94 => 51,  89 => 43,  85 => 34,  75 => 23,  68 => 23,  56 => 35,  38 => 5,  26 => 11,  87 => 49,  31 => 3,  21 => 2,  28 => 5,  24 => 3,  25 => 3,  19 => 1,  93 => 44,  88 => 49,  78 => 21,  46 => 10,  44 => 7,  27 => 5,  79 => 24,  72 => 46,  69 => 17,  47 => 11,  40 => 5,  37 => 4,  22 => 3,  246 => 89,  157 => 59,  145 => 44,  139 => 64,  131 => 60,  123 => 58,  120 => 57,  115 => 57,  111 => 55,  108 => 22,  101 => 38,  98 => 31,  96 => 48,  83 => 17,  74 => 27,  66 => 16,  55 => 17,  52 => 8,  50 => 11,  43 => 6,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 79,  182 => 66,  176 => 64,  173 => 83,  168 => 62,  164 => 59,  162 => 74,  154 => 73,  149 => 73,  147 => 66,  144 => 50,  141 => 70,  133 => 45,  130 => 61,  125 => 47,  122 => 63,  116 => 40,  112 => 55,  109 => 54,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 49,  86 => 42,  82 => 22,  80 => 23,  73 => 31,  64 => 15,  60 => 18,  57 => 17,  54 => 34,  51 => 12,  48 => 7,  45 => 30,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 2,);
    }
}