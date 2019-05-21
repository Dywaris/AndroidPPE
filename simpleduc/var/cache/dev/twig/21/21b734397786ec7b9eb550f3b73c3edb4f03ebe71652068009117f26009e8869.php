<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f1a6480a60ba1f1b21ab6fac48cf0b44901d9229adc7a14b3edf378c9a5322b5 extends Twig_Template
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
        $__internal_a732d9b69dfa2c4efe02b2e873b9e1d4962728bc3a28b952d75bb626f1d5dfa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a732d9b69dfa2c4efe02b2e873b9e1d4962728bc3a28b952d75bb626f1d5dfa9->enter($__internal_a732d9b69dfa2c4efe02b2e873b9e1d4962728bc3a28b952d75bb626f1d5dfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_520052e238daf5bf94e799a8e4f948b983bc3e6d91d1f8a46940f0da596bc4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520052e238daf5bf94e799a8e4f948b983bc3e6d91d1f8a46940f0da596bc4df->enter($__internal_520052e238daf5bf94e799a8e4f948b983bc3e6d91d1f8a46940f0da596bc4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a732d9b69dfa2c4efe02b2e873b9e1d4962728bc3a28b952d75bb626f1d5dfa9->leave($__internal_a732d9b69dfa2c4efe02b2e873b9e1d4962728bc3a28b952d75bb626f1d5dfa9_prof);

        
        $__internal_520052e238daf5bf94e799a8e4f948b983bc3e6d91d1f8a46940f0da596bc4df->leave($__internal_520052e238daf5bf94e799a8e4f948b983bc3e6d91d1f8a46940f0da596bc4df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
