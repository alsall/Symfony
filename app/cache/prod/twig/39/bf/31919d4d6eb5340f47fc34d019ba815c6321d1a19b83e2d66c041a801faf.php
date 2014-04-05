<?php

/* PnpcScopsBundle:Scops:voir.html.twig */
class __TwigTemplate_39bf31919d4d6eb5340f47fc34d019ba815c6321d1a19b83e2d66c041a801faf extends Twig_Template
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
        echo "<table>
    
\t\t
\t\t<a class=\"btn alignement\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("avro_csv_import_upload", array("alias" => "info"));
        echo "\">Importer</a>
\t\t<a class=\"btn alignement\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("avro_csv_export_export", array("alias" => "info"));
        echo "\">Exporter</a>
\t\t<a class=\"btn alignement\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_request_form");
        echo "\">Requetes</a>

    

<br><br>
    ";
        // line 29
        echo "</table>\t
\t
<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t\t<tr>
\t\t\t\t<th>id</th>
\t\t\t\t<th>Theme</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>N° semaine</th>
\t\t\t\t<th>Localité</th>
\t\t\t\t<th>Lieudit</th>
\t\t\t\t<th>Secteur</th>
\t\t\t\t<th>Action</th>
\t\t\t\t<th>Bg</th>
\t\t\t\t<th>Bague</th>
\t\t\t\t<th>Espèce</th>
\t\t\t\t<th>Option</th>\t
\t\t\t</tr>
\t</thead>\t
";
        // line 48
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_pagination_);
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 49
            echo "\t<tr>
\t\t<td>";
            // line 50
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "id"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 51
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "theme"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 52
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_info_, "date"), "y/m/d"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 53
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "numsemaine"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 54
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "localite"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 55
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "lieudit"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 56
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "secteur"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 57
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "action"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 58
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bg"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 59
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "bague"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 60
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_info_, "espece"), "html", null, true);
            echo "</td>
\t\t

\t\t<td>
\t\t\t<div class=\"btn-group\">
\t\t\t\t<a class=\"btn btn-mini btn-success\" href=\"";
            // line 65
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_voirplus", array("id" => $this->getAttribute($_info_, "id"))), "html", null, true);
            echo "\">Voir</a>
\t\t\t\t";
            // line 67
            echo "\t\t\t\t<button class=\"btn btn-mini btn-info dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a class=\"\"  href=\"";
            // line 72
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_modifier", array("id" => $this->getAttribute($_info_, "id"))), "html", null, true);
            echo "\">Modifier</a></li>
\t\t\t\t\t<li><a class=\"\" href=\"";
            // line 73
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimer", array("id" => $this->getAttribute($_info_, "id"))), "html", null, true);
            echo "\">Supprimer</a></li>
\t\t\t\t</ul>
\t\t\t\t";
            // line 76
            echo "\t\t\t</div>
\t\t</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
</table>
<div class=\"navigation\">
\t\t";
        // line 83
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        echo $this->env->getExtension('knp_pagination')->render($_pagination_);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 83,  174 => 76,  168 => 73,  156 => 67,  132 => 58,  42 => 8,  214 => 102,  210 => 101,  205 => 99,  184 => 8,  169 => 98,  151 => 65,  123 => 71,  119 => 70,  113 => 69,  94 => 54,  86 => 52,  83 => 51,  74 => 47,  23 => 1,  61 => 14,  103 => 29,  73 => 21,  68 => 19,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 73,  122 => 56,  117 => 55,  108 => 31,  102 => 52,  92 => 50,  84 => 48,  72 => 15,  69 => 17,  51 => 12,  48 => 7,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 51,  127 => 57,  112 => 54,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 100,  197 => 74,  195 => 86,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 6,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 55,  142 => 60,  136 => 75,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 16,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 42,  47 => 11,  28 => 4,  55 => 13,  38 => 5,  50 => 26,  110 => 20,  100 => 27,  89 => 49,  65 => 14,  63 => 29,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 40,  88 => 24,  80 => 15,  78 => 49,  46 => 10,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 21,  57 => 9,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 98,  196 => 64,  193 => 63,  187 => 9,  183 => 80,  180 => 59,  171 => 104,  166 => 51,  163 => 72,  160 => 49,  157 => 88,  149 => 42,  146 => 41,  140 => 46,  137 => 59,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 68,  107 => 53,  104 => 28,  97 => 51,  93 => 18,  90 => 53,  81 => 23,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 6,  37 => 12,  33 => 4,  30 => 6,);
    }
}
