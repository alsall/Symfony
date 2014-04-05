<?php

/* PnpcScopsBundle:Scops:diapo.html.twig */
class __TwigTemplate_292a1739151c8121289067a81f3678469e3cc0c3887e0701f653ee0f7f5edf25 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "photos
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " <h4>Galerie photos</h4>
";
        // line 7
        $this->displayBlock('intern_body', $context, $blocks);
        // line 35
        echo "\t";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 9
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_uploadImage");
        echo "\" class=\"btn\">Ajouter une photo</a><br><br>
";
        // line 11
        echo "    <div id=\"myCarousel\" class=\"carousel slide\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t</ol>
\t\t<!-- Carousel items -->
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"active item\"><img alt=\"\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/PRL117.jpg"), "html", null, true);
        echo "\"></img>
\t\t\t\t<div class=\"carousel-caption\"><p>Image oiseau</p></div></div>
\t\t\t\t";
        // line 21
        if (isset($context["liste"])) { $_liste_ = $context["liste"]; } else { $_liste_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_liste_);
        foreach ($context['_seq'] as $context["_key"] => $context["galerie"]) {
            // line 22
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"item\"><img alt=\"\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images"), "html", null, true);
            echo "/";
            if (isset($context["galerie"])) { $_galerie_ = $context["galerie"]; } else { $_galerie_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_galerie_, "path"), "html", null, true);
            echo "\" ></img>
\t\t\t\t\t\t<div class=\"carousel-caption\"><p>";
            // line 24
            if (isset($context["galerie"])) { $_galerie_ = $context["galerie"]; } else { $_galerie_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_galerie_, "commentaire"), "html", null, true);
            echo ". Image postée par ";
            if (isset($context["galerie"])) { $_galerie_ = $context["galerie"]; } else { $_galerie_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_galerie_, "auteur"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</div>
\t\t<!-- Carousel nav -->
\t\t<a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t<a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:diapo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  73 => 21,  68 => 19,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 9,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 15,  47 => 6,  28 => 4,  55 => 15,  38 => 5,  50 => 7,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 11,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 40,  88 => 24,  80 => 15,  78 => 22,  46 => 35,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 21,  57 => 9,  43 => 7,  40 => 6,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 23,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 6,  37 => 5,  33 => 3,  30 => 2,);
    }
}
