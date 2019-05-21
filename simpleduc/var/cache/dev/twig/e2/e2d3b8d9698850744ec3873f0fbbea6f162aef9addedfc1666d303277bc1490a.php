<?php

/* @EpsiFirst/Default/entreprise.twig */
class __TwigTemplate_03b311633536fbe524fa7e5e78bf8e6e77c5e1f132fb113c473551c27e96de5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EpsiFirstBundle::layout.html.twig", "@EpsiFirst/Default/entreprise.twig", 2);
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
        $__internal_b10d19a14add4164df7eab1b3aa6a8fcfd48f4ec739f3ba76046432a6bb2e1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10d19a14add4164df7eab1b3aa6a8fcfd48f4ec739f3ba76046432a6bb2e1e7->enter($__internal_b10d19a14add4164df7eab1b3aa6a8fcfd48f4ec739f3ba76046432a6bb2e1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EpsiFirst/Default/entreprise.twig"));

        $__internal_653f1f46f971ca03fa5c33652e17882372af04ed4c0e5777499ddbd9ce8296eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653f1f46f971ca03fa5c33652e17882372af04ed4c0e5777499ddbd9ce8296eb->enter($__internal_653f1f46f971ca03fa5c33652e17882372af04ed4c0e5777499ddbd9ce8296eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EpsiFirst/Default/entreprise.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10d19a14add4164df7eab1b3aa6a8fcfd48f4ec739f3ba76046432a6bb2e1e7->leave($__internal_b10d19a14add4164df7eab1b3aa6a8fcfd48f4ec739f3ba76046432a6bb2e1e7_prof);

        
        $__internal_653f1f46f971ca03fa5c33652e17882372af04ed4c0e5777499ddbd9ce8296eb->leave($__internal_653f1f46f971ca03fa5c33652e17882372af04ed4c0e5777499ddbd9ce8296eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_075358f60ce3b14812860b23258879e5e6054209839177bbaca7f05190dda2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075358f60ce3b14812860b23258879e5e6054209839177bbaca7f05190dda2b0->enter($__internal_075358f60ce3b14812860b23258879e5e6054209839177bbaca7f05190dda2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bae7fb41f523d1cfd3852a01d2f04746c6acaf62a2a3a8813a65c167a0f5bccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae7fb41f523d1cfd3852a01d2f04746c6acaf62a2a3a8813a65c167a0f5bccc->enter($__internal_bae7fb41f523d1cfd3852a01d2f04746c6acaf62a2a3a8813a65c167a0f5bccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Entreprise ";
        
        $__internal_bae7fb41f523d1cfd3852a01d2f04746c6acaf62a2a3a8813a65c167a0f5bccc->leave($__internal_bae7fb41f523d1cfd3852a01d2f04746c6acaf62a2a3a8813a65c167a0f5bccc_prof);

        
        $__internal_075358f60ce3b14812860b23258879e5e6054209839177bbaca7f05190dda2b0->leave($__internal_075358f60ce3b14812860b23258879e5e6054209839177bbaca7f05190dda2b0_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_bd796b1adfded7792c892de92031308406706da21d10dd1947856cdd8b5c24e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd796b1adfded7792c892de92031308406706da21d10dd1947856cdd8b5c24e3->enter($__internal_bd796b1adfded7792c892de92031308406706da21d10dd1947856cdd8b5c24e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_5a7f5c85a0bf49dc1b12c4ce075e2bf6d35d1d37121c3f55bc83f5956206f659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7f5c85a0bf49dc1b12c4ce075e2bf6d35d1d37121c3f55bc83f5956206f659->enter($__internal_5a7f5c85a0bf49dc1b12c4ce075e2bf6d35d1d37121c3f55bc83f5956206f659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " Bienvenue sur la page entreprise
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
        
        $__internal_5a7f5c85a0bf49dc1b12c4ce075e2bf6d35d1d37121c3f55bc83f5956206f659->leave($__internal_5a7f5c85a0bf49dc1b12c4ce075e2bf6d35d1d37121c3f55bc83f5956206f659_prof);

        
        $__internal_bd796b1adfded7792c892de92031308406706da21d10dd1947856cdd8b5c24e3->leave($__internal_bd796b1adfded7792c892de92031308406706da21d10dd1947856cdd8b5c24e3_prof);

    }

    public function getTemplateName()
    {
        return "@EpsiFirst/Default/entreprise.twig";
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
{% block contenu %} Bienvenue sur la page entreprise
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

{% endblock %}", "@EpsiFirst/Default/entreprise.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/Default/entreprise.twig");
    }
}
