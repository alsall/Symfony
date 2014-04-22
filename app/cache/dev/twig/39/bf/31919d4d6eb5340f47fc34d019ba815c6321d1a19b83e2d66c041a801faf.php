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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 49
            echo "\t<tr>
\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "id"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "theme"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "date"), "y/m/d"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "numsemaine"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "localite"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "lieudit"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "secteur"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "action"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "bg"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "bague"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "espece"), "html", null, true);
            echo "</td>
\t\t

\t\t<td>
\t\t\t<div class=\"btn-group\">
\t\t\t\t<a class=\"btn btn-mini btn-success\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_voirplus", array("id" => $this->getAttribute($this->getContext($context, "info"), "id"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_modifier", array("id" => $this->getAttribute($this->getContext($context, "info"), "id"))), "html", null, true);
            echo "\">Modifier</a></li>
\t\t\t\t\t<li><a class=\"\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimer", array("id" => $this->getAttribute($this->getContext($context, "info"), "id"))), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
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
        return array (  150 => 72,  84 => 48,  58 => 11,  165 => 61,  161 => 60,  152 => 57,  124 => 8,  118 => 6,  90 => 41,  76 => 31,  127 => 59,  97 => 45,  81 => 40,  77 => 22,  70 => 33,  53 => 9,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 62,  140 => 55,  132 => 51,  128 => 49,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 76,  143 => 67,  135 => 16,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 43,  138 => 17,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 50,  62 => 23,  49 => 19,  94 => 43,  89 => 43,  85 => 25,  75 => 17,  68 => 19,  56 => 9,  38 => 5,  26 => 6,  87 => 25,  31 => 6,  21 => 2,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  93 => 44,  88 => 49,  78 => 21,  46 => 35,  44 => 7,  27 => 4,  79 => 18,  72 => 30,  69 => 17,  47 => 11,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 59,  145 => 44,  139 => 65,  131 => 60,  123 => 58,  120 => 40,  115 => 56,  111 => 55,  108 => 36,  101 => 32,  98 => 31,  96 => 45,  83 => 35,  74 => 14,  66 => 16,  55 => 13,  52 => 8,  50 => 7,  43 => 6,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 57,  154 => 73,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 61,  125 => 44,  122 => 63,  116 => 41,  112 => 55,  109 => 56,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 21,  86 => 24,  82 => 22,  80 => 23,  73 => 21,  64 => 28,  60 => 27,  57 => 11,  54 => 10,  51 => 12,  48 => 7,  45 => 17,  42 => 8,  39 => 7,  36 => 8,  33 => 3,  30 => 2,);
    }
}
