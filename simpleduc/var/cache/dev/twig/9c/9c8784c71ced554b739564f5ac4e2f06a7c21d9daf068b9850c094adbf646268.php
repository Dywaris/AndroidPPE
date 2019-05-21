<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b0984198a15356865c57d29001b12a7b19bfeaf2078f2346a02f2e1a3b45ddc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9324b1913be4ae68a78c4ad23e85e78d05b6fdbd92bd025309cbe9a355f17203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9324b1913be4ae68a78c4ad23e85e78d05b6fdbd92bd025309cbe9a355f17203->enter($__internal_9324b1913be4ae68a78c4ad23e85e78d05b6fdbd92bd025309cbe9a355f17203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2e0d3d57011f4d651190026663dfad44d521240b508012b02447097f0647f902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0d3d57011f4d651190026663dfad44d521240b508012b02447097f0647f902->enter($__internal_2e0d3d57011f4d651190026663dfad44d521240b508012b02447097f0647f902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9324b1913be4ae68a78c4ad23e85e78d05b6fdbd92bd025309cbe9a355f17203->leave($__internal_9324b1913be4ae68a78c4ad23e85e78d05b6fdbd92bd025309cbe9a355f17203_prof);

        
        $__internal_2e0d3d57011f4d651190026663dfad44d521240b508012b02447097f0647f902->leave($__internal_2e0d3d57011f4d651190026663dfad44d521240b508012b02447097f0647f902_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d2af97ccd1224e4d9ba4690aaf44e977132f4222dbb7524e92157fcafb5b818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2af97ccd1224e4d9ba4690aaf44e977132f4222dbb7524e92157fcafb5b818->enter($__internal_9d2af97ccd1224e4d9ba4690aaf44e977132f4222dbb7524e92157fcafb5b818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_941e59bec0aebfd4bcb88ee58427ca13111ff6b5ced0077bc894426251016185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941e59bec0aebfd4bcb88ee58427ca13111ff6b5ced0077bc894426251016185->enter($__internal_941e59bec0aebfd4bcb88ee58427ca13111ff6b5ced0077bc894426251016185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_941e59bec0aebfd4bcb88ee58427ca13111ff6b5ced0077bc894426251016185->leave($__internal_941e59bec0aebfd4bcb88ee58427ca13111ff6b5ced0077bc894426251016185_prof);

        
        $__internal_9d2af97ccd1224e4d9ba4690aaf44e977132f4222dbb7524e92157fcafb5b818->leave($__internal_9d2af97ccd1224e4d9ba4690aaf44e977132f4222dbb7524e92157fcafb5b818_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8dd70617b2525707d3572b05b6c7c2a25b1e2e3563f55980a9a0995186fe8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8dd70617b2525707d3572b05b6c7c2a25b1e2e3563f55980a9a0995186fe8f2->enter($__internal_b8dd70617b2525707d3572b05b6c7c2a25b1e2e3563f55980a9a0995186fe8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39e8c06f7c0fd5bafc9a4176f09518eadbe9dbe1175504bb17c6b759f55070c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e8c06f7c0fd5bafc9a4176f09518eadbe9dbe1175504bb17c6b759f55070c7->enter($__internal_39e8c06f7c0fd5bafc9a4176f09518eadbe9dbe1175504bb17c6b759f55070c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_39e8c06f7c0fd5bafc9a4176f09518eadbe9dbe1175504bb17c6b759f55070c7->leave($__internal_39e8c06f7c0fd5bafc9a4176f09518eadbe9dbe1175504bb17c6b759f55070c7_prof);

        
        $__internal_b8dd70617b2525707d3572b05b6c7c2a25b1e2e3563f55980a9a0995186fe8f2->leave($__internal_b8dd70617b2525707d3572b05b6c7c2a25b1e2e3563f55980a9a0995186fe8f2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b55e7986d4efc11fc918a3c892a9ea3bac544a9672ff09cd68afcd3632add0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55e7986d4efc11fc918a3c892a9ea3bac544a9672ff09cd68afcd3632add0cf->enter($__internal_b55e7986d4efc11fc918a3c892a9ea3bac544a9672ff09cd68afcd3632add0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b88e5647937c0b7d01d5840a3084f0a2cf68ad6d7c14f734c268e1a19f699f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88e5647937c0b7d01d5840a3084f0a2cf68ad6d7c14f734c268e1a19f699f5e->enter($__internal_b88e5647937c0b7d01d5840a3084f0a2cf68ad6d7c14f734c268e1a19f699f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b88e5647937c0b7d01d5840a3084f0a2cf68ad6d7c14f734c268e1a19f699f5e->leave($__internal_b88e5647937c0b7d01d5840a3084f0a2cf68ad6d7c14f734c268e1a19f699f5e_prof);

        
        $__internal_b55e7986d4efc11fc918a3c892a9ea3bac544a9672ff09cd68afcd3632add0cf->leave($__internal_b55e7986d4efc11fc918a3c892a9ea3bac544a9672ff09cd68afcd3632add0cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
