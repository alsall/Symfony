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
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

<table>
<tr>
    <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'row');
        echo "</td>
    <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dept"), 'row');
        echo "</td>
\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "localite"), 'row');
        echo "</td>
    <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lieudit"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "centre"), 'row');
        echo "</td>
\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secteur"), 'row');
        echo "</td>
\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lat"), 'row');
        echo "</td>
\t<td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lon"), 'row');
        echo "</td>
\t
</tr>
</table>
<table>
<tr>
\t<td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numero"), 'row');
        echo "</td>
\t<td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "theme"), 'row');
        echo "</td>
\t<td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bagueur"), 'row');
        echo "</td>
\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bague"), 'row');
        echo "</td>

</tr>
<tr>\t
\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "action"), 'row');
        echo "</td>
\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'row');
        echo "</td>
\t<td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "circ_repr"), 'row');
        echo "</td>
\t<td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cond_repr"), 'row');
        echo "</td>
\t
</tr>
<tr>
\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom_scientifique"), 'row');
        echo "</td>
\t<td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom_vernaculaire"), 'row');
        echo "</td>
\t<td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "espece"), 'row');
        echo "</td>
\t
  \t\t
  \t
\t<td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'row');
        echo "</td>
</tr>

</table>
<table>
<tr>
\t<td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "annee"), 'row');
        echo "</td>
\t<td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "num_semaine"), 'row');
        echo "</td>
\t<td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'row');
        echo "</td>
\t<td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fs"), 'row');
        echo "</td>
\t<td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "hs"), 'row');
        echo "</td>
\t<td>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lp"), 'row');
        echo "</td>
\t<td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ad"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ma"), 'row');
        echo "</td>
\t<td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ds"), 'row');
        echo "</td>
\t<td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cs"), 'row');
        echo "</td>
\t<td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pc"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pi"), 'row');
        echo "</td>
\t<td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mu"), 'row');
        echo "</td>
\t<td>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "es"), 'row');
        echo "</td>
\t<td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nf"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sg"), 'row');
        echo "</td>
\t<td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "re"), 'row');
        echo "</td>
\t<td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "rr"), 'row');
        echo "</td>
\t<td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ge"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fi"), 'row');
        echo "</td>
\t<td>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fg"), 'row');
        echo "</td>
\t<td>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fd"), 'row');
        echo "</td>
\t<td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "classe"), 'row');
        echo "</td>
</tr>
<tr>
\t<td>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tl"), 'row');
        echo "</td>
\t<td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lt"), 'row');
        echo "</td>
\t<td>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bp"), 'row');
        echo "</td>
\t<td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tq"), 'row');
        echo "</td>
</tr>
<tr>
\t<div class=\"ui-widget\"><td>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cr"), 'row');
        echo "</td></div>
\t<td>";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "x1"), 'row');
        echo "</td>
\t<td>";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "x2"), 'row');
        echo "</td>
\t<td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bg"), 'row');
        echo "</td>\t
</tr>

\t


</table>

";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "memo"), 'row');
        echo "


    <input type=\"submit\" value=\"Envoyer\"/>
";
        // line 121
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
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
        return array (  431 => 217,  343 => 131,  338 => 129,  326 => 121,  319 => 117,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 70,  178 => 66,  174 => 65,  170 => 64,  146 => 52,  197 => 69,  150 => 53,  84 => 48,  58 => 18,  165 => 61,  161 => 58,  152 => 57,  124 => 8,  118 => 6,  90 => 30,  76 => 31,  127 => 45,  97 => 31,  81 => 26,  77 => 25,  70 => 33,  53 => 9,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 55,  132 => 51,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 76,  143 => 67,  135 => 47,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  201 => 92,  196 => 72,  183 => 82,  171 => 65,  166 => 64,  163 => 62,  158 => 67,  156 => 66,  151 => 51,  142 => 43,  138 => 49,  136 => 56,  121 => 47,  117 => 44,  105 => 33,  91 => 30,  62 => 19,  49 => 13,  94 => 43,  89 => 43,  85 => 25,  75 => 17,  68 => 23,  56 => 9,  38 => 5,  26 => 6,  87 => 29,  31 => 3,  21 => 2,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  93 => 44,  88 => 49,  78 => 21,  46 => 8,  44 => 8,  27 => 4,  79 => 28,  72 => 46,  69 => 23,  47 => 11,  40 => 6,  37 => 10,  22 => 2,  246 => 89,  157 => 59,  145 => 44,  139 => 48,  131 => 46,  123 => 58,  120 => 41,  115 => 56,  111 => 55,  108 => 38,  101 => 32,  98 => 31,  96 => 45,  83 => 35,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 7,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 67,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 57,  154 => 54,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 61,  125 => 44,  122 => 63,  116 => 40,  112 => 39,  109 => 56,  106 => 36,  103 => 53,  99 => 32,  95 => 31,  92 => 21,  86 => 24,  82 => 22,  80 => 23,  73 => 24,  64 => 28,  60 => 18,  57 => 12,  54 => 15,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 8,  33 => 4,  30 => 3,);
    }
}
