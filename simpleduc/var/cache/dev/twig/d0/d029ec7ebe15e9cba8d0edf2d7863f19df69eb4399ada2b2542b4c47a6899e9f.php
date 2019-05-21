<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5fa6101b130b1e5769328c45e165e62a40c830ba5f80516c2c94045714583d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2b2f91b69fc14c81d25b2f37d2fdc06b33d887f93ccd4b963fb3ed5176580c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b2f91b69fc14c81d25b2f37d2fdc06b33d887f93ccd4b963fb3ed5176580c4->enter($__internal_f2b2f91b69fc14c81d25b2f37d2fdc06b33d887f93ccd4b963fb3ed5176580c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2b5d2025b25fda8e632ff901778425f572444aaadea4a18727adfb2396110b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5d2025b25fda8e632ff901778425f572444aaadea4a18727adfb2396110b48->enter($__internal_2b5d2025b25fda8e632ff901778425f572444aaadea4a18727adfb2396110b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b2f91b69fc14c81d25b2f37d2fdc06b33d887f93ccd4b963fb3ed5176580c4->leave($__internal_f2b2f91b69fc14c81d25b2f37d2fdc06b33d887f93ccd4b963fb3ed5176580c4_prof);

        
        $__internal_2b5d2025b25fda8e632ff901778425f572444aaadea4a18727adfb2396110b48->leave($__internal_2b5d2025b25fda8e632ff901778425f572444aaadea4a18727adfb2396110b48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dbaf371bb66c73f5b45308bf39dab788b65636632cfcb8da14d7527142a7709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbaf371bb66c73f5b45308bf39dab788b65636632cfcb8da14d7527142a7709->enter($__internal_6dbaf371bb66c73f5b45308bf39dab788b65636632cfcb8da14d7527142a7709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea7d01289d94ea4871f4572f80932335e30058e19b3d36191657ce8149eba28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7d01289d94ea4871f4572f80932335e30058e19b3d36191657ce8149eba28a->enter($__internal_ea7d01289d94ea4871f4572f80932335e30058e19b3d36191657ce8149eba28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ea7d01289d94ea4871f4572f80932335e30058e19b3d36191657ce8149eba28a->leave($__internal_ea7d01289d94ea4871f4572f80932335e30058e19b3d36191657ce8149eba28a_prof);

        
        $__internal_6dbaf371bb66c73f5b45308bf39dab788b65636632cfcb8da14d7527142a7709->leave($__internal_6dbaf371bb66c73f5b45308bf39dab788b65636632cfcb8da14d7527142a7709_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1d85113d84662723bba4460bacc00114a3395707fef6488317924ac3a072b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d85113d84662723bba4460bacc00114a3395707fef6488317924ac3a072b83->enter($__internal_e1d85113d84662723bba4460bacc00114a3395707fef6488317924ac3a072b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c12ec9103ef920b4e0fd65c02de012653be3c45824ad66f5784c2155c06f17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c12ec9103ef920b4e0fd65c02de012653be3c45824ad66f5784c2155c06f17d->enter($__internal_4c12ec9103ef920b4e0fd65c02de012653be3c45824ad66f5784c2155c06f17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4c12ec9103ef920b4e0fd65c02de012653be3c45824ad66f5784c2155c06f17d->leave($__internal_4c12ec9103ef920b4e0fd65c02de012653be3c45824ad66f5784c2155c06f17d_prof);

        
        $__internal_e1d85113d84662723bba4460bacc00114a3395707fef6488317924ac3a072b83->leave($__internal_e1d85113d84662723bba4460bacc00114a3395707fef6488317924ac3a072b83_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
