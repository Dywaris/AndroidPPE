<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4a3cac9c2806dce55ae49e526f3c5e46567b46acd924a5e3b78c11f34699b2e4 extends Twig_Template
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
        $__internal_fa9ab0354725bdebf4a887b03564fcba2a62b7982b458b5d0b1cbc14e2a797cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9ab0354725bdebf4a887b03564fcba2a62b7982b458b5d0b1cbc14e2a797cd->enter($__internal_fa9ab0354725bdebf4a887b03564fcba2a62b7982b458b5d0b1cbc14e2a797cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_babcc09ad6b050d39db784c856e74f958c07980fbaee8ab9d90ed0e98ce7329c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babcc09ad6b050d39db784c856e74f958c07980fbaee8ab9d90ed0e98ce7329c->enter($__internal_babcc09ad6b050d39db784c856e74f958c07980fbaee8ab9d90ed0e98ce7329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_fa9ab0354725bdebf4a887b03564fcba2a62b7982b458b5d0b1cbc14e2a797cd->leave($__internal_fa9ab0354725bdebf4a887b03564fcba2a62b7982b458b5d0b1cbc14e2a797cd_prof);

        
        $__internal_babcc09ad6b050d39db784c856e74f958c07980fbaee8ab9d90ed0e98ce7329c->leave($__internal_babcc09ad6b050d39db784c856e74f958c07980fbaee8ab9d90ed0e98ce7329c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
