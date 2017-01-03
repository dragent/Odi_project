<?php

/* magasinier/stocks.csv.twig */
class __TwigTemplate_bc24a351cde525d2d094794a2badd06e6ba69763fa4f3c0f3a336f323c78dad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425c85ebf870ff695423bd894b440f0559497fa8ef1bcfccd9c83a108b4f03a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425c85ebf870ff695423bd894b440f0559497fa8ef1bcfccd9c83a108b4f03a9->enter($__internal_425c85ebf870ff695423bd894b440f0559497fa8ef1bcfccd9c83a108b4f03a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "magasinier/stocks.csv.twig"));

        // line 1
        echo "Référence; Nom; Descriptif; Categorie; Quantité; Quantité min.; Date Limite 
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getRefProduit", array()), "html", null, true);
            echo "; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getNomProduit", array()), "html", null, true);
            echo "; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getDescriptionProduit", array()), "html", null, true);
            echo "; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getCategorieProduit", array()), "html", null, true);
            echo "; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteProduit", array()), "html", null, true);
            echo "; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "getQuantiteMinProduit", array()), "html", null, true);
            echo "; ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "getDatePeremptionProduit", array()), "d / m / Y"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo " ";
        
        $__internal_425c85ebf870ff695423bd894b440f0559497fa8ef1bcfccd9c83a108b4f03a9->leave($__internal_425c85ebf870ff695423bd894b440f0559497fa8ef1bcfccd9c83a108b4f03a9_prof);

    }

    public function getTemplateName()
    {
        return "magasinier/stocks.csv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Référence; Nom; Descriptif; Categorie; Quantité; Quantité min.; Date Limite 
{% for produit in produits %}
{{ produit.getRefProduit }}; {{ produit.getNomProduit }}; {{ produit.getDescriptionProduit }}; {{ produit.getCategorieProduit }}; {{ produit.getQuantiteProduit }}; {{ produit.getQuantiteMinProduit }}; {{ produit.getDatePeremptionProduit|date('d / m / Y') }}
{% endfor %} ", "magasinier/stocks.csv.twig", "/var/www/html/projet_odi/app/Resources/views/magasinier/stocks.csv.twig");
    }
}
