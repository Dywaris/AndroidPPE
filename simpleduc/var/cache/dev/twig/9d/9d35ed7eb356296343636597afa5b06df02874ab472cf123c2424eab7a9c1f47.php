<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5da579eba9c2fce74b7cc2cb5a7c52fadbf2464846ad930cb7de12ac84241ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9989c5004dc7032c309b157d03ab53902a448619d42569e4347a4740b1f82124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9989c5004dc7032c309b157d03ab53902a448619d42569e4347a4740b1f82124->enter($__internal_9989c5004dc7032c309b157d03ab53902a448619d42569e4347a4740b1f82124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5887dcb6b9f68fd6ea422932a9353595416613c2b15f4d53c1553bfa93378de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5887dcb6b9f68fd6ea422932a9353595416613c2b15f4d53c1553bfa93378de1->enter($__internal_5887dcb6b9f68fd6ea422932a9353595416613c2b15f4d53c1553bfa93378de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9989c5004dc7032c309b157d03ab53902a448619d42569e4347a4740b1f82124->leave($__internal_9989c5004dc7032c309b157d03ab53902a448619d42569e4347a4740b1f82124_prof);

        
        $__internal_5887dcb6b9f68fd6ea422932a9353595416613c2b15f4d53c1553bfa93378de1->leave($__internal_5887dcb6b9f68fd6ea422932a9353595416613c2b15f4d53c1553bfa93378de1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83be70d580b2293eefcdc09a1a0c7791fc3caf03eb0c248f5ec320ddcce3a0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83be70d580b2293eefcdc09a1a0c7791fc3caf03eb0c248f5ec320ddcce3a0ed->enter($__internal_83be70d580b2293eefcdc09a1a0c7791fc3caf03eb0c248f5ec320ddcce3a0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d5c26a83a110c406fdeb202d8b2221e4823c6d7c2bac63ef9914aba4c55ad80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5c26a83a110c406fdeb202d8b2221e4823c6d7c2bac63ef9914aba4c55ad80->enter($__internal_0d5c26a83a110c406fdeb202d8b2221e4823c6d7c2bac63ef9914aba4c55ad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0d5c26a83a110c406fdeb202d8b2221e4823c6d7c2bac63ef9914aba4c55ad80->leave($__internal_0d5c26a83a110c406fdeb202d8b2221e4823c6d7c2bac63ef9914aba4c55ad80_prof);

        
        $__internal_83be70d580b2293eefcdc09a1a0c7791fc3caf03eb0c248f5ec320ddcce3a0ed->leave($__internal_83be70d580b2293eefcdc09a1a0c7791fc3caf03eb0c248f5ec320ddcce3a0ed_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d991aab581ec3adb5e450596b9ee06c088510235200dab1b357116da841c5b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d991aab581ec3adb5e450596b9ee06c088510235200dab1b357116da841c5b52->enter($__internal_d991aab581ec3adb5e450596b9ee06c088510235200dab1b357116da841c5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4993755ba333716ac404191d8ffb3c1ee06d2769e2c62d28d3acd3c20f7b4d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4993755ba333716ac404191d8ffb3c1ee06d2769e2c62d28d3acd3c20f7b4d22->enter($__internal_4993755ba333716ac404191d8ffb3c1ee06d2769e2c62d28d3acd3c20f7b4d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4993755ba333716ac404191d8ffb3c1ee06d2769e2c62d28d3acd3c20f7b4d22->leave($__internal_4993755ba333716ac404191d8ffb3c1ee06d2769e2c62d28d3acd3c20f7b4d22_prof);

        
        $__internal_d991aab581ec3adb5e450596b9ee06c088510235200dab1b357116da841c5b52->leave($__internal_d991aab581ec3adb5e450596b9ee06c088510235200dab1b357116da841c5b52_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff7a71764a8a3a3444ead75338db510a766e1d951a3d26ff6fe9aab7900353be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7a71764a8a3a3444ead75338db510a766e1d951a3d26ff6fe9aab7900353be->enter($__internal_ff7a71764a8a3a3444ead75338db510a766e1d951a3d26ff6fe9aab7900353be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f92847587b0e9410432245b1f47020e4266fef1ca0531068100c22abaddddad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f92847587b0e9410432245b1f47020e4266fef1ca0531068100c22abaddddad->enter($__internal_6f92847587b0e9410432245b1f47020e4266fef1ca0531068100c22abaddddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6f92847587b0e9410432245b1f47020e4266fef1ca0531068100c22abaddddad->leave($__internal_6f92847587b0e9410432245b1f47020e4266fef1ca0531068100c22abaddddad_prof);

        
        $__internal_ff7a71764a8a3a3444ead75338db510a766e1d951a3d26ff6fe9aab7900353be->leave($__internal_ff7a71764a8a3a3444ead75338db510a766e1d951a3d26ff6fe9aab7900353be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
