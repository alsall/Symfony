<?php

/* PnpcCistudeEuropeBundle:CistudeEurope:request_form.html.twig */
class __TwigTemplate_42b2f8fcbf15db44d420f22f2aa23d64072647052888b6f1dc00077ca426ae0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcCistudeEuropeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PnpcCistudeEuropeBundle::layout.html.twig";
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
        return "PnpcCistudeEuropeBundle:CistudeEurope:request_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 94,  259 => 87,  244 => 76,  234 => 74,  217 => 69,  212 => 68,  116 => 36,  179 => 38,  172 => 52,  167 => 51,  220 => 80,  203 => 75,  184 => 70,  159 => 61,  154 => 46,  145 => 58,  135 => 55,  230 => 88,  209 => 81,  206 => 80,  126 => 38,  144 => 44,  82 => 31,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  99 => 36,  94 => 35,  79 => 32,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 78,  200 => 77,  190 => 75,  175 => 72,  165 => 70,  113 => 42,  23 => 2,  20 => 1,  87 => 17,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 84,  214 => 70,  182 => 73,  169 => 70,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 65,  74 => 27,  188 => 83,  168 => 73,  156 => 67,  151 => 65,  132 => 58,  42 => 8,  103 => 31,  68 => 19,  174 => 76,  170 => 71,  153 => 57,  139 => 43,  128 => 45,  125 => 51,  95 => 30,  91 => 27,  73 => 46,  119 => 60,  86 => 42,  64 => 15,  61 => 14,  54 => 13,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 73,  251 => 79,  239 => 75,  231 => 68,  219 => 71,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 39,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 50,  84 => 48,  72 => 34,  69 => 17,  51 => 12,  48 => 11,  35 => 6,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 92,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 76,  247 => 104,  237 => 73,  204 => 79,  198 => 65,  194 => 64,  150 => 63,  147 => 29,  127 => 47,  112 => 54,  96 => 28,  76 => 22,  71 => 20,  39 => 7,  227 => 71,  224 => 85,  221 => 84,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 50,  158 => 59,  155 => 64,  152 => 55,  142 => 60,  136 => 48,  133 => 46,  130 => 61,  120 => 40,  105 => 50,  75 => 35,  53 => 9,  114 => 39,  109 => 54,  106 => 30,  101 => 29,  85 => 22,  77 => 38,  67 => 15,  47 => 11,  28 => 2,  55 => 13,  38 => 5,  50 => 7,  110 => 51,  100 => 49,  89 => 49,  65 => 16,  63 => 29,  58 => 11,  34 => 4,  26 => 11,  24 => 3,  25 => 18,  19 => 1,  98 => 39,  88 => 24,  80 => 15,  78 => 22,  46 => 8,  44 => 7,  36 => 6,  32 => 4,  27 => 5,  22 => 3,  60 => 14,  57 => 12,  43 => 7,  40 => 6,  232 => 72,  226 => 71,  222 => 70,  215 => 69,  211 => 84,  208 => 77,  202 => 66,  196 => 73,  193 => 63,  187 => 42,  183 => 80,  180 => 73,  171 => 68,  166 => 67,  163 => 51,  160 => 65,  157 => 48,  149 => 49,  146 => 63,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 37,  118 => 43,  115 => 57,  111 => 33,  107 => 53,  104 => 37,  97 => 51,  93 => 44,  90 => 48,  81 => 28,  70 => 23,  66 => 16,  62 => 18,  59 => 9,  56 => 17,  52 => 10,  49 => 13,  45 => 8,  41 => 6,  37 => 4,  33 => 4,  30 => 3,);
    }
}
