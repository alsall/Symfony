<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_de98753b7241cc278d92f5c9bebdd5fa0a2cb8da9bcdd39565fe52911df9cc8f extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
        if (($_pageCount_ > 1)) {
            // line 18
            echo "    <ul class=\"pagination\">

    ";
            // line 20
            if (array_key_exists("previous", $context)) {
                // line 21
                echo "        <li>
            <a href=\"";
                // line 22
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_previous_))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if (isset($context["startPage"])) { $_startPage_ = $context["startPage"]; } else { $_startPage_ = null; }
            if (($_startPage_ > 1)) {
                // line 31
                echo "        <li>
            <a href=\"";
                // line 32
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 34
                if (isset($context["startPage"])) { $_startPage_ = $context["startPage"]; } else { $_startPage_ = null; }
                if (($_startPage_ == 3)) {
                    // line 35
                    echo "            <li>
                <a href=\"";
                    // line 36
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (($_startPage_ != 2)) {
                    // line 39
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            if (isset($context["pagesInRange"])) { $_pagesInRange_ = $context["pagesInRange"]; } else { $_pagesInRange_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_pagesInRange_);
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "        ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                if (($_page_ != $_current_)) {
                    // line 47
                    echo "            <li>
                <a href=\"";
                    // line 48
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_page_))), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 51
                    echo "            <li class=\"active\">
                <span>";
                    // line 52
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 55
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
    ";
            // line 58
            if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
            if (isset($context["endPage"])) { $_endPage_ = $context["endPage"]; } else { $_endPage_ = null; }
            if (($_pageCount_ > $_endPage_)) {
                // line 59
                echo "        ";
                if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                if (isset($context["endPage"])) { $_endPage_ = $context["endPage"]; } else { $_endPage_ = null; }
                if (($_pageCount_ > ($_endPage_ + 1))) {
                    // line 60
                    echo "            ";
                    if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                    if (isset($context["endPage"])) { $_endPage_ = $context["endPage"]; } else { $_endPage_ = null; }
                    if (($_pageCount_ > ($_endPage_ + 2))) {
                        // line 61
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 65
                        echo "                <li>
                    <a href=\"";
                        // line 66
                        if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                        if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                        if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => ($_pageCount_ - 1)))), "html", null, true);
                        echo "\">";
                        if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                        echo twig_escape_filter($this->env, ($_pageCount_ - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "        <li>
            <a href=\"";
                // line 71
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_pageCount_))), "html", null, true);
                echo "\">";
                if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                echo twig_escape_filter($this->env, $_pageCount_, "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 74
            echo "
    ";
            // line 75
            if (array_key_exists("next", $context)) {
                // line 76
                echo "        <li>
            <a href=\"";
                // line 77
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_next_))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 80
                echo "        <li class=\"disabled\">
            <span>";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 84
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  220 => 80,  203 => 75,  159 => 61,  154 => 60,  145 => 58,  135 => 55,  125 => 51,  64 => 32,  230 => 88,  209 => 81,  206 => 80,  182 => 73,  126 => 55,  144 => 39,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 81,  191 => 72,  176 => 69,  161 => 66,  79 => 40,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  399 => 168,  369 => 146,  364 => 145,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  128 => 52,  20 => 1,  379 => 116,  371 => 112,  354 => 143,  349 => 142,  337 => 98,  332 => 97,  322 => 95,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  288 => 85,  283 => 84,  278 => 83,  266 => 79,  244 => 73,  234 => 71,  217 => 66,  212 => 65,  200 => 74,  190 => 75,  175 => 72,  170 => 71,  165 => 65,  99 => 45,  87 => 39,  82 => 23,  199 => 66,  185 => 74,  95 => 30,  188 => 75,  174 => 76,  168 => 66,  156 => 65,  132 => 58,  42 => 8,  214 => 102,  210 => 79,  205 => 76,  184 => 70,  169 => 70,  151 => 64,  123 => 44,  119 => 40,  113 => 52,  94 => 47,  86 => 52,  83 => 51,  74 => 31,  23 => 2,  61 => 31,  103 => 40,  73 => 38,  68 => 19,  54 => 13,  31 => 21,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 96,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 112,  279 => 78,  256 => 77,  251 => 71,  239 => 72,  231 => 68,  219 => 67,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 35,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 23,  84 => 33,  72 => 34,  69 => 30,  51 => 11,  48 => 11,  35 => 26,  29 => 20,  312 => 96,  308 => 94,  293 => 86,  285 => 90,  281 => 88,  277 => 110,  274 => 85,  271 => 80,  264 => 74,  261 => 78,  257 => 106,  253 => 102,  249 => 74,  247 => 104,  237 => 73,  204 => 79,  198 => 87,  194 => 64,  150 => 63,  147 => 44,  127 => 34,  112 => 48,  96 => 44,  76 => 39,  71 => 18,  39 => 7,  227 => 68,  224 => 85,  221 => 84,  207 => 67,  197 => 74,  195 => 76,  192 => 72,  189 => 61,  186 => 71,  181 => 69,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 64,  152 => 45,  142 => 57,  136 => 59,  133 => 46,  130 => 42,  120 => 40,  105 => 50,  75 => 35,  53 => 13,  114 => 30,  109 => 47,  106 => 27,  101 => 19,  85 => 22,  77 => 22,  67 => 42,  47 => 29,  28 => 5,  55 => 29,  38 => 5,  50 => 30,  110 => 51,  100 => 49,  89 => 34,  65 => 36,  63 => 16,  58 => 30,  34 => 22,  26 => 6,  24 => 4,  25 => 18,  19 => 16,  98 => 39,  88 => 43,  80 => 15,  78 => 36,  46 => 25,  44 => 6,  36 => 6,  32 => 25,  27 => 12,  22 => 17,  60 => 14,  57 => 12,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 67,  215 => 80,  211 => 84,  208 => 77,  202 => 98,  196 => 73,  193 => 63,  187 => 71,  183 => 80,  180 => 73,  171 => 68,  166 => 69,  163 => 51,  160 => 65,  157 => 46,  149 => 59,  146 => 62,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 24,  118 => 43,  115 => 39,  111 => 29,  107 => 53,  104 => 46,  97 => 48,  93 => 43,  90 => 53,  81 => 28,  70 => 23,  66 => 17,  62 => 35,  59 => 34,  56 => 33,  52 => 10,  49 => 26,  45 => 10,  41 => 6,  37 => 12,  33 => 4,  30 => 24,);
    }
}
