<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fb64fa69a5f3d725594128e1104fb5d1158b46610950a5126873325ca8a3b930 extends Twig_Template
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
        $__internal_cb5b9844071918dfa94cfc6780c77a25bacef00be14a4ab2fe6c606fe6816084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5b9844071918dfa94cfc6780c77a25bacef00be14a4ab2fe6c606fe6816084->enter($__internal_cb5b9844071918dfa94cfc6780c77a25bacef00be14a4ab2fe6c606fe6816084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1aa14b4ff0ddb10eb99a3c24f37229e7296813841192493f69d856b88a00323d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa14b4ff0ddb10eb99a3c24f37229e7296813841192493f69d856b88a00323d->enter($__internal_1aa14b4ff0ddb10eb99a3c24f37229e7296813841192493f69d856b88a00323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cb5b9844071918dfa94cfc6780c77a25bacef00be14a4ab2fe6c606fe6816084->leave($__internal_cb5b9844071918dfa94cfc6780c77a25bacef00be14a4ab2fe6c606fe6816084_prof);

        
        $__internal_1aa14b4ff0ddb10eb99a3c24f37229e7296813841192493f69d856b88a00323d->leave($__internal_1aa14b4ff0ddb10eb99a3c24f37229e7296813841192493f69d856b88a00323d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
