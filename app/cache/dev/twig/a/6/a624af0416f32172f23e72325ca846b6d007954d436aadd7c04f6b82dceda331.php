<?php

/* CRGSBRBundle:Statistiques:stats.html.twig */
class __TwigTemplate_a624af0416f32172f23e72325ca846b6d007954d436aadd7c04f6b82dceda331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:Statistiques:stats.html.twig", 1);
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
        echo "    Statistiques des rapports de visites
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <h3 class=\"text-center\">Statistiques de vos rapports</h3>

    ";
        // line 11
        if (array_key_exists("mesRapports", $context)) {
            // line 12
            echo "        <hr> 
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Praticiens</th>
                        <th>Nombre de rapports</th>
                        <th>Date du dernier rapport</th>
                    </tr>
                </thead>
                ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesRapports"]) ? $context["mesRapports"] : $this->getContext($context, "mesRapports")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 23
                echo "                    <tr>
                        <td class=\"text-primary\"><strong> ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nomMedecin", array()), "html", null, true);
                echo "<strong></td>
                                    <td> ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbRapport", array()), "html", null, true);
                echo "</td>
                                    <td> ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "date", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                </table>
                                </div>
                            ";
        }
        // line 32
        echo "


                        ";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Statistiques:stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  83 => 29,  74 => 26,  70 => 25,  66 => 24,  63 => 23,  59 => 22,  47 => 12,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
