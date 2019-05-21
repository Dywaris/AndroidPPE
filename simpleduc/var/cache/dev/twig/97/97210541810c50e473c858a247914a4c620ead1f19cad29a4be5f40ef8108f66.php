<?php

/* ::base.html.twig */
class __TwigTemplate_531348a6a8761dc431b8bb1bcc8af4b02a0418c3b055d1c631d0a1e3cea1a692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7fbeffd04210f5beb6fcee18c08bd3ae9fbdee3a0b4a9148d661fa8bb7c8f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fbeffd04210f5beb6fcee18c08bd3ae9fbdee3a0b4a9148d661fa8bb7c8f96->enter($__internal_f7fbeffd04210f5beb6fcee18c08bd3ae9fbdee3a0b4a9148d661fa8bb7c8f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0ca1a517d36246911f6d7b0340ba287896c17f483ed5919a0e9eea82af7fcf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca1a517d36246911f6d7b0340ba287896c17f483ed5919a0e9eea82af7fcf27->enter($__internal_0ca1a517d36246911f6d7b0340ba287896c17f483ed5919a0e9eea82af7fcf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f7fbeffd04210f5beb6fcee18c08bd3ae9fbdee3a0b4a9148d661fa8bb7c8f96->leave($__internal_f7fbeffd04210f5beb6fcee18c08bd3ae9fbdee3a0b4a9148d661fa8bb7c8f96_prof);

        
        $__internal_0ca1a517d36246911f6d7b0340ba287896c17f483ed5919a0e9eea82af7fcf27->leave($__internal_0ca1a517d36246911f6d7b0340ba287896c17f483ed5919a0e9eea82af7fcf27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ae3cd26616b239bf68e9227902b1976aee7fdfe93979fd00c19000cee0a9942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae3cd26616b239bf68e9227902b1976aee7fdfe93979fd00c19000cee0a9942->enter($__internal_1ae3cd26616b239bf68e9227902b1976aee7fdfe93979fd00c19000cee0a9942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_445034911adb2b55490d1d4afcc0b1bef3c0690ca6ad672ace65dd77a1aa73de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445034911adb2b55490d1d4afcc0b1bef3c0690ca6ad672ace65dd77a1aa73de->enter($__internal_445034911adb2b55490d1d4afcc0b1bef3c0690ca6ad672ace65dd77a1aa73de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_445034911adb2b55490d1d4afcc0b1bef3c0690ca6ad672ace65dd77a1aa73de->leave($__internal_445034911adb2b55490d1d4afcc0b1bef3c0690ca6ad672ace65dd77a1aa73de_prof);

        
        $__internal_1ae3cd26616b239bf68e9227902b1976aee7fdfe93979fd00c19000cee0a9942->leave($__internal_1ae3cd26616b239bf68e9227902b1976aee7fdfe93979fd00c19000cee0a9942_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0634e473dc39b1fa036df8a74cf394865dd9a70fcde90dbb399b5055f31c4790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0634e473dc39b1fa036df8a74cf394865dd9a70fcde90dbb399b5055f31c4790->enter($__internal_0634e473dc39b1fa036df8a74cf394865dd9a70fcde90dbb399b5055f31c4790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_488450056b7ea2ceabd2da71e99cc4b7e17a7b547ad11e240446ee965ee7da26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488450056b7ea2ceabd2da71e99cc4b7e17a7b547ad11e240446ee965ee7da26->enter($__internal_488450056b7ea2ceabd2da71e99cc4b7e17a7b547ad11e240446ee965ee7da26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_488450056b7ea2ceabd2da71e99cc4b7e17a7b547ad11e240446ee965ee7da26->leave($__internal_488450056b7ea2ceabd2da71e99cc4b7e17a7b547ad11e240446ee965ee7da26_prof);

        
        $__internal_0634e473dc39b1fa036df8a74cf394865dd9a70fcde90dbb399b5055f31c4790->leave($__internal_0634e473dc39b1fa036df8a74cf394865dd9a70fcde90dbb399b5055f31c4790_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c9aea9a86014fb325a60b6f0292bfcc51af9977671bece335ca8e615bd1441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c9aea9a86014fb325a60b6f0292bfcc51af9977671bece335ca8e615bd1441->enter($__internal_b0c9aea9a86014fb325a60b6f0292bfcc51af9977671bece335ca8e615bd1441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f13a65158e0a0dd2dde30ccbe90f99f5c7cc3709883d1dc835a2110cb50c230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f13a65158e0a0dd2dde30ccbe90f99f5c7cc3709883d1dc835a2110cb50c230->enter($__internal_0f13a65158e0a0dd2dde30ccbe90f99f5c7cc3709883d1dc835a2110cb50c230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f13a65158e0a0dd2dde30ccbe90f99f5c7cc3709883d1dc835a2110cb50c230->leave($__internal_0f13a65158e0a0dd2dde30ccbe90f99f5c7cc3709883d1dc835a2110cb50c230_prof);

        
        $__internal_b0c9aea9a86014fb325a60b6f0292bfcc51af9977671bece335ca8e615bd1441->leave($__internal_b0c9aea9a86014fb325a60b6f0292bfcc51af9977671bece335ca8e615bd1441_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5cc32788b7c721e0980f0d37f15092e04a98c529dea9a154145552e73c8a29c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc32788b7c721e0980f0d37f15092e04a98c529dea9a154145552e73c8a29c8->enter($__internal_5cc32788b7c721e0980f0d37f15092e04a98c529dea9a154145552e73c8a29c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e0862ecdf6426a29b4595159d903b82250aeda9807273d3f7e16c39d10e9a77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0862ecdf6426a29b4595159d903b82250aeda9807273d3f7e16c39d10e9a77e->enter($__internal_e0862ecdf6426a29b4595159d903b82250aeda9807273d3f7e16c39d10e9a77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0862ecdf6426a29b4595159d903b82250aeda9807273d3f7e16c39d10e9a77e->leave($__internal_e0862ecdf6426a29b4595159d903b82250aeda9807273d3f7e16c39d10e9a77e_prof);

        
        $__internal_5cc32788b7c721e0980f0d37f15092e04a98c529dea9a154145552e73c8a29c8->leave($__internal_5cc32788b7c721e0980f0d37f15092e04a98c529dea9a154145552e73c8a29c8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/simpleduc/app/Resources/views/base.html.twig");
    }
}
