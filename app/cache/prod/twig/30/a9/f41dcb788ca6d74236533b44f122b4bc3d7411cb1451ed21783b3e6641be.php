<?php

/* CRGSBRBundle:RapportVisite:ajouterRapportVisite.html.twig */
class __TwigTemplate_30a9f41dcb788ca6d74236533b44f122b4bc3d7411cb1451ed21783b3e6641be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:RapportVisite:ajouterRapportVisite.html.twig", 1);
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
        echo "    Nouveau rapport de visite
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h3 class=\"text-center\">Nouveau rapport de visite</h3>

    <hr> 
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medecin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Praticien"));
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medecin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medecin", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">

        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRapport", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date"));
        echo "


        <div class=\"col-sm-4\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRapport", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRapport", array()), 'errors');
        echo "
        </div>
    </div>


    <div class=\"form-group\">
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Motif"));
        echo "


        <div class=\"col-sm-4\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'errors');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bilan", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Bilan"));
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bilan", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bilan", array()), 'errors');
        echo "
        </div>
    </div>


    <div class=\"text-center\">
        ";
        // line 58
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    </div>

    ";
        // line 64
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


    ";
        // line 68
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:RapportVisite:ajouterRapportVisite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 68,  140 => 64,  133 => 58,  124 => 51,  120 => 50,  114 => 47,  106 => 42,  102 => 41,  95 => 37,  86 => 31,  82 => 30,  75 => 26,  66 => 20,  62 => 19,  56 => 16,  50 => 13,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
