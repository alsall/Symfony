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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "documents"), "id"), "html", null, true);
        echo " ?
  </p>

  ";
        // line 17
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pnpc_scops_supprimerdoc", array("id" => $this->getAttribute($this->getContext($context, "documents"), "id"))), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        return array (  375 => 174,  371 => 173,  367 => 172,  363 => 171,  359 => 170,  351 => 168,  347 => 167,  323 => 146,  319 => 145,  315 => 144,  311 => 143,  307 => 142,  303 => 141,  299 => 140,  295 => 139,  291 => 138,  287 => 137,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 108,  233 => 107,  225 => 105,  191 => 80,  175 => 76,  167 => 74,  20 => 1,  324 => 116,  317 => 112,  306 => 104,  302 => 103,  288 => 98,  284 => 97,  280 => 96,  276 => 95,  270 => 92,  266 => 91,  262 => 90,  248 => 85,  244 => 84,  234 => 80,  226 => 78,  222 => 77,  216 => 74,  212 => 73,  198 => 68,  190 => 66,  180 => 62,  172 => 60,  155 => 71,  100 => 30,  70 => 21,  97 => 40,  127 => 59,  84 => 48,  213 => 102,  206 => 100,  197 => 69,  194 => 67,  186 => 65,  170 => 104,  150 => 72,  126 => 72,  118 => 70,  113 => 44,  90 => 30,  23 => 2,  77 => 22,  58 => 14,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 169,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 102,  294 => 101,  285 => 89,  283 => 136,  278 => 86,  268 => 85,  264 => 84,  258 => 89,  252 => 86,  247 => 78,  241 => 109,  229 => 106,  220 => 70,  214 => 69,  177 => 6,  169 => 60,  140 => 46,  132 => 44,  128 => 43,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 83,  238 => 85,  235 => 74,  230 => 79,  227 => 81,  224 => 71,  221 => 104,  219 => 76,  217 => 103,  208 => 72,  204 => 71,  179 => 77,  159 => 72,  143 => 67,  135 => 75,  119 => 57,  102 => 32,  71 => 19,  67 => 42,  63 => 29,  59 => 14,  201 => 98,  196 => 90,  183 => 78,  171 => 75,  166 => 64,  163 => 73,  158 => 67,  156 => 88,  151 => 70,  142 => 59,  138 => 49,  136 => 45,  121 => 46,  117 => 45,  105 => 42,  91 => 50,  62 => 16,  49 => 13,  94 => 54,  89 => 38,  85 => 37,  75 => 17,  68 => 23,  56 => 14,  38 => 5,  26 => 6,  87 => 25,  31 => 4,  21 => 2,  28 => 5,  24 => 4,  25 => 3,  19 => 1,  93 => 39,  88 => 27,  78 => 23,  46 => 10,  44 => 8,  27 => 4,  79 => 28,  72 => 46,  69 => 25,  47 => 9,  40 => 7,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 60,  123 => 58,  120 => 40,  115 => 56,  111 => 55,  108 => 36,  101 => 41,  98 => 31,  96 => 29,  83 => 51,  74 => 22,  66 => 24,  55 => 17,  52 => 10,  50 => 11,  43 => 8,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 101,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 79,  182 => 66,  176 => 61,  173 => 83,  168 => 59,  164 => 59,  162 => 57,  154 => 73,  149 => 51,  147 => 50,  144 => 49,  141 => 76,  133 => 55,  130 => 73,  125 => 47,  122 => 71,  116 => 41,  112 => 42,  109 => 43,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 28,  86 => 52,  82 => 24,  80 => 23,  73 => 21,  64 => 18,  60 => 18,  57 => 12,  54 => 10,  51 => 12,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
