<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_190eb9a23494220915620ad901e4ff22a7f9e492659258987b23c642dbfe4d01 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  178 => 80,  165 => 75,  148 => 69,  137 => 65,  104 => 51,  188 => 88,  152 => 74,  129 => 64,  124 => 62,  34 => 7,  114 => 59,  65 => 35,  343 => 163,  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  205 => 97,  81 => 24,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  319 => 145,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 76,  20 => 1,  324 => 116,  317 => 112,  306 => 104,  302 => 103,  288 => 98,  284 => 97,  280 => 96,  276 => 95,  270 => 92,  266 => 91,  262 => 90,  248 => 85,  244 => 84,  234 => 80,  226 => 78,  222 => 77,  216 => 74,  212 => 73,  198 => 68,  190 => 66,  180 => 62,  172 => 60,  155 => 75,  100 => 27,  70 => 21,  97 => 52,  127 => 59,  84 => 48,  213 => 99,  206 => 100,  197 => 69,  194 => 67,  186 => 65,  170 => 77,  150 => 72,  126 => 63,  118 => 70,  113 => 55,  90 => 46,  23 => 4,  77 => 32,  58 => 18,  53 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 102,  294 => 101,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 84,  258 => 89,  252 => 86,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 69,  177 => 6,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 83,  238 => 85,  235 => 74,  230 => 79,  227 => 81,  224 => 71,  221 => 101,  219 => 76,  217 => 100,  208 => 72,  204 => 71,  179 => 84,  159 => 69,  143 => 65,  135 => 63,  119 => 57,  102 => 32,  71 => 19,  67 => 20,  63 => 34,  59 => 11,  201 => 96,  196 => 90,  183 => 78,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 88,  151 => 70,  142 => 59,  138 => 69,  136 => 45,  121 => 61,  117 => 45,  105 => 55,  91 => 27,  62 => 19,  49 => 13,  94 => 51,  89 => 28,  85 => 34,  75 => 43,  68 => 36,  56 => 35,  38 => 8,  26 => 12,  87 => 25,  31 => 6,  21 => 2,  28 => 5,  24 => 7,  25 => 3,  19 => 2,  93 => 29,  88 => 27,  78 => 23,  46 => 11,  44 => 26,  27 => 5,  79 => 25,  72 => 22,  69 => 40,  47 => 11,  40 => 11,  37 => 12,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 64,  131 => 61,  123 => 58,  120 => 57,  115 => 56,  111 => 55,  108 => 56,  101 => 38,  98 => 31,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 14,  52 => 9,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 7,  29 => 6,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 85,  176 => 61,  173 => 83,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 66,  144 => 49,  141 => 70,  133 => 55,  130 => 73,  125 => 59,  122 => 71,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 28,  99 => 52,  95 => 51,  92 => 28,  86 => 45,  82 => 24,  80 => 43,  73 => 23,  64 => 38,  60 => 16,  57 => 12,  54 => 16,  51 => 13,  48 => 12,  45 => 30,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
