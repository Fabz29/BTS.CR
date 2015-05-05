<?php

/* CRGSBRBundle:RapportVisite:supprimer.html.twig */
class __TwigTemplate_b7e9d9734d16895ed1de58fa963cd666fa27a424fc055446a07e20f73b74ee44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:RapportVisite:supprimer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CRGSBRBundle:Home:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Supprimer un rapport de visite
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"text-center\">
        <h2 >Supprimer un rapport de visite</h2>

        <hr> 

        <p>
            Etes-vous certain de vouloir supprimer le rapport numéro \"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rapportVisite"]) ? $context["rapportVisite"] : null), "id", array()), "html", null, true);
        echo "\" ?
        </p>

        ";
        // line 19
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_rapportVisite_supprimer", array("id" => $this->getAttribute((isset($context["rapportVisite"]) ? $context["rapportVisite"] : null), "getId", array()))), "html", null, true);
        echo "\" method=\"post\">

            <br>

            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_rapportVisite_consulter", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour
            </a>
            ";
        // line 28
        echo "            <button type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i> Supprimer
            </button>
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:RapportVisite:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 32,  70 => 28,  63 => 23,  55 => 19,  49 => 15,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
