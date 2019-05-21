<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_80c39d028a66c60b2eb025d2475c7f6103c430789f292c252c40196622d52739 extends Twig_Template
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
        $__internal_e9bb5397f8fc45b710200eba4253d8697427d69c61f34b1ffbd8e12c4511fd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bb5397f8fc45b710200eba4253d8697427d69c61f34b1ffbd8e12c4511fd9a->enter($__internal_e9bb5397f8fc45b710200eba4253d8697427d69c61f34b1ffbd8e12c4511fd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0ab737752634fc8f08b6bdd2cd198911c254815d8adcdb12a70370d511bd428d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab737752634fc8f08b6bdd2cd198911c254815d8adcdb12a70370d511bd428d->enter($__internal_0ab737752634fc8f08b6bdd2cd198911c254815d8adcdb12a70370d511bd428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e9bb5397f8fc45b710200eba4253d8697427d69c61f34b1ffbd8e12c4511fd9a->leave($__internal_e9bb5397f8fc45b710200eba4253d8697427d69c61f34b1ffbd8e12c4511fd9a_prof);

        
        $__internal_0ab737752634fc8f08b6bdd2cd198911c254815d8adcdb12a70370d511bd428d->leave($__internal_0ab737752634fc8f08b6bdd2cd198911c254815d8adcdb12a70370d511bd428d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
