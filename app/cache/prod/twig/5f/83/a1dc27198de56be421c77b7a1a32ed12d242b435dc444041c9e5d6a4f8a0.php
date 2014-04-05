<?php

/* PnpcScopsBundle:Scops:doc.html.twig */
class __TwigTemplate_5f83a1dc27198de56be421c77b7a1a32ed12d242b435dc444041c9e5d6a4f8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcScopsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "  Liste des Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo " <h4>Liste des documents</h4>
";
        // line 8
        $this->displayBlock('intern_body', $context, $blocks);
    }

    public function block_intern_body($context, array $blocks = array())
    {
        // line 10
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_upload");
        echo "\" class=\"btn\">Ajouter un document</a><br><br>
";
        // line 12
        echo "

 
 
\t<div class=\"accordion\" id=\"accordion2\">
\t\t<div class=\"accordion-group\">
\t\t\t<div class=\"accordion-heading\">
\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
\t\t\t\t\tContacts collaborateurs
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"collapseOne\" class=\"accordion-body collapse\">
\t\t
\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t
\t\t\t";
        // line 27
        if (isset($context["liste"])) { $_liste_ = $context["liste"]; } else { $_liste_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_liste_);
        foreach ($context['_seq'] as $context["_key"] => $context["documents"]) {
            if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
            if (($this->getAttribute($_documents_, "type") == "contact")) {
                // line 28
                echo "\t\t\t\t<a href=\"/Symfony/web/uploads/documents/";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "path"), "html", null, true);
                echo "\" target='_blank'><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img"), "html", null, true);
                echo "/";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "format"), "html", null, true);
                echo ".gif\" alt=\"Download full PDF\" border='0'>";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "name"), "html", null, true);
                echo "</a>
";
                // line 30
                echo "\t<a href=\"";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($_documents_, "id"))), "html", null, true);
                echo "\"><img class=\"img-rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img/iconedelete.jpg"), "html", null, true);
                echo "\"></a>
";
                // line 31
                echo " 
\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"accordion-group\">
\t\t\t<div class=\"accordion-heading\">
\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">
\t\t\t\t\tDocuments de baguage
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"collapseTwo\" class=\"accordion-body collapse\">
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t";
        // line 47
        if (isset($context["liste"])) { $_liste_ = $context["liste"]; } else { $_liste_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_liste_);
        foreach ($context['_seq'] as $context["_key"] => $context["documents"]) {
            if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
            if (($this->getAttribute($_documents_, "type") == "baguage")) {
                echo "   
\t\t\t\t<a href=\"/Symfony/web/uploads/documents/";
                // line 48
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "path"), "html", null, true);
                echo "\" target='_blank'><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img"), "html", null, true);
                echo "/";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "format"), "html", null, true);
                echo ".gif\" alt=\"Download full PDF\" border='0'>";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "name"), "html", null, true);
                echo "</a>
";
                // line 49
                echo "<a  href=\"";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($_documents_, "id"))), "html", null, true);
                echo "\"><img class=\"img-rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img/iconedelete.jpg"), "html", null, true);
                echo "\"></a>";
                echo "<br/>
\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"accordion-group\">
\t\t\t<div class=\"accordion-heading\">
\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseThree\">
\t\t\t\t\tDocuments administratifs
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div id=\"collapseThree\" class=\"accordion-body collapse\">
\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t";
        // line 64
        if (isset($context["liste"])) { $_liste_ = $context["liste"]; } else { $_liste_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_liste_);
        foreach ($context['_seq'] as $context["_key"] => $context["documents"]) {
            if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
            if (($this->getAttribute($_documents_, "type") == "gestion")) {
                // line 65
                echo "\t\t\t\t<a href=\"/Symfony/web/uploads/documents/";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "path"), "html", null, true);
                echo "\" target='_blank'><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img"), "html", null, true);
                echo "/";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "format"), "html", null, true);
                echo ".gif\" alt=\"Download full PDF\" border='0'>";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "name"), "html", null, true);
                echo "</a>
";
                // line 66
                echo "<a href=\"";
                if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($_documents_, "id"))), "html", null, true);
                echo "\"><img class=\"img-rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img/iconedelete.jpg"), "html", null, true);
                echo "\"></a>
";
                // line 67
                echo "<br/>
\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

 ";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 66,  185 => 65,  95 => 30,  188 => 83,  174 => 76,  168 => 73,  156 => 67,  132 => 58,  42 => 8,  214 => 102,  210 => 101,  205 => 99,  184 => 8,  169 => 98,  151 => 65,  123 => 71,  119 => 70,  113 => 69,  94 => 54,  86 => 52,  83 => 51,  74 => 27,  23 => 1,  61 => 14,  103 => 31,  73 => 21,  68 => 19,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 73,  122 => 56,  117 => 55,  108 => 31,  102 => 52,  92 => 50,  84 => 48,  72 => 15,  69 => 17,  51 => 12,  48 => 11,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 51,  127 => 47,  112 => 54,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 67,  197 => 74,  195 => 86,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 55,  142 => 60,  136 => 48,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 16,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 42,  47 => 11,  28 => 4,  55 => 13,  38 => 5,  50 => 26,  110 => 20,  100 => 27,  89 => 49,  65 => 14,  63 => 29,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 40,  88 => 24,  80 => 15,  78 => 49,  46 => 8,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 21,  57 => 12,  43 => 7,  40 => 6,  232 => 72,  226 => 71,  222 => 76,  215 => 69,  211 => 84,  208 => 70,  202 => 98,  196 => 64,  193 => 63,  187 => 9,  183 => 80,  180 => 59,  171 => 104,  166 => 51,  163 => 51,  160 => 49,  157 => 88,  149 => 49,  146 => 41,  140 => 46,  137 => 59,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 33,  107 => 53,  104 => 28,  97 => 51,  93 => 18,  90 => 53,  81 => 28,  70 => 23,  66 => 13,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 6,  41 => 6,  37 => 12,  33 => 4,  30 => 3,);
    }
}
