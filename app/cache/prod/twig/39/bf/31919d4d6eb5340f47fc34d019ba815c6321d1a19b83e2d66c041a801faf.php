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
        return array (  188 => 83,  168 => 73,  156 => 67,  151 => 65,  132 => 58,  42 => 8,  103 => 29,  68 => 19,  174 => 76,  170 => 62,  153 => 57,  139 => 17,  128 => 9,  125 => 8,  95 => 43,  91 => 41,  73 => 21,  119 => 6,  86 => 42,  64 => 15,  61 => 14,  54 => 14,  31 => 6,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 43,  138 => 44,  134 => 43,  131 => 42,  122 => 56,  117 => 55,  108 => 31,  102 => 52,  92 => 50,  84 => 48,  72 => 15,  69 => 29,  51 => 12,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 56,  147 => 51,  127 => 57,  112 => 54,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 60,  158 => 59,  155 => 58,  152 => 55,  142 => 60,  136 => 16,  133 => 43,  130 => 61,  120 => 40,  105 => 31,  75 => 24,  53 => 9,  114 => 22,  109 => 54,  106 => 20,  101 => 19,  85 => 22,  77 => 31,  67 => 15,  47 => 11,  28 => 4,  55 => 13,  38 => 5,  50 => 7,  110 => 56,  100 => 27,  89 => 49,  65 => 28,  63 => 29,  58 => 11,  34 => 4,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  98 => 40,  88 => 24,  80 => 15,  78 => 22,  46 => 35,  44 => 7,  36 => 8,  32 => 4,  27 => 3,  22 => 2,  60 => 27,  57 => 9,  43 => 6,  40 => 5,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 80,  180 => 59,  171 => 54,  166 => 61,  163 => 72,  160 => 49,  157 => 48,  149 => 42,  146 => 44,  140 => 46,  137 => 59,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 57,  111 => 32,  107 => 53,  104 => 28,  97 => 51,  93 => 44,  90 => 21,  81 => 23,  70 => 33,  66 => 16,  62 => 11,  59 => 15,  56 => 12,  52 => 8,  49 => 9,  45 => 6,  41 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
