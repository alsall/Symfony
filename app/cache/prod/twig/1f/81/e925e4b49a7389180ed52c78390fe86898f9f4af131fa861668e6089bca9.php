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
        return array (  179 => 38,  172 => 35,  167 => 34,  220 => 80,  203 => 75,  184 => 70,  159 => 61,  154 => 60,  145 => 58,  135 => 55,  230 => 88,  209 => 81,  206 => 80,  126 => 25,  144 => 39,  82 => 31,  21 => 2,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 81,  191 => 72,  176 => 69,  161 => 66,  99 => 45,  94 => 47,  79 => 40,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 76,  200 => 74,  190 => 75,  175 => 72,  165 => 65,  113 => 52,  23 => 4,  20 => 1,  87 => 17,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 84,  214 => 70,  182 => 73,  169 => 70,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 65,  74 => 27,  188 => 83,  168 => 73,  156 => 67,  151 => 65,  132 => 58,  42 => 8,  103 => 31,  68 => 19,  174 => 76,  170 => 71,  153 => 57,  139 => 17,  128 => 52,  125 => 51,  95 => 30,  91 => 41,  73 => 21,  119 => 60,  86 => 42,  64 => 15,  61 => 14,  54 => 13,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 73,  251 => 79,  239 => 69,  231 => 68,  219 => 71,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 26,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 50,  84 => 48,  72 => 34,  69 => 17,  51 => 12,  48 => 11,  35 => 6,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 76,  247 => 104,  237 => 73,  204 => 79,  198 => 65,  194 => 64,  150 => 63,  147 => 29,  127 => 47,  112 => 54,  96 => 44,  76 => 22,  71 => 20,  39 => 7,  227 => 92,  224 => 85,  221 => 84,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 71,  181 => 69,  178 => 64,  173 => 58,  162 => 31,  158 => 59,  155 => 64,  152 => 55,  142 => 60,  136 => 48,  133 => 46,  130 => 61,  120 => 40,  105 => 50,  75 => 35,  53 => 9,  114 => 22,  109 => 54,  106 => 27,  101 => 19,  85 => 22,  77 => 38,  67 => 15,  47 => 11,  28 => 2,  55 => 13,  38 => 5,  50 => 7,  110 => 51,  100 => 49,  89 => 49,  65 => 12,  63 => 29,  58 => 11,  34 => 4,  26 => 12,  24 => 7,  25 => 18,  19 => 2,  98 => 39,  88 => 24,  80 => 15,  78 => 22,  46 => 8,  44 => 7,  36 => 6,  32 => 4,  27 => 5,  22 => 3,  60 => 11,  57 => 12,  43 => 7,  40 => 6,  232 => 72,  226 => 71,  222 => 76,  215 => 69,  211 => 84,  208 => 77,  202 => 66,  196 => 47,  193 => 63,  187 => 42,  183 => 80,  180 => 73,  171 => 68,  166 => 69,  163 => 51,  160 => 65,  157 => 48,  149 => 49,  146 => 62,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 24,  118 => 23,  115 => 57,  111 => 33,  107 => 53,  104 => 46,  97 => 51,  93 => 44,  90 => 48,  81 => 28,  70 => 23,  66 => 16,  62 => 18,  59 => 9,  56 => 17,  52 => 10,  49 => 13,  45 => 10,  41 => 6,  37 => 7,  33 => 4,  30 => 3,);
    }
}
