<?php

/* CRGSBRBundle:Home:menu.html.twig */
class __TwigTemplate_4003e732cdcbec99d79f31dae515a8afe1e14fc8d9c89244abbe693b7ffe7f32 extends Twig_Template
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
        echo "<nav id=\"top-nav\" class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>

            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("crgsbr_homepage");
        echo "\">GSB-Report</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
                        Médicaments<span class=\"caret\"></span></a>
                    <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("crgsbr_medicament_consulter");
        echo "\">Consulter</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("crgsbr_medicament_rechercher");
        echo "\">Rechercher</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
                        Praticiens<span class=\"caret\"></span></a>
                    <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_consulter");
        echo "\">Consulter</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_rechercher");
        echo "\">Rechercher</a></li>
                    </ul>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
                        Rapport de visite<span class=\"caret\"></span></a>
                    <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_rapportVisite_consulter", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\">Consulter</a></li>
                        <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_rapportVisite_ajouter", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\">Ajouter</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"glyphicon glyphicon-user\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array())), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                    <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\">Profil</a></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("crgsbr_deconnexion");
        echo "\">Se déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    
    </div><!-- /container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Home:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 44,  87 => 43,  82 => 41,  72 => 34,  68 => 33,  59 => 27,  55 => 26,  45 => 19,  41 => 18,  30 => 10,  19 => 1,);
    }
}
