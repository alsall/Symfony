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
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
<table>
<tr>
    <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'row');
        echo "</td>
    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "codeInsee"), 'row');
        echo "</td>
\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "localite"), 'row');
        echo "</td>
    <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lieudit"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'row');
        echo "</td>
\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "protocole"), 'row');
        echo "</td>
\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "temperature"), 'row');
        echo "</td>
\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nebulosite"), 'row');
        echo "</td>
\t
</tr>
</table>
<table>
<tr>
\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "precipitation"), 'row');
        echo "</td>
\t<td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "vent"), 'row');
        echo "</td>
\t<td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "visibilite"), 'row');
        echo "</td>
\t<td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "autre"), 'row');
        echo "</td>

</tr>
<tr>\t
\t<td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "site"), 'row');
        echo "</td>
\t<td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "modeCapture"), 'row');
        echo "</td>
\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "action"), 'row');
        echo "</td>
\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numPiege"), 'row');
        echo "</td>
\t
</tr>
<tr>
\t<td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "latWgs84"), 'row');
        echo "</td>
\t<td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "longWgs84"), 'row');
        echo "</td>
\t<td id=\"search\" autocomplete=\"off\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numSession"), 'row');
        echo "</td>
\t<div id=\"results\"></div>
  \t\t
  \t
\t<td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heureObservation"), 'row');
        echo "</td>
</tr>

</table>
<table>
<tr>
\t<td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observateur1"), 'row');
        echo "</td>
\t<td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observateur2"), 'row');
        echo "</td>
\t<td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "espece"), 'row');
        echo "</td>
\t<td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "codeMarquage"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numMarquage"), 'row');
        echo "</td>
\t<td>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "longueurDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "largeurDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hauteurCarapace"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "longueurPlastron"), 'row');
        echo "</td>
\t<td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "largeurAvantPlastron"), 'row');
        echo "</td>
\t<td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "largeurArrierePlastron"), 'row');
        echo "</td>
\t<td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "striesVisibles"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombreStries"), 'row');
        echo "</td>
\t<td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "poids"), 'row');
        echo "</td>
\t<td>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "stade"), 'row');
        echo "</td>
\t<td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "couleurYeux"), 'row');
        echo "</td>
\t<td>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "couleurGeneraleDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ptsTraitsJaunesDossiere"), 'row');
        echo "</td>
\t<td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "couleurGeneralePlastron"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tachesPtsPlastron"), 'row');
        echo "</td>
\t<td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "corpsRepartDensitePtsTraits"), 'row');
        echo "</td>
\t<td>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "corpsSignesParticuliers"), 'row');
        echo "</td>
\t<td>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tracesBlessures"), 'row');
        echo "</td>
</tr>


</table>

";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "observations"), 'row');
        echo "


    <input type=\"submit\" />
";
        // line 105
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
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
        return array (  302 => 112,  297 => 110,  270 => 95,  266 => 94,  262 => 93,  248 => 88,  244 => 87,  222 => 80,  216 => 77,  239 => 93,  234 => 83,  226 => 81,  212 => 76,  198 => 71,  194 => 70,  190 => 69,  186 => 68,  110 => 37,  180 => 65,  172 => 63,  181 => 81,  148 => 51,  137 => 46,  104 => 51,  129 => 44,  126 => 27,  114 => 38,  100 => 33,  65 => 20,  339 => 162,  335 => 161,  331 => 160,  279 => 101,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 111,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 71,  155 => 68,  113 => 44,  23 => 2,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 105,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 94,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 88,  178 => 80,  174 => 65,  170 => 77,  146 => 52,  197 => 69,  150 => 72,  84 => 48,  58 => 11,  165 => 38,  161 => 58,  152 => 52,  124 => 62,  118 => 39,  90 => 30,  76 => 31,  127 => 59,  97 => 30,  81 => 40,  77 => 22,  70 => 33,  53 => 14,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 109,  285 => 89,  283 => 133,  278 => 100,  268 => 96,  264 => 95,  258 => 92,  252 => 89,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 66,  132 => 65,  128 => 48,  107 => 54,  61 => 18,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 75,  204 => 74,  179 => 77,  159 => 56,  143 => 67,  135 => 63,  119 => 57,  102 => 32,  71 => 22,  67 => 21,  63 => 29,  59 => 12,  201 => 96,  196 => 72,  183 => 78,  171 => 65,  166 => 64,  163 => 70,  158 => 67,  156 => 66,  151 => 51,  142 => 43,  138 => 49,  136 => 56,  121 => 47,  117 => 45,  105 => 33,  91 => 50,  62 => 16,  49 => 13,  94 => 51,  89 => 28,  85 => 27,  75 => 23,  68 => 23,  56 => 35,  38 => 5,  26 => 11,  87 => 49,  31 => 3,  21 => 2,  28 => 5,  24 => 3,  25 => 3,  19 => 1,  93 => 29,  88 => 49,  78 => 21,  46 => 8,  44 => 8,  27 => 5,  79 => 24,  72 => 46,  69 => 17,  47 => 11,  40 => 6,  37 => 4,  22 => 3,  246 => 89,  157 => 59,  145 => 44,  139 => 65,  131 => 60,  123 => 58,  120 => 57,  115 => 56,  111 => 55,  108 => 22,  101 => 38,  98 => 31,  96 => 48,  83 => 17,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 13,  43 => 7,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 79,  182 => 66,  176 => 64,  173 => 83,  168 => 62,  164 => 59,  162 => 74,  154 => 73,  149 => 73,  147 => 66,  144 => 50,  141 => 70,  133 => 45,  130 => 61,  125 => 43,  122 => 63,  116 => 40,  112 => 55,  109 => 54,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 49,  86 => 24,  82 => 22,  80 => 23,  73 => 21,  64 => 15,  60 => 18,  57 => 17,  54 => 34,  51 => 12,  48 => 11,  45 => 30,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
