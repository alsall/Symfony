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
        if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
        if (($_pageCount_ > 1)) {
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
            if (isset($context["startPage"])) { $_startPage_ = $context["startPage"]; } else { $_startPage_ = null; }
            if (($_startPage_ > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (isset($context["startPage"])) { $_startPage_ = $context["startPage"]; } else { $_startPage_ = null; }
                if (($_startPage_ == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (($_startPage_ != 2)) {
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
            if (isset($context["pagesInRange"])) { $_pagesInRange_ = $context["pagesInRange"]; } else { $_pagesInRange_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_pagesInRange_);
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                if (($_page_ != $_current_)) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
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
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
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
            if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
            if (isset($context["endPage"])) { $_endPage_ = $context["endPage"]; } else { $_endPage_ = null; }
            if (($_pageCount_ > $_endPage_)) {
                // line 63
                echo "        ";
                if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                if (isset($context["endPage"])) { $_endPage_ = $context["endPage"]; } else { $_endPage_ = null; }
                if (($_pageCount_ > ($_endPage_ + 1))) {
                    // line 64
                    echo "            ";
                    if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
                    if (isset($context["endPage"])) { $_endPage_ = $context["endPage"]; } else { $_endPage_ = null; }
                    if (($_pageCount_ > ($_endPage_ + 2))) {
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
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
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
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
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
        return array (  230 => 88,  209 => 81,  206 => 80,  126 => 55,  144 => 39,  82 => 31,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  99 => 25,  94 => 47,  79 => 40,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  369 => 146,  364 => 145,  354 => 143,  349 => 142,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  210 => 79,  205 => 78,  200 => 77,  190 => 75,  175 => 72,  165 => 70,  113 => 52,  23 => 2,  20 => 1,  87 => 47,  487 => 217,  399 => 168,  397 => 130,  381 => 121,  373 => 117,  361 => 109,  356 => 108,  351 => 107,  346 => 106,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  317 => 97,  290 => 90,  280 => 88,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  246 => 78,  241 => 77,  236 => 76,  229 => 73,  214 => 70,  182 => 73,  169 => 70,  164 => 52,  141 => 45,  123 => 44,  199 => 66,  185 => 74,  74 => 31,  188 => 75,  168 => 73,  156 => 65,  151 => 64,  132 => 58,  42 => 8,  103 => 40,  68 => 19,  174 => 54,  170 => 71,  153 => 57,  139 => 17,  128 => 45,  125 => 8,  95 => 50,  91 => 41,  73 => 38,  119 => 40,  86 => 26,  64 => 15,  61 => 16,  54 => 13,  31 => 6,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 88,  321 => 86,  307 => 95,  302 => 94,  295 => 91,  287 => 112,  279 => 78,  256 => 73,  251 => 79,  239 => 69,  231 => 68,  219 => 71,  201 => 78,  143 => 61,  138 => 47,  134 => 36,  131 => 35,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 23,  84 => 33,  72 => 16,  69 => 14,  51 => 13,  48 => 11,  35 => 26,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 89,  281 => 88,  277 => 110,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 106,  253 => 102,  249 => 76,  247 => 104,  237 => 73,  204 => 79,  198 => 65,  194 => 64,  150 => 63,  147 => 51,  127 => 34,  112 => 54,  96 => 25,  76 => 39,  71 => 18,  39 => 7,  227 => 92,  224 => 85,  221 => 84,  207 => 67,  197 => 65,  195 => 76,  192 => 64,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 60,  158 => 59,  155 => 64,  152 => 55,  142 => 60,  136 => 59,  133 => 46,  130 => 61,  120 => 40,  105 => 50,  75 => 24,  53 => 13,  114 => 30,  109 => 28,  106 => 27,  101 => 19,  85 => 22,  77 => 29,  67 => 15,  47 => 29,  28 => 5,  55 => 14,  38 => 5,  50 => 30,  110 => 51,  100 => 49,  89 => 34,  65 => 36,  63 => 16,  58 => 18,  34 => 7,  26 => 11,  24 => 3,  25 => 21,  19 => 19,  98 => 39,  88 => 43,  80 => 15,  78 => 22,  46 => 10,  44 => 10,  36 => 8,  32 => 25,  27 => 3,  22 => 20,  60 => 14,  57 => 12,  43 => 5,  40 => 5,  232 => 72,  226 => 71,  222 => 76,  215 => 80,  211 => 84,  208 => 70,  202 => 66,  196 => 73,  193 => 63,  187 => 62,  183 => 80,  180 => 73,  171 => 68,  166 => 69,  163 => 51,  160 => 65,  157 => 48,  149 => 49,  146 => 62,  140 => 46,  137 => 59,  129 => 56,  124 => 33,  121 => 24,  118 => 43,  115 => 57,  111 => 29,  107 => 53,  104 => 37,  97 => 48,  93 => 38,  90 => 48,  81 => 25,  70 => 23,  66 => 17,  62 => 35,  59 => 34,  56 => 33,  52 => 10,  49 => 13,  45 => 10,  41 => 9,  37 => 4,  33 => 4,  30 => 24,);
    }
}
