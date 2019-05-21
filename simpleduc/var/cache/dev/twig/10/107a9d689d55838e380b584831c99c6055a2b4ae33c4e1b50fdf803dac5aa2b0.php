<?php

/* EpsiFirstBundle:Default:theme.html.twig */
class __TwigTemplate_f59af925dc87d83de8dbaa76d53a81c1dafcf71e35dea4918cf11705b1d7fbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpsiFirstBundle::layout.html.twig", "EpsiFirstBundle:Default:theme.html.twig", 1);
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
        $__internal_f0686f921a0ff8f4dcd6c69a53b20891f5358e8ef535158f85e2f5e11a8b0a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0686f921a0ff8f4dcd6c69a53b20891f5358e8ef535158f85e2f5e11a8b0a7e->enter($__internal_f0686f921a0ff8f4dcd6c69a53b20891f5358e8ef535158f85e2f5e11a8b0a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:theme.html.twig"));

        $__internal_51f32e9c0e02304089c8f340864c62834f0828127801f699f731514a9f408a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f32e9c0e02304089c8f340864c62834f0828127801f699f731514a9f408a09->enter($__internal_51f32e9c0e02304089c8f340864c62834f0828127801f699f731514a9f408a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpsiFirstBundle:Default:theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0686f921a0ff8f4dcd6c69a53b20891f5358e8ef535158f85e2f5e11a8b0a7e->leave($__internal_f0686f921a0ff8f4dcd6c69a53b20891f5358e8ef535158f85e2f5e11a8b0a7e_prof);

        
        $__internal_51f32e9c0e02304089c8f340864c62834f0828127801f699f731514a9f408a09->leave($__internal_51f32e9c0e02304089c8f340864c62834f0828127801f699f731514a9f408a09_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0d4fa7d2ede21739f0a241b72028c30e386e38dca66beac800bd3a500d5bfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d4fa7d2ede21739f0a241b72028c30e386e38dca66beac800bd3a500d5bfd7->enter($__internal_a0d4fa7d2ede21739f0a241b72028c30e386e38dca66beac800bd3a500d5bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2062a6ab553fc5feae2f7b87131b5ba88482891c994240b3ef3cb1631523fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2062a6ab553fc5feae2f7b87131b5ba88482891c994240b3ef3cb1631523fa1->enter($__internal_b2062a6ab553fc5feae2f7b87131b5ba88482891c994240b3ef3cb1631523fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - theme ";
        
        $__internal_b2062a6ab553fc5feae2f7b87131b5ba88482891c994240b3ef3cb1631523fa1->leave($__internal_b2062a6ab553fc5feae2f7b87131b5ba88482891c994240b3ef3cb1631523fa1_prof);

        
        $__internal_a0d4fa7d2ede21739f0a241b72028c30e386e38dca66beac800bd3a500d5bfd7->leave($__internal_a0d4fa7d2ede21739f0a241b72028c30e386e38dca66beac800bd3a500d5bfd7_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9a8969d558dcefa422b7d975b09c312cf3c44c024c288f43f4c820f22ced3328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8969d558dcefa422b7d975b09c312cf3c44c024c288f43f4c820f22ced3328->enter($__internal_9a8969d558dcefa422b7d975b09c312cf3c44c024c288f43f4c820f22ced3328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_b7ee4b5dfcb2f04cb5c8d5588968d24f9535d43345b420667a266e72edf660bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ee4b5dfcb2f04cb5c8d5588968d24f9535d43345b420667a266e72edf660bc->enter($__internal_b7ee4b5dfcb2f04cb5c8d5588968d24f9535d43345b420667a266e72edf660bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "    <section class=\"section-page-top set-bg\">
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
                    <h3>Ajout de Thème</h3>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Envoyer", array()), 'row', array("attr" => array("class" => "site-btn")));
        echo "
                            </div>
                            ";
        // line 26
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "

                        </div>
                        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>
    </section>




";
        
        $__internal_b7ee4b5dfcb2f04cb5c8d5588968d24f9535d43345b420667a266e72edf660bc->leave($__internal_b7ee4b5dfcb2f04cb5c8d5588968d24f9535d43345b420667a266e72edf660bc_prof);

        
        $__internal_9a8969d558dcefa422b7d975b09c312cf3c44c024c288f43f4c820f22ced3328->leave($__internal_9a8969d558dcefa422b7d975b09c312cf3c44c024c288f43f4c820f22ced3328_prof);

    }

    public function getTemplateName()
    {
        return "EpsiFirstBundle:Default:theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  106 => 26,  101 => 24,  95 => 21,  89 => 18,  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
{% block title %} {{ parent() }} - theme {% endblock %}
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
                    <h3>Ajout de Thème</h3>
                </div>
                <div class=\"col-lg-8\">
                    <form class=\"contact-form\">
                        {{form_start(form)}}
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                {{ form_row(form.libelle) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.Envoyer,{'attr': {'class':'site-btn'}}) }}
                            </div>
                            {{message}}

                        </div>
                        {{ form_end(form)}}
                    </form>
                </div>
            </div>
        </div>
    </section>




{% endblock %}", "EpsiFirstBundle:Default:theme.html.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/Default/theme.html.twig");
    }
}
