<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c352e9b5b618c13030da505b3d63e62cb3f4e57797bba69a31fe166b5ce917eb extends Twig_Template
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
        $__internal_c8c8a701da258d6b96770171c167a7d63d9ec2467efd64ccf1b5d14785af9f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c8a701da258d6b96770171c167a7d63d9ec2467efd64ccf1b5d14785af9f65->enter($__internal_c8c8a701da258d6b96770171c167a7d63d9ec2467efd64ccf1b5d14785af9f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7c0777d8700e8558cb30b7af88571c7544bbfe225681a801f46b359a502f747f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0777d8700e8558cb30b7af88571c7544bbfe225681a801f46b359a502f747f->enter($__internal_7c0777d8700e8558cb30b7af88571c7544bbfe225681a801f46b359a502f747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c8c8a701da258d6b96770171c167a7d63d9ec2467efd64ccf1b5d14785af9f65->leave($__internal_c8c8a701da258d6b96770171c167a7d63d9ec2467efd64ccf1b5d14785af9f65_prof);

        
        $__internal_7c0777d8700e8558cb30b7af88571c7544bbfe225681a801f46b359a502f747f->leave($__internal_7c0777d8700e8558cb30b7af88571c7544bbfe225681a801f46b359a502f747f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
