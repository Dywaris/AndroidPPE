<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7b7180a4f8704077706aab9ce482b5b71ce9aaf0a7a691890d1ec7afc570801c extends Twig_Template
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
        $__internal_80c9710a23231850fdac6ca36703e5c890edaf1f95abd92da28278db235101a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c9710a23231850fdac6ca36703e5c890edaf1f95abd92da28278db235101a7->enter($__internal_80c9710a23231850fdac6ca36703e5c890edaf1f95abd92da28278db235101a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f79232e0881f67d01261cdfb8117ae7181d3d26823a60de77c373293abe9fa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79232e0881f67d01261cdfb8117ae7181d3d26823a60de77c373293abe9fa56->enter($__internal_f79232e0881f67d01261cdfb8117ae7181d3d26823a60de77c373293abe9fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_80c9710a23231850fdac6ca36703e5c890edaf1f95abd92da28278db235101a7->leave($__internal_80c9710a23231850fdac6ca36703e5c890edaf1f95abd92da28278db235101a7_prof);

        
        $__internal_f79232e0881f67d01261cdfb8117ae7181d3d26823a60de77c373293abe9fa56->leave($__internal_f79232e0881f67d01261cdfb8117ae7181d3d26823a60de77c373293abe9fa56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
