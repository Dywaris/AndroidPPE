<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0767a4189c063293bc5755e132854fc8ae89cdc6af981072779dd9d255663588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2f73191e0e5d66fef59237e2fab22db1a997f43dd020a40dcc404d399f1d3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f73191e0e5d66fef59237e2fab22db1a997f43dd020a40dcc404d399f1d3f3->enter($__internal_d2f73191e0e5d66fef59237e2fab22db1a997f43dd020a40dcc404d399f1d3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ca941fd572768adbe52fa4f8021a8d89b755fa1a454fadf3d91a9be34a15b5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca941fd572768adbe52fa4f8021a8d89b755fa1a454fadf3d91a9be34a15b5b4->enter($__internal_ca941fd572768adbe52fa4f8021a8d89b755fa1a454fadf3d91a9be34a15b5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f73191e0e5d66fef59237e2fab22db1a997f43dd020a40dcc404d399f1d3f3->leave($__internal_d2f73191e0e5d66fef59237e2fab22db1a997f43dd020a40dcc404d399f1d3f3_prof);

        
        $__internal_ca941fd572768adbe52fa4f8021a8d89b755fa1a454fadf3d91a9be34a15b5b4->leave($__internal_ca941fd572768adbe52fa4f8021a8d89b755fa1a454fadf3d91a9be34a15b5b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_133b6fab3a5abb0d477bc103844e949cb7b9fe823951539b7394e9a7b27fe70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133b6fab3a5abb0d477bc103844e949cb7b9fe823951539b7394e9a7b27fe70c->enter($__internal_133b6fab3a5abb0d477bc103844e949cb7b9fe823951539b7394e9a7b27fe70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e193dad44af48f8bfd2fcf6114ca23fd01c859c7709eedabc29bba351fc5f82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e193dad44af48f8bfd2fcf6114ca23fd01c859c7709eedabc29bba351fc5f82e->enter($__internal_e193dad44af48f8bfd2fcf6114ca23fd01c859c7709eedabc29bba351fc5f82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e193dad44af48f8bfd2fcf6114ca23fd01c859c7709eedabc29bba351fc5f82e->leave($__internal_e193dad44af48f8bfd2fcf6114ca23fd01c859c7709eedabc29bba351fc5f82e_prof);

        
        $__internal_133b6fab3a5abb0d477bc103844e949cb7b9fe823951539b7394e9a7b27fe70c->leave($__internal_133b6fab3a5abb0d477bc103844e949cb7b9fe823951539b7394e9a7b27fe70c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
