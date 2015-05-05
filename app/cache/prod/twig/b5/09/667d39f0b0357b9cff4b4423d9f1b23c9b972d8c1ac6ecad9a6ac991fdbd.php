<?php

/* CRGSBRBundle:Praticien:recherchePraticien.html.twig */
class __TwigTemplate_b509667d39f0b0357b9cff4b4423d9f1b23c9b972d8c1ac6ecad9a6ac991fdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CRGSBRBundle:Home:accueil.html.twig", "CRGSBRBundle:Praticien:recherchePraticien.html.twig", 1);
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
        echo "    Rechercher des praticiens
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (((isset($context["avance"]) ? $context["avance"] : null) == false)) {
            // line 12
            echo "        <ul class=\"nav nav-tabs nav-justified\">
            <li role=\"presentation\" class=\"active\"><a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_rechercher");
            echo "\">Simple</a></li>
            <li role=\"presentation\"><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_rechercher_avance");
            echo "\">Avancé</a></li>
        </ul>

        <br>

        <h3 class=\"text-center\">Recherche de praticiens</h3>
        <hr>

        <form method=\"POST\" action=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_resultat");
            echo "\" class=\"form-horizontal\">
            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">Famille</label>
                <div class=\"col-sm-6\">
                    <select class=\"form-control\" id=\"idTypeMedecin\" name=\"idTypeMedecin\">
                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesTypes"]) ? $context["mesTypes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 28
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getId", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getLibelleType", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </select>
                </div>
            </div>
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Rechercher</button>
            </div>
        </form>

    ";
        } elseif ((        // line 38
(isset($context["avance"]) ? $context["avance"] : null) == true)) {
            // line 39
            echo "        <ul class=\"nav nav-tabs nav-justified\">
            <li role=\"presentation\"><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_rechercher");
            echo "\">Simple</a></li>
            <li role=\"presentation\" class=\"active\"><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_rechercher_avance");
            echo "\">Avancé</a></li>
        </ul>

        <br>

        <h3 class=\"text-center\">Recherche affinée de praticiens</h3>
        <hr>

        <form method=\"POST\" action=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("crgsbr_praticien_resultat_avance");
            echo "\" class=\"form-horizontal\">
            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">Nom</label>
                <div class=\"col-sm-4\">
                    <input class=\"form-control\" type=\"text\" id=\"nomMedecin\" name=\"nomMedecin\" autofocus>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">Ville</label>
                <div class=\"col-sm-4\">
                    <input class=\"form-control\" type=\"text\" id=\"nomVille\" name=\"nomVille\" >
                </div>
            </div>
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Rechercher</button>
            </div>
        </form>
    ";
        }
        // line 67
        echo "
    <br>
    <br>

    ";
        // line 71
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 72
        echo "        ";
        if (array_key_exists("mesResultats", $context)) {
            // line 73
            echo "            <h3 class=\"text-center\">Résultats de la recherche</h3>

            <hr> 

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
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mesResultats"]) ? $context["mesResultats"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 89
                echo "                    <tr>
                        <td class=\"text-primary\"> <strong> ";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getNomMedecin", array()), "html", null, true);
                echo " </strong> </td>
                        <td> ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getPrenomMedecin", array()), "html", null, true);
                echo "</td>
                        <td> ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "getVilleMedecin", array()), "html", null, true);
                echo "</td>
                        <td> ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "getTypeMedecin", array()), "getLibelleType", array()), "html", null, true);
                echo "</td>                    
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
            </table>
        ";
        }
        // line 99
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:Praticien:recherchePraticien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 99,  196 => 96,  187 => 93,  183 => 92,  179 => 91,  175 => 90,  172 => 89,  168 => 88,  151 => 73,  148 => 72,  142 => 71,  136 => 67,  115 => 49,  104 => 41,  100 => 40,  97 => 39,  95 => 38,  85 => 30,  74 => 28,  70 => 27,  62 => 22,  51 => 14,  47 => 13,  44 => 12,  41 => 11,  38 => 10,  33 => 4,  30 => 3,  11 => 1,);
    }
}
