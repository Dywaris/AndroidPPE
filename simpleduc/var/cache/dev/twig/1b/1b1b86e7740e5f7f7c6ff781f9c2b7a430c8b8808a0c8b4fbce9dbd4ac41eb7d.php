<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b39a1bbc9c03742d319671f5de82f1cb90034c432220491dfae10b62a566e0c5 extends Twig_Template
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
        $__internal_1dfdfef28f6aa2379eb3716019a855b757d551051d143779d87796c75d2170cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dfdfef28f6aa2379eb3716019a855b757d551051d143779d87796c75d2170cb->enter($__internal_1dfdfef28f6aa2379eb3716019a855b757d551051d143779d87796c75d2170cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d72cc27e0c9842e0b43505676951c471782a0cd27e92e233fd3add8a81734af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72cc27e0c9842e0b43505676951c471782a0cd27e92e233fd3add8a81734af9->enter($__internal_d72cc27e0c9842e0b43505676951c471782a0cd27e92e233fd3add8a81734af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1dfdfef28f6aa2379eb3716019a855b757d551051d143779d87796c75d2170cb->leave($__internal_1dfdfef28f6aa2379eb3716019a855b757d551051d143779d87796c75d2170cb_prof);

        
        $__internal_d72cc27e0c9842e0b43505676951c471782a0cd27e92e233fd3add8a81734af9->leave($__internal_d72cc27e0c9842e0b43505676951c471782a0cd27e92e233fd3add8a81734af9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
