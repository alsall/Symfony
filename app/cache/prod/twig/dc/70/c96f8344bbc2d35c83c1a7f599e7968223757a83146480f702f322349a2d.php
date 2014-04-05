<?php

/* PnpcScopsBundle:Scops:request_form.html.twig */
class __TwigTemplate_dc70c96f8344bbc2d35c83c1a7f599e7968223757a83146480f702f322349a2d extends Twig_Template
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
        echo "  affichage  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 8
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_request_result");
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo ">
\t<div>
\t\t<span>
\t\t\t<select name=\"champ\">
\t\t\t\t<option value=\"annee\">Année</option>
\t\t\t\t<option value=\"num_semaine\">N° Semaine</option>
\t\t\t\t<option value=\"date\">Date</option>
\t\t\t\t<option value=\"lieudit\">Lieudit</option>
\t\t\t\t<option value=\"action\">Action</option>
\t\t\t\t<option value=\"bague\">Bague</option>
\t\t\t\t<option value=\"nom_scientifique\">Nom Scientifique</option>
\t\t\t\t<option value=\"nom_vernaculaire\">Nom Vernaculaire</option>
\t\t\t\t<option value=\"secteur\">Secteur</option>
\t\t\t\t<option value=\"bg\">Bg</option>
\t\t\t</select>
\t\t\t
\t\t\t<input type=\"text\" id=\"champ_0\" name=\"mot\">
\t\t</span>
\t\t<span>
\t\t<a href=\"javascript:create_champ(1)\">Ajout</a>
\t\t</span>
\t</div>\t\t\t\t\t\t\t
\t<input type=\"submit\" value=\"Envoyer\" />
</form>\t\t\t\t\t\t
";
        // line 46
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
 
";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:request_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 66,  185 => 65,  95 => 30,  188 => 83,  174 => 76,  168 => 73,  156 => 67,  132 => 58,  42 => 8,  214 => 102,  210 => 101,  205 => 99,  184 => 8,  169 => 98,  151 => 65,  123 => 71,  119 => 70,  113 => 69,  94 => 54,  86 => 52,  83 => 51,  74 => 27,  23 => 1,  61 => 14,  103 => 31,  73 => 46,  68 => 19,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 73,  122 => 56,  117 => 55,  108 => 31,  102 => 52,  92 => 50,  84 => 48,  72 => 15,  69 => 17,  51 => 12,  48 => 11,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 51,  127 => 47,  112 => 54,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 67,  197 => 74,  195 => 86,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 55,  142 => 60,  136 => 48,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 16,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 42,  47 => 11,  28 => 4,  55 => 13,  38 => 5,  50 => 26,  110 => 20,  100 => 27,  89 => 49,  65 => 14,  63 => 29,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 40,  88 => 24,  80 => 15,  78 => 49,  46 => 8,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 21,  57 => 12,  43 => 7,  40 => 6,  232 => 72,  226 => 71,  222 => 76,  215 => 69,  211 => 84,  208 => 70,  202 => 98,  196 => 64,  193 => 63,  187 => 9,  183 => 80,  180 => 59,  171 => 104,  166 => 51,  163 => 51,  160 => 49,  157 => 88,  149 => 49,  146 => 41,  140 => 46,  137 => 59,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 33,  107 => 53,  104 => 28,  97 => 51,  93 => 18,  90 => 53,  81 => 28,  70 => 23,  66 => 13,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 6,  41 => 6,  37 => 12,  33 => 4,  30 => 3,);
    }
}
