<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_77ad58776a6c158e97891da93d0011685191a0bf664b5375b97e39b2b6681460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 80,  203 => 75,  184 => 70,  159 => 61,  154 => 60,  145 => 58,  135 => 55,  230 => 88,  209 => 81,  206 => 80,  126 => 55,  144 => 39,  82 => 31,  21 => 2,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 81,  191 => 72,  176 => 69,  161 => 66,  99 => 45,  94 => 47,  79 => 40,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 76,  200 => 74,  190 => 75,  175 => 72,  165 => 65,  113 => 52,  23 => 4,  20 => 1,  87 => 39,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 84,  214 => 70,  182 => 73,  169 => 70,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 74,  74 => 31,  188 => 75,  168 => 66,  156 => 65,  151 => 64,  132 => 58,  42 => 8,  103 => 40,  68 => 11,  174 => 54,  170 => 71,  153 => 57,  139 => 17,  128 => 52,  125 => 51,  95 => 50,  91 => 41,  73 => 38,  119 => 40,  86 => 26,  64 => 16,  61 => 31,  54 => 13,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 73,  251 => 79,  239 => 69,  231 => 68,  219 => 71,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 35,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 23,  84 => 33,  72 => 34,  69 => 30,  51 => 13,  48 => 11,  35 => 6,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 76,  247 => 104,  237 => 73,  204 => 79,  198 => 65,  194 => 64,  150 => 63,  147 => 51,  127 => 34,  112 => 48,  96 => 44,  76 => 22,  71 => 20,  39 => 7,  227 => 92,  224 => 85,  221 => 84,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 71,  181 => 69,  178 => 64,  173 => 58,  162 => 60,  158 => 59,  155 => 64,  152 => 55,  142 => 57,  136 => 59,  133 => 46,  130 => 61,  120 => 40,  105 => 50,  75 => 35,  53 => 13,  114 => 30,  109 => 47,  106 => 27,  101 => 19,  85 => 22,  77 => 29,  67 => 15,  47 => 29,  28 => 3,  55 => 7,  38 => 5,  50 => 30,  110 => 51,  100 => 49,  89 => 34,  65 => 36,  63 => 16,  58 => 14,  34 => 7,  26 => 3,  24 => 4,  25 => 18,  19 => 2,  98 => 39,  88 => 43,  80 => 15,  78 => 36,  46 => 25,  44 => 10,  36 => 6,  32 => 25,  27 => 3,  22 => 3,  60 => 14,  57 => 12,  43 => 5,  40 => 5,  232 => 72,  226 => 71,  222 => 76,  215 => 80,  211 => 84,  208 => 77,  202 => 66,  196 => 73,  193 => 63,  187 => 71,  183 => 80,  180 => 73,  171 => 68,  166 => 69,  163 => 51,  160 => 65,  157 => 48,  149 => 59,  146 => 62,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 24,  118 => 43,  115 => 57,  111 => 29,  107 => 53,  104 => 46,  97 => 48,  93 => 43,  90 => 48,  81 => 25,  70 => 23,  66 => 17,  62 => 35,  59 => 9,  56 => 33,  52 => 10,  49 => 26,  45 => 10,  41 => 6,  37 => 4,  33 => 4,  30 => 5,);
    }
}
