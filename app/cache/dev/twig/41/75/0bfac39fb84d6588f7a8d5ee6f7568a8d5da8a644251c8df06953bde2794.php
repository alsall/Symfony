<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_41750bfac39fb84d6588f7a8d5ee6f7568a8d5da8a644251c8df06953bde2794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (($this->getAttribute($this->getContext($context, "collector"), "counterrors") || $this->getAttribute($this->getContext($context, "collector"), "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\">
            ";
            // line 9
            if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute($this->getContext($context, "collector"), "counterrors") + $this->getAttribute($this->getContext($context, "collector"), "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            echo twig_escape_filter($this->env, $this->getContext($context, "status_color"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "error_count"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute($this->getContext($context, "collector"), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (($this->getAttribute($this->getContext($context, "collector"), "counterrors") || $this->getAttribute($this->getContext($context, "collector"), "countdeprecations"))) {
            // line 40
            echo "        ";
            $context["error_count"] = ($this->getAttribute($this->getContext($context, "collector"), "counterrors") + $this->getAttribute($this->getContext($context, "collector"), "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            echo twig_escape_filter($this->env, $this->getContext($context, "error_count"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        $context["priority"] = $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
            echo ((($this->getContext($context, "value") == $this->getContext($context, "priority"))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "text"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if ($this->getAttribute($this->getContext($context, "collector"), "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((($this->getContext($context, "priority") >= 0) && ($this->getAttribute($this->getContext($context, "log"), "priority") >= $this->getContext($context, "priority"))) || (($this->getContext($context, "priority") < 0) && ((($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type"), 0)) : (0)) == $this->getContext($context, "priority"))))) {
                    // line 77
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                    if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    echo $context["logger"]->getdisplay_message($this->getAttribute($this->getContext($context, "loop"), "index"), $this->getContext($context, "log"));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                echo "
        ";
                // line 95
                $context["id"] = ("sf-call-stack-" . $this->getContext($context, "log_index"));
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "log"), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($this->getContext($context, "index") > 1)) {
                        // line 101
                        echo "            ";
                        if (($this->getContext($context, "index") == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if ($this->getAttribute($this->getContext($context, "call", true), "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "call"), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($this->getContext($context, "call"), "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute($this->getContext($context, "call", true), "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($this->getContext($context, "call"), "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute($this->getContext($context, "call", true), "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            $context["from"] = $this->getAttribute($this->getContext($context, "call"), "file");
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        echo ((($this->getAttribute($this->getContext($context, "call", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "call", true), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($this->getContext($context, "call"), "file"), $this->getAttribute($this->getContext($context, "call"), "line"), $this->getContext($context, "from"))) : ($this->getContext($context, "from")));
                        echo "</li>

            ";
                        // line 116
                        echo ((($this->getContext($context, "index") == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "log"), "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                echo "
        ";
                // line 120
                if (($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "log"), "context"))))) {
                    // line 121
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getContext($context, "log"), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 126
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  263 => 95,  231 => 83,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  348 => 140,  342 => 137,  325 => 129,  320 => 127,  289 => 113,  256 => 96,  207 => 75,  185 => 74,  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  328 => 139,  321 => 112,  293 => 120,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  259 => 103,  255 => 93,  134 => 47,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  422 => 184,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  380 => 160,  376 => 205,  361 => 146,  353 => 121,  329 => 131,  317 => 185,  313 => 183,  288 => 101,  184 => 63,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  202 => 77,  153 => 56,  302 => 125,  297 => 104,  270 => 102,  266 => 94,  262 => 98,  248 => 94,  244 => 87,  222 => 83,  216 => 79,  239 => 93,  234 => 83,  226 => 84,  212 => 78,  198 => 71,  194 => 70,  190 => 76,  186 => 68,  110 => 37,  180 => 65,  172 => 62,  181 => 65,  148 => 51,  137 => 46,  104 => 32,  129 => 44,  126 => 27,  114 => 38,  100 => 39,  65 => 22,  339 => 162,  335 => 134,  331 => 140,  279 => 132,  275 => 105,  271 => 130,  267 => 101,  213 => 78,  205 => 108,  375 => 174,  371 => 156,  367 => 155,  363 => 126,  359 => 167,  351 => 120,  347 => 191,  323 => 128,  315 => 110,  311 => 143,  307 => 128,  303 => 106,  299 => 137,  295 => 178,  291 => 102,  287 => 134,  257 => 113,  253 => 100,  249 => 111,  245 => 110,  237 => 105,  233 => 87,  225 => 102,  191 => 69,  175 => 58,  167 => 71,  155 => 47,  113 => 38,  23 => 2,  20 => 1,  431 => 189,  343 => 146,  338 => 135,  326 => 138,  319 => 145,  308 => 109,  304 => 181,  300 => 105,  296 => 121,  290 => 119,  286 => 112,  282 => 101,  272 => 97,  260 => 94,  250 => 90,  242 => 94,  236 => 85,  232 => 88,  228 => 83,  218 => 79,  210 => 77,  206 => 76,  200 => 72,  192 => 71,  188 => 102,  178 => 64,  174 => 65,  170 => 56,  146 => 52,  197 => 71,  150 => 55,  84 => 24,  58 => 14,  165 => 60,  161 => 63,  152 => 46,  124 => 62,  118 => 49,  90 => 27,  76 => 25,  127 => 35,  97 => 37,  81 => 23,  77 => 20,  70 => 19,  53 => 12,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 175,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 109,  285 => 175,  283 => 100,  278 => 98,  268 => 96,  264 => 95,  258 => 94,  252 => 89,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 78,  177 => 65,  169 => 62,  140 => 58,  132 => 65,  128 => 48,  107 => 54,  61 => 15,  273 => 174,  269 => 107,  254 => 91,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 101,  219 => 76,  217 => 100,  208 => 76,  204 => 74,  179 => 98,  159 => 90,  143 => 51,  135 => 63,  119 => 40,  102 => 33,  71 => 26,  67 => 20,  63 => 18,  59 => 16,  201 => 106,  196 => 92,  183 => 78,  171 => 72,  166 => 54,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 43,  138 => 49,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 12,  49 => 11,  94 => 21,  89 => 35,  85 => 24,  75 => 19,  68 => 30,  56 => 35,  38 => 7,  26 => 11,  87 => 34,  31 => 4,  21 => 2,  28 => 3,  24 => 3,  25 => 3,  19 => 1,  93 => 27,  88 => 25,  78 => 21,  46 => 10,  44 => 9,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 11,  37 => 4,  22 => 3,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 56,  111 => 47,  108 => 22,  101 => 31,  98 => 30,  96 => 30,  83 => 33,  74 => 27,  66 => 24,  55 => 13,  52 => 12,  50 => 22,  43 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 98,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 53,  99 => 31,  95 => 51,  92 => 27,  86 => 24,  82 => 28,  80 => 27,  73 => 24,  64 => 17,  60 => 20,  57 => 19,  54 => 34,  51 => 13,  48 => 11,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
