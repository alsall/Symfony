<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_38baba92809b791bc8ce37905ad15689abff97f9c238a154c33358080f92af0f extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (isset($context["pageCount"])) { $_pageCount_ = $context["pageCount"]; } else { $_pageCount_ = null; }
        if (($_pageCount_ > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
            if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
            if ((array_key_exists("first", $context) && ($_current_ != $_first_))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_first_))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_previous_))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            if (isset($context["pagesInRange"])) { $_pagesInRange_ = $context["pagesInRange"]; } else { $_pagesInRange_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_pagesInRange_);
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                if (($_page_ != $_current_)) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_page_))), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_next_))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
            if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
            if ((array_key_exists("last", $context) && ($_current_ != $_last_))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                if (isset($context["pageParameterName"])) { $_pageParameterName_ = $context["pageParameterName"]; } else { $_pageParameterName_ = null; }
                if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_route_, twig_array_merge($_query_, array($_pageParameterName_ => $_last_))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  415 => 168,  410 => 167,  405 => 166,  400 => 165,  395 => 164,  385 => 162,  380 => 161,  350 => 139,  345 => 138,  340 => 137,  335 => 136,  325 => 134,  320 => 133,  273 => 106,  268 => 105,  263 => 104,  258 => 103,  248 => 101,  243 => 100,  238 => 99,  233 => 98,  228 => 97,  223 => 96,  191 => 72,  176 => 69,  161 => 66,  79 => 20,  424 => 173,  419 => 172,  414 => 171,  409 => 170,  404 => 169,  399 => 168,  369 => 146,  364 => 145,  339 => 140,  334 => 139,  329 => 138,  324 => 137,  319 => 136,  292 => 113,  282 => 111,  272 => 109,  267 => 108,  262 => 107,  252 => 105,  242 => 103,  128 => 45,  20 => 1,  379 => 116,  371 => 112,  354 => 143,  349 => 142,  337 => 98,  332 => 97,  322 => 95,  315 => 132,  310 => 131,  305 => 130,  300 => 129,  288 => 85,  283 => 84,  278 => 83,  266 => 79,  244 => 73,  234 => 71,  217 => 66,  212 => 65,  200 => 77,  190 => 75,  175 => 72,  170 => 71,  165 => 70,  99 => 25,  87 => 24,  82 => 23,  199 => 66,  185 => 74,  95 => 30,  188 => 83,  174 => 76,  168 => 73,  156 => 65,  132 => 58,  42 => 8,  214 => 102,  210 => 79,  205 => 78,  184 => 8,  169 => 98,  151 => 64,  123 => 44,  119 => 40,  113 => 42,  94 => 35,  86 => 52,  83 => 51,  74 => 31,  23 => 2,  61 => 14,  103 => 40,  73 => 46,  68 => 19,  54 => 13,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 175,  429 => 174,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 167,  390 => 163,  375 => 160,  365 => 99,  362 => 98,  359 => 144,  355 => 95,  348 => 91,  344 => 141,  330 => 135,  327 => 96,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 112,  279 => 78,  256 => 77,  251 => 71,  239 => 72,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 47,  134 => 36,  131 => 35,  122 => 56,  117 => 55,  108 => 41,  102 => 52,  92 => 23,  84 => 33,  72 => 21,  69 => 30,  51 => 11,  48 => 11,  35 => 7,  29 => 3,  312 => 96,  308 => 94,  293 => 86,  285 => 90,  281 => 88,  277 => 110,  274 => 85,  271 => 80,  264 => 74,  261 => 78,  257 => 106,  253 => 102,  249 => 74,  247 => 104,  237 => 73,  204 => 69,  198 => 87,  194 => 64,  150 => 54,  147 => 44,  127 => 34,  112 => 54,  96 => 25,  76 => 19,  71 => 18,  39 => 7,  227 => 68,  224 => 91,  221 => 90,  207 => 67,  197 => 74,  195 => 76,  192 => 72,  189 => 61,  186 => 71,  181 => 70,  178 => 64,  173 => 58,  162 => 58,  158 => 56,  155 => 86,  152 => 45,  142 => 43,  136 => 48,  133 => 46,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  53 => 13,  114 => 30,  109 => 28,  106 => 27,  101 => 19,  85 => 22,  77 => 22,  67 => 42,  47 => 11,  28 => 5,  55 => 13,  38 => 5,  50 => 12,  110 => 20,  100 => 27,  89 => 34,  65 => 16,  63 => 16,  58 => 13,  34 => 5,  26 => 6,  24 => 4,  25 => 4,  19 => 2,  98 => 39,  88 => 37,  80 => 15,  78 => 49,  46 => 10,  44 => 6,  36 => 6,  32 => 6,  27 => 12,  22 => 3,  60 => 14,  57 => 12,  43 => 8,  40 => 7,  232 => 72,  226 => 71,  222 => 67,  215 => 80,  211 => 84,  208 => 70,  202 => 98,  196 => 73,  193 => 63,  187 => 9,  183 => 80,  180 => 73,  171 => 68,  166 => 67,  163 => 51,  160 => 49,  157 => 46,  149 => 49,  146 => 63,  140 => 46,  137 => 59,  129 => 38,  124 => 33,  121 => 24,  118 => 43,  115 => 39,  111 => 29,  107 => 53,  104 => 37,  97 => 51,  93 => 38,  90 => 53,  81 => 28,  70 => 23,  66 => 17,  62 => 18,  59 => 15,  56 => 17,  52 => 10,  49 => 13,  45 => 10,  41 => 6,  37 => 12,  33 => 4,  30 => 3,);
    }
}
