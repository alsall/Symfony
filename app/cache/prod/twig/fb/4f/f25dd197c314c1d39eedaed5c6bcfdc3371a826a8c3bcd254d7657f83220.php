<?php

/* PnpcCistudeEuropeBundle:CistudeEurope:ajouter.html.twig */
class __TwigTemplate_fb4ff25dd197c314c1d39eedaed5c6bcfdc3371a826a8c3bcd254d7657f83220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcCistudeEuropeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'intern_body' => array($this, 'block_intern_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "  Formulaire d'ajout - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_intern_body($context, array $blocks = array())
    {
        // line 14
        echo "
 <h2>Ajouter un nouveau baguage</h2>
";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start');
        echo "
    ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
<table>
<tr>
    <td>";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "pays"), 'row');
        echo "</td>
    <td>";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "codeInsee"), 'row');
        echo "</td>
\t<td>";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "localite"), 'row');
        echo "</td>
    <td>";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lieudit"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date"), 'row');
        echo "</td>
\t<td>";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "protocole"), 'row');
        echo "</td>
\t<td>";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "temperature"), 'row');
        echo "</td>
\t<td>";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nebulosite"), 'row');
        echo "</td>
\t
</tr>
</table>
<table>
<tr>
\t<td>";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "precipitation"), 'row');
        echo "</td>
\t<td>";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "vent"), 'row');
        echo "</td>
\t<td>";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "visibilite"), 'row');
        echo "</td>
\t<td>";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "autre"), 'row');
        echo "</td>

</tr>
<tr>\t
\t<td>";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "site"), 'row');
        echo "</td>
\t<td>";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "modeCapture"), 'row');
        echo "</td>
\t<td>";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "action"), 'row');
        echo "</td>
\t<td>";
        // line 46
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numPiege"), 'row');
        echo "</td>
\t
</tr>
<tr>
\t<td>";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "latWgs84"), 'row');
        echo "</td>
\t<td>";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "longWgs84"), 'row');
        echo "</td>
\t<td id=\"search\" autocomplete=\"off\">";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numSession"), 'row');
        echo "</td>
\t<div id=\"results\"></div>
  \t\t
  \t
\t<td>";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "heureObservation"), 'row');
        echo "</td>
</tr>

</table>
<table>
<tr>
\t<td>";
        // line 62
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "observateur1"), 'row');
        echo "</td>
\t<td>";
        // line 63
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "observateur2"), 'row');
        echo "</td>
\t<td>";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "espece"), 'row');
        echo "</td>
\t<td>";
        // line 65
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "codeMarquage"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 68
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numMarquage"), 'row');
        echo "</td>
\t<td>";
        // line 69
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "longueurDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 70
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "largeurDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 71
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "hauteurCarapace"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 74
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "longueurPlastron"), 'row');
        echo "</td>
\t<td>";
        // line 75
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "largeurAvantPlastron"), 'row');
        echo "</td>
\t<td>";
        // line 76
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "largeurArrierePlastron"), 'row');
        echo "</td>
\t<td>";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "striesVisibles"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 80
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nombreStries"), 'row');
        echo "</td>
\t<td>";
        // line 81
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "poids"), 'row');
        echo "</td>
\t<td>";
        // line 82
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "stade"), 'row');
        echo "</td>
\t<td>";
        // line 83
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "sexe"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 86
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "couleurYeux"), 'row');
        echo "</td>
\t<td>";
        // line 87
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "couleurGeneraleDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 88
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ptsTraitsJaunesDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 89
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "couleurGeneralePlastron"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 92
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "tachesPtsPlastron"), 'row');
        echo "</td>
\t<td>";
        // line 93
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "corpsRepartDensitePtsTraits"), 'row');
        echo "</td>
\t<td>";
        // line 94
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "corpsSignesParticuliers"), 'row');
        echo "</td>
\t<td>";
        // line 95
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "tracesBlessures"), 'row');
        echo "</td>
</tr>


</table>

";
        // line 101
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "observations"), 'row');
        echo "


    <input type=\"submit\" />
";
        // line 105
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "

 
";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "    ";
        // line 111
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/script2.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "PnpcCistudeEuropeBundle:CistudeEurope:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 111,  342 => 109,  333 => 105,  288 => 88,  283 => 87,  278 => 86,  266 => 82,  276 => 94,  259 => 87,  244 => 76,  234 => 74,  217 => 69,  212 => 68,  116 => 36,  179 => 38,  172 => 52,  167 => 51,  220 => 80,  203 => 75,  184 => 70,  159 => 61,  154 => 46,  145 => 58,  135 => 55,  230 => 88,  209 => 81,  206 => 80,  126 => 38,  144 => 44,  82 => 31,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 112,  345 => 110,  340 => 137,  335 => 136,  325 => 101,  320 => 133,  315 => 95,  310 => 94,  305 => 93,  300 => 92,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  99 => 36,  94 => 35,  79 => 23,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 65,  200 => 64,  190 => 62,  175 => 72,  165 => 70,  113 => 42,  23 => 2,  20 => 1,  87 => 17,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 84,  214 => 70,  182 => 73,  169 => 70,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 65,  74 => 22,  188 => 83,  168 => 73,  156 => 67,  151 => 65,  132 => 58,  42 => 8,  103 => 31,  68 => 19,  174 => 76,  170 => 71,  153 => 57,  139 => 43,  128 => 45,  125 => 51,  95 => 30,  91 => 27,  73 => 46,  119 => 60,  86 => 42,  64 => 15,  61 => 14,  54 => 13,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 80,  251 => 79,  239 => 75,  231 => 68,  219 => 71,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 39,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 50,  84 => 24,  72 => 34,  69 => 21,  51 => 12,  48 => 11,  35 => 6,  29 => 3,  312 => 96,  308 => 94,  293 => 89,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 83,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 77,  247 => 104,  237 => 73,  204 => 79,  198 => 65,  194 => 64,  150 => 63,  147 => 29,  127 => 47,  112 => 54,  96 => 28,  76 => 22,  71 => 20,  39 => 7,  227 => 71,  224 => 85,  221 => 84,  207 => 67,  197 => 65,  195 => 63,  192 => 64,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 50,  158 => 59,  155 => 64,  152 => 55,  142 => 60,  136 => 48,  133 => 46,  130 => 61,  120 => 40,  105 => 50,  75 => 35,  53 => 14,  114 => 39,  109 => 54,  106 => 30,  101 => 29,  85 => 22,  77 => 38,  67 => 15,  47 => 11,  28 => 2,  55 => 13,  38 => 5,  50 => 13,  110 => 51,  100 => 49,  89 => 49,  65 => 16,  63 => 29,  58 => 11,  34 => 4,  26 => 11,  24 => 3,  25 => 18,  19 => 1,  98 => 39,  88 => 24,  80 => 15,  78 => 22,  46 => 8,  44 => 8,  36 => 6,  32 => 4,  27 => 5,  22 => 3,  60 => 14,  57 => 17,  43 => 7,  40 => 6,  232 => 72,  226 => 71,  222 => 70,  215 => 69,  211 => 84,  208 => 77,  202 => 66,  196 => 73,  193 => 63,  187 => 42,  183 => 80,  180 => 56,  171 => 68,  166 => 67,  163 => 51,  160 => 65,  157 => 48,  149 => 45,  146 => 63,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 37,  118 => 43,  115 => 57,  111 => 33,  107 => 53,  104 => 37,  97 => 51,  93 => 44,  90 => 48,  81 => 28,  70 => 23,  66 => 16,  62 => 18,  59 => 9,  56 => 17,  52 => 10,  49 => 13,  45 => 8,  41 => 7,  37 => 4,  33 => 4,  30 => 3,);
    }
}
