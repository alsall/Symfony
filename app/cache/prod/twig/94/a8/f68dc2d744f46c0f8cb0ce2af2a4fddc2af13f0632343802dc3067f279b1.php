<?php

/* PnpcScopsBundle:Scops:modifier.html.twig */
class __TwigTemplate_94a8f68dc2d744f46c0f8cb0ce2af2a4fddc2af13f0632343802dc3067f279b1 extends Twig_Template
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
        echo "  Modification - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 8
        echo " 
 <h2>Modification des données</h2>

<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_voir");
        echo "\">Retour</a>
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
        // line 30
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "numero"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 31
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "theme"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 32
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bagueur"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 33
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "pays"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 34
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "dept"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 35
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "localite"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 36
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "annee"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 37
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "numsemaine"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 38
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_info_, "date")), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 39
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lieudit"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 40
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
        // line 63
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "hs"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 64
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ds"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 65
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_info_, "heure")), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 66
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "action"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 67
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "centre"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 68
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bague"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 69
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "circrepr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 70
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "condrepr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 71
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "nomscientifique"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 72
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "nomvernaculaire"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 73
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
        // line 96
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "sexe"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 97
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "age"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 98
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lp"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 99
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ad"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 100
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ma"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 101
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "secteur"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 102
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 103
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "cs"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 104
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "pc"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 105
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "pi"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 106
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
        // line 129
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "es"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 130
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "nf"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 131
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "sg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 132
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "re"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 133
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "rr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 134
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "ge"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 135
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lat"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 136
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lon"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 137
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "fi"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 138
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "fg"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 139
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
        // line 160
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "classe"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 161
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "tl"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 162
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lt"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 163
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bp"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 164
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "tq"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 165
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "cr"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 166
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "x1"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 167
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_info_, "x2"), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 168
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
        return "PnpcScopsBundle:Scops:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  79 => 32,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  399 => 168,  369 => 146,  364 => 145,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  128 => 45,  20 => 1,  379 => 116,  371 => 112,  354 => 143,  349 => 142,  337 => 98,  332 => 97,  322 => 95,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  288 => 85,  283 => 84,  278 => 83,  266 => 79,  244 => 73,  234 => 71,  217 => 66,  212 => 65,  200 => 77,  190 => 75,  175 => 72,  170 => 71,  165 => 70,  99 => 36,  87 => 24,  82 => 23,  199 => 66,  185 => 74,  95 => 30,  188 => 83,  174 => 76,  168 => 73,  156 => 65,  132 => 58,  42 => 8,  214 => 102,  210 => 79,  205 => 78,  184 => 8,  169 => 98,  151 => 64,  123 => 44,  119 => 40,  113 => 42,  94 => 35,  86 => 52,  83 => 51,  74 => 31,  23 => 2,  61 => 14,  103 => 40,  73 => 46,  68 => 19,  54 => 13,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 96,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 112,  279 => 78,  256 => 77,  251 => 71,  239 => 72,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 47,  134 => 39,  131 => 73,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 50,  84 => 33,  72 => 21,  69 => 30,  51 => 11,  48 => 11,  35 => 4,  29 => 3,  312 => 96,  308 => 94,  293 => 86,  285 => 90,  281 => 88,  277 => 110,  274 => 85,  271 => 80,  264 => 74,  261 => 78,  257 => 106,  253 => 102,  249 => 74,  247 => 104,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 44,  127 => 47,  112 => 54,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 68,  224 => 91,  221 => 90,  207 => 67,  197 => 74,  195 => 76,  192 => 72,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 45,  142 => 43,  136 => 48,  133 => 46,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 13,  114 => 39,  109 => 38,  106 => 20,  101 => 19,  85 => 22,  77 => 22,  67 => 42,  47 => 11,  28 => 4,  55 => 13,  38 => 5,  50 => 11,  110 => 20,  100 => 27,  89 => 34,  65 => 16,  63 => 29,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 4,  19 => 1,  98 => 39,  88 => 37,  80 => 15,  78 => 49,  46 => 10,  44 => 6,  36 => 6,  32 => 4,  27 => 12,  22 => 2,  60 => 14,  57 => 12,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 67,  215 => 80,  211 => 84,  208 => 70,  202 => 98,  196 => 73,  193 => 63,  187 => 9,  183 => 80,  180 => 73,  171 => 68,  166 => 67,  163 => 51,  160 => 49,  157 => 46,  149 => 49,  146 => 63,  140 => 46,  137 => 59,  129 => 38,  124 => 37,  121 => 24,  118 => 43,  115 => 39,  111 => 33,  107 => 53,  104 => 37,  97 => 51,  93 => 38,  90 => 53,  81 => 28,  70 => 23,  66 => 13,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 8,  41 => 6,  37 => 12,  33 => 4,  30 => 3,);
    }
}
