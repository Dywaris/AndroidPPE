<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_567b7d7db015dfb9c77e6df249b1dc64603f98115badbbd94027e3f9dbbb0bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b13ffb83ff0fec2b6dde7fede6a60e413cf4994b59488c5b163b08f60421b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b13ffb83ff0fec2b6dde7fede6a60e413cf4994b59488c5b163b08f60421b94->enter($__internal_9b13ffb83ff0fec2b6dde7fede6a60e413cf4994b59488c5b163b08f60421b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e135d38c99f3fd3e5c3e18aa47395a58f50679593e740400016cc75e11a7b811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e135d38c99f3fd3e5c3e18aa47395a58f50679593e740400016cc75e11a7b811->enter($__internal_e135d38c99f3fd3e5c3e18aa47395a58f50679593e740400016cc75e11a7b811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b13ffb83ff0fec2b6dde7fede6a60e413cf4994b59488c5b163b08f60421b94->leave($__internal_9b13ffb83ff0fec2b6dde7fede6a60e413cf4994b59488c5b163b08f60421b94_prof);

        
        $__internal_e135d38c99f3fd3e5c3e18aa47395a58f50679593e740400016cc75e11a7b811->leave($__internal_e135d38c99f3fd3e5c3e18aa47395a58f50679593e740400016cc75e11a7b811_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_813d4c25a8a08fd5f73393c41eb354becb7b1f0337f792fdf44eb3abcc78d7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813d4c25a8a08fd5f73393c41eb354becb7b1f0337f792fdf44eb3abcc78d7f7->enter($__internal_813d4c25a8a08fd5f73393c41eb354becb7b1f0337f792fdf44eb3abcc78d7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_05861a3d3d2c0033cf73f41d9ad3649e146b0a1c46a095c436c37383b4d9d64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05861a3d3d2c0033cf73f41d9ad3649e146b0a1c46a095c436c37383b4d9d64b->enter($__internal_05861a3d3d2c0033cf73f41d9ad3649e146b0a1c46a095c436c37383b4d9d64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_05861a3d3d2c0033cf73f41d9ad3649e146b0a1c46a095c436c37383b4d9d64b->leave($__internal_05861a3d3d2c0033cf73f41d9ad3649e146b0a1c46a095c436c37383b4d9d64b_prof);

        
        $__internal_813d4c25a8a08fd5f73393c41eb354becb7b1f0337f792fdf44eb3abcc78d7f7->leave($__internal_813d4c25a8a08fd5f73393c41eb354becb7b1f0337f792fdf44eb3abcc78d7f7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed04966331c5d447c8e2d6c1f4fa0770d63d4ac657b9703c26a32c5bc7bd9ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed04966331c5d447c8e2d6c1f4fa0770d63d4ac657b9703c26a32c5bc7bd9ba2->enter($__internal_ed04966331c5d447c8e2d6c1f4fa0770d63d4ac657b9703c26a32c5bc7bd9ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c30d42fe7992c5948cf6061bbe132111a3e8ad4e9bc7c485e32eec14917b143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c30d42fe7992c5948cf6061bbe132111a3e8ad4e9bc7c485e32eec14917b143->enter($__internal_8c30d42fe7992c5948cf6061bbe132111a3e8ad4e9bc7c485e32eec14917b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8c30d42fe7992c5948cf6061bbe132111a3e8ad4e9bc7c485e32eec14917b143->leave($__internal_8c30d42fe7992c5948cf6061bbe132111a3e8ad4e9bc7c485e32eec14917b143_prof);

        
        $__internal_ed04966331c5d447c8e2d6c1f4fa0770d63d4ac657b9703c26a32c5bc7bd9ba2->leave($__internal_ed04966331c5d447c8e2d6c1f4fa0770d63d4ac657b9703c26a32c5bc7bd9ba2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
