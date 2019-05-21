<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eef7a923384096b8a638af772c3c4e9a9b462feebe2eef9c6f9acfbcbaea6887 extends Twig_Template
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
        $__internal_5be24d8cce78cac557b80f9f09d3881674ee129bbbea315580614aec99e31505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be24d8cce78cac557b80f9f09d3881674ee129bbbea315580614aec99e31505->enter($__internal_5be24d8cce78cac557b80f9f09d3881674ee129bbbea315580614aec99e31505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f51280d80b306dfa676686c60c1782ce76b8ef81f440f0fabe48234e1454f655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51280d80b306dfa676686c60c1782ce76b8ef81f440f0fabe48234e1454f655->enter($__internal_f51280d80b306dfa676686c60c1782ce76b8ef81f440f0fabe48234e1454f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_5be24d8cce78cac557b80f9f09d3881674ee129bbbea315580614aec99e31505->leave($__internal_5be24d8cce78cac557b80f9f09d3881674ee129bbbea315580614aec99e31505_prof);

        
        $__internal_f51280d80b306dfa676686c60c1782ce76b8ef81f440f0fabe48234e1454f655->leave($__internal_f51280d80b306dfa676686c60c1782ce76b8ef81f440f0fabe48234e1454f655_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
