<?php

/* CRGSBRBundle:Home:accueil.html.twig */
class __TwigTemplate_1a539783ac99ce5095a93ec74f9a9ea7f4f34dafd92257c59216663926b3cd90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "CRGSBRBundle:Home:accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
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
        echo "    Accueil | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("CRGSBRBundle:Home:menu.html.twig", "CRGSBRBundle:Home:accueil.html.twig", 8)->display($context);
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <h3 class=\"text-center\">Bienvue dans la nouvelle application de GSB</h3>

    <hr>
    <p> 
        Cette application vous permettra de consulter et de rechercher dans la base de donnée,
        toute information relatives à un médecin, rapport de visite et médicaments. Mais la grande nouveauté 
        est la possibilité de noter et d'enregistrer directement depuis cette plateforme vos rapports de visites.
    </p>

    ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5cb626c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cb626c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/5cb626c_web-medecine_1.jpg");
            // line 22
            echo "            <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Logo\"/>
        ";
        } else {
            // asset "5cb626c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cb626c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/5cb626c.jpg");
            echo "            <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Logo\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Home:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  74 => 22,  69 => 21,  63 => 20,  52 => 11,  49 => 10,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
