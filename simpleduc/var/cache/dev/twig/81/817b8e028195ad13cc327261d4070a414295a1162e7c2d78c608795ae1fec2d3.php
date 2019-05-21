<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9ab4dc82a76af95390cf5b84bb449501a0457493dd9b0051ad6fdcdec012a376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6172fbee5f9b8ee08ecc81fb26fa9302cb6393931b0e84ba2c9b02cd77b8035a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6172fbee5f9b8ee08ecc81fb26fa9302cb6393931b0e84ba2c9b02cd77b8035a->enter($__internal_6172fbee5f9b8ee08ecc81fb26fa9302cb6393931b0e84ba2c9b02cd77b8035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_120a3d367549f522aba0889ba3af51c14141ba01bf3b076e52758220eba84ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120a3d367549f522aba0889ba3af51c14141ba01bf3b076e52758220eba84ef3->enter($__internal_120a3d367549f522aba0889ba3af51c14141ba01bf3b076e52758220eba84ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6172fbee5f9b8ee08ecc81fb26fa9302cb6393931b0e84ba2c9b02cd77b8035a->leave($__internal_6172fbee5f9b8ee08ecc81fb26fa9302cb6393931b0e84ba2c9b02cd77b8035a_prof);

        
        $__internal_120a3d367549f522aba0889ba3af51c14141ba01bf3b076e52758220eba84ef3->leave($__internal_120a3d367549f522aba0889ba3af51c14141ba01bf3b076e52758220eba84ef3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
