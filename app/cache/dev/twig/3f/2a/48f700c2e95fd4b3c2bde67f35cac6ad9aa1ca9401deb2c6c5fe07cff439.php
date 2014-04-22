<?php

/* PnpcTortueHermannBundle:TortueHermann:supprimerdoc.html.twig */
class __TwigTemplate_3f2a48f700c2e95fd4b3c2bde67f35cac6ad9aa1ca9401deb2c6c5fe07cff439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PnpcTortueHermannBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        return "PnpcTortueHermannBundle:TortueHermann:supprimerdoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 93,  234 => 91,  226 => 87,  212 => 76,  198 => 71,  194 => 70,  190 => 69,  186 => 68,  110 => 37,  180 => 65,  172 => 63,  181 => 81,  148 => 51,  137 => 46,  104 => 51,  129 => 44,  126 => 27,  114 => 38,  100 => 33,  65 => 20,  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 171,  359 => 170,  351 => 168,  347 => 167,  323 => 146,  315 => 144,  311 => 143,  307 => 142,  303 => 141,  299 => 140,  295 => 139,  291 => 138,  287 => 137,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 108,  233 => 107,  225 => 105,  191 => 80,  175 => 76,  167 => 74,  155 => 71,  113 => 44,  23 => 2,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 94,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 88,  178 => 80,  174 => 65,  170 => 77,  146 => 52,  197 => 69,  150 => 72,  84 => 48,  58 => 14,  165 => 38,  161 => 58,  152 => 52,  124 => 62,  118 => 39,  90 => 30,  76 => 31,  127 => 59,  97 => 40,  81 => 40,  77 => 22,  70 => 33,  53 => 13,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 169,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 136,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 109,  229 => 106,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 66,  132 => 65,  128 => 48,  107 => 54,  61 => 18,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 104,  219 => 76,  217 => 103,  208 => 75,  204 => 74,  179 => 77,  159 => 72,  143 => 67,  135 => 29,  119 => 57,  102 => 32,  71 => 22,  67 => 21,  63 => 29,  59 => 12,  201 => 96,  196 => 72,  183 => 78,  171 => 75,  166 => 64,  163 => 73,  158 => 67,  156 => 66,  151 => 70,  142 => 43,  138 => 49,  136 => 56,  121 => 46,  117 => 45,  105 => 42,  91 => 50,  62 => 16,  49 => 13,  94 => 51,  89 => 38,  85 => 37,  75 => 23,  68 => 23,  56 => 35,  38 => 5,  26 => 12,  87 => 49,  31 => 3,  21 => 2,  28 => 5,  24 => 4,  25 => 3,  19 => 1,  93 => 39,  88 => 49,  78 => 21,  46 => 10,  44 => 8,  27 => 5,  79 => 24,  72 => 46,  69 => 17,  47 => 11,  40 => 5,  37 => 4,  22 => 3,  246 => 89,  157 => 59,  145 => 44,  139 => 65,  131 => 60,  123 => 58,  120 => 57,  115 => 56,  111 => 55,  108 => 22,  101 => 41,  98 => 31,  96 => 48,  83 => 17,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 11,  43 => 6,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 79,  182 => 66,  176 => 64,  173 => 83,  168 => 62,  164 => 59,  162 => 74,  154 => 73,  149 => 73,  147 => 66,  144 => 50,  141 => 70,  133 => 45,  130 => 61,  125 => 47,  122 => 63,  116 => 40,  112 => 55,  109 => 43,  106 => 36,  103 => 53,  99 => 52,  95 => 51,  92 => 49,  86 => 24,  82 => 22,  80 => 23,  73 => 21,  64 => 15,  60 => 18,  57 => 17,  54 => 34,  51 => 12,  48 => 11,  45 => 30,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 2,);
    }
}
