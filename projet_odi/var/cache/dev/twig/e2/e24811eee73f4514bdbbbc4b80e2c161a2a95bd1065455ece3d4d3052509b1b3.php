<?php

/* produit/index.html.twig */
class __TwigTemplate_7fff7a62042ada8daaab38c4fc3725f549cc37573437476f38ef439503f544f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53e1b0559d858bb30cc9aae0071f9a4b5e858e95ba3e691d3987f5a347524634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e1b0559d858bb30cc9aae0071f9a4b5e858e95ba3e691d3987f5a347524634->enter($__internal_53e1b0559d858bb30cc9aae0071f9a4b5e858e95ba3e691d3987f5a347524634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_4888bc3dca4986315db606a4830a3cd1aab0f35b21070cea85765c8b89c3baf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4888bc3dca4986315db606a4830a3cd1aab0f35b21070cea85765c8b89c3baf5->enter($__internal_4888bc3dca4986315db606a4830a3cd1aab0f35b21070cea85765c8b89c3baf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e1b0559d858bb30cc9aae0071f9a4b5e858e95ba3e691d3987f5a347524634->leave($__internal_53e1b0559d858bb30cc9aae0071f9a4b5e858e95ba3e691d3987f5a347524634_prof);

        
        $__internal_4888bc3dca4986315db606a4830a3cd1aab0f35b21070cea85765c8b89c3baf5->leave($__internal_4888bc3dca4986315db606a4830a3cd1aab0f35b21070cea85765c8b89c3baf5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d5cef7a81f6584c5a7935942a7e5b192b12fcc71856b05fc240ad30d6d2b75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5cef7a81f6584c5a7935942a7e5b192b12fcc71856b05fc240ad30d6d2b75e->enter($__internal_7d5cef7a81f6584c5a7935942a7e5b192b12fcc71856b05fc240ad30d6d2b75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50359aa967095587f0759efb07dc52e0a332239fab18ae0fce4100385e2ed239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50359aa967095587f0759efb07dc52e0a332239fab18ae0fce4100385e2ed239->enter($__internal_50359aa967095587f0759efb07dc52e0a332239fab18ae0fce4100385e2ed239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Ref_produit</th>
                <th>Nom_produit</th>
                <th>Description_produit</th>
                <th>Categorie_produit</th>
                <th>Quantite_produit</th>
                <th>Quantite_min_produit</th>
                <th>Prix_produit</th>
                <th>Date_peremption_prduit</th>
                <th>Photo_produit</th>
                <th>Visible_produit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show", array("id" => $this->getAttribute($context["produit"], "ref_produit", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "refproduit", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomproduit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "descriptionproduit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorieproduit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantiteproduit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantiteminproduit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixproduit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["produit"], "dateperemptionprduit", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["produit"], "dateperemptionprduit", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "photoproduit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["produit"], "visibleproduit", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_show", array("id" => $this->getAttribute($context["produit"], "ref_produit", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_edit", array("id" => $this->getAttribute($context["produit"], "ref_produit", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
          
        </li>
    </ul>
";
        
        $__internal_50359aa967095587f0759efb07dc52e0a332239fab18ae0fce4100385e2ed239->leave($__internal_50359aa967095587f0759efb07dc52e0a332239fab18ae0fce4100385e2ed239_prof);

        
        $__internal_7d5cef7a81f6584c5a7935942a7e5b192b12fcc71856b05fc240ad30d6d2b75e->leave($__internal_7d5cef7a81f6584c5a7935942a7e5b192b12fcc71856b05fc240ad30d6d2b75e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  134 => 41,  128 => 38,  117 => 34,  113 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Produits list</h1>

    <table>
        <thead>
            <tr>
                <th>Ref_produit</th>
                <th>Nom_produit</th>
                <th>Description_produit</th>
                <th>Categorie_produit</th>
                <th>Quantite_produit</th>
                <th>Quantite_min_produit</th>
                <th>Prix_produit</th>
                <th>Date_peremption_prduit</th>
                <th>Photo_produit</th>
                <th>Visible_produit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td><a href=\"{{ path('produit_show', { 'id': produit.ref_produit }) }}\">{{ produit.refproduit }}</a></td>
                <td>{{ produit.nomproduit }}</td>
                <td>{{ produit.descriptionproduit }}</td>
                <td>{{ produit.categorieproduit }}</td>
                <td>{{ produit.quantiteproduit }}</td>
                <td>{{ produit.quantiteminproduit }}</td>
                <td>{{ produit.prixproduit }}</td>
                <td>{% if produit.dateperemptionprduit %}{{ produit.dateperemptionprduit|date('Y-m-d') }}{% endif %}</td>
                <td>{{ produit.photoproduit }}</td>
                <td>{% if produit.visibleproduit %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('produit_show', { 'id': produit.ref_produit }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('produit_edit', { 'id': produit.ref_produit }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
          
        </li>
    </ul>
{% endblock %}
", "produit/index.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\produit\\index.html.twig");
    }
}
