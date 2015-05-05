<?php

/* CRGSBRBundle:Praticien:praticien.html.twig */
class __TwigTemplate_7775d26ce959ef3ff5cb712ab829f62d0c258e2ee3726b8a556c76bfdfc0d8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:Praticien:praticien.html.twig", 1);
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
        echo "    Consultation des praticiens
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h3 class=\"text-center\">Praticiens</h3>

    <hr> 
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Ville</th>
                    <th>Type</th>
                </tr>
            </thead>
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesPrat"]) ? $context["mesPrat"] : $this->getContext($context, "mesPrat")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "                <tr>
                    <td class=\"text-primary\"> <strong> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "getNomMedecin", array()), "html", null, true);
            echo " </strong> </td>
                    <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "getPrenomMedecin", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "getVilleMedecin", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "getTypeMedecin", array()), "getLibelleType", array()), "html", null, true);
            echo "</td>                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Praticien:praticien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  59 => 22,  55 => 21,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
