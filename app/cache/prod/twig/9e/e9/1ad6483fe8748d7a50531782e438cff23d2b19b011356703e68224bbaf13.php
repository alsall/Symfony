<?php

/* PnpcCistudeEuropeBundle:CistudeEurope:diapo.html.twig */
class __TwigTemplate_9ee91ad6483fe8748d7a50531782e438cff23d2b19b011356703e68224bbaf13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcCistudeEuropeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "photos
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " <h4>Galerie photos</h4>
";
        // line 7
        $this->displayBlock('intern_body', $context, $blocks);
        // line 35
        echo "\t";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 9
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_uploadImage");
        echo "\" class=\"btn\">Ajouter une photo</a><br><br>
";
        // line 11
        echo "    <div id=\"myCarousel\" class=\"carousel slide\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t</ol>
\t\t<!-- Carousel items -->
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"active item\"><img alt=\"\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/PRL117.jpg"), "html", null, true);
        echo "\"></img>
\t\t\t\t<div class=\"carousel-caption\"><p>Image oiseau</p></div></div>
\t\t\t\t";
        // line 21
        if (isset($context["liste"])) { $_liste_ = $context["liste"]; } else { $_liste_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_liste_);
        foreach ($context['_seq'] as $context["_key"] => $context["galerie"]) {
            // line 22
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"item\"><img alt=\"\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images"), "html", null, true);
            echo "/";
            if (isset($context["galerie"])) { $_galerie_ = $context["galerie"]; } else { $_galerie_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_galerie_, "path"), "html", null, true);
            echo "\" ></img>
\t\t\t\t\t\t<div class=\"carousel-caption\"><p>";
            // line 24
            if (isset($context["galerie"])) { $_galerie_ = $context["galerie"]; } else { $_galerie_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_galerie_, "commentaire"), "html", null, true);
            echo ". Image postée par ";
            if (isset($context["galerie"])) { $_galerie_ = $context["galerie"]; } else { $_galerie_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_galerie_, "auteur"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</div>
\t\t<!-- Carousel nav -->
\t\t<a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t<a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "PnpcCistudeEuropeBundle:CistudeEurope:diapo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 94,  259 => 87,  244 => 76,  234 => 74,  217 => 69,  212 => 68,  116 => 36,  179 => 38,  172 => 52,  167 => 51,  220 => 80,  203 => 75,  184 => 70,  159 => 61,  154 => 46,  145 => 58,  135 => 55,  230 => 88,  209 => 81,  206 => 80,  126 => 38,  144 => 44,  82 => 31,  21 => 2,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  99 => 36,  94 => 35,  79 => 32,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 78,  200 => 77,  190 => 75,  175 => 72,  165 => 70,  113 => 42,  23 => 2,  20 => 1,  87 => 17,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 84,  214 => 70,  182 => 73,  169 => 70,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 74,  74 => 31,  188 => 83,  168 => 73,  156 => 65,  151 => 64,  132 => 58,  42 => 8,  103 => 29,  68 => 19,  174 => 76,  170 => 71,  153 => 57,  139 => 43,  128 => 45,  125 => 51,  95 => 30,  91 => 27,  73 => 21,  119 => 60,  86 => 42,  64 => 15,  61 => 14,  54 => 13,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 73,  251 => 79,  239 => 75,  231 => 68,  219 => 71,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 39,  122 => 63,  117 => 55,  108 => 41,  102 => 52,  92 => 50,  84 => 33,  72 => 34,  69 => 17,  51 => 11,  48 => 7,  35 => 6,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 92,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 76,  247 => 104,  237 => 73,  204 => 79,  198 => 65,  194 => 64,  150 => 63,  147 => 29,  127 => 60,  112 => 55,  96 => 28,  76 => 22,  71 => 20,  39 => 7,  227 => 71,  224 => 85,  221 => 84,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 50,  158 => 59,  155 => 64,  152 => 55,  142 => 60,  136 => 48,  133 => 46,  130 => 61,  120 => 40,  105 => 50,  75 => 35,  53 => 9,  114 => 39,  109 => 54,  106 => 30,  101 => 29,  85 => 22,  77 => 38,  67 => 15,  47 => 11,  28 => 2,  55 => 13,  38 => 5,  50 => 7,  110 => 51,  100 => 49,  89 => 43,  65 => 16,  63 => 29,  58 => 11,  34 => 4,  26 => 11,  24 => 3,  25 => 18,  19 => 1,  98 => 39,  88 => 24,  80 => 15,  78 => 22,  46 => 35,  44 => 7,  36 => 6,  32 => 4,  27 => 5,  22 => 3,  60 => 14,  57 => 17,  43 => 6,  40 => 5,  232 => 72,  226 => 71,  222 => 70,  215 => 80,  211 => 84,  208 => 77,  202 => 66,  196 => 73,  193 => 63,  187 => 42,  183 => 80,  180 => 73,  171 => 68,  166 => 67,  163 => 51,  160 => 65,  157 => 48,  149 => 45,  146 => 63,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 37,  118 => 43,  115 => 57,  111 => 33,  107 => 53,  104 => 37,  97 => 45,  93 => 44,  90 => 48,  81 => 23,  70 => 33,  66 => 16,  62 => 18,  59 => 9,  56 => 17,  52 => 8,  49 => 13,  45 => 8,  41 => 6,  37 => 4,  33 => 3,  30 => 2,);
    }
}
