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
        return array (  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  399 => 168,  369 => 146,  364 => 145,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  128 => 45,  20 => 1,  379 => 116,  371 => 112,  354 => 143,  349 => 142,  337 => 98,  332 => 97,  322 => 95,  315 => 92,  310 => 91,  305 => 90,  300 => 89,  288 => 85,  283 => 84,  278 => 83,  266 => 79,  244 => 73,  234 => 71,  217 => 66,  212 => 65,  200 => 77,  190 => 75,  175 => 72,  170 => 71,  165 => 70,  99 => 28,  87 => 24,  82 => 23,  199 => 66,  185 => 74,  95 => 30,  188 => 83,  174 => 76,  168 => 73,  156 => 67,  132 => 58,  42 => 8,  214 => 102,  210 => 79,  205 => 78,  184 => 8,  169 => 98,  151 => 65,  123 => 44,  119 => 36,  113 => 42,  94 => 27,  86 => 52,  83 => 51,  74 => 27,  23 => 2,  61 => 14,  103 => 40,  73 => 46,  68 => 19,  54 => 13,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 89,  327 => 96,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 112,  279 => 78,  256 => 77,  251 => 71,  239 => 72,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 47,  134 => 39,  131 => 73,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 50,  84 => 48,  72 => 21,  69 => 17,  51 => 11,  48 => 11,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 86,  285 => 90,  281 => 88,  277 => 110,  274 => 85,  271 => 80,  264 => 74,  261 => 78,  257 => 106,  253 => 77,  249 => 74,  247 => 104,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 44,  127 => 47,  112 => 54,  96 => 25,  76 => 19,  71 => 17,  39 => 7,  227 => 68,  224 => 91,  221 => 90,  207 => 67,  197 => 74,  195 => 76,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 45,  142 => 43,  136 => 48,  133 => 46,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 13,  114 => 22,  109 => 30,  106 => 20,  101 => 19,  85 => 22,  77 => 22,  67 => 42,  47 => 9,  28 => 4,  55 => 13,  38 => 5,  50 => 11,  110 => 20,  100 => 27,  89 => 49,  65 => 16,  63 => 29,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  98 => 39,  88 => 37,  80 => 15,  78 => 49,  46 => 10,  44 => 7,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 14,  57 => 12,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 67,  215 => 80,  211 => 84,  208 => 70,  202 => 98,  196 => 64,  193 => 63,  187 => 9,  183 => 80,  180 => 73,  171 => 104,  166 => 51,  163 => 51,  160 => 49,  157 => 46,  149 => 49,  146 => 41,  140 => 46,  137 => 59,  129 => 38,  124 => 37,  121 => 24,  118 => 43,  115 => 39,  111 => 33,  107 => 53,  104 => 29,  97 => 51,  93 => 38,  90 => 53,  81 => 28,  70 => 23,  66 => 13,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 8,  41 => 6,  37 => 12,  33 => 4,  30 => 3,);
    }
}
