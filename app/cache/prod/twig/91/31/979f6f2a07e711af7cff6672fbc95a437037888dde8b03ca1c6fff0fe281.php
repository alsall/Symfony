<?php

/* PnpcScopsBundle:Scops:ajouter.html.twig */
class __TwigTemplate_9131979f6f2a07e711af7cff6672fbc95a437037888dde8b03ca1c6fff0fe281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcScopsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'intern_body' => array($this, 'block_intern_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css\">
";
    }

    // line 14
    public function block_intern_body($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"ui-widget\">
 <h2>Ajouter un nouveau baguage</h2>
";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start');
        echo "
    ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "

<table>
<tr>
    <td>";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "pays"), 'row');
        echo "</td>
    <td>";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "dept"), 'row');
        echo "</td>
\t<td>";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "localite"), 'row');
        echo "</td>
    <td>";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lieudit"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "centre"), 'row');
        echo "</td>
\t<td>";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "secteur"), 'row');
        echo "</td>
\t<td>";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lat"), 'row');
        echo "</td>
\t<td>";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lon"), 'row');
        echo "</td>
\t
</tr>
</table>
<table>
<tr>
\t<td>";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numero"), 'row');
        echo "</td>
\t<td>";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "theme"), 'row');
        echo "</td>
\t<td>";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "bagueur"), 'row');
        echo "</td>
\t<td>";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "bague"), 'row');
        echo "</td>

</tr>
<tr>\t
\t<td>";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "action"), 'row');
        echo "</td>
\t<td>";
        // line 46
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "sexe"), 'row');
        echo "</td>
\t<td>";
        // line 47
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "circ_repr"), 'row');
        echo "</td>
\t<td>";
        // line 48
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "cond_repr"), 'row');
        echo "</td>
\t
</tr>
<tr>
\t<td>";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom_scientifique"), 'row');
        echo "</td>
\t<td>";
        // line 53
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom_vernaculaire"), 'row');
        echo "</td>
\t<td>";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "espece"), 'row');
        echo "</td>
\t
  \t\t
  \t
\t<td>";
        // line 58
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "age"), 'row');
        echo "</td>
</tr>

</table>
<table>
<tr>
\t<td>";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "annee"), 'row');
        echo "</td>
\t<td>";
        // line 65
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "num_semaine"), 'row');
        echo "</td>
\t<td>";
        // line 66
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date"), 'row');
        echo "</td>
\t<td>";
        // line 67
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "heure"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 70
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fs"), 'row');
        echo "</td>
\t<td>";
        // line 71
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "hs"), 'row');
        echo "</td>
\t<td>";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lp"), 'row');
        echo "</td>
\t<td>";
        // line 73
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ad"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 76
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ma"), 'row');
        echo "</td>
\t<td>";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ds"), 'row');
        echo "</td>
\t<td>";
        // line 78
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "cs"), 'row');
        echo "</td>
\t<td>";
        // line 79
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "pc"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 82
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "pi"), 'row');
        echo "</td>
\t<td>";
        // line 83
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mu"), 'row');
        echo "</td>
\t<td>";
        // line 84
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "es"), 'row');
        echo "</td>
\t<td>";
        // line 85
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nf"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 88
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "sg"), 'row');
        echo "</td>
\t<td>";
        // line 89
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "re"), 'row');
        echo "</td>
\t<td>";
        // line 90
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "rr"), 'row');
        echo "</td>
\t<td>";
        // line 91
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ge"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 94
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fi"), 'row');
        echo "</td>
\t<td>";
        // line 95
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fg"), 'row');
        echo "</td>
\t<td>";
        // line 96
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fd"), 'row');
        echo "</td>
\t<td>";
        // line 97
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "classe"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 100
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "tl"), 'row');
        echo "</td>
\t<td>";
        // line 101
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lt"), 'row');
        echo "</td>
\t<td>";
        // line 102
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "bp"), 'row');
        echo "</td>
\t<td>";
        // line 103
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "tq"), 'row');
        echo "</td>
</tr>
<tr>
\t<div class=\"ui-widget\"><td>";
        // line 106
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "cr"), 'row');
        echo "</td></div>
\t<td>";
        // line 107
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "x1"), 'row');
        echo "</td>
\t<td>";
        // line 108
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "x2"), 'row');
        echo "</td>
\t<td>";
        // line 109
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "bg"), 'row');
        echo "</td>\t
</tr>

\t


</table>

";
        // line 117
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "memo"), 'row');
        echo "


    <input type=\"submit\" value=\"Envoyer\"/>
";
        // line 121
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "



<input id=\"tags\">
</div>
 
";
    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        // line 130
        echo "    ";
        // line 131
        echo "     <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
<script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
     <script>
\$(function() {
var availableTags = [

\"ALEUFA\",
\"ANAERA\",
\"ANAHOS\",
\"ANTRIS\",
\"BRASIS\",
\"CALENS\",
\"CALUTA\",
\"CARINA\",
\"CARLIS\",
\"CARMEA\",
\"CARMEACAB\",
\"CARMEAFLA\",
\"CARMEAROS\",
\"CARNUS\",
\"CARRIS\",
\"CERRIS\",
\"CERYLA\",
\"CHLDUS\",
\"CICLUS\",
\"COCTES\",
\"CODULA\",
\"CODULAMON\",
\"CODULASPE\",
\"COLBUS\",
\"COLNAS\",
\"CORONE\",
\"CORONEIUS\",
\"CORONENIX\",
\"CORONEONE\",
\"CORRAX\",
\"COTNIX\",
\"CRUFIC\",
\"DENTOS\",
\"DOMMON\",
\"FALTEO\",
\"FICUCA\",
\"FICUCAHYP\",
\"FULLIS\",
\"GALAGO\",
\"GALATA\",
\"HALLLA\",
\"LAITOR\",
\"LANMER\",
\"LANRIO\",
\"MELACA\",
\"MELARA\",
\"MOTFLAEGG\",
\"MOTFLAEMA\",
\"MOTFLAIAE\",
\"MOTFLALLA\",
\"OENURA\",
\"PACINC\",
\"PAPALU\",
\"PARNUS\",
\"PHACUS\",
\"PICDIS\",
\"PICDISSHA\",
\"PICDISVIR\",
\"PLADIA\",
\"PORANA\",
\"RHODOR\",
\"SERLLA\",
\"SERLLACOR\",
\"STEAEA\",
\"STENDO\",
\"STRATA\",
\"STRCTO\",
\"TACLIS\",
\"TACMEL\",
\"TADRNA\",
\"TETRIX\"



];
\$( \"#tags\" ).autocomplete({
source: availableTags
});
});
</script>
\t<script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/script2.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 217,  399 => 131,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 103,  334 => 102,  329 => 101,  324 => 100,  317 => 97,  290 => 90,  280 => 88,  273 => 85,  268 => 84,  263 => 83,  258 => 82,  246 => 78,  241 => 77,  236 => 76,  229 => 73,  214 => 70,  182 => 58,  169 => 53,  164 => 52,  141 => 45,  123 => 39,  199 => 66,  185 => 65,  74 => 27,  188 => 83,  168 => 73,  156 => 48,  151 => 47,  132 => 58,  42 => 8,  103 => 31,  68 => 19,  174 => 54,  170 => 62,  153 => 57,  139 => 17,  128 => 40,  125 => 8,  95 => 30,  91 => 41,  73 => 46,  119 => 6,  86 => 26,  64 => 15,  61 => 14,  54 => 15,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 129,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 80,  279 => 78,  256 => 73,  251 => 79,  239 => 69,  231 => 68,  219 => 71,  201 => 66,  143 => 43,  138 => 44,  134 => 43,  131 => 42,  122 => 56,  117 => 55,  108 => 32,  102 => 52,  92 => 50,  84 => 48,  72 => 15,  69 => 29,  51 => 14,  48 => 11,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 56,  147 => 51,  127 => 47,  112 => 54,  96 => 25,  76 => 24,  71 => 23,  39 => 7,  227 => 92,  224 => 72,  221 => 90,  207 => 67,  197 => 65,  195 => 65,  192 => 64,  189 => 61,  186 => 60,  181 => 67,  178 => 64,  173 => 58,  162 => 60,  158 => 59,  155 => 58,  152 => 55,  142 => 60,  136 => 48,  133 => 41,  130 => 61,  120 => 40,  105 => 31,  75 => 24,  53 => 9,  114 => 22,  109 => 54,  106 => 20,  101 => 19,  85 => 22,  77 => 31,  67 => 15,  47 => 11,  28 => 4,  55 => 13,  38 => 5,  50 => 7,  110 => 56,  100 => 27,  89 => 49,  65 => 28,  63 => 19,  58 => 18,  34 => 4,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  98 => 30,  88 => 24,  80 => 15,  78 => 22,  46 => 8,  44 => 8,  36 => 8,  32 => 4,  27 => 3,  22 => 2,  60 => 27,  57 => 12,  43 => 7,  40 => 6,  232 => 72,  226 => 71,  222 => 76,  215 => 69,  211 => 84,  208 => 70,  202 => 66,  196 => 64,  193 => 63,  187 => 62,  183 => 80,  180 => 59,  171 => 54,  166 => 61,  163 => 51,  160 => 49,  157 => 48,  149 => 49,  146 => 46,  140 => 46,  137 => 59,  129 => 36,  124 => 35,  121 => 24,  118 => 38,  115 => 57,  111 => 33,  107 => 53,  104 => 28,  97 => 51,  93 => 29,  90 => 21,  81 => 25,  70 => 23,  66 => 16,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 6,  41 => 7,  37 => 5,  33 => 4,  30 => 3,);
    }
}
