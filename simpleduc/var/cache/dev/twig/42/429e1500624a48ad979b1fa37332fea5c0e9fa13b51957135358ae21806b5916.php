<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0eede5f2ed1179af79f21428a78c007998315ce9389fb4d49040d133d0aef682 extends Twig_Template
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
        $__internal_c4dace79057957cc5b34b501d42b5bdf7d00cd505ca7486cc5495618731f46c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4dace79057957cc5b34b501d42b5bdf7d00cd505ca7486cc5495618731f46c2->enter($__internal_c4dace79057957cc5b34b501d42b5bdf7d00cd505ca7486cc5495618731f46c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ad0b53d4ba76a672f0c0aea687dd41fefe1c5218e90f9559f59599036fa9bb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0b53d4ba76a672f0c0aea687dd41fefe1c5218e90f9559f59599036fa9bb7c->enter($__internal_ad0b53d4ba76a672f0c0aea687dd41fefe1c5218e90f9559f59599036fa9bb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c4dace79057957cc5b34b501d42b5bdf7d00cd505ca7486cc5495618731f46c2->leave($__internal_c4dace79057957cc5b34b501d42b5bdf7d00cd505ca7486cc5495618731f46c2_prof);

        
        $__internal_ad0b53d4ba76a672f0c0aea687dd41fefe1c5218e90f9559f59599036fa9bb7c->leave($__internal_ad0b53d4ba76a672f0c0aea687dd41fefe1c5218e90f9559f59599036fa9bb7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
