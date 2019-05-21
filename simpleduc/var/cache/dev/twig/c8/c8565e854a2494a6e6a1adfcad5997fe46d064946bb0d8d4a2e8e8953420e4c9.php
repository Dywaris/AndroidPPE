<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_23ee7bea81d02ab4b823e8f27b48b77d71b38d16b207fc7822174392cdc1d2d8 extends Twig_Template
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
        $__internal_9ca399608935b99588bcf2df878a97c9ce0fd9c2dc0a146c5431b7878a3de5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca399608935b99588bcf2df878a97c9ce0fd9c2dc0a146c5431b7878a3de5e4->enter($__internal_9ca399608935b99588bcf2df878a97c9ce0fd9c2dc0a146c5431b7878a3de5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2cb992cc9f146ec7c709cef97ed60d960cc443b1062f5a540e721265c46a4648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb992cc9f146ec7c709cef97ed60d960cc443b1062f5a540e721265c46a4648->enter($__internal_2cb992cc9f146ec7c709cef97ed60d960cc443b1062f5a540e721265c46a4648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9ca399608935b99588bcf2df878a97c9ce0fd9c2dc0a146c5431b7878a3de5e4->leave($__internal_9ca399608935b99588bcf2df878a97c9ce0fd9c2dc0a146c5431b7878a3de5e4_prof);

        
        $__internal_2cb992cc9f146ec7c709cef97ed60d960cc443b1062f5a540e721265c46a4648->leave($__internal_2cb992cc9f146ec7c709cef97ed60d960cc443b1062f5a540e721265c46a4648_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
