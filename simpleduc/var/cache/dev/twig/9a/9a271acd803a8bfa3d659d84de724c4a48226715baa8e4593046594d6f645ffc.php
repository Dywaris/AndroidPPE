<?php

/* EpsiFirstBundle:Default:utilisateur.html.twig */
class __TwigTemplate_b4913abcecf5c6e0b9544ccd3ea0dd07126b230ed0a18dfc9bdd145e997e5f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpsiFirstBundle::layout.html.twig", "EpsiFirstBundle:Default:utilisateur.html.twig", 1);
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
        $__internal_d854012258fd44071a04561cab37ee889938d5ee5da9853315609b6ff90953ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d854012258fd44071a04561cab37ee889938d5ee5da9853315609b6ff90953ed->enter($__internal_d854012258fd44071a04561cab37ee889938d5ee5da9853315609b6ff90953ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:utilisateur.html.twig"));

        $__internal_814bbec847671845350429d0a1b55b03d825cb6812815638859f77297b232799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814bbec847671845350429d0a1b55b03d825cb6812815638859f77297b232799->enter($__internal_814bbec847671845350429d0a1b55b03d825cb6812815638859f77297b232799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:utilisateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d854012258fd44071a04561cab37ee889938d5ee5da9853315609b6ff90953ed->leave($__internal_d854012258fd44071a04561cab37ee889938d5ee5da9853315609b6ff90953ed_prof);

        
        $__internal_814bbec847671845350429d0a1b55b03d825cb6812815638859f77297b232799->leave($__internal_814bbec847671845350429d0a1b55b03d825cb6812815638859f77297b232799_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a53199967b7756a8082bc193194b71728704afaafa1bdc8bf8d188db4cfb445e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53199967b7756a8082bc193194b71728704afaafa1bdc8bf8d188db4cfb445e->enter($__internal_a53199967b7756a8082bc193194b71728704afaafa1bdc8bf8d188db4cfb445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dafa1cfda32188a1558a8b82de9a5201b90c42494f81af102a759ceb42abad64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafa1cfda32188a1558a8b82de9a5201b90c42494f81af102a759ceb42abad64->enter($__internal_dafa1cfda32188a1558a8b82de9a5201b90c42494f81af102a759ceb42abad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Utilisateur ";
        
        $__internal_dafa1cfda32188a1558a8b82de9a5201b90c42494f81af102a759ceb42abad64->leave($__internal_dafa1cfda32188a1558a8b82de9a5201b90c42494f81af102a759ceb42abad64_prof);

        
        $__internal_a53199967b7756a8082bc193194b71728704afaafa1bdc8bf8d188db4cfb445e->leave($__internal_a53199967b7756a8082bc193194b71728704afaafa1bdc8bf8d188db4cfb445e_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_698e7e3dffcfa890dffbab1f32d96d860fb389b462ba3f3a6c940d866971cc97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698e7e3dffcfa890dffbab1f32d96d860fb389b462ba3f3a6c940d866971cc97->enter($__internal_698e7e3dffcfa890dffbab1f32d96d860fb389b462ba3f3a6c940d866971cc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_4a95eb17b112878715d0486e3860656a01a7d97a401ce9682d91b54cf007a0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a95eb17b112878715d0486e3860656a01a7d97a401ce9682d91b54cf007a0f7->enter($__internal_4a95eb17b112878715d0486e3860656a01a7d97a401ce9682d91b54cf007a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 
    <section class=\"section-page-top set-bg\">
        <img class=\"set-bg\" src=\"";
        // line 5
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
                    <h3>Ajout d'utilisateur</h3>
                </div>
                <div class=\"col-lg-8\">
                    <form class=\"contact-form\">
                        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "login", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CodePostal", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ville", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Adresse", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Envoyer", array()), 'row', array("attr" => array("class" => "site-btn")));
        echo "
                            </div>


                        </div>
                        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_4a95eb17b112878715d0486e3860656a01a7d97a401ce9682d91b54cf007a0f7->leave($__internal_4a95eb17b112878715d0486e3860656a01a7d97a401ce9682d91b54cf007a0f7_prof);

        
        $__internal_698e7e3dffcfa890dffbab1f32d96d860fb389b462ba3f3a6c940d866971cc97->leave($__internal_698e7e3dffcfa890dffbab1f32d96d860fb389b462ba3f3a6c940d866971cc97_prof);

    }

    public function getTemplateName()
    {
        return "EpsiFirstBundle:Default:utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 47,  137 => 42,  131 => 39,  125 => 36,  119 => 33,  113 => 30,  107 => 27,  101 => 24,  95 => 21,  89 => 18,  73 => 5,  61 => 3,  41 => 2,  11 => 1,);
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
{% block title %} {{ parent() }} - Utilisateur {% endblock %}
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
                    <h3>Ajout d'utilisateur</h3>
                </div>
                <div class=\"col-lg-8\">
                    <form class=\"contact-form\">
                        {{form_start(form)}}
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                {{ form_row(form.nom) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.prenom) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.login) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.password) }}
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
                                {{ form_row(form.Envoyer,{'attr': {'class':'site-btn'}}) }}
                            </div>


                        </div>
                        {{ form_end(form)}}
                    </form>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "EpsiFirstBundle:Default:utilisateur.html.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/Default/utilisateur.html.twig");
    }
}
