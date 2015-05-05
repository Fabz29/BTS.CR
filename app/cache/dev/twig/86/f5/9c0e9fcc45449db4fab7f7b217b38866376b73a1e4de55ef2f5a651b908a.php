<?php

/* CRGSBRBundle:Medicament:medicament.html.twig */
class __TwigTemplate_86f59c0e9fcc45449db4fab7f7b217b38866376b73a1e4de55ef2f5a651b908a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:Medicament:medicament.html.twig", 1);
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
        echo "    Consultation des médicaments
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <h3 class=\"text-center\">Médicaments</h3>

    <hr> 
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Nom Commercial</th>
                    <th>Famille</th>
                </tr>
            </thead>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesMed"]) ? $context["mesMed"] : $this->getContext($context, "mesMed")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 21
            echo "                <tr>
                    <td class=\"text-primary\"><strong> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "getNomCommercial", array()), "html", null, true);
            echo "<strong></td>
                    <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "getFamille", array()), "getLibelleFamille", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Medicament:medicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  65 => 23,  61 => 22,  58 => 21,  54 => 20,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
