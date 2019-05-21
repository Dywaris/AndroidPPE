<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3021d445aded9274d5f452d2249935d6bdca517b32e09d75523eeaf83cae6ad1 extends Twig_Template
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
        $__internal_92af8b907985b710887d5966737fcd9a9ca97ca71b7f4ac66a88dcf3a4034c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92af8b907985b710887d5966737fcd9a9ca97ca71b7f4ac66a88dcf3a4034c01->enter($__internal_92af8b907985b710887d5966737fcd9a9ca97ca71b7f4ac66a88dcf3a4034c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1d5b259ecb2708f5384a4a6b3726d8b839fe4d17cfd3efe997ed19e0f5ae37a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5b259ecb2708f5384a4a6b3726d8b839fe4d17cfd3efe997ed19e0f5ae37a9->enter($__internal_1d5b259ecb2708f5384a4a6b3726d8b839fe4d17cfd3efe997ed19e0f5ae37a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_92af8b907985b710887d5966737fcd9a9ca97ca71b7f4ac66a88dcf3a4034c01->leave($__internal_92af8b907985b710887d5966737fcd9a9ca97ca71b7f4ac66a88dcf3a4034c01_prof);

        
        $__internal_1d5b259ecb2708f5384a4a6b3726d8b839fe4d17cfd3efe997ed19e0f5ae37a9->leave($__internal_1d5b259ecb2708f5384a4a6b3726d8b839fe4d17cfd3efe997ed19e0f5ae37a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
