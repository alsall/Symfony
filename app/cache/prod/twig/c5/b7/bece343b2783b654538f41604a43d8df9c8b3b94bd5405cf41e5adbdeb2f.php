<?php

/* PnpcScopsBundle:Scops:supprimerdoc.html.twig */
class __TwigTemplate_c5b7bece343b2783b654538f41604a43d8df9c8b3b94bd5405cf41e5adbdeb2f extends Twig_Template
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
        echo "  Suppression - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intern_body($context, array $blocks = array())
    {
        // line 8
        echo " 

  <h2>Supprimer un document</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'enregistrement n° ";
        // line 13
        if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_documents_, "id"), "html", null, true);
        echo " ?
  </p>

  ";
        // line 17
        echo "  <form action=\"";
        if (isset($context["documents"])) { $_documents_ = $context["documents"]; } else { $_documents_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($_documents_, "id"))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pnpc_scops_doc");
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour aux documents
    </a>
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
  </form>
 
";
    }

    public function getTemplateName()
    {
        return "PnpcScopsBundle:Scops:supprimerdoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 78,  200 => 77,  190 => 75,  175 => 72,  165 => 70,  113 => 42,  23 => 2,  20 => 1,  87 => 47,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 85,  268 => 84,  263 => 83,  258 => 82,  246 => 78,  241 => 77,  236 => 76,  229 => 73,  214 => 70,  182 => 58,  169 => 53,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 74,  74 => 27,  188 => 83,  168 => 73,  156 => 48,  151 => 47,  132 => 58,  42 => 8,  103 => 40,  68 => 19,  174 => 54,  170 => 71,  153 => 57,  139 => 17,  128 => 45,  125 => 8,  95 => 50,  91 => 41,  73 => 46,  119 => 6,  86 => 26,  64 => 15,  61 => 14,  54 => 13,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 89,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 73,  251 => 79,  239 => 69,  231 => 68,  219 => 71,  201 => 66,  143 => 43,  138 => 47,  134 => 43,  131 => 42,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 49,  84 => 48,  72 => 15,  69 => 29,  51 => 11,  48 => 11,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 106,  253 => 77,  249 => 76,  247 => 104,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 56,  147 => 51,  127 => 47,  112 => 54,  96 => 25,  76 => 24,  71 => 23,  39 => 7,  227 => 92,  224 => 72,  221 => 90,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 60,  181 => 67,  178 => 64,  173 => 58,  162 => 60,  158 => 59,  155 => 58,  152 => 55,  142 => 60,  136 => 48,  133 => 46,  130 => 61,  120 => 40,  105 => 31,  75 => 24,  53 => 9,  114 => 22,  109 => 54,  106 => 20,  101 => 19,  85 => 22,  77 => 31,  67 => 15,  47 => 11,  28 => 4,  55 => 13,  38 => 5,  50 => 11,  110 => 56,  100 => 27,  89 => 49,  65 => 16,  63 => 19,  58 => 18,  34 => 4,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 39,  88 => 37,  80 => 15,  78 => 22,  46 => 10,  44 => 8,  36 => 8,  32 => 4,  27 => 3,  22 => 2,  60 => 14,  57 => 12,  43 => 6,  40 => 5,  232 => 72,  226 => 71,  222 => 76,  215 => 80,  211 => 84,  208 => 70,  202 => 66,  196 => 64,  193 => 63,  187 => 62,  183 => 80,  180 => 73,  171 => 54,  166 => 61,  163 => 51,  160 => 49,  157 => 48,  149 => 49,  146 => 46,  140 => 46,  137 => 59,  129 => 36,  124 => 35,  121 => 24,  118 => 43,  115 => 57,  111 => 33,  107 => 53,  104 => 28,  97 => 51,  93 => 38,  90 => 48,  81 => 25,  70 => 23,  66 => 16,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 8,  41 => 7,  37 => 5,  33 => 4,  30 => 2,);
    }
}
