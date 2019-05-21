<?php

/* EpsiFirstBundle:Default:entreprise.html.twig */
class __TwigTemplate_ae179c5935b5bdc6039fb043b5f9ef96539903abd6740c8d1d3a9e001ae4b033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EpsiFirstBundle::layout.html.twig", "EpsiFirstBundle:Default:entreprise.html.twig", 2);
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
        $__internal_310ba3a0df3014f9fd57a24b67ab4cc4b55dd3559b28a795f9962acbfcfb380c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310ba3a0df3014f9fd57a24b67ab4cc4b55dd3559b28a795f9962acbfcfb380c->enter($__internal_310ba3a0df3014f9fd57a24b67ab4cc4b55dd3559b28a795f9962acbfcfb380c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:entreprise.html.twig"));

        $__internal_c14c2ddbeacdc752153a21d8bcec73e8787a8ea7e65225b320108729510f9f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14c2ddbeacdc752153a21d8bcec73e8787a8ea7e65225b320108729510f9f10->enter($__internal_c14c2ddbeacdc752153a21d8bcec73e8787a8ea7e65225b320108729510f9f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:entreprise.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_310ba3a0df3014f9fd57a24b67ab4cc4b55dd3559b28a795f9962acbfcfb380c->leave($__internal_310ba3a0df3014f9fd57a24b67ab4cc4b55dd3559b28a795f9962acbfcfb380c_prof);

        
        $__internal_c14c2ddbeacdc752153a21d8bcec73e8787a8ea7e65225b320108729510f9f10->leave($__internal_c14c2ddbeacdc752153a21d8bcec73e8787a8ea7e65225b320108729510f9f10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2ee9e44380522128a6ba46ffe9f5a131c958592192846a243e10462c42e75e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ee9e44380522128a6ba46ffe9f5a131c958592192846a243e10462c42e75e0->enter($__internal_c2ee9e44380522128a6ba46ffe9f5a131c958592192846a243e10462c42e75e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_060bea30db07f105e2a8d3db491aac4fcdf0b525a37ff444e89a948cbfe98a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060bea30db07f105e2a8d3db491aac4fcdf0b525a37ff444e89a948cbfe98a3e->enter($__internal_060bea30db07f105e2a8d3db491aac4fcdf0b525a37ff444e89a948cbfe98a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Entreprise ";
        
        $__internal_060bea30db07f105e2a8d3db491aac4fcdf0b525a37ff444e89a948cbfe98a3e->leave($__internal_060bea30db07f105e2a8d3db491aac4fcdf0b525a37ff444e89a948cbfe98a3e_prof);

        
        $__internal_c2ee9e44380522128a6ba46ffe9f5a131c958592192846a243e10462c42e75e0->leave($__internal_c2ee9e44380522128a6ba46ffe9f5a131c958592192846a243e10462c42e75e0_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f739acd8c8ebc31025d4e09f52d6c534fa852a0662d25747c4c8a5cbdcae9872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f739acd8c8ebc31025d4e09f52d6c534fa852a0662d25747c4c8a5cbdcae9872->enter($__internal_f739acd8c8ebc31025d4e09f52d6c534fa852a0662d25747c4c8a5cbdcae9872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_01fa08fe0ed114433b2e61598e972fef403ff476c05a6ba7414f59d6e2177561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fa08fe0ed114433b2e61598e972fef403ff476c05a6ba7414f59d6e2177561->enter($__internal_01fa08fe0ed114433b2e61598e972fef403ff476c05a6ba7414f59d6e2177561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 
    <section class=\"section-page-top set-bg\">
        <img class=\"set-bg\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/epsifirst/images/page-top-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"container text-white\">
            <h3>Théme</h3>
        </div>
    </section>
    <section class=\"contact-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 contact-text\">
                    <h3>Ajout d'entreprise</h3>
                </div>
                <div class=\"col-lg-8\">
                    <form class=\"contact-form\">
                        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CodePostal", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ville", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Adresse", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "NumTel", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Envoyer", array()), 'row', array("attr" => array("class" => "site-btn")));
        echo "
                            </div>


                        </div>
                        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_01fa08fe0ed114433b2e61598e972fef403ff476c05a6ba7414f59d6e2177561->leave($__internal_01fa08fe0ed114433b2e61598e972fef403ff476c05a6ba7414f59d6e2177561_prof);

        
        $__internal_f739acd8c8ebc31025d4e09f52d6c534fa852a0662d25747c4c8a5cbdcae9872->leave($__internal_f739acd8c8ebc31025d4e09f52d6c534fa852a0662d25747c4c8a5cbdcae9872_prof);

    }

    public function getTemplateName()
    {
        return "EpsiFirstBundle:Default:entreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  125 => 37,  119 => 34,  113 => 31,  107 => 28,  101 => 25,  95 => 22,  89 => 19,  73 => 6,  61 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% extends \"EpsiFirstBundle::layout.html.twig\" %}
{% block title %} {{ parent() }} - Entreprise {% endblock %}
{% block contenu %} 
    <section class=\"section-page-top set-bg\">
        <img class=\"set-bg\" src=\"{{asset('bundles/epsifirst/images/page-top-bg.jpg')}}\" alt=\"\">
        <div class=\"container text-white\">
            <h3>Théme</h3>
        </div>
    </section>
    <section class=\"contact-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 contact-text\">
                    <h3>Ajout d'entreprise</h3>
                </div>
                <div class=\"col-lg-8\">
                    <form class=\"contact-form\">
                        {{form_start(form)}}
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                {{ form_row(form.nom) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.CodePostal) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.Ville) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.Adresse) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.NumTel) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.Envoyer,{'attr': {'class':'site-btn'}}) }}
                            </div>


                        </div>
                        {{ form_end(form)}}
                    </form>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "EpsiFirstBundle:Default:entreprise.html.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/Default/entreprise.html.twig");
    }
}
