<?php

/* menubase.twig */
class __TwigTemplate_e795e8d4669c9d99688865bc7fa9f56538bde3ec0eb8aa981d14a73369dcffec extends Twig_Template
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
        // line 1
        echo "<div class=\"container-fluid\">
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "        <a class=\"navbar-brand\" href=\"/magasinier/produits/liste\">ODI</a>
      </div>

      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"/produits/liste/tout\">Liste des produits</a></li>
          <li><a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutProduit");
            echo "\">Ajouter un produit</a></li>
          <li><a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeStocksProduit");
            echo "\">Gestion des stocks</a></li>
          <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listePaniersMagasinier");
            echo "\">Gestion des paniers</a></li>
          <li><a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeAlerte");
            echo "\">Alertes</a></li>
        </ul>
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 22
            echo "    <a class=\"navbar-brand\" href=\"#\">Client : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "pseudo_personne"), "method"), "html", null, true);
            echo "</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"/produits/liste/tout\">Liste des produits</a></li>
      <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panierClient");
            echo "\">Creation/Reprise d'un panier</a></li>
      <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listePaniersClient");
            echo "\">Liste des paniers</a></li>
    </ul>
    ";
        } else {
            // line 32
            echo "        <a class=\"navbar-brand\" href=\"/\">ODI</a>
        </div>
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/produits/liste/tout\">Produits</a></li>
          </ul>

    ";
        }
        // line 39
        echo "    <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "                 <li>
                     <i class='fa fa-user-secret'></i>
                     ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "
                </li>
                 <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">déconnexion</a></li>
            ";
        } else {
            // line 47
            echo "                 <li><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">connexion</a></li>
            ";
        }
        // line 49
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "menubase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  105 => 47,  100 => 45,  95 => 43,  91 => 41,  89 => 40,  86 => 39,  77 => 32,  71 => 29,  67 => 28,  57 => 22,  51 => 19,  47 => 18,  43 => 17,  39 => 16,  31 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menubase.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\app\\Resources\\views\\menubase.twig");
    }
}
