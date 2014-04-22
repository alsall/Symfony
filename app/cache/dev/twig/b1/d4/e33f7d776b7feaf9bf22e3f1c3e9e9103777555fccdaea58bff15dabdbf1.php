<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_b1d4e33f7d776b7feaf9bf22e3f1c3e9e9103777555fccdaea58bff15dabdbf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 19
        echo "
";
        // line 20
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (($this->getContext($context, "startPage") > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (($this->getContext($context, "startPage") == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (($this->getContext($context, "startPage") != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
    ";
            // line 62
            if (($this->getContext($context, "pageCount") > $this->getContext($context, "endPage"))) {
                // line 63
                echo "        ";
                if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 1))) {
                    // line 64
                    echo "            ";
                    if (($this->getContext($context, "pageCount") > ($this->getContext($context, "endPage") + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => ($this->getContext($context, "pageCount") - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($this->getContext($context, "pageCount") - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "pageCount")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "pageCount"), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 64,  126 => 63,  114 => 59,  100 => 33,  65 => 20,  339 => 162,  335 => 161,  331 => 160,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  213 => 99,  205 => 97,  375 => 174,  371 => 173,  367 => 172,  363 => 168,  359 => 167,  351 => 165,  347 => 164,  323 => 146,  315 => 144,  311 => 143,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  257 => 113,  253 => 112,  249 => 111,  245 => 110,  237 => 105,  233 => 104,  225 => 102,  191 => 80,  175 => 73,  167 => 71,  155 => 75,  113 => 44,  23 => 2,  20 => 1,  431 => 217,  343 => 163,  338 => 129,  326 => 121,  319 => 145,  308 => 109,  304 => 108,  300 => 107,  296 => 106,  290 => 103,  286 => 102,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 88,  236 => 85,  232 => 84,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 73,  192 => 71,  188 => 88,  178 => 66,  174 => 65,  170 => 64,  146 => 52,  197 => 69,  150 => 53,  84 => 48,  58 => 16,  165 => 61,  161 => 58,  152 => 74,  124 => 62,  118 => 6,  90 => 48,  76 => 31,  127 => 45,  97 => 52,  81 => 47,  77 => 32,  70 => 33,  53 => 14,  34 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 166,  341 => 130,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 133,  278 => 100,  268 => 96,  264 => 95,  258 => 81,  252 => 80,  247 => 78,  241 => 106,  229 => 103,  220 => 70,  214 => 78,  177 => 65,  169 => 62,  140 => 55,  132 => 65,  128 => 48,  107 => 54,  61 => 14,  273 => 96,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 68,  204 => 72,  179 => 84,  159 => 69,  143 => 65,  135 => 63,  119 => 57,  102 => 32,  71 => 19,  67 => 15,  63 => 29,  59 => 36,  201 => 96,  196 => 72,  183 => 78,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 67,  142 => 43,  138 => 69,  136 => 56,  121 => 61,  117 => 45,  105 => 55,  91 => 50,  62 => 19,  49 => 13,  94 => 51,  89 => 28,  85 => 34,  75 => 43,  68 => 15,  56 => 35,  38 => 10,  26 => 18,  87 => 49,  31 => 25,  21 => 2,  28 => 5,  24 => 21,  25 => 3,  19 => 19,  93 => 36,  88 => 49,  78 => 21,  46 => 13,  44 => 8,  27 => 5,  79 => 25,  72 => 46,  69 => 40,  47 => 11,  40 => 5,  37 => 4,  22 => 20,  246 => 89,  157 => 59,  145 => 44,  139 => 64,  131 => 46,  123 => 58,  120 => 41,  115 => 56,  111 => 55,  108 => 56,  101 => 38,  98 => 31,  96 => 45,  83 => 35,  74 => 29,  66 => 39,  55 => 17,  52 => 16,  50 => 11,  43 => 12,  41 => 11,  35 => 5,  32 => 7,  29 => 24,  209 => 98,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 79,  182 => 85,  176 => 64,  173 => 83,  168 => 80,  164 => 59,  162 => 57,  154 => 54,  149 => 73,  147 => 66,  144 => 49,  141 => 70,  133 => 55,  130 => 61,  125 => 47,  122 => 63,  116 => 40,  112 => 39,  109 => 40,  106 => 36,  103 => 34,  99 => 32,  95 => 50,  92 => 49,  86 => 27,  82 => 22,  80 => 23,  73 => 23,  64 => 38,  60 => 18,  57 => 12,  54 => 34,  51 => 33,  48 => 11,  45 => 30,  42 => 29,  39 => 9,  36 => 5,  33 => 7,  30 => 2,);
    }
}
