<?php

/* CRGSBRBundle:Medicament:rechercheMedicament.html.twig */
class __TwigTemplate_5daba761fad617feaeea0c7afa775144d7c0063996edcaf976e7d492cb4df050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:Medicament:rechercheMedicament.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
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
        echo "    Rechercher des médicaments
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h3 class=\"text-center\">Recherche de médicaments</h3>
    <hr>

    <form method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("crgsbr_medicament_resultat");
        echo "\" class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Famille</label>
            <div class=\"col-sm-6\">
                <select class=\"form-control\" id=\"idFamille\" name=\"idFamille\">
                    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesFamilles"]) ? $context["mesFamilles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 17
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getId", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getLibelleFamille", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </select>
            </div>
        </div>
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Rechercher</button>
        </div>
    </form>

    <br>
    <br>

    ";
        // line 30
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        if (array_key_exists("mesResultats", $context)) {
            // line 32
            echo "            <h3 class=\"text-center\">Résultats de la recherche</h3>

            <hr> 

            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom Commercial</th>
                        <th>Famille</th>
                    </tr>
                </thead>


                ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesResultats"]) ? $context["mesResultats"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 46
                echo "                    <tr>
                        <td class=\"text-primary\"> ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getNomCommercial", array()), "html", null, true);
                echo "</td>
                        <td> ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "getFamille", array()), "getLibelleFamille", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
            </table>
        ";
        }
        // line 54
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Medicament:rechercheMedicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  126 => 51,  117 => 48,  113 => 47,  110 => 46,  106 => 45,  91 => 32,  88 => 31,  82 => 30,  69 => 19,  58 => 17,  54 => 16,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
