<?php

/* CRGSBRBundle:RapportVisite:rapportVisite.html.twig */
class __TwigTemplate_d143bc76b121a56e4b935151b258701841a5d7c6d0d9dcc1aa71c1e4b7483956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:RapportVisite:rapportVisite.html.twig", 1);
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
        echo "    Consultation des rapports de visite
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h3 class=\"text-center\">Vos rapport de visites</h3>

    <hr>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr class=\"text-center\">
                    <th>Date</th>
                    <th>Praticien</th>
                    <th>Ville</th>
                    <th>Motif</th>
                    <th>Modification</th>
                    <th>Suppression</th>
                </tr>
            </thead>
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesRapports"]) ? $context["mesRapports"] : $this->getContext($context, "mesRapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 24
            echo "                <tr>
                    <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "getDateRapport", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                    <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "getMedecin", array()), "getPrenomNom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "getMedecin", array()), "getVilleMedecin", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getMotif", array()), "html", null, true);
            echo "</td>
                    <td> <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_rapportVisite_modifier", array("id" => $this->getAttribute($context["r"], "getId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a>
                    <td> <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_rapportVisite_supprimer", array("id" => $this->getAttribute($context["r"], "getId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:RapportVisite:rapportVisite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  61 => 24,  57 => 23,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
