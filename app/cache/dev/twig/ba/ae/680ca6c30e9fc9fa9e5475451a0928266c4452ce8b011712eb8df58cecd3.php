<?php

/* PnpcUserBundle::layout.html.twig */
class __TwigTemplate_baae680ca6c30e9fc9fa9e5475451a0928266c4452ce8b011712eb8df58cecd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "


  ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo " 
  ";
        // line 7
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
  ";
        // line 14
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "  
  ";
    }

    public function getTemplateName()
    {
        return "PnpcUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 71,  155 => 68,  113 => 44,  23 => 2,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 70,  178 => 66,  174 => 65,  170 => 64,  146 => 52,  197 => 69,  150 => 53,  84 => 48,  58 => 12,  165 => 61,  161 => 58,  152 => 57,  124 => 8,  118 => 6,  90 => 48,  76 => 31,  127 => 45,  97 => 37,  81 => 33,  77 => 32,  70 => 33,  53 => 13,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 133,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 55,  132 => 51,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 68,  204 => 72,  179 => 77,  159 => 69,  143 => 65,  135 => 63,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  201 => 96,  196 => 72,  183 => 78,  171 => 72,  166 => 64,  163 => 70,  158 => 67,  156 => 66,  151 => 67,  142 => 43,  138 => 49,  136 => 56,  121 => 46,  117 => 45,  105 => 39,  91 => 30,  62 => 16,  49 => 9,  94 => 43,  89 => 35,  85 => 34,  75 => 17,  68 => 15,  56 => 9,  38 => 5,  26 => 18,  87 => 47,  31 => 3,  21 => 2,  28 => 5,  24 => 4,  25 => 3,  19 => 1,  93 => 36,  88 => 49,  78 => 21,  46 => 10,  44 => 8,  27 => 4,  79 => 28,  72 => 46,  69 => 30,  47 => 11,  40 => 5,  37 => 4,  22 => 2,  246 => 89,  157 => 59,  145 => 44,  139 => 64,  131 => 46,  123 => 58,  120 => 41,  115 => 56,  111 => 55,  108 => 38,  101 => 38,  98 => 31,  96 => 45,  83 => 35,  74 => 27,  66 => 16,  55 => 17,  52 => 10,  50 => 11,  43 => 6,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 79,  182 => 67,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 57,  154 => 54,  149 => 56,  147 => 66,  144 => 49,  141 => 48,  133 => 55,  130 => 61,  125 => 47,  122 => 63,  116 => 40,  112 => 39,  109 => 40,  106 => 36,  103 => 53,  99 => 32,  95 => 50,  92 => 49,  86 => 24,  82 => 22,  80 => 23,  73 => 31,  64 => 28,  60 => 18,  57 => 12,  54 => 15,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 2,);
    }
}
