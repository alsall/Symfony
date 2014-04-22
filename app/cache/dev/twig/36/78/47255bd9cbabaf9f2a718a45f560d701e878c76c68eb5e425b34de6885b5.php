<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_367847255bd9cbabaf9f2a718a45f560d701e878c76c68eb5e425b34de6885b5 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 286,  263 => 95,  231 => 83,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  348 => 140,  342 => 137,  325 => 129,  320 => 127,  289 => 113,  256 => 96,  207 => 75,  185 => 74,  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  328 => 139,  321 => 112,  293 => 120,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  259 => 103,  255 => 93,  134 => 47,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  380 => 160,  376 => 205,  361 => 146,  353 => 328,  329 => 131,  317 => 185,  313 => 183,  288 => 101,  184 => 63,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  202 => 77,  153 => 56,  302 => 125,  297 => 104,  270 => 102,  266 => 94,  262 => 98,  248 => 94,  244 => 87,  222 => 83,  216 => 79,  239 => 93,  234 => 83,  226 => 84,  212 => 78,  198 => 71,  194 => 70,  190 => 76,  186 => 68,  110 => 37,  180 => 65,  172 => 62,  181 => 65,  148 => 51,  137 => 46,  104 => 32,  129 => 44,  126 => 27,  114 => 38,  100 => 39,  65 => 11,  339 => 162,  335 => 134,  331 => 140,  279 => 132,  275 => 105,  271 => 130,  267 => 101,  213 => 78,  205 => 108,  375 => 174,  371 => 156,  367 => 339,  363 => 126,  359 => 167,  351 => 120,  347 => 191,  323 => 128,  315 => 110,  311 => 143,  307 => 128,  303 => 106,  299 => 137,  295 => 178,  291 => 102,  287 => 134,  257 => 113,  253 => 100,  249 => 111,  245 => 110,  237 => 105,  233 => 87,  225 => 102,  191 => 69,  175 => 58,  167 => 71,  155 => 47,  113 => 38,  23 => 2,  20 => 1,  431 => 189,  343 => 146,  338 => 135,  326 => 138,  319 => 145,  308 => 287,  304 => 181,  300 => 105,  296 => 121,  290 => 119,  286 => 112,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 94,  236 => 85,  232 => 88,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 72,  192 => 71,  188 => 102,  178 => 64,  174 => 65,  170 => 56,  146 => 52,  197 => 71,  150 => 55,  84 => 27,  58 => 14,  165 => 60,  161 => 63,  152 => 46,  124 => 62,  118 => 49,  90 => 37,  76 => 28,  127 => 35,  97 => 37,  81 => 23,  77 => 20,  70 => 26,  53 => 12,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 329,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 109,  285 => 175,  283 => 100,  278 => 98,  268 => 96,  264 => 95,  258 => 94,  252 => 89,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 78,  177 => 65,  169 => 62,  140 => 58,  132 => 65,  128 => 48,  107 => 54,  61 => 23,  273 => 174,  269 => 107,  254 => 91,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 101,  219 => 76,  217 => 100,  208 => 76,  204 => 74,  179 => 98,  159 => 90,  143 => 51,  135 => 63,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  201 => 106,  196 => 92,  183 => 78,  171 => 72,  166 => 54,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 43,  138 => 49,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 24,  49 => 11,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  38 => 6,  26 => 3,  87 => 34,  31 => 4,  21 => 2,  28 => 3,  24 => 3,  25 => 3,  19 => 1,  93 => 38,  88 => 25,  78 => 18,  46 => 34,  44 => 11,  27 => 3,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 56,  111 => 47,  108 => 47,  101 => 43,  98 => 30,  96 => 30,  83 => 35,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 9,  41 => 8,  35 => 6,  32 => 4,  29 => 3,  209 => 98,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 53,  99 => 31,  95 => 34,  92 => 28,  86 => 24,  82 => 28,  80 => 29,  73 => 24,  64 => 24,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 11,  45 => 9,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
