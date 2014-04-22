<?php

/* PnpcCistudeEuropeBundle:CistudeEurope:voirplus.html.twig */
class __TwigTemplate_9a3633b8eb890788c5c0b83f5d3d8bef42b93bd5480f8085874528eb1525865e extends Twig_Template
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
        echo "  Baguage N°";
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "id"), "html", null, true);
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
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_modifier", array("id" => $this->getAttribute($_info_, "id"))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a>
<a href=\"";
        // line 14
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimer", array("id" => $this->getAttribute($_info_, "id"))), "html", null, true);
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
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "numero"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 38
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "theme"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 39
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bagueur"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 40
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "pays"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 41
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "dept"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 42
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "localite"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 43
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "annee"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 44
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "numsemaine"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 45
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_info_, "date"), "y/m/d"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 46
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lieudit"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 47
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "fs"), "html", null, true);
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
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "hs"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 71
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ds"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 72
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_info_, "heure")), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 73
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "action"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 74
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "centre"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 75
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bague"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 76
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "circrepr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 77
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "condrepr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 78
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "nomscientifique"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 79
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "nomvernaculaire"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 80
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "espece"), "html", null, true);
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
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "sexe"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 104
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "age"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 105
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lp"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 106
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ad"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 107
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ma"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 108
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "secteur"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 109
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 110
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "cs"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 111
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "pc"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 112
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "pi"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 113
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "mu"), "html", null, true);
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
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "es"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 137
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "nf"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 138
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "sg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 139
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "re"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 140
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "rr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 141
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ge"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 142
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lat"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 143
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lon"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 144
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "fi"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 145
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "fg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 146
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "fd"), "html", null, true);
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
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "classe"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 168
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "tl"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 169
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lt"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 170
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bp"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 171
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "tq"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 172
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "cr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 173
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "x1"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 174
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "x2"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 175
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "memo"), "html", null, true);
        echo "</td>
\t\t</tr>
\t</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "PnpcCistudeEuropeBundle:CistudeEurope:voirplus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 111,  342 => 109,  333 => 105,  288 => 88,  283 => 87,  278 => 86,  266 => 82,  276 => 94,  259 => 87,  244 => 76,  234 => 74,  217 => 69,  212 => 68,  116 => 36,  179 => 38,  172 => 52,  167 => 51,  220 => 80,  203 => 75,  184 => 70,  159 => 61,  154 => 46,  145 => 58,  135 => 55,  230 => 88,  209 => 81,  206 => 80,  126 => 38,  144 => 44,  82 => 31,  21 => 2,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 112,  345 => 110,  340 => 137,  335 => 136,  325 => 101,  320 => 133,  315 => 95,  310 => 94,  305 => 93,  300 => 92,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  99 => 36,  94 => 35,  79 => 23,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 78,  200 => 77,  190 => 75,  175 => 72,  165 => 70,  113 => 42,  23 => 2,  20 => 1,  87 => 17,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 84,  214 => 70,  182 => 73,  169 => 70,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 74,  74 => 22,  188 => 83,  168 => 73,  156 => 67,  151 => 65,  132 => 58,  42 => 7,  103 => 40,  68 => 25,  174 => 76,  170 => 71,  153 => 57,  139 => 43,  128 => 45,  125 => 51,  95 => 30,  91 => 27,  73 => 46,  119 => 60,  86 => 42,  64 => 15,  61 => 14,  54 => 13,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 80,  251 => 79,  239 => 75,  231 => 68,  219 => 71,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 39,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 50,  84 => 24,  72 => 34,  69 => 21,  51 => 11,  48 => 11,  35 => 6,  29 => 3,  312 => 96,  308 => 94,  293 => 89,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 83,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 77,  247 => 104,  237 => 73,  204 => 79,  198 => 65,  194 => 64,  150 => 63,  147 => 29,  127 => 47,  112 => 54,  96 => 28,  76 => 22,  71 => 26,  39 => 7,  227 => 71,  224 => 85,  221 => 84,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 50,  158 => 59,  155 => 64,  152 => 55,  142 => 60,  136 => 48,  133 => 46,  130 => 61,  120 => 40,  105 => 50,  75 => 35,  53 => 14,  114 => 39,  109 => 54,  106 => 30,  101 => 29,  85 => 22,  77 => 38,  67 => 15,  47 => 11,  28 => 2,  55 => 13,  38 => 5,  50 => 11,  110 => 51,  100 => 49,  89 => 49,  65 => 16,  63 => 23,  58 => 11,  34 => 4,  26 => 11,  24 => 4,  25 => 18,  19 => 1,  98 => 39,  88 => 37,  80 => 15,  78 => 22,  46 => 10,  44 => 8,  36 => 6,  32 => 4,  27 => 5,  22 => 3,  60 => 14,  57 => 17,  43 => 6,  40 => 5,  232 => 72,  226 => 71,  222 => 70,  215 => 80,  211 => 84,  208 => 77,  202 => 66,  196 => 73,  193 => 63,  187 => 42,  183 => 80,  180 => 73,  171 => 68,  166 => 67,  163 => 51,  160 => 65,  157 => 48,  149 => 45,  146 => 63,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 37,  118 => 43,  115 => 57,  111 => 33,  107 => 53,  104 => 37,  97 => 51,  93 => 38,  90 => 48,  81 => 28,  70 => 23,  66 => 24,  62 => 18,  59 => 9,  56 => 17,  52 => 10,  49 => 13,  45 => 8,  41 => 7,  37 => 4,  33 => 4,  30 => 2,);
    }
}
