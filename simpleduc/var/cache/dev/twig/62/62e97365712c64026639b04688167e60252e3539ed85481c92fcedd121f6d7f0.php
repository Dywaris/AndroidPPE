<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_aefe61d9ac58e61b4dcb0298175f28eb518c40a7d1c90125ae296f3594b6ce9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d5468f93986dfb554eeb67f6e074303386676779ba08e0885bf99826f23a00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5468f93986dfb554eeb67f6e074303386676779ba08e0885bf99826f23a00f->enter($__internal_2d5468f93986dfb554eeb67f6e074303386676779ba08e0885bf99826f23a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a924bd3b9829d3b885705345f747e63752265e130d45b5acd09931c42a6862af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a924bd3b9829d3b885705345f747e63752265e130d45b5acd09931c42a6862af->enter($__internal_a924bd3b9829d3b885705345f747e63752265e130d45b5acd09931c42a6862af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d5468f93986dfb554eeb67f6e074303386676779ba08e0885bf99826f23a00f->leave($__internal_2d5468f93986dfb554eeb67f6e074303386676779ba08e0885bf99826f23a00f_prof);

        
        $__internal_a924bd3b9829d3b885705345f747e63752265e130d45b5acd09931c42a6862af->leave($__internal_a924bd3b9829d3b885705345f747e63752265e130d45b5acd09931c42a6862af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09c5d94766664cb35264764f5d5368ed49bf85eea345dba456f7775b9f8cdd3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c5d94766664cb35264764f5d5368ed49bf85eea345dba456f7775b9f8cdd3f->enter($__internal_09c5d94766664cb35264764f5d5368ed49bf85eea345dba456f7775b9f8cdd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4a2c8b7a8f37fe52cd615f304cac0306a012a7a2a2e6e14fa4a9951cbacaf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a2c8b7a8f37fe52cd615f304cac0306a012a7a2a2e6e14fa4a9951cbacaf77->enter($__internal_c4a2c8b7a8f37fe52cd615f304cac0306a012a7a2a2e6e14fa4a9951cbacaf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c4a2c8b7a8f37fe52cd615f304cac0306a012a7a2a2e6e14fa4a9951cbacaf77->leave($__internal_c4a2c8b7a8f37fe52cd615f304cac0306a012a7a2a2e6e14fa4a9951cbacaf77_prof);

        
        $__internal_09c5d94766664cb35264764f5d5368ed49bf85eea345dba456f7775b9f8cdd3f->leave($__internal_09c5d94766664cb35264764f5d5368ed49bf85eea345dba456f7775b9f8cdd3f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_240f6ee9ffd7d0919ddaff11146986253c81794e85c425f7458104bf56421a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240f6ee9ffd7d0919ddaff11146986253c81794e85c425f7458104bf56421a2b->enter($__internal_240f6ee9ffd7d0919ddaff11146986253c81794e85c425f7458104bf56421a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31f5e1411ae4208f14f21f8a6d55778686b500acf0351361e5ffe563eecc8b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f5e1411ae4208f14f21f8a6d55778686b500acf0351361e5ffe563eecc8b1e->enter($__internal_31f5e1411ae4208f14f21f8a6d55778686b500acf0351361e5ffe563eecc8b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_31f5e1411ae4208f14f21f8a6d55778686b500acf0351361e5ffe563eecc8b1e->leave($__internal_31f5e1411ae4208f14f21f8a6d55778686b500acf0351361e5ffe563eecc8b1e_prof);

        
        $__internal_240f6ee9ffd7d0919ddaff11146986253c81794e85c425f7458104bf56421a2b->leave($__internal_240f6ee9ffd7d0919ddaff11146986253c81794e85c425f7458104bf56421a2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
