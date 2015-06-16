<?php

/* CRGSBRBundle:Home:connexion.html.twig */
class __TwigTemplate_f932f4f2d3c2de056d2b7b4b20132885d21efe5d5d1d922a981abf34b9fe0e87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "CRGSBRBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Connexion | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array("Bad credentials" => "Identifiant ou mot de passe incorrect")), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <h2 class=\"text-center login-title\">Authentification</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("crgsbr_connexion_check");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" id=\"exampleInputEmail1\" placeholder=\"identifiant\" autofocus>
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"exampleInputPassword1\" placeholder=\"mot de passe\">
                </div>
                <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"Valider\" name=\"valider\">
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  60 => 18,  51 => 11,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
