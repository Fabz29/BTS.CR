<?php

/* CRGSBRBundle:Home:profil.html.twig */
class __TwigTemplate_dea75276efbf770ee7eaff96bfd78ea8e9e9c0929b6247250b3f28639e180c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:Home:profil.html.twig", 1);
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
        echo "    Modifier mon profil
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h3 class=\"text-center\">Informations personnelles</h3>

    <hr> 
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 14
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
        ";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Nom"));
        echo "

        <div class=\"col-sm-3\">

            ";
        // line 23
        echo "
            ";
        // line 25
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">

        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Prénom"));
        echo "

        <div class=\"col-sm-3\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Adresse"));
        echo "

        <div class=\"col-sm-3\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Code Postale"));
        echo "

        <div class=\"col-sm-3\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Ville"));
        echo "

        <div class=\"col-sm-3\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEmbauche", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Date d'embauche"));
        echo "

        <div class=\"col-sm-3\">
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEmbauche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEmbauche", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Nom d'utilisateur"));
        echo "

        <div class=\"col-sm-3\">
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Mot de passe"));
        echo "

        <div class=\"col-sm-3\">
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"text-center\">
        ";
        // line 96
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Mettre_à_jour", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    </div>

    ";
        // line 102
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


    ";
        // line 106
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Home:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 106,  215 => 102,  208 => 96,  200 => 90,  196 => 89,  190 => 86,  182 => 81,  178 => 80,  172 => 77,  164 => 72,  160 => 71,  154 => 68,  146 => 63,  142 => 62,  136 => 59,  128 => 54,  124 => 53,  118 => 50,  110 => 45,  106 => 44,  100 => 41,  92 => 36,  88 => 35,  82 => 32,  73 => 26,  68 => 25,  65 => 23,  57 => 18,  50 => 14,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
