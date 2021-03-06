<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6367237b09f825be9d295eb881eaf4b3b2ac7a640f10016f0e30910b4b0da371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65db00feb3a4bf25d65f7bf7d7ad7022fa7180da47bf69309926bcc24a7363c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65db00feb3a4bf25d65f7bf7d7ad7022fa7180da47bf69309926bcc24a7363c4->enter($__internal_65db00feb3a4bf25d65f7bf7d7ad7022fa7180da47bf69309926bcc24a7363c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_dd5a0b643eb967039b85c97fb345586d1775b40ab793c6fcbe3bbd11257f51ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5a0b643eb967039b85c97fb345586d1775b40ab793c6fcbe3bbd11257f51ff->enter($__internal_dd5a0b643eb967039b85c97fb345586d1775b40ab793c6fcbe3bbd11257f51ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_65db00feb3a4bf25d65f7bf7d7ad7022fa7180da47bf69309926bcc24a7363c4->leave($__internal_65db00feb3a4bf25d65f7bf7d7ad7022fa7180da47bf69309926bcc24a7363c4_prof);

        
        $__internal_dd5a0b643eb967039b85c97fb345586d1775b40ab793c6fcbe3bbd11257f51ff->leave($__internal_dd5a0b643eb967039b85c97fb345586d1775b40ab793c6fcbe3bbd11257f51ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e210a48b151e1841bd880d57bfbf93f43b27c972ca2c159c0e44494303d44b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e210a48b151e1841bd880d57bfbf93f43b27c972ca2c159c0e44494303d44b9e->enter($__internal_e210a48b151e1841bd880d57bfbf93f43b27c972ca2c159c0e44494303d44b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a82fb3c25c26bb2073665de2063580c08c8e12bd98620033d3aca9c4e4fbd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a82fb3c25c26bb2073665de2063580c08c8e12bd98620033d3aca9c4e4fbd16->enter($__internal_6a82fb3c25c26bb2073665de2063580c08c8e12bd98620033d3aca9c4e4fbd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6a82fb3c25c26bb2073665de2063580c08c8e12bd98620033d3aca9c4e4fbd16->leave($__internal_6a82fb3c25c26bb2073665de2063580c08c8e12bd98620033d3aca9c4e4fbd16_prof);

        
        $__internal_e210a48b151e1841bd880d57bfbf93f43b27c972ca2c159c0e44494303d44b9e->leave($__internal_e210a48b151e1841bd880d57bfbf93f43b27c972ca2c159c0e44494303d44b9e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f3470f07838b4e0dff1cfdcca2bb5747c0b67a70f0740e158baf232a97e4969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3470f07838b4e0dff1cfdcca2bb5747c0b67a70f0740e158baf232a97e4969->enter($__internal_5f3470f07838b4e0dff1cfdcca2bb5747c0b67a70f0740e158baf232a97e4969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1971d42b7ebf4f25abcea00c3dd2968b5ec6675a7408d5ffaa8cfcc07b8b553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1971d42b7ebf4f25abcea00c3dd2968b5ec6675a7408d5ffaa8cfcc07b8b553->enter($__internal_b1971d42b7ebf4f25abcea00c3dd2968b5ec6675a7408d5ffaa8cfcc07b8b553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b1971d42b7ebf4f25abcea00c3dd2968b5ec6675a7408d5ffaa8cfcc07b8b553->leave($__internal_b1971d42b7ebf4f25abcea00c3dd2968b5ec6675a7408d5ffaa8cfcc07b8b553_prof);

        
        $__internal_5f3470f07838b4e0dff1cfdcca2bb5747c0b67a70f0740e158baf232a97e4969->leave($__internal_5f3470f07838b4e0dff1cfdcca2bb5747c0b67a70f0740e158baf232a97e4969_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd3bfea1c29facbfb21b22fffe32734bfdca4f9405c3f64a62b75032a3288225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3bfea1c29facbfb21b22fffe32734bfdca4f9405c3f64a62b75032a3288225->enter($__internal_dd3bfea1c29facbfb21b22fffe32734bfdca4f9405c3f64a62b75032a3288225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17068a05547459483ee247b74900d91198faf7516b8a5586fabd6ef34d8a8e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17068a05547459483ee247b74900d91198faf7516b8a5586fabd6ef34d8a8e75->enter($__internal_17068a05547459483ee247b74900d91198faf7516b8a5586fabd6ef34d8a8e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_17068a05547459483ee247b74900d91198faf7516b8a5586fabd6ef34d8a8e75->leave($__internal_17068a05547459483ee247b74900d91198faf7516b8a5586fabd6ef34d8a8e75_prof);

        
        $__internal_dd3bfea1c29facbfb21b22fffe32734bfdca4f9405c3f64a62b75032a3288225->leave($__internal_dd3bfea1c29facbfb21b22fffe32734bfdca4f9405c3f64a62b75032a3288225_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
