<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7bdd6c03d2e6c95a3f4992e1e21d19d752cdd4841604f9f7baad16498269b077 extends Twig_Template
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
        $__internal_2b238b97d455f7380bf718cab6e6737ec36f77632913e658e7200b6d3cfc3c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b238b97d455f7380bf718cab6e6737ec36f77632913e658e7200b6d3cfc3c93->enter($__internal_2b238b97d455f7380bf718cab6e6737ec36f77632913e658e7200b6d3cfc3c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_edaab63092261a31e77027d454d741e058d28de1c43ac14e85b2b37a73d11f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edaab63092261a31e77027d454d741e058d28de1c43ac14e85b2b37a73d11f7e->enter($__internal_edaab63092261a31e77027d454d741e058d28de1c43ac14e85b2b37a73d11f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2b238b97d455f7380bf718cab6e6737ec36f77632913e658e7200b6d3cfc3c93->leave($__internal_2b238b97d455f7380bf718cab6e6737ec36f77632913e658e7200b6d3cfc3c93_prof);

        
        $__internal_edaab63092261a31e77027d454d741e058d28de1c43ac14e85b2b37a73d11f7e->leave($__internal_edaab63092261a31e77027d454d741e058d28de1c43ac14e85b2b37a73d11f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
