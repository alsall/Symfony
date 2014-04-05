<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_eee67a95c6de3f69f387874db7dbf12a0f6ecdc332eeca9543607eba41851550 extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  348 => 140,  342 => 137,  338 => 135,  325 => 129,  320 => 127,  289 => 113,  286 => 112,  256 => 96,  207 => 75,  200 => 72,  185 => 66,  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  328 => 139,  326 => 138,  321 => 135,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  274 => 110,  265 => 105,  259 => 103,  255 => 101,  232 => 88,  210 => 77,  161 => 63,  134 => 47,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  380 => 160,  376 => 205,  361 => 146,  353 => 149,  329 => 131,  313 => 183,  304 => 181,  300 => 121,  297 => 179,  184 => 63,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  202 => 94,  153 => 56,  76 => 17,  181 => 65,  178 => 64,  165 => 60,  148 => 69,  137 => 65,  104 => 37,  188 => 102,  152 => 46,  129 => 64,  124 => 62,  34 => 4,  114 => 24,  65 => 22,  343 => 146,  339 => 162,  335 => 134,  331 => 140,  279 => 132,  275 => 105,  271 => 130,  267 => 101,  205 => 108,  81 => 23,  375 => 174,  371 => 156,  367 => 155,  363 => 153,  359 => 167,  351 => 141,  347 => 191,  323 => 128,  319 => 145,  315 => 125,  311 => 143,  307 => 128,  303 => 122,  299 => 137,  295 => 178,  291 => 135,  287 => 134,  257 => 113,  253 => 100,  249 => 111,  245 => 110,  237 => 105,  233 => 87,  225 => 102,  191 => 69,  175 => 58,  167 => 76,  20 => 1,  324 => 116,  317 => 185,  306 => 104,  302 => 125,  288 => 118,  284 => 97,  280 => 96,  276 => 111,  270 => 102,  266 => 91,  262 => 98,  248 => 94,  244 => 84,  234 => 80,  226 => 84,  222 => 83,  216 => 79,  212 => 73,  198 => 68,  190 => 66,  180 => 47,  172 => 62,  155 => 47,  100 => 39,  70 => 19,  97 => 52,  127 => 35,  84 => 24,  213 => 78,  206 => 100,  197 => 71,  194 => 70,  186 => 65,  170 => 56,  150 => 55,  126 => 27,  118 => 49,  113 => 38,  90 => 27,  23 => 4,  77 => 20,  58 => 25,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 189,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 129,  305 => 95,  298 => 120,  294 => 101,  285 => 175,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 89,  252 => 86,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 6,  169 => 60,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 12,  273 => 174,  269 => 107,  254 => 92,  243 => 88,  240 => 83,  238 => 85,  235 => 89,  230 => 79,  227 => 86,  224 => 71,  221 => 101,  219 => 76,  217 => 100,  208 => 76,  204 => 71,  179 => 98,  159 => 90,  143 => 65,  135 => 29,  119 => 40,  102 => 33,  71 => 19,  67 => 18,  63 => 34,  59 => 14,  201 => 106,  196 => 92,  183 => 78,  171 => 81,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 69,  136 => 71,  121 => 50,  117 => 45,  105 => 34,  91 => 34,  62 => 12,  49 => 14,  94 => 21,  89 => 28,  85 => 23,  75 => 43,  68 => 30,  56 => 35,  38 => 6,  26 => 12,  87 => 34,  31 => 3,  21 => 2,  28 => 3,  24 => 7,  25 => 3,  19 => 1,  93 => 27,  88 => 20,  78 => 23,  46 => 13,  44 => 9,  27 => 3,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 11,  37 => 12,  22 => 3,  246 => 93,  157 => 89,  145 => 74,  139 => 64,  131 => 61,  123 => 42,  120 => 31,  115 => 56,  111 => 47,  108 => 22,  101 => 38,  98 => 45,  96 => 30,  83 => 33,  74 => 39,  66 => 15,  55 => 9,  52 => 9,  50 => 22,  43 => 9,  41 => 8,  35 => 5,  32 => 5,  29 => 6,  209 => 98,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 26,  116 => 39,  112 => 42,  109 => 27,  106 => 51,  103 => 28,  99 => 31,  95 => 51,  92 => 43,  86 => 45,  82 => 19,  80 => 32,  73 => 20,  64 => 17,  60 => 20,  57 => 19,  54 => 16,  51 => 10,  48 => 12,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
