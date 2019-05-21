<?php

/* EpsiFirstBundle::layout.html.twig */
class __TwigTemplate_65f6896cacddcb9f213340283149f38fd05590ef70ff4e568fc5056c36b27048 extends Twig_Template
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
        $__internal_98c9baccad8c17e87a23bba94758eec3109e3fe014af3bb7cc30f9502964d002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c9baccad8c17e87a23bba94758eec3109e3fe014af3bb7cc30f9502964d002->enter($__internal_98c9baccad8c17e87a23bba94758eec3109e3fe014af3bb7cc30f9502964d002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle::layout.html.twig"));

        $__internal_bc85b17b344c5f3700e1b0867232303e4fa1d3bf96c9908f2a09843a4db71910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc85b17b344c5f3700e1b0867232303e4fa1d3bf96c9908f2a09843a4db71910->enter($__internal_bc85b17b344c5f3700e1b0867232303e4fa1d3bf96c9908f2a09843a4db71910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle::layout.html.twig"));

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
        
        $__internal_98c9baccad8c17e87a23bba94758eec3109e3fe014af3bb7cc30f9502964d002->leave($__internal_98c9baccad8c17e87a23bba94758eec3109e3fe014af3bb7cc30f9502964d002_prof);

        
        $__internal_bc85b17b344c5f3700e1b0867232303e4fa1d3bf96c9908f2a09843a4db71910->leave($__internal_bc85b17b344c5f3700e1b0867232303e4fa1d3bf96c9908f2a09843a4db71910_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11618b006dc1b0c4b4f5f3242fdb7ce50e9d8bf54c322f3f0a7a47cb0f2b314f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11618b006dc1b0c4b4f5f3242fdb7ce50e9d8bf54c322f3f0a7a47cb0f2b314f->enter($__internal_11618b006dc1b0c4b4f5f3242fdb7ce50e9d8bf54c322f3f0a7a47cb0f2b314f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af7f7e7f58fbb87ff51fe66eb41cb36e2340bdd24b885928b7cedb0b41517180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7f7e7f58fbb87ff51fe66eb41cb36e2340bdd24b885928b7cedb0b41517180->enter($__internal_af7f7e7f58fbb87ff51fe66eb41cb36e2340bdd24b885928b7cedb0b41517180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Premier Bundle ";
        
        $__internal_af7f7e7f58fbb87ff51fe66eb41cb36e2340bdd24b885928b7cedb0b41517180->leave($__internal_af7f7e7f58fbb87ff51fe66eb41cb36e2340bdd24b885928b7cedb0b41517180_prof);

        
        $__internal_11618b006dc1b0c4b4f5f3242fdb7ce50e9d8bf54c322f3f0a7a47cb0f2b314f->leave($__internal_11618b006dc1b0c4b4f5f3242fdb7ce50e9d8bf54c322f3f0a7a47cb0f2b314f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae8dde3d4bfd2fd277820c13297926afc8b4e37b032766f5e9b7d1b2ab20c29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8dde3d4bfd2fd277820c13297926afc8b4e37b032766f5e9b7d1b2ab20c29f->enter($__internal_ae8dde3d4bfd2fd277820c13297926afc8b4e37b032766f5e9b7d1b2ab20c29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b8702ae53077d837b782c71fb75ce2336efb0edb25425fdb3bf12c4c5244ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8702ae53077d837b782c71fb75ce2336efb0edb25425fdb3bf12c4c5244ec5->enter($__internal_4b8702ae53077d837b782c71fb75ce2336efb0edb25425fdb3bf12c4c5244ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b8702ae53077d837b782c71fb75ce2336efb0edb25425fdb3bf12c4c5244ec5->leave($__internal_4b8702ae53077d837b782c71fb75ce2336efb0edb25425fdb3bf12c4c5244ec5_prof);

        
        $__internal_ae8dde3d4bfd2fd277820c13297926afc8b4e37b032766f5e9b7d1b2ab20c29f->leave($__internal_ae8dde3d4bfd2fd277820c13297926afc8b4e37b032766f5e9b7d1b2ab20c29f_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba13055d8fb74a5fe36ffd92e9e4b82c650ed4b309b4e82eb8e436933d6e1077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba13055d8fb74a5fe36ffd92e9e4b82c650ed4b309b4e82eb8e436933d6e1077->enter($__internal_ba13055d8fb74a5fe36ffd92e9e4b82c650ed4b309b4e82eb8e436933d6e1077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c9ed0ec99a879a19aa5f8d9345bef113ce8e266d14f7e75e053e82a34522ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9ed0ec99a879a19aa5f8d9345bef113ce8e266d14f7e75e053e82a34522ae6->enter($__internal_5c9ed0ec99a879a19aa5f8d9345bef113ce8e266d14f7e75e053e82a34522ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5c9ed0ec99a879a19aa5f8d9345bef113ce8e266d14f7e75e053e82a34522ae6->leave($__internal_5c9ed0ec99a879a19aa5f8d9345bef113ce8e266d14f7e75e053e82a34522ae6_prof);

        
        $__internal_ba13055d8fb74a5fe36ffd92e9e4b82c650ed4b309b4e82eb8e436933d6e1077->leave($__internal_ba13055d8fb74a5fe36ffd92e9e4b82c650ed4b309b4e82eb8e436933d6e1077_prof);

    }

    // line 42
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7b3c27c04c67da427e248859db510a1da5f70956e0165437f18f2505b2e4cf36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3c27c04c67da427e248859db510a1da5f70956e0165437f18f2505b2e4cf36->enter($__internal_7b3c27c04c67da427e248859db510a1da5f70956e0165437f18f2505b2e4cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6340d2f4fec3d78bf44b595b2e2b5f386d9d661194c72a88b553034a9c3a1621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6340d2f4fec3d78bf44b595b2e2b5f386d9d661194c72a88b553034a9c3a1621->enter($__internal_6340d2f4fec3d78bf44b595b2e2b5f386d9d661194c72a88b553034a9c3a1621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 43
        echo "            ";
        
        $__internal_6340d2f4fec3d78bf44b595b2e2b5f386d9d661194c72a88b553034a9c3a1621->leave($__internal_6340d2f4fec3d78bf44b595b2e2b5f386d9d661194c72a88b553034a9c3a1621_prof);

        
        $__internal_7b3c27c04c67da427e248859db510a1da5f70956e0165437f18f2505b2e4cf36->leave($__internal_7b3c27c04c67da427e248859db510a1da5f70956e0165437f18f2505b2e4cf36_prof);

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
        return array (  193 => 43,  184 => 42,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  156 => 30,  147 => 29,  135 => 44,  133 => 42,  126 => 37,  124 => 29,  113 => 21,  107 => 17,  98 => 16,  80 => 5,  69 => 47,  67 => 16,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %} Premier Bundle {% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{asset('bundles/epsifirst/css/bootstrap.min.css')}}\"
              type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{asset('bundles/epsifirst/css/style.css')}}\" type=\"text/css\"/>
        <link rel=\"shortcut icon\" href=\"{{asset('bundles/epsifirst/images/favicon.ico')}}\"/>
        <link rel=\"stylesheet\" href=\"{{asset('bundles/epsifirst/css/font-awesome.min.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{asset('bundles/epsifirst/css/flaticon.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{asset('bundles/epsifirst/css/owl.carousel.css')}}\"/>

    </head>
    <body>
        {% block body %}
            <header class=\"header-section\">
                <div class=\"header-warp\">
                    <div class=\"container\">
                        <a href=\"#\" class=\"site-logo\">
                            <img src=\"{{asset('bundles/epsifirst/images/logo.png')}}\" alt=\"\">
                        </a>
                        <div class=\"user-panel\">
                            <a href=\"#\">Login</a><span>/</span><a href=\"\">Register</a>
                        </div>
                        <div class=\"nav-switch\">
                            <i class=\"fa fa-bars\"></i>
                        </div>
                        {% block menu %}
                            <ul class=\"main-menu\">
                                <li><a href=\"{{ path('epsi_first_homepage')}}\">Accueil</a></li>
                                <li><a href=\"{{ path('epsi_first_utilisateur')}}\">Utilisateur</a></li>
                                <li><a href=\"{{ path('epsi_first_entreprise')}}\">Entreprise</a></li>
                                <li><a href=\"{{ path('epsi_first_theme')}}\">Thème</a></li>
                            </ul>
                        {% endblock %}
                    </div>
                </div>
            </header>


            {% block contenu %}
            {% endblock %}

        
    {% endblock %}
</body>
</html>", "EpsiFirstBundle::layout.html.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/layout.html.twig");
    }
}
