<?php

/* ::layout.html.twig */
class __TwigTemplate_473d0a1987b570364b1469d525d94e56e0f5aacc1d2029b8e4ccecfce648bce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]><script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('menu', $context, $blocks);
        // line 21
        echo "        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                <img id=\"logo\" class=\"img-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbrbundle/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"/>
                <h1>GSB - Report</h1>
                <p>Gestion des rapports de visites</p>
            </div>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 28
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 29
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade in\" role=\"alert\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">x</span>
                        </button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            <hr>
        </div>
        <footer class=\"text-center\">
            <p>Galaxy Swiss Bourdin © ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </footer>
    </div>
    ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "GSB - CR";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbrbundle/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" >
        ";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "                ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 40
        echo "            ";
    }

    // line 38
    public function block_bloc1($context, array $blocks = array())
    {
        // line 39
        echo "                ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  156 => 47,  152 => 39,  149 => 38,  145 => 40,  142 => 38,  139 => 37,  135 => 20,  132 => 19,  126 => 10,  123 => 9,  120 => 8,  114 => 6,  109 => 51,  107 => 47,  101 => 44,  96 => 41,  93 => 37,  87 => 36,  75 => 30,  70 => 29,  65 => 28,  61 => 27,  54 => 23,  50 => 21,  48 => 19,  39 => 12,  37 => 8,  32 => 6,  25 => 1,);
    }
}
