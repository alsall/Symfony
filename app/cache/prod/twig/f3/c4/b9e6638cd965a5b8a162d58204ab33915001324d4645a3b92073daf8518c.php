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
        echo " <div class=\"hero-unit scops\">
\t\t\t\t
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
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t<li class=\"\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_ajouter");
        echo "\">Formulaire d'ajout</a></li>
\t\t\t\t";
        // line 42
        echo "\t\t
\t\t\t<li class=\"\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_voir");
        echo "\">Liste Baguage</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_diapo");
        echo "\">Galerie</a></li>
\t\t\t<li class=\"\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_doc");
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
        return "PnpcScopsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 60,  86 => 42,  64 => 15,  61 => 14,  54 => 14,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 63,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 60,  112 => 55,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 61,  120 => 40,  105 => 31,  75 => 24,  53 => 17,  114 => 22,  109 => 54,  106 => 20,  101 => 19,  85 => 22,  77 => 38,  67 => 15,  47 => 6,  28 => 4,  55 => 15,  38 => 6,  50 => 7,  110 => 20,  100 => 27,  89 => 43,  65 => 14,  63 => 13,  58 => 10,  34 => 4,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 21,  57 => 9,  43 => 6,  40 => 5,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 57,  111 => 32,  107 => 28,  104 => 28,  97 => 45,  93 => 44,  90 => 21,  81 => 40,  70 => 33,  66 => 16,  62 => 11,  59 => 15,  56 => 12,  52 => 8,  49 => 9,  45 => 6,  41 => 6,  37 => 5,  33 => 4,  30 => 2,);
    }
}
