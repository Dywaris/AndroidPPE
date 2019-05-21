<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_42a61b9a9345420f9240031de1aca8eb682a819bd2869f7245d36673df600a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6c0c335fe384ebd1cce38507ab7a1988ed1364ae178323b5bb55db2d7634bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c0c335fe384ebd1cce38507ab7a1988ed1364ae178323b5bb55db2d7634bb1->enter($__internal_c6c0c335fe384ebd1cce38507ab7a1988ed1364ae178323b5bb55db2d7634bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_04e07eefd7b01fa99978268f9fcf736091c6005bd89459d15285d8405b9f1b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e07eefd7b01fa99978268f9fcf736091c6005bd89459d15285d8405b9f1b1e->enter($__internal_04e07eefd7b01fa99978268f9fcf736091c6005bd89459d15285d8405b9f1b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c0c335fe384ebd1cce38507ab7a1988ed1364ae178323b5bb55db2d7634bb1->leave($__internal_c6c0c335fe384ebd1cce38507ab7a1988ed1364ae178323b5bb55db2d7634bb1_prof);

        
        $__internal_04e07eefd7b01fa99978268f9fcf736091c6005bd89459d15285d8405b9f1b1e->leave($__internal_04e07eefd7b01fa99978268f9fcf736091c6005bd89459d15285d8405b9f1b1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b327817e3e79a5d735cd9a5b528cb02439080cb1561bf8e9c208824e3736fa50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b327817e3e79a5d735cd9a5b528cb02439080cb1561bf8e9c208824e3736fa50->enter($__internal_b327817e3e79a5d735cd9a5b528cb02439080cb1561bf8e9c208824e3736fa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9073d2e8a03ec654719604a2095869749b7b32c608b9c8336786346ab60f0b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9073d2e8a03ec654719604a2095869749b7b32c608b9c8336786346ab60f0b91->enter($__internal_9073d2e8a03ec654719604a2095869749b7b32c608b9c8336786346ab60f0b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9073d2e8a03ec654719604a2095869749b7b32c608b9c8336786346ab60f0b91->leave($__internal_9073d2e8a03ec654719604a2095869749b7b32c608b9c8336786346ab60f0b91_prof);

        
        $__internal_b327817e3e79a5d735cd9a5b528cb02439080cb1561bf8e9c208824e3736fa50->leave($__internal_b327817e3e79a5d735cd9a5b528cb02439080cb1561bf8e9c208824e3736fa50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8edb50614413c7f00bd64fb7401aab6b86d5e75d61ae361aeca01bf1b54ac248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edb50614413c7f00bd64fb7401aab6b86d5e75d61ae361aeca01bf1b54ac248->enter($__internal_8edb50614413c7f00bd64fb7401aab6b86d5e75d61ae361aeca01bf1b54ac248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03fb18193f99a6f873aa720d178e70e5166aeef3b96edbd371e2396c80e5c124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fb18193f99a6f873aa720d178e70e5166aeef3b96edbd371e2396c80e5c124->enter($__internal_03fb18193f99a6f873aa720d178e70e5166aeef3b96edbd371e2396c80e5c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03fb18193f99a6f873aa720d178e70e5166aeef3b96edbd371e2396c80e5c124->leave($__internal_03fb18193f99a6f873aa720d178e70e5166aeef3b96edbd371e2396c80e5c124_prof);

        
        $__internal_8edb50614413c7f00bd64fb7401aab6b86d5e75d61ae361aeca01bf1b54ac248->leave($__internal_8edb50614413c7f00bd64fb7401aab6b86d5e75d61ae361aeca01bf1b54ac248_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01c1a80bdd4b2faa0d61f69e2b4eedeb273fdb3ecdeb3f2229e307c99f31f42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c1a80bdd4b2faa0d61f69e2b4eedeb273fdb3ecdeb3f2229e307c99f31f42b->enter($__internal_01c1a80bdd4b2faa0d61f69e2b4eedeb273fdb3ecdeb3f2229e307c99f31f42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82a1c91a386f85787992a17c9bc5d72cb2908962af23fb8440216e1825ad2020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a1c91a386f85787992a17c9bc5d72cb2908962af23fb8440216e1825ad2020->enter($__internal_82a1c91a386f85787992a17c9bc5d72cb2908962af23fb8440216e1825ad2020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82a1c91a386f85787992a17c9bc5d72cb2908962af23fb8440216e1825ad2020->leave($__internal_82a1c91a386f85787992a17c9bc5d72cb2908962af23fb8440216e1825ad2020_prof);

        
        $__internal_01c1a80bdd4b2faa0d61f69e2b4eedeb273fdb3ecdeb3f2229e307c99f31f42b->leave($__internal_01c1a80bdd4b2faa0d61f69e2b4eedeb273fdb3ecdeb3f2229e307c99f31f42b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
