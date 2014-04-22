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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste"));
        foreach ($context['_seq'] as $context["_key"] => $context["documents"]) {
            if (($this->getAttribute($this->getContext($context, "documents"), "type") == "contact")) {
                // line 28
                echo "\t\t\t\t<a href=\"/Symfony/web/uploads/documents/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "path"), "html", null, true);
                echo "\" target='_blank'><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "format"), "html", null, true);
                echo ".gif\" alt=\"Download full PDF\" border='0'>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "name"), "html", null, true);
                echo "</a>
";
                // line 30
                echo "\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($this->getContext($context, "documents"), "id"))), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste"));
        foreach ($context['_seq'] as $context["_key"] => $context["documents"]) {
            if (($this->getAttribute($this->getContext($context, "documents"), "type") == "baguage")) {
                echo "   
\t\t\t\t<a href=\"/Symfony/web/uploads/documents/";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "path"), "html", null, true);
                echo "\" target='_blank'><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "format"), "html", null, true);
                echo ".gif\" alt=\"Download full PDF\" border='0'>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "name"), "html", null, true);
                echo "</a>
";
                // line 49
                echo "<a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($this->getContext($context, "documents"), "id"))), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste"));
        foreach ($context['_seq'] as $context["_key"] => $context["documents"]) {
            if (($this->getAttribute($this->getContext($context, "documents"), "type") == "gestion")) {
                // line 65
                echo "\t\t\t\t<a href=\"/Symfony/web/uploads/documents/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "path"), "html", null, true);
                echo "\" target='_blank'><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/img"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "format"), "html", null, true);
                echo ".gif\" alt=\"Download full PDF\" border='0'>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "name"), "html", null, true);
                echo "</a>
";
                // line 66
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($this->getContext($context, "documents"), "id"))), "html", null, true);
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
\t

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
        return array (  197 => 69,  150 => 72,  84 => 48,  58 => 11,  165 => 61,  161 => 60,  152 => 57,  124 => 8,  118 => 6,  90 => 30,  76 => 31,  127 => 59,  97 => 31,  81 => 40,  77 => 22,  70 => 33,  53 => 9,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 62,  140 => 55,  132 => 51,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 76,  143 => 67,  135 => 16,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 65,  166 => 64,  163 => 62,  158 => 67,  156 => 66,  151 => 51,  142 => 43,  138 => 49,  136 => 56,  121 => 47,  117 => 44,  105 => 33,  91 => 50,  62 => 23,  49 => 13,  94 => 43,  89 => 43,  85 => 25,  75 => 17,  68 => 23,  56 => 9,  38 => 5,  26 => 6,  87 => 25,  31 => 6,  21 => 2,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  93 => 44,  88 => 49,  78 => 21,  46 => 8,  44 => 7,  27 => 4,  79 => 28,  72 => 30,  69 => 17,  47 => 11,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 59,  145 => 44,  139 => 65,  131 => 60,  123 => 58,  120 => 40,  115 => 56,  111 => 55,  108 => 36,  101 => 32,  98 => 31,  96 => 45,  83 => 35,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 7,  43 => 7,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 66,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 57,  154 => 73,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 61,  125 => 44,  122 => 63,  116 => 41,  112 => 55,  109 => 56,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 21,  86 => 24,  82 => 22,  80 => 23,  73 => 21,  64 => 28,  60 => 18,  57 => 12,  54 => 10,  51 => 12,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 8,  33 => 4,  30 => 3,);
    }
}
