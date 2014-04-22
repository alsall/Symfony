<?php

/* PnpcTortueHermannBundle:TortueHermann:doc.html.twig */
class __TwigTemplate_1f81e925e4b49a7389180ed52c78390fe86898f9f4af131fa861668e6089bca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcTortueHermannBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'intern_body' => array($this, 'block_intern_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PnpcTortueHermannBundle::layout.html.twig";
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
        return "PnpcTortueHermannBundle:TortueHermann:doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 47,  172 => 42,  181 => 81,  148 => 69,  137 => 65,  104 => 51,  129 => 64,  126 => 27,  114 => 24,  100 => 33,  65 => 35,  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 76,  155 => 34,  113 => 55,  23 => 4,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 88,  178 => 80,  174 => 65,  170 => 77,  146 => 52,  197 => 69,  150 => 72,  84 => 48,  58 => 11,  165 => 38,  161 => 58,  152 => 74,  124 => 62,  118 => 25,  90 => 30,  76 => 31,  127 => 59,  97 => 31,  81 => 40,  77 => 22,  70 => 33,  53 => 9,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 133,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 66,  132 => 65,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 68,  204 => 72,  179 => 84,  159 => 76,  143 => 67,  135 => 29,  119 => 57,  102 => 32,  71 => 19,  67 => 20,  63 => 29,  59 => 12,  201 => 96,  196 => 72,  183 => 78,  171 => 65,  166 => 64,  163 => 78,  158 => 67,  156 => 66,  151 => 51,  142 => 43,  138 => 49,  136 => 56,  121 => 47,  117 => 45,  105 => 33,  91 => 50,  62 => 19,  49 => 13,  94 => 51,  89 => 43,  85 => 34,  75 => 43,  68 => 23,  56 => 35,  38 => 5,  26 => 12,  87 => 49,  31 => 3,  21 => 2,  28 => 2,  24 => 7,  25 => 3,  19 => 2,  93 => 44,  88 => 49,  78 => 21,  46 => 8,  44 => 7,  27 => 5,  79 => 28,  72 => 22,  69 => 17,  47 => 11,  40 => 6,  37 => 4,  22 => 3,  246 => 89,  157 => 59,  145 => 44,  139 => 65,  131 => 60,  123 => 58,  120 => 57,  115 => 56,  111 => 55,  108 => 22,  101 => 38,  98 => 31,  96 => 48,  83 => 17,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 7,  43 => 7,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 66,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 74,  154 => 73,  149 => 73,  147 => 66,  144 => 49,  141 => 70,  133 => 55,  130 => 61,  125 => 59,  122 => 63,  116 => 40,  112 => 55,  109 => 54,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 49,  86 => 24,  82 => 22,  80 => 23,  73 => 21,  64 => 15,  60 => 18,  57 => 12,  54 => 34,  51 => 12,  48 => 11,  45 => 30,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
