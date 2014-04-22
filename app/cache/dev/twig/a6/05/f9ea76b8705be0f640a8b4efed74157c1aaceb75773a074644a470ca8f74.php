<?php

/* PnpcScopsBundle:Scops:voirplus.html.twig */
class __TwigTemplate_a605f9ea76b8705be0f640a8b4efed74157c1aaceb75773a074644a470ca8f74 extends Twig_Template
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
        echo "  Baguage N°";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "id"), "html", null, true);
        echo "  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 8
        echo "

<div>
<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_voir");
        echo "\" class=\"btn btn-success\">Retour</a>
";
        // line 13
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_modifier", array("id" => $this->getAttribute($this->getContext($context, "info"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a>
<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimer", array("id" => $this->getAttribute($this->getContext($context, "info"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>
";
        // line 16
        echo "</div>

<br>
<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Numero</th>
\t\t\t<th>Thème</th>
\t\t\t<th>Bagueur</th>
\t\t\t<th>Pays</th>
\t\t\t<th>Dept</th>
\t\t\t<th>Localité</th>
\t\t\t<th>Année</th>
\t\t\t<th>N° Semaine</th>
\t\t\t<th>Date</th>
\t\t\t<th>Lieudit</th>
\t\t\t<th>Fs</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "numero"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "theme"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "bagueur"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "pays"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "dept"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "localite"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "annee"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "numsemaine"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "date"), "y/m/d"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "lieudit"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "fs"), "html", null, true);
        echo "</td>
\t\t</tr>
\t</body>
</table>

<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Hs</th>
\t\t\t<th>Ds</th>
\t\t\t<th>Heure</th>
\t\t\t<th>Action</th>
\t\t\t<th>Centre</th>
\t\t\t<th>Bague</th>
\t\t\t<th>Circ Repr</th>
\t\t\t<th>Cond Repr</th>
\t\t\t<th>Nom scientifique</th>
\t\t\t<th>Nom vernaculaire</th>
\t\t\t<th>Espèce</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "hs"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "ds"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "heure")), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "action"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "centre"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "bague"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "circrepr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "condrepr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "nomscientifique"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "nomvernaculaire"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "espece"), "html", null, true);
        echo "</td>
\t\t</tr>
\t</tbody>
</table>

<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Sexe</th>
\t\t\t<th>Age</th>
\t\t\t<th>Lp</th>
\t\t\t<th>Ad</th>
\t\t\t<th>Ma</th>
\t\t\t<th>Secteur</th>
\t\t\t<th>Bg</th>
\t\t\t<th>Cs</th>
\t\t\t<th>Pc</th>
\t\t\t<th>Pi</th>
\t\t\t<th>Mu</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "sexe"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "age"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "lp"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "ad"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "ma"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "secteur"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "bg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "cs"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "pc"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "pi"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "mu"), "html", null, true);
        echo "</td>
\t\t</tr>
\t</tbody>
</table>

<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Es</th>
\t\t\t<th>Nf</th>
\t\t\t<th>Sg</th>
\t\t\t<th>Re</th>
\t\t\t<th>Rr</th>
\t\t\t<th>Ge</th>
\t\t\t<th>Lattitude</th>
\t\t\t<th>Longitude</th>
\t\t\t<th>Fi</th>
\t\t\t<th>Fg</th>
\t\t\t<th>Fd</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td>";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "es"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "nf"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "sg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "re"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "rr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "ge"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "lat"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "lon"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "fi"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "fg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "fd"), "html", null, true);
        echo "</td>
\t\t</tr>
\t</tbody>
</table>

<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Classe</th>
\t\t\t<th>tl</th>
\t\t\t<th>lt</th>
\t\t\t<th>bp</th>
\t\t\t<th>tq</th>
\t\t\t<th>cr</th>
\t\t\t<th>X1</th>
\t\t\t<th>X2</th>
\t\t\t<th>Memo</th>
\t\t</tr>
\t</thead>
\t</tbody>
\t\t<tr>
\t\t\t<td>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "classe"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "tl"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "lt"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "bp"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "tq"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "cr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "x1"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "x2"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "memo"), "html", null, true);
        echo "</td>
\t\t</tr>
\t</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:voirplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 174,  371 => 173,  367 => 172,  363 => 171,  359 => 170,  351 => 168,  347 => 167,  323 => 146,  315 => 144,  311 => 143,  307 => 142,  303 => 141,  299 => 140,  295 => 139,  291 => 138,  287 => 137,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 108,  233 => 107,  225 => 105,  191 => 80,  175 => 76,  167 => 74,  155 => 71,  113 => 44,  23 => 2,  20 => 1,  431 => 217,  343 => 131,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 70,  178 => 66,  174 => 65,  170 => 64,  146 => 52,  197 => 69,  150 => 53,  84 => 48,  58 => 14,  165 => 61,  161 => 58,  152 => 57,  124 => 8,  118 => 6,  90 => 48,  76 => 31,  127 => 45,  97 => 40,  81 => 26,  77 => 25,  70 => 33,  53 => 13,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 169,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 136,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 109,  229 => 106,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 55,  132 => 51,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 104,  219 => 76,  217 => 103,  208 => 68,  204 => 72,  179 => 77,  159 => 72,  143 => 67,  135 => 47,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  201 => 92,  196 => 72,  183 => 78,  171 => 75,  166 => 64,  163 => 73,  158 => 67,  156 => 66,  151 => 70,  142 => 43,  138 => 49,  136 => 56,  121 => 46,  117 => 45,  105 => 42,  91 => 30,  62 => 16,  49 => 11,  94 => 43,  89 => 38,  85 => 37,  75 => 17,  68 => 23,  56 => 9,  38 => 5,  26 => 6,  87 => 47,  31 => 3,  21 => 2,  28 => 5,  24 => 4,  25 => 3,  19 => 1,  93 => 39,  88 => 49,  78 => 21,  46 => 10,  44 => 8,  27 => 4,  79 => 28,  72 => 46,  69 => 23,  47 => 11,  40 => 5,  37 => 10,  22 => 2,  246 => 89,  157 => 59,  145 => 44,  139 => 48,  131 => 46,  123 => 58,  120 => 41,  115 => 56,  111 => 55,  108 => 38,  101 => 41,  98 => 31,  96 => 45,  83 => 35,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 11,  43 => 6,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 79,  182 => 67,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 57,  154 => 54,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 61,  125 => 47,  122 => 63,  116 => 40,  112 => 39,  109 => 43,  106 => 36,  103 => 53,  99 => 32,  95 => 50,  92 => 49,  86 => 24,  82 => 22,  80 => 23,  73 => 24,  64 => 28,  60 => 18,  57 => 12,  54 => 15,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 8,  33 => 4,  30 => 2,);
    }
}
