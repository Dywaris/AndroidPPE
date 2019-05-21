<?php

/* EpsiFirstBundle::layout.html.twig */
class __TwigTemplate_57c2941f0edd0eab6e9a706d74c1a1887a395cc19d1c1ce3b32c12937ceb1d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/css/bootstrap.min.css"), "html", null, true);
        echo "\"
              type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/images/favicon.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/css/flaticon.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/css/owl.carousel.css"), "html", null, true);
        echo "\"/>

    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Premier Bundle ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "            <header class=\"header-section\">
                <div class=\"header-warp\">
                    <div class=\"container\">
                        <a href=\"#\" class=\"site-logo\">
                            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                        <div class=\"user-panel\">
                            <a href=\"#\">Login</a><span>/</span><a href=\"\">Register</a>
                        </div>
                        <div class=\"nav-switch\">
                            <i class=\"fa fa-bars\"></i>
                        </div>
                        ";
        // line 29
        $this->displayBlock('menu', $context, $blocks);
        // line 37
        echo "                    </div>
                </div>
            </header>


            ";
        // line 42
        $this->displayBlock('contenu', $context, $blocks);
        // line 44
        echo "
        
    ";
    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        // line 30
        echo "                            <ul class=\"main-menu\">
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("epsi_first_homepage");
        echo "\">Accueil</a></li>
                                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("epsi_first_utilisateur");
        echo "\">Utilisateur</a></li>
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("epsi_first_entreprise");
        echo "\">Entreprise</a></li>
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("epsi_first_theme");
        echo "\">Thème</a></li>
                            </ul>
                        ";
    }

    // line 42
    public function block_contenu($context, array $blocks = array())
    {
        // line 43
        echo "            ";
    }

    public function getTemplateName()
    {
        return "EpsiFirstBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 43,  136 => 42,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  114 => 30,  111 => 29,  105 => 44,  103 => 42,  96 => 37,  94 => 29,  83 => 21,  77 => 17,  74 => 16,  68 => 5,  63 => 47,  61 => 16,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EpsiFirstBundle::layout.html.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/layout.html.twig");
    }
}
