<?php

/* EpsiFirstBundle:Default:index.html.twig */
class __TwigTemplate_ced31f8d6e04cd37400ea63253ab8d8e0d70daf065454da14cf40bb407f7154c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpsiFirstBundle::layout.html.twig", "EpsiFirstBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpsiFirstBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d38e9ca4d4ecb9945aa59712f3825d8c42dc4f6f485ed4d71ddab81401adc22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38e9ca4d4ecb9945aa59712f3825d8c42dc4f6f485ed4d71ddab81401adc22d->enter($__internal_d38e9ca4d4ecb9945aa59712f3825d8c42dc4f6f485ed4d71ddab81401adc22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:index.html.twig"));

        $__internal_2074b2a4cc7c91b5d39bf8470362ed04bf0bc0d165bf013a0fc4cc56c1a9a3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2074b2a4cc7c91b5d39bf8470362ed04bf0bc0d165bf013a0fc4cc56c1a9a3f8->enter($__internal_2074b2a4cc7c91b5d39bf8470362ed04bf0bc0d165bf013a0fc4cc56c1a9a3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d38e9ca4d4ecb9945aa59712f3825d8c42dc4f6f485ed4d71ddab81401adc22d->leave($__internal_d38e9ca4d4ecb9945aa59712f3825d8c42dc4f6f485ed4d71ddab81401adc22d_prof);

        
        $__internal_2074b2a4cc7c91b5d39bf8470362ed04bf0bc0d165bf013a0fc4cc56c1a9a3f8->leave($__internal_2074b2a4cc7c91b5d39bf8470362ed04bf0bc0d165bf013a0fc4cc56c1a9a3f8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5cdeea697d28562bafa1ea85bdc82279b8ef1fc0f7edcc79ac7d8ec0e55381a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cdeea697d28562bafa1ea85bdc82279b8ef1fc0f7edcc79ac7d8ec0e55381a->enter($__internal_f5cdeea697d28562bafa1ea85bdc82279b8ef1fc0f7edcc79ac7d8ec0e55381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_439c02f361183d9ca175bd1fde811258a3b5fedf7c8d70110fb23eded4dcfa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439c02f361183d9ca175bd1fde811258a3b5fedf7c8d70110fb23eded4dcfa89->enter($__internal_439c02f361183d9ca175bd1fde811258a3b5fedf7c8d70110fb23eded4dcfa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
        
        $__internal_439c02f361183d9ca175bd1fde811258a3b5fedf7c8d70110fb23eded4dcfa89->leave($__internal_439c02f361183d9ca175bd1fde811258a3b5fedf7c8d70110fb23eded4dcfa89_prof);

        
        $__internal_f5cdeea697d28562bafa1ea85bdc82279b8ef1fc0f7edcc79ac7d8ec0e55381a->leave($__internal_f5cdeea697d28562bafa1ea85bdc82279b8ef1fc0f7edcc79ac7d8ec0e55381a_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_143052277612110dfac7048a31d72c3a9e4cdfbe2e00f046a82795c51b85179e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143052277612110dfac7048a31d72c3a9e4cdfbe2e00f046a82795c51b85179e->enter($__internal_143052277612110dfac7048a31d72c3a9e4cdfbe2e00f046a82795c51b85179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_be51a186df920921c084476df35d17b7ef225d6295cbd4e4745c3c7f93f3d1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be51a186df920921c084476df35d17b7ef225d6295cbd4e4745c3c7f93f3d1ea->enter($__internal_be51a186df920921c084476df35d17b7ef225d6295cbd4e4745c3c7f93f3d1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_be51a186df920921c084476df35d17b7ef225d6295cbd4e4745c3c7f93f3d1ea->leave($__internal_be51a186df920921c084476df35d17b7ef225d6295cbd4e4745c3c7f93f3d1ea_prof);

        
        $__internal_143052277612110dfac7048a31d72c3a9e4cdfbe2e00f046a82795c51b85179e->leave($__internal_143052277612110dfac7048a31d72c3a9e4cdfbe2e00f046a82795c51b85179e_prof);

    }

    public function getTemplateName()
    {
        return "EpsiFirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EpsiFirstBundle::layout.html.twig\" %}
{% block title %} {{ parent() }} - Accueil {% endblock %}
{% block contenu %}{% endblock %}", "EpsiFirstBundle:Default:index.html.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/Default/index.html.twig");
    }
}
