<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_be768d4edac6128286c420dff7b0da228da474385e41a39503d35d19885821e8 extends Twig_Template
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
        $__internal_6120ace8efd09cfe5ffddb13b7efd15c60e68fedfb0c54500bd2985b31c94f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6120ace8efd09cfe5ffddb13b7efd15c60e68fedfb0c54500bd2985b31c94f1e->enter($__internal_6120ace8efd09cfe5ffddb13b7efd15c60e68fedfb0c54500bd2985b31c94f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5f2a0df14c573d80d2fdbd8a3803ce4513881027663d74a67dfc4abccab1acda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2a0df14c573d80d2fdbd8a3803ce4513881027663d74a67dfc4abccab1acda->enter($__internal_5f2a0df14c573d80d2fdbd8a3803ce4513881027663d74a67dfc4abccab1acda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6120ace8efd09cfe5ffddb13b7efd15c60e68fedfb0c54500bd2985b31c94f1e->leave($__internal_6120ace8efd09cfe5ffddb13b7efd15c60e68fedfb0c54500bd2985b31c94f1e_prof);

        
        $__internal_5f2a0df14c573d80d2fdbd8a3803ce4513881027663d74a67dfc4abccab1acda->leave($__internal_5f2a0df14c573d80d2fdbd8a3803ce4513881027663d74a67dfc4abccab1acda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
