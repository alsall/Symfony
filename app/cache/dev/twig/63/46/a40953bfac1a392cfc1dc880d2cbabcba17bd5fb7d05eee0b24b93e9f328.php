<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6346a40953bfac1a392cfc1dc880d2cbabcba17bd5fb7d05eee0b24b93e9f328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => $this->getContext($context, "token"))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => $this->getContext($context, "token"))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  348 => 140,  342 => 137,  325 => 129,  320 => 127,  289 => 113,  256 => 96,  207 => 75,  185 => 66,  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  328 => 139,  321 => 135,  293 => 120,  281 => 114,  276 => 111,  274 => 110,  265 => 105,  259 => 103,  255 => 101,  134 => 47,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  380 => 160,  376 => 205,  361 => 146,  353 => 149,  329 => 131,  317 => 185,  313 => 183,  288 => 118,  184 => 63,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  202 => 94,  153 => 56,  302 => 125,  297 => 179,  270 => 102,  266 => 94,  262 => 98,  248 => 94,  244 => 87,  222 => 83,  216 => 79,  239 => 93,  234 => 83,  226 => 84,  212 => 76,  198 => 71,  194 => 70,  190 => 69,  186 => 68,  110 => 37,  180 => 65,  172 => 62,  181 => 65,  148 => 51,  137 => 46,  104 => 37,  129 => 44,  126 => 27,  114 => 38,  100 => 39,  65 => 22,  339 => 162,  335 => 134,  331 => 140,  279 => 132,  275 => 105,  271 => 130,  267 => 101,  213 => 78,  205 => 108,  375 => 174,  371 => 156,  367 => 155,  363 => 153,  359 => 167,  351 => 141,  347 => 191,  323 => 128,  315 => 125,  311 => 143,  307 => 128,  303 => 122,  299 => 137,  295 => 178,  291 => 135,  287 => 134,  257 => 113,  253 => 100,  249 => 111,  245 => 110,  237 => 105,  233 => 87,  225 => 102,  191 => 69,  175 => 58,  167 => 71,  155 => 47,  113 => 38,  23 => 2,  20 => 1,  431 => 189,  343 => 146,  338 => 135,  326 => 138,  319 => 145,  308 => 109,  304 => 181,  300 => 121,  296 => 121,  290 => 119,  286 => 112,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 94,  236 => 85,  232 => 88,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 72,  192 => 71,  188 => 102,  178 => 64,  174 => 65,  170 => 56,  146 => 52,  197 => 71,  150 => 55,  84 => 24,  58 => 25,  165 => 60,  161 => 63,  152 => 46,  124 => 62,  118 => 49,  90 => 27,  76 => 25,  127 => 35,  97 => 37,  81 => 23,  77 => 20,  70 => 19,  53 => 12,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 189,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 129,  305 => 95,  298 => 120,  294 => 109,  285 => 175,  283 => 115,  278 => 106,  268 => 96,  264 => 95,  258 => 92,  252 => 89,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 78,  177 => 65,  169 => 62,  140 => 58,  132 => 65,  128 => 48,  107 => 54,  61 => 17,  273 => 174,  269 => 107,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 82,  221 => 101,  219 => 76,  217 => 100,  208 => 76,  204 => 74,  179 => 98,  159 => 90,  143 => 65,  135 => 63,  119 => 40,  102 => 33,  71 => 26,  67 => 20,  63 => 18,  59 => 14,  201 => 106,  196 => 92,  183 => 78,  171 => 72,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 43,  138 => 49,  136 => 71,  121 => 50,  117 => 45,  105 => 34,  91 => 33,  62 => 12,  49 => 14,  94 => 21,  89 => 35,  85 => 23,  75 => 23,  68 => 30,  56 => 35,  38 => 6,  26 => 11,  87 => 34,  31 => 3,  21 => 2,  28 => 3,  24 => 3,  25 => 3,  19 => 1,  93 => 27,  88 => 32,  78 => 21,  46 => 13,  44 => 9,  27 => 3,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 11,  37 => 4,  22 => 3,  246 => 93,  157 => 89,  145 => 74,  139 => 64,  131 => 60,  123 => 42,  120 => 31,  115 => 56,  111 => 47,  108 => 22,  101 => 38,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 24,  55 => 13,  52 => 12,  50 => 22,  43 => 9,  41 => 8,  35 => 5,  32 => 5,  29 => 3,  209 => 98,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 79,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 51,  122 => 63,  116 => 39,  112 => 55,  109 => 27,  106 => 51,  103 => 53,  99 => 31,  95 => 51,  92 => 43,  86 => 24,  82 => 28,  80 => 27,  73 => 24,  64 => 17,  60 => 20,  57 => 19,  54 => 34,  51 => 12,  48 => 11,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
